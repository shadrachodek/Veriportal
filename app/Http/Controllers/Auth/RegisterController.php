<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Keygen\Keygen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => [ 'string', 'max:255'],
            'last_name' => [ 'string', 'max:255'],
            'phone' => ['numeric'],
            'lga_lcda' => [ 'string', 'max:255'],
            'username' => [ 'string', 'max:255', 'unique:users'],
            'city' => ['string'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_id'=> Keygen::numeric(11)->generate(),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'lga_lcda' => $data['lga_lcda'],
            'username' => $data['username'],
            'city' => $data['city'],
            'email' => $data['email'],
            'status' => true,
            'password' =>  Hash::make($data['password']),
        ]);
    }
}
