<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\PriceProductScheduleImportTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PriceProductScheduleImportBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "netAmount" => "numberBetween(1000, 10000)",
        "grossAmount" => "numberBetween(1000, 10000)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'metaData' => 'PriceProductScheduleImportMetaData',
    ];

    /**
     * @return \Generated\Shared\Transfer\PriceProductScheduleImportTransfer
     */
    public function build(): PriceProductScheduleImportTransfer
    {
        /** @var \Generated\Shared\Transfer\PriceProductScheduleImportTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\PriceProductScheduleImportTransfer
     */
    public function getTransfer(): PriceProductScheduleImportTransfer
    {
        return new PriceProductScheduleImportTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withMetaData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('metaData', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('metaData', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherMetaData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('metaData', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('metaData', $overrideOrBuilder, true);

        return $this;
    }
}
