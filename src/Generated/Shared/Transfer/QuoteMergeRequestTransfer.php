<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class QuoteMergeRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TARGET_QUOTE = 'targetQuote';

    /**
     * @var string
     */
    public const SOURCE_QUOTE = 'sourceQuote';

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $targetQuote;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $sourceQuote;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'target_quote' => 'targetQuote',
        'targetQuote' => 'targetQuote',
        'TargetQuote' => 'targetQuote',
        'source_quote' => 'sourceQuote',
        'sourceQuote' => 'sourceQuote',
        'SourceQuote' => 'sourceQuote',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TARGET_QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'target_quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SOURCE_QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'source_quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module PersistentCart
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $targetQuote
     *
     * @return $this
     */
    public function setTargetQuote(QuoteTransfer $targetQuote = null)
    {
        $this->targetQuote = $targetQuote;
        $this->modifiedProperties[self::TARGET_QUOTE] = true;

        return $this;
    }

    /**
     * @module PersistentCart
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getTargetQuote()
    {
        return $this->targetQuote;
    }

    /**
     * @module PersistentCart
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $targetQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTargetQuoteOrFail(QuoteTransfer $targetQuote)
    {
        return $this->setTargetQuote($targetQuote);
    }

    /**
     * @module PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getTargetQuoteOrFail()
    {
        if ($this->targetQuote === null) {
            $this->throwNullValueException(static::TARGET_QUOTE);
        }

        return $this->targetQuote;
    }

    /**
     * @module PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTargetQuote()
    {
        $this->assertPropertyIsSet(self::TARGET_QUOTE);

        return $this;
    }

    /**
     * @module PersistentCart
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $sourceQuote
     *
     * @return $this
     */
    public function setSourceQuote(QuoteTransfer $sourceQuote = null)
    {
        $this->sourceQuote = $sourceQuote;
        $this->modifiedProperties[self::SOURCE_QUOTE] = true;

        return $this;
    }

    /**
     * @module PersistentCart
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getSourceQuote()
    {
        return $this->sourceQuote;
    }

    /**
     * @module PersistentCart
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $sourceQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceQuoteOrFail(QuoteTransfer $sourceQuote)
    {
        return $this->setSourceQuote($sourceQuote);
    }

    /**
     * @module PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getSourceQuoteOrFail()
    {
        if ($this->sourceQuote === null) {
            $this->throwNullValueException(static::SOURCE_QUOTE);
        }

        return $this->sourceQuote;
    }

    /**
     * @module PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourceQuote()
    {
        $this->assertPropertyIsSet(self::SOURCE_QUOTE);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'targetQuote':
                case 'sourceQuote':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'targetQuote':
                case 'sourceQuote':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'targetQuote':
                case 'sourceQuote':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'targetQuote' => $this->targetQuote,
            'sourceQuote' => $this->sourceQuote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'target_quote' => $this->targetQuote,
            'source_quote' => $this->sourceQuote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'target_quote' => $this->targetQuote instanceof AbstractTransfer ? $this->targetQuote->toArray(true, false) : $this->targetQuote,
            'source_quote' => $this->sourceQuote instanceof AbstractTransfer ? $this->sourceQuote->toArray(true, false) : $this->sourceQuote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'targetQuote' => $this->targetQuote instanceof AbstractTransfer ? $this->targetQuote->toArray(true, true) : $this->targetQuote,
            'sourceQuote' => $this->sourceQuote instanceof AbstractTransfer ? $this->sourceQuote->toArray(true, true) : $this->sourceQuote,
        ];
    }
}
