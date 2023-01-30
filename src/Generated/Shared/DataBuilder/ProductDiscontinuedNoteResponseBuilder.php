<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductDiscontinuedNoteResponseTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductDiscontinuedNoteResponseBuilder extends AbstractDataBuilder
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
        'productDiscontinuedNote' => 'ProductDiscontinuedNote',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductDiscontinuedNoteResponseTransfer
     */
    public function build(): ProductDiscontinuedNoteResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductDiscontinuedNoteResponseTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductDiscontinuedNoteResponseTransfer
     */
    public function getTransfer(): ProductDiscontinuedNoteResponseTransfer
    {
        return new ProductDiscontinuedNoteResponseTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductDiscontinuedNote($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productDiscontinuedNote', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productDiscontinuedNote', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductDiscontinuedNote($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productDiscontinuedNote', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productDiscontinuedNote', $overrideOrBuilder, true);

        return $this;
    }
}
