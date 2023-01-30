<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductListTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductListBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "type" => "randomElement(['blacklist', 'whitelist'])",
        "title" => "unique()->sentence(1)",
        "key" => "word",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'productListCategoryRelation' => 'ProductListCategoryRelation',
        'productListProductConcreteRelation' => 'ProductListProductConcreteRelation',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductListTransfer
     */
    public function build(): ProductListTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductListTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductListTransfer
     */
    public function getTransfer(): ProductListTransfer
    {
        return new ProductListTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductListCategoryRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListCategoryRelation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productListCategoryRelation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductListCategoryRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListCategoryRelation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productListCategoryRelation', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductListProductConcreteRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListProductConcreteRelation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productListProductConcreteRelation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductListProductConcreteRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListProductConcreteRelation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productListProductConcreteRelation', $overrideOrBuilder, true);

        return $this;
    }
}
