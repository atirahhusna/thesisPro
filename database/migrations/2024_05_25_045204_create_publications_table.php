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
            $table->unsignedBigInteger('r_profile_id');
            $table->foreign('r_profile_id')->references('r_profile_id')->on('register_profiles');

            $table->string('publication_title', 255);
            $table->string('publication_DOI', 100)->nullable();
            $table->text('publication_abstract')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('publication_authors', 255);
            $table->string('publication_institution', 255);
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