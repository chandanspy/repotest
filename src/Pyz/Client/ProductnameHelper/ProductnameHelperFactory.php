<?php

namespace Pyz\Client\ProductnameHelper;

use Pyz\Client\ProductnameHelper\Zed\ProductnameHelperStub;
use Pyz\Client\ProductnameHelper\Zed\ProductnameHelperStubInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class ProductnameHelperFactory extends AbstractFactory
{
    /**
     * @return ProductnameHelperStubInterface
     * @throws ContainerKeyNotFoundException
     */
public function createZedStub(): ProductnameHelperStub
{
    return new ProductnameHelperStub($this->getZedRequestClient());
}

    /**
     * @return ZedRequestClientInterface
     * @throws ContainerKeyNotFoundException
     */
    private function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(ProductnameHelperDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
