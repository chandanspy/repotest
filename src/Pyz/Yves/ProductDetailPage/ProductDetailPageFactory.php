<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ProductDetailPage;

use Pyz\Yves\ProductnameHelper\Controller\ProductnameController;
use Spryker\Client\ProductStorage\ProductStorageClientInterface;
use Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException;
use SprykerShop\Yves\ProductDetailPage\ProductDetailPageFactory as SprykerProductDetailPageFactory;

class ProductDetailPageFactory extends SprykerProductDetailPageFactory
{
    /**
     * @return ProductStorageClientInterface
     * @throws ContainerKeyNotFoundException
     */
    public function getProductStoragePyzClient(): ProductStorageClientInterface
    {
        return $this->getProvidedDependency(ProductDetailPageDependencyProvider::PYZ_CLIENT_PRODUCT_STORAGE_PYZ);
    }

    /**
     * @return ProductnameController
     */
    public function addSuffixPrefix(): ProductnameController
    {
        return new ProductnameController();
    }
}
