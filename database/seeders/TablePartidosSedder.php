<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablePartidosSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_partidos')->insert([
            ['iIdPartido' => 1, 'cNomePartido' => 'Partido da Social Democracia Brasileira', 'cSiglaPartido' => 'PSDB', 'cUfPartido' => 'BA'],
            ['iIdPartido' => 2, 'cNomePartido' => 'Partido Liberal', 'cSiglaPartido' => 'PL', 'cUfPartido' => 'BA'],
            ['iIdPartido' => 3, 'cNomePartido' => 'Partido Social Liberal', 'cSiglaPartido' => 'PSL', 'cUfPartido' => 'SP'],
            ['iIdPartido' => 4, 'cNomePartido' => 'Partido Republicano da Ordem Social', 'cSiglaPartido' => 'PROS', 'cUfPartido' => 'AP'],
            ['iIdPartido' => 5, 'cNomePartido' => 'Partido Novo', 'cSiglaPartido' => 'NOVO', 'cUfPartido' => 'SP']
        ]);
    }
}
