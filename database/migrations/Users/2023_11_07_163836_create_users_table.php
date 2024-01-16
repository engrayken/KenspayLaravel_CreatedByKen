<?php

use App\Enums\CustomEnums;
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
            $table->string('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->uniqid();
            $table->double('pinBalance')->nullable();
            $table->double('dataBalance')->nullable();
            $table->string('password')->nullable();
            $table->string('pinEnable')->default('off');
            $table->string('bankName')->nullable();
            $table->string('customerName')->nullable();
            $table->string('customerNumber')->nullable();
            $table->string('reference')->nullable();
            $table->string('bName')->default('Kenspay Technology');
            $table->string('attempt')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->integer('status')->default(CustomEnums::$inactiveStatus);
            $table->longText('token')->nullable();
            $table->longText('utoken')->nullable();
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
