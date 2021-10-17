<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id_empleado');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->foreign('id_empleado')->references('id_planilla')->on('planilla')->onDelete('cascade');
            $table->increments('despidos_id');
            $table->foreign('despidos_id')->references('id_despidos')->on('despidos')->onDelete('cascade');
            $table->increments('permisos_id');
            $table->foreign('permisos_id')->references('id_permisos')->on('permisos')->onDelete('cascade');
            $table->increments('area_id');
            $table->foreign('area_id')->references('id_area')->on('areaempleado')->onDelete('cascade');
            $table->increments('conducta_id');
            $table->foreign('conducta_id')->references('id_conducta')->on('llamadaatencion')->onDelete('cascade');
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
