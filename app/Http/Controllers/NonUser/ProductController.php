<?php

namespace App\Http\Controllers\NonUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\Contracts\Session\Session;
use App\Models\User;
use App\CustomClass\ProductCheck;
use App\CustomClass\BalanceCharge;
use App\Models\Setting;


class ProductController extends Controller
{


    public function pin()
    {

        $network= Product::where('prodCat_name','pin')->get();
        $settings = Setting::where('id','=','1')->first();

        $title='Generate Recharge Card Pin';
        return view('home.pin', compact('network','title','settings'));


    }

    public function airtime()
    {
        $network= Product::where('prodCat_name','airtime')->get();
        $title='Buy Airtime Vtu';
        $settings = Setting::where('id','=','1')->first();

        return view('home.airtime', compact('network','title','settings'));

    }

    public function data()
    {

        $network= Product::where('prodCat_name','sme')->get();
        $title='Buy Data';
        $settings = Setting::where('id','=','1')->first();

        return view('home.data', compact('network','title','settings'));

    }

    public function tv()
    {

        $network= Product::where('prodCat_name','tv')->get();
        $title='Tv subscription';
        $settings = Setting::where('id','=','1')->first();

        return view('home.tv', compact('network','title','settings'));

    }

    public function education()
    {

        $network= Product::where('prodCat_name','education')->get();
        $title='Educational Payment';
        $settings = Setting::where('id','=','1')->first();

        return view('home.education', compact('network','title','settings'));

    }

    public function electricity()
    {

        $network= Product::where('prodCat_name','electricity')->get();
        $title='Electricity Bill';
        $settings = Setting::where('id','=','1')->first();

        return view('home.electricity', compact('network','title','settings'));

    }


    public function amount(Request $Request)
    {

        $network= SubProduct::query()->where('subProdMain_name', $Request->network)->get();



            foreach ($network as $value) {
                $check[]=  array('name'=>$value->subProdTitle,'amount'=>$value->subProdAmount,'variation'=>$value->subProdAmount_variation,'id'=>$value->subProdId);
            }

             return json_encode($check);


    }

    public function variation(Request $Request)
    {

        $network= SubProduct::where('subProdId', $Request->amountid)->first();


            $response = array(
              "amount" => $network->subProdAmount,
              "per" => $network->subProdAmount_variation
            );


             return json_encode($response);


    }



    // public function pay(Request $Request)
    // {




    //     // $fetchUser= User::where('id',Session()->get('loginid'))->first();

    //         $payCharge = new BalanceCharge();

    //         $sanitize = new ProductCheck();


    //       $sanitizeCheck= $sanitize->airtime($Request->network,$Request->phone,$Request->amount,$Request->quantity,$Request->transid);
    //         if($sanitizeCheck!==true)
    //         {
    //             $response = array(
    //                 "code" =>"101","message"=>$sanitizeCheck
    //                   );

    //                return json_encode($response);
    //         }

    //         $Request->validate([
    //             'phone'=>'required|numeric',
    //             'network'=>'required|string',
    //             'amount'=>'required|numeric',
    //             'quantity'=>'required|numeric|min:10',
    //             'transid'=>'required|string'
    //         ]);
    //     // $user= User::where('id',$ids)->first();
    //     // $network= SubProduct::query()->where('subProdMain_name', $Request->network)->get();



    //         // foreach ($network as $value) {
    //         //     $check[]=  array('name'=>$value->subProdTitle,'amount'=>$value->subProdAmount,'variation'=>$value->subProdAmount_variation);
    //         // }

    //          $jump= $payCharge->charge($Request->network,$Request->phone,$Request->amount,$Request->quantity, $Request->transid);

    //          if($jump!==true){
    //         $response = array(
    //           "code" =>"101","message"=>$jump
    //             );

    //          }
    //          else{
    //                $response = array(
    //           "code" =>"s0c","message"=>"succes"
    //             );
    //          }


    //          return json_encode($response);
    //             // return $check;


    // }

}
