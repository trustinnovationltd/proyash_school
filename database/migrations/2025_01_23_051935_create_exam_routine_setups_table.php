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
        Schema::create('exam_routine_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('academic_year_id'); // Foreign Key to Academics table
            $table->unsignedBigInteger('medium_id'); // Foreign Key to Mediums table
            $table->unsignedBigInteger('shift_id'); // Foreign Key to Shifts table
            $table->unsignedBigInteger('class_id'); // Foreign Key to Classes table
            $table->unsignedBigInteger('department_id'); // Foreign Key to Departments table
            $table->unsignedBigInteger('section_setup_id'); // Foreign Key to Sections table
            $table->unsignedBigInteger('period_setup_id'); // Foreign Key to Periods table
            $table->unsignedBigInteger('employee_id'); // Foreign Key to Teachers table
            $table->string('name'); // Exam name
            $table->time('start_time'); // Exam start time
            $table->time('end_time'); // Exam end time
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
            $table->foreign('section_setup_id')->references('id')->on('section_setups')->onDelete('cascade');
            $table->foreign('period_setup_id')->references('id')->on('period_setups')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_routine_setups', function (Blueprint $table) {
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['academic_year_id']);
            $table->dropForeign(['medium_id']);
            $table->dropForeign(['shift_id']);
            $table->dropForeign(['class_id']);
            $table->dropForeign(['department_id']);
            $table->dropForeign(['section_setup_id']);
            $table->dropForeign(['period_setup_id']);
            $table->dropForeign(['employee_id']);
        });

        Schema::dropIfExists('exam_routine_setups');
    }
};
