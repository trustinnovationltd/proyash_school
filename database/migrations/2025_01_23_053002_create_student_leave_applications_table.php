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
        Schema::dropIfExists('student_leave_applications');

        // Create the student_leave_applications table
        Schema::create('student_leave_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('academic_year_id'); // Foreign Key to Academic Years table
            $table->unsignedBigInteger('medium_id'); // Foreign Key to Mediums table
            $table->unsignedBigInteger('shift_id'); // Foreign Key to Shifts table
            $table->unsignedBigInteger('class_id'); // Foreign Key to Classes table
            $table->unsignedBigInteger('department_id'); // Foreign Key to Departments table
            $table->unsignedBigInteger('section_setup_id'); // Foreign Key to Section Setups table
            $table->unsignedBigInteger('student_id'); // Foreign Key to Students table
            $table->string('leave_type'); // Leave Type
            $table->date('leave_application_date'); // Leave Application Date
            $table->date('leave_from'); // Leave From
            $table->date('leave_to'); // Leave To
            $table->text('leave_reason'); // Leave Reason
            $table->string('emergency_contact_number'); // Emergency Contact Number
            $table->date('approved_date_from')->nullable(); // Approved Date From
            $table->date('approved_date_to')->nullable(); // Approved Date To
            $table->unsignedBigInteger('approved_by')->nullable(); // Approved By (Employee ID)
            $table->boolean('status')->default(true); // Status (Active/Inactive)
            $table->unsignedBigInteger('created_by'); // Created By (User ID)
            $table->unsignedBigInteger('updated_by')->nullable(); // Updated By (User ID)
            $table->unsignedBigInteger('deleted_by')->nullable(); // Deleted By (User ID)
            $table->timestamps(); // Timestamps
            $table->softDeletes(); // Soft Deletes

            // Foreign Key Constraints
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onDelete('cascade');
            $table->foreign('medium_id')->references('id')->on('mediums')->onDelete('cascade');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('section_setup_id')->references('id')->on('section_setups')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign key constraints first
        Schema::table('student_leave_applications', function (Blueprint $table) {
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['academic_year_id']);
            $table->dropForeign(['medium_id']);
            $table->dropForeign(['shift_id']);
            $table->dropForeign(['class_id']);
            $table->dropForeign(['department_id']);
            $table->dropForeign(['section_setup_id']);
            $table->dropForeign(['student_id']);
            $table->dropForeign(['approved_by']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });

        // Drop the student_leave_applications table
        Schema::dropIfExists('student_leave_applications');
    }
};
