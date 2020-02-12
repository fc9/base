<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        dd('?');
        LoginController::logout();
        //return redirect()->route('login');
        //return view('welcome');
    }
}