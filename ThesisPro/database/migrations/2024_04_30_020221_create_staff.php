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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('StaffID');
            $table->string('Name');
            $table->string('address');
            $table->integer('PhoneNumber');
            $table->string('username'); // Foreign key for UserProfile
            $table->string('MentorID'); // Foreign key for Mentor
            $table->string('ReportID'); // Foreign key for Report

            $table->foreign('username')->references('username')->on('UserProfile')->onDelete('cascade');
            $table->foreign('MentorID')->references('MentorID')->on('Mentor')->onDelete('cascade');
            $table->foreign('ReportID')->references('ReportID')->on('Report')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
