<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtColumnToProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profesores', function (Blueprint $table) {
            $table->softDeletes();  //Coloca el softDeletes a la tabla, en este caso profesores
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profesores', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
