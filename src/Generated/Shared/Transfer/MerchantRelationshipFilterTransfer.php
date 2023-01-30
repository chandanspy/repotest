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
class MerchantRelationshipFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP_IDS = 'merchantRelationshipIds';

    /**
     * @var string
     */
    public const MERCHANT_IDS = 'merchantIds';

    /**
     * @var string
     */
    public const OFFSET = 'offset';

    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var string
     */
    public const SORT_BY = 'sortBy';

    /**
     * @var int[]
     */
    protected $merchantRelationshipIds = [];

    /**
     * @var int[]
     */
    protected $merchantIds = [];

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var string[]
     */
    protected $sortBy = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'merchant_relationship_ids' => 'merchantRelationshipIds',
        'merchantRelationshipIds' => 'merchantRelationshipIds',
        'MerchantRelationshipIds' => 'merchantRelationshipIds',
        'merchant_ids' => 'merchantIds',
        'merchantIds' => 'merchantIds',
        'MerchantIds' => 'merchantIds',
        'offset' => 'offset',
        'Offset' => 'offset',
        'limit' => 'limit',
        'Limit' => 'limit',
        'sort_by' => 'sortBy',
        'sortBy' => 'sortBy',
        'SortBy' => 'sortBy',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MERCHANT_RELATIONSHIP_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'merchant_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OFFSET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'offset',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORT_BY => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'sort_by',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @param int[]|null $merchantRelationshipIds
     *
     * @return $this
     */
    public function setMerchantRelationshipIds(array $merchantRelationshipIds = null)
    {
        if ($merchantRelationshipIds === null) {
            $merchantRelationshipIds = [];
        }

        $this->merchantRelationshipIds = $merchantRelationshipIds;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @return int[]
     */
    public function getMerchantRelationshipIds()
    {
        return $this->merchantRelationshipIds;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @param int $merchantRelationshipId
     *
     * @return $this
     */
    public function addMerchantRelationshipId($merchantRelationshipId)
    {
        $this->merchantRelationshipIds[] = $merchantRelationshipId;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationshipIds()
    {
        $this->assertPropertyIsSet(self::MERCHANT_RELATIONSHIP_IDS);

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int[]|null $merchantIds
     *
     * @return $this
     */
    public function setMerchantIds(array $merchantIds = null)
    {
        if ($merchantIds === null) {
            $merchantIds = [];
        }

        $this->merchantIds = $merchantIds;
        $this->modifiedProperties[self::MERCHANT_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return int[]
     */
    public function getMerchantIds()
    {
        return $this->merchantIds;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int $idMerchant
     *
     * @return $this
     */
    public function addIdMerchant($idMerchant)
    {
        $this->merchantIds[] = $idMerchant;
        $this->modifiedProperties[self::MERCHANT_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantIds()
    {
        $this->assertPropertyIsSet(self::MERCHANT_IDS);

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int|null $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->modifiedProperties[self::OFFSET] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int|null $offset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOffsetOrFail($offset)
    {
        if ($offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->setOffset($offset);
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOffsetOrFail()
    {
        if ($this->offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->offset;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOffset()
    {
        $this->assertPropertyIsSet(self::OFFSET);

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int|null $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        $this->modifiedProperties[self::LIMIT] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int|null $limit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLimitOrFail($limit)
    {
        if ($limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->setLimit($limit);
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getLimitOrFail()
    {
        if ($this->limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->limit;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLimit()
    {
        $this->assertPropertyIsSet(self::LIMIT);

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @param string[] $sortBy
     *
     * @return $this
     */
    public function setSortBy($sortBy)
    {
        if ($sortBy === null) {
            $sortBy = [];
        }

        $this->sortBy = $sortBy;
        $this->modifiedProperties[self::SORT_BY] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return string[]
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * @module MerchantRelationship
     *
     * @param string|int $sortByKey
     * @param string $sortByValue
     *
     * @return $this
     */
    public function addSortBy($sortByKey, $sortByValue)
    {
        $this->sortBy[$sortByKey] = $sortByValue;
        $this->modifiedProperties[self::SORT_BY] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortBy()
    {
        $this->assertPropertyIsSet(self::SORT_BY);

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
                case 'merchantRelationshipIds':
                case 'merchantIds':
                case 'offset':
                case 'limit':
                case 'sortBy':
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
                case 'merchantRelationshipIds':
                case 'merchantIds':
                case 'offset':
                case 'limit':
                case 'sortBy':
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
                case 'merchantRelationshipIds':
                case 'merchantIds':
                case 'offset':
                case 'limit':
                case 'sortBy':
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
            'merchantRelationshipIds' => $this->merchantRelationshipIds,
            'merchantIds' => $this->merchantIds,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'sortBy' => $this->sortBy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'merchant_relationship_ids' => $this->merchantRelationshipIds,
            'merchant_ids' => $this->merchantIds,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'sort_by' => $this->sortBy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'merchant_relationship_ids' => $this->merchantRelationshipIds instanceof AbstractTransfer ? $this->merchantRelationshipIds->toArray(true, false) : $this->merchantRelationshipIds,
            'merchant_ids' => $this->merchantIds instanceof AbstractTransfer ? $this->merchantIds->toArray(true, false) : $this->merchantIds,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'sort_by' => $this->sortBy instanceof AbstractTransfer ? $this->sortBy->toArray(true, false) : $this->sortBy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'merchantRelationshipIds' => $this->merchantRelationshipIds instanceof AbstractTransfer ? $this->merchantRelationshipIds->toArray(true, true) : $this->merchantRelationshipIds,
            'merchantIds' => $this->merchantIds instanceof AbstractTransfer ? $this->merchantIds->toArray(true, true) : $this->merchantIds,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'sortBy' => $this->sortBy instanceof AbstractTransfer ? $this->sortBy->toArray(true, true) : $this->sortBy,
        ];
    }
}
