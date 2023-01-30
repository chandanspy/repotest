<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductConcreteProductMeasurementSalesUnitTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductConcreteProductMeasurementSalesUnitBuilder extends AbstractDataBuilder
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
        'productMeasurementSalesUnit' => 'ProductMeasurementSalesUnit',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductConcreteProductMeasurementSalesUnitTransfer
     */
    public function build(): ProductConcreteProductMeasurementSalesUnitTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductConcreteProductMeasurementSalesUnitTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductConcreteProductMeasurementSalesUnitTransfer
     */
    public function getTransfer(): ProductConcreteProductMeasurementSalesUnitTransfer
    {
        return new ProductConcreteProductMeasurementSalesUnitTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductMeasurementSalesUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productMeasurementSalesUnit', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productMeasurementSalesUnit', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductMeasurementSalesUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productMeasurementSalesUnit', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productMeasurementSalesUnit', $overrideOrBuilder, true);

        return $this;
    }
}
