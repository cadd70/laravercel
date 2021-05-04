<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaCadastro extends Model
{
    protected $table = 'table_ficha_cadastral_parlamentar';
    protected $primaryKey = 'iIdFichaCadastralParlamentar';
    public $timestamps = true;

    /*
        iIdFichaCadastralParlamentar
        cNomeParlamentar
        cEmailParlamentar
        cTelefoneParlamentar
        iIdPartido
        iNumeroGabinete
        cTipoFuncaoParlamento
        cProfissaoParlamentar
        cLinkFotoParlamentar
    */

    public function quantidadeVotos()
    {
        return $this->hasMany('App\QuantidadeVotos', 'iIdFichaCadastralParlamentar', 'iIdFichaCadastralParlamentar');
    }

    public function doacao()
    {
        return $this->hasMany('App\Doacao', 'iIdFichaCadastralParlamentar', 'iIdFichaCadastralParlamentar');
    }

    public function partidos()
    {
        return $this->hasOne('App\Partidos', 'iIdPartido', 'iIdPartido');
    }
}
