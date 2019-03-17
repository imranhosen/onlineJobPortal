<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {

          $table->increments('id');
            $table->string('job_title');
            $table->string('job_designation');
            $table->integer('vacancey');
            $table->integer('category_id');
            $table->string('educational_requirements');
            $table->string('experience_requirements');
            $table->text('job_descripton');
            $table->string('job_location');
            $table->string('company_name');
            $table->text('company_logo');
            $table->string('company_address');
            $table->string('job_nature');
            $table->integer('salary');
            $table->tinyInteger('spotlight');
            $table->tinyInteger('published');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
