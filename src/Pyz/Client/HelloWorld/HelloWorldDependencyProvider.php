<?php

namespace Pyz\Client\HelloWorld;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;


class HelloWorldDependencyProvider extends AbstractDependencyProvider
{

    CONST CLIENT_ZED_REQUEST = "CLIENT_ZED_REQUEST";

    Public function ProvideServiceLayerDependencies(Container $container):?Container
    {
        return $this->AddZedRequestClient($container);
     }

    Private function AddZedRequestClient(Container $container):Container
    {
         $container[self::CLIENT_ZED_REQUEST] = function(Container $container){
            return $container->getLocator()->zedRequest()->client();
         };

        return $container;

    }
}
