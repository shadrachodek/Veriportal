<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keygen\Keygen;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $userCount = User::all()->count();
        return view('back.user.index', compact('users','userCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.user.create');
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
            'first_name' =>  'string', 'max:255',
            'last_name' =>  'string', 'max:255',
            'phone' => 'numeric',
            'lga_lcda' =>  'string', 'max:255',
            'username' =>  'string', 'max:255', 'unique:users',
            'city' => 'string',
            'email' =>  'string', 'email', 'max:255', 'unique:users',
            'password' => 'string', 'min:6', 'confirmed',
        ]);

        User::create([
            'user_id'=> Keygen::numeric(11)->generate(),
            'first_name' =>  $request->get('first_name'),
            'last_name' =>  $request->get('last_name'),
            'phone' => $request->get('phone'),
            'lga_lcda' =>  $request->get('lga_lcda'),
            'username' =>  $request->get('username'),
            'city' => $request->get('city'),
            'email' =>  $request->get('email'),
            'status' => true,
            'password' => Hash::make($request->get('password')),
        ]);
        return redirect()->route('user-management.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('user_id', $id)->firstOrFail();
        return view('back.user.show', compact('user'));
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