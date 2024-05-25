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
            $table->string('username')->foreign()->references('username')->on('user_profile');
            $table->string('name'); // Mentor name
            $table->string('education_level'); // Mentor education level and history
            $table->string('position', 100);
            $table->string('experience', 200); // Mentor career experience
            $table->string('phone_number'); // Mentor phone number
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