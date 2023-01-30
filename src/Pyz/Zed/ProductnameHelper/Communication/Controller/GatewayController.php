<?php

namespace Pyz\Zed\ProductnameHelper\Communication\Controller;

use Generated\Shared\Transfer\ProductnameHelperdataTransfer;
use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;
use Pyz\Zed\ProductnameHelper\Business\ProductnameHelperModel;
use Pyz\Zed\ProductnameHelper\Communication\ProductnameHelperCommunicationFactory;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * @method ProductnameHelperCommunicationFactory getFactory()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param ProductnameHelperqueryTransfer $productnamehelperquerytransfer
     * @return ProductnameHelperdataTransfer
     */
    public function getsuffixprefixAction(ProductnameHelperqueryTransfer $productnamehelperquerytransfer): ProductnameHelperdataTransfer
    {
        $response = new ProductnameHelperdataTransfer();
        $category_data = $this->get_model()->get_category_name($productnamehelperquerytransfer);
        $response->setData($category_data);
        return $response;
    }
    public function helloAction(){
        echo 'Hello';
    }
    public function get_model(): ProductnameHelperModel
    {
        return $this->getFactory()->get_model();
    }
}
