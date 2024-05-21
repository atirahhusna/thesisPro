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
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('StaffID'); // Staff ID (Primary Key, auto increment)
            $table->string('Name', 100); // Staff Name
            $table->string('address', 100); // Staff address
            $table->string('PhoneNum'); // Staff phone number
            $table->string('username', 10); // Staff username (Foreign Key)

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
        Schema::dropIfExists('staff');
    }
};
