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
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            // $table->string('UserID');
            $table->string('SeminarTitle');
            $table->longText('SeminarDescription');
            $table->longText('SeminarRequirements');
            $table->integer('SeminarSlots');
            $table->string('DateStart');
            $table->string('DateEnd');
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
        Schema::dropIfExists('seminars');
    }
};
