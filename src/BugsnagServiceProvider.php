<?php

namespace EmilMoe\Bugsnag;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class BugsnagServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        Config::set(
            'logging.channels',
            array_merge(
                config('logging.channels'),
                ['bugsnag' => ['driver' => 'bugsnag']]
            )
        );
    }
}
