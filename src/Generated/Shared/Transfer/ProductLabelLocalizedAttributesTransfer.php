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
class ProductLabelLocalizedAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_PRODUCT_LABEL = 'fkProductLabel';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PRODUCT_LABEL = 'productLabel';

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var int|null
     */
    protected $fkProductLabel;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\ProductLabelTransfer|null
     */
    protected $productLabel;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'locale' => 'locale',
        'Locale' => 'locale',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_product_label' => 'fkProductLabel',
        'fkProductLabel' => 'fkProductLabel',
        'FkProductLabel' => 'fkProductLabel',
        'name' => 'name',
        'Name' => 'name',
        'product_label' => 'productLabel',
        'productLabel' => 'productLabel',
        'ProductLabel' => 'productLabel',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::FK_PRODUCT_LABEL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_label',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LABEL => [
            'type' => 'Generated\Shared\Transfer\ProductLabelTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_label',
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(LocaleTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param int|null $fkProductLabel
     *
     * @return $this
     */
    public function setFkProductLabel($fkProductLabel)
    {
        $this->fkProductLabel = $fkProductLabel;
        $this->modifiedProperties[self::FK_PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @return int|null
     */
    public function getFkProductLabel()
    {
        return $this->fkProductLabel;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param int|null $fkProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductLabelOrFail($fkProductLabel)
    {
        if ($fkProductLabel === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LABEL);
        }

        return $this->setFkProductLabel($fkProductLabel);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductLabelOrFail()
    {
        if ($this->fkProductLabel === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LABEL);
        }

        return $this->fkProductLabel;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductLabel()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_LABEL);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\ProductLabelTransfer|null $productLabel
     *
     * @return $this
     */
    public function setProductLabel(ProductLabelTransfer $productLabel = null)
    {
        $this->productLabel = $productLabel;
        $this->modifiedProperties[self::PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @return \Generated\Shared\Transfer\ProductLabelTransfer|null
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\ProductLabelTransfer $productLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductLabelOrFail(ProductLabelTransfer $productLabel)
    {
        return $this->setProductLabel($productLabel);
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductLabelTransfer
     */
    public function getProductLabelOrFail()
    {
        if ($this->productLabel === null) {
            $this->throwNullValueException(static::PRODUCT_LABEL);
        }

        return $this->productLabel;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductLabel()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LABEL);

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
                case 'fkLocale':
                case 'fkProductLabel':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'locale':
                case 'productLabel':
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
                case 'fkLocale':
                case 'fkProductLabel':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
                case 'productLabel':
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
                case 'fkLocale':
                case 'fkProductLabel':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
                case 'productLabel':
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
            'fkLocale' => $this->fkLocale,
            'fkProductLabel' => $this->fkProductLabel,
            'name' => $this->name,
            'locale' => $this->locale,
            'productLabel' => $this->productLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale,
            'fk_product_label' => $this->fkProductLabel,
            'name' => $this->name,
            'locale' => $this->locale,
            'product_label' => $this->productLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_product_label' => $this->fkProductLabel instanceof AbstractTransfer ? $this->fkProductLabel->toArray(true, false) : $this->fkProductLabel,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'product_label' => $this->productLabel instanceof AbstractTransfer ? $this->productLabel->toArray(true, false) : $this->productLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkProductLabel' => $this->fkProductLabel instanceof AbstractTransfer ? $this->fkProductLabel->toArray(true, true) : $this->fkProductLabel,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'productLabel' => $this->productLabel instanceof AbstractTransfer ? $this->productLabel->toArray(true, true) : $this->productLabel,
        ];
    }
}
