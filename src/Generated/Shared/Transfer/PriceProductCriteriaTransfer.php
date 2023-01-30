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
class PriceProductCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRICE_DIMENSION = 'priceDimension';

    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const WITH_ALL_MERCHANT_PRICES = 'withAllMerchantPrices';

    /**
     * @var string
     */
    public const ID_CURRENCY = 'idCurrency';

    /**
     * @var string
     */
    public const ID_STORE = 'idStore';

    /**
     * @var string
     */
    public const PRICE_TYPE = 'priceType';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE = 'idProductConcrete';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const PRICE_PRODUCT_STORE_IDS = 'priceProductStoreIds';

    /**
     * @var string
     */
    public const ONLY_CONCRETE_PRICES = 'onlyConcretePrices';

    /**
     * @var \Generated\Shared\Transfer\PriceProductDimensionTransfer|null
     */
    protected $priceDimension;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var bool|null
     */
    protected $withAllMerchantPrices;

    /**
     * @var int|null
     */
    protected $idCurrency;

    /**
     * @var int|null
     */
    protected $idStore;

    /**
     * @var string|null
     */
    protected $priceType;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var int|null
     */
    protected $idProductConcrete;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int[]
     */
    protected $priceProductStoreIds = [];

    /**
     * @var bool|null
     */
    protected $onlyConcretePrices;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'price_dimension' => 'priceDimension',
        'priceDimension' => 'priceDimension',
        'PriceDimension' => 'priceDimension',
        'quote' => 'quote',
        'Quote' => 'quote',
        'with_all_merchant_prices' => 'withAllMerchantPrices',
        'withAllMerchantPrices' => 'withAllMerchantPrices',
        'WithAllMerchantPrices' => 'withAllMerchantPrices',
        'id_currency' => 'idCurrency',
        'idCurrency' => 'idCurrency',
        'IdCurrency' => 'idCurrency',
        'id_store' => 'idStore',
        'idStore' => 'idStore',
        'IdStore' => 'idStore',
        'price_type' => 'priceType',
        'priceType' => 'priceType',
        'PriceType' => 'priceType',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'id_product_concrete' => 'idProductConcrete',
        'idProductConcrete' => 'idProductConcrete',
        'IdProductConcrete' => 'idProductConcrete',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'sku' => 'sku',
        'Sku' => 'sku',
        'price_product_store_ids' => 'priceProductStoreIds',
        'priceProductStoreIds' => 'priceProductStoreIds',
        'PriceProductStoreIds' => 'priceProductStoreIds',
        'only_concrete_prices' => 'onlyConcretePrices',
        'onlyConcretePrices' => 'onlyConcretePrices',
        'OnlyConcretePrices' => 'onlyConcretePrices',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRICE_DIMENSION => [
            'type' => 'Generated\Shared\Transfer\PriceProductDimensionTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_dimension',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_ALL_MERCHANT_PRICES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_all_merchant_prices',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CURRENCY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_STORE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_type',
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
        self::PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_mode',
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
        self::PRICE_PRODUCT_STORE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'price_product_store_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ONLY_CONCRETE_PRICES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'only_concrete_prices',
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
     * @module PriceProductMerchantRelationship|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @param \Generated\Shared\Transfer\PriceProductDimensionTransfer|null $priceDimension
     *
     * @return $this
     */
    public function setPriceDimension(PriceProductDimensionTransfer $priceDimension = null)
    {
        $this->priceDimension = $priceDimension;
        $this->modifiedProperties[self::PRICE_DIMENSION] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @return \Generated\Shared\Transfer\PriceProductDimensionTransfer|null
     */
    public function getPriceDimension()
    {
        return $this->priceDimension;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @param \Generated\Shared\Transfer\PriceProductDimensionTransfer $priceDimension
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceDimensionOrFail(PriceProductDimensionTransfer $priceDimension)
    {
        return $this->setPriceDimension($priceDimension);
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PriceProductDimensionTransfer
     */
    public function getPriceDimensionOrFail()
    {
        if ($this->priceDimension === null) {
            $this->throwNullValueException(static::PRICE_DIMENSION);
        }

        return $this->priceDimension;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceDimension()
    {
        $this->assertPropertyIsSet(self::PRICE_DIMENSION);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quote
     *
     * @return $this
     */
    public function setQuote(QuoteTransfer $quote = null)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail(QuoteTransfer $quote)
    {
        return $this->setQuote($quote);
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuote()
    {
        $this->assertPropertyIsSet(self::QUOTE);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @param bool|null $withAllMerchantPrices
     *
     * @return $this
     */
    public function setWithAllMerchantPrices($withAllMerchantPrices)
    {
        $this->withAllMerchantPrices = $withAllMerchantPrices;
        $this->modifiedProperties[self::WITH_ALL_MERCHANT_PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @return bool|null
     */
    public function getWithAllMerchantPrices()
    {
        return $this->withAllMerchantPrices;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @param bool|null $withAllMerchantPrices
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithAllMerchantPricesOrFail($withAllMerchantPrices)
    {
        if ($withAllMerchantPrices === null) {
            $this->throwNullValueException(static::WITH_ALL_MERCHANT_PRICES);
        }

        return $this->setWithAllMerchantPrices($withAllMerchantPrices);
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithAllMerchantPricesOrFail()
    {
        if ($this->withAllMerchantPrices === null) {
            $this->throwNullValueException(static::WITH_ALL_MERCHANT_PRICES);
        }

        return $this->withAllMerchantPrices;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithAllMerchantPrices()
    {
        $this->assertPropertyIsSet(self::WITH_ALL_MERCHANT_PRICES);

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @param int|null $idCurrency
     *
     * @return $this
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;
        $this->modifiedProperties[self::ID_CURRENCY] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @return int|null
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @param int|null $idCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCurrencyOrFail($idCurrency)
    {
        if ($idCurrency === null) {
            $this->throwNullValueException(static::ID_CURRENCY);
        }

        return $this->setIdCurrency($idCurrency);
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCurrencyOrFail()
    {
        if ($this->idCurrency === null) {
            $this->throwNullValueException(static::ID_CURRENCY);
        }

        return $this->idCurrency;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCurrency()
    {
        $this->assertPropertyIsSet(self::ID_CURRENCY);

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @param int|null $idStore
     *
     * @return $this
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;
        $this->modifiedProperties[self::ID_STORE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @return int|null
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @param int|null $idStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStoreOrFail($idStore)
    {
        if ($idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->setIdStore($idStore);
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStoreOrFail()
    {
        if ($this->idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->idStore;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStore()
    {
        $this->assertPropertyIsSet(self::ID_STORE);

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @param string|null $priceType
     *
     * @return $this
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        $this->modifiedProperties[self::PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @return string|null
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @param string|null $priceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceTypeOrFail($priceType)
    {
        if ($priceType === null) {
            $this->throwNullValueException(static::PRICE_TYPE);
        }

        return $this->setPriceType($priceType);
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceTypeOrFail()
    {
        if ($this->priceType === null) {
            $this->throwNullValueException(static::PRICE_TYPE);
        }

        return $this->priceType;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceType()
    {
        $this->assertPropertyIsSet(self::PRICE_TYPE);

        return $this;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
     *
     * @return int|null
     */
    public function getIdProductConcrete()
    {
        return $this->idProductConcrete;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
     *
     * @param string|null $priceMode
     *
     * @return $this
     */
    public function setPriceMode($priceMode)
    {
        $this->priceMode = $priceMode;
        $this->modifiedProperties[self::PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module PriceProduct
     *
     * @param string|null $priceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceModeOrFail($priceMode)
    {
        if ($priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->setPriceMode($priceMode);
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceModeOrFail()
    {
        if ($this->priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->priceMode;
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceMode()
    {
        $this->assertPropertyIsSet(self::PRICE_MODE);

        return $this;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
     *
     * @param int[]|null $priceProductStoreIds
     *
     * @return $this
     */
    public function setPriceProductStoreIds(array $priceProductStoreIds = null)
    {
        if ($priceProductStoreIds === null) {
            $priceProductStoreIds = [];
        }

        $this->priceProductStoreIds = $priceProductStoreIds;
        $this->modifiedProperties[self::PRICE_PRODUCT_STORE_IDS] = true;

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @return int[]
     */
    public function getPriceProductStoreIds()
    {
        return $this->priceProductStoreIds;
    }

    /**
     * @module PriceProduct
     *
     * @param int $idPriceProductStore
     *
     * @return $this
     */
    public function addIdPriceProductStore($idPriceProductStore)
    {
        $this->priceProductStoreIds[] = $idPriceProductStore;
        $this->modifiedProperties[self::PRICE_PRODUCT_STORE_IDS] = true;

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProductStoreIds()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT_STORE_IDS);

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @param bool|null $onlyConcretePrices
     *
     * @return $this
     */
    public function setOnlyConcretePrices($onlyConcretePrices)
    {
        $this->onlyConcretePrices = $onlyConcretePrices;
        $this->modifiedProperties[self::ONLY_CONCRETE_PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @return bool|null
     */
    public function getOnlyConcretePrices()
    {
        return $this->onlyConcretePrices;
    }

    /**
     * @module PriceProduct
     *
     * @param bool|null $onlyConcretePrices
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOnlyConcretePricesOrFail($onlyConcretePrices)
    {
        if ($onlyConcretePrices === null) {
            $this->throwNullValueException(static::ONLY_CONCRETE_PRICES);
        }

        return $this->setOnlyConcretePrices($onlyConcretePrices);
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getOnlyConcretePricesOrFail()
    {
        if ($this->onlyConcretePrices === null) {
            $this->throwNullValueException(static::ONLY_CONCRETE_PRICES);
        }

        return $this->onlyConcretePrices;
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOnlyConcretePrices()
    {
        $this->assertPropertyIsSet(self::ONLY_CONCRETE_PRICES);

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
                case 'withAllMerchantPrices':
                case 'idCurrency':
                case 'idStore':
                case 'priceType':
                case 'idProductAbstract':
                case 'idProductConcrete':
                case 'priceMode':
                case 'quantity':
                case 'sku':
                case 'priceProductStoreIds':
                case 'onlyConcretePrices':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'priceDimension':
                case 'quote':
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
                case 'withAllMerchantPrices':
                case 'idCurrency':
                case 'idStore':
                case 'priceType':
                case 'idProductAbstract':
                case 'idProductConcrete':
                case 'priceMode':
                case 'quantity':
                case 'sku':
                case 'priceProductStoreIds':
                case 'onlyConcretePrices':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceDimension':
                case 'quote':
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
                case 'withAllMerchantPrices':
                case 'idCurrency':
                case 'idStore':
                case 'priceType':
                case 'idProductAbstract':
                case 'idProductConcrete':
                case 'priceMode':
                case 'quantity':
                case 'sku':
                case 'priceProductStoreIds':
                case 'onlyConcretePrices':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceDimension':
                case 'quote':
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
            'withAllMerchantPrices' => $this->withAllMerchantPrices,
            'idCurrency' => $this->idCurrency,
            'idStore' => $this->idStore,
            'priceType' => $this->priceType,
            'idProductAbstract' => $this->idProductAbstract,
            'idProductConcrete' => $this->idProductConcrete,
            'priceMode' => $this->priceMode,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'priceProductStoreIds' => $this->priceProductStoreIds,
            'onlyConcretePrices' => $this->onlyConcretePrices,
            'priceDimension' => $this->priceDimension,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'with_all_merchant_prices' => $this->withAllMerchantPrices,
            'id_currency' => $this->idCurrency,
            'id_store' => $this->idStore,
            'price_type' => $this->priceType,
            'id_product_abstract' => $this->idProductAbstract,
            'id_product_concrete' => $this->idProductConcrete,
            'price_mode' => $this->priceMode,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'price_product_store_ids' => $this->priceProductStoreIds,
            'only_concrete_prices' => $this->onlyConcretePrices,
            'price_dimension' => $this->priceDimension,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'with_all_merchant_prices' => $this->withAllMerchantPrices instanceof AbstractTransfer ? $this->withAllMerchantPrices->toArray(true, false) : $this->withAllMerchantPrices,
            'id_currency' => $this->idCurrency instanceof AbstractTransfer ? $this->idCurrency->toArray(true, false) : $this->idCurrency,
            'id_store' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, false) : $this->idStore,
            'price_type' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, false) : $this->priceType,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'id_product_concrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, false) : $this->idProductConcrete,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'price_product_store_ids' => $this->priceProductStoreIds instanceof AbstractTransfer ? $this->priceProductStoreIds->toArray(true, false) : $this->priceProductStoreIds,
            'only_concrete_prices' => $this->onlyConcretePrices instanceof AbstractTransfer ? $this->onlyConcretePrices->toArray(true, false) : $this->onlyConcretePrices,
            'price_dimension' => $this->priceDimension instanceof AbstractTransfer ? $this->priceDimension->toArray(true, false) : $this->priceDimension,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'withAllMerchantPrices' => $this->withAllMerchantPrices instanceof AbstractTransfer ? $this->withAllMerchantPrices->toArray(true, true) : $this->withAllMerchantPrices,
            'idCurrency' => $this->idCurrency instanceof AbstractTransfer ? $this->idCurrency->toArray(true, true) : $this->idCurrency,
            'idStore' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, true) : $this->idStore,
            'priceType' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, true) : $this->priceType,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'idProductConcrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, true) : $this->idProductConcrete,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'priceProductStoreIds' => $this->priceProductStoreIds instanceof AbstractTransfer ? $this->priceProductStoreIds->toArray(true, true) : $this->priceProductStoreIds,
            'onlyConcretePrices' => $this->onlyConcretePrices instanceof AbstractTransfer ? $this->onlyConcretePrices->toArray(true, true) : $this->onlyConcretePrices,
            'priceDimension' => $this->priceDimension instanceof AbstractTransfer ? $this->priceDimension->toArray(true, true) : $this->priceDimension,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
        ];
    }
}
