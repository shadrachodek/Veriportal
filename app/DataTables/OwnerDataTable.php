<?php

namespace App\DataTables;

use App\Model\Owner;
use Yajra\DataTables\Services\DataTable;

class OwnerDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', function ($owner) {
                return '
                <a href="owner/'.$owner->owner_id.'" class="btn btn-default btn-fill small-btn"> View</a>
                <a href="owner/'.$owner->owner_id.'" class="btn btn-warning btn-fill small-btn">Delete</a>
                ';
            });
          //  ->editColumn('action', "<a href='{{ route('owner.show',['id'=>$id]) }}' >hhh</a>")
//          ->filter(function ($query) {
//              if (request()->has('owner_id')) {
//                  $query->where('owner_id', 'like', "%{request('name')}%");
//              }
//          });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Owner $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Owner $model)
    {
        return $model->newQuery()->select('owner_id', 'full_name', "mobile", 'occupation', 'marital_status');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '30px'])
                    ->parameters([
                        'paging' => true,
                        'searching' => true,
                        'info' => true,
                        'searchDelay' => 350,
                        'drawCallback' => '',
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'owner_id',
            'full_name',
            "mobile",
            'occupation',
            'marital_status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Owner_' . date('YmdHis');
    }
}
