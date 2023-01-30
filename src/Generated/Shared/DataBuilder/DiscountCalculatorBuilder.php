<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\DiscountCalculatorTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DiscountCalculatorBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "amount" => "=1",
        "calculatorPlugin" => "=PLUGIN_CALCULATOR_FIXED",
        "collectorQueryString" => "=item-quantity > '1'",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'discountPromotion' => 'DiscountPromotion',
        'moneyValue' => 'MoneyValue',
    ];

    /**
     * @return \Generated\Shared\Transfer\DiscountCalculatorTransfer
     */
    public function build(): DiscountCalculatorTransfer
    {
        /** @var \Generated\Shared\Transfer\DiscountCalculatorTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\DiscountCalculatorTransfer
     */
    public function getTransfer(): DiscountCalculatorTransfer
    {
        return new DiscountCalculatorTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withDiscountPromotion($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('discountPromotion', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('discountPromotion', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherDiscountPromotion($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('discountPromotion', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('discountPromotion', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withMoneyValue($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('moneyValue', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('moneyValue', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherMoneyValue($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('moneyValue', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('moneyValue', $overrideOrBuilder, true);

        return $this;
    }
}
