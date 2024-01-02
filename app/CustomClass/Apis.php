<?php

namespace App\CustomClass;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\SubProduct;
use App\Models\Transaction;
use App\Models\Mypin;
use App\Models\Api;
use Illuminate\Contracts\Session\Session;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;

class Apis
{

        private $network;
        private $email;
        private $phone;
        private $amount;
        private $quantity;
        private $transid;
        private $balance;
        private $fetchUserId;
        private $userName;
        private $credit;
        private $debit;
        private $variation;
        private $deno;

        public function airtime($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $subProdAmount_variation, $amount,$transid, $subProdTitle,$amountCharge)
        {   
            $this->balance=$balance;
            $this->fetchUserId=$fetchUserId;
            $this->userName=$userName;
            $this->credit=$cre;
            $this->debit=$dep;
            $this->network=$network;
            $this->phone=$phone;
            $this->variation=$subProdAmount_variation;
            $this->amount=$amount;
            $this->transid=$transid;
            $server= Api::where(['name'=>'smartrecharge.ng','status'=>1])->first();
            if($server){

            

            $callback='https://kenspay.com.ng/call/index.php';
            
            
            if($network=='mtn')
            {
            $product_code='mtn_custom';
            // return $amount;
            }
            else if($network=='airtel')
            {
            $product_code='airtel_custom';
            } else if($network=='glo')
            {
            $product_code='glo_custom';
            } else if($network=='9mobile')
            {
            $product_code='9mobile_custom';
            }
            
            

$data = array(

'api_key'=>$server->password,

  'product_code'=> $product_code, //integer
      
    'amount' =>  $amountCharge, 
  
  'phone' => $phone, //integer

  'callback' => $callback, // unique for every transaction
);
$curl       = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL =>$server->url,           
	
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
     CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => "POST",
     CURLOPT_POSTFIELDS => $data,
));

if($curl)
{
    $status1=curl_exec ($curl); 

    $status1='{
        "server_message": "Transaction Successful",
        "status": true,
        "error_code": "1986",
        "data": {
          "recharge_id": 108673,
          "amount_charged": "100.00",
          "after_balance": "6750.00",
          "text_status": "COMPLETED",
          "bonus_earned": "0.00"
        },
        "text_status": "COMPLETED"
      }';

    // $status1='{"server_message":"Insufficient Credit, Please fund your account and try again","status":false,"error_code":"1983","data":null,"text_status":"FAILED"}';

$rstatus=$status1;
$vt_resp=json_decode($status1);


if($vt_resp->status==true)
{
    $status='1';
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'requestId'=>$vt_resp->data->recharge_id]);
    return true;
}

else if($status1=='')
{
    $status='1';
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'requestId'=>$vt_resp->data->recharge_id]);
    return true;
    
}

$status='0';

//mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
$updateU = User::where('id',$this->fetchUserId)->update(['dataBalance'=>$this->credit]);
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
return 'Failed: External Error, Service Temporary Not Available';



}
       
        }
        $status='0';

        //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
        $updateU = User::where('id',$this->fetchUserId)->update(['dataBalance'=>$this->credit]);
        $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>'Failed: Internal Error, Api Off','balAfter'=>$this->credit]);
         return 'Failed: Internal Error, Service Off';

        }


        public function sme($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $subProdAmount_variation, $amount,$transid)
        {
            $this->balance=$balance;
            $this->fetchUserId=$fetchUserId;
            $this->userName=$userName;
            $this->credit=$cre;
            $this->debit=$dep;
            $this->network=$network;
            $this->phone=$phone;
            $this->variation=$subProdAmount_variation;
            $this->amount=$amount;
            $this->transid=$transid;

            $server= Api::where(['name'=>'mobileairtimeng','status'=>1])->first();
            if($server){

if($this->network=="mtn-sme") {
$host=$server->url."datashare?userid=".$server->username."&pass=".$server->password."&network=1&phone=".$this->phone."&datasize=".$this->variation."&jsn=json&user_ref=".$this->transid;
 }

 if($this->network=="airtel-sme") {
  $host=$server->url."airtel_data_share?userid=".$server->username."&pass=".$server->password."&phone=".$this->phone."&datasize=".$this->variation."&jsn=json&user_ref=".$this->transid;
}

if($this->network=="glo-sme") {
 $host=$server->url."glo_data_share?userid=".$server->username."&pass=".$server->password."&phone=".$this->phone."&datasize=".$this->variation."&jsn=json&user_ref=".$this->transid;
}

if($this->network=="9mobile-sme") {
 $host=$server->url."nine_data_share?userid=".$server->username."&pass=".$server->password."&phone=".$this->phone."&datasize=".$this->variation."&jsn=json&user_ref=".$this->transid;
}


$smecurl = curl_init();
//step2
curl_setopt($smecurl,CURLOPT_URL, $host);
curl_setopt($smecurl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($smecurl,CURLOPT_HEADER, false);


if($smecurl)
{
$status1=curl_exec ($smecurl);
// $status1='{"code":100,"message":"Data recharge completed","batchno":"617e87f02993f"}';

$rstatus=$status1;
$smecoder = json_decode($status1);


if($smecoder->code==100)
{
    // echo json_encode(['code'=>'s0c']);
    $status='1';
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus]);
    return true;
 }
elseif($smecoder->code=='')
{
    // echo json_encode(['code'=>'s0c']);
    $status='1';
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus]);
    return true;
 }
