<?php
namespace App\Repositories\Auth;

use App\Enums\AccountEnums;
use App\Enums\SiteEnums;
use App\Interfaces\Auth\IAuthRepository;
use App\Mail\PHPMailler;
use App\Models\Users\PUser;
use App\Models\Users\User;
use App\Models\Users\UserEmailVerify;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements IAuthRepository
{
private PHPMailler $MailService;

public function __construct(PHPMailler $MailServiceRepo) {
    $this->MailService = $MailServiceRepo;
}

public function signUp($data)
{
$verCode = 'ver'.time();
$subject ='Account Verification';
$data['reference'] = time();
$data["id"] = hexdec(uniqid()).mt_rand(10000,99999);
$data["status"] = AccountEnums::$verifiedAccount;
$data['website']=SiteEnums::$siteName;
$data['token']=$verCode;
$data['password']=Hash::make($data['password']);
$signUp = PUser::create($data);
$signUpV = UserEmailVerify::create(["userId"=>$signUp->id,"userEmail"=>$data["email"],"token"=>$signUp->token]);
if(!$signUp)
return SiteEnums::$failedReponseCode;

$makeway = view('accessory.emv', compact('verCode'));
 $this->MailService->sendMail($subject, view('accessory.emv',
        compact('verCode')), $signUp->email);

return SiteEnums::$successReponseCode;

}


public function login($data)
{
    $email=  $data['email'];
    $password = $data['password'];
    $plogMeIn = PUser::where('email', $email)->first();
    if($plogMeIn)
    {
if(!Hash::check($password, $plogMeIn->password))
        return false;
$verCode = $plogMeIn->token;
$subject ='Account Verification';
$makeway = view('accessory.emv', compact('verCode'));
 $this->MailService->sendMail($subject, view('accessory.emv',
        compact('verCode')), $email);
return '3mv';
    }

    $logMeIn = User::where('email', $email)->first();
    if(!$logMeIn)
    return false;

    if($logMeIn->website!=SiteEnums::$siteName)
    return false;

    if(!Hash::check($password, $logMeIn->password))
        return false;
    User::where('email', $email)->update(['last_login'=>now()]);

      session()->put('loginid', $logMeIn->id);
        return true;


}

}
