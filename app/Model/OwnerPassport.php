<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OwnerPassport extends Model
{
    protected $fillable = [
        'file', 'owner_id',
    ];



    public function getFileAttribute($value){
        return Storage::url('passport/'.$value);
    }
}
