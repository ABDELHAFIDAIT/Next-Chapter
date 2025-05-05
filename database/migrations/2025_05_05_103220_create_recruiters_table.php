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
            $table->unsignedBigInteger('id_recruiter');
            $table->foreign('id_recruiter')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('company_name');
            $table->string('logo');
            $table->string('sector');
            $table->text('about');
            $table->year('established_at');
            $table->unsignedBigInteger('id_city');
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('set null')->onUpdate('cascade');
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
