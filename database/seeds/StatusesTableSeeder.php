<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'id' => 1,
                'name' => 'Concluída',
                'updated_at' => '2021-04-17 23:06:28',
            ),
            1 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 2,
                'name' => 'Em validação',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            2 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 3,
                'name' => 'Cancelada',
                'updated_at' => '2021-04-17 23:06:29',
            ),
            3 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'id' => 4,
                'name' => 'Iniciada',
                'updated_at' => '2021-04-17 23:06:29',
            ),
        ));
        
        
    }
}