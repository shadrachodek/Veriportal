<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cofo extends Model
{
    protected $fillable = [
        'house_plot_number', 'street_name', 'area', 'file_number', 'city', 'dimension', 'survey_plan_number', 'purpose_of_use', 'commencement_year', 'development_period', 'building_value', 'yearly_rent_payable', 'term', 'revision_period',
    ];



    public function documents()
    {
        return $this->morphMany('App\Model\Document', 'documentable');
    }
}
