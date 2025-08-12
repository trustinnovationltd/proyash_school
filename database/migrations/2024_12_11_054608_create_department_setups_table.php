<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id')->nullable();
            $table->unsignedBigInteger('medium_id')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();

            $table->json('department_ids')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('set null');
            $table->foreign('medium_id')->references('id')->on('mediums')->onDelete('set null');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_setups');
    }
}
