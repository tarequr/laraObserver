<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
}
