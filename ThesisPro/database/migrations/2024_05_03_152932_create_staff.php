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
            $table->string('StaffID')->primary();
            $table->string('Name');
            $table->text('address');
            $table->integer('PhoneNum');
            $table->string('username');
            $table->string('ReportID');
            $table->string('MentorID');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('username')->references('username')->on('user_profile');
            $table->foreign('ReportID')->references('ReportID')->on('report');
            $table->foreign('MentorID')->references('MentorID')->on('mentor');
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
