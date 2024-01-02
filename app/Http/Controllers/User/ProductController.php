<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\Contracts\Session\Session;
use App\Models\User;
use App\CustomClass\ProductCheck;
use App\CustomClass\BalanceCharge;
use App\Models\PhoneBook;
use App\Models\Setting;

class ProductController extends Controller
{


    public function pin()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $network= Product::where('prodCat_name','pin')->get();
        $title='Generate Recharge Card Pin';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.pin', compact('user','network','title','settings'));
        }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function airtime()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $network= Product::where('prodCat_name','airtime')->get();
        $title='Buy Airtime Vtu';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.airtime', compact('user','network','title','settings'));
        }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function data()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $network= Product::where('prodCat_name','sme')->get();
        $title='Buy internet sme data';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.data', compact('user','network','title','settings'));
        }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function tv()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $network= Product::where('prodCat_name','tv')->get();
        $title='Tv subscription';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.tv', compact('user','network','title','settings'));
        }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function education()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $network= Product::where('prodCat_name','education')->get();
        $title='Education Payment';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.education', compact('user','network','title','settings'));
        }

          return  redirect('login')->with('failed','You Must Login First');

    }
    public function electricity()
    {
        if(Session()->get('loginid')){

        $ids= session()->get('loginid');
        $user= User::where('id',$ids)->first();
        $network= Product::where('prodCat_name','electricity')->get();
        $title='Pay electricity bill';
        $settings = Setting::where('id','=','1')->first();
            $servicefeef= new BalanceCharge();
            $servicefeef->servicefeeCheck();
        return view('user.electricity', compact('user','network','title','settings'));
        }

          return  redirect('login')->with('failed','You Must Login First');

    }


    public function amount(Request $Request)
    {
        if(Session()->get('loginid')){

        $network= SubProduct::query()->where('subProdMain_name', $Request->network)->get();



            foreach ($network as $value) {
                $check[]=  array('name'=>$value->subProdTitle,'amount'=>$value->subProdAmount,'variation'=>$value->subProdAmount_variation,'id'=>$value->subProdId);
            }

             return json_encode($check);

        }

          return  redirect('login')->with('failed','You Must Login First');

    }

    public function variation(Request $Request)
    {
        if(Session()->get('loginid')){

        $network= SubProduct::where('subProdId', $Request->amountid)->first();


            $response = array(
              "amount" => $network->subProdAmount,
              "per" => $network->subProdAmount_variation
            );


             return json_encode($response);

        }

          return  redirect('login')->with('failed','You Must Login First');

    }



    public function pay(Request $Request)
    {



        if(Session()->get('loginid')){

        // $fetchUser= User::where('id',Session()->get('loginid'))->first();
            $Request->merge(['amount'=>abs($Request->amount)]);

            $payCharge = new BalanceCharge();

            $sanitize = new ProductCheck();


          $sanitizeCheck= $sanitize->airtime($Request->network,$Request->phone,$Request->amount,$Request->quantity,$Request->transid);
            if($sanitizeCheck!==true)
            {
                $response = array(
                    "code" =>"101","message"=>$sanitizeCheck
                      );

                   return json_encode($response);
            }

            $Request->validate([
                'phone'=>'required|numeric',
                'network'=>'required|string',
                'amount'=>'required|numeric',
                'quantity'=>'required|numeric|min:10',
                'transid'=>'required|string'
            ]);
        // $user= User::where('id',$ids)->first();
        // $network= SubProduct::query()->where('subProdMain_name', $Request->network)->get();



            // foreach ($network as $value) {
            //     $check[]=  array('name'=>$value->subProdTitle,'amount'=>$value->subProdAmount,'variation'=>$value->subProdAmount_variation);
            // }

        $phonesave= PhoneBook::where(['userId'=> Session()->get('loginid'),'phone'=>$Request->phone])->first();


            if($phonesave=='')
            {
                $saveName= new PhoneBook();
                $saveName->userId=Session()->get('loginid');
                $saveName->cname=$Request->cname;
                $saveName->phone=$Request->phone;
                $save= $saveName->save();
            }

             $jump= $payCharge->charge($Request->network,$Request->phone,$Request->amount,$Request->quantity, $Request->transid);

             if($jump!==true){
            $response = array(
              "code" =>"101","message"=>$jump
                );

             }
             else{
                   $response = array(
              "code" =>"s0c","message"=>"succes"
                );
             }


             return json_encode($response);
                // return $check;

        }

          return  redirect('login')->with('failed','You Must Login First');

    }

}
