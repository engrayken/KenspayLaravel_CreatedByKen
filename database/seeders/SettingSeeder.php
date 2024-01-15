<?php

namespace Database\Seeders;

use App\Enums\SiteEnums;
use App\Models\Site\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Setting::updateOrCreate([
            "siteName" => SiteEnums::$siteName,
            "phone" => SiteEnums::$phone,
            "email" => SiteEnums::$email,
            "ehost" => SiteEnums::$ehost,
            "siteName" => "Kenspay",
            "epass"=>SiteEnums::$epass,
            "bankFee"=>SiteEnums::$bankFee,
            "monthlyCharge"=>SiteEnums::$monthlyCharge,
            "limit"=>SiteEnums::$limit,
            "monifySecret"=>SiteEnums::$monifySecret,
            "monifyProductCode"=>SiteEnums::$monifyProductCode,
            "monifyContractCode"=>SiteEnums::$monifyContractCode,
            "payStackPublic"=>SiteEnums::$payStackPublic,
            "payStackPrivate"=>SiteEnums::$payStackPrivate,
            "GsiteKey"=>SiteEnums::$GsiteKey,
            "GsecretKey"=>SiteEnums::$GsecretKey,
            "tawkId"=>SiteEnums::$tawkId,
            ]);
    }
}
