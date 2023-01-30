<?php


namespace Pyz\Client\HelloWorld;

use Generated\Shared\Transfer\HelloWorldDataTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface HelloWorldClientInterface

{
    /**
 * @param HelloWorldDataTransfer $helloWorldDataTransfer
 * @return TransferInterface
 */
    public function save_data(HelloWorldDataTransfer $helloWorldDataTransfer):TransferInterface;


}
