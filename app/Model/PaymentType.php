<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $fillable = [
        'name', 'type',
    ];
}
