<?php

namespace Pyz\Zed\ProductnameHelper\Persistence;

use Orm\Zed\ProductCategory\Persistence\SpyProductCategory;
use Orm\Zed\ProductCategory\Persistence\SpyProductCategoryQuery;
use Pyz\Zed\ProductnameHelper\ProductnameHelperConfig;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method ProductnameHelperConfig getConfig()
 */
class ProductnameHelperPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @param $product_id
     * @return SpyProductCategory|null
     */
public function get_category_id($product_id): ?SpyProductCategory
{
    $category_table_obj=SpyProductCategoryQuery::create();
    return $category_table_obj->findOneByFkProductAbstract($product_id);
}
public function get_category_name(){

}
}
