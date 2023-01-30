<?php

declare(strict_types=1);

namespace Pyz\Zed\GoogleAnalytics\Business\Model;

use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalytics;
use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalyticsQuery;
use Propel\Runtime\Exception\PropelException;

interface DataBusinessModelInterface
{
    /**
     * @param string $data
     * @return bool
     * @throws PropelException
     */
    public function save_ga_key(string $data): bool;


    /**
     * @param string $data
     * @return bool
     * @throws PropelException
     */
    public function check_ga_key(string $data): bool;

    /**
     * @return PyzGoogleAnalytics
     */
    public function table_object(): PyzGoogleAnalytics;


    /**
     * @return PyzGoogleAnalyticsQuery
     */
    public function QueryContainer(): PyzGoogleAnalyticsQuery;

}
