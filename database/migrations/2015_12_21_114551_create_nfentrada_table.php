<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNfentradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nfentrada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nfe',9);
            $table->string('serie_nfe',2);
            $table->date('data_emissao');
            $table->integer('id_parceiro')->unsigned();
            $table->foreign('id_parceiro')->references('id')->on('parceiros');
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
        Schema::drop('nfentrada');
    }
}
