<?php

namespace Pyz\Client\HelloWorld;


use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;
use Pyz\Client\HelloWorld\Zed\HelloWorldStub;
use Pyz\Client\HelloWorld\Zed\HelloWorldStubInterface;


class HelloWorldFactory extends AbstractFactory

{
    /**
     * @return HelloWorldStubInterface
     * @throws ContainerKeyNotFoundException
     */
    public function createZedStub(): HelloWorldStub
    {
        return new HelloWorldStub($this->getZedRequestClient());
    }

    /**
     * @throws ContainerKeyNotFoundException
     */
    private function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
