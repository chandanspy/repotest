<?php

namespace Pyz\Zed\GoogleAnalytics;

use Pyz\Yves\CheckoutPage\Form\FormFactory;
use Pyz\Zed\GoogleAnalytics\Form\GoogleAnalyticsFormType;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\AbstractFactory;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Kernel\Dependency\Injector\DependencyInjector;
use Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Symfony\Component\Form\FormInterface;

class GoogleAnalyticsFactory extends AbstractFactory
{
    /**
     * @return FormInterface
     * @throws ContainerKeyNotFoundException
     */
    public function createGoogleAnalyticsForm(): FormInterface
    {
        return $this->getFormFactory()->create(GoogleAnalyticsFormType::class);
    }

    /**
     * @param AbstractBundleDependencyProvider $dependencyProvider
     * @param Container $container
     *
     * @return Container
     */
    protected function provideExternalDependencies(AbstractBundleDependencyProvider $dependencyProvider, Container $container): Container
    {
        // TODO: Implement provideExternalDependencies() method.
    }

    /**
     * @param DependencyInjector $dependencyInjector
     * @param Container $container
     *
     * @return Container
     */
    protected function injectExternalDependencies(DependencyInjector $dependencyInjector, Container $container): Container
    {
        // TODO: Implement injectExternalDependencies() method.
    }

    /**
     * @return mixed
     * @throws ContainerKeyNotFoundException
     */
    private function getFormFactory():\Symfony\Component\Form\FormFactory
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY);
    }
}
