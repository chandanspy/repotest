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
class ReturnItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const REASON = 'reason';

    /**
     * @var string
     */
    public const ORDER_ITEM = 'orderItem';

    /**
     * @var string
     */
    public const ID_SALES_RETURN_ITEM = 'idSalesReturnItem';

    /**
     * @var string
     */
    public const ID_SALES_RETURN = 'idSalesReturn';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string|null
     */
    protected $reason;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $orderItem;

    /**
     * @var int|null
     */
    protected $idSalesReturnItem;

    /**
     * @var int|null
     */
    protected $idSalesReturn;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'reason' => 'reason',
        'Reason' => 'reason',
        'order_item' => 'orderItem',
        'orderItem' => 'orderItem',
        'OrderItem' => 'orderItem',
        'id_sales_return_item' => 'idSalesReturnItem',
        'idSalesReturnItem' => 'idSalesReturnItem',
        'IdSalesReturnItem' => 'idSalesReturnItem',
        'id_sales_return' => 'idSalesReturn',
        'idSalesReturn' => 'idSalesReturn',
        'IdSalesReturn' => 'idSalesReturn',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
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
        self::ID_SALES_RETURN_ITEM => [
            'type' => 'int',
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
        self::ID_SALES_RETURN => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_return',
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
    ];

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $orderItem
     *
     * @return $this
     */
    public function setOrderItem(ItemTransfer $orderItem = null)
    {
        $this->orderItem = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $orderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderItemOrFail(ItemTransfer $orderItem)
    {
        return $this->setOrderItem($orderItem);
    }

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getOrderItemOrFail()
    {
        if ($this->orderItem === null) {
            $this->throwNullValueException(static::ORDER_ITEM);
        }

        return $this->orderItem;
    }

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $idSalesReturnItem
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
     * @module SalesReturnPage|SalesReturn
     *
     * @return int|null
     */
    public function getIdSalesReturnItem()
    {
        return $this->idSalesReturnItem;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $idSalesReturnItem
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
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesReturnItemOrFail()
    {
        if ($this->idSalesReturnItem === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN_ITEM);
        }

        return $this->idSalesReturnItem;
    }

    /**
     * @module SalesReturnPage|SalesReturn
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
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $idSalesReturn
     *
     * @return $this
     */
    public function setIdSalesReturn($idSalesReturn)
    {
        $this->idSalesReturn = $idSalesReturn;
        $this->modifiedProperties[self::ID_SALES_RETURN] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @return int|null
     */
    public function getIdSalesReturn()
    {
        return $this->idSalesReturn;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $idSalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesReturnOrFail($idSalesReturn)
    {
        if ($idSalesReturn === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN);
        }

        return $this->setIdSalesReturn($idSalesReturn);
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesReturnOrFail()
    {
        if ($this->idSalesReturn === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN);
        }

        return $this->idSalesReturn;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesReturn()
    {
        $this->assertPropertyIsSet(self::ID_SALES_RETURN);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
                case 'reason':
                case 'idSalesReturnItem':
                case 'idSalesReturn':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'orderItem':
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
                case 'reason':
                case 'idSalesReturnItem':
                case 'idSalesReturn':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
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
                case 'reason':
                case 'idSalesReturnItem':
                case 'idSalesReturn':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
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
            'reason' => $this->reason,
            'idSalesReturnItem' => $this->idSalesReturnItem,
            'idSalesReturn' => $this->idSalesReturn,
            'uuid' => $this->uuid,
            'orderItem' => $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'reason' => $this->reason,
            'id_sales_return_item' => $this->idSalesReturnItem,
            'id_sales_return' => $this->idSalesReturn,
            'uuid' => $this->uuid,
            'order_item' => $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'reason' => $this->reason instanceof AbstractTransfer ? $this->reason->toArray(true, false) : $this->reason,
            'id_sales_return_item' => $this->idSalesReturnItem instanceof AbstractTransfer ? $this->idSalesReturnItem->toArray(true, false) : $this->idSalesReturnItem,
            'id_sales_return' => $this->idSalesReturn instanceof AbstractTransfer ? $this->idSalesReturn->toArray(true, false) : $this->idSalesReturn,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'order_item' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, false) : $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'reason' => $this->reason instanceof AbstractTransfer ? $this->reason->toArray(true, true) : $this->reason,
            'idSalesReturnItem' => $this->idSalesReturnItem instanceof AbstractTransfer ? $this->idSalesReturnItem->toArray(true, true) : $this->idSalesReturnItem,
            'idSalesReturn' => $this->idSalesReturn instanceof AbstractTransfer ? $this->idSalesReturn->toArray(true, true) : $this->idSalesReturn,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'orderItem' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, true) : $this->orderItem,
        ];
    }
}
