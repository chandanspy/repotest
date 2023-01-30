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
class ProductPageSearchTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const CATEGORY_NODE_IDS = 'categoryNodeIds';

    /**
     * @var string
     */
    public const ALL_PARENT_CATEGORY_IDS = 'allParentCategoryIds';

    /**
     * @var string
     */
    public const BOOSTED_CATEGORY_NAMES = 'boostedCategoryNames';

    /**
     * @var string
     */
    public const CATEGORY_NAMES = 'categoryNames';

    /**
     * @var string
     */
    public const SORTED_CATEGORIES = 'sortedCategories';

    /**
     * @var string
     */
    public const LABEL_IDS = 'labelIds';

    /**
     * @var string
     */
    public const PRODUCT_LIST_MAP = 'productListMap';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const ID_IMAGE_SET = 'idImageSet';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const ABSTRACT_DESCRIPTION = 'abstractDescription';

    /**
     * @var string
     */
    public const CONCRETE_DESCRIPTION = 'concreteDescription';

    /**
     * @var string
     */
    public const CONCRETE_SKUS = 'concreteSkus';

    /**
     * @var string
     */
    public const CONCRETE_NAMES = 'concreteNames';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const IS_FEATURED = 'isFeatured';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string
     */
    public const PRODUCT_IMAGES = 'productImages';

    /**
     * @var string
     */
    public const ADD_TO_CART_SKU = 'addToCartSku';

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
    public const POPULARITY = 'popularity';

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var array
     */
    protected $categoryNodeIds = [];

    /**
     * @var array
     */
    protected $allParentCategoryIds = [];

    /**
     * @var array
     */
    protected $boostedCategoryNames = [];

    /**
     * @var array
     */
    protected $categoryNames = [];

    /**
     * @var array
     */
    protected $sortedCategories = [];

    /**
     * @var array
     */
    protected $labelIds = [];

    /**
     * @var \Generated\Shared\Transfer\ProductListMapTransfer|null
     */
    protected $productListMap;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var int|null
     */
    protected $idImageSet;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $abstractDescription;

    /**
     * @var string|null
     */
    protected $concreteDescription;

    /**
     * @var string|null
     */
    protected $concreteSkus;

    /**
     * @var string|null
     */
    protected $concreteNames;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var bool|null
     */
    protected $isFeatured;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array
     */
    protected $prices = [];

    /**
     * @var int|null
     */
    protected $price;

    /**
     * @var array
     */
    protected $productImages = [];

    /**
     * @var string|null
     */
    protected $addToCartSku;

    /**
     * @var float|null
     */
    protected $averageRating;

    /**
     * @var int|null
     */
    protected $reviewCount;

    /**
     * @var int|null
     */
    protected $popularity;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'store' => 'store',
        'Store' => 'store',
        'category_node_ids' => 'categoryNodeIds',
        'categoryNodeIds' => 'categoryNodeIds',
        'CategoryNodeIds' => 'categoryNodeIds',
        'all_parent_category_ids' => 'allParentCategoryIds',
        'allParentCategoryIds' => 'allParentCategoryIds',
        'AllParentCategoryIds' => 'allParentCategoryIds',
        'boosted_category_names' => 'boostedCategoryNames',
        'boostedCategoryNames' => 'boostedCategoryNames',
        'BoostedCategoryNames' => 'boostedCategoryNames',
        'category_names' => 'categoryNames',
        'categoryNames' => 'categoryNames',
        'CategoryNames' => 'categoryNames',
        'sorted_categories' => 'sortedCategories',
        'sortedCategories' => 'sortedCategories',
        'SortedCategories' => 'sortedCategories',
        'label_ids' => 'labelIds',
        'labelIds' => 'labelIds',
        'LabelIds' => 'labelIds',
        'product_list_map' => 'productListMap',
        'productListMap' => 'productListMap',
        'ProductListMap' => 'productListMap',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'id_image_set' => 'idImageSet',
        'idImageSet' => 'idImageSet',
        'IdImageSet' => 'idImageSet',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'name' => 'name',
        'Name' => 'name',
        'sku' => 'sku',
        'Sku' => 'sku',
        'url' => 'url',
        'Url' => 'url',
        'locale' => 'locale',
        'Locale' => 'locale',
        'abstract_description' => 'abstractDescription',
        'abstractDescription' => 'abstractDescription',
        'AbstractDescription' => 'abstractDescription',
        'concrete_description' => 'concreteDescription',
        'concreteDescription' => 'concreteDescription',
        'ConcreteDescription' => 'concreteDescription',
        'concrete_skus' => 'concreteSkus',
        'concreteSkus' => 'concreteSkus',
        'ConcreteSkus' => 'concreteSkus',
        'concrete_names' => 'concreteNames',
        'concreteNames' => 'concreteNames',
        'ConcreteNames' => 'concreteNames',
        'type' => 'type',
        'Type' => 'type',
        'is_featured' => 'isFeatured',
        'isFeatured' => 'isFeatured',
        'IsFeatured' => 'isFeatured',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'prices' => 'prices',
        'Prices' => 'prices',
        'price' => 'price',
        'Price' => 'price',
        'product_images' => 'productImages',
        'productImages' => 'productImages',
        'ProductImages' => 'productImages',
        'add_to_cart_sku' => 'addToCartSku',
        'addToCartSku' => 'addToCartSku',
        'AddToCartSku' => 'addToCartSku',
        'average_rating' => 'averageRating',
        'averageRating' => 'averageRating',
        'AverageRating' => 'averageRating',
        'review_count' => 'reviewCount',
        'reviewCount' => 'reviewCount',
        'ReviewCount' => 'reviewCount',
        'popularity' => 'popularity',
        'Popularity' => 'popularity',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_NODE_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'category_node_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ALL_PARENT_CATEGORY_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'all_parent_category_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BOOSTED_CATEGORY_NAMES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'boosted_category_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_NAMES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'category_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORTED_CATEGORIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'sorted_categories',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LABEL_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'label_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LIST_MAP => [
            'type' => 'Generated\Shared\Transfer\ProductListMapTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list_map',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::ID_IMAGE_SET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_image_set',
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
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'abstract_description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONCRETE_DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'concrete_description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONCRETE_SKUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'concrete_skus',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONCRETE_NAMES => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'concrete_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_FEATURED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_featured',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::PRICES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'prices',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_IMAGES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_images',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADD_TO_CART_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'add_to_cart_sku',
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
        self::POPULARITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'popularity',
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
     * @module ProductCategorySearch|ProductLabelSearch|ProductPageSearch
     *
     * @param string|null $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductPageSearch
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductPageSearch
     *
     * @param string|null $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail($store)
    {
        if ($store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->setStore($store);
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param array|null $categoryNodeIds
     *
     * @return $this
     */
    public function setCategoryNodeIds(array $categoryNodeIds = null)
    {
        if ($categoryNodeIds === null) {
            $categoryNodeIds = [];
        }

        $this->categoryNodeIds = $categoryNodeIds;
        $this->modifiedProperties[self::CATEGORY_NODE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @return array
     */
    public function getCategoryNodeIds()
    {
        return $this->categoryNodeIds;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param mixed $categoryNodeIds
     *
     * @return $this
     */
    public function addCategoryNodeIds($categoryNodeIds)
    {
        $this->categoryNodeIds[] = $categoryNodeIds;
        $this->modifiedProperties[self::CATEGORY_NODE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryNodeIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_NODE_IDS);

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param array|null $allParentCategoryIds
     *
     * @return $this
     */
    public function setAllParentCategoryIds(array $allParentCategoryIds = null)
    {
        if ($allParentCategoryIds === null) {
            $allParentCategoryIds = [];
        }

        $this->allParentCategoryIds = $allParentCategoryIds;
        $this->modifiedProperties[self::ALL_PARENT_CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @return array
     */
    public function getAllParentCategoryIds()
    {
        return $this->allParentCategoryIds;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param mixed $allParentCategoryIds
     *
     * @return $this
     */
    public function addAllParentCategoryIds($allParentCategoryIds)
    {
        $this->allParentCategoryIds[] = $allParentCategoryIds;
        $this->modifiedProperties[self::ALL_PARENT_CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAllParentCategoryIds()
    {
        $this->assertPropertyIsSet(self::ALL_PARENT_CATEGORY_IDS);

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param array|null $boostedCategoryNames
     *
     * @return $this
     */
    public function setBoostedCategoryNames(array $boostedCategoryNames = null)
    {
        if ($boostedCategoryNames === null) {
            $boostedCategoryNames = [];
        }

        $this->boostedCategoryNames = $boostedCategoryNames;
        $this->modifiedProperties[self::BOOSTED_CATEGORY_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @return array
     */
    public function getBoostedCategoryNames()
    {
        return $this->boostedCategoryNames;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param mixed $boostedCategoryNames
     *
     * @return $this
     */
    public function addBoostedCategoryNames($boostedCategoryNames)
    {
        $this->boostedCategoryNames[] = $boostedCategoryNames;
        $this->modifiedProperties[self::BOOSTED_CATEGORY_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBoostedCategoryNames()
    {
        $this->assertPropertyIsSet(self::BOOSTED_CATEGORY_NAMES);

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param array|null $categoryNames
     *
     * @return $this
     */
    public function setCategoryNames(array $categoryNames = null)
    {
        if ($categoryNames === null) {
            $categoryNames = [];
        }

        $this->categoryNames = $categoryNames;
        $this->modifiedProperties[self::CATEGORY_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @return array
     */
    public function getCategoryNames()
    {
        return $this->categoryNames;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param mixed $categoryNames
     *
     * @return $this
     */
    public function addCategoryNames($categoryNames)
    {
        $this->categoryNames[] = $categoryNames;
        $this->modifiedProperties[self::CATEGORY_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryNames()
    {
        $this->assertPropertyIsSet(self::CATEGORY_NAMES);

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param array|null $sortedCategories
     *
     * @return $this
     */
    public function setSortedCategories(array $sortedCategories = null)
    {
        if ($sortedCategories === null) {
            $sortedCategories = [];
        }

        $this->sortedCategories = $sortedCategories;
        $this->modifiedProperties[self::SORTED_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @return array
     */
    public function getSortedCategories()
    {
        return $this->sortedCategories;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param mixed $sortedCategories
     *
     * @return $this
     */
    public function addSortedCategories($sortedCategories)
    {
        $this->sortedCategories[] = $sortedCategories;
        $this->modifiedProperties[self::SORTED_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortedCategories()
    {
        $this->assertPropertyIsSet(self::SORTED_CATEGORIES);

        return $this;
    }

    /**
     * @module ProductLabelSearch
     *
     * @param array|null $labelIds
     *
     * @return $this
     */
    public function setLabelIds(array $labelIds = null)
    {
        if ($labelIds === null) {
            $labelIds = [];
        }

        $this->labelIds = $labelIds;
        $this->modifiedProperties[self::LABEL_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch
     *
     * @return array
     */
    public function getLabelIds()
    {
        return $this->labelIds;
    }

    /**
     * @module ProductLabelSearch
     *
     * @param mixed $labelIds
     *
     * @return $this
     */
    public function addLabelIds($labelIds)
    {
        $this->labelIds[] = $labelIds;
        $this->modifiedProperties[self::LABEL_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLabelIds()
    {
        $this->assertPropertyIsSet(self::LABEL_IDS);

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @param \Generated\Shared\Transfer\ProductListMapTransfer|null $productListMap
     *
     * @return $this
     */
    public function setProductListMap(ProductListMapTransfer $productListMap = null)
    {
        $this->productListMap = $productListMap;
        $this->modifiedProperties[self::PRODUCT_LIST_MAP] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @return \Generated\Shared\Transfer\ProductListMapTransfer|null
     */
    public function getProductListMap()
    {
        return $this->productListMap;
    }

    /**
     * @module ProductListSearch
     *
     * @param \Generated\Shared\Transfer\ProductListMapTransfer $productListMap
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListMapOrFail(ProductListMapTransfer $productListMap)
    {
        return $this->setProductListMap($productListMap);
    }

    /**
     * @module ProductListSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListMapTransfer
     */
    public function getProductListMapOrFail()
    {
        if ($this->productListMap === null) {
            $this->throwNullValueException(static::PRODUCT_LIST_MAP);
        }

        return $this->productListMap;
    }

    /**
     * @module ProductListSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductListMap()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST_MAP);

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductReviewSearch
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
     * @module ProductPageSearch|ProductReviewSearch
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ProductPageSearch|ProductReviewSearch
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
     * @module ProductPageSearch|ProductReviewSearch
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
     * @module ProductPageSearch|ProductReviewSearch
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
     * @module ProductPageSearch
     *
     * @param int|null $idImageSet
     *
     * @return $this
     */
    public function setIdImageSet($idImageSet)
    {
        $this->idImageSet = $idImageSet;
        $this->modifiedProperties[self::ID_IMAGE_SET] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return int|null
     */
    public function getIdImageSet()
    {
        return $this->idImageSet;
    }

    /**
     * @module ProductPageSearch
     *
     * @param int|null $idImageSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdImageSetOrFail($idImageSet)
    {
        if ($idImageSet === null) {
            $this->throwNullValueException(static::ID_IMAGE_SET);
        }

        return $this->setIdImageSet($idImageSet);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdImageSetOrFail()
    {
        if ($this->idImageSet === null) {
            $this->throwNullValueException(static::ID_IMAGE_SET);
        }

        return $this->idImageSet;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdImageSet()
    {
        $this->assertPropertyIsSet(self::ID_IMAGE_SET);

        return $this;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @param string|null $abstractDescription
     *
     * @return $this
     */
    public function setAbstractDescription($abstractDescription)
    {
        $this->abstractDescription = $abstractDescription;
        $this->modifiedProperties[self::ABSTRACT_DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getAbstractDescription()
    {
        return $this->abstractDescription;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $abstractDescription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractDescriptionOrFail($abstractDescription)
    {
        if ($abstractDescription === null) {
            $this->throwNullValueException(static::ABSTRACT_DESCRIPTION);
        }

        return $this->setAbstractDescription($abstractDescription);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAbstractDescriptionOrFail()
    {
        if ($this->abstractDescription === null) {
            $this->throwNullValueException(static::ABSTRACT_DESCRIPTION);
        }

        return $this->abstractDescription;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractDescription()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_DESCRIPTION);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $concreteDescription
     *
     * @return $this
     */
    public function setConcreteDescription($concreteDescription)
    {
        $this->concreteDescription = $concreteDescription;
        $this->modifiedProperties[self::CONCRETE_DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getConcreteDescription()
    {
        return $this->concreteDescription;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $concreteDescription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConcreteDescriptionOrFail($concreteDescription)
    {
        if ($concreteDescription === null) {
            $this->throwNullValueException(static::CONCRETE_DESCRIPTION);
        }

        return $this->setConcreteDescription($concreteDescription);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConcreteDescriptionOrFail()
    {
        if ($this->concreteDescription === null) {
            $this->throwNullValueException(static::CONCRETE_DESCRIPTION);
        }

        return $this->concreteDescription;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteDescription()
    {
        $this->assertPropertyIsSet(self::CONCRETE_DESCRIPTION);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $concreteSkus
     *
     * @return $this
     */
    public function setConcreteSkus($concreteSkus)
    {
        $this->concreteSkus = $concreteSkus;
        $this->modifiedProperties[self::CONCRETE_SKUS] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getConcreteSkus()
    {
        return $this->concreteSkus;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $concreteSkus
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConcreteSkusOrFail($concreteSkus)
    {
        if ($concreteSkus === null) {
            $this->throwNullValueException(static::CONCRETE_SKUS);
        }

        return $this->setConcreteSkus($concreteSkus);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConcreteSkusOrFail()
    {
        if ($this->concreteSkus === null) {
            $this->throwNullValueException(static::CONCRETE_SKUS);
        }

        return $this->concreteSkus;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteSkus()
    {
        $this->assertPropertyIsSet(self::CONCRETE_SKUS);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $concreteNames
     *
     * @return $this
     */
    public function setConcreteNames($concreteNames)
    {
        $this->concreteNames = $concreteNames;
        $this->modifiedProperties[self::CONCRETE_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getConcreteNames()
    {
        return $this->concreteNames;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $concreteNames
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConcreteNamesOrFail($concreteNames)
    {
        if ($concreteNames === null) {
            $this->throwNullValueException(static::CONCRETE_NAMES);
        }

        return $this->setConcreteNames($concreteNames);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConcreteNamesOrFail()
    {
        if ($this->concreteNames === null) {
            $this->throwNullValueException(static::CONCRETE_NAMES);
        }

        return $this->concreteNames;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteNames()
    {
        $this->assertPropertyIsSet(self::CONCRETE_NAMES);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param bool|null $isFeatured
     *
     * @return $this
     */
    public function setIsFeatured($isFeatured)
    {
        $this->isFeatured = $isFeatured;
        $this->modifiedProperties[self::IS_FEATURED] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return bool|null
     */
    public function getIsFeatured()
    {
        return $this->isFeatured;
    }

    /**
     * @module ProductPageSearch
     *
     * @param bool|null $isFeatured
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsFeaturedOrFail($isFeatured)
    {
        if ($isFeatured === null) {
            $this->throwNullValueException(static::IS_FEATURED);
        }

        return $this->setIsFeatured($isFeatured);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsFeaturedOrFail()
    {
        if ($this->isFeatured === null) {
            $this->throwNullValueException(static::IS_FEATURED);
        }

        return $this->isFeatured;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsFeatured()
    {
        $this->assertPropertyIsSet(self::IS_FEATURED);

        return $this;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @param array|null $prices
     *
     * @return $this
     */
    public function setPrices(array $prices = null)
    {
        if ($prices === null) {
            $prices = [];
        }

        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ProductPageSearch
     *
     * @param mixed $prices
     *
     * @return $this
     */
    public function addPrices($prices)
    {
        $this->prices[] = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertPropertyIsSet(self::PRICES);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param int|null $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        $this->modifiedProperties[self::PRICE] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module ProductPageSearch
     *
     * @param int|null $price
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceOrFail($price)
    {
        if ($price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->setPrice($price);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriceOrFail()
    {
        if ($this->price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->price;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrice()
    {
        $this->assertPropertyIsSet(self::PRICE);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param array|null $productImages
     *
     * @return $this
     */
    public function setProductImages(array $productImages = null)
    {
        if ($productImages === null) {
            $productImages = [];
        }

        $this->productImages = $productImages;
        $this->modifiedProperties[self::PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return array
     */
    public function getProductImages()
    {
        return $this->productImages;
    }

    /**
     * @module ProductPageSearch
     *
     * @param mixed $productImages
     *
     * @return $this
     */
    public function addProductImages($productImages)
    {
        $this->productImages[] = $productImages;
        $this->modifiedProperties[self::PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImages()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IMAGES);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $addToCartSku
     *
     * @return $this
     */
    public function setAddToCartSku($addToCartSku)
    {
        $this->addToCartSku = $addToCartSku;
        $this->modifiedProperties[self::ADD_TO_CART_SKU] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getAddToCartSku()
    {
        return $this->addToCartSku;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $addToCartSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddToCartSkuOrFail($addToCartSku)
    {
        if ($addToCartSku === null) {
            $this->throwNullValueException(static::ADD_TO_CART_SKU);
        }

        return $this->setAddToCartSku($addToCartSku);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAddToCartSkuOrFail()
    {
        if ($this->addToCartSku === null) {
            $this->throwNullValueException(static::ADD_TO_CART_SKU);
        }

        return $this->addToCartSku;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddToCartSku()
    {
        $this->assertPropertyIsSet(self::ADD_TO_CART_SKU);

        return $this;
    }

    /**
     * @module ProductReviewSearch
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
     * @module ProductReviewSearch
     *
     * @return float|null
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @module ProductReviewSearch
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
     * @module ProductReviewSearch
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
     * @module ProductReviewSearch
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
     * @module ProductReviewSearch
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
     * @module ProductReviewSearch
     *
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @module ProductReviewSearch
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
     * @module ProductReviewSearch
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
     * @module ProductReviewSearch
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
     * @module SalesProductConnector
     *
     * @param int|null $popularity
     *
     * @return $this
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;
        $this->modifiedProperties[self::POPULARITY] = true;

        return $this;
    }

    /**
     * @module SalesProductConnector
     *
     * @return int|null
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * @module SalesProductConnector
     *
     * @param int|null $popularity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPopularityOrFail($popularity)
    {
        if ($popularity === null) {
            $this->throwNullValueException(static::POPULARITY);
        }

        return $this->setPopularity($popularity);
    }

    /**
     * @module SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPopularityOrFail()
    {
        if ($this->popularity === null) {
            $this->throwNullValueException(static::POPULARITY);
        }

        return $this->popularity;
    }

    /**
     * @module SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePopularity()
    {
        $this->assertPropertyIsSet(self::POPULARITY);

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
                case 'store':
                case 'categoryNodeIds':
                case 'allParentCategoryIds':
                case 'boostedCategoryNames':
                case 'categoryNames':
                case 'sortedCategories':
                case 'labelIds':
                case 'idProductAbstract':
                case 'idImageSet':
                case 'attributes':
                case 'name':
                case 'sku':
                case 'url':
                case 'locale':
                case 'abstractDescription':
                case 'concreteDescription':
                case 'concreteSkus':
                case 'concreteNames':
                case 'type':
                case 'isFeatured':
                case 'isActive':
                case 'prices':
                case 'price':
                case 'productImages':
                case 'addToCartSku':
                case 'averageRating':
                case 'reviewCount':
                case 'popularity':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productListMap':
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
                case 'store':
                case 'categoryNodeIds':
                case 'allParentCategoryIds':
                case 'boostedCategoryNames':
                case 'categoryNames':
                case 'sortedCategories':
                case 'labelIds':
                case 'idProductAbstract':
                case 'idImageSet':
                case 'attributes':
                case 'name':
                case 'sku':
                case 'url':
                case 'locale':
                case 'abstractDescription':
                case 'concreteDescription':
                case 'concreteSkus':
                case 'concreteNames':
                case 'type':
                case 'isFeatured':
                case 'isActive':
                case 'prices':
                case 'price':
                case 'productImages':
                case 'addToCartSku':
                case 'averageRating':
                case 'reviewCount':
                case 'popularity':
                    $values[$arrayKey] = $value;

                    break;
                case 'productListMap':
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
                case 'store':
                case 'categoryNodeIds':
                case 'allParentCategoryIds':
                case 'boostedCategoryNames':
                case 'categoryNames':
                case 'sortedCategories':
                case 'labelIds':
                case 'idProductAbstract':
                case 'idImageSet':
                case 'attributes':
                case 'name':
                case 'sku':
                case 'url':
                case 'locale':
                case 'abstractDescription':
                case 'concreteDescription':
                case 'concreteSkus':
                case 'concreteNames':
                case 'type':
                case 'isFeatured':
                case 'isActive':
                case 'prices':
                case 'price':
                case 'productImages':
                case 'addToCartSku':
                case 'averageRating':
                case 'reviewCount':
                case 'popularity':
                    $values[$arrayKey] = $value;

                    break;
                case 'productListMap':
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
            'store' => $this->store,
            'categoryNodeIds' => $this->categoryNodeIds,
            'allParentCategoryIds' => $this->allParentCategoryIds,
            'boostedCategoryNames' => $this->boostedCategoryNames,
            'categoryNames' => $this->categoryNames,
            'sortedCategories' => $this->sortedCategories,
            'labelIds' => $this->labelIds,
            'idProductAbstract' => $this->idProductAbstract,
            'idImageSet' => $this->idImageSet,
            'attributes' => $this->attributes,
            'name' => $this->name,
            'sku' => $this->sku,
            'url' => $this->url,
            'locale' => $this->locale,
            'abstractDescription' => $this->abstractDescription,
            'concreteDescription' => $this->concreteDescription,
            'concreteSkus' => $this->concreteSkus,
            'concreteNames' => $this->concreteNames,
            'type' => $this->type,
            'isFeatured' => $this->isFeatured,
            'isActive' => $this->isActive,
            'prices' => $this->prices,
            'price' => $this->price,
            'productImages' => $this->productImages,
            'addToCartSku' => $this->addToCartSku,
            'averageRating' => $this->averageRating,
            'reviewCount' => $this->reviewCount,
            'popularity' => $this->popularity,
            'productListMap' => $this->productListMap,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'store' => $this->store,
            'category_node_ids' => $this->categoryNodeIds,
            'all_parent_category_ids' => $this->allParentCategoryIds,
            'boosted_category_names' => $this->boostedCategoryNames,
            'category_names' => $this->categoryNames,
            'sorted_categories' => $this->sortedCategories,
            'label_ids' => $this->labelIds,
            'id_product_abstract' => $this->idProductAbstract,
            'id_image_set' => $this->idImageSet,
            'attributes' => $this->attributes,
            'name' => $this->name,
            'sku' => $this->sku,
            'url' => $this->url,
            'locale' => $this->locale,
            'abstract_description' => $this->abstractDescription,
            'concrete_description' => $this->concreteDescription,
            'concrete_skus' => $this->concreteSkus,
            'concrete_names' => $this->concreteNames,
            'type' => $this->type,
            'is_featured' => $this->isFeatured,
            'is_active' => $this->isActive,
            'prices' => $this->prices,
            'price' => $this->price,
            'product_images' => $this->productImages,
            'add_to_cart_sku' => $this->addToCartSku,
            'average_rating' => $this->averageRating,
            'review_count' => $this->reviewCount,
            'popularity' => $this->popularity,
            'product_list_map' => $this->productListMap,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'category_node_ids' => $this->categoryNodeIds instanceof AbstractTransfer ? $this->categoryNodeIds->toArray(true, false) : $this->categoryNodeIds,
            'all_parent_category_ids' => $this->allParentCategoryIds instanceof AbstractTransfer ? $this->allParentCategoryIds->toArray(true, false) : $this->allParentCategoryIds,
            'boosted_category_names' => $this->boostedCategoryNames instanceof AbstractTransfer ? $this->boostedCategoryNames->toArray(true, false) : $this->boostedCategoryNames,
            'category_names' => $this->categoryNames instanceof AbstractTransfer ? $this->categoryNames->toArray(true, false) : $this->categoryNames,
            'sorted_categories' => $this->sortedCategories instanceof AbstractTransfer ? $this->sortedCategories->toArray(true, false) : $this->sortedCategories,
            'label_ids' => $this->labelIds instanceof AbstractTransfer ? $this->labelIds->toArray(true, false) : $this->labelIds,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'id_image_set' => $this->idImageSet instanceof AbstractTransfer ? $this->idImageSet->toArray(true, false) : $this->idImageSet,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'abstract_description' => $this->abstractDescription instanceof AbstractTransfer ? $this->abstractDescription->toArray(true, false) : $this->abstractDescription,
            'concrete_description' => $this->concreteDescription instanceof AbstractTransfer ? $this->concreteDescription->toArray(true, false) : $this->concreteDescription,
            'concrete_skus' => $this->concreteSkus instanceof AbstractTransfer ? $this->concreteSkus->toArray(true, false) : $this->concreteSkus,
            'concrete_names' => $this->concreteNames instanceof AbstractTransfer ? $this->concreteNames->toArray(true, false) : $this->concreteNames,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'is_featured' => $this->isFeatured instanceof AbstractTransfer ? $this->isFeatured->toArray(true, false) : $this->isFeatured,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->prices,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'product_images' => $this->productImages instanceof AbstractTransfer ? $this->productImages->toArray(true, false) : $this->productImages,
            'add_to_cart_sku' => $this->addToCartSku instanceof AbstractTransfer ? $this->addToCartSku->toArray(true, false) : $this->addToCartSku,
            'average_rating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, false) : $this->averageRating,
            'review_count' => $this->reviewCount instanceof AbstractTransfer ? $this->reviewCount->toArray(true, false) : $this->reviewCount,
            'popularity' => $this->popularity instanceof AbstractTransfer ? $this->popularity->toArray(true, false) : $this->popularity,
            'product_list_map' => $this->productListMap instanceof AbstractTransfer ? $this->productListMap->toArray(true, false) : $this->productListMap,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'categoryNodeIds' => $this->categoryNodeIds instanceof AbstractTransfer ? $this->categoryNodeIds->toArray(true, true) : $this->categoryNodeIds,
            'allParentCategoryIds' => $this->allParentCategoryIds instanceof AbstractTransfer ? $this->allParentCategoryIds->toArray(true, true) : $this->allParentCategoryIds,
            'boostedCategoryNames' => $this->boostedCategoryNames instanceof AbstractTransfer ? $this->boostedCategoryNames->toArray(true, true) : $this->boostedCategoryNames,
            'categoryNames' => $this->categoryNames instanceof AbstractTransfer ? $this->categoryNames->toArray(true, true) : $this->categoryNames,
            'sortedCategories' => $this->sortedCategories instanceof AbstractTransfer ? $this->sortedCategories->toArray(true, true) : $this->sortedCategories,
            'labelIds' => $this->labelIds instanceof AbstractTransfer ? $this->labelIds->toArray(true, true) : $this->labelIds,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'idImageSet' => $this->idImageSet instanceof AbstractTransfer ? $this->idImageSet->toArray(true, true) : $this->idImageSet,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'abstractDescription' => $this->abstractDescription instanceof AbstractTransfer ? $this->abstractDescription->toArray(true, true) : $this->abstractDescription,
            'concreteDescription' => $this->concreteDescription instanceof AbstractTransfer ? $this->concreteDescription->toArray(true, true) : $this->concreteDescription,
            'concreteSkus' => $this->concreteSkus instanceof AbstractTransfer ? $this->concreteSkus->toArray(true, true) : $this->concreteSkus,
            'concreteNames' => $this->concreteNames instanceof AbstractTransfer ? $this->concreteNames->toArray(true, true) : $this->concreteNames,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'isFeatured' => $this->isFeatured instanceof AbstractTransfer ? $this->isFeatured->toArray(true, true) : $this->isFeatured,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->prices,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'productImages' => $this->productImages instanceof AbstractTransfer ? $this->productImages->toArray(true, true) : $this->productImages,
            'addToCartSku' => $this->addToCartSku instanceof AbstractTransfer ? $this->addToCartSku->toArray(true, true) : $this->addToCartSku,
            'averageRating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, true) : $this->averageRating,
            'reviewCount' => $this->reviewCount instanceof AbstractTransfer ? $this->reviewCount->toArray(true, true) : $this->reviewCount,
            'popularity' => $this->popularity instanceof AbstractTransfer ? $this->popularity->toArray(true, true) : $this->popularity,
            'productListMap' => $this->productListMap instanceof AbstractTransfer ? $this->productListMap->toArray(true, true) : $this->productListMap,
        ];
    }
}
