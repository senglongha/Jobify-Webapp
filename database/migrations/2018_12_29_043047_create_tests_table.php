<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('result_id');
            $table->unsignedInteger('job_post_id');
            $table->string('test_name');
            $table->string('test_type');
            $table->string('create_test');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('result_id')->references('id')->on('results');
            $table->foreign('job_post_id')->references('id')->on('job_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
