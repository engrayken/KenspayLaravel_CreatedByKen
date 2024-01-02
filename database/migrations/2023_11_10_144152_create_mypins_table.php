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
            $table->increments('id');
            $table->text('transId')->default(0);
            $table->text('userId')->default(0);
            $table->text('network')->default('null');
            $table->text('deno')->default(0);
            $table->text('amount')->default(0);
            $table->text('quantity')->default(1);
            $table->mediumText('descr')->default('null');
            $table->text('pin')->default(0);
            $table->text('seria')->default(0);
            $table->text('status')->default(0);
            $table->timestamps();
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
