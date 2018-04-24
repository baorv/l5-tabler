<?php

namespace Pingecom\Tabler\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get TablerServiceProvider package service provider.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    public function getPackageProviders($app)
    {
        return ['Pingecom\Tabler\Providers\TablerServiceProvider'];
    }
}