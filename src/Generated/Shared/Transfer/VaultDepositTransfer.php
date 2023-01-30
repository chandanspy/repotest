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
class VaultDepositTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DATA_TYPE = 'dataType';

    /**
     * @var string
     */
    public const DATA_KEY = 'dataKey';

    /**
     * @var string
     */
    public const INITIAL_VECTOR = 'initialVector';

    /**
     * @var string
     */
    public const CIPHER_TEXT = 'cipherText';

    /**
     * @var string|null
     */
    protected $dataType;

    /**
     * @var string|null
     */
    protected $dataKey;

    /**
     * @var string|null
     */
    protected $initialVector;

    /**
     * @var string|null
     */
    protected $cipherText;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'data_type' => 'dataType',
        'dataType' => 'dataType',
        'DataType' => 'dataType',
        'data_key' => 'dataKey',
        'dataKey' => 'dataKey',
        'DataKey' => 'dataKey',
        'initial_vector' => 'initialVector',
        'initialVector' => 'initialVector',
        'InitialVector' => 'initialVector',
        'cipher_text' => 'cipherText',
        'cipherText' => 'cipherText',
        'CipherText' => 'cipherText',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DATA_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'data_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'data_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INITIAL_VECTOR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'initial_vector',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CIPHER_TEXT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cipher_text',
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
     * @module Vault
     *
     * @param string|null $dataType
     *
     * @return $this
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        $this->modifiedProperties[self::DATA_TYPE] = true;

        return $this;
    }

    /**
     * @module Vault
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @module Vault
     *
     * @param string|null $dataType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataTypeOrFail($dataType)
    {
        if ($dataType === null) {
            $this->throwNullValueException(static::DATA_TYPE);
        }

        return $this->setDataType($dataType);
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataTypeOrFail()
    {
        if ($this->dataType === null) {
            $this->throwNullValueException(static::DATA_TYPE);
        }

        return $this->dataType;
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDataType()
    {
        $this->assertPropertyIsSet(self::DATA_TYPE);

        return $this;
    }

    /**
     * @module Vault
     *
     * @param string|null $dataKey
     *
     * @return $this
     */
    public function setDataKey($dataKey)
    {
        $this->dataKey = $dataKey;
        $this->modifiedProperties[self::DATA_KEY] = true;

        return $this;
    }

    /**
     * @module Vault
     *
     * @return string|null
     */
    public function getDataKey()
    {
        return $this->dataKey;
    }

    /**
     * @module Vault
     *
     * @param string|null $dataKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataKeyOrFail($dataKey)
    {
        if ($dataKey === null) {
            $this->throwNullValueException(static::DATA_KEY);
        }

        return $this->setDataKey($dataKey);
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataKeyOrFail()
    {
        if ($this->dataKey === null) {
            $this->throwNullValueException(static::DATA_KEY);
        }

        return $this->dataKey;
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDataKey()
    {
        $this->assertPropertyIsSet(self::DATA_KEY);

        return $this;
    }

    /**
     * @module Vault
     *
     * @param string|null $initialVector
     *
     * @return $this
     */
    public function setInitialVector($initialVector)
    {
        $this->initialVector = $initialVector;
        $this->modifiedProperties[self::INITIAL_VECTOR] = true;

        return $this;
    }

    /**
     * @module Vault
     *
     * @return string|null
     */
    public function getInitialVector()
    {
        return $this->initialVector;
    }

    /**
     * @module Vault
     *
     * @param string|null $initialVector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInitialVectorOrFail($initialVector)
    {
        if ($initialVector === null) {
            $this->throwNullValueException(static::INITIAL_VECTOR);
        }

        return $this->setInitialVector($initialVector);
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInitialVectorOrFail()
    {
        if ($this->initialVector === null) {
            $this->throwNullValueException(static::INITIAL_VECTOR);
        }

        return $this->initialVector;
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInitialVector()
    {
        $this->assertPropertyIsSet(self::INITIAL_VECTOR);

        return $this;
    }

    /**
     * @module Vault
     *
     * @param string|null $cipherText
     *
     * @return $this
     */
    public function setCipherText($cipherText)
    {
        $this->cipherText = $cipherText;
        $this->modifiedProperties[self::CIPHER_TEXT] = true;

        return $this;
    }

    /**
     * @module Vault
     *
     * @return string|null
     */
    public function getCipherText()
    {
        return $this->cipherText;
    }

    /**
     * @module Vault
     *
     * @param string|null $cipherText
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCipherTextOrFail($cipherText)
    {
        if ($cipherText === null) {
            $this->throwNullValueException(static::CIPHER_TEXT);
        }

        return $this->setCipherText($cipherText);
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCipherTextOrFail()
    {
        if ($this->cipherText === null) {
            $this->throwNullValueException(static::CIPHER_TEXT);
        }

        return $this->cipherText;
    }

    /**
     * @module Vault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCipherText()
    {
        $this->assertPropertyIsSet(self::CIPHER_TEXT);

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
                case 'dataType':
                case 'dataKey':
                case 'initialVector':
                case 'cipherText':
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
                case 'dataType':
                case 'dataKey':
                case 'initialVector':
                case 'cipherText':
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
                case 'dataType':
                case 'dataKey':
                case 'initialVector':
                case 'cipherText':
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
            'dataType' => $this->dataType,
            'dataKey' => $this->dataKey,
            'initialVector' => $this->initialVector,
            'cipherText' => $this->cipherText,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'data_type' => $this->dataType,
            'data_key' => $this->dataKey,
            'initial_vector' => $this->initialVector,
            'cipher_text' => $this->cipherText,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'data_type' => $this->dataType instanceof AbstractTransfer ? $this->dataType->toArray(true, false) : $this->dataType,
            'data_key' => $this->dataKey instanceof AbstractTransfer ? $this->dataKey->toArray(true, false) : $this->dataKey,
            'initial_vector' => $this->initialVector instanceof AbstractTransfer ? $this->initialVector->toArray(true, false) : $this->initialVector,
            'cipher_text' => $this->cipherText instanceof AbstractTransfer ? $this->cipherText->toArray(true, false) : $this->cipherText,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'dataType' => $this->dataType instanceof AbstractTransfer ? $this->dataType->toArray(true, true) : $this->dataType,
            'dataKey' => $this->dataKey instanceof AbstractTransfer ? $this->dataKey->toArray(true, true) : $this->dataKey,
            'initialVector' => $this->initialVector instanceof AbstractTransfer ? $this->initialVector->toArray(true, true) : $this->initialVector,
            'cipherText' => $this->cipherText instanceof AbstractTransfer ? $this->cipherText->toArray(true, true) : $this->cipherText,
        ];
    }
}
