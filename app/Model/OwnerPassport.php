<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OwnerPassport extends Model
{
    protected $fillable = [
        'file', 'owner_id',
    ];


}
