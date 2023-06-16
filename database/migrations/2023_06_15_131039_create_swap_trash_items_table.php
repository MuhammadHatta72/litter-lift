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
        Schema::create('swap_trash_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('swap_trash_id');
            $table->unsignedBigInteger('trash_id');
            $table->timestamps();

            $table->foreign('swap_trash_id')->references('id')->on('swap_trashes');
            $table->foreign('trash_id')->references('id')->on('trashes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swap_trash_items');
    }
};
