<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeSiteController extends Controller
{
      public function index()
    {
        return view('home.index');
    }
}
