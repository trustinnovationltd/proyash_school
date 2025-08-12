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
            Schema::dropIfExists('employee_leave_applications');

            // Create the employee_leave_applications table
            Schema::create('employee_leave_applications', function (Blueprint $table) {
                  $table->id();
                  $table->unsignedBigInteger('institute_id'); // Foreign Key
                  $table->unsignedBigInteger('designation_id'); // Foreign Key
                  $table->unsignedBigInteger('employee_id'); // Foreign Key
                  $table->string('leave_type');
                  $table->string('pay_type');
                  $table->date('leave_application_date');
                  $table->date('leave_from');
                  $table->date('leave_to');
                  $table->text('leave_reason');
                  $table->string('emergency_contact_number');
                  $table->date('approved_date_from')->nullable();
                  $table->date('approved_date_to')->nullable();
                  $table->string('approved_by')->nullable();
                  $table->string('responsible_employee_during_leave')->nullable();
                  $table->string('status');
                  $table->unsignedBigInteger('created_by');
                  $table->unsignedBigInteger('updated_by')->nullable();
                  $table->unsignedBigInteger('deleted_by')->nullable();
                  $table->timestamps();
                  $table->softDeletes();

                  // Foreign Key Constraints
                  $table->foreign('institute_id')
                        ->references('id')
                        ->on('institutes')
                        ->onDelete('cascade');

                  $table->foreign('designation_id')
                        ->references('id')
                        ->on('employees')
                        ->onDelete('cascade');

                  $table->foreign('employee_id')
                        ->references('id')
                        ->on('employees')
                        ->onDelete('cascade');

                  $table->foreign('created_by')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');

                  $table->foreign('updated_by')
                        ->references('id')
                        ->on('users')
                        ->onDelete('set null');

                  $table->foreign('deleted_by')
                        ->references('id')
                        ->on('users')
                        ->onDelete('set null');
            });
      }

      /**
       * Reverse the migrations.
       */
      public function down(): void
      {
            // Drop the employee_leave_applications table if it exists
            Schema::dropIfExists('employee_leave_applications');
      }
};
