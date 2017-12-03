<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
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
