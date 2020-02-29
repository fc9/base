<?php

namespace App\Http\Controllers\Labs;

use App\Http\Controllers\Controller;

class LabsController extends Controller
{
    public function login()
    {
        return view('labs.login');
    }

    public function loginDisabled()
    {
        return view('labs.login-disabled');
    }

    public function loginHelp()
    {
        return view('labs.login-help');
    }

    public function captcha()
    {
        return view('labs.captcha');
    }

    public function register1()
    {
        return view('labs.register-1');
    }

    public function register2()
    {
        return view('labs.register-2');
    }

    public function register3()
    {
        $email = \Fc9\Auth\entities\PasswordReset::cloudMail('fabiocabral@gmail.com');
        //TODO: create facade > email()->cloud('fabiocabralsantos@gmail.com')
        return view('labs.confirm_email', compact('email'));
    }

    public function registerDisabled()
    {
        return view('labs.register-disabled');
    }

    public function registerMinimumRequirements()
    {
        return view('labs.register-minimum-requirements');
    }

    public function forgotPassword()
    {
        return view('labs.forgot-password');
    }

    public function forgotEmail()
    {
        return view('labs.forgot-email');
    }

    public function userBlocked()
    {
        return view('labs.user-blocked');
    }

    public function userBanned()
    {
        return view('labs.user-banned');
    }

    public function underMaintenance()
    {
        return view('labs.under-maintenance');
    }

    public function page404()
    {
        return view('labs.page-404');
    }

    public function page500()
    {
        return view('labs.page-500');
    }

    public function inactivity()
    {
        return view('labs.inactivity');
    }

    public function serviceStatus()
    {
    return view('labs.service-status');
    }
}
