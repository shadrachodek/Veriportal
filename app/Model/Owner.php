<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;



class Owner extends Model
{
    protected $fillable = [
        'owner_id', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'marital_status', 'occupation', 'address', 'city', 'lga_lcda', 'nearest_bus_stop', 'telephone', 'mobile', 'email_address'
    ];

    public function getRouteKeyName()
    {
        return 'owner_id';
    }

    public function documents(){
        return $this->hasMany('App\Model\Document', 'owner_id', 'owner_id');
    }

    public function getFullname(){
        return $this->first_name . " " . $this->last_name;
    }
}
