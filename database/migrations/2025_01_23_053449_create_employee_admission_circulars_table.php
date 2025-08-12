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
        Schema::create('employee_admission_circulars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_circular_id'); // Foreign Key to Employee Circulars table
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('academic_year_id'); // Foreign Key to Academic Years table
            $table->unsignedBigInteger('designation_id'); // Foreign Key to Designations table
            $table->integer('number_of_seat'); // Number of Seats
            $table->decimal('admission_fee', 10, 2); // Admission Fee
            $table->string('title'); // Title of the Admission Circular
            $table->text('details'); // Details of the Admission Circular
            $table->string('salary_scale'); // Salary Scale
            $table->boolean('status')->default(true); // Status (Active/Inactive)
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign Key Constraints
            $table->foreign('employee_circular_id')->references('id')->on('employee_admission_circular_sessions')->onDelete('cascade');
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onDelete('cascade');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee_admission_circulars', function (Blueprint $table) {
            $table->dropForeign(['employee_circular_id']);
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['academic_year_id']);
            $table->dropForeign(['designation_id']);
        });

        Schema::dropIfExists('employee_admission_circulars');
    }
};
