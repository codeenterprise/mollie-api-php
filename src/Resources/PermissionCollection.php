<?php

namespace Coe\Mollie\Api\Resources;

class PermissionCollection extends BaseCollection
{
    /**
     * @return string
     */
    public function getCollectionResourceName()
    {
        return "permissions";
    }
}
