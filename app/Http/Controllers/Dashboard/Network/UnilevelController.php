<?php

namespace App\Http\Controllers\Dashboard\Network;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnilevelController extends Controller
{
    public function unilevel($username)
    {
        return view('app.network.unilevel', ['username'=> $username]);
    }
}
