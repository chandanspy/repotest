<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\DiscountTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DiscountBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "displayName" => "unique()->sentence",
        "amount" => "=1",
        "discountType" => "=cart_rule",
        "validTo" => "dateTimeInInterval('+1 day', '+10 years')->format('Y-m-d H:i:s')",
        "description" => "sentence(10)",
        "calculatorPlugin" => "=PLUGIN_CALCULATOR_FIXED",
        "isActive" => "=true",
        "validFrom" => "=2016-01-01",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'discountPromotion' => 'DiscountPromotion',
        'moneyValue' => 'MoneyValue',
        'currency' => 'Currency',
        'storeRelation' => 'StoreRelation',
    ];

    /**
     * @return \Generated\Shared\Transfer\DiscountTransfer
     */
    public function build(): DiscountTransfer
    {
        /** @var \Generated\Shared\Transfer\DiscountTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\DiscountTransfer
     */
    public function getTransfer(): DiscountTransfer
    {
        return new DiscountTransfer;
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
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCurrency($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('currency', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('currency', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCurrency($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('currency', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('currency', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withStoreRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('storeRelation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('storeRelation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherStoreRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('storeRelation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('storeRelation', $overrideOrBuilder, true);

        return $this;
    }
}
