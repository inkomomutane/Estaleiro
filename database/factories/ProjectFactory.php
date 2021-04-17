<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'deposited_amount' => $faker->randomFloat(),
        'available_amount' => $faker->randomFloat(),
        'missing_amount' => $faker->randomFloat(),
        'progress_percent' => $faker->randomFloat(),
        'total_materials' => $faker->randomNumber(),
        'total_paid' => $faker->randomFloat(),
        'cliente_id' => factory(App\User::class),
        'status_id' => factory(App\Models\Status::class),
    ];
});
