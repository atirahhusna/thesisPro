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
        Schema::create('weekly_foci', function (Blueprint $table) {
            $table->id('WF_ID')->primary();
            $table->text('WF_Description')->nullable();
            $table->string('WF_Type', 50)->nullable();
            $table->date('WF_SDate')->nullable();
            $table->date('WF_EDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_foci');
    }
};
