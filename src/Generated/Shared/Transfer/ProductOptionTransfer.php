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
class ProductOptionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_OPTION_VALUE = 'idProductOptionValue';

    /**
     * @var string
     */
    public const IS_ORDERED = 'isOrdered';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const UNIT_PRICE = 'unitPrice';

    /**
     * @var string
     */
    public const UNIT_GROSS_PRICE = 'unitGrossPrice';

    /**
     * @var string
     */
    public const GROUP_NAME = 'groupName';

    /**
     * @var string
     */
    public const SUM_PRICE = 'sumPrice';

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
    public const CALCULATED_DISCOUNTS = 'calculatedDiscounts';

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
    public const SUM_TAX_AMOUNT = 'sumTaxAmount';

    /**
     * @var string
     */
    public const UNIT_TAX_AMOUNT = 'unitTaxAmount';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const REFUNDABLE_AMOUNT = 'refundableAmount';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM_OPTION = 'idSalesOrderItemOption';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const LOCALE_CODE = 'localeCode';

    /**
     * @var string
     */
    public const ID_GROUP = 'idGroup';

    /**
     * @var int|null
     */
    protected $idProductOptionValue;

    /**
     * @var bool|null
     */
    protected $isOrdered;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var int|null
     */
    protected $unitPrice;

    /**
     * @var int|null
     */
    protected $unitGrossPrice;

    /**
     * @var string|null
     */
    protected $groupName;

    /**
     * @var int|null
     */
    protected $sumPrice;

    /**
     * @var int|null
     */
    protected $sumGrossPrice;

    /**
     * @var float|null
     */
    protected $taxRate;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    protected $calculatedDiscounts;

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
    protected $sumTaxAmount;

    /**
     * @var int|null
     */
    protected $unitTaxAmount;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $refundableAmount;

    /**
     * @var int|null
     */
    protected $idSalesOrderItemOption;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $localeCode;

    /**
     * @var int|null
     */
    protected $idGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_option_value' => 'idProductOptionValue',
        'idProductOptionValue' => 'idProductOptionValue',
        'IdProductOptionValue' => 'idProductOptionValue',
        'is_ordered' => 'isOrdered',
        'isOrdered' => 'isOrdered',
        'IsOrdered' => 'isOrdered',
        'value' => 'value',
        'Value' => 'value',
        'unit_price' => 'unitPrice',
        'unitPrice' => 'unitPrice',
        'UnitPrice' => 'unitPrice',
        'unit_gross_price' => 'unitGrossPrice',
        'unitGrossPrice' => 'unitGrossPrice',
        'UnitGrossPrice' => 'unitGrossPrice',
        'group_name' => 'groupName',
        'groupName' => 'groupName',
        'GroupName' => 'groupName',
        'sum_price' => 'sumPrice',
        'sumPrice' => 'sumPrice',
        'SumPrice' => 'sumPrice',
        'sum_gross_price' => 'sumGrossPrice',
        'sumGrossPrice' => 'sumGrossPrice',
        'SumGrossPrice' => 'sumGrossPrice',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'calculated_discounts' => 'calculatedDiscounts',
        'calculatedDiscounts' => 'calculatedDiscounts',
        'CalculatedDiscounts' => 'calculatedDiscounts',
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
        'sum_tax_amount' => 'sumTaxAmount',
        'sumTaxAmount' => 'sumTaxAmount',
        'SumTaxAmount' => 'sumTaxAmount',
        'unit_tax_amount' => 'unitTaxAmount',
        'unitTaxAmount' => 'unitTaxAmount',
        'UnitTaxAmount' => 'unitTaxAmount',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'refundable_amount' => 'refundableAmount',
        'refundableAmount' => 'refundableAmount',
        'RefundableAmount' => 'refundableAmount',
        'id_sales_order_item_option' => 'idSalesOrderItemOption',
        'idSalesOrderItemOption' => 'idSalesOrderItemOption',
        'IdSalesOrderItemOption' => 'idSalesOrderItemOption',
        'sku' => 'sku',
        'Sku' => 'sku',
        'locale_code' => 'localeCode',
        'localeCode' => 'localeCode',
        'LocaleCode' => 'localeCode',
        'id_group' => 'idGroup',
        'idGroup' => 'idGroup',
        'IdGroup' => 'idGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_OPTION_VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_option_value',
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
        self::VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value',
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
        self::GROUP_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_name',
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
        self::ID_SALES_ORDER_ITEM_OPTION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item_option',
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
        self::LOCALE_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_group',
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
     * @module CartPage|ProductOptionWidget|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector
     *
     * @param int|null $idProductOptionValue
     *
     * @return $this
     */
    public function setIdProductOptionValue($idProductOptionValue)
    {
        $this->idProductOptionValue = $idProductOptionValue;
        $this->modifiedProperties[self::ID_PRODUCT_OPTION_VALUE] = true;

        return $this;
    }

    /**
     * @module CartPage|ProductOptionWidget|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector
     *
     * @return int|null
     */
    public function getIdProductOptionValue()
    {
        return $this->idProductOptionValue;
    }

    /**
     * @module CartPage|ProductOptionWidget|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector
     *
     * @param int|null $idProductOptionValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOptionValueOrFail($idProductOptionValue)
    {
        if ($idProductOptionValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_VALUE);
        }

        return $this->setIdProductOptionValue($idProductOptionValue);
    }

    /**
     * @module CartPage|ProductOptionWidget|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOptionValueOrFail()
    {
        if ($this->idProductOptionValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_VALUE);
        }

        return $this->idProductOptionValue;
    }

    /**
     * @module CartPage|ProductOptionWidget|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductOptionValue()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_OPTION_VALUE);

        return $this;
    }

    /**
     * @module CustomerReorderWidget|Calculation|ProductOption
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
     * @module CustomerReorderWidget|Calculation|ProductOption
     *
     * @return bool|null
     */
    public function getIsOrdered()
    {
        return $this->isOrdered;
    }

    /**
     * @module CustomerReorderWidget|Calculation|ProductOption
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
     * @module CustomerReorderWidget|Calculation|ProductOption
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
     * @module CustomerReorderWidget|Calculation|ProductOption
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
     * @module ProductOptionWidget|SalesReturnPage|ProductOption|ProductOptionsRestApi|ShoppingListProductOptionConnector
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|SalesReturnPage|ProductOption|ProductOptionsRestApi|ShoppingListProductOptionConnector
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module ProductOptionWidget|SalesReturnPage|ProductOption|ProductOptionsRestApi|ShoppingListProductOptionConnector
     *
     * @param string|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module ProductOptionWidget|SalesReturnPage|ProductOption|ProductOptionsRestApi|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module ProductOptionWidget|SalesReturnPage|ProductOption|ProductOptionsRestApi|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module ProductOptionWidget|Calculation|ProductOption|Tax
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
     * @module ProductOptionWidget|Calculation|ProductOption|Tax
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @module ProductOptionWidget|Calculation|ProductOption|Tax
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
     * @module ProductOptionWidget|Calculation|ProductOption|Tax
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
     * @module ProductOptionWidget|Calculation|ProductOption|Tax
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
     * @module ProductOptionWidget|Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module ProductOptionWidget|Calculation|Checkout|ProductOptionCartConnector|ProductOption
     *
     * @return int|null
     */
    public function getUnitGrossPrice()
    {
        return $this->unitGrossPrice;
    }

    /**
     * @module ProductOptionWidget|Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module ProductOptionWidget|Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module ProductOptionWidget|Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module ProductOptionWidget|ProductOption|ProductOptionsRestApi
     *
     * @param string|null $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        $this->modifiedProperties[self::GROUP_NAME] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|ProductOption|ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @module ProductOptionWidget|ProductOption|ProductOptionsRestApi
     *
     * @param string|null $groupName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupNameOrFail($groupName)
    {
        if ($groupName === null) {
            $this->throwNullValueException(static::GROUP_NAME);
        }

        return $this->setGroupName($groupName);
    }

    /**
     * @module ProductOptionWidget|ProductOption|ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupNameOrFail()
    {
        if ($this->groupName === null) {
            $this->throwNullValueException(static::GROUP_NAME);
        }

        return $this->groupName;
    }

    /**
     * @module ProductOptionWidget|ProductOption|ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupName()
    {
        $this->assertPropertyIsSet(self::GROUP_NAME);

        return $this;
    }

    /**
     * @module SalesReturnPage|Calculation|ProductOption|ProductOptionsRestApi|Tax
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
     * @module SalesReturnPage|Calculation|ProductOption|ProductOptionsRestApi|Tax
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->sumPrice;
    }

    /**
     * @module SalesReturnPage|Calculation|ProductOption|ProductOptionsRestApi|Tax
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
     * @module SalesReturnPage|Calculation|ProductOption|ProductOptionsRestApi|Tax
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
     * @module SalesReturnPage|Calculation|ProductOption|ProductOptionsRestApi|Tax
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
     * @module Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|Checkout|ProductOptionCartConnector|ProductOption
     *
     * @return int|null
     */
    public function getSumGrossPrice()
    {
        return $this->sumGrossPrice;
    }

    /**
     * @module Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|Checkout|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|Discount|ProductOption|Sales
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
     * @module Calculation|Discount|ProductOption|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    public function getCalculatedDiscounts()
    {
        return $this->calculatedDiscounts;
    }

    /**
     * @module Calculation|Discount|ProductOption|Sales
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
     * @module Calculation|Discount|ProductOption|Sales
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
     *
     * @return int|null
     */
    public function getUnitNetPrice()
    {
        return $this->unitNetPrice;
    }

    /**
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
     *
     * @return int|null
     */
    public function getSumNetPrice()
    {
        return $this->sumNetPrice;
    }

    /**
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|ProductOptionCartConnector|ProductOption
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
     * @module Calculation|Refund
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
     * @module Calculation|Refund
     *
     * @return int|null
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @module Calculation|Refund
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
     * @module Calculation|Refund
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
     * @module Calculation|Refund
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
     *
     * @return int|null
     */
    public function getUnitDiscountAmountAggregation()
    {
        return $this->unitDiscountAmountAggregation;
    }

    /**
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
     *
     * @return int|null
     */
    public function getSumDiscountAmountAggregation()
    {
        return $this->sumDiscountAmountAggregation;
    }

    /**
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
     *
     * @return int|null
     */
    public function getSumTaxAmount()
    {
        return $this->sumTaxAmount;
    }

    /**
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
     *
     * @return int|null
     */
    public function getUnitTaxAmount()
    {
        return $this->unitTaxAmount;
    }

    /**
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Tax
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesConfigurableBundle|Sales
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesConfigurableBundle|Sales
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module Calculation|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesConfigurableBundle|Sales
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesConfigurableBundle|Sales
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesConfigurableBundle|Sales
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Refund
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Refund
     *
     * @return int|null
     */
    public function getRefundableAmount()
    {
        return $this->refundableAmount;
    }

    /**
     * @module Calculation|ProductOptionCartConnector|ProductOption|Refund
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Refund
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
     * @module Calculation|ProductOptionCartConnector|ProductOption|Refund
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
     * @module Checkout|Discount|ProductOptionCartConnector|ProductOption
     *
     * @param int|null $idSalesOrderItemOption
     *
     * @return $this
     */
    public function setIdSalesOrderItemOption($idSalesOrderItemOption)
    {
        $this->idSalesOrderItemOption = $idSalesOrderItemOption;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM_OPTION] = true;

        return $this;
    }

    /**
     * @module Checkout|Discount|ProductOptionCartConnector|ProductOption
     *
     * @return int|null
     */
    public function getIdSalesOrderItemOption()
    {
        return $this->idSalesOrderItemOption;
    }

    /**
     * @module Checkout|Discount|ProductOptionCartConnector|ProductOption
     *
     * @param int|null $idSalesOrderItemOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemOptionOrFail($idSalesOrderItemOption)
    {
        if ($idSalesOrderItemOption === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_OPTION);
        }

        return $this->setIdSalesOrderItemOption($idSalesOrderItemOption);
    }

    /**
     * @module Checkout|Discount|ProductOptionCartConnector|ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderItemOptionOrFail()
    {
        if ($this->idSalesOrderItemOption === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_OPTION);
        }

        return $this->idSalesOrderItemOption;
    }

    /**
     * @module Checkout|Discount|ProductOptionCartConnector|ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItemOption()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM_OPTION);

        return $this;
    }

    /**
     * @module ProductBundle|ProductOption|ProductOptionsRestApi
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
     * @module ProductBundle|ProductOption|ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductBundle|ProductOption|ProductOptionsRestApi
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
     * @module ProductBundle|ProductOption|ProductOptionsRestApi
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
     * @module ProductBundle|ProductOption|ProductOptionsRestApi
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
     * @module ProductOptionCartConnector
     *
     * @param string|null $localeCode
     *
     * @return $this
     */
    public function setLocaleCode($localeCode)
    {
        $this->localeCode = $localeCode;
        $this->modifiedProperties[self::LOCALE_CODE] = true;

        return $this;
    }

    /**
     * @module ProductOptionCartConnector
     *
     * @return string|null
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * @module ProductOptionCartConnector
     *
     * @param string|null $localeCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleCodeOrFail($localeCode)
    {
        if ($localeCode === null) {
            $this->throwNullValueException(static::LOCALE_CODE);
        }

        return $this->setLocaleCode($localeCode);
    }

    /**
     * @module ProductOptionCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleCodeOrFail()
    {
        if ($this->localeCode === null) {
            $this->throwNullValueException(static::LOCALE_CODE);
        }

        return $this->localeCode;
    }

    /**
     * @module ProductOptionCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleCode()
    {
        $this->assertPropertyIsSet(self::LOCALE_CODE);

        return $this;
    }

    /**
     * @module ProductOptionStorage|ProductOption
     *
     * @param int|null $idGroup
     *
     * @return $this
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;
        $this->modifiedProperties[self::ID_GROUP] = true;

        return $this;
    }

    /**
     * @module ProductOptionStorage|ProductOption
     *
     * @return int|null
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * @module ProductOptionStorage|ProductOption
     *
     * @param int|null $idGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGroupOrFail($idGroup)
    {
        if ($idGroup === null) {
            $this->throwNullValueException(static::ID_GROUP);
        }

        return $this->setIdGroup($idGroup);
    }

    /**
     * @module ProductOptionStorage|ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdGroupOrFail()
    {
        if ($this->idGroup === null) {
            $this->throwNullValueException(static::ID_GROUP);
        }

        return $this->idGroup;
    }

    /**
     * @module ProductOptionStorage|ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGroup()
    {
        $this->assertPropertyIsSet(self::ID_GROUP);

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
                case 'idProductOptionValue':
                case 'isOrdered':
                case 'value':
                case 'unitPrice':
                case 'unitGrossPrice':
                case 'groupName':
                case 'sumPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'sumTaxAmount':
                case 'unitTaxAmount':
                case 'quantity':
                case 'refundableAmount':
                case 'idSalesOrderItemOption':
                case 'sku':
                case 'localeCode':
                case 'idGroup':
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
                case 'idProductOptionValue':
                case 'isOrdered':
                case 'value':
                case 'unitPrice':
                case 'unitGrossPrice':
                case 'groupName':
                case 'sumPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'sumTaxAmount':
                case 'unitTaxAmount':
                case 'quantity':
                case 'refundableAmount':
                case 'idSalesOrderItemOption':
                case 'sku':
                case 'localeCode':
                case 'idGroup':
                    $values[$arrayKey] = $value;

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
                case 'idProductOptionValue':
                case 'isOrdered':
                case 'value':
                case 'unitPrice':
                case 'unitGrossPrice':
                case 'groupName':
                case 'sumPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'canceledAmount':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'sumTaxAmount':
                case 'unitTaxAmount':
                case 'quantity':
                case 'refundableAmount':
                case 'idSalesOrderItemOption':
                case 'sku':
                case 'localeCode':
                case 'idGroup':
                    $values[$arrayKey] = $value;

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
            'idProductOptionValue' => $this->idProductOptionValue,
            'isOrdered' => $this->isOrdered,
            'value' => $this->value,
            'unitPrice' => $this->unitPrice,
            'unitGrossPrice' => $this->unitGrossPrice,
            'groupName' => $this->groupName,
            'sumPrice' => $this->sumPrice,
            'sumGrossPrice' => $this->sumGrossPrice,
            'taxRate' => $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice,
            'canceledAmount' => $this->canceledAmount,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation,
            'sumTaxAmount' => $this->sumTaxAmount,
            'unitTaxAmount' => $this->unitTaxAmount,
            'quantity' => $this->quantity,
            'refundableAmount' => $this->refundableAmount,
            'idSalesOrderItemOption' => $this->idSalesOrderItemOption,
            'sku' => $this->sku,
            'localeCode' => $this->localeCode,
            'idGroup' => $this->idGroup,
            'calculatedDiscounts' => $this->calculatedDiscounts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue,
            'is_ordered' => $this->isOrdered,
            'value' => $this->value,
            'unit_price' => $this->unitPrice,
            'unit_gross_price' => $this->unitGrossPrice,
            'group_name' => $this->groupName,
            'sum_price' => $this->sumPrice,
            'sum_gross_price' => $this->sumGrossPrice,
            'tax_rate' => $this->taxRate,
            'unit_net_price' => $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice,
            'canceled_amount' => $this->canceledAmount,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation,
            'sum_tax_amount' => $this->sumTaxAmount,
            'unit_tax_amount' => $this->unitTaxAmount,
            'quantity' => $this->quantity,
            'refundable_amount' => $this->refundableAmount,
            'id_sales_order_item_option' => $this->idSalesOrderItemOption,
            'sku' => $this->sku,
            'locale_code' => $this->localeCode,
            'id_group' => $this->idGroup,
            'calculated_discounts' => $this->calculatedDiscounts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, false) : $this->idProductOptionValue,
            'is_ordered' => $this->isOrdered instanceof AbstractTransfer ? $this->isOrdered->toArray(true, false) : $this->isOrdered,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'unit_price' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, false) : $this->unitPrice,
            'unit_gross_price' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, false) : $this->unitGrossPrice,
            'group_name' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, false) : $this->groupName,
            'sum_price' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, false) : $this->sumPrice,
            'sum_gross_price' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, false) : $this->sumGrossPrice,
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'unit_net_price' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, false) : $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, false) : $this->sumNetPrice,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, false) : $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, false) : $this->sumDiscountAmountAggregation,
            'sum_tax_amount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, false) : $this->sumTaxAmount,
            'unit_tax_amount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, false) : $this->unitTaxAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'refundable_amount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, false) : $this->refundableAmount,
            'id_sales_order_item_option' => $this->idSalesOrderItemOption instanceof AbstractTransfer ? $this->idSalesOrderItemOption->toArray(true, false) : $this->idSalesOrderItemOption,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'locale_code' => $this->localeCode instanceof AbstractTransfer ? $this->localeCode->toArray(true, false) : $this->localeCode,
            'id_group' => $this->idGroup instanceof AbstractTransfer ? $this->idGroup->toArray(true, false) : $this->idGroup,
            'calculated_discounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, false) : $this->addValuesToCollection($this->calculatedDiscounts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductOptionValue' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, true) : $this->idProductOptionValue,
            'isOrdered' => $this->isOrdered instanceof AbstractTransfer ? $this->isOrdered->toArray(true, true) : $this->isOrdered,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'unitPrice' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, true) : $this->unitPrice,
            'unitGrossPrice' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, true) : $this->unitGrossPrice,
            'groupName' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, true) : $this->groupName,
            'sumPrice' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, true) : $this->sumPrice,
            'sumGrossPrice' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, true) : $this->sumGrossPrice,
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, true) : $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, true) : $this->sumNetPrice,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, true) : $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, true) : $this->sumDiscountAmountAggregation,
            'sumTaxAmount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, true) : $this->sumTaxAmount,
            'unitTaxAmount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, true) : $this->unitTaxAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'refundableAmount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, true) : $this->refundableAmount,
            'idSalesOrderItemOption' => $this->idSalesOrderItemOption instanceof AbstractTransfer ? $this->idSalesOrderItemOption->toArray(true, true) : $this->idSalesOrderItemOption,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'localeCode' => $this->localeCode instanceof AbstractTransfer ? $this->localeCode->toArray(true, true) : $this->localeCode,
            'idGroup' => $this->idGroup instanceof AbstractTransfer ? $this->idGroup->toArray(true, true) : $this->idGroup,
            'calculatedDiscounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, true) : $this->addValuesToCollection($this->calculatedDiscounts, true, true),
        ];
    }
}
