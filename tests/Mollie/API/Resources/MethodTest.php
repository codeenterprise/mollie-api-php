<?php

namespace Tests\Coe\Mollie\Api\Resources;

use Coe\Mollie\Api\MollieApiClient;
use Coe\Mollie\Api\Resources\IssuerCollection;
use Coe\Mollie\Api\Resources\Method;
use PHPUnit\Framework\TestCase;

class MethodTest extends TestCase
{
    public function testIssuersNullWorks()
    {
        $method = new Method($this->createMock(MollieApiClient::class));
        $this->assertNull($method->issuers);

        $issuers = $method->issuers();

        $this->assertInstanceOf(IssuerCollection::class, $issuers);
        $this->assertCount(0, $issuers);
    }
}
