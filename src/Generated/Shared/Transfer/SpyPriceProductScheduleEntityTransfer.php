<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyPriceProductScheduleEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_SCHEDULE = 'idPriceProductSchedule';

    /**
     * @var string
     */
    public const FK_CURRENCY = 'fkCurrency';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const FK_PRICE_TYPE = 'fkPriceType';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const FK_PRICE_PRODUCT_SCHEDULE_LIST = 'fkPriceProductScheduleList';

    /**
     * @var string
     */
    public const NET_PRICE = 'netPrice';

    /**
     * @var string
     */
    public const GROSS_PRICE = 'grossPrice';

    /**
     * @var string
     */
    public const PRICE_DATA = 'priceData';

    /**
     * @var string
     */
    public const ACTIVE_FROM = 'activeFrom';

    /**
     * @var string
     */
    public const ACTIVE_TO = 'activeTo';

    /**
     * @var string
     */
    public const IS_CURRENT = 'isCurrent';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT = 'productAbstract';

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
    public const PRICE_TYPE = 'priceType';

    /**
     * @var string
     */
    public const PRICE_PRODUCT_SCHEDULE_LIST = 'priceProductScheduleList';

    /**
     * @var string|null
     */
    protected $idPriceProductSchedule;

    /**
     * @var integer|null
     */
    protected $fkCurrency;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var integer|null
     */
    protected $fkPriceType;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var string|null
     */
    protected $fkPriceProductScheduleList;

    /**
     * @var integer|null
     */
    protected $netPrice;

    /**
     * @var integer|null
     */
    protected $grossPrice;

    /**
     * @var string|null
     */
    protected $priceData;

    /**
     * @var string|null
     */
    protected $activeFrom;

    /**
     * @var string|null
     */
    protected $activeTo;

    /**
     * @var boolean|null
     */
    protected $isCurrent;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $product;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $productAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    protected $currency;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\SpyPriceTypeEntityTransfer|null
     */
    protected $priceType;

    /**
     * @var \Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer|null
     */
    protected $priceProductScheduleList;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_price_product_schedule' => 'idPriceProductSchedule',
        'idPriceProductSchedule' => 'idPriceProductSchedule',
        'IdPriceProductSchedule' => 'idPriceProductSchedule',
        'fk_currency' => 'fkCurrency',
        'fkCurrency' => 'fkCurrency',
        'FkCurrency' => 'fkCurrency',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'fk_price_type' => 'fkPriceType',
        'fkPriceType' => 'fkPriceType',
        'FkPriceType' => 'fkPriceType',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'fk_price_product_schedule_list' => 'fkPriceProductScheduleList',
        'fkPriceProductScheduleList' => 'fkPriceProductScheduleList',
        'FkPriceProductScheduleList' => 'fkPriceProductScheduleList',
        'net_price' => 'netPrice',
        'netPrice' => 'netPrice',
        'NetPrice' => 'netPrice',
        'gross_price' => 'grossPrice',
        'grossPrice' => 'grossPrice',
        'GrossPrice' => 'grossPrice',
        'price_data' => 'priceData',
        'priceData' => 'priceData',
        'PriceData' => 'priceData',
        'active_from' => 'activeFrom',
        'activeFrom' => 'activeFrom',
        'ActiveFrom' => 'activeFrom',
        'active_to' => 'activeTo',
        'activeTo' => 'activeTo',
        'ActiveTo' => 'activeTo',
        'is_current' => 'isCurrent',
        'isCurrent' => 'isCurrent',
        'IsCurrent' => 'isCurrent',
        'product' => 'product',
        'Product' => 'product',
        'product_abstract' => 'productAbstract',
        'productAbstract' => 'productAbstract',
        'ProductAbstract' => 'productAbstract',
        'currency' => 'currency',
        'Currency' => 'currency',
        'store' => 'store',
        'Store' => 'store',
        'price_type' => 'priceType',
        'priceType' => 'priceType',
        'PriceType' => 'priceType',
        'price_product_schedule_list' => 'priceProductScheduleList',
        'priceProductScheduleList' => 'priceProductScheduleList',
        'PriceProductScheduleList' => 'priceProductScheduleList',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRICE_PRODUCT_SCHEDULE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_schedule',
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
        self::FK_PRICE_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_price_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product',
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
        self::FK_PRICE_PRODUCT_SCHEDULE_LIST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'fk_price_product_schedule_list',
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
        self::ACTIVE_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'active_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIVE_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'active_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_CURRENT => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_current',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::PRICE_TYPE => [
            'type' => 'Generated\Shared\Transfer\SpyPriceTypeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PRODUCT_SCHEDULE_LIST => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_product_schedule_list',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule';


    /**
     * @module 
     *
     * @param string|null $idPriceProductSchedule
     *
     * @return $this
     */
    public function setIdPriceProductSchedule($idPriceProductSchedule)
    {
        $this->idPriceProductSchedule = $idPriceProductSchedule;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_SCHEDULE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdPriceProductSchedule()
    {
        return $this->idPriceProductSchedule;
    }

    /**
     * @module 
     *
     * @param string|null $idPriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductScheduleOrFail($idPriceProductSchedule)
    {
        if ($idPriceProductSchedule === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_SCHEDULE);
        }

        return $this->setIdPriceProductSchedule($idPriceProductSchedule);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdPriceProductScheduleOrFail()
    {
        if ($this->idPriceProductSchedule === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_SCHEDULE);
        }

        return $this->idPriceProductSchedule;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductSchedule()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_SCHEDULE);

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
     * @param integer|null $fkPriceType
     *
     * @return $this
     */
    public function setFkPriceType($fkPriceType)
    {
        $this->fkPriceType = $fkPriceType;
        $this->modifiedProperties[self::FK_PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPriceType()
    {
        return $this->fkPriceType;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPriceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPriceTypeOrFail($fkPriceType)
    {
        if ($fkPriceType === null) {
            $this->throwNullValueException(static::FK_PRICE_TYPE);
        }

        return $this->setFkPriceType($fkPriceType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPriceTypeOrFail()
    {
        if ($this->fkPriceType === null) {
            $this->throwNullValueException(static::FK_PRICE_TYPE);
        }

        return $this->fkPriceType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPriceType()
    {
        $this->assertPropertyIsSet(self::FK_PRICE_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
     *
     * @return $this
     */
    public function setFkProduct($fkProduct)
    {
        $this->fkProduct = $fkProduct;
        $this->modifiedProperties[self::FK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOrFail($fkProduct)
    {
        if ($fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->setFkProduct($fkProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT);

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
     * @param string|null $fkPriceProductScheduleList
     *
     * @return $this
     */
    public function setFkPriceProductScheduleList($fkPriceProductScheduleList)
    {
        $this->fkPriceProductScheduleList = $fkPriceProductScheduleList;
        $this->modifiedProperties[self::FK_PRICE_PRODUCT_SCHEDULE_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getFkPriceProductScheduleList()
    {
        return $this->fkPriceProductScheduleList;
    }

    /**
     * @module 
     *
     * @param string|null $fkPriceProductScheduleList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPriceProductScheduleListOrFail($fkPriceProductScheduleList)
    {
        if ($fkPriceProductScheduleList === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_SCHEDULE_LIST);
        }

        return $this->setFkPriceProductScheduleList($fkPriceProductScheduleList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFkPriceProductScheduleListOrFail()
    {
        if ($this->fkPriceProductScheduleList === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_SCHEDULE_LIST);
        }

        return $this->fkPriceProductScheduleList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPriceProductScheduleList()
    {
        $this->assertPropertyIsSet(self::FK_PRICE_PRODUCT_SCHEDULE_LIST);

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
     * @param string|null $activeFrom
     *
     * @return $this
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;
        $this->modifiedProperties[self::ACTIVE_FROM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * @module 
     *
     * @param string|null $activeFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveFromOrFail($activeFrom)
    {
        if ($activeFrom === null) {
            $this->throwNullValueException(static::ACTIVE_FROM);
        }

        return $this->setActiveFrom($activeFrom);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActiveFromOrFail()
    {
        if ($this->activeFrom === null) {
            $this->throwNullValueException(static::ACTIVE_FROM);
        }

        return $this->activeFrom;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveFrom()
    {
        $this->assertPropertyIsSet(self::ACTIVE_FROM);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $activeTo
     *
     * @return $this
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;
        $this->modifiedProperties[self::ACTIVE_TO] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * @module 
     *
     * @param string|null $activeTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveToOrFail($activeTo)
    {
        if ($activeTo === null) {
            $this->throwNullValueException(static::ACTIVE_TO);
        }

        return $this->setActiveTo($activeTo);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActiveToOrFail()
    {
        if ($this->activeTo === null) {
            $this->throwNullValueException(static::ACTIVE_TO);
        }

        return $this->activeTo;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveTo()
    {
        $this->assertPropertyIsSet(self::ACTIVE_TO);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isCurrent
     *
     * @return $this
     */
    public function setIsCurrent($isCurrent)
    {
        $this->isCurrent = $isCurrent;
        $this->modifiedProperties[self::IS_CURRENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsCurrent()
    {
        return $this->isCurrent;
    }

    /**
     * @module 
     *
     * @param boolean|null $isCurrent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsCurrentOrFail($isCurrent)
    {
        if ($isCurrent === null) {
            $this->throwNullValueException(static::IS_CURRENT);
        }

        return $this->setIsCurrent($isCurrent);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsCurrentOrFail()
    {
        if ($this->isCurrent === null) {
            $this->throwNullValueException(static::IS_CURRENT);
        }

        return $this->isCurrent;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsCurrent()
    {
        $this->assertPropertyIsSet(self::IS_CURRENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(SpyProductEntityTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(SpyProductEntityTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProduct()
    {
        $this->assertPropertyIsSet(self::PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $productAbstract
     *
     * @return $this
     */
    public function setProductAbstract(SpyProductAbstractEntityTransfer $productAbstract = null)
    {
        $this->productAbstract = $productAbstract;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getProductAbstract()
    {
        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $productAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractOrFail(SpyProductAbstractEntityTransfer $productAbstract)
    {
        return $this->setProductAbstract($productAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getProductAbstractOrFail()
    {
        if ($this->productAbstract === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT);
        }

        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstract()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT);

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
     * @param \Generated\Shared\Transfer\SpyPriceTypeEntityTransfer|null $priceType
     *
     * @return $this
     */
    public function setPriceType(SpyPriceTypeEntityTransfer $priceType = null)
    {
        $this->priceType = $priceType;
        $this->modifiedProperties[self::PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPriceTypeEntityTransfer|null
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceTypeEntityTransfer $priceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceTypeOrFail(SpyPriceTypeEntityTransfer $priceType)
    {
        return $this->setPriceType($priceType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPriceTypeEntityTransfer
     */
    public function getPriceTypeOrFail()
    {
        if ($this->priceType === null) {
            $this->throwNullValueException(static::PRICE_TYPE);
        }

        return $this->priceType;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer|null $priceProductScheduleList
     *
     * @return $this
     */
    public function setPriceProductScheduleList(SpyPriceProductScheduleListEntityTransfer $priceProductScheduleList = null)
    {
        $this->priceProductScheduleList = $priceProductScheduleList;
        $this->modifiedProperties[self::PRICE_PRODUCT_SCHEDULE_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer|null
     */
    public function getPriceProductScheduleList()
    {
        return $this->priceProductScheduleList;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer $priceProductScheduleList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceProductScheduleListOrFail(SpyPriceProductScheduleListEntityTransfer $priceProductScheduleList)
    {
        return $this->setPriceProductScheduleList($priceProductScheduleList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer
     */
    public function getPriceProductScheduleListOrFail()
    {
        if ($this->priceProductScheduleList === null) {
            $this->throwNullValueException(static::PRICE_PRODUCT_SCHEDULE_LIST);
        }

        return $this->priceProductScheduleList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProductScheduleList()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT_SCHEDULE_LIST);

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
                case 'idPriceProductSchedule':
                case 'fkCurrency':
                case 'fkStore':
                case 'fkPriceType':
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'fkPriceProductScheduleList':
                case 'netPrice':
                case 'grossPrice':
                case 'priceData':
                case 'activeFrom':
                case 'activeTo':
                case 'isCurrent':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'product':
                case 'productAbstract':
                case 'currency':
                case 'store':
                case 'priceType':
                case 'priceProductScheduleList':
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
                case 'idPriceProductSchedule':
                case 'fkCurrency':
                case 'fkStore':
                case 'fkPriceType':
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'fkPriceProductScheduleList':
                case 'netPrice':
                case 'grossPrice':
                case 'priceData':
                case 'activeFrom':
                case 'activeTo':
                case 'isCurrent':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                case 'productAbstract':
                case 'currency':
                case 'store':
                case 'priceType':
                case 'priceProductScheduleList':
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
                case 'idPriceProductSchedule':
                case 'fkCurrency':
                case 'fkStore':
                case 'fkPriceType':
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'fkPriceProductScheduleList':
                case 'netPrice':
                case 'grossPrice':
                case 'priceData':
                case 'activeFrom':
                case 'activeTo':
                case 'isCurrent':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                case 'productAbstract':
                case 'currency':
                case 'store':
                case 'priceType':
                case 'priceProductScheduleList':
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
            'idPriceProductSchedule' => $this->idPriceProductSchedule,
            'fkCurrency' => $this->fkCurrency,
            'fkStore' => $this->fkStore,
            'fkPriceType' => $this->fkPriceType,
            'fkProduct' => $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkPriceProductScheduleList' => $this->fkPriceProductScheduleList,
            'netPrice' => $this->netPrice,
            'grossPrice' => $this->grossPrice,
            'priceData' => $this->priceData,
            'activeFrom' => $this->activeFrom,
            'activeTo' => $this->activeTo,
            'isCurrent' => $this->isCurrent,
            'product' => $this->product,
            'productAbstract' => $this->productAbstract,
            'currency' => $this->currency,
            'store' => $this->store,
            'priceType' => $this->priceType,
            'priceProductScheduleList' => $this->priceProductScheduleList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_schedule' => $this->idPriceProductSchedule,
            'fk_currency' => $this->fkCurrency,
            'fk_store' => $this->fkStore,
            'fk_price_type' => $this->fkPriceType,
            'fk_product' => $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract,
            'fk_price_product_schedule_list' => $this->fkPriceProductScheduleList,
            'net_price' => $this->netPrice,
            'gross_price' => $this->grossPrice,
            'price_data' => $this->priceData,
            'active_from' => $this->activeFrom,
            'active_to' => $this->activeTo,
            'is_current' => $this->isCurrent,
            'product' => $this->product,
            'product_abstract' => $this->productAbstract,
            'currency' => $this->currency,
            'store' => $this->store,
            'price_type' => $this->priceType,
            'price_product_schedule_list' => $this->priceProductScheduleList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_schedule' => $this->idPriceProductSchedule instanceof AbstractTransfer ? $this->idPriceProductSchedule->toArray(true, false) : $this->idPriceProductSchedule,
            'fk_currency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, false) : $this->fkCurrency,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'fk_price_type' => $this->fkPriceType instanceof AbstractTransfer ? $this->fkPriceType->toArray(true, false) : $this->fkPriceType,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'fk_price_product_schedule_list' => $this->fkPriceProductScheduleList instanceof AbstractTransfer ? $this->fkPriceProductScheduleList->toArray(true, false) : $this->fkPriceProductScheduleList,
            'net_price' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, false) : $this->netPrice,
            'gross_price' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, false) : $this->grossPrice,
            'price_data' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, false) : $this->priceData,
            'active_from' => $this->activeFrom instanceof AbstractTransfer ? $this->activeFrom->toArray(true, false) : $this->activeFrom,
            'active_to' => $this->activeTo instanceof AbstractTransfer ? $this->activeTo->toArray(true, false) : $this->activeTo,
            'is_current' => $this->isCurrent instanceof AbstractTransfer ? $this->isCurrent->toArray(true, false) : $this->isCurrent,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
            'product_abstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, false) : $this->productAbstract,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'price_type' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, false) : $this->priceType,
            'price_product_schedule_list' => $this->priceProductScheduleList instanceof AbstractTransfer ? $this->priceProductScheduleList->toArray(true, false) : $this->priceProductScheduleList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPriceProductSchedule' => $this->idPriceProductSchedule instanceof AbstractTransfer ? $this->idPriceProductSchedule->toArray(true, true) : $this->idPriceProductSchedule,
            'fkCurrency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, true) : $this->fkCurrency,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'fkPriceType' => $this->fkPriceType instanceof AbstractTransfer ? $this->fkPriceType->toArray(true, true) : $this->fkPriceType,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'fkPriceProductScheduleList' => $this->fkPriceProductScheduleList instanceof AbstractTransfer ? $this->fkPriceProductScheduleList->toArray(true, true) : $this->fkPriceProductScheduleList,
            'netPrice' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, true) : $this->netPrice,
            'grossPrice' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, true) : $this->grossPrice,
            'priceData' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, true) : $this->priceData,
            'activeFrom' => $this->activeFrom instanceof AbstractTransfer ? $this->activeFrom->toArray(true, true) : $this->activeFrom,
            'activeTo' => $this->activeTo instanceof AbstractTransfer ? $this->activeTo->toArray(true, true) : $this->activeTo,
            'isCurrent' => $this->isCurrent instanceof AbstractTransfer ? $this->isCurrent->toArray(true, true) : $this->isCurrent,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
            'productAbstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, true) : $this->productAbstract,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'priceType' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, true) : $this->priceType,
            'priceProductScheduleList' => $this->priceProductScheduleList instanceof AbstractTransfer ? $this->priceProductScheduleList->toArray(true, true) : $this->priceProductScheduleList,
        ];
    }
}
