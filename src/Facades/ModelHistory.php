<?php

namespace Chondal\ModelHistory\Facades;

use Illuminate\Support\Facades\Facade;

class ModelHistory extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'ModelHistory';
    }
}
