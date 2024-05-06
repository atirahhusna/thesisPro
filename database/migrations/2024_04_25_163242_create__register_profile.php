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
        Schema::create('_register_profile', function (Blueprint $table) {
            $table->id('profileID');
            $table->integer('IdentityCard');
            $table->string('Gender');
            $table->string('Religion');
            $table->string('Race');
            $table->string('Citizenship');
            $table->string('Address');
            $table->integer('PhoneNumber');
            $table->string('facebook');
            $table->string('CuurentEduLevel');
            $table->string('EduField');
            $table->string('EduInstitute');
            $table->string('Occupation');
            $table->string('Sponsor');
            $table->string('Program');
            $table->string('Batch');
            $table->string('platID');
            $table->string('StaffID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_register_profile');
    }
};
