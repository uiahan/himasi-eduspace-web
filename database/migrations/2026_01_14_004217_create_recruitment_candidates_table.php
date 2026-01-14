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
        Schema::create('recruitment_candidates', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('nim');
            $table->string('class');
            $table->string('prodi')->default('Sistem Informasi');
            $table->string('email');
            $table->string('phone');
            $table->string('reason');
            $table->string('portofolio');
            $table->string('department')->nullable();
            $table->string('department_second')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitment_candidates');
    }
};
