<?php

use Faker\Generator as Faker;
use Keygen\Keygen;

$factory->define(App\Model\Owner::class, function (Faker $faker) {
    return [
        'owner_id' => Keygen::numeric(11)->generate(),
        'full_name' => $faker->name,
        'date_of_birth' => $faker->date(),
        'marital_status' => $faker->randomElement(['Single', 'Married', 'Divorce', 'Separated']),
        'occupation' => $faker->jobTitle,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'lga_lcda' => $faker->streetName,
        'nearest_bus_stop' => $faker->streetSuffix,
        'telephone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'email_address' => $faker->unique()->safeEmail,
    ];
});
