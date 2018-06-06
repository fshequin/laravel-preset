<?php

namespace Laracasts\LaravelPreset;

use Laracasts\LaravelPreset\Preset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class LaracastsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('laracasts', function ($command) {
            Preset::install();

<<<<<<< HEAD
            $command->info('All finished! Please compile your assets, and you are all set to go!');
=======
            $command->info('All finished! Please compile your assets, and you areall set to go!');
>>>>>>> c186335d34bca631e8481a9bf4075214a09ec0b8
        });
    }
}
