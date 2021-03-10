<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanalProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canal_programa', function (Blueprint $table) {
            $table->id();

            // id de los modelos a relacionar muchos a muchos
            $table->unsignedBigInteger('canal_id');
            $table->unsignedBigInteger('programa_id');

            //restricciones de llave foranea
            $table->foreign('canal_id')
                ->references('id')->on('canals')
                ->onDelete('cascade');// cascade -> cuando se elimine un canal se elimina de la tabla
            $table->foreign('programa_id')
                ->references('id')->on('programas')
                ->onDelete('cascade');

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
        Schema::dropIfExists('canal_programa');
    }
}
