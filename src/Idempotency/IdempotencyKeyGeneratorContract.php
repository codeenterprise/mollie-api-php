<?php
namespace Coe\Mollie\Api\Idempotency;

interface IdempotencyKeyGeneratorContract
{
    public function generate();
}
