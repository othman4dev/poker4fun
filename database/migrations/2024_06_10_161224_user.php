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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('score');
            $table->string('role')->default('player');
            $table->string('status')->default('active');
            $table->string('location');
            $table->integer('balance');
            $table->string('avatar');
            $table->string('sex');
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('draws');
            $table->integer('total_games');
            $table->integer('level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
