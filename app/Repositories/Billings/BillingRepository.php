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
        $update = $user;
        $update->pinBalance -=$monthlyCharge;
        $update = $update->save();
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


public function paysInit(User $user, $request)
{
        if($request->insert=='new')
        $user->Transaction()->create([
            'userName' => $user->name,
            'transId' => $request->txnid,
            'network' => 'Psk Fund Wallet Init',
            'amount' => $request->amount,
            'deno' => $request->amount,
            'phone' => $user->phone,
            'balBefore' => $user->pinBalance,
            'balAfter' => $user->pinBalance,
            'status' => SiteEnums::$pendingStatus,
            'rstatus' => 'init'
    ]);

     if($request->insert=='close')
    // $cre= $user->pinBalance+$request->amount;
    $update = $user->Transaction()->where('transId',$request->txnid)->update(['status'=>'0','rstatus'=>'close','network'=>'Psk Fund Wallet']);


}

   public function fundv(User $user, $id, $check)
    {
$checkItem2=session()->get('check');
$checkItem=str_replace(array('f','o','z'),array('/','.',':'),$check);

$update = $user->Transaction()->where(['transId'=>$id])->first();
if($update==false)
return ['code'=>'400'];

if($update->status!='' && $update->status!=0)
return ['code'=>'401'];


  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$id,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer ".config('services.paystack.secret_key'),
      "Cache-Control: no-cache",
    ),
  ));

//  $response='{"status":true,"message":"Verification successful","data":{"id":3372269676,"domain":"test","status":"success","reference":"1702547775","receipt_number":null,"amount":10000,"message":null,"gateway_response":"Successful","paid_at":"2023-12-14T09:57:34.000Z","created_at":"2023-12-14T09:57:27.000Z","channel":"card","currency":"NGN","ip_address":"102.88.33.75","metadata":{"custom_fields":[{"display_name":"Ayogu Kenneth","value":"1702547775"}],"referrer":"http://127.0.0.1:8000/user/wallet"},"log":{"start_time":1702547847,"time_spent":7,"attempts":1,"errors":0,"success":true,"mobile":false,"input":[],"history":[{"type":"action","message":"Attempted to pay with card","time":7},{"type":"success","message":"Successfully paid with card","time":7}]},"fees":150,"fees_split":null,"authorization":{"authorization_code":"AUTH_sbhokcd2pl","bin":"408408","last4":"4081","exp_month":"12","exp_year":"2030","channel":"card","card_type":"visa ","bank":"TEST BANK","country_code":"NG","brand":"visa","reusable":true,"signature":"SIG_k5itI2J13qoBBUNcEeDY","account_name":null,"receiver_bank_account_number":null,"receiver_bank":null},"customer":{"id":6001358,"first_name":"","last_name":"","email":"kennethayogu@gmail.com","customer_code":"CUS_e3n67bcmt3rmuhd","phone":"","metadata":null,"risk_action":"default","international_format_phone":null},"plan":null,"split":{},"order_id":null,"paidAt":"2023-12-14T09:57:34.000Z","createdAt":"2023-12-14T09:57:27.000Z","requested_amount":10000,"pos_transaction_data":null,"source":null,"fees_breakdown":null,"transaction_date":"2023-12-14T09:57:27.000Z","plan_object":{},"subaccount":{}}}';
 $response = curl_exec($curl);
  $err = curl_error($curl);
  $decode=json_decode($response);

    $status=$decode->data->status;
    $total=$decode->data->amount/100;
	$paid_at=substr($decode->data->paid_at, 0, 10);
    $link=$decode->data->metadata->referrer;
    $trans_id=$decode->data->reference;

  if($checkItem2!=$decode->data->metadata->referrer && $decode->status!=true)
    return ['code'=>'402'];

    if($update->transId!=$id && $update->status==0 && $decode->status!=true)
    return ['code'=>'403'];

    $cre= $user->pinBalance+$total;
    $update = Transaction::where('transId',$trans_id)->update(['balBefore'=>$user->pinBalance,'balAfter'=>$cre,'status'=>'1','rstatus'=>$response,'network'=>'Psk Fund Wallet']);
    $dep= User::where('id',$user->id)->update(['pinBalance'=>$cre]);
    return ['code'=>'s0c','total'=>$total];

    }

}


