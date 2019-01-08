<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\DocumentDataTable;
use App\Model\Document;
use App\Model\Owner;
use App\Model\Payment;
use App\Model\DocumentList;
use App\Model\Batch;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $documentCount = Document::all()->count();
        $documents = Document::all();
        return view('back.document.index', compact('documentCount','documents'));
    }


    public function documentType(Owner $owner){
        $documentType = DocumentList::all();
        return view('back.document.select-doctype', compact('documentType', 'owner'));
    }

    public function selectedDocument(Owner $owner, DocumentList $type){

        return view('back.document'.'/'.$type->slug, compact('owner'));
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

    public function setForApproval(Request $request, $document_id){
        try{
            $batch = Batch::where('number_of_document', '<', Batch::MAX_DOCUMENT)->firstOrFail();
        } catch (ModelNotFoundException  $exception) {
            $batch = Batch::createBatch();
        }


        try {

            $document = Document::whereDocumentId($document_id)->firstOrFail();
            $document->status = Document::AWAITING[0];
            $document->approved_status = Document::AWAITING[1];
            $document->set_for_approval_by = $request->user()->id;
            $document->batch_id = $batch->batch_id;
            $document->set_for_approval_at = Carbon::now();
            $document->set_for_approval_status = true;
            $document->created_at = Carbon::now();
            $document->save();

            $batchStatus = "Partially Processed";
            if($batch->number_of_document < 1){
                $batchStatus = "Awaiting";
            }


            $batch::whereId($batch->id)->update([
                'number_of_document' => $batch->number_of_document + 1,
                'status' => $batchStatus
            ]);
        }
        catch (ModelNotFoundException  $exception) {
            return back()->withError('Document not found by ID '. $document_id)->withInput();
        }

        return back()->with('Document set for approval ');

    }

    public function approveDocuments(){

        $documents = Document::where('approved_status', 1)->get();
        $approvedCount = Document::where('approved_status', 1)->count();
        return view('back.document.approved', compact('documents', 'approvedCount'));
    }

    public function approvedShow(Document $document){
        return view('back.document.approved-show', compact('document'));
    }

    public function declinedShow(Document $document){
        return view('back.document.declined-show', compact('document'));
    }

    public function previewDocument(Document $document){
        return view('back.document.preview', compact('document'));
    }


    public function declineDocuments(){

        $documents = Document::where('approved_status', 0)->get();
        $declinedCount = Document::where('approved_status', 0)->count();
        return view('back.document.declined', compact('documents','declinedCount'));
    }

    public function loadPaymentPage(Document $document){

        if ( $document->payment ) {
            return redirect()->route('doc.receipt', compact('document'));
        }

        $payment_types = ['BANK POS', 'CASH', 'BANK TRANSFER'];

        //   $owners = Owner::all();
        return view('back.document.reg-payment', compact('document', 'payment_types'));
    }

    public function receipt(Document $document){
        return view('back.document.receipt', compact('document'));
    }

    public function payment(Request $request, $document_id)
    {
        $request->validate([
            'amount_paid' => 'required|numeric',
            'payment_type' => 'required|string|max:255',
        ],
            [
                'amount_paid.required' => 'Amount paid is require!',
                'amount_paid.numeric' => 'Invalid value input'

            ]);

        $payment = Payment::create([
            'amount' => $request->amount_paid,
            'payment_type' => $request->payment_type,
            'document_id' => $document_id,
            'status' => 'Paid',
        ]);

        return redirect()->route('doc.receipt', compact('document_id'));

    }

}
