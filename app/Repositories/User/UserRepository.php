<?php
namespace App\Repositories\User;

use App\Enums\SiteEnums;
use App\Interfaces\User\IUserRepository;
use App\Models\Users\User;

class UserRepository implements IUserRepository
{
public function PhoneBook($data, User $user)
{
    $phone = $data['phone'];
    $cname = $data['cname'];
    $check = $user->PhoneBook()->where('phone',$phone)->first();
    if($cname)
    {
    if(!$check)
    $user->PhoneBook()->create(["phone"=>$phone,"cname"=>$cname]);
    $user->PhoneBook()->where("phone",$phone)->update(["phone"=>$phone,"cname"=>$cname]);

}


}

public function setPin(User $user, $request, $monthlyCharge)
{
    if($request->setPin=='on')
    {
    if($user->pinBalance>999)
    {
    $update= $user;
    $update->pinEnable='on';
    $update->pinBalance -= SiteEnums::$setPin;
   $updated = $update->save();
   if($updated)
           $insert = $user->ServiceFee()->create([
            "userName"=>$user->name,
            "feeId"=>time(),
            "amount"=>$monthlyCharge,
            ]);
    $user->Transaction()->create(
[
    "userName" => $user->name,
    "transId" => time(),
    "network" => 'Enable Pins',
    "amount" => SiteEnums::$setPin,
    "deno" => SiteEnums::$setPin,
    "phone" => $user->phone,
    "balBefore" => $user->pinBalance + SiteEnums::$setPin,
    "balAfter" => $user->pinBalance,
    "status" => SiteEnums::$activeStatus,
]);

    return successResponse("success");

    }
    else
{
    return failedResponse("Pin balance too low");
}

}
    if($request->setPin=='off')
    $update=$user->update(['pinEnable'=>'off']);
    successResponse("success");

}



}
