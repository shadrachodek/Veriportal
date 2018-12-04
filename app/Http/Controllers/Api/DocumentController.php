<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Document\DocumentCollection;
use App\Http\Resources\Document\DocumentResource;
use App\Model\Document;
use App\Model\DocumentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DocumentCollection::collection( Document::all() );
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
     * @param  \App\Model\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return new DocumentResource( $document );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }

    public function document()
    {
        $documentList = DocumentList::all();
        return $documentList;
    }

    public function OwnerDocuments(){
        return "Yes";
    }

    public function getAllSetForApprovalDocuments(){

        $documents = DocumentResource::collection( Document::where( 'set_approval_status', '=', 1)->get());
        return DocumentCollection::collection( $documents );
    }

    public function getApprovalDocument($document){

        $document = DocumentResource::collection(Document::where('document_id', $document)->where('status', '=', 'Set For Approval')->get());
        return $document;
    }

    public function getDocumentById($document){

        $document = ApprovedDocument::collection( Document::where('document_id', $document)->where('approved_status', '!=', null)->get());
        return $document;
    }

    public function getDocumentLike($document){

        $document = DB::table('documents')
            ->where('document_id', 'like', "%{$document}%")
            ->get();
        return DocumentResource::collection($document);

    }

    public function getDocumentUnderBatch($batch){

        $documentUnderBatch = DocumentResource::collection(Document::where('batch_id', $batch)->where('status', '=', 'Set For Approval')->get());
        return $documentUnderBatch;
    }

    public function getAllApproved(){

        $approvedDoc = ApprovedDocument::collection(Document::where('approved_status', '=', true)->get());
        return $approvedDoc;
    }

    public function getAllDenied(){

        $deniedDoc = ApprovedDocument::collection(Document::where('approved_status', '=', false)->get());
        return $deniedDoc;
    }
}
