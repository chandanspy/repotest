<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ProductDetailPage\Controller;

use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Pyz\Yves\ProductDetailPage\ProductDetailPageFactory;
use Spryker\Client\Product\ProductClientInterface;
use Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException;
use SprykerShop\Yves\ProductDetailPage\Controller\ProductController as SprykerShopProductController;
use SprykerShop\Yves\ProductDetailPage\Exception\ProductAccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @method ProductClientInterface getClient()
 * @method ProductDetailPageFactory getFactory()
 */
class ProductController extends SprykerShopProductController
{
    /**
     * @var string
     */
    protected const PYZ_KEY_ID_PRODUCT_ABSTRACT = 'id_product_abstract';

    /**
     * @param array $productData
     * @param Request $request
     *
     * @return array
     * @throws NotFoundHttpException|ContainerKeyNotFoundException
     *
     */
    protected function executeDetailAction(array $productData, Request $request): array
    {
        $newproductnamewithsuffixprefix = '';
        $productViewTransfer = $this->getFactory()
            ->getProductStorageClient()
            ->mapProductStorageData($productData, $this->getLocale(), $this->getSelectedAttributes($request));
        $newproductnamewithsuffixprefix = $this->getFactory()->addSuffixPrefix()->newproductName($productViewTransfer);
        try {
            $this->assertProductRestrictions($productViewTransfer);
        } catch (ProductAccessDeniedException $productAccessDeniedException) {
            throw new NotFoundHttpException();
        }

        $quoteTransfer = new QuoteTransfer();
        $quoteTransfer->addItem(
            (new ItemTransfer())->setIdProductAbstract($productViewTransfer->getIdProductAbstract())
        );

        $bundledProducts = [];
        foreach ($productViewTransfer->getPyzBundledProductIds() as $productId => $quantity) {
            $bundledProduct = $this->getFactory()->getProductStoragePyzClient()->findProductConcreteStorageData($productId, $this->getLocale());

            $bundledProduct['idProductAbstract'] = $bundledProduct['id_product_abstract'];
            $bundledProduct['productUrl'] = $bundledProduct['url'];
            $bundledProduct['quantity'] = $quantity;
            $bundledProductView = $this->getFactory()->getProductStoragePyzClient()->mapProductStorageData(
                [
                    'idProductAbstract' => $bundledProduct['id_product_abstract'],
                    'attribute_map' => [
                        'product_concrete_ids' => [],
                    ],
                    'sku' => $bundledProduct['sku'],
                    'idProductConcrete' => $bundledProduct['id_product_concrete'],
                ],
                $this->getLocale()
            );
            $bundledProduct['image'] = $bundledProductView->getImages()->offsetGet(0)->getExternalUrlSmall();
            $bundledProducts[] = $bundledProduct;
        }


        return [
            'cart' => $quoteTransfer,
            'product' => $productViewTransfer,
            'productUrl' => $this->getProductUrl($productViewTransfer),
            'bundledProducts' => $bundledProducts,
            'newproductname' => $newproductnamewithsuffixprefix
        ];
    }
}
