<?php
namespace App\Repositories\Billings;

use App\Enums\AccountEnums;
use App\Enums\ProductEnums;
use App\Enums\SiteEnums;
use App\Interfaces\Billings\IBillingRepository;
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
     $user->transaction()->create($transaction);

}


}
