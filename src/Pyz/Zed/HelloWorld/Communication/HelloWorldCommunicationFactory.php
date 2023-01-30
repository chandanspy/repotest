<?php

namespace Pyz\Zed\HelloWorld\Communication;

use Orm\Zed\HelloWorld\Persistence\PyzHelloWorld;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class HelloWorldCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return PyzHelloWorld
     */
    public function table_object(): PyzHelloWorld
    {
        return new PyzHelloWorld();
    }
}
