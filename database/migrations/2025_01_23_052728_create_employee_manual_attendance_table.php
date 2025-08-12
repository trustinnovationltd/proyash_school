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
        Schema::create('employee_manual_attendance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('medium_id'); // Foreign Key to Mediums table
            $table->unsignedBigInteger('shift_id'); // Foreign Key to Shifts table
            $table->unsignedBigInteger('employee_id'); // Foreign Key to Employees table
            $table->string('employee_name'); // Employee Name
            $table->time('in_time'); // In time
            $table->time('out_time')->nullable(); // Out time (Optional)
            $table->boolean('status')->default(true); // Status (Active/Inactive)
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign Key Constraints
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('medium_id')->references('id')->on('mediums')->onDelete('cascade');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee_manual_attendance', function (Blueprint $table) {
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['medium_id']);
            $table->dropForeign(['shift_id']);
            $table->dropForeign(['employee_id']);
        });

        Schema::dropIfExists('employee_manual_attendance');
    }
};
