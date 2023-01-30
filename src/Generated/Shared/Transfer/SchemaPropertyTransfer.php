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
class SchemaPropertyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const REFERENCE = 'reference';

    /**
     * @var string
     */
    public const ITEMS_REFERENCE = 'itemsReference';

    /**
     * @var string
     */
    public const ITEMS_TYPE = 'itemsType';

    /**
     * @var string
     */
    public const IS_NULLABLE = 'isNullable';

    /**
     * @var string
     */
    public const ONE_OF = 'oneOf';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $reference;

    /**
     * @var string|null
     */
    protected $itemsReference;

    /**
     * @var string|null
     */
    protected $itemsType;

    /**
     * @var bool|null
     */
    protected $isNullable;

    /**
     * @var string[]
     */
    protected $oneOf = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'type' => 'type',
        'Type' => 'type',
        'reference' => 'reference',
        'Reference' => 'reference',
        'items_reference' => 'itemsReference',
        'itemsReference' => 'itemsReference',
        'ItemsReference' => 'itemsReference',
        'items_type' => 'itemsType',
        'itemsType' => 'itemsType',
        'ItemsType' => 'itemsType',
        'is_nullable' => 'isNullable',
        'isNullable' => 'isNullable',
        'IsNullable' => 'isNullable',
        'one_of' => 'oneOf',
        'oneOf' => 'oneOf',
        'OneOf' => 'oneOf',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
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
        self::REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'items_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'items_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_NULLABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_nullable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ONE_OF => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'one_of',
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
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
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
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module DocumentationGeneratorRestApi
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
     * @module DocumentationGeneratorRestApi
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
     * @module DocumentationGeneratorRestApi
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
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        $this->modifiedProperties[self::REFERENCE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $reference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReferenceOrFail($reference)
    {
        if ($reference === null) {
            $this->throwNullValueException(static::REFERENCE);
        }

        return $this->setReference($reference);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReferenceOrFail()
    {
        if ($this->reference === null) {
            $this->throwNullValueException(static::REFERENCE);
        }

        return $this->reference;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReference()
    {
        $this->assertPropertyIsSet(self::REFERENCE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $itemsReference
     *
     * @return $this
     */
    public function setItemsReference($itemsReference)
    {
        $this->itemsReference = $itemsReference;
        $this->modifiedProperties[self::ITEMS_REFERENCE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getItemsReference()
    {
        return $this->itemsReference;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $itemsReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemsReferenceOrFail($itemsReference)
    {
        if ($itemsReference === null) {
            $this->throwNullValueException(static::ITEMS_REFERENCE);
        }

        return $this->setItemsReference($itemsReference);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getItemsReferenceOrFail()
    {
        if ($this->itemsReference === null) {
            $this->throwNullValueException(static::ITEMS_REFERENCE);
        }

        return $this->itemsReference;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemsReference()
    {
        $this->assertPropertyIsSet(self::ITEMS_REFERENCE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $itemsType
     *
     * @return $this
     */
    public function setItemsType($itemsType)
    {
        $this->itemsType = $itemsType;
        $this->modifiedProperties[self::ITEMS_TYPE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getItemsType()
    {
        return $this->itemsType;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $itemsType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemsTypeOrFail($itemsType)
    {
        if ($itemsType === null) {
            $this->throwNullValueException(static::ITEMS_TYPE);
        }

        return $this->setItemsType($itemsType);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getItemsTypeOrFail()
    {
        if ($this->itemsType === null) {
            $this->throwNullValueException(static::ITEMS_TYPE);
        }

        return $this->itemsType;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemsType()
    {
        $this->assertPropertyIsSet(self::ITEMS_TYPE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isNullable
     *
     * @return $this
     */
    public function setIsNullable($isNullable)
    {
        $this->isNullable = $isNullable;
        $this->modifiedProperties[self::IS_NULLABLE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getIsNullable()
    {
        return $this->isNullable;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isNullable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsNullableOrFail($isNullable)
    {
        if ($isNullable === null) {
            $this->throwNullValueException(static::IS_NULLABLE);
        }

        return $this->setIsNullable($isNullable);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsNullableOrFail()
    {
        if ($this->isNullable === null) {
            $this->throwNullValueException(static::IS_NULLABLE);
        }

        return $this->isNullable;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsNullable()
    {
        $this->assertPropertyIsSet(self::IS_NULLABLE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string[]|null $oneOf
     *
     * @return $this
     */
    public function setOneOf(array $oneOf = null)
    {
        if ($oneOf === null) {
            $oneOf = [];
        }

        $this->oneOf = $oneOf;
        $this->modifiedProperties[self::ONE_OF] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string[]
     */
    public function getOneOf()
    {
        return $this->oneOf;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string $oneOf
     *
     * @return $this
     */
    public function addOneOf($oneOf)
    {
        $this->oneOf[] = $oneOf;
        $this->modifiedProperties[self::ONE_OF] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOneOf()
    {
        $this->assertPropertyIsSet(self::ONE_OF);

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
                case 'name':
                case 'type':
                case 'reference':
                case 'itemsReference':
                case 'itemsType':
                case 'isNullable':
                case 'oneOf':
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
                case 'name':
                case 'type':
                case 'reference':
                case 'itemsReference':
                case 'itemsType':
                case 'isNullable':
                case 'oneOf':
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
                case 'name':
                case 'type':
                case 'reference':
                case 'itemsReference':
                case 'itemsType':
                case 'isNullable':
                case 'oneOf':
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
            'name' => $this->name,
            'type' => $this->type,
            'reference' => $this->reference,
            'itemsReference' => $this->itemsReference,
            'itemsType' => $this->itemsType,
            'isNullable' => $this->isNullable,
            'oneOf' => $this->oneOf,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'reference' => $this->reference,
            'items_reference' => $this->itemsReference,
            'items_type' => $this->itemsType,
            'is_nullable' => $this->isNullable,
            'one_of' => $this->oneOf,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'reference' => $this->reference instanceof AbstractTransfer ? $this->reference->toArray(true, false) : $this->reference,
            'items_reference' => $this->itemsReference instanceof AbstractTransfer ? $this->itemsReference->toArray(true, false) : $this->itemsReference,
            'items_type' => $this->itemsType instanceof AbstractTransfer ? $this->itemsType->toArray(true, false) : $this->itemsType,
            'is_nullable' => $this->isNullable instanceof AbstractTransfer ? $this->isNullable->toArray(true, false) : $this->isNullable,
            'one_of' => $this->oneOf instanceof AbstractTransfer ? $this->oneOf->toArray(true, false) : $this->oneOf,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'reference' => $this->reference instanceof AbstractTransfer ? $this->reference->toArray(true, true) : $this->reference,
            'itemsReference' => $this->itemsReference instanceof AbstractTransfer ? $this->itemsReference->toArray(true, true) : $this->itemsReference,
            'itemsType' => $this->itemsType instanceof AbstractTransfer ? $this->itemsType->toArray(true, true) : $this->itemsType,
            'isNullable' => $this->isNullable instanceof AbstractTransfer ? $this->isNullable->toArray(true, true) : $this->isNullable,
            'oneOf' => $this->oneOf instanceof AbstractTransfer ? $this->oneOf->toArray(true, true) : $this->oneOf,
        ];
    }
}
