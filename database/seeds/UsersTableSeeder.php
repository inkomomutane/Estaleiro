<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'email' => 'damore.cicero@example.net',
                'email_verified_at' => '1991-09-12 18:36:54',
                'id' => 2,
                'name' => 'Harley Lockman',
                'password' => '$2y$10$K2DgbGlLg5IdiEBZgEibGeOAiwRRHYXrzFAl7LdnFcDA14ucxwGzi',
                'remember_token' => 'yp9Xn7kPqC',
                'role_id' => 1,
                'updated_at' => '2021-04-17 23:06:28',
            ),
            1 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'email' => 'xfeest@example.com',
                'email_verified_at' => '1977-07-14 14:21:57',
                'id' => 3,
                'name' => 'Ms. Aracely O\'Kon',
                'password' => '$2y$10$Wn5d2nXOmQzh0ubEaLD4bedMjvU1Z3OfIEHP/PTj9F2DKsjAEC2ze',
                'remember_token' => '7evQ88BNk8',
                'role_id' => 2,
                'updated_at' => '2021-04-17 23:06:28',
            ),
            2 => 
            array (
                'created_at' => '2021-04-17 23:06:28',
                'email' => 'hailee82@example.com',
                'email_verified_at' => '2003-09-13 12:22:54',
                'id' => 4,
                'name' => 'Kelsi Bruen',
                'password' => '$2y$10$qcS1Li5o5aRVq/EORRnJeuWBmc/z8Xww/hq/Mxc1ppSdc2Iff4UxC',
                'remember_token' => '6XQEoU3fQE',
                'role_id' => 3,
                'updated_at' => '2021-04-17 23:06:28',
            ),
            3 => 
            array (
                'created_at' => '2021-04-17 23:06:29',
                'email' => 'qlebsack@example.net',
                'email_verified_at' => '1989-12-14 17:16:35',
                'id' => 5,
                'name' => 'Ms. Brisa Feeney',
                'password' => '$2y$10$f7GaTumUmql3VGel6x0cUOR1oyiZoxPhLuFYDctaydDUzvuJ914QO',
                'remember_token' => 'FnvD4t7SvW',
                'role_id' => 4,
                'updated_at' => '2021-04-17 23:06:29',
            ),
        ));
        
        
    }
}