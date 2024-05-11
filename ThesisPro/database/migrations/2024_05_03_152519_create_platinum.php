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
        Schema::create('platinum', function (Blueprint $table) {
            $table->string('platID')->primary();
            $table->string('Title');
            $table->string('crmp_ID');
            $table->string('staffID');
            $table->string('username');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('crmp_ID')->references('id')->on('CRMP');
            $table->foreign('staffID')->references('StaffID')->on('staff');
            $table->foreign('username')->references('username')->on('user_profile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platinum');
    }
};
