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
class ConfigurableBundleTemplateSlotTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT = 'idConfigurableBundleTemplateSlot';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const FK_CONFIGURABLE_BUNDLE_TEMPLATE = 'fkConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const TRANSLATIONS = 'translations';

    /**
     * @var string
     */
    public const PRODUCT_LIST = 'productList';

    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE = 'configurableBundleTemplate';

    /**
     * @var int|null
     */
    protected $idConfigurableBundleTemplateSlot;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $fkConfigurableBundleTemplate;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTranslationTransfer[]
     */
    protected $translations;

    /**
     * @var \Generated\Shared\Transfer\ProductListTransfer|null
     */
    protected $productList;

    /**
     * @var \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer|null
     */
    protected $configurableBundleTemplate;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_configurable_bundle_template_slot' => 'idConfigurableBundleTemplateSlot',
        'idConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'IdConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'name' => 'name',
        'Name' => 'name',
        'fk_configurable_bundle_template' => 'fkConfigurableBundleTemplate',
        'fkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'FkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'translations' => 'translations',
        'Translations' => 'translations',
        'product_list' => 'productList',
        'productList' => 'productList',
        'ProductList' => 'productList',
        'configurable_bundle_template' => 'configurableBundleTemplate',
        'configurableBundleTemplate' => 'configurableBundleTemplate',
        'ConfigurableBundleTemplate' => 'configurableBundleTemplate',
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
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
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
        self::FK_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTranslationTransfer',
            'type_shim' => null,
            'name_underscore' => 'translations',
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
        self::CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template',
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
     * @module ConfigurableBundleWidget|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getIdConfigurableBundleTemplateSlot()
    {
        return $this->idConfigurableBundleTemplateSlot;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param int|null $fkConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate)
    {
        $this->fkConfigurableBundleTemplate = $fkConfigurableBundleTemplate;
        $this->modifiedProperties[self::FK_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @return int|null
     */
    public function getFkConfigurableBundleTemplate()
    {
        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param int|null $fkConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplateOrFail($fkConfigurableBundleTemplate)
    {
        if ($fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate);
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkConfigurableBundleTemplateOrFail()
    {
        if ($this->fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CONFIGURABLE_BUNDLE_TEMPLATE);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTranslationTransfer[] $translations
     *
     * @return $this
     */
    public function setTranslations(ArrayObject $translations)
    {
        $this->translations = $translations;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTranslationTransfer[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTranslationTransfer $translation
     *
     * @return $this
     */
    public function addTranslation(ConfigurableBundleTemplateSlotTranslationTransfer $translation)
    {
        $this->translations[] = $translation;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::TRANSLATIONS);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\ProductListTransfer|null
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer|null $configurableBundleTemplate
     *
     * @return $this
     */
    public function setConfigurableBundleTemplate(ConfigurableBundleTemplateTransfer $configurableBundleTemplate = null)
    {
        $this->configurableBundleTemplate = $configurableBundleTemplate;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer|null
     */
    public function getConfigurableBundleTemplate()
    {
        return $this->configurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer $configurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateOrFail(ConfigurableBundleTemplateTransfer $configurableBundleTemplate)
    {
        return $this->setConfigurableBundleTemplate($configurableBundleTemplate);
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer
     */
    public function getConfigurableBundleTemplateOrFail()
    {
        if ($this->configurableBundleTemplate === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->configurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE);

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
                case 'uuid':
                case 'name':
                case 'fkConfigurableBundleTemplate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productList':
                case 'configurableBundleTemplate':
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
                case 'translations':
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
                case 'uuid':
                case 'name':
                case 'fkConfigurableBundleTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'productList':
                case 'configurableBundleTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'translations':
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
                case 'uuid':
                case 'name':
                case 'fkConfigurableBundleTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'productList':
                case 'configurableBundleTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'translations':
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
        $this->translations = $this->translations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate,
            'productList' => $this->productList,
            'configurableBundleTemplate' => $this->configurableBundleTemplate,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate,
            'product_list' => $this->productList,
            'configurable_bundle_template' => $this->configurableBundleTemplate,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, false) : $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, false) : $this->fkConfigurableBundleTemplate,
            'product_list' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, false) : $this->productList,
            'configurable_bundle_template' => $this->configurableBundleTemplate instanceof AbstractTransfer ? $this->configurableBundleTemplate->toArray(true, false) : $this->configurableBundleTemplate,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, false) : $this->addValuesToCollection($this->translations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, true) : $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, true) : $this->fkConfigurableBundleTemplate,
            'productList' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, true) : $this->productList,
            'configurableBundleTemplate' => $this->configurableBundleTemplate instanceof AbstractTransfer ? $this->configurableBundleTemplate->toArray(true, true) : $this->configurableBundleTemplate,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, true) : $this->addValuesToCollection($this->translations, true, true),
        ];
    }
}
