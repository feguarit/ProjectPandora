<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensnfentradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensnfentradas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nf_entrada')->unsigned();
            $table->foreign('id_nf_entrada')->references('id')->on('nfentradas')->onDelete('cascade');
            $table->integer('num_item');
            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->integer('quantidade');
            $table->integer('valor_unitario');
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
        Schema::drop('itensnfentradas');
    }
}
