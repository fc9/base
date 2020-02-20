<?php

namespace App\Http\Controllers\Tool;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendConfirmMail($user)
    {
        #TODO: Add localização ao email de Boas Vindas.

        $view = 'confirm_email';
        $body = '...';
        $to_name = 'Destinatário'; #$person->name;
        $to_email = 'fabiocabralsantos@gmail.com'; #$user->email;
        $data = ['name' => $to_name, 'body' => $body, 'email' => $to_email];

        Mail::send(
            'emails.' . $view,
            $data,
            function ($message) use ($to_name, $to_email) {
                $subject = 'Welcome to ' . config('app.name');
                $message->to($to_email, $to_name)
                    ->subject($subject)
                    ->from('empireasy@gmail.com', config('app.name'));
            }
        );
    }

    public static function send()
    {
        $name = 'Fulano de Tal';
        $email = 'fabiocabralsantos@gmail.com';
        $body = '...';

        $to_name = $name;
        $to_email = $email;
        $data = ['name' => $name, 'body' => $body, 'copy' => 'copys'] ;

        Mail::send(
            'emails.confirm_email',
            $data,
            function ($message) use ($to_name, $to_email) {
                $subject = '***Assunto***';
                $message->to($to_email, $to_name)
                    ->subject($subject)
                    ->from('empireasy@gmail.com', 'Empireasy');
            }
        );

        return 'Sedded!';
    }
}
