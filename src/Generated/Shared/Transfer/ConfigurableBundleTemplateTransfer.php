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
class ConfigurableBundleTemplateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE = 'idConfigurableBundleTemplate';

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
    public const TRANSLATIONS = 'translations';

    /**
     * @var string
     */
    public const PRODUCT_IMAGE_SETS = 'productImageSets';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var int|null
     */
    protected $idConfigurableBundleTemplate;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateTranslationTransfer[]
     */
    protected $translations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    protected $productImageSets;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_configurable_bundle_template' => 'idConfigurableBundleTemplate',
        'idConfigurableBundleTemplate' => 'idConfigurableBundleTemplate',
        'IdConfigurableBundleTemplate' => 'idConfigurableBundleTemplate',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'name' => 'name',
        'Name' => 'name',
        'translations' => 'translations',
        'Translations' => 'translations',
        'product_image_sets' => 'productImageSets',
        'productImageSets' => 'productImageSets',
        'ProductImageSets' => 'productImageSets',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateTranslationTransfer',
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
        self::PRODUCT_IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductImageSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getIdConfigurableBundleTemplate()
    {
        return $this->idConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
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
     * @module ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundle
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateTranslationTransfer[] $translations
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
     * @module ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundle
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateTranslationTransfer[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateTranslationTransfer $translation
     *
     * @return $this
     */
    public function addTranslation(ConfigurableBundleTemplateTranslationTransfer $translation)
    {
        $this->translations[] = $translation;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundlePageSearch|ConfigurableBundle
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
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[] $productImageSets
     *
     * @return $this
     */
    public function setProductImageSets(ArrayObject $productImageSets)
    {
        $this->productImageSets = $productImageSets;
        $this->modifiedProperties[self::PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    public function getProductImageSets()
    {
        return $this->productImageSets;
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ProductImageSetTransfer $productImageSet
     *
     * @return $this
     */
    public function addProductImageSet(ProductImageSetTransfer $productImageSet)
    {
        $this->productImageSets[] = $productImageSet;
        $this->modifiedProperties[self::PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_IMAGE_SETS);

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

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
                case 'idConfigurableBundleTemplate':
                case 'uuid':
                case 'name':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'translations':
                case 'productImageSets':
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
                case 'idConfigurableBundleTemplate':
                case 'uuid':
                case 'name':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'translations':
                case 'productImageSets':
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
                case 'idConfigurableBundleTemplate':
                case 'uuid':
                case 'name':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'translations':
                case 'productImageSets':
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
        $this->productImageSets = $this->productImageSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplate' => $this->idConfigurableBundleTemplate,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'isActive' => $this->isActive,
            'translations' => $this->translations,
            'productImageSets' => $this->productImageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template' => $this->idConfigurableBundleTemplate,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'is_active' => $this->isActive,
            'translations' => $this->translations,
            'product_image_sets' => $this->productImageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template' => $this->idConfigurableBundleTemplate instanceof AbstractTransfer ? $this->idConfigurableBundleTemplate->toArray(true, false) : $this->idConfigurableBundleTemplate,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, false) : $this->addValuesToCollection($this->translations, true, false),
            'product_image_sets' => $this->productImageSets instanceof AbstractTransfer ? $this->productImageSets->toArray(true, false) : $this->addValuesToCollection($this->productImageSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplate' => $this->idConfigurableBundleTemplate instanceof AbstractTransfer ? $this->idConfigurableBundleTemplate->toArray(true, true) : $this->idConfigurableBundleTemplate,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, true) : $this->addValuesToCollection($this->translations, true, true),
            'productImageSets' => $this->productImageSets instanceof AbstractTransfer ? $this->productImageSets->toArray(true, true) : $this->addValuesToCollection($this->productImageSets, true, true),
        ];
    }
}
