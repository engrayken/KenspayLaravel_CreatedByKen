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
            $table->id();
            $table->string('userId');
            $table->string('userName')->nullable();
            $table->string('transId')->nullable();
            $table->string('network')->nullable();
            $table->string('amount')->nullable();
            $table->string('deno')->nullable();
            $table->string('quantity')->default(1);
            $table->string('phone')->nullable();
            $table->string('billersCode')->nullable();
            $table->string('requestId')->nullable();
            $table->string('balBefore')->nullable();
            $table->string('balAfter')->nullable();
            $table->string('status')->nullable();
            $table->mediumText('rstatus')->nullable();
            $table->timestamps();

            $table->foreign('userId')
             ->references('id')->on('users')
            ->onDelete('cascade');
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
