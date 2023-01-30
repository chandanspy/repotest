<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\PriceProductScheduleListImportErrorTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PriceProductScheduleListImportErrorBuilder extends AbstractDataBuilder
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
        'priceProductScheduleImport' => 'PriceProductScheduleImport',
    ];

    /**
     * @return \Generated\Shared\Transfer\PriceProductScheduleListImportErrorTransfer
     */
    public function build(): PriceProductScheduleListImportErrorTransfer
    {
        /** @var \Generated\Shared\Transfer\PriceProductScheduleListImportErrorTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\PriceProductScheduleListImportErrorTransfer
     */
    public function getTransfer(): PriceProductScheduleListImportErrorTransfer
    {
        return new PriceProductScheduleListImportErrorTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withPriceProductScheduleImport($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('priceProductScheduleImport', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('priceProductScheduleImport', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherPriceProductScheduleImport($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('priceProductScheduleImport', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('priceProductScheduleImport', $overrideOrBuilder, true);

        return $this;
    }
}
