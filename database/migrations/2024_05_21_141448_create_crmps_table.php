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
            $table->string('crmp_ID', 50)->primary(); // CRMP ID (Primary Key)
            $table->string('crmp_Education', 100); // CRMP Education Background
            $table->string('crmp_Expertise', 10); // CRMP Expertise
            $table->string('crmp_Teaching', 50); // CRMP Teaching
            $table->string('crmp_Biography', 100); // CRMP Biography
            $table->string('crmp_Name', 50); // CRMP Name
            $table->string('username', 50); // Username (Foreign Key)

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
        Schema::dropIfExists('crmp');
    }
};
