<?php

namespace App\Achievements\Console;

use Illuminate\Console\Command;

class GenerateAchievementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:achievement {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new achievement class stub';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $stub = $this->compileTemplate();

        $path = app_path('Achievements/' . $this->argument('name') . '.php');

        file_put_contents($path, $stub);

        $this->info($path . ' Was created.');
    }

    protected function compileTemplate()
    {
        $stub = file_get_contents(app_path('Achievements/Console/achievement.stub'));

        $stub = str_replace('{{CLASS}}', $this->argument('name'), $stub);

        return $stub;
    }
}
