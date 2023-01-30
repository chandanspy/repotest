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
class OrderItemFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_IDS = 'salesOrderItemIds';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_UUIDS = 'salesOrderItemUuids';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCES = 'customerReferences';

    /**
     * @var string
     */
    public const ORDER_REFERENCES = 'orderReferences';

    /**
     * @var string
     */
    public const ITEM_STATES = 'itemStates';

    /**
     * @var string
     */
    public const SALES_ORDER_IDS = 'salesOrderIds';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var int[]
     */
    protected $salesOrderItemIds = [];

    /**
     * @var string[]
     */
    protected $salesOrderItemUuids = [];

    /**
     * @var string[]
     */
    protected $customerReferences = [];

    /**
     * @var string[]
     */
    protected $orderReferences = [];

    /**
     * @var string[]
     */
    protected $itemStates = [];

    /**
     * @var int[]
     */
    protected $salesOrderIds = [];

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sales_order_item_ids' => 'salesOrderItemIds',
        'salesOrderItemIds' => 'salesOrderItemIds',
        'SalesOrderItemIds' => 'salesOrderItemIds',
        'sales_order_item_uuids' => 'salesOrderItemUuids',
        'salesOrderItemUuids' => 'salesOrderItemUuids',
        'SalesOrderItemUuids' => 'salesOrderItemUuids',
        'customer_references' => 'customerReferences',
        'customerReferences' => 'customerReferences',
        'CustomerReferences' => 'customerReferences',
        'order_references' => 'orderReferences',
        'orderReferences' => 'orderReferences',
        'OrderReferences' => 'orderReferences',
        'item_states' => 'itemStates',
        'itemStates' => 'itemStates',
        'ItemStates' => 'itemStates',
        'sales_order_ids' => 'salesOrderIds',
        'salesOrderIds' => 'salesOrderIds',
        'SalesOrderIds' => 'salesOrderIds',
        'filter' => 'filter',
        'Filter' => 'filter',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALES_ORDER_ITEM_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_ITEM_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'customer_references',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_REFERENCES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'order_references',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEM_STATES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'item_states',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'sales_order_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
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
     * @module SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @param int[]|null $salesOrderItemIds
     *
     * @return $this
     */
    public function setSalesOrderItemIds(array $salesOrderItemIds = null)
    {
        if ($salesOrderItemIds === null) {
            $salesOrderItemIds = [];
        }

        $this->salesOrderItemIds = $salesOrderItemIds;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @return int[]
     */
    public function getSalesOrderItemIds()
    {
        return $this->salesOrderItemIds;
    }

    /**
     * @module SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @param int $salesOrderItemId
     *
     * @return $this
     */
    public function addSalesOrderItemId($salesOrderItemId)
    {
        $this->salesOrderItemIds[] = $salesOrderItemId;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemIds()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_IDS);

        return $this;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @param string[]|null $salesOrderItemUuids
     *
     * @return $this
     */
    public function setSalesOrderItemUuids(array $salesOrderItemUuids = null)
    {
        if ($salesOrderItemUuids === null) {
            $salesOrderItemUuids = [];
        }

        $this->salesOrderItemUuids = $salesOrderItemUuids;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @return string[]
     */
    public function getSalesOrderItemUuids()
    {
        return $this->salesOrderItemUuids;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @param string $salesOrderItemUuid
     *
     * @return $this
     */
    public function addSalesOrderItemUuid($salesOrderItemUuid)
    {
        $this->salesOrderItemUuids[] = $salesOrderItemUuid;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemUuids()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_UUIDS);

        return $this;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @param string[]|null $customerReferences
     *
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences = null)
    {
        if ($customerReferences === null) {
            $customerReferences = [];
        }

        $this->customerReferences = $customerReferences;
        $this->modifiedProperties[self::CUSTOMER_REFERENCES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @return string[]
     */
    public function getCustomerReferences()
    {
        return $this->customerReferences;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @param string $customerReference
     *
     * @return $this
     */
    public function addCustomerReference($customerReference)
    {
        $this->customerReferences[] = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReferences()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCES);

        return $this;
    }

    /**
     * @module SalesReturnPage|Oms|SalesReturn|Sales
     *
     * @param string[]|null $orderReferences
     *
     * @return $this
     */
    public function setOrderReferences(array $orderReferences = null)
    {
        if ($orderReferences === null) {
            $orderReferences = [];
        }

        $this->orderReferences = $orderReferences;
        $this->modifiedProperties[self::ORDER_REFERENCES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|Oms|SalesReturn|Sales
     *
     * @return string[]
     */
    public function getOrderReferences()
    {
        return $this->orderReferences;
    }

    /**
     * @module SalesReturnPage|Oms|SalesReturn|Sales
     *
     * @param string $orderReference
     *
     * @return $this
     */
    public function addOrderReference($orderReference)
    {
        $this->orderReferences[] = $orderReference;
        $this->modifiedProperties[self::ORDER_REFERENCES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|Oms|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderReferences()
    {
        $this->assertPropertyIsSet(self::ORDER_REFERENCES);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @param string[]|null $itemStates
     *
     * @return $this
     */
    public function setItemStates(array $itemStates = null)
    {
        if ($itemStates === null) {
            $itemStates = [];
        }

        $this->itemStates = $itemStates;
        $this->modifiedProperties[self::ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @return string[]
     */
    public function getItemStates()
    {
        return $this->itemStates;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @param string $itemState
     *
     * @return $this
     */
    public function addItemState($itemState)
    {
        $this->itemStates[] = $itemState;
        $this->modifiedProperties[self::ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemStates()
    {
        $this->assertPropertyIsSet(self::ITEM_STATES);

        return $this;
    }

    /**
     * @module Oms|Sales
     *
     * @param int[]|null $salesOrderIds
     *
     * @return $this
     */
    public function setSalesOrderIds(array $salesOrderIds = null)
    {
        if ($salesOrderIds === null) {
            $salesOrderIds = [];
        }

        $this->salesOrderIds = $salesOrderIds;
        $this->modifiedProperties[self::SALES_ORDER_IDS] = true;

        return $this;
    }

    /**
     * @module Oms|Sales
     *
     * @return int[]
     */
    public function getSalesOrderIds()
    {
        return $this->salesOrderIds;
    }

    /**
     * @module Oms|Sales
     *
     * @param int $salesOrderId
     *
     * @return $this
     */
    public function addSalesOrderId($salesOrderId)
    {
        $this->salesOrderIds[] = $salesOrderId;
        $this->modifiedProperties[self::SALES_ORDER_IDS] = true;

        return $this;
    }

    /**
     * @module Oms|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderIds()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_IDS);

        return $this;
    }

    /**
     * @module Sales
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module Sales
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module Sales
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

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
                case 'salesOrderItemIds':
                case 'salesOrderItemUuids':
                case 'customerReferences':
                case 'orderReferences':
                case 'itemStates':
                case 'salesOrderIds':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
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
                case 'salesOrderItemIds':
                case 'salesOrderItemUuids':
                case 'customerReferences':
                case 'orderReferences':
                case 'itemStates':
                case 'salesOrderIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
                case 'salesOrderItemIds':
                case 'salesOrderItemUuids':
                case 'customerReferences':
                case 'orderReferences':
                case 'itemStates':
                case 'salesOrderIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
            'salesOrderItemIds' => $this->salesOrderItemIds,
            'salesOrderItemUuids' => $this->salesOrderItemUuids,
            'customerReferences' => $this->customerReferences,
            'orderReferences' => $this->orderReferences,
            'itemStates' => $this->itemStates,
            'salesOrderIds' => $this->salesOrderIds,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sales_order_item_ids' => $this->salesOrderItemIds,
            'sales_order_item_uuids' => $this->salesOrderItemUuids,
            'customer_references' => $this->customerReferences,
            'order_references' => $this->orderReferences,
            'item_states' => $this->itemStates,
            'sales_order_ids' => $this->salesOrderIds,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sales_order_item_ids' => $this->salesOrderItemIds instanceof AbstractTransfer ? $this->salesOrderItemIds->toArray(true, false) : $this->salesOrderItemIds,
            'sales_order_item_uuids' => $this->salesOrderItemUuids instanceof AbstractTransfer ? $this->salesOrderItemUuids->toArray(true, false) : $this->salesOrderItemUuids,
            'customer_references' => $this->customerReferences instanceof AbstractTransfer ? $this->customerReferences->toArray(true, false) : $this->customerReferences,
            'order_references' => $this->orderReferences instanceof AbstractTransfer ? $this->orderReferences->toArray(true, false) : $this->orderReferences,
            'item_states' => $this->itemStates instanceof AbstractTransfer ? $this->itemStates->toArray(true, false) : $this->itemStates,
            'sales_order_ids' => $this->salesOrderIds instanceof AbstractTransfer ? $this->salesOrderIds->toArray(true, false) : $this->salesOrderIds,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'salesOrderItemIds' => $this->salesOrderItemIds instanceof AbstractTransfer ? $this->salesOrderItemIds->toArray(true, true) : $this->salesOrderItemIds,
            'salesOrderItemUuids' => $this->salesOrderItemUuids instanceof AbstractTransfer ? $this->salesOrderItemUuids->toArray(true, true) : $this->salesOrderItemUuids,
            'customerReferences' => $this->customerReferences instanceof AbstractTransfer ? $this->customerReferences->toArray(true, true) : $this->customerReferences,
            'orderReferences' => $this->orderReferences instanceof AbstractTransfer ? $this->orderReferences->toArray(true, true) : $this->orderReferences,
            'itemStates' => $this->itemStates instanceof AbstractTransfer ? $this->itemStates->toArray(true, true) : $this->itemStates,
            'salesOrderIds' => $this->salesOrderIds instanceof AbstractTransfer ? $this->salesOrderIds->toArray(true, true) : $this->salesOrderIds,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
        ];
    }
}
