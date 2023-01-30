<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\AddressTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class AddressBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "iso2Code" => "=DE",
        "state" => "country",
        "phone" => "e164PhoneNumber",
        "zipCode" => "postcode",
        "city" => "city",
        "company" => "company",
        "address3" => "address",
        "address2" => "address",
        "address1" => "address",
        "lastName" => "lastName",
        "firstName" => "firstName",
        "salutation" => "randomElement(['Mr', 'Mrs'])",
        "email" => "email",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'country' => 'Country',
    ];

    /**
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function build(): AddressTransfer
    {
        /** @var \Generated\Shared\Transfer\AddressTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function getTransfer(): AddressTransfer
    {
        return new AddressTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCountry($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('country', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('country', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCountry($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('country', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('country', $overrideOrBuilder, true);

        return $this;
    }
}
