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
class MoneyValueTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const PRICE_DATA = 'priceData';

    /**
     * @var string
     */
    public const GROSS_AMOUNT = 'grossAmount';

    /**
     * @var string
     */
    public const NET_AMOUNT = 'netAmount';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const ID_ENTITY = 'idEntity';

    /**
     * @var string
     */
    public const FK_CURRENCY = 'fkCurrency';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const PRICE_DATA_BY_PRICE_TYPE = 'priceDataByPriceType';

    /**
     * @var string
     */
    public const PRICE_DATA_CHECKSUM = 'priceDataChecksum';

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $priceData;

    /**
     * @var int|null
     */
    protected $grossAmount;

    /**
     * @var int|null
     */
    protected $netAmount;

    /**
     * @var int|null
     */
    protected $fkStore;

    /**
     * @var int|null
     */
    protected $idEntity;

    /**
     * @var int|null
     */
    protected $fkCurrency;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var array
     */
    protected $priceDataByPriceType = [];

    /**
     * @var string|null
     */
    protected $priceDataChecksum;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'currency' => 'currency',
        'Currency' => 'currency',
        'price_data' => 'priceData',
        'priceData' => 'priceData',
        'PriceData' => 'priceData',
        'gross_amount' => 'grossAmount',
        'grossAmount' => 'grossAmount',
        'GrossAmount' => 'grossAmount',
        'net_amount' => 'netAmount',
        'netAmount' => 'netAmount',
        'NetAmount' => 'netAmount',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'id_entity' => 'idEntity',
        'idEntity' => 'idEntity',
        'IdEntity' => 'idEntity',
        'fk_currency' => 'fkCurrency',
        'fkCurrency' => 'fkCurrency',
        'FkCurrency' => 'fkCurrency',
        'store' => 'store',
        'Store' => 'store',
        'price_data_by_price_type' => 'priceDataByPriceType',
        'priceDataByPriceType' => 'priceDataByPriceType',
        'PriceDataByPriceType' => 'priceDataByPriceType',
        'price_data_checksum' => 'priceDataChecksum',
        'priceDataChecksum' => 'priceDataChecksum',
        'PriceDataChecksum' => 'priceDataChecksum',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\CurrencyTransfer',
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
        self::FK_STORE => [
            'type' => 'int',
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
        self::ID_ENTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_entity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CURRENCY => [
            'type' => 'int',
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
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
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
        self::PRICE_DATA_BY_PRICE_TYPE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'price_data_by_price_type',
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
    ];

    /**
     * @module PriceProductVolumeWidget|CheckoutRestApi|Discount|Money|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(CurrencyTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|CheckoutRestApi|Discount|Money|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module PriceProductVolumeWidget|CheckoutRestApi|Discount|Money|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(CurrencyTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module PriceProductVolumeWidget|CheckoutRestApi|Discount|Money|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module PriceProductVolumeWidget|CheckoutRestApi|Discount|Money|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ShipmentCartConnector|Shipment|ShipmentsRestApi
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
     * @module PriceProductVolumeWidget|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductManagement
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
     * @module PriceProductVolumeWidget|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductManagement
     *
     * @return string|null
     */
    public function getPriceData()
    {
        return $this->priceData;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductManagement
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
     * @module PriceProductVolumeWidget|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductManagement
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
     * @module PriceProductVolumeWidget|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductManagement
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
     *
     * @return int|null
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
     *
     * @return int|null
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|Discount|Money|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOptionStorage|ProductOption|ProductPageSearch|ShipmentCartConnector|Shipment
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
     * @module CheckoutRestApi|Discount|Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ProductPageSearch|Shipment|ShipmentsRestApi
     *
     * @param int|null $fkStore
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
     * @module CheckoutRestApi|Discount|Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ProductPageSearch|Shipment|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module CheckoutRestApi|Discount|Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ProductPageSearch|Shipment|ShipmentsRestApi
     *
     * @param int|null $fkStore
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
     * @module CheckoutRestApi|Discount|Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ProductPageSearch|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module CheckoutRestApi|Discount|Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|ProductPageSearch|Shipment|ShipmentsRestApi
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
     * @module Discount|Money|PriceProductMerchantRelationship|PriceProduct|ProductOption|Shipment
     *
     * @param int|null $idEntity
     *
     * @return $this
     */
    public function setIdEntity($idEntity)
    {
        $this->idEntity = $idEntity;
        $this->modifiedProperties[self::ID_ENTITY] = true;

        return $this;
    }

    /**
     * @module Discount|Money|PriceProductMerchantRelationship|PriceProduct|ProductOption|Shipment
     *
     * @return int|null
     */
    public function getIdEntity()
    {
        return $this->idEntity;
    }

    /**
     * @module Discount|Money|PriceProductMerchantRelationship|PriceProduct|ProductOption|Shipment
     *
     * @param int|null $idEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdEntityOrFail($idEntity)
    {
        if ($idEntity === null) {
            $this->throwNullValueException(static::ID_ENTITY);
        }

        return $this->setIdEntity($idEntity);
    }

    /**
     * @module Discount|Money|PriceProductMerchantRelationship|PriceProduct|ProductOption|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdEntityOrFail()
    {
        if ($this->idEntity === null) {
            $this->throwNullValueException(static::ID_ENTITY);
        }

        return $this->idEntity;
    }

    /**
     * @module Discount|Money|PriceProductMerchantRelationship|PriceProduct|ProductOption|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdEntity()
    {
        $this->assertPropertyIsSet(self::ID_ENTITY);

        return $this;
    }

    /**
     * @module Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|Shipment
     *
     * @param int|null $fkCurrency
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
     * @module Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|Shipment
     *
     * @return int|null
     */
    public function getFkCurrency()
    {
        return $this->fkCurrency;
    }

    /**
     * @module Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|Shipment
     *
     * @param int|null $fkCurrency
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
     * @module Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCurrencyOrFail()
    {
        if ($this->fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->fkCurrency;
    }

    /**
     * @module Money|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement|ProductOption|Shipment
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
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|Shipment
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|Shipment
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|Shipment
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|Shipment
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
     * @module PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct
     *
     * @param array|null $priceDataByPriceType
     *
     * @return $this
     */
    public function setPriceDataByPriceType(array $priceDataByPriceType = null)
    {
        if ($priceDataByPriceType === null) {
            $priceDataByPriceType = [];
        }

        $this->priceDataByPriceType = $priceDataByPriceType;
        $this->modifiedProperties[self::PRICE_DATA_BY_PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct
     *
     * @return array
     */
    public function getPriceDataByPriceType()
    {
        return $this->priceDataByPriceType;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct
     *
     * @param mixed $priceDataByPriceType
     *
     * @return $this
     */
    public function addPriceDataByPriceType($priceDataByPriceType)
    {
        $this->priceDataByPriceType[] = $priceDataByPriceType;
        $this->modifiedProperties[self::PRICE_DATA_BY_PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceDataByPriceType()
    {
        $this->assertPropertyIsSet(self::PRICE_DATA_BY_PRICE_TYPE);

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
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
     * @module PriceProductVolumeGui|PriceProduct
     *
     * @return string|null
     */
    public function getPriceDataChecksum()
    {
        return $this->priceDataChecksum;
    }

    /**
     * @module PriceProductVolumeGui|PriceProduct
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
     * @module PriceProductVolumeGui|PriceProduct
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
     * @module PriceProductVolumeGui|PriceProduct
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
                case 'priceData':
                case 'grossAmount':
                case 'netAmount':
                case 'fkStore':
                case 'idEntity':
                case 'fkCurrency':
                case 'priceDataByPriceType':
                case 'priceDataChecksum':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'currency':
                case 'store':
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
                case 'priceData':
                case 'grossAmount':
                case 'netAmount':
                case 'fkStore':
                case 'idEntity':
                case 'fkCurrency':
                case 'priceDataByPriceType':
                case 'priceDataChecksum':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                case 'store':
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
                case 'priceData':
                case 'grossAmount':
                case 'netAmount':
                case 'fkStore':
                case 'idEntity':
                case 'fkCurrency':
                case 'priceDataByPriceType':
                case 'priceDataChecksum':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                case 'store':
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
            'priceData' => $this->priceData,
            'grossAmount' => $this->grossAmount,
            'netAmount' => $this->netAmount,
            'fkStore' => $this->fkStore,
            'idEntity' => $this->idEntity,
            'fkCurrency' => $this->fkCurrency,
            'priceDataByPriceType' => $this->priceDataByPriceType,
            'priceDataChecksum' => $this->priceDataChecksum,
            'currency' => $this->currency,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'price_data' => $this->priceData,
            'gross_amount' => $this->grossAmount,
            'net_amount' => $this->netAmount,
            'fk_store' => $this->fkStore,
            'id_entity' => $this->idEntity,
            'fk_currency' => $this->fkCurrency,
            'price_data_by_price_type' => $this->priceDataByPriceType,
            'price_data_checksum' => $this->priceDataChecksum,
            'currency' => $this->currency,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'price_data' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, false) : $this->priceData,
            'gross_amount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, false) : $this->grossAmount,
            'net_amount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, false) : $this->netAmount,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'id_entity' => $this->idEntity instanceof AbstractTransfer ? $this->idEntity->toArray(true, false) : $this->idEntity,
            'fk_currency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, false) : $this->fkCurrency,
            'price_data_by_price_type' => $this->priceDataByPriceType instanceof AbstractTransfer ? $this->priceDataByPriceType->toArray(true, false) : $this->priceDataByPriceType,
            'price_data_checksum' => $this->priceDataChecksum instanceof AbstractTransfer ? $this->priceDataChecksum->toArray(true, false) : $this->priceDataChecksum,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'priceData' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, true) : $this->priceData,
            'grossAmount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, true) : $this->grossAmount,
            'netAmount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, true) : $this->netAmount,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'idEntity' => $this->idEntity instanceof AbstractTransfer ? $this->idEntity->toArray(true, true) : $this->idEntity,
            'fkCurrency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, true) : $this->fkCurrency,
            'priceDataByPriceType' => $this->priceDataByPriceType instanceof AbstractTransfer ? $this->priceDataByPriceType->toArray(true, true) : $this->priceDataByPriceType,
            'priceDataChecksum' => $this->priceDataChecksum instanceof AbstractTransfer ? $this->priceDataChecksum->toArray(true, true) : $this->priceDataChecksum,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
        ];
    }
}
