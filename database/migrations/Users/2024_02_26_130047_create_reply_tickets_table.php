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
        Schema::create('reply_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticketId');
            $table->string('ticket_id')->nullable();
            $table->string('reply_id')->nullable();
            $table->string('reply_rule')->default('admin');
            $table->string('reply')->nullable();
            $table->string('status')->nullable();
            $table->foreign('ticketId')
             ->references('id')->on('tickets')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply_tickets');
    }
};
