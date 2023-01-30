<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\MerchantRelationshipTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MerchantRelationshipBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "name" => "word",
        "merchantRelationshipKey" => "unique()->word",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'ownerCompanyBusinessUnit' => 'CompanyBusinessUnit',
        'merchant' => 'Merchant',
        'assigneeCompanyBusinessUnits' => 'CompanyBusinessUnitCollection',
    ];

    /**
     * @return \Generated\Shared\Transfer\MerchantRelationshipTransfer
     */
    public function build(): MerchantRelationshipTransfer
    {
        /** @var \Generated\Shared\Transfer\MerchantRelationshipTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\MerchantRelationshipTransfer
     */
    public function getTransfer(): MerchantRelationshipTransfer
    {
        return new MerchantRelationshipTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withOwnerCompanyBusinessUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('ownerCompanyBusinessUnit', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('ownerCompanyBusinessUnit', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherOwnerCompanyBusinessUnit($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('ownerCompanyBusinessUnit', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('ownerCompanyBusinessUnit', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withMerchant($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('merchant', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('merchant', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherMerchant($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('merchant', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('merchant', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAssigneeCompanyBusinessUnits($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('assigneeCompanyBusinessUnits', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('assigneeCompanyBusinessUnits', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherAssigneeCompanyBusinessUnits($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('assigneeCompanyBusinessUnits', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('assigneeCompanyBusinessUnits', $overrideOrBuilder, true);

        return $this;
    }
}
