<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

trait SendsPasswordResetEmails
{
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $response = $this->broker()->send(
            $request->only('email'),
            function ($user, $token) {
                $user->sendPasswordResetNotification($token);
            }
        );

        return $response === Password::RESET_LINK_SENT
            ? back()->with('status', __($response))
            : back()->withInput($request->only('email'))->withErrors(['email' => __($response)]);
    }

    protected function broker()
    {
        return Password::broker();
    }
}
