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
            $table->string('staff_id')->primary(); // Staff ID (Primary Key)
            $table->string('username')->foreign()->references('username')->on('user_profile');
            $table->string('name', 100); // Staff Name
            $table->string('address', 100); // Staff address
            $table->string('phone_number'); // Staff phone number
            
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
        Schema::dropIfExists('staff');
    }
};
