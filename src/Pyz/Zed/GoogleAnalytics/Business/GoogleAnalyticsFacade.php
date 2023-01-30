<?php

declare(strict_types=1);

namespace Pyz\Zed\GoogleAnalytics\Business;

use Spryker\Client\Redis\RedisClient;
use Spryker\Zed\Kernel\Business\AbstractFacade;
use Spryker\Zed\Redis\Business\RedisFacade;

/**
 * @method \Pyz\Zed\GoogleAnalytics\Business\GoogleAnalyticsBusinessFactory getFactory()
 */
class GoogleAnalyticsFacade extends AbstractFacade implements GoogleAnalyticsFacadeInterface
{
    /**
     * @var RedisFacade
     */
    protected RedisFacade $redisClient;

    /**
     * @param RedisFacade $redisClient
     *
     * @return void
     */
    public function __construct(RedisFacade $redisClient)
    {
        $this->redisClient = $redisClient;
    }

    /**
     * @param $key
     * @param $value
     * @return true
     */
    public function add_ga_key_to_redis($key,$value): bool
    {
        $redis=new RedisClient();
        $redis->set('',$key,$value);
        return true;
    }
}
