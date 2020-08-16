<?php

namespace Jongravois\LaraPackage;

use Illuminate\Support\ServiceProvider;
use Jongravois\LaraPackage\Commands\LaraPackageCommand;

class LaraPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/lara-package.php' => config_path('lara-package.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/lara-package'),
            ], 'views');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_lara_package_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_lara_package_table.php'),
                ], 'migrations');
            }

            $this->commands([
                LaraPackageCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lara-package');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lara-package.php', 'lara-package');
    }
}
