<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Cofo::class, function (Faker $faker) {
    return [
        'house_plot_number' => $faker->year,
        'street_name' => $faker->streetName,
        'area' => "HOUSING AREA 'UA' NEW OWERRI",
        'city' => $faker->city,
        'dimension' => $faker->buildingNumber,
        'survey_plan_number' => $faker->phoneNumber,
        'purpose_of_use' => $faker->randomElement(['RESIDENTIAL', 'COMMERCIAL', 'COMMERCIAL/RESIDENTIAL', 'PUBLIC']),
        'commencement_year' => $faker->year,
        'development_period' => '2',
        'building_value' => $faker->randomElement([2000000, 3000000, 1000000]),
        'yearly_rent_payable' => $faker->year,
        'term' => '99',
        'revision_period' => $faker->year,
        'file_number' => $faker->swiftBicNumber,
    ];
});
