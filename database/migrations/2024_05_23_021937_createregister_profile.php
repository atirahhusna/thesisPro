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
            $table->increments('r_profile_id'); // Profile ID (Primary Key, auto increment)
            $table->string('plat_id')->foreign()->references('plat_id')->on('platinum');
            $table->string('staff_id')->foreign()->references('staff_id')->on('staff');
            $table->string('mentor_id')->foreign()->references('mentor_id')->on('mentor');
            $table->string('crmp_id')->foreign()->references('crmp_id')->on('crmp');
            $table->integer('r_identity_card'); // Identity card number
            $table->string('r_password');
            $table->string('r_gender'); // Gender
            $table->string('r_religion'); // Religion
            $table->string('r_race'); // Race
            $table->string('r_citizenship'); // Citizenship
            $table->string('r_address'); // Address
            $table->integer('r_phone_number'); // Phone number
            $table->string('r_facebook'); // Facebook account
            $table->string('r_current_edu_level'); // Current education level
            $table->string('r_edu_field'); // Education field
            $table->string('r_edu_institute'); // Education institute
            $table->string('r_occupation', 30); // Occupation
            $table->string('r_sponsor', 30); // Sponsorship company name
            $table->string('r_program', 30); // Program
            $table->string('r_size', 5); // T-shirt size
            $table->string('r_batch', 10); // Platinum batch
            $table->string('r_name', 30); // Platinum name
            // Timestamps
            $table->timestamps();
            $table->softdeletes();
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