<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductAbstractStorageTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductAbstractStorageBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "idProductAbstract" => "randomNumber(5)",
        "name" => "unique()->sentence(2)",
        "sku" => "unique()->sentence(2)",
        "url" => "unique()->sentence(2)",
        "description" => "unique()->sentence(5)",
        "metaTitle" => "unique()->sentence(2)",
        "metaKeywords" => "unique()->sentence(2)",
        "metaDescription" => "unique()->sentence(2)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'attributeMap' => 'AttributeMapStorage',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductAbstractStorageTransfer
     */
    public function build(): ProductAbstractStorageTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductAbstractStorageTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductAbstractStorageTransfer
     */
    public function getTransfer(): ProductAbstractStorageTransfer
    {
        return new ProductAbstractStorageTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAttributeMap($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('attributeMap', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('attributeMap', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherAttributeMap($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('attributeMap', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('attributeMap', $overrideOrBuilder, true);

        return $this;
    }
}
