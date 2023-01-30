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
class RestOrderTotalsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EXPENSE_TOTAL = 'expenseTotal';

    /**
     * @var string
     */
    public const DISCOUNT_TOTAL = 'discountTotal';

    /**
     * @var string
     */
    public const TAX_TOTAL = 'taxTotal';

    /**
     * @var string
     */
    public const SUBTOTAL = 'subtotal';

    /**
     * @var string
     */
    public const GRAND_TOTAL = 'grandTotal';

    /**
     * @var string
     */
    public const CANCELED_TOTAL = 'canceledTotal';

    /**
     * @var string
     */
    public const REMUNERATION_TOTAL = 'remunerationTotal';

    /**
     * @var int|null
     */
    protected $expenseTotal;

    /**
     * @var int|null
     */
    protected $discountTotal;

    /**
     * @var int|null
     */
    protected $taxTotal;

    /**
     * @var int|null
     */
    protected $subtotal;

    /**
     * @var int|null
     */
    protected $grandTotal;

    /**
     * @var int|null
     */
    protected $canceledTotal;

    /**
     * @var int|null
     */
    protected $remunerationTotal;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'expense_total' => 'expenseTotal',
        'expenseTotal' => 'expenseTotal',
        'ExpenseTotal' => 'expenseTotal',
        'discount_total' => 'discountTotal',
        'discountTotal' => 'discountTotal',
        'DiscountTotal' => 'discountTotal',
        'tax_total' => 'taxTotal',
        'taxTotal' => 'taxTotal',
        'TaxTotal' => 'taxTotal',
        'subtotal' => 'subtotal',
        'Subtotal' => 'subtotal',
        'grand_total' => 'grandTotal',
        'grandTotal' => 'grandTotal',
        'GrandTotal' => 'grandTotal',
        'canceled_total' => 'canceledTotal',
        'canceledTotal' => 'canceledTotal',
        'CanceledTotal' => 'canceledTotal',
        'remuneration_total' => 'remunerationTotal',
        'remunerationTotal' => 'remunerationTotal',
        'RemunerationTotal' => 'remunerationTotal',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::EXPENSE_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'expense_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'discount_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'tax_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUBTOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'subtotal',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GRAND_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'grand_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CANCELED_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'canceled_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REMUNERATION_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'remuneration_total',
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
     * @module OrdersRestApi
     *
     * @param int|null $expenseTotal
     *
     * @return $this
     */
    public function setExpenseTotal($expenseTotal)
    {
        $this->expenseTotal = $expenseTotal;
        $this->modifiedProperties[self::EXPENSE_TOTAL] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getExpenseTotal()
    {
        return $this->expenseTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $expenseTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpenseTotalOrFail($expenseTotal)
    {
        if ($expenseTotal === null) {
            $this->throwNullValueException(static::EXPENSE_TOTAL);
        }

        return $this->setExpenseTotal($expenseTotal);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getExpenseTotalOrFail()
    {
        if ($this->expenseTotal === null) {
            $this->throwNullValueException(static::EXPENSE_TOTAL);
        }

        return $this->expenseTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpenseTotal()
    {
        $this->assertPropertyIsSet(self::EXPENSE_TOTAL);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $discountTotal
     *
     * @return $this
     */
    public function setDiscountTotal($discountTotal)
    {
        $this->discountTotal = $discountTotal;
        $this->modifiedProperties[self::DISCOUNT_TOTAL] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getDiscountTotal()
    {
        return $this->discountTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $discountTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountTotalOrFail($discountTotal)
    {
        if ($discountTotal === null) {
            $this->throwNullValueException(static::DISCOUNT_TOTAL);
        }

        return $this->setDiscountTotal($discountTotal);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDiscountTotalOrFail()
    {
        if ($this->discountTotal === null) {
            $this->throwNullValueException(static::DISCOUNT_TOTAL);
        }

        return $this->discountTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountTotal()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_TOTAL);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $taxTotal
     *
     * @return $this
     */
    public function setTaxTotal($taxTotal)
    {
        $this->taxTotal = $taxTotal;
        $this->modifiedProperties[self::TAX_TOTAL] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $taxTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxTotalOrFail($taxTotal)
    {
        if ($taxTotal === null) {
            $this->throwNullValueException(static::TAX_TOTAL);
        }

        return $this->setTaxTotal($taxTotal);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTaxTotalOrFail()
    {
        if ($this->taxTotal === null) {
            $this->throwNullValueException(static::TAX_TOTAL);
        }

        return $this->taxTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxTotal()
    {
        $this->assertPropertyIsSet(self::TAX_TOTAL);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        $this->modifiedProperties[self::SUBTOTAL] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $subtotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubtotalOrFail($subtotal)
    {
        if ($subtotal === null) {
            $this->throwNullValueException(static::SUBTOTAL);
        }

        return $this->setSubtotal($subtotal);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSubtotalOrFail()
    {
        if ($this->subtotal === null) {
            $this->throwNullValueException(static::SUBTOTAL);
        }

        return $this->subtotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubtotal()
    {
        $this->assertPropertyIsSet(self::SUBTOTAL);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $grandTotal
     *
     * @return $this
     */
    public function setGrandTotal($grandTotal)
    {
        $this->grandTotal = $grandTotal;
        $this->modifiedProperties[self::GRAND_TOTAL] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $grandTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrandTotalOrFail($grandTotal)
    {
        if ($grandTotal === null) {
            $this->throwNullValueException(static::GRAND_TOTAL);
        }

        return $this->setGrandTotal($grandTotal);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getGrandTotalOrFail()
    {
        if ($this->grandTotal === null) {
            $this->throwNullValueException(static::GRAND_TOTAL);
        }

        return $this->grandTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrandTotal()
    {
        $this->assertPropertyIsSet(self::GRAND_TOTAL);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $canceledTotal
     *
     * @return $this
     */
    public function setCanceledTotal($canceledTotal)
    {
        $this->canceledTotal = $canceledTotal;
        $this->modifiedProperties[self::CANCELED_TOTAL] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getCanceledTotal()
    {
        return $this->canceledTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $canceledTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCanceledTotalOrFail($canceledTotal)
    {
        if ($canceledTotal === null) {
            $this->throwNullValueException(static::CANCELED_TOTAL);
        }

        return $this->setCanceledTotal($canceledTotal);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCanceledTotalOrFail()
    {
        if ($this->canceledTotal === null) {
            $this->throwNullValueException(static::CANCELED_TOTAL);
        }

        return $this->canceledTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCanceledTotal()
    {
        $this->assertPropertyIsSet(self::CANCELED_TOTAL);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $remunerationTotal
     *
     * @return $this
     */
    public function setRemunerationTotal($remunerationTotal)
    {
        $this->remunerationTotal = $remunerationTotal;
        $this->modifiedProperties[self::REMUNERATION_TOTAL] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getRemunerationTotal()
    {
        return $this->remunerationTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $remunerationTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRemunerationTotalOrFail($remunerationTotal)
    {
        if ($remunerationTotal === null) {
            $this->throwNullValueException(static::REMUNERATION_TOTAL);
        }

        return $this->setRemunerationTotal($remunerationTotal);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRemunerationTotalOrFail()
    {
        if ($this->remunerationTotal === null) {
            $this->throwNullValueException(static::REMUNERATION_TOTAL);
        }

        return $this->remunerationTotal;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRemunerationTotal()
    {
        $this->assertPropertyIsSet(self::REMUNERATION_TOTAL);

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
                case 'expenseTotal':
                case 'discountTotal':
                case 'taxTotal':
                case 'subtotal':
                case 'grandTotal':
                case 'canceledTotal':
                case 'remunerationTotal':
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
                case 'expenseTotal':
                case 'discountTotal':
                case 'taxTotal':
                case 'subtotal':
                case 'grandTotal':
                case 'canceledTotal':
                case 'remunerationTotal':
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
                case 'expenseTotal':
                case 'discountTotal':
                case 'taxTotal':
                case 'subtotal':
                case 'grandTotal':
                case 'canceledTotal':
                case 'remunerationTotal':
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
            'expenseTotal' => $this->expenseTotal,
            'discountTotal' => $this->discountTotal,
            'taxTotal' => $this->taxTotal,
            'subtotal' => $this->subtotal,
            'grandTotal' => $this->grandTotal,
            'canceledTotal' => $this->canceledTotal,
            'remunerationTotal' => $this->remunerationTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'expense_total' => $this->expenseTotal,
            'discount_total' => $this->discountTotal,
            'tax_total' => $this->taxTotal,
            'subtotal' => $this->subtotal,
            'grand_total' => $this->grandTotal,
            'canceled_total' => $this->canceledTotal,
            'remuneration_total' => $this->remunerationTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'expense_total' => $this->expenseTotal instanceof AbstractTransfer ? $this->expenseTotal->toArray(true, false) : $this->expenseTotal,
            'discount_total' => $this->discountTotal instanceof AbstractTransfer ? $this->discountTotal->toArray(true, false) : $this->discountTotal,
            'tax_total' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, false) : $this->taxTotal,
            'subtotal' => $this->subtotal instanceof AbstractTransfer ? $this->subtotal->toArray(true, false) : $this->subtotal,
            'grand_total' => $this->grandTotal instanceof AbstractTransfer ? $this->grandTotal->toArray(true, false) : $this->grandTotal,
            'canceled_total' => $this->canceledTotal instanceof AbstractTransfer ? $this->canceledTotal->toArray(true, false) : $this->canceledTotal,
            'remuneration_total' => $this->remunerationTotal instanceof AbstractTransfer ? $this->remunerationTotal->toArray(true, false) : $this->remunerationTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'expenseTotal' => $this->expenseTotal instanceof AbstractTransfer ? $this->expenseTotal->toArray(true, true) : $this->expenseTotal,
            'discountTotal' => $this->discountTotal instanceof AbstractTransfer ? $this->discountTotal->toArray(true, true) : $this->discountTotal,
            'taxTotal' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, true) : $this->taxTotal,
            'subtotal' => $this->subtotal instanceof AbstractTransfer ? $this->subtotal->toArray(true, true) : $this->subtotal,
            'grandTotal' => $this->grandTotal instanceof AbstractTransfer ? $this->grandTotal->toArray(true, true) : $this->grandTotal,
            'canceledTotal' => $this->canceledTotal instanceof AbstractTransfer ? $this->canceledTotal->toArray(true, true) : $this->canceledTotal,
            'remunerationTotal' => $this->remunerationTotal instanceof AbstractTransfer ? $this->remunerationTotal->toArray(true, true) : $this->remunerationTotal,
        ];
    }
}
