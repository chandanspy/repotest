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
class PriceProductScheduleCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const SKU_PRODUCT_ABSTRACT = 'skuProductAbstract';

    /**
     * @var string
     */
    public const SKU_PRODUCT = 'skuProduct';

    /**
     * @var string
     */
    public const PRICE_TYPE_NAME = 'priceTypeName';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var string
     */
    public const CURRENCY_CODE = 'currencyCode';

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
    public const NET_AMOUNT = 'netAmount';

    /**
     * @var string
     */
    public const GROSS_AMOUNT = 'grossAmount';

    /**
     * @var string
     */
    public const FK_PRICE_PRODUCT_SCHEDULE_LIST = 'fkPriceProductScheduleList';

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var string|null
     */
    protected $skuProductAbstract;

    /**
     * @var string|null
     */
    protected $skuProduct;

    /**
     * @var string|null
     */
    protected $priceTypeName;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var string|null
     */
    protected $currencyCode;

    /**
     * @var string|null
     */
    protected $activeFrom;

    /**
     * @var string|null
     */
    protected $activeTo;

    /**
     * @var int|null
     */
    protected $netAmount;

    /**
     * @var int|null
     */
    protected $grossAmount;

    /**
     * @var int|null
     */
    protected $fkPriceProductScheduleList;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'filter' => 'filter',
        'Filter' => 'filter',
        'sku_product_abstract' => 'skuProductAbstract',
        'skuProductAbstract' => 'skuProductAbstract',
        'SkuProductAbstract' => 'skuProductAbstract',
        'sku_product' => 'skuProduct',
        'skuProduct' => 'skuProduct',
        'SkuProduct' => 'skuProduct',
        'price_type_name' => 'priceTypeName',
        'priceTypeName' => 'priceTypeName',
        'PriceTypeName' => 'priceTypeName',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'currency_code' => 'currencyCode',
        'currencyCode' => 'currencyCode',
        'CurrencyCode' => 'currencyCode',
        'active_from' => 'activeFrom',
        'activeFrom' => 'activeFrom',
        'ActiveFrom' => 'activeFrom',
        'active_to' => 'activeTo',
        'activeTo' => 'activeTo',
        'ActiveTo' => 'activeTo',
        'net_amount' => 'netAmount',
        'netAmount' => 'netAmount',
        'NetAmount' => 'netAmount',
        'gross_amount' => 'grossAmount',
        'grossAmount' => 'grossAmount',
        'GrossAmount' => 'grossAmount',
        'fk_price_product_schedule_list' => 'fkPriceProductScheduleList',
        'fkPriceProductScheduleList' => 'fkPriceProductScheduleList',
        'FkPriceProductScheduleList' => 'fkPriceProductScheduleList',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU_PRODUCT_ABSTRACT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU_PRODUCT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_TYPE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_type_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_code',
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
        self::NET_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'net_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROSS_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'gross_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRICE_PRODUCT_SCHEDULE_LIST => [
            'type' => 'int',
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
    ];

    /**
     * @module PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $skuProductAbstract
     *
     * @return $this
     */
    public function setSkuProductAbstract($skuProductAbstract)
    {
        $this->skuProductAbstract = $skuProductAbstract;
        $this->modifiedProperties[self::SKU_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return string|null
     */
    public function getSkuProductAbstract()
    {
        return $this->skuProductAbstract;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $skuProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuProductAbstractOrFail($skuProductAbstract)
    {
        if ($skuProductAbstract === null) {
            $this->throwNullValueException(static::SKU_PRODUCT_ABSTRACT);
        }

        return $this->setSkuProductAbstract($skuProductAbstract);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuProductAbstractOrFail()
    {
        if ($this->skuProductAbstract === null) {
            $this->throwNullValueException(static::SKU_PRODUCT_ABSTRACT);
        }

        return $this->skuProductAbstract;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSkuProductAbstract()
    {
        $this->assertPropertyIsSet(self::SKU_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $skuProduct
     *
     * @return $this
     */
    public function setSkuProduct($skuProduct)
    {
        $this->skuProduct = $skuProduct;
        $this->modifiedProperties[self::SKU_PRODUCT] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return string|null
     */
    public function getSkuProduct()
    {
        return $this->skuProduct;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $skuProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuProductOrFail($skuProduct)
    {
        if ($skuProduct === null) {
            $this->throwNullValueException(static::SKU_PRODUCT);
        }

        return $this->setSkuProduct($skuProduct);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuProductOrFail()
    {
        if ($this->skuProduct === null) {
            $this->throwNullValueException(static::SKU_PRODUCT);
        }

        return $this->skuProduct;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSkuProduct()
    {
        $this->assertPropertyIsSet(self::SKU_PRODUCT);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $priceTypeName
     *
     * @return $this
     */
    public function setPriceTypeName($priceTypeName)
    {
        $this->priceTypeName = $priceTypeName;
        $this->modifiedProperties[self::PRICE_TYPE_NAME] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return string|null
     */
    public function getPriceTypeName()
    {
        return $this->priceTypeName;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $priceTypeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceTypeNameOrFail($priceTypeName)
    {
        if ($priceTypeName === null) {
            $this->throwNullValueException(static::PRICE_TYPE_NAME);
        }

        return $this->setPriceTypeName($priceTypeName);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceTypeNameOrFail()
    {
        if ($this->priceTypeName === null) {
            $this->throwNullValueException(static::PRICE_TYPE_NAME);
        }

        return $this->priceTypeName;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceTypeName()
    {
        $this->assertPropertyIsSet(self::PRICE_TYPE_NAME);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        $this->modifiedProperties[self::CURRENCY_CODE] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param string|null $currencyCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyCodeOrFail($currencyCode)
    {
        if ($currencyCode === null) {
            $this->throwNullValueException(static::CURRENCY_CODE);
        }

        return $this->setCurrencyCode($currencyCode);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyCodeOrFail()
    {
        if ($this->currencyCode === null) {
            $this->throwNullValueException(static::CURRENCY_CODE);
        }

        return $this->currencyCode;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_CODE);

        return $this;
    }

    /**
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
     *
     * @return string|null
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
     *
     * @return string|null
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
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
     * @module PriceProductSchedule
     *
     * @param int|null $netAmount
     *
     * @return $this
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
        $this->modifiedProperties[self::NET_AMOUNT] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return int|null
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param int|null $netAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetAmountOrFail($netAmount)
    {
        if ($netAmount === null) {
            $this->throwNullValueException(static::NET_AMOUNT);
        }

        return $this->setNetAmount($netAmount);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNetAmountOrFail()
    {
        if ($this->netAmount === null) {
            $this->throwNullValueException(static::NET_AMOUNT);
        }

        return $this->netAmount;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetAmount()
    {
        $this->assertPropertyIsSet(self::NET_AMOUNT);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param int|null $grossAmount
     *
     * @return $this
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
        $this->modifiedProperties[self::GROSS_AMOUNT] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return int|null
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param int|null $grossAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrossAmountOrFail($grossAmount)
    {
        if ($grossAmount === null) {
            $this->throwNullValueException(static::GROSS_AMOUNT);
        }

        return $this->setGrossAmount($grossAmount);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getGrossAmountOrFail()
    {
        if ($this->grossAmount === null) {
            $this->throwNullValueException(static::GROSS_AMOUNT);
        }

        return $this->grossAmount;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrossAmount()
    {
        $this->assertPropertyIsSet(self::GROSS_AMOUNT);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param int|null $fkPriceProductScheduleList
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
     * @module PriceProductSchedule
     *
     * @return int|null
     */
    public function getFkPriceProductScheduleList()
    {
        return $this->fkPriceProductScheduleList;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param int|null $fkPriceProductScheduleList
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
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkPriceProductScheduleListOrFail()
    {
        if ($this->fkPriceProductScheduleList === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_SCHEDULE_LIST);
        }

        return $this->fkPriceProductScheduleList;
    }

    /**
     * @module PriceProductSchedule
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
                case 'skuProductAbstract':
                case 'skuProduct':
                case 'priceTypeName':
                case 'storeName':
                case 'currencyCode':
                case 'activeFrom':
                case 'activeTo':
                case 'netAmount':
                case 'grossAmount':
                case 'fkPriceProductScheduleList':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
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
                case 'skuProductAbstract':
                case 'skuProduct':
                case 'priceTypeName':
                case 'storeName':
                case 'currencyCode':
                case 'activeFrom':
                case 'activeTo':
                case 'netAmount':
                case 'grossAmount':
                case 'fkPriceProductScheduleList':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
                case 'skuProductAbstract':
                case 'skuProduct':
                case 'priceTypeName':
                case 'storeName':
                case 'currencyCode':
                case 'activeFrom':
                case 'activeTo':
                case 'netAmount':
                case 'grossAmount':
                case 'fkPriceProductScheduleList':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
            'skuProductAbstract' => $this->skuProductAbstract,
            'skuProduct' => $this->skuProduct,
            'priceTypeName' => $this->priceTypeName,
            'storeName' => $this->storeName,
            'currencyCode' => $this->currencyCode,
            'activeFrom' => $this->activeFrom,
            'activeTo' => $this->activeTo,
            'netAmount' => $this->netAmount,
            'grossAmount' => $this->grossAmount,
            'fkPriceProductScheduleList' => $this->fkPriceProductScheduleList,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku_product_abstract' => $this->skuProductAbstract,
            'sku_product' => $this->skuProduct,
            'price_type_name' => $this->priceTypeName,
            'store_name' => $this->storeName,
            'currency_code' => $this->currencyCode,
            'active_from' => $this->activeFrom,
            'active_to' => $this->activeTo,
            'net_amount' => $this->netAmount,
            'gross_amount' => $this->grossAmount,
            'fk_price_product_schedule_list' => $this->fkPriceProductScheduleList,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku_product_abstract' => $this->skuProductAbstract instanceof AbstractTransfer ? $this->skuProductAbstract->toArray(true, false) : $this->skuProductAbstract,
            'sku_product' => $this->skuProduct instanceof AbstractTransfer ? $this->skuProduct->toArray(true, false) : $this->skuProduct,
            'price_type_name' => $this->priceTypeName instanceof AbstractTransfer ? $this->priceTypeName->toArray(true, false) : $this->priceTypeName,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'currency_code' => $this->currencyCode instanceof AbstractTransfer ? $this->currencyCode->toArray(true, false) : $this->currencyCode,
            'active_from' => $this->activeFrom instanceof AbstractTransfer ? $this->activeFrom->toArray(true, false) : $this->activeFrom,
            'active_to' => $this->activeTo instanceof AbstractTransfer ? $this->activeTo->toArray(true, false) : $this->activeTo,
            'net_amount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, false) : $this->netAmount,
            'gross_amount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, false) : $this->grossAmount,
            'fk_price_product_schedule_list' => $this->fkPriceProductScheduleList instanceof AbstractTransfer ? $this->fkPriceProductScheduleList->toArray(true, false) : $this->fkPriceProductScheduleList,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'skuProductAbstract' => $this->skuProductAbstract instanceof AbstractTransfer ? $this->skuProductAbstract->toArray(true, true) : $this->skuProductAbstract,
            'skuProduct' => $this->skuProduct instanceof AbstractTransfer ? $this->skuProduct->toArray(true, true) : $this->skuProduct,
            'priceTypeName' => $this->priceTypeName instanceof AbstractTransfer ? $this->priceTypeName->toArray(true, true) : $this->priceTypeName,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'currencyCode' => $this->currencyCode instanceof AbstractTransfer ? $this->currencyCode->toArray(true, true) : $this->currencyCode,
            'activeFrom' => $this->activeFrom instanceof AbstractTransfer ? $this->activeFrom->toArray(true, true) : $this->activeFrom,
            'activeTo' => $this->activeTo instanceof AbstractTransfer ? $this->activeTo->toArray(true, true) : $this->activeTo,
            'netAmount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, true) : $this->netAmount,
            'grossAmount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, true) : $this->grossAmount,
            'fkPriceProductScheduleList' => $this->fkPriceProductScheduleList instanceof AbstractTransfer ? $this->fkPriceProductScheduleList->toArray(true, true) : $this->fkPriceProductScheduleList,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
        ];
    }
}
