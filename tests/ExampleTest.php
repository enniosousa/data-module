<?php

namespace Laravra\DataModule\Tests;

use Orchestra\Testbench\TestCase;
use Laravra\DataModule\DataModuleServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DataModuleServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
