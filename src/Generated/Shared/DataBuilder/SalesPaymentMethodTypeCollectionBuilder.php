<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\SalesPaymentMethodTypeCollectionTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SalesPaymentMethodTypeCollectionBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'salesPaymentMethodType' => 'SalesPaymentMethodType',
    ];

    /**
     * @return \Generated\Shared\Transfer\SalesPaymentMethodTypeCollectionTransfer
     */
    public function build(): SalesPaymentMethodTypeCollectionTransfer
    {
        /** @var \Generated\Shared\Transfer\SalesPaymentMethodTypeCollectionTransfer $transfer */
        $transfer = parent::build();

        return $transfer;
    }

    /**
     * @param string $builder
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Testify\AbstractDataBuilder
     */
    protected function locateDataBuilder($builder)
    {
        $builderClass = __NAMESPACE__ . "\\{$builder}Builder";

        if (!class_exists($builderClass)) {
            throw new Exception("Builder '$builderClass' not found");
        }

        return new $builderClass;
    }

    /**
     * @return \Generated\Shared\Transfer\SalesPaymentMethodTypeCollectionTransfer
     */
    public function getTransfer(): SalesPaymentMethodTypeCollectionTransfer
    {
        return new SalesPaymentMethodTypeCollectionTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withSalesPaymentMethodType($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesPaymentMethodType', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('salesPaymentMethodType', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherSalesPaymentMethodType($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesPaymentMethodType', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('salesPaymentMethodType', $overrideOrBuilder, true);

        return $this;
    }
}