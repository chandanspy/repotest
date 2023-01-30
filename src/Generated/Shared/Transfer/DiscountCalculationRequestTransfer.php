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
class DiscountCalculationRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DISCOUNTABLE_ITEMS = 'discountableItems';

    /**
     * @var string
     */
    public const DISCOUNT = 'discount';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DiscountableItemTransfer[]
     */
    protected $discountableItems;

    /**
     * @var \Generated\Shared\Transfer\DiscountTransfer|null
     */
    protected $discount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'discountable_items' => 'discountableItems',
        'discountableItems' => 'discountableItems',
        'DiscountableItems' => 'discountableItems',
        'discount' => 'discount',
        'Discount' => 'discount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DISCOUNTABLE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\DiscountableItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'discountable_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT => [
            'type' => 'Generated\Shared\Transfer\DiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount',
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
     * @module DiscountPromotionWidget|Discount
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\DiscountableItemTransfer[] $discountableItems
     *
     * @return $this
     */
    public function setDiscountableItems(ArrayObject $discountableItems)
    {
        $this->discountableItems = $discountableItems;
        $this->modifiedProperties[self::DISCOUNTABLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DiscountableItemTransfer[]
     */
    public function getDiscountableItems()
    {
        return $this->discountableItems;
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountableItemTransfer $discountableItem
     *
     * @return $this
     */
    public function addDiscountableItem(DiscountableItemTransfer $discountableItem)
    {
        $this->discountableItems[] = $discountableItem;
        $this->modifiedProperties[self::DISCOUNTABLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountableItems()
    {
        $this->assertCollectionPropertyIsSet(self::DISCOUNTABLE_ITEMS);

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer|null $discount
     *
     * @return $this
     */
    public function setDiscount(DiscountTransfer $discount = null)
    {
        $this->discount = $discount;
        $this->modifiedProperties[self::DISCOUNT] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @return \Generated\Shared\Transfer\DiscountTransfer|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer $discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountOrFail(DiscountTransfer $discount)
    {
        return $this->setDiscount($discount);
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountTransfer
     */
    public function getDiscountOrFail()
    {
        if ($this->discount === null) {
            $this->throwNullValueException(static::DISCOUNT);
        }

        return $this->discount;
    }

    /**
     * @module DiscountPromotionWidget|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscount()
    {
        $this->assertPropertyIsSet(self::DISCOUNT);

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
                case 'discount':
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
                case 'discountableItems':
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
                case 'discount':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'discountableItems':
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
                case 'discount':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'discountableItems':
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
        $this->discountableItems = $this->discountableItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'discount' => $this->discount,
            'discountableItems' => $this->discountableItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'discount' => $this->discount,
            'discountable_items' => $this->discountableItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, false) : $this->discount,
            'discountable_items' => $this->discountableItems instanceof AbstractTransfer ? $this->discountableItems->toArray(true, false) : $this->addValuesToCollection($this->discountableItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, true) : $this->discount,
            'discountableItems' => $this->discountableItems instanceof AbstractTransfer ? $this->discountableItems->toArray(true, true) : $this->addValuesToCollection($this->discountableItems, true, true),
        ];
    }
}
