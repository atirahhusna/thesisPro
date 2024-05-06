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
            $table->id('MentorID');
            $table->string('EducationLevel');
            $table->string('name');
            $table->string('position');
            $table->text('experience');
            $table->integer('PhoneNumber');
            $table->string('Username');//foreign key for username
            $table->foreign('username')->references('username')->on('UserProfile')->onDelete('cascade');
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
