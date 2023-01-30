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
class QueryWhereConditionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const COLUMN = 'column';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const COMPARISON = 'comparison';

    /**
     * @var string
     */
    public const MERGE_WITH_CONDITION = 'mergeWithCondition';

    /**
     * @var string
     */
    public const MERGE_OPERATOR = 'mergeOperator';

    /**
     * @var string|null
     */
    protected $column;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $comparison;

    /**
     * @var string|null
     */
    protected $mergeWithCondition;

    /**
     * @var string|null
     */
    protected $mergeOperator;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'column' => 'column',
        'Column' => 'column',
        'value' => 'value',
        'Value' => 'value',
        'comparison' => 'comparison',
        'Comparison' => 'comparison',
        'merge_with_condition' => 'mergeWithCondition',
        'mergeWithCondition' => 'mergeWithCondition',
        'MergeWithCondition' => 'mergeWithCondition',
        'merge_operator' => 'mergeOperator',
        'mergeOperator' => 'mergeOperator',
        'MergeOperator' => 'mergeOperator',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::COLUMN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'column',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPARISON => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'comparison',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERGE_WITH_CONDITION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merge_with_condition',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERGE_OPERATOR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merge_operator',
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
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @param string|null $column
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->column = $column;
        $this->modifiedProperties[self::COLUMN] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @return string|null
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @param string|null $column
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setColumnOrFail($column)
    {
        if ($column === null) {
            $this->throwNullValueException(static::COLUMN);
        }

        return $this->setColumn($column);
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getColumnOrFail()
    {
        if ($this->column === null) {
            $this->throwNullValueException(static::COLUMN);
        }

        return $this->column;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireColumn()
    {
        $this->assertPropertyIsSet(self::COLUMN);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @param string|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|ProductOption|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $comparison
     *
     * @return $this
     */
    public function setComparison($comparison)
    {
        $this->comparison = $comparison;
        $this->modifiedProperties[self::COMPARISON] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @return string|null
     */
    public function getComparison()
    {
        return $this->comparison;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $comparison
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setComparisonOrFail($comparison)
    {
        if ($comparison === null) {
            $this->throwNullValueException(static::COMPARISON);
        }

        return $this->setComparison($comparison);
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getComparisonOrFail()
    {
        if ($this->comparison === null) {
            $this->throwNullValueException(static::COMPARISON);
        }

        return $this->comparison;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireComparison()
    {
        $this->assertPropertyIsSet(self::COMPARISON);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $mergeWithCondition
     *
     * @return $this
     */
    public function setMergeWithCondition($mergeWithCondition)
    {
        $this->mergeWithCondition = $mergeWithCondition;
        $this->modifiedProperties[self::MERGE_WITH_CONDITION] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @return string|null
     */
    public function getMergeWithCondition()
    {
        return $this->mergeWithCondition;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @param string|null $mergeWithCondition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMergeWithConditionOrFail($mergeWithCondition)
    {
        if ($mergeWithCondition === null) {
            $this->throwNullValueException(static::MERGE_WITH_CONDITION);
        }

        return $this->setMergeWithCondition($mergeWithCondition);
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMergeWithConditionOrFail()
    {
        if ($this->mergeWithCondition === null) {
            $this->throwNullValueException(static::MERGE_WITH_CONDITION);
        }

        return $this->mergeWithCondition;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector|CompanySalesConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMergeWithCondition()
    {
        $this->assertPropertyIsSet(self::MERGE_WITH_CONDITION);

        return $this;
    }

    /**
     * @module Sales
     *
     * @param string|null $mergeOperator
     *
     * @return $this
     */
    public function setMergeOperator($mergeOperator)
    {
        $this->mergeOperator = $mergeOperator;
        $this->modifiedProperties[self::MERGE_OPERATOR] = true;

        return $this;
    }

    /**
     * @module Sales
     *
     * @return string|null
     */
    public function getMergeOperator()
    {
        return $this->mergeOperator;
    }

    /**
     * @module Sales
     *
     * @param string|null $mergeOperator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMergeOperatorOrFail($mergeOperator)
    {
        if ($mergeOperator === null) {
            $this->throwNullValueException(static::MERGE_OPERATOR);
        }

        return $this->setMergeOperator($mergeOperator);
    }

    /**
     * @module Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMergeOperatorOrFail()
    {
        if ($this->mergeOperator === null) {
            $this->throwNullValueException(static::MERGE_OPERATOR);
        }

        return $this->mergeOperator;
    }

    /**
     * @module Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMergeOperator()
    {
        $this->assertPropertyIsSet(self::MERGE_OPERATOR);

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
                case 'column':
                case 'value':
                case 'comparison':
                case 'mergeWithCondition':
                case 'mergeOperator':
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
                case 'column':
                case 'value':
                case 'comparison':
                case 'mergeWithCondition':
                case 'mergeOperator':
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
                case 'column':
                case 'value':
                case 'comparison':
                case 'mergeWithCondition':
                case 'mergeOperator':
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
            'column' => $this->column,
            'value' => $this->value,
            'comparison' => $this->comparison,
            'mergeWithCondition' => $this->mergeWithCondition,
            'mergeOperator' => $this->mergeOperator,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'column' => $this->column,
            'value' => $this->value,
            'comparison' => $this->comparison,
            'merge_with_condition' => $this->mergeWithCondition,
            'merge_operator' => $this->mergeOperator,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'column' => $this->column instanceof AbstractTransfer ? $this->column->toArray(true, false) : $this->column,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'comparison' => $this->comparison instanceof AbstractTransfer ? $this->comparison->toArray(true, false) : $this->comparison,
            'merge_with_condition' => $this->mergeWithCondition instanceof AbstractTransfer ? $this->mergeWithCondition->toArray(true, false) : $this->mergeWithCondition,
            'merge_operator' => $this->mergeOperator instanceof AbstractTransfer ? $this->mergeOperator->toArray(true, false) : $this->mergeOperator,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'column' => $this->column instanceof AbstractTransfer ? $this->column->toArray(true, true) : $this->column,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'comparison' => $this->comparison instanceof AbstractTransfer ? $this->comparison->toArray(true, true) : $this->comparison,
            'mergeWithCondition' => $this->mergeWithCondition instanceof AbstractTransfer ? $this->mergeWithCondition->toArray(true, true) : $this->mergeWithCondition,
            'mergeOperator' => $this->mergeOperator instanceof AbstractTransfer ? $this->mergeOperator->toArray(true, true) : $this->mergeOperator,
        ];
    }
}
