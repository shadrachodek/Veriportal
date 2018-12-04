<?php

use Faker\Generator as Faker;
use Keygen\Keygen;

$factory->define(App\Model\Document::class, function (Faker $faker) {
    return [
        'mode' => 'New Registration',
        'document_id' => Keygen::numeric(12)->generate(),
        'batch_id'=> null,
        'print_status' => false,
        'reprint_counter' => 0,
        'set_for_approval' => null,
        'set_approval_status' => false,
        'set_for_approval_at' => null,
        'approved_status' => null,
        'approved_by' => null,
        'approved_at' => null,
        'status' => 'Pending Approval',

        'owner_id' => function () {
            return factory(App\Model\Owner::class)->create()->owner_id;
        }
    ];
});
