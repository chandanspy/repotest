<?php

namespace Pyz\Client\HelloWorld\Zed;


use Generated\Shared\Transfer\HelloWorldDataTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

class HelloWorldStub implements HelloWorldStubInterface
{

    protected ZedRequestClientInterface $ZedRequestClientInterface;

    public function __construct(ZedRequestClientInterface $ZedRequestClientInterface)
    {
        $this->ZedRequestClientInterface = $ZedRequestClientInterface;
    }

    /**
     * @param HelloWorldDataTransfer $helloWorldDataTransfer
     * @return TransferInterface
     */
    public function save_data(HelloWorldDataTransfer $helloWorldDataTransfer):TransferInterface
    {
        return $this->ZedRequestClientInterface->call('/hello-world/gateway/save',$helloWorldDataTransfer);
    }

}
