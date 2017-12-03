<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function getMyDashboard()
    {
      return view('back.dashboard');
    }
}
