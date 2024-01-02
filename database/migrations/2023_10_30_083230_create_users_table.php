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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('email')->unique();
            $table->text('phone');
            $table->double('pinBalance')->default(0);
            $table->double('dataBalance')->default(0);
            $table->longText('password');
            $table->text('pinEnable')->defualt('off');
            $table->text('bankName')->default('0');
            $table->text('customerName')->default('0');
            $table->text('customerNumber')->default(0);
            $table->text('reference')->default(0);
            $table->text('bName')->default('Kenspay Technology');
            $table->text('attempt')->default(0);
            $table->text('lastLogin')->default(0);
            $table->text('active')->default(0);
            $table->longText('token')->default(0);
            $table->longText('utoken')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
