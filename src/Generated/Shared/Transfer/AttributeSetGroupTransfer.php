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
class AttributeSetGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATALOG_ATTRIBUTE_SET_GROUP = 'idCatalogAttributeSetGroup';

    /**
     * @var string
     */
    public const FK_CATALOG_GROUP = 'fkCatalogGroup';

    /**
     * @var string
     */
    public const FK_CATALOG_VALUE_TYPE = 'fkCatalogValueType';

    /**
     * @var int|null
     */
    protected $idCatalogAttributeSetGroup;

    /**
     * @var int|null
     */
    protected $fkCatalogGroup;

    /**
     * @var int|null
     */
    protected $fkCatalogValueType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_catalog_attribute_set_group' => 'idCatalogAttributeSetGroup',
        'idCatalogAttributeSetGroup' => 'idCatalogAttributeSetGroup',
        'IdCatalogAttributeSetGroup' => 'idCatalogAttributeSetGroup',
        'fk_catalog_group' => 'fkCatalogGroup',
        'fkCatalogGroup' => 'fkCatalogGroup',
        'FkCatalogGroup' => 'fkCatalogGroup',
        'fk_catalog_value_type' => 'fkCatalogValueType',
        'fkCatalogValueType' => 'fkCatalogValueType',
        'FkCatalogValueType' => 'fkCatalogValueType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATALOG_ATTRIBUTE_SET_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_catalog_attribute_set_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATALOG_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_catalog_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATALOG_VALUE_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_catalog_value_type',
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
     * @param int|null $idCatalogAttributeSetGroup
     *
     * @return $this
     */
    public function setIdCatalogAttributeSetGroup($idCatalogAttributeSetGroup)
    {
        $this->idCatalogAttributeSetGroup = $idCatalogAttributeSetGroup;
        $this->modifiedProperties[self::ID_CATALOG_ATTRIBUTE_SET_GROUP] = true;

        return $this;
    }

    /**
     * @module Catalog
     *
     * @return int|null
     */
    public function getIdCatalogAttributeSetGroup()
    {
        return $this->idCatalogAttributeSetGroup;
    }

    /**
     * @module Catalog
     *
     * @param int|null $idCatalogAttributeSetGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCatalogAttributeSetGroupOrFail($idCatalogAttributeSetGroup)
    {
        if ($idCatalogAttributeSetGroup === null) {
            $this->throwNullValueException(static::ID_CATALOG_ATTRIBUTE_SET_GROUP);
        }

        return $this->setIdCatalogAttributeSetGroup($idCatalogAttributeSetGroup);
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCatalogAttributeSetGroupOrFail()
    {
        if ($this->idCatalogAttributeSetGroup === null) {
            $this->throwNullValueException(static::ID_CATALOG_ATTRIBUTE_SET_GROUP);
        }

        return $this->idCatalogAttributeSetGroup;
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCatalogAttributeSetGroup()
    {
        $this->assertPropertyIsSet(self::ID_CATALOG_ATTRIBUTE_SET_GROUP);

        return $this;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogGroup
     *
     * @return $this
     */
    public function setFkCatalogGroup($fkCatalogGroup)
    {
        $this->fkCatalogGroup = $fkCatalogGroup;
        $this->modifiedProperties[self::FK_CATALOG_GROUP] = true;

        return $this;
    }

    /**
     * @module Catalog
     *
     * @return int|null
     */
    public function getFkCatalogGroup()
    {
        return $this->fkCatalogGroup;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCatalogGroupOrFail($fkCatalogGroup)
    {
        if ($fkCatalogGroup === null) {
            $this->throwNullValueException(static::FK_CATALOG_GROUP);
        }

        return $this->setFkCatalogGroup($fkCatalogGroup);
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCatalogGroupOrFail()
    {
        if ($this->fkCatalogGroup === null) {
            $this->throwNullValueException(static::FK_CATALOG_GROUP);
        }

        return $this->fkCatalogGroup;
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCatalogGroup()
    {
        $this->assertPropertyIsSet(self::FK_CATALOG_GROUP);

        return $this;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogValueType
     *
     * @return $this
     */
    public function setFkCatalogValueType($fkCatalogValueType)
    {
        $this->fkCatalogValueType = $fkCatalogValueType;
        $this->modifiedProperties[self::FK_CATALOG_VALUE_TYPE] = true;

        return $this;
    }

    /**
     * @module Catalog
     *
     * @return int|null
     */
    public function getFkCatalogValueType()
    {
        return $this->fkCatalogValueType;
    }

    /**
     * @module Catalog
     *
     * @param int|null $fkCatalogValueType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCatalogValueTypeOrFail($fkCatalogValueType)
    {
        if ($fkCatalogValueType === null) {
            $this->throwNullValueException(static::FK_CATALOG_VALUE_TYPE);
        }

        return $this->setFkCatalogValueType($fkCatalogValueType);
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCatalogValueTypeOrFail()
    {
        if ($this->fkCatalogValueType === null) {
            $this->throwNullValueException(static::FK_CATALOG_VALUE_TYPE);
        }

        return $this->fkCatalogValueType;
    }

    /**
     * @module Catalog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCatalogValueType()
    {
        $this->assertPropertyIsSet(self::FK_CATALOG_VALUE_TYPE);

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
                case 'idCatalogAttributeSetGroup':
                case 'fkCatalogGroup':
                case 'fkCatalogValueType':
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
                case 'idCatalogAttributeSetGroup':
                case 'fkCatalogGroup':
                case 'fkCatalogValueType':
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
                case 'idCatalogAttributeSetGroup':
                case 'fkCatalogGroup':
                case 'fkCatalogValueType':
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
            'idCatalogAttributeSetGroup' => $this->idCatalogAttributeSetGroup,
            'fkCatalogGroup' => $this->fkCatalogGroup,
            'fkCatalogValueType' => $this->fkCatalogValueType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_catalog_attribute_set_group' => $this->idCatalogAttributeSetGroup,
            'fk_catalog_group' => $this->fkCatalogGroup,
            'fk_catalog_value_type' => $this->fkCatalogValueType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_catalog_attribute_set_group' => $this->idCatalogAttributeSetGroup instanceof AbstractTransfer ? $this->idCatalogAttributeSetGroup->toArray(true, false) : $this->idCatalogAttributeSetGroup,
            'fk_catalog_group' => $this->fkCatalogGroup instanceof AbstractTransfer ? $this->fkCatalogGroup->toArray(true, false) : $this->fkCatalogGroup,
            'fk_catalog_value_type' => $this->fkCatalogValueType instanceof AbstractTransfer ? $this->fkCatalogValueType->toArray(true, false) : $this->fkCatalogValueType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCatalogAttributeSetGroup' => $this->idCatalogAttributeSetGroup instanceof AbstractTransfer ? $this->idCatalogAttributeSetGroup->toArray(true, true) : $this->idCatalogAttributeSetGroup,
            'fkCatalogGroup' => $this->fkCatalogGroup instanceof AbstractTransfer ? $this->fkCatalogGroup->toArray(true, true) : $this->fkCatalogGroup,
            'fkCatalogValueType' => $this->fkCatalogValueType instanceof AbstractTransfer ? $this->fkCatalogValueType->toArray(true, true) : $this->fkCatalogValueType,
        ];
    }
}
