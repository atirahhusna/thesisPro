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
        Schema::create('platinum', function (Blueprint $table) {
            $table->string('platID'); // Platinum ID (Primary Key, auto increment)
            $table->string('crmp_ID', 50); // CRMP ID
            $table->string('StaffID'); // Staff ID (Primary Key, auto increment)
            $table->string('username', 10); // Username (Foreign Key)

            // Foreign key constraints
            $table->foreign('crmp_ID')->references('crmp_ID')->on('crmp')->onDelete('cascade');
            $table->foreign('StaffID')->references('StaffID')->on('staff')->onDelete('cascade');
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
        Schema::dropIfExists('platinum');
    }
};
