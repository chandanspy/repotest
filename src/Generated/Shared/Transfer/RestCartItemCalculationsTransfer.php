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
class RestCartItemCalculationsTransfer extends AbstractTransfer
{
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
    public const UNIT_GROSS_PRICE = 'unitGrossPrice';

    /**
     * @var string
     */
    public const SUM_GROSS_PRICE = 'sumGrossPrice';

    /**
     * @var string
     */
    public const UNIT_TAX_AMOUNT_FULL_AGGREGATION = 'unitTaxAmountFullAggregation';

    /**
     * @var string
     */
    public const SUM_TAX_AMOUNT_FULL_AGGREGATION = 'sumTaxAmountFullAggregation';

    /**
     * @var string
     */
    public const SUM_SUBTOTAL_AGGREGATION = 'sumSubtotalAggregation';

    /**
     * @var string
     */
    public const UNIT_SUBTOTAL_AGGREGATION = 'unitSubtotalAggregation';

    /**
     * @var string
     */
    public const UNIT_PRODUCT_OPTION_PRICE_AGGREGATION = 'unitProductOptionPriceAggregation';

    /**
     * @var string
     */
    public const SUM_PRODUCT_OPTION_PRICE_AGGREGATION = 'sumProductOptionPriceAggregation';

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
    public const UNIT_DISCOUNT_AMOUNT_FULL_AGGREGATION = 'unitDiscountAmountFullAggregation';

    /**
     * @var string
     */
    public const SUM_DISCOUNT_AMOUNT_FULL_AGGREGATION = 'sumDiscountAmountFullAggregation';

    /**
     * @var string
     */
    public const UNIT_PRICE_TO_PAY_AGGREGATION = 'unitPriceToPayAggregation';

    /**
     * @var string
     */
    public const SUM_PRICE_TO_PAY_AGGREGATION = 'sumPriceToPayAggregation';

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
    protected $unitGrossPrice;

    /**
     * @var int|null
     */
    protected $sumGrossPrice;

    /**
     * @var int|null
     */
    protected $unitTaxAmountFullAggregation;

    /**
     * @var int|null
     */
    protected $sumTaxAmountFullAggregation;

    /**
     * @var int|null
     */
    protected $sumSubtotalAggregation;

    /**
     * @var int|null
     */
    protected $unitSubtotalAggregation;

    /**
     * @var int|null
     */
    protected $unitProductOptionPriceAggregation;

    /**
     * @var int|null
     */
    protected $sumProductOptionPriceAggregation;

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
    protected $unitDiscountAmountFullAggregation;

    /**
     * @var int|null
     */
    protected $sumDiscountAmountFullAggregation;

    /**
     * @var int|null
     */
    protected $unitPriceToPayAggregation;

