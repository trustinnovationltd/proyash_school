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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->string('present_village')->nullable();
            $table->string('present_post_office')->nullable();
            $table->string('present_upazila')->nullable();
            $table->string('present_district')->nullable();
            $table->string('permanent_village')->nullable();
            $table->string('permanent_post_office')->nullable();
            $table->string('permanent_upazila')->nullable();
            $table->string('permanent_district')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
