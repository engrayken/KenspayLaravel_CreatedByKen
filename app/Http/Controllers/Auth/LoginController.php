<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CustomClass\Authcheck;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function loginu(REQUEST $request)
    {
        $verify= new Authcheck();
        $correct= $verify->loginCheck($request->email,$request->password);
        if($correct!=1){
            return back()->with('failed','Login Failed, Kindly Check Your Input');
        }

        $request->validate([
            // 'name'=>'required|max:15',
            'email'=>'required',
            'password'=>'required'
        ],
    [
        // 'name'=>['required'=>'Full name can not be empty',
        // 'max'=>'Full Name can not be more than 15'],
        'email'=>['required'=>'Email can not be empty'],
        // 'phone'=>['required'=>'Phone Number can not be empty',
        // 'numeric'=>'Phone number must be Numeric',
        // 'unique'=>'Phone number already exist'],
        'password'=>['password'=>'password must not be empty']

]);

$check= User::where('email','=',$request->email)->first();

if($check){

   if(Hash::check($request->password, $check->password)){

       // return back()->with('success', 'Login successful');
       $request->session()->put('loginid', $check->id);
       return redirect('/user');
    // return $check->email;
   } else{

       return back()->with('failed', 'Invalid Email or Password');

   }
} else{
    return back()->with('failed', 'Invalid Email or Password');
}



    }

    public function logOut()
    {
        session()->flush();
      return  redirect('/login');
    }
}
