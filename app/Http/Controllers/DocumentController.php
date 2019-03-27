<?php

namespace App\Http\Controllers;

use App\DocumentFilters;
use App\Model\Cofo;
use App\Model\CofoType;
use App\Model\Signature;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\DataTables\DocumentDataTable;
use App\Model\Document;
use App\Model\Owner;
use App\Model\Payment;
use App\Model\DocumentList;
use App\Model\Batch;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Exports\DocumentExport;
use Maatwebsite\Excel\Facades\Excel;


class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, DocumentFilters $filters)
    {

      //  return Document::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

         //   ->get();

      //  return Document::filter($filters)->get();

        $document = (new Document())->newQuery();

//        if (($request->has('from-date') && $request->filled('from-date')) && ($request->has('to-date') && $request->filled('to-date'))){
//            $charge->whereBetween('created_at', [$request->input('from-date'), $request->input('to-date')]);
//        }

        if ($request->has('document_id') && $request->filled('document_id')){
            $document->where('document_id','like', '%' . $request->input('document_id') . '%');
        }

        if ($request->has('document_type') && $request->filled('document_type')){
            $document->where('documentable_type', $request->input('document_type'));
        }

        if ($request->has('full_name') && $request->filled('full_name')) {
            $name = $request->input('full_name');
            $document->with(['owner'])->whereHas('owner', function($query) use ($name) {
                $query->where('full_name', 'like', '%' . $name . '%');
            });
        }




        $documents = $document->paginate(50);
      //  $total = PlatformCharges::all()->sum('charges');
       // $paymentTypes = PaymentType::pluck('type');
//        return view('back.report.platform-charges', compact('charges', 'total', 'paymentTypes', 'cofoTypes'));


        $documentCount = Document::all()->count();
       // $documents = Document::all();
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
        $document = Document::whereDocumentId($document_id)->firstOrFail();
        if (!$document->surveyPlan){
            $path = route('doc.survey_plan', compact('document_id'));
            Alert::error('Survey Plan file needs to be uploaded before this document  set for approval <a href="'. $path .'">Click Here To Upload</a>','Oops!')->html()->persistent('Upload Later');
            return back();
        }

        if (!$document->payment){
            $path = route('doc.payments', compact('document_id'));
            Alert::error('No payment transaction <a href="'. $path .'">Click Here To Make Payment</a>','Oops!')->html()->persistent('Pay Later');
            return back();
        }


        try{
            $batch = Batch::where('number_of_document', '<', Batch::MAX_DOCUMENT)->firstOrFail();
        } catch (ModelNotFoundException  $exception) {
            $batch = Batch::createBatch();
        }


        try {


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
            return back()->with('errors', 'Document not found by ID '. $document_id);
        }

        alertify()->success('Document set for approval successfully');
        return back();

    }

    public function approveDocuments(){

        $documents = Document::where('approved_status', Document::APPROVED[1])->get();
        $approvedCount = Document::where('approved_status', Document::APPROVED[1])->count();
        return view('back.document.approved', compact('documents', 'approvedCount'));
    }

    public function approvedShow(Document $document){

        return view('back.document.approved-show', compact('document'));
    }

    public function declinedShow(Document $document){
        return view('back.document.declined-show', compact('document'));
    }

    public function previewDocument(Document $document){
        $signature = Signature::all()->first();
        return view('back.document.preview', compact('document', 'signature'));
    }

    public function PdfDownload(Document $document){
       // return $document;
        $pdf = PDF::loadView('back.document.download', compact('document'));
        return $pdf->download($document->getOwnerFullName().' document.pdf');
    }


    public function declineDocuments(){

        $documents = Document::where('approved_status', Document::DECLINED[1])->get();
        $declinedCount = Document::where('approved_status', Document::DECLINED[1])->count();
        return view('back.document.declined', compact('documents','declinedCount'));
    }

    public function loadPaymentPage(Document $document){

        if ( $document->payment ) {
            return redirect()->route('doc.receipt', compact('document'));
        }

        $payment_types = ['BANK POS', 'CASH', 'BANK TRANSFER'];
        $category = $document->documentable->category;
        $purpose_of_use = $document->documentable->purpose_of_use;
        if ($category == "Recertification"){
            $category = "New";
            $doc_fee = CofoType::where('category', $category)
                ->where('name', $purpose_of_use)
                ->first()->fee;
            $fee = ($doc_fee * 0.50);

            return view('back.document.reg-payment', compact('document', 'payment_types', 'fee'));

        }
        $fee = CofoType::where('category', $category)
            ->where('name', $purpose_of_use)
            ->first()->fee;

        //   $owners = Owner::all();
        return view('back.document.reg-payment', compact('document', 'payment_types', 'fee'));
    }

    public function receipt(Document $document){
        return view('back.document.receipt', compact('document'));
    }

    public function payment(Request $request, $document_id)
    {
        $document = Document::whereDocumentId($document_id)->firstOrFail();

        $request->validate(
            [
            'amount_paid' => 'required|numeric',
            'payment_type' => 'required|string|max:255',
        ],
            [
                'amount_paid.required' => 'Amount paid is require!',
                'amount_paid.numeric' => 'Invalid value input'

            ]
        );

        $payment = Payment::create([
            'amount' => $request->amount_paid,
            'payment_type' => $request->payment_type,
            'document_id' => $document_id,
            'purpose_of_use' => $document->documentable->purpose_of_use,
            'name' => $document->owner->full_name,
            'status' => 'Paid',
        ]);

        return redirect()->route('doc.receipt', compact('document_id'));

    }

    public function export()
    {
        return Excel::download(new DocumentExport, 'document.csv', \Maatwebsite\Excel\Excel::CSV);
    }

}
