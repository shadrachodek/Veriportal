<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MaterialRequest extends Model
{
    protected $fillable = [
        'request_id', 'request_quantity', 'approved_quantity', 'status', 'approver', 'requester', 'stock_id',
    ];

    public function stock(){
        return $this->belongsTo('App\Model\Stock');
    }
}
