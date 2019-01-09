<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable = [
        'file', 'user_id',
    ];

    public function getRouteKeyName()
    {
        return 'user_id';
    }

    public function getSignature(){
        return $this->where('id', 1)->get();
    }
}
