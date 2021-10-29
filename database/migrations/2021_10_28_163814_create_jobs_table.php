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
            $table->string('name');
            $table->string('company');
            $table->enum('rating', array('1*', '2*','3*', '4*','5*'));
            $table->string('location');
            $table->enum('type', array('Part-time', 'Full-time', 'Permanent', 'Temporary', 'Contract', 'Volunteer', 'Apprenticeship', 'Internship'));
            $table->text('description');
            $table->date('listed');
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
