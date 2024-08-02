<?php

namespace Shamim\DewanSqlSeeder\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\info;


class ImportSqlDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dewan:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Demo Data';

    public function handle()
    {

        info('Copying necessary files for seeding....');

        (new Filesystem)->copyDirectory(database_path('dewan/sql'), public_path('sql'));
        
        info('File copying successful');
        
        info('Seeding....');
        
        $this->seedDemoData();
    }
    public function seedDemoData()
    {
        $get_sql_files_path = (new Filesystem)->files(public_path('sql'));
        foreach($get_sql_files_path as $key => $path){
            $file_sql = file_get_contents($path);
            DB::statement($file_sql);
        }
        info('Seed completed successfully!');
    }
}
