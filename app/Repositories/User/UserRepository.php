<?php
namespace App\Repositories\User;

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
    $user->PhoneBook()->update(["phone"=>$phone,"cname"=>$cname]);
    }

}


}
