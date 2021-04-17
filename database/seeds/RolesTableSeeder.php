<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'description' => 'User with all permitions on system.',
                'id' => 1,
                'name' => 'Admin',
                'updated_at' => '2021-04-17 23:06:28',
            ),
            1 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'description' => 'User having permitions to control werehouse operations.',
                'id' => 2,
                'name' => 'Warehouse manager',
                'updated_at' => '2021-04-17 23:06:28',
            ),
            2 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'description' => 'User having permitios to work with money, buy and sell materials.',
                'id' => 3,
                'name' => 'Cashier',
                'updated_at' => '2021-04-17 23:06:28',
            ),
             3 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'description' => 'User having permition to buy, views his logs and his projects.',
                'id' => 4,
                'name' => 'Client',
                'updated_at' => '2021-04-17 23:06:28',
            ),
        ));
        
        
    }
}