<?php

use Faker\Generator as Faker;

$factory->define(App\Model\CofoType::class, function (Faker $faker) {
    return [
        'category' => $faker->year,
        'name' => $faker->streetName,
        'fee' => "HOUSING AREA 'UA' NEW OWERRI",
    ];
});
