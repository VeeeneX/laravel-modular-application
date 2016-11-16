<?php

namespace Common\Provider;

use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->register(AuthServiceProvider::class);
        $this->register(EventServiceProvider::class);
        $this->register(RouteServiceProvider::class);
        $this->register(BroadcastServiceProvider::class);
    }
}