else {
    // echo json_encode(['code'=>'141']);

    $status='0';

//mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
$updateU = User::where('id',$this->fetchUserId)->update(['dataBalance'=>$this->credit]);
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);

// end Debite customer

return 'Failed: External Error, Service Temporary Not Available';

}

}
 // echo json_encode(['code'=>'141']);
    $status='0';

//mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
$updateU = User::where('id',$this->fetchUserId)->update(['dataBalance'=>$this->credit]);
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>'outside curl','balAfter'=>$this->credit]);

// end Debite customer

return 'Failed: External Error, Service Temporary Not Available';

}
$status='0';

//mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
$updateU = User::where('id',$this->fetchUserId)->update(['dataBalance'=>$this->credit]);
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>'Failed: Internal Error, Service Api off','balAfter'=>$this->credit]);

return 'Failed: Internal Error, Service Off';

    }


    public function pin($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $deno, $total_prod, $quantity, $transid)
    {

        $this->balance=$balance;
        $this->fetchUserId=$fetchUserId;
        $this->userName=$userName;
        $this->credit=$cre;
        $this->debit=$dep;
        $this->network=$network;
        $this->phone=$phone;
        $this->deno=$deno;
        $this->amount=$total_prod;
        $this->transid=$transid;

        $server= Api::where(['name'=>'carddispenser','status'=>1])->first();
        if($server){


        // $url = 'http://localhost/carddispenser.com.ng/carddispenserWebsite/mode/http/api/card/index.php?'; //API Url (Do not change)
        // $email='kennethayogu@gmail.com';  //Replace with your account email address
        $pkey='6NrBMcG3gDVn75R2W8z9q4CrQGVmTd';  // Replace with your account username
        $skey='75R2W8z9q4CrQGVmTd6NrBMcG3gDVn2718';
        // $password='k3nn3th19923844';
        // $request_id=$transid;

        $data = array(

                'email'=>$server->username,
                'skey'=>$skey,
                'pkey'=>$pkey,
                'password'=>$server->password,
                'tid'=>'kp'.$transid,
               'network'=>str_replace('-pin', '',$network),
                'amount'=>$deno,
                'quan'=>$quantity,
            );
            $curl       = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $server->url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,

                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $data,
            ));


            if($curl)
            {
             $status1=curl_exec ($curl);

            //  $status1='{"status":"s0c","network":"mtn","quantity":"10","total":969,"balance":50000,"message":"transaction successful","data":[{"pin":"06762485367740618","deno":"100","seria":"00000023597623815","descr":"*311*06762485367740618#"},{"pin":"91374542954594657","deno":"100","seria":"00000023597623812","descr":"*311*91374542954594657#"},{"pin":"00490015868253549","deno":"100","seria":"00000023597623807","descr":"*311*00490015868253549#"},{"pin":"59378103495922147","deno":"100","seria":"00000023597623777","descr":"*311*59378103495922147#"},{"pin":"15750616028775900","deno":"100","seria":"00000023597623805","descr":"*311*15750616028775900#"},{"pin":"26057211376226190","deno":"100","seria":"00000023597623769","descr":"*311*26057211376226190#"},{"pin":"24802467503307748","deno":"100","seria":"00000023597623756","descr":"*311*24802467503307748#"},{"pin":"57231005715560263","deno":"100","seria":"00000002359762376","descr":"*311*57231005715560263#"},{"pin":"19525554376627748","deno":"100","seria":"00000023597623752","descr":"*311*19525554376627748#"},{"pin":"83355872925151575","deno":"100","seria":"00000023597623721","descr":"*311*83355872925151575#"}]}';


            $rstatus=$status1;

            $json = json_decode($status1);

            $jsonp = json_decode($status1,true);

            $resp=$json->status;

                // return $jsonp['data'];


            if($resp=='s0c') {

             //execute
             foreach($jsonp['data'] as $item)
             {

    $code[]= array('userId'=>$fetchUserId,'transId'=>$transid,'network'=>$json->network,'amount'=>$deno,'deno'=>$deno,'pin'=>$item['pin'],'seria'=>$item['seria'],'descr'=>$item['descr'],'status'=>'1');

             }

        $insert = new Mypin();

        $saves=$insert->insert($code);


$status='1';
$update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus]);
      return true;

            }
             elseif($resp=='786'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;
                return 'Sorry The Quantity you are requesting for is not upto.  Kindly reduce and request again';

            } elseif($resp=='02'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='141'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='142'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='01'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='08'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='09'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='03'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='05'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='06'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='131'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } elseif($resp=='142'){

                $status='0';

                //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
                $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus,'balAfter'=>$this->credit]);
                // return $resp;

                return 'Failed: External Error';

            } else {

                $status='1';
                $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>$rstatus]);
                    return true;
            }

        }
    }
    $status='0';

    //mysqli_query($dbc,"UPDATE users SET bit_balance='$a' WHERE id='$user_id' ");
    $updateU = User::where('id',$this->fetchUserId)->update(['pinBalance'=>$this->credit]);
    $update = Transaction::where('transId',$this->transid)->update(['status'=>$status,'rstatus'=>'Failed: Internal Error, Service Api Off','balAfter'=>$this->credit]);
    // return $resp;
return 'Failed: Internal Error, Service Off';
}


}

