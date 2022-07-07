<?php

namespace Respins\BaseFunctions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Respins\BaseFunctions\BaseFunctions
 */
class BaseFunctions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'base-functions';
    }
}
