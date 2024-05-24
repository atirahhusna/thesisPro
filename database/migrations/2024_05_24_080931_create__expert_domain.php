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
        Schema::create('_expert_domain', function (Blueprint $table) {
            $table->id();
            $table->string('e_Name', 100);
            $table->string('e_Email', 50);
            $table->string('e_PhoneNum');
            $table->string('e_TitleResearch', 100);
            $table->string('e_Paper', 100);
            $table->string('e_University', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_expert_domain');
    }
};
