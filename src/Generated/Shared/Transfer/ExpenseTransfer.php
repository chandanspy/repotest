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
class ExpenseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHIPMENT = 'shipment';

    /**
     * @var string
     */
    public const TAX_RATE = 'taxRate';

    /**
     * @var string
     */
    public const SUM_TAX_AMOUNT = 'sumTaxAmount';

    /**
     * @var string
     */
    public const UNIT_TAX_AMOUNT = 'unitTaxAmount';

    /**
     * @var string
     */
    public const SUM_GROSS_PRICE = 'sumGrossPrice';

    /**
     * @var string
     */
    public const UNIT_GROSS_PRICE = 'unitGrossPrice';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_SALES_EXPENSE = 'idSalesExpense';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const UNIT_NET_PRICE = 'unitNetPrice';

    /**
     * @var string
     */
    public const SUM_NET_PRICE = 'sumNetPrice';

    /**
     * @var string
     */
    public const UNIT_PRICE = 'unitPrice';

    /**
     * @var string
     */
    public const SUM_PRICE = 'sumPrice';

    /**
     * @var string
     */
    public const REFUNDABLE_AMOUNT = 'refundableAmount';

    /**
     * @var string
     */
    public const CANCELED_AMOUNT = 'canceledAmount';

    /**
     * @var string
     */
    public const UNIT_DISCOUNT_AMOUNT_AGGREGATION = 'unitDiscountAmountAggregation';

    /**
     * @var string
     */
    public const UNIT_PRICE_TO_PAY_AGGREGATION = 'unitPriceToPayAggregation';

    /**
     * @var string
     */
    public const SUM_PRICE_TO_PAY_AGGREGATION = 'sumPriceToPayAggregation';

    /**
     * @var string
     */
    public const IS_ORDERED = 'isOrdered';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const ID_EXPENSE = 'idExpense';

    /**
     * @var string
     */
    public const CALCULATED_DISCOUNTS = 'calculatedDiscounts';

    /**
     * @var string
     */
    public const SUM_DISCOUNT_AMOUNT_AGGREGATION = 'sumDiscountAmountAggregation';

    /**
     * @var string
     */
    public const TAX_AMOUNT_AFTER_CANCELLATION = 'taxAmountAfterCancellation';

    /**
     * @var string
     */
    public const STORE_CURRENCY_PRICE = 'storeCurrencyPrice';

    /**
     * @var \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    protected $shipment;

    /**
     * @var float|null
     */
    protected $taxRate;

    /**
     * @var int|null
     */
    protected $sumTaxAmount;

    /**
     * @var int|null
     */
    protected $unitTaxAmount;

    /**
     * @var int|null
     */
    protected $sumGrossPrice;

    /**
     * @var int|null
     */
    protected $unitGrossPrice;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idSalesExpense;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $unitNetPrice;

    /**
     * @var int|null
     */
    protected $sumNetPrice;

    /**
     * @var int|null
     */
    protected $unitPrice;

    /**
     * @var int|null
     */
    protected $sumPrice;

    /**
     * @var int|null
     */
    protected $refundableAmount;

    /**
     * @var int|null
     */
    protected $canceledAmount;

    /**
     * @var int|null
     */
    protected $unitDiscountAmountAggregation;

    /**
     * @var int|null
     */
    protected $unitPriceToPayAggregation;

    /**
     * @var int|null
     */
    protected $sumPriceToPayAggregation;

    /**
     * @var bool|null
     */
    protected $isOrdered;

    /**
     * @var int|null
     */
    protected $fkSalesOrder;

    /**
     * @var int|null
     */
    protected $idExpense;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    protected $calculatedDiscounts;

    /**
     * @var int|null
     */
    protected $sumDiscountAmountAggregation;

    /**
     * @var int|null
     */
    protected $taxAmountAfterCancellation;

    /**
     * @var int|null
     */
    protected $storeCurrencyPrice;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shipment' => 'shipment',
        'Shipment' => 'shipment',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'sum_tax_amount' => 'sumTaxAmount',
        'sumTaxAmount' => 'sumTaxAmount',
        'SumTaxAmount' => 'sumTaxAmount',
        'unit_tax_amount' => 'unitTaxAmount',
        'unitTaxAmount' => 'unitTaxAmount',
        'UnitTaxAmount' => 'unitTaxAmount',
        'sum_gross_price' => 'sumGrossPrice',
        'sumGrossPrice' => 'sumGrossPrice',
        'SumGrossPrice' => 'sumGrossPrice',
        'unit_gross_price' => 'unitGrossPrice',
        'unitGrossPrice' => 'unitGrossPrice',
        'UnitGrossPrice' => 'unitGrossPrice',
        'type' => 'type',
        'Type' => 'type',
        'name' => 'name',
        'Name' => 'name',
        'id_sales_expense' => 'idSalesExpense',
        'idSalesExpense' => 'idSalesExpense',
        'IdSalesExpense' => 'idSalesExpense',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'unit_net_price' => 'unitNetPrice',
        'unitNetPrice' => 'unitNetPrice',
        'UnitNetPrice' => 'unitNetPrice',
        'sum_net_price' => 'sumNetPrice',
        'sumNetPrice' => 'sumNetPrice',
        'SumNetPrice' => 'sumNetPrice',
        'unit_price' => 'unitPrice',
        'unitPrice' => 'unitPrice',
        'UnitPrice' => 'unitPrice',
        'sum_price' => 'sumPrice',
        'sumPrice' => 'sumPrice',
        'SumPrice' => 'sumPrice',
        'refundable_amount' => 'refundableAmount',
        'refundableAmount' => 'refundableAmount',
        'RefundableAmount' => 'refundableAmount',
        'canceled_amount' => 'canceledAmount',
        'canceledAmount' => 'canceledAmount',
        'CanceledAmount' => 'canceledAmount',
        'unit_discount_amount_aggregation' => 'unitDiscountAmountAggregation',
        'unitDiscountAmountAggregation' => 'unitDiscountAmountAggregation',
        'UnitDiscountAmountAggregation' => 'unitDiscountAmountAggregation',
        'unit_price_to_pay_aggregation' => 'unitPriceToPayAggregation',
        'unitPriceToPayAggregation' => 'unitPriceToPayAggregation',
        'UnitPriceToPayAggregation' => 'unitPriceToPayAggregation',
        'sum_price_to_pay_aggregation' => 'sumPriceToPayAggregation',
        'sumPriceToPayAggregation' => 'sumPriceToPayAggregation',
        'SumPriceToPayAggregation' => 'sumPriceToPayAggregation',
        'is_ordered' => 'isOrdered',
        'isOrdered' => 'isOrdered',
        'IsOrdered' => 'isOrdered',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'id_expense' => 'idExpense',
        'idExpense' => 'idExpense',
        'IdExpense' => 'idExpense',
        'calculated_discounts' => 'calculatedDiscounts',
        'calculatedDiscounts' => 'calculatedDiscounts',
        'CalculatedDiscounts' => 'calculatedDiscounts',
        'sum_discount_amount_aggregation' => 'sumDiscountAmountAggregation',
        'sumDiscountAmountAggregation' => 'sumDiscountAmountAggregation',
        'SumDiscountAmountAggregation' => 'sumDiscountAmountAggregation',
        'tax_amount_after_cancellation' => 'taxAmountAfterCancellation',
        'taxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'TaxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'store_currency_price' => 'storeCurrencyPrice',
        'storeCurrencyPrice' => 'storeCurrencyPrice',
        'StoreCurrencyPrice' => 'storeCurrencyPrice',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHIPMENT => [
            'type' => 'Generated\Shared\Transfer\ShipmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::SUM_TAX_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_tax_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_TAX_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_tax_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_GROSS_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_GROSS_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
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
        self::ID_SALES_EXPENSE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_expense',
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
        self::UNIT_NET_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_net_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_NET_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_net_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFUNDABLE_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'refundable_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CANCELED_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'canceled_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_DISCOUNT_AMOUNT_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_discount_amount_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_PRICE_TO_PAY_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_price_to_pay_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_PRICE_TO_PAY_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_price_to_pay_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ORDERED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_ordered',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_EXPENSE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_expense',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CALCULATED_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\CalculatedDiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'calculated_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_DISCOUNT_AMOUNT_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_discount_amount_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_AMOUNT_AFTER_CANCELLATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'tax_amount_after_cancellation',
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
    ];

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|QuoteApprovalShipmentConnector|QuoteRequest|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentTransfer|null $shipment
     *
     * @return $this
     */
    public function setShipment(ShipmentTransfer $shipment = null)
    {
        $this->shipment = $shipment;
        $this->modifiedProperties[self::SHIPMENT] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|QuoteApprovalShipmentConnector|QuoteRequest|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|QuoteApprovalShipmentConnector|QuoteRequest|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentTransfer $shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentOrFail(ShipmentTransfer $shipment)
    {
        return $this->setShipment($shipment);
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|QuoteApprovalShipmentConnector|QuoteRequest|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer
     */
    public function getShipmentOrFail()
    {
        if ($this->shipment === null) {
            $this->throwNullValueException(static::SHIPMENT);
        }

        return $this->shipment;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|QuoteApprovalShipmentConnector|QuoteRequest|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipment()
    {
        $this->assertPropertyIsSet(self::SHIPMENT);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @param int|null $sumTaxAmount
     *
     * @return $this
     */
    public function setSumTaxAmount($sumTaxAmount)
    {
        $this->sumTaxAmount = $sumTaxAmount;
        $this->modifiedProperties[self::SUM_TAX_AMOUNT] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getSumTaxAmount()
    {
        return $this->sumTaxAmount;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @param int|null $sumTaxAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumTaxAmountOrFail($sumTaxAmount)
    {
        if ($sumTaxAmount === null) {
            $this->throwNullValueException(static::SUM_TAX_AMOUNT);
        }

        return $this->setSumTaxAmount($sumTaxAmount);
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumTaxAmountOrFail()
    {
        if ($this->sumTaxAmount === null) {
            $this->throwNullValueException(static::SUM_TAX_AMOUNT);
        }

        return $this->sumTaxAmount;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumTaxAmount()
    {
        $this->assertPropertyIsSet(self::SUM_TAX_AMOUNT);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @param int|null $unitTaxAmount
     *
     * @return $this
     */
    public function setUnitTaxAmount($unitTaxAmount)
    {
        $this->unitTaxAmount = $unitTaxAmount;
        $this->modifiedProperties[self::UNIT_TAX_AMOUNT] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getUnitTaxAmount()
    {
        return $this->unitTaxAmount;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @param int|null $unitTaxAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitTaxAmountOrFail($unitTaxAmount)
    {
        if ($unitTaxAmount === null) {
            $this->throwNullValueException(static::UNIT_TAX_AMOUNT);
        }

        return $this->setUnitTaxAmount($unitTaxAmount);
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitTaxAmountOrFail()
    {
        if ($this->unitTaxAmount === null) {
            $this->throwNullValueException(static::UNIT_TAX_AMOUNT);
        }

        return $this->unitTaxAmount;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitTaxAmount()
    {
        $this->assertPropertyIsSet(self::UNIT_TAX_AMOUNT);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @param int|null $sumGrossPrice
     *
     * @return $this
     */
    public function setSumGrossPrice($sumGrossPrice)
    {
        $this->sumGrossPrice = $sumGrossPrice;
        $this->modifiedProperties[self::SUM_GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getSumGrossPrice()
    {
        return $this->sumGrossPrice;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @param int|null $sumGrossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumGrossPriceOrFail($sumGrossPrice)
    {
        if ($sumGrossPrice === null) {
            $this->throwNullValueException(static::SUM_GROSS_PRICE);
        }

        return $this->setSumGrossPrice($sumGrossPrice);
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumGrossPriceOrFail()
    {
        if ($this->sumGrossPrice === null) {
            $this->throwNullValueException(static::SUM_GROSS_PRICE);
        }

        return $this->sumGrossPrice;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumGrossPrice()
    {
        $this->assertPropertyIsSet(self::SUM_GROSS_PRICE);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
     *
     * @param int|null $unitGrossPrice
     *
     * @return $this
     */
    public function setUnitGrossPrice($unitGrossPrice)
    {
        $this->unitGrossPrice = $unitGrossPrice;
        $this->modifiedProperties[self::UNIT_GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
     *
     * @return int|null
     */
    public function getUnitGrossPrice()
    {
        return $this->unitGrossPrice;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
     *
     * @param int|null $unitGrossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitGrossPriceOrFail($unitGrossPrice)
    {
        if ($unitGrossPrice === null) {
            $this->throwNullValueException(static::UNIT_GROSS_PRICE);
        }

        return $this->setUnitGrossPrice($unitGrossPrice);
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitGrossPriceOrFail()
    {
        if ($this->unitGrossPrice === null) {
            $this->throwNullValueException(static::UNIT_GROSS_PRICE);
        }

        return $this->unitGrossPrice;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitGrossPrice()
    {
        $this->assertPropertyIsSet(self::UNIT_GROSS_PRICE);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|SalesOrderThresholdWidget|Calculation|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|SalesOrderThresholdWidget|Calculation|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|SalesOrderThresholdWidget|Calculation|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|SalesOrderThresholdWidget|Calculation|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestPage|SalesOrderThresholdWidget|Calculation|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|Discount|MultiCart|OrdersRestApi|Refund|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi|PersistentCart
     *
     * @param int|null $idSalesExpense
     *
     * @return $this
     */
    public function setIdSalesExpense($idSalesExpense)
    {
        $this->idSalesExpense = $idSalesExpense;
        $this->modifiedProperties[self::ID_SALES_EXPENSE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Discount|MultiCart|OrdersRestApi|Refund|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi|PersistentCart
     *
     * @return int|null
     */
    public function getIdSalesExpense()
    {
        return $this->idSalesExpense;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Discount|MultiCart|OrdersRestApi|Refund|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi|PersistentCart
     *
     * @param int|null $idSalesExpense
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesExpenseOrFail($idSalesExpense)
    {
        if ($idSalesExpense === null) {
            $this->throwNullValueException(static::ID_SALES_EXPENSE);
        }

        return $this->setIdSalesExpense($idSalesExpense);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Discount|MultiCart|OrdersRestApi|Refund|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi|PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesExpenseOrFail()
    {
        if ($this->idSalesExpense === null) {
            $this->throwNullValueException(static::ID_SALES_EXPENSE);
        }

        return $this->idSalesExpense;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Discount|MultiCart|OrdersRestApi|Refund|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi|PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesExpense()
    {
        $this->assertPropertyIsSet(self::ID_SALES_EXPENSE);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi
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
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi
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
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi
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
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|ShipmentsRestApi
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
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @param int|null $unitNetPrice
     *
     * @return $this
     */
    public function setUnitNetPrice($unitNetPrice)
    {
        $this->unitNetPrice = $unitNetPrice;
        $this->modifiedProperties[self::UNIT_NET_PRICE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getUnitNetPrice()
    {
        return $this->unitNetPrice;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @param int|null $unitNetPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitNetPriceOrFail($unitNetPrice)
    {
        if ($unitNetPrice === null) {
            $this->throwNullValueException(static::UNIT_NET_PRICE);
        }

        return $this->setUnitNetPrice($unitNetPrice);
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitNetPriceOrFail()
    {
        if ($this->unitNetPrice === null) {
            $this->throwNullValueException(static::UNIT_NET_PRICE);
        }

        return $this->unitNetPrice;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitNetPrice()
    {
        $this->assertPropertyIsSet(self::UNIT_NET_PRICE);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment
     *
     * @param int|null $sumNetPrice
     *
     * @return $this
     */
    public function setSumNetPrice($sumNetPrice)
    {
        $this->sumNetPrice = $sumNetPrice;
        $this->modifiedProperties[self::SUM_NET_PRICE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment
     *
     * @return int|null
     */
    public function getSumNetPrice()
    {
        return $this->sumNetPrice;
    }

    /**
     * @module CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment
     *
     * @param int|null $sumNetPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumNetPriceOrFail($sumNetPrice)
    {
        if ($sumNetPrice === null) {
            $this->throwNullValueException(static::SUM_NET_PRICE);
        }

        return $this->setSumNetPrice($sumNetPrice);
    }

    /**
     * @module CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumNetPriceOrFail()
    {
        if ($this->sumNetPrice === null) {
            $this->throwNullValueException(static::SUM_NET_PRICE);
        }

        return $this->sumNetPrice;
    }

    /**
     * @module CustomerPage|Calculation|OrdersRestApi|SalesOrderThreshold|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumNetPrice()
    {
        $this->assertPropertyIsSet(self::SUM_NET_PRICE);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @param int|null $unitPrice
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        $this->modifiedProperties[self::UNIT_PRICE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @param int|null $unitPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitPriceOrFail($unitPrice)
    {
        if ($unitPrice === null) {
            $this->throwNullValueException(static::UNIT_PRICE);
        }

        return $this->setUnitPrice($unitPrice);
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitPriceOrFail()
    {
        if ($this->unitPrice === null) {
            $this->throwNullValueException(static::UNIT_PRICE);
        }

        return $this->unitPrice;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitPrice()
    {
        $this->assertPropertyIsSet(self::UNIT_PRICE);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentGui|Shipment|Tax
     *
     * @param int|null $sumPrice
     *
     * @return $this
     */
    public function setSumPrice($sumPrice)
    {
        $this->sumPrice = $sumPrice;
        $this->modifiedProperties[self::SUM_PRICE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentGui|Shipment|Tax
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->sumPrice;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentGui|Shipment|Tax
     *
     * @param int|null $sumPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumPriceOrFail($sumPrice)
    {
        if ($sumPrice === null) {
            $this->throwNullValueException(static::SUM_PRICE);
        }

        return $this->setSumPrice($sumPrice);
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentGui|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumPriceOrFail()
    {
        if ($this->sumPrice === null) {
            $this->throwNullValueException(static::SUM_PRICE);
        }

        return $this->sumPrice;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentGui|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumPrice()
    {
        $this->assertPropertyIsSet(self::SUM_PRICE);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @param int|null $refundableAmount
     *
     * @return $this
     */
    public function setRefundableAmount($refundableAmount)
    {
        $this->refundableAmount = $refundableAmount;
        $this->modifiedProperties[self::REFUNDABLE_AMOUNT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @return int|null
     */
    public function getRefundableAmount()
    {
        return $this->refundableAmount;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @param int|null $refundableAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundableAmountOrFail($refundableAmount)
    {
        if ($refundableAmount === null) {
            $this->throwNullValueException(static::REFUNDABLE_AMOUNT);
        }

        return $this->setRefundableAmount($refundableAmount);
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRefundableAmountOrFail()
    {
        if ($this->refundableAmount === null) {
            $this->throwNullValueException(static::REFUNDABLE_AMOUNT);
        }

        return $this->refundableAmount;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundableAmount()
    {
        $this->assertPropertyIsSet(self::REFUNDABLE_AMOUNT);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales|Tax
     *
     * @param int|null $canceledAmount
     *
     * @return $this
     */
    public function setCanceledAmount($canceledAmount)
    {
        $this->canceledAmount = $canceledAmount;
        $this->modifiedProperties[self::CANCELED_AMOUNT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales|Tax
     *
     * @return int|null
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales|Tax
     *
     * @param int|null $canceledAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCanceledAmountOrFail($canceledAmount)
    {
        if ($canceledAmount === null) {
            $this->throwNullValueException(static::CANCELED_AMOUNT);
        }

        return $this->setCanceledAmount($canceledAmount);
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCanceledAmountOrFail()
    {
        if ($this->canceledAmount === null) {
            $this->throwNullValueException(static::CANCELED_AMOUNT);
        }

        return $this->canceledAmount;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCanceledAmount()
    {
        $this->assertPropertyIsSet(self::CANCELED_AMOUNT);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @param int|null $unitDiscountAmountAggregation
     *
     * @return $this
     */
    public function setUnitDiscountAmountAggregation($unitDiscountAmountAggregation)
    {
        $this->unitDiscountAmountAggregation = $unitDiscountAmountAggregation;
        $this->modifiedProperties[self::UNIT_DISCOUNT_AMOUNT_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getUnitDiscountAmountAggregation()
    {
        return $this->unitDiscountAmountAggregation;
    }

    /**
     * @module CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @param int|null $unitDiscountAmountAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitDiscountAmountAggregationOrFail($unitDiscountAmountAggregation)
    {
        if ($unitDiscountAmountAggregation === null) {
            $this->throwNullValueException(static::UNIT_DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->setUnitDiscountAmountAggregation($unitDiscountAmountAggregation);
    }

    /**
     * @module CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitDiscountAmountAggregationOrFail()
    {
        if ($this->unitDiscountAmountAggregation === null) {
            $this->throwNullValueException(static::UNIT_DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->unitDiscountAmountAggregation;
    }

    /**
     * @module CustomerPage|Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitDiscountAmountAggregation()
    {
        $this->assertPropertyIsSet(self::UNIT_DISCOUNT_AMOUNT_AGGREGATION);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment
     *
     * @param int|null $unitPriceToPayAggregation
     *
     * @return $this
     */
    public function setUnitPriceToPayAggregation($unitPriceToPayAggregation)
    {
        $this->unitPriceToPayAggregation = $unitPriceToPayAggregation;
        $this->modifiedProperties[self::UNIT_PRICE_TO_PAY_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment
     *
     * @return int|null
     */
    public function getUnitPriceToPayAggregation()
    {
        return $this->unitPriceToPayAggregation;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment
     *
     * @param int|null $unitPriceToPayAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitPriceToPayAggregationOrFail($unitPriceToPayAggregation)
    {
        if ($unitPriceToPayAggregation === null) {
            $this->throwNullValueException(static::UNIT_PRICE_TO_PAY_AGGREGATION);
        }

        return $this->setUnitPriceToPayAggregation($unitPriceToPayAggregation);
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitPriceToPayAggregationOrFail()
    {
        if ($this->unitPriceToPayAggregation === null) {
            $this->throwNullValueException(static::UNIT_PRICE_TO_PAY_AGGREGATION);
        }

        return $this->unitPriceToPayAggregation;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitPriceToPayAggregation()
    {
        $this->assertPropertyIsSet(self::UNIT_PRICE_TO_PAY_AGGREGATION);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @param int|null $sumPriceToPayAggregation
     *
     * @return $this
     */
    public function setSumPriceToPayAggregation($sumPriceToPayAggregation)
    {
        $this->sumPriceToPayAggregation = $sumPriceToPayAggregation;
        $this->modifiedProperties[self::SUM_PRICE_TO_PAY_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getSumPriceToPayAggregation()
    {
        return $this->sumPriceToPayAggregation;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @param int|null $sumPriceToPayAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumPriceToPayAggregationOrFail($sumPriceToPayAggregation)
    {
        if ($sumPriceToPayAggregation === null) {
            $this->throwNullValueException(static::SUM_PRICE_TO_PAY_AGGREGATION);
        }

        return $this->setSumPriceToPayAggregation($sumPriceToPayAggregation);
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumPriceToPayAggregationOrFail()
    {
        if ($this->sumPriceToPayAggregation === null) {
            $this->throwNullValueException(static::SUM_PRICE_TO_PAY_AGGREGATION);
        }

        return $this->sumPriceToPayAggregation;
    }

    /**
     * @module CustomerPage|Calculation|SalesOrderThreshold|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumPriceToPayAggregation()
    {
        $this->assertPropertyIsSet(self::SUM_PRICE_TO_PAY_AGGREGATION);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @param bool|null $isOrdered
     *
     * @return $this
     */
    public function setIsOrdered($isOrdered)
    {
        $this->isOrdered = $isOrdered;
        $this->modifiedProperties[self::IS_ORDERED] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @return bool|null
     */
    public function getIsOrdered()
    {
        return $this->isOrdered;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @param bool|null $isOrdered
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsOrderedOrFail($isOrdered)
    {
        if ($isOrdered === null) {
            $this->throwNullValueException(static::IS_ORDERED);
        }

        return $this->setIsOrdered($isOrdered);
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOrderedOrFail()
    {
        if ($this->isOrdered === null) {
            $this->throwNullValueException(static::IS_ORDERED);
        }

        return $this->isOrdered;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOrdered()
    {
        $this->assertPropertyIsSet(self::IS_ORDERED);

        return $this;
    }

    /**
     * @module CustomerPage|SalesOrderThreshold|Sales|Shipment
     *
     * @param int|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|SalesOrderThreshold|Sales|Shipment
     *
     * @return int|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module CustomerPage|SalesOrderThreshold|Sales|Shipment
     *
     * @param int|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module CustomerPage|SalesOrderThreshold|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module CustomerPage|SalesOrderThreshold|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

        return $this;
    }

    /**
     * @module Calculation|Refund
     *
     * @param int|null $idExpense
     *
     * @return $this
     */
    public function setIdExpense($idExpense)
    {
        $this->idExpense = $idExpense;
        $this->modifiedProperties[self::ID_EXPENSE] = true;

        return $this;
    }

    /**
     * @module Calculation|Refund
     *
     * @return int|null
     */
    public function getIdExpense()
    {
        return $this->idExpense;
    }

    /**
     * @module Calculation|Refund
     *
     * @param int|null $idExpense
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdExpenseOrFail($idExpense)
    {
        if ($idExpense === null) {
            $this->throwNullValueException(static::ID_EXPENSE);
        }

        return $this->setIdExpense($idExpense);
    }

    /**
     * @module Calculation|Refund
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdExpenseOrFail()
    {
        if ($this->idExpense === null) {
            $this->throwNullValueException(static::ID_EXPENSE);
        }

        return $this->idExpense;
    }

    /**
     * @module Calculation|Refund
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdExpense()
    {
        $this->assertPropertyIsSet(self::ID_EXPENSE);

        return $this;
    }

    /**
     * @module Calculation|Discount|ShipmentDiscountConnector
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[] $calculatedDiscounts
     *
     * @return $this
     */
    public function setCalculatedDiscounts(ArrayObject $calculatedDiscounts)
    {
        $this->calculatedDiscounts = $calculatedDiscounts;
        $this->modifiedProperties[self::CALCULATED_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount|ShipmentDiscountConnector
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    public function getCalculatedDiscounts()
    {
        return $this->calculatedDiscounts;
    }

    /**
     * @module Calculation|Discount|ShipmentDiscountConnector
     *
     * @param \Generated\Shared\Transfer\CalculatedDiscountTransfer $calculatedDiscount
     *
     * @return $this
     */
    public function addCalculatedDiscount(CalculatedDiscountTransfer $calculatedDiscount)
    {
        $this->calculatedDiscounts[] = $calculatedDiscount;
        $this->modifiedProperties[self::CALCULATED_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount|ShipmentDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCalculatedDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::CALCULATED_DISCOUNTS);

        return $this;
    }

    /**
     * @module Calculation|Sales|Shipment|Tax
     *
     * @param int|null $sumDiscountAmountAggregation
     *
     * @return $this
     */
    public function setSumDiscountAmountAggregation($sumDiscountAmountAggregation)
    {
        $this->sumDiscountAmountAggregation = $sumDiscountAmountAggregation;
        $this->modifiedProperties[self::SUM_DISCOUNT_AMOUNT_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module Calculation|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getSumDiscountAmountAggregation()
    {
        return $this->sumDiscountAmountAggregation;
    }

    /**
     * @module Calculation|Sales|Shipment|Tax
     *
     * @param int|null $sumDiscountAmountAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumDiscountAmountAggregationOrFail($sumDiscountAmountAggregation)
    {
        if ($sumDiscountAmountAggregation === null) {
            $this->throwNullValueException(static::SUM_DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->setSumDiscountAmountAggregation($sumDiscountAmountAggregation);
    }

    /**
     * @module Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumDiscountAmountAggregationOrFail()
    {
        if ($this->sumDiscountAmountAggregation === null) {
            $this->throwNullValueException(static::SUM_DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->sumDiscountAmountAggregation;
    }

    /**
     * @module Calculation|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumDiscountAmountAggregation()
    {
        $this->assertPropertyIsSet(self::SUM_DISCOUNT_AMOUNT_AGGREGATION);

        return $this;
    }

    /**
     * @module Calculation|Tax
     *
     * @param int|null $taxAmountAfterCancellation
     *
     * @return $this
     */
    public function setTaxAmountAfterCancellation($taxAmountAfterCancellation)
    {
        $this->taxAmountAfterCancellation = $taxAmountAfterCancellation;
        $this->modifiedProperties[self::TAX_AMOUNT_AFTER_CANCELLATION] = true;

        return $this;
    }

    /**
     * @module Calculation|Tax
     *
     * @return int|null
     */
    public function getTaxAmountAfterCancellation()
    {
        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module Calculation|Tax
     *
     * @param int|null $taxAmountAfterCancellation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxAmountAfterCancellationOrFail($taxAmountAfterCancellation)
    {
        if ($taxAmountAfterCancellation === null) {
            $this->throwNullValueException(static::TAX_AMOUNT_AFTER_CANCELLATION);
        }

        return $this->setTaxAmountAfterCancellation($taxAmountAfterCancellation);
    }

    /**
     * @module Calculation|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTaxAmountAfterCancellationOrFail()
    {
        if ($this->taxAmountAfterCancellation === null) {
            $this->throwNullValueException(static::TAX_AMOUNT_AFTER_CANCELLATION);
        }

        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module Calculation|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxAmountAfterCancellation()
    {
        $this->assertPropertyIsSet(self::TAX_AMOUNT_AFTER_CANCELLATION);

        return $this;
    }

    /**
     * @module QuoteApprovalShipmentConnector
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
     * @module QuoteApprovalShipmentConnector
     *
     * @return int|null
     */
    public function getStoreCurrencyPrice()
    {
        return $this->storeCurrencyPrice;
    }

    /**
     * @module QuoteApprovalShipmentConnector
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
     * @module QuoteApprovalShipmentConnector
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
     * @module QuoteApprovalShipmentConnector
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
                case 'taxRate':
                case 'sumTaxAmount':
                case 'unitTaxAmount':
                case 'sumGrossPrice':
                case 'unitGrossPrice':
                case 'type':
                case 'name':
                case 'idSalesExpense':
                case 'quantity':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitPrice':
                case 'sumPrice':
                case 'refundableAmount':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'isOrdered':
                case 'fkSalesOrder':
                case 'idExpense':
                case 'sumDiscountAmountAggregation':
                case 'taxAmountAfterCancellation':
                case 'storeCurrencyPrice':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shipment':
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
                case 'calculatedDiscounts':
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
                case 'taxRate':
                case 'sumTaxAmount':
                case 'unitTaxAmount':
                case 'sumGrossPrice':
                case 'unitGrossPrice':
                case 'type':
                case 'name':
                case 'idSalesExpense':
                case 'quantity':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitPrice':
                case 'sumPrice':
                case 'refundableAmount':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'isOrdered':
                case 'fkSalesOrder':
                case 'idExpense':
                case 'sumDiscountAmountAggregation':
                case 'taxAmountAfterCancellation':
                case 'storeCurrencyPrice':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'calculatedDiscounts':
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
                case 'taxRate':
                case 'sumTaxAmount':
                case 'unitTaxAmount':
                case 'sumGrossPrice':
                case 'unitGrossPrice':
                case 'type':
                case 'name':
                case 'idSalesExpense':
                case 'quantity':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitPrice':
                case 'sumPrice':
                case 'refundableAmount':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'isOrdered':
                case 'fkSalesOrder':
                case 'idExpense':
                case 'sumDiscountAmountAggregation':
                case 'taxAmountAfterCancellation':
                case 'storeCurrencyPrice':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'calculatedDiscounts':
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
        $this->calculatedDiscounts = $this->calculatedDiscounts ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'taxRate' => $this->taxRate,
            'sumTaxAmount' => $this->sumTaxAmount,
            'unitTaxAmount' => $this->unitTaxAmount,
            'sumGrossPrice' => $this->sumGrossPrice,
            'unitGrossPrice' => $this->unitGrossPrice,
            'type' => $this->type,
            'name' => $this->name,
            'idSalesExpense' => $this->idSalesExpense,
            'quantity' => $this->quantity,
            'unitNetPrice' => $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice,
            'unitPrice' => $this->unitPrice,
            'sumPrice' => $this->sumPrice,
            'refundableAmount' => $this->refundableAmount,
            'canceledAmount' => $this->canceledAmount,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation,
            'isOrdered' => $this->isOrdered,
            'fkSalesOrder' => $this->fkSalesOrder,
            'idExpense' => $this->idExpense,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation,
            'storeCurrencyPrice' => $this->storeCurrencyPrice,
            'shipment' => $this->shipment,
            'calculatedDiscounts' => $this->calculatedDiscounts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'tax_rate' => $this->taxRate,
            'sum_tax_amount' => $this->sumTaxAmount,
            'unit_tax_amount' => $this->unitTaxAmount,
            'sum_gross_price' => $this->sumGrossPrice,
            'unit_gross_price' => $this->unitGrossPrice,
            'type' => $this->type,
            'name' => $this->name,
            'id_sales_expense' => $this->idSalesExpense,
            'quantity' => $this->quantity,
            'unit_net_price' => $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice,
            'unit_price' => $this->unitPrice,
            'sum_price' => $this->sumPrice,
            'refundable_amount' => $this->refundableAmount,
            'canceled_amount' => $this->canceledAmount,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation,
            'is_ordered' => $this->isOrdered,
            'fk_sales_order' => $this->fkSalesOrder,
            'id_expense' => $this->idExpense,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation,
            'store_currency_price' => $this->storeCurrencyPrice,
            'shipment' => $this->shipment,
            'calculated_discounts' => $this->calculatedDiscounts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'sum_tax_amount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, false) : $this->sumTaxAmount,
            'unit_tax_amount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, false) : $this->unitTaxAmount,
            'sum_gross_price' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, false) : $this->sumGrossPrice,
            'unit_gross_price' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, false) : $this->unitGrossPrice,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_sales_expense' => $this->idSalesExpense instanceof AbstractTransfer ? $this->idSalesExpense->toArray(true, false) : $this->idSalesExpense,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'unit_net_price' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, false) : $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, false) : $this->sumNetPrice,
            'unit_price' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, false) : $this->unitPrice,
            'sum_price' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, false) : $this->sumPrice,
            'refundable_amount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, false) : $this->refundableAmount,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, false) : $this->unitDiscountAmountAggregation,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, false) : $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, false) : $this->sumPriceToPayAggregation,
            'is_ordered' => $this->isOrdered instanceof AbstractTransfer ? $this->isOrdered->toArray(true, false) : $this->isOrdered,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'id_expense' => $this->idExpense instanceof AbstractTransfer ? $this->idExpense->toArray(true, false) : $this->idExpense,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, false) : $this->sumDiscountAmountAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, false) : $this->taxAmountAfterCancellation,
            'store_currency_price' => $this->storeCurrencyPrice instanceof AbstractTransfer ? $this->storeCurrencyPrice->toArray(true, false) : $this->storeCurrencyPrice,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, false) : $this->shipment,
            'calculated_discounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, false) : $this->addValuesToCollection($this->calculatedDiscounts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'sumTaxAmount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, true) : $this->sumTaxAmount,
            'unitTaxAmount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, true) : $this->unitTaxAmount,
            'sumGrossPrice' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, true) : $this->sumGrossPrice,
            'unitGrossPrice' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, true) : $this->unitGrossPrice,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idSalesExpense' => $this->idSalesExpense instanceof AbstractTransfer ? $this->idSalesExpense->toArray(true, true) : $this->idSalesExpense,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'unitNetPrice' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, true) : $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, true) : $this->sumNetPrice,
            'unitPrice' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, true) : $this->unitPrice,
            'sumPrice' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, true) : $this->sumPrice,
            'refundableAmount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, true) : $this->refundableAmount,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, true) : $this->unitDiscountAmountAggregation,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, true) : $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, true) : $this->sumPriceToPayAggregation,
            'isOrdered' => $this->isOrdered instanceof AbstractTransfer ? $this->isOrdered->toArray(true, true) : $this->isOrdered,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'idExpense' => $this->idExpense instanceof AbstractTransfer ? $this->idExpense->toArray(true, true) : $this->idExpense,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, true) : $this->sumDiscountAmountAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, true) : $this->taxAmountAfterCancellation,
            'storeCurrencyPrice' => $this->storeCurrencyPrice instanceof AbstractTransfer ? $this->storeCurrencyPrice->toArray(true, true) : $this->storeCurrencyPrice,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, true) : $this->shipment,
            'calculatedDiscounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, true) : $this->addValuesToCollection($this->calculatedDiscounts, true, true),
        ];
    }
}
