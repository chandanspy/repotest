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
class PropelQueryBuilderRuleSetTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONDITION = 'condition';

    /**
     * @var string
     */
    public const RULES = 'rules';

    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var string
     */
    public const FIELD = 'field';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const INPUT = 'input';

    /**
     * @var string
     */
    public const OPERATOR = 'operator';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string|null
     */
    protected $condition;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer[]
     */
    protected $rules;

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $field;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $input;

    /**
     * @var string|null
     */
    protected $operator;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'condition' => 'condition',
        'Condition' => 'condition',
        'rules' => 'rules',
        'Rules' => 'rules',
        'id' => 'id',
        'Id' => 'id',
        'field' => 'field',
        'Field' => 'field',
        'type' => 'type',
        'Type' => 'type',
        'input' => 'input',
        'Input' => 'input',
        'operator' => 'operator',
        'Operator' => 'operator',
        'value' => 'value',
        'Value' => 'value',
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
        self::RULES => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'rules',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIELD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'field',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INPUT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'input',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPERATOR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'operator',
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
    ];

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer[] $rules
     *
     * @return $this
     */
    public function setRules(ArrayObject $rules)
    {
        $this->rules = $rules;
        $this->modifiedProperties[self::RULES] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer[]
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer $rules
     *
     * @return $this
     */
    public function addRules(PropelQueryBuilderRuleSetTransfer $rules)
    {
        $this->rules[] = $rules;
        $this->modifiedProperties[self::RULES] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRules()
    {
        $this->assertCollectionPropertyIsSet(self::RULES);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->modifiedProperties[self::ID] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $id
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOrFail($id)
    {
        if ($id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->setId($id);
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdOrFail()
    {
        if ($this->id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->id;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireId()
    {
        $this->assertPropertyIsSet(self::ID);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $field
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->field = $field;
        $this->modifiedProperties[self::FIELD] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $field
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFieldOrFail($field)
    {
        if ($field === null) {
            $this->throwNullValueException(static::FIELD);
        }

        return $this->setField($field);
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFieldOrFail()
    {
        if ($this->field === null) {
            $this->throwNullValueException(static::FIELD);
        }

        return $this->field;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireField()
    {
        $this->assertPropertyIsSet(self::FIELD);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $input
     *
     * @return $this
     */
    public function setInput($input)
    {
        $this->input = $input;
        $this->modifiedProperties[self::INPUT] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return string|null
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $input
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInputOrFail($input)
    {
        if ($input === null) {
            $this->throwNullValueException(static::INPUT);
        }

        return $this->setInput($input);
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInputOrFail()
    {
        if ($this->input === null) {
            $this->throwNullValueException(static::INPUT);
        }

        return $this->input;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInput()
    {
        $this->assertPropertyIsSet(self::INPUT);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        $this->modifiedProperties[self::OPERATOR] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return string|null
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @param string|null $operator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOperatorOrFail($operator)
    {
        if ($operator === null) {
            $this->throwNullValueException(static::OPERATOR);
        }

        return $this->setOperator($operator);
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOperatorOrFail()
    {
        if ($this->operator === null) {
            $this->throwNullValueException(static::OPERATOR);
        }

        return $this->operator;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOperator()
    {
        $this->assertPropertyIsSet(self::OPERATOR);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
     * @module ProductRelationGui|ProductRelation|PropelQueryBuilder
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
                case 'id':
                case 'field':
                case 'type':
                case 'input':
                case 'operator':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'rules':
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
                case 'id':
                case 'field':
                case 'type':
                case 'input':
                case 'operator':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'rules':
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
                case 'id':
                case 'field':
                case 'type':
                case 'input':
                case 'operator':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'rules':
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
        $this->rules = $this->rules ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'condition' => $this->condition,
            'id' => $this->id,
            'field' => $this->field,
            'type' => $this->type,
            'input' => $this->input,
            'operator' => $this->operator,
            'value' => $this->value,
            'rules' => $this->rules,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'condition' => $this->condition,
            'id' => $this->id,
            'field' => $this->field,
            'type' => $this->type,
            'input' => $this->input,
            'operator' => $this->operator,
            'value' => $this->value,
            'rules' => $this->rules,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'condition' => $this->condition instanceof AbstractTransfer ? $this->condition->toArray(true, false) : $this->condition,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'field' => $this->field instanceof AbstractTransfer ? $this->field->toArray(true, false) : $this->field,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'input' => $this->input instanceof AbstractTransfer ? $this->input->toArray(true, false) : $this->input,
            'operator' => $this->operator instanceof AbstractTransfer ? $this->operator->toArray(true, false) : $this->operator,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'rules' => $this->rules instanceof AbstractTransfer ? $this->rules->toArray(true, false) : $this->addValuesToCollection($this->rules, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'condition' => $this->condition instanceof AbstractTransfer ? $this->condition->toArray(true, true) : $this->condition,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'field' => $this->field instanceof AbstractTransfer ? $this->field->toArray(true, true) : $this->field,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'input' => $this->input instanceof AbstractTransfer ? $this->input->toArray(true, true) : $this->input,
            'operator' => $this->operator instanceof AbstractTransfer ? $this->operator->toArray(true, true) : $this->operator,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'rules' => $this->rules instanceof AbstractTransfer ? $this->rules->toArray(true, true) : $this->addValuesToCollection($this->rules, true, true),
        ];
    }
}
