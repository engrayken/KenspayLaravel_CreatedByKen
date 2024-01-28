<?php
namespace App\Repositories\User;

use App\Interfaces\User\IUserRepository;
use App\Models\Users\User;

class UserRepository implements IUserRepository
{
public function PhoneBook(User $user, $data)
{
    $phone = $data['phone'];
    $cname = $data['cname'];
    $check = $user->PhoneBook()->where('phone',$phone);
    if(!$check)
    $user->PhoneBook()->create([
        "phone"=>$phone,
        "cname"=>$cname,
    ]);


}


}
