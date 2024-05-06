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
        Schema::create('weekly_focus', function (Blueprint $table) {
            $table->string('wf_ID', 50)->primary();
            $table->string('wf_Type', 10);
            $table->string('wf_StartDate', 10);
            $table->string('wf_EndDate', 10);
            $table->string('wf_Comment', 100)->nullable();
            $table->string('wf_History', 100)->nullable();
            $table->string('Username', 50);
            $table->string('crmp_ID', 50);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('Username')->references('username')->on('user_profile');
            $table->foreign('crmp_ID')->references('crmp_ID')->on('CRMP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_focus');
    }
};
