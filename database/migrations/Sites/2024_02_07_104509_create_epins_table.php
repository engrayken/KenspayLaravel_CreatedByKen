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
        Schema::create('epins', function (Blueprint $table) {
            $table->increments("id");
            $table->string("net")->nullable();
            $table->string("deno")->nullable();
            $table->string("seria")->nullable();
            $table->string("pin")->nullable();
            $table->mediumText("descr")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epins');
    }
};
