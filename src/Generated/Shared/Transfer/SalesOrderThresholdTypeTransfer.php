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
class SalesOrderThresholdTypeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const THRESHOLD_GROUP = 'thresholdGroup';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_THRESHOLD_TYPE = 'idSalesOrderThresholdType';

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $thresholdGroup;

    /**
     * @var int|null
     */
    protected $idSalesOrderThresholdType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'key' => 'key',
        'Key' => 'key',
        'threshold_group' => 'thresholdGroup',
        'thresholdGroup' => 'thresholdGroup',
        'ThresholdGroup' => 'thresholdGroup',
        'id_sales_order_threshold_type' => 'idSalesOrderThresholdType',
        'idSalesOrderThresholdType' => 'idSalesOrderThresholdType',
        'IdSalesOrderThresholdType' => 'idSalesOrderThresholdType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::THRESHOLD_GROUP => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'threshold_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_ORDER_THRESHOLD_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_threshold_type',
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @param string|null $thresholdGroup
     *
     * @return $this
     */
    public function setThresholdGroup($thresholdGroup)
    {
        $this->thresholdGroup = $thresholdGroup;
        $this->modifiedProperties[self::THRESHOLD_GROUP] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @return string|null
     */
    public function getThresholdGroup()
    {
        return $this->thresholdGroup;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @param string|null $thresholdGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setThresholdGroupOrFail($thresholdGroup)
    {
        if ($thresholdGroup === null) {
            $this->throwNullValueException(static::THRESHOLD_GROUP);
        }

        return $this->setThresholdGroup($thresholdGroup);
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getThresholdGroupOrFail()
    {
        if ($this->thresholdGroup === null) {
            $this->throwNullValueException(static::THRESHOLD_GROUP);
        }

        return $this->thresholdGroup;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireThresholdGroup()
    {
        $this->assertPropertyIsSet(self::THRESHOLD_GROUP);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @param int|null $idSalesOrderThresholdType
     *
     * @return $this
     */
    public function setIdSalesOrderThresholdType($idSalesOrderThresholdType)
    {
        $this->idSalesOrderThresholdType = $idSalesOrderThresholdType;
        $this->modifiedProperties[self::ID_SALES_ORDER_THRESHOLD_TYPE] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @return int|null
     */
    public function getIdSalesOrderThresholdType()
    {
        return $this->idSalesOrderThresholdType;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @param int|null $idSalesOrderThresholdType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderThresholdTypeOrFail($idSalesOrderThresholdType)
    {
        if ($idSalesOrderThresholdType === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->setIdSalesOrderThresholdType($idSalesOrderThresholdType);
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderThresholdTypeOrFail()
    {
        if ($this->idSalesOrderThresholdType === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->idSalesOrderThresholdType;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderThresholdType()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_THRESHOLD_TYPE);

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
                case 'key':
                case 'thresholdGroup':
                case 'idSalesOrderThresholdType':
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
                case 'key':
                case 'thresholdGroup':
                case 'idSalesOrderThresholdType':
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
                case 'key':
                case 'thresholdGroup':
                case 'idSalesOrderThresholdType':
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
            'key' => $this->key,
            'thresholdGroup' => $this->thresholdGroup,
            'idSalesOrderThresholdType' => $this->idSalesOrderThresholdType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key,
            'threshold_group' => $this->thresholdGroup,
            'id_sales_order_threshold_type' => $this->idSalesOrderThresholdType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'threshold_group' => $this->thresholdGroup instanceof AbstractTransfer ? $this->thresholdGroup->toArray(true, false) : $this->thresholdGroup,
            'id_sales_order_threshold_type' => $this->idSalesOrderThresholdType instanceof AbstractTransfer ? $this->idSalesOrderThresholdType->toArray(true, false) : $this->idSalesOrderThresholdType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'thresholdGroup' => $this->thresholdGroup instanceof AbstractTransfer ? $this->thresholdGroup->toArray(true, true) : $this->thresholdGroup,
            'idSalesOrderThresholdType' => $this->idSalesOrderThresholdType instanceof AbstractTransfer ? $this->idSalesOrderThresholdType->toArray(true, true) : $this->idSalesOrderThresholdType,
        ];
    }
}
