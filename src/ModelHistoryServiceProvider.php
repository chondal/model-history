<?php

namespace Chondal\ModelHistory;

use Illuminate\Support\ServiceProvider;

class ModelHistoryServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'ModelHistory');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'model-history-migrations');

        $this->publishes([
            __DIR__ . '/../resources/views/' => resource_path('views/vendor/ModelHistory'),
        ], 'model-history-views');
        $this->publishes([
            __DIR__ . '/../config/history.php' => base_path('config/history.php'),
        ], 'model-history-config');
    }

    public function register()
    {
        $this->app->bind('ModelHistory', function () {
            return new \Chondal\ModelHistory\ModelHistory;
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/history.php', 'history');
    }

}
