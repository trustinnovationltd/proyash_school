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
        // Drop the table if it already exists
        Schema::dropIfExists('students');

        // Create the students table
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name_bn');
            $table->string('name_en');
            $table->date('birth_date');
            $table->string('nationality');
            $table->string('religion');
            $table->date('admission_date');
            $table->string('admission_year')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('image')->nullable();
            $table->string('student_signature')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->enum('status', ['0', '1', '2'])->default('1'); // 0: Inactive, 1: Active, 2: Deleted
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the students table if it exists
        Schema::dropIfExists('students');
    }
};
