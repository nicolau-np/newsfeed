<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualizacoes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_noticia')->index()->unsigned();
            $table->bigInteger('value');
            $table->timestamps();
        });

        Schema::table('visualizacoes', function (Blueprint $table) {
            $table->foreign('id_noticia')->references('id')->on('noticias')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visualizacoes');
    }
}