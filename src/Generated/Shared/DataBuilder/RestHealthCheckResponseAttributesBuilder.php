<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RestHealthCheckResponseAttributesTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestHealthCheckResponseAttributesBuilder extends AbstractDataBuilder
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
        'healthCheckServiceResponse' => 'HealthCheckServiceResponse',
    ];

    /**
     * @return \Generated\Shared\Transfer\RestHealthCheckResponseAttributesTransfer
     */
    public function build(): RestHealthCheckResponseAttributesTransfer
    {
        /** @var \Generated\Shared\Transfer\RestHealthCheckResponseAttributesTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\RestHealthCheckResponseAttributesTransfer
     */
    public function getTransfer(): RestHealthCheckResponseAttributesTransfer
    {
        return new RestHealthCheckResponseAttributesTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withHealthCheckServiceResponse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('healthCheckServiceResponse', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('healthCheckServiceResponse', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherHealthCheckServiceResponse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('healthCheckServiceResponse', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('healthCheckServiceResponse', $overrideOrBuilder, true);

        return $this;
    }
}
