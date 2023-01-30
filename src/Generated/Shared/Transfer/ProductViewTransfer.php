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
class ProductViewTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE = 'idProductConcrete';

    /**
     * @var string
     */
    public const AVAILABLE_ATTRIBUTES = 'availableAttributes';

    /**
     * @var string
     */
    public const SELECTED_ATTRIBUTES = 'selectedAttributes';

    /**
     * @var string
     */
    public const ADD_TO_CART_URL = 'addToCartUrl';

    /**
     * @var string
     */
    public const PROMOTION_ITEM = 'promotionItem';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IMAGES = 'images';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const ATTRIBUTE_MAP = 'attributeMap';

    /**
     * @var string
     */
    public const AVAILABLE = 'available';

    /**
     * @var string
     */
    public const CURRENT_PRODUCT_PRICE = 'currentProductPrice';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const RATING = 'rating';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_ITEM = 'idShoppingListItem';

    /**
     * @var string
     */
    public const SHOPPING_LIST_ITEM = 'shoppingListItem';

    /**
     * @var string
     */
    public const SUPER_ATTRIBUTES_DEFINITION = 'superAttributesDefinition';

    /**
     * @var string
     */
    public const LABELS = 'labels';

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
    public const PYZ_COLOR_CODE = 'pyzColorCode';

    /**
     * @var string
     */
    public const PYZ_PRODUCT_SET_IDS = 'pyzProductSetIds';

    /**
     * @var string
     */
    public const PYZ_BUNDLED_PRODUCT_IDS = 'pyzBundledProductIds';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $idProductConcrete;

    /**
     * @var array
     */
    protected $availableAttributes = [];

    /**
     * @var array
     */
    protected $selectedAttributes = [];

    /**
     * @var string|null
     */
    protected $addToCartUrl;

    /**
     * @var \Generated\Shared\Transfer\PromotionItemTransfer|null
     */
    protected $promotionItem;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageStorageTransfer[]
     */
    protected $images;

    /**
     * @var int|null
     */
    protected $price;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var array
     */
    protected $prices = [];

    /**
     * @var \Generated\Shared\Transfer\AttributeMapStorageTransfer|null
     */
    protected $attributeMap;

    /**
     * @var bool|null
     */
    protected $available;

    /**
     * @var \Generated\Shared\Transfer\CurrentProductPriceTransfer|null
     */
    protected $currentProductPrice;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var \Generated\Shared\Transfer\ProductReviewSummaryTransfer|null
     */
    protected $rating;

    /**
     * @var int|null
     */
    protected $idShoppingListItem;

    /**
     * @var \Generated\Shared\Transfer\ShoppingListItemTransfer|null
     */
    protected $shoppingListItem;

    /**
     * @var array
     */
    protected $superAttributesDefinition = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductLabelDictionaryItemTransfer[]
     */
    protected $labels;

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
    protected $pyzColorCode;

    /**
     * @var array
     */
    protected $pyzProductSetIds = [];

    /**
     * @var array
     */
    protected $pyzBundledProductIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'id_product_concrete' => 'idProductConcrete',
        'idProductConcrete' => 'idProductConcrete',
        'IdProductConcrete' => 'idProductConcrete',
        'available_attributes' => 'availableAttributes',
        'availableAttributes' => 'availableAttributes',
        'AvailableAttributes' => 'availableAttributes',
        'selected_attributes' => 'selectedAttributes',
        'selectedAttributes' => 'selectedAttributes',
        'SelectedAttributes' => 'selectedAttributes',
        'add_to_cart_url' => 'addToCartUrl',
        'addToCartUrl' => 'addToCartUrl',
        'AddToCartUrl' => 'addToCartUrl',
        'promotion_item' => 'promotionItem',
        'promotionItem' => 'promotionItem',
        'PromotionItem' => 'promotionItem',
        'name' => 'name',
        'Name' => 'name',
        'images' => 'images',
        'Images' => 'images',
        'price' => 'price',
        'Price' => 'price',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'url' => 'url',
        'Url' => 'url',
        'prices' => 'prices',
        'Prices' => 'prices',
        'attribute_map' => 'attributeMap',
        'attributeMap' => 'attributeMap',
        'AttributeMap' => 'attributeMap',
        'available' => 'available',
        'Available' => 'available',
        'current_product_price' => 'currentProductPrice',
        'currentProductPrice' => 'currentProductPrice',
        'CurrentProductPrice' => 'currentProductPrice',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'rating' => 'rating',
        'Rating' => 'rating',
        'id_shopping_list_item' => 'idShoppingListItem',
        'idShoppingListItem' => 'idShoppingListItem',
        'IdShoppingListItem' => 'idShoppingListItem',
        'shopping_list_item' => 'shoppingListItem',
        'shoppingListItem' => 'shoppingListItem',
        'ShoppingListItem' => 'shoppingListItem',
        'super_attributes_definition' => 'superAttributesDefinition',
        'superAttributesDefinition' => 'superAttributesDefinition',
        'SuperAttributesDefinition' => 'superAttributesDefinition',
        'labels' => 'labels',
        'Labels' => 'labels',
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
        'pyz_color_code' => 'pyzColorCode',
        'pyzColorCode' => 'pyzColorCode',
        'PyzColorCode' => 'pyzColorCode',
        'pyz_product_set_ids' => 'pyzProductSetIds',
        'pyzProductSetIds' => 'pyzProductSetIds',
        'PyzProductSetIds' => 'pyzProductSetIds',
        'pyz_bundled_product_ids' => 'pyzBundledProductIds',
        'pyzBundledProductIds' => 'pyzBundledProductIds',
        'PyzBundledProductIds' => 'pyzBundledProductIds',
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
        self::ID_PRODUCT_CONCRETE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_concrete',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'available_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELECTED_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'selected_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADD_TO_CART_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'add_to_cart_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROMOTION_ITEM => [
            'type' => 'Generated\Shared\Transfer\PromotionItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'promotion_item',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::IMAGES => [
            'type' => 'Generated\Shared\Transfer\ProductImageStorageTransfer',
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
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
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
        self::ATTRIBUTE_MAP => [
            'type' => 'Generated\Shared\Transfer\AttributeMapStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'attribute_map',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'available',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENT_PRODUCT_PRICE => [
            'type' => 'Generated\Shared\Transfer\CurrentProductPriceTransfer',
            'type_shim' => null,
            'name_underscore' => 'current_product_price',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::RATING => [
            'type' => 'Generated\Shared\Transfer\ProductReviewSummaryTransfer',
            'type_shim' => null,
            'name_underscore' => 'rating',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHOPPING_LIST_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHOPPING_LIST_ITEM => [
            'type' => 'Generated\Shared\Transfer\ShoppingListItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'shopping_list_item',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::LABELS => [
            'type' => 'Generated\Shared\Transfer\ProductLabelDictionaryItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'labels',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::PYZ_COLOR_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'pyz_color_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PYZ_PRODUCT_SET_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'pyz_product_set_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PYZ_BUNDLED_PRODUCT_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'pyz_bundled_product_ids',
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
     * @module AvailabilityNotificationWidget|CartPage|ConfigurableBundlePage|ContentProductWidget|ProductBarcodeWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductStorage
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
     * @module AvailabilityNotificationWidget|CartPage|ConfigurableBundlePage|ContentProductWidget|ProductBarcodeWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductStorage
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module AvailabilityNotificationWidget|CartPage|ConfigurableBundlePage|ContentProductWidget|ProductBarcodeWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductStorage
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
     * @module AvailabilityNotificationWidget|CartPage|ConfigurableBundlePage|ContentProductWidget|ProductBarcodeWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductStorage
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
     * @module AvailabilityNotificationWidget|CartPage|ConfigurableBundlePage|ContentProductWidget|ProductBarcodeWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductStorage
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
     * @module CartPage|ConfigurableBundlePage|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductDetailPage|ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductSearchWidget|AvailabilityStorage|PriceProductStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductImageStorage|ProductStorage
     *
     * @param int|null $idProductConcrete
     *
     * @return $this
     */
    public function setIdProductConcrete($idProductConcrete)
    {
        $this->idProductConcrete = $idProductConcrete;
        $this->modifiedProperties[self::ID_PRODUCT_CONCRETE] = true;

        return $this;
    }

    /**
     * @module CartPage|ConfigurableBundlePage|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductDetailPage|ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductSearchWidget|AvailabilityStorage|PriceProductStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductImageStorage|ProductStorage
     *
     * @return int|null
     */
    public function getIdProductConcrete()
    {
        return $this->idProductConcrete;
    }

    /**
     * @module CartPage|ConfigurableBundlePage|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductDetailPage|ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductSearchWidget|AvailabilityStorage|PriceProductStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductImageStorage|ProductStorage
     *
     * @param int|null $idProductConcrete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConcreteOrFail($idProductConcrete)
    {
        if ($idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->setIdProductConcrete($idProductConcrete);
    }

    /**
     * @module CartPage|ConfigurableBundlePage|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductDetailPage|ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductSearchWidget|AvailabilityStorage|PriceProductStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductImageStorage|ProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConcreteOrFail()
    {
        if ($this->idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->idProductConcrete;
    }

    /**
     * @module CartPage|ConfigurableBundlePage|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductDetailPage|ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductSearchWidget|AvailabilityStorage|PriceProductStorage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductImageStorage|ProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConcrete()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONCRETE);

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductListStorage|ProductStorage
     *
     * @param array|null $availableAttributes
     *
     * @return $this
     */
    public function setAvailableAttributes(array $availableAttributes = null)
    {
        if ($availableAttributes === null) {
            $availableAttributes = [];
        }

        $this->availableAttributes = $availableAttributes;
        $this->modifiedProperties[self::AVAILABLE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductListStorage|ProductStorage
     *
     * @return array
     */
    public function getAvailableAttributes()
    {
        return $this->availableAttributes;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductListStorage|ProductStorage
     *
     * @param mixed $availableAttribute
     *
     * @return $this
     */
    public function addAvailableAttribute($availableAttribute)
    {
        $this->availableAttributes[] = $availableAttribute;
        $this->modifiedProperties[self::AVAILABLE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductListStorage|ProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableAttributes()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_ATTRIBUTES);

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @param array|null $selectedAttributes
     *
     * @return $this
     */
    public function setSelectedAttributes(array $selectedAttributes = null)
    {
        if ($selectedAttributes === null) {
            $selectedAttributes = [];
        }

        $this->selectedAttributes = $selectedAttributes;
        $this->modifiedProperties[self::SELECTED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @return array
     */
    public function getSelectedAttributes()
    {
        return $this->selectedAttributes;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @param mixed $selectedAttribute
     *
     * @return $this
     */
    public function addSelectedAttribute($selectedAttribute)
    {
        $this->selectedAttributes[] = $selectedAttribute;
        $this->modifiedProperties[self::SELECTED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|ProductDetailPage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelectedAttributes()
    {
        $this->assertPropertyIsSet(self::SELECTED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module CartPage|ProductGroupWidget
     *
     * @param string|null $addToCartUrl
     *
     * @return $this
     */
    public function setAddToCartUrl($addToCartUrl)
    {
        $this->addToCartUrl = $addToCartUrl;
        $this->modifiedProperties[self::ADD_TO_CART_URL] = true;

        return $this;
    }

    /**
     * @module CartPage|ProductGroupWidget
     *
     * @return string|null
     */
    public function getAddToCartUrl()
    {
        return $this->addToCartUrl;
    }

    /**
     * @module CartPage|ProductGroupWidget
     *
     * @param string|null $addToCartUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddToCartUrlOrFail($addToCartUrl)
    {
        if ($addToCartUrl === null) {
            $this->throwNullValueException(static::ADD_TO_CART_URL);
        }

        return $this->setAddToCartUrl($addToCartUrl);
    }

    /**
     * @module CartPage|ProductGroupWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAddToCartUrlOrFail()
    {
        if ($this->addToCartUrl === null) {
            $this->throwNullValueException(static::ADD_TO_CART_URL);
        }

        return $this->addToCartUrl;
    }

    /**
     * @module CartPage|ProductGroupWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddToCartUrl()
    {
        $this->assertPropertyIsSet(self::ADD_TO_CART_URL);

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget
     *
     * @param \Generated\Shared\Transfer\PromotionItemTransfer|null $promotionItem
     *
     * @return $this
     */
    public function setPromotionItem(PromotionItemTransfer $promotionItem = null)
    {
        $this->promotionItem = $promotionItem;
        $this->modifiedProperties[self::PROMOTION_ITEM] = true;

        return $this;
    }

    /**
     * @module CartPage|DiscountPromotionWidget
     *
     * @return \Generated\Shared\Transfer\PromotionItemTransfer|null
     */
    public function getPromotionItem()
    {
        return $this->promotionItem;
    }

    /**
     * @module CartPage|DiscountPromotionWidget
     *
     * @param \Generated\Shared\Transfer\PromotionItemTransfer $promotionItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPromotionItemOrFail(PromotionItemTransfer $promotionItem)
    {
        return $this->setPromotionItem($promotionItem);
    }

    /**
     * @module CartPage|DiscountPromotionWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PromotionItemTransfer
     */
    public function getPromotionItemOrFail()
    {
        if ($this->promotionItem === null) {
            $this->throwNullValueException(static::PROMOTION_ITEM);
        }

        return $this->promotionItem;
    }

    /**
     * @module CartPage|DiscountPromotionWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePromotionItem()
    {
        $this->assertPropertyIsSet(self::PROMOTION_ITEM);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductStorage
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
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductStorage
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
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductStorage
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
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductStorage
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
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductImageStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageStorageTransfer[] $images
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
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductImageStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageStorageTransfer[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductImageStorage
     *
     * @param \Generated\Shared\Transfer\ProductImageStorageTransfer $image
     *
     * @return $this
     */
    public function addImage(ProductImageStorageTransfer $image)
    {
        $this->images[] = $image;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ContentProductWidget|ShoppingListPage|ProductImageStorage
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
     * @module ConfigurableBundlePage|ProductDetailPage|ShoppingListPage|PriceProductStorage
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
     * @module ConfigurableBundlePage|ProductDetailPage|ShoppingListPage|PriceProductStorage
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module ConfigurableBundlePage|ProductDetailPage|ShoppingListPage|PriceProductStorage
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
     * @module ConfigurableBundlePage|ProductDetailPage|ShoppingListPage|PriceProductStorage
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
     * @module ConfigurableBundlePage|ProductDetailPage|ShoppingListPage|PriceProductStorage
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
     * @module ConfigurableBundlePage|PriceProductWidget|ShoppingListPage|PriceProductStorage
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|PriceProductWidget|ShoppingListPage|PriceProductStorage
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ConfigurableBundlePage|PriceProductWidget|ShoppingListPage|PriceProductStorage
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module ConfigurableBundlePage|PriceProductWidget|ShoppingListPage|PriceProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module ConfigurableBundlePage|PriceProductWidget|ShoppingListPage|PriceProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ContentProductWidget|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductCategoryWidget|ProductDetailPage|ProductLabelWidget|ProductOptionWidget|ProductPackagingUnitWidget|ProductRelationWidget|ProductReviewWidget|ProductSearchWidget|ProductSetDetailPage|AvailabilityStorage|PriceProductStorage|ProductImageStorage|ProductLabelStorage|ProductStorage
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
     * @module ConfigurableBundlePage|ContentProductWidget|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductCategoryWidget|ProductDetailPage|ProductLabelWidget|ProductOptionWidget|ProductPackagingUnitWidget|ProductRelationWidget|ProductReviewWidget|ProductSearchWidget|ProductSetDetailPage|AvailabilityStorage|PriceProductStorage|ProductImageStorage|ProductLabelStorage|ProductStorage
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ConfigurableBundlePage|ContentProductWidget|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductCategoryWidget|ProductDetailPage|ProductLabelWidget|ProductOptionWidget|ProductPackagingUnitWidget|ProductRelationWidget|ProductReviewWidget|ProductSearchWidget|ProductSetDetailPage|AvailabilityStorage|PriceProductStorage|ProductImageStorage|ProductLabelStorage|ProductStorage
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
     * @module ConfigurableBundlePage|ContentProductWidget|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductCategoryWidget|ProductDetailPage|ProductLabelWidget|ProductOptionWidget|ProductPackagingUnitWidget|ProductRelationWidget|ProductReviewWidget|ProductSearchWidget|ProductSetDetailPage|AvailabilityStorage|PriceProductStorage|ProductImageStorage|ProductLabelStorage|ProductStorage
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
     * @module ConfigurableBundlePage|ContentProductWidget|DiscountPromotionWidget|PriceProductVolumeWidget|PriceProductWidget|ProductCategoryWidget|ProductDetailPage|ProductLabelWidget|ProductOptionWidget|ProductPackagingUnitWidget|ProductRelationWidget|ProductReviewWidget|ProductSearchWidget|ProductSetDetailPage|AvailabilityStorage|PriceProductStorage|ProductImageStorage|ProductLabelStorage|ProductStorage
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
     * @module ContentProductWidget|ProductDetailPage|ShoppingListPage|ProductStorage
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
     * @module ContentProductWidget|ProductDetailPage|ShoppingListPage|ProductStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ContentProductWidget|ProductDetailPage|ShoppingListPage|ProductStorage
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
     * @module ContentProductWidget|ProductDetailPage|ShoppingListPage|ProductStorage
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
     * @module ContentProductWidget|ProductDetailPage|ShoppingListPage|ProductStorage
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
     * @module ContentProductWidget|DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|PriceProductStorage
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
     * @module ContentProductWidget|DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|PriceProductStorage
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ContentProductWidget|DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|PriceProductStorage
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
     * @module ContentProductWidget|DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|PriceProductStorage
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
     * @module DiscountPromotionWidget|ProductDetailPage|ProductSetDetailPage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @param \Generated\Shared\Transfer\AttributeMapStorageTransfer|null $attributeMap
     *
     * @return $this
     */
    public function setAttributeMap(AttributeMapStorageTransfer $attributeMap = null)
    {
        $this->attributeMap = $attributeMap;
        $this->modifiedProperties[self::ATTRIBUTE_MAP] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ProductSetDetailPage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @return \Generated\Shared\Transfer\AttributeMapStorageTransfer|null
     */
    public function getAttributeMap()
    {
        return $this->attributeMap;
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ProductSetDetailPage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @param \Generated\Shared\Transfer\AttributeMapStorageTransfer $attributeMap
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAttributeMapOrFail(AttributeMapStorageTransfer $attributeMap)
    {
        return $this->setAttributeMap($attributeMap);
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ProductSetDetailPage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AttributeMapStorageTransfer
     */
    public function getAttributeMapOrFail()
    {
        if ($this->attributeMap === null) {
            $this->throwNullValueException(static::ATTRIBUTE_MAP);
        }

        return $this->attributeMap;
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ProductSetDetailPage|ProductAlternativeStorage|ProductDiscontinuedStorage|ProductListStorage|ProductStorage
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
     * @module DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage
     *
     * @param bool|null $available
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        $this->modifiedProperties[self::AVAILABLE] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage
     *
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage
     *
     * @param bool|null $available
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailableOrFail($available)
    {
        if ($available === null) {
            $this->throwNullValueException(static::AVAILABLE);
        }

        return $this->setAvailable($available);
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAvailableOrFail()
    {
        if ($this->available === null) {
            $this->throwNullValueException(static::AVAILABLE);
        }

        return $this->available;
    }

    /**
     * @module DiscountPromotionWidget|ProductDetailPage|ShoppingListPage|AvailabilityStorage|ProductAlternativeStorage|ProductDiscontinuedStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailable()
    {
        $this->assertPropertyIsSet(self::AVAILABLE);

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|ProductDetailPage|PriceProductStorage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\CurrentProductPriceTransfer|null $currentProductPrice
     *
     * @return $this
     */
    public function setCurrentProductPrice(CurrentProductPriceTransfer $currentProductPrice = null)
    {
        $this->currentProductPrice = $currentProductPrice;
        $this->modifiedProperties[self::CURRENT_PRODUCT_PRICE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|ProductDetailPage|PriceProductStorage|ShoppingList
     *
     * @return \Generated\Shared\Transfer\CurrentProductPriceTransfer|null
     */
    public function getCurrentProductPrice()
    {
        return $this->currentProductPrice;
    }

    /**
     * @module PriceProductVolumeWidget|ProductDetailPage|PriceProductStorage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\CurrentProductPriceTransfer $currentProductPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrentProductPriceOrFail(CurrentProductPriceTransfer $currentProductPrice)
    {
        return $this->setCurrentProductPrice($currentProductPrice);
    }

    /**
     * @module PriceProductVolumeWidget|ProductDetailPage|PriceProductStorage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CurrentProductPriceTransfer
     */
    public function getCurrentProductPriceOrFail()
    {
        if ($this->currentProductPrice === null) {
            $this->throwNullValueException(static::CURRENT_PRODUCT_PRICE);
        }

        return $this->currentProductPrice;
    }

    /**
     * @module PriceProductVolumeWidget|ProductDetailPage|PriceProductStorage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrentProductPrice()
    {
        $this->assertPropertyIsSet(self::CURRENT_PRODUCT_PRICE);

        return $this;
    }

    /**
     * @module ProductDetailPage|ShoppingListPage|ProductStorage
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
     * @module ProductDetailPage|ShoppingListPage|ProductStorage
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module ProductDetailPage|ShoppingListPage|ProductStorage
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
     * @module ProductDetailPage|ShoppingListPage|ProductStorage
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
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @param \Generated\Shared\Transfer\ProductReviewSummaryTransfer|null $rating
     *
     * @return $this
     */
    public function setRating(ProductReviewSummaryTransfer $rating = null)
    {
        $this->rating = $rating;
        $this->modifiedProperties[self::RATING] = true;

        return $this;
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @return \Generated\Shared\Transfer\ProductReviewSummaryTransfer|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @param \Generated\Shared\Transfer\ProductReviewSummaryTransfer $rating
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRatingOrFail(ProductReviewSummaryTransfer $rating)
    {
        return $this->setRating($rating);
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductReviewSummaryTransfer
     */
    public function getRatingOrFail()
    {
        if ($this->rating === null) {
            $this->throwNullValueException(static::RATING);
        }

        return $this->rating;
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRating()
    {
        $this->assertPropertyIsSet(self::RATING);

        return $this;
    }

    /**
     * @module ShoppingListPage
     *
     * @param int|null $idShoppingListItem
     *
     * @return $this
     */
    public function setIdShoppingListItem($idShoppingListItem)
    {
        $this->idShoppingListItem = $idShoppingListItem;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage
     *
     * @return int|null
     */
    public function getIdShoppingListItem()
    {
        return $this->idShoppingListItem;
    }

    /**
     * @module ShoppingListPage
     *
     * @param int|null $idShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListItemOrFail($idShoppingListItem)
    {
        if ($idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->setIdShoppingListItem($idShoppingListItem);
    }

    /**
     * @module ShoppingListPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListItemOrFail()
    {
        if ($this->idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->idShoppingListItem;
    }

    /**
     * @module ShoppingListPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListItem()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module ShoppingListPage
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemTransfer|null $shoppingListItem
     *
     * @return $this
     */
    public function setShoppingListItem(ShoppingListItemTransfer $shoppingListItem = null)
    {
        $this->shoppingListItem = $shoppingListItem;
        $this->modifiedProperties[self::SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemTransfer|null
     */
    public function getShoppingListItem()
    {
        return $this->shoppingListItem;
    }

    /**
     * @module ShoppingListPage
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemTransfer $shoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListItemOrFail(ShoppingListItemTransfer $shoppingListItem)
    {
        return $this->setShoppingListItem($shoppingListItem);
    }

    /**
     * @module ShoppingListPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemTransfer
     */
    public function getShoppingListItemOrFail()
    {
        if ($this->shoppingListItem === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_ITEM);
        }

        return $this->shoppingListItem;
    }

    /**
     * @module ShoppingListPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingListItem()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module ShoppingListPage|ProductStorage
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
     * @module ShoppingListPage|ProductStorage
     *
     * @return array
     */
    public function getSuperAttributesDefinition()
    {
        return $this->superAttributesDefinition;
    }

    /**
     * @module ShoppingListPage|ProductStorage
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
     * @module ShoppingListPage|ProductStorage
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
     * @module ProductLabelStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductLabelDictionaryItemTransfer[] $labels
     *
     * @return $this
     */
    public function setLabels(ArrayObject $labels)
    {
        $this->labels = $labels;
        $this->modifiedProperties[self::LABELS] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductLabelDictionaryItemTransfer[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @module ProductLabelStorage
     *
     * @param \Generated\Shared\Transfer\ProductLabelDictionaryItemTransfer $label
     *
     * @return $this
     */
    public function addLabel(ProductLabelDictionaryItemTransfer $label)
    {
        $this->labels[] = $label;
        $this->modifiedProperties[self::LABELS] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLabels()
    {
        $this->assertCollectionPropertyIsSet(self::LABELS);

        return $this;
    }

    /**
     * @module ProductStorage
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
     * @module ProductStorage
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module ProductStorage
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
     * @module Product
     *
     * @param string|null $pyzColorCode
     *
     * @return $this
     */
    public function setPyzColorCode($pyzColorCode)
    {
        $this->pyzColorCode = $pyzColorCode;
        $this->modifiedProperties[self::PYZ_COLOR_CODE] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return string|null
     */
    public function getPyzColorCode()
    {
        return $this->pyzColorCode;
    }

    /**
     * @module Product
     *
     * @param string|null $pyzColorCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPyzColorCodeOrFail($pyzColorCode)
    {
        if ($pyzColorCode === null) {
            $this->throwNullValueException(static::PYZ_COLOR_CODE);
        }

        return $this->setPyzColorCode($pyzColorCode);
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPyzColorCodeOrFail()
    {
        if ($this->pyzColorCode === null) {
            $this->throwNullValueException(static::PYZ_COLOR_CODE);
        }

        return $this->pyzColorCode;
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePyzColorCode()
    {
        $this->assertPropertyIsSet(self::PYZ_COLOR_CODE);

        return $this;
    }

    /**
     * @module ProductStorage
     *
     * @param array|null $pyzProductSetIds
     *
     * @return $this
     */
    public function setPyzProductSetIds(array $pyzProductSetIds = null)
    {
        if ($pyzProductSetIds === null) {
            $pyzProductSetIds = [];
        }

        $this->pyzProductSetIds = $pyzProductSetIds;
        $this->modifiedProperties[self::PYZ_PRODUCT_SET_IDS] = true;

        return $this;
    }

    /**
     * @module ProductStorage
     *
     * @return array
     */
    public function getPyzProductSetIds()
    {
        return $this->pyzProductSetIds;
    }

    /**
     * @module ProductStorage
     *
     * @param mixed $pyzProductSetIds
     *
     * @return $this
     */
    public function addPyzProductSetIds($pyzProductSetIds)
    {
        $this->pyzProductSetIds[] = $pyzProductSetIds;
        $this->modifiedProperties[self::PYZ_PRODUCT_SET_IDS] = true;

        return $this;
    }

    /**
     * @module ProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePyzProductSetIds()
    {
        $this->assertPropertyIsSet(self::PYZ_PRODUCT_SET_IDS);

        return $this;
    }

    /**
     * @module ProductStorage
     *
     * @param array|null $pyzBundledProductIds
     *
     * @return $this
     */
    public function setPyzBundledProductIds(array $pyzBundledProductIds = null)
    {
        if ($pyzBundledProductIds === null) {
            $pyzBundledProductIds = [];
        }

        $this->pyzBundledProductIds = $pyzBundledProductIds;
        $this->modifiedProperties[self::PYZ_BUNDLED_PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductStorage
     *
     * @return array
     */
    public function getPyzBundledProductIds()
    {
        return $this->pyzBundledProductIds;
    }

    /**
     * @module ProductStorage
     *
     * @param mixed $pyzBundledProductIds
     *
     * @return $this
     */
    public function addPyzBundledProductIds($pyzBundledProductIds)
    {
        $this->pyzBundledProductIds[] = $pyzBundledProductIds;
        $this->modifiedProperties[self::PYZ_BUNDLED_PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePyzBundledProductIds()
    {
        $this->assertPropertyIsSet(self::PYZ_BUNDLED_PRODUCT_IDS);

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
                case 'idProductConcrete':
                case 'availableAttributes':
                case 'selectedAttributes':
                case 'addToCartUrl':
                case 'name':
                case 'price':
                case 'quantity':
                case 'idProductAbstract':
                case 'url':
                case 'prices':
                case 'available':
                case 'attributes':
                case 'idShoppingListItem':
                case 'superAttributesDefinition':
                case 'description':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'pyzColorCode':
                case 'pyzProductSetIds':
                case 'pyzBundledProductIds':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'promotionItem':
                case 'attributeMap':
                case 'currentProductPrice':
                case 'rating':
                case 'shoppingListItem':
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
                case 'images':
                case 'labels':
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
                case 'sku':
                case 'idProductConcrete':
                case 'availableAttributes':
                case 'selectedAttributes':
                case 'addToCartUrl':
                case 'name':
                case 'price':
                case 'quantity':
                case 'idProductAbstract':
                case 'url':
                case 'prices':
                case 'available':
                case 'attributes':
                case 'idShoppingListItem':
                case 'superAttributesDefinition':
                case 'description':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'pyzColorCode':
                case 'pyzProductSetIds':
                case 'pyzBundledProductIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'promotionItem':
                case 'attributeMap':
                case 'currentProductPrice':
                case 'rating':
                case 'shoppingListItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'images':
                case 'labels':
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
                case 'sku':
                case 'idProductConcrete':
                case 'availableAttributes':
                case 'selectedAttributes':
                case 'addToCartUrl':
                case 'name':
                case 'price':
                case 'quantity':
                case 'idProductAbstract':
                case 'url':
                case 'prices':
                case 'available':
                case 'attributes':
                case 'idShoppingListItem':
                case 'superAttributesDefinition':
                case 'description':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'pyzColorCode':
                case 'pyzProductSetIds':
                case 'pyzBundledProductIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'promotionItem':
                case 'attributeMap':
                case 'currentProductPrice':
                case 'rating':
                case 'shoppingListItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'images':
                case 'labels':
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
        $this->labels = $this->labels ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'idProductConcrete' => $this->idProductConcrete,
            'availableAttributes' => $this->availableAttributes,
            'selectedAttributes' => $this->selectedAttributes,
            'addToCartUrl' => $this->addToCartUrl,
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'idProductAbstract' => $this->idProductAbstract,
            'url' => $this->url,
            'prices' => $this->prices,
            'available' => $this->available,
            'attributes' => $this->attributes,
            'idShoppingListItem' => $this->idShoppingListItem,
            'superAttributesDefinition' => $this->superAttributesDefinition,
            'description' => $this->description,
            'metaTitle' => $this->metaTitle,
            'metaKeywords' => $this->metaKeywords,
            'metaDescription' => $this->metaDescription,
            'pyzColorCode' => $this->pyzColorCode,
            'pyzProductSetIds' => $this->pyzProductSetIds,
            'pyzBundledProductIds' => $this->pyzBundledProductIds,
            'promotionItem' => $this->promotionItem,
            'attributeMap' => $this->attributeMap,
            'currentProductPrice' => $this->currentProductPrice,
            'rating' => $this->rating,
            'shoppingListItem' => $this->shoppingListItem,
            'images' => $this->images,
            'labels' => $this->labels,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'id_product_concrete' => $this->idProductConcrete,
            'available_attributes' => $this->availableAttributes,
            'selected_attributes' => $this->selectedAttributes,
            'add_to_cart_url' => $this->addToCartUrl,
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'id_product_abstract' => $this->idProductAbstract,
            'url' => $this->url,
            'prices' => $this->prices,
            'available' => $this->available,
            'attributes' => $this->attributes,
            'id_shopping_list_item' => $this->idShoppingListItem,
            'super_attributes_definition' => $this->superAttributesDefinition,
            'description' => $this->description,
            'meta_title' => $this->metaTitle,
            'meta_keywords' => $this->metaKeywords,
            'meta_description' => $this->metaDescription,
            'pyz_color_code' => $this->pyzColorCode,
            'pyz_product_set_ids' => $this->pyzProductSetIds,
            'pyz_bundled_product_ids' => $this->pyzBundledProductIds,
            'promotion_item' => $this->promotionItem,
            'attribute_map' => $this->attributeMap,
            'current_product_price' => $this->currentProductPrice,
            'rating' => $this->rating,
            'shopping_list_item' => $this->shoppingListItem,
            'images' => $this->images,
            'labels' => $this->labels,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'id_product_concrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, false) : $this->idProductConcrete,
            'available_attributes' => $this->availableAttributes instanceof AbstractTransfer ? $this->availableAttributes->toArray(true, false) : $this->availableAttributes,
            'selected_attributes' => $this->selectedAttributes instanceof AbstractTransfer ? $this->selectedAttributes->toArray(true, false) : $this->selectedAttributes,
            'add_to_cart_url' => $this->addToCartUrl instanceof AbstractTransfer ? $this->addToCartUrl->toArray(true, false) : $this->addToCartUrl,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->prices,
            'available' => $this->available instanceof AbstractTransfer ? $this->available->toArray(true, false) : $this->available,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'id_shopping_list_item' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, false) : $this->idShoppingListItem,
            'super_attributes_definition' => $this->superAttributesDefinition instanceof AbstractTransfer ? $this->superAttributesDefinition->toArray(true, false) : $this->superAttributesDefinition,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'pyz_color_code' => $this->pyzColorCode instanceof AbstractTransfer ? $this->pyzColorCode->toArray(true, false) : $this->pyzColorCode,
            'pyz_product_set_ids' => $this->pyzProductSetIds instanceof AbstractTransfer ? $this->pyzProductSetIds->toArray(true, false) : $this->pyzProductSetIds,
            'pyz_bundled_product_ids' => $this->pyzBundledProductIds instanceof AbstractTransfer ? $this->pyzBundledProductIds->toArray(true, false) : $this->pyzBundledProductIds,
            'promotion_item' => $this->promotionItem instanceof AbstractTransfer ? $this->promotionItem->toArray(true, false) : $this->promotionItem,
            'attribute_map' => $this->attributeMap instanceof AbstractTransfer ? $this->attributeMap->toArray(true, false) : $this->attributeMap,
            'current_product_price' => $this->currentProductPrice instanceof AbstractTransfer ? $this->currentProductPrice->toArray(true, false) : $this->currentProductPrice,
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, false) : $this->rating,
            'shopping_list_item' => $this->shoppingListItem instanceof AbstractTransfer ? $this->shoppingListItem->toArray(true, false) : $this->shoppingListItem,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, false) : $this->addValuesToCollection($this->images, true, false),
            'labels' => $this->labels instanceof AbstractTransfer ? $this->labels->toArray(true, false) : $this->addValuesToCollection($this->labels, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'idProductConcrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, true) : $this->idProductConcrete,
            'availableAttributes' => $this->availableAttributes instanceof AbstractTransfer ? $this->availableAttributes->toArray(true, true) : $this->availableAttributes,
            'selectedAttributes' => $this->selectedAttributes instanceof AbstractTransfer ? $this->selectedAttributes->toArray(true, true) : $this->selectedAttributes,
            'addToCartUrl' => $this->addToCartUrl instanceof AbstractTransfer ? $this->addToCartUrl->toArray(true, true) : $this->addToCartUrl,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->prices,
            'available' => $this->available instanceof AbstractTransfer ? $this->available->toArray(true, true) : $this->available,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'idShoppingListItem' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, true) : $this->idShoppingListItem,
            'superAttributesDefinition' => $this->superAttributesDefinition instanceof AbstractTransfer ? $this->superAttributesDefinition->toArray(true, true) : $this->superAttributesDefinition,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'pyzColorCode' => $this->pyzColorCode instanceof AbstractTransfer ? $this->pyzColorCode->toArray(true, true) : $this->pyzColorCode,
            'pyzProductSetIds' => $this->pyzProductSetIds instanceof AbstractTransfer ? $this->pyzProductSetIds->toArray(true, true) : $this->pyzProductSetIds,
            'pyzBundledProductIds' => $this->pyzBundledProductIds instanceof AbstractTransfer ? $this->pyzBundledProductIds->toArray(true, true) : $this->pyzBundledProductIds,
            'promotionItem' => $this->promotionItem instanceof AbstractTransfer ? $this->promotionItem->toArray(true, true) : $this->promotionItem,
            'attributeMap' => $this->attributeMap instanceof AbstractTransfer ? $this->attributeMap->toArray(true, true) : $this->attributeMap,
            'currentProductPrice' => $this->currentProductPrice instanceof AbstractTransfer ? $this->currentProductPrice->toArray(true, true) : $this->currentProductPrice,
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, true) : $this->rating,
            'shoppingListItem' => $this->shoppingListItem instanceof AbstractTransfer ? $this->shoppingListItem->toArray(true, true) : $this->shoppingListItem,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, true) : $this->addValuesToCollection($this->images, true, true),
            'labels' => $this->labels instanceof AbstractTransfer ? $this->labels->toArray(true, true) : $this->addValuesToCollection($this->labels, true, true),
        ];
    }
}
