<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ContentTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ContentBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "name" => "unique()->sentence(5)",
        "description" => "unique()->sentence(5)",
        "contentTermKey" => "unique()->sentence(5)",
        "contentTypeKey" => "unique()->sentence(5)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'localizedContent' => 'LocalizedContent',
    ];

    /**
     * @return \Generated\Shared\Transfer\ContentTransfer
     */
    public function build(): ContentTransfer
    {
        /** @var \Generated\Shared\Transfer\ContentTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ContentTransfer
     */
    public function getTransfer(): ContentTransfer
    {
        return new ContentTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withLocalizedContent($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('localizedContent', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('localizedContent', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherLocalizedContent($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('localizedContent', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('localizedContent', $overrideOrBuilder, true);

        return $this;
    }
}
