<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\CmsBlockGlossaryTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CmsBlockGlossaryBuilder extends AbstractDataBuilder
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
        'glossaryPlaceholder' => 'CmsBlockGlossaryPlaceholder',
    ];

    /**
     * @return \Generated\Shared\Transfer\CmsBlockGlossaryTransfer
     */
    public function build(): CmsBlockGlossaryTransfer
    {
        /** @var \Generated\Shared\Transfer\CmsBlockGlossaryTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\CmsBlockGlossaryTransfer
     */
    public function getTransfer(): CmsBlockGlossaryTransfer
    {
        return new CmsBlockGlossaryTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withGlossaryPlaceholder($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('glossaryPlaceholder', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('glossaryPlaceholder', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherGlossaryPlaceholder($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('glossaryPlaceholder', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('glossaryPlaceholder', $overrideOrBuilder, true);

        return $this;
    }
}
