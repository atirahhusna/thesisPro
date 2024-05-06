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
        Schema::create('register_profile', function (Blueprint $table) {
            $table->string('profileID', 10)->primary();
            $table->string('IdentityCard');
            $table->string('Gender', 10);
            $table->string('Religion', 10);
            $table->string('Race', 10);
            $table->string('Citizenship', 15);
            $table->string('Address', 100);
            $table->string('PhoneNumber', 15);
            $table->string('facebook', 20);
            $table->string('CuurentEduLevel', 30);
            $table->string('EduField', 30);
            $table->string('EduInstitute', 30);
            $table->string('Occupation', 30);
            $table->string('Sponsor', 30);
            $table->string('Program', 30);
            $table->string('Batch', 10);
            $table->string('PlatinumID', 10);
            $table->string('staffID', 10);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('PlatinumID')->references('platID')->on('platinum');
            $table->foreign('staffID')->references('StaffID')->on('staff');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_profile');
    }
};
