<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        //return view('welcome');
        return redirect()->route('login');
    }
}