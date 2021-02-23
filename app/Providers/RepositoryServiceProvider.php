<?php

namespace App\Providers;

use App\Repositories\Interfaces\MenuRepositoryInterface;
use App\Repositories\Interfaces\PageRepositoryInterface;
use App\Repositories\MenuRepository;
use App\Repositories\PageRepository;
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

        $this->app->bind(
            PageRepositoryInterface::class, 
            PageRepository::class
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
