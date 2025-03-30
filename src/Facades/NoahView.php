<?php

namespace Sharenjoy\NoahView\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sharenjoy\NoahView\NoahView
 */
class NoahView extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Sharenjoy\NoahView\NoahView::class;
    }
}
