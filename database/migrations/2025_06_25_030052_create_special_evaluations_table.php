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
        Schema::create('special_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->string('diagnosis')->nullable(); // e.g. ASD
            $table->text('therapist_notes')->nullable();
            $table->string('therapist_name')->nullable();
            $table->date('therapist_date')->nullable();
            $table->text('teacher_notes')->nullable();
            $table->string('teacher_name')->nullable();
            $table->date('teacher_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_evaluations');
    }
};
