<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'warehouse_id', 'production', 'storage',
    ];

    public function getRouteKeyName()
    {
        return 'warehouse_id';
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'warehouse_id');
    }
}
