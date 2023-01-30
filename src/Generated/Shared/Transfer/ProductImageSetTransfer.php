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
class ProductImageSetTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_IMAGES = 'productImages';

    /**
     * @var string
     */
    public const PRODUCT_IMAGE_SET_KEY = 'productImageSetKey';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE = 'fkResourceConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const ID_PRODUCT_IMAGE_SET = 'idProductImageSet';

    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_SET = 'fkResourceProductSet';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageTransfer[]
     */
    protected $productImages;

    /**
     * @var string|null
     */
    protected $productImageSetKey;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var int|null
     */
    protected $fkResourceConfigurableBundleTemplate;

    /**
     * @var int|null
     */
    protected $idProductImageSet;

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var int|null
     */
    protected $fkResourceProductSet;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_images' => 'productImages',
        'productImages' => 'productImages',
        'ProductImages' => 'productImages',
        'product_image_set_key' => 'productImageSetKey',
        'productImageSetKey' => 'productImageSetKey',
        'ProductImageSetKey' => 'productImageSetKey',
        'name' => 'name',
        'Name' => 'name',
        'locale' => 'locale',
        'Locale' => 'locale',
        'fk_resource_configurable_bundle_template' => 'fkResourceConfigurableBundleTemplate',
        'fkResourceConfigurableBundleTemplate' => 'fkResourceConfigurableBundleTemplate',
        'FkResourceConfigurableBundleTemplate' => 'fkResourceConfigurableBundleTemplate',
        'id_product_image_set' => 'idProductImageSet',
        'idProductImageSet' => 'idProductImageSet',
        'IdProductImageSet' => 'idProductImageSet',
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'fk_resource_product_set' => 'fkResourceProductSet',
        'fkResourceProductSet' => 'fkResourceProductSet',
        'FkResourceProductSet' => 'fkResourceProductSet',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_IMAGES => [
            'type' => 'Generated\Shared\Transfer\ProductImageTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_images',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_IMAGE_SET_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_image_set_key',
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
        self::FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_IMAGE_SET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_image_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_RESOURCE_PRODUCT_SET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_product_set',
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
     * @module AvailabilityNotification|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductBundle|ProductImage|ProductManagement|ProductPageSearch|ProductSetGui|ProductSetPageSearch
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageTransfer[] $productImages
     *
     * @return $this
     */
    public function setProductImages(ArrayObject $productImages)
    {
        $this->productImages = $productImages;
        $this->modifiedProperties[self::PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductBundle|ProductImage|ProductManagement|ProductPageSearch|ProductSetGui|ProductSetPageSearch
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageTransfer[]
     */
    public function getProductImages()
    {
        return $this->productImages;
    }

    /**
     * @module AvailabilityNotification|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductBundle|ProductImage|ProductManagement|ProductPageSearch|ProductSetGui|ProductSetPageSearch
     *
     * @param \Generated\Shared\Transfer\ProductImageTransfer $productImage
     *
     * @return $this
     */
    public function addProductImage(ProductImageTransfer $productImage)
    {
        $this->productImages[] = $productImage;
        $this->modifiedProperties[self::PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductBundle|ProductImage|ProductManagement|ProductPageSearch|ProductSetGui|ProductSetPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImages()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_IMAGES);

        return $this;
    }

    /**
     * @module ConfigurableBundleDataImport|ProductImage
     *
     * @param string|null $productImageSetKey
     *
     * @return $this
     */
    public function setProductImageSetKey($productImageSetKey)
    {
        $this->productImageSetKey = $productImageSetKey;
        $this->modifiedProperties[self::PRODUCT_IMAGE_SET_KEY] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleDataImport|ProductImage
     *
     * @return string|null
     */
    public function getProductImageSetKey()
    {
        return $this->productImageSetKey;
    }

    /**
     * @module ConfigurableBundleDataImport|ProductImage
     *
     * @param string|null $productImageSetKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductImageSetKeyOrFail($productImageSetKey)
    {
        if ($productImageSetKey === null) {
            $this->throwNullValueException(static::PRODUCT_IMAGE_SET_KEY);
        }

        return $this->setProductImageSetKey($productImageSetKey);
    }

    /**
     * @module ConfigurableBundleDataImport|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductImageSetKeyOrFail()
    {
        if ($this->productImageSetKey === null) {
            $this->throwNullValueException(static::PRODUCT_IMAGE_SET_KEY);
        }

        return $this->productImageSetKey;
    }

    /**
     * @module ConfigurableBundleDataImport|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImageSetKey()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IMAGE_SET_KEY);

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ProductBundle|ProductImage|ProductSetGui|ProductSetPageSearch
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
     * @module ConfigurableBundleStorage|ProductBundle|ProductImage|ProductSetGui|ProductSetPageSearch
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ConfigurableBundleStorage|ProductBundle|ProductImage|ProductSetGui|ProductSetPageSearch
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
     * @module ConfigurableBundleStorage|ProductBundle|ProductImage|ProductSetGui|ProductSetPageSearch
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
     * @module ConfigurableBundleStorage|ProductBundle|ProductImage|ProductSetGui|ProductSetPageSearch
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductManagement|ProductSetGui
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductManagement|ProductSetGui
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductManagement|ProductSetGui
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductManagement|ProductSetGui
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductManagement|ProductSetGui
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
     * @module ConfigurableBundle
     *
     * @param int|null $fkResourceConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setFkResourceConfigurableBundleTemplate($fkResourceConfigurableBundleTemplate)
    {
        $this->fkResourceConfigurableBundleTemplate = $fkResourceConfigurableBundleTemplate;
        $this->modifiedProperties[self::FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundle
     *
     * @return int|null
     */
    public function getFkResourceConfigurableBundleTemplate()
    {
        return $this->fkResourceConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundle
     *
     * @param int|null $fkResourceConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourceConfigurableBundleTemplateOrFail($fkResourceConfigurableBundleTemplate)
    {
        if ($fkResourceConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->setFkResourceConfigurableBundleTemplate($fkResourceConfigurableBundleTemplate);
    }

    /**
     * @module ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourceConfigurableBundleTemplateOrFail()
    {
        if ($this->fkResourceConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->fkResourceConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourceConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE);

        return $this;
    }

    /**
     * @module ProductImage|ProductManagement|ProductSetGui|ProductSet
     *
     * @param int|null $idProductImageSet
     *
     * @return $this
     */
    public function setIdProductImageSet($idProductImageSet)
    {
        $this->idProductImageSet = $idProductImageSet;
        $this->modifiedProperties[self::ID_PRODUCT_IMAGE_SET] = true;

        return $this;
    }

    /**
     * @module ProductImage|ProductManagement|ProductSetGui|ProductSet
     *
     * @return int|null
     */
    public function getIdProductImageSet()
    {
        return $this->idProductImageSet;
    }

    /**
     * @module ProductImage|ProductManagement|ProductSetGui|ProductSet
     *
     * @param int|null $idProductImageSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductImageSetOrFail($idProductImageSet)
    {
        if ($idProductImageSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE_SET);
        }

        return $this->setIdProductImageSet($idProductImageSet);
    }

    /**
     * @module ProductImage|ProductManagement|ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductImageSetOrFail()
    {
        if ($this->idProductImageSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE_SET);
        }

        return $this->idProductImageSet;
    }

    /**
     * @module ProductImage|ProductManagement|ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductImageSet()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_IMAGE_SET);

        return $this;
    }

    /**
     * @module ProductImage
     *
     * @param int|null $idProduct
     *
     * @return $this
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        $this->modifiedProperties[self::ID_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductImage
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module ProductImage
     *
     * @param int|null $idProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOrFail($idProduct)
    {
        if ($idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->setIdProduct($idProduct);
    }

    /**
     * @module ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOrFail()
    {
        if ($this->idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->idProduct;
    }

    /**
     * @module ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProduct()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT);

        return $this;
    }

    /**
     * @module ProductImage
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductImage
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ProductImage
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @param int|null $fkResourceProductSet
     *
     * @return $this
     */
    public function setFkResourceProductSet($fkResourceProductSet)
    {
        $this->fkResourceProductSet = $fkResourceProductSet;
        $this->modifiedProperties[self::FK_RESOURCE_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @return int|null
     */
    public function getFkResourceProductSet()
    {
        return $this->fkResourceProductSet;
    }

    /**
     * @module ProductSet
     *
     * @param int|null $fkResourceProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourceProductSetOrFail($fkResourceProductSet)
    {
        if ($fkResourceProductSet === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_SET);
        }

        return $this->setFkResourceProductSet($fkResourceProductSet);
    }

    /**
     * @module ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourceProductSetOrFail()
    {
        if ($this->fkResourceProductSet === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_SET);
        }

        return $this->fkResourceProductSet;
    }

    /**
     * @module ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourceProductSet()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_PRODUCT_SET);

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
                case 'productImageSetKey':
                case 'name':
                case 'fkResourceConfigurableBundleTemplate':
                case 'idProductImageSet':
                case 'idProduct':
                case 'idProductAbstract':
                case 'fkResourceProductSet':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'locale':
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
                case 'productImages':
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
                case 'productImageSetKey':
                case 'name':
                case 'fkResourceConfigurableBundleTemplate':
                case 'idProductImageSet':
                case 'idProduct':
                case 'idProductAbstract':
                case 'fkResourceProductSet':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'productImages':
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
                case 'productImageSetKey':
                case 'name':
                case 'fkResourceConfigurableBundleTemplate':
                case 'idProductImageSet':
                case 'idProduct':
                case 'idProductAbstract':
                case 'fkResourceProductSet':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'productImages':
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
        $this->productImages = $this->productImages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'productImageSetKey' => $this->productImageSetKey,
            'name' => $this->name,
            'fkResourceConfigurableBundleTemplate' => $this->fkResourceConfigurableBundleTemplate,
            'idProductImageSet' => $this->idProductImageSet,
            'idProduct' => $this->idProduct,
            'idProductAbstract' => $this->idProductAbstract,
            'fkResourceProductSet' => $this->fkResourceProductSet,
            'locale' => $this->locale,
            'productImages' => $this->productImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_image_set_key' => $this->productImageSetKey,
            'name' => $this->name,
            'fk_resource_configurable_bundle_template' => $this->fkResourceConfigurableBundleTemplate,
            'id_product_image_set' => $this->idProductImageSet,
            'id_product' => $this->idProduct,
            'id_product_abstract' => $this->idProductAbstract,
            'fk_resource_product_set' => $this->fkResourceProductSet,
            'locale' => $this->locale,
            'product_images' => $this->productImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_image_set_key' => $this->productImageSetKey instanceof AbstractTransfer ? $this->productImageSetKey->toArray(true, false) : $this->productImageSetKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'fk_resource_configurable_bundle_template' => $this->fkResourceConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkResourceConfigurableBundleTemplate->toArray(true, false) : $this->fkResourceConfigurableBundleTemplate,
            'id_product_image_set' => $this->idProductImageSet instanceof AbstractTransfer ? $this->idProductImageSet->toArray(true, false) : $this->idProductImageSet,
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'fk_resource_product_set' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, false) : $this->fkResourceProductSet,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'product_images' => $this->productImages instanceof AbstractTransfer ? $this->productImages->toArray(true, false) : $this->addValuesToCollection($this->productImages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productImageSetKey' => $this->productImageSetKey instanceof AbstractTransfer ? $this->productImageSetKey->toArray(true, true) : $this->productImageSetKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'fkResourceConfigurableBundleTemplate' => $this->fkResourceConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkResourceConfigurableBundleTemplate->toArray(true, true) : $this->fkResourceConfigurableBundleTemplate,
            'idProductImageSet' => $this->idProductImageSet instanceof AbstractTransfer ? $this->idProductImageSet->toArray(true, true) : $this->idProductImageSet,
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'fkResourceProductSet' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, true) : $this->fkResourceProductSet,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'productImages' => $this->productImages instanceof AbstractTransfer ? $this->productImages->toArray(true, true) : $this->addValuesToCollection($this->productImages, true, true),
        ];
    }
}
