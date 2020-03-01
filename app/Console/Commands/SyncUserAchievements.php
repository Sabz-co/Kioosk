<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

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
        $users = User::chunk(100, function ($users, $index) {
            $from = ($index - 1) * 100;
            $to = ($index - 1) * 100 + 100;
            $this->info("Syncing achievements for users {$from} - {$to}");
            $users->each(function ($user) {
                $user->achievements()->sync(
                    app('achievements')->filter->qualifier($user)->map->modelKey()
                );
            });
        });

        $this->info('Finished!');
    }
}
