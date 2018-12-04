<?php

namespace App\Model;

use Keygen\Keygen;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'batch_id', 'batch_max', 'number_of _document', 'status',
    ];

    const MAX_DOCUMENT = 50;
    public static $BATCH_COUNT = 0;

    public static function createBatch(){
        $value = Batch::create([
            'batch_id' => Keygen::numeric(11)->generate(),
            'batch_max' => Batch::MAX_DOCUMENT,
        ]);

        Batch::$BATCH_COUNT = Batch::$BATCH_COUNT  + 1;
        return $value;
    }


    public function documents()
    {
        return $this->hasMany('App\Model\Document', 'batch_id', 'batch_id');
    }
}
