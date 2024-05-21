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
            $table->bigIncrements('MentorID'); // Mentor ID (Primary Key, auto increment)
            $table->string('Name', 100); // Mentor name
            $table->string('EducationLevel', 500); // Mentor education level and history
            $table->string('Position', 100); // Mentor position in ThesisPro system
            $table->string('Experience', 200); // Mentor career experience
            $table->string('PhoneNumber'); // Mentor phone number
            $table->string('username', 10); // From userProfile table (Foreign Key)

            // Foreign key constraint
            $table->foreign('username')->references('username')->on('userProfile')->onDelete('cascade');

            // Timestamps
            $table->timestamps();
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
