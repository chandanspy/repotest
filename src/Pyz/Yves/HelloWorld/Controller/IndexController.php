<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Generated\Shared\Transfer\HelloWorldDataTransfer;
use Pyz\Client\HelloWorld\HelloWorldClientInterface;
use Pyz\Yves\HelloWorld\HelloWorldFactory;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Yves\Kernel\View\View;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method HelloWorldFactory getFactory()
 * @method HelloWorldClientInterface getClient()
 */
class IndexController extends AbstractController
{

    /**
     * @param Request $request
     * @return View
     * @throws ContainerKeyNotFoundException
     */
    public function indexAction(Request $request): View
    {
        $subscriptionForm = $this
            ->getFactory()
            ->createSubscriptionForm()->handleRequest($request);

        if ($subscriptionForm->isSubmitted() && $subscriptionForm->isValid()) {

            $data_transfer = new HelloWorldDataTransfer();
            $form_data = $subscriptionForm->getData();
            $data_transfer->setData($form_data);
            $response = $this->getClient()->save_data($data_transfer);
            if($response->getStatus()){
                $this->addSuccessMessage('Form Saved Successfully');
            }else{
                $this->addErrorMessage('Some Error Occured');
            }
        }

        return $this->view(['formdata' => $subscriptionForm->createView()], [], '@HelloWorld/views/subscription/index.twig');


    }


}
