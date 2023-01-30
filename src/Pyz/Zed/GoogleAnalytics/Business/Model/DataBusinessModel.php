<?php

declare(strict_types=1);

namespace Pyz\Zed\GoogleAnalytics\Business\Model;

use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalytics;
use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalyticsQuery;
use Propel\Runtime\Exception\PropelException;
use Pyz\Zed\GoogleAnalytics\Business\GoogleAnalyticsFacade;
use Redis;


/**
 * @method GoogleAnalyticsFacade getFacade();
 */
class DataBusinessModel implements DataBusinessModelInterface
{

    /**
     * @param string $data
     * @return bool
     * @throws PropelException
     */
    public function save_ga_key(string $data): bool
    {
        $table_obj = $this->table_object();
        $check_key = $this->check_ga_key($data);
        if (!$check_key) {
            $table_obj->setAnalyticskey($data);
            $table_obj->save();
        }
//        $this->add_to_redis('GA-Key', $data);
        return true;

    }

    /**
     * @param string $data
     * @return bool
     * @throws PropelException
     */
    public function check_ga_key(string $data): bool
    {
        $query = $this->QueryContainer()->findOneById(1);
        if ($query != null || $query->getAnalyticskey() != '') {
            $query->setAnalyticskey($data);
            $query->save();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return PyzGoogleAnalytics
     */
    public function table_object(): PyzGoogleAnalytics
    {
        return new PyzGoogleAnalytics();
    }

    /**
     * @return PyzGoogleAnalyticsQuery
     */
    public function QueryContainer(): PyzGoogleAnalyticsQuery
    {
        return PyzGoogleAnalyticsQuery::create();
    }

    /**
     * @param $key
     * @param $value
     * @return bool
     */
    public function add_to_redis($key, $value): bool
    {
        $redis=new Redis();
    }
}
