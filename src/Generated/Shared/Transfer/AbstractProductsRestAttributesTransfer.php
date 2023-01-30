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
class AbstractProductsRestAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const AVERAGE_RATING = 'averageRating';

    /**
     * @var string
     */
    public const REVIEW_COUNT = 'reviewCount';

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
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const SUPER_ATTRIBUTES_DEFINITION = 'superAttributesDefinition';

    /**
     * @var string
     */
    public const SUPER_ATTRIBUTES = 'superAttributes';

    /**
     * @var string
     */
    public const ATTRIBUTE_MAP = 'attributeMap';

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
    public const ATTRIBUTE_NAMES = 'attributeNames';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var float|null
     */
    protected $averageRating;

    /**
     * @var int|null
     */
    protected $reviewCount;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $superAttributesDefinition = [];

    /**
     * @var array
     */
    protected $superAttributes = [];

    /**
     * @var array
     */
    protected $attributeMap = [];

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
     * @var array
     */
    protected $attributeNames = [];

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'average_rating' => 'averageRating',
        'averageRating' => 'averageRating',
        'AverageRating' => 'averageRating',
        'review_count' => 'reviewCount',
        'reviewCount' => 'reviewCount',
        'ReviewCount' => 'reviewCount',
        'name' => 'name',
        'Name' => 'name',
        'description' => 'description',
        'Description' => 'description',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'super_attributes_definition' => 'superAttributesDefinition',
        'superAttributesDefinition' => 'superAttributesDefinition',
        'SuperAttributesDefinition' => 'superAttributesDefinition',
        'super_attributes' => 'superAttributes',
        'superAttributes' => 'superAttributes',
        'SuperAttributes' => 'superAttributes',
        'attribute_map' => 'attributeMap',
        'attributeMap' => 'attributeMap',
        'AttributeMap' => 'attributeMap',
        'meta_title' => 'metaTitle',
        'metaTitle' => 'metaTitle',
        'MetaTitle' => 'metaTitle',
        'meta_keywords' => 'metaKeywords',
        'metaKeywords' => 'metaKeywords',
        'MetaKeywords' => 'metaKeywords',
        'meta_description' => 'metaDescription',
        'metaDescription' => 'metaDescription',
        'MetaDescription' => 'metaDescription',
        'attribute_names' => 'attributeNames',
        'attributeNames' => 'attributeNames',
        'AttributeNames' => 'attributeNames',
        'url' => 'url',
        'Url' => 'url',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVERAGE_RATING => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'average_rating',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REVIEW_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'review_count',
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
        self::ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUPER_ATTRIBUTES_DEFINITION => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'super_attributes_definition',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUPER_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'super_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTE_MAP => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attribute_map',
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
        self::ATTRIBUTE_NAMES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attribute_names',
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
    ];

    /**
     * @module ContentProductAbstractListsRestApi|ProductsRestApi
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module ContentProductAbstractListsRestApi|ProductsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ContentProductAbstractListsRestApi|ProductsRestApi
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module ContentProductAbstractListsRestApi|ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module ContentProductAbstractListsRestApi|ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @param float|null $averageRating
     *
     * @return $this
     */
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
        $this->modifiedProperties[self::AVERAGE_RATING] = true;

        return $this;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @return float|null
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @param float|null $averageRating
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAverageRatingOrFail($averageRating)
    {
        if ($averageRating === null) {
            $this->throwNullValueException(static::AVERAGE_RATING);
        }

        return $this->setAverageRating($averageRating);
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getAverageRatingOrFail()
    {
        if ($this->averageRating === null) {
            $this->throwNullValueException(static::AVERAGE_RATING);
        }

        return $this->averageRating;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAverageRating()
    {
        $this->assertPropertyIsSet(self::AVERAGE_RATING);

        return $this;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @param int|null $reviewCount
     *
     * @return $this
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        $this->modifiedProperties[self::REVIEW_COUNT] = true;

        return $this;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @param int|null $reviewCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReviewCountOrFail($reviewCount)
    {
        if ($reviewCount === null) {
            $this->throwNullValueException(static::REVIEW_COUNT);
        }

        return $this->setReviewCount($reviewCount);
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getReviewCountOrFail()
    {
        if ($this->reviewCount === null) {
            $this->throwNullValueException(static::REVIEW_COUNT);
        }

        return $this->reviewCount;
    }

    /**
     * @module ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReviewCount()
    {
        $this->assertPropertyIsSet(self::REVIEW_COUNT);

        return $this;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @param array|null $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes = null)
    {
        if ($attributes === null) {
            $attributes = [];
        }

        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module ProductsRestApi
     *
     * @param mixed $attributes
     *
     * @return $this
     */
    public function addAttributes($attributes)
    {
        $this->attributes[] = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributes()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @param array|null $superAttributesDefinition
     *
     * @return $this
     */
    public function setSuperAttributesDefinition(array $superAttributesDefinition = null)
    {
        if ($superAttributesDefinition === null) {
            $superAttributesDefinition = [];
        }

        $this->superAttributesDefinition = $superAttributesDefinition;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES_DEFINITION] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @return array
     */
    public function getSuperAttributesDefinition()
    {
        return $this->superAttributesDefinition;
    }

    /**
     * @module ProductsRestApi
     *
     * @param mixed $superAttributesDefinition
     *
     * @return $this
     */
    public function addSuperAttributesDefinition($superAttributesDefinition)
    {
        $this->superAttributesDefinition[] = $superAttributesDefinition;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES_DEFINITION] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuperAttributesDefinition()
    {
        $this->assertPropertyIsSet(self::SUPER_ATTRIBUTES_DEFINITION);

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @param array|null $superAttributes
     *
     * @return $this
     */
    public function setSuperAttributes(array $superAttributes = null)
    {
        if ($superAttributes === null) {
            $superAttributes = [];
        }

        $this->superAttributes = $superAttributes;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @return array
     */
    public function getSuperAttributes()
    {
        return $this->superAttributes;
    }

    /**
     * @module ProductsRestApi
     *
     * @param mixed $superAttributes
     *
     * @return $this
     */
    public function addSuperAttributes($superAttributes)
    {
        $this->superAttributes[] = $superAttributes;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuperAttributes()
    {
        $this->assertPropertyIsSet(self::SUPER_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @param array|null $attributeMap
     *
     * @return $this
     */
    public function setAttributeMap(array $attributeMap = null)
    {
        if ($attributeMap === null) {
            $attributeMap = [];
        }

        $this->attributeMap = $attributeMap;
        $this->modifiedProperties[self::ATTRIBUTE_MAP] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @return array
     */
    public function getAttributeMap()
    {
        return $this->attributeMap;
    }

    /**
     * @module ProductsRestApi
     *
     * @param mixed $attributeMap
     *
     * @return $this
     */
    public function addAttributeMap($attributeMap)
    {
        $this->attributeMap[] = $attributeMap;
        $this->modifiedProperties[self::ATTRIBUTE_MAP] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributeMap()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTE_MAP);

        return $this;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @param array|null $attributeNames
     *
     * @return $this
     */
    public function setAttributeNames(array $attributeNames = null)
    {
        if ($attributeNames === null) {
            $attributeNames = [];
        }

        $this->attributeNames = $attributeNames;
        $this->modifiedProperties[self::ATTRIBUTE_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @return array
     */
    public function getAttributeNames()
    {
        return $this->attributeNames;
    }

    /**
     * @module ProductsRestApi
     *
     * @param mixed $attributeNames
     *
     * @return $this
     */
    public function addAttributeNames($attributeNames)
    {
        $this->attributeNames[] = $attributeNames;
        $this->modifiedProperties[self::ATTRIBUTE_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributeNames()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTE_NAMES);

        return $this;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
     * @module ProductsRestApi
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
                case 'sku':
                case 'averageRating':
                case 'reviewCount':
                case 'name':
                case 'description':
                case 'attributes':
                case 'superAttributesDefinition':
                case 'superAttributes':
                case 'attributeMap':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'attributeNames':
                case 'url':
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
                case 'sku':
                case 'averageRating':
                case 'reviewCount':
                case 'name':
                case 'description':
                case 'attributes':
                case 'superAttributesDefinition':
                case 'superAttributes':
                case 'attributeMap':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'attributeNames':
                case 'url':
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
                case 'sku':
                case 'averageRating':
                case 'reviewCount':
                case 'name':
                case 'description':
                case 'attributes':
                case 'superAttributesDefinition':
                case 'superAttributes':
                case 'attributeMap':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'attributeNames':
                case 'url':
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
            'sku' => $this->sku,
            'averageRating' => $this->averageRating,
            'reviewCount' => $this->reviewCount,
            'name' => $this->name,
            'description' => $this->description,
            'attributes' => $this->attributes,
            'superAttributesDefinition' => $this->superAttributesDefinition,
            'superAttributes' => $this->superAttributes,
            'attributeMap' => $this->attributeMap,
            'metaTitle' => $this->metaTitle,
            'metaKeywords' => $this->metaKeywords,
            'metaDescription' => $this->metaDescription,
            'attributeNames' => $this->attributeNames,
            'url' => $this->url,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'average_rating' => $this->averageRating,
            'review_count' => $this->reviewCount,
            'name' => $this->name,
            'description' => $this->description,
            'attributes' => $this->attributes,
            'super_attributes_definition' => $this->superAttributesDefinition,
            'super_attributes' => $this->superAttributes,
            'attribute_map' => $this->attributeMap,
            'meta_title' => $this->metaTitle,
            'meta_keywords' => $this->metaKeywords,
            'meta_description' => $this->metaDescription,
            'attribute_names' => $this->attributeNames,
            'url' => $this->url,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'average_rating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, false) : $this->averageRating,
            'review_count' => $this->reviewCount instanceof AbstractTransfer ? $this->reviewCount->toArray(true, false) : $this->reviewCount,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'super_attributes_definition' => $this->superAttributesDefinition instanceof AbstractTransfer ? $this->superAttributesDefinition->toArray(true, false) : $this->superAttributesDefinition,
            'super_attributes' => $this->superAttributes instanceof AbstractTransfer ? $this->superAttributes->toArray(true, false) : $this->superAttributes,
            'attribute_map' => $this->attributeMap instanceof AbstractTransfer ? $this->attributeMap->toArray(true, false) : $this->attributeMap,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'attribute_names' => $this->attributeNames instanceof AbstractTransfer ? $this->attributeNames->toArray(true, false) : $this->attributeNames,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'averageRating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, true) : $this->averageRating,
            'reviewCount' => $this->reviewCount instanceof AbstractTransfer ? $this->reviewCount->toArray(true, true) : $this->reviewCount,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'superAttributesDefinition' => $this->superAttributesDefinition instanceof AbstractTransfer ? $this->superAttributesDefinition->toArray(true, true) : $this->superAttributesDefinition,
            'superAttributes' => $this->superAttributes instanceof AbstractTransfer ? $this->superAttributes->toArray(true, true) : $this->superAttributes,
            'attributeMap' => $this->attributeMap instanceof AbstractTransfer ? $this->attributeMap->toArray(true, true) : $this->attributeMap,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'attributeNames' => $this->attributeNames instanceof AbstractTransfer ? $this->attributeNames->toArray(true, true) : $this->attributeNames,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
        ];
    }
}
