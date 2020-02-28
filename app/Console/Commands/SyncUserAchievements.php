<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncUserAchievements extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kioosk:sync-user-achievements';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync all the user achievements in the database';



    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
