<?php

namespace App\Http\Controllers;

use App\FichaCadastro;
use Illuminate\Http\Request;

class ConsultoriaController extends Controller
{
    /**
     *
     * @param  int  $iIdFichaCadastralParlamentar
     * @return \Illuminate\Http\Response
     * 
     */
    public function index($iIdFichaCadastralParlamentar = null)
    {
        $listaParlamentares = FichaCadastro::all();

        if ($iIdFichaCadastralParlamentar) {
            $dadosParlamentar = FichaCadastro::with('quantidadeVotos', 'doacao', 'partidos')->find($iIdFichaCadastralParlamentar);
            return view('welcome')->with(compact('dadosParlamentar'), compact('listaParlamentares'));
        } else {
            return view('welcome')->with(compact('listaParlamentares'));
        }
    }
}
