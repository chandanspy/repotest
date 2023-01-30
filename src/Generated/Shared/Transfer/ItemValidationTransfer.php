<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ItemValidationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ITEM = 'item';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var string
     */
    public const SUGGESTED_VALUES = 'suggestedValues';

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $item;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    protected $messages;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $suggestedValues;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'item' => 'item',
        'Item' => 'item',
        'messages' => 'messages',
        'Messages' => 'messages',
        'suggested_values' => 'suggestedValues',
        'suggestedValues' => 'suggestedValues',
        'SuggestedValues' => 'suggestedValues',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ITEM => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUGGESTED_VALUES => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'suggested_values',
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
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $item
     *
     * @return $this
     */
    public function setItem(ItemTransfer $item = null)
    {
        $this->item = $item;
        $this->modifiedProperties[self::ITEM] = true;

        return $this;
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $item
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemOrFail(ItemTransfer $item)
    {
        return $this->setItem($item);
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getItemOrFail()
    {
        if ($this->item === null) {
            $this->throwNullValueException(static::ITEM);
        }

        return $this->item;
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItem()
    {
        $this->assertPropertyIsSet(self::ITEM);

        return $this;
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[] $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(MessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module PriceProductStorage|ProductDiscontinuedStorage|ProductQuantityStorage|QuickOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

        return $this;
    }

    /**
     * @module ProductQuantityStorage|QuickOrder
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $suggestedValues
     *
     * @return $this
     */
    public function setSuggestedValues(ItemTransfer $suggestedValues = null)
    {
        $this->suggestedValues = $suggestedValues;
        $this->modifiedProperties[self::SUGGESTED_VALUES] = true;

        return $this;
    }

    /**
     * @module ProductQuantityStorage|QuickOrder
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getSuggestedValues()
    {
        return $this->suggestedValues;
    }

    /**
     * @module ProductQuantityStorage|QuickOrder
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $suggestedValues
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSuggestedValuesOrFail(ItemTransfer $suggestedValues)
    {
        return $this->setSuggestedValues($suggestedValues);
    }

    /**
     * @module ProductQuantityStorage|QuickOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getSuggestedValuesOrFail()
    {
        if ($this->suggestedValues === null) {
            $this->throwNullValueException(static::SUGGESTED_VALUES);
        }

        return $this->suggestedValues;
    }

    /**
     * @module ProductQuantityStorage|QuickOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuggestedValues()
    {
        $this->assertPropertyIsSet(self::SUGGESTED_VALUES);

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
                case 'item':
                case 'suggestedValues':
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
                case 'messages':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'item':
                case 'suggestedValues':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'messages':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'item':
                case 'suggestedValues':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'messages':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->messages = $this->messages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'item' => $this->item,
            'suggestedValues' => $this->suggestedValues,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'item' => $this->item,
            'suggested_values' => $this->suggestedValues,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'item' => $this->item instanceof AbstractTransfer ? $this->item->toArray(true, false) : $this->item,
            'suggested_values' => $this->suggestedValues instanceof AbstractTransfer ? $this->suggestedValues->toArray(true, false) : $this->suggestedValues,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'item' => $this->item instanceof AbstractTransfer ? $this->item->toArray(true, true) : $this->item,
            'suggestedValues' => $this->suggestedValues instanceof AbstractTransfer ? $this->suggestedValues->toArray(true, true) : $this->suggestedValues,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
        ];
    }
}
