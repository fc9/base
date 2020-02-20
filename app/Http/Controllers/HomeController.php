<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect()->route('login');
        //return view('welcome');
    }
}