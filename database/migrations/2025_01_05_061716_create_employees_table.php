<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name_english');
            $table->string('name_bangla');
            $table->string('nid');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->date('date_of_birth');
            $table->string('blood_group')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->date('joining_date');

            // Address
            $table->string('present_village')->nullable();
            $table->string('present_post_office')->nullable();
            $table->string('present_upazila')->nullable();
            $table->string('present_district')->nullable();
            $table->string('permanent_village')->nullable();
            $table->string('permanent_post_office')->nullable();
            $table->string('permanent_upazila')->nullable();
            $table->string('permanent_district')->nullable();

            // Education
            $table->string('ssc_school')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_year')->nullable();
            $table->string('ssc_result')->nullable();
            $table->string('hsc_college')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_year')->nullable();
            $table->string('hsc_result')->nullable();
            $table->string('diploma_institute')->nullable();
            $table->string('diploma_subject')->nullable();
            $table->string('diploma_year')->nullable();
            $table->string('diploma_result')->nullable();
            $table->string('bachelor_university')->nullable();
            $table->string('bachelor_department')->nullable();
            $table->string('bachelor_year')->nullable();
            $table->string('bachelor_result')->nullable();
            $table->string('masters_university')->nullable();
            $table->string('masters_department')->nullable();
            $table->string('masters_year')->nullable();
            $table->string('masters_result')->nullable();
            $table->string('other_qualification')->nullable();

            // Experience
            $table->date('year_of_experience')->nullable();
            $table->text('experience_information')->nullable();

            // Documents
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->enum('status', ['0', '1', '2'])->default('1'); // 0: Inactive, 1: Active, 2: Deleted
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
