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
class ProductSetStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const ID_PRODUCT_SET = 'idProductSet';

    /**
     * @var string
     */
    public const WEIGHT = 'weight';

    /**
     * @var string
     */
    public const PRODUCT_SET_KEY = 'productSetKey';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACTS = 'idProductAbstracts';

    /**
     * @var string
     */
    public const URL = 'url';

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
    public const META_DESCRIPTION = 'metaDescription';

    /**
     * @var string
     */
    public const META_KEYWORDS = 'metaKeywords';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var string
     */
    public const IMAGES = 'images';

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var int|null
     */
    protected $idProductSet;

    /**
     * @var int|null
     */
    protected $weight;

    /**
     * @var string|null
     */
    protected $productSetKey;

    /**
     * @var array
     */
    protected $idProductAbstracts = [];

    /**
     * @var string|null
     */
    protected $url;

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
    protected $metaDescription;

    /**
     * @var string|null
     */
    protected $metaKeywords;

    /**
     * @var array
     */
    protected $imageSets = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StorageProductImageTransfer[]
     */
    protected $images;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'id_product_set' => 'idProductSet',
        'idProductSet' => 'idProductSet',
        'IdProductSet' => 'idProductSet',
        'weight' => 'weight',
        'Weight' => 'weight',
        'product_set_key' => 'productSetKey',
        'productSetKey' => 'productSetKey',
        'ProductSetKey' => 'productSetKey',
        'id_product_abstracts' => 'idProductAbstracts',
        'idProductAbstracts' => 'idProductAbstracts',
        'IdProductAbstracts' => 'idProductAbstracts',
        'url' => 'url',
        'Url' => 'url',
        'name' => 'name',
        'Name' => 'name',
        'description' => 'description',
        'Description' => 'description',
        'meta_title' => 'metaTitle',
        'metaTitle' => 'metaTitle',
        'MetaTitle' => 'metaTitle',
        'meta_description' => 'metaDescription',
        'metaDescription' => 'metaDescription',
        'MetaDescription' => 'metaDescription',
        'meta_keywords' => 'metaKeywords',
        'metaKeywords' => 'metaKeywords',
        'MetaKeywords' => 'metaKeywords',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
        'images' => 'images',
        'Images' => 'images',
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
        self::ID_PRODUCT_ABSTRACTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstracts',
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
        self::IMAGE_SETS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGES => [
            'type' => 'Generated\Shared\Transfer\StorageProductImageTransfer',
            'type_shim' => null,
            'name_underscore' => 'images',
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
     * @module CmsContentWidgetProductSetConnector|ProductSet
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
     * @module CmsContentWidgetProductSetConnector|ProductSet
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CmsContentWidgetProductSetConnector|ProductSet
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
     * @module CmsContentWidgetProductSetConnector|ProductSet
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
     * @module CmsContentWidgetProductSetConnector|ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return int|null
     */
    public function getIdProductSet()
    {
        return $this->idProductSet;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return string|null
     */
    public function getProductSetKey()
    {
        return $this->productSetKey;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @param array|null $idProductAbstracts
     *
     * @return $this
     */
    public function setIdProductAbstracts(array $idProductAbstracts = null)
    {
        if ($idProductAbstracts === null) {
            $idProductAbstracts = [];
        }

        $this->idProductAbstracts = $idProductAbstracts;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @return array
     */
    public function getIdProductAbstracts()
    {
        return $this->idProductAbstracts;
    }

    /**
     * @module ProductSet
     *
     * @param mixed $idProductAbstract
     *
     * @return $this
     */
    public function addIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstracts[] = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstracts()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
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
     * @module ProductSet
     *
     * @param array|null $imageSets
     *
     * @return $this
     */
    public function setImageSets(array $imageSets = null)
    {
        if ($imageSets === null) {
            $imageSets = [];
        }

        $this->imageSets = $imageSets;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @return array
     */
    public function getImageSets()
    {
        return $this->imageSets;
    }

    /**
     * @module ProductSet
     *
     * @param mixed $imageSet
     *
     * @return $this
     */
    public function addImageSet($imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertPropertyIsSet(self::IMAGE_SETS);

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StorageProductImageTransfer[] $images
     *
     * @return $this
     */
    public function setImages(ArrayObject $images)
    {
        $this->images = $images;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StorageProductImageTransfer[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @module ProductSet
     *
     * @param \Generated\Shared\Transfer\StorageProductImageTransfer $image
     *
     * @return $this
     */
    public function addImage(StorageProductImageTransfer $image)
    {
        $this->images[] = $image;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImages()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGES);

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
                case 'idProductSet':
                case 'weight':
                case 'productSetKey':
                case 'idProductAbstracts':
                case 'url':
                case 'name':
                case 'description':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                case 'imageSets':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'images':
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
                case 'idProductSet':
                case 'weight':
                case 'productSetKey':
                case 'idProductAbstracts':
                case 'url':
                case 'name':
                case 'description':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                case 'imageSets':
                    $values[$arrayKey] = $value;

                    break;
                case 'images':
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
                case 'idProductSet':
                case 'weight':
                case 'productSetKey':
                case 'idProductAbstracts':
                case 'url':
                case 'name':
                case 'description':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                case 'imageSets':
                    $values[$arrayKey] = $value;

                    break;
                case 'images':
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
        $this->images = $this->images ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive,
            'idProductSet' => $this->idProductSet,
            'weight' => $this->weight,
            'productSetKey' => $this->productSetKey,
            'idProductAbstracts' => $this->idProductAbstracts,
            'url' => $this->url,
            'name' => $this->name,
            'description' => $this->description,
            'metaTitle' => $this->metaTitle,
            'metaDescription' => $this->metaDescription,
            'metaKeywords' => $this->metaKeywords,
            'imageSets' => $this->imageSets,
            'images' => $this->images,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive,
            'id_product_set' => $this->idProductSet,
            'weight' => $this->weight,
            'product_set_key' => $this->productSetKey,
            'id_product_abstracts' => $this->idProductAbstracts,
            'url' => $this->url,
            'name' => $this->name,
            'description' => $this->description,
            'meta_title' => $this->metaTitle,
            'meta_description' => $this->metaDescription,
            'meta_keywords' => $this->metaKeywords,
            'image_sets' => $this->imageSets,
            'images' => $this->images,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'id_product_set' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, false) : $this->idProductSet,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, false) : $this->weight,
            'product_set_key' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, false) : $this->productSetKey,
            'id_product_abstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, false) : $this->idProductAbstracts,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->imageSets,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, false) : $this->addValuesToCollection($this->images, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'idProductSet' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, true) : $this->idProductSet,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, true) : $this->weight,
            'productSetKey' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, true) : $this->productSetKey,
            'idProductAbstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, true) : $this->idProductAbstracts,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->imageSets,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, true) : $this->addValuesToCollection($this->images, true, true),
        ];
    }
}
