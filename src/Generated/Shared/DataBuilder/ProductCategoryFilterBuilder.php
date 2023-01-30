<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductCategoryFilterTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductCategoryFilterBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "idProductCategoryFilter" => "=",
        "fkCategory" => "=",
        "filterData" => "unique()->sentence(1)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'productCategoryFilterItem' => 'ProductCategoryFilterItem',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductCategoryFilterTransfer
     */
    public function build(): ProductCategoryFilterTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductCategoryFilterTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductCategoryFilterTransfer
     */
    public function getTransfer(): ProductCategoryFilterTransfer
    {
        return new ProductCategoryFilterTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductCategoryFilterItem($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productCategoryFilterItem', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productCategoryFilterItem', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductCategoryFilterItem($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productCategoryFilterItem', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productCategoryFilterItem', $overrideOrBuilder, true);

        return $this;
    }
}
