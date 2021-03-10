<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->float('precio');
            $table->date('fecha');

            $table->unsignedBigInteger('internet_id')->nullable();
            $table->unsignedBigInteger('cable_id')->nullable();
            $table->unsignedBigInteger('telefonia_id')->nullable();

            //llaves foraneas
            $table->foreign('internet_id')
                  ->references('id')->on('internets')
                  ->onDelete('set null');// onDelete -> para indicar que puede ser null

            $table->foreign('cable_id')
                   ->references('id')->on('cables')
                  ->onDelete('set null');
            
            $table->foreign('telefonia_id')
                  ->references('id')->on('telefonias')
                  ->onDelete('set null');

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
        Schema::dropIfExists('paquetes');
    }
}
