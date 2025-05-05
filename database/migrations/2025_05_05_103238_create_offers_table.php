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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recruiter');
            $table->foreign('id_recruiter')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->enum('type', ['Full Time', 'Part Time', 'Internship','CDD', 'CDI','Freelance']);
            $table->date('closing_date');
            $table->enum('status', ['closed', 'opened'])->default('opened');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
