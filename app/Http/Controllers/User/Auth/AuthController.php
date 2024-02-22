<?php

namespace App\Http\Controllers\User\Auth;
use App\Http\Controllers\Controller;
use App\Enums\AccountEnums;
use App\Enums\SiteEnums;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\SignupRequest;
use App\Interfaces\Auth\IAuthRepository;
use App\Mail\PHPMailler;
use App\Models\Users\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
  private IAuthRepository $serviceRepository;
    private PHPMailler $MailService;

    public function __construct(IAuthRepository $serviceRepo, PHPMailler $phpmailServiceRepo) {
        $this->serviceRepository = $serviceRepo;
    $this->MailService = $phpmailServiceRepo;

    }

      public function signupu(SignupRequest $request)
    {
        $data = $request->validated();
        $reponse = $this->serviceRepository->signUp($data);

    if($reponse!=SiteEnums::$successReponseCode){
    return back()->with(AccountEnums::$Auth["failed"]);
        }

    return back()->with(AccountEnums::$Auth["success"]);
    }


    public function loginu(LoginRequest $request)
    {
    $response = $this->serviceRepository->login($request->validated());
        if(!$response == true && !$response =='3mv')
        return back()->with(AccountEnums::$Auth['failedLogin']);
            if($response =='3mv')
        return back()->with(AccountEnums::$Auth['failedLoginEmail']);
       return redirect('/user');
    }

        public function forgotPass(Request $request)
        {
        function generateRandomString($length = 7)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return Str::random($length);
}
   $passwordR = generateRandomString().'@';
        $request->validate(["email"=>"required|email"]);
        $subject = "Retreive Password";
    $email = $request->email;
    $user = User::where('email',$email)->first();
    if(!$user)
    return back()->with('failed','Email address doesnt match');
    $password = Hash::make($passwordR);
     $updated = $user->update(["password"=>$password]);
     if(!$updated)
    return back()->with('failed','Unable to retrieve password');

$makeway = view('accessory.forgotPassword', compact('passwordR'));
 $this->MailService->sendMail($subject, $makeway, $email);

    return back()->with('success','Your New Password has been sent to your email, Kindly login and change it');


    }

    public function logOut()
    {
        session()->flush();
      return  redirect('/login');
    }
}
