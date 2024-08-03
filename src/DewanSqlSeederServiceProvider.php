<?php

namespace Shamim\DewanSqlSeeder;

use Illuminate\Support\ServiceProvider;
use Shamim\DewanSqlSeeder\Console\Commands\DewanSqlSeederCommand;
use Shamim\DewanSqlSeeder\Console\Commands\ImportSqlDataCommand;

class DewanSqlSeederServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/sql-seeder.php',
            'sql-seeder'
        );
    }
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DewanSqlSeederCommand::class,
                ImportSqlDataCommand::class,
            ]);
        }

        // Publish the configuration file.
        $this->publishes([
            __DIR__ . '/config/sql-seeder.php' => config_path('sql-seeder.php'),
        ], 'dewan-sql-seeder-config');
    }
}
