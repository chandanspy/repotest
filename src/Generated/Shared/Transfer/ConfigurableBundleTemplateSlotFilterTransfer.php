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
class ConfigurableBundleTemplateSlotFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT = 'idConfigurableBundleTemplateSlot';

    /**
     * @var string
     */
    public const TRANSLATION_LOCALES = 'translationLocales';

    /**
     * @var string
     */
    public const PRODUCT_LIST = 'productList';

    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE = 'idConfigurableBundleTemplate';

    /**
     * @var int|null
     */
    protected $idConfigurableBundleTemplateSlot;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\LocaleTransfer[]
     */
    protected $translationLocales;

    /**
     * @var \Generated\Shared\Transfer\ProductListTransfer|null
     */
    protected $productList;

    /**
     * @var int|null
     */
    protected $idConfigurableBundleTemplate;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_configurable_bundle_template_slot' => 'idConfigurableBundleTemplateSlot',
        'idConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'IdConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'translation_locales' => 'translationLocales',
        'translationLocales' => 'translationLocales',
        'TranslationLocales' => 'translationLocales',
        'product_list' => 'productList',
        'productList' => 'productList',
        'ProductList' => 'productList',
        'id_configurable_bundle_template' => 'idConfigurableBundleTemplate',
        'idConfigurableBundleTemplate' => 'idConfigurableBundleTemplate',
        'IdConfigurableBundleTemplate' => 'idConfigurableBundleTemplate',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_configurable_bundle_template_slot',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TRANSLATION_LOCALES => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'translation_locales',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LIST => [
            'type' => 'Generated\Shared\Transfer\ProductListTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_configurable_bundle_template',
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
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param int|null $idConfigurableBundleTemplateSlot
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplateSlot($idConfigurableBundleTemplateSlot)
    {
        $this->idConfigurableBundleTemplateSlot = $idConfigurableBundleTemplateSlot;
        $this->modifiedProperties[self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @return int|null
     */
    public function getIdConfigurableBundleTemplateSlot()
    {
        return $this->idConfigurableBundleTemplateSlot;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param int|null $idConfigurableBundleTemplateSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplateSlotOrFail($idConfigurableBundleTemplateSlot)
    {
        if ($idConfigurableBundleTemplateSlot === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);
        }

        return $this->setIdConfigurableBundleTemplateSlot($idConfigurableBundleTemplateSlot);
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdConfigurableBundleTemplateSlotOrFail()
    {
        if ($this->idConfigurableBundleTemplateSlot === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);
        }

        return $this->idConfigurableBundleTemplateSlot;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdConfigurableBundleTemplateSlot()
    {
        $this->assertPropertyIsSet(self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\LocaleTransfer[] $translationLocales
     *
     * @return $this
     */
    public function setTranslationLocales(ArrayObject $translationLocales)
    {
        $this->translationLocales = $translationLocales;
        $this->modifiedProperties[self::TRANSLATION_LOCALES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\LocaleTransfer[]
     */
    public function getTranslationLocales()
    {
        return $this->translationLocales;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $translationLocale
     *
     * @return $this
     */
    public function addTranslationLocale(LocaleTransfer $translationLocale)
    {
        $this->translationLocales[] = $translationLocale;
        $this->modifiedProperties[self::TRANSLATION_LOCALES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTranslationLocales()
    {
        $this->assertCollectionPropertyIsSet(self::TRANSLATION_LOCALES);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer|null $productList
     *
     * @return $this
     */
    public function setProductList(ProductListTransfer $productList = null)
    {
        $this->productList = $productList;
        $this->modifiedProperties[self::PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\ProductListTransfer|null
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer $productList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListOrFail(ProductListTransfer $productList)
    {
        return $this->setProductList($productList);
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListTransfer
     */
    public function getProductListOrFail()
    {
        if ($this->productList === null) {
            $this->throwNullValueException(static::PRODUCT_LIST);
        }

        return $this->productList;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductList()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST);

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param int|null $idConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplate($idConfigurableBundleTemplate)
    {
        $this->idConfigurableBundleTemplate = $idConfigurableBundleTemplate;
        $this->modifiedProperties[self::ID_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle
     *
     * @return int|null
     */
    public function getIdConfigurableBundleTemplate()
    {
        return $this->idConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param int|null $idConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplateOrFail($idConfigurableBundleTemplate)
    {
        if ($idConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->setIdConfigurableBundleTemplate($idConfigurableBundleTemplate);
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdConfigurableBundleTemplateOrFail()
    {
        if ($this->idConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->idConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CONFIGURABLE_BUNDLE_TEMPLATE);

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
                case 'idConfigurableBundleTemplateSlot':
                case 'idConfigurableBundleTemplate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productList':
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
                case 'translationLocales':
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
                case 'idConfigurableBundleTemplateSlot':
                case 'idConfigurableBundleTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'productList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'translationLocales':
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
                case 'idConfigurableBundleTemplateSlot':
                case 'idConfigurableBundleTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'productList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'translationLocales':
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
        $this->translationLocales = $this->translationLocales ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot,
            'idConfigurableBundleTemplate' => $this->idConfigurableBundleTemplate,
            'productList' => $this->productList,
            'translationLocales' => $this->translationLocales,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot,
            'id_configurable_bundle_template' => $this->idConfigurableBundleTemplate,
            'product_list' => $this->productList,
            'translation_locales' => $this->translationLocales,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, false) : $this->idConfigurableBundleTemplateSlot,
            'id_configurable_bundle_template' => $this->idConfigurableBundleTemplate instanceof AbstractTransfer ? $this->idConfigurableBundleTemplate->toArray(true, false) : $this->idConfigurableBundleTemplate,
            'product_list' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, false) : $this->productList,
            'translation_locales' => $this->translationLocales instanceof AbstractTransfer ? $this->translationLocales->toArray(true, false) : $this->addValuesToCollection($this->translationLocales, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, true) : $this->idConfigurableBundleTemplateSlot,
            'idConfigurableBundleTemplate' => $this->idConfigurableBundleTemplate instanceof AbstractTransfer ? $this->idConfigurableBundleTemplate->toArray(true, true) : $this->idConfigurableBundleTemplate,
            'productList' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, true) : $this->productList,
            'translationLocales' => $this->translationLocales instanceof AbstractTransfer ? $this->translationLocales->toArray(true, true) : $this->addValuesToCollection($this->translationLocales, true, true),
        ];
    }
}
