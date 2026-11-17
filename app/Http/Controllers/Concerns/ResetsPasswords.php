<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

trait ResetsPasswords
{
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset', [
            'token' => $token,
            'email' => $request->email,
        ]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $response = $this->broker()->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        if ($response === Password::PASSWORD_RESET) {
            return redirect($this->redirectPath())->with('status', __($response));
        }

        return back()->withInput($request->only('email'))->withErrors(['email' => __($response)]);
    }

    protected function broker()
    {
        return Password::broker();
    }

    protected function redirectPath(): string
    {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}
