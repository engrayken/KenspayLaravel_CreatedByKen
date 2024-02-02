<?php
namespace App\Services;

use App\Models\Site\Api;
use App\Models\Users\User;

class ApiSwitch
{
public function switchApi(User $user, $dataArray)
{

$sever = Api::where(['type'=>$dataArray['serverType'],'status'=>$dataArray['serverStatus'],'name'=>$dataArray['serverName']])->first();
$serveName = $sever->name;
$service = app('App\Services\Apis\ApiWebsite\\'.$sever->name);

return $service->$serveName($user, $dataArray);


}

}
