<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\IAdminRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private IAdminRepository $LoginReposervice;
    public function __construct(IAdminRepository $LoginRepo) {
        $this->LoginReposervice = $LoginRepo;
    }
    public function login(Request $request)
    {
    $val = ['password'=> ['required', 'regex:/[!@#$%^&*(),.?\":{}|<>]/','min:8']];
    $request->validate([
    "email" => "required|email",
    "password" => $val['password'],
    ],
    [
        "password.regex"=>"Your new password must contain one of this special characters eg !@#$%^&"
    ]);

    $reponse = $this->LoginReposervice->login($request);

    return $reponse;
    }

    public function logout()
    {
        session()->flush();
        return redirect('admin/2718/2718')->with('failed','you are loged out');
    }
}
