<?php

namespace App\Http\Controllers\User\User;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Users\Mypin;
use App\Models\Product\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Models\Users\User;
use App\Models\Users\Transaction;
use App\Models\Users\PhoneBook;
use App\Models\Site\Setting;
use App\Models\Site\Servicefee;
use App\Models\Users\UserEmailVerify;
use App\CustomClass\BalanceCharge;
use App\CustomClass\Kensend;

class UserController extends Controller
{



    public function index()
    {
        if(Session()->get('loginid')){

            // return Session()->get('loginid');
        $ids= session()->get('loginid');
       $user= User::where('id',$ids)->first();
        $settings = Setting::where('id','=','1')->first();


        $servicefeef= new BalanceCharge();
        $servicefeef->servicefeeCheck();
        return view('user.index', compact('user','settings'));

    }
    else{
        return  redirect('login')->with('failed','You Must Login First');

    }

          return  redirect('login')->with('failed','You Must Login First');



    }

    public function SendVerify()
    {
        $sendMaill= new KenSend();
        $insertV= new UserEmailVerify();
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
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
        return   $sendMaill->sendMail($subject, view('accessory.emv',
        compact('verCode')), $user->email);

        return back()->with('success','email verification link sent successfully, check your mail or spam box');

    }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function account()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $title='Profile Setting';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.account', compact('user','title','settings'));



    }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function updateAccount(Request $request)
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();

        $request->validate([
            'name'=>'required|string',
            'bName'=>'required|string|min:3|max:20',
        ],
        [
            'name'=>['required'=>'Full name must not be empty',
            'string'=>'Full name must not contain any specail characters'],

            'bName'=>['required'=>'Business name must not be empty',
            'string'=>'Business name must not contain any specail characters'],

        ]
    );

    $update= User::where('id',$user->id)->update(['name'=>$request->name,'bName'=>$request->bName]);
    if(!$update)
    {
        return back()->with('failed','Couldnt Update details');
    }
    return back()->with('success','Account Successfully Updated');

    }

          return  redirect('login')->with('failed','You Must Login First');

    }

     public function setPin(Request $request)
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
  $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
            if($request->setPin=='on')
            {
        if($user->pinBalance>999){
            $total=$user->pinBalance - 1000;
    $update= User::where('id',$user->id)->update(['pinEnable'=>'on','pinBalance'=>$total]);
    if($update)
    {
                    $insertt = new Transaction();
            $insertt->userId = $user->id;
            $insertt->userName = $user->name;
            $insertt->transId =time();
            $insertt->network = 'Enable Pins';
            $insertt->amount = '1000';
            $insertt->deno = '1000';
            $insertt->phone = $user->phone;
            $insertt->balBefore = $user->pinBalance;
            $insertt->balAfter = $total;
            $insertt->status = '1';
            $insertt->save();
        // return back()->with('failed','Couldnt Update details');
                  $response = array(
              "code" =>"s0c","message"=>"success"
                );

             return json_encode($response);
            }
        } else{

                     $response = array(
              "code" =>"failed","message"=>"Pin balance too low"
                );

             return json_encode($response);
        }
    }


            if($request->setPin=='off')
            {

    $update= User::where('id',$user->id)->update(['pinEnable'=>'off']);
       $response = array(
              "code" =>"s0c","message"=>"success"
                );

             return json_encode($response);
                }

    }

          return  redirect('login')->with('failed','You Must Login First');
    }




    public function wallet()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $title='Credit Wallet';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
            session()->put('check', isset($_SERVER['HTTPS']) && $_SERVER["HTTPS"] === "on" ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        return view('user.wallet', compact('user','title','settings'));



    }

          return  redirect('login')->with('failed','You Must Login First');

    }

 public function paysInit(Request $request)
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $title='Credit Wallet';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
            if($request->insert=='new')
            {
            $insertt = new Transaction();
            $insertt->userId = $user->id;
            $insertt->userName = $user->name;
            $insertt->transId =$request->txnid;
            $insertt->network = 'Psk Fund Wallet Init';
            $insertt->amount = $request->amount;
            $insertt->deno = $request->amount;
            $insertt->phone = $user->phone;
            $insertt->balBefore=$user->pinBalance;
            $insertt->balAfter=$user->pinBalance;
            $insertt->status = '0';
            $insertt->rstatus = 'init';
            $insertt->save();
                }

 if($request->insert=='close')
            {

    $cre= $user->pinBalance+$request->amount;
    $update = Transaction::where('transId',$request->txnid)->update(['status'=>'0','rstatus'=>'close','network'=>'Psk Fund Wallet']);


            }


    }

          return  redirect('login')->with('failed','You Must Login First');

    }


      public function fundv($id,$check)
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $title='Credit Wallet';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
$checkItem2=session()->get('check');
$checkItem=str_replace(array('f','o','z'),array('/','.',':'),$check);

