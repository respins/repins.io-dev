<?php

namespace ase\RespinsBaseFunctions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ase\RespinsBaseFunctions\RespinsBaseFunctions
 */
class RespinsBaseFunctions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'respins-base-functions';
    }
}
