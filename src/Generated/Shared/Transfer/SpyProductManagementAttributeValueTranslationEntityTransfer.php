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
class SpyProductManagementAttributeValueTranslationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATION = 'idProductManagementAttributeValueTranslation';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE = 'fkProductManagementAttributeValue';

    /**
     * @var string
     */
    public const TRANSLATION = 'translation';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE = 'spyProductManagementAttributeValue';

    /**
     * @var integer|null
     */
    protected $idProductManagementAttributeValueTranslation;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var integer|null
     */
    protected $fkProductManagementAttributeValue;

    /**
     * @var string|null
     */
    protected $translation;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var \Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer|null
     */
    protected $spyProductManagementAttributeValue;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_management_attribute_value_translation' => 'idProductManagementAttributeValueTranslation',
        'idProductManagementAttributeValueTranslation' => 'idProductManagementAttributeValueTranslation',
        'IdProductManagementAttributeValueTranslation' => 'idProductManagementAttributeValueTranslation',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_product_management_attribute_value' => 'fkProductManagementAttributeValue',
        'fkProductManagementAttributeValue' => 'fkProductManagementAttributeValue',
        'FkProductManagementAttributeValue' => 'fkProductManagementAttributeValue',
        'translation' => 'translation',
        'Translation' => 'translation',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
        'spy_product_management_attribute_value' => 'spyProductManagementAttributeValue',
        'spyProductManagementAttributeValue' => 'spyProductManagementAttributeValue',
        'SpyProductManagementAttributeValue' => 'spyProductManagementAttributeValue',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_management_attribute_value_translation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_management_attribute_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TRANSLATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'translation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE => [
            'type' => 'Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_management_attribute_value',
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
    public static $entityNamespace = 'Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslation';


    /**
     * @module 
     *
     * @param integer|null $idProductManagementAttributeValueTranslation
     *
     * @return $this
     */
    public function setIdProductManagementAttributeValueTranslation($idProductManagementAttributeValueTranslation)
    {
        $this->idProductManagementAttributeValueTranslation = $idProductManagementAttributeValueTranslation;
        $this->modifiedProperties[self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductManagementAttributeValueTranslation()
    {
        return $this->idProductManagementAttributeValueTranslation;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductManagementAttributeValueTranslation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductManagementAttributeValueTranslationOrFail($idProductManagementAttributeValueTranslation)
    {
        if ($idProductManagementAttributeValueTranslation === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATION);
        }

        return $this->setIdProductManagementAttributeValueTranslation($idProductManagementAttributeValueTranslation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductManagementAttributeValueTranslationOrFail()
    {
        if ($this->idProductManagementAttributeValueTranslation === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATION);
        }

        return $this->idProductManagementAttributeValueTranslation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductManagementAttributeValueTranslation()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductManagementAttributeValue
     *
     * @return $this
     */
    public function setFkProductManagementAttributeValue($fkProductManagementAttributeValue)
    {
        $this->fkProductManagementAttributeValue = $fkProductManagementAttributeValue;
        $this->modifiedProperties[self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductManagementAttributeValue()
    {
        return $this->fkProductManagementAttributeValue;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductManagementAttributeValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductManagementAttributeValueOrFail($fkProductManagementAttributeValue)
    {
        if ($fkProductManagementAttributeValue === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);
        }

        return $this->setFkProductManagementAttributeValue($fkProductManagementAttributeValue);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductManagementAttributeValueOrFail()
    {
        if ($this->fkProductManagementAttributeValue === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);
        }

        return $this->fkProductManagementAttributeValue;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductManagementAttributeValue()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $translation
     *
     * @return $this
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
        $this->modifiedProperties[self::TRANSLATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @module 
     *
     * @param string|null $translation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTranslationOrFail($translation)
    {
        if ($translation === null) {
            $this->throwNullValueException(static::TRANSLATION);
        }

        return $this->setTranslation($translation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTranslationOrFail()
    {
        if ($this->translation === null) {
            $this->throwNullValueException(static::TRANSLATION);
        }

        return $this->translation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTranslation()
    {
        $this->assertPropertyIsSet(self::TRANSLATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $spyLocale
     *
     * @return $this
     */
    public function setSpyLocale(SpyLocaleEntityTransfer $spyLocale = null)
    {
        $this->spyLocale = $spyLocale;
        $this->modifiedProperties[self::SPY_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getSpyLocale()
    {
        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $spyLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyLocaleOrFail(SpyLocaleEntityTransfer $spyLocale)
    {
        return $this->setSpyLocale($spyLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getSpyLocaleOrFail()
    {
        if ($this->spyLocale === null) {
            $this->throwNullValueException(static::SPY_LOCALE);
        }

        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocale()
    {
        $this->assertPropertyIsSet(self::SPY_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer|null $spyProductManagementAttributeValue
     *
     * @return $this
     */
    public function setSpyProductManagementAttributeValue(SpyProductManagementAttributeValueEntityTransfer $spyProductManagementAttributeValue = null)
    {
        $this->spyProductManagementAttributeValue = $spyProductManagementAttributeValue;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer|null
     */
    public function getSpyProductManagementAttributeValue()
    {
        return $this->spyProductManagementAttributeValue;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer $spyProductManagementAttributeValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductManagementAttributeValueOrFail(SpyProductManagementAttributeValueEntityTransfer $spyProductManagementAttributeValue)
    {
        return $this->setSpyProductManagementAttributeValue($spyProductManagementAttributeValue);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer
     */
    public function getSpyProductManagementAttributeValueOrFail()
    {
        if ($this->spyProductManagementAttributeValue === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);
        }

        return $this->spyProductManagementAttributeValue;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductManagementAttributeValue()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);

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
                case 'idProductManagementAttributeValueTranslation':
                case 'fkLocale':
                case 'fkProductManagementAttributeValue':
                case 'translation':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyLocale':
                case 'spyProductManagementAttributeValue':
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
                case 'idProductManagementAttributeValueTranslation':
                case 'fkLocale':
                case 'fkProductManagementAttributeValue':
                case 'translation':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyLocale':
                case 'spyProductManagementAttributeValue':
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
                case 'idProductManagementAttributeValueTranslation':
                case 'fkLocale':
                case 'fkProductManagementAttributeValue':
                case 'translation':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyLocale':
                case 'spyProductManagementAttributeValue':
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
            'idProductManagementAttributeValueTranslation' => $this->idProductManagementAttributeValueTranslation,
            'fkLocale' => $this->fkLocale,
            'fkProductManagementAttributeValue' => $this->fkProductManagementAttributeValue,
            'translation' => $this->translation,
            'spyLocale' => $this->spyLocale,
            'spyProductManagementAttributeValue' => $this->spyProductManagementAttributeValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute_value_translation' => $this->idProductManagementAttributeValueTranslation,
            'fk_locale' => $this->fkLocale,
            'fk_product_management_attribute_value' => $this->fkProductManagementAttributeValue,
            'translation' => $this->translation,
            'spy_locale' => $this->spyLocale,
            'spy_product_management_attribute_value' => $this->spyProductManagementAttributeValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute_value_translation' => $this->idProductManagementAttributeValueTranslation instanceof AbstractTransfer ? $this->idProductManagementAttributeValueTranslation->toArray(true, false) : $this->idProductManagementAttributeValueTranslation,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_product_management_attribute_value' => $this->fkProductManagementAttributeValue instanceof AbstractTransfer ? $this->fkProductManagementAttributeValue->toArray(true, false) : $this->fkProductManagementAttributeValue,
            'translation' => $this->translation instanceof AbstractTransfer ? $this->translation->toArray(true, false) : $this->translation,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
            'spy_product_management_attribute_value' => $this->spyProductManagementAttributeValue instanceof AbstractTransfer ? $this->spyProductManagementAttributeValue->toArray(true, false) : $this->spyProductManagementAttributeValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductManagementAttributeValueTranslation' => $this->idProductManagementAttributeValueTranslation instanceof AbstractTransfer ? $this->idProductManagementAttributeValueTranslation->toArray(true, true) : $this->idProductManagementAttributeValueTranslation,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkProductManagementAttributeValue' => $this->fkProductManagementAttributeValue instanceof AbstractTransfer ? $this->fkProductManagementAttributeValue->toArray(true, true) : $this->fkProductManagementAttributeValue,
            'translation' => $this->translation instanceof AbstractTransfer ? $this->translation->toArray(true, true) : $this->translation,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
            'spyProductManagementAttributeValue' => $this->spyProductManagementAttributeValue instanceof AbstractTransfer ? $this->spyProductManagementAttributeValue->toArray(true, true) : $this->spyProductManagementAttributeValue,
        ];
    }
}
