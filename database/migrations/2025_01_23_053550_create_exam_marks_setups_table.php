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
        Schema::create('exam_marks_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('academic_year_id'); // Foreign Key to Academic Years table
            $table->unsignedBigInteger('medium_id'); // Foreign Key to Mediums table
            $table->unsignedBigInteger('shift_id'); // Foreign Key to Shifts table
            $table->unsignedBigInteger('class_id'); // Foreign Key to Classes table
            $table->unsignedBigInteger('department_id'); // Foreign Key to Departments table
            $table->unsignedBigInteger('subject_id'); // Foreign Key to Subjects table
            $table->decimal('written_exam_mark', 8, 2); // Written Exam Mark
            $table->decimal('written_exam_pass_mark', 8, 2); // Written Exam Pass Mark
            $table->decimal('mcq_exam_mark', 8, 2); // MCQ Exam Mark
            $table->decimal('mcq_exam_pass_mark', 8, 2); // MCQ Exam Pass Mark
            $table->decimal('practical_mark', 8, 2); // Practical Mark
            $table->decimal('class_test_mark', 8, 2); // Class Test Mark
            $table->decimal('monthly_test_mark', 8, 2); // Monthly Test Mark
            $table->decimal('total_mark', 8, 2); // Total Mark
            $table->decimal('converted_in', 8, 2); // Converted In
            $table->decimal('total_pass_mark', 8, 2); // Total Pass Mark
            $table->boolean('status')->default(true); // Status (Active/Inactive)
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign Key Constraints
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onDelete('cascade');
            $table->foreign('medium_id')->references('id')->on('mediums')->onDelete('cascade');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_marks_setups', function (Blueprint $table) {
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['academic_year_id']);
            $table->dropForeign(['medium_id']);
            $table->dropForeign(['shift_id']);
            $table->dropForeign(['class_id']);
            $table->dropForeign(['department_id']);
            $table->dropForeign(['subject_id']);
        });

        Schema::dropIfExists('exam_marks_setups');
    }
};
