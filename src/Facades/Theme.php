<?php

namespace Bangsamu\Theme\Facades;

use Illuminate\Support\Facades\Facade;

class Theme extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bangsamu\Theme\ThemeManager::class;
    }
}
