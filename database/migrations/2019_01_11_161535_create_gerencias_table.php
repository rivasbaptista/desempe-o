<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
            $table->unsignedInteger('vice_presidencia_id');
            
            $table->foreign('vice_presidencia_id')->references('id')->on('vicepresidencias');
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
        Schema::dropIfExists('gerencias');
    }
}
