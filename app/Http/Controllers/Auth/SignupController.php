<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\CustomClass\Authcheck;
use App\Enums\AccountEnums;
use App\Enums\CustomEnums;
use App\Http\Requests\Auth\SignupRequest;
use App\Interfaces\Auth\IAuthRepository;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    private IAuthRepository $serviceRepository;
    public function __construct(IAuthRepository $reposervice) {
        $this->serviceRepository = $reposervice;
    }

    public function signupu(SignupRequest $request)
    {
        $data = $request->validated();
    $reponse = $this->serviceRepository->signUp($data);

    if($reponse!=CustomEnums::$successReponseCode){
    return back()->with(AccountEnums::$Auth["failed"]);
        }

    return back()->with(AccountEnums::$Auth["success"]);


    }
}
