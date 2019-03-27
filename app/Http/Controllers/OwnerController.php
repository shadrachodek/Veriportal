<?php

namespace App\Http\Controllers;

use App\Model\OwnerPassport;
use App\Model\OwnerSignature;
use App\Model\Signature;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Keygen\Keygen;
use App\Model\Owner;
use App\DataTables\OwnerDataTable;

class OwnerController extends Controller
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
    public function index(Request $request)
    {

        $owner = (new Owner())->newQuery();

//        if (($request->has('from-date') && $request->filled('from-date')) && ($request->has('to-date') && $request->filled('to-date'))){
//            $charge->whereBetween('created_at', [$request->input('from-date'), $request->input('to-date')]);
//        }

        if ($request->has('owner_id') && $request->filled('owner_id')){
            $owner->where('owner_id', 'like', '%' . $request->input('owner_id') . '%');
        }

        if ($request->has('name') && $request->filled('name')){
            $owner->where('full_name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('marital_status') && $request->filled('marital_status')){
            $owner->where('marital_status', $request->input('marital_status'));
        }

        if ($request->has('occupation') && $request->filled('occupation')){
            $owner->where('occupation', $request->input('occupation'));
        }

        $owners = $owner->paginate(50);


        $ownerCount = Owner::all()->count();
        return view('back.owner.index', compact('ownerCount', 'owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maritalStatus = collect(['Single', 'Married', 'Divorce', 'Separated']);
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
            'full_name' => 'required|string|max:255',
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
                'full_name.required' => 'Full Name is require!'

            ]);

        $owner = Owner::create([
            'owner_id' => Keygen::numeric(10)->generate(),
            'full_name' => $request->full_name,
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

        return redirect()->route('photo-signature', compact('owner'));
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

    public function getOwner(Request $request){
        $request->validate([
            'owner_id' => 'required|numeric',
        ],
            [
                'owner_id.required' => 'Owner ID is require!',
                'owner_id.numeric' => 'Your input was invalid'

            ]);
        try {
            $owner = Owner::whereOwnerId($request->owner_id)->firstOrFail();
        }
        catch (ModelNotFoundException  $exception) {
            return back()->withError('Owner not found by ID '. $request->owner_id)->withInput();
        }

        return redirect()->route('documentType', compact( 'owner'));

        // return redirect()->route('doc.doctype', $owner->owner_id);
    }

    public function photoSignature(Owner $owner)
    {
        return view('back.owner.photo-signature', compact('owner'));
    }

    public function photo(Request $request, $owner)
    {

        if($request->hasfile('photo'))
        {
            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension();
            $filename  = $owner . "-". time() . '-photo.' . $extension;
            $photo->storeAs('public/passport/', $filename);

                // save to database
                $fileImage = new OwnerPassport();
                $fileImage->file = $filename;
                $fileImage->owner_id = $owner;
                $fileImage->save();

        }
        return redirect()->route('owner.show', compact('owner'));
    }

    public function signature(Request $request, $owner)
    {
        if($request->hasfile('signature'))
        {
            $signature= $request->file('signature');
            $extension = $signature->getClientOriginalExtension();
            $filename  = $owner . "-". time() . '-signature.' . $extension;
            $signature->storeAs('public/signature/', $filename);

            // save to database
            $fileImage = new OwnerSignature();
            $fileImage->file = $filename;
            $fileImage->owner_id = $owner;
            $fileImage->save();
        }

        return redirect()->route('owner.show', compact('owner'));
    }


}
