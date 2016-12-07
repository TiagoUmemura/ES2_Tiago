<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorials', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('atv_profissionais', 45);
            $table->string('participacao', 45);
            $table->string('cargos', 45);
            $table->string('atv_docentes', 45);
            $table->string('atv_assistenciais', 45);
            $table->string('atv_didaticas', 45);
            $table->string('banca', 45);
            $table->string('estagio', 45);
            $table->string('atv_extensao', 45);
            $table->string('publicacoes', 45);
            $table->string('filiacoes', 45);
            $table->string('titulos', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memorials');
    }
}
