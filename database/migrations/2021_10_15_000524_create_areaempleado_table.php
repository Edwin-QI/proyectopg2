<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaempleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areaempleado', function (Blueprint $table) {
            $table->increments('id_area');
            $table->string('descripcion');
            $table->foreign('id_area')->references('id_planilla')->on('planilla')->onDelete('cascade');
            //$table->foreign('id_area')->references('id_empleado')->on('empleados')->onDelete('cascade');
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
        Schema::dropIfExists('areaempleado');
    }
}
