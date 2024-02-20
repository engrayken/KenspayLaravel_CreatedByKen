<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site\Cpage;
use App\Models\Site\Setting;
use App\CustomClass\BalanceCharge;
use App\Enums\PageTitleEnums;
use App\Enums\SiteEnums;
use App\Models\Users\PUser;
use App\Models\Users\User;
use App\Models\Users\UserEmailVerify;


class WebsiteController extends Controller
{
    //


    public function index()
    {
   $settings = Setting::findOrfail(SiteEnums::$settings);

        return view('home.index',compact('settings'));
    }

    public function privacy()
    {
        $cpage= Cpage::where(['type'=>'privacy'])->first();

        $title=PageTitleEnums::$titlePageP;
        return view('home.privacy',compact('cpage','title'));
    }

    public function terms()
    {
        $cpage= Cpage::where(['type'=>'terms'])->first();
   $settings = Setting::findOrfail(SiteEnums::$settings);
        $title=PageTitleEnums::$titlePageT;
        return view('home.terms',compact('cpage','title','settings'));
    }


    public function documentation()
    {
        $title=PageTitleEnums::$titlePageA;
   $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.documentation',compact('title','settings'));
    }

    public function contact()
    {
        $cpage= Cpage::where(['type'=>'contact'])->first();
        $title=PageTitleEnums::$titlePageC;
   $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.contact',compact('cpage','title','settings'));
    }


    public function partner()
    {
        $title=PageTitleEnums::$titlePagePT;
   $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.partner',compact('title','settings'));
    }
    public function ticket()
    {
        $title=PageTitleEnums::$titlePageTK;
   $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.widget-ticket',compact('title','settings'));
    }

    public function login()
    {
        $title=PageTitleEnums::$titlePageLG;
   $settings = Setting::findOrfail(SiteEnums::$settings);

        return view('home.login',compact('title','settings'));
    }

    public function signup()
    {
        $title=PageTitleEnums::$titlePageSG;
   $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.signup',compact('title','settings'));
    }



    public function forgot()
    {
        $title=PageTitleEnums::$titlePageFG;
   $settings = Setting::findOrfail(SiteEnums::$settings);
        return view('home.forgot',compact('title','settings'));
    }

        public function confirmview()
    {
   $settings = Setting::findOrfail(SiteEnums::$settings);
        $title='confirm email';
        return view('accessory.emc',compact('title','settings'));

    }

    public function confirmEmail($token)
    {
   $settings = Setting::findOrfail(SiteEnums::$settings);
        $user = PUser::where('token','=',$token)->first();
        $vtoken = UserEmailVerify::where('token','=',$token)->first();
        $title='confirm email';
        if($user && $vtoken && $vtoken->userEmail ===$user->email && $vtoken->token ===$user->token)
        {
        $newUser = User::create(["id"=>$user->id,"name"=>$user->name,"email"=>$user->email,"phone"=>$user->phone,"password"=>$user->password,"token"=>$user->token,"reference"=>$user->reference,"status"=>$user->status,"website"=>$user->website]);
        if($newUser)
        {
        $userUp = PUser::where('token','=',$token)->delete();
        $vtokend = UserEmailVerify::where('token','=',$token)->delete();
        return redirect('confirmview')->with(['display'=>'yes','success'=>'Account verified successfully <a href="user">Click here to Continue</a>']);
        }
        return redirect('confirmview')->with(['failed'=>'error: Couldnt Create User Contact admin']);

            }
        // return view('accessory.emc',compact('title','settings'))->with('success','email failed');
        return redirect('confirmview')->with(['failed'=>'error: Verification link expired']);
        // return 'sdfghj';
    }


}
