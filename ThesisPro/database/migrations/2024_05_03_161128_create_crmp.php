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
        Schema::create('crmp', function (Blueprint $table) {
            $table->string('crmp_ID', 50)->primary();
            $table->string('crmp_Education', 100);
            $table->string('crmp_Expertise', 10);
            $table->string('crmp_Teaching', 50);
            $table->string('crmp_Biography', 100);
            $table->string('crmp_Name', 50);
            $table->string('username', 50);

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
        Schema::dropIfExists('crmp');
    }
};
