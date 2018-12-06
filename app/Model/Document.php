<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;



Relation::morphMap([
    'Certificate of Occupancy' => 'App\Model\Cofo'
]);


class Document extends Model
{
    protected $fillable = [
        'document_id', 'mode', 'batch_id', 'owner_id', 'print_status', 'reprint_counter', 'set_for_approval_by', 'set_for_approval_status', 'set_for_approval_at', 'approved_by', 'approved_status', 'message', 'approved_at', 'status', 'documentable_id', 'documentable_type', 'updated_at'
    ];

    public function getRouteKeyName()
    {
        return 'document_id';
    }

    public function documentable()
    {
        return $this->morphTo();
    }


    public function payment(){
        return $this->hasOne('App\Model\Payment', 'document_id', 'document_id');
    }

    public function files(){
        return $this->hasMany('App\Model\FileStorage', 'ownby', 'document_id');
    }

    public function owner(){
        return $this->belongsTo('App\Model\Owner', 'owner_id', 'owner_id');
    }



    public function user(){
        return $this->belongsTo('App\Model\User', 'approved_by', 'id');
    }

    public function getFullName() {
        return $this->user->first_name. " " .$this->user->last_name;
    }

    public function getOwnerFullName() {
        return $this->owner->first_name. " " .$this->owner->middle_name . " " .$this->owner->last_name;
    }

    public function batch(){
        return $this->belongsTo('App\Model\Batch', 'batch_id', 'batch_id');
    }
}
