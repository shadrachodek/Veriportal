<?php

use Faker\Generator as Faker;

$factory->define(App\Model\DocumentList::class, function (Faker $faker) {
    return [
        'name' => "Certificate of Occupancy",
        'slug' => "certificate-of-occupancy",
        'model' => "App\Model\Cofo",
    ];
});
