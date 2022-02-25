<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('frutas')->insert(array(
                'nombre'=>'Melocoton',
                'descripcion'=>'Melocotón de España',
                'precio'=>3,
                'fecha'=>date('Y-m-d')
            ));
        
        $this->command->info("Tabla frutas rellenada"); 
    }
}
