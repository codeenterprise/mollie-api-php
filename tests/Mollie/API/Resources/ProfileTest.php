<?php

namespace Tests\Coe\Mollie\Api\Resources;

use Coe\Mollie\Api\MollieApiClient;
use Coe\Mollie\Api\Resources\Profile;
use Coe\Mollie\Api\Types\ProfileStatus;

class ProfileTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param string $status
     * @param string $function
     * @param bool $expected_boolean
     *
     * @dataProvider dpTestProfileStatusses
     */
    public function testProfileStatusses($status, $function, $expected_boolean)
    {
        $profile = new Profile($this->createMock(MollieApiClient::class));
        $profile->status = $status;

        $this->assertEquals($expected_boolean, $profile->{$function}());
    }

    public function dpTestProfileStatusses()
    {
        return [
            [ProfileStatus::STATUS_BLOCKED, "isBlocked", true],
            [ProfileStatus::STATUS_BLOCKED, "isVerified", false],
            [ProfileStatus::STATUS_BLOCKED, "isUnverified", false],

            [ProfileStatus::STATUS_VERIFIED, "isBlocked", false],
            [ProfileStatus::STATUS_VERIFIED, "isVerified", true],
            [ProfileStatus::STATUS_VERIFIED, "isUnverified", false],

            [ProfileStatus::STATUS_UNVERIFIED, "isBlocked", false],
            [ProfileStatus::STATUS_UNVERIFIED, "isVerified", false],
            [ProfileStatus::STATUS_UNVERIFIED, "isUnverified", true],
        ];
    }
}
