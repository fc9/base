<?php

namespace App\Http\Controllers\Tool;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MenaraSolutions\Geographer\Earth;

class TestController extends Controller
{
    public function ajaxRequest()
    {
        return view('test.ajaxRequest');
    }

    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        return response()->json(['success' => 'Got Simple Ajax Request (' . implode('/', $input) . ').']);
    }

    public function geographer()
    {
        $earth = new Earth();
        dd($earth->findOne(['code' => 'BR'])->getStates()->toArray());
    }

    public function config2Objectt()
    {
        $access_profile = improve(config('register.user.access_profile'));
        dd($access_profile->partner, $access_profile->values());
    }

    public function confirmTest()
    {
        return view('auth.confirm_email', ['title'=>'Confirm', 'step' => 3, 'email' => 'fabio@mail.com']);
    }
}
