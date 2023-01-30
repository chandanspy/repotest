<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyProductMeasurementUnitEntityBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "defaultPrecision" => "=1000",
        "name" => "=KILO",
        "code" => "=measurement_unit.standard.weight.kilo.name",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
    ];

    /**
     * @return \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer
     */
    public function build(): SpyProductMeasurementUnitEntityTransfer
    {
        /** @var \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer
     */
    public function getTransfer(): SpyProductMeasurementUnitEntityTransfer
    {
        return new SpyProductMeasurementUnitEntityTransfer;
    }

}
