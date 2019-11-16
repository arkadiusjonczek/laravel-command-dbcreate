<?php

namespace App\Console\Commands;

use Illuminate\Support\ServiceProvider;

/**
 * ServiceProvider for DbCreateCommand.
 *
 * @package App\Console\Commands
 */
class DbCreateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DbCreate::class
            ]);
        }
    }
}