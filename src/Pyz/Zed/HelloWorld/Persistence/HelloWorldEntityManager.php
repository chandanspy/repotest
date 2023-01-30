<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\HelloWorld\Persistence;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Spryker\Zed\HelloWorld\Persistence\HelloWorldPersistenceFactory getFactory()
 */
class HelloWorldEntityManager extends AbstractEntityManager implements HelloWorldEntityManagerInterface
{
    /**
     * {@inheritDoc}
     *
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloworldTransfer
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function saveCompany(HelloWorldTransfer $helloworldTransfer): HelloWorldTransfer
    {
        $spyCompany = $this->getFactory()
            ->createhelloworldTransferQuery()
            ->filterByIdhelloworld($helloworldTransfer->getIdHelloWorld())
            ->findOneOrCreate();

        $spyCompany = $this->getFactory()
            ->createHelloWorldTransferMapper()
            ->mapHelloWorldTransferTransferToEntity($helloTransfer, $spyHelloWorld);

        $spyHelloWorld->save();

        $helloworldTransfer->fromArray($spyHelloWorld->toArray(), true);

        return $helloworldTransfer;
    }

    
}
