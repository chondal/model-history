<?php

namespace Orchestra\Testbench\Concerns;

use Closure;

trait HandlesDatabases
{
    /**
     * Setup database requirements.
     *
     * @param  \Closure  $callback
     */
    protected function setUpDatabaseRequirements(Closure $callback): void
    {
        $this->defineDatabaseMigrations();

        if (\method_exists($this, 'parseTestMethodAnnotations')) {
            $this->parseTestMethodAnnotations($this->app, 'define-db');
        }

        $callback();

        $this->defineDatabaseSeeders();
    }

    /**
     * Define database migrations.
     *
     * @return void
     */
    protected function defineDatabaseMigrations()
    {
        // Define database migrations.
    }

    /**
     * Define database seeders.
     *
     * @return void
     */
    protected function defineDatabaseSeeders()
    {
        // Define database seeders.
    }
}
