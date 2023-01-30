<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitCollectionTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ShoppingListCompanyBusinessUnitCollectionBuilder extends AbstractDataBuilder
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
        'shoppingListCompanyBusinessUnit' => 'ShoppingListCompanyBusinessUnit',
    ];

    /**
     * @return \Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitCollectionTransfer
     */
    public function build(): ShoppingListCompanyBusinessUnitCollectionTransfer
    {
        /** @var \Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitCollectionTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitCollectionTransfer
     */
    public function getTransfer(): ShoppingListCompanyBusinessUnitCollectionTransfer
    {
        return new ShoppingListCompanyBusinessUnitCollectionTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withShoppingListCompanyBusinessUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shoppingListCompanyBusinessUnit', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('shoppingListCompanyBusinessUnit', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherShoppingListCompanyBusinessUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shoppingListCompanyBusinessUnit', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('shoppingListCompanyBusinessUnit', $overrideOrBuilder, true);

        return $this;
    }
}
