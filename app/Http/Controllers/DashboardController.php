<?php

namespace App\Http\Controllers;

use App\Model\Document;
use App\Charts\Dashboard;
use App\Model\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
        $ownershipTransfer =  Document::whereMode('Transfer')->count();

//        $documentCreated = DB::table('documents')
//        ->select(DB::raw("COUNT(*) as count ,  MONTHNAME(created_at) as month"))
//                ->groupBy(DB::raw("created_at"))
//            ->get();

        return view('back.dashboard', compact('totalDocumentOwners', 'newDocmentReg', 'ownershipTransfer'));
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

    public function showGraph(){
        $chart = new Dashboard();
        $document = Document::where('approved_status', 5)
            ->selectRaw(DB::raw("MONTHNAME(created_at) as month, count(*) as total"))
            ->groupBy(DB::raw('MONTHNAME(created_at)'))
            ->get();
        return $document[0];
        $chart->labels($document->keys());
        // $chart->dataset('My dataset 1', 'bar', $document->keys());
        $chart->dataset('My dataset 2', 'bar', $document->values());

        return view('chart-sample', compact('chart'));
    }

    public function userList(){
        return DataTables::of(Owner::query())->make(true);
    }
}
