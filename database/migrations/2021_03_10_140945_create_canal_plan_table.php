<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanalPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canal_plan', function (Blueprint $table) {
            $table->id();

            //llaves foraneas
            $table->unsignedBigInteger('canal_id');
            $table->unsignedBigInteger('plan_id');
            //restrinciones de llaves foraneas
            $table->foreign('canal_id')->references('id')->on('canals')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');

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
        Schema::dropIfExists('canal_plan');
    }
}
