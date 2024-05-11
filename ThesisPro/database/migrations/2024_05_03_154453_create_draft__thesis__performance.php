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
        Schema::create('thesis', function (Blueprint $table) {
            $table->string('dt_ID', 50)->primary();
            $table->string('dt_Title', 100);
            $table->integer('dt_DraftNum');
            $table->integer('dt_PagesNum');
            $table->date('dt_Completion')->nullable();
            $table->integer('dt_DDC')->nullable();
            $table->string('dt_Comment', 100)->nullable();
            $table->string('dt_History', 100)->nullable();
            $table->string('username', 30);

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
        Schema::dropIfExists('draft__thesis__performance');
    }
};
