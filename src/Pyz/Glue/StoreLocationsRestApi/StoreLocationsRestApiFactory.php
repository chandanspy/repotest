<?php

namespace Pyz\Glue\StoreLocationsRestApi;

use Pyz\Client\StoreLocations\StoreLocationsClient;
use Spryker\Glue\Kernel\AbstractFactory;

class StoreLocationsRestApiFactory extends AbstractFactory
{
    /**
     * @return StoreLocationsClient;
     */
    public function createStoreClientobject(): StoreLocationsClient
    {
        return new StoreLocationsClient();
    }
}
