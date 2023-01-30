<?php

namespace Pyz\Client\HelloWorld\Zed;

use Generated\Shared\Transfer\HelloWorldDataTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface HelloWorldStubInterface 
{

    public function save_data(HelloWorldDataTransfer $helloWorldDataTransfer):TransferInterface;
    
} 