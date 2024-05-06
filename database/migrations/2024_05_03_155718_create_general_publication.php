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
        Schema::create('general_publication', function (Blueprint $table) {
            $table->string('GPublicationID', 10)->primary();
            $table->string('GTitle', 100);
            $table->date('GPublicationDate');
            $table->string('GAuthors', 100);
            $table->string('GCategory', 100);
            $table->string('GKeywords', 50);
            $table->string('GAbstract', 50);
            $table->string('platID', 10);
            $table->string('MentorID', 10);

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('platID')->references('platID')->on('platinum');
            $table->foreign('MentorID')->references('MentorID')->on('mentor');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_publication');
    }
};
