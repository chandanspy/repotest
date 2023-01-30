<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RestAddressTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestAddressBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "salutation" => "randomElement(['Mr', 'Mrs'])",
        "firstName" => "firstName",
        "lastName" => "lastName",
        "address1" => "address",
        "address2" => "address",
        "address3" => "address",
        "zipCode" => "postcode",
        "city" => "city",
        "iso2Code" => "=DE",
        "company" => "company",
        "idCompanyBusinessUnitAddress" => "unique()->uuid",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
    ];

    /**
     * @return \Generated\Shared\Transfer\RestAddressTransfer
     */
    public function build(): RestAddressTransfer
    {
        /** @var \Generated\Shared\Transfer\RestAddressTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\RestAddressTransfer
     */
    public function getTransfer(): RestAddressTransfer
    {
        return new RestAddressTransfer;
    }

}
