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
class QueryJoinTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONDITION = 'condition';

    /**
     * @var string
     */
    public const RELATION = 'relation';

    /**
     * @var string
     */
    public const JOIN_TYPE = 'joinType';

    /**
     * @var string
     */
    public const RIGHT = 'right';

    /**
     * @var string
     */
    public const LEFT = 'left';

    /**
     * @var string
     */
    public const WHERE_CONDITIONS = 'whereConditions';

    /**
     * @var string
     */
    public const WITH_COLUMNS = 'withColumns';

    /**
     * @var string
     */
    public const ORDER_BY = 'orderBy';

    /**
     * @var string
     */
    public const ORDER_DIRECTION = 'orderDirection';

    /**
     * @var string|null
     */
    protected $condition;

    /**
     * @var string|null
     */
    protected $relation;

    /**
     * @var string|null
     */
    protected $joinType;

    /**
     * @var array
     */
    protected $right = [];

    /**
     * @var array
     */
    protected $left = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\QueryWhereConditionTransfer[]
     */
    protected $whereConditions;

    /**
     * @var string[]
     */
    protected $withColumns = [];

    /**
     * @var string|null
     */
    protected $orderBy;

    /**
     * @var string|null
     */
    protected $orderDirection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'condition' => 'condition',
        'Condition' => 'condition',
        'relation' => 'relation',
        'Relation' => 'relation',
        'join_type' => 'joinType',
        'joinType' => 'joinType',
        'JoinType' => 'joinType',
        'right' => 'right',
        'Right' => 'right',
        'left' => 'left',
        'Left' => 'left',
        'where_conditions' => 'whereConditions',
        'whereConditions' => 'whereConditions',
        'WhereConditions' => 'whereConditions',
        'with_columns' => 'withColumns',
        'withColumns' => 'withColumns',
        'WithColumns' => 'withColumns',
        'order_by' => 'orderBy',
        'orderBy' => 'orderBy',
        'OrderBy' => 'orderBy',
        'order_direction' => 'orderDirection',
        'orderDirection' => 'orderDirection',
        'OrderDirection' => 'orderDirection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONDITION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'condition',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RELATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'relation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::JOIN_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'join_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RIGHT => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'right',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LEFT => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'left',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WHERE_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\QueryWhereConditionTransfer',
            'type_shim' => null,
            'name_underscore' => 'where_conditions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_COLUMNS => [
            'type' => 'string[]',
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
        self::ORDER_BY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_by',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_DIRECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_direction',
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
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param string|null $condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        $this->modifiedProperties[self::CONDITION] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param string|null $condition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConditionOrFail($condition)
    {
        if ($condition === null) {
            $this->throwNullValueException(static::CONDITION);
        }

        return $this->setCondition($condition);
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConditionOrFail()
    {
        if ($this->condition === null) {
            $this->throwNullValueException(static::CONDITION);
        }

        return $this->condition;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCondition()
    {
        $this->assertPropertyIsSet(self::CONDITION);

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param string|null $relation
     *
     * @return $this
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
        $this->modifiedProperties[self::RELATION] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @return string|null
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param string|null $relation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRelationOrFail($relation)
    {
        if ($relation === null) {
            $this->throwNullValueException(static::RELATION);
        }

        return $this->setRelation($relation);
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRelationOrFail()
    {
        if ($this->relation === null) {
            $this->throwNullValueException(static::RELATION);
        }

        return $this->relation;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelation()
    {
        $this->assertPropertyIsSet(self::RELATION);

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param string|null $joinType
     *
     * @return $this
     */
    public function setJoinType($joinType)
    {
        $this->joinType = $joinType;
        $this->modifiedProperties[self::JOIN_TYPE] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @return string|null
     */
    public function getJoinType()
    {
        return $this->joinType;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param string|null $joinType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setJoinTypeOrFail($joinType)
    {
        if ($joinType === null) {
            $this->throwNullValueException(static::JOIN_TYPE);
        }

        return $this->setJoinType($joinType);
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getJoinTypeOrFail()
    {
        if ($this->joinType === null) {
            $this->throwNullValueException(static::JOIN_TYPE);
        }

        return $this->joinType;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJoinType()
    {
        $this->assertPropertyIsSet(self::JOIN_TYPE);

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param array|null $right
     *
     * @return $this
     */
    public function setRight(array $right = null)
    {
        if ($right === null) {
            $right = [];
        }

        $this->right = $right;
        $this->modifiedProperties[self::RIGHT] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @return array
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param mixed $right
     *
     * @return $this
     */
    public function addRight($right)
    {
        $this->right[] = $right;
        $this->modifiedProperties[self::RIGHT] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRight()
    {
        $this->assertPropertyIsSet(self::RIGHT);

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param array|null $left
     *
     * @return $this
     */
    public function setLeft(array $left = null)
    {
        if ($left === null) {
            $left = [];
        }

        $this->left = $left;
        $this->modifiedProperties[self::LEFT] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @return array
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @param mixed $left
     *
     * @return $this
     */
    public function addLeft($left)
    {
        $this->left[] = $left;
        $this->modifiedProperties[self::LEFT] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|MerchantRelationshipProductListGui|PriceProductMerchantRelationship|PriceProduct|ProductListGui|ProductManagement|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLeft()
    {
        $this->assertPropertyIsSet(self::LEFT);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\QueryWhereConditionTransfer[] $whereConditions
     *
     * @return $this
     */
    public function setWhereConditions(ArrayObject $whereConditions)
    {
        $this->whereConditions = $whereConditions;
        $this->modifiedProperties[self::WHERE_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\QueryWhereConditionTransfer[]
     */
    public function getWhereConditions()
    {
        return $this->whereConditions;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @param \Generated\Shared\Transfer\QueryWhereConditionTransfer $queryWhereCondition
     *
     * @return $this
     */
    public function addQueryWhereCondition(QueryWhereConditionTransfer $queryWhereCondition)
    {
        $this->whereConditions[] = $queryWhereCondition;
        $this->modifiedProperties[self::WHERE_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWhereConditions()
    {
        $this->assertCollectionPropertyIsSet(self::WHERE_CONDITIONS);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string[]|null $withColumns
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
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @return string[]
     */
    public function getWithColumns()
    {
        return $this->withColumns;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string $withColumn
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
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
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
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        $this->modifiedProperties[self::ORDER_BY] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $orderBy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderByOrFail($orderBy)
    {
        if ($orderBy === null) {
            $this->throwNullValueException(static::ORDER_BY);
        }

        return $this->setOrderBy($orderBy);
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderByOrFail()
    {
        if ($this->orderBy === null) {
            $this->throwNullValueException(static::ORDER_BY);
        }

        return $this->orderBy;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderBy()
    {
        $this->assertPropertyIsSet(self::ORDER_BY);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $orderDirection
     *
     * @return $this
     */
    public function setOrderDirection($orderDirection)
    {
        $this->orderDirection = $orderDirection;
        $this->modifiedProperties[self::ORDER_DIRECTION] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @return string|null
     */
    public function getOrderDirection()
    {
        return $this->orderDirection;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $orderDirection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderDirectionOrFail($orderDirection)
    {
        if ($orderDirection === null) {
            $this->throwNullValueException(static::ORDER_DIRECTION);
        }

        return $this->setOrderDirection($orderDirection);
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderDirectionOrFail()
    {
        if ($this->orderDirection === null) {
            $this->throwNullValueException(static::ORDER_DIRECTION);
        }

        return $this->orderDirection;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderDirection()
    {
        $this->assertPropertyIsSet(self::ORDER_DIRECTION);

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
                case 'condition':
                case 'relation':
                case 'joinType':
                case 'right':
                case 'left':
                case 'withColumns':
                case 'orderBy':
                case 'orderDirection':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'whereConditions':
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
                case 'condition':
                case 'relation':
                case 'joinType':
                case 'right':
                case 'left':
                case 'withColumns':
                case 'orderBy':
                case 'orderDirection':
                    $values[$arrayKey] = $value;

                    break;
                case 'whereConditions':
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
                case 'condition':
                case 'relation':
                case 'joinType':
                case 'right':
                case 'left':
                case 'withColumns':
                case 'orderBy':
                case 'orderDirection':
                    $values[$arrayKey] = $value;

                    break;
                case 'whereConditions':
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
        $this->whereConditions = $this->whereConditions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'condition' => $this->condition,
            'relation' => $this->relation,
            'joinType' => $this->joinType,
            'right' => $this->right,
            'left' => $this->left,
            'withColumns' => $this->withColumns,
            'orderBy' => $this->orderBy,
            'orderDirection' => $this->orderDirection,
            'whereConditions' => $this->whereConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'condition' => $this->condition,
            'relation' => $this->relation,
            'join_type' => $this->joinType,
            'right' => $this->right,
            'left' => $this->left,
            'with_columns' => $this->withColumns,
            'order_by' => $this->orderBy,
            'order_direction' => $this->orderDirection,
            'where_conditions' => $this->whereConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'condition' => $this->condition instanceof AbstractTransfer ? $this->condition->toArray(true, false) : $this->condition,
            'relation' => $this->relation instanceof AbstractTransfer ? $this->relation->toArray(true, false) : $this->relation,
            'join_type' => $this->joinType instanceof AbstractTransfer ? $this->joinType->toArray(true, false) : $this->joinType,
            'right' => $this->right instanceof AbstractTransfer ? $this->right->toArray(true, false) : $this->right,
            'left' => $this->left instanceof AbstractTransfer ? $this->left->toArray(true, false) : $this->left,
            'with_columns' => $this->withColumns instanceof AbstractTransfer ? $this->withColumns->toArray(true, false) : $this->withColumns,
            'order_by' => $this->orderBy instanceof AbstractTransfer ? $this->orderBy->toArray(true, false) : $this->orderBy,
            'order_direction' => $this->orderDirection instanceof AbstractTransfer ? $this->orderDirection->toArray(true, false) : $this->orderDirection,
            'where_conditions' => $this->whereConditions instanceof AbstractTransfer ? $this->whereConditions->toArray(true, false) : $this->addValuesToCollection($this->whereConditions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'condition' => $this->condition instanceof AbstractTransfer ? $this->condition->toArray(true, true) : $this->condition,
            'relation' => $this->relation instanceof AbstractTransfer ? $this->relation->toArray(true, true) : $this->relation,
            'joinType' => $this->joinType instanceof AbstractTransfer ? $this->joinType->toArray(true, true) : $this->joinType,
            'right' => $this->right instanceof AbstractTransfer ? $this->right->toArray(true, true) : $this->right,
            'left' => $this->left instanceof AbstractTransfer ? $this->left->toArray(true, true) : $this->left,
            'withColumns' => $this->withColumns instanceof AbstractTransfer ? $this->withColumns->toArray(true, true) : $this->withColumns,
            'orderBy' => $this->orderBy instanceof AbstractTransfer ? $this->orderBy->toArray(true, true) : $this->orderBy,
            'orderDirection' => $this->orderDirection instanceof AbstractTransfer ? $this->orderDirection->toArray(true, true) : $this->orderDirection,
            'whereConditions' => $this->whereConditions instanceof AbstractTransfer ? $this->whereConditions->toArray(true, true) : $this->addValuesToCollection($this->whereConditions, true, true),
        ];
    }
}
