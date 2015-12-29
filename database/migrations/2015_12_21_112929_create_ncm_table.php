<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNcmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ncms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ncm', 8)->unique();;
            $table->string('descricao', 255);
            $table->float('ii');
            $table->float('ipi');
            $table->float('pis');
            $table->float('cofins');
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
        Schema::drop('ncms');
    }
}
