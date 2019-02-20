<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class DocumentSurveyPlan extends Model
{
    protected $fillable = [
        'file', 'document_id',
    ];



    public function getFileAttribute($value){
        return Storage::url('survey-plan/'.$value);
    }
}
