<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_categoria')->index()->unsigned();
            $table->string('title')->unique();
            $table->string('min_description');
            $table->text('description');
            $table->text('imagem');
            $table->bigInteger('view');
            $table->string('estado');
            $table->timestamps();
        });

        Schema::table('noticias', function (Blueprint $table) {
            $table->foreign('id_categoria')->references('id')->on('categorias')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}