<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\MeasuresOfMaterial::class, function (Faker $faker) {
    return [
        'measures_id' => factory(App\Models\Measure::class),
        'materials_id' => factory(App\Models\Material::class),
        'price' => $faker->randomFloat(),
        'description' => $faker->text,
        'quantity_by_base_unity' => $faker->randomFloat(),
        'profit' => $faker->randomFloat(),
        'discount' => $faker->randomFloat(),
    ];
});
