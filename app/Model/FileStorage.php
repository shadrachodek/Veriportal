<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FileStorage extends Model
{
    protected $fillable = [
        'type', 'filename', 'thumbnail', 'ownby',
    ];
}
