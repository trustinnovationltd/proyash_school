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
        Schema::create('grade_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id'); // Foreign Key to Institutes table
            $table->unsignedBigInteger('academic_year_id'); // Foreign Key to Academic Years table
            $table->unsignedBigInteger('medium_id'); // Foreign Key to Mediums table
            $table->string('grade_name'); // Grade Name
            $table->decimal('gpa', 3, 2); // GPA
            $table->decimal('from_marks', 8, 2); // From Marks
            $table->decimal('to_marks', 8, 2); // To Marks
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grade_setups', function (Blueprint $table) {
            $table->dropForeign(['institute_id']);
            $table->dropForeign(['academic_year_id']);
            $table->dropForeign(['medium_id']);
        });

        Schema::dropIfExists('grade_setups');
    }
};
