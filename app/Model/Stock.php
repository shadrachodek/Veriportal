<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'stock_id', 'name', 'document_list_id', 'warehouse_id', 'status',
    ];

    public function getRouteKeyName()
    {
        return 'stock_id';
    }

    public function warehouse(){
        return $this->hasOne(Warehouse::class, 'id');
    }

    public function materials(){
        return $this->hasMany(MaterialRequest::class);
    }
}
