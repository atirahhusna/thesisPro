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
        Schema::create('platinum', function (Blueprint $table) {
            $table->id('platID');
            $table->string('Title');
            $table->string('FullName');
            $table->string('crmp_ID');//foreign key for crmp
            $table->string('staffID');//foreign key for staff
            $table->string('username');//foreign key for username
            $table->foreign('username')->references('username')->on('UserProfile')->onDelete('cascade');
            $table->foreign('crmp_ID')->references('crmp_ID')->on('CRMP')->onDelete('cascade');
            $table->foreign('staffID')->references('staffID')->on('Staff')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platinum');
    }
};
