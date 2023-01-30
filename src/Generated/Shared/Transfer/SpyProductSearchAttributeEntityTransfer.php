<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyProductSearchAttributeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_SEARCH_ATTRIBUTE = 'idProductSearchAttribute';

    /**
     * @var string
     */
    public const FK_PRODUCT_ATTRIBUTE_KEY = 'fkProductAttributeKey';

    /**
     * @var string
     */
    public const FILTER_TYPE = 'filterType';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const SYNCED = 'synced';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ATTRIBUTE_KEY = 'spyProductAttributeKey';

    /**
     * @var integer|null
     */
    protected $idProductSearchAttribute;

    /**
     * @var integer|null
     */
    protected $fkProductAttributeKey;

    /**
     * @var string|null
     */
    protected $filterType;

    /**
     * @var integer|null
     */
    protected $position;

    /**
     * @var boolean|null
     */
    protected $synced;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer|null
     */
    protected $spyProductAttributeKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_search_attribute' => 'idProductSearchAttribute',
        'idProductSearchAttribute' => 'idProductSearchAttribute',
        'IdProductSearchAttribute' => 'idProductSearchAttribute',
        'fk_product_attribute_key' => 'fkProductAttributeKey',
        'fkProductAttributeKey' => 'fkProductAttributeKey',
        'FkProductAttributeKey' => 'fkProductAttributeKey',
        'filter_type' => 'filterType',
        'filterType' => 'filterType',
        'FilterType' => 'filterType',
        'position' => 'position',
        'Position' => 'position',
        'synced' => 'synced',
        'Synced' => 'synced',
        'spy_product_attribute_key' => 'spyProductAttributeKey',
        'spyProductAttributeKey' => 'spyProductAttributeKey',
        'SpyProductAttributeKey' => 'spyProductAttributeKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_SEARCH_ATTRIBUTE => [
            'type' => 'integer',
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
        self::FK_PRODUCT_ATTRIBUTE_KEY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_attribute_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::POSITION => [
            'type' => 'integer',
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
        self::SYNCED => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'synced',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ATTRIBUTE_KEY => [
            'type' => 'Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_attribute_key',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttribute';


    /**
     * @module 
     *
     * @param integer|null $idProductSearchAttribute
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductSearchAttribute()
    {
        return $this->idProductSearchAttribute;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductSearchAttribute
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductSearchAttributeOrFail()
    {
        if ($this->idProductSearchAttribute === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SEARCH_ATTRIBUTE);
        }

        return $this->idProductSearchAttribute;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProductAttributeKey
     *
     * @return $this
     */
    public function setFkProductAttributeKey($fkProductAttributeKey)
    {
        $this->fkProductAttributeKey = $fkProductAttributeKey;
        $this->modifiedProperties[self::FK_PRODUCT_ATTRIBUTE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAttributeKey()
    {
        return $this->fkProductAttributeKey;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAttributeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAttributeKeyOrFail($fkProductAttributeKey)
    {
        if ($fkProductAttributeKey === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->setFkProductAttributeKey($fkProductAttributeKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAttributeKeyOrFail()
    {
        if ($this->fkProductAttributeKey === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->fkProductAttributeKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAttributeKey()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ATTRIBUTE_KEY);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $position
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
     * @module 
     *
     * @return integer|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module 
     *
     * @param integer|null $position
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $synced
     *
     * @return $this
     */
    public function setSynced($synced)
    {
        $this->synced = $synced;
        $this->modifiedProperties[self::SYNCED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getSynced()
    {
        return $this->synced;
    }

    /**
     * @module 
     *
     * @param boolean|null $synced
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSyncedOrFail($synced)
    {
        if ($synced === null) {
            $this->throwNullValueException(static::SYNCED);
        }

        return $this->setSynced($synced);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getSyncedOrFail()
    {
        if ($this->synced === null) {
            $this->throwNullValueException(static::SYNCED);
        }

        return $this->synced;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSynced()
    {
        $this->assertPropertyIsSet(self::SYNCED);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer|null $spyProductAttributeKey
     *
     * @return $this
     */
    public function setSpyProductAttributeKey(SpyProductAttributeKeyEntityTransfer $spyProductAttributeKey = null)
    {
        $this->spyProductAttributeKey = $spyProductAttributeKey;
        $this->modifiedProperties[self::SPY_PRODUCT_ATTRIBUTE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer|null
     */
    public function getSpyProductAttributeKey()
    {
        return $this->spyProductAttributeKey;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer $spyProductAttributeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductAttributeKeyOrFail(SpyProductAttributeKeyEntityTransfer $spyProductAttributeKey)
    {
        return $this->setSpyProductAttributeKey($spyProductAttributeKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer
     */
    public function getSpyProductAttributeKeyOrFail()
    {
        if ($this->spyProductAttributeKey === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->spyProductAttributeKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAttributeKey()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_ATTRIBUTE_KEY);

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
                case 'idProductSearchAttribute':
                case 'fkProductAttributeKey':
                case 'filterType':
                case 'position':
                case 'synced':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAttributeKey':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idProductSearchAttribute':
                case 'fkProductAttributeKey':
                case 'filterType':
                case 'position':
                case 'synced':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAttributeKey':
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
                case 'idProductSearchAttribute':
                case 'fkProductAttributeKey':
                case 'filterType':
                case 'position':
                case 'synced':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAttributeKey':
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
            'idProductSearchAttribute' => $this->idProductSearchAttribute,
            'fkProductAttributeKey' => $this->fkProductAttributeKey,
            'filterType' => $this->filterType,
            'position' => $this->position,
            'synced' => $this->synced,
            'spyProductAttributeKey' => $this->spyProductAttributeKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_search_attribute' => $this->idProductSearchAttribute,
            'fk_product_attribute_key' => $this->fkProductAttributeKey,
            'filter_type' => $this->filterType,
            'position' => $this->position,
            'synced' => $this->synced,
            'spy_product_attribute_key' => $this->spyProductAttributeKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_search_attribute' => $this->idProductSearchAttribute instanceof AbstractTransfer ? $this->idProductSearchAttribute->toArray(true, false) : $this->idProductSearchAttribute,
            'fk_product_attribute_key' => $this->fkProductAttributeKey instanceof AbstractTransfer ? $this->fkProductAttributeKey->toArray(true, false) : $this->fkProductAttributeKey,
            'filter_type' => $this->filterType instanceof AbstractTransfer ? $this->filterType->toArray(true, false) : $this->filterType,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'synced' => $this->synced instanceof AbstractTransfer ? $this->synced->toArray(true, false) : $this->synced,
            'spy_product_attribute_key' => $this->spyProductAttributeKey instanceof AbstractTransfer ? $this->spyProductAttributeKey->toArray(true, false) : $this->spyProductAttributeKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductSearchAttribute' => $this->idProductSearchAttribute instanceof AbstractTransfer ? $this->idProductSearchAttribute->toArray(true, true) : $this->idProductSearchAttribute,
            'fkProductAttributeKey' => $this->fkProductAttributeKey instanceof AbstractTransfer ? $this->fkProductAttributeKey->toArray(true, true) : $this->fkProductAttributeKey,
            'filterType' => $this->filterType instanceof AbstractTransfer ? $this->filterType->toArray(true, true) : $this->filterType,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'synced' => $this->synced instanceof AbstractTransfer ? $this->synced->toArray(true, true) : $this->synced,
            'spyProductAttributeKey' => $this->spyProductAttributeKey instanceof AbstractTransfer ? $this->spyProductAttributeKey->toArray(true, true) : $this->spyProductAttributeKey,
        ];
    }
}
