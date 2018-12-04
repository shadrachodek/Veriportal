<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Cofo::class, function (Faker $faker) {
    return [
        'house_plot_number' => $faker->year,
        'street_name' => $faker->streetName,
        'lga' => $faker->streetSuffix,
        'city' => $faker->city,
        'dimension' => $faker->buildingNumber,
        'survey_plan_number' => $faker->phoneNumber,
        'purpose_of_use' => $faker->sentence,
        'commencement_year' => $faker->year,
        'development_period' => $faker->year,
        'building_value' => $faker->creditCardNumber,
        'yearly_rent_payable' => $faker->year,
        'term' => $faker->sentence,
        'revision_period' => $faker->year,
    ];
});
