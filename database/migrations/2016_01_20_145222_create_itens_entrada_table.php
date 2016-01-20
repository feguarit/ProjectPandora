<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_entrada', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_item_nf_entrada')->unsigned();
            $table->foreign('id_item_nf_entrada')->references('id')
                                                 ->on('itensnfentradas')
                                                 ->onDelete('cascade');
            $table->integer('id_produto')->unsigned();       
            $table->foreign('id_produto')->references('id')
                                         ->on('produtos');
            $table->date('data_doc');
            $table->float('saldo');

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
        Schema::drop('itens_entrada');
    }
}
