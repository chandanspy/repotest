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
class ParameterComponentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const REF_NAME = 'refName';

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
    public const SCHEMA = 'schema';

    /**
     * @var string|null
     */
    protected $refName;

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
     * @var \Generated\Shared\Transfer\ParameterSchemaTransfer|null
     */
    protected $schema;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'ref_name' => 'refName',
        'refName' => 'refName',
        'RefName' => 'refName',
        'name' => 'name',
        'Name' => 'name',
        'in' => 'in',
        'In' => 'in',
        'description' => 'description',
        'Description' => 'description',
        'required' => 'required',
        'Required' => 'required',
        'schema' => 'schema',
        'Schema' => 'schema',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::REF_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'ref_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::SCHEMA => [
            'type' => 'Generated\Shared\Transfer\ParameterSchemaTransfer',
            'type_shim' => null,
            'name_underscore' => 'schema',
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
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $refName
     *
     * @return $this
     */
    public function setRefName($refName)
    {
        $this->refName = $refName;
        $this->modifiedProperties[self::REF_NAME] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getRefName()
    {
        return $this->refName;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $refName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefNameOrFail($refName)
    {
        if ($refName === null) {
            $this->throwNullValueException(static::REF_NAME);
        }

        return $this->setRefName($refName);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRefNameOrFail()
    {
        if ($this->refName === null) {
            $this->throwNullValueException(static::REF_NAME);
        }

        return $this->refName;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefName()
    {
        $this->assertPropertyIsSet(self::REF_NAME);

        return $this;
    }

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
     * @param \Generated\Shared\Transfer\ParameterSchemaTransfer|null $schema
     *
     * @return $this
     */
    public function setSchema(ParameterSchemaTransfer $schema = null)
    {
        $this->schema = $schema;
        $this->modifiedProperties[self::SCHEMA] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return \Generated\Shared\Transfer\ParameterSchemaTransfer|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param \Generated\Shared\Transfer\ParameterSchemaTransfer $schema
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSchemaOrFail(ParameterSchemaTransfer $schema)
    {
        return $this->setSchema($schema);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ParameterSchemaTransfer
     */
    public function getSchemaOrFail()
    {
        if ($this->schema === null) {
            $this->throwNullValueException(static::SCHEMA);
        }

        return $this->schema;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSchema()
    {
        $this->assertPropertyIsSet(self::SCHEMA);

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
                case 'refName':
                case 'name':
                case 'in':
                case 'description':
                case 'required':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'schema':
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
                case 'refName':
                case 'name':
                case 'in':
                case 'description':
                case 'required':
                    $values[$arrayKey] = $value;

                    break;
                case 'schema':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'refName':
                case 'name':
                case 'in':
                case 'description':
                case 'required':
                    $values[$arrayKey] = $value;

                    break;
                case 'schema':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'refName' => $this->refName,
            'name' => $this->name,
            'in' => $this->in,
            'description' => $this->description,
            'required' => $this->required,
            'schema' => $this->schema,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'ref_name' => $this->refName,
            'name' => $this->name,
            'in' => $this->in,
            'description' => $this->description,
            'required' => $this->required,
            'schema' => $this->schema,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'ref_name' => $this->refName instanceof AbstractTransfer ? $this->refName->toArray(true, false) : $this->refName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'in' => $this->in instanceof AbstractTransfer ? $this->in->toArray(true, false) : $this->in,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'required' => $this->required instanceof AbstractTransfer ? $this->required->toArray(true, false) : $this->required,
            'schema' => $this->schema instanceof AbstractTransfer ? $this->schema->toArray(true, false) : $this->schema,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'refName' => $this->refName instanceof AbstractTransfer ? $this->refName->toArray(true, true) : $this->refName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'in' => $this->in instanceof AbstractTransfer ? $this->in->toArray(true, true) : $this->in,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'required' => $this->required instanceof AbstractTransfer ? $this->required->toArray(true, true) : $this->required,
            'schema' => $this->schema instanceof AbstractTransfer ? $this->schema->toArray(true, true) : $this->schema,
        ];
    }
}
