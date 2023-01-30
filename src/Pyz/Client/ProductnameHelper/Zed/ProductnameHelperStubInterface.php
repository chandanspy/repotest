<?php

namespace Pyz\Client\ProductnameHelper\Zed;

use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;
use Generated\Shared\Transfer\ProductnameHelperTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface ProductnameHelperStubInterface
{
    /**
     * @param ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer
     * @return TransferInterface
     */
public function get_suffix_prefix(ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer):TransferInterface;
}
