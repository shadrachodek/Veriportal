<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount', 'payment_type', 'status', 'document_id',
    ];

    public function document()
    {
        return $this->belongsTo('App\Document');
    }
}
