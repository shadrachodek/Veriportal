<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OwnerSignature extends Model
{
    protected $fillable = [
        'file', 'owner_id',
    ];


}
