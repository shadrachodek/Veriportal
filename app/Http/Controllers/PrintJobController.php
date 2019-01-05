<?php

namespace App\Http\Controllers;

use App\PrintJob;
use Illuminate\Http\Request;

class PrintJobController extends Controller
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
        return view('back.print.index');
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
     * @param  \App\PrintJob  $printJob
     * @return \Illuminate\Http\Response
     */
    public function show(PrintJob $printJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrintJob  $printJob
     * @return \Illuminate\Http\Response
     */
    public function edit(PrintJob $printJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrintJob  $printJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrintJob $printJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrintJob  $printJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrintJob $printJob)
    {
        //
    }
}
