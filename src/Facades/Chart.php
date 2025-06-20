<?php

declare(strict_types=1);

namespace Honed\Chart\Facades;

use Honed\Chart\ChartFactory;
use Illuminate\Support\Facades\Facade;

/**
 * @see ChartFactory
 */
class Chart extends Facade
{
    /**
     * Get the root object behind the facade.
     *
     * @return ChartFactory
     */
    public static function getFacadeRoot()
    {
        // @phpstan-ignore-next-line
        return parent::getFacadeRoot();
    }

    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return ChartFactory::class;
    }
}
