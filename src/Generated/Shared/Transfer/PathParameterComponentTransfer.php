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
class PathParameterComponentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IN = 'in';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const REQUIRED = 'required';

    /**
     * @var string
     */
    public const REF = 'ref';

    /**
     * @var string
     */
    public const DEPRECATED = 'deprecated';

    /**
     * @var string
     */
    public const ALLOW_EMPTY_VALUE = 'allowEmptyValue';

    /**
     * @var string
     */
    public const SCHEMA_TYPE = 'schemaType';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $in;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var bool|null
     */
    protected $required;

    /**
     * @var string|null
     */
    protected $ref;

    /**
     * @var bool|null
     */
    protected $deprecated;

    /**
     * @var bool|null
     */
    protected $allowEmptyValue;

    /**
     * @var string|null
     */
    protected $schemaType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'in' => 'in',
        'In' => 'in',
        'description' => 'description',
        'Description' => 'description',
        'required' => 'required',
        'Required' => 'required',
        'ref' => 'ref',
        'Ref' => 'ref',
        'deprecated' => 'deprecated',
        'Deprecated' => 'deprecated',
        'allow_empty_value' => 'allowEmptyValue',
        'allowEmptyValue' => 'allowEmptyValue',
        'AllowEmptyValue' => 'allowEmptyValue',
        'schema_type' => 'schemaType',
        'schemaType' => 'schemaType',
        'SchemaType' => 'schemaType',
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
        self::IN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'in',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUIRED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'required',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REF => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'ref',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEPRECATED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'deprecated',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ALLOW_EMPTY_VALUE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'allow_empty_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SCHEMA_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'schema_type',
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
     * @param string|null $in
     *
     * @return $this
     */
    public function setIn($in)
    {
        $this->in = $in;
        $this->modifiedProperties[self::IN] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $in
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInOrFail($in)
    {
        if ($in === null) {
            $this->throwNullValueException(static::IN);
        }

        return $this->setIn($in);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInOrFail()
    {
        if ($this->in === null) {
            $this->throwNullValueException(static::IN);
        }

        return $this->in;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIn()
    {
        $this->assertPropertyIsSet(self::IN);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;
        $this->modifiedProperties[self::REQUIRED] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $required
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequiredOrFail($required)
    {
        if ($required === null) {
            $this->throwNullValueException(static::REQUIRED);
        }

        return $this->setRequired($required);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getRequiredOrFail()
    {
        if ($this->required === null) {
            $this->throwNullValueException(static::REQUIRED);
        }

        return $this->required;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequired()
    {
        $this->assertPropertyIsSet(self::REQUIRED);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $ref
     *
     * @return $this
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        $this->modifiedProperties[self::REF] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $ref
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefOrFail($ref)
    {
        if ($ref === null) {
            $this->throwNullValueException(static::REF);
        }

        return $this->setRef($ref);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRefOrFail()
    {
        if ($this->ref === null) {
            $this->throwNullValueException(static::REF);
        }

        return $this->ref;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRef()
    {
        $this->assertPropertyIsSet(self::REF);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $deprecated
     *
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;
        $this->modifiedProperties[self::DEPRECATED] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $deprecated
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeprecatedOrFail($deprecated)
    {
        if ($deprecated === null) {
            $this->throwNullValueException(static::DEPRECATED);
        }

        return $this->setDeprecated($deprecated);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getDeprecatedOrFail()
    {
        if ($this->deprecated === null) {
            $this->throwNullValueException(static::DEPRECATED);
        }

        return $this->deprecated;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeprecated()
    {
        $this->assertPropertyIsSet(self::DEPRECATED);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $allowEmptyValue
     *
     * @return $this
     */
    public function setAllowEmptyValue($allowEmptyValue)
    {
        $this->allowEmptyValue = $allowEmptyValue;
        $this->modifiedProperties[self::ALLOW_EMPTY_VALUE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getAllowEmptyValue()
    {
        return $this->allowEmptyValue;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $allowEmptyValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAllowEmptyValueOrFail($allowEmptyValue)
    {
        if ($allowEmptyValue === null) {
            $this->throwNullValueException(static::ALLOW_EMPTY_VALUE);
        }

        return $this->setAllowEmptyValue($allowEmptyValue);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAllowEmptyValueOrFail()
    {
        if ($this->allowEmptyValue === null) {
            $this->throwNullValueException(static::ALLOW_EMPTY_VALUE);
        }

        return $this->allowEmptyValue;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAllowEmptyValue()
    {
        $this->assertPropertyIsSet(self::ALLOW_EMPTY_VALUE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $schemaType
     *
     * @return $this
     */
    public function setSchemaType($schemaType)
    {
        $this->schemaType = $schemaType;
        $this->modifiedProperties[self::SCHEMA_TYPE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getSchemaType()
    {
        return $this->schemaType;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $schemaType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSchemaTypeOrFail($schemaType)
    {
        if ($schemaType === null) {
            $this->throwNullValueException(static::SCHEMA_TYPE);
        }

        return $this->setSchemaType($schemaType);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSchemaTypeOrFail()
    {
        if ($this->schemaType === null) {
            $this->throwNullValueException(static::SCHEMA_TYPE);
        }

        return $this->schemaType;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSchemaType()
    {
        $this->assertPropertyIsSet(self::SCHEMA_TYPE);

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
                case 'in':
                case 'description':
                case 'required':
                case 'ref':
                case 'deprecated':
                case 'allowEmptyValue':
                case 'schemaType':
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
                case 'in':
                case 'description':
                case 'required':
                case 'ref':
                case 'deprecated':
                case 'allowEmptyValue':
                case 'schemaType':
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
                case 'in':
                case 'description':
                case 'required':
                case 'ref':
                case 'deprecated':
                case 'allowEmptyValue':
                case 'schemaType':
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
            'in' => $this->in,
            'description' => $this->description,
            'required' => $this->required,
            'ref' => $this->ref,
            'deprecated' => $this->deprecated,
            'allowEmptyValue' => $this->allowEmptyValue,
            'schemaType' => $this->schemaType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'in' => $this->in,
            'description' => $this->description,
            'required' => $this->required,
            'ref' => $this->ref,
            'deprecated' => $this->deprecated,
            'allow_empty_value' => $this->allowEmptyValue,
            'schema_type' => $this->schemaType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'in' => $this->in instanceof AbstractTransfer ? $this->in->toArray(true, false) : $this->in,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'required' => $this->required instanceof AbstractTransfer ? $this->required->toArray(true, false) : $this->required,
            'ref' => $this->ref instanceof AbstractTransfer ? $this->ref->toArray(true, false) : $this->ref,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, false) : $this->deprecated,
            'allow_empty_value' => $this->allowEmptyValue instanceof AbstractTransfer ? $this->allowEmptyValue->toArray(true, false) : $this->allowEmptyValue,
            'schema_type' => $this->schemaType instanceof AbstractTransfer ? $this->schemaType->toArray(true, false) : $this->schemaType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'in' => $this->in instanceof AbstractTransfer ? $this->in->toArray(true, true) : $this->in,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'required' => $this->required instanceof AbstractTransfer ? $this->required->toArray(true, true) : $this->required,
            'ref' => $this->ref instanceof AbstractTransfer ? $this->ref->toArray(true, true) : $this->ref,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, true) : $this->deprecated,
            'allowEmptyValue' => $this->allowEmptyValue instanceof AbstractTransfer ? $this->allowEmptyValue->toArray(true, true) : $this->allowEmptyValue,
            'schemaType' => $this->schemaType instanceof AbstractTransfer ? $this->schemaType->toArray(true, true) : $this->schemaType,
        ];
    }
}
