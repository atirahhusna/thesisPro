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
            $table->id('staff_id'); // Staff ID (Primary Key)
            $table->unsignedBigInteger('username');
            $table->foreign()->references('username')->on('user_profiles');
            $table->string('s_name', 100); // Staff Name'
            $table->string('s_password');
            $table->string('s_address', 100); // Staff address
            $table->string('s_phone_number'); // Staff phone number
            
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
