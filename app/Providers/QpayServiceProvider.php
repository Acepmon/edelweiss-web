<?php

namespace App\Providers;

use App\Services\Qpay;
use Illuminate\Support\ServiceProvider;

class QpayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('qpay',function(){
            return new Qpay(config('services.qpay.host'), config('services.qpay.username'), config('services.qpay.password'));
        });
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
