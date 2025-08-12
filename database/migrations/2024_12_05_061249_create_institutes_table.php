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
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('name');
            $table->string('branch_name')->nullable();
            $table->text('address')->nullable();
            $table->string('eiin_code')->unique();
            $table->string('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('website')->nullable();
            $table->json('medium_ids')->nullable();
            $table->json('department_ids')->nullable();
            $table->json('shift_ids')->nullable();
            $table->json('class_ids')->nullable();
            $table->json('exam_type_ids')->nullable();
            $table->json('weekly_holidays')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('dashboard_banner_image')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('map_link')->nullable();
            $table->string('android_link')->nullable();
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutes');
    }
};
