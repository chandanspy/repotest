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
class DiscountableItemTransformerTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DISCOUNTABLE_ITEM = 'discountableItem';

    /**
     * @var string
     */
    public const DISCOUNT = 'discount';

    /**
     * @var string
     */
    public const TOTAL_DISCOUNT_AMOUNT = 'totalDiscountAmount';

    /**
     * @var string
     */
    public const TOTAL_AMOUNT = 'totalAmount';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const ROUNDING_ERROR = 'roundingError';

    /**
     * @var \Generated\Shared\Transfer\DiscountableItemTransfer|null
     */
    protected $discountableItem;

    /**
     * @var \Generated\Shared\Transfer\DiscountTransfer|null
     */
    protected $discount;

    /**
     * @var int|null
     */
    protected $totalDiscountAmount;

    /**
     * @var int|null
     */
    protected $totalAmount;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var float|null
     */
    protected $roundingError;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'discountable_item' => 'discountableItem',
        'discountableItem' => 'discountableItem',
        'DiscountableItem' => 'discountableItem',
        'discount' => 'discount',
        'Discount' => 'discount',
        'total_discount_amount' => 'totalDiscountAmount',
        'totalDiscountAmount' => 'totalDiscountAmount',
        'TotalDiscountAmount' => 'totalDiscountAmount',
        'total_amount' => 'totalAmount',
        'totalAmount' => 'totalAmount',
        'TotalAmount' => 'totalAmount',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'rounding_error' => 'roundingError',
        'roundingError' => 'roundingError',
        'RoundingError' => 'roundingError',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DISCOUNTABLE_ITEM => [
            'type' => 'Generated\Shared\Transfer\DiscountableItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'discountable_item',
            'is_collection' => false,
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
        self::TOTAL_DISCOUNT_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total_discount_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TOTAL_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total_amount',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::ROUNDING_ERROR => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'rounding_error',
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
     * @module Discount|SalesQuantity
     *
     * @param \Generated\Shared\Transfer\DiscountableItemTransfer|null $discountableItem
     *
     * @return $this
     */
    public function setDiscountableItem(DiscountableItemTransfer $discountableItem = null)
    {
        $this->discountableItem = $discountableItem;
        $this->modifiedProperties[self::DISCOUNTABLE_ITEM] = true;

        return $this;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @return \Generated\Shared\Transfer\DiscountableItemTransfer|null
     */
    public function getDiscountableItem()
    {
        return $this->discountableItem;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @param \Generated\Shared\Transfer\DiscountableItemTransfer $discountableItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountableItemOrFail(DiscountableItemTransfer $discountableItem)
    {
        return $this->setDiscountableItem($discountableItem);
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountableItemTransfer
     */
    public function getDiscountableItemOrFail()
    {
        if ($this->discountableItem === null) {
            $this->throwNullValueException(static::DISCOUNTABLE_ITEM);
        }

        return $this->discountableItem;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountableItem()
    {
        $this->assertPropertyIsSet(self::DISCOUNTABLE_ITEM);

        return $this;
    }

    /**
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
     *
     * @return \Generated\Shared\Transfer\DiscountTransfer|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
     *
     * @param int|null $totalDiscountAmount
     *
     * @return $this
     */
    public function setTotalDiscountAmount($totalDiscountAmount)
    {
        $this->totalDiscountAmount = $totalDiscountAmount;
        $this->modifiedProperties[self::TOTAL_DISCOUNT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @return int|null
     */
    public function getTotalDiscountAmount()
    {
        return $this->totalDiscountAmount;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @param int|null $totalDiscountAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalDiscountAmountOrFail($totalDiscountAmount)
    {
        if ($totalDiscountAmount === null) {
            $this->throwNullValueException(static::TOTAL_DISCOUNT_AMOUNT);
        }

        return $this->setTotalDiscountAmount($totalDiscountAmount);
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTotalDiscountAmountOrFail()
    {
        if ($this->totalDiscountAmount === null) {
            $this->throwNullValueException(static::TOTAL_DISCOUNT_AMOUNT);
        }

        return $this->totalDiscountAmount;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotalDiscountAmount()
    {
        $this->assertPropertyIsSet(self::TOTAL_DISCOUNT_AMOUNT);

        return $this;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @param int|null $totalAmount
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        $this->modifiedProperties[self::TOTAL_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @param int|null $totalAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalAmountOrFail($totalAmount)
    {
        if ($totalAmount === null) {
            $this->throwNullValueException(static::TOTAL_AMOUNT);
        }

        return $this->setTotalAmount($totalAmount);
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTotalAmountOrFail()
    {
        if ($this->totalAmount === null) {
            $this->throwNullValueException(static::TOTAL_AMOUNT);
        }

        return $this->totalAmount;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotalAmount()
    {
        $this->assertPropertyIsSet(self::TOTAL_AMOUNT);

        return $this;
    }

    /**
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
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
     * @module Discount|SalesQuantity
     *
     * @param float|null $roundingError
     *
     * @return $this
     */
    public function setRoundingError($roundingError)
    {
        $this->roundingError = $roundingError;
        $this->modifiedProperties[self::ROUNDING_ERROR] = true;

        return $this;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @return float|null
     */
    public function getRoundingError()
    {
        return $this->roundingError;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @param float|null $roundingError
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRoundingErrorOrFail($roundingError)
    {
        if ($roundingError === null) {
            $this->throwNullValueException(static::ROUNDING_ERROR);
        }

        return $this->setRoundingError($roundingError);
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getRoundingErrorOrFail()
    {
        if ($this->roundingError === null) {
            $this->throwNullValueException(static::ROUNDING_ERROR);
        }

        return $this->roundingError;
    }

    /**
     * @module Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoundingError()
    {
        $this->assertPropertyIsSet(self::ROUNDING_ERROR);

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
                case 'totalDiscountAmount':
                case 'totalAmount':
                case 'quantity':
                case 'roundingError':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'discountableItem':
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
                case 'totalDiscountAmount':
                case 'totalAmount':
                case 'quantity':
                case 'roundingError':
                    $values[$arrayKey] = $value;

                    break;
                case 'discountableItem':
                case 'discount':
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
                case 'totalDiscountAmount':
                case 'totalAmount':
                case 'quantity':
                case 'roundingError':
                    $values[$arrayKey] = $value;

                    break;
                case 'discountableItem':
                case 'discount':
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
            'totalDiscountAmount' => $this->totalDiscountAmount,
            'totalAmount' => $this->totalAmount,
            'quantity' => $this->quantity,
            'roundingError' => $this->roundingError,
            'discountableItem' => $this->discountableItem,
            'discount' => $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'total_discount_amount' => $this->totalDiscountAmount,
            'total_amount' => $this->totalAmount,
            'quantity' => $this->quantity,
            'rounding_error' => $this->roundingError,
            'discountable_item' => $this->discountableItem,
            'discount' => $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'total_discount_amount' => $this->totalDiscountAmount instanceof AbstractTransfer ? $this->totalDiscountAmount->toArray(true, false) : $this->totalDiscountAmount,
            'total_amount' => $this->totalAmount instanceof AbstractTransfer ? $this->totalAmount->toArray(true, false) : $this->totalAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'rounding_error' => $this->roundingError instanceof AbstractTransfer ? $this->roundingError->toArray(true, false) : $this->roundingError,
            'discountable_item' => $this->discountableItem instanceof AbstractTransfer ? $this->discountableItem->toArray(true, false) : $this->discountableItem,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, false) : $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'totalDiscountAmount' => $this->totalDiscountAmount instanceof AbstractTransfer ? $this->totalDiscountAmount->toArray(true, true) : $this->totalDiscountAmount,
            'totalAmount' => $this->totalAmount instanceof AbstractTransfer ? $this->totalAmount->toArray(true, true) : $this->totalAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'roundingError' => $this->roundingError instanceof AbstractTransfer ? $this->roundingError->toArray(true, true) : $this->roundingError,
            'discountableItem' => $this->discountableItem instanceof AbstractTransfer ? $this->discountableItem->toArray(true, true) : $this->discountableItem,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, true) : $this->discount,
        ];
    }
}
