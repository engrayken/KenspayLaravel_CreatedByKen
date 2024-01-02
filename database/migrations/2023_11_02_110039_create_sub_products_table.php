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
        Schema::create('sub_products', function (Blueprint $table) {
            $table->increments('subProdId');
            // $table->text('subProdName')->default('null');
            $table->text('subProdTitle')->default('null');
            $table->text('subProdAmount')->default('null');
            $table->text('subProdAmount_variation')->default('null');
            $table->text('subProdMain_id')->default('null');
            $table->text('subProdMain_name')->default('null');
            $table->text('subProdMainCat_id')->default('null');
            $table->text('subProdMainCat_name')->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_products');
    }
};
