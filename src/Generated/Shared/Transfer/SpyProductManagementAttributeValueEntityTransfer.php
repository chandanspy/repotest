<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyProductManagementAttributeValueEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE = 'idProductManagementAttributeValue';

    /**
     * @var string
     */
    public const FK_PRODUCT_MANAGEMENT_ATTRIBUTE = 'fkProductManagementAttribute';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MANAGEMENT_ATTRIBUTE = 'spyProductManagementAttribute';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS = 'spyProductManagementAttributeValueTranslations';

    /**
     * @var integer|null
     */
    protected $idProductManagementAttributeValue;

    /**
     * @var integer|null
     */
    protected $fkProductManagementAttribute;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var \Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer|null
     */
    protected $spyProductManagementAttribute;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer[]
     */
    protected $spyProductManagementAttributeValueTranslations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_management_attribute_value' => 'idProductManagementAttributeValue',
        'idProductManagementAttributeValue' => 'idProductManagementAttributeValue',
        'IdProductManagementAttributeValue' => 'idProductManagementAttributeValue',
        'fk_product_management_attribute' => 'fkProductManagementAttribute',
        'fkProductManagementAttribute' => 'fkProductManagementAttribute',
        'FkProductManagementAttribute' => 'fkProductManagementAttribute',
        'value' => 'value',
        'Value' => 'value',
        'spy_product_management_attribute' => 'spyProductManagementAttribute',
        'spyProductManagementAttribute' => 'spyProductManagementAttribute',
        'SpyProductManagementAttribute' => 'spyProductManagementAttribute',
        'spy_product_management_attribute_value_translations' => 'spyProductManagementAttributeValueTranslations',
        'spyProductManagementAttributeValueTranslations' => 'spyProductManagementAttributeValueTranslations',
        'SpyProductManagementAttributeValueTranslations' => 'spyProductManagementAttributeValueTranslations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE => [
            'type' => 'integer',
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
        self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE => [
            'type' => 'integer',
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
        self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE => [
            'type' => 'Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_management_attribute',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_management_attribute_value_translations',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue';


    /**
     * @module 
     *
     * @param integer|null $idProductManagementAttributeValue
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductManagementAttributeValue()
    {
        return $this->idProductManagementAttributeValue;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductManagementAttributeValue
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductManagementAttributeValueOrFail()
    {
        if ($this->idProductManagementAttributeValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);
        }

        return $this->idProductManagementAttributeValue;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProductManagementAttribute
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductManagementAttribute()
    {
        return $this->fkProductManagementAttribute;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductManagementAttribute
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductManagementAttributeOrFail()
    {
        if ($this->fkProductManagementAttribute === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MANAGEMENT_ATTRIBUTE);
        }

        return $this->fkProductManagementAttribute;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer|null $spyProductManagementAttribute
     *
     * @return $this
     */
    public function setSpyProductManagementAttribute(SpyProductManagementAttributeEntityTransfer $spyProductManagementAttribute = null)
    {
        $this->spyProductManagementAttribute = $spyProductManagementAttribute;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer|null
     */
    public function getSpyProductManagementAttribute()
    {
        return $this->spyProductManagementAttribute;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer $spyProductManagementAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductManagementAttributeOrFail(SpyProductManagementAttributeEntityTransfer $spyProductManagementAttribute)
    {
        return $this->setSpyProductManagementAttribute($spyProductManagementAttribute);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer
     */
    public function getSpyProductManagementAttributeOrFail()
    {
        if ($this->spyProductManagementAttribute === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE);
        }

        return $this->spyProductManagementAttribute;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductManagementAttribute()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer[] $spyProductManagementAttributeValueTranslations
     *
     * @return $this
     */
    public function setSpyProductManagementAttributeValueTranslations(ArrayObject $spyProductManagementAttributeValueTranslations)
    {
        $this->spyProductManagementAttributeValueTranslations = $spyProductManagementAttributeValueTranslations;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer[]
     */
    public function getSpyProductManagementAttributeValueTranslations()
    {
        return $this->spyProductManagementAttributeValueTranslations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer $spyProductManagementAttributeValueTranslations
     *
     * @return $this
     */
    public function addSpyProductManagementAttributeValueTranslations(SpyProductManagementAttributeValueTranslationEntityTransfer $spyProductManagementAttributeValueTranslations)
    {
        $this->spyProductManagementAttributeValueTranslations[] = $spyProductManagementAttributeValueTranslations;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductManagementAttributeValueTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS);

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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttribute':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductManagementAttribute':
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
                case 'spyProductManagementAttributeValueTranslations':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttribute':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductManagementAttribute':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductManagementAttributeValueTranslations':
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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttribute':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductManagementAttribute':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductManagementAttributeValueTranslations':
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
        $this->spyProductManagementAttributeValueTranslations = $this->spyProductManagementAttributeValueTranslations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductManagementAttributeValue' => $this->idProductManagementAttributeValue,
            'fkProductManagementAttribute' => $this->fkProductManagementAttribute,
            'value' => $this->value,
            'spyProductManagementAttribute' => $this->spyProductManagementAttribute,
            'spyProductManagementAttributeValueTranslations' => $this->spyProductManagementAttributeValueTranslations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute_value' => $this->idProductManagementAttributeValue,
            'fk_product_management_attribute' => $this->fkProductManagementAttribute,
            'value' => $this->value,
            'spy_product_management_attribute' => $this->spyProductManagementAttribute,
            'spy_product_management_attribute_value_translations' => $this->spyProductManagementAttributeValueTranslations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute_value' => $this->idProductManagementAttributeValue instanceof AbstractTransfer ? $this->idProductManagementAttributeValue->toArray(true, false) : $this->idProductManagementAttributeValue,
            'fk_product_management_attribute' => $this->fkProductManagementAttribute instanceof AbstractTransfer ? $this->fkProductManagementAttribute->toArray(true, false) : $this->fkProductManagementAttribute,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'spy_product_management_attribute' => $this->spyProductManagementAttribute instanceof AbstractTransfer ? $this->spyProductManagementAttribute->toArray(true, false) : $this->spyProductManagementAttribute,
            'spy_product_management_attribute_value_translations' => $this->spyProductManagementAttributeValueTranslations instanceof AbstractTransfer ? $this->spyProductManagementAttributeValueTranslations->toArray(true, false) : $this->addValuesToCollection($this->spyProductManagementAttributeValueTranslations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductManagementAttributeValue' => $this->idProductManagementAttributeValue instanceof AbstractTransfer ? $this->idProductManagementAttributeValue->toArray(true, true) : $this->idProductManagementAttributeValue,
            'fkProductManagementAttribute' => $this->fkProductManagementAttribute instanceof AbstractTransfer ? $this->fkProductManagementAttribute->toArray(true, true) : $this->fkProductManagementAttribute,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'spyProductManagementAttribute' => $this->spyProductManagementAttribute instanceof AbstractTransfer ? $this->spyProductManagementAttribute->toArray(true, true) : $this->spyProductManagementAttribute,
            'spyProductManagementAttributeValueTranslations' => $this->spyProductManagementAttributeValueTranslations instanceof AbstractTransfer ? $this->spyProductManagementAttributeValueTranslations->toArray(true, true) : $this->addValuesToCollection($this->spyProductManagementAttributeValueTranslations, true, true),
        ];
    }
}
