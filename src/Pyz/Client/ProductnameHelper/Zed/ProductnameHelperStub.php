<?php

namespace Pyz\Client\ProductnameHelper\Zed;

use Generated\Shared\Transfer\ProductnameHelperqueryTransfer;
use Generated\Shared\Transfer\ProductnameHelperTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

class ProductnameHelperStub implements ProductnameHelperStubInterface
{
    /**
     * @var ZedRequestClientInterface
     */
    protected ZedRequestClientInterface $zedRequestClient;

    /**
     * @param ZedRequestClientInterface $zedRequestClient
     */
    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer
     * @return TransferInterface
     */
    public function get_suffix_prefix(ProductnameHelperqueryTransfer $ProductnameHelperqueryTransfer): TransferInterface
    {
        return $this->zedRequestClient->call(
            '/productname-helper/gateway/getsuffixprefix',
            $ProductnameHelperqueryTransfer
        );
    }
}
