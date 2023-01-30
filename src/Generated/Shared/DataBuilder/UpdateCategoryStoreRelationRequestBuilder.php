<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\UpdateCategoryStoreRelationRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class UpdateCategoryStoreRelationRequestBuilder extends AbstractDataBuilder
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
        'newStoreAssignment' => 'StoreRelation',
        'currentStoreAssignment' => 'StoreRelation',
    ];

    /**
     * @return \Generated\Shared\Transfer\UpdateCategoryStoreRelationRequestTransfer
     */
    public function build(): UpdateCategoryStoreRelationRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\UpdateCategoryStoreRelationRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\UpdateCategoryStoreRelationRequestTransfer
     */
    public function getTransfer(): UpdateCategoryStoreRelationRequestTransfer
    {
        return new UpdateCategoryStoreRelationRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withNewStoreAssignment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('newStoreAssignment', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('newStoreAssignment', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherNewStoreAssignment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('newStoreAssignment', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('newStoreAssignment', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCurrentStoreAssignment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('currentStoreAssignment', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('currentStoreAssignment', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCurrentStoreAssignment($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('currentStoreAssignment', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('currentStoreAssignment', $overrideOrBuilder, true);

        return $this;
    }
}
