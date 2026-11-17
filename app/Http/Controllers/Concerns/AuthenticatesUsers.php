<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Http\Request;

trait AuthenticatesUsers
{
    public function login(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        if ($this->guard()->attempt($this->credentials($request), $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended($this->redirectPath());
        }

        return back()->withErrors([
            $this->username() => 'Las credenciales no son válidas.',
        ])->withInput($request->except('password'));
    }

    public function username(): string
    {
        return 'username';
    }

    protected function guard()
    {
        return auth()->guard('user');
    }

    protected function credentials(Request $request): array
    {
        return $request->only($this->username(), 'password');
    }

    protected function redirectPath(): string
    {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}
