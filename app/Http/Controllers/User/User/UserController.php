<?php

namespace App\Http\Controllers\User\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\User;
use App\Models\Users\Transaction;
use App\Models\Site\Setting;
use App\Models\Users\UserEmailVerify;
use App\Enums\AccountEnums;
use App\Enums\SiteEnums;
use App\Http\Requests\User\UserRequest;
use App\Interfaces\Billings\IBillingRepository;
use App\Interfaces\User\IUserRepository;
use App\Mail\PHPMailler;
use App\Services\Apis\Monnify\CustomTransactionHashUtil;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

private IBillingRepository $BserviceRepository;
private IUserRepository $UserviceRepository;
private CustomTransactionHashUtil $CustomTransactionHashUtil;
private PHPMailler $MailService;

public function __construct(IBillingRepository $serviceRepo, IUserRepository $UserviceRepo,
 PHPMailler $MailServiceRepo, CustomTransactionHashUtil $CustomTransactionHashUtilRepo) {
    $this->BserviceRepository = $serviceRepo;
    $this->UserviceRepository = $UserviceRepo;
    $this->MailService = $MailServiceRepo;
    $this->CustomTransactionHashUtil = $CustomTransactionHashUtilRepo;
}

    public function index()
    {

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.index', compact('user','settings'));


    }

    public function SendVerify()
    {
        $insertV= new UserEmailVerify();
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $ver= UserEmailVerify::where('userId',$ids)->first();


        if($user->activate==1)
        {
            return back()->with('failed','email already verified');

           }

        if(isset($ver->userEmail) == $user->email)
        {
            return back()->with('failed','email verification already sent, please check your mail or spam box');

           }

           $verCode = 'ver'.time();
           $subject ='Account Verification';

           $insertV->userId = $user->id;
           $insertV->userEmail = $user->email;
           $insertV->token = $verCode;
           $saveInsert = $insertV->save();

           $updateuser = User::where('id','=',$user->id)->update(['token'=>$verCode]);

           if(!$saveInsert && !$updateuser)
           {
        return back()->with('failed','could not send verification email');
            }

           return view('accessory.emv', compact('verCode'));
        return   $this->MailService->sendMail($subject, view('accessory.emv',
        compact('verCode')), $user->email);

        return back()->with('success','email verification link sent successfully, check your mail or spam box');


    }

    public function account()
    {

        $title=AccountEnums::$prof;
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.account', compact('user','title','settings'));
    }

    public function updateAccount(UserRequest $request)
    {
      $updateData = $request->validated();
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
       $update = $user->update($updateData);

    if(!$update)
    {
        return back()->with('failed','Couldnt Update details');
    }
    return back()->with('success','Account Successfully Updated');


    }


    public function updatePass(Request $request)
    {
        $val = ['class_subjects'=> ['required', 'regex:/[!@#$%^&*(),.?\":{}|<>]/','min:8']];
    $request->validate([
    "old_password" => "required",
    "new_password" => $val['class_subjects'],
    ],
    [
        "new_password.regex"=>"Your new password must contain one of this special characters eg !@#$%^&"
    ]
);

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        // $oldPassword = Hash::make($request->old-password);
        if(!Hash::check($request->old_password, $user->password))
        return back()->with('failed','Old Password not matched');
        $newPassword = Hash::make($request->new_password);
        $update = $user->update(["password"=>$newPassword]);
        if(!$update)
        return back()->with('failed','Couldnt Update Password');
        return back()->with('success','Account Successfully Updated');


    }

     public function setPin(Request $request)
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        return $this->UserviceRepository->setPin($user, $request, $settings->monthlyCharge);



    }





    public function wallet()
    {

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        $title='Credit Wallet';
            session()->put('check', isset($_SERVER['HTTPS']) && $_SERVER["HTTPS"] === "on" ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        return view('user.wallet', compact('user','title','settings'));


    }

 public function paysInit(Request $request)
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $title='Credit Wallet';
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);

     $this->BserviceRepository->paysInit($user, $request);


    }


      public function fundv($id,$check)
    {

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);
      $response =  $this->BserviceRepository->fundv($user, $id, $check);
        if($response['code']==400)
return redirect('user/wallet')->with('failed','Failed Trying to bypass transaction');
        if($response['code']==401)
return back()->with('failed','Account already funded');

        if($response['code']==402)
