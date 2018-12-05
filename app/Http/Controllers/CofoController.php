<?php

namespace App\Http\Controllers;

use App\Model\Cofo;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CofoController extends Controller
{
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
    public function store(Request $request, $owner)
    {
        if($request->hasfile('attach_doc'))
        {
            $photos = $request->file('attach_doc');
            $paths  = [];

            foreach ($photos as $photo) {
                $extension = $photo->getClientOriginalExtension();
                $filename  = $owner . "-". time() . '.' . $extension;
                $paths[]   = $photo->storeAs('public/document', $filename);
                $image = Image::make(storage_path('app/public/document/'.$filename))->resize(50, 50);
                dd($image);

            }

            dd($paths);
        }

    }

    /**r
     * Display the specified resource.
     *
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function show(Cofo $cofo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cofo $cofo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cofo $cofo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cofo $cofo)
    {
        //
    }
}
