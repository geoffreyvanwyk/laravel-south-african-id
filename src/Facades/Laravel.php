<?php

namespace Kokerboom\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kokerboom\Laravel\Laravel
 */
class Laravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kokerboom\Laravel\Laravel::class;
    }
}
