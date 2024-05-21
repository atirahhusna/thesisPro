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
            $table->increments('r_profileID')->primary(); // Profile ID (Primary Key, auto-increment)
            $table->string('r_identity_card'); // Identity card number
            $table->string('r_name', 30); // Platinum name
            $table->string('r_gender', 10); // Gender
            $table->string('r_religion', 10); // Religion
            $table->string('r_race', 10); // Race
            $table->string('r_citizenship', 15); // Citizenship
            $table->string('r_address', 100); // Address
            $table->string('r_phone_number'); // Phone number
            $table->string('r_facebook', 20); // Facebook account
            $table->string('r_curent_edu_level', 30); // Current education level
            $table->string('r_edu_field', 30); // Education field
            $table->string('r_edu_institute', 30); // Education institute
            $table->string('r_occupation', 30); // Occupation
            $table->string('r_sponsor', 30); // Sponsorship company name
            $table->string('r_program', 30); // Program
            $table->string('r_size', 5); // T-shirt size
            $table->string('r_batch', 10); // Platinum batch

            // Foreign keys
            $table->unsignedInteger('PlatinumID'); // Platinum ID (Foreign Key, auto-increment)
            $table->unsignedInteger('staffID'); // Staff ID (Foreign Key, auto-increment)

            // Foreign key constraints
            $table->foreign('PlatinumID')->references('PlatinumID')->on('some_table_name')->onDelete('cascade');
            $table->foreign('staffID')->references('staffID')->on('another_table_name')->onDelete('cascade');

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Scheme::dropIfExists('register_profile');
    }
};
