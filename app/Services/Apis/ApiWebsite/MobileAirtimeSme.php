<?php
namespace App\Services\Apis\ApiWebsite;

use App\Models\Users\User;

class MobileAirtimeSme
{
public function MobileAirtimeSme(User $user, $dataArray)
{
// $server= Api::where(['type'=>$dataArray['serverType'],'status'=>$dataArray['serverStatus'],'name'=>$dataArray['serverName']])->first();
return failedResponse("bad");

}

}
