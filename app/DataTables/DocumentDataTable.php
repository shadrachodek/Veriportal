<?php

namespace App\DataTables;

use App\Model\Document;
use App\Model\Owner;
use Yajra\DataTables\Services\DataTable;

class DocumentDataTable extends DataTable
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
            ->addColumn('action', function ($document) {
                return '
                <a href="document/'.$document->document_id.'" class="btn btn-default btn-fill small-btn"> View</a>
                <a href="document/'.$document->document_id.'" class="btn btn-warning btn-fill small-btn">Delete</a>
                ';
            })
            ->editColumn('owner_id', function(Document $document) {
                return $document->owner->getFullname();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Document $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Document $model)
    {
        return $model->newQuery()->select('document_id', 'documentable_type', 'status', 'owner_id');
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
                    ->addAction(['width' => '80px'])
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'document_id',
            'documentable_type',
            'status',
            ['data' => 'owner_id', 'name' => 'owner_id', 'title' => 'Owner']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Document_' . date('YmdHis');
    }
}
