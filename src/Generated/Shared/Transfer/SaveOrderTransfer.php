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
class SaveOrderTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const ID_SALES_ORDER = 'idSalesOrder';

    /**
     * @var string
     */
    public const ORDER_ITEMS = 'orderItems';

    /**
     * @var string
     */
    public const ORDER_EXPENSES = 'orderExpenses';

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var int|null
     */
    protected $idSalesOrder;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $orderItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    protected $orderExpenses;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'id_sales_order' => 'idSalesOrder',
        'idSalesOrder' => 'idSalesOrder',
        'IdSalesOrder' => 'idSalesOrder',
        'order_items' => 'orderItems',
        'orderItems' => 'orderItems',
        'OrderItems' => 'orderItems',
        'order_expenses' => 'orderExpenses',
        'orderExpenses' => 'orderExpenses',
        'OrderExpenses' => 'orderExpenses',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ORDER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_EXPENSES => [
            'type' => 'Generated\Shared\Transfer\ExpenseTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_expenses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Checkout|Payment|Sales|Shipment
     *
     * @param string|null $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        $this->modifiedProperties[self::ORDER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Checkout|Payment|Sales|Shipment
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Checkout|Payment|Sales|Shipment
     *
     * @param string|null $orderReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderReferenceOrFail($orderReference)
    {
        if ($orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->setOrderReference($orderReference);
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Checkout|Payment|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderReferenceOrFail()
    {
        if ($this->orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->orderReference;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Checkout|Payment|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderReference()
    {
        $this->assertPropertyIsSet(self::ORDER_REFERENCE);

        return $this;
    }

    /**
     * @module CustomerPage|CartNote|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|OrderCustomReference|Payment|ProductOption|SalesOrderThreshold|SalesPayment|Sales|Shipment
     *
     * @param int|null $idSalesOrder
     *
     * @return $this
     */
    public function setIdSalesOrder($idSalesOrder)
    {
        $this->idSalesOrder = $idSalesOrder;
        $this->modifiedProperties[self::ID_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CartNote|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|OrderCustomReference|Payment|ProductOption|SalesOrderThreshold|SalesPayment|Sales|Shipment
     *
     * @return int|null
     */
    public function getIdSalesOrder()
    {
        return $this->idSalesOrder;
    }

    /**
     * @module CustomerPage|CartNote|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|OrderCustomReference|Payment|ProductOption|SalesOrderThreshold|SalesPayment|Sales|Shipment
     *
     * @param int|null $idSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderOrFail($idSalesOrder)
    {
        if ($idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->setIdSalesOrder($idSalesOrder);
    }

    /**
     * @module CustomerPage|CartNote|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|OrderCustomReference|Payment|ProductOption|SalesOrderThreshold|SalesPayment|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderOrFail()
    {
        if ($this->idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->idSalesOrder;
    }

    /**
     * @module CustomerPage|CartNote|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|OrderCustomReference|Payment|ProductOption|SalesOrderThreshold|SalesPayment|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrder()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER);

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Discount|Oms|ProductBundle|ProductOption|Sales|Shipment
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[] $orderItems
     *
     * @return $this
     */
    public function setOrderItems(ArrayObject $orderItems)
    {
        $this->orderItems = $orderItems;
        $this->modifiedProperties[self::ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Discount|Oms|ProductBundle|ProductOption|Sales|Shipment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * @module CustomerPage|Checkout|Discount|Oms|ProductBundle|ProductOption|Sales|Shipment
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $orderItem
     *
     * @return $this
     */
    public function addOrderItem(ItemTransfer $orderItem)
    {
        $this->orderItems[] = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Discount|Oms|ProductBundle|ProductOption|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItems()
    {
        $this->assertCollectionPropertyIsSet(self::ORDER_ITEMS);

        return $this;
    }

    /**
     * @module Discount|SalesOrderThreshold|Shipment
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[] $orderExpenses
     *
     * @return $this
     */
    public function setOrderExpenses(ArrayObject $orderExpenses)
    {
        $this->orderExpenses = $orderExpenses;
        $this->modifiedProperties[self::ORDER_EXPENSES] = true;

        return $this;
    }

    /**
     * @module Discount|SalesOrderThreshold|Shipment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    public function getOrderExpenses()
    {
        return $this->orderExpenses;
    }

    /**
     * @module Discount|SalesOrderThreshold|Shipment
     *
     * @param \Generated\Shared\Transfer\ExpenseTransfer $orderExpense
     *
     * @return $this
     */
    public function addOrderExpense(ExpenseTransfer $orderExpense)
    {
        $this->orderExpenses[] = $orderExpense;
        $this->modifiedProperties[self::ORDER_EXPENSES] = true;

        return $this;
    }

    /**
     * @module Discount|SalesOrderThreshold|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderExpenses()
    {
        $this->assertCollectionPropertyIsSet(self::ORDER_EXPENSES);

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
                case 'orderReference':
                case 'idSalesOrder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'orderItems':
                case 'orderExpenses':
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
                case 'orderReference':
                case 'idSalesOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItems':
                case 'orderExpenses':
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
                case 'orderReference':
                case 'idSalesOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItems':
                case 'orderExpenses':
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
        $this->orderItems = $this->orderItems ?: new ArrayObject();
        $this->orderExpenses = $this->orderExpenses ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'orderReference' => $this->orderReference,
            'idSalesOrder' => $this->idSalesOrder,
            'orderItems' => $this->orderItems,
            'orderExpenses' => $this->orderExpenses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'order_reference' => $this->orderReference,
            'id_sales_order' => $this->idSalesOrder,
            'order_items' => $this->orderItems,
            'order_expenses' => $this->orderExpenses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'id_sales_order' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, false) : $this->idSalesOrder,
            'order_items' => $this->orderItems instanceof AbstractTransfer ? $this->orderItems->toArray(true, false) : $this->addValuesToCollection($this->orderItems, true, false),
            'order_expenses' => $this->orderExpenses instanceof AbstractTransfer ? $this->orderExpenses->toArray(true, false) : $this->addValuesToCollection($this->orderExpenses, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'idSalesOrder' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, true) : $this->idSalesOrder,
            'orderItems' => $this->orderItems instanceof AbstractTransfer ? $this->orderItems->toArray(true, true) : $this->addValuesToCollection($this->orderItems, true, true),
            'orderExpenses' => $this->orderExpenses instanceof AbstractTransfer ? $this->orderExpenses->toArray(true, true) : $this->addValuesToCollection($this->orderExpenses, true, true),
        ];
    }
}
