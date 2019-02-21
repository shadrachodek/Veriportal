<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CofoType extends Model
{

    protected $fillable = [
        'category', 'name', 'status', 'fee',
    ];

    public function getStatusAttribute( $value)
    {
        switch ($value) {
            case 1:
                return "Enable";
                break;
            case 0:
                return "Disable";
                break;
        }
    }
}
