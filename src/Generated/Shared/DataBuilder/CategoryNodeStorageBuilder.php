<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\CategoryNodeStorageTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CategoryNodeStorageBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "isActive" => "boolean(100)",
        "url" => "unique()->sentence(2)",
        "name" => "unique()->sentence(2)",
        "idCategory" => "=",
        "metaTitle" => "unique()->sentence(2)",
        "metaDescription" => "unique()->sentence(2)",
        "metaKeywords" => "unique()->sentence(2)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'children' => 'CategoryNodeStorage',
        'parents' => 'CategoryNodeStorage',
    ];

    /**
     * @return \Generated\Shared\Transfer\CategoryNodeStorageTransfer
     */
    public function build(): CategoryNodeStorageTransfer
    {
        /** @var \Generated\Shared\Transfer\CategoryNodeStorageTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\CategoryNodeStorageTransfer
     */
    public function getTransfer(): CategoryNodeStorageTransfer
    {
        return new CategoryNodeStorageTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withChildren($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('children', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('children', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherChildren($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('children', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('children', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withParents($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('parents', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('parents', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherParents($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('parents', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('parents', $overrideOrBuilder, true);

        return $this;
    }
}
