<?php

namespace App\Http\Controllers;

use App\StockHishory;
use Illuminate\Http\Request;

class StockHishoryController extends Controller
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
     * @param  \App\StockHishory  $stockHishory
     * @return \Illuminate\Http\Response
     */
    public function show(StockHishory $stockHishory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockHishory  $stockHishory
     * @return \Illuminate\Http\Response
     */
    public function edit(StockHishory $stockHishory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockHishory  $stockHishory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockHishory $stockHishory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockHishory  $stockHishory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockHishory $stockHishory)
    {
        //
    }
}
