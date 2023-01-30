<?php


namespace Pyz\Client\HelloWorld;

use Generated\Shared\Transfer\HelloWorldDataTransfer;
use Spryker\Client\Kernel\AbstractClient;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

/**
 * @method \Pyz\Client\HelloWorld\HelloWorldFactory getFactory()
 */
class HelloWorldClient extends AbstractClient implements HelloWorldClientInterface
{
    /**
     * @param HelloWorldDataTransfer $helloWorldDataTransfer
     * @return TransferInterface
     * @throws ContainerKeyNotFoundException
     */
    public function save_data(HelloWorldDataTransfer $helloWorldDataTransfer): TransferInterface
    {
        return $this->getFactory()->createZedStub()->save_data($helloWorldDataTransfer);
    }
}
