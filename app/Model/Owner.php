<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;



class Owner extends Model
{
    protected $fillable = [
        'owner_id', 'full_name', 'date_of_birth', 'marital_status', 'occupation', 'address', 'city', 'lga_lcda', 'nearest_bus_stop', 'telephone', 'mobile', 'email_address'
    ];

    public function getRouteKeyName()
    {
        return 'owner_id';
    }

    public function documents(){
        return $this->hasMany('App\Model\Document', 'owner_id', 'owner_id');
    }

    public function photo(){
        return $this->hasOne('App\Model\OwnerPassport', 'owner_id', 'owner_id');
    }

    public function signature(){
        return $this->hasOne('App\Model\OwnerSignature', 'owner_id', 'owner_id');
    }

    public function passport(){
        return $this->hasOne('App\Model\OwnerPassport', 'owner_id', 'owner_id');
    }


    public function getFullname(){
        return $this->full_name;
    }
}
