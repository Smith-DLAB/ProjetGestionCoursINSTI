<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneeAcademiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_academiques', function (Blueprint $table) {
            $table->id();
            $table->string("appelation");
            $table->date("start_date");
            $table->date("end_date");
            $table->date("calendar");
            $table->string("observation");
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
        Schema::dropIfExists('annee_academiques');
    }
}
