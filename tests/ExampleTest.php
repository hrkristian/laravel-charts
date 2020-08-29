<?php

namespace Hrkristian\LaravelCharts\Tests;

use Orchestra\Testbench\TestCase;
use Hrkristian\LaravelCharts\LaravelChartsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelChartsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
