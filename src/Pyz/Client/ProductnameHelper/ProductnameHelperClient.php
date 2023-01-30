<?php

namespace Pyz\Client\ProductnameHelper;

use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;
use Generated\Shared\Transfer\ProductnameHelperdataTransfer;
use Spryker\Client\Kernel\AbstractClient;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

/**
* @method ProductnameHelperFactory getFactory()
*/
class ProductnameHelperClient extends AbstractClient implements ProductnameHelperClientInterface
{

    /**
     * @param ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer
     * @return TransferInterface
     * @throws ContainerKeyNotFoundException
     */
    public function get_suffix_prefix(ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer): TransferInterface
    {
        return $this->getFactory()->createZedStub()->get_suffix_prefix($ProductnameHelperqueryTransfer);
    }
}
