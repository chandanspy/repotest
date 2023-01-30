<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductMeasurementSalesUnitBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "precision" => "=1000",
        "conversion" => "=1",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'productMeasurementUnit' => 'ProductMeasurementUnit',
        'storeRelation' => 'StoreRelation',
        'productMeasurementBaseUnit' => 'ProductMeasurementBaseUnit',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer
     */
    public function build(): ProductMeasurementSalesUnitTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer
     */
    public function getTransfer(): ProductMeasurementSalesUnitTransfer
    {
        return new ProductMeasurementSalesUnitTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductMeasurementUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productMeasurementUnit', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productMeasurementUnit', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductMeasurementUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productMeasurementUnit', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productMeasurementUnit', $overrideOrBuilder, true);

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
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductMeasurementBaseUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productMeasurementBaseUnit', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productMeasurementBaseUnit', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductMeasurementBaseUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productMeasurementBaseUnit', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productMeasurementBaseUnit', $overrideOrBuilder, true);

        return $this;
    }
}
