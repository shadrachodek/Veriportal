<?php

namespace App\Http\Controllers;

use App\Model\Batch;
use App\Model\Document;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Keygen\Keygen;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $batches = Batch::all();
        $batchCount = Batch::all()->count();

        return view('back.batch.index', compact('batches', 'batchCount'));
    }


    public function list($batch)
    {

        try{
            $batchDoc = Batch::whereBatchId($batch)->with(['documents' => function($query){
                $query->where('set_for_approval_status', true);
            }])->firstOrFail();

        } catch (ModelNotFoundException  $exception) {
            return back()->withError('Batch not found by ID '. $batch)->withInput();
        }
        return view('back.batch.list', compact('batchDoc'));
    }

    public function show($document)
    {

        try{
            $batch = Document::whereDocumentId($document)->value('batch_id');
            $allDocumentInBatch = Document::whereBatchId($batch)->simplePaginate(1);
            $document = Document::where('document_id', $document)->first();
          //  return Document::where('batch_id', $batch)->paginate(1);  //->where('document_id', $document)->first();
         //   return $allDocumentInBatch;

            // get document user id
            $previous = Document::where('document_id', '<', $document->id)->max('document_id');

            // get document user id
            $next = Document::where('document_id', '>', $document->id)->min('document_id');

            return $next;

        } catch (ModelNotFoundException  $exception) {
            return back()->withError('Batch not found by ID '. $document)->withInput();
        }
     //   return $document;
        return view('back.batch.show', compact('document', 'allDocumentInBatch'));
    }
}
