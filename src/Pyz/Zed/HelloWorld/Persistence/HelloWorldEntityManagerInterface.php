<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\HelloWorld\Persistence;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldEntityManagerInterface
{
    /**
     * Specification:
     * - Creates a company
     * - Finds a company by CompanyTransfer::idCompany in the transfer
     * - Updates fields in a company entity
     *
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloworldTransfer
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function saveHelloWorld(HelloWorldTransfer $helloworldTransfer): HelloWorldTransfer;

   
     }  
