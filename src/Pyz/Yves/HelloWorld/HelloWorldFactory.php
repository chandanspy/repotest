<?php
namespace Pyz\Yves\HelloWorld;

use Pyz\Yves\HelloWorld\Form\SubscriptionFormType;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Yves\Kernel\AbstractFactory;
use Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormInterface;

class HelloWorldFactory extends AbstractFactory
{
    /**
     * @return FormInterface
     * @throws ContainerKeyNotFoundException
     */
    public function createSubscriptionForm():FormInterface
    {
        return $this->getFormFactory()->create(SubscriptionFormType::class);
    }

    /**
     * @return FormFactory
     * @throws ContainerKeyNotFoundException
     */
    public function getFormFactory(): FormFactory
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY);
    }
}
