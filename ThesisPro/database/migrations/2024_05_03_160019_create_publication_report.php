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
        Schema::create('publication_report', function (Blueprint $table) {
            $table->string('reportID', 10)->primary();
            $table->string('reportName', 100);
            $table->date('reportDate');
            $table->string('reportNotes', 50);
            $table->string('reportAbstract', 50);
            $table->string('MentorID', 10);

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('MentorID')->references('MentorID')->on('mentor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_report');
    }
};
