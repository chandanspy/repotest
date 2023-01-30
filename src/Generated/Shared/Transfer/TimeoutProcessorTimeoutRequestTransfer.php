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
class TimeoutProcessorTimeoutRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_ENTITY = 'salesOrderItemEntity';

    /**
     * @var string
     */
    public const TIMESTAMP = 'timestamp';

    /**
     * @var string
     */
    public const OMS_EVENT = 'omsEvent';

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $salesOrderItemEntity;

    /**
     * @var int|null
     */
    protected $timestamp;

    /**
     * @var \Generated\Shared\Transfer\OmsEventTransfer|null
     */
    protected $omsEvent;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sales_order_item_entity' => 'salesOrderItemEntity',
        'salesOrderItemEntity' => 'salesOrderItemEntity',
        'SalesOrderItemEntity' => 'salesOrderItemEntity',
        'timestamp' => 'timestamp',
        'Timestamp' => 'timestamp',
        'oms_event' => 'omsEvent',
        'omsEvent' => 'omsEvent',
        'OmsEvent' => 'omsEvent',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALES_ORDER_ITEM_ENTITY => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_entity',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMESTAMP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'timestamp',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OMS_EVENT => [
            'type' => 'Generated\Shared\Transfer\OmsEventTransfer',
            'type_shim' => null,
            'name_underscore' => 'oms_event',
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
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null $salesOrderItemEntity
     *
     * @return $this
     */
    public function setSalesOrderItemEntity(SpySalesOrderItemEntityTransfer $salesOrderItemEntity = null)
    {
        $this->salesOrderItemEntity = $salesOrderItemEntity;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_ENTITY] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    public function getSalesOrderItemEntity()
    {
        return $this->salesOrderItemEntity;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $salesOrderItemEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderItemEntityOrFail(SpySalesOrderItemEntityTransfer $salesOrderItemEntity)
    {
        return $this->setSalesOrderItemEntity($salesOrderItemEntity);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer
     */
    public function getSalesOrderItemEntityOrFail()
    {
        if ($this->salesOrderItemEntity === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_ENTITY);
        }

        return $this->salesOrderItemEntity;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemEntity()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_ENTITY);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param int|null $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        $this->modifiedProperties[self::TIMESTAMP] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @module Oms
     *
     * @param int|null $timestamp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimestampOrFail($timestamp)
    {
        if ($timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->setTimestamp($timestamp);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTimestampOrFail()
    {
        if ($this->timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->timestamp;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimestamp()
    {
        $this->assertPropertyIsSet(self::TIMESTAMP);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\OmsEventTransfer|null $omsEvent
     *
     * @return $this
     */
    public function setOmsEvent(OmsEventTransfer $omsEvent = null)
    {
        $this->omsEvent = $omsEvent;
        $this->modifiedProperties[self::OMS_EVENT] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \Generated\Shared\Transfer\OmsEventTransfer|null
     */
    public function getOmsEvent()
    {
        return $this->omsEvent;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\OmsEventTransfer $omsEvent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOmsEventOrFail(OmsEventTransfer $omsEvent)
    {
        return $this->setOmsEvent($omsEvent);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OmsEventTransfer
     */
    public function getOmsEventOrFail()
    {
        if ($this->omsEvent === null) {
            $this->throwNullValueException(static::OMS_EVENT);
        }

        return $this->omsEvent;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOmsEvent()
    {
        $this->assertPropertyIsSet(self::OMS_EVENT);

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
                case 'timestamp':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'salesOrderItemEntity':
                case 'omsEvent':
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
                case 'timestamp':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderItemEntity':
                case 'omsEvent':
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
                case 'timestamp':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderItemEntity':
                case 'omsEvent':
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
            'timestamp' => $this->timestamp,
            'salesOrderItemEntity' => $this->salesOrderItemEntity,
            'omsEvent' => $this->omsEvent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'timestamp' => $this->timestamp,
            'sales_order_item_entity' => $this->salesOrderItemEntity,
            'oms_event' => $this->omsEvent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, false) : $this->timestamp,
            'sales_order_item_entity' => $this->salesOrderItemEntity instanceof AbstractTransfer ? $this->salesOrderItemEntity->toArray(true, false) : $this->salesOrderItemEntity,
            'oms_event' => $this->omsEvent instanceof AbstractTransfer ? $this->omsEvent->toArray(true, false) : $this->omsEvent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, true) : $this->timestamp,
            'salesOrderItemEntity' => $this->salesOrderItemEntity instanceof AbstractTransfer ? $this->salesOrderItemEntity->toArray(true, true) : $this->salesOrderItemEntity,
            'omsEvent' => $this->omsEvent instanceof AbstractTransfer ? $this->omsEvent->toArray(true, true) : $this->omsEvent,
        ];
    }
}
