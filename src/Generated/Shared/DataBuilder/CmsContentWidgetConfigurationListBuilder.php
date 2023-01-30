<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\CmsContentWidgetConfigurationListTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CmsContentWidgetConfigurationListBuilder extends AbstractDataBuilder
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
        'cmsContentWidgetConfiguration' => 'CmsContentWidgetConfiguration',
    ];

    /**
     * @return \Generated\Shared\Transfer\CmsContentWidgetConfigurationListTransfer
     */
    public function build(): CmsContentWidgetConfigurationListTransfer
    {
        /** @var \Generated\Shared\Transfer\CmsContentWidgetConfigurationListTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\CmsContentWidgetConfigurationListTransfer
     */
    public function getTransfer(): CmsContentWidgetConfigurationListTransfer
    {
        return new CmsContentWidgetConfigurationListTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCmsContentWidgetConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('cmsContentWidgetConfiguration', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('cmsContentWidgetConfiguration', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCmsContentWidgetConfiguration($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('cmsContentWidgetConfiguration', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('cmsContentWidgetConfiguration', $overrideOrBuilder, true);

        return $this;
    }
}
