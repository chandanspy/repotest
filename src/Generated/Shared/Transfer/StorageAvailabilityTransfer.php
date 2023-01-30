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
class StorageAvailabilityTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONCRETE_PRODUCT_AVAILABLE_ITEMS = 'concreteProductAvailableItems';

    /**
     * @var string
     */
    public const IS_ABSTRACT_PRODUCT_AVAILABLE = 'isAbstractProductAvailable';

    /**
     * @var array
     */
    protected $concreteProductAvailableItems = [];

    /**
     * @var bool|null
     */
    protected $isAbstractProductAvailable;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'concrete_product_available_items' => 'concreteProductAvailableItems',
        'concreteProductAvailableItems' => 'concreteProductAvailableItems',
        'ConcreteProductAvailableItems' => 'concreteProductAvailableItems',
        'is_abstract_product_available' => 'isAbstractProductAvailable',
        'isAbstractProductAvailable' => 'isAbstractProductAvailable',
        'IsAbstractProductAvailable' => 'isAbstractProductAvailable',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONCRETE_PRODUCT_AVAILABLE_ITEMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'concrete_product_available_items',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ABSTRACT_PRODUCT_AVAILABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_abstract_product_available',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CartPage|CustomerReorderWidget|AvailabilityStorage|Availability|CartVariant
     *
     * @param array|null $concreteProductAvailableItems
     *
     * @return $this
     */
    public function setConcreteProductAvailableItems(array $concreteProductAvailableItems = null)
    {
        if ($concreteProductAvailableItems === null) {
            $concreteProductAvailableItems = [];
        }

        $this->concreteProductAvailableItems = $concreteProductAvailableItems;
        $this->modifiedProperties[self::CONCRETE_PRODUCT_AVAILABLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module CartPage|CustomerReorderWidget|AvailabilityStorage|Availability|CartVariant
     *
     * @return array
     */
    public function getConcreteProductAvailableItems()
    {
        return $this->concreteProductAvailableItems;
    }

    /**
     * @module CartPage|CustomerReorderWidget|AvailabilityStorage|Availability|CartVariant
     *
     * @param mixed $concreteProductAvailableItem
     *
     * @return $this
     */
    public function addConcreteProductAvailableItem($concreteProductAvailableItem)
    {
        $this->concreteProductAvailableItems[] = $concreteProductAvailableItem;
        $this->modifiedProperties[self::CONCRETE_PRODUCT_AVAILABLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module CartPage|CustomerReorderWidget|AvailabilityStorage|Availability|CartVariant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteProductAvailableItems()
    {
        $this->assertPropertyIsSet(self::CONCRETE_PRODUCT_AVAILABLE_ITEMS);

        return $this;
    }

    /**
     * @module AvailabilityStorage|Availability
     *
     * @param bool|null $isAbstractProductAvailable
     *
     * @return $this
     */
    public function setIsAbstractProductAvailable($isAbstractProductAvailable)
    {
        $this->isAbstractProductAvailable = $isAbstractProductAvailable;
        $this->modifiedProperties[self::IS_ABSTRACT_PRODUCT_AVAILABLE] = true;

        return $this;
    }

    /**
     * @module AvailabilityStorage|Availability
     *
     * @return bool|null
     */
    public function getIsAbstractProductAvailable()
    {
        return $this->isAbstractProductAvailable;
    }

    /**
     * @module AvailabilityStorage|Availability
     *
     * @param bool|null $isAbstractProductAvailable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAbstractProductAvailableOrFail($isAbstractProductAvailable)
    {
        if ($isAbstractProductAvailable === null) {
            $this->throwNullValueException(static::IS_ABSTRACT_PRODUCT_AVAILABLE);
        }

        return $this->setIsAbstractProductAvailable($isAbstractProductAvailable);
    }

    /**
     * @module AvailabilityStorage|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAbstractProductAvailableOrFail()
    {
        if ($this->isAbstractProductAvailable === null) {
            $this->throwNullValueException(static::IS_ABSTRACT_PRODUCT_AVAILABLE);
        }

        return $this->isAbstractProductAvailable;
    }

    /**
     * @module AvailabilityStorage|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAbstractProductAvailable()
    {
        $this->assertPropertyIsSet(self::IS_ABSTRACT_PRODUCT_AVAILABLE);

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
                case 'concreteProductAvailableItems':
                case 'isAbstractProductAvailable':
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
                case 'concreteProductAvailableItems':
                case 'isAbstractProductAvailable':
                    $values[$arrayKey] = $value;

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
                case 'concreteProductAvailableItems':
                case 'isAbstractProductAvailable':
                    $values[$arrayKey] = $value;

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
            'concreteProductAvailableItems' => $this->concreteProductAvailableItems,
            'isAbstractProductAvailable' => $this->isAbstractProductAvailable,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'concrete_product_available_items' => $this->concreteProductAvailableItems,
            'is_abstract_product_available' => $this->isAbstractProductAvailable,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'concrete_product_available_items' => $this->concreteProductAvailableItems instanceof AbstractTransfer ? $this->concreteProductAvailableItems->toArray(true, false) : $this->concreteProductAvailableItems,
            'is_abstract_product_available' => $this->isAbstractProductAvailable instanceof AbstractTransfer ? $this->isAbstractProductAvailable->toArray(true, false) : $this->isAbstractProductAvailable,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'concreteProductAvailableItems' => $this->concreteProductAvailableItems instanceof AbstractTransfer ? $this->concreteProductAvailableItems->toArray(true, true) : $this->concreteProductAvailableItems,
            'isAbstractProductAvailable' => $this->isAbstractProductAvailable instanceof AbstractTransfer ? $this->isAbstractProductAvailable->toArray(true, true) : $this->isAbstractProductAvailable,
        ];
    }
}
