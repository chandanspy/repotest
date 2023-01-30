<?php 

use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
* @method \Spryker\Zed\HelloWorld\Persistence\HelloWorldPersistenceFactory getFactory()
*/
class HelloWorldEntityManager extends AbstractEntityManager implements HelloWorldEntityManagerInterface
{
    /**
    *
    * @api
    *
    * @param \Generated\Shared\Transfer\SpyHelloWorldEntityTransfer $helloworldEntityTransfer
    *
    * @return \Generated\Shared\Transfer\SpyHelloWorldEntityTransfer
    */
    public function saveHelloWorld(SpyHelloWorldEntityTransfer $helloworldEntityTransfer)
    {
      return $this->save($helloworldEntityTransfer);
    }
}

?>