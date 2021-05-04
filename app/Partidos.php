<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    protected $table = 'table_partidos';
    protected $primaryKey = 'iIdDoacaoParlamentar';
    public $timestamps = true;

    /*
        iIdPartido
        cNomePartido
        cSiglaPartido
        cUfPartido
    */

    public function fichaCadastro()
    {
        return $this->belongsTo('App\FichaCadastro', 'iIdPartido', 'iIdPartido');
    }
}
