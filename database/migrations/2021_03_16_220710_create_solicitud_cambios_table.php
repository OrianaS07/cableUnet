<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudCambiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_cambios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('nuevo_pquete_id');

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreing('user_id')
                ->reference('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate();
                
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
        Schema::dropIfExists('solicitud_cambios');
    }
}