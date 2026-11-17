<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

trait RegistersUsers
{
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->toArray());
        }

        $user = $this->create($request->all());
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    protected function guard()
    {
        return Auth::guard('user');
    }

    protected function redirectPath(): string
    {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}
