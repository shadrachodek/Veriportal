<?php

namespace App\Http\Controllers;

use App\Model\Lga;
use Illuminate\Http\Request;
use Keygen\Keygen;
use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except('logout, login');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::all();
        $userCount = User::all()->count();
        return view('back.user.index', compact('users', 'userCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name');
        $lgas = Lga::all()->pluck('name');
        return view('back.user.create', compact('roles', 'lgas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'phone' => 'numeric',
            'lga_lcda' => 'string|max:255',
            'username' => 'string|max:255|unique:users',
            'city' => 'string',
            'email' => 'email|max:255|unique:users',
            'password' => 'string|min:6|confirmed',
        ]);

        $user = User::create([
            'user_id' => Keygen::numeric(11)->generate(),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone' => $request->get('phone'),
            'lga_lcda' => $request->get('lga_lcda'),
            'username' => $request->get('username'),
            'city' => $request->get('city'),
            'email' => $request->get('email'),
            'status' => true,
            'password' => Hash::make($request->get('password')),
        ]);
        $role = $request->get('role');
        $user->assignRole($role);
        alertify()->success('User created successfully');
        return redirect()->route('user-management.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }


    public function UpdatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'string|min:6|confirmed',
        ]);

        $user->update([
            'password' => Hash::make($request->get('password'))
        ]);
        alertify()->success('Password updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (!Auth::attempt($credentials)) {
          //  alertify()->error();
            return redirect()->back()->with('success', 'Invalid details');
        }

        alertify()->success($credentials['username'] . ' Login');
        return redirect()->intended('dashboard');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }

    protected function guard()
    {
        return Auth::guard();
    }



}
