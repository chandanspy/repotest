<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\CompanyUnitAddressTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CompanyUnitAddressBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "isDefaultBilling" => "boolean(100)",
        "iso2Code" => "=DE",
        "address2" => "unique()->sentence(2)",
        "zipCode" => "=10115",
        "city" => "=Berlin",
        "address1" => "unique()->sentence(2)",
        "uuid" => "unique()->uuid",
        "address3" => "unique()->sentence(2)",
        "phone" => "=1234567890",
        "comment" => "unique()->sentence(4)",
        "key" => "word",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'companyBusinessUnits' => 'CompanyBusinessUnitCollection',
        'company' => 'Company',
        'labelCollection' => 'CompanyUnitAddressLabelCollection',
    ];

    /**
     * @return \Generated\Shared\Transfer\CompanyUnitAddressTransfer
     */
    public function build(): CompanyUnitAddressTransfer
    {
        /** @var \Generated\Shared\Transfer\CompanyUnitAddressTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\CompanyUnitAddressTransfer
     */
    public function getTransfer(): CompanyUnitAddressTransfer
    {
        return new CompanyUnitAddressTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCompanyBusinessUnits($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('companyBusinessUnits', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('companyBusinessUnits', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCompanyBusinessUnits($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('companyBusinessUnits', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('companyBusinessUnits', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCompany($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('company', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('company', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCompany($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('company', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('company', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withLabelCollection($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('labelCollection', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('labelCollection', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherLabelCollection($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('labelCollection', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('labelCollection', $overrideOrBuilder, true);

        return $this;
    }
}
