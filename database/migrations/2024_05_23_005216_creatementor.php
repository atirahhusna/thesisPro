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
            $table->id('mentor_id'); // Mentor ID (Primary Key)
            $table->string('m_name'); // Mentor name
            $table->string('m_email'); // Mentor email
            $table->string('m_pasword'); // Mentor name
            $table->string('m_education_level')->nullable(); // Mentor education level and history
            $table->string('m_position')->nullable();
            $table->string('m_experience')->nullable(); // Mentor career experience
            $table->string('m_phone_number')->nullable(); // Mentor phone number
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
        Schema::dropIfExists('mentor');
    }
};
