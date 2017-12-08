<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

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
            'fname' => 'required|string',
            'lname' => 'required|string',
            'uname' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string|min:6',
            'gender' => 'required|string',
            'dob' => 'required|string',
            'account_type' => 'required|string',
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
        $user = User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'uname' => $data['uname'],
            'email' => $data['email'],
            'password' => \Hash::make($data['password']),
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'account_type' => $data['account_type'],
        ]);
        $profile = UserProfile::create([
            'user_id' => $user->id,
        ]);

        // $profile->users()->sync([$user->id]);

        return $user;
    }

    protected function redirectTo()
    {
        return '/';
    }

}
