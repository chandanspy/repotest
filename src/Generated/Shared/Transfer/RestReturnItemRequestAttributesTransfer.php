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
class RestReturnItemRequestAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_UUID = 'salesOrderItemUuid';

    /**
     * @var string
     */
    public const REASON = 'reason';

    /**
     * @var string|null
     */
    protected $salesOrderItemUuid;

    /**
     * @var string|null
     */
    protected $reason;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sales_order_item_uuid' => 'salesOrderItemUuid',
        'salesOrderItemUuid' => 'salesOrderItemUuid',
        'SalesOrderItemUuid' => 'salesOrderItemUuid',
        'reason' => 'reason',
        'Reason' => 'reason',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALES_ORDER_ITEM_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
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
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module SalesReturnsRestApi
     *
     * @param string|null $salesOrderItemUuid
     *
     * @return $this
     */
    public function setSalesOrderItemUuid($salesOrderItemUuid)
    {
        $this->salesOrderItemUuid = $salesOrderItemUuid;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_UUID] = true;

        return $this;
    }

    /**
     * @module SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getSalesOrderItemUuid()
    {
        return $this->salesOrderItemUuid;
    }

    /**
     * @module SalesReturnsRestApi
     *
     * @param string|null $salesOrderItemUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderItemUuidOrFail($salesOrderItemUuid)
    {
        if ($salesOrderItemUuid === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_UUID);
        }

        return $this->setSalesOrderItemUuid($salesOrderItemUuid);
    }

    /**
     * @module SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalesOrderItemUuidOrFail()
    {
        if ($this->salesOrderItemUuid === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_UUID);
        }

        return $this->salesOrderItemUuid;
    }

    /**
     * @module SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemUuid()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_UUID);

        return $this;
    }

    /**
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
                case 'salesOrderItemUuid':
                case 'reason':
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
                case 'salesOrderItemUuid':
                case 'reason':
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
                case 'salesOrderItemUuid':
                case 'reason':
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
            'salesOrderItemUuid' => $this->salesOrderItemUuid,
            'reason' => $this->reason,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sales_order_item_uuid' => $this->salesOrderItemUuid,
            'reason' => $this->reason,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sales_order_item_uuid' => $this->salesOrderItemUuid instanceof AbstractTransfer ? $this->salesOrderItemUuid->toArray(true, false) : $this->salesOrderItemUuid,
            'reason' => $this->reason instanceof AbstractTransfer ? $this->reason->toArray(true, false) : $this->reason,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'salesOrderItemUuid' => $this->salesOrderItemUuid instanceof AbstractTransfer ? $this->salesOrderItemUuid->toArray(true, true) : $this->salesOrderItemUuid,
            'reason' => $this->reason instanceof AbstractTransfer ? $this->reason->toArray(true, true) : $this->reason,
        ];
    }
}
