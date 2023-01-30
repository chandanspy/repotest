<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\FileInfoTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class FileInfoBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "extension" => "=txt",
        "size" => "10",
        "type" => "=text",
        "fkFile" => "1",
        "version" => "=1",
        "storageName" => "=file",
        "storageFileName" => "=file",
        "versionName" => "=v1",
        "createdAt" => "=date('Y-m-d', '-1 year')",
        "updatedAt" => "=date('Y-m-d', '-1 year')",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'localizedAttributes' => 'FileInfoLocalizedAttributes',
    ];

    /**
     * @return \Generated\Shared\Transfer\FileInfoTransfer
     */
    public function build(): FileInfoTransfer
    {
        /** @var \Generated\Shared\Transfer\FileInfoTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\FileInfoTransfer
     */
    public function getTransfer(): FileInfoTransfer
    {
        return new FileInfoTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withLocalizedAttributes($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('localizedAttributes', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('localizedAttributes', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherLocalizedAttributes($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('localizedAttributes', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('localizedAttributes', $overrideOrBuilder, true);

        return $this;
    }
}
