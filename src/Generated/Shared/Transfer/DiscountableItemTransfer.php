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
class DiscountableItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const UNIT_PRICE = 'unitPrice';

    /**
     * @var string
     */
    public const ORIGINAL_ITEM_CALCULATED_DISCOUNTS = 'originalItemCalculatedDiscounts';

    /**
     * @var string
     */
    public const ORIGINAL_ITEM = 'originalItem';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @deprecated use unitPrice instead
     */
    public const UNIT_GROSS_PRICE = 'unitGrossPrice';

    /**
     * @var int|null
     */
    protected $unitPrice;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    protected $originalItemCalculatedDiscounts;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $originalItem;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $unitGrossPrice;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'unit_price' => 'unitPrice',
        'unitPrice' => 'unitPrice',
        'UnitPrice' => 'unitPrice',
        'original_item_calculated_discounts' => 'originalItemCalculatedDiscounts',
        'originalItemCalculatedDiscounts' => 'originalItemCalculatedDiscounts',
        'OriginalItemCalculatedDiscounts' => 'originalItemCalculatedDiscounts',
        'original_item' => 'originalItem',
        'originalItem' => 'originalItem',
        'OriginalItem' => 'originalItem',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'unit_gross_price' => 'unitGrossPrice',
        'unitGrossPrice' => 'unitGrossPrice',
        'UnitGrossPrice' => 'unitGrossPrice',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::UNIT_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORIGINAL_ITEM_CALCULATED_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\CalculatedDiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'original_item_calculated_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORIGINAL_ITEM => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'original_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_GROSS_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_gross_price',
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
     * @module DiscountPromotionWidget|CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @param int|null $unitPrice
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        $this->modifiedProperties[self::UNIT_PRICE] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @module DiscountPromotionWidget|CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @param int|null $unitPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitPriceOrFail($unitPrice)
    {
        if ($unitPrice === null) {
            $this->throwNullValueException(static::UNIT_PRICE);
        }

        return $this->setUnitPrice($unitPrice);
    }

    /**
     * @module DiscountPromotionWidget|CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitPriceOrFail()
    {
        if ($this->unitPrice === null) {
            $this->throwNullValueException(static::UNIT_PRICE);
        }

        return $this->unitPrice;
    }

    /**
     * @module DiscountPromotionWidget|CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitPrice()
    {
        $this->assertPropertyIsSet(self::UNIT_PRICE);

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[] $originalItemCalculatedDiscounts
     *
     * @return $this
     */
    public function setOriginalItemCalculatedDiscounts(ArrayObject $originalItemCalculatedDiscounts)
    {
        $this->originalItemCalculatedDiscounts = $originalItemCalculatedDiscounts;
        $this->modifiedProperties[self::ORIGINAL_ITEM_CALCULATED_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    public function getOriginalItemCalculatedDiscounts()
    {
        return $this->originalItemCalculatedDiscounts;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @param \Generated\Shared\Transfer\CalculatedDiscountTransfer $originalItemCalculatedDiscounts
     *
     * @return $this
     */
    public function addOriginalItemCalculatedDiscounts(CalculatedDiscountTransfer $originalItemCalculatedDiscounts)
    {
        $this->originalItemCalculatedDiscounts[] = $originalItemCalculatedDiscounts;
        $this->modifiedProperties[self::ORIGINAL_ITEM_CALCULATED_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOriginalItemCalculatedDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::ORIGINAL_ITEM_CALCULATED_DISCOUNTS);

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $originalItem
     *
     * @return $this
     */
    public function setOriginalItem(ItemTransfer $originalItem = null)
    {
        $this->originalItem = $originalItem;
        $this->modifiedProperties[self::ORIGINAL_ITEM] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getOriginalItem()
    {
        return $this->originalItem;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $originalItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOriginalItemOrFail(ItemTransfer $originalItem)
    {
        return $this->setOriginalItem($originalItem);
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getOriginalItemOrFail()
    {
        if ($this->originalItem === null) {
            $this->throwNullValueException(static::ORIGINAL_ITEM);
        }

        return $this->originalItem;
    }

    /**
     * @module CategoryDiscountConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|SalesQuantity|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOriginalItem()
    {
        $this->assertPropertyIsSet(self::ORIGINAL_ITEM);

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @deprecated use unitPrice instead
     *
     * @param int|null $unitGrossPrice
     *
     * @return $this
     */
    public function setUnitGrossPrice($unitGrossPrice)
    {
        $this->unitGrossPrice = $unitGrossPrice;
        $this->modifiedProperties[self::UNIT_GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @deprecated use unitPrice instead
     *
     * @return int|null
     */
    public function getUnitGrossPrice()
    {
        return $this->unitGrossPrice;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @deprecated use unitPrice instead
     *
     * @param int|null $unitGrossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitGrossPriceOrFail($unitGrossPrice)
    {
        if ($unitGrossPrice === null) {
            $this->throwNullValueException(static::UNIT_GROSS_PRICE);
        }

        return $this->setUnitGrossPrice($unitGrossPrice);
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated use unitPrice instead
     *
     * @return int
     */
    public function getUnitGrossPriceOrFail()
    {
        if ($this->unitGrossPrice === null) {
            $this->throwNullValueException(static::UNIT_GROSS_PRICE);
        }

        return $this->unitGrossPrice;
    }

    /**
     * @module DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated use unitPrice instead
     *
     * @return $this
     */
    public function requireUnitGrossPrice()
    {
        $this->assertPropertyIsSet(self::UNIT_GROSS_PRICE);

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
                case 'unitPrice':
                case 'quantity':
                case 'unitGrossPrice':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'originalItem':
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
                case 'originalItemCalculatedDiscounts':
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
                case 'unitPrice':
                case 'quantity':
                case 'unitGrossPrice':
                    $values[$arrayKey] = $value;

                    break;
                case 'originalItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'originalItemCalculatedDiscounts':
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
                case 'unitPrice':
                case 'quantity':
                case 'unitGrossPrice':
                    $values[$arrayKey] = $value;

                    break;
                case 'originalItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'originalItemCalculatedDiscounts':
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
        $this->originalItemCalculatedDiscounts = $this->originalItemCalculatedDiscounts ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'unitPrice' => $this->unitPrice,
            'quantity' => $this->quantity,
            'unitGrossPrice' => $this->unitGrossPrice,
            'originalItem' => $this->originalItem,
            'originalItemCalculatedDiscounts' => $this->originalItemCalculatedDiscounts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'unit_price' => $this->unitPrice,
            'quantity' => $this->quantity,
            'unit_gross_price' => $this->unitGrossPrice,
            'original_item' => $this->originalItem,
            'original_item_calculated_discounts' => $this->originalItemCalculatedDiscounts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'unit_price' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, false) : $this->unitPrice,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'unit_gross_price' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, false) : $this->unitGrossPrice,
            'original_item' => $this->originalItem instanceof AbstractTransfer ? $this->originalItem->toArray(true, false) : $this->originalItem,
            'original_item_calculated_discounts' => $this->originalItemCalculatedDiscounts instanceof AbstractTransfer ? $this->originalItemCalculatedDiscounts->toArray(true, false) : $this->addValuesToCollection($this->originalItemCalculatedDiscounts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'unitPrice' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, true) : $this->unitPrice,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'unitGrossPrice' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, true) : $this->unitGrossPrice,
            'originalItem' => $this->originalItem instanceof AbstractTransfer ? $this->originalItem->toArray(true, true) : $this->originalItem,
            'originalItemCalculatedDiscounts' => $this->originalItemCalculatedDiscounts instanceof AbstractTransfer ? $this->originalItemCalculatedDiscounts->toArray(true, true) : $this->addValuesToCollection($this->originalItemCalculatedDiscounts, true, true),
        ];
    }
}
