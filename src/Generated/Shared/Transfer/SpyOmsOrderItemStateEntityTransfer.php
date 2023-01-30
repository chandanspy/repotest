<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyOmsOrderItemStateEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_OMS_ORDER_ITEM_STATE = 'idOmsOrderItemState';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_OMS_ORDER_ITEM_STATE_HISTORIES = 'spyOmsOrderItemStateHistories';

    /**
     * @var string
     */
    public const SPY_OMS_EVENT_TIMEOUTS = 'spyOmsEventTimeouts';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEMS = 'spySalesOrderItems';

    /**
     * @var integer|null
     */
    protected $idOmsOrderItemState;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer[]
     */
    protected $spyOmsOrderItemStateHistories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer[]
     */
    protected $spyOmsEventTimeouts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer[]
     */
    protected $spySalesOrderItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_oms_order_item_state' => 'idOmsOrderItemState',
        'idOmsOrderItemState' => 'idOmsOrderItemState',
        'IdOmsOrderItemState' => 'idOmsOrderItemState',
        'description' => 'description',
        'Description' => 'description',
        'name' => 'name',
        'Name' => 'name',
        'spy_oms_order_item_state_histories' => 'spyOmsOrderItemStateHistories',
        'spyOmsOrderItemStateHistories' => 'spyOmsOrderItemStateHistories',
        'SpyOmsOrderItemStateHistories' => 'spyOmsOrderItemStateHistories',
        'spy_oms_event_timeouts' => 'spyOmsEventTimeouts',
        'spyOmsEventTimeouts' => 'spyOmsEventTimeouts',
        'SpyOmsEventTimeouts' => 'spyOmsEventTimeouts',
        'spy_sales_order_items' => 'spySalesOrderItems',
        'spySalesOrderItems' => 'spySalesOrderItems',
        'SpySalesOrderItems' => 'spySalesOrderItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_OMS_ORDER_ITEM_STATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_oms_order_item_state',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES => [
            'type' => 'Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oms_order_item_state_histories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OMS_EVENT_TIMEOUTS => [
            'type' => 'Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oms_event_timeouts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_items',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Oms\Persistence\SpyOmsOrderItemState';


    /**
     * @module 
     *
     * @param integer|null $idOmsOrderItemState
     *
     * @return $this
     */
    public function setIdOmsOrderItemState($idOmsOrderItemState)
    {
        $this->idOmsOrderItemState = $idOmsOrderItemState;
        $this->modifiedProperties[self::ID_OMS_ORDER_ITEM_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdOmsOrderItemState()
    {
        return $this->idOmsOrderItemState;
    }

    /**
     * @module 
     *
     * @param integer|null $idOmsOrderItemState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOmsOrderItemStateOrFail($idOmsOrderItemState)
    {
        if ($idOmsOrderItemState === null) {
            $this->throwNullValueException(static::ID_OMS_ORDER_ITEM_STATE);
        }

        return $this->setIdOmsOrderItemState($idOmsOrderItemState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdOmsOrderItemStateOrFail()
    {
        if ($this->idOmsOrderItemState === null) {
            $this->throwNullValueException(static::ID_OMS_ORDER_ITEM_STATE);
        }

        return $this->idOmsOrderItemState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOmsOrderItemState()
    {
        $this->assertPropertyIsSet(self::ID_OMS_ORDER_ITEM_STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module 
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer[] $spyOmsOrderItemStateHistories
     *
     * @return $this
     */
    public function setSpyOmsOrderItemStateHistories(ArrayObject $spyOmsOrderItemStateHistories)
    {
        $this->spyOmsOrderItemStateHistories = $spyOmsOrderItemStateHistories;
        $this->modifiedProperties[self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer[]
     */
    public function getSpyOmsOrderItemStateHistories()
    {
        return $this->spyOmsOrderItemStateHistories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer $spyOmsOrderItemStateHistories
     *
     * @return $this
     */
    public function addSpyOmsOrderItemStateHistories(SpyOmsOrderItemStateHistoryEntityTransfer $spyOmsOrderItemStateHistories)
    {
        $this->spyOmsOrderItemStateHistories[] = $spyOmsOrderItemStateHistories;
        $this->modifiedProperties[self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOmsOrderItemStateHistories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer[] $spyOmsEventTimeouts
     *
     * @return $this
     */
    public function setSpyOmsEventTimeouts(ArrayObject $spyOmsEventTimeouts)
    {
        $this->spyOmsEventTimeouts = $spyOmsEventTimeouts;
        $this->modifiedProperties[self::SPY_OMS_EVENT_TIMEOUTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer[]
     */
    public function getSpyOmsEventTimeouts()
    {
        return $this->spyOmsEventTimeouts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer $spyOmsEventTimeouts
     *
     * @return $this
     */
    public function addSpyOmsEventTimeouts(SpyOmsEventTimeoutEntityTransfer $spyOmsEventTimeouts)
    {
        $this->spyOmsEventTimeouts[] = $spyOmsEventTimeouts;
        $this->modifiedProperties[self::SPY_OMS_EVENT_TIMEOUTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOmsEventTimeouts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OMS_EVENT_TIMEOUTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer[] $spySalesOrderItems
     *
     * @return $this
     */
    public function setSpySalesOrderItems(ArrayObject $spySalesOrderItems)
    {
        $this->spySalesOrderItems = $spySalesOrderItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer[]
     */
    public function getSpySalesOrderItems()
    {
        return $this->spySalesOrderItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $spySalesOrderItems
     *
     * @return $this
     */
    public function addSpySalesOrderItems(SpySalesOrderItemEntityTransfer $spySalesOrderItems)
    {
        $this->spySalesOrderItems[] = $spySalesOrderItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ITEMS);

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
                case 'idOmsOrderItemState':
                case 'description':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyOmsOrderItemStateHistories':
                case 'spyOmsEventTimeouts':
                case 'spySalesOrderItems':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idOmsOrderItemState':
                case 'description':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyOmsOrderItemStateHistories':
                case 'spyOmsEventTimeouts':
                case 'spySalesOrderItems':
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
                case 'idOmsOrderItemState':
                case 'description':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyOmsOrderItemStateHistories':
                case 'spyOmsEventTimeouts':
                case 'spySalesOrderItems':
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
        $this->spyOmsOrderItemStateHistories = $this->spyOmsOrderItemStateHistories ?: new ArrayObject();
        $this->spyOmsEventTimeouts = $this->spyOmsEventTimeouts ?: new ArrayObject();
        $this->spySalesOrderItems = $this->spySalesOrderItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idOmsOrderItemState' => $this->idOmsOrderItemState,
            'description' => $this->description,
            'name' => $this->name,
            'spyOmsOrderItemStateHistories' => $this->spyOmsOrderItemStateHistories,
            'spyOmsEventTimeouts' => $this->spyOmsEventTimeouts,
            'spySalesOrderItems' => $this->spySalesOrderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_order_item_state' => $this->idOmsOrderItemState,
            'description' => $this->description,
            'name' => $this->name,
            'spy_oms_order_item_state_histories' => $this->spyOmsOrderItemStateHistories,
            'spy_oms_event_timeouts' => $this->spyOmsEventTimeouts,
            'spy_sales_order_items' => $this->spySalesOrderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_order_item_state' => $this->idOmsOrderItemState instanceof AbstractTransfer ? $this->idOmsOrderItemState->toArray(true, false) : $this->idOmsOrderItemState,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_oms_order_item_state_histories' => $this->spyOmsOrderItemStateHistories instanceof AbstractTransfer ? $this->spyOmsOrderItemStateHistories->toArray(true, false) : $this->addValuesToCollection($this->spyOmsOrderItemStateHistories, true, false),
            'spy_oms_event_timeouts' => $this->spyOmsEventTimeouts instanceof AbstractTransfer ? $this->spyOmsEventTimeouts->toArray(true, false) : $this->addValuesToCollection($this->spyOmsEventTimeouts, true, false),
            'spy_sales_order_items' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idOmsOrderItemState' => $this->idOmsOrderItemState instanceof AbstractTransfer ? $this->idOmsOrderItemState->toArray(true, true) : $this->idOmsOrderItemState,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyOmsOrderItemStateHistories' => $this->spyOmsOrderItemStateHistories instanceof AbstractTransfer ? $this->spyOmsOrderItemStateHistories->toArray(true, true) : $this->addValuesToCollection($this->spyOmsOrderItemStateHistories, true, true),
            'spyOmsEventTimeouts' => $this->spyOmsEventTimeouts instanceof AbstractTransfer ? $this->spyOmsEventTimeouts->toArray(true, true) : $this->addValuesToCollection($this->spyOmsEventTimeouts, true, true),
            'spySalesOrderItems' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderItems, true, true),
        ];
    }
}
