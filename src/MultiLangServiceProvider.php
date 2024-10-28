<?php

namespace PackageMultiLang;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MultiLangServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Post the configuration
        $this->publishes([
            __DIR__ . '/../config/multilanguage.php' => config_path('multilanguage.php'),
        ], 'config');

        // Tranlate
        $this->loadTranslationsFrom(__DIR__ . '/Lang', 'multilang');

        // Route
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/multilanguage.php', 'multilanguage');
    }
}
