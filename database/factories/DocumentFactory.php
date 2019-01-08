<?php

use Faker\Generator as Faker;
use Keygen\Keygen;
use App\Model\Document;

$factory->define(App\Model\Document::class, function (Faker $faker) {
    return [
        'mode' => 'New Registration',
        'document_id' => Keygen::numeric(12)->generate(),
        'batch_id'=> null,
        'print_status' => false,
        'reprint_counter' => 0,
        'set_for_approval_by' => null,
        'set_for_approval_status' => false,
        'set_for_approval_at' => null,
        'approved_status' => Document::PENDING[1],
        'approved_by' => null,
        'approved_at' => null,
        'status' => Document::PENDING[0],

        'owner_id' => function () {
            return factory(App\Model\Owner::class)->create()->owner_id;
        }
    ];
});
