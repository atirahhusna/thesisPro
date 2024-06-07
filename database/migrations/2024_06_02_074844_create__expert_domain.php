<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expertdomain', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('platID');
            //$table->foreign('platID')->references('platID')->on('');
            $table->string('e_Name', 100);
            $table->string('e_Email', 50);
            $table->string('e_PhoneNum');
            $table->string('e_TitleResearch', 100);
            $table->string('e_Paper', 100);
            $table->string('e_University', 100);
            $table->string('e_Expertise', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expertdomain');
    }
};
