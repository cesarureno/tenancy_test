<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Stancl\Tenancy\Database\Models\Tenant;

class ExampleTest extends TestCase
{
    protected $tenancy = false;

    public function test_prueba()
    {
        dd($this->tenancy);
    }
}
