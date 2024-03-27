<?php

namespace Webplusm\TestFilTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webplusm\TestFilTest\TestFilTest
 */
class TestFilTest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Webplusm\TestFilTest\TestFilTest::class;
    }
}
