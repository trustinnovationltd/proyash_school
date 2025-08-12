<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSetupsTable extends Migration
{
    public function up()
    {
        Schema::create('class_setups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institute_id')->nullable()->constrained('institutes')->onDelete('set null');
            $table->foreignId('medium_id')->nullable()->constrained('mediums')->onDelete('set null');
            $table->json('class_ids')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_setups');
    }
}

