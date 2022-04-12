<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipodocumentos')->insert([
            'nombredocumento' => 'LIBRETA ELECTORAL O DNI'
        ]);
        DB::table('tipodocumentos')->insert([
            'nombredocumento' => 'CARNET DE EXTRANJERIA'
        ]);
    }
}
