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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('prodId');
            $table->string('prodName')->nullable();
            $table->string('prodTitle')->nullable();
            $table->string('prodSlogan')->nullable();
            $table->integer('prodCat_id')->unsigned();
            $table->string('prodCat_name')->nullable();
            $table->timestamps();
            $table->foreign('prodCat_id')
             ->references('catId')->on('categories')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
