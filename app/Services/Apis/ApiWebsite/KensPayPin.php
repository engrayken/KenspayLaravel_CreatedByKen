<?php
namespace App\Services\Apis\ApiWebsite;

use App\Models\Users\User;

class KensPayPin
{
public function KensPayPin(User $user, $dataArray)
{
// $server= Api::where(['type'=>$dataArray['serverType'],'status'=>$dataArray['serverStatus'],'name'=>$dataArray['serverName']])->first();
return failedResponse("bad");

}

}
