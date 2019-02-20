<?php
namespace App;
use App\Model\Document;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DocumentFilters extends QueryFilters
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function document_id($term) {
        return $this->builder->where('document_id', 'LIKE', "%$term%");
    }

    public function status($term) {
        return $this->builder->whereHas('status', function ($query) use ($term) {
            return $query->where('status', 'LIKE', "%$term%");
        });
    }

    public function approved_status($term) {
     //   $year = Carbon::now()->subYear($age)->format('Y');
        return $this->builder->where('approved_status', '=', "5");
    }

//    public function sort_age($type = null) {
//        return $this->builder->orderBy('dob', (!$type || $type == 'asc') ? 'desc' : 'asc');
//    }
}