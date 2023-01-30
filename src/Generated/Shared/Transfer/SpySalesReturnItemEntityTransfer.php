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
class SpySalesReturnItemEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_RETURN_ITEM = 'idSalesReturnItem';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM = 'fkSalesOrderItem';

    /**
     * @var string
     */
    public const FK_SALES_RETURN = 'fkSalesReturn';

    /**
     * @var string
     */
    public const REASON = 'reason';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_SALES_RETURN = 'spySalesReturn';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEM = 'spySalesOrderItem';

    /**
     * @var integer|null
     */
    protected $idSalesReturnItem;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItem;

    /**
     * @var integer|null
     */
    protected $fkSalesReturn;

    /**
     * @var string|null
     */
    protected $reason;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpySalesReturnEntityTransfer|null
     */
    protected $spySalesReturn;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $spySalesOrderItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_return_item' => 'idSalesReturnItem',
        'idSalesReturnItem' => 'idSalesReturnItem',
        'IdSalesReturnItem' => 'idSalesReturnItem',
        'fk_sales_order_item' => 'fkSalesOrderItem',
        'fkSalesOrderItem' => 'fkSalesOrderItem',
        'FkSalesOrderItem' => 'fkSalesOrderItem',
        'fk_sales_return' => 'fkSalesReturn',
        'fkSalesReturn' => 'fkSalesReturn',
        'FkSalesReturn' => 'fkSalesReturn',
        'reason' => 'reason',
        'Reason' => 'reason',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_sales_return' => 'spySalesReturn',
        'spySalesReturn' => 'spySalesReturn',
        'SpySalesReturn' => 'spySalesReturn',
        'spy_sales_order_item' => 'spySalesOrderItem',
        'spySalesOrderItem' => 'spySalesOrderItem',
        'SpySalesOrderItem' => 'spySalesOrderItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_RETURN_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_return_item',
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
        self::FK_SALES_RETURN => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_return',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REASON => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reason',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_RETURN => [
            'type' => 'Generated\Shared\Transfer\SpySalesReturnEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_return',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_item',
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
    public static $entityNamespace = 'Orm\Zed\SalesReturn\Persistence\SpySalesReturnItem';


    /**
     * @module 
     *
     * @param integer|null $idSalesReturnItem
     *
     * @return $this
     */
    public function setIdSalesReturnItem($idSalesReturnItem)
    {
        $this->idSalesReturnItem = $idSalesReturnItem;
        $this->modifiedProperties[self::ID_SALES_RETURN_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesReturnItem()
    {
        return $this->idSalesReturnItem;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesReturnItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesReturnItemOrFail($idSalesReturnItem)
    {
        if ($idSalesReturnItem === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN_ITEM);
        }

        return $this->setIdSalesReturnItem($idSalesReturnItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesReturnItemOrFail()
    {
        if ($this->idSalesReturnItem === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN_ITEM);
        }

        return $this->idSalesReturnItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesReturnItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_RETURN_ITEM);

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
     * @param integer|null $fkSalesReturn
     *
     * @return $this
     */
    public function setFkSalesReturn($fkSalesReturn)
    {
        $this->fkSalesReturn = $fkSalesReturn;
        $this->modifiedProperties[self::FK_SALES_RETURN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesReturn()
    {
        return $this->fkSalesReturn;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesReturnOrFail($fkSalesReturn)
    {
        if ($fkSalesReturn === null) {
            $this->throwNullValueException(static::FK_SALES_RETURN);
        }

        return $this->setFkSalesReturn($fkSalesReturn);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesReturnOrFail()
    {
        if ($this->fkSalesReturn === null) {
            $this->throwNullValueException(static::FK_SALES_RETURN);
        }

        return $this->fkSalesReturn;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesReturn()
    {
        $this->assertPropertyIsSet(self::FK_SALES_RETURN);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        $this->modifiedProperties[self::REASON] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @module 
     *
     * @param string|null $reason
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReasonOrFail($reason)
    {
        if ($reason === null) {
            $this->throwNullValueException(static::REASON);
        }

        return $this->setReason($reason);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReasonOrFail()
    {
        if ($this->reason === null) {
            $this->throwNullValueException(static::REASON);
        }

        return $this->reason;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReason()
    {
        $this->assertPropertyIsSet(self::REASON);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesReturnEntityTransfer|null $spySalesReturn
     *
     * @return $this
     */
    public function setSpySalesReturn(SpySalesReturnEntityTransfer $spySalesReturn = null)
    {
        $this->spySalesReturn = $spySalesReturn;
        $this->modifiedProperties[self::SPY_SALES_RETURN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesReturnEntityTransfer|null
     */
    public function getSpySalesReturn()
    {
        return $this->spySalesReturn;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesReturnEntityTransfer $spySalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesReturnOrFail(SpySalesReturnEntityTransfer $spySalesReturn)
    {
        return $this->setSpySalesReturn($spySalesReturn);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesReturnEntityTransfer
     */
    public function getSpySalesReturnOrFail()
    {
        if ($this->spySalesReturn === null) {
            $this->throwNullValueException(static::SPY_SALES_RETURN);
        }

        return $this->spySalesReturn;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesReturn()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_RETURN);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null $spySalesOrderItem
     *
     * @return $this
     */
    public function setSpySalesOrderItem(SpySalesOrderItemEntityTransfer $spySalesOrderItem = null)
    {
        $this->spySalesOrderItem = $spySalesOrderItem;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    public function getSpySalesOrderItem()
    {
        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $spySalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderItemOrFail(SpySalesOrderItemEntityTransfer $spySalesOrderItem)
    {
        return $this->setSpySalesOrderItem($spySalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer
     */
    public function getSpySalesOrderItemOrFail()
    {
        if ($this->spySalesOrderItem === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER_ITEM);
        }

        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItem()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER_ITEM);

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
                case 'idSalesReturnItem':
                case 'fkSalesOrderItem':
                case 'fkSalesReturn':
                case 'reason':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesReturn':
                case 'spySalesOrderItem':
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
                case 'idSalesReturnItem':
                case 'fkSalesOrderItem':
                case 'fkSalesReturn':
                case 'reason':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesReturn':
                case 'spySalesOrderItem':
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
                case 'idSalesReturnItem':
                case 'fkSalesOrderItem':
                case 'fkSalesReturn':
                case 'reason':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesReturn':
                case 'spySalesOrderItem':
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
            'idSalesReturnItem' => $this->idSalesReturnItem,
            'fkSalesOrderItem' => $this->fkSalesOrderItem,
            'fkSalesReturn' => $this->fkSalesReturn,
            'reason' => $this->reason,
            'uuid' => $this->uuid,
            'spySalesReturn' => $this->spySalesReturn,
            'spySalesOrderItem' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return_item' => $this->idSalesReturnItem,
            'fk_sales_order_item' => $this->fkSalesOrderItem,
            'fk_sales_return' => $this->fkSalesReturn,
            'reason' => $this->reason,
            'uuid' => $this->uuid,
            'spy_sales_return' => $this->spySalesReturn,
            'spy_sales_order_item' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return_item' => $this->idSalesReturnItem instanceof AbstractTransfer ? $this->idSalesReturnItem->toArray(true, false) : $this->idSalesReturnItem,
            'fk_sales_order_item' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, false) : $this->fkSalesOrderItem,
            'fk_sales_return' => $this->fkSalesReturn instanceof AbstractTransfer ? $this->fkSalesReturn->toArray(true, false) : $this->fkSalesReturn,
            'reason' => $this->reason instanceof AbstractTransfer ? $this->reason->toArray(true, false) : $this->reason,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_sales_return' => $this->spySalesReturn instanceof AbstractTransfer ? $this->spySalesReturn->toArray(true, false) : $this->spySalesReturn,
            'spy_sales_order_item' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, false) : $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesReturnItem' => $this->idSalesReturnItem instanceof AbstractTransfer ? $this->idSalesReturnItem->toArray(true, true) : $this->idSalesReturnItem,
            'fkSalesOrderItem' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, true) : $this->fkSalesOrderItem,
            'fkSalesReturn' => $this->fkSalesReturn instanceof AbstractTransfer ? $this->fkSalesReturn->toArray(true, true) : $this->fkSalesReturn,
            'reason' => $this->reason instanceof AbstractTransfer ? $this->reason->toArray(true, true) : $this->reason,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spySalesReturn' => $this->spySalesReturn instanceof AbstractTransfer ? $this->spySalesReturn->toArray(true, true) : $this->spySalesReturn,
            'spySalesOrderItem' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, true) : $this->spySalesOrderItem,
        ];
    }
}
