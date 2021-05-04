<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableFichaCadastroParlamentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_ficha_cadastral_parlamentar')->insert([
            [
                'iIdFichaCadastralParlamentar' => 1, 'cNomeParlamentar' => 'ABÍLIO SANTANA', 'cEmailParlamentar' => 'dep.abiliosantana@camara.leg.br'
                , 'cTelefoneParlamentar' => '3215-5531', 'iIdPartido' => 2, 'iNumeroGabinete' => 531, 'cTipoFuncaoParlamento' => 'Deputado Federal'
                , 'cProfissaoParlamentar' => 'OUTROS', 'cLinkFotoParlamentar' => 'https://www.camara.leg.br/internet/deputado/bandep/204554.jpg'
            ],
            [
                'iIdFichaCadastralParlamentar' => 2, 'cNomeParlamentar' => 'ABOU ANNI', 'cEmailParlamentar' => 'dep.abouanni@camara.leg.br'
                , 'cTelefoneParlamentar' => '3215-5339', 'iIdPartido' => 3, 'iNumeroGabinete' => 339, 'cTipoFuncaoParlamento' => 'Deputado Federal'
                , 'cProfissaoParlamentar' => 'POLICIA MILITAR', 'cLinkFotoParlamentar' => 'https://www.camara.leg.br/internet/deputado/bandep/204521.jpg'
            ],
            [
                'iIdFichaCadastralParlamentar' => 3, 'cNomeParlamentar' => 'ACÁCIO FAVACHO', 'cEmailParlamentar' => 'dep.acaciofavacho@camara.leg.br'
                , 'cTelefoneParlamentar' => '3215-5284', 'iIdPartido' => 4, 'iNumeroGabinete' => 284, 'cTipoFuncaoParlamento' => 'Deputado Federal'
                , 'cProfissaoParlamentar' => 'VEREADOR', 'cLinkFotoParlamentar' => 'https://www.camara.leg.br/internet/deputado/bandep/204379.jpg'
            ],
            [
                'iIdFichaCadastralParlamentar' => 4, 'cNomeParlamentar' => 'ADOLFO VIANA', 'cEmailParlamentar' => 'dep.adolfoviana@camara.leg.br'
                , 'cTelefoneParlamentar' => '3215-5911', 'iIdPartido' => 1, 'iNumeroGabinete' => 911, 'cTipoFuncaoParlamento' => 'Deputado Federal'
                , 'cProfissaoParlamentar' => 'DEPUTADO', 'cLinkFotoParlamentar' => 'https://www.camara.leg.br/internet/deputado/bandep/204560.jpg'
            ],
            [
                'iIdFichaCadastralParlamentar' => 5, 'cNomeParlamentar' => 'ADRIANA VENTURA', 'cEmailParlamentar' => 'dep.adrianaventura@camara.leg.br'
                , 'cTelefoneParlamentar' => '3215-5802', 'iIdPartido' => 5, 'iNumeroGabinete' => 802, 'cTipoFuncaoParlamento' => 'Deputado Federal'
                , 'cProfissaoParlamentar' => 'ADMINISTRADOR', 'cLinkFotoParlamentar' => 'https://www.camara.leg.br/internet/deputado/bandep/204528.jpg'
            ],
        ]);
    }
}
