<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OwnerRequest;
use App\Http\Resources\OwnerCollection;
use App\Http\Resources\OwnerResource;
use App\Model\Owner;
use App\Model\Signature;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Keygen\Keygen;
use Illuminate\Http\Request;

class SignatureController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->user()->signature) {
            return response([
                'message' => null . ' No Signature Found',
            ], Response::HTTP_NO_CONTENT);
        }

        return response([
            'data' => $request->user()->signature->file,
        ], Response::HTTP_CREATED);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->user()->signature;
        Signature::updateOrCreate(['user_id'=>$request->user()->id],
            ['file' => $request->file, 'user_id', $request->user()->id]);
        return response([
            'data' =>  'successfully'
        ], Response::HTTP_CREATED);
    }

    public function show(Owner $owner)
    {

    }

    public function edit(Owner $owner)
    {
        //
    }


    public function update(Request $request, Owner $owner)
    {

    }


    public function destroy(Signature $signature)
    {

        $signature->delete();
        return response([
            'data' => null
        ], Response::HTTP_NO_CONTENT);
    }
}
