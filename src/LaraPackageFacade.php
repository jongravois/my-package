<?php

namespace Jongravois\LaraPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jongravois\LaraPackage\LaraPackage
 */
class LaraPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lara-package';
    }
}
