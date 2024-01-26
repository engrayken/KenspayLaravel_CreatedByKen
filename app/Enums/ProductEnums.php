<?php
namespace App\Enums;
class ProductEnums{

    public static $prodCat_name = [
        "pinCat"=>["prodCat_name"=>"pin"],
        "pinTitle"=>"Generate Recharge Card Pin",

        "airtCat"=>["prodCat_name"=>"airtime"],
        "airtTitle"=>"Buy Airtime Vtu",

        "dataCat"=>["prodCat_name"=>"data"],
        "dataTitle"=>"Buy Data",

        "tvCat"=>["prodCat_name"=>"tv"],
        "tvTitle"=>"Tv subscription",

        "eduCat"=>["prodCat_name"=>"education"],
        "eduTitle"=>"Educational Payment",

        "electCat"=>["prodCat_name"=>"electricity"],
        "electTitle"=>"Electricity Bill",
];
    public static $failedReponseCode = "2718";

    public static $activeStatus = 1;
    public static $inactiveStatus = 0;
    public static $suspendStatus = 2;

}
