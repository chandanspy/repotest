<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CmsBlockGlossaryPlaceholderBuilder extends AbstractDataBuilder
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
        'translation' => 'CmsBlockGlossaryPlaceholderTranslation',
    ];

    /**
     * @return \Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTransfer
     */
    public function build(): CmsBlockGlossaryPlaceholderTransfer
    {
        /** @var \Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTransfer
     */
    public function getTransfer(): CmsBlockGlossaryPlaceholderTransfer
    {
        return new CmsBlockGlossaryPlaceholderTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('translation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('translation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherTranslation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('translation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('translation', $overrideOrBuilder, true);

        return $this;
    }
}
