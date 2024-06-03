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
            $table->integer('crmp_id')->autoIncrement(); // CRMP ID (Primary Key
            // Defining foreign key constraint correctly
            $table->string('crmp_education', 100)->nullable(); // CRMP Education Background
            $table->string('crmp_expertise', 10)->nullable(); // CRMP Expertise
            $table->string('crmp_teaching', 50)->nullable(); // CRMP Teaching
            $table->string('crmp_biography', 100)->nullable(); // CRMP Biography
            $table->string('crmp_name', 50)->nullable(); // CRMP Name
            
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
