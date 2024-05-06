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
        Schema::create('expert_domain', function (Blueprint $table) {
            $table->string('e_ID', 10)->primary();
            $table->string('e_Name', 100);
            $table->string('e_University', 100);
            $table->string('e_Email', 50);
            $table->string('e_PhoneNum');
            $table->string('e_TitleResearch', 50);
            $table->string('e_Paper', 100);
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
        Schema::dropIfExists('expert_domain');
    }
};
