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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->string('father_name_bn');
            $table->string('father_name_en');
            $table->string('father_mobile');
            $table->string('father_occupation')->nullable();
            $table->string('father_organization_name')->nullable();
            $table->integer('father_basic_income')->nullable();
            $table->integer('father_gross_income')->nullable();

            $table->string('mother_name_bn');
            $table->string('mother_name_en');
            $table->string('mother_mobile');
            $table->string('mother_occupation')->nullable();
            $table->string('mother_organization_name')->nullable();
            $table->integer('mother_basic_income')->nullable();
            $table->integer('mother_gross_income')->nullable();

            $table->string('guardian_signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
