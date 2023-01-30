<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ResourceShareTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ResourceShareBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "resourceType" => "unique()->sentence(2)",
        "customerReference" => "unique()->sentence(4)",
        "expiryDate" => "dateTimeBetween('now', '+1 year')->format('Y-m-d')",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'resourceShareData' => 'ResourceShareData',
    ];

    /**
     * @return \Generated\Shared\Transfer\ResourceShareTransfer
     */
    public function build(): ResourceShareTransfer
    {
        /** @var \Generated\Shared\Transfer\ResourceShareTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ResourceShareTransfer
     */
    public function getTransfer(): ResourceShareTransfer
    {
        return new ResourceShareTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withResourceShareData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('resourceShareData', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('resourceShareData', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherResourceShareData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('resourceShareData', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('resourceShareData', $overrideOrBuilder, true);

        return $this;
    }
}
