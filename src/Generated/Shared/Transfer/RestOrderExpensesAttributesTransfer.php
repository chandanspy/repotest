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
class RestOrderExpensesAttributesTransfer extends AbstractTransfer
{
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
    public const SUM_PRICE = 'sumPrice';

    /**
     * @var string
     */
    public const UNIT_GROSS_PRICE = 'unitGrossPrice';

    /**
     * @var string
     */
    public const SUM_GROSS_PRICE = 'sumGrossPrice';

    /**
     * @var string
     */
    public const TAX_RATE = 'taxRate';

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
    public const CANCELED_AMOUNT = 'canceledAmount';

    /**
     * @var string
     */
    public const UNIT_DISCOUNT_AMOUNT_AGGREGATION = 'unitDiscountAmountAggregation';

    /**
     * @var string
     */
    public const SUM_DISCOUNT_AMOUNT_AGGREGATION = 'sumDiscountAmountAggregation';

    /**
     * @var string
     */
    public const UNIT_TAX_AMOUNT = 'unitTaxAmount';

    /**
     * @var string
     */
    public const SUM_TAX_AMOUNT = 'sumTaxAmount';

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
    public const TAX_AMOUNT_AFTER_CANCELLATION = 'taxAmountAfterCancellation';

    /**
     * @var string
     */
    public const ID_SHIPMENT = 'idShipment';

    /**
     * @var string
     */
    public const ID_SALES_EXPENSE = 'idSalesExpense';

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
    protected $sumPrice;

    /**
     * @var int|null
     */
    protected $unitGrossPrice;

    /**
     * @var int|null
     */
    protected $sumGrossPrice;

    /**
     * @var float|null
     */
    protected $taxRate;

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
    protected $canceledAmount;

    /**
     * @var int|null
     */
    protected $unitDiscountAmountAggregation;

    /**
     * @var int|null
     */
    protected $sumDiscountAmountAggregation;

    /**
     * @var int|null
     */
    protected $unitTaxAmount;

    /**
     * @var int|null
     */
    protected $sumTaxAmount;

    /**
     * @var int|null
     */
    protected $unitPriceToPayAggregation;

    /**
     * @var int|null
     */
    protected $sumPriceToPayAggregation;

    /**
     * @var int|null
     */
    protected $taxAmountAfterCancellation;

    /**
     * @var int|null
     */
    protected $idShipment;

