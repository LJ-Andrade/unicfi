<?php

namespace App\Support;

use Illuminate\Support\HtmlString;

class Html
{
    public static function style(string $path): HtmlString
    {
        return new HtmlString(
            '<link rel="stylesheet" type="text/css" href="'.e(asset($path)).'">'
        );
    }
}
