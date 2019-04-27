<?php

namespace EmilMoe\Bugsnag;

use Illuminate\Support\ServiceProvider;

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
        $this->mergeConfig(config('logging.channels'), ['bugsnag' => ['driver' => 'bugsnag']]);
    }
}
