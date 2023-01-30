<?php

declare(strict_types=1);

namespace Pyz\Zed\GoogleAnalytics\Communication\Controller;

use Propel\Runtime\Exception\PropelException;
use Pyz\Zed\GoogleAnalytics\Communication\GoogleAnalyticsCommunicationFactory;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method GoogleAnalyticsCommunicationFactory getFactory()
 */
class GoogleanalyticsController extends AbstractController
{
    /**
     * @param Request $request
     * @return array|RedirectResponse
     * @throws ContainerKeyNotFoundException
     * @throws PropelException
     */
    public function indexAction(Request $request)
    {
        $googleAnalyticsForm = $this->getFactory()->createGoogleAnalyticsForm()->handleRequest($request);
        if ($googleAnalyticsForm->isSubmitted() && $googleAnalyticsForm->isValid()) {
            $analytics_key = $googleAnalyticsForm->getData()['analyticsKey'];
            $db_init = $this->getFactory()->model_object()->save_ga_key($analytics_key);
            if ($db_init) {
                $this->addSuccessMessage('Key Saved/Updated Successfully');
            } else {
                $this->addErrorMessage('Some Error Occurred');
            }
            return $this->redirectResponse('/google-analytics/googleanalytics');
        }
        return $this->viewResponse(['GoogleAnalyticsForm' => $googleAnalyticsForm->createView()]);

    }
}
