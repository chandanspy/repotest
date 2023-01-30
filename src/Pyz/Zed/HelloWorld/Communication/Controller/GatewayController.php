<?php
namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Generated\Shared\Transfer\HelloWorldDataStatusTransfer;
use Generated\Shared\Transfer\HelloWorldDataTransfer;
use Propel\Runtime\Exception\PropelException;
use Pyz\Zed\HelloWorld\Communication\HelloWorldCommunicationFactory;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method HelloWorldCommunicationFactory getFactory()
 */

class GatewayController extends AbstractGatewayController{


    /**
     * @param HelloWorldDataTransfer $helloWorldDataTransfer
     * @return HelloWorldDataStatusTransfer
     * @throws PropelException
     */
    public function saveAction(HelloWorldDataTransfer $helloWorldDataTransfer): HelloWorldDataStatusTransfer
    {
        $new_transfer=new HelloWorldDataStatusTransfer();
        $table_object = $this->getFactory()->table_object();
        $table_object->setMessage($helloWorldDataTransfer->getData()['message']);
        $table_object->setName($helloWorldDataTransfer->getData()['name']);
        if($table_object->save()){
            $new_transfer->setStatus(true);
        }else{
            $new_transfer->setStatus(false);

        }

        return $new_transfer;

    }
}
