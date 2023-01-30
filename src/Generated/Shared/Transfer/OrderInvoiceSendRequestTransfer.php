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
class OrderInvoiceSendRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const BATCH = 'batch';

    /**
     * @var string
     */
    public const FORCE = 'force';

    /**
     * @var string
     */
    public const SALES_ORDER_IDS = 'salesOrderIds';

    /**
     * @var int|null
     */
    protected $batch;

    /**
     * @var bool|null
     */
    protected $force;

    /**
     * @var int[]
     */
    protected $salesOrderIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'batch' => 'batch',
        'Batch' => 'batch',
        'force' => 'force',
        'Force' => 'force',
        'sales_order_ids' => 'salesOrderIds',
        'salesOrderIds' => 'salesOrderIds',
        'SalesOrderIds' => 'salesOrderIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::BATCH => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'batch',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FORCE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'force',
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
    ];

    /**
     * @module SalesInvoice
     *
     * @param int|null $batch
     *
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;
        $this->modifiedProperties[self::BATCH] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return int|null
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @module SalesInvoice
     *
     * @param int|null $batch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBatchOrFail($batch)
    {
        if ($batch === null) {
            $this->throwNullValueException(static::BATCH);
        }

        return $this->setBatch($batch);
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getBatchOrFail()
    {
        if ($this->batch === null) {
            $this->throwNullValueException(static::BATCH);
        }

        return $this->batch;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBatch()
    {
        $this->assertPropertyIsSet(self::BATCH);

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @param bool|null $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        $this->force = $force;
        $this->modifiedProperties[self::FORCE] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return bool|null
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @module SalesInvoice
     *
     * @param bool|null $force
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setForceOrFail($force)
    {
        if ($force === null) {
            $this->throwNullValueException(static::FORCE);
        }

        return $this->setForce($force);
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getForceOrFail()
    {
        if ($this->force === null) {
            $this->throwNullValueException(static::FORCE);
        }

        return $this->force;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireForce()
    {
        $this->assertPropertyIsSet(self::FORCE);

        return $this;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @return int[]
     */
    public function getSalesOrderIds()
    {
        return $this->salesOrderIds;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
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
                case 'batch':
                case 'force':
                case 'salesOrderIds':
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
                case 'batch':
                case 'force':
                case 'salesOrderIds':
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
                case 'batch':
                case 'force':
                case 'salesOrderIds':
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
            'batch' => $this->batch,
            'force' => $this->force,
            'salesOrderIds' => $this->salesOrderIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'batch' => $this->batch,
            'force' => $this->force,
            'sales_order_ids' => $this->salesOrderIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'batch' => $this->batch instanceof AbstractTransfer ? $this->batch->toArray(true, false) : $this->batch,
            'force' => $this->force instanceof AbstractTransfer ? $this->force->toArray(true, false) : $this->force,
            'sales_order_ids' => $this->salesOrderIds instanceof AbstractTransfer ? $this->salesOrderIds->toArray(true, false) : $this->salesOrderIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'batch' => $this->batch instanceof AbstractTransfer ? $this->batch->toArray(true, true) : $this->batch,
            'force' => $this->force instanceof AbstractTransfer ? $this->force->toArray(true, true) : $this->force,
            'salesOrderIds' => $this->salesOrderIds instanceof AbstractTransfer ? $this->salesOrderIds->toArray(true, true) : $this->salesOrderIds,
        ];
    }
}
