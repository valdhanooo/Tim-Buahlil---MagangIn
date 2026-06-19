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
    Schema::create('vacancies', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Contoh: UI/UX Designer Intern
        $table->string('company'); // Contoh: CV Japo Indonesia
        $table->string('location'); // Contoh: Tangerang Selatan
        $table->string('type'); // Contoh: WFO / Remote
        $table->text('description'); // Deskripsi pekerjaan
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
