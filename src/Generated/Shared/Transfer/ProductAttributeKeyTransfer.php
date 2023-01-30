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
class ProductAttributeKeyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ATTRIBUTE_KEY = 'idProductAttributeKey';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const IS_SUPER = 'isSuper';

    /**
     * @var int|null
     */
    protected $idProductAttributeKey;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var bool|null
     */
    protected $isSuper;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_attribute_key' => 'idProductAttributeKey',
        'idProductAttributeKey' => 'idProductAttributeKey',
        'IdProductAttributeKey' => 'idProductAttributeKey',
        'key' => 'key',
        'Key' => 'key',
        'is_super' => 'isSuper',
        'isSuper' => 'isSuper',
        'IsSuper' => 'isSuper',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ATTRIBUTE_KEY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_attribute_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
    ];

    /**
     * @module ProductAttribute|ProductSearch|Product
     *
     * @param int|null $idProductAttributeKey
     *
     * @return $this
     */
    public function setIdProductAttributeKey($idProductAttributeKey)
    {
        $this->idProductAttributeKey = $idProductAttributeKey;
        $this->modifiedProperties[self::ID_PRODUCT_ATTRIBUTE_KEY] = true;

        return $this;
    }

    /**
     * @module ProductAttribute|ProductSearch|Product
     *
     * @return int|null
     */
    public function getIdProductAttributeKey()
    {
        return $this->idProductAttributeKey;
    }

    /**
     * @module ProductAttribute|ProductSearch|Product
     *
     * @param int|null $idProductAttributeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAttributeKeyOrFail($idProductAttributeKey)
    {
        if ($idProductAttributeKey === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->setIdProductAttributeKey($idProductAttributeKey);
    }

    /**
     * @module ProductAttribute|ProductSearch|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAttributeKeyOrFail()
    {
        if ($this->idProductAttributeKey === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->idProductAttributeKey;
    }

    /**
     * @module ProductAttribute|ProductSearch|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAttributeKey()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ATTRIBUTE_KEY);

        return $this;
    }

    /**
     * @module ProductAttribute|ProductSearch|Product
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
     * @module ProductAttribute|ProductSearch|Product
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductAttribute|ProductSearch|Product
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
     * @module ProductAttribute|ProductSearch|Product
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
     * @module ProductAttribute|ProductSearch|Product
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
     * @module Product
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
     * @module Product
     *
     * @return bool|null
     */
    public function getIsSuper()
    {
        return $this->isSuper;
    }

    /**
     * @module Product
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
     * @module Product
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
     * @module Product
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
                case 'idProductAttributeKey':
                case 'key':
                case 'isSuper':
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
                case 'idProductAttributeKey':
                case 'key':
                case 'isSuper':
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
                case 'idProductAttributeKey':
                case 'key':
                case 'isSuper':
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
            'idProductAttributeKey' => $this->idProductAttributeKey,
            'key' => $this->key,
            'isSuper' => $this->isSuper,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_attribute_key' => $this->idProductAttributeKey,
            'key' => $this->key,
            'is_super' => $this->isSuper,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_attribute_key' => $this->idProductAttributeKey instanceof AbstractTransfer ? $this->idProductAttributeKey->toArray(true, false) : $this->idProductAttributeKey,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'is_super' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, false) : $this->isSuper,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAttributeKey' => $this->idProductAttributeKey instanceof AbstractTransfer ? $this->idProductAttributeKey->toArray(true, true) : $this->idProductAttributeKey,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'isSuper' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, true) : $this->isSuper,
        ];
    }
}
