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
        Schema::create('mypins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trans_id');
            $table->string('transId');
            $table->string('userId');
            $table->string('network')->nullable();
            $table->string('deno')->nullable();
            $table->string('amount')->nullable();
            $table->string('quantity')->default(1);
            $table->mediumText('descr')->nullable();
            $table->string('pin')->nullable();
            $table->string('seria')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('userId')
             ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('trans_id')
             ->references('id')->on('transactions')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mypins');
    }
};
