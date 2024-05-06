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
        Schema::create('_staff', function (Blueprint $table) {
            $table->id('StaffID');
            $table->string('Name');
            $table->string('address');
            $table->integer('PhoneNumber');
            $table->string('username');
            $table->string('ReportID');
            $table->string('mentorID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_staff');
    }
};
