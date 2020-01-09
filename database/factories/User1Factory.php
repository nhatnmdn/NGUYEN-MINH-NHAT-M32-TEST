<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mode\User1;
use Faker\Generator as Faker;

$factory->define(User1::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'password' =>$faker->password,
        'birthday' =>$faker->date(),
        'role_id' =>$faker->numberBetween(1,10)
    ];
});
