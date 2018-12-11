<?php

use Faker\Generator as Faker;
use Keygen\Keygen;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Model\User::class, function (Faker $faker) {
    return [
        'first_name' => "Shadrach",
        'last_name' => "Odekhiran",
        'email' => "shadymedy@gmail.com",
        'city' => "Lagos",
        'phone' => "08020545961",
        'status' => true,
        'user_id' => Keygen::numeric(8)->generate(),
        'username' => "shadymedy",
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
