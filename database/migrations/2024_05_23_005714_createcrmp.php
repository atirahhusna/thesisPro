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
        Schema::create('crmp', function (Blueprint $table) {
            $table->string('crmp_id')->primary(); // CRMP ID (Primary Key)
            $table->string('username'); // Foreign key to user_profile

            // Defining foreign key constraint correctly
            $table->foreign('username')->references('username')->on('user_profile')->onDelete('cascade');

            $table->string('crmp_education', 100); // CRMP Education Background
            $table->string('crmp_expertise', 10); // CRMP Expertise
            $table->string('crmp_teaching', 50); // CRMP Teaching
            $table->string('crmp_biography', 100); // CRMP Biography
            $table->string('crmp_name', 50); // CRMP Name
            
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
        Schema::dropIfExists('crmp');
    }
};
