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
        Schema::create('publication_reports', function (Blueprint $table) {
            $table->id('reportID'); // Primary key named publicationID
            $table->string('reportName'); // Name attribute
            $table->date('reportDate'); // Name attribute
            $table->string('reportNotes'); // Name attribute
            $table->string('reportAbstract'); // Name attribute
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_reports');
    }
};
