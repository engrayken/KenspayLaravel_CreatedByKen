<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\CustomClass\Authcheck;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signupu(REQUEST $request)
    {
        $verify= new Authcheck();
        $correct= $verify->regCheck($request->name,$request->email,$request->phone,$request->password);
        if($correct!=1){
            return back()->with('failed','Registration Failed, Kindly Check Your Input');
        }

        $request->validate([
            'name'=>'required|max:15',
            'email'=>'required|unique:users',
            'phone'=>'required|numeric|unique:users',
            'password'=>'required'
        ],
    [
        'name'=>['required'=>'Full name can not be empty',
        'max'=>'Full Name can not be more than 15'],
        'email'=>['required'=>'Email can not be empty',
        'unique'=>'Email address already Exist'],
        'phone'=>['required'=>'Phone Number can not be empty',
        'numeric'=>'Phone number must be Numeric',
        'unique'=>'Phone number already exist'],
        'password'=>['password'=>'password must not be empty']

]);

$check= new User();
$check->name=$request->name;
$check->email=$request->email;
$check->phone=$request->phone;
$check->reference=time();
$check->password=Hash::make($request->password);
$save= $check->save();
if($save){

    return back()->with('success', 'Registration Successful <a href="/login">click here</a> to login');

} else{

return back()->with('failed', 'Registration Failed');

}

    }
}
