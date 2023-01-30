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
class SpyProductImageSetEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_IMAGE_SET = 'idProductImageSet';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE = 'fkResourceConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_SET = 'fkResourceProductSet';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PRODUCT_IMAGE_SET_KEY = 'productImageSetKey';

    /**
     * @var string
     */
    public const SPY_CONFIGURABLE_BUNDLE_TEMPLATE = 'spyConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var string
     */
    public const SPY_PRODUCT = 'spyProduct';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT = 'spyProductAbstract';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SET = 'spyProductSet';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES = 'spyProductImageSetToProductImages';

    /**
     * @var integer|null
     */
    protected $idProductImageSet;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkResourceConfigurableBundleTemplate;

    /**
     * @var integer|null
     */
    protected $fkResourceProductSet;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $productImageSetKey;

    /**
     * @var \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer|null
     */
    protected $spyConfigurableBundleTemplate;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $spyProduct;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null
     */
    protected $spyProductSet;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer[]
     */
    protected $spyProductImageSetToProductImages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_image_set' => 'idProductImageSet',
        'idProductImageSet' => 'idProductImageSet',
        'IdProductImageSet' => 'idProductImageSet',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'fk_resource_configurable_bundle_template' => 'fkResourceConfigurableBundleTemplate',
        'fkResourceConfigurableBundleTemplate' => 'fkResourceConfigurableBundleTemplate',
        'FkResourceConfigurableBundleTemplate' => 'fkResourceConfigurableBundleTemplate',
        'fk_resource_product_set' => 'fkResourceProductSet',
        'fkResourceProductSet' => 'fkResourceProductSet',
        'FkResourceProductSet' => 'fkResourceProductSet',
        'name' => 'name',
        'Name' => 'name',
        'product_image_set_key' => 'productImageSetKey',
        'productImageSetKey' => 'productImageSetKey',
        'ProductImageSetKey' => 'productImageSetKey',
        'spy_configurable_bundle_template' => 'spyConfigurableBundleTemplate',
        'spyConfigurableBundleTemplate' => 'spyConfigurableBundleTemplate',
        'SpyConfigurableBundleTemplate' => 'spyConfigurableBundleTemplate',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
        'spy_product' => 'spyProduct',
        'spyProduct' => 'spyProduct',
        'SpyProduct' => 'spyProduct',
        'spy_product_abstract' => 'spyProductAbstract',
        'spyProductAbstract' => 'spyProductAbstract',
        'SpyProductAbstract' => 'spyProductAbstract',
        'spy_product_set' => 'spyProductSet',
        'spyProductSet' => 'spyProductSet',
        'SpyProductSet' => 'spyProductSet',
        'spy_product_image_set_to_product_images' => 'spyProductImageSetToProductImages',
        'spyProductImageSetToProductImages' => 'spyProductImageSetToProductImages',
        'SpyProductImageSetToProductImages' => 'spyProductImageSetToProductImages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_IMAGE_SET => [
            'type' => 'integer',
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
        self::FK_PRODUCT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'integer',
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
        self::FK_RESOURCE_PRODUCT_SET => [
            'type' => 'integer',
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
        self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::SPY_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_SET => [
            'type' => 'Generated\Shared\Transfer\SpyProductSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES => [
            'type' => 'Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_image_set_to_product_images',
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
    public static $entityNamespace = 'Orm\Zed\ProductImage\Persistence\SpyProductImageSet';


    /**
     * @module 
     *
     * @param integer|null $idProductImageSet
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductImageSet()
    {
        return $this->idProductImageSet;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductImageSet
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductImageSetOrFail()
    {
        if ($this->idProductImageSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE_SET);
        }

        return $this->idProductImageSet;
    }

    /**
     * @module 
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
     * @param integer|null $fkProduct
     *
     * @return $this
     */
    public function setFkProduct($fkProduct)
    {
        $this->fkProduct = $fkProduct;
        $this->modifiedProperties[self::FK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOrFail($fkProduct)
    {
        if ($fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->setFkProduct($fkProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceConfigurableBundleTemplate
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourceConfigurableBundleTemplate()
    {
        return $this->fkResourceConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceConfigurableBundleTemplate
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourceConfigurableBundleTemplateOrFail()
    {
        if ($this->fkResourceConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_RESOURCE_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->fkResourceConfigurableBundleTemplate;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkResourceProductSet
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourceProductSet()
    {
        return $this->fkResourceProductSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceProductSet
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourceProductSetOrFail()
    {
        if ($this->fkResourceProductSet === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_SET);
        }

        return $this->fkResourceProductSet;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getProductImageSetKey()
    {
        return $this->productImageSetKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer|null $spyConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setSpyConfigurableBundleTemplate(SpyConfigurableBundleTemplateEntityTransfer $spyConfigurableBundleTemplate = null)
    {
        $this->spyConfigurableBundleTemplate = $spyConfigurableBundleTemplate;
        $this->modifiedProperties[self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer|null
     */
    public function getSpyConfigurableBundleTemplate()
    {
        return $this->spyConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer $spyConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyConfigurableBundleTemplateOrFail(SpyConfigurableBundleTemplateEntityTransfer $spyConfigurableBundleTemplate)
    {
        return $this->setSpyConfigurableBundleTemplate($spyConfigurableBundleTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer
     */
    public function getSpyConfigurableBundleTemplateOrFail()
    {
        if ($this->spyConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::SPY_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->spyConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE);

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
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $spyProduct
     *
     * @return $this
     */
    public function setSpyProduct(SpyProductEntityTransfer $spyProduct = null)
    {
        $this->spyProduct = $spyProduct;
        $this->modifiedProperties[self::SPY_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getSpyProduct()
    {
        return $this->spyProduct;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $spyProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductOrFail(SpyProductEntityTransfer $spyProduct)
    {
        return $this->setSpyProduct($spyProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getSpyProductOrFail()
    {
        if ($this->spyProduct === null) {
            $this->throwNullValueException(static::SPY_PRODUCT);
        }

        return $this->spyProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProduct()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $spyProductAbstract
     *
     * @return $this
     */
    public function setSpyProductAbstract(SpyProductAbstractEntityTransfer $spyProductAbstract = null)
    {
        $this->spyProductAbstract = $spyProductAbstract;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getSpyProductAbstract()
    {
        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $spyProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductAbstractOrFail(SpyProductAbstractEntityTransfer $spyProductAbstract)
    {
        return $this->setSpyProductAbstract($spyProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getSpyProductAbstractOrFail()
    {
        if ($this->spyProductAbstract === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_ABSTRACT);
        }

        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstract()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null $spyProductSet
     *
     * @return $this
     */
    public function setSpyProductSet(SpyProductSetEntityTransfer $spyProductSet = null)
    {
        $this->spyProductSet = $spyProductSet;
        $this->modifiedProperties[self::SPY_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null
     */
    public function getSpyProductSet()
    {
        return $this->spyProductSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSetEntityTransfer $spyProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductSetOrFail(SpyProductSetEntityTransfer $spyProductSet)
    {
        return $this->setSpyProductSet($spyProductSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductSetEntityTransfer
     */
    public function getSpyProductSetOrFail()
    {
        if ($this->spyProductSet === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_SET);
        }

        return $this->spyProductSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSet()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer[] $spyProductImageSetToProductImages
     *
     * @return $this
     */
    public function setSpyProductImageSetToProductImages(ArrayObject $spyProductImageSetToProductImages)
    {
        $this->spyProductImageSetToProductImages = $spyProductImageSetToProductImages;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer[]
     */
    public function getSpyProductImageSetToProductImages()
    {
        return $this->spyProductImageSetToProductImages;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer $spyProductImageSetToProductImages
     *
     * @return $this
     */
    public function addSpyProductImageSetToProductImages(SpyProductImageSetToProductImageEntityTransfer $spyProductImageSetToProductImages)
    {
        $this->spyProductImageSetToProductImages[] = $spyProductImageSetToProductImages;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductImageSetToProductImages()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES);

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
                case 'idProductImageSet':
                case 'fkLocale':
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'fkResourceConfigurableBundleTemplate':
                case 'fkResourceProductSet':
                case 'name':
                case 'productImageSetKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyConfigurableBundleTemplate':
                case 'spyLocale':
                case 'spyProduct':
                case 'spyProductAbstract':
                case 'spyProductSet':
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
                case 'spyProductImageSetToProductImages':
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
                case 'idProductImageSet':
                case 'fkLocale':
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'fkResourceConfigurableBundleTemplate':
                case 'fkResourceProductSet':
                case 'name':
                case 'productImageSetKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyConfigurableBundleTemplate':
                case 'spyLocale':
                case 'spyProduct':
                case 'spyProductAbstract':
                case 'spyProductSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductImageSetToProductImages':
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
                case 'idProductImageSet':
                case 'fkLocale':
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'fkResourceConfigurableBundleTemplate':
                case 'fkResourceProductSet':
                case 'name':
                case 'productImageSetKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyConfigurableBundleTemplate':
                case 'spyLocale':
                case 'spyProduct':
                case 'spyProductAbstract':
                case 'spyProductSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductImageSetToProductImages':
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
        $this->spyProductImageSetToProductImages = $this->spyProductImageSetToProductImages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductImageSet' => $this->idProductImageSet,
            'fkLocale' => $this->fkLocale,
            'fkProduct' => $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkResourceConfigurableBundleTemplate' => $this->fkResourceConfigurableBundleTemplate,
            'fkResourceProductSet' => $this->fkResourceProductSet,
            'name' => $this->name,
            'productImageSetKey' => $this->productImageSetKey,
            'spyConfigurableBundleTemplate' => $this->spyConfigurableBundleTemplate,
            'spyLocale' => $this->spyLocale,
            'spyProduct' => $this->spyProduct,
            'spyProductAbstract' => $this->spyProductAbstract,
            'spyProductSet' => $this->spyProductSet,
            'spyProductImageSetToProductImages' => $this->spyProductImageSetToProductImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_image_set' => $this->idProductImageSet,
            'fk_locale' => $this->fkLocale,
            'fk_product' => $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract,
            'fk_resource_configurable_bundle_template' => $this->fkResourceConfigurableBundleTemplate,
            'fk_resource_product_set' => $this->fkResourceProductSet,
            'name' => $this->name,
            'product_image_set_key' => $this->productImageSetKey,
            'spy_configurable_bundle_template' => $this->spyConfigurableBundleTemplate,
            'spy_locale' => $this->spyLocale,
            'spy_product' => $this->spyProduct,
            'spy_product_abstract' => $this->spyProductAbstract,
            'spy_product_set' => $this->spyProductSet,
            'spy_product_image_set_to_product_images' => $this->spyProductImageSetToProductImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_image_set' => $this->idProductImageSet instanceof AbstractTransfer ? $this->idProductImageSet->toArray(true, false) : $this->idProductImageSet,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'fk_resource_configurable_bundle_template' => $this->fkResourceConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkResourceConfigurableBundleTemplate->toArray(true, false) : $this->fkResourceConfigurableBundleTemplate,
            'fk_resource_product_set' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, false) : $this->fkResourceProductSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'product_image_set_key' => $this->productImageSetKey instanceof AbstractTransfer ? $this->productImageSetKey->toArray(true, false) : $this->productImageSetKey,
            'spy_configurable_bundle_template' => $this->spyConfigurableBundleTemplate instanceof AbstractTransfer ? $this->spyConfigurableBundleTemplate->toArray(true, false) : $this->spyConfigurableBundleTemplate,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
            'spy_product' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, false) : $this->spyProduct,
            'spy_product_abstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, false) : $this->spyProductAbstract,
            'spy_product_set' => $this->spyProductSet instanceof AbstractTransfer ? $this->spyProductSet->toArray(true, false) : $this->spyProductSet,
            'spy_product_image_set_to_product_images' => $this->spyProductImageSetToProductImages instanceof AbstractTransfer ? $this->spyProductImageSetToProductImages->toArray(true, false) : $this->addValuesToCollection($this->spyProductImageSetToProductImages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductImageSet' => $this->idProductImageSet instanceof AbstractTransfer ? $this->idProductImageSet->toArray(true, true) : $this->idProductImageSet,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'fkResourceConfigurableBundleTemplate' => $this->fkResourceConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkResourceConfigurableBundleTemplate->toArray(true, true) : $this->fkResourceConfigurableBundleTemplate,
            'fkResourceProductSet' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, true) : $this->fkResourceProductSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'productImageSetKey' => $this->productImageSetKey instanceof AbstractTransfer ? $this->productImageSetKey->toArray(true, true) : $this->productImageSetKey,
            'spyConfigurableBundleTemplate' => $this->spyConfigurableBundleTemplate instanceof AbstractTransfer ? $this->spyConfigurableBundleTemplate->toArray(true, true) : $this->spyConfigurableBundleTemplate,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
            'spyProduct' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, true) : $this->spyProduct,
            'spyProductAbstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, true) : $this->spyProductAbstract,
            'spyProductSet' => $this->spyProductSet instanceof AbstractTransfer ? $this->spyProductSet->toArray(true, true) : $this->spyProductSet,
            'spyProductImageSetToProductImages' => $this->spyProductImageSetToProductImages instanceof AbstractTransfer ? $this->spyProductImageSetToProductImages->toArray(true, true) : $this->addValuesToCollection($this->spyProductImageSetToProductImages, true, true),
        ];
    }
}
