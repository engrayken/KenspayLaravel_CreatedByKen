<?php
namespace App\Enums;

class SiteEnums{

    public static $siteName = "Kenspay";
    public static $phone ="2348138442969";
    public static $email = "support@kenspay.com.ng";
    public static $ehost = "kenspay.com.ng";
    public static $epass = "password";
    public static $address = "We base in lagos and kogi state";
    public static $bankFee = 90;
    public static $monthlyCharge = 200;
    public static $limit = 40;
    public static $monifySecret = 0;
    public static $monifyProductCode = 0;
    public static $monifyContractCode = 0;
    public static $payStackPublic = 0;
    public static $payStackPrivate = 0;
    public static $GsiteKey ="6LfTpzgcAAAAAMwOwSCY2JuYwmXLxD-UV671t6Po";
    public static $GsecretKey ="6LfTpzgcAAAAAEF8L_8rG0g58kSx_5sJAZieYKjx";
    public static $tawkId = "5d2619f822d70e36c2a51fc8";

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

    public static $successReponseCode = "s0c";
    public static $failedReponseCode = "101";
    public static $activeStatus = 1;
    public static $pendingStatus = 0;
    public static $suspendStatus = 2;
    public static $successStatus = 1;
    public static $failedStatus = 2;
    public static $settings= 1;
    public static $defaultUser= 1;
    public static $defaultUserBalance= 1000;
    public static $lowPins ="Internal Error: The Quantity of pins is not upto, Kindly reduce and try again";
    public static $lowWallet ="Internal Error: Low Wallet! Please Fund Account";
    public static $tranExit ="Internal Error: This Transaction Already Exist, Reload browser and try again";
    public static $traReach ="You have reach the quantity of pins to be printed a day";

    public static $pinNum= ['0','1','2','3','4','5','6','8','9'];
    public static $pinAlp= ['a','y','o','g','u','k','e','n','t','h'];

}
