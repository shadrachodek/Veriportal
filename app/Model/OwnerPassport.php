<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OwnerPassport extends Model
{
    protected $fillable = [
        'passport_one', 'passport_two', 'owner_id',
    ];



    public function getPassportOneAttribute($value){
        return Storage::url('passport/'.$value);
    }

    public function getPassportTwoAttribute($value){
        return Storage::url('passport/'.$value);
    }
}
