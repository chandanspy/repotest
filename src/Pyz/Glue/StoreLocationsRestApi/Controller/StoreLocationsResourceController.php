<?php

namespace Pyz\Glue\StoreLocationsRestApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Pyz\Glue\StoreLocationsRestApi\StoreLocationsRestApiConfig;
use Spryker\Glue\Kernel\Controller\AbstractStorefrontApiController;

class StoreLocationsResourceController extends AbstractStorefrontApiController
{
    /**
     * @param string $query
     * @param GlueRequestTransfer $glueRequestTransfer
     * @return GlueResponseTransfer
     */
    public function getAction(string $query, GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return (new GlueResponseTransfer())
            ->addResource((new GlueResourceTransfer())
                ->setQuery($query)
                ->setType(StoreLocationsRestApiConfig::RESOURCE_MODULE));

    }

}
