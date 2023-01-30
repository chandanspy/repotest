<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class QueryCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const JOINS = 'joins';

    /**
     * @var string
     */
    public const WITH_COLUMNS = 'withColumns';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\QueryJoinTransfer[]
     */
    protected $joins;

    /**
     * @var array
     */
    protected $withColumns = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'joins' => 'joins',
        'Joins' => 'joins',
        'with_columns' => 'withColumns',
        'withColumns' => 'withColumns',
        'WithColumns' => 'withColumns',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::JOINS => [
            'type' => 'Generated\Shared\Transfer\QueryJoinTransfer',
            'type_shim' => null,
            'name_underscore' => 'joins',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_COLUMNS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'with_columns',
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
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\QueryJoinTransfer[] $joins
     *
     * @return $this
     */
    public function setJoins(ArrayObject $joins)
    {
        $this->joins = $joins;
        $this->modifiedProperties[self::JOINS] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\QueryJoinTransfer[]
     */
    public function getJoins()
    {
        return $this->joins;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption
     *
     * @param \Generated\Shared\Transfer\QueryJoinTransfer $join
     *
     * @return $this
     */
    public function addJoin(QueryJoinTransfer $join)
    {
        $this->joins[] = $join;
        $this->modifiedProperties[self::JOINS] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJoins()
    {
        $this->assertCollectionPropertyIsSet(self::JOINS);

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement
     *
     * @param array|null $withColumns
     *
     * @return $this
     */
    public function setWithColumns(array $withColumns = null)
    {
        if ($withColumns === null) {
            $withColumns = [];
        }

        $this->withColumns = $withColumns;
        $this->modifiedProperties[self::WITH_COLUMNS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement
     *
     * @return array
     */
    public function getWithColumns()
    {
        return $this->withColumns;
    }

    /**
     * @module MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement
     *
     * @param mixed $withColumn
     *
     * @return $this
     */
    public function addWithColumn($withColumn)
    {
        $this->withColumns[] = $withColumn;
        $this->modifiedProperties[self::WITH_COLUMNS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithColumns()
    {
        $this->assertPropertyIsSet(self::WITH_COLUMNS);

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
                case 'withColumns':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'joins':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'withColumns':
                    $values[$arrayKey] = $value;

                    break;
                case 'joins':
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
                case 'withColumns':
                    $values[$arrayKey] = $value;

                    break;
                case 'joins':
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
        $this->joins = $this->joins ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'withColumns' => $this->withColumns,
            'joins' => $this->joins,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'with_columns' => $this->withColumns,
            'joins' => $this->joins,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'with_columns' => $this->withColumns instanceof AbstractTransfer ? $this->withColumns->toArray(true, false) : $this->withColumns,
            'joins' => $this->joins instanceof AbstractTransfer ? $this->joins->toArray(true, false) : $this->addValuesToCollection($this->joins, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'withColumns' => $this->withColumns instanceof AbstractTransfer ? $this->withColumns->toArray(true, true) : $this->withColumns,
            'joins' => $this->joins instanceof AbstractTransfer ? $this->joins->toArray(true, true) : $this->addValuesToCollection($this->joins, true, true),
        ];
    }
}
