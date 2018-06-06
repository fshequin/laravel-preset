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
        });
    }
}
