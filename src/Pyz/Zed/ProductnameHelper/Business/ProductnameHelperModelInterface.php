<?php

namespace Pyz\Zed\ProductnameHelper\Business;

use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;
use Orm\Zed\Category\Persistence\SpyCategoryAttributeQuery;
use Orm\Zed\ProductCategory\Persistence\SpyProductCategory;
use Orm\Zed\ProductCategory\Persistence\SpyProductCategoryQuery;

interface ProductnameHelperModelInterface
{
    public function get_category_id($product_id): ?SpyProductCategory;
    public function get_category_name(ProductnameHelperqueryTransfer $productnameHelperqueryTransfer): array;
    public function get_product_query_container_class(): SpyProductCategoryQuery;
    public function get_category_query_container_class(): SpyCategoryAttributeQuery;



}
