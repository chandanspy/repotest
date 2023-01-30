<?php

declare(strict_types = 1);

namespace Pyz\Zed\GoogleAnalytics\Business;

use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalytics;
use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalyticsQuery;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class GoogleAnalyticsBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return PyzGoogleAnalytics
     */
    public function table_object(): PyzGoogleAnalytics
    {
        return new PyzGoogleAnalytics();
    }
    public function QueryContainer(): PyzGoogleAnalyticsQuery
    {
        return new PyzGoogleAnalyticsQuery();
    }
}
