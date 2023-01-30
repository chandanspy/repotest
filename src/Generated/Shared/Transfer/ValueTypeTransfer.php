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
class ValueTypeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATALOG_VALUE_TYPE = 'idCatalogValueType';

    /**
     * @var string
     */
    public const VARIETY = 'variety';

    /**
     * @var string
     */
    public const FK_CATALOG_ATTRIBUTE = 'fkCatalogAttribute';

    /**
     * @var string
     */
    public const FK_CATALOG_ATTRIBUTE_SET = 'fkCatalogAttributeSet';

    /**
     * @var int|null
     */
    protected $idCatalogValueType;

    /**
     * @var string|null
     */
    protected $variety;

    /**
     * @var int|null
     */
    protected $fkCatalogAttribute;

    /**
     * @var int|null
     */
    protected $fkCatalogAttributeSet;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_catalog_value_type' => 'idCatalogValueType',
        'idCatalogValueType' => 'idCatalogValueType',
        'IdCatalogValueType' => 'idCatalogValueType',
        'variety' => 'variety',
        'Variety' => 'variety',
        'fk_catalog_attribute' => 'fkCatalogAttribute',
        'fkCatalogAttribute' => 'fkCatalogAttribute',
        'FkCatalogAttribute' => 'fkCatalogAttribute',
        'fk_catalog_attribute_set' => 'fkCatalogAttributeSet',
        'fkCatalogAttributeSet' => 'fkCatalogAttributeSet',
        'FkCatalogAttributeSet' => 'fkCatalogAttributeSet',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATALOG_VALUE_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_catalog_value_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VARIETY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'variety',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATALOG_ATTRIBUTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_catalog_attribute',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATALOG_ATTRIBUTE_SET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_catalog_attribute_set',
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
     * @module Catalog
     *
     * @param int|null $idCatalogValueType
     *
     * @return $this
     */
    public function setIdCatalogValueType($idCatalogValueType)
    {
        $this->idCatalogValueType = $idCatalogValueType;
        $this->modifiedProperties[self::ID_CATALOG_VALUE_TYPE] = true;

        return $this;
    }

    /**
     * @module Catalog
     *
     * @return int|null
     */
    public function getIdCatalogValueType()
    {
        return $this->idCatalogValueType;
    }

    /**
     * @module Catalog
     *
     * @param int|null $idCatalogValueType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCatalogValueTypeOrFail($idCatalogValueType)
    {
        if ($idCatalogValueType === null) {
            $this->throwNullValueException(static::ID_CATALOG_VALUE_TYPE);
        }

        return $this->setIdCatalogValueType($idCatalogValueType);
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCatalogValueTypeOrFail()
    {
        if ($this->idCatalogValueType === null) {
            $this->throwNullValueException(static::ID_CATALOG_VALUE_TYPE);
        }

        return $this->idCatalogValueType;
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCatalogValueType()
    {
        $this->assertPropertyIsSet(self::ID_CATALOG_VALUE_TYPE);

        return $this;
    }

    /**
     * @module Catalog
     *
     * @param string|null $variety
     *
     * @return $this
     */
    public function setVariety($variety)
    {
        $this->variety = $variety;
        $this->modifiedProperties[self::VARIETY] = true;

        return $this;
    }

    /**
     * @module Catalog
     *
     * @return string|null
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * @module Catalog
     *
     * @param string|null $variety
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVarietyOrFail($variety)
    {
        if ($variety === null) {
            $this->throwNullValueException(static::VARIETY);
        }

        return $this->setVariety($variety);
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVarietyOrFail()
    {
        if ($this->variety === null) {
            $this->throwNullValueException(static::VARIETY);
        }

        return $this->variety;
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVariety()
    {
        $this->assertPropertyIsSet(self::VARIETY);

        return $this;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogAttribute
     *
     * @return $this
     */
    public function setFkCatalogAttribute($fkCatalogAttribute)
    {
        $this->fkCatalogAttribute = $fkCatalogAttribute;
        $this->modifiedProperties[self::FK_CATALOG_ATTRIBUTE] = true;

        return $this;
    }

    /**
     * @module Catalog
     *
     * @return int|null
     */
    public function getFkCatalogAttribute()
    {
        return $this->fkCatalogAttribute;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCatalogAttributeOrFail($fkCatalogAttribute)
    {
        if ($fkCatalogAttribute === null) {
            $this->throwNullValueException(static::FK_CATALOG_ATTRIBUTE);
        }

        return $this->setFkCatalogAttribute($fkCatalogAttribute);
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCatalogAttributeOrFail()
    {
        if ($this->fkCatalogAttribute === null) {
            $this->throwNullValueException(static::FK_CATALOG_ATTRIBUTE);
        }

        return $this->fkCatalogAttribute;
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCatalogAttribute()
    {
        $this->assertPropertyIsSet(self::FK_CATALOG_ATTRIBUTE);

        return $this;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogAttributeSet
     *
     * @return $this
     */
    public function setFkCatalogAttributeSet($fkCatalogAttributeSet)
    {
        $this->fkCatalogAttributeSet = $fkCatalogAttributeSet;
        $this->modifiedProperties[self::FK_CATALOG_ATTRIBUTE_SET] = true;

        return $this;
    }

    /**
     * @module Catalog
     *
     * @return int|null
     */
    public function getFkCatalogAttributeSet()
    {
        return $this->fkCatalogAttributeSet;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogAttributeSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCatalogAttributeSetOrFail($fkCatalogAttributeSet)
    {
        if ($fkCatalogAttributeSet === null) {
            $this->throwNullValueException(static::FK_CATALOG_ATTRIBUTE_SET);
        }

        return $this->setFkCatalogAttributeSet($fkCatalogAttributeSet);
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCatalogAttributeSetOrFail()
    {
        if ($this->fkCatalogAttributeSet === null) {
            $this->throwNullValueException(static::FK_CATALOG_ATTRIBUTE_SET);
        }

        return $this->fkCatalogAttributeSet;
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCatalogAttributeSet()
    {
        $this->assertPropertyIsSet(self::FK_CATALOG_ATTRIBUTE_SET);

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
                case 'idCatalogValueType':
                case 'variety':
                case 'fkCatalogAttribute':
                case 'fkCatalogAttributeSet':
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
                case 'idCatalogValueType':
                case 'variety':
                case 'fkCatalogAttribute':
                case 'fkCatalogAttributeSet':
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
                case 'idCatalogValueType':
                case 'variety':
                case 'fkCatalogAttribute':
                case 'fkCatalogAttributeSet':
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
            'idCatalogValueType' => $this->idCatalogValueType,
            'variety' => $this->variety,
            'fkCatalogAttribute' => $this->fkCatalogAttribute,
            'fkCatalogAttributeSet' => $this->fkCatalogAttributeSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_catalog_value_type' => $this->idCatalogValueType,
            'variety' => $this->variety,
            'fk_catalog_attribute' => $this->fkCatalogAttribute,
            'fk_catalog_attribute_set' => $this->fkCatalogAttributeSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_catalog_value_type' => $this->idCatalogValueType instanceof AbstractTransfer ? $this->idCatalogValueType->toArray(true, false) : $this->idCatalogValueType,
            'variety' => $this->variety instanceof AbstractTransfer ? $this->variety->toArray(true, false) : $this->variety,
            'fk_catalog_attribute' => $this->fkCatalogAttribute instanceof AbstractTransfer ? $this->fkCatalogAttribute->toArray(true, false) : $this->fkCatalogAttribute,
            'fk_catalog_attribute_set' => $this->fkCatalogAttributeSet instanceof AbstractTransfer ? $this->fkCatalogAttributeSet->toArray(true, false) : $this->fkCatalogAttributeSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCatalogValueType' => $this->idCatalogValueType instanceof AbstractTransfer ? $this->idCatalogValueType->toArray(true, true) : $this->idCatalogValueType,
            'variety' => $this->variety instanceof AbstractTransfer ? $this->variety->toArray(true, true) : $this->variety,
            'fkCatalogAttribute' => $this->fkCatalogAttribute instanceof AbstractTransfer ? $this->fkCatalogAttribute->toArray(true, true) : $this->fkCatalogAttribute,
            'fkCatalogAttributeSet' => $this->fkCatalogAttributeSet instanceof AbstractTransfer ? $this->fkCatalogAttributeSet->toArray(true, true) : $this->fkCatalogAttributeSet,
        ];
    }
}
