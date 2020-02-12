<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Modules\Register\Http\Requests\Auth\EmailConfirmRequest;
use Modules\Register\Entities\EmailConfirm;

class EmailConfirmController extends Controller
{
    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showConfirmForm()
    {
        EmailConfirm::sendToken(auth()->user()->email);

        return View::make('auth.confirm_email', ['step' => 3, 'email' => auth()->user()->email]);
    }

    public function confirm(EmailConfirmRequest $request)
    {
        EmailConfirm::destroy(auth()->user()->email);

        $user = auth()->user();
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();

        return redirect()->route('dashboard.home', ['username' => auth()->user()->username]);
    }
}
