<?php

declare(strict_types = 1);

namespace Pyz\Zed\GoogleAnalytics;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Redis\Business\RedisFacade;

class GoogleAnalyticsDependencyProvider extends AbstractBundleDependencyProvider
{
    const CLIENT_REDIS ='redis';

    /**
     * @param Container $container
     *
     * @return Container
     */
    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        return parent::provideCommunicationLayerDependencies($container);
    }

    /**
     * @param Container $container
     *
     * @return Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        return $this->addRedisClient($container);    }

    /**
     * @param Container $container
     *
     * @return Container
     */
    public function providePersistenceLayerDependencies(Container $container): Container
    {
        return parent::providePersistenceLayerDependencies($container);
    }

    /**
     * @param Container $container
     * @return Container
     */
    protected function addRedisClient(Container $container): Container
    {
        $container[static::CLIENT_REDIS] = static function (Container $container) {
            return new RedisFacade(
                $container->getLocator()->redis()->client()
            );
        };

        return $container;
    }
}
