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
            $table->string('MentorID')->primary();
            $table->string('EducationLevel');
            $table->string('Username');
            $table->string('Name');
            $table->text('position')->nullable();
            $table->text('Experience')->nullable();
            $table->integer('PhoneNumber')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('Username')->references('username')->on('user_profile');
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
