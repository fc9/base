<?php

namespace App\Http\Controllers\Dashboard\Network;

use App\Http\Controllers\Controller;

class NetworkController extends Controller
{
    public function careerHistory($username)
    {
        return view('app.network.career_history');
    }
}
