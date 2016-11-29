<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 45);
            $table->date('data_nasc');
            $table->char('sexo');
            $table->string('cpf');
            $table->string('rg');
            $table->UF('uf', 2);
            $table->string('endereco', 255);
            $table->foreign('idMemorial')->references('id')->on('Memorial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
