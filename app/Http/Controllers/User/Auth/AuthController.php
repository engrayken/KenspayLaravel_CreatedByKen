<?php

namespace App\Http\Controllers\User\Auth;
use App\Http\Controllers\Controller;
use App\Enums\AccountEnums;
use App\Enums\SiteEnums;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\SignupRequest;
use App\Interfaces\Auth\IAuthRepository;


class AuthController extends Controller
{
  private IAuthRepository $serviceRepository;

    public function __construct(IAuthRepository $serviceRepo) {
        $this->serviceRepository = $serviceRepo;
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

    public function logOut()
    {
        session()->flush();
      return  redirect('/login');
    }
}
