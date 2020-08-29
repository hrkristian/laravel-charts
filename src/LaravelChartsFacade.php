<?php

namespace Hrkristian\LaravelCharts;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hrkristian\LaravelCharts\Skeleton\SkeletonClass
 */
class LaravelChartsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-charts';
    }
}
