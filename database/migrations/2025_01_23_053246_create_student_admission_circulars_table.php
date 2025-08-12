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
        Schema::create('student_admission_circulars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admission_circular_session_id'); // Foreign Key to Admission Circulars table
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('academic_year_id'); // Foreign Key to Academic Years table
            $table->unsignedBigInteger('medium_id'); // Foreign Key to Mediums table
            $table->unsignedBigInteger('shift_id'); // Foreign Key to Shifts table
            $table->unsignedBigInteger('class_id'); // Foreign Key to Classes table
            $table->integer('maximum_allowed_seat'); // Maximum Allowed Seat
            $table->decimal('admission_fee', 10, 2); // Admission Fee
            $table->text('details'); // Details
            $table->boolean('status')->default(true); // Status (Active/Inactive)
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign Key Constraints with short custom names
            $table->foreign('admission_circular_session_id', 'admission_session_fk')
                  ->references('id')->on('student_admission_circular_sessions')->onDelete('cascade');
            $table->foreign('institute_id', 'institute_fk')
                  ->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('academic_year_id', 'academic_year_fk')
                  ->references('id')->on('academic_years')->onDelete('cascade');
            $table->foreign('medium_id', 'medium_fk')
                  ->references('id')->on('mediums')->onDelete('cascade');
            $table->foreign('shift_id', 'shift_fk')
                  ->references('id')->on('shifts')->onDelete('cascade');
            $table->foreign('class_id', 'class_fk')
                  ->references('id')->on('classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_admission_circulars', function (Blueprint $table) {
            $table->dropForeign(['admission_circular_session_id']);
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['academic_year_id']);
            $table->dropForeign(['medium_id']);
            $table->dropForeign(['shift_id']);
            $table->dropForeign(['class_id']);
        });

        Schema::dropIfExists('student_admission_circulars');
    }
};
