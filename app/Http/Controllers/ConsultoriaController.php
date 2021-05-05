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
    public function index()
    {
        return view('index');
    }
    
    
    
    /**
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $iIdFichaCadastralParlamentar
     * @return \Illuminate\Http\Response
     * 
     */
    public function viewCadastroParlamentar(Request $request, $iIdFichaCadastralParlamentar = null)
    {
        $cTipoParlamentar = preg_replace('/[0-9]+/', '', $request->path());
        if ($cTipoParlamentar != "/") {
            $arrayRota = explode('/', $cTipoParlamentar);
            $cTipoParlamentar = $arrayRota[0];
        }

        if ($cTipoParlamentar == 'senadores') {
            $listaParlamentares = FichaCadastro::where('cTipoFuncaoParlamento', 'Senador')->get();
        } else {
            $listaParlamentares = FichaCadastro::where('cTipoFuncaoParlamento', 'Deputado Federal')->get();
        }
        
        if ($iIdFichaCadastralParlamentar) {
            $dadosParlamentar = FichaCadastro::with('quantidadeVotos', 'doacao', 'partidos')->find($iIdFichaCadastralParlamentar);
            return view('welcome')->with(compact('cTipoParlamentar'))->with(compact('dadosParlamentar'))->with(compact('listaParlamentares'));
        } else {
            return view('welcome')->with(compact('cTipoParlamentar'))->with(compact('listaParlamentares'));
        }
    }
}
