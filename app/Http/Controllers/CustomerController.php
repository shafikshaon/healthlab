<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getMyLogin()
    {
      return view('front.login');
    }
    public function getMyRegister()
    {
      return view('front.register');
    }
}
