<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\CmsContentWidgetFunctionsTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CmsContentWidgetFunctionsBuilder extends AbstractDataBuilder
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
        'cmsContentWidgetFunction' => 'CmsContentWidgetFunction',
    ];

    /**
     * @return \Generated\Shared\Transfer\CmsContentWidgetFunctionsTransfer
     */
    public function build(): CmsContentWidgetFunctionsTransfer
    {
        /** @var \Generated\Shared\Transfer\CmsContentWidgetFunctionsTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\CmsContentWidgetFunctionsTransfer
     */
    public function getTransfer(): CmsContentWidgetFunctionsTransfer
    {
        return new CmsContentWidgetFunctionsTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCmsContentWidgetFunction($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('cmsContentWidgetFunction', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('cmsContentWidgetFunction', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCmsContentWidgetFunction($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('cmsContentWidgetFunction', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('cmsContentWidgetFunction', $overrideOrBuilder, true);

        return $this;
    }
}
