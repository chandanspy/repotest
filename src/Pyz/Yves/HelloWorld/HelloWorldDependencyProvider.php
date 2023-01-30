<?php
namespace Pyz\Yves\HelloWorld;

use Pyz\Yves\HelloWorld\Form\SubscriptionFormType;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Shared\Kernel\Container\GlobalContainer;
use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\AbstractFactory;
use Symfony\Component\Form\FormFactory;

class HelloWorldDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @uses \Spryker\Yves\Form\Plugin\FormApplicationPlugin::SERVICE_FORM_FACTORY
     */

   protected const SERVICE_FORM_FACTORY='form.factory';

   /**
    * @return \Symfony\Component\Form
    */
    public function getFormFactory():FormFactory
    {
        return (new GlobalContainer())->get(static::SERVICE_FORM_FACTORY);
    }

}