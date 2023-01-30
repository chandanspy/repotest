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
class ValidationErrorTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const ROOT = 'root';

    /**
     * @var string
     */
    public const PROPERTY_PATH = 'propertyPath';

    /**
     * @var string
     */
    public const INVALID_VALUE = 'invalidValue';

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var object|null
     */
    protected $root;

    /**
     * @var string|null
     */
    protected $propertyPath;

    /**
     * @var string|null
     */
    protected $invalidValue;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'message' => 'message',
        'Message' => 'message',
        'root' => 'root',
        'Root' => 'root',
        'property_path' => 'propertyPath',
        'propertyPath' => 'propertyPath',
        'PropertyPath' => 'propertyPath',
        'invalid_value' => 'invalidValue',
        'invalidValue' => 'invalidValue',
        'InvalidValue' => 'invalidValue',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ROOT => [
            'type' => 'object',
            'type_shim' => null,
            'name_underscore' => 'root',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROPERTY_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'property_path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INVALID_VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'invalid_value',
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
     * @module PriceProductVolume|PriceProduct
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param object|null|null $root
     *
     * @return $this
     */
    public function setRoot(object $root = null)
    {
        $this->root = $root;
        $this->modifiedProperties[self::ROOT] = true;

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @return object|null
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param object|null $root
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRootOrFail(object $root)
    {
        return $this->setRoot($root);
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return object
     */
    public function getRootOrFail()
    {
        if ($this->root === null) {
            $this->throwNullValueException(static::ROOT);
        }

        return $this->root;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoot()
    {
        $this->assertPropertyIsSet(self::ROOT);

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param string|null $propertyPath
     *
     * @return $this
     */
    public function setPropertyPath($propertyPath)
    {
        $this->propertyPath = $propertyPath;
        $this->modifiedProperties[self::PROPERTY_PATH] = true;

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @return string|null
     */
    public function getPropertyPath()
    {
        return $this->propertyPath;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param string|null $propertyPath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPropertyPathOrFail($propertyPath)
    {
        if ($propertyPath === null) {
            $this->throwNullValueException(static::PROPERTY_PATH);
        }

        return $this->setPropertyPath($propertyPath);
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPropertyPathOrFail()
    {
        if ($this->propertyPath === null) {
            $this->throwNullValueException(static::PROPERTY_PATH);
        }

        return $this->propertyPath;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePropertyPath()
    {
        $this->assertPropertyIsSet(self::PROPERTY_PATH);

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param string|null $invalidValue
     *
     * @return $this
     */
    public function setInvalidValue($invalidValue)
    {
        $this->invalidValue = $invalidValue;
        $this->modifiedProperties[self::INVALID_VALUE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @return string|null
     */
    public function getInvalidValue()
    {
        return $this->invalidValue;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param string|null $invalidValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInvalidValueOrFail($invalidValue)
    {
        if ($invalidValue === null) {
            $this->throwNullValueException(static::INVALID_VALUE);
        }

        return $this->setInvalidValue($invalidValue);
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInvalidValueOrFail()
    {
        if ($this->invalidValue === null) {
            $this->throwNullValueException(static::INVALID_VALUE);
        }

        return $this->invalidValue;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInvalidValue()
    {
        $this->assertPropertyIsSet(self::INVALID_VALUE);

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
                case 'message':
                case 'root':
                case 'propertyPath':
                case 'invalidValue':
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
                case 'message':
                case 'root':
                case 'propertyPath':
                case 'invalidValue':
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
                case 'message':
                case 'root':
                case 'propertyPath':
                case 'invalidValue':
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
            'message' => $this->message,
            'root' => $this->root,
            'propertyPath' => $this->propertyPath,
            'invalidValue' => $this->invalidValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message,
            'root' => $this->root,
            'property_path' => $this->propertyPath,
            'invalid_value' => $this->invalidValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'root' => $this->root instanceof AbstractTransfer ? $this->root->toArray(true, false) : $this->root,
            'property_path' => $this->propertyPath instanceof AbstractTransfer ? $this->propertyPath->toArray(true, false) : $this->propertyPath,
            'invalid_value' => $this->invalidValue instanceof AbstractTransfer ? $this->invalidValue->toArray(true, false) : $this->invalidValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'root' => $this->root instanceof AbstractTransfer ? $this->root->toArray(true, true) : $this->root,
            'propertyPath' => $this->propertyPath instanceof AbstractTransfer ? $this->propertyPath->toArray(true, true) : $this->propertyPath,
            'invalidValue' => $this->invalidValue instanceof AbstractTransfer ? $this->invalidValue->toArray(true, true) : $this->invalidValue,
        ];
    }
}
