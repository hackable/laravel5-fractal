<?php namespace Cyvelnet\Laravel5Fractal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Fractal
 * @package Cyvelnet\Laravel5Fractal\Facades
 */
class Fractal extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fractal';
    }

}
