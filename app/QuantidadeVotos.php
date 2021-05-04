<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuantidadeVotos extends Model
{
    protected $table = 'table_quantidade_voto_por_municipio';
    protected $primaryKey = 'iIdQuantidadeVotoMunicipio';
    public $timestamps = true;

    /*
        iIdQuantidadeVotoMunicipio
        iIdFichaCadastralParlamentar
        cNomeMunicipio
        iQuantidadeVotos
        dPorcentagemVotos
    */

    public function fichaCadastro()
    {
        return $this->belongsTo('App\FichaCadastro', 'iIdFichaCadastralParlamentar', 'iIdFichaCadastralParlamentar');
    }
}
