<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVicePresidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vicepresidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->unsignedInteger('presidencia_id');

            $table->foreign('presidencia_id')->references('id')->on('presidencias');

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
        Schema::dropIfExists('vice_presidencias');
    }
}
