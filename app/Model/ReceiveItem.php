<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReceiveItem extends Model
{
    protected $fillable = [
        'receive_item_id', 'received_quantity', 'receiver', 'stock_id',
    ];
}
