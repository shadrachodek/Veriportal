<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DocumentList extends Model
{

    protected $fillable = [
        'name', 'slug', 'model',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
