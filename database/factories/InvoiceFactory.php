<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Invoice::class, function (Faker $faker) {
    return [
        'depreciated_at' => $faker->dateTime(),
        'cliente_id' => factory(App\User::class),
        'total_price' => $faker->randomFloat(),
        'total_materials' => $faker->randomNumber(),
        'processed_by' => $faker->randomNumber(),
        'client_name' => $faker->word,
        'order_code' => $faker->word,
        'status_id' => factory(App\Models\Status::class),
        'payment_type' => factory(App\Models\Payment::class),
    ];
});
