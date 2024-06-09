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
            $table->id();
            $table->integer('DT_DraftNum');
            $table->bigInteger('r_profile_id')->unsigned()->nullable();
            $table->foreign('r_profile_id')->references('r_profile_id')->on('register_profiles')->onDelete('cascade');
            $table->string('DT_Title', 100)->nullable();
            $table->integer('DT_PagesNum')->nullable();
            $table->integer('DT_TotPagesNum')->nullable();
            $table->date('DT_SDate')->nullable();
            $table->date('DT_EDate')->nullable();
            $table->date('DT_DaysPrepare')->nullable();
            $table->text('DT_Comment')->nullable();
            $table->integer('DT_DDC')->nullable();
            $table->integer('DT_Completion')->nullable();
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
