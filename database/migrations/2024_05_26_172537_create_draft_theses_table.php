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
        Schema::create('draft_theses', function (Blueprint $table) {
            $table->string('DT_Title', 100)->primary();
            $table->integer('DT_DraftNum')->nullable();
            $table->integer('DT_PagesNum')->nullable();
            $table->text('DT_Comment')->nullable();
            $table->integer('DT_DDC')->nullable();
            $table->date('DT_Completion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draft_theses');
    }
};
