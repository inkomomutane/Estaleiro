<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Order::class, function (Faker $faker) {
    return [
        'order_code' => $faker->word,
        'discounted' => $faker->boolean,
        'material' => factory(App\Models\MeasuresOfMaterial::class),
        'quantity' => $faker->randomNumber(),
        'vat_included' => $faker->boolean,
    ];
});
