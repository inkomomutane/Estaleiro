<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\CashInflowOutflow::class, function (Faker $faker) {
    return [
        'payment_type' => factory(App\Models\Payment::class),
        'description' => $faker->text,
        'inflow_outflow_type_id' => factory(App\Models\InflowOutflowType::class),
        'amount' => $faker->randomFloat(),
        'invoice_id' => factory(App\Models\Invoice::class),
    ];
});
