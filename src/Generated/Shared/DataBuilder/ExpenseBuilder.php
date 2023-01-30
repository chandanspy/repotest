<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ExpenseTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ExpenseBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "taxRate" => "randomFloat(2, 0, 99)",
        "sumGrossPrice" => "randomNumber(5)",
        "unitGrossPrice" => "randomNumber(5)",
        "type" => "word",
        "name" => "word",
        "quantity" => "=1",
        "unitNetPrice" => "randomNumber(5)",
        "sumNetPrice" => "randomNumber(5)",
        "unitPrice" => "randomNumber(5)",
        "sumPrice" => "randomNumber(5)",
        "unitPriceToPayAggregation" => "randomNumber(5)",
        "sumPriceToPayAggregation" => "randomNumber(5)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'shipment' => 'Shipment',
        'calculatedDiscount' => 'CalculatedDiscount',
    ];

    /**
     * @return \Generated\Shared\Transfer\ExpenseTransfer
     */
    public function build(): ExpenseTransfer
    {
        /** @var \Generated\Shared\Transfer\ExpenseTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ExpenseTransfer
     */
    public function getTransfer(): ExpenseTransfer
    {
        return new ExpenseTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withShipment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shipment', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('shipment', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherShipment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shipment', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('shipment', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCalculatedDiscount($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('calculatedDiscount', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('calculatedDiscount', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCalculatedDiscount($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('calculatedDiscount', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('calculatedDiscount', $overrideOrBuilder, true);

        return $this;
    }
}
