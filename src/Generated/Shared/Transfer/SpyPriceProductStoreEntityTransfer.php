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
class SpyPriceProductStoreEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_STORE = 'idPriceProductStore';

    /**
     * @var string
     */
    public const FK_CURRENCY = 'fkCurrency';

    /**
     * @var string
     */
    public const FK_PRICE_PRODUCT = 'fkPriceProduct';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const GROSS_PRICE = 'grossPrice';

    /**
     * @var string
     */
    public const NET_PRICE = 'netPrice';

    /**
     * @var string
     */
    public const PRICE_DATA = 'priceData';

    /**
     * @var string
     */
    public const PRICE_DATA_CHECKSUM = 'priceDataChecksum';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const PRICE_PRODUCT = 'priceProduct';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS = 'spyPriceProductMerchantRelationships';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_DEFAULTS = 'spyPriceProductDefaults';

    /**
     * @var string|null
     */
    protected $idPriceProductStore;

    /**
     * @var integer|null
     */
    protected $fkCurrency;

    /**
     * @var integer|null
     */
    protected $fkPriceProduct;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var integer|null
     */
    protected $grossPrice;

    /**
     * @var integer|null
     */
    protected $netPrice;

    /**
     * @var string|null
     */
    protected $priceData;

    /**
     * @var string|null
     */
    protected $priceDataChecksum;

    /**
     * @var \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    protected $currency;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\SpyPriceProductEntityTransfer|null
     */
    protected $priceProduct;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[]
     */
    protected $spyPriceProductMerchantRelationships;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductDefaultEntityTransfer[]
     */
    protected $spyPriceProductDefaults;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_price_product_store' => 'idPriceProductStore',
        'idPriceProductStore' => 'idPriceProductStore',
        'IdPriceProductStore' => 'idPriceProductStore',
        'fk_currency' => 'fkCurrency',
        'fkCurrency' => 'fkCurrency',
        'FkCurrency' => 'fkCurrency',
        'fk_price_product' => 'fkPriceProduct',
        'fkPriceProduct' => 'fkPriceProduct',
        'FkPriceProduct' => 'fkPriceProduct',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'gross_price' => 'grossPrice',
        'grossPrice' => 'grossPrice',
        'GrossPrice' => 'grossPrice',
        'net_price' => 'netPrice',
        'netPrice' => 'netPrice',
        'NetPrice' => 'netPrice',
        'price_data' => 'priceData',
        'priceData' => 'priceData',
        'PriceData' => 'priceData',
        'price_data_checksum' => 'priceDataChecksum',
        'priceDataChecksum' => 'priceDataChecksum',
        'PriceDataChecksum' => 'priceDataChecksum',
        'currency' => 'currency',
        'Currency' => 'currency',
        'store' => 'store',
        'Store' => 'store',
        'price_product' => 'priceProduct',
        'priceProduct' => 'priceProduct',
        'PriceProduct' => 'priceProduct',
        'spy_price_product_merchant_relationships' => 'spyPriceProductMerchantRelationships',
        'spyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'SpyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'spy_price_product_defaults' => 'spyPriceProductDefaults',
        'spyPriceProductDefaults' => 'spyPriceProductDefaults',
        'SpyPriceProductDefaults' => 'spyPriceProductDefaults',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRICE_PRODUCT_STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CURRENCY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRICE_PRODUCT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_price_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROSS_PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NET_PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'net_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_DATA_CHECKSUM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_data_checksum',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\SpyCurrencyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_product',
            'is_collection' => false,
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
        self::SPY_PRICE_PRODUCT_DEFAULTS => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductDefaultEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_defaults',
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
    public static $entityNamespace = 'Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore';


    /**
     * @module 
     *
     * @param string|null $idPriceProductStore
     *
     * @return $this
     */
    public function setIdPriceProductStore($idPriceProductStore)
    {
        $this->idPriceProductStore = $idPriceProductStore;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdPriceProductStore()
    {
        return $this->idPriceProductStore;
    }

    /**
     * @module 
     *
     * @param string|null $idPriceProductStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductStoreOrFail($idPriceProductStore)
    {
        if ($idPriceProductStore === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_STORE);
        }

        return $this->setIdPriceProductStore($idPriceProductStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdPriceProductStoreOrFail()
    {
        if ($this->idPriceProductStore === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_STORE);
        }

        return $this->idPriceProductStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductStore()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @return $this
     */
    public function setFkCurrency($fkCurrency)
    {
        $this->fkCurrency = $fkCurrency;
        $this->modifiedProperties[self::FK_CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCurrency()
    {
        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCurrencyOrFail($fkCurrency)
    {
        if ($fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->setFkCurrency($fkCurrency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCurrencyOrFail()
    {
        if ($this->fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCurrency()
    {
        $this->assertPropertyIsSet(self::FK_CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPriceProduct
     *
     * @return $this
     */
    public function setFkPriceProduct($fkPriceProduct)
    {
        $this->fkPriceProduct = $fkPriceProduct;
        $this->modifiedProperties[self::FK_PRICE_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPriceProduct()
    {
        return $this->fkPriceProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPriceProductOrFail($fkPriceProduct)
    {
        if ($fkPriceProduct === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT);
        }

        return $this->setFkPriceProduct($fkPriceProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPriceProductOrFail()
    {
        if ($this->fkPriceProduct === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT);
        }

        return $this->fkPriceProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPriceProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRICE_PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $grossPrice
     *
     * @return $this
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = $grossPrice;
        $this->modifiedProperties[self::GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $grossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrossPriceOrFail($grossPrice)
    {
        if ($grossPrice === null) {
            $this->throwNullValueException(static::GROSS_PRICE);
        }

        return $this->setGrossPrice($grossPrice);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getGrossPriceOrFail()
    {
        if ($this->grossPrice === null) {
            $this->throwNullValueException(static::GROSS_PRICE);
        }

        return $this->grossPrice;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrossPrice()
    {
        $this->assertPropertyIsSet(self::GROSS_PRICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $netPrice
     *
     * @return $this
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
        $this->modifiedProperties[self::NET_PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $netPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetPriceOrFail($netPrice)
    {
        if ($netPrice === null) {
            $this->throwNullValueException(static::NET_PRICE);
        }

        return $this->setNetPrice($netPrice);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getNetPriceOrFail()
    {
        if ($this->netPrice === null) {
            $this->throwNullValueException(static::NET_PRICE);
        }

        return $this->netPrice;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetPrice()
    {
        $this->assertPropertyIsSet(self::NET_PRICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $priceData
     *
     * @return $this
     */
    public function setPriceData($priceData)
    {
        $this->priceData = $priceData;
        $this->modifiedProperties[self::PRICE_DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPriceData()
    {
        return $this->priceData;
    }

    /**
     * @module 
     *
     * @param string|null $priceData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceDataOrFail($priceData)
    {
        if ($priceData === null) {
            $this->throwNullValueException(static::PRICE_DATA);
        }

        return $this->setPriceData($priceData);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceDataOrFail()
    {
        if ($this->priceData === null) {
            $this->throwNullValueException(static::PRICE_DATA);
        }

        return $this->priceData;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceData()
    {
        $this->assertPropertyIsSet(self::PRICE_DATA);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $priceDataChecksum
     *
     * @return $this
     */
    public function setPriceDataChecksum($priceDataChecksum)
    {
        $this->priceDataChecksum = $priceDataChecksum;
        $this->modifiedProperties[self::PRICE_DATA_CHECKSUM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPriceDataChecksum()
    {
        return $this->priceDataChecksum;
    }

    /**
     * @module 
     *
     * @param string|null $priceDataChecksum
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceDataChecksumOrFail($priceDataChecksum)
    {
        if ($priceDataChecksum === null) {
            $this->throwNullValueException(static::PRICE_DATA_CHECKSUM);
        }

        return $this->setPriceDataChecksum($priceDataChecksum);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceDataChecksumOrFail()
    {
        if ($this->priceDataChecksum === null) {
            $this->throwNullValueException(static::PRICE_DATA_CHECKSUM);
        }

        return $this->priceDataChecksum;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceDataChecksum()
    {
        $this->assertPropertyIsSet(self::PRICE_DATA_CHECKSUM);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(SpyCurrencyEntityTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(SpyCurrencyEntityTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $store
     *
     * @return $this
     */
    public function setStore(SpyStoreEntityTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(SpyStoreEntityTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductEntityTransfer|null $priceProduct
     *
     * @return $this
     */
    public function setPriceProduct(SpyPriceProductEntityTransfer $priceProduct = null)
    {
        $this->priceProduct = $priceProduct;
        $this->modifiedProperties[self::PRICE_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductEntityTransfer|null
     */
    public function getPriceProduct()
    {
        return $this->priceProduct;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductEntityTransfer $priceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceProductOrFail(SpyPriceProductEntityTransfer $priceProduct)
    {
        return $this->setPriceProduct($priceProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductEntityTransfer
     */
    public function getPriceProductOrFail()
    {
        if ($this->priceProduct === null) {
            $this->throwNullValueException(static::PRICE_PRODUCT);
        }

        return $this->priceProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProduct()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductDefaultEntityTransfer[] $spyPriceProductDefaults
     *
     * @return $this
     */
    public function setSpyPriceProductDefaults(ArrayObject $spyPriceProductDefaults)
    {
        $this->spyPriceProductDefaults = $spyPriceProductDefaults;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_DEFAULTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductDefaultEntityTransfer[]
     */
    public function getSpyPriceProductDefaults()
    {
        return $this->spyPriceProductDefaults;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductDefaultEntityTransfer $spyPriceProductDefaults
     *
     * @return $this
     */
    public function addSpyPriceProductDefaults(SpyPriceProductDefaultEntityTransfer $spyPriceProductDefaults)
    {
        $this->spyPriceProductDefaults[] = $spyPriceProductDefaults;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_DEFAULTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductDefaults()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_DEFAULTS);

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
                case 'idPriceProductStore':
                case 'fkCurrency':
                case 'fkPriceProduct':
                case 'fkStore':
                case 'grossPrice':
                case 'netPrice':
                case 'priceData':
                case 'priceDataChecksum':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'currency':
                case 'store':
                case 'priceProduct':
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
                case 'spyPriceProductMerchantRelationships':
                case 'spyPriceProductDefaults':
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
                case 'idPriceProductStore':
                case 'fkCurrency':
                case 'fkPriceProduct':
                case 'fkStore':
                case 'grossPrice':
                case 'netPrice':
                case 'priceData':
                case 'priceDataChecksum':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                case 'store':
                case 'priceProduct':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyPriceProductMerchantRelationships':
                case 'spyPriceProductDefaults':
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
                case 'idPriceProductStore':
                case 'fkCurrency':
                case 'fkPriceProduct':
                case 'fkStore':
                case 'grossPrice':
                case 'netPrice':
                case 'priceData':
                case 'priceDataChecksum':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                case 'store':
                case 'priceProduct':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyPriceProductMerchantRelationships':
                case 'spyPriceProductDefaults':
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
        $this->spyPriceProductMerchantRelationships = $this->spyPriceProductMerchantRelationships ?: new ArrayObject();
        $this->spyPriceProductDefaults = $this->spyPriceProductDefaults ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPriceProductStore' => $this->idPriceProductStore,
            'fkCurrency' => $this->fkCurrency,
            'fkPriceProduct' => $this->fkPriceProduct,
            'fkStore' => $this->fkStore,
            'grossPrice' => $this->grossPrice,
            'netPrice' => $this->netPrice,
            'priceData' => $this->priceData,
            'priceDataChecksum' => $this->priceDataChecksum,
            'currency' => $this->currency,
            'store' => $this->store,
            'priceProduct' => $this->priceProduct,
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships,
            'spyPriceProductDefaults' => $this->spyPriceProductDefaults,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_store' => $this->idPriceProductStore,
            'fk_currency' => $this->fkCurrency,
            'fk_price_product' => $this->fkPriceProduct,
            'fk_store' => $this->fkStore,
            'gross_price' => $this->grossPrice,
            'net_price' => $this->netPrice,
            'price_data' => $this->priceData,
            'price_data_checksum' => $this->priceDataChecksum,
            'currency' => $this->currency,
            'store' => $this->store,
            'price_product' => $this->priceProduct,
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships,
            'spy_price_product_defaults' => $this->spyPriceProductDefaults,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_store' => $this->idPriceProductStore instanceof AbstractTransfer ? $this->idPriceProductStore->toArray(true, false) : $this->idPriceProductStore,
            'fk_currency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, false) : $this->fkCurrency,
            'fk_price_product' => $this->fkPriceProduct instanceof AbstractTransfer ? $this->fkPriceProduct->toArray(true, false) : $this->fkPriceProduct,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'gross_price' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, false) : $this->grossPrice,
            'net_price' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, false) : $this->netPrice,
            'price_data' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, false) : $this->priceData,
            'price_data_checksum' => $this->priceDataChecksum instanceof AbstractTransfer ? $this->priceDataChecksum->toArray(true, false) : $this->priceDataChecksum,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'price_product' => $this->priceProduct instanceof AbstractTransfer ? $this->priceProduct->toArray(true, false) : $this->priceProduct,
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, false),
            'spy_price_product_defaults' => $this->spyPriceProductDefaults instanceof AbstractTransfer ? $this->spyPriceProductDefaults->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductDefaults, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPriceProductStore' => $this->idPriceProductStore instanceof AbstractTransfer ? $this->idPriceProductStore->toArray(true, true) : $this->idPriceProductStore,
            'fkCurrency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, true) : $this->fkCurrency,
            'fkPriceProduct' => $this->fkPriceProduct instanceof AbstractTransfer ? $this->fkPriceProduct->toArray(true, true) : $this->fkPriceProduct,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'grossPrice' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, true) : $this->grossPrice,
            'netPrice' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, true) : $this->netPrice,
            'priceData' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, true) : $this->priceData,
            'priceDataChecksum' => $this->priceDataChecksum instanceof AbstractTransfer ? $this->priceDataChecksum->toArray(true, true) : $this->priceDataChecksum,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'priceProduct' => $this->priceProduct instanceof AbstractTransfer ? $this->priceProduct->toArray(true, true) : $this->priceProduct,
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, true),
            'spyPriceProductDefaults' => $this->spyPriceProductDefaults instanceof AbstractTransfer ? $this->spyPriceProductDefaults->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductDefaults, true, true),
        ];
    }
}
