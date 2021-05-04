<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFichaCadastralParlamentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ficha_cadastral_parlamentar', function (Blueprint $table) {
            $table->integer('iIdFichaCadastralParlamentar');
            $table->string('cNomeParlamentar');
            $table->string('cEmailParlamentar');
            $table->string('cTelefoneParlamentar');
            $table->integer('iIdPartido');
            $table->integer('iNumeroGabinete');
            $table->string('cTipoFuncaoParlamento');
            $table->string('cProfissaoParlamentar');
            $table->string('cLinkFotoParlamentar');
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
        Schema::dropIfExists('table_ficha_cadastral_parlamentar');
    }
}
