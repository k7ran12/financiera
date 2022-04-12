<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('clientes')->insert([
            'Nombre' => 'Cristian',
            'Apellido' => 'Antonio Valverde',
            'NumDoc' => 76600398,
            'Region' => 'Junin',
            'Provincia' => 'Huancayo',
            'Distrito' => 'El tambo',
            'Direccion' => 'Jr Gonzales Prada 753',            
            'NumTelefono' => '990029440',
            'CorreoElec' => 'francia24vs@gmail.com',            
            'tipodocumentos_id' => 1,            
        ]);
    }
}
