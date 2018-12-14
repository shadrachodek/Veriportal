<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\DocumentNotSetForApproval;
use App\Http\Controllers\Controller;
use App\Http\Resources\Document\ApprovedDocument;
use App\Http\Resources\Document\DeniedDocument;
use App\Http\Resources\Document\DocumentCollection;
use App\Http\Resources\Document\DocumentResource;
use App\Model\Document;
use App\Model\Batch;
use App\Model\DocumentList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;


class DocumentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return DocumentCollection::collection( Document::where('set_for_approval_status', 1)->get() );


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

        $document = Document::all()->reject(function ($document) {
            return $document->set_for_approval_status == null;
        })
            ->filter(function ($document) {
                return $document->approved_status == null;
            });

        $documents = DocumentResource::collection($document);
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
                throw new DocumentNotSetForApproval;
            }

        $status = strtolower($request->get('status')) == 'approved' ? 1 : 0;
        $statusText = strtoupper($request->get('status'));
        $document->update([
            'approved_status' => $status ,
            'approved_by' => 2,
            'approved_at' => $request->get('createdAt'),
            'status' => $statusText,
            'message' => $request->get('message'),
            'updated_at' => Carbon::now()
        ]);

        $batch = Batch::whereBatchId($document->batch_id)->firstOrFail();
        $batchStatus = "Partially Processed";
        if($batch->batch_max == $batch->number_of_document){
            $batchStatus = "Processed";
        }
        $batch->update([
            'approved_at' => Carbon::now(),
            'status' => $batchStatus,
            'updated_at' => Carbon::now()
        ]);

//        update([
//            'status' => $request->get('status'),
//            'approved_at' => $request->get('createdAt'),
//            'approved_status' => strtolower($request->get('status')) == "approved" ? 1 : 0
//        ]);

        return response([
            'message' => "Process Successfully Updated",
            'status' => $batch->status
        ], Response::HTTP_CREATED);
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

    public function AllApprovedDocument(){

        $document = Document::all()->reject(function ($document) {
            return $document->set_for_approval_status == null;
        })
            ->filter(function ($document) {
                return $document->approved_status == true;
            });

        $approvedDocument = ApprovedDocument::collection($document);
        return $approvedDocument;
    }

    public function AllDeniedDocument(){
        $document = Document::all()->reject(function ($document) {
            return $document->set_for_approval_status == null;
        })
            ->filter(function ($document) {
                return $document->approved_status == false;
            });

        $deniedDocument = DeniedDocument::collection($document);
        return $deniedDocument;

    }
}
