<?php
namespace App\Repositories\Auth;

use App\Enums\AccountEnums;
use App\Enums\CustomEnums;
use App\Interfaces\Auth\IAuthRepository;
use App\Models\Users\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements IAuthRepository
{
public function signUp($data)
{
$data['reference'] = time();
$data["id"] = hexdec(uniqid()).mt_rand(10000,99999);
$data["active"] = AccountEnums::$verifiedAccount;
$data['password']=Hash::make($data['password']);
$signUp = User::create($data);
if(!$signUp)
{
return CustomEnums::$failedReponseCode;
}
return CustomEnums::$successReponseCode;

}
public function login($data)
{
    $email=  $data['email'];
    $password = $data['password'];
    $logMeIn = User::where('email', $email)->first();
    if(!$logMeIn)
    return false;

    if(!Hash::check($password, $logMeIn->password))
        return false;

      session()->put('loginid', $logMeIn->id);
        return true;


}

}
