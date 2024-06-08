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
            $table->unsignedBigInteger('username'); // Foreign key column
            // Define the foreign key constraint
            $table->foreign('username')->references('username')->on('user_profiles');
            $table->string('s_name', 100)->nullable(); // Staff Name
            $table->string('s_password')->nullable();
            $table->string('s_address', 100)->nullable(); // Staff address
            $table->string('s_phone_number')->nullable(); // Staff phone number
            $table->string('s_email')->nullable(); // Staff phone number
            
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
        Schema::dropIfExists('staff');
    }
};
