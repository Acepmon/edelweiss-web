<?php

namespace App\Services\Facade;

use Illuminate\Support\Facades\Facade;

class QpayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qpay';
    }
}