<?php

declare(strict_types = 1);

namespace Pyz\Zed\GoogleAnalytics\Communication;

use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalytics;
use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalyticsQuery;
use Pyz\Zed\GoogleAnalytics\Business\Model\DataBusinessModel;
use Pyz\Zed\GoogleAnalytics\Form\GoogleAnalyticsFormType;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormInterface;

class GoogleAnalyticsCommunicationFactory extends AbstractCommunicationFactory
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
     * @return mixed
     * @throws ContainerKeyNotFoundException
     */
    public function getFormFactory(): FormFactory
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY);
    }

    /**
     * @return DataBusinessModel
     */
    public function model_object(): DataBusinessModel
    {
        return new DataBusinessModel();
}
    /**
     * @return PyzGoogleAnalytics
     */
    public function table_object(): PyzGoogleAnalytics
    {
        return new PyzGoogleAnalytics();
    }
    public function QueryContainer(): PyzGoogleAnalyticsQuery
    {
        return PyzGoogleAnalyticsQuery::create();
    }
}
