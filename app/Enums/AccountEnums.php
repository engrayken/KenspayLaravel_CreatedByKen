<?php
namespace App\Enums;

class AccountEnums{
    public static $verifiedAccount = 1;
    public static $unverifiedAccount = 0;
    public static $suspendedAccount = -1;

        public static $Auth = [
        "sessionLogin"=>'loginid',
        "success"=> ["success"=>"Registration Successful <a href='/login'>click here</a> to login"],
        "failed"=> ["failed"=>"Registration Failed"],

        "successLogin"=> ["success"=>"Registration Successful <a href='/login'>click here</a> to login"],
        "failedLogin"=> ["failed"=>"Email or Password are Invalid"],
        "sessionFailed"=> ["failed"=>"You Must Login First"]

    ];

    public static $activeStatus = 1;
    public static $inactiveStatus = 0;
    public static $suspendStatus = 2;

    public static $facebookChannel = "facebook";
    public static $googleChannel = "google";
    public static $linkedinChannel = "linkedin";
    public static $webAppChannel = "web app";

    public static $pendingInvitation = "pending";
    public static $acceptedInvitation = "accepted";

    public static $thirdPartyChannels = [
        "google",
        "facebook",
        "linkedin",
    ];
    public static $appChannels = [
        "web app",
        "mobile app"
    ];

}
