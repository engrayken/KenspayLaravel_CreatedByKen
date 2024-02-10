<?php
namespace App\Repositories\Billings;

use App\Enums\AccountEnums;
use App\Enums\ProductEnums;
use App\Enums\SiteEnums;
use App\Interfaces\Billings\IBillingRepository;
use App\Models\Site\Epin;
use App\Models\Site\EpinLimit;
use App\Models\Users\Transaction;
use App\Models\Users\User;

class BillingRepository implements IBillingRepository
{
 public function BalanceCharge(User $user, $monthlyCharge)
{
        $datePayFee=date('Y-m');
        $servicefee = $user->ServiceFee()->where('created_at','like',"%{$datePayFee}%")->first();
        if(!$servicefee && $user->pinEnable=='on')
        {
        $charge = $user->pinBalance - $monthlyCharge;
        $update = $user->update(["pinBalance"=>$charge]);
        if($update){
           $insert = $user->ServiceFee()->create([
            "userName"=>$user->name,
            "feeId"=>time(),
            "amount"=>$monthlyCharge,
            ]);

           $insert = $user->Transaction()->create([
            "userName"=>$user->name,
            "transId"=>time(),
            "network"=>'Monthly Charge',
            "amount"=>$monthlyCharge,
            "deno" =>$monthlyCharge,
            "phone"=>$user->phone,
            "balBefore"=>$user->pinBalance,
            "balAfter"=> $user->pinBalance - $monthlyCharge,
            "status" =>AccountEnums::$activeStatus,
            ]);
            return false;
        }
        }
            return true;

}

public function checkBal($balance, $total_prod, $tranid)
{
$response = Transaction::where('transId',$tranid)->first();
if($balance<$total_prod)
return failedResponse(SiteEnums::$lowWallet);
elseif($response)
return failedResponse(SiteEnums::$tranExit);
return SiteEnums::$successReponseCode;


}

public function createTransaction(User $user, $transaction)
{
    $transId = $user->transaction()->create($transaction);
    return $transId->id;
}

public function checkPin(User $user, $net, $deno, $quantity)
{
$countUser = SiteEnums::$defaultUser; //defualt user if none below exist from database
$balance = SiteEnums::$defaultUserBalance;  //defualt user balanceif none below exist from database

$checkPin = Epin::where(['net'=>$net,"deno"=>$deno])->count(); //count of network pins eg mtn

$limite = EpinLimit::where(["net"=>$net, "deno"=>$deno])->first();
if($limite) //check if limit have item
{
    $time = date('Y-m-d'); //seach time use from transaction in database
    $Tquan = $user->Transaction()->where(['network'=>$net.' pin', 'deno'=>$deno])
            ->where('created_at','like',"%{$time}%")->sum('quantity');
    // return failedResponse($Tquan);
    $balance = $limite->balance; //assign limit balance variable

if($limite->limit<=10) //if limit exist and less than 10 let it display
{
    $countUser = User::where("pinBalance", '>', $balance)->count(); //count of all user which balance is morethan eg 1000
    $allowedPrint = $checkPin/$countUser; // divide count of network pin to count of all user which balance is morethan eg 1000
}

if($limite->limit>10) //if limit exist and greater than 10 let it display
{
$allowedPrint = $limite->limit; // lets use the pinLimit to grant user
}

if($Tquan>=$allowedPrint) //check if the user as make transaction greater or eqauto the print limit
return failedResponse(SiteEnums::$traReach);


}
else
{
$allowedPrint = $checkPin/$countUser; // divide count of network pin to count of all user which balance is morethan eg 1000
// return failedResponse($allowedPrint);

}

if($allowedPrint<1) // now check if the allowedPrint is lessthan 1 if yes
$allowedPrint = str_replace(['0','.'],['',''],$allowedPrint);// then remove the 0.1 or any number that have zero and point

if($checkPin<$quantity)// check if the count of network pin is lessthan quantity
return failedResponse(SiteEnums::$lowPins);

if($allowedPrint<$quantity)// check if the allowedPrint quantity is lessthan quantity
return failedResponse('Sorry you can only print '.$allowedPrint.' Quantity  of '.$net.' pins today');

return SiteEnums::$successReponseCode;

}

}
