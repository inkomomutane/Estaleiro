<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class CashiersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cashiers')->delete();
        
        \DB::table('cashiers')->insert(array (
            0 => 
            array (
                'cashier_status' => 1,
                'closed_at' => '1972-12-31 18:35:44',
                'created_at' => '2021-04-17 23:06:28',
                'employee_id' => 2,
                'final_balance' => 132346.65607,
                'id' => 1,
                'initial_balance' => 631673746.0,
                'observation' => 'placeat',
                'opened_at' => '2008-07-30 13:37:18',
                'status' => 0,
                'updated_at' => '2021-04-17 23:06:28',
            ),
        ));
        
        
    }
}