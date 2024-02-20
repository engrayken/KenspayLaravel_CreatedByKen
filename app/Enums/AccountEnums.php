<?php
namespace App\Enums;

class AccountEnums{
    public static $verifiedAccount = 1;
    public static $unverifiedAccount = 0;
    public static $suspendedAccount = -1;

        public static $Auth = [
        "sessionLogin"=>'loginid',
        "success"=> ["success"=>"Registration Successful, Click the link inside your mail to verify Account"],
        "failed"=> ["failed"=>"Registration Failed"],

        "successLogin"=> ["success"=>"Registration Successful <a href='/login'>click here</a> to login"],
        "failedLogin"=> ["failed"=>"Email or Password are Invalid"],
        "failedLoginEmail"=> ["failed"=>"A verification link has been sent to your email click it to verify or your account will be deleted after aday"],
        "sessionFailed"=> ["failed"=>"You Must Login First"]

    ];

    public static $activeStatus = 1;
    public static $inactiveStatus = 0;
    public static $suspendStatus = 2;

    public static $prof ="Profile Setting";
    // public static $pro ="Profile Setting";


}
