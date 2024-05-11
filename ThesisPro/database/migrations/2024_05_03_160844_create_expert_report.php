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
        Schema::create('expert_report', function (Blueprint $table) {
            $table->string('EReport_ID', 10)->primary();
            $table->string('EReport_Type', 50);
            $table->string('EReport_Name', 100);
            $table->date('EReport_Date');
            $table->string('username', 100);

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('username')->references('username')->on('user_profile');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_report');
    }
};
