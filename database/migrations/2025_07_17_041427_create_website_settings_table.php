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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longtext('address')->nullable();
            $table->longtext('logo')->nullable();
            $table->longtext('short_description')->nullable();
            $table->string('principle_name')->nullable();
            $table->longtext('principle_image')->nullable();
            $table->longtext('principle_message')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('alternative_phone_1')->nullable();
            $table->string('alternative_phone_2')->nullable();
            $table->string('alternative_email_1')->nullable();
            $table->string('alternative_email_2')->nullable();
            $table->string('extra_field_1')->nullable();
            $table->string('extra_field_2')->nullable();
            $table->string('extra_field_3')->nullable();
            $table->string('extra_field_4')->nullable();
            $table->string('extra_field_5')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
