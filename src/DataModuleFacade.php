<?php

namespace Laravra\DataModule;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravra\DataModule\Skeleton\SkeletonClass
 */
class DataModuleFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'data-module';
    }
}
