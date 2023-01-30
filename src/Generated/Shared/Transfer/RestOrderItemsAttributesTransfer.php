<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestOrderItemsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALES_ORDER_CONFIGURED_BUNDLE = 'salesOrderConfiguredBundle';

    /**
     * @var string
     */
    public const SALES_ORDER_CONFIGURED_BUNDLE_ITEM = 'salesOrderConfiguredBundleItem';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const SUM_PRICE = 'sumPrice';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const METADATA = 'metadata';

    /**
     * @var string
     */
    public const CALCULATED_DISCOUNTS = 'calculatedDiscounts';

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
    public const UNIT_PRICE = 'unitPrice';

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
    public const REFUNDABLE_AMOUNT = 'refundableAmount';

    /**
     * @var string
     */
    public const CANCELED_AMOUNT = 'canceledAmount';

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
    public const UNIT_EXPENSE_PRICE_AGGREGATION = 'unitExpensePriceAggregation';

    /**
     * @var string
     */
    public const SUM_EXPENSE_PRICE_AGGREGATION = 'sumExpensePriceAggregation';

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
     * @var string
     */
    public const TAX_RATE_AVERAGE_AGGREGATION = 'taxRateAverageAggregation';

    /**
     * @var string
     */
    public const TAX_AMOUNT_AFTER_CANCELLATION = 'taxAmountAfterCancellation';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const IS_RETURNABLE = 'isReturnable';

    /**
     * @var string
     */
    public const ID_SHIPMENT = 'idShipment';

    /**
     * @var string
     */
    public const BUNDLE_ITEM_IDENTIFIER = 'bundleItemIdentifier';

    /**
     * @var string
     */
    public const RELATED_BUNDLE_ITEM_IDENTIFIER = 'relatedBundleItemIdentifier';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const SALES_UNIT = 'salesUnit';

    /**
     * @var string
     */
    public const PRODUCT_OPTIONS = 'productOptions';

    /**
     * @var \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleTransfer|null
     */
    protected $salesOrderConfiguredBundle;

    /**
     * @var \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleItemTransfer|null
     */
    protected $salesOrderConfiguredBundleItem;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $sumPrice;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var \Generated\Shared\Transfer\RestOrderItemMetadataTransfer|null
     */
    protected $metadata;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCalculatedDiscountTransfer[]
     */
    protected $calculatedDiscounts;

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
    protected $unitPrice;

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
    protected $refundableAmount;

    /**
     * @var int|null
     */
    protected $canceledAmount;

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
    protected $unitExpensePriceAggregation;

    /**
     * @var int|null
     */
    protected $sumExpensePriceAggregation;

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
     * @var float|null
     */
    protected $taxRateAverageAggregation;

    /**
     * @var int|null
     */
    protected $taxAmountAfterCancellation;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var bool|null
     */
    protected $isReturnable;

    /**
     * @var int|null
     */
    protected $idShipment;

    /**
     * @var string|null
     */
    protected $bundleItemIdentifier;

    /**
     * @var string|null
     */
    protected $relatedBundleItemIdentifier;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amount;

    /**
     * @var \Generated\Shared\Transfer\RestOrdersSalesUnitAttributesTransfer|null
     */
    protected $salesUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestOrderItemProductOptionsTransfer[]
     */
    protected $productOptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sales_order_configured_bundle' => 'salesOrderConfiguredBundle',
        'salesOrderConfiguredBundle' => 'salesOrderConfiguredBundle',
        'SalesOrderConfiguredBundle' => 'salesOrderConfiguredBundle',
        'sales_order_configured_bundle_item' => 'salesOrderConfiguredBundleItem',
        'salesOrderConfiguredBundleItem' => 'salesOrderConfiguredBundleItem',
        'SalesOrderConfiguredBundleItem' => 'salesOrderConfiguredBundleItem',
        'name' => 'name',
        'Name' => 'name',
        'sku' => 'sku',
        'Sku' => 'sku',
        'sum_price' => 'sumPrice',
        'sumPrice' => 'sumPrice',
        'SumPrice' => 'sumPrice',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'metadata' => 'metadata',
        'Metadata' => 'metadata',
        'calculated_discounts' => 'calculatedDiscounts',
        'calculatedDiscounts' => 'calculatedDiscounts',
        'CalculatedDiscounts' => 'calculatedDiscounts',
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
        'unit_price' => 'unitPrice',
        'unitPrice' => 'unitPrice',
        'UnitPrice' => 'unitPrice',
        'unit_tax_amount_full_aggregation' => 'unitTaxAmountFullAggregation',
        'unitTaxAmountFullAggregation' => 'unitTaxAmountFullAggregation',
        'UnitTaxAmountFullAggregation' => 'unitTaxAmountFullAggregation',
        'sum_tax_amount_full_aggregation' => 'sumTaxAmountFullAggregation',
        'sumTaxAmountFullAggregation' => 'sumTaxAmountFullAggregation',
        'SumTaxAmountFullAggregation' => 'sumTaxAmountFullAggregation',
        'refundable_amount' => 'refundableAmount',
        'refundableAmount' => 'refundableAmount',
        'RefundableAmount' => 'refundableAmount',
        'canceled_amount' => 'canceledAmount',
        'canceledAmount' => 'canceledAmount',
        'CanceledAmount' => 'canceledAmount',
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
        'unit_expense_price_aggregation' => 'unitExpensePriceAggregation',
        'unitExpensePriceAggregation' => 'unitExpensePriceAggregation',
        'UnitExpensePriceAggregation' => 'unitExpensePriceAggregation',
        'sum_expense_price_aggregation' => 'sumExpensePriceAggregation',
        'sumExpensePriceAggregation' => 'sumExpensePriceAggregation',
        'SumExpensePriceAggregation' => 'sumExpensePriceAggregation',
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
        'tax_rate_average_aggregation' => 'taxRateAverageAggregation',
        'taxRateAverageAggregation' => 'taxRateAverageAggregation',
        'TaxRateAverageAggregation' => 'taxRateAverageAggregation',
        'tax_amount_after_cancellation' => 'taxAmountAfterCancellation',
        'taxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'TaxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'is_returnable' => 'isReturnable',
        'isReturnable' => 'isReturnable',
        'IsReturnable' => 'isReturnable',
        'id_shipment' => 'idShipment',
        'idShipment' => 'idShipment',
        'IdShipment' => 'idShipment',
        'bundle_item_identifier' => 'bundleItemIdentifier',
        'bundleItemIdentifier' => 'bundleItemIdentifier',
        'BundleItemIdentifier' => 'bundleItemIdentifier',
        'related_bundle_item_identifier' => 'relatedBundleItemIdentifier',
        'relatedBundleItemIdentifier' => 'relatedBundleItemIdentifier',
        'RelatedBundleItemIdentifier' => 'relatedBundleItemIdentifier',
        'amount' => 'amount',
        'Amount' => 'amount',
        'sales_unit' => 'salesUnit',
        'salesUnit' => 'salesUnit',
        'SalesUnit' => 'salesUnit',
        'product_options' => 'productOptions',
        'productOptions' => 'productOptions',
        'ProductOptions' => 'productOptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALES_ORDER_CONFIGURED_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\RestSalesOrderConfiguredBundleTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_configured_bundle',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_CONFIGURED_BUNDLE_ITEM => [
            'type' => 'Generated\Shared\Transfer\RestSalesOrderConfiguredBundleItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_configured_bundle_item',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::METADATA => [
            'type' => 'Generated\Shared\Transfer\RestOrderItemMetadataTransfer',
            'type_shim' => null,
            'name_underscore' => 'metadata',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CALCULATED_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\RestCalculatedDiscountTransfer',
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
        self::UNIT_EXPENSE_PRICE_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_expense_price_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_EXPENSE_PRICE_AGGREGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_expense_price_aggregation',
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
        self::TAX_RATE_AVERAGE_AGGREGATION => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'tax_rate_average_aggregation',
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
        self::ORDER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_RETURNABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_returnable',
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
        self::BUNDLE_ITEM_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'bundle_item_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RELATED_BUNDLE_ITEM_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'related_bundle_item_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_UNIT => [
            'type' => 'Generated\Shared\Transfer\RestOrdersSalesUnitAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\RestOrderItemProductOptionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_options',
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
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleTransfer|null $salesOrderConfiguredBundle
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundle(RestSalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle = null)
    {
        $this->salesOrderConfiguredBundle = $salesOrderConfiguredBundle;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @return \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleTransfer|null
     */
    public function getSalesOrderConfiguredBundle()
    {
        return $this->salesOrderConfiguredBundle;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundleOrFail(RestSalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle)
    {
        return $this->setSalesOrderConfiguredBundle($salesOrderConfiguredBundle);
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleTransfer
     */
    public function getSalesOrderConfiguredBundleOrFail()
    {
        if ($this->salesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->salesOrderConfiguredBundle;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderConfiguredBundle()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_CONFIGURED_BUNDLE);

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleItemTransfer|null $salesOrderConfiguredBundleItem
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundleItem(RestSalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem = null)
    {
        $this->salesOrderConfiguredBundleItem = $salesOrderConfiguredBundleItem;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @return \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleItemTransfer|null
     */
    public function getSalesOrderConfiguredBundleItem()
    {
        return $this->salesOrderConfiguredBundleItem;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundleItemOrFail(RestSalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem)
    {
        return $this->setSalesOrderConfiguredBundleItem($salesOrderConfiguredBundleItem);
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestSalesOrderConfiguredBundleItemTransfer
     */
    public function getSalesOrderConfiguredBundleItemOrFail()
    {
        if ($this->salesOrderConfiguredBundleItem === null) {
            $this->throwNullValueException(static::SALES_ORDER_CONFIGURED_BUNDLE_ITEM);
        }

        return $this->salesOrderConfiguredBundleItem;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderConfiguredBundleItem()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_CONFIGURED_BUNDLE_ITEM);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->sumPrice;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderItemMetadataTransfer|null $metadata
     *
     * @return $this
     */
    public function setMetadata(RestOrderItemMetadataTransfer $metadata = null)
    {
        $this->metadata = $metadata;
        $this->modifiedProperties[self::METADATA] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return \Generated\Shared\Transfer\RestOrderItemMetadataTransfer|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderItemMetadataTransfer $metadata
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetadataOrFail(RestOrderItemMetadataTransfer $metadata)
    {
        return $this->setMetadata($metadata);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestOrderItemMetadataTransfer
     */
    public function getMetadataOrFail()
    {
        if ($this->metadata === null) {
            $this->throwNullValueException(static::METADATA);
        }

        return $this->metadata;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetadata()
    {
        $this->assertPropertyIsSet(self::METADATA);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCalculatedDiscountTransfer[] $calculatedDiscounts
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCalculatedDiscountTransfer[]
     */
    public function getCalculatedDiscounts()
    {
        return $this->calculatedDiscounts;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestCalculatedDiscountTransfer $calculatedDiscount
     *
     * @return $this
     */
    public function addCalculatedDiscount(RestCalculatedDiscountTransfer $calculatedDiscount)
    {
        $this->calculatedDiscounts[] = $calculatedDiscount;
        $this->modifiedProperties[self::CALCULATED_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitGrossPrice()
    {
        return $this->unitGrossPrice;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumGrossPrice()
    {
        return $this->sumGrossPrice;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitNetPrice()
    {
        return $this->unitNetPrice;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumNetPrice()
    {
        return $this->sumNetPrice;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitTaxAmountFullAggregation()
    {
        return $this->unitTaxAmountFullAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumTaxAmountFullAggregation()
    {
        return $this->sumTaxAmountFullAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getRefundableAmount()
    {
        return $this->refundableAmount;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumSubtotalAggregation()
    {
        return $this->sumSubtotalAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitSubtotalAggregation()
    {
        return $this->unitSubtotalAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitProductOptionPriceAggregation()
    {
        return $this->unitProductOptionPriceAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumProductOptionPriceAggregation()
    {
        return $this->sumProductOptionPriceAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param int|null $unitExpensePriceAggregation
     *
     * @return $this
     */
    public function setUnitExpensePriceAggregation($unitExpensePriceAggregation)
    {
        $this->unitExpensePriceAggregation = $unitExpensePriceAggregation;
        $this->modifiedProperties[self::UNIT_EXPENSE_PRICE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitExpensePriceAggregation()
    {
        return $this->unitExpensePriceAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param int|null $unitExpensePriceAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitExpensePriceAggregationOrFail($unitExpensePriceAggregation)
    {
        if ($unitExpensePriceAggregation === null) {
            $this->throwNullValueException(static::UNIT_EXPENSE_PRICE_AGGREGATION);
        }

        return $this->setUnitExpensePriceAggregation($unitExpensePriceAggregation);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitExpensePriceAggregationOrFail()
    {
        if ($this->unitExpensePriceAggregation === null) {
            $this->throwNullValueException(static::UNIT_EXPENSE_PRICE_AGGREGATION);
        }

        return $this->unitExpensePriceAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitExpensePriceAggregation()
    {
        $this->assertPropertyIsSet(self::UNIT_EXPENSE_PRICE_AGGREGATION);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param int|null $sumExpensePriceAggregation
     *
     * @return $this
     */
    public function setSumExpensePriceAggregation($sumExpensePriceAggregation)
    {
        $this->sumExpensePriceAggregation = $sumExpensePriceAggregation;
        $this->modifiedProperties[self::SUM_EXPENSE_PRICE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumExpensePriceAggregation()
    {
        return $this->sumExpensePriceAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param int|null $sumExpensePriceAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumExpensePriceAggregationOrFail($sumExpensePriceAggregation)
    {
        if ($sumExpensePriceAggregation === null) {
            $this->throwNullValueException(static::SUM_EXPENSE_PRICE_AGGREGATION);
        }

        return $this->setSumExpensePriceAggregation($sumExpensePriceAggregation);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumExpensePriceAggregationOrFail()
    {
        if ($this->sumExpensePriceAggregation === null) {
            $this->throwNullValueException(static::SUM_EXPENSE_PRICE_AGGREGATION);
        }

        return $this->sumExpensePriceAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumExpensePriceAggregation()
    {
        $this->assertPropertyIsSet(self::SUM_EXPENSE_PRICE_AGGREGATION);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitDiscountAmountAggregation()
    {
        return $this->unitDiscountAmountAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumDiscountAmountAggregation()
    {
        return $this->sumDiscountAmountAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitDiscountAmountFullAggregation()
    {
        return $this->unitDiscountAmountFullAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumDiscountAmountFullAggregation()
    {
        return $this->sumDiscountAmountFullAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitPriceToPayAggregation()
    {
        return $this->unitPriceToPayAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumPriceToPayAggregation()
    {
        return $this->sumPriceToPayAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param float|null $taxRateAverageAggregation
     *
     * @return $this
     */
    public function setTaxRateAverageAggregation($taxRateAverageAggregation)
    {
        $this->taxRateAverageAggregation = $taxRateAverageAggregation;
        $this->modifiedProperties[self::TAX_RATE_AVERAGE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return float|null
     */
    public function getTaxRateAverageAggregation()
    {
        return $this->taxRateAverageAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param float|null $taxRateAverageAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxRateAverageAggregationOrFail($taxRateAverageAggregation)
    {
        if ($taxRateAverageAggregation === null) {
            $this->throwNullValueException(static::TAX_RATE_AVERAGE_AGGREGATION);
        }

        return $this->setTaxRateAverageAggregation($taxRateAverageAggregation);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getTaxRateAverageAggregationOrFail()
    {
        if ($this->taxRateAverageAggregation === null) {
            $this->throwNullValueException(static::TAX_RATE_AVERAGE_AGGREGATION);
        }

        return $this->taxRateAverageAggregation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxRateAverageAggregation()
    {
        $this->assertPropertyIsSet(self::TAX_RATE_AVERAGE_AGGREGATION);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getTaxAmountAfterCancellation()
    {
        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param string|null $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        $this->modifiedProperties[self::ORDER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param string|null $orderReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderReferenceOrFail($orderReference)
    {
        if ($orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->setOrderReference($orderReference);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderReferenceOrFail()
    {
        if ($this->orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->orderReference;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderReference()
    {
        $this->assertPropertyIsSet(self::ORDER_REFERENCE);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi|SalesReturnsRestApi|ShipmentsRestApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi|SalesReturnsRestApi|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi|SalesReturnsRestApi|ShipmentsRestApi
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi|SalesReturnsRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi|SalesReturnsRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param bool|null $isReturnable
     *
     * @return $this
     */
    public function setIsReturnable($isReturnable)
    {
        $this->isReturnable = $isReturnable;
        $this->modifiedProperties[self::IS_RETURNABLE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return bool|null
     */
    public function getIsReturnable()
    {
        return $this->isReturnable;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param bool|null $isReturnable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsReturnableOrFail($isReturnable)
    {
        if ($isReturnable === null) {
            $this->throwNullValueException(static::IS_RETURNABLE);
        }

        return $this->setIsReturnable($isReturnable);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsReturnableOrFail()
    {
        if ($this->isReturnable === null) {
            $this->throwNullValueException(static::IS_RETURNABLE);
        }

        return $this->isReturnable;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsReturnable()
    {
        $this->assertPropertyIsSet(self::IS_RETURNABLE);

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
     * @module ProductBundlesRestApi
     *
     * @param string|null $bundleItemIdentifier
     *
     * @return $this
     */
    public function setBundleItemIdentifier($bundleItemIdentifier)
    {
        $this->bundleItemIdentifier = $bundleItemIdentifier;
        $this->modifiedProperties[self::BUNDLE_ITEM_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getBundleItemIdentifier()
    {
        return $this->bundleItemIdentifier;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @param string|null $bundleItemIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBundleItemIdentifierOrFail($bundleItemIdentifier)
    {
        if ($bundleItemIdentifier === null) {
            $this->throwNullValueException(static::BUNDLE_ITEM_IDENTIFIER);
        }

        return $this->setBundleItemIdentifier($bundleItemIdentifier);
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBundleItemIdentifierOrFail()
    {
        if ($this->bundleItemIdentifier === null) {
            $this->throwNullValueException(static::BUNDLE_ITEM_IDENTIFIER);
        }

        return $this->bundleItemIdentifier;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundleItemIdentifier()
    {
        $this->assertPropertyIsSet(self::BUNDLE_ITEM_IDENTIFIER);

        return $this;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @param string|null $relatedBundleItemIdentifier
     *
     * @return $this
     */
    public function setRelatedBundleItemIdentifier($relatedBundleItemIdentifier)
    {
        $this->relatedBundleItemIdentifier = $relatedBundleItemIdentifier;
        $this->modifiedProperties[self::RELATED_BUNDLE_ITEM_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getRelatedBundleItemIdentifier()
    {
        return $this->relatedBundleItemIdentifier;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @param string|null $relatedBundleItemIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRelatedBundleItemIdentifierOrFail($relatedBundleItemIdentifier)
    {
        if ($relatedBundleItemIdentifier === null) {
            $this->throwNullValueException(static::RELATED_BUNDLE_ITEM_IDENTIFIER);
        }

        return $this->setRelatedBundleItemIdentifier($relatedBundleItemIdentifier);
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRelatedBundleItemIdentifierOrFail()
    {
        if ($this->relatedBundleItemIdentifier === null) {
            $this->throwNullValueException(static::RELATED_BUNDLE_ITEM_IDENTIFIER);
        }

        return $this->relatedBundleItemIdentifier;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelatedBundleItemIdentifier()
    {
        $this->assertPropertyIsSet(self::RELATED_BUNDLE_ITEM_IDENTIFIER);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amount
     *
     * @return $this
     */
    public function setAmount($amount = null)
    {
        if ($amount !== null && !$amount instanceof Decimal) {
            $amount = new Decimal($amount);
        }

        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail($amount)
    {
        if ($amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->setAmount($amount);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmount()
    {
        $this->assertPropertyIsSet(self::AMOUNT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrdersSalesUnitAttributesTransfer|null $salesUnit
     *
     * @return $this
     */
    public function setSalesUnit(RestOrdersSalesUnitAttributesTransfer $salesUnit = null)
    {
        $this->salesUnit = $salesUnit;
        $this->modifiedProperties[self::SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return \Generated\Shared\Transfer\RestOrdersSalesUnitAttributesTransfer|null
     */
    public function getSalesUnit()
    {
        return $this->salesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrdersSalesUnitAttributesTransfer $salesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesUnitOrFail(RestOrdersSalesUnitAttributesTransfer $salesUnit)
    {
        return $this->setSalesUnit($salesUnit);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestOrdersSalesUnitAttributesTransfer
     */
    public function getSalesUnitOrFail()
    {
        if ($this->salesUnit === null) {
            $this->throwNullValueException(static::SALES_UNIT);
        }

        return $this->salesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesUnit()
    {
        $this->assertPropertyIsSet(self::SALES_UNIT);

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestOrderItemProductOptionsTransfer[] $productOptions
     *
     * @return $this
     */
    public function setProductOptions(ArrayObject $productOptions)
    {
        $this->productOptions = $productOptions;
        $this->modifiedProperties[self::PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestOrderItemProductOptionsTransfer[]
     */
    public function getProductOptions()
    {
        return $this->productOptions;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderItemProductOptionsTransfer $productOption
     *
     * @return $this
     */
    public function addProductOption(RestOrderItemProductOptionsTransfer $productOption)
    {
        $this->productOptions[] = $productOption;
        $this->modifiedProperties[self::PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptions()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_OPTIONS);

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
                case 'name':
                case 'sku':
                case 'sumPrice':
                case 'quantity':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
                case 'refundableAmount':
                case 'canceledAmount':
                case 'sumSubtotalAggregation':
                case 'unitSubtotalAggregation':
                case 'unitProductOptionPriceAggregation':
                case 'sumProductOptionPriceAggregation':
                case 'unitExpensePriceAggregation':
                case 'sumExpensePriceAggregation':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitDiscountAmountFullAggregation':
                case 'sumDiscountAmountFullAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'taxRateAverageAggregation':
                case 'taxAmountAfterCancellation':
                case 'orderReference':
                case 'uuid':
                case 'isReturnable':
                case 'idShipment':
                case 'bundleItemIdentifier':
                case 'relatedBundleItemIdentifier':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'salesOrderConfiguredBundle':
                case 'salesOrderConfiguredBundleItem':
                case 'metadata':
                case 'salesUnit':
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
                case 'productOptions':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'amount':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'name':
                case 'sku':
                case 'sumPrice':
                case 'quantity':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
                case 'refundableAmount':
                case 'canceledAmount':
                case 'sumSubtotalAggregation':
                case 'unitSubtotalAggregation':
                case 'unitProductOptionPriceAggregation':
                case 'sumProductOptionPriceAggregation':
                case 'unitExpensePriceAggregation':
                case 'sumExpensePriceAggregation':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitDiscountAmountFullAggregation':
                case 'sumDiscountAmountFullAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'taxRateAverageAggregation':
                case 'taxAmountAfterCancellation':
                case 'orderReference':
                case 'uuid':
                case 'isReturnable':
                case 'idShipment':
                case 'bundleItemIdentifier':
                case 'relatedBundleItemIdentifier':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderConfiguredBundle':
                case 'salesOrderConfiguredBundleItem':
                case 'metadata':
                case 'salesUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'calculatedDiscounts':
                case 'productOptions':
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
                case 'name':
                case 'sku':
                case 'sumPrice':
                case 'quantity':
                case 'unitGrossPrice':
                case 'sumGrossPrice':
                case 'taxRate':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
                case 'refundableAmount':
                case 'canceledAmount':
                case 'sumSubtotalAggregation':
                case 'unitSubtotalAggregation':
                case 'unitProductOptionPriceAggregation':
                case 'sumProductOptionPriceAggregation':
                case 'unitExpensePriceAggregation':
                case 'sumExpensePriceAggregation':
                case 'unitDiscountAmountAggregation':
                case 'sumDiscountAmountAggregation':
                case 'unitDiscountAmountFullAggregation':
                case 'sumDiscountAmountFullAggregation':
                case 'unitPriceToPayAggregation':
                case 'sumPriceToPayAggregation':
                case 'taxRateAverageAggregation':
                case 'taxAmountAfterCancellation':
                case 'orderReference':
                case 'uuid':
                case 'isReturnable':
                case 'idShipment':
                case 'bundleItemIdentifier':
                case 'relatedBundleItemIdentifier':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderConfiguredBundle':
                case 'salesOrderConfiguredBundleItem':
                case 'metadata':
                case 'salesUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'calculatedDiscounts':
                case 'productOptions':
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
        $this->productOptions = $this->productOptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'sku' => $this->sku,
            'sumPrice' => $this->sumPrice,
            'quantity' => $this->quantity,
            'unitGrossPrice' => $this->unitGrossPrice,
            'sumGrossPrice' => $this->sumGrossPrice,
            'taxRate' => $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice,
            'unitPrice' => $this->unitPrice,
            'unitTaxAmountFullAggregation' => $this->unitTaxAmountFullAggregation,
            'sumTaxAmountFullAggregation' => $this->sumTaxAmountFullAggregation,
            'refundableAmount' => $this->refundableAmount,
            'canceledAmount' => $this->canceledAmount,
            'sumSubtotalAggregation' => $this->sumSubtotalAggregation,
            'unitSubtotalAggregation' => $this->unitSubtotalAggregation,
            'unitProductOptionPriceAggregation' => $this->unitProductOptionPriceAggregation,
            'sumProductOptionPriceAggregation' => $this->sumProductOptionPriceAggregation,
            'unitExpensePriceAggregation' => $this->unitExpensePriceAggregation,
            'sumExpensePriceAggregation' => $this->sumExpensePriceAggregation,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation,
            'unitDiscountAmountFullAggregation' => $this->unitDiscountAmountFullAggregation,
            'sumDiscountAmountFullAggregation' => $this->sumDiscountAmountFullAggregation,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation,
            'taxRateAverageAggregation' => $this->taxRateAverageAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation,
            'orderReference' => $this->orderReference,
            'uuid' => $this->uuid,
            'isReturnable' => $this->isReturnable,
            'idShipment' => $this->idShipment,
            'bundleItemIdentifier' => $this->bundleItemIdentifier,
            'relatedBundleItemIdentifier' => $this->relatedBundleItemIdentifier,
            'salesOrderConfiguredBundle' => $this->salesOrderConfiguredBundle,
            'salesOrderConfiguredBundleItem' => $this->salesOrderConfiguredBundleItem,
            'metadata' => $this->metadata,
            'salesUnit' => $this->salesUnit,
            'calculatedDiscounts' => $this->calculatedDiscounts,
            'productOptions' => $this->productOptions,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'sku' => $this->sku,
            'sum_price' => $this->sumPrice,
            'quantity' => $this->quantity,
            'unit_gross_price' => $this->unitGrossPrice,
            'sum_gross_price' => $this->sumGrossPrice,
            'tax_rate' => $this->taxRate,
            'unit_net_price' => $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice,
            'unit_price' => $this->unitPrice,
            'unit_tax_amount_full_aggregation' => $this->unitTaxAmountFullAggregation,
            'sum_tax_amount_full_aggregation' => $this->sumTaxAmountFullAggregation,
            'refundable_amount' => $this->refundableAmount,
            'canceled_amount' => $this->canceledAmount,
            'sum_subtotal_aggregation' => $this->sumSubtotalAggregation,
            'unit_subtotal_aggregation' => $this->unitSubtotalAggregation,
            'unit_product_option_price_aggregation' => $this->unitProductOptionPriceAggregation,
            'sum_product_option_price_aggregation' => $this->sumProductOptionPriceAggregation,
            'unit_expense_price_aggregation' => $this->unitExpensePriceAggregation,
            'sum_expense_price_aggregation' => $this->sumExpensePriceAggregation,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation,
            'unit_discount_amount_full_aggregation' => $this->unitDiscountAmountFullAggregation,
            'sum_discount_amount_full_aggregation' => $this->sumDiscountAmountFullAggregation,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation,
            'tax_rate_average_aggregation' => $this->taxRateAverageAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation,
            'order_reference' => $this->orderReference,
            'uuid' => $this->uuid,
            'is_returnable' => $this->isReturnable,
            'id_shipment' => $this->idShipment,
            'bundle_item_identifier' => $this->bundleItemIdentifier,
            'related_bundle_item_identifier' => $this->relatedBundleItemIdentifier,
            'sales_order_configured_bundle' => $this->salesOrderConfiguredBundle,
            'sales_order_configured_bundle_item' => $this->salesOrderConfiguredBundleItem,
            'metadata' => $this->metadata,
            'sales_unit' => $this->salesUnit,
            'calculated_discounts' => $this->calculatedDiscounts,
            'product_options' => $this->productOptions,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'sum_price' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, false) : $this->sumPrice,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'unit_gross_price' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, false) : $this->unitGrossPrice,
            'sum_gross_price' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, false) : $this->sumGrossPrice,
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'unit_net_price' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, false) : $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, false) : $this->sumNetPrice,
            'unit_price' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, false) : $this->unitPrice,
            'unit_tax_amount_full_aggregation' => $this->unitTaxAmountFullAggregation instanceof AbstractTransfer ? $this->unitTaxAmountFullAggregation->toArray(true, false) : $this->unitTaxAmountFullAggregation,
            'sum_tax_amount_full_aggregation' => $this->sumTaxAmountFullAggregation instanceof AbstractTransfer ? $this->sumTaxAmountFullAggregation->toArray(true, false) : $this->sumTaxAmountFullAggregation,
            'refundable_amount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, false) : $this->refundableAmount,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'sum_subtotal_aggregation' => $this->sumSubtotalAggregation instanceof AbstractTransfer ? $this->sumSubtotalAggregation->toArray(true, false) : $this->sumSubtotalAggregation,
            'unit_subtotal_aggregation' => $this->unitSubtotalAggregation instanceof AbstractTransfer ? $this->unitSubtotalAggregation->toArray(true, false) : $this->unitSubtotalAggregation,
            'unit_product_option_price_aggregation' => $this->unitProductOptionPriceAggregation instanceof AbstractTransfer ? $this->unitProductOptionPriceAggregation->toArray(true, false) : $this->unitProductOptionPriceAggregation,
            'sum_product_option_price_aggregation' => $this->sumProductOptionPriceAggregation instanceof AbstractTransfer ? $this->sumProductOptionPriceAggregation->toArray(true, false) : $this->sumProductOptionPriceAggregation,
            'unit_expense_price_aggregation' => $this->unitExpensePriceAggregation instanceof AbstractTransfer ? $this->unitExpensePriceAggregation->toArray(true, false) : $this->unitExpensePriceAggregation,
            'sum_expense_price_aggregation' => $this->sumExpensePriceAggregation instanceof AbstractTransfer ? $this->sumExpensePriceAggregation->toArray(true, false) : $this->sumExpensePriceAggregation,
            'unit_discount_amount_aggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, false) : $this->unitDiscountAmountAggregation,
            'sum_discount_amount_aggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, false) : $this->sumDiscountAmountAggregation,
            'unit_discount_amount_full_aggregation' => $this->unitDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountFullAggregation->toArray(true, false) : $this->unitDiscountAmountFullAggregation,
            'sum_discount_amount_full_aggregation' => $this->sumDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountFullAggregation->toArray(true, false) : $this->sumDiscountAmountFullAggregation,
            'unit_price_to_pay_aggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, false) : $this->unitPriceToPayAggregation,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, false) : $this->sumPriceToPayAggregation,
            'tax_rate_average_aggregation' => $this->taxRateAverageAggregation instanceof AbstractTransfer ? $this->taxRateAverageAggregation->toArray(true, false) : $this->taxRateAverageAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, false) : $this->taxAmountAfterCancellation,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'is_returnable' => $this->isReturnable instanceof AbstractTransfer ? $this->isReturnable->toArray(true, false) : $this->isReturnable,
            'id_shipment' => $this->idShipment instanceof AbstractTransfer ? $this->idShipment->toArray(true, false) : $this->idShipment,
            'bundle_item_identifier' => $this->bundleItemIdentifier instanceof AbstractTransfer ? $this->bundleItemIdentifier->toArray(true, false) : $this->bundleItemIdentifier,
            'related_bundle_item_identifier' => $this->relatedBundleItemIdentifier instanceof AbstractTransfer ? $this->relatedBundleItemIdentifier->toArray(true, false) : $this->relatedBundleItemIdentifier,
            'sales_order_configured_bundle' => $this->salesOrderConfiguredBundle instanceof AbstractTransfer ? $this->salesOrderConfiguredBundle->toArray(true, false) : $this->salesOrderConfiguredBundle,
            'sales_order_configured_bundle_item' => $this->salesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->salesOrderConfiguredBundleItem->toArray(true, false) : $this->salesOrderConfiguredBundleItem,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, false) : $this->metadata,
            'sales_unit' => $this->salesUnit instanceof AbstractTransfer ? $this->salesUnit->toArray(true, false) : $this->salesUnit,
            'calculated_discounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, false) : $this->addValuesToCollection($this->calculatedDiscounts, true, false),
            'product_options' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, false) : $this->addValuesToCollection($this->productOptions, true, false),
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'sumPrice' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, true) : $this->sumPrice,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'unitGrossPrice' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, true) : $this->unitGrossPrice,
            'sumGrossPrice' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, true) : $this->sumGrossPrice,
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'unitNetPrice' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, true) : $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, true) : $this->sumNetPrice,
            'unitPrice' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, true) : $this->unitPrice,
            'unitTaxAmountFullAggregation' => $this->unitTaxAmountFullAggregation instanceof AbstractTransfer ? $this->unitTaxAmountFullAggregation->toArray(true, true) : $this->unitTaxAmountFullAggregation,
            'sumTaxAmountFullAggregation' => $this->sumTaxAmountFullAggregation instanceof AbstractTransfer ? $this->sumTaxAmountFullAggregation->toArray(true, true) : $this->sumTaxAmountFullAggregation,
            'refundableAmount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, true) : $this->refundableAmount,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'sumSubtotalAggregation' => $this->sumSubtotalAggregation instanceof AbstractTransfer ? $this->sumSubtotalAggregation->toArray(true, true) : $this->sumSubtotalAggregation,
            'unitSubtotalAggregation' => $this->unitSubtotalAggregation instanceof AbstractTransfer ? $this->unitSubtotalAggregation->toArray(true, true) : $this->unitSubtotalAggregation,
            'unitProductOptionPriceAggregation' => $this->unitProductOptionPriceAggregation instanceof AbstractTransfer ? $this->unitProductOptionPriceAggregation->toArray(true, true) : $this->unitProductOptionPriceAggregation,
            'sumProductOptionPriceAggregation' => $this->sumProductOptionPriceAggregation instanceof AbstractTransfer ? $this->sumProductOptionPriceAggregation->toArray(true, true) : $this->sumProductOptionPriceAggregation,
            'unitExpensePriceAggregation' => $this->unitExpensePriceAggregation instanceof AbstractTransfer ? $this->unitExpensePriceAggregation->toArray(true, true) : $this->unitExpensePriceAggregation,
            'sumExpensePriceAggregation' => $this->sumExpensePriceAggregation instanceof AbstractTransfer ? $this->sumExpensePriceAggregation->toArray(true, true) : $this->sumExpensePriceAggregation,
            'unitDiscountAmountAggregation' => $this->unitDiscountAmountAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountAggregation->toArray(true, true) : $this->unitDiscountAmountAggregation,
            'sumDiscountAmountAggregation' => $this->sumDiscountAmountAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountAggregation->toArray(true, true) : $this->sumDiscountAmountAggregation,
            'unitDiscountAmountFullAggregation' => $this->unitDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->unitDiscountAmountFullAggregation->toArray(true, true) : $this->unitDiscountAmountFullAggregation,
            'sumDiscountAmountFullAggregation' => $this->sumDiscountAmountFullAggregation instanceof AbstractTransfer ? $this->sumDiscountAmountFullAggregation->toArray(true, true) : $this->sumDiscountAmountFullAggregation,
            'unitPriceToPayAggregation' => $this->unitPriceToPayAggregation instanceof AbstractTransfer ? $this->unitPriceToPayAggregation->toArray(true, true) : $this->unitPriceToPayAggregation,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, true) : $this->sumPriceToPayAggregation,
            'taxRateAverageAggregation' => $this->taxRateAverageAggregation instanceof AbstractTransfer ? $this->taxRateAverageAggregation->toArray(true, true) : $this->taxRateAverageAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, true) : $this->taxAmountAfterCancellation,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'isReturnable' => $this->isReturnable instanceof AbstractTransfer ? $this->isReturnable->toArray(true, true) : $this->isReturnable,
            'idShipment' => $this->idShipment instanceof AbstractTransfer ? $this->idShipment->toArray(true, true) : $this->idShipment,
            'bundleItemIdentifier' => $this->bundleItemIdentifier instanceof AbstractTransfer ? $this->bundleItemIdentifier->toArray(true, true) : $this->bundleItemIdentifier,
            'relatedBundleItemIdentifier' => $this->relatedBundleItemIdentifier instanceof AbstractTransfer ? $this->relatedBundleItemIdentifier->toArray(true, true) : $this->relatedBundleItemIdentifier,
            'salesOrderConfiguredBundle' => $this->salesOrderConfiguredBundle instanceof AbstractTransfer ? $this->salesOrderConfiguredBundle->toArray(true, true) : $this->salesOrderConfiguredBundle,
            'salesOrderConfiguredBundleItem' => $this->salesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->salesOrderConfiguredBundleItem->toArray(true, true) : $this->salesOrderConfiguredBundleItem,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, true) : $this->metadata,
            'salesUnit' => $this->salesUnit instanceof AbstractTransfer ? $this->salesUnit->toArray(true, true) : $this->salesUnit,
            'calculatedDiscounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, true) : $this->addValuesToCollection($this->calculatedDiscounts, true, true),
            'productOptions' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, true) : $this->addValuesToCollection($this->productOptions, true, true),
            'amount' => $this->amount,
        ];
    }
}
