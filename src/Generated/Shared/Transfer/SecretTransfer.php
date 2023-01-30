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
class SecretTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SECRET_KEY = 'secretKey';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const SECRET_TAGS = 'secretTags';

    /**
     * @var \Generated\Shared\Transfer\SecretKeyTransfer|null
     */
    protected $secretKey;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SecretTagTransfer[]
     */
    protected $secretTags;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'secret_key' => 'secretKey',
        'secretKey' => 'secretKey',
        'SecretKey' => 'secretKey',
        'value' => 'value',
        'Value' => 'value',
        'secret_tags' => 'secretTags',
        'secretTags' => 'secretTags',
        'SecretTags' => 'secretTags',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SECRET_KEY => [
            'type' => 'Generated\Shared\Transfer\SecretKeyTransfer',
            'type_shim' => null,
            'name_underscore' => 'secret_key',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::SECRET_TAGS => [
            'type' => 'Generated\Shared\Transfer\SecretTagTransfer',
            'type_shim' => null,
            'name_underscore' => 'secret_tags',
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
     * @module SecretsManagerAws
     *
     * @param \Generated\Shared\Transfer\SecretKeyTransfer|null $secretKey
     *
     * @return $this
     */
    public function setSecretKey(SecretKeyTransfer $secretKey = null)
    {
        $this->secretKey = $secretKey;
        $this->modifiedProperties[self::SECRET_KEY] = true;

        return $this;
    }

    /**
     * @module SecretsManagerAws
     *
     * @return \Generated\Shared\Transfer\SecretKeyTransfer|null
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @module SecretsManagerAws
     *
     * @param \Generated\Shared\Transfer\SecretKeyTransfer $secretKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSecretKeyOrFail(SecretKeyTransfer $secretKey)
    {
        return $this->setSecretKey($secretKey);
    }

    /**
     * @module SecretsManagerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SecretKeyTransfer
     */
    public function getSecretKeyOrFail()
    {
        if ($this->secretKey === null) {
            $this->throwNullValueException(static::SECRET_KEY);
        }

        return $this->secretKey;
    }

    /**
     * @module SecretsManagerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSecretKey()
    {
        $this->assertPropertyIsSet(self::SECRET_KEY);

        return $this;
    }

    /**
     * @module SecretsManagerAws
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
     * @module SecretsManagerAws
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module SecretsManagerAws
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
     * @module SecretsManagerAws
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
     * @module SecretsManagerAws
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
     * @module SecretsManagerAws
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SecretTagTransfer[] $secretTags
     *
     * @return $this
     */
    public function setSecretTags(ArrayObject $secretTags)
    {
        $this->secretTags = $secretTags;
        $this->modifiedProperties[self::SECRET_TAGS] = true;

        return $this;
    }

    /**
     * @module SecretsManagerAws
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SecretTagTransfer[]
     */
    public function getSecretTags()
    {
        return $this->secretTags;
    }

    /**
     * @module SecretsManagerAws
     *
     * @param \Generated\Shared\Transfer\SecretTagTransfer $secretTag
     *
     * @return $this
     */
    public function addSecretTag(SecretTagTransfer $secretTag)
    {
        $this->secretTags[] = $secretTag;
        $this->modifiedProperties[self::SECRET_TAGS] = true;

        return $this;
    }

    /**
     * @module SecretsManagerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSecretTags()
    {
        $this->assertCollectionPropertyIsSet(self::SECRET_TAGS);

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
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'secretKey':
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
                case 'secretTags':
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
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'secretKey':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'secretTags':
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
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'secretKey':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'secretTags':
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
        $this->secretTags = $this->secretTags ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'value' => $this->value,
            'secretKey' => $this->secretKey,
            'secretTags' => $this->secretTags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'value' => $this->value,
            'secret_key' => $this->secretKey,
            'secret_tags' => $this->secretTags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'secret_key' => $this->secretKey instanceof AbstractTransfer ? $this->secretKey->toArray(true, false) : $this->secretKey,
            'secret_tags' => $this->secretTags instanceof AbstractTransfer ? $this->secretTags->toArray(true, false) : $this->addValuesToCollection($this->secretTags, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'secretKey' => $this->secretKey instanceof AbstractTransfer ? $this->secretKey->toArray(true, true) : $this->secretKey,
            'secretTags' => $this->secretTags instanceof AbstractTransfer ? $this->secretTags->toArray(true, true) : $this->addValuesToCollection($this->secretTags, true, true),
        ];
    }
}
