<?php

namespace Bangsamu\Theme;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/theme.php', 'theme');
        $this->app->singleton(ThemeManager::class, function($app){
            return new ThemeManager();
        });
    }

    public function boot()
    {
        // publish config
        $this->publishes([
            __DIR__.'/../config/theme.php' => config_path('theme.php'),
        ], 'theme-config');

        // publish resource theme sample
        $this->publishes([
            __DIR__.'/../resources/themes/default' => resource_path('themes/default'),
        ], 'theme-sample');

        // publish public assets
        $this->publishes([
            __DIR__.'/../public/themes/default' => public_path('themes/default'),
        ], 'theme-assets');

        // load views
        $this->loadViewsFrom(resource_path('themes'), 'themes');

        // optional: register middleware alias
        $router = $this->app['router'];
        $router->aliasMiddleware('theme', Middleware\SetTheme::class);
    }
}
