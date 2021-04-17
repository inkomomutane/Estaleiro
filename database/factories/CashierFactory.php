<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Cashier::class, function (Faker $faker) {
    return [
        'opened_at' => $faker->dateTime(),
        'closed_at' => $faker->dateTime(),
        'initial_balance' => $faker->randomFloat(),
        'final_balance' => $faker->randomFloat(),
        'cashier_status' => $faker->boolean,
        'employee_id' => factory(App\User::class),
        'status' => $faker->boolean,
        'observation' => $faker->word,
    ];
});
