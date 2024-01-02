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
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('userId')->default('null');
            $table->text('userName')->default('null');
            $table->text('transId')->default('0');
            $table->text('network')->default('null');
            $table->text('amount')->default('0');
            $table->text('deno')->default('0');
            $table->text('quantity')->default(1);
            $table->text('phone')->default('0');
            $table->text('billersCode')->default('0');
            $table->text('requestId')->default('0');
            $table->text('balBefore')->default('0');
            $table->text('balAfter')->default('0');
            $table->text('status')->default('0');
            $table->mediumText('rstatus')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
