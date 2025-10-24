<?php

namespace Bangsamu\Theme\Middleware;

use Closure;
use Bangsamu\Theme\Facades\Theme;

class SetTheme
{
    public function handle($request, Closure $next)
    {
        Theme::get(); // otomatis set dari session / cache / DB
        return $next($request);
    }
}
