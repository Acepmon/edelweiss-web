<?php

namespace App\Providers;

use App\Repositories\Interfaces\MenuRepositoryInterface;
use App\Repositories\MenuRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MenuRepositoryInterface::class, 
            MenuRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