    /**
     * @var int|null
     */
    protected $sumPriceToPayAggregation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'unit_price' => 'unitPrice',
        'unitPrice' => 'unitPrice',
        'UnitPrice' => 'unitPrice',
        'sum_price' => 'sumPrice',
        'sumPrice' => 'sumPrice',
        'SumPrice' => 'sumPrice',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'unit_net_price' => 'unitNetPrice',
        'unitNetPrice' => 'unitNetPrice',
        'UnitNetPrice' => 'unitNetPrice',
        'sum_net_price' => 'sumNetPrice',
        'sumNetPrice' => 'sumNetPrice',
        'SumNetPrice' => 'sumNetPrice',
        'unit_gross_price' => 'unitGrossPrice',
        'unitGrossPrice' => 'unitGrossPrice',
        'UnitGrossPrice' => 'unitGrossPrice',
        'sum_gross_price' => 'sumGrossPrice',
        'sumGrossPrice' => 'sumGrossPrice',
        'SumGrossPrice' => 'sumGrossPrice',
        'unit_tax_amount_full_aggregation' => 'unitTaxAmountFullAggregation',
        'unitTaxAmountFullAggregation' => 'unitTaxAmountFullAggregation',
        'UnitTaxAmountFullAggregation' => 'unitTaxAmountFullAggregation',
        'sum_tax_amount_full_aggregation' => 'sumTaxAmountFullAggregation',
        'sumTaxAmountFullAggregation' => 'sumTaxAmountFullAggregation',
        'SumTaxAmountFullAggregation' => 'sumTaxAmountFullAggregation',
        'sum_subtotal_aggregation' => 'sumSubtotalAggregation',
        'sumSubtotalAggregation' => 'sumSubtotalAggregation',
        'SumSubtotalAggregation' => 'sumSubtotalAggregation',
        'unit_subtotal_aggregation' => 'unitSubtotalAggregation',
        'unitSubtotalAggregation' => 'unitSubtotalAggregation',
        'UnitSubtotalAggregation' => 'unitSubtotalAggregation',
        'unit_product_option_price_aggregation' => 'unitProductOptionPriceAggregation',
        'unitProductOptionPriceAggregation' => 'unitProductOptionPriceAggregation',
        'UnitProductOptionPriceAggregation' => 'unitProductOptionPriceAggregation',
        'sum_product_option_price_aggregation' => 'sumProductOptionPriceAggregation',
        'sumProductOptionPriceAggregation' => 'sumProductOptionPriceAggregation',
        'SumProductOptionPriceAggregation' => 'sumProductOptionPriceAggregation',
        'unit_discount_amount_aggregation' => 'unitDiscountAmountAggregation',
        'unitDiscountAmountAggregation' => 'unitDiscountAmountAggregation',
        'UnitDiscountAmountAggregation' => 'unitDiscountAmountAggregation',
        'sum_discount_amount_aggregation' => 'sumDiscountAmountAggregation',
        'sumDiscountAmountAggregation' => 'sumDiscountAmountAggregation',
        'SumDiscountAmountAggregation' => 'sumDiscountAmountAggregation',
        'unit_discount_amount_full_aggregation' => 'unitDiscountAmountFullAggregation',
        'unitDiscountAmountFullAggregation' => 'unitDiscountAmountFullAggregation',
        'UnitDiscountAmountFullAggregation' => 'unitDiscountAmountFullAggregation',
        'sum_discount_amount_full_aggregation' => 'sumDiscountAmountFullAggregation',
        'sumDiscountAmountFullAggregation' => 'sumDiscountAmountFullAggregation',
        'SumDiscountAmountFullAggregation' => 'sumDiscountAmountFullAggregation',
        'unit_price_to_pay_aggregation' => 'unitPriceToPayAggregation',
        'unitPriceToPayAggregation' => 'unitPriceToPayAggregation',
        'UnitPriceToPayAggregation' => 'unitPriceToPayAggregation',
        'sum_price_to_pay_aggregation' => 'sumPriceToPayAggregation',
        'sumPriceToPayAggregation' => 'sumPriceToPayAggregation',
        'SumPriceToPayAggregation' => 'sumPriceToPayAggregation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::TAX_RATE => [
            'type' => 'int',
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
        self::UNIT_TAX_AMOUNT_FULL_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_tax_amount_full_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_TAX_AMOUNT_FULL_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_tax_amount_full_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_SUBTOTAL_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_subtotal_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_SUBTOTAL_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_subtotal_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_PRODUCT_OPTION_PRICE_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_product_option_price_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_PRODUCT_OPTION_PRICE_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_product_option_price_aggregation',
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
        self::UNIT_DISCOUNT_AMOUNT_FULL_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_discount_amount_full_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_DISCOUNT_AMOUNT_FULL_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_discount_amount_full_aggregation',
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
    ];

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->sumPrice;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $taxRate
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $taxRate
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTaxRateOrFail()
    {
        if ($this->taxRate === null) {
            $this->throwNullValueException(static::TAX_RATE);
        }

        return $this->taxRate;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitNetPrice()
    {
        return $this->unitNetPrice;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumNetPrice()
    {
        return $this->sumNetPrice;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitGrossPrice()
    {
        return $this->unitGrossPrice;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumGrossPrice()
    {
        return $this->sumGrossPrice;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitTaxAmountFullAggregation
     *
     * @return $this
     */
    public function setUnitTaxAmountFullAggregation($unitTaxAmountFullAggregation)
    {
        $this->unitTaxAmountFullAggregation = $unitTaxAmountFullAggregation;
        $this->modifiedProperties[self::UNIT_TAX_AMOUNT_FULL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitTaxAmountFullAggregation()
    {
        return $this->unitTaxAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitTaxAmountFullAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitTaxAmountFullAggregationOrFail($unitTaxAmountFullAggregation)
    {
        if ($unitTaxAmountFullAggregation === null) {
            $this->throwNullValueException(static::UNIT_TAX_AMOUNT_FULL_AGGREGATION);
        }

        return $this->setUnitTaxAmountFullAggregation($unitTaxAmountFullAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitTaxAmountFullAggregationOrFail()
    {
        if ($this->unitTaxAmountFullAggregation === null) {
            $this->throwNullValueException(static::UNIT_TAX_AMOUNT_FULL_AGGREGATION);
        }

        return $this->unitTaxAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitTaxAmountFullAggregation()
    {
        $this->assertPropertyIsSet(self::UNIT_TAX_AMOUNT_FULL_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumTaxAmountFullAggregation
     *
     * @return $this
     */
    public function setSumTaxAmountFullAggregation($sumTaxAmountFullAggregation)
    {
        $this->sumTaxAmountFullAggregation = $sumTaxAmountFullAggregation;
        $this->modifiedProperties[self::SUM_TAX_AMOUNT_FULL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumTaxAmountFullAggregation()
    {
        return $this->sumTaxAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumTaxAmountFullAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumTaxAmountFullAggregationOrFail($sumTaxAmountFullAggregation)
    {
        if ($sumTaxAmountFullAggregation === null) {
            $this->throwNullValueException(static::SUM_TAX_AMOUNT_FULL_AGGREGATION);
        }

        return $this->setSumTaxAmountFullAggregation($sumTaxAmountFullAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumTaxAmountFullAggregationOrFail()
    {
        if ($this->sumTaxAmountFullAggregation === null) {
            $this->throwNullValueException(static::SUM_TAX_AMOUNT_FULL_AGGREGATION);
        }

        return $this->sumTaxAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumTaxAmountFullAggregation()
    {
        $this->assertPropertyIsSet(self::SUM_TAX_AMOUNT_FULL_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumSubtotalAggregation
     *
     * @return $this
     */
    public function setSumSubtotalAggregation($sumSubtotalAggregation)
    {
        $this->sumSubtotalAggregation = $sumSubtotalAggregation;
        $this->modifiedProperties[self::SUM_SUBTOTAL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumSubtotalAggregation()
    {
        return $this->sumSubtotalAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumSubtotalAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumSubtotalAggregationOrFail($sumSubtotalAggregation)
    {
        if ($sumSubtotalAggregation === null) {
            $this->throwNullValueException(static::SUM_SUBTOTAL_AGGREGATION);
        }

        return $this->setSumSubtotalAggregation($sumSubtotalAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumSubtotalAggregationOrFail()
    {
        if ($this->sumSubtotalAggregation === null) {
            $this->throwNullValueException(static::SUM_SUBTOTAL_AGGREGATION);
        }

        return $this->sumSubtotalAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumSubtotalAggregation()
    {
        $this->assertPropertyIsSet(self::SUM_SUBTOTAL_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitSubtotalAggregation
     *
     * @return $this
     */
    public function setUnitSubtotalAggregation($unitSubtotalAggregation)
    {
        $this->unitSubtotalAggregation = $unitSubtotalAggregation;
        $this->modifiedProperties[self::UNIT_SUBTOTAL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitSubtotalAggregation()
    {
        return $this->unitSubtotalAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitSubtotalAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitSubtotalAggregationOrFail($unitSubtotalAggregation)
    {
        if ($unitSubtotalAggregation === null) {
            $this->throwNullValueException(static::UNIT_SUBTOTAL_AGGREGATION);
        }

        return $this->setUnitSubtotalAggregation($unitSubtotalAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitSubtotalAggregationOrFail()
    {
        if ($this->unitSubtotalAggregation === null) {
            $this->throwNullValueException(static::UNIT_SUBTOTAL_AGGREGATION);
        }

        return $this->unitSubtotalAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitSubtotalAggregation()
    {
        $this->assertPropertyIsSet(self::UNIT_SUBTOTAL_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitProductOptionPriceAggregation
     *
     * @return $this
     */
    public function setUnitProductOptionPriceAggregation($unitProductOptionPriceAggregation)
    {
        $this->unitProductOptionPriceAggregation = $unitProductOptionPriceAggregation;
        $this->modifiedProperties[self::UNIT_PRODUCT_OPTION_PRICE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitProductOptionPriceAggregation()
    {
        return $this->unitProductOptionPriceAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitProductOptionPriceAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitProductOptionPriceAggregationOrFail($unitProductOptionPriceAggregation)
    {
        if ($unitProductOptionPriceAggregation === null) {
            $this->throwNullValueException(static::UNIT_PRODUCT_OPTION_PRICE_AGGREGATION);
        }

        return $this->setUnitProductOptionPriceAggregation($unitProductOptionPriceAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitProductOptionPriceAggregationOrFail()
    {
        if ($this->unitProductOptionPriceAggregation === null) {
            $this->throwNullValueException(static::UNIT_PRODUCT_OPTION_PRICE_AGGREGATION);
        }

        return $this->unitProductOptionPriceAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitProductOptionPriceAggregation()
    {
        $this->assertPropertyIsSet(self::UNIT_PRODUCT_OPTION_PRICE_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumProductOptionPriceAggregation
     *
     * @return $this
     */
    public function setSumProductOptionPriceAggregation($sumProductOptionPriceAggregation)
    {
        $this->sumProductOptionPriceAggregation = $sumProductOptionPriceAggregation;
        $this->modifiedProperties[self::SUM_PRODUCT_OPTION_PRICE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumProductOptionPriceAggregation()
    {
        return $this->sumProductOptionPriceAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumProductOptionPriceAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumProductOptionPriceAggregationOrFail($sumProductOptionPriceAggregation)
    {
        if ($sumProductOptionPriceAggregation === null) {
            $this->throwNullValueException(static::SUM_PRODUCT_OPTION_PRICE_AGGREGATION);
        }

        return $this->setSumProductOptionPriceAggregation($sumProductOptionPriceAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumProductOptionPriceAggregationOrFail()
    {
        if ($this->sumProductOptionPriceAggregation === null) {
            $this->throwNullValueException(static::SUM_PRODUCT_OPTION_PRICE_AGGREGATION);
        }

        return $this->sumProductOptionPriceAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumProductOptionPriceAggregation()
    {
        $this->assertPropertyIsSet(self::SUM_PRODUCT_OPTION_PRICE_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitDiscountAmountAggregation()
    {
        return $this->unitDiscountAmountAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumDiscountAmountAggregation()
    {
        return $this->sumDiscountAmountAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitDiscountAmountFullAggregation
     *
     * @return $this
     */
    public function setUnitDiscountAmountFullAggregation($unitDiscountAmountFullAggregation)
    {
        $this->unitDiscountAmountFullAggregation = $unitDiscountAmountFullAggregation;
        $this->modifiedProperties[self::UNIT_DISCOUNT_AMOUNT_FULL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitDiscountAmountFullAggregation()
    {
        return $this->unitDiscountAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $unitDiscountAmountFullAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitDiscountAmountFullAggregationOrFail($unitDiscountAmountFullAggregation)
    {
        if ($unitDiscountAmountFullAggregation === null) {
            $this->throwNullValueException(static::UNIT_DISCOUNT_AMOUNT_FULL_AGGREGATION);
        }

        return $this->setUnitDiscountAmountFullAggregation($unitDiscountAmountFullAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitDiscountAmountFullAggregationOrFail()
    {
        if ($this->unitDiscountAmountFullAggregation === null) {
            $this->throwNullValueException(static::UNIT_DISCOUNT_AMOUNT_FULL_AGGREGATION);
        }

        return $this->unitDiscountAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitDiscountAmountFullAggregation()
    {
        $this->assertPropertyIsSet(self::UNIT_DISCOUNT_AMOUNT_FULL_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumDiscountAmountFullAggregation
     *
     * @return $this
     */
    public function setSumDiscountAmountFullAggregation($sumDiscountAmountFullAggregation)
    {
        $this->sumDiscountAmountFullAggregation = $sumDiscountAmountFullAggregation;
        $this->modifiedProperties[self::SUM_DISCOUNT_AMOUNT_FULL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumDiscountAmountFullAggregation()
    {
        return $this->sumDiscountAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $sumDiscountAmountFullAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumDiscountAmountFullAggregationOrFail($sumDiscountAmountFullAggregation)
    {
        if ($sumDiscountAmountFullAggregation === null) {
            $this->throwNullValueException(static::SUM_DISCOUNT_AMOUNT_FULL_AGGREGATION);
        }

        return $this->setSumDiscountAmountFullAggregation($sumDiscountAmountFullAggregation);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumDiscountAmountFullAggregationOrFail()
    {
        if ($this->sumDiscountAmountFullAggregation === null) {
            $this->throwNullValueException(static::SUM_DISCOUNT_AMOUNT_FULL_AGGREGATION);
        }

        return $this->sumDiscountAmountFullAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumDiscountAmountFullAggregation()
    {
        $this->assertPropertyIsSet(self::SUM_DISCOUNT_AMOUNT_FULL_AGGREGATION);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getUnitPriceToPayAggregation()
    {
        return $this->unitPriceToPayAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getSumPriceToPayAggregation()
    {
        return $this->sumPriceToPayAggregation;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
                case 'unitPrice':
                case 'sumPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
                case 'sumSubtotalAggregation':
                case 'unitSubtotalAggregation':
                case 'unitProductOptionPriceAggregation':
                case 'sumProductOptionPriceAggregation':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitDiscountAmountFullAggregation':
                case 'sumDiscountAmountFullAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
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
                case 'unitPrice':
                case 'sumPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
                case 'sumSubtotalAggregation':
                case 'unitSubtotalAggregation':
                case 'unitProductOptionPriceAggregation':
                case 'sumProductOptionPriceAggregation':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitDiscountAmountFullAggregation':
                case 'sumDiscountAmountFullAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
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
                case 'unitPrice':
                case 'sumPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
                case 'sumSubtotalAggregation':
                case 'unitSubtotalAggregation':
                case 'unitProductOptionPriceAggregation':
                case 'sumProductOptionPriceAggregation':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitDiscountAmountFullAggregation':
                case 'sumDiscountAmountFullAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
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
            'unitPrice' => $this->unitPrice,
            'sumPrice' => $this->sumPrice,
            'taxRate' => $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice,
            'unitGrossPrice' => $this->unitGrossPrice,
            'sumGrossPrice' => $this->sumGrossPrice,
            'unitTaxAmountFullAggregation' => $this->unitTaxAmountFullAggregation,
            'sumTaxAmountFullAggregation' => $this->sumTaxAmountFullAggregation,
            'sumSubtotalAggregation' => $this->sumSubtotalAggregation,
            'unitSubtotalAggregation' => $this->unitSubtotalAggregation,
            'unitProductOptionPriceAggregation' => $this->unitProductOptionPriceAggregation,
            'sumProductOptionPriceAggregation' => $this->sumProductOptionPriceAggregation,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation,
            'unitDiscountAmountFullAggregation' => $this->unitDiscountAmountFullAggregation,
            'sumDiscountAmountFullAggregation' => $this->sumDiscountAmountFullAggregation,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'unit_price' => $this->unitPrice,
            'sum_price' => $this->sumPrice,
            'tax_rate' => $this->taxRate,
            'unit_net_price' => $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice,
            'unit_gross_price' => $this->unitGrossPrice,
            'sum_gross_price' => $this->sumGrossPrice,
            'unit_tax_amount_full_aggregation' => $this->unitTaxAmountFullAggregation,
            'sum_tax_amount_full_aggregation' => $this->sumTaxAmountFullAggregation,
            'sum_subtotal_aggregation' => $this->sumSubtotalAggregation,
            'unit_subtotal_aggregation' => $this->unitSubtotalAggregation,
            'unit_product_option_price_aggregation' => $this->unitProductOptionPriceAggregation,
            'sum_product_option_price_aggregation' => $this->sumProductOptionPriceAggregation,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation,
            'unit_discount_amount_full_aggregation' => $this->unitDiscountAmountFullAggregation,
            'sum_discount_amount_full_aggregation' => $this->sumDiscountAmountFullAggregation,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'unit_price' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, false) : $this->unitPrice,
            'sum_price' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, false) : $this->sumPrice,
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'unit_net_price' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, false) : $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, false) : $this->sumNetPrice,
            'unit_gross_price' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, false) : $this->unitGrossPrice,
            'sum_gross_price' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, false) : $this->sumGrossPrice,
            'unit_tax_amount_full_aggregation' => $this->unitTaxAmountFullAggregation instanceof AbstractTransfer ? $this->unitTaxAmountFullAggregation->toArray(true, false) : $this->unitTaxAmountFullAggregation,
            'sum_tax_amount_full_aggregation' => $this->sumTaxAmountFullAggregation instanceof AbstractTransfer ? $this->sumTaxAmountFullAggregation->toArray(true, false) : $this->sumTaxAmountFullAggregation,
            'sum_subtotal_aggregation' => $this->sumSubtotalAggregation instanceof AbstractTransfer ? $this->sumSubtotalAggregation->toArray(true, false) : $this->sumSubtotalAggregation,
            'unit_subtotal_aggregation' => $this->unitSubtotalAggregation instanceof AbstractTransfer ? $this->unitSubtotalAggregation->toArray(true, false) : $this->unitSubtotalAggregation,
            'unit_product_option_price_aggregation' => $this->unitProductOptionPriceAggregation instanceof AbstractTransfer ? $this->unitProductOptionPriceAggregation->toArray(true, false) : $this->unitProductOptionPriceAggregation,
            'sum_product_option_price_aggregation' => $this->sumProductOptionPriceAggregation instanceof AbstractTransfer ? $this->sumProductOptionPriceAggregation->toArray(true, false) : $this->sumProductOptionPriceAggregation,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, false) : $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, false) : $this->sumDiscountAmountAggregation,
            'unit_discount_amount_full_aggregation' => $this->unitDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountFullAggregation->toArray(true, false) : $this->unitDiscountAmountFullAggregation,
            'sum_discount_amount_full_aggregation' => $this->sumDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountFullAggregation->toArray(true, false) : $this->sumDiscountAmountFullAggregation,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, false) : $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, false) : $this->sumPriceToPayAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'unitPrice' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, true) : $this->unitPrice,
            'sumPrice' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, true) : $this->sumPrice,
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, true) : $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, true) : $this->sumNetPrice,
            'unitGrossPrice' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, true) : $this->unitGrossPrice,
            'sumGrossPrice' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, true) : $this->sumGrossPrice,
            'unitTaxAmountFullAggregation' => $this->unitTaxAmountFullAggregation instanceof AbstractTransfer ? $this->unitTaxAmountFullAggregation->toArray(true, true) : $this->unitTaxAmountFullAggregation,
            'sumTaxAmountFullAggregation' => $this->sumTaxAmountFullAggregation instanceof AbstractTransfer ? $this->sumTaxAmountFullAggregation->toArray(true, true) : $this->sumTaxAmountFullAggregation,
            'sumSubtotalAggregation' => $this->sumSubtotalAggregation instanceof AbstractTransfer ? $this->sumSubtotalAggregation->toArray(true, true) : $this->sumSubtotalAggregation,
            'unitSubtotalAggregation' => $this->unitSubtotalAggregation instanceof AbstractTransfer ? $this->unitSubtotalAggregation->toArray(true, true) : $this->unitSubtotalAggregation,
            'unitProductOptionPriceAggregation' => $this->unitProductOptionPriceAggregation instanceof AbstractTransfer ? $this->unitProductOptionPriceAggregation->toArray(true, true) : $this->unitProductOptionPriceAggregation,
            'sumProductOptionPriceAggregation' => $this->sumProductOptionPriceAggregation instanceof AbstractTransfer ? $this->sumProductOptionPriceAggregation->toArray(true, true) : $this->sumProductOptionPriceAggregation,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, true) : $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, true) : $this->sumDiscountAmountAggregation,
            'unitDiscountAmountFullAggregation' => $this->unitDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountFullAggregation->toArray(true, true) : $this->unitDiscountAmountFullAggregation,
            'sumDiscountAmountFullAggregation' => $this->sumDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountFullAggregation->toArray(true, true) : $this->sumDiscountAmountFullAggregation,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, true) : $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, true) : $this->sumPriceToPayAggregation,
        ];
    }
}
