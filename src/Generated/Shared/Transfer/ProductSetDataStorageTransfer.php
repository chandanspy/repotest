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
class ProductSetDataStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_IDS = 'productAbstractIds';

    /**
     * @var string
     */
    public const WEIGHT = 'weight';

    /**
     * @var string
     */
    public const ID_PRODUCT_SET = 'idProductSet';

    /**
     * @var string
     */
    public const PRODUCT_SET_KEY = 'productSetKey';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const META_TITLE = 'metaTitle';

    /**
     * @var string
     */
    public const META_KEYWORDS = 'metaKeywords';

    /**
     * @var string
     */
    public const META_DESCRIPTION = 'metaDescription';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array
     */
    protected $productAbstractIds = [];

    /**
     * @var int|null
     */
    protected $weight;

    /**
     * @var int|null
     */
    protected $idProductSet;

    /**
     * @var string|null
     */
    protected $productSetKey;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $metaTitle;

    /**
     * @var string|null
     */
    protected $metaKeywords;

    /**
     * @var string|null
     */
    protected $metaDescription;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageSetStorageTransfer[]
     */
    protected $imageSets;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'product_abstract_ids' => 'productAbstractIds',
        'productAbstractIds' => 'productAbstractIds',
        'ProductAbstractIds' => 'productAbstractIds',
        'weight' => 'weight',
        'Weight' => 'weight',
        'id_product_set' => 'idProductSet',
        'idProductSet' => 'idProductSet',
        'IdProductSet' => 'idProductSet',
        'product_set_key' => 'productSetKey',
        'productSetKey' => 'productSetKey',
        'ProductSetKey' => 'productSetKey',
        'name' => 'name',
        'Name' => 'name',
        'description' => 'description',
        'Description' => 'description',
        'meta_title' => 'metaTitle',
        'metaTitle' => 'metaTitle',
        'MetaTitle' => 'metaTitle',
        'meta_keywords' => 'metaKeywords',
        'metaKeywords' => 'metaKeywords',
        'MetaKeywords' => 'metaKeywords',
        'meta_description' => 'metaDescription',
        'metaDescription' => 'metaDescription',
        'MetaDescription' => 'metaDescription',
        'url' => 'url',
        'Url' => 'url',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::PRODUCT_ABSTRACT_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WEIGHT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'weight',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_SET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_SET_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_set_key',
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
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_KEYWORDS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_keywords',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductImageSetStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
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
     * @module CmsContentWidgetProductSetConnector|ProductSetStorage
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
     * @module CmsContentWidgetProductSetConnector|ProductSetStorage
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CmsContentWidgetProductSetConnector|ProductSetStorage
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
     * @module CmsContentWidgetProductSetConnector|ProductSetStorage
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
     * @module CmsContentWidgetProductSetConnector|ProductSetStorage
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
     * @module CmsContentWidgetProductSetConnector|ContentProductSetWidget|ProductSetDetailPage|ProductSetStorage
     *
     * @param array|null $productAbstractIds
     *
     * @return $this
     */
    public function setProductAbstractIds(array $productAbstractIds = null)
    {
        if ($productAbstractIds === null) {
            $productAbstractIds = [];
        }

        $this->productAbstractIds = $productAbstractIds;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module CmsContentWidgetProductSetConnector|ContentProductSetWidget|ProductSetDetailPage|ProductSetStorage
     *
     * @return array
     */
    public function getProductAbstractIds()
    {
        return $this->productAbstractIds;
    }

    /**
     * @module CmsContentWidgetProductSetConnector|ContentProductSetWidget|ProductSetDetailPage|ProductSetStorage
     *
     * @param mixed $productAbstractIds
     *
     * @return $this
     */
    public function addProductAbstractIds($productAbstractIds)
    {
        $this->productAbstractIds[] = $productAbstractIds;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module CmsContentWidgetProductSetConnector|ContentProductSetWidget|ProductSetDetailPage|ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_IDS);

        return $this;
    }

    /**
     * @module ProductSetPageSearch|ProductSetStorage
     *
     * @param int|null $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->modifiedProperties[self::WEIGHT] = true;

        return $this;
    }

    /**
     * @module ProductSetPageSearch|ProductSetStorage
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @module ProductSetPageSearch|ProductSetStorage
     *
     * @param int|null $weight
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWeightOrFail($weight)
    {
        if ($weight === null) {
            $this->throwNullValueException(static::WEIGHT);
        }

        return $this->setWeight($weight);
    }

    /**
     * @module ProductSetPageSearch|ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getWeightOrFail()
    {
        if ($this->weight === null) {
            $this->throwNullValueException(static::WEIGHT);
        }

        return $this->weight;
    }

    /**
     * @module ProductSetPageSearch|ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWeight()
    {
        $this->assertPropertyIsSet(self::WEIGHT);

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @param int|null $idProductSet
     *
     * @return $this
     */
    public function setIdProductSet($idProductSet)
    {
        $this->idProductSet = $idProductSet;
        $this->modifiedProperties[self::ID_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return int|null
     */
    public function getIdProductSet()
    {
        return $this->idProductSet;
    }

    /**
     * @module ProductSetStorage
     *
     * @param int|null $idProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductSetOrFail($idProductSet)
    {
        if ($idProductSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SET);
        }

        return $this->setIdProductSet($idProductSet);
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductSetOrFail()
    {
        if ($this->idProductSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SET);
        }

        return $this->idProductSet;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductSet()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_SET);

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $productSetKey
     *
     * @return $this
     */
    public function setProductSetKey($productSetKey)
    {
        $this->productSetKey = $productSetKey;
        $this->modifiedProperties[self::PRODUCT_SET_KEY] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return string|null
     */
    public function getProductSetKey()
    {
        return $this->productSetKey;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $productSetKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductSetKeyOrFail($productSetKey)
    {
        if ($productSetKey === null) {
            $this->throwNullValueException(static::PRODUCT_SET_KEY);
        }

        return $this->setProductSetKey($productSetKey);
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductSetKeyOrFail()
    {
        if ($this->productSetKey === null) {
            $this->throwNullValueException(static::PRODUCT_SET_KEY);
        }

        return $this->productSetKey;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductSetKey()
    {
        $this->assertPropertyIsSet(self::PRODUCT_SET_KEY);

        return $this;
    }

    /**
     * @module ProductSetStorage
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
     * @module ProductSetStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductSetStorage
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
     * @module ProductSetStorage
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
     * @module ProductSetStorage
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
     * @module ProductSetStorage
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $metaTitle
     *
     * @return $this
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
        $this->modifiedProperties[self::META_TITLE] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $metaTitle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaTitleOrFail($metaTitle)
    {
        if ($metaTitle === null) {
            $this->throwNullValueException(static::META_TITLE);
        }

        return $this->setMetaTitle($metaTitle);
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaTitleOrFail()
    {
        if ($this->metaTitle === null) {
            $this->throwNullValueException(static::META_TITLE);
        }

        return $this->metaTitle;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaTitle()
    {
        $this->assertPropertyIsSet(self::META_TITLE);

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $metaKeywords
     *
     * @return $this
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
        $this->modifiedProperties[self::META_KEYWORDS] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $metaKeywords
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaKeywordsOrFail($metaKeywords)
    {
        if ($metaKeywords === null) {
            $this->throwNullValueException(static::META_KEYWORDS);
        }

        return $this->setMetaKeywords($metaKeywords);
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaKeywordsOrFail()
    {
        if ($this->metaKeywords === null) {
            $this->throwNullValueException(static::META_KEYWORDS);
        }

        return $this->metaKeywords;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaKeywords()
    {
        $this->assertPropertyIsSet(self::META_KEYWORDS);

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $metaDescription
     *
     * @return $this
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
        $this->modifiedProperties[self::META_DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $metaDescription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaDescriptionOrFail($metaDescription)
    {
        if ($metaDescription === null) {
            $this->throwNullValueException(static::META_DESCRIPTION);
        }

        return $this->setMetaDescription($metaDescription);
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaDescriptionOrFail()
    {
        if ($this->metaDescription === null) {
            $this->throwNullValueException(static::META_DESCRIPTION);
        }

        return $this->metaDescription;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaDescription()
    {
        $this->assertPropertyIsSet(self::META_DESCRIPTION);

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ProductSetStorage
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageSetStorageTransfer[] $imageSets
     *
     * @return $this
     */
    public function setImageSets(ArrayObject $imageSets)
    {
        $this->imageSets = $imageSets;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageSetStorageTransfer[]
     */
    public function getImageSets()
    {
        return $this->imageSets;
    }

    /**
     * @module ProductSetStorage
     *
     * @param \Generated\Shared\Transfer\ProductImageSetStorageTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(ProductImageSetStorageTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductSetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGE_SETS);

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
                case 'isActive':
                case 'productAbstractIds':
                case 'weight':
                case 'idProductSet':
                case 'productSetKey':
                case 'name':
                case 'description':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'url':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'imageSets':
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
                case 'isActive':
                case 'productAbstractIds':
                case 'weight':
                case 'idProductSet':
                case 'productSetKey':
                case 'name':
                case 'description':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'url':
                    $values[$arrayKey] = $value;

                    break;
                case 'imageSets':
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
                case 'isActive':
                case 'productAbstractIds':
                case 'weight':
                case 'idProductSet':
                case 'productSetKey':
                case 'name':
                case 'description':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'url':
                    $values[$arrayKey] = $value;

                    break;
                case 'imageSets':
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
        $this->imageSets = $this->imageSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive,
            'productAbstractIds' => $this->productAbstractIds,
            'weight' => $this->weight,
            'idProductSet' => $this->idProductSet,
            'productSetKey' => $this->productSetKey,
            'name' => $this->name,
            'description' => $this->description,
            'metaTitle' => $this->metaTitle,
            'metaKeywords' => $this->metaKeywords,
            'metaDescription' => $this->metaDescription,
            'url' => $this->url,
            'imageSets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive,
            'product_abstract_ids' => $this->productAbstractIds,
            'weight' => $this->weight,
            'id_product_set' => $this->idProductSet,
            'product_set_key' => $this->productSetKey,
            'name' => $this->name,
            'description' => $this->description,
            'meta_title' => $this->metaTitle,
            'meta_keywords' => $this->metaKeywords,
            'meta_description' => $this->metaDescription,
            'url' => $this->url,
            'image_sets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'product_abstract_ids' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, false) : $this->productAbstractIds,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, false) : $this->weight,
            'id_product_set' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, false) : $this->idProductSet,
            'product_set_key' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, false) : $this->productSetKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'productAbstractIds' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, true) : $this->productAbstractIds,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, true) : $this->weight,
            'idProductSet' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, true) : $this->idProductSet,
            'productSetKey' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, true) : $this->productSetKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
        ];
    }
}
