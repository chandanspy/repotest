<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ConfigurableBundleTemplatePageSearchCollectionTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ConfigurableBundleTemplatePageSearchCollectionBuilder extends AbstractDataBuilder
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
        'configurableBundleTemplatePageSearch' => 'ConfigurableBundleTemplatePageSearch',
    ];

    /**
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplatePageSearchCollectionTransfer
     */
    public function build(): ConfigurableBundleTemplatePageSearchCollectionTransfer
    {
        /** @var \Generated\Shared\Transfer\ConfigurableBundleTemplatePageSearchCollectionTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplatePageSearchCollectionTransfer
     */
    public function getTransfer(): ConfigurableBundleTemplatePageSearchCollectionTransfer
    {
        return new ConfigurableBundleTemplatePageSearchCollectionTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withConfigurableBundleTemplatePageSearch($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('configurableBundleTemplatePageSearch', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('configurableBundleTemplatePageSearch', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherConfigurableBundleTemplatePageSearch($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('configurableBundleTemplatePageSearch', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('configurableBundleTemplatePageSearch', $overrideOrBuilder, true);

        return $this;
    }
}
