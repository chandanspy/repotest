<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductPackagingUnitTypeBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "name" => "=packaging_unit_type.test.name",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'productPackagingUnitTypeTranslation' => 'ProductPackagingUnitTypeTranslation',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer
     */
    public function build(): ProductPackagingUnitTypeTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer
     */
    public function getTransfer(): ProductPackagingUnitTypeTransfer
    {
        return new ProductPackagingUnitTypeTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductPackagingUnitTypeTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productPackagingUnitTypeTranslation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productPackagingUnitTypeTranslation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductPackagingUnitTypeTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productPackagingUnitTypeTranslation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productPackagingUnitTypeTranslation', $overrideOrBuilder, true);

        return $this;
    }
}
