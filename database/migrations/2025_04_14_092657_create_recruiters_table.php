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
        Schema::create('recruiters', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('logo')->nullable();
            $table->string('sector');
            $table->text('about');
            $table->unsignedBigInteger('id_city');
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('cascade');
            $table->date('founded_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruiters');
    }
};
