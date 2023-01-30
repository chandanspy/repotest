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
class RestProductManagementAttributeAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const INPUT_TYPE = 'inputType';

    /**
     * @var string
     */
    public const ALLOW_INPUT = 'allowInput';

    /**
     * @var string
     */
    public const IS_SUPER = 'isSuper';

    /**
     * @var string
     */
    public const LOCALIZED_KEYS = 'localizedKeys';

    /**
     * @var string
     */
    public const VALUES = 'values';

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $inputType;

    /**
     * @var bool|null
     */
    protected $allowInput;

    /**
     * @var bool|null
     */
    protected $isSuper;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestLocalizedProductManagementAttributeKeyAttributesTransfer[]
     */
    protected $localizedKeys;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestProductManagementAttributeValueAttributesTransfer[]
     */
    protected $values;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'key' => 'key',
        'Key' => 'key',
        'input_type' => 'inputType',
        'inputType' => 'inputType',
        'InputType' => 'inputType',
        'allow_input' => 'allowInput',
        'allowInput' => 'allowInput',
        'AllowInput' => 'allowInput',
        'is_super' => 'isSuper',
        'isSuper' => 'isSuper',
        'IsSuper' => 'isSuper',
        'localized_keys' => 'localizedKeys',
        'localizedKeys' => 'localizedKeys',
        'LocalizedKeys' => 'localizedKeys',
        'values' => 'values',
        'Values' => 'values',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INPUT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'input_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ALLOW_INPUT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'allow_input',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SUPER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_super',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_KEYS => [
            'type' => 'Generated\Shared\Transfer\RestLocalizedProductManagementAttributeKeyAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_keys',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUES => [
            'type' => 'Generated\Shared\Transfer\RestProductManagementAttributeValueAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'values',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductAttributesRestApi
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param string|null $inputType
     *
     * @return $this
     */
    public function setInputType($inputType)
    {
        $this->inputType = $inputType;
        $this->modifiedProperties[self::INPUT_TYPE] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @return string|null
     */
    public function getInputType()
    {
        return $this->inputType;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param string|null $inputType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInputTypeOrFail($inputType)
    {
        if ($inputType === null) {
            $this->throwNullValueException(static::INPUT_TYPE);
        }

        return $this->setInputType($inputType);
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInputTypeOrFail()
    {
        if ($this->inputType === null) {
            $this->throwNullValueException(static::INPUT_TYPE);
        }

        return $this->inputType;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInputType()
    {
        $this->assertPropertyIsSet(self::INPUT_TYPE);

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param bool|null $allowInput
     *
     * @return $this
     */
    public function setAllowInput($allowInput)
    {
        $this->allowInput = $allowInput;
        $this->modifiedProperties[self::ALLOW_INPUT] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @return bool|null
     */
    public function getAllowInput()
    {
        return $this->allowInput;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param bool|null $allowInput
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAllowInputOrFail($allowInput)
    {
        if ($allowInput === null) {
            $this->throwNullValueException(static::ALLOW_INPUT);
        }

        return $this->setAllowInput($allowInput);
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAllowInputOrFail()
    {
        if ($this->allowInput === null) {
            $this->throwNullValueException(static::ALLOW_INPUT);
        }

        return $this->allowInput;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAllowInput()
    {
        $this->assertPropertyIsSet(self::ALLOW_INPUT);

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param bool|null $isSuper
     *
     * @return $this
     */
    public function setIsSuper($isSuper)
    {
        $this->isSuper = $isSuper;
        $this->modifiedProperties[self::IS_SUPER] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @return bool|null
     */
    public function getIsSuper()
    {
        return $this->isSuper;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param bool|null $isSuper
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuperOrFail($isSuper)
    {
        if ($isSuper === null) {
            $this->throwNullValueException(static::IS_SUPER);
        }

        return $this->setIsSuper($isSuper);
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuperOrFail()
    {
        if ($this->isSuper === null) {
            $this->throwNullValueException(static::IS_SUPER);
        }

        return $this->isSuper;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuper()
    {
        $this->assertPropertyIsSet(self::IS_SUPER);

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestLocalizedProductManagementAttributeKeyAttributesTransfer[] $localizedKeys
     *
     * @return $this
     */
    public function setLocalizedKeys(ArrayObject $localizedKeys)
    {
        $this->localizedKeys = $localizedKeys;
        $this->modifiedProperties[self::LOCALIZED_KEYS] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestLocalizedProductManagementAttributeKeyAttributesTransfer[]
     */
    public function getLocalizedKeys()
    {
        return $this->localizedKeys;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param \Generated\Shared\Transfer\RestLocalizedProductManagementAttributeKeyAttributesTransfer $localizedKey
     *
     * @return $this
     */
    public function addLocalizedKey(RestLocalizedProductManagementAttributeKeyAttributesTransfer $localizedKey)
    {
        $this->localizedKeys[] = $localizedKey;
        $this->modifiedProperties[self::LOCALIZED_KEYS] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedKeys()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_KEYS);

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestProductManagementAttributeValueAttributesTransfer[] $values
     *
     * @return $this
     */
    public function setValues(ArrayObject $values)
    {
        $this->values = $values;
        $this->modifiedProperties[self::VALUES] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestProductManagementAttributeValueAttributesTransfer[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @param \Generated\Shared\Transfer\RestProductManagementAttributeValueAttributesTransfer $value
     *
     * @return $this
     */
    public function addValue(RestProductManagementAttributeValueAttributesTransfer $value)
    {
        $this->values[] = $value;
        $this->modifiedProperties[self::VALUES] = true;

        return $this;
    }

    /**
     * @module ProductAttributesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValues()
    {
        $this->assertCollectionPropertyIsSet(self::VALUES);

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
                case 'key':
                case 'inputType':
                case 'allowInput':
                case 'isSuper':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedKeys':
                case 'values':
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
                case 'key':
                case 'inputType':
                case 'allowInput':
                case 'isSuper':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedKeys':
                case 'values':
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
                case 'key':
                case 'inputType':
                case 'allowInput':
                case 'isSuper':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedKeys':
                case 'values':
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
        $this->localizedKeys = $this->localizedKeys ?: new ArrayObject();
        $this->values = $this->values ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'key' => $this->key,
            'inputType' => $this->inputType,
            'allowInput' => $this->allowInput,
            'isSuper' => $this->isSuper,
            'localizedKeys' => $this->localizedKeys,
            'values' => $this->values,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key,
            'input_type' => $this->inputType,
            'allow_input' => $this->allowInput,
            'is_super' => $this->isSuper,
            'localized_keys' => $this->localizedKeys,
            'values' => $this->values,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'input_type' => $this->inputType instanceof AbstractTransfer ? $this->inputType->toArray(true, false) : $this->inputType,
            'allow_input' => $this->allowInput instanceof AbstractTransfer ? $this->allowInput->toArray(true, false) : $this->allowInput,
            'is_super' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, false) : $this->isSuper,
            'localized_keys' => $this->localizedKeys instanceof AbstractTransfer ? $this->localizedKeys->toArray(true, false) : $this->addValuesToCollection($this->localizedKeys, true, false),
            'values' => $this->values instanceof AbstractTransfer ? $this->values->toArray(true, false) : $this->addValuesToCollection($this->values, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'inputType' => $this->inputType instanceof AbstractTransfer ? $this->inputType->toArray(true, true) : $this->inputType,
            'allowInput' => $this->allowInput instanceof AbstractTransfer ? $this->allowInput->toArray(true, true) : $this->allowInput,
            'isSuper' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, true) : $this->isSuper,
            'localizedKeys' => $this->localizedKeys instanceof AbstractTransfer ? $this->localizedKeys->toArray(true, true) : $this->addValuesToCollection($this->localizedKeys, true, true),
            'values' => $this->values instanceof AbstractTransfer ? $this->values->toArray(true, true) : $this->addValuesToCollection($this->values, true, true),
        ];
    }
}
