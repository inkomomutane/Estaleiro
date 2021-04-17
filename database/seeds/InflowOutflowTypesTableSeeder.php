<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class InflowOutflowTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inflow_outflow_types')->delete();
        
        \DB::table('inflow_outflow_types')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'id' => 1,
                'name' => 'Caixa Inicial',
                'updated_at' => '2021-04-17 23:06:28',
            ),
            1 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'id' => 2,
                'name' => 'Vendas',
                'updated_at' => '2021-04-17 23:06:28',
            ),
            1 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'id' => 2,
                'name' => 'Compra',
                'updated_at' => '2021-04-17 23:06:28',
            ),
             2 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'id' => 3,
                'name' => 'Reposição do caixa',
                'updated_at' => '2021-04-17 23:06:28',
            ),
        ));
        
        
    }
}