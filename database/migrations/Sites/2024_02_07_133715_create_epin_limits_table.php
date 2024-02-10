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
        Schema::create('epin_limits', function (Blueprint $table) {
            $table->increments("id");
            $table->string("net")->nullable();
            $table->string("deno")->nullable();
            $table->string("balance")->nullable();
            $table->string("limit")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epin_limits');
    }
};
