<?php
namespace App\Repositories\Product;

use App\Enums\ProductEnums;
use App\Enums\SiteEnums;
use App\Interfaces\Product\IProductRepository;
use App\Models\Product\Product;
use App\Models\Product\SubProduct;
use App\Models\Site\Api;
use App\Models\Users\User;
use App\Repositories\Billings\BillingRepository;
use App\Services\Apis\AirtimeApi;
use App\Services\Apis\PinApi;
use App\Services\ApiSwitch;
use App\Services\SwitchProduct;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements IProductRepository
{
private $network;
private $phone;
private $amount;
private $quantity;
private $transid;

private BillingRepository $BserviceRepository;
private ApiSwitch $switchSevices;

public function __construct(BillingRepository $BserviceRepo, ApiSwitch $switchSevice) {
    $this->BserviceRepository = $BserviceRepo;
    $this->switchSevices = $switchSevice;

}

public function pay($Request, User $user)
{
$this->network=$Request['network'];
$this->phone=$Request['phone'];
$this->amount=$Request['amount'];
$this->quantity=$Request['quantity'];
$this->transid=$Request['transid'];
$network= Product::where('prodName', $Request['network'])->first();

        switch ($network->prodCat_name) {

            # this area is for airtime vtu
        case ProductEnums::$prodCat_name['airtCat']['prodCat_name']:
        $SubProduct= SubProduct::query()->where('subProdMain_name', $this->network)->first();
        $server = Api::where(['type'=>ProductEnums::$prodCat_name['airtCat']['prodCat_name'],'status'=>SiteEnums::$activeStatus])->first();
          if(!$server)
          return failedResponse("Failed: Internal Error, Service Temporary Off");

        $total_cal= $SubProduct->subProdAmount_variation/100*$this->amount;
        $total_prod= $this->amount-$total_cal;
        $this->BserviceRepository->checkBal($user->dataBalance, $total_prod, $this->transid);
        $checkBal = $this->BserviceRepository->checkBal($user->dataBalance, $total_prod, $this->transid);
            if($checkBal!=SiteEnums::$successReponseCode)
            return $checkBal;
        $balBefore = $user->dataBalance;
        $dep= $user->dataBalance-$total_prod;
        $cre= $dep+$total_prod;
        $update= $user;
        $update->dataBalance -= $total_prod;
        $update->save();
       $this->BserviceRepository->createTransaction($user, [
            "userName"=> $user->name,
            "transId"=>$this->transid,
            "network"=> $this->network.ProductEnums::$vtu,
            "amount"=> $total_prod,
            "deno"=> $this->amount,
            "phone"=> $this->phone,
            "quantity"=> $this->quantity ?? ProductEnums::$defaultQauantity,
            "balBefore"=> $balBefore,
            "balAfter"=> $dep,
            "status" =>SiteEnums::$pendingStatus,
        ]);
            $dataArray =
            [
                "balBefore"=>$balBefore,
                "cre"=>$cre,
                "dep"=>$dep,
                "network"=>$this->network,
                "phone"=>$this->phone,
                "subProdAmount_variation"=>$SubProduct->subProdAmount_variation,
                "amount"=>$total_prod,
                "transid"=>$this->transid,
                "subProdTitle"=>$SubProduct->subProdTitle,
                "amountCharge"=>$this->amount,
                "serverName"=>$server->name,
                "serverType"=>$server->type,
                "serverStatus"=>$server->status,
            ];
        //  Storage::disk('local')->put("file.txt", $Request);

     return $this->switchSevices->switchApi($user, $dataArray);
            break;

            # this area is for sme data
        case ProductEnums::$prodCat_name['dataCat']['prodCat_name']:
            $SubProduct= SubProduct::query()->where(['subProdMain_name'=>$this->network,'subProdAmount_variation'=>$this->amount])->first();
            $server = Api::where(['type'=>ProductEnums::$prodCat_name['dataCat']['prodCat_name'],'status'=>SiteEnums::$activeStatus])->first();
          if(!$server)
          return failedResponse("Failed: Internal Error, Service Temporary Off");

          $total_cal= $SubProduct->subProdAmount;
            $total_prod=$total_cal;
            $checkBal = $this->BserviceRepository->checkBal($user->dataBalance, $total_prod, $this->transid);
            if($checkBal!=SiteEnums::$successReponseCode)
            return $checkBal;
        $balBefore = $user->dataBalance;
        $dep= $user->dataBalance-$total_prod;
        $cre= $dep+$total_prod;
        $update= $user;
        $update->dataBalance -= $total_prod;
        $update->save();

       $this->BserviceRepository->createTransaction($user, [
            "userName"=> $user->name,
            "transId"=>$this->transid,
            "network"=> $this->network,
            "amount"=> $total_prod,
            "deno"=> $SubProduct->subProdAmount_variation,
            "phone"=> $this->phone,
            "quantity"=> $this->quantity ?? ProductEnums::$defaultQauantity,
            "balBefore"=> $balBefore,
            "balAfter"=> $dep,
            "status" =>SiteEnums::$pendingStatus,
        ]);
            $dataArray =
            [
                "balBefore"=>$balBefore,
                "cre"=>$cre,
                "dep"=>$dep,
                "network"=>$this->network,
                "phone"=>$this->phone,
                "subProdAmount_variation"=>$SubProduct->subProdAmount_variation,
                "amount"=>$this->amount,
                "transid"=>$this->transid,
                "serverName"=>$server->name,
                "serverType"=>$server->type,
                "serverStatus"=>$server->status,
            ];
     return $this->switchSevices->switchApi($user, $dataArray);

            break;

            # this area is for pin
             case ProductEnums::$prodCat_name['pinCat']['prodCat_name']:
            $SubProduct= SubProduct::where(['subProdMain_name'=>$this->network,'subProdId'=>$this->amount])->first();
            $server = Api::where(['type'=>ProductEnums::$prodCat_name['pinCat']['prodCat_name'],'status'=>SiteEnums::$activeStatus])->first();
          if(!$server)
          return failedResponse("Failed: Internal Error, Service Temporary Off");

            $total_cal= $SubProduct->subProdAmount_variation/100*$SubProduct->subProdAmount;
            $total_prod1= $SubProduct->subProdAmount-$total_cal;
            $total_prod=  $total_prod1*$this->quantity;
            $checkBal = $this->BserviceRepository->checkBal($user->pinBalance, $total_prod, $this->transid);
            if($checkBal!=SiteEnums::$successReponseCode)
            return $checkBal;
        $balBefore = $user->pinBalance;
        $dep= $user->pinBalance-$total_prod;
        $cre= $dep+$total_prod;
        // $update= $user;
        // $update->pinBalance -= $total_prod;
        // $update->save();

        // $this->BserviceRepository->createTransaction($user, [
        //     "userName"=> $user->name,
        //     "transId"=>$this->transid,
        //     "network"=> $SubProduct->subProdTitle,
        //     "amount"=> $total_prod,
        //     "deno"=> $SubProduct->subProdAmount,
        //     "phone"=> $this->phone,
        //     "quantity"=> $this->quantity ?? ProductEnums::$defaultQauantity,
        //     "balBefore"=> $balBefore,
        //     "balAfter"=> $dep,
        // ]);

            $dataArray =
            [
                "balBefore"=>$balBefore,
                "cre"=>$cre,
                "dep"=>$dep,
                "network"=>$network,
                "phone"=>$this->phone,
                "subProdAmount"=>$SubProduct->subProdAmount,
                "amount"=>$total_prod,
                "quantity"=>$this->quantity,
                "transid"=>$this->transid,
                // "amountCharge"=>$this->amount,
                "serverName"=>$server->name,
                "serverType"=>$server->type,
                "serverStatus"=>$server->status,
            ];

     return $this->switchSevices->switchApi($user, $dataArray);

            break;

        default:
         # this area is for other service
            $SubProduct= SubProduct::query()->where(['subProdMain_name'=>$this->network,'subProdAmount_variation'=>$this->amount])->first();
            $server = Api::where(['type'=>ProductEnums::$prodCat_name['otherCat']['prodCat_name'],'status'=>SiteEnums::$activeStatus])->first();
          if(!$server)
          return failedResponse("Failed: Internal Error, Service Temporary Off");

          $total_cal= $SubProduct->subProdAmount;
            $total_prod=$total_cal;
            $checkBal = $this->BserviceRepository->checkBal($user->dataBalance, $total_prod, $this->transid);
            if($checkBal!=SiteEnums::$successReponseCode)
            return $checkBal;
        $balBefore = $user->dataBalance;
        $dep= $user->dataBalance-$total_prod;
        $cre= $dep+$total_prod;
    //     $update= $user;
    //     $update->dataBalance -= $total_prod;
    //     $update->save();

    //    $this->BserviceRepository->createTransaction($user, [
    //         "userName"=> $user->name,
    //         "transId"=>$this->transid,
    //         "network"=> $this->network,
    //         "amount"=> $total_prod,
    //         "deno"=> $SubProduct->subProdAmount_variation,
    //         "phone"=> $this->phone,
    //         "quantity"=> $this->quantity ?? ProductEnums::$defaultQauantity,
    //         "balBefore"=> $balBefore,
    //         "balAfter"=> $dep,
    //         "status" =>SiteEnums::$pendingStatus,
    //     ]);
            $dataArray =
            [
                "balBefore"=>$balBefore,
                "cre"=>$cre,
                "dep"=>$dep,
                "network"=>$this->network,
                "phone"=>$this->phone,
                "subProdAmount_variation"=>$SubProduct->subProdAmount_variation,
                "amount"=>$this->amount,
                "transid"=>$this->transid,
                "serverName"=>$server->name,
                "serverType"=>$server->type,
                "serverStatus"=>$server->status,
            ];
     return $this->switchSevices->switchApi($user, $dataArray);

            break;

    }


}


}
