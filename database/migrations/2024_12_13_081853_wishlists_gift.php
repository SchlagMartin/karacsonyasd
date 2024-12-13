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
        Schema::create('wishlists_gift', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wishlists_id');
            $table->unsignedBigInteger('gifts_id');
            $table->foreign('wishlists_id')->references('id')->on('wishlists')->onDelete('cascade');
            $table->foreign('gifts_id')->references('id')->on('gifts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists_gift');
    }
};
