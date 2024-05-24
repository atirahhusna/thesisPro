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
            $table->string('plat_id')->primary(); // Platinum ID (Primary Key)
            $table->string('username')->foreign()->references('username')->on('userProfile');
            $table->string('crmp_id')->foreign()->references('crmp_id')->on('crmp');
            $table->string('staff_id')->foreign()->references('staff_id')->on('staff');
            // Timestamps
            $table->timestamps(); // Note the correct method name
            $table->softDeletes(); // Note the correct method name
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