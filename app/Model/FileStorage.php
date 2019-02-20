<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FileStorage extends Model
{
    protected $fillable = [
        'type', 'filename', 'thumbnail', 'ownby',
    ];

    public function getFilenameAttribute($value){
        return Storage::url('document/'.$value);
    }
}