$update = Transaction::where(['transId'=>$id])->first();

if($update==false)
{
    return redirect('user/wallet')->with('failed','Failed Trying to bypass transaction');

}

if($update->status!='' && $update->status!=0)
{
    return back()->with('failed','Account already funded');
}

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
      "Authorization: Bearer ".$settings->payStackPrivate,
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
{
    return back()->with('failed','Somethings went wrong');
}
  if($update->transId!=$id && $update->status==0 && $decode->status!=true)
{
    return back()->with('failed','Somethings went wrong');
}

    $cre= $user->pinBalance+$total;
    $update = Transaction::where('transId',$trans_id)->update(['balBefore'=>$user->pinBalance,'balAfter'=>$cre,'status'=>'1','rstatus'=>$response,'network'=>'Psk Fund Wallet']);
    $dep= User::where('id',$user->id)->update(['pinBalance'=>$cre]);
    return  back()->with('success','Account Credited with N'.$total.' successful');


    }

          return  redirect('login')->with('failed','You Must Login First');

    }

 public function instant()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $title='Credit Wallet';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();

        $str = $settings->monifyProductCode.':'.$settings->monifySecret;
        $b64 = base64_encode($str);
        $contractCode=$settings->monifyContractCode;

//start login to monify
if ($b64 === false) {
  echo 'Invalid input';
} else {
//  echo $b64; //-> "SGVsbG8gV29ybGQhIQ=="

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://sandbox.monnify.com/api/v1/auth/login/");
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

if($user->bankName==0 && $user->customerName==0 && $user->customerNumber==0)
{


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://sandbox.monnify.com/api/v1/bank-transfer/reserved-accounts");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, '{
  "accountName": "'.$user->name.'",
  "accountReference": "'.$user->reference.'",
  "currencyCode": "NGN",
  "contractCode": "'.$contractCode.'",
  "customerName": "'.$user->name.'",
  "customerEmail": "'.$user->email.'"}');

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

//  $ref=$row['token'];


$update= User::where('id',$user->id)->update(['bankName'=>$bankName,'customerName'=>$customerName,'customerNumber'=>$accountNumber,'reference'=>$user->reference]);


if($update)
{
return back()->with('success','Account Generated Successful');

}


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

          return  redirect('login')->with('failed','You Must Login First');

    }


    public function transaction()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();

        $post= Transaction::where('userId',$ids)->orderBy('created_at','desc')->paginate(6);

        $title='Transaction History';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.transaction', compact('settings','post','user','title'));



    }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function transactionv(Request $Request)
    {

        if(Session()->get('loginid')){

            $ids= session()->get('loginid');


        $post= Transaction::where(['userId'=>$ids])
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

        }

          return  redirect('login')->with('failed','You Must Login First');

    }


    public function transactionview($transId)
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();

        $post= Transaction::where('transId',$transId)->first();

        $title='Transaction History';
        $epin= Mypin::where('transId',$transId)->first();

        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.transactionv', compact('post','user','epin','title','settings'));



    }
}


    public function print(Request $request)
    {
        $request->validate([
            'transId'=>'required|string',
            'per'=>'required',
        ]);
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();

        $epin= Mypin::where('transId',$request->transId)->get();
        $per=$request->per;

        $title='Print History';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.print', compact('epin','user','title','per','settings'));



    }
}


public function phonebook(Request $Request)
    {
        if(Session()->get('loginid')){

        $network= PhoneBook::query()->where('userId', Session()->get('loginid'))->get();



            foreach ($network as $value) {
                $check[]=  array('cname'=>$value->cname,'phone'=>$value->phone);
            }

             return json_encode($check);

        }

          return  redirect('login')->with('failed','You Must Login First');

    }

}
