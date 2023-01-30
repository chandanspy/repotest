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
class ProductManagementAttributeValueTranslationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE = 'idProductManagementAttributeValue';

    /**
     * @var string
     */
    public const FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE = 'fkProductManagementAttributeValue';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const TRANSLATION = 'translation';

    /**
     * @var int|null
     */
    protected $idProductManagementAttributeValue;

    /**
     * @var int|null
     */
    protected $fkProductManagementAttributeValue;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var string|null
     */
    protected $translation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_management_attribute_value' => 'idProductManagementAttributeValue',
        'idProductManagementAttributeValue' => 'idProductManagementAttributeValue',
        'IdProductManagementAttributeValue' => 'idProductManagementAttributeValue',
        'fk_product_management_attribute_value' => 'fkProductManagementAttributeValue',
        'fkProductManagementAttributeValue' => 'fkProductManagementAttributeValue',
        'FkProductManagementAttributeValue' => 'fkProductManagementAttributeValue',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'translation' => 'translation',
        'Translation' => 'translation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE => [
            'type' => 'int',
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
        self::FK_LOCALE => [
            'type' => 'int',
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
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
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
    ];

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @return int|null
     */
    public function getIdProductManagementAttributeValue()
    {
        return $this->idProductManagementAttributeValue;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
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
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @param int|null $fkProductManagementAttributeValue
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
     * @module ProductAttribute
     *
     * @return int|null
     */
    public function getFkProductManagementAttributeValue()
    {
        return $this->fkProductManagementAttributeValue;
    }

    /**
     * @module ProductAttribute
     *
     * @param int|null $fkProductManagementAttributeValue
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
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductManagementAttributeValueOrFail()
    {
        if ($this->fkProductManagementAttributeValue === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE);
        }

        return $this->fkProductManagementAttributeValue;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @param int|null $fkLocale
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
     * @module ProductAttribute
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module ProductAttribute
     *
     * @param int|null $fkLocale
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
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module ProductAttribute
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @return string|null
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
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
     * @module ProductAttribute
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
                case 'fkProductManagementAttributeValue':
                case 'fkLocale':
                case 'localeName':
                case 'translation':
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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttributeValue':
                case 'fkLocale':
                case 'localeName':
                case 'translation':
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
                case 'idProductManagementAttributeValue':
                case 'fkProductManagementAttributeValue':
                case 'fkLocale':
                case 'localeName':
                case 'translation':
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
            'idProductManagementAttributeValue' => $this->idProductManagementAttributeValue,
            'fkProductManagementAttributeValue' => $this->fkProductManagementAttributeValue,
            'fkLocale' => $this->fkLocale,
            'localeName' => $this->localeName,
            'translation' => $this->translation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute_value' => $this->idProductManagementAttributeValue,
            'fk_product_management_attribute_value' => $this->fkProductManagementAttributeValue,
            'fk_locale' => $this->fkLocale,
            'locale_name' => $this->localeName,
            'translation' => $this->translation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute_value' => $this->idProductManagementAttributeValue instanceof AbstractTransfer ? $this->idProductManagementAttributeValue->toArray(true, false) : $this->idProductManagementAttributeValue,
            'fk_product_management_attribute_value' => $this->fkProductManagementAttributeValue instanceof AbstractTransfer ? $this->fkProductManagementAttributeValue->toArray(true, false) : $this->fkProductManagementAttributeValue,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'translation' => $this->translation instanceof AbstractTransfer ? $this->translation->toArray(true, false) : $this->translation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductManagementAttributeValue' => $this->idProductManagementAttributeValue instanceof AbstractTransfer ? $this->idProductManagementAttributeValue->toArray(true, true) : $this->idProductManagementAttributeValue,
            'fkProductManagementAttributeValue' => $this->fkProductManagementAttributeValue instanceof AbstractTransfer ? $this->fkProductManagementAttributeValue->toArray(true, true) : $this->fkProductManagementAttributeValue,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'translation' => $this->translation instanceof AbstractTransfer ? $this->translation->toArray(true, true) : $this->translation,
        ];
    }
}
