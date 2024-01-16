<?php

namespace App\CustomClass;

use App\CustomClass\Apis;

use Illuminate\Http\Request;
use App\Models\Users\User;
use App\Models\Product\Product;
use App\Models\Product\SubProduct;
use App\Models\Users\Transaction;
use App\Models\Site\Setting;
use App\Models\Site\ServiceFee;
use Illuminate\Contracts\Session\Session;


class BalanceCharge
{

        private $network;
        private $email;
        private $phone;
        private $amount;
        private $quantity;
        private $transid;

        public function servicefeeCheck(){
       $ids= session()->get('loginid');

        $user= User::where('id',$ids)->first();
        $settings = Setting::where('id','=','1')->first();

        $datePayFee=date('Y-m');

        $servicefee = ServiceFee::where(['userId'=>$user->id])->where('created_at','like',"%{$datePayFee}%")->first();


        if(!$servicefee && $user->pinEnable=='on')
        {
        $dep= $user->pinBalance - $settings->monthlyCharge;
        $cre= $user->pinBalance;

        $update= User::where('id',$user->id)->update(['pinBalance'=>$dep]);

        if($update){
            $insert=new Servicefee();
            $insert->userId=$user->id;
            $insert->userName=$user->name;
            $insert->feeId=time();
            $insert->amount=$settings->monthlyCharge;
            $insert->save();

            $insertt = new Transaction();
            $insertt->userId = $user->id;
            $insertt->userName = $user->name;
            $insertt->transId =time();
            $insertt->network = 'Monthly Charge';
            $insertt->amount = $settings->monthlyCharge;
            $insertt->deno = $settings->monthlyCharge;
            $insertt->phone = $user->phone;
            $insertt->balBefore = $cre;
            $insertt->balAfter = $dep;
            $insertt->status = '1';
            $insertt->save();

            return false;
        }

        }
            return true;

    }

        public function charge($network,$phone,$amount,$quantity,$transid)
        {

            $this->network=$network;
            $this->phone=$phone;
            $this->amount=$amount;
            $this->quantity=$quantity;
            $this->transid=$transid;

        $fetchUser= User::where('id',Session()->get('loginid'))->first();
        $network= Product::where('prodName', $this->network)->first();

        if($network->prodCat_name!='pin')
        {
        //use data balance here
        $balance=$fetchUser->dataBalance;

        // (1) check if user is trying to purchase airtime and process it
        if($network->prodCat_name=='airtime'){
        $SubProduct= SubProduct::query()->where('subProdMain_name', $this->network)->first();
        $total_cal= $SubProduct->subProdAmount_variation/100*$this->amount;
        $total_prod= $this->amount-$total_cal;
        // return   $total_prod;



        }

        // (2) check if user is trying to purchase sme and process it
        if($network->prodCat_name=='sme'){
            $SubProduct= SubProduct::query()->where(['subProdMain_name'=>$this->network,'subProdAmount_variation'=>$this->amount])->first();
            // $total_cal= $SubProduct->subProdAmount_variation/100*$this->amount;
            $total_cal= $SubProduct->subProdAmount;
            $total_prod=$total_cal;
            //  return   $total_prod;


            }

        } else {
            //use pin balance here

        // (3) check if user is trying to purchase recharge card pin and process it
            $balance=$fetchUser->pinBalance;

            $SubProduct= SubProduct::where(['subProdMain_name'=>$this->network,'subProdId'=>$this->amount])->first();
            $total_cal= $SubProduct->subProdAmount_variation/100*$SubProduct->subProdAmount;
            $total_prod1= $SubProduct->subProdAmount-$total_cal;
            $total_prod=  $total_prod1*$this->quantity;
            // return $this->amount;



        }



        if($balance<$total_prod)
            //(4)check if  above product is biger than balance
        {

            return ' Error: Low Wallet! Please Fund Account';
        }

        //(5)all user input are correct now charge the user
        $dep= $balance-$total_prod;
        $cre= $dep+$total_prod;


            //we process the transaction here and send it to each class
            if($network->prodCat_name=='airtime'){
        $update= User::where('id',$fetchUser->id)->update(['dataBalance'=>$dep]);
        return $this->airtime($balance,$fetchUser->id, $fetchUser->name, $cre, $dep, $this->network, $this->phone, $SubProduct->subProdAmount_variation, $total_prod, $transid, $SubProduct->subProdTitle,$this->amount);

            }
            if($network->prodCat_name=='sme'){
        $update= User::where('id',$fetchUser->id)->update(['dataBalance'=>$dep]);


                 return $this->sme($balance,$fetchUser->id, $fetchUser->name, $cre, $dep, $this->network, $this->phone, $SubProduct->subProdAmount_variation, $total_prod, $transid, $SubProduct->subProdTitle);
            }
            if($network->prodCat_name=='pin'){
        $update= User::where('id',$fetchUser->id)->update(['pinBalance'=>$dep]);


                 return $this->pin($balance,$fetchUser->id, $fetchUser->name, $cre, $dep, $this->network, $this->phone, $SubProduct->subProdAmount, $total_prod, $this->quantity,$transid, $SubProduct->subProdTitle);
            }



        }






        private function airtime($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $subProdAmount_variation, $amount,$transid, $subProdTitle,$amountCharge)
        {
            $host = new Apis();

            $insert = new Transaction();
            $insert->userId = $fetchUserId;
            $insert->userName = $userName;
            $insert->transId =$transid;
            $insert->network = $network.' vtu';
            $insert->amount = $amount;
            $insert->deno = $amountCharge;
            $insert->phone = $phone;
            $insert->balBefore = $balance;
            $insert->balAfter = $dep;
            $save = $insert->save();
            if($save){

        return $host->airtime($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $subProdAmount_variation, $amount,$transid, $subProdTitle,$amountCharge);


            }

        }

        private function sme($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $subProdAmount_variation, $amount,$transid, $subProdTitle)
        {
            $host = new Apis();

            $insert = new Transaction();
            $insert->userId = $fetchUserId;
            $insert->userName = $userName;
            $insert->transId =$transid;
            $insert->network = $subProdTitle;
            $insert->amount = $amount;
            $insert->deno = $subProdAmount_variation;
            $insert->phone = $phone;
            $insert->balBefore = $balance;
            $insert->balAfter = $dep;
            $save = $insert->save();
            if($save){
                // return 'success';
            return $host->sme($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $subProdAmount_variation, $amount,$transid);

        }


        }

        private function pin($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $deno, $total_prod, $quantity, $transid,$subProdTitle)
        {
            $host = new Apis();
            $insert = new Transaction();
            $insert->userId = $fetchUserId;
            $insert->userName = $userName;
            $insert->transId =$transid;
            $insert->network = $subProdTitle;
            $insert->amount = $total_prod;
            $insert->deno = $deno;
            $insert->phone = $phone;
            $insert->quantity = $quantity;
            $insert->balBefore = $balance;
            $insert->balAfter = $dep;
            $save = $insert->save();
            if($save){
                return $host->pin($balance, $fetchUserId, $userName, $cre, $dep, $network, $phone, $deno, $total_prod, $quantity, $transid);

            }

        }


    }
