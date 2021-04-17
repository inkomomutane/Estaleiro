<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'created_at' => '2021-04-17 23:06:28',
                'id' => 1,
                'level' => 858818,
                'name' => 'Ms. Bianka Murphy Jr.',
                'updated_at' => '2021-04-17 23:06:28',
            ),
            1 => 
            array (
                'category_id' => 1,
                'created_at' => '2021-04-17 23:06:29',
                'id' => 2,
                'level' => 944781732,
                'name' => 'Dr. Nils Ledner',
                'updated_at' => '2021-04-17 23:06:29',
            ),
        ));
        
        
    }
}