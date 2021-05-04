<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDoacaoPorParlamentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_doacao_por_parlamentar', function (Blueprint $table) {
            $table->bigIncrements('iIdDoacaoParlamentar');
            $table->integer('iIdFichaCadastralParlamentar');
            $table->string('cNomeDoador');
            $table->decimal('nValorDoacao', $precision = 17, $scale = 2);
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
        Schema::dropIfExists('table_doacao_por_parlamentar');
    }
}
