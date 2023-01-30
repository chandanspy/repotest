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
class ArgumentTransfer extends AbstractTransfer
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
    public const VARIABLE = 'variable';

    /**
     * @var string
     */
    public const DEFAULT_VALUE = 'defaultValue';

    /**
     * @var string
     */
    public const IS_OPTIONAL = 'isOptional';

    /**
     * @var string
     */
    public const ARGUMENT_META = 'argumentMeta';

    /**
     * @var string
     */
    public const INNER_ARGUMENT = 'innerArgument';

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
    protected $variable;

    /**
     * @var string|null
     */
    protected $defaultValue;

    /**
     * @var bool|null
     */
    protected $isOptional;

    /**
     * @var \Generated\Shared\Transfer\ArgumentMetaTransfer|null
     */
    protected $argumentMeta;

    /**
     * @var \Generated\Shared\Transfer\ArgumentTransfer|null
     */
    protected $innerArgument;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'type' => 'type',
        'Type' => 'type',
        'variable' => 'variable',
        'Variable' => 'variable',
        'default_value' => 'defaultValue',
        'defaultValue' => 'defaultValue',
        'DefaultValue' => 'defaultValue',
        'is_optional' => 'isOptional',
        'isOptional' => 'isOptional',
        'IsOptional' => 'isOptional',
        'argument_meta' => 'argumentMeta',
        'argumentMeta' => 'argumentMeta',
        'ArgumentMeta' => 'argumentMeta',
        'inner_argument' => 'innerArgument',
        'innerArgument' => 'innerArgument',
        'InnerArgument' => 'innerArgument',
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
        self::VARIABLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'variable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_OPTIONAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_optional',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ARGUMENT_META => [
            'type' => 'Generated\Shared\Transfer\ArgumentMetaTransfer',
            'type_shim' => null,
            'name_underscore' => 'argument_meta',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INNER_ARGUMENT => [
            'type' => 'Generated\Shared\Transfer\ArgumentTransfer',
            'type_shim' => null,
            'name_underscore' => 'inner_argument',
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
     * @module SprykGui
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
     * @module SprykGui
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module SprykGui
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
     * @module SprykGui
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
     * @module SprykGui
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
     * @module SprykGui
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
     * @module SprykGui
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module SprykGui
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
     * @module SprykGui
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
     * @module SprykGui
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
     * @module SprykGui
     *
     * @param string|null $variable
     *
     * @return $this
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;
        $this->modifiedProperties[self::VARIABLE] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return string|null
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * @module SprykGui
     *
     * @param string|null $variable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVariableOrFail($variable)
    {
        if ($variable === null) {
            $this->throwNullValueException(static::VARIABLE);
        }

        return $this->setVariable($variable);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVariableOrFail()
    {
        if ($this->variable === null) {
            $this->throwNullValueException(static::VARIABLE);
        }

        return $this->variable;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVariable()
    {
        $this->assertPropertyIsSet(self::VARIABLE);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param string|null $defaultValue
     *
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        $this->modifiedProperties[self::DEFAULT_VALUE] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @module SprykGui
     *
     * @param string|null $defaultValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultValueOrFail($defaultValue)
    {
        if ($defaultValue === null) {
            $this->throwNullValueException(static::DEFAULT_VALUE);
        }

        return $this->setDefaultValue($defaultValue);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultValueOrFail()
    {
        if ($this->defaultValue === null) {
            $this->throwNullValueException(static::DEFAULT_VALUE);
        }

        return $this->defaultValue;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultValue()
    {
        $this->assertPropertyIsSet(self::DEFAULT_VALUE);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param bool|null $isOptional
     *
     * @return $this
     */
    public function setIsOptional($isOptional)
    {
        $this->isOptional = $isOptional;
        $this->modifiedProperties[self::IS_OPTIONAL] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return bool|null
     */
    public function getIsOptional()
    {
        return $this->isOptional;
    }

    /**
     * @module SprykGui
     *
     * @param bool|null $isOptional
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsOptionalOrFail($isOptional)
    {
        if ($isOptional === null) {
            $this->throwNullValueException(static::IS_OPTIONAL);
        }

        return $this->setIsOptional($isOptional);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOptionalOrFail()
    {
        if ($this->isOptional === null) {
            $this->throwNullValueException(static::IS_OPTIONAL);
        }

        return $this->isOptional;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOptional()
    {
        $this->assertPropertyIsSet(self::IS_OPTIONAL);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ArgumentMetaTransfer|null $argumentMeta
     *
     * @return $this
     */
    public function setArgumentMeta(ArgumentMetaTransfer $argumentMeta = null)
    {
        $this->argumentMeta = $argumentMeta;
        $this->modifiedProperties[self::ARGUMENT_META] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\ArgumentMetaTransfer|null
     */
    public function getArgumentMeta()
    {
        return $this->argumentMeta;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ArgumentMetaTransfer $argumentMeta
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setArgumentMetaOrFail(ArgumentMetaTransfer $argumentMeta)
    {
        return $this->setArgumentMeta($argumentMeta);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ArgumentMetaTransfer
     */
    public function getArgumentMetaOrFail()
    {
        if ($this->argumentMeta === null) {
            $this->throwNullValueException(static::ARGUMENT_META);
        }

        return $this->argumentMeta;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireArgumentMeta()
    {
        $this->assertPropertyIsSet(self::ARGUMENT_META);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ArgumentTransfer|null $innerArgument
     *
     * @return $this
     */
    public function setInnerArgument(ArgumentTransfer $innerArgument = null)
    {
        $this->innerArgument = $innerArgument;
        $this->modifiedProperties[self::INNER_ARGUMENT] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\ArgumentTransfer|null
     */
    public function getInnerArgument()
    {
        return $this->innerArgument;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ArgumentTransfer $innerArgument
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInnerArgumentOrFail(ArgumentTransfer $innerArgument)
    {
        return $this->setInnerArgument($innerArgument);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ArgumentTransfer
     */
    public function getInnerArgumentOrFail()
    {
        if ($this->innerArgument === null) {
            $this->throwNullValueException(static::INNER_ARGUMENT);
        }

        return $this->innerArgument;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInnerArgument()
    {
        $this->assertPropertyIsSet(self::INNER_ARGUMENT);

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
                case 'variable':
                case 'defaultValue':
                case 'isOptional':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'argumentMeta':
                case 'innerArgument':
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
                case 'name':
                case 'type':
                case 'variable':
                case 'defaultValue':
                case 'isOptional':
                    $values[$arrayKey] = $value;

                    break;
                case 'argumentMeta':
                case 'innerArgument':
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
                case 'name':
                case 'type':
                case 'variable':
                case 'defaultValue':
                case 'isOptional':
                    $values[$arrayKey] = $value;

                    break;
                case 'argumentMeta':
                case 'innerArgument':
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
            'name' => $this->name,
            'type' => $this->type,
            'variable' => $this->variable,
            'defaultValue' => $this->defaultValue,
            'isOptional' => $this->isOptional,
            'argumentMeta' => $this->argumentMeta,
            'innerArgument' => $this->innerArgument,
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
            'variable' => $this->variable,
            'default_value' => $this->defaultValue,
            'is_optional' => $this->isOptional,
            'argument_meta' => $this->argumentMeta,
            'inner_argument' => $this->innerArgument,
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
            'variable' => $this->variable instanceof AbstractTransfer ? $this->variable->toArray(true, false) : $this->variable,
            'default_value' => $this->defaultValue instanceof AbstractTransfer ? $this->defaultValue->toArray(true, false) : $this->defaultValue,
            'is_optional' => $this->isOptional instanceof AbstractTransfer ? $this->isOptional->toArray(true, false) : $this->isOptional,
            'argument_meta' => $this->argumentMeta instanceof AbstractTransfer ? $this->argumentMeta->toArray(true, false) : $this->argumentMeta,
            'inner_argument' => $this->innerArgument instanceof AbstractTransfer ? $this->innerArgument->toArray(true, false) : $this->innerArgument,
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
            'variable' => $this->variable instanceof AbstractTransfer ? $this->variable->toArray(true, true) : $this->variable,
            'defaultValue' => $this->defaultValue instanceof AbstractTransfer ? $this->defaultValue->toArray(true, true) : $this->defaultValue,
            'isOptional' => $this->isOptional instanceof AbstractTransfer ? $this->isOptional->toArray(true, true) : $this->isOptional,
            'argumentMeta' => $this->argumentMeta instanceof AbstractTransfer ? $this->argumentMeta->toArray(true, true) : $this->argumentMeta,
            'innerArgument' => $this->innerArgument instanceof AbstractTransfer ? $this->innerArgument->toArray(true, true) : $this->innerArgument,
        ];
    }
}
