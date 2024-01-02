<?php

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
            $table->text('siteName')->default('Kenspay');
            $table->text('phone')->default('2348126216200');
            $table->text('email')->default('support@kenspay.com.ng');
            $table->text('ehost')->default('Kenspay');
            $table->text('epass')->default('Kenspay');
            $table->text('address')->default('We base in lagos and kogi state');
            $table->text('bankFee')->default(90);
            $table->text('monthlyCharge')->default(200);
            $table->text('limit')->default(40);
            $table->text('monifySecret')->default('0');
            $table->text('monifyProductCode')->default('0');
            $table->text('monifyContractCode')->default('0');
            $table->text('payStackPublic')->default('0');
            $table->text('payStackPrivate')->default('0');
            $table->text('GsiteKey')->default('6LfTpzgcAAAAAMwOwSCY2JuYwmXLxD-UV671t6Po');
            $table->text('GsecretKey')->default('6LfTpzgcAAAAAEF8L_8rG0g58kSx_5sJAZieYKjx');
            $table->text('tawkId')->default('5d2619f822d70e36c2a51fc8');
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
