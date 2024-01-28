<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\SubProduct;
use App\Models\Users\User;
use App\CustomClass\ProductCheck;
use App\CustomClass\BalanceCharge;
use App\Models\Users\PhoneBook;
use App\Models\Site\Setting;
use App\Enums\ProductEnums;
use App\Enums\SiteEnums;
use App\Enums\AccountEnums;
use App\Http\Requests\Product\PayRequest;
use App\Interfaces\Billings\IBillingRepository;
use App\Interfaces\User\IUserRepository;

class ProductController extends Controller
{
private IBillingRepository $serviceRepository;
private IUserRepository $UserviceRepository;

public function __construct(IBillingRepository $serviceRepo, IUserRepository $UserviceRepo) {
    $this->serviceRepository = $serviceRepo;
    $this->UserviceRepository = $UserviceRepo;
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
        $this->UserviceRepository->PhoneBook($user, $Request);

return response()->json('good');


            // $payCharge = new BalanceCharge();

            //  $jump= $payCharge->charge($Request->network,$Request->phone,$Request->amount,$Request->quantity, $Request->transid);

            //  if($jump!==true){
            // $response = array(
            //   "code" =>"101","message"=>$jump
            //     );

            //  }
            //  else{
            //        $response = array(
            //   "code" =>"s0c","message"=>"succes"
            //     );
            //  }


            //  return json_encode($response);
                // return $check;

        }

}
