<?php

namespace App\Http\Controllers;

use App\Model\Document;
use App\Model\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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
        $totalDocumentOwners =  Owner::all()->count();
        $newDocmentReg =  Document::whereMode('New Registration')->count();
        $docmentOwnershipTransfer =  Document::whereMode('Transfer')->count();

//        $documentCreated = DB::table('documents')
//        ->select(DB::raw("COUNT(*) as count ,  MONTHNAME(created_at) as month"))
//                ->groupBy(DB::raw("created_at"))
//            ->get();

        $documentCreated = Document::thisYear()
            ->selectRaw(DB::raw("MONTHNAME(created_at) as month, count(*) as total"))
            ->groupBy("month")
            ->get('month', 'total');


        return view('back.dashboard', compact('totalDocumentOwners', 'newDocmentReg', 'docmentOwnershipTransfer', 'documentCreated'));
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

    public function totalDocumentOwners()
    {
        return Owner::all()->count();
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
    public function show($id)
    {
        //
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
}
