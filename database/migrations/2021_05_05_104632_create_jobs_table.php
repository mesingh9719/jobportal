<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('employer_id');
            $table->string('job_title');
            $table->integer('job_category');
            $table->integer('job_location')->nullable();
            $table->string('job_experience')->nullable();
            $table->string('job_qualification')->nullable();
            $table->string('job_contact_number')->nullable();
            $table->string('job_salary')->nullable();
            $table->string('job_gender')->nullable();
            $table->text('job_responsibilities')->nullable();
            $table->text('job_education')->nullable();
            $table->text('job_benifits')->nullable();
            $table->string('job_company_location')->nullable();
            $table->string('job_company_zip_code')->nullable();
            $table->string('job_company_name')->nullable();
            $table->string('job_company_website')->nullable();
            $table->integer('job_type')->nullable();
            $table->text('job_description');
            $table->string('status');
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
