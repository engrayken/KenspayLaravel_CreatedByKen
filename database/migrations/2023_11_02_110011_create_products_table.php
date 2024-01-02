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
            $table->text('prodName')->default('null');
            $table->text('prodTitle')->default('null');
            $table->text('prodSlogan')->default('null');
            $table->text('prodCat_id')->default('null');
            $table->text('prodCat_name')->default('null');
            $table->timestamps();
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
