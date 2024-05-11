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
        Schema::create('publication', function (Blueprint $table) {
            $table->string('publication_ID', 10)->primary();
            $table->string('title', 100);
            $table->string('DOI', 100);
            $table->string('abstract', 100);
            $table->string('keywords', 50);
            $table->string('authors', 50);
            $table->string('institution', 100);
            $table->string('types', 50);
            $table->date('publicationDate');
            $table->string('platID', 10);

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('platID')->references('platID')->on('platinum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication');
    }
};
