<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'email_verified_at' => $faker->dateTime(),
        'password' => bcrypt('password'),
        'remember_token' => Str::random(10),
        'role_id' => factory(App\Models\Role::class),
    ];
});
