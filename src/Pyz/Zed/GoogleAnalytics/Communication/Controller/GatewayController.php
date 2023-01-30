<?php

declare(strict_types = 1);

namespace Pyz\Zed\GoogleAnalytics\Communication\Controller;

use Generated\Shared\Transfer\GoogleAnalyticsTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\GoogleAnalytics\Communication\GoogleAnalyticsCommunicationFactory getFactory()
 * @method \Pyz\Zed\GoogleAnalytics\Business\GoogleAnalyticsFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\GoogleAnalyticsTransfer $googleAnalyticsTransfer
     *
     * @return \Generated\Shared\Transfer\GoogleAnalyticsTransfer $googleAnalyticsTransfer
     */
    public function customAction(GoogleAnalyticsTransfer $googleAnalyticsTransfer): GoogleAnalyticsTransfer
    {
        return $this->getFacade()
                ->customAction($googleAnalyticsTransfer);
    }
}
