<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site\Cpage;
use App\Models\Site\Setting;
use App\CustomClass\BalanceCharge;
use App\Models\Users\User;
use App\Models\Users\UserEmailVerify;


class WebsiteController extends Controller
{
    //


    public function index()
    {
        $settings = Setting::where('id','=','1')->first();

        return view('home.index',compact('settings'));
    }

    public function privacy()
    {
        $cpage= Cpage::where(['type'=>'privacy'])->first();

        $title='Privacy policy';
        return view('home.privacy',compact('cpage','title'));
    }

    public function terms()
    {
        $cpage= Cpage::where(['type'=>'terms'])->first();
        $settings = Setting::where('id','=','1')->first();

        $title='Terms of service';
        return view('home.terms',compact('cpage','title','settings'));
    }


    public function documentation()
    {
        $title='Api documentation';
        $settings = Setting::where('id','=','1')->first();
        return view('home.documentation',compact('title','settings'));
    }

    public function contact()
    {
        $cpage= Cpage::where(['type'=>'contact'])->first();
        $title='Cantact page';
        $settings = Setting::where('id','=','1')->first();
        return view('home.contact',compact('cpage','title','settings'));
    }


    public function partner()
    {
        $title='partner with us';
        $settings = Setting::where('id','=','1')->first();
        return view('home.partner',compact('title','settings'));
    }
    public function ticket()
    {
        $title='widget ticket send us an email message';
        $settings = Setting::where('id','=','1')->first();
        return view('home.widget-ticket',compact('title','settings'));
    }

    public function login()
    {
        $title='Login page';
        $settings = Setting::where('id','=','1')->first();

        return view('home.login',compact('title','settings'));
    }

    public function signup()
    {
        $title='Registration page';
        $settings = Setting::where('id','=','1')->first();
        return view('home.signup',compact('title','settings'));
    }



    public function forgot()
    {
        $title='Forgot Password';
        $settings = Setting::where('id','=','1')->first();
        return view('home.forgot',compact('title','settings'));
    }

        public function confirmview()
    {
        $settings = Setting::where('id','=','1')->first();
        $title='confirm email';
        return view('accessory.emc',compact('title','settings'));

    }

    public function emconf($token)
    {
        $settings = Setting::where('id','=','1')->first();
        $user = User::where('token','=',$token)->first();
        $vtoken = UserEmailVerify::where('token','=',$token)->first();
        $title='confirm email';
        if($user && $vtoken && $user->active!=1 && $vtoken->userEmail ===$user->email && $vtoken->token ===$user->token)
        {
            $userUp = User::where('token','=',$token)->update(['active'=>'1','token'=>'0']);
        $vtokend = UserEmailVerify::where('token','=',$token)->delete();
             return redirect('confirmview')->with(['display'=>'yes','success'=>'Account verified successfully <a href="user">Click here to Contine</a>']);
        }
        // return view('accessory.emc',compact('title','settings'))->with('success','email failed');
        return redirect('confirmview')->with(['failed'=>'error: Verification link expired']);
        // return 'sdfghj';
    }


}
