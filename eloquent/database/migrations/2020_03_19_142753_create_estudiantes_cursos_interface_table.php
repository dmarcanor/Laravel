<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesCursosInterfaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes_cursos', function (Blueprint $table) {
            $table->id('id');
            $table->integer('estudiantes_cedula');
            $table->integer('cursos_id');
            //Creando foreign keys
            $table->foreign('estudiantes_cedula')->references('cedula')->on('estudiantes');
            $table->foreign('cursos_id')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes_cursos');
    }
}
