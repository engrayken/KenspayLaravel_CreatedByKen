<?php
namespace App\Services\Apis\ApiWebsite;

use App\Enums\SiteEnums;
use App\Models\Site\Epin;
use App\Models\Users\User;

class KensPayPin
{
public function KensPayPin(User $user, $dataArray)
{
    $net = str_replace('-pin','',$dataArray['network']);
    $deno = $dataArray['deno'];
    $quantity = $dataArray['quantity'];
    $transid = $dataArray['transid'];
    $trans = $dataArray['trans_id'];
    $amount = $dataArray['amount'];

   $epins= Epin::orderBy('created_at','desc')->take($quantity)->where(["net"=>$net,"deno"=>$deno])->get();

   foreach($epins as $item)
   {
    $data = ["trans_id"=>$trans,"transId"=>$transid,"network"=>$item->net,"deno"=>$item->deno,
    "amount"=>$amount,"quantity"=>$quantity,
    "descr"=>str_replace(SiteEnums::$pinNum,SiteEnums::$pinAlp,$item->descr),"pin"=>str_replace(SiteEnums::$pinNum,SiteEnums::$pinAlp,$item->pin),"seria"=>$item->seria,"status"=>SiteEnums::$successStatus];

    $insert = $user->Mypin()->create($data);
}

$updateTrans = $user->Transaction()->where("transId",$transid)->update(['status'=>SiteEnums::$successStatus]);

if($insert)
// $deleted = Epin::destroy($epins);
return successResponse();

}

}
