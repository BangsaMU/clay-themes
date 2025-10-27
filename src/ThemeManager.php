<?php

namespace Bangsamu\Theme;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Bangsamu\Master\Models\CmsSetting;

class ThemeManager
{
    protected $theme;

    public function set($theme)
    {
        $this->theme = $theme;
        Session::put('theme', $theme);
    }

    public function get()
    {
        if ($this->theme) return $this->theme;

        // cek session dulu
        if ($sessionTheme = Session::get('theme')) {
            $this->theme = $sessionTheme;
            return $this->theme;
        }

        // cache DB lookup
        $this->theme = Cache::remember('theme_active', config('theme.cache_ttl'), function () {
            return CmsSetting::where('name', 'theme')->where('category', 'theme')->value('value') ?? config('theme.default');
        });

        Session::put('theme', $this->theme);

        return $this->theme;
    }

    public function asset($file)
    {
        return asset('themes/'.$this->get().'/'.$file);
    }
}
