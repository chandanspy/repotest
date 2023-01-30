<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesOrderItemEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM = 'idSalesOrderItem';

    /**
     * @var string
     */
    public const FK_OMS_ORDER_ITEM_STATE = 'fkOmsOrderItemState';

    /**
     * @var string
     */
    public const FK_OMS_ORDER_PROCESS = 'fkOmsOrderProcess';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM_BUNDLE = 'fkSalesOrderItemBundle';

    /**
     * @var string
     */
    public const FK_SALES_SHIPMENT = 'fkSalesShipment';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const AMOUNT_BASE_MEASUREMENT_UNIT_NAME = 'amountBaseMeasurementUnitName';

    /**
     * @var string
     */
    public const AMOUNT_MEASUREMENT_UNIT_CODE = 'amountMeasurementUnitCode';

    /**
     * @var string
     */
    public const AMOUNT_MEASUREMENT_UNIT_CONVERSION = 'amountMeasurementUnitConversion';

    /**
     * @var string
     */
    public const AMOUNT_MEASUREMENT_UNIT_NAME = 'amountMeasurementUnitName';

    /**
     * @var string
     */
    public const AMOUNT_MEASUREMENT_UNIT_PRECISION = 'amountMeasurementUnitPrecision';

    /**
     * @var string
     */
    public const AMOUNT_SKU = 'amountSku';

    /**
     * @var string
     */
    public const CANCELED_AMOUNT = 'canceledAmount';

    /**
     * @var string
     */
    public const CART_NOTE = 'cartNote';

    /**
     * @var string
     */
    public const DISCOUNT_AMOUNT_AGGREGATION = 'discountAmountAggregation';

    /**
     * @var string
     */
    public const DISCOUNT_AMOUNT_FULL_AGGREGATION = 'discountAmountFullAggregation';

    /**
     * @var string
     */
    public const EXPENSE_PRICE_AGGREGATION = 'expensePriceAggregation';

    /**
     * @var string
     */
    public const GROSS_PRICE = 'grossPrice';

    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const IS_QUANTITY_SPLITTABLE = 'isQuantitySplittable';

    /**
     * @var string
     */
    public const LAST_STATE_CHANGE = 'lastStateChange';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const NET_PRICE = 'netPrice';

    /**
     * @var string
     */
    public const ORDER_ITEM_REFERENCE = 'orderItemReference';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string
     */
    public const PRICE_TO_PAY_AGGREGATION = 'priceToPayAggregation';

    /**
     * @var string
     */
    public const PRODUCT_OPTION_PRICE_AGGREGATION = 'productOptionPriceAggregation';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const QUANTITY_BASE_MEASUREMENT_UNIT_NAME = 'quantityBaseMeasurementUnitName';

    /**
     * @var string
     */
    public const QUANTITY_MEASUREMENT_UNIT_CODE = 'quantityMeasurementUnitCode';

    /**
     * @var string
     */
    public const QUANTITY_MEASUREMENT_UNIT_CONVERSION = 'quantityMeasurementUnitConversion';

    /**
     * @var string
     */
    public const QUANTITY_MEASUREMENT_UNIT_NAME = 'quantityMeasurementUnitName';

    /**
     * @var string
     */
    public const QUANTITY_MEASUREMENT_UNIT_PRECISION = 'quantityMeasurementUnitPrecision';

    /**
     * @var string
     */
    public const REFUNDABLE_AMOUNT = 'refundableAmount';

    /**
     * @var string
     */
    public const REMUNERATION_AMOUNT = 'remunerationAmount';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const SUBTOTAL_AGGREGATION = 'subtotalAggregation';

    /**
     * @var string
     */
    public const TAX_AMOUNT = 'taxAmount';

    /**
     * @var string
     */
    public const TAX_AMOUNT_AFTER_CANCELLATION = 'taxAmountAfterCancellation';

    /**
     * @var string
     */
    public const TAX_AMOUNT_FULL_AGGREGATION = 'taxAmountFullAggregation';

    /**
     * @var string
     */
    public const TAX_RATE = 'taxRate';

    /**
     * @var string
     */
    public const TAX_RATE_AVERAGE_AGGREGATION = 'taxRateAverageAggregation';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_BUNDLE = 'salesOrderItemBundle';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const STATE = 'state';

    /**
     * @var string
     */
    public const PROCESS = 'process';

    /**
     * @var string
     */
    public const SPY_SALES_SHIPMENT = 'spySalesShipment';

    /**
     * @var string
     */
    public const SPY_NOPAYMENT_PAIDS = 'spyNopaymentPaids';

    /**
     * @var string
     */
    public const SPY_SALES_RECLAMATION_ITEMS = 'spySalesReclamationItems';

    /**
     * @var string
     */
    public const SPY_SALES_RETURN_ITEMS = 'spySalesReturnItems';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS = 'spySalesOrderConfiguredBundleItems';

    /**
     * @var string
     */
    public const SPY_OMS_TRANSITION_LOGS = 'spyOmsTransitionLogs';

    /**
     * @var string
     */
    public const SPY_OMS_ORDER_ITEM_STATE_HISTORIES = 'spyOmsOrderItemStateHistories';

    /**
     * @var string
     */
    public const SPY_OMS_EVENT_TIMEOUTS = 'spyOmsEventTimeouts';

    /**
     * @var string
     */
    public const SPY_SALES_DISCOUNTS = 'spySalesDiscounts';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEM_OPTIONS = 'spySalesOrderItemOptions';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEM_METADATAS = 'spySalesOrderItemMetadatas';

    /**
     * @var integer|null
     */
    protected $idSalesOrderItem;

    /**
     * @var integer|null
     */
    protected $fkOmsOrderItemState;

    /**
     * @var integer|null
     */
    protected $fkOmsOrderProcess;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItemBundle;

    /**
     * @var integer|null
     */
    protected $fkSalesShipment;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $amountBaseMeasurementUnitName;

    /**
     * @var string|null
     */
    protected $amountMeasurementUnitCode;

    /**
     * @var float|null
     */
    protected $amountMeasurementUnitConversion;

    /**
     * @var string|null
     */
    protected $amountMeasurementUnitName;

    /**
     * @var integer|null
     */
    protected $amountMeasurementUnitPrecision;

    /**
     * @var string|null
     */
    protected $amountSku;

    /**
     * @var integer|null
     */
    protected $canceledAmount;

    /**
     * @var string|null
     */
    protected $cartNote;

    /**
     * @var integer|null
     */
    protected $discountAmountAggregation;

    /**
     * @var integer|null
     */
    protected $discountAmountFullAggregation;

    /**
     * @var integer|null
     */
    protected $expensePriceAggregation;

    /**
     * @var integer|null
     */
    protected $grossPrice;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var boolean|null
     */
    protected $isQuantitySplittable;

    /**
     * @var string|null
     */
    protected $lastStateChange;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var integer|null
     */
    protected $netPrice;

    /**
     * @var string|null
     */
    protected $orderItemReference;

    /**
     * @var integer|null
     */
    protected $price;

    /**
     * @var integer|null
     */
    protected $priceToPayAggregation;

    /**
     * @var integer|null
     */
    protected $productOptionPriceAggregation;

    /**
     * @var integer|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $quantityBaseMeasurementUnitName;

    /**
     * @var string|null
     */
    protected $quantityMeasurementUnitCode;

    /**
     * @var float|null
     */
    protected $quantityMeasurementUnitConversion;

    /**
     * @var string|null
     */
    protected $quantityMeasurementUnitName;

    /**
     * @var integer|null
     */
    protected $quantityMeasurementUnitPrecision;

    /**
     * @var integer|null
     */
    protected $refundableAmount;

    /**
     * @var integer|null
     */
    protected $remunerationAmount;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var integer|null
     */
    protected $subtotalAggregation;

    /**
     * @var integer|null
     */
    protected $taxAmount;

    /**
     * @var integer|null
     */
    protected $taxAmountAfterCancellation;

    /**
     * @var integer|null
     */
    protected $taxAmountFullAggregation;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $taxRate;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $taxRateAverageAggregation;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemBundleEntityTransfer|null
     */
    protected $salesOrderItemBundle;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer|null
     */
    protected $state;

    /**
     * @var \Generated\Shared\Transfer\SpyOmsOrderProcessEntityTransfer|null
     */
    protected $process;

    /**
     * @var \Generated\Shared\Transfer\SpySalesShipmentEntityTransfer|null
     */
    protected $spySalesShipment;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNopaymentPaidEntityTransfer[]
     */
    protected $spyNopaymentPaids;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer[]
     */
    protected $spySalesReclamationItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesReturnItemEntityTransfer[]
     */
    protected $spySalesReturnItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer[]
     */
    protected $spySalesOrderConfiguredBundleItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer[]
     */
    protected $spyOmsTransitionLogs;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer[]
     */
    protected $spyOmsOrderItemStateHistories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer[]
     */
    protected $spyOmsEventTimeouts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountEntityTransfer[]
     */
    protected $spySalesDiscounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer[]
     */
    protected $spySalesOrderItemOptions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemMetadataEntityTransfer[]
     */
    protected $spySalesOrderItemMetadatas;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_item' => 'idSalesOrderItem',
        'idSalesOrderItem' => 'idSalesOrderItem',
        'IdSalesOrderItem' => 'idSalesOrderItem',
        'fk_oms_order_item_state' => 'fkOmsOrderItemState',
        'fkOmsOrderItemState' => 'fkOmsOrderItemState',
        'FkOmsOrderItemState' => 'fkOmsOrderItemState',
        'fk_oms_order_process' => 'fkOmsOrderProcess',
        'fkOmsOrderProcess' => 'fkOmsOrderProcess',
        'FkOmsOrderProcess' => 'fkOmsOrderProcess',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'fk_sales_order_item_bundle' => 'fkSalesOrderItemBundle',
        'fkSalesOrderItemBundle' => 'fkSalesOrderItemBundle',
        'FkSalesOrderItemBundle' => 'fkSalesOrderItemBundle',
        'fk_sales_shipment' => 'fkSalesShipment',
        'fkSalesShipment' => 'fkSalesShipment',
        'FkSalesShipment' => 'fkSalesShipment',
        'amount' => 'amount',
        'Amount' => 'amount',
        'amount_base_measurement_unit_name' => 'amountBaseMeasurementUnitName',
        'amountBaseMeasurementUnitName' => 'amountBaseMeasurementUnitName',
        'AmountBaseMeasurementUnitName' => 'amountBaseMeasurementUnitName',
        'amount_measurement_unit_code' => 'amountMeasurementUnitCode',
        'amountMeasurementUnitCode' => 'amountMeasurementUnitCode',
        'AmountMeasurementUnitCode' => 'amountMeasurementUnitCode',
        'amount_measurement_unit_conversion' => 'amountMeasurementUnitConversion',
        'amountMeasurementUnitConversion' => 'amountMeasurementUnitConversion',
        'AmountMeasurementUnitConversion' => 'amountMeasurementUnitConversion',
        'amount_measurement_unit_name' => 'amountMeasurementUnitName',
        'amountMeasurementUnitName' => 'amountMeasurementUnitName',
        'AmountMeasurementUnitName' => 'amountMeasurementUnitName',
        'amount_measurement_unit_precision' => 'amountMeasurementUnitPrecision',
        'amountMeasurementUnitPrecision' => 'amountMeasurementUnitPrecision',
        'AmountMeasurementUnitPrecision' => 'amountMeasurementUnitPrecision',
        'amount_sku' => 'amountSku',
        'amountSku' => 'amountSku',
        'AmountSku' => 'amountSku',
        'canceled_amount' => 'canceledAmount',
        'canceledAmount' => 'canceledAmount',
        'CanceledAmount' => 'canceledAmount',
        'cart_note' => 'cartNote',
        'cartNote' => 'cartNote',
        'CartNote' => 'cartNote',
        'discount_amount_aggregation' => 'discountAmountAggregation',
        'discountAmountAggregation' => 'discountAmountAggregation',
        'DiscountAmountAggregation' => 'discountAmountAggregation',
        'discount_amount_full_aggregation' => 'discountAmountFullAggregation',
        'discountAmountFullAggregation' => 'discountAmountFullAggregation',
        'DiscountAmountFullAggregation' => 'discountAmountFullAggregation',
        'expense_price_aggregation' => 'expensePriceAggregation',
        'expensePriceAggregation' => 'expensePriceAggregation',
        'ExpensePriceAggregation' => 'expensePriceAggregation',
        'gross_price' => 'grossPrice',
        'grossPrice' => 'grossPrice',
        'GrossPrice' => 'grossPrice',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'is_quantity_splittable' => 'isQuantitySplittable',
        'isQuantitySplittable' => 'isQuantitySplittable',
        'IsQuantitySplittable' => 'isQuantitySplittable',
        'last_state_change' => 'lastStateChange',
        'lastStateChange' => 'lastStateChange',
        'LastStateChange' => 'lastStateChange',
        'name' => 'name',
        'Name' => 'name',
        'net_price' => 'netPrice',
        'netPrice' => 'netPrice',
        'NetPrice' => 'netPrice',
        'order_item_reference' => 'orderItemReference',
        'orderItemReference' => 'orderItemReference',
        'OrderItemReference' => 'orderItemReference',
        'price' => 'price',
        'Price' => 'price',
        'price_to_pay_aggregation' => 'priceToPayAggregation',
        'priceToPayAggregation' => 'priceToPayAggregation',
        'PriceToPayAggregation' => 'priceToPayAggregation',
        'product_option_price_aggregation' => 'productOptionPriceAggregation',
        'productOptionPriceAggregation' => 'productOptionPriceAggregation',
        'ProductOptionPriceAggregation' => 'productOptionPriceAggregation',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'quantity_base_measurement_unit_name' => 'quantityBaseMeasurementUnitName',
        'quantityBaseMeasurementUnitName' => 'quantityBaseMeasurementUnitName',
        'QuantityBaseMeasurementUnitName' => 'quantityBaseMeasurementUnitName',
        'quantity_measurement_unit_code' => 'quantityMeasurementUnitCode',
        'quantityMeasurementUnitCode' => 'quantityMeasurementUnitCode',
        'QuantityMeasurementUnitCode' => 'quantityMeasurementUnitCode',
        'quantity_measurement_unit_conversion' => 'quantityMeasurementUnitConversion',
        'quantityMeasurementUnitConversion' => 'quantityMeasurementUnitConversion',
        'QuantityMeasurementUnitConversion' => 'quantityMeasurementUnitConversion',
        'quantity_measurement_unit_name' => 'quantityMeasurementUnitName',
        'quantityMeasurementUnitName' => 'quantityMeasurementUnitName',
        'QuantityMeasurementUnitName' => 'quantityMeasurementUnitName',
        'quantity_measurement_unit_precision' => 'quantityMeasurementUnitPrecision',
        'quantityMeasurementUnitPrecision' => 'quantityMeasurementUnitPrecision',
        'QuantityMeasurementUnitPrecision' => 'quantityMeasurementUnitPrecision',
        'refundable_amount' => 'refundableAmount',
        'refundableAmount' => 'refundableAmount',
        'RefundableAmount' => 'refundableAmount',
        'remuneration_amount' => 'remunerationAmount',
        'remunerationAmount' => 'remunerationAmount',
        'RemunerationAmount' => 'remunerationAmount',
        'sku' => 'sku',
        'Sku' => 'sku',
        'subtotal_aggregation' => 'subtotalAggregation',
        'subtotalAggregation' => 'subtotalAggregation',
        'SubtotalAggregation' => 'subtotalAggregation',
        'tax_amount' => 'taxAmount',
        'taxAmount' => 'taxAmount',
        'TaxAmount' => 'taxAmount',
        'tax_amount_after_cancellation' => 'taxAmountAfterCancellation',
        'taxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'TaxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'tax_amount_full_aggregation' => 'taxAmountFullAggregation',
        'taxAmountFullAggregation' => 'taxAmountFullAggregation',
        'TaxAmountFullAggregation' => 'taxAmountFullAggregation',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'tax_rate_average_aggregation' => 'taxRateAverageAggregation',
        'taxRateAverageAggregation' => 'taxRateAverageAggregation',
        'TaxRateAverageAggregation' => 'taxRateAverageAggregation',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'sales_order_item_bundle' => 'salesOrderItemBundle',
        'salesOrderItemBundle' => 'salesOrderItemBundle',
        'SalesOrderItemBundle' => 'salesOrderItemBundle',
        'order' => 'order',
        'Order' => 'order',
        'state' => 'state',
        'State' => 'state',
        'process' => 'process',
        'Process' => 'process',
        'spy_sales_shipment' => 'spySalesShipment',
        'spySalesShipment' => 'spySalesShipment',
        'SpySalesShipment' => 'spySalesShipment',
        'spy_nopayment_paids' => 'spyNopaymentPaids',
        'spyNopaymentPaids' => 'spyNopaymentPaids',
        'SpyNopaymentPaids' => 'spyNopaymentPaids',
        'spy_sales_reclamation_items' => 'spySalesReclamationItems',
        'spySalesReclamationItems' => 'spySalesReclamationItems',
        'SpySalesReclamationItems' => 'spySalesReclamationItems',
        'spy_sales_return_items' => 'spySalesReturnItems',
        'spySalesReturnItems' => 'spySalesReturnItems',
        'SpySalesReturnItems' => 'spySalesReturnItems',
        'spy_sales_order_configured_bundle_items' => 'spySalesOrderConfiguredBundleItems',
        'spySalesOrderConfiguredBundleItems' => 'spySalesOrderConfiguredBundleItems',
        'SpySalesOrderConfiguredBundleItems' => 'spySalesOrderConfiguredBundleItems',
        'spy_oms_transition_logs' => 'spyOmsTransitionLogs',
        'spyOmsTransitionLogs' => 'spyOmsTransitionLogs',
        'SpyOmsTransitionLogs' => 'spyOmsTransitionLogs',
        'spy_oms_order_item_state_histories' => 'spyOmsOrderItemStateHistories',
        'spyOmsOrderItemStateHistories' => 'spyOmsOrderItemStateHistories',
        'SpyOmsOrderItemStateHistories' => 'spyOmsOrderItemStateHistories',
        'spy_oms_event_timeouts' => 'spyOmsEventTimeouts',
        'spyOmsEventTimeouts' => 'spyOmsEventTimeouts',
        'SpyOmsEventTimeouts' => 'spyOmsEventTimeouts',
        'spy_sales_discounts' => 'spySalesDiscounts',
        'spySalesDiscounts' => 'spySalesDiscounts',
        'SpySalesDiscounts' => 'spySalesDiscounts',
        'spy_sales_order_item_options' => 'spySalesOrderItemOptions',
        'spySalesOrderItemOptions' => 'spySalesOrderItemOptions',
        'SpySalesOrderItemOptions' => 'spySalesOrderItemOptions',
        'spy_sales_order_item_metadatas' => 'spySalesOrderItemMetadatas',
        'spySalesOrderItemMetadatas' => 'spySalesOrderItemMetadatas',
        'SpySalesOrderItemMetadatas' => 'spySalesOrderItemMetadatas',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_OMS_ORDER_ITEM_STATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_oms_order_item_state',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_OMS_ORDER_PROCESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_oms_order_process',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'integer',
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
        self::FK_SALES_ORDER_ITEM_BUNDLE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_item_bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_SHIPMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_shipment',
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
        self::AMOUNT_BASE_MEASUREMENT_UNIT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'amount_base_measurement_unit_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MEASUREMENT_UNIT_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'amount_measurement_unit_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MEASUREMENT_UNIT_CONVERSION => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'amount_measurement_unit_conversion',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MEASUREMENT_UNIT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'amount_measurement_unit_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MEASUREMENT_UNIT_PRECISION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'amount_measurement_unit_precision',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'amount_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CANCELED_AMOUNT => [
            'type' => 'integer',
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
        self::CART_NOTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cart_note',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_AMOUNT_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'discount_amount_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_AMOUNT_FULL_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'discount_amount_full_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPENSE_PRICE_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'expense_price_aggregation',
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
        self::GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_QUANTITY_SPLITTABLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_quantity_splittable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_STATE_CHANGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_state_change',
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
        self::ORDER_ITEM_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_item_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_TO_PAY_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'price_to_pay_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTION_PRICE_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'product_option_price_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'integer',
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
        self::QUANTITY_BASE_MEASUREMENT_UNIT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quantity_base_measurement_unit_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_MEASUREMENT_UNIT_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quantity_measurement_unit_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_MEASUREMENT_UNIT_CONVERSION => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'quantity_measurement_unit_conversion',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_MEASUREMENT_UNIT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quantity_measurement_unit_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_MEASUREMENT_UNIT_PRECISION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'quantity_measurement_unit_precision',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFUNDABLE_AMOUNT => [
            'type' => 'integer',
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
        self::REMUNERATION_AMOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'remuneration_amount',
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
        self::SUBTOTAL_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'subtotal_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_AMOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'tax_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_AMOUNT_AFTER_CANCELLATION => [
            'type' => 'integer',
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
        self::TAX_AMOUNT_FULL_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'tax_amount_full_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_RATE => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'tax_rate',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_RATE_AVERAGE_AGGREGATION => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'tax_rate_average_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
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
        self::SALES_ORDER_ITEM_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemBundleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_bundle',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'order',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE => [
            'type' => 'Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'state',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROCESS => [
            'type' => 'Generated\Shared\Transfer\SpyOmsOrderProcessEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'process',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_SHIPMENT => [
            'type' => 'Generated\Shared\Transfer\SpySalesShipmentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_shipment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NOPAYMENT_PAIDS => [
            'type' => 'Generated\Shared\Transfer\SpyNopaymentPaidEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_nopayment_paids',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_RECLAMATION_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_reclamation_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_RETURN_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesReturnItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_return_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_configured_bundle_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OMS_TRANSITION_LOGS => [
            'type' => 'Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oms_transition_logs',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES => [
            'type' => 'Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oms_order_item_state_histories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OMS_EVENT_TIMEOUTS => [
            'type' => 'Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oms_event_timeouts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\SpySalesDiscountEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ITEM_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_item_options',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ITEM_METADATAS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemMetadataEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_item_metadatas',
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
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesOrderItem';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItem
     *
     * @return $this
     */
    public function setIdSalesOrderItem($idSalesOrderItem)
    {
        $this->idSalesOrderItem = $idSalesOrderItem;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderItem()
    {
        return $this->idSalesOrderItem;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemOrFail($idSalesOrderItem)
    {
        if ($idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->setIdSalesOrderItem($idSalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderItemOrFail()
    {
        if ($this->idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->idSalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkOmsOrderItemState
     *
     * @return $this
     */
    public function setFkOmsOrderItemState($fkOmsOrderItemState)
    {
        $this->fkOmsOrderItemState = $fkOmsOrderItemState;
        $this->modifiedProperties[self::FK_OMS_ORDER_ITEM_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkOmsOrderItemState()
    {
        return $this->fkOmsOrderItemState;
    }

    /**
     * @module 
     *
     * @param integer|null $fkOmsOrderItemState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkOmsOrderItemStateOrFail($fkOmsOrderItemState)
    {
        if ($fkOmsOrderItemState === null) {
            $this->throwNullValueException(static::FK_OMS_ORDER_ITEM_STATE);
        }

        return $this->setFkOmsOrderItemState($fkOmsOrderItemState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkOmsOrderItemStateOrFail()
    {
        if ($this->fkOmsOrderItemState === null) {
            $this->throwNullValueException(static::FK_OMS_ORDER_ITEM_STATE);
        }

        return $this->fkOmsOrderItemState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkOmsOrderItemState()
    {
        $this->assertPropertyIsSet(self::FK_OMS_ORDER_ITEM_STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkOmsOrderProcess
     *
     * @return $this
     */
    public function setFkOmsOrderProcess($fkOmsOrderProcess)
    {
        $this->fkOmsOrderProcess = $fkOmsOrderProcess;
        $this->modifiedProperties[self::FK_OMS_ORDER_PROCESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkOmsOrderProcess()
    {
        return $this->fkOmsOrderProcess;
    }

    /**
     * @module 
     *
     * @param integer|null $fkOmsOrderProcess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkOmsOrderProcessOrFail($fkOmsOrderProcess)
    {
        if ($fkOmsOrderProcess === null) {
            $this->throwNullValueException(static::FK_OMS_ORDER_PROCESS);
        }

        return $this->setFkOmsOrderProcess($fkOmsOrderProcess);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkOmsOrderProcessOrFail()
    {
        if ($this->fkOmsOrderProcess === null) {
            $this->throwNullValueException(static::FK_OMS_ORDER_PROCESS);
        }

        return $this->fkOmsOrderProcess;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkOmsOrderProcess()
    {
        $this->assertPropertyIsSet(self::FK_OMS_ORDER_PROCESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkSalesOrderItemBundle
     *
     * @return $this
     */
    public function setFkSalesOrderItemBundle($fkSalesOrderItemBundle)
    {
        $this->fkSalesOrderItemBundle = $fkSalesOrderItemBundle;
        $this->modifiedProperties[self::FK_SALES_ORDER_ITEM_BUNDLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderItemBundle()
    {
        return $this->fkSalesOrderItemBundle;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItemBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderItemBundleOrFail($fkSalesOrderItemBundle)
    {
        if ($fkSalesOrderItemBundle === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM_BUNDLE);
        }

        return $this->setFkSalesOrderItemBundle($fkSalesOrderItemBundle);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderItemBundleOrFail()
    {
        if ($this->fkSalesOrderItemBundle === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM_BUNDLE);
        }

        return $this->fkSalesOrderItemBundle;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderItemBundle()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ITEM_BUNDLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesShipment
     *
     * @return $this
     */
    public function setFkSalesShipment($fkSalesShipment)
    {
        $this->fkSalesShipment = $fkSalesShipment;
        $this->modifiedProperties[self::FK_SALES_SHIPMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesShipment()
    {
        return $this->fkSalesShipment;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesShipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesShipmentOrFail($fkSalesShipment)
    {
        if ($fkSalesShipment === null) {
            $this->throwNullValueException(static::FK_SALES_SHIPMENT);
        }

        return $this->setFkSalesShipment($fkSalesShipment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesShipmentOrFail()
    {
        if ($this->fkSalesShipment === null) {
            $this->throwNullValueException(static::FK_SALES_SHIPMENT);
        }

        return $this->fkSalesShipment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesShipment()
    {
        $this->assertPropertyIsSet(self::FK_SALES_SHIPMENT);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $amountBaseMeasurementUnitName
     *
     * @return $this
     */
    public function setAmountBaseMeasurementUnitName($amountBaseMeasurementUnitName)
    {
        $this->amountBaseMeasurementUnitName = $amountBaseMeasurementUnitName;
        $this->modifiedProperties[self::AMOUNT_BASE_MEASUREMENT_UNIT_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAmountBaseMeasurementUnitName()
    {
        return $this->amountBaseMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @param string|null $amountBaseMeasurementUnitName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountBaseMeasurementUnitNameOrFail($amountBaseMeasurementUnitName)
    {
        if ($amountBaseMeasurementUnitName === null) {
            $this->throwNullValueException(static::AMOUNT_BASE_MEASUREMENT_UNIT_NAME);
        }

        return $this->setAmountBaseMeasurementUnitName($amountBaseMeasurementUnitName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAmountBaseMeasurementUnitNameOrFail()
    {
        if ($this->amountBaseMeasurementUnitName === null) {
            $this->throwNullValueException(static::AMOUNT_BASE_MEASUREMENT_UNIT_NAME);
        }

        return $this->amountBaseMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountBaseMeasurementUnitName()
    {
        $this->assertPropertyIsSet(self::AMOUNT_BASE_MEASUREMENT_UNIT_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $amountMeasurementUnitCode
     *
     * @return $this
     */
    public function setAmountMeasurementUnitCode($amountMeasurementUnitCode)
    {
        $this->amountMeasurementUnitCode = $amountMeasurementUnitCode;
        $this->modifiedProperties[self::AMOUNT_MEASUREMENT_UNIT_CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAmountMeasurementUnitCode()
    {
        return $this->amountMeasurementUnitCode;
    }

    /**
     * @module 
     *
     * @param string|null $amountMeasurementUnitCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMeasurementUnitCodeOrFail($amountMeasurementUnitCode)
    {
        if ($amountMeasurementUnitCode === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_CODE);
        }

        return $this->setAmountMeasurementUnitCode($amountMeasurementUnitCode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAmountMeasurementUnitCodeOrFail()
    {
        if ($this->amountMeasurementUnitCode === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_CODE);
        }

        return $this->amountMeasurementUnitCode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMeasurementUnitCode()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MEASUREMENT_UNIT_CODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param float|null $amountMeasurementUnitConversion
     *
     * @return $this
     */
    public function setAmountMeasurementUnitConversion($amountMeasurementUnitConversion)
    {
        $this->amountMeasurementUnitConversion = $amountMeasurementUnitConversion;
        $this->modifiedProperties[self::AMOUNT_MEASUREMENT_UNIT_CONVERSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return float|null
     */
    public function getAmountMeasurementUnitConversion()
    {
        return $this->amountMeasurementUnitConversion;
    }

    /**
     * @module 
     *
     * @param float|null $amountMeasurementUnitConversion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMeasurementUnitConversionOrFail($amountMeasurementUnitConversion)
    {
        if ($amountMeasurementUnitConversion === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_CONVERSION);
        }

        return $this->setAmountMeasurementUnitConversion($amountMeasurementUnitConversion);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getAmountMeasurementUnitConversionOrFail()
    {
        if ($this->amountMeasurementUnitConversion === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_CONVERSION);
        }

        return $this->amountMeasurementUnitConversion;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMeasurementUnitConversion()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MEASUREMENT_UNIT_CONVERSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $amountMeasurementUnitName
     *
     * @return $this
     */
    public function setAmountMeasurementUnitName($amountMeasurementUnitName)
    {
        $this->amountMeasurementUnitName = $amountMeasurementUnitName;
        $this->modifiedProperties[self::AMOUNT_MEASUREMENT_UNIT_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAmountMeasurementUnitName()
    {
        return $this->amountMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @param string|null $amountMeasurementUnitName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMeasurementUnitNameOrFail($amountMeasurementUnitName)
    {
        if ($amountMeasurementUnitName === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_NAME);
        }

        return $this->setAmountMeasurementUnitName($amountMeasurementUnitName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAmountMeasurementUnitNameOrFail()
    {
        if ($this->amountMeasurementUnitName === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_NAME);
        }

        return $this->amountMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMeasurementUnitName()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MEASUREMENT_UNIT_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $amountMeasurementUnitPrecision
     *
     * @return $this
     */
    public function setAmountMeasurementUnitPrecision($amountMeasurementUnitPrecision)
    {
        $this->amountMeasurementUnitPrecision = $amountMeasurementUnitPrecision;
        $this->modifiedProperties[self::AMOUNT_MEASUREMENT_UNIT_PRECISION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getAmountMeasurementUnitPrecision()
    {
        return $this->amountMeasurementUnitPrecision;
    }

    /**
     * @module 
     *
     * @param integer|null $amountMeasurementUnitPrecision
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMeasurementUnitPrecisionOrFail($amountMeasurementUnitPrecision)
    {
        if ($amountMeasurementUnitPrecision === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_PRECISION);
        }

        return $this->setAmountMeasurementUnitPrecision($amountMeasurementUnitPrecision);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getAmountMeasurementUnitPrecisionOrFail()
    {
        if ($this->amountMeasurementUnitPrecision === null) {
            $this->throwNullValueException(static::AMOUNT_MEASUREMENT_UNIT_PRECISION);
        }

        return $this->amountMeasurementUnitPrecision;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMeasurementUnitPrecision()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MEASUREMENT_UNIT_PRECISION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $amountSku
     *
     * @return $this
     */
    public function setAmountSku($amountSku)
    {
        $this->amountSku = $amountSku;
        $this->modifiedProperties[self::AMOUNT_SKU] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAmountSku()
    {
        return $this->amountSku;
    }

    /**
     * @module 
     *
     * @param string|null $amountSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountSkuOrFail($amountSku)
    {
        if ($amountSku === null) {
            $this->throwNullValueException(static::AMOUNT_SKU);
        }

        return $this->setAmountSku($amountSku);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAmountSkuOrFail()
    {
        if ($this->amountSku === null) {
            $this->throwNullValueException(static::AMOUNT_SKU);
        }

        return $this->amountSku;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountSku()
    {
        $this->assertPropertyIsSet(self::AMOUNT_SKU);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $canceledAmount
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
     * @module 
     *
     * @return integer|null
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $canceledAmount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getCanceledAmountOrFail()
    {
        if ($this->canceledAmount === null) {
            $this->throwNullValueException(static::CANCELED_AMOUNT);
        }

        return $this->canceledAmount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $cartNote
     *
     * @return $this
     */
    public function setCartNote($cartNote)
    {
        $this->cartNote = $cartNote;
        $this->modifiedProperties[self::CART_NOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCartNote()
    {
        return $this->cartNote;
    }

    /**
     * @module 
     *
     * @param string|null $cartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCartNoteOrFail($cartNote)
    {
        if ($cartNote === null) {
            $this->throwNullValueException(static::CART_NOTE);
        }

        return $this->setCartNote($cartNote);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCartNoteOrFail()
    {
        if ($this->cartNote === null) {
            $this->throwNullValueException(static::CART_NOTE);
        }

        return $this->cartNote;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartNote()
    {
        $this->assertPropertyIsSet(self::CART_NOTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $discountAmountAggregation
     *
     * @return $this
     */
    public function setDiscountAmountAggregation($discountAmountAggregation)
    {
        $this->discountAmountAggregation = $discountAmountAggregation;
        $this->modifiedProperties[self::DISCOUNT_AMOUNT_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDiscountAmountAggregation()
    {
        return $this->discountAmountAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $discountAmountAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountAmountAggregationOrFail($discountAmountAggregation)
    {
        if ($discountAmountAggregation === null) {
            $this->throwNullValueException(static::DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->setDiscountAmountAggregation($discountAmountAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDiscountAmountAggregationOrFail()
    {
        if ($this->discountAmountAggregation === null) {
            $this->throwNullValueException(static::DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->discountAmountAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountAmountAggregation()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_AMOUNT_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $discountAmountFullAggregation
     *
     * @return $this
     */
    public function setDiscountAmountFullAggregation($discountAmountFullAggregation)
    {
        $this->discountAmountFullAggregation = $discountAmountFullAggregation;
        $this->modifiedProperties[self::DISCOUNT_AMOUNT_FULL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDiscountAmountFullAggregation()
    {
        return $this->discountAmountFullAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $discountAmountFullAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountAmountFullAggregationOrFail($discountAmountFullAggregation)
    {
        if ($discountAmountFullAggregation === null) {
            $this->throwNullValueException(static::DISCOUNT_AMOUNT_FULL_AGGREGATION);
        }

        return $this->setDiscountAmountFullAggregation($discountAmountFullAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDiscountAmountFullAggregationOrFail()
    {
        if ($this->discountAmountFullAggregation === null) {
            $this->throwNullValueException(static::DISCOUNT_AMOUNT_FULL_AGGREGATION);
        }

        return $this->discountAmountFullAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountAmountFullAggregation()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_AMOUNT_FULL_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $expensePriceAggregation
     *
     * @return $this
     */
    public function setExpensePriceAggregation($expensePriceAggregation)
    {
        $this->expensePriceAggregation = $expensePriceAggregation;
        $this->modifiedProperties[self::EXPENSE_PRICE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getExpensePriceAggregation()
    {
        return $this->expensePriceAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $expensePriceAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpensePriceAggregationOrFail($expensePriceAggregation)
    {
        if ($expensePriceAggregation === null) {
            $this->throwNullValueException(static::EXPENSE_PRICE_AGGREGATION);
        }

        return $this->setExpensePriceAggregation($expensePriceAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getExpensePriceAggregationOrFail()
    {
        if ($this->expensePriceAggregation === null) {
            $this->throwNullValueException(static::EXPENSE_PRICE_AGGREGATION);
        }

        return $this->expensePriceAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpensePriceAggregation()
    {
        $this->assertPropertyIsSet(self::EXPENSE_PRICE_AGGREGATION);

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
     * @param string|null $groupKey
     *
     * @return $this
     */
    public function setGroupKey($groupKey)
    {
        $this->groupKey = $groupKey;
        $this->modifiedProperties[self::GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module 
     *
     * @param string|null $groupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupKeyOrFail($groupKey)
    {
        if ($groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->setGroupKey($groupKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupKeyOrFail()
    {
        if ($this->groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->groupKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupKey()
    {
        $this->assertPropertyIsSet(self::GROUP_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isQuantitySplittable
     *
     * @return $this
     */
    public function setIsQuantitySplittable($isQuantitySplittable)
    {
        $this->isQuantitySplittable = $isQuantitySplittable;
        $this->modifiedProperties[self::IS_QUANTITY_SPLITTABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsQuantitySplittable()
    {
        return $this->isQuantitySplittable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isQuantitySplittable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsQuantitySplittableOrFail($isQuantitySplittable)
    {
        if ($isQuantitySplittable === null) {
            $this->throwNullValueException(static::IS_QUANTITY_SPLITTABLE);
        }

        return $this->setIsQuantitySplittable($isQuantitySplittable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsQuantitySplittableOrFail()
    {
        if ($this->isQuantitySplittable === null) {
            $this->throwNullValueException(static::IS_QUANTITY_SPLITTABLE);
        }

        return $this->isQuantitySplittable;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsQuantitySplittable()
    {
        $this->assertPropertyIsSet(self::IS_QUANTITY_SPLITTABLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $lastStateChange
     *
     * @return $this
     */
    public function setLastStateChange($lastStateChange)
    {
        $this->lastStateChange = $lastStateChange;
        $this->modifiedProperties[self::LAST_STATE_CHANGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLastStateChange()
    {
        return $this->lastStateChange;
    }

    /**
     * @module 
     *
     * @param string|null $lastStateChange
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastStateChangeOrFail($lastStateChange)
    {
        if ($lastStateChange === null) {
            $this->throwNullValueException(static::LAST_STATE_CHANGE);
        }

        return $this->setLastStateChange($lastStateChange);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastStateChangeOrFail()
    {
        if ($this->lastStateChange === null) {
            $this->throwNullValueException(static::LAST_STATE_CHANGE);
        }

        return $this->lastStateChange;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastStateChange()
    {
        $this->assertPropertyIsSet(self::LAST_STATE_CHANGE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @param string|null $orderItemReference
     *
     * @return $this
     */
    public function setOrderItemReference($orderItemReference)
    {
        $this->orderItemReference = $orderItemReference;
        $this->modifiedProperties[self::ORDER_ITEM_REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getOrderItemReference()
    {
        return $this->orderItemReference;
    }

    /**
     * @module 
     *
     * @param string|null $orderItemReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderItemReferenceOrFail($orderItemReference)
    {
        if ($orderItemReference === null) {
            $this->throwNullValueException(static::ORDER_ITEM_REFERENCE);
        }

        return $this->setOrderItemReference($orderItemReference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderItemReferenceOrFail()
    {
        if ($this->orderItemReference === null) {
            $this->throwNullValueException(static::ORDER_ITEM_REFERENCE);
        }

        return $this->orderItemReference;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItemReference()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM_REFERENCE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        $this->modifiedProperties[self::PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module 
     *
     * @param integer|null $price
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceOrFail($price)
    {
        if ($price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->setPrice($price);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPriceOrFail()
    {
        if ($this->price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->price;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrice()
    {
        $this->assertPropertyIsSet(self::PRICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $priceToPayAggregation
     *
     * @return $this
     */
    public function setPriceToPayAggregation($priceToPayAggregation)
    {
        $this->priceToPayAggregation = $priceToPayAggregation;
        $this->modifiedProperties[self::PRICE_TO_PAY_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getPriceToPayAggregation()
    {
        return $this->priceToPayAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $priceToPayAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceToPayAggregationOrFail($priceToPayAggregation)
    {
        if ($priceToPayAggregation === null) {
            $this->throwNullValueException(static::PRICE_TO_PAY_AGGREGATION);
        }

        return $this->setPriceToPayAggregation($priceToPayAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPriceToPayAggregationOrFail()
    {
        if ($this->priceToPayAggregation === null) {
            $this->throwNullValueException(static::PRICE_TO_PAY_AGGREGATION);
        }

        return $this->priceToPayAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceToPayAggregation()
    {
        $this->assertPropertyIsSet(self::PRICE_TO_PAY_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $productOptionPriceAggregation
     *
     * @return $this
     */
    public function setProductOptionPriceAggregation($productOptionPriceAggregation)
    {
        $this->productOptionPriceAggregation = $productOptionPriceAggregation;
        $this->modifiedProperties[self::PRODUCT_OPTION_PRICE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getProductOptionPriceAggregation()
    {
        return $this->productOptionPriceAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $productOptionPriceAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOptionPriceAggregationOrFail($productOptionPriceAggregation)
    {
        if ($productOptionPriceAggregation === null) {
            $this->throwNullValueException(static::PRODUCT_OPTION_PRICE_AGGREGATION);
        }

        return $this->setProductOptionPriceAggregation($productOptionPriceAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getProductOptionPriceAggregationOrFail()
    {
        if ($this->productOptionPriceAggregation === null) {
            $this->throwNullValueException(static::PRODUCT_OPTION_PRICE_AGGREGATION);
        }

        return $this->productOptionPriceAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptionPriceAggregation()
    {
        $this->assertPropertyIsSet(self::PRODUCT_OPTION_PRICE_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $quantity
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
     * @module 
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module 
     *
     * @param integer|null $quantity
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $quantityBaseMeasurementUnitName
     *
     * @return $this
     */
    public function setQuantityBaseMeasurementUnitName($quantityBaseMeasurementUnitName)
    {
        $this->quantityBaseMeasurementUnitName = $quantityBaseMeasurementUnitName;
        $this->modifiedProperties[self::QUANTITY_BASE_MEASUREMENT_UNIT_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getQuantityBaseMeasurementUnitName()
    {
        return $this->quantityBaseMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @param string|null $quantityBaseMeasurementUnitName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityBaseMeasurementUnitNameOrFail($quantityBaseMeasurementUnitName)
    {
        if ($quantityBaseMeasurementUnitName === null) {
            $this->throwNullValueException(static::QUANTITY_BASE_MEASUREMENT_UNIT_NAME);
        }

        return $this->setQuantityBaseMeasurementUnitName($quantityBaseMeasurementUnitName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuantityBaseMeasurementUnitNameOrFail()
    {
        if ($this->quantityBaseMeasurementUnitName === null) {
            $this->throwNullValueException(static::QUANTITY_BASE_MEASUREMENT_UNIT_NAME);
        }

        return $this->quantityBaseMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityBaseMeasurementUnitName()
    {
        $this->assertPropertyIsSet(self::QUANTITY_BASE_MEASUREMENT_UNIT_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $quantityMeasurementUnitCode
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitCode($quantityMeasurementUnitCode)
    {
        $this->quantityMeasurementUnitCode = $quantityMeasurementUnitCode;
        $this->modifiedProperties[self::QUANTITY_MEASUREMENT_UNIT_CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getQuantityMeasurementUnitCode()
    {
        return $this->quantityMeasurementUnitCode;
    }

    /**
     * @module 
     *
     * @param string|null $quantityMeasurementUnitCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitCodeOrFail($quantityMeasurementUnitCode)
    {
        if ($quantityMeasurementUnitCode === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_CODE);
        }

        return $this->setQuantityMeasurementUnitCode($quantityMeasurementUnitCode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuantityMeasurementUnitCodeOrFail()
    {
        if ($this->quantityMeasurementUnitCode === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_CODE);
        }

        return $this->quantityMeasurementUnitCode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityMeasurementUnitCode()
    {
        $this->assertPropertyIsSet(self::QUANTITY_MEASUREMENT_UNIT_CODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param float|null $quantityMeasurementUnitConversion
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitConversion($quantityMeasurementUnitConversion)
    {
        $this->quantityMeasurementUnitConversion = $quantityMeasurementUnitConversion;
        $this->modifiedProperties[self::QUANTITY_MEASUREMENT_UNIT_CONVERSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return float|null
     */
    public function getQuantityMeasurementUnitConversion()
    {
        return $this->quantityMeasurementUnitConversion;
    }

    /**
     * @module 
     *
     * @param float|null $quantityMeasurementUnitConversion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitConversionOrFail($quantityMeasurementUnitConversion)
    {
        if ($quantityMeasurementUnitConversion === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_CONVERSION);
        }

        return $this->setQuantityMeasurementUnitConversion($quantityMeasurementUnitConversion);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getQuantityMeasurementUnitConversionOrFail()
    {
        if ($this->quantityMeasurementUnitConversion === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_CONVERSION);
        }

        return $this->quantityMeasurementUnitConversion;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityMeasurementUnitConversion()
    {
        $this->assertPropertyIsSet(self::QUANTITY_MEASUREMENT_UNIT_CONVERSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $quantityMeasurementUnitName
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitName($quantityMeasurementUnitName)
    {
        $this->quantityMeasurementUnitName = $quantityMeasurementUnitName;
        $this->modifiedProperties[self::QUANTITY_MEASUREMENT_UNIT_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getQuantityMeasurementUnitName()
    {
        return $this->quantityMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @param string|null $quantityMeasurementUnitName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitNameOrFail($quantityMeasurementUnitName)
    {
        if ($quantityMeasurementUnitName === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_NAME);
        }

        return $this->setQuantityMeasurementUnitName($quantityMeasurementUnitName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuantityMeasurementUnitNameOrFail()
    {
        if ($this->quantityMeasurementUnitName === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_NAME);
        }

        return $this->quantityMeasurementUnitName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityMeasurementUnitName()
    {
        $this->assertPropertyIsSet(self::QUANTITY_MEASUREMENT_UNIT_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $quantityMeasurementUnitPrecision
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitPrecision($quantityMeasurementUnitPrecision)
    {
        $this->quantityMeasurementUnitPrecision = $quantityMeasurementUnitPrecision;
        $this->modifiedProperties[self::QUANTITY_MEASUREMENT_UNIT_PRECISION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getQuantityMeasurementUnitPrecision()
    {
        return $this->quantityMeasurementUnitPrecision;
    }

    /**
     * @module 
     *
     * @param integer|null $quantityMeasurementUnitPrecision
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityMeasurementUnitPrecisionOrFail($quantityMeasurementUnitPrecision)
    {
        if ($quantityMeasurementUnitPrecision === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_PRECISION);
        }

        return $this->setQuantityMeasurementUnitPrecision($quantityMeasurementUnitPrecision);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityMeasurementUnitPrecisionOrFail()
    {
        if ($this->quantityMeasurementUnitPrecision === null) {
            $this->throwNullValueException(static::QUANTITY_MEASUREMENT_UNIT_PRECISION);
        }

        return $this->quantityMeasurementUnitPrecision;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityMeasurementUnitPrecision()
    {
        $this->assertPropertyIsSet(self::QUANTITY_MEASUREMENT_UNIT_PRECISION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $refundableAmount
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
     * @module 
     *
     * @return integer|null
     */
    public function getRefundableAmount()
    {
        return $this->refundableAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $refundableAmount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getRefundableAmountOrFail()
    {
        if ($this->refundableAmount === null) {
            $this->throwNullValueException(static::REFUNDABLE_AMOUNT);
        }

        return $this->refundableAmount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $remunerationAmount
     *
     * @return $this
     */
    public function setRemunerationAmount($remunerationAmount)
    {
        $this->remunerationAmount = $remunerationAmount;
        $this->modifiedProperties[self::REMUNERATION_AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getRemunerationAmount()
    {
        return $this->remunerationAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $remunerationAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRemunerationAmountOrFail($remunerationAmount)
    {
        if ($remunerationAmount === null) {
            $this->throwNullValueException(static::REMUNERATION_AMOUNT);
        }

        return $this->setRemunerationAmount($remunerationAmount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getRemunerationAmountOrFail()
    {
        if ($this->remunerationAmount === null) {
            $this->throwNullValueException(static::REMUNERATION_AMOUNT);
        }

        return $this->remunerationAmount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRemunerationAmount()
    {
        $this->assertPropertyIsSet(self::REMUNERATION_AMOUNT);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $subtotalAggregation
     *
     * @return $this
     */
    public function setSubtotalAggregation($subtotalAggregation)
    {
        $this->subtotalAggregation = $subtotalAggregation;
        $this->modifiedProperties[self::SUBTOTAL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getSubtotalAggregation()
    {
        return $this->subtotalAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $subtotalAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubtotalAggregationOrFail($subtotalAggregation)
    {
        if ($subtotalAggregation === null) {
            $this->throwNullValueException(static::SUBTOTAL_AGGREGATION);
        }

        return $this->setSubtotalAggregation($subtotalAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getSubtotalAggregationOrFail()
    {
        if ($this->subtotalAggregation === null) {
            $this->throwNullValueException(static::SUBTOTAL_AGGREGATION);
        }

        return $this->subtotalAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubtotalAggregation()
    {
        $this->assertPropertyIsSet(self::SUBTOTAL_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmount
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        $this->modifiedProperties[self::TAX_AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxAmountOrFail($taxAmount)
    {
        if ($taxAmount === null) {
            $this->throwNullValueException(static::TAX_AMOUNT);
        }

        return $this->setTaxAmount($taxAmount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getTaxAmountOrFail()
    {
        if ($this->taxAmount === null) {
            $this->throwNullValueException(static::TAX_AMOUNT);
        }

        return $this->taxAmount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxAmount()
    {
        $this->assertPropertyIsSet(self::TAX_AMOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmountAfterCancellation
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
     * @module 
     *
     * @return integer|null
     */
    public function getTaxAmountAfterCancellation()
    {
        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmountAfterCancellation
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getTaxAmountAfterCancellationOrFail()
    {
        if ($this->taxAmountAfterCancellation === null) {
            $this->throwNullValueException(static::TAX_AMOUNT_AFTER_CANCELLATION);
        }

        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $taxAmountFullAggregation
     *
     * @return $this
     */
    public function setTaxAmountFullAggregation($taxAmountFullAggregation)
    {
        $this->taxAmountFullAggregation = $taxAmountFullAggregation;
        $this->modifiedProperties[self::TAX_AMOUNT_FULL_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getTaxAmountFullAggregation()
    {
        return $this->taxAmountFullAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmountFullAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxAmountFullAggregationOrFail($taxAmountFullAggregation)
    {
        if ($taxAmountFullAggregation === null) {
            $this->throwNullValueException(static::TAX_AMOUNT_FULL_AGGREGATION);
        }

        return $this->setTaxAmountFullAggregation($taxAmountFullAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getTaxAmountFullAggregationOrFail()
    {
        if ($this->taxAmountFullAggregation === null) {
            $this->throwNullValueException(static::TAX_AMOUNT_FULL_AGGREGATION);
        }

        return $this->taxAmountFullAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxAmountFullAggregation()
    {
        $this->assertPropertyIsSet(self::TAX_AMOUNT_FULL_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $taxRate
     *
     * @return $this
     */
    public function setTaxRate($taxRate = null)
    {
        if ($taxRate !== null && !$taxRate instanceof Decimal) {
            $taxRate = new Decimal($taxRate);
        }

        $this->taxRate = $taxRate;
        $this->modifiedProperties[self::TAX_RATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $taxRate
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getTaxRateOrFail()
    {
        if ($this->taxRate === null) {
            $this->throwNullValueException(static::TAX_RATE);
        }

        return $this->taxRate;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $taxRateAverageAggregation
     *
     * @return $this
     */
    public function setTaxRateAverageAggregation($taxRateAverageAggregation = null)
    {
        if ($taxRateAverageAggregation !== null && !$taxRateAverageAggregation instanceof Decimal) {
            $taxRateAverageAggregation = new Decimal($taxRateAverageAggregation);
        }

        $this->taxRateAverageAggregation = $taxRateAverageAggregation;
        $this->modifiedProperties[self::TAX_RATE_AVERAGE_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getTaxRateAverageAggregation()
    {
        return $this->taxRateAverageAggregation;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $taxRateAverageAggregation
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getTaxRateAverageAggregationOrFail()
    {
        if ($this->taxRateAverageAggregation === null) {
            $this->throwNullValueException(static::TAX_RATE_AVERAGE_AGGREGATION);
        }

        return $this->taxRateAverageAggregation;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemBundleEntityTransfer|null $salesOrderItemBundle
     *
     * @return $this
     */
    public function setSalesOrderItemBundle(SpySalesOrderItemBundleEntityTransfer $salesOrderItemBundle = null)
    {
        $this->salesOrderItemBundle = $salesOrderItemBundle;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_BUNDLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemBundleEntityTransfer|null
     */
    public function getSalesOrderItemBundle()
    {
        return $this->salesOrderItemBundle;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemBundleEntityTransfer $salesOrderItemBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderItemBundleOrFail(SpySalesOrderItemBundleEntityTransfer $salesOrderItemBundle)
    {
        return $this->setSalesOrderItemBundle($salesOrderItemBundle);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemBundleEntityTransfer
     */
    public function getSalesOrderItemBundleOrFail()
    {
        if ($this->salesOrderItemBundle === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_BUNDLE);
        }

        return $this->salesOrderItemBundle;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemBundle()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_BUNDLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $order
     *
     * @return $this
     */
    public function setOrder(SpySalesOrderEntityTransfer $order = null)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail(SpySalesOrderEntityTransfer $order)
    {
        return $this->setOrder($order);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer|null $state
     *
     * @return $this
     */
    public function setState(SpyOmsOrderItemStateEntityTransfer $state = null)
    {
        $this->state = $state;
        $this->modifiedProperties[self::STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer $state
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateOrFail(SpyOmsOrderItemStateEntityTransfer $state)
    {
        return $this->setState($state);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyOmsOrderItemStateEntityTransfer
     */
    public function getStateOrFail()
    {
        if ($this->state === null) {
            $this->throwNullValueException(static::STATE);
        }

        return $this->state;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireState()
    {
        $this->assertPropertyIsSet(self::STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderProcessEntityTransfer|null $process
     *
     * @return $this
     */
    public function setProcess(SpyOmsOrderProcessEntityTransfer $process = null)
    {
        $this->process = $process;
        $this->modifiedProperties[self::PROCESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyOmsOrderProcessEntityTransfer|null
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderProcessEntityTransfer $process
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProcessOrFail(SpyOmsOrderProcessEntityTransfer $process)
    {
        return $this->setProcess($process);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyOmsOrderProcessEntityTransfer
     */
    public function getProcessOrFail()
    {
        if ($this->process === null) {
            $this->throwNullValueException(static::PROCESS);
        }

        return $this->process;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProcess()
    {
        $this->assertPropertyIsSet(self::PROCESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesShipmentEntityTransfer|null $spySalesShipment
     *
     * @return $this
     */
    public function setSpySalesShipment(SpySalesShipmentEntityTransfer $spySalesShipment = null)
    {
        $this->spySalesShipment = $spySalesShipment;
        $this->modifiedProperties[self::SPY_SALES_SHIPMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesShipmentEntityTransfer|null
     */
    public function getSpySalesShipment()
    {
        return $this->spySalesShipment;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesShipmentEntityTransfer $spySalesShipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesShipmentOrFail(SpySalesShipmentEntityTransfer $spySalesShipment)
    {
        return $this->setSpySalesShipment($spySalesShipment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesShipmentEntityTransfer
     */
    public function getSpySalesShipmentOrFail()
    {
        if ($this->spySalesShipment === null) {
            $this->throwNullValueException(static::SPY_SALES_SHIPMENT);
        }

        return $this->spySalesShipment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesShipment()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_SHIPMENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyNopaymentPaidEntityTransfer[] $spyNopaymentPaids
     *
     * @return $this
     */
    public function setSpyNopaymentPaids(ArrayObject $spyNopaymentPaids)
    {
        $this->spyNopaymentPaids = $spyNopaymentPaids;
        $this->modifiedProperties[self::SPY_NOPAYMENT_PAIDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyNopaymentPaidEntityTransfer[]
     */
    public function getSpyNopaymentPaids()
    {
        return $this->spyNopaymentPaids;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNopaymentPaidEntityTransfer $spyNopaymentPaids
     *
     * @return $this
     */
    public function addSpyNopaymentPaids(SpyNopaymentPaidEntityTransfer $spyNopaymentPaids)
    {
        $this->spyNopaymentPaids[] = $spyNopaymentPaids;
        $this->modifiedProperties[self::SPY_NOPAYMENT_PAIDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNopaymentPaids()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_NOPAYMENT_PAIDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer[] $spySalesReclamationItems
     *
     * @return $this
     */
    public function setSpySalesReclamationItems(ArrayObject $spySalesReclamationItems)
    {
        $this->spySalesReclamationItems = $spySalesReclamationItems;
        $this->modifiedProperties[self::SPY_SALES_RECLAMATION_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer[]
     */
    public function getSpySalesReclamationItems()
    {
        return $this->spySalesReclamationItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer $spySalesReclamationItems
     *
     * @return $this
     */
    public function addSpySalesReclamationItems(SpySalesReclamationItemEntityTransfer $spySalesReclamationItems)
    {
        $this->spySalesReclamationItems[] = $spySalesReclamationItems;
        $this->modifiedProperties[self::SPY_SALES_RECLAMATION_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesReclamationItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_RECLAMATION_ITEMS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesReturnItemEntityTransfer[] $spySalesReturnItems
     *
     * @return $this
     */
    public function setSpySalesReturnItems(ArrayObject $spySalesReturnItems)
    {
        $this->spySalesReturnItems = $spySalesReturnItems;
        $this->modifiedProperties[self::SPY_SALES_RETURN_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesReturnItemEntityTransfer[]
     */
    public function getSpySalesReturnItems()
    {
        return $this->spySalesReturnItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesReturnItemEntityTransfer $spySalesReturnItems
     *
     * @return $this
     */
    public function addSpySalesReturnItems(SpySalesReturnItemEntityTransfer $spySalesReturnItems)
    {
        $this->spySalesReturnItems[] = $spySalesReturnItems;
        $this->modifiedProperties[self::SPY_SALES_RETURN_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesReturnItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_RETURN_ITEMS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer[] $spySalesOrderConfiguredBundleItems
     *
     * @return $this
     */
    public function setSpySalesOrderConfiguredBundleItems(ArrayObject $spySalesOrderConfiguredBundleItems)
    {
        $this->spySalesOrderConfiguredBundleItems = $spySalesOrderConfiguredBundleItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer[]
     */
    public function getSpySalesOrderConfiguredBundleItems()
    {
        return $this->spySalesOrderConfiguredBundleItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer $spySalesOrderConfiguredBundleItems
     *
     * @return $this
     */
    public function addSpySalesOrderConfiguredBundleItems(SpySalesOrderConfiguredBundleItemEntityTransfer $spySalesOrderConfiguredBundleItems)
    {
        $this->spySalesOrderConfiguredBundleItems[] = $spySalesOrderConfiguredBundleItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderConfiguredBundleItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer[] $spyOmsTransitionLogs
     *
     * @return $this
     */
    public function setSpyOmsTransitionLogs(ArrayObject $spyOmsTransitionLogs)
    {
        $this->spyOmsTransitionLogs = $spyOmsTransitionLogs;
        $this->modifiedProperties[self::SPY_OMS_TRANSITION_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer[]
     */
    public function getSpyOmsTransitionLogs()
    {
        return $this->spyOmsTransitionLogs;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer $spyOmsTransitionLogs
     *
     * @return $this
     */
    public function addSpyOmsTransitionLogs(SpyOmsTransitionLogEntityTransfer $spyOmsTransitionLogs)
    {
        $this->spyOmsTransitionLogs[] = $spyOmsTransitionLogs;
        $this->modifiedProperties[self::SPY_OMS_TRANSITION_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOmsTransitionLogs()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OMS_TRANSITION_LOGS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer[] $spyOmsOrderItemStateHistories
     *
     * @return $this
     */
    public function setSpyOmsOrderItemStateHistories(ArrayObject $spyOmsOrderItemStateHistories)
    {
        $this->spyOmsOrderItemStateHistories = $spyOmsOrderItemStateHistories;
        $this->modifiedProperties[self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer[]
     */
    public function getSpyOmsOrderItemStateHistories()
    {
        return $this->spyOmsOrderItemStateHistories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsOrderItemStateHistoryEntityTransfer $spyOmsOrderItemStateHistories
     *
     * @return $this
     */
    public function addSpyOmsOrderItemStateHistories(SpyOmsOrderItemStateHistoryEntityTransfer $spyOmsOrderItemStateHistories)
    {
        $this->spyOmsOrderItemStateHistories[] = $spyOmsOrderItemStateHistories;
        $this->modifiedProperties[self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOmsOrderItemStateHistories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OMS_ORDER_ITEM_STATE_HISTORIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer[] $spyOmsEventTimeouts
     *
     * @return $this
     */
    public function setSpyOmsEventTimeouts(ArrayObject $spyOmsEventTimeouts)
    {
        $this->spyOmsEventTimeouts = $spyOmsEventTimeouts;
        $this->modifiedProperties[self::SPY_OMS_EVENT_TIMEOUTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer[]
     */
    public function getSpyOmsEventTimeouts()
    {
        return $this->spyOmsEventTimeouts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsEventTimeoutEntityTransfer $spyOmsEventTimeouts
     *
     * @return $this
     */
    public function addSpyOmsEventTimeouts(SpyOmsEventTimeoutEntityTransfer $spyOmsEventTimeouts)
    {
        $this->spyOmsEventTimeouts[] = $spyOmsEventTimeouts;
        $this->modifiedProperties[self::SPY_OMS_EVENT_TIMEOUTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOmsEventTimeouts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OMS_EVENT_TIMEOUTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountEntityTransfer[] $spySalesDiscounts
     *
     * @return $this
     */
    public function setSpySalesDiscounts(ArrayObject $spySalesDiscounts)
    {
        $this->spySalesDiscounts = $spySalesDiscounts;
        $this->modifiedProperties[self::SPY_SALES_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountEntityTransfer[]
     */
    public function getSpySalesDiscounts()
    {
        return $this->spySalesDiscounts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesDiscountEntityTransfer $spySalesDiscounts
     *
     * @return $this
     */
    public function addSpySalesDiscounts(SpySalesDiscountEntityTransfer $spySalesDiscounts)
    {
        $this->spySalesDiscounts[] = $spySalesDiscounts;
        $this->modifiedProperties[self::SPY_SALES_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_DISCOUNTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer[] $spySalesOrderItemOptions
     *
     * @return $this
     */
    public function setSpySalesOrderItemOptions(ArrayObject $spySalesOrderItemOptions)
    {
        $this->spySalesOrderItemOptions = $spySalesOrderItemOptions;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM_OPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer[]
     */
    public function getSpySalesOrderItemOptions()
    {
        return $this->spySalesOrderItemOptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer $spySalesOrderItemOptions
     *
     * @return $this
     */
    public function addSpySalesOrderItemOptions(SpySalesOrderItemOptionEntityTransfer $spySalesOrderItemOptions)
    {
        $this->spySalesOrderItemOptions[] = $spySalesOrderItemOptions;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM_OPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItemOptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ITEM_OPTIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemMetadataEntityTransfer[] $spySalesOrderItemMetadatas
     *
     * @return $this
     */
    public function setSpySalesOrderItemMetadatas(ArrayObject $spySalesOrderItemMetadatas)
    {
        $this->spySalesOrderItemMetadatas = $spySalesOrderItemMetadatas;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM_METADATAS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemMetadataEntityTransfer[]
     */
    public function getSpySalesOrderItemMetadatas()
    {
        return $this->spySalesOrderItemMetadatas;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemMetadataEntityTransfer $spySalesOrderItemMetadatas
     *
     * @return $this
     */
    public function addSpySalesOrderItemMetadatas(SpySalesOrderItemMetadataEntityTransfer $spySalesOrderItemMetadatas)
    {
        $this->spySalesOrderItemMetadatas[] = $spySalesOrderItemMetadatas;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM_METADATAS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItemMetadatas()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ITEM_METADATAS);

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
                case 'idSalesOrderItem':
                case 'fkOmsOrderItemState':
                case 'fkOmsOrderProcess':
                case 'fkSalesOrder':
                case 'fkSalesOrderItemBundle':
                case 'fkSalesShipment':
                case 'amountBaseMeasurementUnitName':
                case 'amountMeasurementUnitCode':
                case 'amountMeasurementUnitConversion':
                case 'amountMeasurementUnitName':
                case 'amountMeasurementUnitPrecision':
                case 'amountSku':
                case 'canceledAmount':
                case 'cartNote':
                case 'discountAmountAggregation':
                case 'discountAmountFullAggregation':
                case 'expensePriceAggregation':
                case 'grossPrice':
                case 'groupKey':
                case 'isQuantitySplittable':
                case 'lastStateChange':
                case 'name':
                case 'netPrice':
                case 'orderItemReference':
                case 'price':
                case 'priceToPayAggregation':
                case 'productOptionPriceAggregation':
                case 'quantity':
                case 'quantityBaseMeasurementUnitName':
                case 'quantityMeasurementUnitCode':
                case 'quantityMeasurementUnitConversion':
                case 'quantityMeasurementUnitName':
                case 'quantityMeasurementUnitPrecision':
                case 'refundableAmount':
                case 'remunerationAmount':
                case 'sku':
                case 'subtotalAggregation':
                case 'taxAmount':
                case 'taxAmountAfterCancellation':
                case 'taxAmountFullAggregation':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'salesOrderItemBundle':
                case 'order':
                case 'state':
                case 'process':
                case 'spySalesShipment':
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
                case 'spyNopaymentPaids':
                case 'spySalesReclamationItems':
                case 'spySalesReturnItems':
                case 'spySalesOrderConfiguredBundleItems':
                case 'spyOmsTransitionLogs':
                case 'spyOmsOrderItemStateHistories':
                case 'spyOmsEventTimeouts':
                case 'spySalesDiscounts':
                case 'spySalesOrderItemOptions':
                case 'spySalesOrderItemMetadatas':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'amount':
                case 'taxRate':
                case 'taxRateAverageAggregation':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idSalesOrderItem':
                case 'fkOmsOrderItemState':
                case 'fkOmsOrderProcess':
                case 'fkSalesOrder':
                case 'fkSalesOrderItemBundle':
                case 'fkSalesShipment':
                case 'amountBaseMeasurementUnitName':
                case 'amountMeasurementUnitCode':
                case 'amountMeasurementUnitConversion':
                case 'amountMeasurementUnitName':
                case 'amountMeasurementUnitPrecision':
                case 'amountSku':
                case 'canceledAmount':
                case 'cartNote':
                case 'discountAmountAggregation':
                case 'discountAmountFullAggregation':
                case 'expensePriceAggregation':
                case 'grossPrice':
                case 'groupKey':
                case 'isQuantitySplittable':
                case 'lastStateChange':
                case 'name':
                case 'netPrice':
                case 'orderItemReference':
                case 'price':
                case 'priceToPayAggregation':
                case 'productOptionPriceAggregation':
                case 'quantity':
                case 'quantityBaseMeasurementUnitName':
                case 'quantityMeasurementUnitCode':
                case 'quantityMeasurementUnitConversion':
                case 'quantityMeasurementUnitName':
                case 'quantityMeasurementUnitPrecision':
                case 'refundableAmount':
                case 'remunerationAmount':
                case 'sku':
                case 'subtotalAggregation':
                case 'taxAmount':
                case 'taxAmountAfterCancellation':
                case 'taxAmountFullAggregation':
                case 'uuid':
                case 'amount':
                case 'taxRate':
                case 'taxRateAverageAggregation':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderItemBundle':
                case 'order':
                case 'state':
                case 'process':
                case 'spySalesShipment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyNopaymentPaids':
                case 'spySalesReclamationItems':
                case 'spySalesReturnItems':
                case 'spySalesOrderConfiguredBundleItems':
                case 'spyOmsTransitionLogs':
                case 'spyOmsOrderItemStateHistories':
                case 'spyOmsEventTimeouts':
                case 'spySalesDiscounts':
                case 'spySalesOrderItemOptions':
                case 'spySalesOrderItemMetadatas':
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
                case 'idSalesOrderItem':
                case 'fkOmsOrderItemState':
                case 'fkOmsOrderProcess':
                case 'fkSalesOrder':
                case 'fkSalesOrderItemBundle':
                case 'fkSalesShipment':
                case 'amountBaseMeasurementUnitName':
                case 'amountMeasurementUnitCode':
                case 'amountMeasurementUnitConversion':
                case 'amountMeasurementUnitName':
                case 'amountMeasurementUnitPrecision':
                case 'amountSku':
                case 'canceledAmount':
                case 'cartNote':
                case 'discountAmountAggregation':
                case 'discountAmountFullAggregation':
                case 'expensePriceAggregation':
                case 'grossPrice':
                case 'groupKey':
                case 'isQuantitySplittable':
                case 'lastStateChange':
                case 'name':
                case 'netPrice':
                case 'orderItemReference':
                case 'price':
                case 'priceToPayAggregation':
                case 'productOptionPriceAggregation':
                case 'quantity':
                case 'quantityBaseMeasurementUnitName':
                case 'quantityMeasurementUnitCode':
                case 'quantityMeasurementUnitConversion':
                case 'quantityMeasurementUnitName':
                case 'quantityMeasurementUnitPrecision':
                case 'refundableAmount':
                case 'remunerationAmount':
                case 'sku':
                case 'subtotalAggregation':
                case 'taxAmount':
                case 'taxAmountAfterCancellation':
                case 'taxAmountFullAggregation':
                case 'uuid':
                case 'amount':
                case 'taxRate':
                case 'taxRateAverageAggregation':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderItemBundle':
                case 'order':
                case 'state':
                case 'process':
                case 'spySalesShipment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyNopaymentPaids':
                case 'spySalesReclamationItems':
                case 'spySalesReturnItems':
                case 'spySalesOrderConfiguredBundleItems':
                case 'spyOmsTransitionLogs':
                case 'spyOmsOrderItemStateHistories':
                case 'spyOmsEventTimeouts':
                case 'spySalesDiscounts':
                case 'spySalesOrderItemOptions':
                case 'spySalesOrderItemMetadatas':
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
        $this->spyNopaymentPaids = $this->spyNopaymentPaids ?: new ArrayObject();
        $this->spySalesReclamationItems = $this->spySalesReclamationItems ?: new ArrayObject();
        $this->spySalesReturnItems = $this->spySalesReturnItems ?: new ArrayObject();
        $this->spySalesOrderConfiguredBundleItems = $this->spySalesOrderConfiguredBundleItems ?: new ArrayObject();
        $this->spyOmsTransitionLogs = $this->spyOmsTransitionLogs ?: new ArrayObject();
        $this->spyOmsOrderItemStateHistories = $this->spyOmsOrderItemStateHistories ?: new ArrayObject();
        $this->spyOmsEventTimeouts = $this->spyOmsEventTimeouts ?: new ArrayObject();
        $this->spySalesDiscounts = $this->spySalesDiscounts ?: new ArrayObject();
        $this->spySalesOrderItemOptions = $this->spySalesOrderItemOptions ?: new ArrayObject();
        $this->spySalesOrderItemMetadatas = $this->spySalesOrderItemMetadatas ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItem' => $this->idSalesOrderItem,
            'fkOmsOrderItemState' => $this->fkOmsOrderItemState,
            'fkOmsOrderProcess' => $this->fkOmsOrderProcess,
            'fkSalesOrder' => $this->fkSalesOrder,
            'fkSalesOrderItemBundle' => $this->fkSalesOrderItemBundle,
            'fkSalesShipment' => $this->fkSalesShipment,
            'amountBaseMeasurementUnitName' => $this->amountBaseMeasurementUnitName,
            'amountMeasurementUnitCode' => $this->amountMeasurementUnitCode,
            'amountMeasurementUnitConversion' => $this->amountMeasurementUnitConversion,
            'amountMeasurementUnitName' => $this->amountMeasurementUnitName,
            'amountMeasurementUnitPrecision' => $this->amountMeasurementUnitPrecision,
            'amountSku' => $this->amountSku,
            'canceledAmount' => $this->canceledAmount,
            'cartNote' => $this->cartNote,
            'discountAmountAggregation' => $this->discountAmountAggregation,
            'discountAmountFullAggregation' => $this->discountAmountFullAggregation,
            'expensePriceAggregation' => $this->expensePriceAggregation,
            'grossPrice' => $this->grossPrice,
            'groupKey' => $this->groupKey,
            'isQuantitySplittable' => $this->isQuantitySplittable,
            'lastStateChange' => $this->lastStateChange,
            'name' => $this->name,
            'netPrice' => $this->netPrice,
            'orderItemReference' => $this->orderItemReference,
            'price' => $this->price,
            'priceToPayAggregation' => $this->priceToPayAggregation,
            'productOptionPriceAggregation' => $this->productOptionPriceAggregation,
            'quantity' => $this->quantity,
            'quantityBaseMeasurementUnitName' => $this->quantityBaseMeasurementUnitName,
            'quantityMeasurementUnitCode' => $this->quantityMeasurementUnitCode,
            'quantityMeasurementUnitConversion' => $this->quantityMeasurementUnitConversion,
            'quantityMeasurementUnitName' => $this->quantityMeasurementUnitName,
            'quantityMeasurementUnitPrecision' => $this->quantityMeasurementUnitPrecision,
            'refundableAmount' => $this->refundableAmount,
            'remunerationAmount' => $this->remunerationAmount,
            'sku' => $this->sku,
            'subtotalAggregation' => $this->subtotalAggregation,
            'taxAmount' => $this->taxAmount,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation,
            'taxAmountFullAggregation' => $this->taxAmountFullAggregation,
            'uuid' => $this->uuid,
            'salesOrderItemBundle' => $this->salesOrderItemBundle,
            'order' => $this->order,
            'state' => $this->state,
            'process' => $this->process,
            'spySalesShipment' => $this->spySalesShipment,
            'spyNopaymentPaids' => $this->spyNopaymentPaids,
            'spySalesReclamationItems' => $this->spySalesReclamationItems,
            'spySalesReturnItems' => $this->spySalesReturnItems,
            'spySalesOrderConfiguredBundleItems' => $this->spySalesOrderConfiguredBundleItems,
            'spyOmsTransitionLogs' => $this->spyOmsTransitionLogs,
            'spyOmsOrderItemStateHistories' => $this->spyOmsOrderItemStateHistories,
            'spyOmsEventTimeouts' => $this->spyOmsEventTimeouts,
            'spySalesDiscounts' => $this->spySalesDiscounts,
            'spySalesOrderItemOptions' => $this->spySalesOrderItemOptions,
            'spySalesOrderItemMetadatas' => $this->spySalesOrderItemMetadatas,
            'amount' => $this->amount,
            'taxRate' => $this->taxRate,
            'taxRateAverageAggregation' => $this->taxRateAverageAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item' => $this->idSalesOrderItem,
            'fk_oms_order_item_state' => $this->fkOmsOrderItemState,
            'fk_oms_order_process' => $this->fkOmsOrderProcess,
            'fk_sales_order' => $this->fkSalesOrder,
            'fk_sales_order_item_bundle' => $this->fkSalesOrderItemBundle,
            'fk_sales_shipment' => $this->fkSalesShipment,
            'amount_base_measurement_unit_name' => $this->amountBaseMeasurementUnitName,
            'amount_measurement_unit_code' => $this->amountMeasurementUnitCode,
            'amount_measurement_unit_conversion' => $this->amountMeasurementUnitConversion,
            'amount_measurement_unit_name' => $this->amountMeasurementUnitName,
            'amount_measurement_unit_precision' => $this->amountMeasurementUnitPrecision,
            'amount_sku' => $this->amountSku,
            'canceled_amount' => $this->canceledAmount,
            'cart_note' => $this->cartNote,
            'discount_amount_aggregation' => $this->discountAmountAggregation,
            'discount_amount_full_aggregation' => $this->discountAmountFullAggregation,
            'expense_price_aggregation' => $this->expensePriceAggregation,
            'gross_price' => $this->grossPrice,
            'group_key' => $this->groupKey,
            'is_quantity_splittable' => $this->isQuantitySplittable,
            'last_state_change' => $this->lastStateChange,
            'name' => $this->name,
            'net_price' => $this->netPrice,
            'order_item_reference' => $this->orderItemReference,
            'price' => $this->price,
            'price_to_pay_aggregation' => $this->priceToPayAggregation,
            'product_option_price_aggregation' => $this->productOptionPriceAggregation,
            'quantity' => $this->quantity,
            'quantity_base_measurement_unit_name' => $this->quantityBaseMeasurementUnitName,
            'quantity_measurement_unit_code' => $this->quantityMeasurementUnitCode,
            'quantity_measurement_unit_conversion' => $this->quantityMeasurementUnitConversion,
            'quantity_measurement_unit_name' => $this->quantityMeasurementUnitName,
            'quantity_measurement_unit_precision' => $this->quantityMeasurementUnitPrecision,
            'refundable_amount' => $this->refundableAmount,
            'remuneration_amount' => $this->remunerationAmount,
            'sku' => $this->sku,
            'subtotal_aggregation' => $this->subtotalAggregation,
            'tax_amount' => $this->taxAmount,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation,
            'tax_amount_full_aggregation' => $this->taxAmountFullAggregation,
            'uuid' => $this->uuid,
            'sales_order_item_bundle' => $this->salesOrderItemBundle,
            'order' => $this->order,
            'state' => $this->state,
            'process' => $this->process,
            'spy_sales_shipment' => $this->spySalesShipment,
            'spy_nopayment_paids' => $this->spyNopaymentPaids,
            'spy_sales_reclamation_items' => $this->spySalesReclamationItems,
            'spy_sales_return_items' => $this->spySalesReturnItems,
            'spy_sales_order_configured_bundle_items' => $this->spySalesOrderConfiguredBundleItems,
            'spy_oms_transition_logs' => $this->spyOmsTransitionLogs,
            'spy_oms_order_item_state_histories' => $this->spyOmsOrderItemStateHistories,
            'spy_oms_event_timeouts' => $this->spyOmsEventTimeouts,
            'spy_sales_discounts' => $this->spySalesDiscounts,
            'spy_sales_order_item_options' => $this->spySalesOrderItemOptions,
            'spy_sales_order_item_metadatas' => $this->spySalesOrderItemMetadatas,
            'amount' => $this->amount,
            'tax_rate' => $this->taxRate,
            'tax_rate_average_aggregation' => $this->taxRateAverageAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, false) : $this->idSalesOrderItem,
            'fk_oms_order_item_state' => $this->fkOmsOrderItemState instanceof AbstractTransfer ? $this->fkOmsOrderItemState->toArray(true, false) : $this->fkOmsOrderItemState,
            'fk_oms_order_process' => $this->fkOmsOrderProcess instanceof AbstractTransfer ? $this->fkOmsOrderProcess->toArray(true, false) : $this->fkOmsOrderProcess,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'fk_sales_order_item_bundle' => $this->fkSalesOrderItemBundle instanceof AbstractTransfer ? $this->fkSalesOrderItemBundle->toArray(true, false) : $this->fkSalesOrderItemBundle,
            'fk_sales_shipment' => $this->fkSalesShipment instanceof AbstractTransfer ? $this->fkSalesShipment->toArray(true, false) : $this->fkSalesShipment,
            'amount_base_measurement_unit_name' => $this->amountBaseMeasurementUnitName instanceof AbstractTransfer ? $this->amountBaseMeasurementUnitName->toArray(true, false) : $this->amountBaseMeasurementUnitName,
            'amount_measurement_unit_code' => $this->amountMeasurementUnitCode instanceof AbstractTransfer ? $this->amountMeasurementUnitCode->toArray(true, false) : $this->amountMeasurementUnitCode,
            'amount_measurement_unit_conversion' => $this->amountMeasurementUnitConversion instanceof AbstractTransfer ? $this->amountMeasurementUnitConversion->toArray(true, false) : $this->amountMeasurementUnitConversion,
            'amount_measurement_unit_name' => $this->amountMeasurementUnitName instanceof AbstractTransfer ? $this->amountMeasurementUnitName->toArray(true, false) : $this->amountMeasurementUnitName,
            'amount_measurement_unit_precision' => $this->amountMeasurementUnitPrecision instanceof AbstractTransfer ? $this->amountMeasurementUnitPrecision->toArray(true, false) : $this->amountMeasurementUnitPrecision,
            'amount_sku' => $this->amountSku instanceof AbstractTransfer ? $this->amountSku->toArray(true, false) : $this->amountSku,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'cart_note' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, false) : $this->cartNote,
            'discount_amount_aggregation' => $this->discountAmountAggregation instanceof AbstractTransfer ? $this->discountAmountAggregation->toArray(true, false) : $this->discountAmountAggregation,
            'discount_amount_full_aggregation' => $this->discountAmountFullAggregation instanceof AbstractTransfer ? $this->discountAmountFullAggregation->toArray(true, false) : $this->discountAmountFullAggregation,
            'expense_price_aggregation' => $this->expensePriceAggregation instanceof AbstractTransfer ? $this->expensePriceAggregation->toArray(true, false) : $this->expensePriceAggregation,
            'gross_price' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, false) : $this->grossPrice,
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'is_quantity_splittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, false) : $this->isQuantitySplittable,
            'last_state_change' => $this->lastStateChange instanceof AbstractTransfer ? $this->lastStateChange->toArray(true, false) : $this->lastStateChange,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'net_price' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, false) : $this->netPrice,
            'order_item_reference' => $this->orderItemReference instanceof AbstractTransfer ? $this->orderItemReference->toArray(true, false) : $this->orderItemReference,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'price_to_pay_aggregation' => $this->priceToPayAggregation instanceof AbstractTransfer ? $this->priceToPayAggregation->toArray(true, false) : $this->priceToPayAggregation,
            'product_option_price_aggregation' => $this->productOptionPriceAggregation instanceof AbstractTransfer ? $this->productOptionPriceAggregation->toArray(true, false) : $this->productOptionPriceAggregation,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'quantity_base_measurement_unit_name' => $this->quantityBaseMeasurementUnitName instanceof AbstractTransfer ? $this->quantityBaseMeasurementUnitName->toArray(true, false) : $this->quantityBaseMeasurementUnitName,
            'quantity_measurement_unit_code' => $this->quantityMeasurementUnitCode instanceof AbstractTransfer ? $this->quantityMeasurementUnitCode->toArray(true, false) : $this->quantityMeasurementUnitCode,
            'quantity_measurement_unit_conversion' => $this->quantityMeasurementUnitConversion instanceof AbstractTransfer ? $this->quantityMeasurementUnitConversion->toArray(true, false) : $this->quantityMeasurementUnitConversion,
            'quantity_measurement_unit_name' => $this->quantityMeasurementUnitName instanceof AbstractTransfer ? $this->quantityMeasurementUnitName->toArray(true, false) : $this->quantityMeasurementUnitName,
            'quantity_measurement_unit_precision' => $this->quantityMeasurementUnitPrecision instanceof AbstractTransfer ? $this->quantityMeasurementUnitPrecision->toArray(true, false) : $this->quantityMeasurementUnitPrecision,
            'refundable_amount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, false) : $this->refundableAmount,
            'remuneration_amount' => $this->remunerationAmount instanceof AbstractTransfer ? $this->remunerationAmount->toArray(true, false) : $this->remunerationAmount,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'subtotal_aggregation' => $this->subtotalAggregation instanceof AbstractTransfer ? $this->subtotalAggregation->toArray(true, false) : $this->subtotalAggregation,
            'tax_amount' => $this->taxAmount instanceof AbstractTransfer ? $this->taxAmount->toArray(true, false) : $this->taxAmount,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, false) : $this->taxAmountAfterCancellation,
            'tax_amount_full_aggregation' => $this->taxAmountFullAggregation instanceof AbstractTransfer ? $this->taxAmountFullAggregation->toArray(true, false) : $this->taxAmountFullAggregation,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'sales_order_item_bundle' => $this->salesOrderItemBundle instanceof AbstractTransfer ? $this->salesOrderItemBundle->toArray(true, false) : $this->salesOrderItemBundle,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, false) : $this->state,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, false) : $this->process,
            'spy_sales_shipment' => $this->spySalesShipment instanceof AbstractTransfer ? $this->spySalesShipment->toArray(true, false) : $this->spySalesShipment,
            'spy_nopayment_paids' => $this->spyNopaymentPaids instanceof AbstractTransfer ? $this->spyNopaymentPaids->toArray(true, false) : $this->addValuesToCollection($this->spyNopaymentPaids, true, false),
            'spy_sales_reclamation_items' => $this->spySalesReclamationItems instanceof AbstractTransfer ? $this->spySalesReclamationItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesReclamationItems, true, false),
            'spy_sales_return_items' => $this->spySalesReturnItems instanceof AbstractTransfer ? $this->spySalesReturnItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesReturnItems, true, false),
            'spy_sales_order_configured_bundle_items' => $this->spySalesOrderConfiguredBundleItems instanceof AbstractTransfer ? $this->spySalesOrderConfiguredBundleItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderConfiguredBundleItems, true, false),
            'spy_oms_transition_logs' => $this->spyOmsTransitionLogs instanceof AbstractTransfer ? $this->spyOmsTransitionLogs->toArray(true, false) : $this->addValuesToCollection($this->spyOmsTransitionLogs, true, false),
            'spy_oms_order_item_state_histories' => $this->spyOmsOrderItemStateHistories instanceof AbstractTransfer ? $this->spyOmsOrderItemStateHistories->toArray(true, false) : $this->addValuesToCollection($this->spyOmsOrderItemStateHistories, true, false),
            'spy_oms_event_timeouts' => $this->spyOmsEventTimeouts instanceof AbstractTransfer ? $this->spyOmsEventTimeouts->toArray(true, false) : $this->addValuesToCollection($this->spyOmsEventTimeouts, true, false),
            'spy_sales_discounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, false) : $this->addValuesToCollection($this->spySalesDiscounts, true, false),
            'spy_sales_order_item_options' => $this->spySalesOrderItemOptions instanceof AbstractTransfer ? $this->spySalesOrderItemOptions->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderItemOptions, true, false),
            'spy_sales_order_item_metadatas' => $this->spySalesOrderItemMetadatas instanceof AbstractTransfer ? $this->spySalesOrderItemMetadatas->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderItemMetadatas, true, false),
            'amount' => $this->amount,
            'tax_rate' => $this->taxRate,
            'tax_rate_average_aggregation' => $this->taxRateAverageAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItem' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, true) : $this->idSalesOrderItem,
            'fkOmsOrderItemState' => $this->fkOmsOrderItemState instanceof AbstractTransfer ? $this->fkOmsOrderItemState->toArray(true, true) : $this->fkOmsOrderItemState,
            'fkOmsOrderProcess' => $this->fkOmsOrderProcess instanceof AbstractTransfer ? $this->fkOmsOrderProcess->toArray(true, true) : $this->fkOmsOrderProcess,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'fkSalesOrderItemBundle' => $this->fkSalesOrderItemBundle instanceof AbstractTransfer ? $this->fkSalesOrderItemBundle->toArray(true, true) : $this->fkSalesOrderItemBundle,
            'fkSalesShipment' => $this->fkSalesShipment instanceof AbstractTransfer ? $this->fkSalesShipment->toArray(true, true) : $this->fkSalesShipment,
            'amountBaseMeasurementUnitName' => $this->amountBaseMeasurementUnitName instanceof AbstractTransfer ? $this->amountBaseMeasurementUnitName->toArray(true, true) : $this->amountBaseMeasurementUnitName,
            'amountMeasurementUnitCode' => $this->amountMeasurementUnitCode instanceof AbstractTransfer ? $this->amountMeasurementUnitCode->toArray(true, true) : $this->amountMeasurementUnitCode,
            'amountMeasurementUnitConversion' => $this->amountMeasurementUnitConversion instanceof AbstractTransfer ? $this->amountMeasurementUnitConversion->toArray(true, true) : $this->amountMeasurementUnitConversion,
            'amountMeasurementUnitName' => $this->amountMeasurementUnitName instanceof AbstractTransfer ? $this->amountMeasurementUnitName->toArray(true, true) : $this->amountMeasurementUnitName,
            'amountMeasurementUnitPrecision' => $this->amountMeasurementUnitPrecision instanceof AbstractTransfer ? $this->amountMeasurementUnitPrecision->toArray(true, true) : $this->amountMeasurementUnitPrecision,
            'amountSku' => $this->amountSku instanceof AbstractTransfer ? $this->amountSku->toArray(true, true) : $this->amountSku,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'cartNote' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, true) : $this->cartNote,
            'discountAmountAggregation' => $this->discountAmountAggregation instanceof AbstractTransfer ? $this->discountAmountAggregation->toArray(true, true) : $this->discountAmountAggregation,
            'discountAmountFullAggregation' => $this->discountAmountFullAggregation instanceof AbstractTransfer ? $this->discountAmountFullAggregation->toArray(true, true) : $this->discountAmountFullAggregation,
            'expensePriceAggregation' => $this->expensePriceAggregation instanceof AbstractTransfer ? $this->expensePriceAggregation->toArray(true, true) : $this->expensePriceAggregation,
            'grossPrice' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, true) : $this->grossPrice,
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'isQuantitySplittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, true) : $this->isQuantitySplittable,
            'lastStateChange' => $this->lastStateChange instanceof AbstractTransfer ? $this->lastStateChange->toArray(true, true) : $this->lastStateChange,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'netPrice' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, true) : $this->netPrice,
            'orderItemReference' => $this->orderItemReference instanceof AbstractTransfer ? $this->orderItemReference->toArray(true, true) : $this->orderItemReference,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'priceToPayAggregation' => $this->priceToPayAggregation instanceof AbstractTransfer ? $this->priceToPayAggregation->toArray(true, true) : $this->priceToPayAggregation,
            'productOptionPriceAggregation' => $this->productOptionPriceAggregation instanceof AbstractTransfer ? $this->productOptionPriceAggregation->toArray(true, true) : $this->productOptionPriceAggregation,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'quantityBaseMeasurementUnitName' => $this->quantityBaseMeasurementUnitName instanceof AbstractTransfer ? $this->quantityBaseMeasurementUnitName->toArray(true, true) : $this->quantityBaseMeasurementUnitName,
            'quantityMeasurementUnitCode' => $this->quantityMeasurementUnitCode instanceof AbstractTransfer ? $this->quantityMeasurementUnitCode->toArray(true, true) : $this->quantityMeasurementUnitCode,
            'quantityMeasurementUnitConversion' => $this->quantityMeasurementUnitConversion instanceof AbstractTransfer ? $this->quantityMeasurementUnitConversion->toArray(true, true) : $this->quantityMeasurementUnitConversion,
            'quantityMeasurementUnitName' => $this->quantityMeasurementUnitName instanceof AbstractTransfer ? $this->quantityMeasurementUnitName->toArray(true, true) : $this->quantityMeasurementUnitName,
            'quantityMeasurementUnitPrecision' => $this->quantityMeasurementUnitPrecision instanceof AbstractTransfer ? $this->quantityMeasurementUnitPrecision->toArray(true, true) : $this->quantityMeasurementUnitPrecision,
            'refundableAmount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, true) : $this->refundableAmount,
            'remunerationAmount' => $this->remunerationAmount instanceof AbstractTransfer ? $this->remunerationAmount->toArray(true, true) : $this->remunerationAmount,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'subtotalAggregation' => $this->subtotalAggregation instanceof AbstractTransfer ? $this->subtotalAggregation->toArray(true, true) : $this->subtotalAggregation,
            'taxAmount' => $this->taxAmount instanceof AbstractTransfer ? $this->taxAmount->toArray(true, true) : $this->taxAmount,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, true) : $this->taxAmountAfterCancellation,
            'taxAmountFullAggregation' => $this->taxAmountFullAggregation instanceof AbstractTransfer ? $this->taxAmountFullAggregation->toArray(true, true) : $this->taxAmountFullAggregation,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'salesOrderItemBundle' => $this->salesOrderItemBundle instanceof AbstractTransfer ? $this->salesOrderItemBundle->toArray(true, true) : $this->salesOrderItemBundle,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, true) : $this->state,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, true) : $this->process,
            'spySalesShipment' => $this->spySalesShipment instanceof AbstractTransfer ? $this->spySalesShipment->toArray(true, true) : $this->spySalesShipment,
            'spyNopaymentPaids' => $this->spyNopaymentPaids instanceof AbstractTransfer ? $this->spyNopaymentPaids->toArray(true, true) : $this->addValuesToCollection($this->spyNopaymentPaids, true, true),
            'spySalesReclamationItems' => $this->spySalesReclamationItems instanceof AbstractTransfer ? $this->spySalesReclamationItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesReclamationItems, true, true),
            'spySalesReturnItems' => $this->spySalesReturnItems instanceof AbstractTransfer ? $this->spySalesReturnItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesReturnItems, true, true),
            'spySalesOrderConfiguredBundleItems' => $this->spySalesOrderConfiguredBundleItems instanceof AbstractTransfer ? $this->spySalesOrderConfiguredBundleItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderConfiguredBundleItems, true, true),
            'spyOmsTransitionLogs' => $this->spyOmsTransitionLogs instanceof AbstractTransfer ? $this->spyOmsTransitionLogs->toArray(true, true) : $this->addValuesToCollection($this->spyOmsTransitionLogs, true, true),
            'spyOmsOrderItemStateHistories' => $this->spyOmsOrderItemStateHistories instanceof AbstractTransfer ? $this->spyOmsOrderItemStateHistories->toArray(true, true) : $this->addValuesToCollection($this->spyOmsOrderItemStateHistories, true, true),
            'spyOmsEventTimeouts' => $this->spyOmsEventTimeouts instanceof AbstractTransfer ? $this->spyOmsEventTimeouts->toArray(true, true) : $this->addValuesToCollection($this->spyOmsEventTimeouts, true, true),
            'spySalesDiscounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, true) : $this->addValuesToCollection($this->spySalesDiscounts, true, true),
            'spySalesOrderItemOptions' => $this->spySalesOrderItemOptions instanceof AbstractTransfer ? $this->spySalesOrderItemOptions->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderItemOptions, true, true),
            'spySalesOrderItemMetadatas' => $this->spySalesOrderItemMetadatas instanceof AbstractTransfer ? $this->spySalesOrderItemMetadatas->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderItemMetadatas, true, true),
            'amount' => $this->amount,
            'taxRate' => $this->taxRate,
            'taxRateAverageAggregation' => $this->taxRateAverageAggregation,
        ];
    }
}
