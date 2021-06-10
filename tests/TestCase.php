<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Stancl\Tenancy\Database\Models\Tenant;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $tenancy = false;

    public function setUp(): void
    {
        parent::setUp();

        if ($this->tenancy) {
            $this->initializeTenancy();
        }
    }

    public function initializeTenancy()
    {
        $tenant = Tenant::create();
        tenancy()->initialize($tenant);
    }
}
