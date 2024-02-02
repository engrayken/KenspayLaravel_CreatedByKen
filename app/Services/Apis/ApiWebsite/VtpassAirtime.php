<?php
namespace App\Services\Apis\ApiWebsite;

use App\Models\Site\Api;
use App\Models\Users\User;

class VtpassAirtime
{
        private $network;
        private $email;
        private $phone;
        private $amount;
        private $quantity;
        private $transid;
        private $balance;
        private $fetchUserId;
        private $userName;
        private $credit;
        private $debit;
        private $variation;
        private $deno;
public function VtpassAirtime(User $user, $dataArray)
{

$server= Api::where(['type'=>$dataArray['serverType'],'status'=>$dataArray['serverStatus'],'name'=>$dataArray['serverName']])->first();
return failedResponse("GOOD");

}

}
