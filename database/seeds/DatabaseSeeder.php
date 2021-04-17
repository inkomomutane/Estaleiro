<?php

use Illuminate\Database\Seeder;
use Database\Seeds\UsersTableSeeder;
use Database\Seeds\RolesTableSeeder;
use Database\Seeds\CashiersTableSeeder;
use Database\Seeds\CategoriesTableSeeder;
use Database\Seeds\PaymentsTableSeeder;
use Database\Seeds\StatusesTableSeeder;
use Database\Seeds\InflowOutflowTypesTableSeeder;
use Database\Seeds\MeasuresTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\Models\Cashier::class,1)->create();
        factory(App\Models\CashInflowOutflow::class,1)->create();
        factory(App\Models\Category::class,1)->create();
        factory(App\Models\InflowOutflowType::class,1)->create();
        factory(App\Models\Invoice::class,1)->create();
        factory(App\Models\Material::class,1)->create();
        factory(App\Models\Measure::class,1)->create();
        factory(App\Models\MeasuresOfMaterial::class,1)->create();
        factory(App\Models\Order::class,1)->create();
        factory(App\Models\Payment::class,1)->create();
        factory(App\Models\Project::class,1)->create();
        factory(App\Models\Role::class,1)->create();
        factory(App\Models\Status::class,1)->create();     
        factory(App\User::class,1)->create();*/
        //$this->call(Databese\Seeds\UsersTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
      //  $this->call(CashiersTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(InflowOutflowTypesTableSeeder::class);
        $this->call(MeasuresTableSeeder::class);
    }
}
