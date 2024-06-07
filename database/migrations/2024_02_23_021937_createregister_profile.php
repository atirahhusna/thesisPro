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
        Schema::create('register_profiles', function (Blueprint $table) {
            $table->id('r_profile_id'); // Profile ID (Primary Key, auto increment)
            $table->string('r_identity_card')->nullable(); // Identity card number
            $table->string('r_password');
            $table->string('r_gender')->nullable(); // Gender
            $table->string('r_religion')->nullable(); // Religion
            $table->string('r_race')->nullable(); // Race
            $table->string('r_citizenship')->nullable(); // Citizenship
            $table->string('r_address')->nullable(); // Address
            $table->integer('r_phone_number')->nullable(); // Phone number
            $table->string('r_facebook')->nullable(); // Facebook account
            $table->string('r_current_edu_level')->nullable(); // Current education level
            $table->string('r_edu_field')->nullable(); // Education field
            $table->string('r_edu_institute')->nullable(); // Education institute
            $table->string('r_occupation', 30)->nullable(); // Occupation
            $table->string('r_sponsor', 30)->nullable(); // Sponsorship company name
            $table->string('r_program', 30)->nullable(); // Program
            $table->string('r_size', 5)->nullable(); // T-shirt size
            $table->string('r_batch', 10)->nullable(); // Platinum batch
            $table->string('r_name'); // Platinum name

            // Timestamps
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_profiles');
    }
};
