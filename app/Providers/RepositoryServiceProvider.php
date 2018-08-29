<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use App\Repositories\Contract\UserContract;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserContract::class,
            UserRepository::class
        );
    }
}
