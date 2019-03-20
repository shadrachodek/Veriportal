<?php

namespace App\Http\Controllers;

use App\Model\MaterialRequest;
use App\Model\DocumentList;
use App\Model\Stock;
use App\Model\Warehouse;
use App\Model\ReceiveItem;
use Keygen\Keygen;
use Illuminate\Http\Request;

class StockController extends Controller
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
        $stocks = Stock::all();
        $document = DocumentList::All();
        return view('back.stock.index', compact('stocks', 'document'));
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
        $request->validate([
            'name' => 'required|string|max:255|unique:stocks',
            'storage' => 'required|gte:1|string|max:255',
            'production' => 'required|string|max:255',
            'documentType' => 'required|string|max:255',
        ],
            [
                'name.required' => 'Item Name is require!',
                'storage.required' => 'Storage is require!',
                'storage.gte' => 'Storage can not be empty!',
                'production.required' => 'Storage is require!',
            ]);

        $status = 0;
        if ($request->status == 'on'){
            $status = 1;
        }

        $warehouse = Warehouse::create([
            'warehouse_id' => Keygen::numeric(10)->generate(),
            'storage' => $request->storage,
            'production' => $request->production,
        ]);

        $stock = Stock::create([
            'stock_id' => Keygen::numeric(10)->generate(),
            'name' => $request->name,
            'warehouse_id' => $warehouse->id,
            'status' => $status,
            'document_list_id' => $request->documentType,
        ]);

        alertify()->success($stock->name . " with Item ID: " . $stock->stock_id . " successfuly created");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        return view('back.stock.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }

    public function MaterialRequest(){
        $materialRequests = MaterialRequest::with('stock')->get();
        return view('back.stock.material-request', compact('materialRequests'));
    }

    public function MaterialRequestStore(Request $request){
    //    return $request->all();
        MaterialRequest::create([
            'request_id' => Keygen::numeric(4)->generate(),
            'request_quantity' => $request->quantity_required,
            'requester' => $request->user()->id,
            'stock_id' => $request->item_required
        ]);
        return redirect()->route('stock.materials.request');
    }

    public function ReceiveItem(){
        $receiveItem = ReceiveItem::all();
        return view('back.stock.receive-item', compact('receiveItem'));
    }
}
