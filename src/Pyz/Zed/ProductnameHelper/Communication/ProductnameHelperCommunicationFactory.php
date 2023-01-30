<?php

namespace Pyz\Zed\ProductnameHelper\Communication;

use Orm\Zed\Category\Persistence\SpyCategoryAttributeQuery;
use Orm\Zed\ProductCategory\Persistence\SpyProductCategoryQuery;
use Pyz\Zed\ProductnameHelper\Business\ProductnameHelperModel;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;


class ProductnameHelperCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return SpyProductCategoryQuery
     */
    public function get_product_category_query_obj(): SpyProductCategoryQuery
    {
        return SpyProductCategoryQuery::create();
    }

    /**
     * @return SpyCategoryAttributeQuery
     */
    public function get_category_query_obj(): SpyCategoryAttributeQuery
    {
        return SpyCategoryAttributeQuery::create();
    }

    /**
     * @return ProductnameHelperModel
     */
    public function get_model(): ProductnameHelperModel
    {
        return new ProductnameHelperModel();
    }
}
