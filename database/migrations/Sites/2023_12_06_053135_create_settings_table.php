<?php

use App\Enums\SiteEnums;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('siteName')->default(SiteEnums::$siteName);
            $table->string('phone')->default(SiteEnums::$phone);
            $table->string('email')->default(SiteEnums::$email);
            $table->string('ehost')->default(SiteEnums::$ehost);
            $table->string('epass')->default(SiteEnums::$epass);
            $table->string('address')->default(SiteEnums::$address);
            $table->string('bankFee')->default(SiteEnums::$bankFee);
            $table->string('monthlyCharge')->default(SiteEnums::$monthlyCharge);
            $table->integer('limit')->default(SiteEnums::$limit);
            $table->string('monifySecret')->default(SiteEnums::$monifySecret);
            $table->string('monifyProductCode')->default(SiteEnums::$monifyProductCode);
            $table->integer('monifyContractCode')->default(SiteEnums::$monifyContractCode);
            $table->string('payStackPublic')->default(SiteEnums::$payStackPublic);
            $table->string('payStackPrivate')->default(SiteEnums::$payStackPrivate);
            $table->string('GsiteKey')->default(SiteEnums::$GsiteKey);
            $table->string('GsecretKey')->default(SiteEnums::$GsecretKey);
            $table->string('tawkId')->default(SiteEnums::$tawkId);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
