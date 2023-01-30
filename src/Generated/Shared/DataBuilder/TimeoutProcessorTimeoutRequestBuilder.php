<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\TimeoutProcessorTimeoutRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class TimeoutProcessorTimeoutRequestBuilder extends AbstractDataBuilder
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
        'salesOrderItemEntity' => 'SpySalesOrderItemEntity',
        'omsEvent' => 'OmsEvent',
    ];

    /**
     * @return \Generated\Shared\Transfer\TimeoutProcessorTimeoutRequestTransfer
     */
    public function build(): TimeoutProcessorTimeoutRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\TimeoutProcessorTimeoutRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\TimeoutProcessorTimeoutRequestTransfer
     */
    public function getTransfer(): TimeoutProcessorTimeoutRequestTransfer
    {
        return new TimeoutProcessorTimeoutRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withSalesOrderItemEntity($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesOrderItemEntity', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('salesOrderItemEntity', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherSalesOrderItemEntity($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesOrderItemEntity', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('salesOrderItemEntity', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withOmsEvent($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('omsEvent', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('omsEvent', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherOmsEvent($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('omsEvent', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('omsEvent', $overrideOrBuilder, true);

        return $this;
    }
}
