<?php

namespace Pyz\Client\ProductnameHelper;

use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;

interface ProductnameHelperClientInterface
{
    /**
     * @param ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer
     * @return mixed
     */
public function get_suffix_prefix(ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer);
}
