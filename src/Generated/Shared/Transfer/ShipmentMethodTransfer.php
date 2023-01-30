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
class ShipmentMethodTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const STORE_CURRENCY_PRICE = 'storeCurrencyPrice';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const DELIVERY_TIME = 'deliveryTime';

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
    public const CARRIER_NAME = 'carrierName';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DELIVERY_TIME_PLUGIN = 'deliveryTimePlugin';

    /**
     * @var string
     */
    public const PRICE_PLUGIN = 'pricePlugin';

    /**
     * @var string
     */
    public const AVAILABILITY_PLUGIN = 'availabilityPlugin';

    /**
     * @var string
     */
    public const FK_TAX_SET = 'fkTaxSet';

    /**
     * @var string
     */
    public const FK_SHIPMENT_CARRIER = 'fkShipmentCarrier';

    /**
     * @var string
     */
    public const FK_SALES_EXPENSE = 'fkSalesExpense';

    /**
     * @var string
     */
    public const ID_SHIPMENT_METHOD = 'idShipmentMethod';

    /**
     * @var string
     */
    public const SOURCE_PRICE = 'sourcePrice';

    /**
     * @var string
     */
    public const SHIPMENT_METHOD_KEY = 'shipmentMethodKey';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var int|null
     */
    protected $storeCurrencyPrice;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    protected $prices;

    /**
     * @var int|null
     */
    protected $deliveryTime;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var float|null
     */
    protected $taxRate;

    /**
     * @var string|null
     */
    protected $carrierName;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $deliveryTimePlugin;

    /**
     * @var string|null
     */
    protected $pricePlugin;

    /**
     * @var string|null
     */
    protected $availabilityPlugin;

    /**
     * @var int|null
     */
    protected $fkTaxSet;

    /**
     * @var int|null
     */
    protected $fkShipmentCarrier;

    /**
     * @var int|null
     */
    protected $fkSalesExpense;

    /**
     * @var int|null
     */
    protected $idShipmentMethod;

    /**
     * @var \Generated\Shared\Transfer\MoneyValueTransfer|null
     */
    protected $sourcePrice;

    /**
     * @var string|null
     */
    protected $shipmentMethodKey;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var int|null
     */
    protected $id;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'store_currency_price' => 'storeCurrencyPrice',
        'storeCurrencyPrice' => 'storeCurrencyPrice',
        'StoreCurrencyPrice' => 'storeCurrencyPrice',
        'prices' => 'prices',
        'Prices' => 'prices',
        'delivery_time' => 'deliveryTime',
        'deliveryTime' => 'deliveryTime',
        'DeliveryTime' => 'deliveryTime',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'carrier_name' => 'carrierName',
        'carrierName' => 'carrierName',
        'CarrierName' => 'carrierName',
        'name' => 'name',
        'Name' => 'name',
        'delivery_time_plugin' => 'deliveryTimePlugin',
        'deliveryTimePlugin' => 'deliveryTimePlugin',
        'DeliveryTimePlugin' => 'deliveryTimePlugin',
        'price_plugin' => 'pricePlugin',
        'pricePlugin' => 'pricePlugin',
        'PricePlugin' => 'pricePlugin',
        'availability_plugin' => 'availabilityPlugin',
        'availabilityPlugin' => 'availabilityPlugin',
        'AvailabilityPlugin' => 'availabilityPlugin',
        'fk_tax_set' => 'fkTaxSet',
        'fkTaxSet' => 'fkTaxSet',
        'FkTaxSet' => 'fkTaxSet',
        'fk_shipment_carrier' => 'fkShipmentCarrier',
        'fkShipmentCarrier' => 'fkShipmentCarrier',
        'FkShipmentCarrier' => 'fkShipmentCarrier',
        'fk_sales_expense' => 'fkSalesExpense',
        'fkSalesExpense' => 'fkSalesExpense',
        'FkSalesExpense' => 'fkSalesExpense',
        'id_shipment_method' => 'idShipmentMethod',
        'idShipmentMethod' => 'idShipmentMethod',
        'IdShipmentMethod' => 'idShipmentMethod',
        'source_price' => 'sourcePrice',
        'sourcePrice' => 'sourcePrice',
        'SourcePrice' => 'sourcePrice',
        'shipment_method_key' => 'shipmentMethodKey',
        'shipmentMethodKey' => 'shipmentMethodKey',
        'ShipmentMethodKey' => 'shipmentMethodKey',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'id' => 'id',
        'Id' => 'id',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_CURRENCY_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'store_currency_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\MoneyValueTransfer',
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
        self::DELIVERY_TIME => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'delivery_time',
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
        self::CARRIER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'carrier_name',
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
        self::DELIVERY_TIME_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'delivery_time_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABILITY_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'availability_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_TAX_SET => [
            'type' => 'int',
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
        self::FK_SHIPMENT_CARRIER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_shipment_carrier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_EXPENSE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_expense',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHIPMENT_METHOD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SOURCE_PRICE => [
            'type' => 'Generated\Shared\Transfer\MoneyValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'source_price',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_METHOD_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shipment_method_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id',
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
     * @module CheckoutPage|ShipmentCartConnector|ShipmentGui|Shipment
     *
     * @param string|null $currencyIsoCode
     *
     * @return $this
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->modifiedProperties[self::CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentGui|Shipment
     *
     * @param string|null $currencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyIsoCodeOrFail($currencyIsoCode)
    {
        if ($currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->setCurrencyIsoCode($currencyIsoCode);
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyIsoCodeOrFail()
    {
        if ($this->currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->currencyIsoCode;
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param int|null $storeCurrencyPrice
     *
     * @return $this
     */
    public function setStoreCurrencyPrice($storeCurrencyPrice)
    {
        $this->storeCurrencyPrice = $storeCurrencyPrice;
        $this->modifiedProperties[self::STORE_CURRENCY_PRICE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getStoreCurrencyPrice()
    {
        return $this->storeCurrencyPrice;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param int|null $storeCurrencyPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreCurrencyPriceOrFail($storeCurrencyPrice)
    {
        if ($storeCurrencyPrice === null) {
            $this->throwNullValueException(static::STORE_CURRENCY_PRICE);
        }

        return $this->setStoreCurrencyPrice($storeCurrencyPrice);
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getStoreCurrencyPriceOrFail()
    {
        if ($this->storeCurrencyPrice === null) {
            $this->throwNullValueException(static::STORE_CURRENCY_PRICE);
        }

        return $this->storeCurrencyPrice;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreCurrencyPrice()
    {
        $this->assertPropertyIsSet(self::STORE_CURRENCY_PRICE);

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[] $prices
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
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer $price
     *
     * @return $this
     */
    public function addPrice(MoneyValueTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param int|null $deliveryTime
     *
     * @return $this
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        $this->modifiedProperties[self::DELIVERY_TIME] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param int|null $deliveryTime
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeliveryTimeOrFail($deliveryTime)
    {
        if ($deliveryTime === null) {
            $this->throwNullValueException(static::DELIVERY_TIME);
        }

        return $this->setDeliveryTime($deliveryTime);
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDeliveryTimeOrFail()
    {
        if ($this->deliveryTime === null) {
            $this->throwNullValueException(static::DELIVERY_TIME);
        }

        return $this->deliveryTime;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeliveryTime()
    {
        $this->assertPropertyIsSet(self::DELIVERY_TIME);

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @param string|null $carrierName
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
        $this->modifiedProperties[self::CARRIER_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @param string|null $carrierName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCarrierNameOrFail($carrierName)
    {
        if ($carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->setCarrierName($carrierName);
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCarrierNameOrFail()
    {
        if ($this->carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->carrierName;
    }

    /**
     * @module CheckoutPage|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCarrierName()
    {
        $this->assertPropertyIsSet(self::CARRIER_NAME);

        return $this;
    }

    /**
     * @module CheckoutPage|Oms|OrdersRestApi|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|Oms|OrdersRestApi|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CheckoutPage|Oms|OrdersRestApi|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|Oms|OrdersRestApi|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|Oms|OrdersRestApi|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param string|null $deliveryTimePlugin
     *
     * @return $this
     */
    public function setDeliveryTimePlugin($deliveryTimePlugin)
    {
        $this->deliveryTimePlugin = $deliveryTimePlugin;
        $this->modifiedProperties[self::DELIVERY_TIME_PLUGIN] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getDeliveryTimePlugin()
    {
        return $this->deliveryTimePlugin;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param string|null $deliveryTimePlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeliveryTimePluginOrFail($deliveryTimePlugin)
    {
        if ($deliveryTimePlugin === null) {
            $this->throwNullValueException(static::DELIVERY_TIME_PLUGIN);
        }

        return $this->setDeliveryTimePlugin($deliveryTimePlugin);
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDeliveryTimePluginOrFail()
    {
        if ($this->deliveryTimePlugin === null) {
            $this->throwNullValueException(static::DELIVERY_TIME_PLUGIN);
        }

        return $this->deliveryTimePlugin;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeliveryTimePlugin()
    {
        $this->assertPropertyIsSet(self::DELIVERY_TIME_PLUGIN);

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param string|null $pricePlugin
     *
     * @return $this
     */
    public function setPricePlugin($pricePlugin)
    {
        $this->pricePlugin = $pricePlugin;
        $this->modifiedProperties[self::PRICE_PLUGIN] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getPricePlugin()
    {
        return $this->pricePlugin;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param string|null $pricePlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPricePluginOrFail($pricePlugin)
    {
        if ($pricePlugin === null) {
            $this->throwNullValueException(static::PRICE_PLUGIN);
        }

        return $this->setPricePlugin($pricePlugin);
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPricePluginOrFail()
    {
        if ($this->pricePlugin === null) {
            $this->throwNullValueException(static::PRICE_PLUGIN);
        }

        return $this->pricePlugin;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePricePlugin()
    {
        $this->assertPropertyIsSet(self::PRICE_PLUGIN);

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param string|null $availabilityPlugin
     *
     * @return $this
     */
    public function setAvailabilityPlugin($availabilityPlugin)
    {
        $this->availabilityPlugin = $availabilityPlugin;
        $this->modifiedProperties[self::AVAILABILITY_PLUGIN] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getAvailabilityPlugin()
    {
        return $this->availabilityPlugin;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param string|null $availabilityPlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityPluginOrFail($availabilityPlugin)
    {
        if ($availabilityPlugin === null) {
            $this->throwNullValueException(static::AVAILABILITY_PLUGIN);
        }

        return $this->setAvailabilityPlugin($availabilityPlugin);
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAvailabilityPluginOrFail()
    {
        if ($this->availabilityPlugin === null) {
            $this->throwNullValueException(static::AVAILABILITY_PLUGIN);
        }

        return $this->availabilityPlugin;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailabilityPlugin()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY_PLUGIN);

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param int|null $fkTaxSet
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
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getFkTaxSet()
    {
        return $this->fkTaxSet;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @param int|null $fkTaxSet
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
     * @module CheckoutPage|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkTaxSetOrFail()
    {
        if ($this->fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->fkTaxSet;
    }

    /**
     * @module CheckoutPage|ShipmentGui|Shipment
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
     * @module CheckoutPage|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @param int|null $fkShipmentCarrier
     *
     * @return $this
     */
    public function setFkShipmentCarrier($fkShipmentCarrier)
    {
        $this->fkShipmentCarrier = $fkShipmentCarrier;
        $this->modifiedProperties[self::FK_SHIPMENT_CARRIER] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getFkShipmentCarrier()
    {
        return $this->fkShipmentCarrier;
    }

    /**
     * @module CheckoutPage|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @param int|null $fkShipmentCarrier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShipmentCarrierOrFail($fkShipmentCarrier)
    {
        if ($fkShipmentCarrier === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_CARRIER);
        }

        return $this->setFkShipmentCarrier($fkShipmentCarrier);
    }

    /**
     * @module CheckoutPage|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkShipmentCarrierOrFail()
    {
        if ($this->fkShipmentCarrier === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_CARRIER);
        }

        return $this->fkShipmentCarrier;
    }

    /**
     * @module CheckoutPage|ShipmentDiscountConnector|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShipmentCarrier()
    {
        $this->assertPropertyIsSet(self::FK_SHIPMENT_CARRIER);

        return $this;
    }

    /**
     * @module CheckoutPage|OrdersRestApi|ShipmentGui|Shipment
     *
     * @param int|null $fkSalesExpense
     *
     * @return $this
     */
    public function setFkSalesExpense($fkSalesExpense)
    {
        $this->fkSalesExpense = $fkSalesExpense;
        $this->modifiedProperties[self::FK_SALES_EXPENSE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|OrdersRestApi|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getFkSalesExpense()
    {
        return $this->fkSalesExpense;
    }

    /**
     * @module CheckoutPage|OrdersRestApi|ShipmentGui|Shipment
     *
     * @param int|null $fkSalesExpense
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesExpenseOrFail($fkSalesExpense)
    {
        if ($fkSalesExpense === null) {
            $this->throwNullValueException(static::FK_SALES_EXPENSE);
        }

        return $this->setFkSalesExpense($fkSalesExpense);
    }

    /**
     * @module CheckoutPage|OrdersRestApi|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkSalesExpenseOrFail()
    {
        if ($this->fkSalesExpense === null) {
            $this->throwNullValueException(static::FK_SALES_EXPENSE);
        }

        return $this->fkSalesExpense;
    }

    /**
     * @module CheckoutPage|OrdersRestApi|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesExpense()
    {
        $this->assertPropertyIsSet(self::FK_SALES_EXPENSE);

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param int|null $idShipmentMethod
     *
     * @return $this
     */
    public function setIdShipmentMethod($idShipmentMethod)
    {
        $this->idShipmentMethod = $idShipmentMethod;
        $this->modifiedProperties[self::ID_SHIPMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getIdShipmentMethod()
    {
        return $this->idShipmentMethod;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param int|null $idShipmentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentMethodOrFail($idShipmentMethod)
    {
        if ($idShipmentMethod === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD);
        }

        return $this->setIdShipmentMethod($idShipmentMethod);
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShipmentMethodOrFail()
    {
        if ($this->idShipmentMethod === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD);
        }

        return $this->idShipmentMethod;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipmentMethod()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_METHOD);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequest|ShipmentCartConnector
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer|null $sourcePrice
     *
     * @return $this
     */
    public function setSourcePrice(MoneyValueTransfer $sourcePrice = null)
    {
        $this->sourcePrice = $sourcePrice;
        $this->modifiedProperties[self::SOURCE_PRICE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequest|ShipmentCartConnector
     *
     * @return \Generated\Shared\Transfer\MoneyValueTransfer|null
     */
    public function getSourcePrice()
    {
        return $this->sourcePrice;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequest|ShipmentCartConnector
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer $sourcePrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourcePriceOrFail(MoneyValueTransfer $sourcePrice)
    {
        return $this->setSourcePrice($sourcePrice);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequest|ShipmentCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MoneyValueTransfer
     */
    public function getSourcePriceOrFail()
    {
        if ($this->sourcePrice === null) {
            $this->throwNullValueException(static::SOURCE_PRICE);
        }

        return $this->sourcePrice;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequest|ShipmentCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourcePrice()
    {
        $this->assertPropertyIsSet(self::SOURCE_PRICE);

        return $this;
    }

    /**
     * @module ShipmentDataImport|ShipmentGui
     *
     * @param string|null $shipmentMethodKey
     *
     * @return $this
     */
    public function setShipmentMethodKey($shipmentMethodKey)
    {
        $this->shipmentMethodKey = $shipmentMethodKey;
        $this->modifiedProperties[self::SHIPMENT_METHOD_KEY] = true;

        return $this;
    }

    /**
     * @module ShipmentDataImport|ShipmentGui
     *
     * @return string|null
     */
    public function getShipmentMethodKey()
    {
        return $this->shipmentMethodKey;
    }

    /**
     * @module ShipmentDataImport|ShipmentGui
     *
     * @param string|null $shipmentMethodKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentMethodKeyOrFail($shipmentMethodKey)
    {
        if ($shipmentMethodKey === null) {
            $this->throwNullValueException(static::SHIPMENT_METHOD_KEY);
        }

        return $this->setShipmentMethodKey($shipmentMethodKey);
    }

    /**
     * @module ShipmentDataImport|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShipmentMethodKeyOrFail()
    {
        if ($this->shipmentMethodKey === null) {
            $this->throwNullValueException(static::SHIPMENT_METHOD_KEY);
        }

        return $this->shipmentMethodKey;
    }

    /**
     * @module ShipmentDataImport|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentMethodKey()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_METHOD_KEY);

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->modifiedProperties[self::ID] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param int|null $id
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOrFail($id)
    {
        if ($id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->setId($id);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdOrFail()
    {
        if ($this->id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->id;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireId()
    {
        $this->assertPropertyIsSet(self::ID);

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
                case 'currencyIsoCode':
                case 'storeCurrencyPrice':
                case 'deliveryTime':
                case 'isActive':
                case 'taxRate':
                case 'carrierName':
                case 'name':
                case 'deliveryTimePlugin':
                case 'pricePlugin':
                case 'availabilityPlugin':
                case 'fkTaxSet':
                case 'fkShipmentCarrier':
                case 'fkSalesExpense':
                case 'idShipmentMethod':
                case 'shipmentMethodKey':
                case 'id':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'sourcePrice':
                case 'storeRelation':
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
                case 'prices':
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
                case 'currencyIsoCode':
                case 'storeCurrencyPrice':
                case 'deliveryTime':
                case 'isActive':
                case 'taxRate':
                case 'carrierName':
                case 'name':
                case 'deliveryTimePlugin':
                case 'pricePlugin':
                case 'availabilityPlugin':
                case 'fkTaxSet':
                case 'fkShipmentCarrier':
                case 'fkSalesExpense':
                case 'idShipmentMethod':
                case 'shipmentMethodKey':
                case 'id':
                    $values[$arrayKey] = $value;

                    break;
                case 'sourcePrice':
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'prices':
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
                case 'currencyIsoCode':
                case 'storeCurrencyPrice':
                case 'deliveryTime':
                case 'isActive':
                case 'taxRate':
                case 'carrierName':
                case 'name':
                case 'deliveryTimePlugin':
                case 'pricePlugin':
                case 'availabilityPlugin':
                case 'fkTaxSet':
                case 'fkShipmentCarrier':
                case 'fkSalesExpense':
                case 'idShipmentMethod':
                case 'shipmentMethodKey':
                case 'id':
                    $values[$arrayKey] = $value;

                    break;
                case 'sourcePrice':
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'prices':
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
        $this->prices = $this->prices ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'currencyIsoCode' => $this->currencyIsoCode,
            'storeCurrencyPrice' => $this->storeCurrencyPrice,
            'deliveryTime' => $this->deliveryTime,
            'isActive' => $this->isActive,
            'taxRate' => $this->taxRate,
            'carrierName' => $this->carrierName,
            'name' => $this->name,
            'deliveryTimePlugin' => $this->deliveryTimePlugin,
            'pricePlugin' => $this->pricePlugin,
            'availabilityPlugin' => $this->availabilityPlugin,
            'fkTaxSet' => $this->fkTaxSet,
            'fkShipmentCarrier' => $this->fkShipmentCarrier,
            'fkSalesExpense' => $this->fkSalesExpense,
            'idShipmentMethod' => $this->idShipmentMethod,
            'shipmentMethodKey' => $this->shipmentMethodKey,
            'id' => $this->id,
            'sourcePrice' => $this->sourcePrice,
            'storeRelation' => $this->storeRelation,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'currency_iso_code' => $this->currencyIsoCode,
            'store_currency_price' => $this->storeCurrencyPrice,
            'delivery_time' => $this->deliveryTime,
            'is_active' => $this->isActive,
            'tax_rate' => $this->taxRate,
            'carrier_name' => $this->carrierName,
            'name' => $this->name,
            'delivery_time_plugin' => $this->deliveryTimePlugin,
            'price_plugin' => $this->pricePlugin,
            'availability_plugin' => $this->availabilityPlugin,
            'fk_tax_set' => $this->fkTaxSet,
            'fk_shipment_carrier' => $this->fkShipmentCarrier,
            'fk_sales_expense' => $this->fkSalesExpense,
            'id_shipment_method' => $this->idShipmentMethod,
            'shipment_method_key' => $this->shipmentMethodKey,
            'id' => $this->id,
            'source_price' => $this->sourcePrice,
            'store_relation' => $this->storeRelation,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'store_currency_price' => $this->storeCurrencyPrice instanceof AbstractTransfer ? $this->storeCurrencyPrice->toArray(true, false) : $this->storeCurrencyPrice,
            'delivery_time' => $this->deliveryTime instanceof AbstractTransfer ? $this->deliveryTime->toArray(true, false) : $this->deliveryTime,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'carrier_name' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, false) : $this->carrierName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'delivery_time_plugin' => $this->deliveryTimePlugin instanceof AbstractTransfer ? $this->deliveryTimePlugin->toArray(true, false) : $this->deliveryTimePlugin,
            'price_plugin' => $this->pricePlugin instanceof AbstractTransfer ? $this->pricePlugin->toArray(true, false) : $this->pricePlugin,
            'availability_plugin' => $this->availabilityPlugin instanceof AbstractTransfer ? $this->availabilityPlugin->toArray(true, false) : $this->availabilityPlugin,
            'fk_tax_set' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, false) : $this->fkTaxSet,
            'fk_shipment_carrier' => $this->fkShipmentCarrier instanceof AbstractTransfer ? $this->fkShipmentCarrier->toArray(true, false) : $this->fkShipmentCarrier,
            'fk_sales_expense' => $this->fkSalesExpense instanceof AbstractTransfer ? $this->fkSalesExpense->toArray(true, false) : $this->fkSalesExpense,
            'id_shipment_method' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, false) : $this->idShipmentMethod,
            'shipment_method_key' => $this->shipmentMethodKey instanceof AbstractTransfer ? $this->shipmentMethodKey->toArray(true, false) : $this->shipmentMethodKey,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'source_price' => $this->sourcePrice instanceof AbstractTransfer ? $this->sourcePrice->toArray(true, false) : $this->sourcePrice,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'storeCurrencyPrice' => $this->storeCurrencyPrice instanceof AbstractTransfer ? $this->storeCurrencyPrice->toArray(true, true) : $this->storeCurrencyPrice,
            'deliveryTime' => $this->deliveryTime instanceof AbstractTransfer ? $this->deliveryTime->toArray(true, true) : $this->deliveryTime,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'carrierName' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, true) : $this->carrierName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'deliveryTimePlugin' => $this->deliveryTimePlugin instanceof AbstractTransfer ? $this->deliveryTimePlugin->toArray(true, true) : $this->deliveryTimePlugin,
            'pricePlugin' => $this->pricePlugin instanceof AbstractTransfer ? $this->pricePlugin->toArray(true, true) : $this->pricePlugin,
            'availabilityPlugin' => $this->availabilityPlugin instanceof AbstractTransfer ? $this->availabilityPlugin->toArray(true, true) : $this->availabilityPlugin,
            'fkTaxSet' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, true) : $this->fkTaxSet,
            'fkShipmentCarrier' => $this->fkShipmentCarrier instanceof AbstractTransfer ? $this->fkShipmentCarrier->toArray(true, true) : $this->fkShipmentCarrier,
            'fkSalesExpense' => $this->fkSalesExpense instanceof AbstractTransfer ? $this->fkSalesExpense->toArray(true, true) : $this->fkSalesExpense,
            'idShipmentMethod' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, true) : $this->idShipmentMethod,
            'shipmentMethodKey' => $this->shipmentMethodKey instanceof AbstractTransfer ? $this->shipmentMethodKey->toArray(true, true) : $this->shipmentMethodKey,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'sourcePrice' => $this->sourcePrice instanceof AbstractTransfer ? $this->sourcePrice->toArray(true, true) : $this->sourcePrice,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
        ];
    }
}
