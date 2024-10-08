<?php

namespace Tests\Coe\Mollie\Api\Resources;

use Coe\Mollie\Api\MollieApiClient;
use Coe\Mollie\Api\Resources\OrderLine;
use Coe\Mollie\Api\Resources\OrderLineCollection;

class OrderLineCollectionTest extends \PHPUnit\Framework\TestCase
{
    public function testCanGetOrderLine()
    {
        $mockApi = $this->createMock(MollieApiClient::class);
        $lines = new OrderLineCollection(3, null);

        $line1 = new OrderLine($mockApi);
        $line1->id = 'odl_aaaaaaaaaaa1';

        $line2 = new OrderLine($mockApi);
        $line2->id = 'odl_aaaaaaaaaaa2';

        $line3 = new OrderLine($mockApi);
        $line3->id = 'odl_aaaaaaaaaaa3';

        $lines[] = $line1;
        $lines[] = $line2;
        $lines[] = $line3;

        $this->assertNull($lines->get('odl_not_existent'));

        $line = $lines->get('odl_aaaaaaaaaaa2');

        $this->assertInstanceOf(OrderLine::class, $line);
        $this->assertEquals($line2, $line);
    }
}
