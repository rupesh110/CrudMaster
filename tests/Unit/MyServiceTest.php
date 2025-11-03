<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\TestService;

class MyServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getMessage()
    {
        $service = new TestService();

        $result = $service->getMessage();
        

        $this->assertEquals('Hello from TestService!', $result);

    }
}
