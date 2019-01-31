<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->string('email');
            $table->string('nombres');
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->integer('tlf_oficina')->nullable();
            $table->integer('tlf_movil')->nullable();

            $table->unsignedInteger('status_id');
            $table->unsignedInteger('unidad_id');
            $table->unsignedInteger('cargo_id');

            $table->foreign('status_id')->references('id')->on('status_empleados')->onUpdate('cascade');

            $table->foreign('cargo_id')->references('id')->on('cargos')->onUpdate('cascade');

            $table->foreign('unidad_id')->references('id')->on('unidads')->onUpdate('cascade');




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
        Schema::dropIfExists('empleados');
    }
}
