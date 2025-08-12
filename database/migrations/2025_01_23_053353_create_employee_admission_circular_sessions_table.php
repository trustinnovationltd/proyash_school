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
        Schema::create('employee_admission_circular_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('academic_year_id'); // Foreign Key to Academic Years table
            $table->string('title'); // Title of the Admission Circular
            $table->text('description'); // Description of the Admission Circular
            $table->date('published_date'); // Published Date
            $table->date('apply_last_date'); // Apply Last Date
            $table->date('visibility_date_in_website'); // Visibility Date in Website
            $table->date('approximate_admit_card_received_date'); // Approximate Admit Card Received Date
            $table->date('approximate_exam_date'); // Approximate Exam Date
            $table->date('approximate_result_published_date'); // Approximate Result Published Date
            $table->json('images')->nullable(); // If any Images [Multi Image]
            $table->boolean('status')->default(true); // Status (Active/Inactive)
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign Key Constraints
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee_admission_circular_sessions', function (Blueprint $table) {
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['academic_year_id']);
        });

        Schema::dropIfExists('employee_admission_circular_sessions');
    }
};
