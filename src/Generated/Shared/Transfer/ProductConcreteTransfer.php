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
class ProductConcreteTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE = 'idProductConcrete';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const PRODUCT_ALTERNATIVE_CREATE_REQUESTS = 'productAlternativeCreateRequests';

    /**
     * @var string
     */
    public const PRODUCT_ALTERNATIVES = 'productAlternatives';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const PRODUCT_BUNDLE = 'productBundle';

    /**
     * @var string
     */
    public const STOCKS = 'stocks';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const TAX_RATE = 'taxRate';

    /**
     * @var string
     */
    public const DISCONTINUED_NOTES = 'discontinuedNotes';

    /**
     * @var string
     */
    public const PRODUCT_DISCONTINUED = 'productDiscontinued';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const BASE_MEASUREMENT_UNIT = 'baseMeasurementUnit';

    /**
     * @var string
     */
    public const STORES = 'stores';

    /**
     * @var string
     */
    public const IS_QUANTITY_SPLITTABLE = 'isQuantitySplittable';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\LocalizedAttributesTransfer[]
     */
    protected $localizedAttributes;

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var int|null
     */
    protected $idProductConcrete;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    protected $imageSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PriceProductTransfer[]
     */
    protected $prices;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductAlternativeCreateRequestTransfer[]
     */
    protected $productAlternativeCreateRequests;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductAlternativeTransfer[]
     */
    protected $productAlternatives;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var \Generated\Shared\Transfer\ProductBundleTransfer|null
     */
    protected $productBundle;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StockProductTransfer[]
     */
    protected $stocks;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var float|null
     */
    protected $taxRate;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer[]
     */
    protected $discontinuedNotes;

    /**
     * @var \Generated\Shared\Transfer\ProductDiscontinuedTransfer|null
     */
    protected $productDiscontinued;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null
     */
    protected $baseMeasurementUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StoreTransfer[]
     */
    protected $stores;

    /**
     * @var bool|null
     */
    protected $isQuantitySplittable;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'id_product_concrete' => 'idProductConcrete',
        'idProductConcrete' => 'idProductConcrete',
        'IdProductConcrete' => 'idProductConcrete',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
        'prices' => 'prices',
        'Prices' => 'prices',
        'product_alternative_create_requests' => 'productAlternativeCreateRequests',
        'productAlternativeCreateRequests' => 'productAlternativeCreateRequests',
        'ProductAlternativeCreateRequests' => 'productAlternativeCreateRequests',
        'product_alternatives' => 'productAlternatives',
        'productAlternatives' => 'productAlternatives',
        'ProductAlternatives' => 'productAlternatives',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'product_bundle' => 'productBundle',
        'productBundle' => 'productBundle',
        'ProductBundle' => 'productBundle',
        'stocks' => 'stocks',
        'Stocks' => 'stocks',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'discontinued_notes' => 'discontinuedNotes',
        'discontinuedNotes' => 'discontinuedNotes',
        'DiscontinuedNotes' => 'discontinuedNotes',
        'product_discontinued' => 'productDiscontinued',
        'productDiscontinued' => 'productDiscontinued',
        'ProductDiscontinued' => 'productDiscontinued',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'base_measurement_unit' => 'baseMeasurementUnit',
        'baseMeasurementUnit' => 'baseMeasurementUnit',
        'BaseMeasurementUnit' => 'baseMeasurementUnit',
        'stores' => 'stores',
        'Stores' => 'stores',
        'is_quantity_splittable' => 'isQuantitySplittable',
        'isQuantitySplittable' => 'isQuantitySplittable',
        'IsQuantitySplittable' => 'isQuantitySplittable',
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
        self::LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\LocalizedAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'int',
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
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductImageSetTransfer',
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
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\PriceProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ALTERNATIVE_CREATE_REQUESTS => [
            'type' => 'Generated\Shared\Transfer\ProductAlternativeCreateRequestTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_alternative_create_requests',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ALTERNATIVES => [
            'type' => 'Generated\Shared\Transfer\ProductAlternativeTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_alternatives',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'abstract_sku',
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
        self::PRODUCT_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\ProductBundleTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_bundle',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STOCKS => [
            'type' => 'Generated\Shared\Transfer\StockProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'stocks',
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
        self::TAX_RATE => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'tax_rate',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCONTINUED_NOTES => [
            'type' => 'Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'discontinued_notes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_DISCONTINUED => [
            'type' => 'Generated\Shared\Transfer\ProductDiscontinuedTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_discontinued',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BASE_MEASUREMENT_UNIT => [
            'type' => 'Generated\Shared\Transfer\ProductMeasurementUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'base_measurement_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORES => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_QUANTITY_SPLITTABLE => [
            'type' => 'bool',
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
    ];

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|ConfigurableBundleStorage|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBarcodeGui|ProductBarcode|ProductBundle|ProductCartConnector|ProductManagement|ProductPackagingUnit|ProductPageSearch|ProductQuantity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module ConfigurableBundlePage|QuickOrderPage|ConfigurableBundleStorage|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBarcodeGui|ProductBarcode|ProductBundle|ProductCartConnector|ProductManagement|ProductPackagingUnit|ProductPageSearch|ProductQuantity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|ConfigurableBundleStorage|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBarcodeGui|ProductBarcode|ProductBundle|ProductCartConnector|ProductManagement|ProductPackagingUnit|ProductPageSearch|ProductQuantity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module ConfigurableBundlePage|QuickOrderPage|ConfigurableBundleStorage|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBarcodeGui|ProductBarcode|ProductBundle|ProductCartConnector|ProductManagement|ProductPackagingUnit|ProductPageSearch|ProductQuantity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module ConfigurableBundlePage|QuickOrderPage|ConfigurableBundleStorage|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBarcodeGui|ProductBarcode|ProductBundle|ProductCartConnector|ProductManagement|ProductPackagingUnit|ProductPageSearch|ProductQuantity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module ConfigurableBundlePage|QuickOrderPage|AvailabilityNotification|ProductAttribute|ProductManagement|ProductPageSearch|ProductSearch|ProductStorage|Product|QuickOrder
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\LocalizedAttributesTransfer[] $localizedAttributes
     *
     * @return $this
     */
    public function setLocalizedAttributes(ArrayObject $localizedAttributes)
    {
        $this->localizedAttributes = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|AvailabilityNotification|ProductAttribute|ProductManagement|ProductPageSearch|ProductSearch|ProductStorage|Product|QuickOrder
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\LocalizedAttributesTransfer[]
     */
    public function getLocalizedAttributes()
    {
        return $this->localizedAttributes;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|AvailabilityNotification|ProductAttribute|ProductManagement|ProductPageSearch|ProductSearch|ProductStorage|Product|QuickOrder
     *
     * @param \Generated\Shared\Transfer\LocalizedAttributesTransfer $localizedAttributes
     *
     * @return $this
     */
    public function addLocalizedAttributes(LocalizedAttributesTransfer $localizedAttributes)
    {
        $this->localizedAttributes[] = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|AvailabilityNotification|ProductAttribute|ProductManagement|ProductPageSearch|ProductSearch|ProductStorage|Product|QuickOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module QuickOrderPage|AvailabilityNotification|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBundle|ProductCartConnector|ProductManagement|ProductMeasurementUnit|ProductPackagingUnit|ProductPageSearch|ProductStorage|Product|QuickOrder|SalesProductConnector|ShoppingList
     *
     * @param int|null $fkProductAbstract
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
     * @module QuickOrderPage|AvailabilityNotification|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBundle|ProductCartConnector|ProductManagement|ProductMeasurementUnit|ProductPackagingUnit|ProductPageSearch|ProductStorage|Product|QuickOrder|SalesProductConnector|ShoppingList
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module QuickOrderPage|AvailabilityNotification|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBundle|ProductCartConnector|ProductManagement|ProductMeasurementUnit|ProductPackagingUnit|ProductPageSearch|ProductStorage|Product|QuickOrder|SalesProductConnector|ShoppingList
     *
     * @param int|null $fkProductAbstract
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
     * @module QuickOrderPage|AvailabilityNotification|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBundle|ProductCartConnector|ProductManagement|ProductMeasurementUnit|ProductPackagingUnit|ProductPageSearch|ProductStorage|Product|QuickOrder|SalesProductConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module QuickOrderPage|AvailabilityNotification|PriceProduct|ProductAlternativeStorage|ProductAttributeGui|ProductBundle|ProductCartConnector|ProductManagement|ProductMeasurementUnit|ProductPackagingUnit|ProductPageSearch|ProductStorage|Product|QuickOrder|SalesProductConnector|ShoppingList
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
     * @module QuickOrderPage|Availability|PriceProduct|ProductAlternativeGui|ProductAttributeGui|ProductAttribute|ProductBarcode|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductDiscountConnector|ProductImage|ProductListSearch|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage|ProductPackagingUnit|ProductPageSearch|ProductSearch|ProductValidity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module QuickOrderPage|Availability|PriceProduct|ProductAlternativeGui|ProductAttributeGui|ProductAttribute|ProductBarcode|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductDiscountConnector|ProductImage|ProductListSearch|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage|ProductPackagingUnit|ProductPageSearch|ProductSearch|ProductValidity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
     *
     * @return int|null
     */
    public function getIdProductConcrete()
    {
        return $this->idProductConcrete;
    }

    /**
     * @module QuickOrderPage|Availability|PriceProduct|ProductAlternativeGui|ProductAttributeGui|ProductAttribute|ProductBarcode|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductDiscountConnector|ProductImage|ProductListSearch|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage|ProductPackagingUnit|ProductPageSearch|ProductSearch|ProductValidity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module QuickOrderPage|Availability|PriceProduct|ProductAlternativeGui|ProductAttributeGui|ProductAttribute|ProductBarcode|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductDiscountConnector|ProductImage|ProductListSearch|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage|ProductPackagingUnit|ProductPageSearch|ProductSearch|ProductValidity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module QuickOrderPage|Availability|PriceProduct|ProductAlternativeGui|ProductAttributeGui|ProductAttribute|ProductBarcode|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductDiscountConnector|ProductImage|ProductListSearch|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage|ProductPackagingUnit|ProductPageSearch|ProductSearch|ProductValidity|Product|QuickOrder|SalesProductConnector|ShoppingList|Stock
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
     * @module AvailabilityNotification|ProductImage|ProductManagement
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[] $imageSets
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
     * @module AvailabilityNotification|ProductImage|ProductManagement
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    public function getImageSets()
    {
        return $this->imageSets;
    }

    /**
     * @module AvailabilityNotification|ProductImage|ProductManagement
     *
     * @param \Generated\Shared\Transfer\ProductImageSetTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(ProductImageSetTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|ProductImage|ProductManagement
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
     * @module PriceProduct|ProductManagement
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PriceProductTransfer[] $prices
     *
     * @return $this
     */
    public function setPrices(ArrayObject $prices)
    {
        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ProductManagement
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PriceProductTransfer[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module PriceProduct|ProductManagement
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer $price
     *
     * @return $this
     */
    public function addPrice(PriceProductTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertCollectionPropertyIsSet(self::PRICES);

        return $this;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductAlternativeCreateRequestTransfer[] $productAlternativeCreateRequests
     *
     * @return $this
     */
    public function setProductAlternativeCreateRequests(ArrayObject $productAlternativeCreateRequests)
    {
        $this->productAlternativeCreateRequests = $productAlternativeCreateRequests;
        $this->modifiedProperties[self::PRODUCT_ALTERNATIVE_CREATE_REQUESTS] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductAlternativeCreateRequestTransfer[]
     */
    public function getProductAlternativeCreateRequests()
    {
        return $this->productAlternativeCreateRequests;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @param \Generated\Shared\Transfer\ProductAlternativeCreateRequestTransfer $productAlternativeCreateRequest
     *
     * @return $this
     */
    public function addProductAlternativeCreateRequest(ProductAlternativeCreateRequestTransfer $productAlternativeCreateRequest)
    {
        $this->productAlternativeCreateRequests[] = $productAlternativeCreateRequest;
        $this->modifiedProperties[self::PRODUCT_ALTERNATIVE_CREATE_REQUESTS] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAlternativeCreateRequests()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_ALTERNATIVE_CREATE_REQUESTS);

        return $this;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductAlternativeTransfer[] $productAlternatives
     *
     * @return $this
     */
    public function setProductAlternatives(ArrayObject $productAlternatives)
    {
        $this->productAlternatives = $productAlternatives;
        $this->modifiedProperties[self::PRODUCT_ALTERNATIVES] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductAlternativeTransfer[]
     */
    public function getProductAlternatives()
    {
        return $this->productAlternatives;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @param \Generated\Shared\Transfer\ProductAlternativeTransfer $productAlternative
     *
     * @return $this
     */
    public function addProductAlternative(ProductAlternativeTransfer $productAlternative)
    {
        $this->productAlternatives[] = $productAlternative;
        $this->modifiedProperties[self::PRODUCT_ALTERNATIVES] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeGui|ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAlternatives()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_ALTERNATIVES);

        return $this;
    }

    /**
     * @module ProductAlternativeStorage|ProductBundle|ProductCartConnector|ProductManagement|Product
     *
     * @param string|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeStorage|ProductBundle|ProductCartConnector|ProductManagement|Product
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module ProductAlternativeStorage|ProductBundle|ProductCartConnector|ProductManagement|Product
     *
     * @param string|null $abstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractSkuOrFail($abstractSku)
    {
        if ($abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->setAbstractSku($abstractSku);
    }

    /**
     * @module ProductAlternativeStorage|ProductBundle|ProductCartConnector|ProductManagement|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module ProductAlternativeStorage|ProductBundle|ProductCartConnector|ProductManagement|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module ProductAttribute|ProductBundle|ProductCartConnector|ProductManagement|Product
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
     * @module ProductAttribute|ProductBundle|ProductCartConnector|ProductManagement|Product
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module ProductAttribute|ProductBundle|ProductCartConnector|ProductManagement|Product
     *
     * @param mixed $attribute
     *
     * @return $this
     */
    public function addAttribute($attribute)
    {
        $this->attributes[] = $attribute;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductAttribute|ProductBundle|ProductCartConnector|ProductManagement|Product
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
     * @module ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @param \Generated\Shared\Transfer\ProductBundleTransfer|null $productBundle
     *
     * @return $this
     */
    public function setProductBundle(ProductBundleTransfer $productBundle = null)
    {
        $this->productBundle = $productBundle;
        $this->modifiedProperties[self::PRODUCT_BUNDLE] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @return \Generated\Shared\Transfer\ProductBundleTransfer|null
     */
    public function getProductBundle()
    {
        return $this->productBundle;
    }

    /**
     * @module ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @param \Generated\Shared\Transfer\ProductBundleTransfer $productBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductBundleOrFail(ProductBundleTransfer $productBundle)
    {
        return $this->setProductBundle($productBundle);
    }

    /**
     * @module ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductBundleTransfer
     */
    public function getProductBundleOrFail()
    {
        if ($this->productBundle === null) {
            $this->throwNullValueException(static::PRODUCT_BUNDLE);
        }

        return $this->productBundle;
    }

    /**
     * @module ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductBundle()
    {
        $this->assertPropertyIsSet(self::PRODUCT_BUNDLE);

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement|Stock
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StockProductTransfer[] $stocks
     *
     * @return $this
     */
    public function setStocks(ArrayObject $stocks)
    {
        $this->stocks = $stocks;
        $this->modifiedProperties[self::STOCKS] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement|Stock
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StockProductTransfer[]
     */
    public function getStocks()
    {
        return $this->stocks;
    }

    /**
     * @module ProductBundle|ProductManagement|Stock
     *
     * @param \Generated\Shared\Transfer\StockProductTransfer $stock
     *
     * @return $this
     */
    public function addStock(StockProductTransfer $stock)
    {
        $this->stocks[] = $stock;
        $this->modifiedProperties[self::STOCKS] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStocks()
    {
        $this->assertCollectionPropertyIsSet(self::STOCKS);

        return $this;
    }

    /**
     * @module ProductBundle|ProductCartConnector|ProductManagement|ProductPageSearch|Product
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
     * @module ProductBundle|ProductCartConnector|ProductManagement|ProductPageSearch|Product
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ProductBundle|ProductCartConnector|ProductManagement|ProductPageSearch|Product
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
     * @module ProductBundle|ProductCartConnector|ProductManagement|ProductPageSearch|Product
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
     * @module ProductBundle|ProductCartConnector|ProductManagement|ProductPageSearch|Product
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
     * @module ProductCartConnector
     *
     * @param float|null $taxRate
     *
     * @return $this
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        $this->modifiedProperties[self::TAX_RATE] = true;

        return $this;
    }

    /**
     * @module ProductCartConnector
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module ProductCartConnector
     *
     * @param float|null $taxRate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxRateOrFail($taxRate)
    {
        if ($taxRate === null) {
            $this->throwNullValueException(static::TAX_RATE);
        }

        return $this->setTaxRate($taxRate);
    }

    /**
     * @module ProductCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getTaxRateOrFail()
    {
        if ($this->taxRate === null) {
            $this->throwNullValueException(static::TAX_RATE);
        }

        return $this->taxRate;
    }

    /**
     * @module ProductCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxRate()
    {
        $this->assertPropertyIsSet(self::TAX_RATE);

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer[] $discontinuedNotes
     *
     * @return $this
     */
    public function setDiscontinuedNotes(ArrayObject $discontinuedNotes)
    {
        $this->discontinuedNotes = $discontinuedNotes;
        $this->modifiedProperties[self::DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer[]
     */
    public function getDiscontinuedNotes()
    {
        return $this->discontinuedNotes;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param \Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer $discontinuedNote
     *
     * @return $this
     */
    public function addDiscontinuedNote(ProductDiscontinuedNoteTransfer $discontinuedNote)
    {
        $this->discontinuedNotes[] = $discontinuedNote;
        $this->modifiedProperties[self::DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscontinuedNotes()
    {
        $this->assertCollectionPropertyIsSet(self::DISCONTINUED_NOTES);

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param \Generated\Shared\Transfer\ProductDiscontinuedTransfer|null $productDiscontinued
     *
     * @return $this
     */
    public function setProductDiscontinued(ProductDiscontinuedTransfer $productDiscontinued = null)
    {
        $this->productDiscontinued = $productDiscontinued;
        $this->modifiedProperties[self::PRODUCT_DISCONTINUED] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @return \Generated\Shared\Transfer\ProductDiscontinuedTransfer|null
     */
    public function getProductDiscontinued()
    {
        return $this->productDiscontinued;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param \Generated\Shared\Transfer\ProductDiscontinuedTransfer $productDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductDiscontinuedOrFail(ProductDiscontinuedTransfer $productDiscontinued)
    {
        return $this->setProductDiscontinued($productDiscontinued);
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductDiscontinuedTransfer
     */
    public function getProductDiscontinuedOrFail()
    {
        if ($this->productDiscontinued === null) {
            $this->throwNullValueException(static::PRODUCT_DISCONTINUED);
        }

        return $this->productDiscontinued;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductDiscontinued()
    {
        $this->assertPropertyIsSet(self::PRODUCT_DISCONTINUED);

        return $this;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @param string|null $validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        $this->modifiedProperties[self::VALID_FROM] = true;

        return $this;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @param string|null $validFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidFromOrFail($validFrom)
    {
        if ($validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->setValidFrom($validFrom);
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidFromOrFail()
    {
        if ($this->validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->validFrom;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidFrom()
    {
        $this->assertPropertyIsSet(self::VALID_FROM);

        return $this;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @param string|null $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail($validTo)
    {
        if ($validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->setValidTo($validTo);
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail()
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module ProductManagement|ProductValidity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidTo()
    {
        $this->assertPropertyIsSet(self::VALID_TO);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null $baseMeasurementUnit
     *
     * @return $this
     */
    public function setBaseMeasurementUnit(ProductMeasurementUnitTransfer $baseMeasurementUnit = null)
    {
        $this->baseMeasurementUnit = $baseMeasurementUnit;
        $this->modifiedProperties[self::BASE_MEASUREMENT_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null
     */
    public function getBaseMeasurementUnit()
    {
        return $this->baseMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementUnitTransfer $baseMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBaseMeasurementUnitOrFail(ProductMeasurementUnitTransfer $baseMeasurementUnit)
    {
        return $this->setBaseMeasurementUnit($baseMeasurementUnit);
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementUnitTransfer
     */
    public function getBaseMeasurementUnitOrFail()
    {
        if ($this->baseMeasurementUnit === null) {
            $this->throwNullValueException(static::BASE_MEASUREMENT_UNIT);
        }

        return $this->baseMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBaseMeasurementUnit()
    {
        $this->assertPropertyIsSet(self::BASE_MEASUREMENT_UNIT);

        return $this;
    }

    /**
     * @module ProductPageSearch|Product
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StoreTransfer[] $stores
     *
     * @return $this
     */
    public function setStores(ArrayObject $stores)
    {
        $this->stores = $stores;
        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|Product
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StoreTransfer[]
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @module ProductPageSearch|Product
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $stores
     *
     * @return $this
     */
    public function addStores(StoreTransfer $stores)
    {
        $this->stores[] = $stores;
        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStores()
    {
        $this->assertCollectionPropertyIsSet(self::STORES);

        return $this;
    }

    /**
     * @module SalesQuantity
     *
     * @param bool|null $isQuantitySplittable
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
     * @module SalesQuantity
     *
     * @return bool|null
     */
    public function getIsQuantitySplittable()
    {
        return $this->isQuantitySplittable;
    }

    /**
     * @module SalesQuantity
     *
     * @param bool|null $isQuantitySplittable
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
     * @module SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsQuantitySplittableOrFail()
    {
        if ($this->isQuantitySplittable === null) {
            $this->throwNullValueException(static::IS_QUANTITY_SPLITTABLE);
        }

        return $this->isQuantitySplittable;
    }

    /**
     * @module SalesQuantity
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
                case 'fkProductAbstract':
                case 'idProductConcrete':
                case 'abstractSku':
                case 'attributes':
                case 'isActive':
                case 'taxRate':
                case 'validFrom':
                case 'validTo':
                case 'isQuantitySplittable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productBundle':
                case 'productDiscontinued':
                case 'baseMeasurementUnit':
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
                case 'localizedAttributes':
                case 'imageSets':
                case 'prices':
                case 'productAlternativeCreateRequests':
                case 'productAlternatives':
                case 'stocks':
                case 'discontinuedNotes':
                case 'stores':
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
                case 'fkProductAbstract':
                case 'idProductConcrete':
                case 'abstractSku':
                case 'attributes':
                case 'isActive':
                case 'taxRate':
                case 'validFrom':
                case 'validTo':
                case 'isQuantitySplittable':
                    $values[$arrayKey] = $value;

                    break;
                case 'productBundle':
                case 'productDiscontinued':
                case 'baseMeasurementUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'localizedAttributes':
                case 'imageSets':
                case 'prices':
                case 'productAlternativeCreateRequests':
                case 'productAlternatives':
                case 'stocks':
                case 'discontinuedNotes':
                case 'stores':
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
                case 'fkProductAbstract':
                case 'idProductConcrete':
                case 'abstractSku':
                case 'attributes':
                case 'isActive':
                case 'taxRate':
                case 'validFrom':
                case 'validTo':
                case 'isQuantitySplittable':
                    $values[$arrayKey] = $value;

                    break;
                case 'productBundle':
                case 'productDiscontinued':
                case 'baseMeasurementUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'localizedAttributes':
                case 'imageSets':
                case 'prices':
                case 'productAlternativeCreateRequests':
                case 'productAlternatives':
                case 'stocks':
                case 'discontinuedNotes':
                case 'stores':
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
        $this->localizedAttributes = $this->localizedAttributes ?: new ArrayObject();
        $this->imageSets = $this->imageSets ?: new ArrayObject();
        $this->prices = $this->prices ?: new ArrayObject();
        $this->productAlternativeCreateRequests = $this->productAlternativeCreateRequests ?: new ArrayObject();
        $this->productAlternatives = $this->productAlternatives ?: new ArrayObject();
        $this->stocks = $this->stocks ?: new ArrayObject();
        $this->discontinuedNotes = $this->discontinuedNotes ?: new ArrayObject();
        $this->stores = $this->stores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'fkProductAbstract' => $this->fkProductAbstract,
            'idProductConcrete' => $this->idProductConcrete,
            'abstractSku' => $this->abstractSku,
            'attributes' => $this->attributes,
            'isActive' => $this->isActive,
            'taxRate' => $this->taxRate,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'isQuantitySplittable' => $this->isQuantitySplittable,
            'productBundle' => $this->productBundle,
            'productDiscontinued' => $this->productDiscontinued,
            'baseMeasurementUnit' => $this->baseMeasurementUnit,
            'localizedAttributes' => $this->localizedAttributes,
            'imageSets' => $this->imageSets,
            'prices' => $this->prices,
            'productAlternativeCreateRequests' => $this->productAlternativeCreateRequests,
            'productAlternatives' => $this->productAlternatives,
            'stocks' => $this->stocks,
            'discontinuedNotes' => $this->discontinuedNotes,
            'stores' => $this->stores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'fk_product_abstract' => $this->fkProductAbstract,
            'id_product_concrete' => $this->idProductConcrete,
            'abstract_sku' => $this->abstractSku,
            'attributes' => $this->attributes,
            'is_active' => $this->isActive,
            'tax_rate' => $this->taxRate,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'is_quantity_splittable' => $this->isQuantitySplittable,
            'product_bundle' => $this->productBundle,
            'product_discontinued' => $this->productDiscontinued,
            'base_measurement_unit' => $this->baseMeasurementUnit,
            'localized_attributes' => $this->localizedAttributes,
            'image_sets' => $this->imageSets,
            'prices' => $this->prices,
            'product_alternative_create_requests' => $this->productAlternativeCreateRequests,
            'product_alternatives' => $this->productAlternatives,
            'stocks' => $this->stocks,
            'discontinued_notes' => $this->discontinuedNotes,
            'stores' => $this->stores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'id_product_concrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, false) : $this->idProductConcrete,
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'is_quantity_splittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, false) : $this->isQuantitySplittable,
            'product_bundle' => $this->productBundle instanceof AbstractTransfer ? $this->productBundle->toArray(true, false) : $this->productBundle,
            'product_discontinued' => $this->productDiscontinued instanceof AbstractTransfer ? $this->productDiscontinued->toArray(true, false) : $this->productDiscontinued,
            'base_measurement_unit' => $this->baseMeasurementUnit instanceof AbstractTransfer ? $this->baseMeasurementUnit->toArray(true, false) : $this->baseMeasurementUnit,
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributes, true, false),
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
            'product_alternative_create_requests' => $this->productAlternativeCreateRequests instanceof AbstractTransfer ? $this->productAlternativeCreateRequests->toArray(true, false) : $this->addValuesToCollection($this->productAlternativeCreateRequests, true, false),
            'product_alternatives' => $this->productAlternatives instanceof AbstractTransfer ? $this->productAlternatives->toArray(true, false) : $this->addValuesToCollection($this->productAlternatives, true, false),
            'stocks' => $this->stocks instanceof AbstractTransfer ? $this->stocks->toArray(true, false) : $this->addValuesToCollection($this->stocks, true, false),
            'discontinued_notes' => $this->discontinuedNotes instanceof AbstractTransfer ? $this->discontinuedNotes->toArray(true, false) : $this->addValuesToCollection($this->discontinuedNotes, true, false),
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, false) : $this->addValuesToCollection($this->stores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'idProductConcrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, true) : $this->idProductConcrete,
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'isQuantitySplittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, true) : $this->isQuantitySplittable,
            'productBundle' => $this->productBundle instanceof AbstractTransfer ? $this->productBundle->toArray(true, true) : $this->productBundle,
            'productDiscontinued' => $this->productDiscontinued instanceof AbstractTransfer ? $this->productDiscontinued->toArray(true, true) : $this->productDiscontinued,
            'baseMeasurementUnit' => $this->baseMeasurementUnit instanceof AbstractTransfer ? $this->baseMeasurementUnit->toArray(true, true) : $this->baseMeasurementUnit,
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributes, true, true),
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
            'productAlternativeCreateRequests' => $this->productAlternativeCreateRequests instanceof AbstractTransfer ? $this->productAlternativeCreateRequests->toArray(true, true) : $this->addValuesToCollection($this->productAlternativeCreateRequests, true, true),
            'productAlternatives' => $this->productAlternatives instanceof AbstractTransfer ? $this->productAlternatives->toArray(true, true) : $this->addValuesToCollection($this->productAlternatives, true, true),
            'stocks' => $this->stocks instanceof AbstractTransfer ? $this->stocks->toArray(true, true) : $this->addValuesToCollection($this->stocks, true, true),
            'discontinuedNotes' => $this->discontinuedNotes instanceof AbstractTransfer ? $this->discontinuedNotes->toArray(true, true) : $this->addValuesToCollection($this->discontinuedNotes, true, true),
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, true) : $this->addValuesToCollection($this->stores, true, true),
        ];
    }
}
