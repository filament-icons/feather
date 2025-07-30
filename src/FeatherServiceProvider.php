<?php

namespace FilamentIcons\Feather;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class FeatherServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(Factory::class)->add('feather', [
            'path' => __DIR__.'/../resources/icons',
            'prefix' => 'feather',
        ]);
    }
}
