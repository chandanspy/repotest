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
class SpyOmsOrderItemStateHistoryEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_OMS_ORDER_ITEM_STATE_HISTORY = 'idOmsOrderItemStateHistory';

    /**
     * @var string
     */
    public const FK_OMS_ORDER_ITEM_STATE = 'fkOmsOrderItemState';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM = 'fkSalesOrderItem';

    /**
     * @var string
     */
    public const ORDER_ITEM = 'orderItem';

    /**
     * @var string
     */
    public const STATE = 'state';

    /**
     * @var integer|null
     */
    protected $idOmsOrderItemStateHistory;

    /**
     * @var integer|null
     */
    protected $fkOmsOrderItemState;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItem;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $orderItem;

    /**
     * @var \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer|null
     */
    protected $state;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_oms_order_item_state_history' => 'idOmsOrderItemStateHistory',
        'idOmsOrderItemStateHistory' => 'idOmsOrderItemStateHistory',
        'IdOmsOrderItemStateHistory' => 'idOmsOrderItemStateHistory',
        'fk_oms_order_item_state' => 'fkOmsOrderItemState',
        'fkOmsOrderItemState' => 'fkOmsOrderItemState',
        'FkOmsOrderItemState' => 'fkOmsOrderItemState',
        'fk_sales_order_item' => 'fkSalesOrderItem',
        'fkSalesOrderItem' => 'fkSalesOrderItem',
        'FkSalesOrderItem' => 'fkSalesOrderItem',
        'order_item' => 'orderItem',
        'orderItem' => 'orderItem',
        'OrderItem' => 'orderItem',
        'state' => 'state',
        'State' => 'state',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_OMS_ORDER_ITEM_STATE_HISTORY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_oms_order_item_state_history',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_OMS_ORDER_ITEM_STATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_oms_order_item_state',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE => [
            'type' => 'Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'state',
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
    public static $entityNamespace = 'Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistory';


    /**
     * @module 
     *
     * @param integer|null $idOmsOrderItemStateHistory
     *
     * @return $this
     */
    public function setIdOmsOrderItemStateHistory($idOmsOrderItemStateHistory)
    {
        $this->idOmsOrderItemStateHistory = $idOmsOrderItemStateHistory;
        $this->modifiedProperties[self::ID_OMS_ORDER_ITEM_STATE_HISTORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdOmsOrderItemStateHistory()
    {
        return $this->idOmsOrderItemStateHistory;
    }

    /**
     * @module 
     *
     * @param integer|null $idOmsOrderItemStateHistory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOmsOrderItemStateHistoryOrFail($idOmsOrderItemStateHistory)
    {
        if ($idOmsOrderItemStateHistory === null) {
            $this->throwNullValueException(static::ID_OMS_ORDER_ITEM_STATE_HISTORY);
        }

        return $this->setIdOmsOrderItemStateHistory($idOmsOrderItemStateHistory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdOmsOrderItemStateHistoryOrFail()
    {
        if ($this->idOmsOrderItemStateHistory === null) {
            $this->throwNullValueException(static::ID_OMS_ORDER_ITEM_STATE_HISTORY);
        }

        return $this->idOmsOrderItemStateHistory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOmsOrderItemStateHistory()
    {
        $this->assertPropertyIsSet(self::ID_OMS_ORDER_ITEM_STATE_HISTORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkOmsOrderItemState
     *
     * @return $this
     */
    public function setFkOmsOrderItemState($fkOmsOrderItemState)
    {
        $this->fkOmsOrderItemState = $fkOmsOrderItemState;
        $this->modifiedProperties[self::FK_OMS_ORDER_ITEM_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkOmsOrderItemState()
    {
        return $this->fkOmsOrderItemState;
    }

    /**
     * @module 
     *
     * @param integer|null $fkOmsOrderItemState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkOmsOrderItemStateOrFail($fkOmsOrderItemState)
    {
        if ($fkOmsOrderItemState === null) {
            $this->throwNullValueException(static::FK_OMS_ORDER_ITEM_STATE);
        }

        return $this->setFkOmsOrderItemState($fkOmsOrderItemState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkOmsOrderItemStateOrFail()
    {
        if ($this->fkOmsOrderItemState === null) {
            $this->throwNullValueException(static::FK_OMS_ORDER_ITEM_STATE);
        }

        return $this->fkOmsOrderItemState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkOmsOrderItemState()
    {
        $this->assertPropertyIsSet(self::FK_OMS_ORDER_ITEM_STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @return $this
     */
    public function setFkSalesOrderItem($fkSalesOrderItem)
    {
        $this->fkSalesOrderItem = $fkSalesOrderItem;
        $this->modifiedProperties[self::FK_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderItem()
    {
        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderItemOrFail($fkSalesOrderItem)
    {
        if ($fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->setFkSalesOrderItem($fkSalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderItemOrFail()
    {
        if ($this->fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null $orderItem
     *
     * @return $this
     */
    public function setOrderItem(SpySalesOrderItemEntityTransfer $orderItem = null)
    {
        $this->orderItem = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $orderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderItemOrFail(SpySalesOrderItemEntityTransfer $orderItem)
    {
        return $this->setOrderItem($orderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer
     */
    public function getOrderItemOrFail()
    {
        if ($this->orderItem === null) {
            $this->throwNullValueException(static::ORDER_ITEM);
        }

        return $this->orderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItem()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer|null $state
     *
     * @return $this
     */
    public function setState(SpyOmsOrderItemStateEntityTransfer $state = null)
    {
        $this->state = $state;
        $this->modifiedProperties[self::STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer $state
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateOrFail(SpyOmsOrderItemStateEntityTransfer $state)
    {
        return $this->setState($state);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer
     */
    public function getStateOrFail()
    {
        if ($this->state === null) {
            $this->throwNullValueException(static::STATE);
        }

        return $this->state;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireState()
    {
        $this->assertPropertyIsSet(self::STATE);

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
                case 'idOmsOrderItemStateHistory':
                case 'fkOmsOrderItemState':
                case 'fkSalesOrderItem':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'orderItem':
                case 'state':
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
                case 'idOmsOrderItemStateHistory':
                case 'fkOmsOrderItemState':
                case 'fkSalesOrderItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
                case 'state':
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
                case 'idOmsOrderItemStateHistory':
                case 'fkOmsOrderItemState':
                case 'fkSalesOrderItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
                case 'state':
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
            'idOmsOrderItemStateHistory' => $this->idOmsOrderItemStateHistory,
            'fkOmsOrderItemState' => $this->fkOmsOrderItemState,
            'fkSalesOrderItem' => $this->fkSalesOrderItem,
            'orderItem' => $this->orderItem,
            'state' => $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_order_item_state_history' => $this->idOmsOrderItemStateHistory,
            'fk_oms_order_item_state' => $this->fkOmsOrderItemState,
            'fk_sales_order_item' => $this->fkSalesOrderItem,
            'order_item' => $this->orderItem,
            'state' => $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_order_item_state_history' => $this->idOmsOrderItemStateHistory instanceof AbstractTransfer ? $this->idOmsOrderItemStateHistory->toArray(true, false) : $this->idOmsOrderItemStateHistory,
            'fk_oms_order_item_state' => $this->fkOmsOrderItemState instanceof AbstractTransfer ? $this->fkOmsOrderItemState->toArray(true, false) : $this->fkOmsOrderItemState,
            'fk_sales_order_item' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, false) : $this->fkSalesOrderItem,
            'order_item' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, false) : $this->orderItem,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, false) : $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idOmsOrderItemStateHistory' => $this->idOmsOrderItemStateHistory instanceof AbstractTransfer ? $this->idOmsOrderItemStateHistory->toArray(true, true) : $this->idOmsOrderItemStateHistory,
            'fkOmsOrderItemState' => $this->fkOmsOrderItemState instanceof AbstractTransfer ? $this->fkOmsOrderItemState->toArray(true, true) : $this->fkOmsOrderItemState,
            'fkSalesOrderItem' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, true) : $this->fkSalesOrderItem,
            'orderItem' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, true) : $this->orderItem,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, true) : $this->state,
        ];
    }
}
