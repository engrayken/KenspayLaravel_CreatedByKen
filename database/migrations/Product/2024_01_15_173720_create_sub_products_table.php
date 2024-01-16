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
            // $table->string('subProdName')->nullable();
            $table->string('subProdTitle')->nullable();
            $table->string('subProdAmount')->nullable();
            $table->string('subProdAmount_variation')->nullable();
            $table->integer('subProdMain_id')->unsigned();
            $table->string('subProdMain_name')->nullable();
            $table->integer('subProdMainCat_id')->unsigned();
            $table->string('subProdMainCat_name')->nullable();
            $table->timestamps();
            $table->foreign('subProdMain_id')
             ->references('prodId')->on('products')
            ->onDelete('cascade');

            $table->foreign('subProdMainCat_id')
             ->references('catId')->on('categories')
            ->onDelete('cascade');
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
