<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount', 'payment_type', 'status', 'document_id',
    ];

//    public function getAmountAttribute($value) {
//        return number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $value)),2);
//    }

    public function document()
    {
        return $this->belongsTo('App\Model\Document', 'document_id', 'document_id');
    }

    public function platformCharges()
    {
        return $this->belongsTo('App\Model\PlatformCharges', 'document_id', 'document_id');
    }

    public function formatMoney($value)
    {
        return number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $value)),2);
    }
}
