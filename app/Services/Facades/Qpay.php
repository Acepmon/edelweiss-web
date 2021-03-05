<?php

namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class Qpay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qpay';
    }
}