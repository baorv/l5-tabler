<?php

namespace Pingecom\Tabler\Middleware;

use Closure;
use Lavary\Menu\Facade as Menu;

class DefineMenus
{
    public function handle($request, Closure $next)
    {
        Menu::make('primary', function ($menu) {
        });

        return $next($request);
    }
}