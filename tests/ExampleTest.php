<?php

namespace ScooterSam\Vault\Tests;

use Orchestra\Testbench\TestCase;
use ScooterSam\Vault\VaultServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [VaultServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