return back()->with('failed','Somethings went wrong');

        if($response['code']==403)
return back()->with('failed','Somethings went wrong');

        if($response['code']=='s0c')
return  back()->with('success','Account Credited with N'.$response["total"].' successful');

    }

 public function instant()
    {

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        $title='Credit Wallet';
        $str = config('services.monify.public_key').':'.config('services.monify.secret_key');
        $b64 = base64_encode($str);
        $contractCode=config('services.monify.contractCode');

    if(!$user->nin || !$user->bvn)
return redirect('user/wallet')->with('failed','error occured, Please insert your NIN or BVN in your profile settings');

//start login to monify
if ($b64 === false) {
  echo 'Invalid input';
} else {
//  echo $b64; //-> "SGVsbG8gV29ybGQhIQ=="

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, config('services.monify.URL')."/api/v1/auth/login/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Authorization: Basic $b64"
));

 $response = curl_exec($ch);
curl_close($ch);



$resp=json_decode($response);

if($resp->requestSuccessful=='true')
{
$Bearer= $resp->responseBody->accessToken;

//start setup açcount

if($user->bankName=='' && $user->customerName=='' && $user->customerNumber=='')
{

 $json = json_encode([
"accountName"=>$user->name,
  "accountReference"=>$user->reference,
  "currencyCode"=>"NGN",
  "contractCode"=>$contractCode,
  "customerName"=>$user->name,
  "bvn"=>$user->bvn,
  "nin"=>$user->nin,
  "customerEmail"=>$user->email,
]);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, config('services.monify.URL')."/api/v1/bank-transfer/reserved-accounts");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS,
$json
);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Authorization: Bearer $Bearer"
));

$response = curl_exec($ch);
curl_close($ch);
$res=json_decode($response);
//  dd($response);


if(isset($res->requestSuccessful)=='true')
{
$customerName=htmlspecialchars($res->responseBody->customerName);
$accountNumber=htmlspecialchars($res->responseBody->accountNumber);
$bankName=htmlspecialchars($res->responseBody->bankName);
$update = User::where('id',$user->id)->update(['bankName'=>$bankName,'customerName'=>$customerName,'customerNumber'=>$accountNumber,'reference'=>$user->reference]);
if($update)
return back()->with('success','Account Generated Successful');

} else {
    return back()->with('failed',$res->responseMessage);
}

}

else {
return back()->with('failed','error occure while creating account');
}// end setup

}

} // end login to monify


    }


    public function transaction()
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);

        $post= Transaction::where('userId',$ids)->orderBy('created_at','desc')->paginate(6);

        $title='Transaction History';

        return view('user.transaction', compact('settings','post','user','title'));


    }

    public function transactionv(Request $Request)
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);

        $post= $user->Transaction()
        ->where('transId','like',"%{$Request->transId}%")
        ->where('network','like',"%{$Request->serviceName}%")
        ->where('status','like',"%{$Request->status}%")
        ->where('created_at','like',"%{$Request->year}%")->orderBy('created_at','desc')
        ->paginate(20);

            foreach($post as $item)
            {
                   $response[]= array('id'=>$item->id,'phone'=>$item->phone,'service'=> $item->network,'status'=>$item->status ? "<span class='text-success'>success</span>" : "<span class='text-danger'>failed</span>" ,'amount'=>number_format($item->amount),'date'=>date('d M, Y, h:iA', strtotime($item->created_at)),'transid'=>$item->transId,'quantity'=>$item->quantity,'div'=>$item->status ? '<div class="data-state data-state-approved">' : '<div class="data-state data-state-pending">');

            }


  return json_encode($response);
            //  return response()->json($response);

    }


    public function transactionview($transId)
    {

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);

        $post= $user->Transaction()->where('transId',$transId)->first();

        $title='Transaction History';
        $epin= $user->Mypin()->where('transId',$transId)->first();

        return view('user.transactionv', compact('post','user','epin','title','settings'));


}


    public function print(Request $request)
    {
        $request->validate([
            'transId'=>'required|string',
            'per'=>'required',
        ]);

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->BserviceRepository->BalanceCharge($user, $settings->monthlyCharge);


        $epin= $user->Mypin()->where('transId',$request->transId)->get();
        $per=$request->per;
        $pinAlp = SiteEnums::$pinAlp;
        $pinNum = SiteEnums::$pinNum;
        $title='Print History';
        return view('user.print', compact('epin','user','title','per','settings','pinAlp','pinNum'));

}


