<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'id' => 1,
                'name' => 'Cash/Dinheiro',
                'updated_at' => '2021-04-17 23:06:28',
            ),
            1 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'id' => 2,
                'name' => 'Mpesa',
                'updated_at' => '2021-04-17 23:06:28',
            ),
        ));
        
        
    }
}