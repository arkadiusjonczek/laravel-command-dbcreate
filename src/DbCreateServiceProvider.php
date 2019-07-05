<?php

namespace Arkadiusjonczek\DbCreateCommand;

use Illuminate\Support\ServiceProvider;

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
