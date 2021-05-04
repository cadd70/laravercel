<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TablePartidosSedder::class);
        $this->call(TableFichaCadastroParlamentarSeeder::class);
        $this->call(TableQuantidadeVotoPorMunicipioSeeder::class);
        $this->call(TableDoacaoPorParlamentarSeeder::class);
    }
}
