<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    protected $table = 'table_doacao_por_parlamentar';
    protected $primaryKey = 'iIdDoacaoParlamentar';
    public $timestamps = true;

    /*
        iIdDoacaoParlamentar
        iIdFichaCadastralParlamentar
        cNomeDoador
        nValorDoacao
    */

    public function fichaCadastro()
    {
        return $this->belongsTo('App\FichaCadastro', 'iIdFichaCadastralParlamentar', 'iIdFichaCadastralParlamentar');
    }
}
