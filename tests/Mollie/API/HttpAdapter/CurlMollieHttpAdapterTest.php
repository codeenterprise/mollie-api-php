<?php

namespace Tests\Coe\Mollie\API\HttpAdapter;

use Coe\Mollie\Api\HttpAdapter\CurlMollieHttpAdapter;
use PHPUnit\Framework\TestCase;

class CurlMollieHttpAdapterTest extends TestCase
{
    /** @test */
    public function testDebuggingIsNotSupported()
    {
        $adapter = new CurlMollieHttpAdapter;
        $this->assertFalse($adapter->supportsDebugging());
    }
}
