<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OwnerSignature extends Model
{
    protected $fillable = [
        'file', 'owner_id',
    ];

    public function getFileAttribute($value){
        return Storage::url('signature/'.$value);
    }


}