    /**
     * @var int|null
     */
    protected $idSalesExpense;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'name' => 'name',
        'Name' => 'name',
        'sum_price' => 'sumPrice',
        'sumPrice' => 'sumPrice',
        'SumPrice' => 'sumPrice',
        'unit_gross_price' => 'unitGrossPrice',
        'unitGrossPrice' => 'unitGrossPrice',
        'UnitGrossPrice' => 'unitGrossPrice',
        'sum_gross_price' => 'sumGrossPrice',
        'sumGrossPrice' => 'sumGrossPrice',
        'SumGrossPrice' => 'sumGrossPrice',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'unit_net_price' => 'unitNetPrice',
        'unitNetPrice' => 'unitNetPrice',
        'UnitNetPrice' => 'unitNetPrice',
        'sum_net_price' => 'sumNetPrice',
        'sumNetPrice' => 'sumNetPrice',
        'SumNetPrice' => 'sumNetPrice',
        'canceled_amount' => 'canceledAmount',
        'canceledAmount' => 'canceledAmount',
        'CanceledAmount' => 'canceledAmount',
        'unit_discount_amount_aggregation' => 'unitDiscountAmountAggregation',
        'unitDiscountAmountAggregation' => 'unitDiscountAmountAggregation',
        'UnitDiscountAmountAggregation' => 'unitDiscountAmountAggregation',
        'sum_discount_amount_aggregation' => 'sumDiscountAmountAggregation',
        'sumDiscountAmountAggregation' => 'sumDiscountAmountAggregation',
        'SumDiscountAmountAggregation' => 'sumDiscountAmountAggregation',
        'unit_tax_amount' => 'unitTaxAmount',
        'unitTaxAmount' => 'unitTaxAmount',
        'UnitTaxAmount' => 'unitTaxAmount',
        'sum_tax_amount' => 'sumTaxAmount',
        'sumTaxAmount' => 'sumTaxAmount',
        'SumTaxAmount' => 'sumTaxAmount',
        'unit_price_to_pay_aggregation' => 'unitPriceToPayAggregation',
        'unitPriceToPayAggregation' => 'unitPriceToPayAggregation',
        'UnitPriceToPayAggregation' => 'unitPriceToPayAggregation',
        'sum_price_to_pay_aggregation' => 'sumPriceToPayAggregation',
        'sumPriceToPayAggregation' => 'sumPriceToPayAggregation',
        'SumPriceToPayAggregation' => 'sumPriceToPayAggregation',
        'tax_amount_after_cancellation' => 'taxAmountAfterCancellation',
        'taxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'TaxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'id_shipment' => 'idShipment',
        'idShipment' => 'idShipment',
        'IdShipment' => 'idShipment',
        'id_sales_expense' => 'idSalesExpense',
        'idSalesExpense' => 'idSalesExpense',
        'IdSalesExpense' => 'idSalesExpense',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_SHIPMENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shipment',
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
    ];

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->sumPrice;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getUnitGrossPrice()
    {
        return $this->unitGrossPrice;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getSumGrossPrice()
    {
        return $this->sumGrossPrice;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getUnitNetPrice()
    {
        return $this->unitNetPrice;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getSumNetPrice()
    {
        return $this->sumNetPrice;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getUnitDiscountAmountAggregation()
    {
        return $this->unitDiscountAmountAggregation;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getSumDiscountAmountAggregation()
    {
        return $this->sumDiscountAmountAggregation;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getUnitTaxAmount()
    {
        return $this->unitTaxAmount;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getSumTaxAmount()
    {
        return $this->sumTaxAmount;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getUnitPriceToPayAggregation()
    {
        return $this->unitPriceToPayAggregation;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getSumPriceToPayAggregation()
    {
        return $this->sumPriceToPayAggregation;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getTaxAmountAfterCancellation()
    {
        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @param int|null $idShipment
     *
     * @return $this
     */
    public function setIdShipment($idShipment)
    {
        $this->idShipment = $idShipment;
        $this->modifiedProperties[self::ID_SHIPMENT] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getIdShipment()
    {
        return $this->idShipment;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @param int|null $idShipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentOrFail($idShipment)
    {
        if ($idShipment === null) {
            $this->throwNullValueException(static::ID_SHIPMENT);
        }

        return $this->setIdShipment($idShipment);
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShipmentOrFail()
    {
        if ($this->idShipment === null) {
            $this->throwNullValueException(static::ID_SHIPMENT);
        }

        return $this->idShipment;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipment()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT);

        return $this;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
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
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getIdSalesExpense()
    {
        return $this->idSalesExpense;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
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
     * @module OrdersRestApi|ShipmentsRestApi
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
     * @module OrdersRestApi|ShipmentsRestApi
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
                case 'type':
                case 'name':
                case 'sumPrice':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitTaxAmount':
                case 'sumTaxAmount':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'taxAmountAfterCancellation':
                case 'idShipment':
                case 'idSalesExpense':
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
                case 'type':
                case 'name':
                case 'sumPrice':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitTaxAmount':
                case 'sumTaxAmount':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'taxAmountAfterCancellation':
                case 'idShipment':
                case 'idSalesExpense':
                    $values[$arrayKey] = $value;

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
                case 'type':
                case 'name':
                case 'sumPrice':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitTaxAmount':
                case 'sumTaxAmount':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'taxAmountAfterCancellation':
                case 'idShipment':
                case 'idSalesExpense':
                    $values[$arrayKey] = $value;

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
            'type' => $this->type,
            'name' => $this->name,
            'sumPrice' => $this->sumPrice,
            'unitGrossPrice' => $this->unitGrossPrice,
            'sumGrossPrice' => $this->sumGrossPrice,
            'taxRate' => $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice,
            'canceledAmount' => $this->canceledAmount,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation,
            'unitTaxAmount' => $this->unitTaxAmount,
            'sumTaxAmount' => $this->sumTaxAmount,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation,
            'idShipment' => $this->idShipment,
            'idSalesExpense' => $this->idSalesExpense,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'name' => $this->name,
            'sum_price' => $this->sumPrice,
            'unit_gross_price' => $this->unitGrossPrice,
            'sum_gross_price' => $this->sumGrossPrice,
            'tax_rate' => $this->taxRate,
            'unit_net_price' => $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice,
            'canceled_amount' => $this->canceledAmount,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation,
            'unit_tax_amount' => $this->unitTaxAmount,
            'sum_tax_amount' => $this->sumTaxAmount,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation,
            'id_shipment' => $this->idShipment,
            'id_sales_expense' => $this->idSalesExpense,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'sum_price' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, false) : $this->sumPrice,
            'unit_gross_price' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, false) : $this->unitGrossPrice,
            'sum_gross_price' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, false) : $this->sumGrossPrice,
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'unit_net_price' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, false) : $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, false) : $this->sumNetPrice,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, false) : $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, false) : $this->sumDiscountAmountAggregation,
            'unit_tax_amount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, false) : $this->unitTaxAmount,
            'sum_tax_amount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, false) : $this->sumTaxAmount,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, false) : $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, false) : $this->sumPriceToPayAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, false) : $this->taxAmountAfterCancellation,
            'id_shipment' => $this->idShipment instanceof AbstractTransfer ? $this->idShipment->toArray(true, false) : $this->idShipment,
            'id_sales_expense' => $this->idSalesExpense instanceof AbstractTransfer ? $this->idSalesExpense->toArray(true, false) : $this->idSalesExpense,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'sumPrice' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, true) : $this->sumPrice,
            'unitGrossPrice' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, true) : $this->unitGrossPrice,
            'sumGrossPrice' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, true) : $this->sumGrossPrice,
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, true) : $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, true) : $this->sumNetPrice,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, true) : $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, true) : $this->sumDiscountAmountAggregation,
            'unitTaxAmount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, true) : $this->unitTaxAmount,
            'sumTaxAmount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, true) : $this->sumTaxAmount,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, true) : $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, true) : $this->sumPriceToPayAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, true) : $this->taxAmountAfterCancellation,
            'idShipment' => $this->idShipment instanceof AbstractTransfer ? $this->idShipment->toArray(true, true) : $this->idShipment,
            'idSalesExpense' => $this->idSalesExpense instanceof AbstractTransfer ? $this->idSalesExpense->toArray(true, true) : $this->idSalesExpense,
        ];
    }
}
