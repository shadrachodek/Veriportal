<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BatchResource;
use App\Http\Resources\Document\DocumentResource;
use App\Model\Batch;
use App\Model\Document;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\Types\Null_;

class BatchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getBatchLike($batch){
        $batch = DB::table('batches')
            ->where('batch_id', 'like', "%{$batch}%")
            ->get();

        return BatchResource::collection( $batch );
    }

    public function BatchStatusProcessor(Request $request, $batch){

        $request->validate([
            'status' => 'required|string|max:255',
            'createdAt' => 'required|date|max:255',
        ],
            [
                'status.required' => 'Status is require!'

            ]);

        try {
            $batch = Batch::whereBatchId($batch)->firstOrFail();
        }
        catch (ModelNotFoundException  $exception) {
            return back()->withError('Batch not found by ID '. $batch)->withInput();
        }

        $status = strtolower($request->get('status')) == 'approved' ? 1 : 0;
       // $statusText = strtoupper($request->get('status'));

        $updateStatusCode = Document::DECLINED[1];
        $updateStatusText = Document::DECLINED[0];
        $message = $request->get('message');
        if ($status == 1){
            $updateStatusCode = Document::APPROVED[1];
            $updateStatusText = Document::APPROVED[0];
            $message = null;
        }

        Document::whereBatchId($batch->batch_id)->update([
            'approved_status' => $updateStatusCode,
            'approved_by' => $request->user()->id,
            'approved_at' => $request->get('createdAt'),
            'status' => $updateStatusText,
            'can_print' => $status,
            'message' => $message,
            'updated_at' => Carbon::now()
        ]);

        $batch->update([
            'approved_at' => Carbon::now(),
            'status' => "Processed",
            'updated_at' => Carbon::now()
        ]);

        return response([
            'message' => "Process Successfully Updated",
            'status' => $batch->status
        ], Response::HTTP_CREATED);

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
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        //
    }


    public function allAwaitingDocumentOnABatch($batch){

        $documentUnderBatch = DocumentResource::collection(Document::whereBatchId($batch)->whereApprovedStatus(Document::AWAITING[1])->get());
        return $documentUnderBatch;
    }
}
