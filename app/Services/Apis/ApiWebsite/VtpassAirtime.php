<?php
namespace App\Services\Apis\ApiWebsite;

use App\Enums\SiteEnums;
use App\Models\Site\Api;
use App\Models\Users\User;
use App\Services\Guzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class VtpassAirtime
{
private Guzzle $Gservvice;


public function __construct(Guzzle $Gservvice) {
    $this->Gservvice = $Gservvice;
}
public function VtpassAirtime(User $user, $dataArray)
{
//          Storage::disk('local')->put("file.txt", $dataArray["amount"]);
    $server= Api::where(['type'=>$dataArray['serverType'],'status'=>$dataArray['serverStatus'],'name'=>$dataArray['serverName']])->first();
   $server = $server->url;
   $type ="post";
    $data = [
        'serviceID' => $dataArray['network'],
        'phone' => $dataArray['phone'],
        'amount' => $dataArray['amount'],
        'request_id' => $dataArray['transid'],
    ];
    $headers = [
    'Content-Type' => 'application/json', // Adjust the content type as needed
    // 'Authorization' => 'Bearer YOUR_ACCESS_TOKEN', // Include any necessary authentication headers
    "api-key"=>config("services.vtpass.api_key"),
    "public-key"=>config("services.vtpass.public_key"),
    "secret-key"=>config("services.vtpass.secret_key"),
        ];

        $responseBody = $this->Gservvice->sendApi($type, $server, $headers, $data);
        //  Storage::disk('local')->put("file.txt", $responseBody);

    $jsons = json_decode($responseBody, true);
    $rep = $jsons['code'];
    if($rep=='000' || $rep=='099' || $rep=='')
    {
    return successResponse($jsons['response_description'] ?? "Transaction Successful");

}

$reverse = $user;
$reverse->dataBalance += $dataArray["amount"];
$reverse->save();
$user->Transaction()->where("transId", $dataArray["transid"])->update([
"balAfter"=>$dataArray["balBefore"], "status"=>SiteEnums::$failedStatus,"rstatus"=>$responseBody
]);
 return failedResponse('External Error: '.$jsons['response_description']);

}

}
