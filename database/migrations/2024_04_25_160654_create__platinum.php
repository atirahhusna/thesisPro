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
        Schema::create('_platinum', function (Blueprint $table) {
            $table->id('platID');
            $table->string('Title');
            $table->string('FullName');
            $table->integer('crmpID');
            $table->string('staffID');
            $table->string('username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_platinum');
    }
};
