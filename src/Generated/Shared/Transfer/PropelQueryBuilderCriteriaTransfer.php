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
class PropelQueryBuilderCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RULE_SET = 'ruleSet';

    /**
     * @var string
     */
    public const MAPPINGS = 'mappings';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const COLUMN_SELECTION = 'columnSelection';

    /**
     * @var \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null
     */
    protected $ruleSet;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderCriteriaMappingTransfer[]
     */
    protected $mappings;

    /**
     * @var \Generated\Shared\Transfer\PropelQueryBuilderPaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \Generated\Shared\Transfer\PropelQueryBuilderColumnSelectionTransfer|null
     */
    protected $columnSelection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'rule_set' => 'ruleSet',
        'ruleSet' => 'ruleSet',
        'RuleSet' => 'ruleSet',
        'mappings' => 'mappings',
        'Mappings' => 'mappings',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'column_selection' => 'columnSelection',
        'columnSelection' => 'columnSelection',
        'ColumnSelection' => 'columnSelection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RULE_SET => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'rule_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MAPPINGS => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderCriteriaMappingTransfer',
            'type_shim' => null,
            'name_underscore' => 'mappings',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderPaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COLUMN_SELECTION => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderColumnSelectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'column_selection',
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null $ruleSet
     *
     * @return $this
     */
    public function setRuleSet(PropelQueryBuilderRuleSetTransfer $ruleSet = null)
    {
        $this->ruleSet = $ruleSet;
        $this->modifiedProperties[self::RULE_SET] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null
     */
    public function getRuleSet()
    {
        return $this->ruleSet;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer $ruleSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRuleSetOrFail(PropelQueryBuilderRuleSetTransfer $ruleSet)
    {
        return $this->setRuleSet($ruleSet);
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer
     */
    public function getRuleSetOrFail()
    {
        if ($this->ruleSet === null) {
            $this->throwNullValueException(static::RULE_SET);
        }

        return $this->ruleSet;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRuleSet()
    {
        $this->assertPropertyIsSet(self::RULE_SET);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderCriteriaMappingTransfer[] $mappings
     *
     * @return $this
     */
    public function setMappings(ArrayObject $mappings)
    {
        $this->mappings = $mappings;
        $this->modifiedProperties[self::MAPPINGS] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderCriteriaMappingTransfer[]
     */
    public function getMappings()
    {
        return $this->mappings;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderCriteriaMappingTransfer $mapping
     *
     * @return $this
     */
    public function addMapping(PropelQueryBuilderCriteriaMappingTransfer $mapping)
    {
        $this->mappings[] = $mapping;
        $this->modifiedProperties[self::MAPPINGS] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMappings()
    {
        $this->assertCollectionPropertyIsSet(self::MAPPINGS);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderPaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PropelQueryBuilderPaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderPaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderPaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PropelQueryBuilderPaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderPaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderColumnSelectionTransfer|null $columnSelection
     *
     * @return $this
     */
    public function setColumnSelection(PropelQueryBuilderColumnSelectionTransfer $columnSelection = null)
    {
        $this->columnSelection = $columnSelection;
        $this->modifiedProperties[self::COLUMN_SELECTION] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderColumnSelectionTransfer|null
     */
    public function getColumnSelection()
    {
        return $this->columnSelection;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderColumnSelectionTransfer $columnSelection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setColumnSelectionOrFail(PropelQueryBuilderColumnSelectionTransfer $columnSelection)
    {
        return $this->setColumnSelection($columnSelection);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderColumnSelectionTransfer
     */
    public function getColumnSelectionOrFail()
    {
        if ($this->columnSelection === null) {
            $this->throwNullValueException(static::COLUMN_SELECTION);
        }

        return $this->columnSelection;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireColumnSelection()
    {
        $this->assertPropertyIsSet(self::COLUMN_SELECTION);

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
                case 'ruleSet':
                case 'pagination':
                case 'columnSelection':
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
                case 'mappings':
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
                case 'ruleSet':
                case 'pagination':
                case 'columnSelection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'mappings':
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
                case 'ruleSet':
                case 'pagination':
                case 'columnSelection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'mappings':
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
        $this->mappings = $this->mappings ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'ruleSet' => $this->ruleSet,
            'pagination' => $this->pagination,
            'columnSelection' => $this->columnSelection,
            'mappings' => $this->mappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'rule_set' => $this->ruleSet,
            'pagination' => $this->pagination,
            'column_selection' => $this->columnSelection,
            'mappings' => $this->mappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'rule_set' => $this->ruleSet instanceof AbstractTransfer ? $this->ruleSet->toArray(true, false) : $this->ruleSet,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'column_selection' => $this->columnSelection instanceof AbstractTransfer ? $this->columnSelection->toArray(true, false) : $this->columnSelection,
            'mappings' => $this->mappings instanceof AbstractTransfer ? $this->mappings->toArray(true, false) : $this->addValuesToCollection($this->mappings, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'ruleSet' => $this->ruleSet instanceof AbstractTransfer ? $this->ruleSet->toArray(true, true) : $this->ruleSet,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'columnSelection' => $this->columnSelection instanceof AbstractTransfer ? $this->columnSelection->toArray(true, true) : $this->columnSelection,
            'mappings' => $this->mappings instanceof AbstractTransfer ? $this->mappings->toArray(true, true) : $this->addValuesToCollection($this->mappings, true, true),
        ];
    }
}
