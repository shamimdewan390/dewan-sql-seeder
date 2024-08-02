<?php

namespace Shamim\DewanSqlSeeder\Console\Commands;

use Illuminate\Console\Command;

class DewanSqlSeederCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dewan:sql-seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed the database with custom data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    
    public function handle()
    {
        $this->info('Database seeding started...');

        info('start');
        $this->call('migrate:fresh');
        $this->call('dewan:seed');
        info('end');

        $this->info('Database seeding completed.');
        return 0;
    }
}
