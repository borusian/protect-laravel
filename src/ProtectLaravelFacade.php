<?php

namespace Borusian\ProtectLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ricmlima\ProtectLaravel\Skeleton\SkeletonClass
 */
class ProtectLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'protect-laravel';
    }
}
