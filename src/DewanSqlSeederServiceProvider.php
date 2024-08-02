<?php

namespace Shamim\DewanSqlSeeder;

use Illuminate\Support\ServiceProvider;
use Shamim\DewanSqlSeeder\Console\Commands\DewanSqlSeederCommand;
use Shamim\DewanSqlSeeder\Console\Commands\ImportSqlDataCommand;

class DewanSqlSeederServiceProvider extends ServiceProvider
{
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
    }
    
}
