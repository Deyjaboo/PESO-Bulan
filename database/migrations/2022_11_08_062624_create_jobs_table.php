<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('JobTitle');
            $table->string('CompanyName');
            $table->string('CompanyWebsite');
            $table->string('CompanyContact');
            $table->integer('NumVacancies');
            $table->string('WorkingLocation');
            $table->string('Industry');
            $table->longText('JobDescription');
            $table->longText('Requirements');
            $table->string('DatePosted');
            $table->string('logo');
            $table->string('Folder_Name');
            $table->string('Status');
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
};
