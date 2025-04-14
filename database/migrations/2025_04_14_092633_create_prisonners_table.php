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
        Schema::create('prisonners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prisonner')->unique();
            $table->foreign('id_prisonner')->references('id')->on('users')->onDelete('cascade');
            $table->string('cv')->nullable();
            $table->text('about')->nullable();
            $table->unsignedBigInteger('id_city')->nullable();
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('cascade');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prisonners');
    }
};
