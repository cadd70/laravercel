<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuantidadeVotoPorMunicipio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_quantidade_voto_por_municipio', function (Blueprint $table) {
            $table->bigIncrements('iIdQuantidadeVotoMunicipio');
            $table->integer('iIdFichaCadastralParlamentar');
            $table->string('cNomeMunicipio');
            $table->integer('iQuantidadeVotos');
            $table->double('dPorcentagemVotos', 5, 4);
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
        Schema::dropIfExists('table_quantidade_voto_por_municipio');
    }
}
