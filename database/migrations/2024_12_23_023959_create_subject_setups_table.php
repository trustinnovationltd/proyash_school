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
        Schema::create('subject_setups', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('institute_id');
            $table->unsignedBigInteger('medium_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('subject_id');
            $table->enum('subject_type', ['mandatory', 'optional', 'compulsory', 'combined', '4th subject']);
            $table->integer('serial');
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps(); // created_at and updated_at
            $table->softDeletes(); // deleted_at

            // Foreign key constraints
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->foreign('medium_id')->references('id')->on('mediums')->onDelete('cascade');
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
        Schema::dropIfExists('subject_setups');
    }
};
