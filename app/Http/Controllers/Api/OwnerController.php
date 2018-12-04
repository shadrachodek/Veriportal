<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OwnerRequest;
use App\Http\Resources\OwnerCollection;
use App\Http\Resources\OwnerResource;
use App\Model\Owner;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Keygen\Keygen;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OwnerCollection::collection( Owner::all() );
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
    public function store(OwnerRequest $request)
    {
        $owner = new Owner;
        $owner->owner_id = Keygen::numeric(10)->generate();
        $owner->first_name = $request->first_name;
        $owner->last_name = $request->last_name;
        $owner->middle_name = $request->middle_name;
        $owner->mobile = $request->mobile;
        $owner->telephone = $request->telephone;
        $owner->address = $request->address;
        $owner->city = $request->city;
        $owner->lga_lcda = $request->lga_lcda;
        $owner->nearest_bus_stop = $request->nearest_bus_stop;
        $owner->marital_status = $request->marital_status;
        $owner->date_of_birth = $request->date_of_birth;
        $owner->occupation = $request->occupation;
        $owner->email_address = $request->email_address;
        $owner->save();
        return response([
           'data' => new OwnerResource($owner)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return new OwnerResource( $owner );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $owner->update($request->all());
        return response([
            'data' => new OwnerCollection($owner)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {

        $owner->delete();
        return response([
            'data' => null
        ], Response::HTTP_NO_CONTENT);
    }
}
