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
class ProductManagementAttributeValueTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE = 'idProductManagementAttributeValue';

    /**
     * @var string
     */
    public const LOCALIZED_VALUES = 'localizedValues';

    /**
     * @var string
     */
    public const FK_PRODUCT_MANAGEMENT_ATTRIBUTE = 'fkProductManagementAttribute';

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var int|null
     */
    protected $idProductManagementAttributeValue;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductManagementAttributeValueTranslationTransfer[]
     */
    protected $localizedValues;

    /**
     * @var int|null
     */
    protected $fkProductManagementAttribute;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'value' => 'value',
        'Value' => 'value',
        'id_product_management_attribute_value' => 'idProductManagementAttributeValue',
        'idProductManagementAttributeValue' => 'idProductManagementAttributeValue',
        'IdProductManagementAttributeValue' => 'idProductManagementAttributeValue',
        'localized_values' => 'localizedValues',
        'localizedValues' => 'localizedValues',
        'LocalizedValues' => 'localizedValues',
        'fk_product_management_attribute' => 'fkProductManagementAttribute',
        'fkProductManagementAttribute' => 'fkProductManagementAttribute',
        'FkProductManagementAttribute' => 'fkProductManagementAttribute',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_management_attribute_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_VALUES => [
            'type' => 'Generated\Shared\Transfer\ProductManagementAttributeValueTranslationTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_values',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_management_attribute',
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
     * @module ProductAttributeGui|ProductAttribute|ProductManagement
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
     * @module ProductAttributeGui|ProductAttribute|ProductManagement
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute|ProductManagement
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
     * @module ProductAttributeGui|ProductAttribute|ProductManagement
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
     * @module ProductAttributeGui|ProductAttribute|ProductManagement
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
     * @module ProductAttributeGui|ProductAttribute
     *
     * @param int|null $idProductManagementAttributeValue
     *
     * @return $this
     */
    public function setIdProductManagementAttributeValue($idProductManagementAttributeValue)
    {
        $this->idProductManagementAttributeValue = $idProductManagementAttributeValue;
        $this->modifiedProperties[self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE] = true;

        return $this;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @return int|null
     */
    public function getIdProductManagementAttributeValue()
    {
        return $this->idProductManagementAttributeValue;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @param int|null $idProductManagementAttributeValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductManagementAttributeValueOrFail($idProductManagementAttributeValue)
    {
        if ($idProductManagementAttributeValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);
        }

        return $this->setIdProductManagementAttributeValue($idProductManagementAttributeValue);
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductManagementAttributeValueOrFail()
    {
        if ($this->idProductManagementAttributeValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);
        }

        return $this->idProductManagementAttributeValue;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductManagementAttributeValue()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);

        return $this;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductManagementAttributeValueTranslationTransfer[] $localizedValues
     *
     * @return $this
     */
    public function setLocalizedValues(ArrayObject $localizedValues)
    {
        $this->localizedValues = $localizedValues;
        $this->modifiedProperties[self::LOCALIZED_VALUES] = true;

        return $this;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductManagementAttributeValueTranslationTransfer[]
     */
    public function getLocalizedValues()
    {
        return $this->localizedValues;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @param \Generated\Shared\Transfer\ProductManagementAttributeValueTranslationTransfer $localizedValue
     *
     * @return $this
     */
    public function addLocalizedValue(ProductManagementAttributeValueTranslationTransfer $localizedValue)
    {
        $this->localizedValues[] = $localizedValue;
        $this->modifiedProperties[self::LOCALIZED_VALUES] = true;

        return $this;
    }

    /**
     * @module ProductAttributeGui|ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedValues()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_VALUES);

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @param int|null $fkProductManagementAttribute
     *
     * @return $this
     */
    public function setFkProductManagementAttribute($fkProductManagementAttribute)
    {
        $this->fkProductManagementAttribute = $fkProductManagementAttribute;
        $this->modifiedProperties[self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @return int|null
     */
    public function getFkProductManagementAttribute()
    {
        return $this->fkProductManagementAttribute;
    }

    /**
     * @module ProductAttribute
     *
     * @param int|null $fkProductManagementAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductManagementAttributeOrFail($fkProductManagementAttribute)
    {
        if ($fkProductManagementAttribute === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MANAGEMENT_ATTRIBUTE);
        }

        return $this->setFkProductManagementAttribute($fkProductManagementAttribute);
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductManagementAttributeOrFail()
    {
        if ($this->fkProductManagementAttribute === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MANAGEMENT_ATTRIBUTE);
        }

        return $this->fkProductManagementAttribute;
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductManagementAttribute()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE);

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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttribute':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedValues':
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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttribute':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedValues':
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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttribute':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedValues':
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
        $this->localizedValues = $this->localizedValues ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'value' => $this->value,
            'idProductManagementAttributeValue' => $this->idProductManagementAttributeValue,
            'fkProductManagementAttribute' => $this->fkProductManagementAttribute,
            'localizedValues' => $this->localizedValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'value' => $this->value,
            'id_product_management_attribute_value' => $this->idProductManagementAttributeValue,
            'fk_product_management_attribute' => $this->fkProductManagementAttribute,
            'localized_values' => $this->localizedValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'id_product_management_attribute_value' => $this->idProductManagementAttributeValue instanceof AbstractTransfer ? $this->idProductManagementAttributeValue->toArray(true, false) : $this->idProductManagementAttributeValue,
            'fk_product_management_attribute' => $this->fkProductManagementAttribute instanceof AbstractTransfer ? $this->fkProductManagementAttribute->toArray(true, false) : $this->fkProductManagementAttribute,
            'localized_values' => $this->localizedValues instanceof AbstractTransfer ? $this->localizedValues->toArray(true, false) : $this->addValuesToCollection($this->localizedValues, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'idProductManagementAttributeValue' => $this->idProductManagementAttributeValue instanceof AbstractTransfer ? $this->idProductManagementAttributeValue->toArray(true, true) : $this->idProductManagementAttributeValue,
            'fkProductManagementAttribute' => $this->fkProductManagementAttribute instanceof AbstractTransfer ? $this->fkProductManagementAttribute->toArray(true, true) : $this->fkProductManagementAttribute,
            'localizedValues' => $this->localizedValues instanceof AbstractTransfer ? $this->localizedValues->toArray(true, true) : $this->addValuesToCollection($this->localizedValues, true, true),
        ];
    }
}
