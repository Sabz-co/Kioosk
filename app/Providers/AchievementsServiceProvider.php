<?php

namespace App\Providers;

use App\Achievements\Types;
use Illuminate\Support\ServiceProvider;
use App\Achievements\Console\GenerateAchievementCommand;

class AchievementsServiceProvider extends ServiceProvider
{

    protected $achievements = [
        Types\FirstThousandPoints::class,
        Types\FirstTenThousandPoints::class,
        Types\KiooskMastery::class
    ];


    public function boot()
    {
        \Event::listen(\App\Events\UserEarnedExperience::class, \App\Listeners\AwardAchievements::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('achievements', function () {
            return collect($this->achievements)->map(function ($achievement) {
                return new $achievement;
            });
        });

        $this->commands(GenerateAchievementCommand::class);
    }


}
