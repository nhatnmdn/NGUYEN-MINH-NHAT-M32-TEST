<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'password' =>bcrypt('123123'),
        'birthday' =>$faker->dateTime(),
        'role_id' =>$faker->numberBetween(1,5)
    ];
});
