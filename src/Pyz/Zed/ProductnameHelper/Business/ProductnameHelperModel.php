<?php

namespace Pyz\Zed\ProductnameHelper\Business;

use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;
use Orm\Zed\Category\Persistence\SpyCategoryAttributeQuery;
use Orm\Zed\ProductCategory\Persistence\SpyProductCategory;
use Orm\Zed\ProductCategory\Persistence\SpyProductCategoryQuery;
use Pyz\Zed\ProductnameHelper\Communication\ProductnameHelperCommunicationFactory;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * @method ProductnameHelperCommunicationFactory getFactory()
 */
class ProductnameHelperModel implements ProductnameHelperModelInterface
{
    /**
     * @param $product_id
     * @return SpyProductCategory|null
     */
    public function get_category_id($product_id): ?SpyProductCategory
    {
        $table_obj = $this->get_product_query_container_class();
        return $table_obj->findOneByFkProductAbstract($product_id);
    }

    /**
     * @param ProductnameHelperqueryTransfer $productnameHelperqueryTransfer
     * @return array
     */
    public function get_category_name(ProductnameHelperqueryTransfer $productnameHelperqueryTransfer): array
    {
        $product_id = $productnameHelperqueryTransfer->getQuery();

        $category_id = $this->get_category_id($product_id)->getFkCategory();
        $get_category_data = $this->get_category_query_container_class()
            ->findByFkCategory($category_id);

        $response = [];
        foreach ($get_category_data as $category) {
            $response['categoryname'] = $category->getName();
        }
        return $response;
    }

    /**
     * @return SpyProductCategoryQuery
     */
    public function get_product_query_container_class(): SpyProductCategoryQuery
    {
        return SpyProductCategoryQuery::create();
    }

    /**
     * @return SpyCategoryAttributeQuery
     */
    public function get_category_query_container_class(): SpyCategoryAttributeQuery
    {
        return SpyCategoryAttributeQuery::create();
    }
}
