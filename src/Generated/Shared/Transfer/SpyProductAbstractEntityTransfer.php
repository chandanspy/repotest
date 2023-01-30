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
class SpyProductAbstractEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const FK_TAX_SET = 'fkTaxSet';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const NEW_FROM = 'newFrom';

    /**
     * @var string
     */
    public const NEW_TO = 'newTo';

    /**
     * @var string
     */
    public const PYZ_COLOR_CODE = 'pyzColorCode';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const SPY_TAX_SET = 'spyTaxSet';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_GROUPS = 'spyProductAbstractGroups';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MEASUREMENT_BASE_UNITS = 'spyProductMeasurementBaseUnits';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS = 'spyProductAbstractLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_STORES = 'spyProductAbstractStores';

    /**
     * @var string
     */
    public const SPY_PRODUCTS = 'spyProducts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS = 'spyProductAbstractProductOptionGroups';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS = 'spyProductLabelProductAbstracts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_RELATIONS = 'spyProductRelations';

    /**
     * @var string
     */
    public const SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS = 'spyProductRelationProductAbstracts';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_SCHEDULES = 'spyPriceProductSchedules';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_PRODUCT_CONNECTORS = 'spyCmsBlockProductConnectors';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS = 'spyPriceProductMerchantRelationships';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ALTERNATIVES = 'spyProductAlternatives';

    /**
     * @var string
     */
    public const SPY_PRODUCT_CUSTOMER_PERMISSIONS = 'spyProductCustomerPermissions';

    /**
     * @var string
     */
    public const SPY_URLS = 'spyUrls';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCTS = 'spyPriceProducts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_REVIEWS = 'spyProductReviews';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE_SETS = 'spyProductImageSets';

    /**
     * @var string
     */
    public const SPY_PRODUCT_CATEGORIES = 'spyProductCategories';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_SETS = 'spyProductAbstractSets';

    /**
     * @var integer|null
     */
    protected $idProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkTaxSet;

    /**
     * @var string|null
     */
    protected $attributes;

    /**
     * @var string|null
     */
    protected $newFrom;

    /**
     * @var string|null
     */
    protected $newTo;

    /**
     * @var string|null
     */
    protected $pyzColorCode;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    protected $spyTaxSet;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer[]
     */
    protected $spyProductAbstractGroups;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer[]
     */
    protected $spyProductMeasurementBaseUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer[]
     */
    protected $spyProductAbstractLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer[]
     */
    protected $spyProductAbstractStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductEntityTransfer[]
     */
    protected $spyProducts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer[]
     */
    protected $spyProductAbstractProductOptionGroups;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer[]
     */
    protected $spyProductLabelProductAbstracts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationEntityTransfer[]
     */
    protected $spyProductRelations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer[]
     */
    protected $spyProductRelationProductAbstracts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[]
     */
    protected $spyPriceProductSchedules;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer[]
     */
    protected $spyCmsBlockProductConnectors;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[]
     */
    protected $spyPriceProductMerchantRelationships;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAlternativeEntityTransfer[]
     */
    protected $spyProductAlternatives;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer[]
     */
    protected $spyProductCustomerPermissions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    protected $spyUrls;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductEntityTransfer[]
     */
    protected $spyPriceProducts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductReviewEntityTransfer[]
     */
    protected $spyProductReviews;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[]
     */
    protected $spyProductImageSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryEntityTransfer[]
     */
    protected $spyProductCategories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer[]
     */
    protected $spyProductAbstractSets;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'fk_tax_set' => 'fkTaxSet',
        'fkTaxSet' => 'fkTaxSet',
        'FkTaxSet' => 'fkTaxSet',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'new_from' => 'newFrom',
        'newFrom' => 'newFrom',
        'NewFrom' => 'newFrom',
        'new_to' => 'newTo',
        'newTo' => 'newTo',
        'NewTo' => 'newTo',
        'pyz_color_code' => 'pyzColorCode',
        'pyzColorCode' => 'pyzColorCode',
        'PyzColorCode' => 'pyzColorCode',
        'sku' => 'sku',
        'Sku' => 'sku',
        'spy_tax_set' => 'spyTaxSet',
        'spyTaxSet' => 'spyTaxSet',
        'SpyTaxSet' => 'spyTaxSet',
        'spy_product_abstract_groups' => 'spyProductAbstractGroups',
        'spyProductAbstractGroups' => 'spyProductAbstractGroups',
        'SpyProductAbstractGroups' => 'spyProductAbstractGroups',
        'spy_product_measurement_base_units' => 'spyProductMeasurementBaseUnits',
        'spyProductMeasurementBaseUnits' => 'spyProductMeasurementBaseUnits',
        'SpyProductMeasurementBaseUnits' => 'spyProductMeasurementBaseUnits',
        'spy_product_abstract_localized_attributess' => 'spyProductAbstractLocalizedAttributess',
        'spyProductAbstractLocalizedAttributess' => 'spyProductAbstractLocalizedAttributess',
        'SpyProductAbstractLocalizedAttributess' => 'spyProductAbstractLocalizedAttributess',
        'spy_product_abstract_stores' => 'spyProductAbstractStores',
        'spyProductAbstractStores' => 'spyProductAbstractStores',
        'SpyProductAbstractStores' => 'spyProductAbstractStores',
        'spy_products' => 'spyProducts',
        'spyProducts' => 'spyProducts',
        'SpyProducts' => 'spyProducts',
        'spy_product_abstract_product_option_groups' => 'spyProductAbstractProductOptionGroups',
        'spyProductAbstractProductOptionGroups' => 'spyProductAbstractProductOptionGroups',
        'SpyProductAbstractProductOptionGroups' => 'spyProductAbstractProductOptionGroups',
        'spy_product_label_product_abstracts' => 'spyProductLabelProductAbstracts',
        'spyProductLabelProductAbstracts' => 'spyProductLabelProductAbstracts',
        'SpyProductLabelProductAbstracts' => 'spyProductLabelProductAbstracts',
        'spy_product_relations' => 'spyProductRelations',
        'spyProductRelations' => 'spyProductRelations',
        'SpyProductRelations' => 'spyProductRelations',
        'spy_product_relation_product_abstracts' => 'spyProductRelationProductAbstracts',
        'spyProductRelationProductAbstracts' => 'spyProductRelationProductAbstracts',
        'SpyProductRelationProductAbstracts' => 'spyProductRelationProductAbstracts',
        'spy_price_product_schedules' => 'spyPriceProductSchedules',
        'spyPriceProductSchedules' => 'spyPriceProductSchedules',
        'SpyPriceProductSchedules' => 'spyPriceProductSchedules',
        'spy_cms_block_product_connectors' => 'spyCmsBlockProductConnectors',
        'spyCmsBlockProductConnectors' => 'spyCmsBlockProductConnectors',
        'SpyCmsBlockProductConnectors' => 'spyCmsBlockProductConnectors',
        'spy_price_product_merchant_relationships' => 'spyPriceProductMerchantRelationships',
        'spyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'SpyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'spy_product_alternatives' => 'spyProductAlternatives',
        'spyProductAlternatives' => 'spyProductAlternatives',
        'SpyProductAlternatives' => 'spyProductAlternatives',
        'spy_product_customer_permissions' => 'spyProductCustomerPermissions',
        'spyProductCustomerPermissions' => 'spyProductCustomerPermissions',
        'SpyProductCustomerPermissions' => 'spyProductCustomerPermissions',
        'spy_urls' => 'spyUrls',
        'spyUrls' => 'spyUrls',
        'SpyUrls' => 'spyUrls',
        'spy_price_products' => 'spyPriceProducts',
        'spyPriceProducts' => 'spyPriceProducts',
        'SpyPriceProducts' => 'spyPriceProducts',
        'spy_product_reviews' => 'spyProductReviews',
        'spyProductReviews' => 'spyProductReviews',
        'SpyProductReviews' => 'spyProductReviews',
        'spy_product_image_sets' => 'spyProductImageSets',
        'spyProductImageSets' => 'spyProductImageSets',
        'SpyProductImageSets' => 'spyProductImageSets',
        'spy_product_categories' => 'spyProductCategories',
        'spyProductCategories' => 'spyProductCategories',
        'SpyProductCategories' => 'spyProductCategories',
        'spy_product_abstract_sets' => 'spyProductAbstractSets',
        'spyProductAbstractSets' => 'spyProductAbstractSets',
        'SpyProductAbstractSets' => 'spyProductAbstractSets',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'integer',
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
        self::FK_TAX_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_tax_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTES => [
            'type' => 'string',
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
        self::NEW_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'new_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NEW_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'new_to',
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
        self::SPY_TAX_SET => [
            'type' => 'Generated\Shared\Transfer\SpyTaxSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_tax_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_GROUPS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_measurement_base_units',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_products',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_product_option_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_label_product_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_RELATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyProductRelationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_relations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_relation_product_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_SCHEDULES => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_schedules',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_product_connectors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_merchant_relationships',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ALTERNATIVES => [
            'type' => 'Generated\Shared\Transfer\SpyProductAlternativeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_alternatives',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_CUSTOMER_PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_customer_permissions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_URLS => [
            'type' => 'Generated\Shared\Transfer\SpyUrlEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_urls',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_products',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_REVIEWS => [
            'type' => 'Generated\Shared\Transfer\SpyProductReviewEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_reviews',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\SpyProductImageSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_CATEGORIES => [
            'type' => 'Generated\Shared\Transfer\SpyProductCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_categories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_SETS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_sets',
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
    public static $entityNamespace = 'Orm\Zed\Product\Persistence\SpyProductAbstract';


    /**
     * @module 
     *
     * @param integer|null $idProductAbstract
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductAbstract
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @return $this
     */
    public function setFkTaxSet($fkTaxSet)
    {
        $this->fkTaxSet = $fkTaxSet;
        $this->modifiedProperties[self::FK_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkTaxSet()
    {
        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTaxSetOrFail($fkTaxSet)
    {
        if ($fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->setFkTaxSet($fkTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkTaxSetOrFail()
    {
        if ($this->fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTaxSet()
    {
        $this->assertPropertyIsSet(self::FK_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module 
     *
     * @param string|null $attributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAttributesOrFail($attributes)
    {
        if ($attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->setAttributes($attributes);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAttributesOrFail()
    {
        if ($this->attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->attributes;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $newFrom
     *
     * @return $this
     */
    public function setNewFrom($newFrom)
    {
        $this->newFrom = $newFrom;
        $this->modifiedProperties[self::NEW_FROM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getNewFrom()
    {
        return $this->newFrom;
    }

    /**
     * @module 
     *
     * @param string|null $newFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewFromOrFail($newFrom)
    {
        if ($newFrom === null) {
            $this->throwNullValueException(static::NEW_FROM);
        }

        return $this->setNewFrom($newFrom);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNewFromOrFail()
    {
        if ($this->newFrom === null) {
            $this->throwNullValueException(static::NEW_FROM);
        }

        return $this->newFrom;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewFrom()
    {
        $this->assertPropertyIsSet(self::NEW_FROM);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $newTo
     *
     * @return $this
     */
    public function setNewTo($newTo)
    {
        $this->newTo = $newTo;
        $this->modifiedProperties[self::NEW_TO] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getNewTo()
    {
        return $this->newTo;
    }

    /**
     * @module 
     *
     * @param string|null $newTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewToOrFail($newTo)
    {
        if ($newTo === null) {
            $this->throwNullValueException(static::NEW_TO);
        }

        return $this->setNewTo($newTo);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNewToOrFail()
    {
        if ($this->newTo === null) {
            $this->throwNullValueException(static::NEW_TO);
        }

        return $this->newTo;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewTo()
    {
        $this->assertPropertyIsSet(self::NEW_TO);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getPyzColorCode()
    {
        return $this->pyzColorCode;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null $spyTaxSet
     *
     * @return $this
     */
    public function setSpyTaxSet(SpyTaxSetEntityTransfer $spyTaxSet = null)
    {
        $this->spyTaxSet = $spyTaxSet;
        $this->modifiedProperties[self::SPY_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    public function getSpyTaxSet()
    {
        return $this->spyTaxSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer $spyTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyTaxSetOrFail(SpyTaxSetEntityTransfer $spyTaxSet)
    {
        return $this->setSpyTaxSet($spyTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer
     */
    public function getSpyTaxSetOrFail()
    {
        if ($this->spyTaxSet === null) {
            $this->throwNullValueException(static::SPY_TAX_SET);
        }

        return $this->spyTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTaxSet()
    {
        $this->assertPropertyIsSet(self::SPY_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer[] $spyProductAbstractGroups
     *
     * @return $this
     */
    public function setSpyProductAbstractGroups(ArrayObject $spyProductAbstractGroups)
    {
        $this->spyProductAbstractGroups = $spyProductAbstractGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer[]
     */
    public function getSpyProductAbstractGroups()
    {
        return $this->spyProductAbstractGroups;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer $spyProductAbstractGroups
     *
     * @return $this
     */
    public function addSpyProductAbstractGroups(SpyProductAbstractGroupEntityTransfer $spyProductAbstractGroups)
    {
        $this->spyProductAbstractGroups[] = $spyProductAbstractGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_GROUPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer[] $spyProductMeasurementBaseUnits
     *
     * @return $this
     */
    public function setSpyProductMeasurementBaseUnits(ArrayObject $spyProductMeasurementBaseUnits)
    {
        $this->spyProductMeasurementBaseUnits = $spyProductMeasurementBaseUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer[]
     */
    public function getSpyProductMeasurementBaseUnits()
    {
        return $this->spyProductMeasurementBaseUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer $spyProductMeasurementBaseUnits
     *
     * @return $this
     */
    public function addSpyProductMeasurementBaseUnits(SpyProductMeasurementBaseUnitEntityTransfer $spyProductMeasurementBaseUnits)
    {
        $this->spyProductMeasurementBaseUnits[] = $spyProductMeasurementBaseUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductMeasurementBaseUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer[] $spyProductAbstractLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyProductAbstractLocalizedAttributess(ArrayObject $spyProductAbstractLocalizedAttributess)
    {
        $this->spyProductAbstractLocalizedAttributess = $spyProductAbstractLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer[]
     */
    public function getSpyProductAbstractLocalizedAttributess()
    {
        return $this->spyProductAbstractLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer $spyProductAbstractLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyProductAbstractLocalizedAttributess(SpyProductAbstractLocalizedAttributesEntityTransfer $spyProductAbstractLocalizedAttributess)
    {
        $this->spyProductAbstractLocalizedAttributess[] = $spyProductAbstractLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer[] $spyProductAbstractStores
     *
     * @return $this
     */
    public function setSpyProductAbstractStores(ArrayObject $spyProductAbstractStores)
    {
        $this->spyProductAbstractStores = $spyProductAbstractStores;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer[]
     */
    public function getSpyProductAbstractStores()
    {
        return $this->spyProductAbstractStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractStoreEntityTransfer $spyProductAbstractStores
     *
     * @return $this
     */
    public function addSpyProductAbstractStores(SpyProductAbstractStoreEntityTransfer $spyProductAbstractStores)
    {
        $this->spyProductAbstractStores[] = $spyProductAbstractStores;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductEntityTransfer[] $spyProducts
     *
     * @return $this
     */
    public function setSpyProducts(ArrayObject $spyProducts)
    {
        $this->spyProducts = $spyProducts;
        $this->modifiedProperties[self::SPY_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductEntityTransfer[]
     */
    public function getSpyProducts()
    {
        return $this->spyProducts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $spyProducts
     *
     * @return $this
     */
    public function addSpyProducts(SpyProductEntityTransfer $spyProducts)
    {
        $this->spyProducts[] = $spyProducts;
        $this->modifiedProperties[self::SPY_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProducts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer[] $spyProductAbstractProductOptionGroups
     *
     * @return $this
     */
    public function setSpyProductAbstractProductOptionGroups(ArrayObject $spyProductAbstractProductOptionGroups)
    {
        $this->spyProductAbstractProductOptionGroups = $spyProductAbstractProductOptionGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer[]
     */
    public function getSpyProductAbstractProductOptionGroups()
    {
        return $this->spyProductAbstractProductOptionGroups;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer $spyProductAbstractProductOptionGroups
     *
     * @return $this
     */
    public function addSpyProductAbstractProductOptionGroups(SpyProductAbstractProductOptionGroupEntityTransfer $spyProductAbstractProductOptionGroups)
    {
        $this->spyProductAbstractProductOptionGroups[] = $spyProductAbstractProductOptionGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractProductOptionGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer[] $spyProductLabelProductAbstracts
     *
     * @return $this
     */
    public function setSpyProductLabelProductAbstracts(ArrayObject $spyProductLabelProductAbstracts)
    {
        $this->spyProductLabelProductAbstracts = $spyProductLabelProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer[]
     */
    public function getSpyProductLabelProductAbstracts()
    {
        return $this->spyProductLabelProductAbstracts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer $spyProductLabelProductAbstracts
     *
     * @return $this
     */
    public function addSpyProductLabelProductAbstracts(SpyProductLabelProductAbstractEntityTransfer $spyProductLabelProductAbstracts)
    {
        $this->spyProductLabelProductAbstracts[] = $spyProductLabelProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLabelProductAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationEntityTransfer[] $spyProductRelations
     *
     * @return $this
     */
    public function setSpyProductRelations(ArrayObject $spyProductRelations)
    {
        $this->spyProductRelations = $spyProductRelations;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationEntityTransfer[]
     */
    public function getSpyProductRelations()
    {
        return $this->spyProductRelations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductRelationEntityTransfer $spyProductRelations
     *
     * @return $this
     */
    public function addSpyProductRelations(SpyProductRelationEntityTransfer $spyProductRelations)
    {
        $this->spyProductRelations[] = $spyProductRelations;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductRelations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_RELATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer[] $spyProductRelationProductAbstracts
     *
     * @return $this
     */
    public function setSpyProductRelationProductAbstracts(ArrayObject $spyProductRelationProductAbstracts)
    {
        $this->spyProductRelationProductAbstracts = $spyProductRelationProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer[]
     */
    public function getSpyProductRelationProductAbstracts()
    {
        return $this->spyProductRelationProductAbstracts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer $spyProductRelationProductAbstracts
     *
     * @return $this
     */
    public function addSpyProductRelationProductAbstracts(SpyProductRelationProductAbstractEntityTransfer $spyProductRelationProductAbstracts)
    {
        $this->spyProductRelationProductAbstracts[] = $spyProductRelationProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductRelationProductAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[] $spyPriceProductSchedules
     *
     * @return $this
     */
    public function setSpyPriceProductSchedules(ArrayObject $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[]
     */
    public function getSpyPriceProductSchedules()
    {
        return $this->spyPriceProductSchedules;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules
     *
     * @return $this
     */
    public function addSpyPriceProductSchedules(SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules[] = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductSchedules()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_SCHEDULES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer[] $spyCmsBlockProductConnectors
     *
     * @return $this
     */
    public function setSpyCmsBlockProductConnectors(ArrayObject $spyCmsBlockProductConnectors)
    {
        $this->spyCmsBlockProductConnectors = $spyCmsBlockProductConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer[]
     */
    public function getSpyCmsBlockProductConnectors()
    {
        return $this->spyCmsBlockProductConnectors;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer $spyCmsBlockProductConnectors
     *
     * @return $this
     */
    public function addSpyCmsBlockProductConnectors(SpyCmsBlockProductConnectorEntityTransfer $spyCmsBlockProductConnectors)
    {
        $this->spyCmsBlockProductConnectors[] = $spyCmsBlockProductConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockProductConnectors()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[] $spyPriceProductMerchantRelationships
     *
     * @return $this
     */
    public function setSpyPriceProductMerchantRelationships(ArrayObject $spyPriceProductMerchantRelationships)
    {
        $this->spyPriceProductMerchantRelationships = $spyPriceProductMerchantRelationships;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[]
     */
    public function getSpyPriceProductMerchantRelationships()
    {
        return $this->spyPriceProductMerchantRelationships;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer $spyPriceProductMerchantRelationships
     *
     * @return $this
     */
    public function addSpyPriceProductMerchantRelationships(SpyPriceProductMerchantRelationshipEntityTransfer $spyPriceProductMerchantRelationships)
    {
        $this->spyPriceProductMerchantRelationships[] = $spyPriceProductMerchantRelationships;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductMerchantRelationships()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAlternativeEntityTransfer[] $spyProductAlternatives
     *
     * @return $this
     */
    public function setSpyProductAlternatives(ArrayObject $spyProductAlternatives)
    {
        $this->spyProductAlternatives = $spyProductAlternatives;
        $this->modifiedProperties[self::SPY_PRODUCT_ALTERNATIVES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAlternativeEntityTransfer[]
     */
    public function getSpyProductAlternatives()
    {
        return $this->spyProductAlternatives;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAlternativeEntityTransfer $spyProductAlternatives
     *
     * @return $this
     */
    public function addSpyProductAlternatives(SpyProductAlternativeEntityTransfer $spyProductAlternatives)
    {
        $this->spyProductAlternatives[] = $spyProductAlternatives;
        $this->modifiedProperties[self::SPY_PRODUCT_ALTERNATIVES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAlternatives()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ALTERNATIVES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer[] $spyProductCustomerPermissions
     *
     * @return $this
     */
    public function setSpyProductCustomerPermissions(ArrayObject $spyProductCustomerPermissions)
    {
        $this->spyProductCustomerPermissions = $spyProductCustomerPermissions;
        $this->modifiedProperties[self::SPY_PRODUCT_CUSTOMER_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer[]
     */
    public function getSpyProductCustomerPermissions()
    {
        return $this->spyProductCustomerPermissions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer $spyProductCustomerPermissions
     *
     * @return $this
     */
    public function addSpyProductCustomerPermissions(SpyProductCustomerPermissionEntityTransfer $spyProductCustomerPermissions)
    {
        $this->spyProductCustomerPermissions[] = $spyProductCustomerPermissions;
        $this->modifiedProperties[self::SPY_PRODUCT_CUSTOMER_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductCustomerPermissions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_CUSTOMER_PERMISSIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[] $spyUrls
     *
     * @return $this
     */
    public function setSpyUrls(ArrayObject $spyUrls)
    {
        $this->spyUrls = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    public function getSpyUrls()
    {
        return $this->spyUrls;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlEntityTransfer $spyUrls
     *
     * @return $this
     */
    public function addSpyUrls(SpyUrlEntityTransfer $spyUrls)
    {
        $this->spyUrls[] = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUrls()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_URLS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductEntityTransfer[] $spyPriceProducts
     *
     * @return $this
     */
    public function setSpyPriceProducts(ArrayObject $spyPriceProducts)
    {
        $this->spyPriceProducts = $spyPriceProducts;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductEntityTransfer[]
     */
    public function getSpyPriceProducts()
    {
        return $this->spyPriceProducts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductEntityTransfer $spyPriceProducts
     *
     * @return $this
     */
    public function addSpyPriceProducts(SpyPriceProductEntityTransfer $spyPriceProducts)
    {
        $this->spyPriceProducts[] = $spyPriceProducts;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProducts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductReviewEntityTransfer[] $spyProductReviews
     *
     * @return $this
     */
    public function setSpyProductReviews(ArrayObject $spyProductReviews)
    {
        $this->spyProductReviews = $spyProductReviews;
        $this->modifiedProperties[self::SPY_PRODUCT_REVIEWS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductReviewEntityTransfer[]
     */
    public function getSpyProductReviews()
    {
        return $this->spyProductReviews;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductReviewEntityTransfer $spyProductReviews
     *
     * @return $this
     */
    public function addSpyProductReviews(SpyProductReviewEntityTransfer $spyProductReviews)
    {
        $this->spyProductReviews[] = $spyProductReviews;
        $this->modifiedProperties[self::SPY_PRODUCT_REVIEWS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductReviews()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_REVIEWS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[] $spyProductImageSets
     *
     * @return $this
     */
    public function setSpyProductImageSets(ArrayObject $spyProductImageSets)
    {
        $this->spyProductImageSets = $spyProductImageSets;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[]
     */
    public function getSpyProductImageSets()
    {
        return $this->spyProductImageSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer $spyProductImageSets
     *
     * @return $this
     */
    public function addSpyProductImageSets(SpyProductImageSetEntityTransfer $spyProductImageSets)
    {
        $this->spyProductImageSets[] = $spyProductImageSets;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_IMAGE_SETS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryEntityTransfer[] $spyProductCategories
     *
     * @return $this
     */
    public function setSpyProductCategories(ArrayObject $spyProductCategories)
    {
        $this->spyProductCategories = $spyProductCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryEntityTransfer[]
     */
    public function getSpyProductCategories()
    {
        return $this->spyProductCategories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductCategoryEntityTransfer $spyProductCategories
     *
     * @return $this
     */
    public function addSpyProductCategories(SpyProductCategoryEntityTransfer $spyProductCategories)
    {
        $this->spyProductCategories[] = $spyProductCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductCategories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_CATEGORIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer[] $spyProductAbstractSets
     *
     * @return $this
     */
    public function setSpyProductAbstractSets(ArrayObject $spyProductAbstractSets)
    {
        $this->spyProductAbstractSets = $spyProductAbstractSets;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer[]
     */
    public function getSpyProductAbstractSets()
    {
        return $this->spyProductAbstractSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer $spyProductAbstractSets
     *
     * @return $this
     */
    public function addSpyProductAbstractSets(SpyProductAbstractSetEntityTransfer $spyProductAbstractSets)
    {
        $this->spyProductAbstractSets[] = $spyProductAbstractSets;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_SETS);

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
                case 'idProductAbstract':
                case 'fkTaxSet':
                case 'attributes':
                case 'newFrom':
                case 'newTo':
                case 'pyzColorCode':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyTaxSet':
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
                case 'spyProductAbstractGroups':
                case 'spyProductMeasurementBaseUnits':
                case 'spyProductAbstractLocalizedAttributess':
                case 'spyProductAbstractStores':
                case 'spyProducts':
                case 'spyProductAbstractProductOptionGroups':
                case 'spyProductLabelProductAbstracts':
                case 'spyProductRelations':
                case 'spyProductRelationProductAbstracts':
                case 'spyPriceProductSchedules':
                case 'spyCmsBlockProductConnectors':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductAlternatives':
                case 'spyProductCustomerPermissions':
                case 'spyUrls':
                case 'spyPriceProducts':
                case 'spyProductReviews':
                case 'spyProductImageSets':
                case 'spyProductCategories':
                case 'spyProductAbstractSets':
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
                case 'idProductAbstract':
                case 'fkTaxSet':
                case 'attributes':
                case 'newFrom':
                case 'newTo':
                case 'pyzColorCode':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyTaxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductAbstractGroups':
                case 'spyProductMeasurementBaseUnits':
                case 'spyProductAbstractLocalizedAttributess':
                case 'spyProductAbstractStores':
                case 'spyProducts':
                case 'spyProductAbstractProductOptionGroups':
                case 'spyProductLabelProductAbstracts':
                case 'spyProductRelations':
                case 'spyProductRelationProductAbstracts':
                case 'spyPriceProductSchedules':
                case 'spyCmsBlockProductConnectors':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductAlternatives':
                case 'spyProductCustomerPermissions':
                case 'spyUrls':
                case 'spyPriceProducts':
                case 'spyProductReviews':
                case 'spyProductImageSets':
                case 'spyProductCategories':
                case 'spyProductAbstractSets':
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
                case 'idProductAbstract':
                case 'fkTaxSet':
                case 'attributes':
                case 'newFrom':
                case 'newTo':
                case 'pyzColorCode':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyTaxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductAbstractGroups':
                case 'spyProductMeasurementBaseUnits':
                case 'spyProductAbstractLocalizedAttributess':
                case 'spyProductAbstractStores':
                case 'spyProducts':
                case 'spyProductAbstractProductOptionGroups':
                case 'spyProductLabelProductAbstracts':
                case 'spyProductRelations':
                case 'spyProductRelationProductAbstracts':
                case 'spyPriceProductSchedules':
                case 'spyCmsBlockProductConnectors':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductAlternatives':
                case 'spyProductCustomerPermissions':
                case 'spyUrls':
                case 'spyPriceProducts':
                case 'spyProductReviews':
                case 'spyProductImageSets':
                case 'spyProductCategories':
                case 'spyProductAbstractSets':
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
        $this->spyProductAbstractGroups = $this->spyProductAbstractGroups ?: new ArrayObject();
        $this->spyProductMeasurementBaseUnits = $this->spyProductMeasurementBaseUnits ?: new ArrayObject();
        $this->spyProductAbstractLocalizedAttributess = $this->spyProductAbstractLocalizedAttributess ?: new ArrayObject();
        $this->spyProductAbstractStores = $this->spyProductAbstractStores ?: new ArrayObject();
        $this->spyProducts = $this->spyProducts ?: new ArrayObject();
        $this->spyProductAbstractProductOptionGroups = $this->spyProductAbstractProductOptionGroups ?: new ArrayObject();
        $this->spyProductLabelProductAbstracts = $this->spyProductLabelProductAbstracts ?: new ArrayObject();
        $this->spyProductRelations = $this->spyProductRelations ?: new ArrayObject();
        $this->spyProductRelationProductAbstracts = $this->spyProductRelationProductAbstracts ?: new ArrayObject();
        $this->spyPriceProductSchedules = $this->spyPriceProductSchedules ?: new ArrayObject();
        $this->spyCmsBlockProductConnectors = $this->spyCmsBlockProductConnectors ?: new ArrayObject();
        $this->spyPriceProductMerchantRelationships = $this->spyPriceProductMerchantRelationships ?: new ArrayObject();
        $this->spyProductAlternatives = $this->spyProductAlternatives ?: new ArrayObject();
        $this->spyProductCustomerPermissions = $this->spyProductCustomerPermissions ?: new ArrayObject();
        $this->spyUrls = $this->spyUrls ?: new ArrayObject();
        $this->spyPriceProducts = $this->spyPriceProducts ?: new ArrayObject();
        $this->spyProductReviews = $this->spyProductReviews ?: new ArrayObject();
        $this->spyProductImageSets = $this->spyProductImageSets ?: new ArrayObject();
        $this->spyProductCategories = $this->spyProductCategories ?: new ArrayObject();
        $this->spyProductAbstractSets = $this->spyProductAbstractSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract,
            'fkTaxSet' => $this->fkTaxSet,
            'attributes' => $this->attributes,
            'newFrom' => $this->newFrom,
            'newTo' => $this->newTo,
            'pyzColorCode' => $this->pyzColorCode,
            'sku' => $this->sku,
            'spyTaxSet' => $this->spyTaxSet,
            'spyProductAbstractGroups' => $this->spyProductAbstractGroups,
            'spyProductMeasurementBaseUnits' => $this->spyProductMeasurementBaseUnits,
            'spyProductAbstractLocalizedAttributess' => $this->spyProductAbstractLocalizedAttributess,
            'spyProductAbstractStores' => $this->spyProductAbstractStores,
            'spyProducts' => $this->spyProducts,
            'spyProductAbstractProductOptionGroups' => $this->spyProductAbstractProductOptionGroups,
            'spyProductLabelProductAbstracts' => $this->spyProductLabelProductAbstracts,
            'spyProductRelations' => $this->spyProductRelations,
            'spyProductRelationProductAbstracts' => $this->spyProductRelationProductAbstracts,
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules,
            'spyCmsBlockProductConnectors' => $this->spyCmsBlockProductConnectors,
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships,
            'spyProductAlternatives' => $this->spyProductAlternatives,
            'spyProductCustomerPermissions' => $this->spyProductCustomerPermissions,
            'spyUrls' => $this->spyUrls,
            'spyPriceProducts' => $this->spyPriceProducts,
            'spyProductReviews' => $this->spyProductReviews,
            'spyProductImageSets' => $this->spyProductImageSets,
            'spyProductCategories' => $this->spyProductCategories,
            'spyProductAbstractSets' => $this->spyProductAbstractSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract,
            'fk_tax_set' => $this->fkTaxSet,
            'attributes' => $this->attributes,
            'new_from' => $this->newFrom,
            'new_to' => $this->newTo,
            'pyz_color_code' => $this->pyzColorCode,
            'sku' => $this->sku,
            'spy_tax_set' => $this->spyTaxSet,
            'spy_product_abstract_groups' => $this->spyProductAbstractGroups,
            'spy_product_measurement_base_units' => $this->spyProductMeasurementBaseUnits,
            'spy_product_abstract_localized_attributess' => $this->spyProductAbstractLocalizedAttributess,
            'spy_product_abstract_stores' => $this->spyProductAbstractStores,
            'spy_products' => $this->spyProducts,
            'spy_product_abstract_product_option_groups' => $this->spyProductAbstractProductOptionGroups,
            'spy_product_label_product_abstracts' => $this->spyProductLabelProductAbstracts,
            'spy_product_relations' => $this->spyProductRelations,
            'spy_product_relation_product_abstracts' => $this->spyProductRelationProductAbstracts,
            'spy_price_product_schedules' => $this->spyPriceProductSchedules,
            'spy_cms_block_product_connectors' => $this->spyCmsBlockProductConnectors,
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships,
            'spy_product_alternatives' => $this->spyProductAlternatives,
            'spy_product_customer_permissions' => $this->spyProductCustomerPermissions,
            'spy_urls' => $this->spyUrls,
            'spy_price_products' => $this->spyPriceProducts,
            'spy_product_reviews' => $this->spyProductReviews,
            'spy_product_image_sets' => $this->spyProductImageSets,
            'spy_product_categories' => $this->spyProductCategories,
            'spy_product_abstract_sets' => $this->spyProductAbstractSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'fk_tax_set' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, false) : $this->fkTaxSet,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'new_from' => $this->newFrom instanceof AbstractTransfer ? $this->newFrom->toArray(true, false) : $this->newFrom,
            'new_to' => $this->newTo instanceof AbstractTransfer ? $this->newTo->toArray(true, false) : $this->newTo,
            'pyz_color_code' => $this->pyzColorCode instanceof AbstractTransfer ? $this->pyzColorCode->toArray(true, false) : $this->pyzColorCode,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'spy_tax_set' => $this->spyTaxSet instanceof AbstractTransfer ? $this->spyTaxSet->toArray(true, false) : $this->spyTaxSet,
            'spy_product_abstract_groups' => $this->spyProductAbstractGroups instanceof AbstractTransfer ? $this->spyProductAbstractGroups->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractGroups, true, false),
            'spy_product_measurement_base_units' => $this->spyProductMeasurementBaseUnits instanceof AbstractTransfer ? $this->spyProductMeasurementBaseUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductMeasurementBaseUnits, true, false),
            'spy_product_abstract_localized_attributess' => $this->spyProductAbstractLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductAbstractLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractLocalizedAttributess, true, false),
            'spy_product_abstract_stores' => $this->spyProductAbstractStores instanceof AbstractTransfer ? $this->spyProductAbstractStores->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractStores, true, false),
            'spy_products' => $this->spyProducts instanceof AbstractTransfer ? $this->spyProducts->toArray(true, false) : $this->addValuesToCollection($this->spyProducts, true, false),
            'spy_product_abstract_product_option_groups' => $this->spyProductAbstractProductOptionGroups instanceof AbstractTransfer ? $this->spyProductAbstractProductOptionGroups->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractProductOptionGroups, true, false),
            'spy_product_label_product_abstracts' => $this->spyProductLabelProductAbstracts instanceof AbstractTransfer ? $this->spyProductLabelProductAbstracts->toArray(true, false) : $this->addValuesToCollection($this->spyProductLabelProductAbstracts, true, false),
            'spy_product_relations' => $this->spyProductRelations instanceof AbstractTransfer ? $this->spyProductRelations->toArray(true, false) : $this->addValuesToCollection($this->spyProductRelations, true, false),
            'spy_product_relation_product_abstracts' => $this->spyProductRelationProductAbstracts instanceof AbstractTransfer ? $this->spyProductRelationProductAbstracts->toArray(true, false) : $this->addValuesToCollection($this->spyProductRelationProductAbstracts, true, false),
            'spy_price_product_schedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, false),
            'spy_cms_block_product_connectors' => $this->spyCmsBlockProductConnectors instanceof AbstractTransfer ? $this->spyCmsBlockProductConnectors->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockProductConnectors, true, false),
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, false),
            'spy_product_alternatives' => $this->spyProductAlternatives instanceof AbstractTransfer ? $this->spyProductAlternatives->toArray(true, false) : $this->addValuesToCollection($this->spyProductAlternatives, true, false),
            'spy_product_customer_permissions' => $this->spyProductCustomerPermissions instanceof AbstractTransfer ? $this->spyProductCustomerPermissions->toArray(true, false) : $this->addValuesToCollection($this->spyProductCustomerPermissions, true, false),
            'spy_urls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, false) : $this->addValuesToCollection($this->spyUrls, true, false),
            'spy_price_products' => $this->spyPriceProducts instanceof AbstractTransfer ? $this->spyPriceProducts->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProducts, true, false),
            'spy_product_reviews' => $this->spyProductReviews instanceof AbstractTransfer ? $this->spyProductReviews->toArray(true, false) : $this->addValuesToCollection($this->spyProductReviews, true, false),
            'spy_product_image_sets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, false) : $this->addValuesToCollection($this->spyProductImageSets, true, false),
            'spy_product_categories' => $this->spyProductCategories instanceof AbstractTransfer ? $this->spyProductCategories->toArray(true, false) : $this->addValuesToCollection($this->spyProductCategories, true, false),
            'spy_product_abstract_sets' => $this->spyProductAbstractSets instanceof AbstractTransfer ? $this->spyProductAbstractSets->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'fkTaxSet' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, true) : $this->fkTaxSet,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'newFrom' => $this->newFrom instanceof AbstractTransfer ? $this->newFrom->toArray(true, true) : $this->newFrom,
            'newTo' => $this->newTo instanceof AbstractTransfer ? $this->newTo->toArray(true, true) : $this->newTo,
            'pyzColorCode' => $this->pyzColorCode instanceof AbstractTransfer ? $this->pyzColorCode->toArray(true, true) : $this->pyzColorCode,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'spyTaxSet' => $this->spyTaxSet instanceof AbstractTransfer ? $this->spyTaxSet->toArray(true, true) : $this->spyTaxSet,
            'spyProductAbstractGroups' => $this->spyProductAbstractGroups instanceof AbstractTransfer ? $this->spyProductAbstractGroups->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractGroups, true, true),
            'spyProductMeasurementBaseUnits' => $this->spyProductMeasurementBaseUnits instanceof AbstractTransfer ? $this->spyProductMeasurementBaseUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductMeasurementBaseUnits, true, true),
            'spyProductAbstractLocalizedAttributess' => $this->spyProductAbstractLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductAbstractLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractLocalizedAttributess, true, true),
            'spyProductAbstractStores' => $this->spyProductAbstractStores instanceof AbstractTransfer ? $this->spyProductAbstractStores->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractStores, true, true),
            'spyProducts' => $this->spyProducts instanceof AbstractTransfer ? $this->spyProducts->toArray(true, true) : $this->addValuesToCollection($this->spyProducts, true, true),
            'spyProductAbstractProductOptionGroups' => $this->spyProductAbstractProductOptionGroups instanceof AbstractTransfer ? $this->spyProductAbstractProductOptionGroups->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractProductOptionGroups, true, true),
            'spyProductLabelProductAbstracts' => $this->spyProductLabelProductAbstracts instanceof AbstractTransfer ? $this->spyProductLabelProductAbstracts->toArray(true, true) : $this->addValuesToCollection($this->spyProductLabelProductAbstracts, true, true),
            'spyProductRelations' => $this->spyProductRelations instanceof AbstractTransfer ? $this->spyProductRelations->toArray(true, true) : $this->addValuesToCollection($this->spyProductRelations, true, true),
            'spyProductRelationProductAbstracts' => $this->spyProductRelationProductAbstracts instanceof AbstractTransfer ? $this->spyProductRelationProductAbstracts->toArray(true, true) : $this->addValuesToCollection($this->spyProductRelationProductAbstracts, true, true),
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, true),
            'spyCmsBlockProductConnectors' => $this->spyCmsBlockProductConnectors instanceof AbstractTransfer ? $this->spyCmsBlockProductConnectors->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockProductConnectors, true, true),
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, true),
            'spyProductAlternatives' => $this->spyProductAlternatives instanceof AbstractTransfer ? $this->spyProductAlternatives->toArray(true, true) : $this->addValuesToCollection($this->spyProductAlternatives, true, true),
            'spyProductCustomerPermissions' => $this->spyProductCustomerPermissions instanceof AbstractTransfer ? $this->spyProductCustomerPermissions->toArray(true, true) : $this->addValuesToCollection($this->spyProductCustomerPermissions, true, true),
            'spyUrls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, true) : $this->addValuesToCollection($this->spyUrls, true, true),
            'spyPriceProducts' => $this->spyPriceProducts instanceof AbstractTransfer ? $this->spyPriceProducts->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProducts, true, true),
            'spyProductReviews' => $this->spyProductReviews instanceof AbstractTransfer ? $this->spyProductReviews->toArray(true, true) : $this->addValuesToCollection($this->spyProductReviews, true, true),
            'spyProductImageSets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, true) : $this->addValuesToCollection($this->spyProductImageSets, true, true),
            'spyProductCategories' => $this->spyProductCategories instanceof AbstractTransfer ? $this->spyProductCategories->toArray(true, true) : $this->addValuesToCollection($this->spyProductCategories, true, true),
            'spyProductAbstractSets' => $this->spyProductAbstractSets instanceof AbstractTransfer ? $this->spyProductAbstractSets->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractSets, true, true),
        ];
    }
}
