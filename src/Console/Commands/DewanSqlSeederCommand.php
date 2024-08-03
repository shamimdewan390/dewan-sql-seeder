<?php

namespace Shamim\DewanSqlSeeder\Console\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\{confirm, info};

class DewanSqlSeederCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dewan:sql-seed';

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
        info('If Yes! then it will erase all of your data.');
        info('And seeding all data from sql files.');
        if (confirm('Are you sure! ')) {

            info('Dropping all tables started...');
            $this->call('migrate:fresh');
            info('Dropping all tables ended...');

            info('Database seeding started...');
            $this->call('dewan:seed');
            
            info('Database seeding completed.');
            return 0;
        }
    }
}
