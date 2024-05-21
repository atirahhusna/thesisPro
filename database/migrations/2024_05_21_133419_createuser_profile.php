<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void
    {
        Schema::create('userProfile', function (Blueprint $table) {
            $table->string('Username', 10)->primary(); // User username (Primary Key)
            $table->string('password', 10); // User password
            $table->string('Role', 10); // User role
            $table->string('email', 20); // User email

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down():void
    {
        Schema::dropIfExists('userProfile');
    }
};
