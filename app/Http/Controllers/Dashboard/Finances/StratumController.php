<?php

namespace App\Http\Controllers\Dashboard\Finances;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StratumController extends Controller
{
    public function transactions($username)
    {
        return view('app.finances.transactions');
    }

    public function financialHistory($username)
    {
        return view('app.finances.financial_history');
    }

    public function balance($username)
    {
        return view('app.finances.financial_history');
    }
}
