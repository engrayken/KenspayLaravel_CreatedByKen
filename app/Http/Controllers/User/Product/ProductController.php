<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\SubProduct;
use App\Models\Users\User;
use App\Models\Site\Setting;
use App\Enums\ProductEnums;
use App\Enums\SiteEnums;
use App\Enums\AccountEnums;
use App\Http\Requests\Product\PayRequest;
use App\Interfaces\Billings\IBillingRepository;
use App\Interfaces\Product\IProductRepository;
use App\Interfaces\User\IUserRepository;
use App\Models\Site\Epin;
use App\Models\Users\Mypin;

class ProductController extends Controller
{
private IBillingRepository $serviceRepository;
private IUserRepository $UserviceRepository;
private IProductRepository $PserviceRepository;

public function __construct(IBillingRepository $serviceRepo, IUserRepository $UserviceRepo, IProductRepository $PserviceRepo) {
    $this->serviceRepository = $serviceRepo;
    $this->UserviceRepository = $UserviceRepo;
    $this->PserviceRepository = $PserviceRepo;
}
    public function pin()
    {

        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $network= Product::where(ProductEnums::$prodCat_name['pinCat'])->get();
        $title=ProductEnums::$prodCat_name['pinTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
       $this->serviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.pin', compact('user','network','title','settings'));
    }

    public function airtime()
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $network= Product::where(ProductEnums::$prodCat_name['airtCat'])->get();
        $title=ProductEnums::$prodCat_name['airtTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
       $this->serviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.airtime', compact('user','network','title','settings'));
    }

    public function data()
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $network= Product::where(ProductEnums::$prodCat_name['dataCat'])->get();
        $title=ProductEnums::$prodCat_name['dataTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->serviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.data', compact('user','network','title','settings'));

    }

    public function tv()
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $network= Product::where(ProductEnums::$prodCat_name['tvCat'])->get();
        $title=ProductEnums::$prodCat_name['tvTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->serviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.tv', compact('user','network','title','settings'));
        }

    public function education()
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $network= Product::where(ProductEnums::$prodCat_name['eduCat'])->get();
        $title=ProductEnums::$prodCat_name['eduTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->serviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.education', compact('user','network','title','settings'));
        }

    public function electricity()
    {
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $network= Product::where(ProductEnums::$prodCat_name['electCat'])->get();
        $title=ProductEnums::$prodCat_name['electTitle'];
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->serviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        return view('user.electricity', compact('user','network','title','settings'));
        }


    public function amount(Request $Request)
    {
       $network= SubProduct::query()->where('subProdMain_name', $Request->network)->get();
            foreach ($network as $value)
            {
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



    public function pay(PayRequest $Request)
    {

        $Request->merge(['amount'=>abs($Request->amount)]);
        $Request->validated();
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
        $user= User::findOrfail($ids);
        $settings = Setting::findOrfail(SiteEnums::$settings);
        $this->serviceRepository->BalanceCharge($user, $settings->monthlyCharge);
        $this->UserviceRepository->PhoneBook($Request, $user);
       $response = $this->PserviceRepository->pay($Request, $user);

        return $response;


        }

}
