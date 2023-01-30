<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SalesOrderConfiguredBundleBuilder extends AbstractDataBuilder
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
        'salesOrderConfiguredBundleItem' => 'SalesOrderConfiguredBundleItem',
        'translation' => 'SalesOrderConfiguredBundleTranslation',
    ];

    /**
     * @return \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer
     */
    public function build(): SalesOrderConfiguredBundleTransfer
    {
        /** @var \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer
     */
    public function getTransfer(): SalesOrderConfiguredBundleTransfer
    {
        return new SalesOrderConfiguredBundleTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withSalesOrderConfiguredBundleItem($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesOrderConfiguredBundleItem', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('salesOrderConfiguredBundleItem', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherSalesOrderConfiguredBundleItem($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesOrderConfiguredBundleItem', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('salesOrderConfiguredBundleItem', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('translation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('translation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('translation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('translation', $overrideOrBuilder, true);

        return $this;
    }
}