public function phonebook(Request $Request)
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
       $network= $user->PhoneBook()->get();
            foreach ($network as $value) {
                $check[]=  array('cname'=>$value->cname,'phone'=>$value->phone);
            }
             return json_encode($check);

        }

public function reserveWebhook(Request $request)
{
$settings = Setting::findOrfail(SiteEnums::$settings);

    $json_string = file_get_contents('php://input');
//    $json_string ='{"eventData":{"product":{"reference":"1707819474","type":"RESERVED_ACCOUNT"},"transactionReference":"MNFY|46|20240220045657|000665","paymentReference":"MNFY|46|20240220045657|000665","paidOn":"2024-02-20 04:56:58.0","paymentDescription":"Ayo","metaData":{},"paymentSourceInformation":[{"bankCode":"","amountPaid":100,"accountName":"Monnify Limited","sessionId":"rI25PDxyXv8CZx7NcRrmbhWX4EhSnbUw","accountNumber":"0065432190"}],"destinationAccountInformation":{"bankCode":"035","bankName":"Wema bank","accountNumber":"3000304876"},"amountPaid":100,"totalPayable":100,"cardDetails":{},"paymentMethod":"ACCOUNT_TRANSFER","currency":"NGN","settlementAmount":"90.00","paymentStatus":"PAID","customer":{"name":"Kenspay Technology","email":"kennethayogu@gmail.com"}},"eventType":"SUCCESSFUL_TRANSACTION"}';
    $DEFAULT_MERCHANT_CLIENT_SECRET = config('services.monify.secret_key');
    $computedHash = $this->CustomTransactionHashUtil->computeSHA512TransactionHash($json_string, $DEFAULT_MERCHANT_CLIENT_SECRET);
    $signature = $request->header('HTTP_MONNIFY_SIGNATURE');
        if( $computedHash != $signature)
    return die("invalid Hash");
   $jsonRequest = json_decode($json_string, true);
   $str = config('services.monify.public_key').':'.config('services.monify.secret_key');
    $b64 = base64_encode($str);
    $transactionReferenceR = $jsonRequest['eventData']['transactionReference'];
    $trans = Transaction::where('transId',$transactionReferenceR)->first();
    if($trans)
    return die('user has been credited before');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, config('services.monify.URL')."/api/v1/auth/login");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Authorization: Basic $b64"
));
 $response = curl_exec($ch);
curl_close($ch);

$resp=json_decode($response);
if($resp->requestSuccessful!='true')
return die('couldnt complete Basic Authorization ');

$Bearer= $resp->responseBody->accessToken;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, config('services.monify.URL')."/api/v2/transactions/". rawurlencode($transactionReferenceR));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json",
  "Authorization: Bearer $Bearer"
));

 $responseR = curl_exec($ch);
curl_close($ch);
 $response =json_decode($responseR, true);
if($response['requestSuccessful']!=true || $response['responseMessage']!='success')
return die('couldnt complete Bearer Authorization ');
if($response['responseBody']['transactionReference']!=$transactionReferenceR || $response['requestSuccessful']!=true || $response['responseMessage']!='success' || $jsonRequest['eventData']['paymentStatus']!='PAID' || $response['responseBody']['paymentStatus']!='PAID' || $jsonRequest['eventData']['customer']['email']!=$response['responseBody']['customer']['email'])
return die('transactionReference is not valid');

$transId = $response['responseBody']['transactionReference'];
$email = $response['responseBody']['customer']['email'];
$amountPaid = $response['responseBody']['amountPaid'];
$charge = $amountPaid - $settings->bankFee;
$user = User::where('email',$email)->first();
$user->dataBalance +=$charge;
$save = $user->save();
if($save)
$user->Transaction()->create([
"transId"=>$transId,
"userName"=>$user->name,
"network"=>'Fund Wallet',
"amount"=>$charge,
"deno"=>$amountPaid,
"phone"=>$user->phone,
"balBefore"=>$user->dataBalance,
"balAfter"=>$user->dataBalance+$charge,
"status"=>SiteEnums::$successStatus,
"rstatus"=>$responseR,
]);

  return Response('OK', 200);

}





}
