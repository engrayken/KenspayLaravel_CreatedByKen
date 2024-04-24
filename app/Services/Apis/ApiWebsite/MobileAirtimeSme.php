<?php
namespace App\Services\Apis\ApiWebsite;

use App\Enums\SiteEnums;
use App\Models\Site\Api;
use App\Models\Users\User;
use App\Services\Guzzle;
use Illuminate\Support\Facades\Storage;

class MobileAirtimeSme
{
private Guzzle $Gservvice;


public function __construct(Guzzle $Gservvice) {
    $this->Gservvice = $Gservvice;
}
public function MobileAirtimeSme(User $user, $dataArray)
{
   $server= Api::where(['type'=>$dataArray['serverType'],'status'=>$dataArray['serverStatus'],'name'=>$dataArray['serverName']])->first();

   switch ($dataArray["network"]) {
        case 'airtel-sme':
        $server=$server->url."airtel_data_share?";
            break;

        case 'glo-sme':
        $server=$server->url."glo_data_share?";
            break;

        case '9mobile-sme':
        $server=$server->url."nine_data_share?";
            break;

        default:
     $server=$server->url."datashare?";
            break;
    }


//    $server="https://mobileairtimeng.com/httpapi/datashare?userid=xxxx&pass=xxxx&network=x&phone=xxxxx&datasize=xx&jsn=json&user_ref=xxx";
   $type="get";
    $data = [
        "data"=>'userid='.config('services.mbang.public_key').'&pass='.
        config('services.mbang.secret_key').
        '&network=1'.
        '&phone='.$dataArray['phone'].
        '&datasize='.$dataArray['subProdAmount_variation'].
        '&user_ref='.$dataArray['transid'].
        '&jsn=json',
    ];
    $headers = [
    'Content-Type' => 'application/json', // Adjust the content type as needed
    "userid"=>config("services.mbang.public_key"),
    "pass"=>config("services.mbang.secret_key"),
        ];

        $responseBody = $this->Gservvice->sendApi($type, $server, $headers, $data);
        //  Storage::disk('local')->put("file.txt", $responseBody);

    $jsons = json_decode($responseBody, true);
    $rep = $jsons['code'];
    if($rep=='100')
    // if($rep=='100' || $rep=='')
    {
    return successResponse($jsons['message'] ?? "Transaction Successful");

}

$reverse = $user;
$reverse->dataBalance += $dataArray["amount"];
$reverse->save();
$user->Transaction()->where("transId", $dataArray["transid"])->update([
"balAfter"=>$dataArray["balBefore"], "status"=>SiteEnums::$failedStatus,"rstatus"=>$responseBody
]);
 return failedResponse('External Error: '.$jsons['message']);

}

}

