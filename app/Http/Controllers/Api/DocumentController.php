<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Document\ApprovedDocument;
use App\Http\Resources\Document\DeniedDocument;
use App\Http\Resources\Document\DocumentCollection;
use App\Http\Resources\Document\DocumentResource;
use App\Model\Document;
use App\Model\DocumentList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


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

        $documents = DocumentResource::collection( Document::whereSetForApprovalStatus(1)->get());
        return $documents;
    }

    public function DocumentStatusProcessor(Request $request, Document $document){
        $request->validate([
            'status' => 'required|string|max:255',
            'message' => 'bail',
            'createdAt' => 'required|date|max:255',
            ],
            [
                'documentId.required' => 'Document Id is require!',
                'status.required' => 'Status is require!'

            ]);

            if (!$document->set_for_approval_status) {
                return \response($document->document_id . " Is Not yet Verified for Approval");
            }

        $status = strtolower($request->get('status')) == 'approved' ? 1 : 0;
        $statusText = strtoupper($request->get('status'));
        $document->update([
            'approved_status' => $statusText,
            'approved_by' => 2,
            'approved_at' => $request->get('createdAt'),
            'status' => $request->get('status'),
            'message' => $request->get('message'),
            'updated_at' => Carbon::now()
        ]);

//        update([
//            'status' => $request->get('status'),
//            'approved_at' => $request->get('createdAt'),
//            'approved_status' => strtolower($request->get('status')) == "approved" ? 1 : 0
//        ]);

        return \response($document->document_id . " Process Successfully Updated");
    }

    public function getDocumentByApproval(Document $document){
        return new DocumentResource($document);
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

    public function AllApprovedDocument(){

        $approvedDocument = ApprovedDocument::collection(Document::whereApprovedStatus(1)->get());
        return $approvedDocument;
    }

    public function AllDeniedDocument(){

        $deniedDocument = DeniedDocument::collection(Document::whereApprovedStatus(0)->get());
        return $deniedDocument;

    }
}
