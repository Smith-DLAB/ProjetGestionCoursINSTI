<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_e_s', function (Blueprint $table) {
            $table->id();
            $table->integer("parent_id");
            $table->string("appelation");
            $table->string("abreviation");
            $table->string("description");
            $table->string("semestre_cycle");
            $table->string("typeUE");
            $table->string("natureUE_id");
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
        Schema::dropIfExists('u_e_s');
    }
}
