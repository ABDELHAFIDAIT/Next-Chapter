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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_offer');
            $table->foreign('id_offer')->references('id')->on('offers')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('id_candidate');
            $table->foreign('id_candidate')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('motivation_letter');
            $table->string('cv');
            $table->enum('status', ['pending', 'accepted', 'rejected','interview'])->default('pending');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
