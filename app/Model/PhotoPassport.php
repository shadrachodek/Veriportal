<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PhotoPassport extends Model
{
    protected $fillable = [
        'file', 'owner_id',
    ];
}
