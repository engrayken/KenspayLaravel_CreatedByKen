<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product\Product;
use App\Models\Product\SubProduct;
use Illuminate\Contracts\Session\Session;
use App\Models\Users\User;
use App\CustomClass\ProductCheck;
use App\CustomClass\BalanceCharge;
use App\Enums\ProductEnums;
use App\Enums\SiteEnums;
use App\Models\Site\Setting;


class ProductController extends Controller
{


    public function pin()
    {

        $settings = Setting::findOrfail(SiteEnums::$settings);
        $network= Product::where(ProductEnums::$prodCat_name['pinCat'])->get();
        $title=ProductEnums::$prodCat_name['pinTitle'];
        return view('home.pin', compact('network','title','settings'));


    }

    public function airtime()
    {

        $network= Product::where(ProductEnums::$prodCat_name['airtCat'])->get();
        $title=ProductEnums::$prodCat_name['airtTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.airtime', compact('network','title','settings'));

    }

    public function data()
    {

        $network= Product::where(ProductEnums::$prodCat_name['dataCat'])->get();
        $title=ProductEnums::$prodCat_name['dataTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.data', compact('network','title','settings'));

    }

    public function tv()
    {

        $network= Product::where(ProductEnums::$prodCat_name['tvCat'])->get();
        $title=ProductEnums::$prodCat_name['tvTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.tv', compact('network','title','settings'));

    }

    public function education()
    {
        $network= Product::where(ProductEnums::$prodCat_name['eduCat'])->get();
        $title=ProductEnums::$prodCat_name['eduTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.education', compact('network','title','settings'));

    }

    public function electricity()
    {
        $network= Product::where(ProductEnums::$prodCat_name['electCat'])->get();
        $title=ProductEnums::$prodCat_name['electTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
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



}
