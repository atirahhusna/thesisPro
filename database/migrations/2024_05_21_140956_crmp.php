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
            $table->id('crmp_ID',10); // Auto-incrementing ID
            $table->string('crmp_Name', 100);
            $table->string('crmp_EducationBackground', 100)->nullable();
            $table->string('crmp_Expertise', 255)->nullable();
            $table->string('crmp_Teaching', 100)->nullable();
            $table->string('crmp_Biographyh', 100);
            $table->timestamps(); // Add created_at and updated_at timestamps

            $table->unsignedInteger('StaffID'); // Platinum ID (Foreign Key, auto-increment)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
