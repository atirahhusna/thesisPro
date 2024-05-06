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
        Schema::create('_mentor', function (Blueprint $table) {
            $table->id('MentorID');
            $table->string('Name');
            $table->string('EducationLevel');
            $table->string('position');
            $table->string('experience');
            $table->integer('PhoneNumber');
            $table->string('username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_mentor');
    }
};
