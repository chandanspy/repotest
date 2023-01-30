<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductOptionGroupTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductOptionGroupBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "fkTaxSet" => "=1",
        "active" => "=true",
        "name" => "word",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'groupNameTranslation' => 'ProductOptionTranslation',
        'productOptionValue' => 'ProductOptionValue',
        'productOptionValueTranslation' => 'ProductOptionTranslation',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductOptionGroupTransfer
     */
    public function build(): ProductOptionGroupTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductOptionGroupTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductOptionGroupTransfer
     */
    public function getTransfer(): ProductOptionGroupTransfer
    {
        return new ProductOptionGroupTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withGroupNameTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('groupNameTranslation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('groupNameTranslation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherGroupNameTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('groupNameTranslation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('groupNameTranslation', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductOptionValue($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productOptionValue', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productOptionValue', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductOptionValue($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productOptionValue', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productOptionValue', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductOptionValueTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productOptionValueTranslation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productOptionValueTranslation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductOptionValueTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productOptionValueTranslation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productOptionValueTranslation', $overrideOrBuilder, true);

        return $this;
    }
}
