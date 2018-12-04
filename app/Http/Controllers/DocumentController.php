<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\DocumentDataTable;
use App\Model\Document;
use App\Model\Batch;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DocumentDataTable $dataTable)
    {
        $documentCount = Document::all()->count();
        return $dataTable->render('back.document.index', compact('documentCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('back.document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function setForApproval($document_id){
        try{
            $batch = Batch::where('number_of_document', '<', Batch::MAX_DOCUMENT)->firstOrFail();
        } catch (ModelNotFoundException  $exception) {
            $batch = Batch::createBatch();
        }


        try {

            $document = Document::whereDocumentId($document_id)->firstOrFail();
            $document->status = 'Set For Approval';
            $document->set_for_approval_by = 1;
            $document->batch_id = $batch->batch_id;
            $document->set_for_approval_at = Carbon::now();
            $document->set_for_approval_status = true;
            $document->created_at = Carbon::now();
            $document->save();
            $batch::whereId($batch->id)->update([
                'number_of_document' => $batch->number_of_document + 1
            ]);
        }
        catch (ModelNotFoundException  $exception) {
            return back()->withError('Document not found by ID '. $document_id)->withInput();
        }

        return back()->with('Document set for approval ');

    }

}
