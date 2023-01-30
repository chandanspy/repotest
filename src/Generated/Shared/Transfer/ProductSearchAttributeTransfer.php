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
class ProductSearchAttributeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILTER_TYPE = 'filterType';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const ID_PRODUCT_SEARCH_ATTRIBUTE = 'idProductSearchAttribute';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const LOCALIZED_KEYS = 'localizedKeys';

    /**
     * @var string|null
     */
    protected $filterType;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var int|null
     */
    protected $idProductSearchAttribute;

    /**
     * @var int|null
     */
    protected $position;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\LocalizedProductSearchAttributeKeyTransfer[]
     */
    protected $localizedKeys;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'filter_type' => 'filterType',
        'filterType' => 'filterType',
        'FilterType' => 'filterType',
        'key' => 'key',
        'Key' => 'key',
        'id_product_search_attribute' => 'idProductSearchAttribute',
        'idProductSearchAttribute' => 'idProductSearchAttribute',
        'IdProductSearchAttribute' => 'idProductSearchAttribute',
        'position' => 'position',
        'Position' => 'position',
        'localized_keys' => 'localizedKeys',
        'localizedKeys' => 'localizedKeys',
        'LocalizedKeys' => 'localizedKeys',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILTER_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'filter_type',
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
        self::ID_PRODUCT_SEARCH_ATTRIBUTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_search_attribute',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POSITION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'position',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_KEYS => [
            'type' => 'Generated\Shared\Transfer\LocalizedProductSearchAttributeKeyTransfer',
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
    ];

    /**
     * @module ProductSearchConfigStorage|ProductSearch
     *
     * @param string|null $filterType
     *
     * @return $this
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;
        $this->modifiedProperties[self::FILTER_TYPE] = true;

        return $this;
    }

    /**
     * @module ProductSearchConfigStorage|ProductSearch
     *
     * @return string|null
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * @module ProductSearchConfigStorage|ProductSearch
     *
     * @param string|null $filterType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterTypeOrFail($filterType)
    {
        if ($filterType === null) {
            $this->throwNullValueException(static::FILTER_TYPE);
        }

        return $this->setFilterType($filterType);
    }

    /**
     * @module ProductSearchConfigStorage|ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFilterTypeOrFail()
    {
        if ($this->filterType === null) {
            $this->throwNullValueException(static::FILTER_TYPE);
        }

        return $this->filterType;
    }

    /**
     * @module ProductSearchConfigStorage|ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterType()
    {
        $this->assertPropertyIsSet(self::FILTER_TYPE);

        return $this;
    }

    /**
     * @module ProductSearchConfigStorage|ProductSearch
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
     * @module ProductSearchConfigStorage|ProductSearch
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductSearchConfigStorage|ProductSearch
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
     * @module ProductSearchConfigStorage|ProductSearch
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
     * @module ProductSearchConfigStorage|ProductSearch
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
     * @module ProductSearch
     *
     * @param int|null $idProductSearchAttribute
     *
     * @return $this
     */
    public function setIdProductSearchAttribute($idProductSearchAttribute)
    {
        $this->idProductSearchAttribute = $idProductSearchAttribute;
        $this->modifiedProperties[self::ID_PRODUCT_SEARCH_ATTRIBUTE] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return int|null
     */
    public function getIdProductSearchAttribute()
    {
        return $this->idProductSearchAttribute;
    }

    /**
     * @module ProductSearch
     *
     * @param int|null $idProductSearchAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductSearchAttributeOrFail($idProductSearchAttribute)
    {
        if ($idProductSearchAttribute === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SEARCH_ATTRIBUTE);
        }

        return $this->setIdProductSearchAttribute($idProductSearchAttribute);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductSearchAttributeOrFail()
    {
        if ($this->idProductSearchAttribute === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SEARCH_ATTRIBUTE);
        }

        return $this->idProductSearchAttribute;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductSearchAttribute()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_SEARCH_ATTRIBUTE);

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @param int|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        $this->modifiedProperties[self::POSITION] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module ProductSearch
     *
     * @param int|null $position
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPositionOrFail($position)
    {
        if ($position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->setPosition($position);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePosition()
    {
        $this->assertPropertyIsSet(self::POSITION);

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\LocalizedProductSearchAttributeKeyTransfer[] $localizedKeys
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
     * @module ProductSearch
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\LocalizedProductSearchAttributeKeyTransfer[]
     */
    public function getLocalizedKeys()
    {
        return $this->localizedKeys;
    }

    /**
     * @module ProductSearch
     *
     * @param \Generated\Shared\Transfer\LocalizedProductSearchAttributeKeyTransfer $localizedKey
     *
     * @return $this
     */
    public function addLocalizedKey(LocalizedProductSearchAttributeKeyTransfer $localizedKey)
    {
        $this->localizedKeys[] = $localizedKey;
        $this->modifiedProperties[self::LOCALIZED_KEYS] = true;

        return $this;
    }

    /**
     * @module ProductSearch
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
                case 'filterType':
                case 'key':
                case 'idProductSearchAttribute':
                case 'position':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedKeys':
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
                case 'filterType':
                case 'key':
                case 'idProductSearchAttribute':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedKeys':
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
                case 'filterType':
                case 'key':
                case 'idProductSearchAttribute':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedKeys':
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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'filterType' => $this->filterType,
            'key' => $this->key,
            'idProductSearchAttribute' => $this->idProductSearchAttribute,
            'position' => $this->position,
            'localizedKeys' => $this->localizedKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'filter_type' => $this->filterType,
            'key' => $this->key,
            'id_product_search_attribute' => $this->idProductSearchAttribute,
            'position' => $this->position,
            'localized_keys' => $this->localizedKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'filter_type' => $this->filterType instanceof AbstractTransfer ? $this->filterType->toArray(true, false) : $this->filterType,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'id_product_search_attribute' => $this->idProductSearchAttribute instanceof AbstractTransfer ? $this->idProductSearchAttribute->toArray(true, false) : $this->idProductSearchAttribute,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'localized_keys' => $this->localizedKeys instanceof AbstractTransfer ? $this->localizedKeys->toArray(true, false) : $this->addValuesToCollection($this->localizedKeys, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'filterType' => $this->filterType instanceof AbstractTransfer ? $this->filterType->toArray(true, true) : $this->filterType,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'idProductSearchAttribute' => $this->idProductSearchAttribute instanceof AbstractTransfer ? $this->idProductSearchAttribute->toArray(true, true) : $this->idProductSearchAttribute,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'localizedKeys' => $this->localizedKeys instanceof AbstractTransfer ? $this->localizedKeys->toArray(true, true) : $this->addValuesToCollection($this->localizedKeys, true, true),
        ];
    }
}
