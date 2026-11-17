<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function notfound()
    {
        return response()->view('errors.404', [], 404);
    }
    public function fatal()
    {
        return response()->view('errors.500', [], 500);
    }
}
