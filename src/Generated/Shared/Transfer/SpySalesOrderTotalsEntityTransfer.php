<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesOrderTotalsEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_TOTALS = 'idSalesOrderTotals';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const CANCELED_TOTAL = 'canceledTotal';

    /**
     * @var string
     */
    public const DISCOUNT_TOTAL = 'discountTotal';

    /**
     * @var string
     */
    public const GRAND_TOTAL = 'grandTotal';

    /**
     * @var string
     */
    public const ORDER_EXPENSE_TOTAL = 'orderExpenseTotal';

    /**
     * @var string
     */
    public const REFUND_TOTAL = 'refundTotal';

    /**
     * @var string
     */
    public const SUBTOTAL = 'subtotal';

    /**
     * @var string
     */
    public const TAX_TOTAL = 'taxTotal';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var integer|null
     */
    protected $idSalesOrderTotals;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var integer|null
     */
    protected $canceledTotal;

    /**
     * @var integer|null
     */
    protected $discountTotal;

    /**
     * @var integer|null
     */
    protected $grandTotal;

    /**
     * @var integer|null
     */
    protected $orderExpenseTotal;

    /**
     * @var integer|null
     */
    protected $refundTotal;

    /**
     * @var integer|null
     */
    protected $subtotal;

    /**
     * @var integer|null
     */
    protected $taxTotal;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_totals' => 'idSalesOrderTotals',
        'idSalesOrderTotals' => 'idSalesOrderTotals',
        'IdSalesOrderTotals' => 'idSalesOrderTotals',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'canceled_total' => 'canceledTotal',
        'canceledTotal' => 'canceledTotal',
        'CanceledTotal' => 'canceledTotal',
        'discount_total' => 'discountTotal',
        'discountTotal' => 'discountTotal',
        'DiscountTotal' => 'discountTotal',
        'grand_total' => 'grandTotal',
        'grandTotal' => 'grandTotal',
        'GrandTotal' => 'grandTotal',
        'order_expense_total' => 'orderExpenseTotal',
        'orderExpenseTotal' => 'orderExpenseTotal',
        'OrderExpenseTotal' => 'orderExpenseTotal',
        'refund_total' => 'refundTotal',
        'refundTotal' => 'refundTotal',
        'RefundTotal' => 'refundTotal',
        'subtotal' => 'subtotal',
        'Subtotal' => 'subtotal',
        'tax_total' => 'taxTotal',
        'taxTotal' => 'taxTotal',
        'TaxTotal' => 'taxTotal',
        'order' => 'order',
        'Order' => 'order',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_TOTALS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_totals',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CANCELED_TOTAL => [
            'type' => 'integer',
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
        self::DISCOUNT_TOTAL => [
            'type' => 'integer',
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
        self::GRAND_TOTAL => [
            'type' => 'integer',
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
        self::ORDER_EXPENSE_TOTAL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'order_expense_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFUND_TOTAL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'refund_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUBTOTAL => [
            'type' => 'integer',
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
        self::TAX_TOTAL => [
            'type' => 'integer',
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
        self::ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'order',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesOrderTotals';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderTotals
     *
     * @return $this
     */
    public function setIdSalesOrderTotals($idSalesOrderTotals)
    {
        $this->idSalesOrderTotals = $idSalesOrderTotals;
        $this->modifiedProperties[self::ID_SALES_ORDER_TOTALS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderTotals()
    {
        return $this->idSalesOrderTotals;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderTotals
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderTotalsOrFail($idSalesOrderTotals)
    {
        if ($idSalesOrderTotals === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_TOTALS);
        }

        return $this->setIdSalesOrderTotals($idSalesOrderTotals);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderTotalsOrFail()
    {
        if ($this->idSalesOrderTotals === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_TOTALS);
        }

        return $this->idSalesOrderTotals;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderTotals()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_TOTALS);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $canceledTotal
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
     * @module 
     *
     * @return integer|null
     */
    public function getCanceledTotal()
    {
        return $this->canceledTotal;
    }

    /**
     * @module 
     *
     * @param integer|null $canceledTotal
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getCanceledTotalOrFail()
    {
        if ($this->canceledTotal === null) {
            $this->throwNullValueException(static::CANCELED_TOTAL);
        }

        return $this->canceledTotal;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $discountTotal
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
     * @module 
     *
     * @return integer|null
     */
    public function getDiscountTotal()
    {
        return $this->discountTotal;
    }

    /**
     * @module 
     *
     * @param integer|null $discountTotal
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDiscountTotalOrFail()
    {
        if ($this->discountTotal === null) {
            $this->throwNullValueException(static::DISCOUNT_TOTAL);
        }

        return $this->discountTotal;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $grandTotal
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
     * @module 
     *
     * @return integer|null
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * @module 
     *
     * @param integer|null $grandTotal
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getGrandTotalOrFail()
    {
        if ($this->grandTotal === null) {
            $this->throwNullValueException(static::GRAND_TOTAL);
        }

        return $this->grandTotal;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $orderExpenseTotal
     *
     * @return $this
     */
    public function setOrderExpenseTotal($orderExpenseTotal)
    {
        $this->orderExpenseTotal = $orderExpenseTotal;
        $this->modifiedProperties[self::ORDER_EXPENSE_TOTAL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getOrderExpenseTotal()
    {
        return $this->orderExpenseTotal;
    }

    /**
     * @module 
     *
     * @param integer|null $orderExpenseTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderExpenseTotalOrFail($orderExpenseTotal)
    {
        if ($orderExpenseTotal === null) {
            $this->throwNullValueException(static::ORDER_EXPENSE_TOTAL);
        }

        return $this->setOrderExpenseTotal($orderExpenseTotal);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getOrderExpenseTotalOrFail()
    {
        if ($this->orderExpenseTotal === null) {
            $this->throwNullValueException(static::ORDER_EXPENSE_TOTAL);
        }

        return $this->orderExpenseTotal;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderExpenseTotal()
    {
        $this->assertPropertyIsSet(self::ORDER_EXPENSE_TOTAL);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $refundTotal
     *
     * @return $this
     */
    public function setRefundTotal($refundTotal)
    {
        $this->refundTotal = $refundTotal;
        $this->modifiedProperties[self::REFUND_TOTAL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getRefundTotal()
    {
        return $this->refundTotal;
    }

    /**
     * @module 
     *
     * @param integer|null $refundTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundTotalOrFail($refundTotal)
    {
        if ($refundTotal === null) {
            $this->throwNullValueException(static::REFUND_TOTAL);
        }

        return $this->setRefundTotal($refundTotal);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getRefundTotalOrFail()
    {
        if ($this->refundTotal === null) {
            $this->throwNullValueException(static::REFUND_TOTAL);
        }

        return $this->refundTotal;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundTotal()
    {
        $this->assertPropertyIsSet(self::REFUND_TOTAL);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $subtotal
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
     * @module 
     *
     * @return integer|null
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @module 
     *
     * @param integer|null $subtotal
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getSubtotalOrFail()
    {
        if ($this->subtotal === null) {
            $this->throwNullValueException(static::SUBTOTAL);
        }

        return $this->subtotal;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $taxTotal
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
     * @module 
     *
     * @return integer|null
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @module 
     *
     * @param integer|null $taxTotal
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getTaxTotalOrFail()
    {
        if ($this->taxTotal === null) {
            $this->throwNullValueException(static::TAX_TOTAL);
        }

        return $this->taxTotal;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $order
     *
     * @return $this
     */
    public function setOrder(SpySalesOrderEntityTransfer $order = null)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail(SpySalesOrderEntityTransfer $order)
    {
        return $this->setOrder($order);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

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
                case 'idSalesOrderTotals':
                case 'fkSalesOrder':
                case 'canceledTotal':
                case 'discountTotal':
                case 'grandTotal':
                case 'orderExpenseTotal':
                case 'refundTotal':
                case 'subtotal':
                case 'taxTotal':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'order':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idSalesOrderTotals':
                case 'fkSalesOrder':
                case 'canceledTotal':
                case 'discountTotal':
                case 'grandTotal':
                case 'orderExpenseTotal':
                case 'refundTotal':
                case 'subtotal':
                case 'taxTotal':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
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
                case 'idSalesOrderTotals':
                case 'fkSalesOrder':
                case 'canceledTotal':
                case 'discountTotal':
                case 'grandTotal':
                case 'orderExpenseTotal':
                case 'refundTotal':
                case 'subtotal':
                case 'taxTotal':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
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
            'idSalesOrderTotals' => $this->idSalesOrderTotals,
            'fkSalesOrder' => $this->fkSalesOrder,
            'canceledTotal' => $this->canceledTotal,
            'discountTotal' => $this->discountTotal,
            'grandTotal' => $this->grandTotal,
            'orderExpenseTotal' => $this->orderExpenseTotal,
            'refundTotal' => $this->refundTotal,
            'subtotal' => $this->subtotal,
            'taxTotal' => $this->taxTotal,
            'order' => $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_totals' => $this->idSalesOrderTotals,
            'fk_sales_order' => $this->fkSalesOrder,
            'canceled_total' => $this->canceledTotal,
            'discount_total' => $this->discountTotal,
            'grand_total' => $this->grandTotal,
            'order_expense_total' => $this->orderExpenseTotal,
            'refund_total' => $this->refundTotal,
            'subtotal' => $this->subtotal,
            'tax_total' => $this->taxTotal,
            'order' => $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_totals' => $this->idSalesOrderTotals instanceof AbstractTransfer ? $this->idSalesOrderTotals->toArray(true, false) : $this->idSalesOrderTotals,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'canceled_total' => $this->canceledTotal instanceof AbstractTransfer ? $this->canceledTotal->toArray(true, false) : $this->canceledTotal,
            'discount_total' => $this->discountTotal instanceof AbstractTransfer ? $this->discountTotal->toArray(true, false) : $this->discountTotal,
            'grand_total' => $this->grandTotal instanceof AbstractTransfer ? $this->grandTotal->toArray(true, false) : $this->grandTotal,
            'order_expense_total' => $this->orderExpenseTotal instanceof AbstractTransfer ? $this->orderExpenseTotal->toArray(true, false) : $this->orderExpenseTotal,
            'refund_total' => $this->refundTotal instanceof AbstractTransfer ? $this->refundTotal->toArray(true, false) : $this->refundTotal,
            'subtotal' => $this->subtotal instanceof AbstractTransfer ? $this->subtotal->toArray(true, false) : $this->subtotal,
            'tax_total' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, false) : $this->taxTotal,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderTotals' => $this->idSalesOrderTotals instanceof AbstractTransfer ? $this->idSalesOrderTotals->toArray(true, true) : $this->idSalesOrderTotals,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'canceledTotal' => $this->canceledTotal instanceof AbstractTransfer ? $this->canceledTotal->toArray(true, true) : $this->canceledTotal,
            'discountTotal' => $this->discountTotal instanceof AbstractTransfer ? $this->discountTotal->toArray(true, true) : $this->discountTotal,
            'grandTotal' => $this->grandTotal instanceof AbstractTransfer ? $this->grandTotal->toArray(true, true) : $this->grandTotal,
            'orderExpenseTotal' => $this->orderExpenseTotal instanceof AbstractTransfer ? $this->orderExpenseTotal->toArray(true, true) : $this->orderExpenseTotal,
            'refundTotal' => $this->refundTotal instanceof AbstractTransfer ? $this->refundTotal->toArray(true, true) : $this->refundTotal,
            'subtotal' => $this->subtotal instanceof AbstractTransfer ? $this->subtotal->toArray(true, true) : $this->subtotal,
            'taxTotal' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, true) : $this->taxTotal,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
        ];
    }
}
