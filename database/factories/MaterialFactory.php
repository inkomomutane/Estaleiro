<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Material::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'quantity' => $faker->randomFloat(),
        'buy_price' => $faker->randomFloat(),
        'description' => $faker->text,
        'short_description' => $faker->word,
        'intern_material' => $faker->boolean,
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'measure_id' => factory(App\Models\Measure::class),
        'category_id' => factory(App\Models\Category::class),
    ];
});
