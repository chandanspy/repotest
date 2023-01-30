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
class SpyProductEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_QUANTITY_SPLITTABLE = 'isQuantitySplittable';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT = 'spyProductAbstract';

    /**
     * @var string
     */
    public const SPY_PRODUCT_VALIDITIES = 'spyProductValidities';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MEASUREMENT_SALES_UNITS = 'spyProductMeasurementSalesUnits';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LOCALIZED_ATTRIBUTESS = 'spyProductLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_PRODUCT_PACKAGING_UNITS = 'spyProductPackagingUnits';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_SCHEDULES = 'spyPriceProductSchedules';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS = 'spyPriceProductMerchantRelationships';

    /**
     * @var string
     */
    public const SPY_PRODUCT_DISCONTINUEDS = 'spyProductDiscontinueds';

    /**
     * @var string
     */
    public const SPY_STOCK_PRODUCTS = 'spyStockProducts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ALTERNATIVES = 'spyProductAlternatives';

    /**
     * @var string
     */
    public const SPY_PRODUCT_QUANTITIES = 'spyProductQuantities';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCTS = 'spyPriceProducts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SEARCHES = 'spyProductSearches';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LIST_PRODUCT_CONCRETES = 'spyProductListProductConcretes';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE_SETS = 'spyProductImageSets';

    /**
     * @var string
     */
    public const SPY_PRODUCT_BUNDLES = 'spyProductBundles';

    /**
     * @var integer|null
     */
    protected $idProduct;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var string|null
     */
    protected $attributes;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isQuantitySplittable;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProductAbstract;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductValidityEntityTransfer[]
     */
    protected $spyProductValidities;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer[]
     */
    protected $spyProductMeasurementSalesUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer[]
     */
    protected $spyProductLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer[]
     */
    protected $spyProductPackagingUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[]
     */
    protected $spyPriceProductSchedules;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[]
     */
    protected $spyPriceProductMerchantRelationships;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer[]
     */
    protected $spyProductDiscontinueds;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStockProductEntityTransfer[]
     */
    protected $spyStockProducts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAlternativeEntityTransfer[]
     */
    protected $spyProductAlternatives;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductQuantityEntityTransfer[]
     */
    protected $spyProductQuantities;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductEntityTransfer[]
     */
    protected $spyPriceProducts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchEntityTransfer[]
     */
    protected $spyProductSearches;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer[]
     */
    protected $spyProductListProductConcretes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[]
     */
    protected $spyProductImageSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductBundleEntityTransfer[]
     */
    protected $spyProductBundles;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_quantity_splittable' => 'isQuantitySplittable',
        'isQuantitySplittable' => 'isQuantitySplittable',
        'IsQuantitySplittable' => 'isQuantitySplittable',
        'sku' => 'sku',
        'Sku' => 'sku',
        'spy_product_abstract' => 'spyProductAbstract',
        'spyProductAbstract' => 'spyProductAbstract',
        'SpyProductAbstract' => 'spyProductAbstract',
        'spy_product_validities' => 'spyProductValidities',
        'spyProductValidities' => 'spyProductValidities',
        'SpyProductValidities' => 'spyProductValidities',
        'spy_product_measurement_sales_units' => 'spyProductMeasurementSalesUnits',
        'spyProductMeasurementSalesUnits' => 'spyProductMeasurementSalesUnits',
        'SpyProductMeasurementSalesUnits' => 'spyProductMeasurementSalesUnits',
        'spy_product_localized_attributess' => 'spyProductLocalizedAttributess',
        'spyProductLocalizedAttributess' => 'spyProductLocalizedAttributess',
        'SpyProductLocalizedAttributess' => 'spyProductLocalizedAttributess',
        'spy_product_packaging_units' => 'spyProductPackagingUnits',
        'spyProductPackagingUnits' => 'spyProductPackagingUnits',
        'SpyProductPackagingUnits' => 'spyProductPackagingUnits',
        'spy_price_product_schedules' => 'spyPriceProductSchedules',
        'spyPriceProductSchedules' => 'spyPriceProductSchedules',
        'SpyPriceProductSchedules' => 'spyPriceProductSchedules',
        'spy_price_product_merchant_relationships' => 'spyPriceProductMerchantRelationships',
        'spyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'SpyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'spy_product_discontinueds' => 'spyProductDiscontinueds',
        'spyProductDiscontinueds' => 'spyProductDiscontinueds',
        'SpyProductDiscontinueds' => 'spyProductDiscontinueds',
        'spy_stock_products' => 'spyStockProducts',
        'spyStockProducts' => 'spyStockProducts',
        'SpyStockProducts' => 'spyStockProducts',
        'spy_product_alternatives' => 'spyProductAlternatives',
        'spyProductAlternatives' => 'spyProductAlternatives',
        'SpyProductAlternatives' => 'spyProductAlternatives',
        'spy_product_quantities' => 'spyProductQuantities',
        'spyProductQuantities' => 'spyProductQuantities',
        'SpyProductQuantities' => 'spyProductQuantities',
        'spy_price_products' => 'spyPriceProducts',
        'spyPriceProducts' => 'spyPriceProducts',
        'SpyPriceProducts' => 'spyPriceProducts',
        'spy_product_searches' => 'spyProductSearches',
        'spyProductSearches' => 'spyProductSearches',
        'SpyProductSearches' => 'spyProductSearches',
        'spy_product_list_product_concretes' => 'spyProductListProductConcretes',
        'spyProductListProductConcretes' => 'spyProductListProductConcretes',
        'SpyProductListProductConcretes' => 'spyProductListProductConcretes',
        'spy_product_image_sets' => 'spyProductImageSets',
        'spyProductImageSets' => 'spyProductImageSets',
        'SpyProductImageSets' => 'spyProductImageSets',
        'spy_product_bundles' => 'spyProductBundles',
        'spyProductBundles' => 'spyProductBundles',
        'SpyProductBundles' => 'spyProductBundles',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT => [
            'type' => 'integer',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
        self::IS_QUANTITY_SPLITTABLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_quantity_splittable',
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
        self::SPY_PRODUCT_VALIDITIES => [
            'type' => 'Generated\Shared\Transfer\SpyProductValidityEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_validities',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_measurement_sales_units',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_PACKAGING_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_packaging_units',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_PACKAGING_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_packaging_units',
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
        self::SPY_PRODUCT_DISCONTINUEDS => [
            'type' => 'Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_discontinueds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\SpyStockProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock_products',
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
        self::SPY_PRODUCT_QUANTITIES => [
            'type' => 'Generated\Shared\Transfer\SpyProductQuantityEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_quantities',
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
        self::SPY_PRODUCT_SEARCHES => [
            'type' => 'Generated\Shared\Transfer\SpyProductSearchEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_searches',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES => [
            'type' => 'Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_list_product_concretes',
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
        self::SPY_PRODUCT_BUNDLES => [
            'type' => 'Generated\Shared\Transfer\SpyProductBundleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_bundles',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_BUNDLES => [
            'type' => 'Generated\Shared\Transfer\SpyProductBundleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_bundles',
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
    public static $entityNamespace = 'Orm\Zed\Product\Persistence\SpyProduct';


    /**
     * @module 
     *
     * @param integer|null $idProduct
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $idProduct
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductOrFail()
    {
        if ($this->idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->idProduct;
    }

    /**
     * @module 
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
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isQuantitySplittable
     *
     * @return $this
     */
    public function setIsQuantitySplittable($isQuantitySplittable)
    {
        $this->isQuantitySplittable = $isQuantitySplittable;
        $this->modifiedProperties[self::IS_QUANTITY_SPLITTABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsQuantitySplittable()
    {
        return $this->isQuantitySplittable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isQuantitySplittable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsQuantitySplittableOrFail($isQuantitySplittable)
    {
        if ($isQuantitySplittable === null) {
            $this->throwNullValueException(static::IS_QUANTITY_SPLITTABLE);
        }

        return $this->setIsQuantitySplittable($isQuantitySplittable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsQuantitySplittableOrFail()
    {
        if ($this->isQuantitySplittable === null) {
            $this->throwNullValueException(static::IS_QUANTITY_SPLITTABLE);
        }

        return $this->isQuantitySplittable;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsQuantitySplittable()
    {
        $this->assertPropertyIsSet(self::IS_QUANTITY_SPLITTABLE);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductValidityEntityTransfer[] $spyProductValidities
     *
     * @return $this
     */
    public function setSpyProductValidities(ArrayObject $spyProductValidities)
    {
        $this->spyProductValidities = $spyProductValidities;
        $this->modifiedProperties[self::SPY_PRODUCT_VALIDITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductValidityEntityTransfer[]
     */
    public function getSpyProductValidities()
    {
        return $this->spyProductValidities;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductValidityEntityTransfer $spyProductValidities
     *
     * @return $this
     */
    public function addSpyProductValidities(SpyProductValidityEntityTransfer $spyProductValidities)
    {
        $this->spyProductValidities[] = $spyProductValidities;
        $this->modifiedProperties[self::SPY_PRODUCT_VALIDITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductValidities()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_VALIDITIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer[] $spyProductMeasurementSalesUnits
     *
     * @return $this
     */
    public function setSpyProductMeasurementSalesUnits(ArrayObject $spyProductMeasurementSalesUnits)
    {
        $this->spyProductMeasurementSalesUnits = $spyProductMeasurementSalesUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer[]
     */
    public function getSpyProductMeasurementSalesUnits()
    {
        return $this->spyProductMeasurementSalesUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer $spyProductMeasurementSalesUnits
     *
     * @return $this
     */
    public function addSpyProductMeasurementSalesUnits(SpyProductMeasurementSalesUnitEntityTransfer $spyProductMeasurementSalesUnits)
    {
        $this->spyProductMeasurementSalesUnits[] = $spyProductMeasurementSalesUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductMeasurementSalesUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer[] $spyProductLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyProductLocalizedAttributess(ArrayObject $spyProductLocalizedAttributess)
    {
        $this->spyProductLocalizedAttributess = $spyProductLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer[]
     */
    public function getSpyProductLocalizedAttributess()
    {
        return $this->spyProductLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer $spyProductLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyProductLocalizedAttributess(SpyProductLocalizedAttributesEntityTransfer $spyProductLocalizedAttributess)
    {
        $this->spyProductLocalizedAttributess[] = $spyProductLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer[] $spyProductPackagingUnits
     *
     * @return $this
     */
    public function setSpyProductPackagingUnits(ArrayObject $spyProductPackagingUnits)
    {
        $this->spyProductPackagingUnits = $spyProductPackagingUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_PACKAGING_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer[]
     */
    public function getSpyProductPackagingUnits()
    {
        return $this->spyProductPackagingUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer $spyProductPackagingUnits
     *
     * @return $this
     */
    public function addSpyProductPackagingUnits(SpyProductPackagingUnitEntityTransfer $spyProductPackagingUnits)
    {
        $this->spyProductPackagingUnits[] = $spyProductPackagingUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_PACKAGING_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductPackagingUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_PACKAGING_UNITS);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer[] $spyProductDiscontinueds
     *
     * @return $this
     */
    public function setSpyProductDiscontinueds(ArrayObject $spyProductDiscontinueds)
    {
        $this->spyProductDiscontinueds = $spyProductDiscontinueds;
        $this->modifiedProperties[self::SPY_PRODUCT_DISCONTINUEDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer[]
     */
    public function getSpyProductDiscontinueds()
    {
        return $this->spyProductDiscontinueds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer $spyProductDiscontinueds
     *
     * @return $this
     */
    public function addSpyProductDiscontinueds(SpyProductDiscontinuedEntityTransfer $spyProductDiscontinueds)
    {
        $this->spyProductDiscontinueds[] = $spyProductDiscontinueds;
        $this->modifiedProperties[self::SPY_PRODUCT_DISCONTINUEDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductDiscontinueds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_DISCONTINUEDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyStockProductEntityTransfer[] $spyStockProducts
     *
     * @return $this
     */
    public function setSpyStockProducts(ArrayObject $spyStockProducts)
    {
        $this->spyStockProducts = $spyStockProducts;
        $this->modifiedProperties[self::SPY_STOCK_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyStockProductEntityTransfer[]
     */
    public function getSpyStockProducts()
    {
        return $this->spyStockProducts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockProductEntityTransfer $spyStockProducts
     *
     * @return $this
     */
    public function addSpyStockProducts(SpyStockProductEntityTransfer $spyStockProducts)
    {
        $this->spyStockProducts[] = $spyStockProducts;
        $this->modifiedProperties[self::SPY_STOCK_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStockProducts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STOCK_PRODUCTS);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductQuantityEntityTransfer[] $spyProductQuantities
     *
     * @return $this
     */
    public function setSpyProductQuantities(ArrayObject $spyProductQuantities)
    {
        $this->spyProductQuantities = $spyProductQuantities;
        $this->modifiedProperties[self::SPY_PRODUCT_QUANTITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductQuantityEntityTransfer[]
     */
    public function getSpyProductQuantities()
    {
        return $this->spyProductQuantities;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductQuantityEntityTransfer $spyProductQuantities
     *
     * @return $this
     */
    public function addSpyProductQuantities(SpyProductQuantityEntityTransfer $spyProductQuantities)
    {
        $this->spyProductQuantities[] = $spyProductQuantities;
        $this->modifiedProperties[self::SPY_PRODUCT_QUANTITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductQuantities()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_QUANTITIES);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchEntityTransfer[] $spyProductSearches
     *
     * @return $this
     */
    public function setSpyProductSearches(ArrayObject $spyProductSearches)
    {
        $this->spyProductSearches = $spyProductSearches;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchEntityTransfer[]
     */
    public function getSpyProductSearches()
    {
        return $this->spyProductSearches;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSearchEntityTransfer $spyProductSearches
     *
     * @return $this
     */
    public function addSpyProductSearches(SpyProductSearchEntityTransfer $spyProductSearches)
    {
        $this->spyProductSearches[] = $spyProductSearches;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSearches()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_SEARCHES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer[] $spyProductListProductConcretes
     *
     * @return $this
     */
    public function setSpyProductListProductConcretes(ArrayObject $spyProductListProductConcretes)
    {
        $this->spyProductListProductConcretes = $spyProductListProductConcretes;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer[]
     */
    public function getSpyProductListProductConcretes()
    {
        return $this->spyProductListProductConcretes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer $spyProductListProductConcretes
     *
     * @return $this
     */
    public function addSpyProductListProductConcretes(SpyProductListProductConcreteEntityTransfer $spyProductListProductConcretes)
    {
        $this->spyProductListProductConcretes[] = $spyProductListProductConcretes;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductListProductConcretes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductBundleEntityTransfer[] $spyProductBundles
     *
     * @return $this
     */
    public function setSpyProductBundles(ArrayObject $spyProductBundles)
    {
        $this->spyProductBundles = $spyProductBundles;
        $this->modifiedProperties[self::SPY_PRODUCT_BUNDLES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductBundleEntityTransfer[]
     */
    public function getSpyProductBundles()
    {
        return $this->spyProductBundles;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductBundleEntityTransfer $spyProductBundles
     *
     * @return $this
     */
    public function addSpyProductBundles(SpyProductBundleEntityTransfer $spyProductBundles)
    {
        $this->spyProductBundles[] = $spyProductBundles;
        $this->modifiedProperties[self::SPY_PRODUCT_BUNDLES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductBundles()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_BUNDLES);

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
                case 'idProduct':
                case 'fkProductAbstract':
                case 'attributes':
                case 'isActive':
                case 'isQuantitySplittable':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAbstract':
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
                case 'spyProductValidities':
                case 'spyProductMeasurementSalesUnits':
                case 'spyProductLocalizedAttributess':
                case 'spyProductPackagingUnits':
                case 'spyProductPackagingUnits':
                case 'spyPriceProductSchedules':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductDiscontinueds':
                case 'spyStockProducts':
                case 'spyProductAlternatives':
                case 'spyProductAlternatives':
                case 'spyProductQuantities':
                case 'spyPriceProducts':
                case 'spyProductSearches':
                case 'spyProductListProductConcretes':
                case 'spyProductImageSets':
                case 'spyProductBundles':
                case 'spyProductBundles':
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
                case 'idProduct':
                case 'fkProductAbstract':
                case 'attributes':
                case 'isActive':
                case 'isQuantitySplittable':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstract':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductValidities':
                case 'spyProductMeasurementSalesUnits':
                case 'spyProductLocalizedAttributess':
                case 'spyProductPackagingUnits':
                case 'spyProductPackagingUnits':
                case 'spyPriceProductSchedules':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductDiscontinueds':
                case 'spyStockProducts':
                case 'spyProductAlternatives':
                case 'spyProductAlternatives':
                case 'spyProductQuantities':
                case 'spyPriceProducts':
                case 'spyProductSearches':
                case 'spyProductListProductConcretes':
                case 'spyProductImageSets':
                case 'spyProductBundles':
                case 'spyProductBundles':
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
                case 'idProduct':
                case 'fkProductAbstract':
                case 'attributes':
                case 'isActive':
                case 'isQuantitySplittable':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstract':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductValidities':
                case 'spyProductMeasurementSalesUnits':
                case 'spyProductLocalizedAttributess':
                case 'spyProductPackagingUnits':
                case 'spyProductPackagingUnits':
                case 'spyPriceProductSchedules':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductDiscontinueds':
                case 'spyStockProducts':
                case 'spyProductAlternatives':
                case 'spyProductAlternatives':
                case 'spyProductQuantities':
                case 'spyPriceProducts':
                case 'spyProductSearches':
                case 'spyProductListProductConcretes':
                case 'spyProductImageSets':
                case 'spyProductBundles':
                case 'spyProductBundles':
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
        $this->spyProductValidities = $this->spyProductValidities ?: new ArrayObject();
        $this->spyProductMeasurementSalesUnits = $this->spyProductMeasurementSalesUnits ?: new ArrayObject();
        $this->spyProductLocalizedAttributess = $this->spyProductLocalizedAttributess ?: new ArrayObject();
        $this->spyProductPackagingUnits = $this->spyProductPackagingUnits ?: new ArrayObject();
        $this->spyProductPackagingUnits = $this->spyProductPackagingUnits ?: new ArrayObject();
        $this->spyPriceProductSchedules = $this->spyPriceProductSchedules ?: new ArrayObject();
        $this->spyPriceProductMerchantRelationships = $this->spyPriceProductMerchantRelationships ?: new ArrayObject();
        $this->spyProductDiscontinueds = $this->spyProductDiscontinueds ?: new ArrayObject();
        $this->spyStockProducts = $this->spyStockProducts ?: new ArrayObject();
        $this->spyProductAlternatives = $this->spyProductAlternatives ?: new ArrayObject();
        $this->spyProductAlternatives = $this->spyProductAlternatives ?: new ArrayObject();
        $this->spyProductQuantities = $this->spyProductQuantities ?: new ArrayObject();
        $this->spyPriceProducts = $this->spyPriceProducts ?: new ArrayObject();
        $this->spyProductSearches = $this->spyProductSearches ?: new ArrayObject();
        $this->spyProductListProductConcretes = $this->spyProductListProductConcretes ?: new ArrayObject();
        $this->spyProductImageSets = $this->spyProductImageSets ?: new ArrayObject();
        $this->spyProductBundles = $this->spyProductBundles ?: new ArrayObject();
        $this->spyProductBundles = $this->spyProductBundles ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProduct' => $this->idProduct,
            'fkProductAbstract' => $this->fkProductAbstract,
            'attributes' => $this->attributes,
            'isActive' => $this->isActive,
            'isQuantitySplittable' => $this->isQuantitySplittable,
            'sku' => $this->sku,
            'spyProductAbstract' => $this->spyProductAbstract,
            'spyProductValidities' => $this->spyProductValidities,
            'spyProductMeasurementSalesUnits' => $this->spyProductMeasurementSalesUnits,
            'spyProductLocalizedAttributess' => $this->spyProductLocalizedAttributess,
            'spyProductPackagingUnits' => $this->spyProductPackagingUnits,
            'spyProductPackagingUnits' => $this->spyProductPackagingUnits,
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules,
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships,
            'spyProductDiscontinueds' => $this->spyProductDiscontinueds,
            'spyStockProducts' => $this->spyStockProducts,
            'spyProductAlternatives' => $this->spyProductAlternatives,
            'spyProductAlternatives' => $this->spyProductAlternatives,
            'spyProductQuantities' => $this->spyProductQuantities,
            'spyPriceProducts' => $this->spyPriceProducts,
            'spyProductSearches' => $this->spyProductSearches,
            'spyProductListProductConcretes' => $this->spyProductListProductConcretes,
            'spyProductImageSets' => $this->spyProductImageSets,
            'spyProductBundles' => $this->spyProductBundles,
            'spyProductBundles' => $this->spyProductBundles,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct,
            'fk_product_abstract' => $this->fkProductAbstract,
            'attributes' => $this->attributes,
            'is_active' => $this->isActive,
            'is_quantity_splittable' => $this->isQuantitySplittable,
            'sku' => $this->sku,
            'spy_product_abstract' => $this->spyProductAbstract,
            'spy_product_validities' => $this->spyProductValidities,
            'spy_product_measurement_sales_units' => $this->spyProductMeasurementSalesUnits,
            'spy_product_localized_attributess' => $this->spyProductLocalizedAttributess,
            'spy_product_packaging_units' => $this->spyProductPackagingUnits,
            'spy_product_packaging_units' => $this->spyProductPackagingUnits,
            'spy_price_product_schedules' => $this->spyPriceProductSchedules,
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships,
            'spy_product_discontinueds' => $this->spyProductDiscontinueds,
            'spy_stock_products' => $this->spyStockProducts,
            'spy_product_alternatives' => $this->spyProductAlternatives,
            'spy_product_alternatives' => $this->spyProductAlternatives,
            'spy_product_quantities' => $this->spyProductQuantities,
            'spy_price_products' => $this->spyPriceProducts,
            'spy_product_searches' => $this->spyProductSearches,
            'spy_product_list_product_concretes' => $this->spyProductListProductConcretes,
            'spy_product_image_sets' => $this->spyProductImageSets,
            'spy_product_bundles' => $this->spyProductBundles,
            'spy_product_bundles' => $this->spyProductBundles,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_quantity_splittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, false) : $this->isQuantitySplittable,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'spy_product_abstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, false) : $this->spyProductAbstract,
            'spy_product_validities' => $this->spyProductValidities instanceof AbstractTransfer ? $this->spyProductValidities->toArray(true, false) : $this->addValuesToCollection($this->spyProductValidities, true, false),
            'spy_product_measurement_sales_units' => $this->spyProductMeasurementSalesUnits instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnits, true, false),
            'spy_product_localized_attributess' => $this->spyProductLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyProductLocalizedAttributess, true, false),
            'spy_product_packaging_units' => $this->spyProductPackagingUnits instanceof AbstractTransfer ? $this->spyProductPackagingUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductPackagingUnits, true, false),
            'spy_product_packaging_units' => $this->spyProductPackagingUnits instanceof AbstractTransfer ? $this->spyProductPackagingUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductPackagingUnits, true, false),
            'spy_price_product_schedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, false),
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, false),
            'spy_product_discontinueds' => $this->spyProductDiscontinueds instanceof AbstractTransfer ? $this->spyProductDiscontinueds->toArray(true, false) : $this->addValuesToCollection($this->spyProductDiscontinueds, true, false),
            'spy_stock_products' => $this->spyStockProducts instanceof AbstractTransfer ? $this->spyStockProducts->toArray(true, false) : $this->addValuesToCollection($this->spyStockProducts, true, false),
            'spy_product_alternatives' => $this->spyProductAlternatives instanceof AbstractTransfer ? $this->spyProductAlternatives->toArray(true, false) : $this->addValuesToCollection($this->spyProductAlternatives, true, false),
            'spy_product_alternatives' => $this->spyProductAlternatives instanceof AbstractTransfer ? $this->spyProductAlternatives->toArray(true, false) : $this->addValuesToCollection($this->spyProductAlternatives, true, false),
            'spy_product_quantities' => $this->spyProductQuantities instanceof AbstractTransfer ? $this->spyProductQuantities->toArray(true, false) : $this->addValuesToCollection($this->spyProductQuantities, true, false),
            'spy_price_products' => $this->spyPriceProducts instanceof AbstractTransfer ? $this->spyPriceProducts->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProducts, true, false),
            'spy_product_searches' => $this->spyProductSearches instanceof AbstractTransfer ? $this->spyProductSearches->toArray(true, false) : $this->addValuesToCollection($this->spyProductSearches, true, false),
            'spy_product_list_product_concretes' => $this->spyProductListProductConcretes instanceof AbstractTransfer ? $this->spyProductListProductConcretes->toArray(true, false) : $this->addValuesToCollection($this->spyProductListProductConcretes, true, false),
            'spy_product_image_sets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, false) : $this->addValuesToCollection($this->spyProductImageSets, true, false),
            'spy_product_bundles' => $this->spyProductBundles instanceof AbstractTransfer ? $this->spyProductBundles->toArray(true, false) : $this->addValuesToCollection($this->spyProductBundles, true, false),
            'spy_product_bundles' => $this->spyProductBundles instanceof AbstractTransfer ? $this->spyProductBundles->toArray(true, false) : $this->addValuesToCollection($this->spyProductBundles, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isQuantitySplittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, true) : $this->isQuantitySplittable,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'spyProductAbstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, true) : $this->spyProductAbstract,
            'spyProductValidities' => $this->spyProductValidities instanceof AbstractTransfer ? $this->spyProductValidities->toArray(true, true) : $this->addValuesToCollection($this->spyProductValidities, true, true),
            'spyProductMeasurementSalesUnits' => $this->spyProductMeasurementSalesUnits instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnits, true, true),
            'spyProductLocalizedAttributess' => $this->spyProductLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyProductLocalizedAttributess, true, true),
            'spyProductPackagingUnits' => $this->spyProductPackagingUnits instanceof AbstractTransfer ? $this->spyProductPackagingUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductPackagingUnits, true, true),
            'spyProductPackagingUnits' => $this->spyProductPackagingUnits instanceof AbstractTransfer ? $this->spyProductPackagingUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductPackagingUnits, true, true),
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, true),
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, true),
            'spyProductDiscontinueds' => $this->spyProductDiscontinueds instanceof AbstractTransfer ? $this->spyProductDiscontinueds->toArray(true, true) : $this->addValuesToCollection($this->spyProductDiscontinueds, true, true),
            'spyStockProducts' => $this->spyStockProducts instanceof AbstractTransfer ? $this->spyStockProducts->toArray(true, true) : $this->addValuesToCollection($this->spyStockProducts, true, true),
            'spyProductAlternatives' => $this->spyProductAlternatives instanceof AbstractTransfer ? $this->spyProductAlternatives->toArray(true, true) : $this->addValuesToCollection($this->spyProductAlternatives, true, true),
            'spyProductAlternatives' => $this->spyProductAlternatives instanceof AbstractTransfer ? $this->spyProductAlternatives->toArray(true, true) : $this->addValuesToCollection($this->spyProductAlternatives, true, true),
            'spyProductQuantities' => $this->spyProductQuantities instanceof AbstractTransfer ? $this->spyProductQuantities->toArray(true, true) : $this->addValuesToCollection($this->spyProductQuantities, true, true),
            'spyPriceProducts' => $this->spyPriceProducts instanceof AbstractTransfer ? $this->spyPriceProducts->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProducts, true, true),
            'spyProductSearches' => $this->spyProductSearches instanceof AbstractTransfer ? $this->spyProductSearches->toArray(true, true) : $this->addValuesToCollection($this->spyProductSearches, true, true),
            'spyProductListProductConcretes' => $this->spyProductListProductConcretes instanceof AbstractTransfer ? $this->spyProductListProductConcretes->toArray(true, true) : $this->addValuesToCollection($this->spyProductListProductConcretes, true, true),
            'spyProductImageSets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, true) : $this->addValuesToCollection($this->spyProductImageSets, true, true),
            'spyProductBundles' => $this->spyProductBundles instanceof AbstractTransfer ? $this->spyProductBundles->toArray(true, true) : $this->addValuesToCollection($this->spyProductBundles, true, true),
            'spyProductBundles' => $this->spyProductBundles instanceof AbstractTransfer ? $this->spyProductBundles->toArray(true, true) : $this->addValuesToCollection($this->spyProductBundles, true, true),
        ];
    }
}
