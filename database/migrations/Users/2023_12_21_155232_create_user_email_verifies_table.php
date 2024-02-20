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
        Schema::create('user_email_verifies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userId');
            $table->string('userEmail');
            $table->string('token');
            $table->timestamps();

            // $table->foreign('userId')
            //  ->references('id')->on('p_users')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_email_verifies');
    }
};
