<?php

namespace App\Http\Controllers\Dashboard\Finances;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function toManage()
    {
        return view('app.finances.withdrawmanage_withdrawals');
    }

    public function history()
    {
        return view('app.finances.manage_withdrawals');
    }

    public function request()
    {
        return view('app.finances.manage_withdrawals');
    }
}
