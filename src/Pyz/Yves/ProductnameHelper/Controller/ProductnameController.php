<?php

namespace Pyz\Yves\ProductnameHelper\Controller;

use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;
use Pyz\Client\ProductnameHelper\ProductnameHelperClientInterface;
use Spryker\Yves\Kernel\Controller\AbstractController;

/**
 * @method ProductnameHelperClientInterface getClient();
 */
class ProductnameController extends AbstractController
{
    /**
     * @param $productviewdata
     * @return string
     */
    public function newproductName($productviewdata): string
    {
        $product_abstract_id = $productviewdata->toArray()['id_product_abstract'];
        $product_old_Name = $productviewdata->getname();
        return $this->addPrefix($product_abstract_id)->getData()['categoryname'].' '.$product_old_Name.$this->addSuffix();
    }

    /**
     * @return string
     */
    public function addSuffix(): string
    {
        return ' suffix';
    }

    /**
     * @param $product_abstract_id
     * @return mixed
     */
    public function addPrefix($product_abstract_id)
    {
        $product_name_transfer = new ProductnameHelperqueryTransfer();
        $product_name_transfer->setQuery($product_abstract_id);
        return ($this->getClient())->get_suffix_prefix($product_name_transfer);
    }
}
