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
        Schema::create('swap_trashes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('token');
            $table->string('date');
            $table->string('total_weight');
            $table->string('total_money');
            $table->string('status_swap');
            $table->string('status');
            $table->string('choose_ticket_money');
            $table->string('no_rekening');
            $table->string('bank_name');
            $table->string('message');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swap_trashes');
    }
};
