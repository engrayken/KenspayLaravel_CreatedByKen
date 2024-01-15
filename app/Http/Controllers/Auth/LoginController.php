<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Enums\AccountEnums;
use App\Enums\CustomEnums;
use App\Http\Requests\Auth\LoginRequest;
use App\Interfaces\Auth\IAuthRepository;


class LoginController extends Controller
{
    private IAuthRepository $serviceRepository;

    public function __construct(IAuthRepository $serviceRepo) {
        $this->serviceRepository = $serviceRepo;
    }

    public function loginu(LoginRequest $request)
    {
   $response = $this->serviceRepository->login($request->validated());
        if(!$response == true)
        return back()->with(AccountEnums::$Auth['failedLogin']);
       return redirect('/user');
    }

    public function logOut()
    {
        session()->flush();
      return  redirect('/login');
    }
}
