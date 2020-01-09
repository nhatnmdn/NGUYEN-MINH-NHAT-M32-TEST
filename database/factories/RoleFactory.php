<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mode\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
