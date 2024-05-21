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
        Schema::create('publication', function (Blueprint $table) {  // Use plural table name for convention
            $table->id('publication_ID',10); // Auto-incrementing ID
            $table->string('publication_title', 100);
            $table->string('publication_DOI', 100)->nullable();
            $table->string('publication_abstract', 255)->nullable();
            $table->string('publication_year', 100)->nullable();
            $table->string('publication_authors', 100);
            $table->string('publication_institution', 100);
            $table->string('publication_types', 50);
            $table->timestamps(); // Add created_at and updated_at timestamps
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
