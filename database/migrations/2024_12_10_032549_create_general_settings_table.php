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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id'); // Foreign key to Institutes table
            $table->boolean('present_sms')->default(false)->comment('0 means off, 1 means on');
            $table->boolean('leave_sms')->default(false)->comment('0 means off, 1 means on');
            $table->boolean('absent_sms')->default(false)->comment('0 means off, 1 means on');
            $table->boolean('fee_collection_sms')->default(false)->comment('0 means off, 1 means on');
            $table->boolean('admission_greeting_sms')->default(false)->comment('0 means off, 1 means on');
            $table->boolean('birthday_sms')->default(false)->comment('0 means off, 1 means on');
            $table->boolean('student_id_automatic')->default(false)->comment('0 means off, 1 means on');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Add foreign key constraint
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign key before dropping the table
        Schema::table('general_settings', function (Blueprint $table) {
            $table->dropForeign(['institute_id']);
        });

        Schema::dropIfExists('general_settings');
    }
};
