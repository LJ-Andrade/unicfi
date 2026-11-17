<?php

namespace App\Support;

use Illuminate\Support\Facades\Request;

class Menu
{
    public static function activeMenu(string $uri = ''): string
    {
        return Request::is(Request::segment(1).'/'.$uri.'/*')
            || Request::is(Request::segment(1).'/'.$uri)
            || Request::is($uri)
            ? 'active'
            : '';
    }
}
