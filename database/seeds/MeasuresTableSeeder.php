<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class MeasuresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('measures')->delete();
        
        \DB::table('measures')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 1,
                'name' => 'metro(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            1 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 2,
                'name' => 'quilograma(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            2 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 3,
                'name' => 'litro(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            3 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 4,
                'name' => 'lamina(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            4 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 5,
                'name' => 'caixa(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            5 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 6,
                'name' => 'barra(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
             6 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 7,
                'name' => 'lata(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            7 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 8,
                'name' => 'carrada(s)',
                'updated_at' => '2021-04-17 23:06:29',
            ),
           
        ));
        
        
    }
}