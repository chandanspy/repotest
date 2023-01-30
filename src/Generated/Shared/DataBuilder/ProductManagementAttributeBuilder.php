<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductManagementAttributeTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductManagementAttributeBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "idProductManagementAttribute" => "=",
        "key" => "unique()->text(10)",
        "inputType" => "unique()->text(10)",
        "allowInput" => "boolean(100)",
        "isSuper" => "boolean(0)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'value' => 'ProductManagementAttributeValue',
        'localizedKey' => 'LocalizedProductManagementAttributeKey',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductManagementAttributeTransfer
     */
    public function build(): ProductManagementAttributeTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductManagementAttributeTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductManagementAttributeTransfer
     */
    public function getTransfer(): ProductManagementAttributeTransfer
    {
        return new ProductManagementAttributeTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withValue($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('value', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('value', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherValue($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('value', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('value', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withLocalizedKey($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('localizedKey', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('localizedKey', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherLocalizedKey($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('localizedKey', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('localizedKey', $overrideOrBuilder, true);

        return $this;
    }
}
