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
        Schema::create('mentor', function (Blueprint $table) {
            $table->string('mentor_id')->primary(); // Mentor ID (Primary Key)
            $table->string('m_username')->foreign()->references('username')->on('user_profiles');
            $table->string('m_name'); // Mentor name
            $table->string('m_education_level')->nullable(); // Mentor education level and history
            $table->string('m_position', 100)->nullable();
            $table->string('m_experience', 200)->nullable();// Mentor career experience
            $table->string('m_phone_number'); // Mentor phone number
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
        Schema::dropIfExists('mentor');
    }
};