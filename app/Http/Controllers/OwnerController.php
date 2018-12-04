<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keygen;
use App\Model\Owner;
use App\DataTables\OwnerDataTable;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OwnerDataTable $dataTable)
    {
       // $owners = Owner::all();
        //return redirect()->route('owner.index');
        //return view('back.owner.index', compact('owners'));
        $ownerCount = Owner::all()->count();
        return $dataTable->render('back.owner.index', compact('ownerCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maritalStatus = collect(['Single', 'Married', 'Divorce']);
        $occupations = collect(['Accountant', 'Civil Service', 'Engineer']);
        return view('back.owner.create', compact('maritalStatus', 'occupations'));
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'lga_lcda' => 'required|string|max:255',
            'nearest_bus_stop' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'email_address' => 'string|email|max:255',
        ],
            [
                'first_name.required' => 'First Name is require!',
                'last_name.required' => 'Last Name is require!'

            ]);

        Owner::create([
            'owner_id' => Keygen::numeric(10)->generate(),
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'marital_status' => $request->marital_status,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'city' => $request->city,
            'lga_lcda' => $request->lga_lcda,
            'nearest_bus_stop' => $request->nearest_bus_stop,
            'telephone' => $request->telephone,
            'mobile' => $request->mobile,
            'email_address' => $request->email_address,
        ]);

        return redirect()->route('owner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return view('back.owner.show', compact('owner'));
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
    public function destroy($owner)
    {
        $owner->delete();
        return redirect()->route('owner.index')->with('message', 'account deleted');
    }
}