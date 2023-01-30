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
class ItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const GROUP_KEY_PREFIX = 'groupKeyPrefix';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const NORMALIZABLE_FIELDS = 'normalizableFields';

    /**
     * @var string
     */
    public const PRODUCT_OPTIONS = 'productOptions';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const CONFIGURED_BUNDLE_ITEM = 'configuredBundleItem';

    /**
     * @var string
     */
    public const GIFT_CARD_METADATA = 'giftCardMetadata';

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
    public const SUM_GROSS_PRICE = 'sumGrossPrice';

    /**
     * @var string
     */
    public const UNIT_GROSS_PRICE = 'unitGrossPrice';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const CONFIGURED_BUNDLE = 'configuredBundle';

    /**
     * @var string
     */
    public const SUM_SUBTOTAL_AGGREGATION = 'sumSubtotalAggregation';

    /**
     * @var string
     */
    public const UNIT_PRICE = 'unitPrice';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM = 'idSalesOrderItem';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const FK_OMS_ORDER_ITEM_STATE = 'fkOmsOrderItemState';

    /**
     * @var string
     */
    public const PROCESS = 'process';

    /**
     * @var string
     */
    public const CALCULATED_DISCOUNTS = 'calculatedDiscounts';

    /**
     * @var string
     */
    public const VARIETY = 'variety';

    /**
     * @var string
     */
    public const STATE = 'state';

    /**
     * @var string
     */
    public const CANCELED_AMOUNT = 'canceledAmount';

    /**
     * @var string
     */
    public const STATE_HISTORY = 'stateHistory';

    /**
     * @var string
     */
    public const IS_ORDERED = 'isOrdered';

    /**
     * @var string
     */
    public const RELATED_BUNDLE_ITEM_IDENTIFIER = 'relatedBundleItemIdentifier';

    /**
     * @var string
     */
    public const BUNDLE_ITEM_IDENTIFIER = 'bundleItemIdentifier';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SALES_ORDER_CONFIGURED_BUNDLE_ITEM = 'salesOrderConfiguredBundleItem';

    /**
     * @var string
     */
    public const QUANTITY_SALES_UNIT = 'quantitySalesUnit';

    /**
     * @var string
     */
    public const AMOUNT_SALES_UNIT = 'amountSalesUnit';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_CONFIGURATION = 'salesOrderItemConfiguration';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE = 'productConcrete';

    /**
     * @var string
     */
    public const SOURCE_UNIT_GROSS_PRICE = 'sourceUnitGrossPrice';

    /**
     * @var string
     */
    public const SOURCE_UNIT_NET_PRICE = 'sourceUnitNetPrice';

    /**
     * @var string
     */
    public const SUM_PRICE_TO_PAY_AGGREGATION = 'sumPriceToPayAggregation';

    /**
     * @var string
     */
    public const SALES_ORDER_CONFIGURED_BUNDLE = 'salesOrderConfiguredBundle';

    /**
     * @var string
     */
    public const IS_RETURNABLE = 'isReturnable';

    /**
     * @var string
     */
    public const PRODUCT_BUNDLE = 'productBundle';

    /**
     * @var string
     */
    public const REMUNERATION_AMOUNT = 'remunerationAmount';

    /**
     * @var string
     */
    public const REFUNDABLE_AMOUNT = 'refundableAmount';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const SUM_PRICE = 'sumPrice';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const RETURN_POLICY_MESSAGES = 'returnPolicyMessages';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

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
    public const UNIT_TAX_AMOUNT_FULL_AGGREGATION = 'unitTaxAmountFullAggregation';

    /**
     * @var string
     */
    public const SUM_TAX_AMOUNT_FULL_AGGREGATION = 'sumTaxAmountFullAggregation';

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
    public const TAX_RATE_AVERAGE_AGGREGATION = 'taxRateAverageAggregation';

    /**
     * @var string
     */
    public const TAX_AMOUNT_AFTER_CANCELLATION = 'taxAmountAfterCancellation';

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
    public const CART_NOTE = 'cartNote';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const MAX_QUANTITY = 'maxQuantity';

    /**
     * @var string
     */
    public const ID_DISCOUNT_PROMOTION = 'idDiscountPromotion';

    /**
     * @var string
     */
    public const PRICE_PRODUCT = 'priceProduct';

    /**
     * @var string
     */
    public const MERCHANT_REFERENCE = 'merchantReference';

    /**
     * @deprecated Will be removed with a next major release
     */
    public const FORCED_UNIT_GROSS_PRICE = 'forcedUnitGrossPrice';

    /**
     * @var string
     */
    public const ORIGIN_UNIT_GROSS_PRICE = 'originUnitGrossPrice';

    /**
     * @var string
     */
    public const ORIGIN_UNIT_NET_PRICE = 'originUnitNetPrice';

    /**
     * @var string
     */
    public const IMAGES = 'images';

    /**
     * @var string
     */
    public const METADATA = 'metadata';

    /**
     * @var string
     */
    public const CONCRETE_ATTRIBUTES = 'concreteAttributes';

    /**
     * @var string
     */
    public const AMOUNT_LEAD_PRODUCT = 'amountLeadProduct';

    /**
     * @var string
     */
    public const PRODUCT_PACKAGING_UNIT = 'productPackagingUnit';

    /**
     * @var string
     */
    public const ID_ORDER_ITEM = 'idOrderItem';

    /**
     * @var string
     */
    public const IS_QUANTITY_SPLITTABLE = 'isQuantitySplittable';

    /**
     * @var int|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $groupKeyPrefix;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string[]
     */
    protected $normalizableFields = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[]
     */
    protected $productOptions;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var \Generated\Shared\Transfer\ConfiguredBundleItemTransfer|null
     */
    protected $configuredBundleItem;

    /**
     * @var \Generated\Shared\Transfer\GiftCardMetadataTransfer|null
     */
    protected $giftCardMetadata;

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
    protected $sumGrossPrice;

    /**
     * @var int|null
     */
    protected $unitGrossPrice;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\ConfiguredBundleTransfer|null
     */
    protected $configuredBundle;

    /**
     * @var int|null
     */
    protected $sumSubtotalAggregation;

    /**
     * @var int|null
     */
    protected $unitPrice;

    /**
     * @var int|null
     */
    protected $idSalesOrderItem;

    /**
     * @var int|null
     */
    protected $fkSalesOrder;

    /**
     * @var int|null
     */
    protected $fkOmsOrderItemState;

    /**
     * @var string|null
     */
    protected $process;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    protected $calculatedDiscounts;

    /**
     * @var string|null
     */
    protected $variety;

    /**
     * @var \Generated\Shared\Transfer\ItemStateTransfer|null
     */
    protected $state;

    /**
     * @var int|null
     */
    protected $canceledAmount;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemStateTransfer[]
     */
    protected $stateHistory;

    /**
     * @var bool|null
     */
    protected $isOrdered;

    /**
     * @var string|null
     */
    protected $relatedBundleItemIdentifier;

    /**
     * @var string|null
     */
    protected $bundleItemIdentifier;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer|null
     */
    protected $salesOrderConfiguredBundleItem;

    /**
     * @var \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer|null
     */
    protected $quantitySalesUnit;

    /**
     * @var \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer|null
     */
    protected $amountSalesUnit;

    /**
     * @var \Generated\Shared\Transfer\SalesOrderItemConfigurationTransfer|null
     */
    protected $salesOrderItemConfiguration;

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    protected $productConcrete;

    /**
     * @var int|null
     */
    protected $sourceUnitGrossPrice;

    /**
     * @var int|null
     */
    protected $sourceUnitNetPrice;

    /**
     * @var int|null
     */
    protected $sumPriceToPayAggregation;

    /**
     * @var \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer|null
     */
    protected $salesOrderConfiguredBundle;

    /**
     * @var bool|null
     */
    protected $isReturnable;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $productBundle;

    /**
     * @var int|null
     */
    protected $remunerationAmount;

    /**
     * @var int|null
     */
    protected $refundableAmount;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var int|null
     */
    protected $sumPrice;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    protected $returnPolicyMessages;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amount;

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
    protected $unitTaxAmountFullAggregation;

    /**
     * @var int|null
     */
    protected $sumTaxAmountFullAggregation;

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
     * @var float|null
     */
    protected $taxRateAverageAggregation;

    /**
     * @var int|null
     */
    protected $taxAmountAfterCancellation;

    /**
     * @var int|null
     */
    protected $unitTaxAmount;

    /**
     * @var int|null
     */
    protected $sumTaxAmount;

    /**
     * @var string|null
     */
    protected $cartNote;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    protected $messages;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var int|null
     */
    protected $maxQuantity;

    /**
     * @var int|null
     */
    protected $idDiscountPromotion;

    /**
     * @var \Generated\Shared\Transfer\PriceProductTransfer|null
     */
    protected $priceProduct;

    /**
     * @var string|null
     */
    protected $merchantReference;

    /**
     * @var bool|null
     */
    protected $forcedUnitGrossPrice;

    /**
     * @var int|null
     */
    protected $originUnitGrossPrice;

    /**
     * @var int|null
     */
    protected $originUnitNetPrice;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageTransfer[]
     */
    protected $images;

    /**
     * @var \Generated\Shared\Transfer\ItemMetadataTransfer|null
     */
    protected $metadata;

    /**
     * @var array
     */
    protected $concreteAttributes = [];

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    protected $amountLeadProduct;

    /**
     * @var \Generated\Shared\Transfer\ProductPackagingUnitTransfer|null
     */
    protected $productPackagingUnit;

    /**
     * @var int|null
     */
    protected $idOrderItem;

    /**
     * @var bool|null
     */
    protected $isQuantitySplittable;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id' => 'id',
        'Id' => 'id',
        'sku' => 'sku',
        'Sku' => 'sku',
        'url' => 'url',
        'Url' => 'url',
        'group_key_prefix' => 'groupKeyPrefix',
        'groupKeyPrefix' => 'groupKeyPrefix',
        'GroupKeyPrefix' => 'groupKeyPrefix',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'normalizable_fields' => 'normalizableFields',
        'normalizableFields' => 'normalizableFields',
        'NormalizableFields' => 'normalizableFields',
        'product_options' => 'productOptions',
        'productOptions' => 'productOptions',
        'ProductOptions' => 'productOptions',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'configured_bundle_item' => 'configuredBundleItem',
        'configuredBundleItem' => 'configuredBundleItem',
        'ConfiguredBundleItem' => 'configuredBundleItem',
        'gift_card_metadata' => 'giftCardMetadata',
        'giftCardMetadata' => 'giftCardMetadata',
        'GiftCardMetadata' => 'giftCardMetadata',
        'shipment' => 'shipment',
        'Shipment' => 'shipment',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'sum_gross_price' => 'sumGrossPrice',
        'sumGrossPrice' => 'sumGrossPrice',
        'SumGrossPrice' => 'sumGrossPrice',
        'unit_gross_price' => 'unitGrossPrice',
        'unitGrossPrice' => 'unitGrossPrice',
        'UnitGrossPrice' => 'unitGrossPrice',
        'name' => 'name',
        'Name' => 'name',
        'configured_bundle' => 'configuredBundle',
        'configuredBundle' => 'configuredBundle',
        'ConfiguredBundle' => 'configuredBundle',
        'sum_subtotal_aggregation' => 'sumSubtotalAggregation',
        'sumSubtotalAggregation' => 'sumSubtotalAggregation',
        'SumSubtotalAggregation' => 'sumSubtotalAggregation',
        'unit_price' => 'unitPrice',
        'unitPrice' => 'unitPrice',
        'UnitPrice' => 'unitPrice',
        'id_sales_order_item' => 'idSalesOrderItem',
        'idSalesOrderItem' => 'idSalesOrderItem',
        'IdSalesOrderItem' => 'idSalesOrderItem',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'fk_oms_order_item_state' => 'fkOmsOrderItemState',
        'fkOmsOrderItemState' => 'fkOmsOrderItemState',
        'FkOmsOrderItemState' => 'fkOmsOrderItemState',
        'process' => 'process',
        'Process' => 'process',
        'calculated_discounts' => 'calculatedDiscounts',
        'calculatedDiscounts' => 'calculatedDiscounts',
        'CalculatedDiscounts' => 'calculatedDiscounts',
        'variety' => 'variety',
        'Variety' => 'variety',
        'state' => 'state',
        'State' => 'state',
        'canceled_amount' => 'canceledAmount',
        'canceledAmount' => 'canceledAmount',
        'CanceledAmount' => 'canceledAmount',
        'state_history' => 'stateHistory',
        'stateHistory' => 'stateHistory',
        'StateHistory' => 'stateHistory',
        'is_ordered' => 'isOrdered',
        'isOrdered' => 'isOrdered',
        'IsOrdered' => 'isOrdered',
        'related_bundle_item_identifier' => 'relatedBundleItemIdentifier',
        'relatedBundleItemIdentifier' => 'relatedBundleItemIdentifier',
        'RelatedBundleItemIdentifier' => 'relatedBundleItemIdentifier',
        'bundle_item_identifier' => 'bundleItemIdentifier',
        'bundleItemIdentifier' => 'bundleItemIdentifier',
        'BundleItemIdentifier' => 'bundleItemIdentifier',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'sales_order_configured_bundle_item' => 'salesOrderConfiguredBundleItem',
        'salesOrderConfiguredBundleItem' => 'salesOrderConfiguredBundleItem',
        'SalesOrderConfiguredBundleItem' => 'salesOrderConfiguredBundleItem',
        'quantity_sales_unit' => 'quantitySalesUnit',
        'quantitySalesUnit' => 'quantitySalesUnit',
        'QuantitySalesUnit' => 'quantitySalesUnit',
        'amount_sales_unit' => 'amountSalesUnit',
        'amountSalesUnit' => 'amountSalesUnit',
        'AmountSalesUnit' => 'amountSalesUnit',
        'sales_order_item_configuration' => 'salesOrderItemConfiguration',
        'salesOrderItemConfiguration' => 'salesOrderItemConfiguration',
        'SalesOrderItemConfiguration' => 'salesOrderItemConfiguration',
        'product_concrete' => 'productConcrete',
        'productConcrete' => 'productConcrete',
        'ProductConcrete' => 'productConcrete',
        'source_unit_gross_price' => 'sourceUnitGrossPrice',
        'sourceUnitGrossPrice' => 'sourceUnitGrossPrice',
        'SourceUnitGrossPrice' => 'sourceUnitGrossPrice',
        'source_unit_net_price' => 'sourceUnitNetPrice',
        'sourceUnitNetPrice' => 'sourceUnitNetPrice',
        'SourceUnitNetPrice' => 'sourceUnitNetPrice',
        'sum_price_to_pay_aggregation' => 'sumPriceToPayAggregation',
        'sumPriceToPayAggregation' => 'sumPriceToPayAggregation',
        'SumPriceToPayAggregation' => 'sumPriceToPayAggregation',
        'sales_order_configured_bundle' => 'salesOrderConfiguredBundle',
        'salesOrderConfiguredBundle' => 'salesOrderConfiguredBundle',
        'SalesOrderConfiguredBundle' => 'salesOrderConfiguredBundle',
        'is_returnable' => 'isReturnable',
        'isReturnable' => 'isReturnable',
        'IsReturnable' => 'isReturnable',
        'product_bundle' => 'productBundle',
        'productBundle' => 'productBundle',
        'ProductBundle' => 'productBundle',
        'remuneration_amount' => 'remunerationAmount',
        'remunerationAmount' => 'remunerationAmount',
        'RemunerationAmount' => 'remunerationAmount',
        'refundable_amount' => 'refundableAmount',
        'refundableAmount' => 'refundableAmount',
        'RefundableAmount' => 'refundableAmount',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'sum_price' => 'sumPrice',
        'sumPrice' => 'sumPrice',
        'SumPrice' => 'sumPrice',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'return_policy_messages' => 'returnPolicyMessages',
        'returnPolicyMessages' => 'returnPolicyMessages',
        'ReturnPolicyMessages' => 'returnPolicyMessages',
        'amount' => 'amount',
        'Amount' => 'amount',
        'unit_net_price' => 'unitNetPrice',
        'unitNetPrice' => 'unitNetPrice',
        'UnitNetPrice' => 'unitNetPrice',
        'sum_net_price' => 'sumNetPrice',
        'sumNetPrice' => 'sumNetPrice',
        'SumNetPrice' => 'sumNetPrice',
        'unit_tax_amount_full_aggregation' => 'unitTaxAmountFullAggregation',
        'unitTaxAmountFullAggregation' => 'unitTaxAmountFullAggregation',
        'UnitTaxAmountFullAggregation' => 'unitTaxAmountFullAggregation',
        'sum_tax_amount_full_aggregation' => 'sumTaxAmountFullAggregation',
        'sumTaxAmountFullAggregation' => 'sumTaxAmountFullAggregation',
        'SumTaxAmountFullAggregation' => 'sumTaxAmountFullAggregation',
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
        'tax_rate_average_aggregation' => 'taxRateAverageAggregation',
        'taxRateAverageAggregation' => 'taxRateAverageAggregation',
        'TaxRateAverageAggregation' => 'taxRateAverageAggregation',
        'tax_amount_after_cancellation' => 'taxAmountAfterCancellation',
        'taxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'TaxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'unit_tax_amount' => 'unitTaxAmount',
        'unitTaxAmount' => 'unitTaxAmount',
        'UnitTaxAmount' => 'unitTaxAmount',
        'sum_tax_amount' => 'sumTaxAmount',
        'sumTaxAmount' => 'sumTaxAmount',
        'SumTaxAmount' => 'sumTaxAmount',
        'cart_note' => 'cartNote',
        'cartNote' => 'cartNote',
        'CartNote' => 'cartNote',
        'messages' => 'messages',
        'Messages' => 'messages',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'max_quantity' => 'maxQuantity',
        'maxQuantity' => 'maxQuantity',
        'MaxQuantity' => 'maxQuantity',
        'id_discount_promotion' => 'idDiscountPromotion',
        'idDiscountPromotion' => 'idDiscountPromotion',
        'IdDiscountPromotion' => 'idDiscountPromotion',
        'price_product' => 'priceProduct',
        'priceProduct' => 'priceProduct',
        'PriceProduct' => 'priceProduct',
        'merchant_reference' => 'merchantReference',
        'merchantReference' => 'merchantReference',
        'MerchantReference' => 'merchantReference',
        'forced_unit_gross_price' => 'forcedUnitGrossPrice',
        'forcedUnitGrossPrice' => 'forcedUnitGrossPrice',
        'ForcedUnitGrossPrice' => 'forcedUnitGrossPrice',
        'origin_unit_gross_price' => 'originUnitGrossPrice',
        'originUnitGrossPrice' => 'originUnitGrossPrice',
        'OriginUnitGrossPrice' => 'originUnitGrossPrice',
        'origin_unit_net_price' => 'originUnitNetPrice',
        'originUnitNetPrice' => 'originUnitNetPrice',
        'OriginUnitNetPrice' => 'originUnitNetPrice',
        'images' => 'images',
        'Images' => 'images',
        'metadata' => 'metadata',
        'Metadata' => 'metadata',
        'concrete_attributes' => 'concreteAttributes',
        'concreteAttributes' => 'concreteAttributes',
        'ConcreteAttributes' => 'concreteAttributes',
        'amount_lead_product' => 'amountLeadProduct',
        'amountLeadProduct' => 'amountLeadProduct',
        'AmountLeadProduct' => 'amountLeadProduct',
        'product_packaging_unit' => 'productPackagingUnit',
        'productPackagingUnit' => 'productPackagingUnit',
        'ProductPackagingUnit' => 'productPackagingUnit',
        'id_order_item' => 'idOrderItem',
        'idOrderItem' => 'idOrderItem',
        'IdOrderItem' => 'idOrderItem',
        'is_quantity_splittable' => 'isQuantitySplittable',
        'isQuantitySplittable' => 'isQuantitySplittable',
        'IsQuantitySplittable' => 'isQuantitySplittable',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_KEY_PREFIX => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_key_prefix',
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
        self::NORMALIZABLE_FIELDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'normalizable_fields',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\ProductOptionTransfer',
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
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
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
        self::CONFIGURED_BUNDLE_ITEM => [
            'type' => 'Generated\Shared\Transfer\ConfiguredBundleItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'configured_bundle_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GIFT_CARD_METADATA => [
            'type' => 'Generated\Shared\Transfer\GiftCardMetadataTransfer',
            'type_shim' => null,
            'name_underscore' => 'gift_card_metadata',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::CONFIGURED_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\ConfiguredBundleTransfer',
            'type_shim' => null,
            'name_underscore' => 'configured_bundle',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::ID_SALES_ORDER_ITEM => [
            'type' => 'int',
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
        self::FK_OMS_ORDER_ITEM_STATE => [
            'type' => 'int',
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
        self::PROCESS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'process',
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
        self::VARIETY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'variety',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE => [
            'type' => 'Generated\Shared\Transfer\ItemStateTransfer',
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
        self::STATE_HISTORY => [
            'type' => 'Generated\Shared\Transfer\ItemStateTransfer',
            'type_shim' => null,
            'name_underscore' => 'state_history',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::SALES_ORDER_CONFIGURED_BUNDLE_ITEM => [
            'type' => 'Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer',
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
        self::QUANTITY_SALES_UNIT => [
            'type' => 'Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'quantity_sales_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_SALES_UNIT => [
            'type' => 'Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'amount_sales_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_ITEM_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\SalesOrderItemConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concrete',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SOURCE_UNIT_GROSS_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'source_unit_gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SOURCE_UNIT_NET_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'source_unit_net_price',
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
        self::SALES_ORDER_CONFIGURED_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer',
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
        self::PRODUCT_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_bundle',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REMUNERATION_AMOUNT => [
            'type' => 'int',
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
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
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
        self::RETURN_POLICY_MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'return_policy_messages',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MAX_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'max_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_DISCOUNT_PROMOTION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_discount_promotion',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\PriceProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merchant_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FORCED_UNIT_GROSS_PRICE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'forced_unit_gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORIGIN_UNIT_GROSS_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'origin_unit_gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORIGIN_UNIT_NET_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'origin_unit_net_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGES => [
            'type' => 'Generated\Shared\Transfer\ProductImageTransfer',
            'type_shim' => null,
            'name_underscore' => 'images',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METADATA => [
            'type' => 'Generated\Shared\Transfer\ItemMetadataTransfer',
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
        self::CONCRETE_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'concrete_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_LEAD_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteTransfer',
            'type_shim' => null,
            'name_underscore' => 'amount_lead_product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_PACKAGING_UNIT => [
            'type' => 'Generated\Shared\Transfer\ProductPackagingUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_packaging_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_ORDER_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_QUANTITY_SPLITTABLE => [
            'type' => 'bool',
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
    ];

    /**
     * @module CartPage|CustomerReorderWidget|ProductMeasurementUnitWidget|CartVariant|Cart|Discount|PriceCartConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductDiscontinuedStorage|ProductDiscountConnector|ProductImageCartConnector|ProductPackagingUnit|ProductQuantityStorage|QuickOrder|SalesProductConnector
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
     * @module CartPage|CustomerReorderWidget|ProductMeasurementUnitWidget|CartVariant|Cart|Discount|PriceCartConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductDiscontinuedStorage|ProductDiscountConnector|ProductImageCartConnector|ProductPackagingUnit|ProductQuantityStorage|QuickOrder|SalesProductConnector
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @module CartPage|CustomerReorderWidget|ProductMeasurementUnitWidget|CartVariant|Cart|Discount|PriceCartConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductDiscontinuedStorage|ProductDiscountConnector|ProductImageCartConnector|ProductPackagingUnit|ProductQuantityStorage|QuickOrder|SalesProductConnector
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
     * @module CartPage|CustomerReorderWidget|ProductMeasurementUnitWidget|CartVariant|Cart|Discount|PriceCartConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductDiscontinuedStorage|ProductDiscountConnector|ProductImageCartConnector|ProductPackagingUnit|ProductQuantityStorage|QuickOrder|SalesProductConnector
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
     * @module CartPage|CustomerReorderWidget|ProductMeasurementUnitWidget|CartVariant|Cart|Discount|PriceCartConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductDiscontinuedStorage|ProductDiscountConnector|ProductImageCartConnector|ProductPackagingUnit|ProductQuantityStorage|QuickOrder|SalesProductConnector
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
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|CustomerReorderWidget|PersistentCartSharePage|ProductBundleWidget|QuickOrderPage|SalesConfigurableBundleWidget|SalesProductBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|CartNote|CartVariant|Cart|CartsRestApi|CheckoutRestApi|Checkout|DiscountPromotion|DiscountPromotionsRestApi|Discount|Merchant|Oms|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedStorage|ProductDiscontinued|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|QuickOrder|SalesProductConnector|SalesQuantity|SalesSplit|Sales|SharedCart|Shipment|ShipmentsRestApi|ShoppingListNote|ShoppingList|TaxProductConnector|Tax
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
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|CustomerReorderWidget|PersistentCartSharePage|ProductBundleWidget|QuickOrderPage|SalesConfigurableBundleWidget|SalesProductBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|CartNote|CartVariant|Cart|CartsRestApi|CheckoutRestApi|Checkout|DiscountPromotion|DiscountPromotionsRestApi|Discount|Merchant|Oms|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedStorage|ProductDiscontinued|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|QuickOrder|SalesProductConnector|SalesQuantity|SalesSplit|Sales|SharedCart|Shipment|ShipmentsRestApi|ShoppingListNote|ShoppingList|TaxProductConnector|Tax
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|CustomerReorderWidget|PersistentCartSharePage|ProductBundleWidget|QuickOrderPage|SalesConfigurableBundleWidget|SalesProductBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|CartNote|CartVariant|Cart|CartsRestApi|CheckoutRestApi|Checkout|DiscountPromotion|DiscountPromotionsRestApi|Discount|Merchant|Oms|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedStorage|ProductDiscontinued|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|QuickOrder|SalesProductConnector|SalesQuantity|SalesSplit|Sales|SharedCart|Shipment|ShipmentsRestApi|ShoppingListNote|ShoppingList|TaxProductConnector|Tax
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
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|CustomerReorderWidget|PersistentCartSharePage|ProductBundleWidget|QuickOrderPage|SalesConfigurableBundleWidget|SalesProductBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|CartNote|CartVariant|Cart|CartsRestApi|CheckoutRestApi|Checkout|DiscountPromotion|DiscountPromotionsRestApi|Discount|Merchant|Oms|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedStorage|ProductDiscontinued|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|QuickOrder|SalesProductConnector|SalesQuantity|SalesSplit|Sales|SharedCart|Shipment|ShipmentsRestApi|ShoppingListNote|ShoppingList|TaxProductConnector|Tax
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
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|CustomerReorderWidget|PersistentCartSharePage|ProductBundleWidget|QuickOrderPage|SalesConfigurableBundleWidget|SalesProductBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|CartNote|CartVariant|Cart|CartsRestApi|CheckoutRestApi|Checkout|DiscountPromotion|DiscountPromotionsRestApi|Discount|Merchant|Oms|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedStorage|ProductDiscontinued|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|QuickOrder|SalesProductConnector|SalesQuantity|SalesSplit|Sales|SharedCart|Shipment|ShipmentsRestApi|ShoppingListNote|ShoppingList|TaxProductConnector|Tax
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
     * @module CartPage|ProductCartConnector|ProductUrlCartConnector
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module CartPage|ProductCartConnector|ProductUrlCartConnector
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module CartPage|ProductCartConnector|ProductUrlCartConnector
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module CartPage|ProductCartConnector|ProductUrlCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module CartPage|ProductCartConnector|ProductUrlCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module CartPage|QuickOrderPage|Cart|ProductBundle|SharedCart|ShoppingListNote
     *
     * @param string|null $groupKeyPrefix
     *
     * @return $this
     */
    public function setGroupKeyPrefix($groupKeyPrefix)
    {
        $this->groupKeyPrefix = $groupKeyPrefix;
        $this->modifiedProperties[self::GROUP_KEY_PREFIX] = true;

        return $this;
    }

    /**
     * @module CartPage|QuickOrderPage|Cart|ProductBundle|SharedCart|ShoppingListNote
     *
     * @return string|null
     */
    public function getGroupKeyPrefix()
    {
        return $this->groupKeyPrefix;
    }

    /**
     * @module CartPage|QuickOrderPage|Cart|ProductBundle|SharedCart|ShoppingListNote
     *
     * @param string|null $groupKeyPrefix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupKeyPrefixOrFail($groupKeyPrefix)
    {
        if ($groupKeyPrefix === null) {
            $this->throwNullValueException(static::GROUP_KEY_PREFIX);
        }

        return $this->setGroupKeyPrefix($groupKeyPrefix);
    }

    /**
     * @module CartPage|QuickOrderPage|Cart|ProductBundle|SharedCart|ShoppingListNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupKeyPrefixOrFail()
    {
        if ($this->groupKeyPrefix === null) {
            $this->throwNullValueException(static::GROUP_KEY_PREFIX);
        }

        return $this->groupKeyPrefix;
    }

    /**
     * @module CartPage|QuickOrderPage|Cart|ProductBundle|SharedCart|ShoppingListNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupKeyPrefix()
    {
        $this->assertPropertyIsSet(self::GROUP_KEY_PREFIX);

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|QuickOrderPage|SalesConfigurableBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|Calculation|Cart|CartsRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|DiscountPromotion|DiscountPromotionsRestApi|Discount|Oms|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductPackagingUnitStorage|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|SalesConfigurableBundle|SalesQuantity|SalesSplit|Sales|ShipmentsRestApi|ShoppingList
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
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|QuickOrderPage|SalesConfigurableBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|Calculation|Cart|CartsRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|DiscountPromotion|DiscountPromotionsRestApi|Discount|Oms|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductPackagingUnitStorage|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|SalesConfigurableBundle|SalesQuantity|SalesSplit|Sales|ShipmentsRestApi|ShoppingList
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|QuickOrderPage|SalesConfigurableBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|Calculation|Cart|CartsRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|DiscountPromotion|DiscountPromotionsRestApi|Discount|Oms|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductPackagingUnitStorage|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|SalesConfigurableBundle|SalesQuantity|SalesSplit|Sales|ShipmentsRestApi|ShoppingList
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
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|QuickOrderPage|SalesConfigurableBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|Calculation|Cart|CartsRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|DiscountPromotion|DiscountPromotionsRestApi|Discount|Oms|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductPackagingUnitStorage|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|SalesConfigurableBundle|SalesQuantity|SalesSplit|Sales|ShipmentsRestApi|ShoppingList
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
     * @module CartPage|CheckoutPage|ConfigurableBundlePage|CustomerPage|QuickOrderPage|SalesConfigurableBundleWidget|SalesReturnPage|AvailabilityCartConnector|Availability|Calculation|Cart|CartsRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|DiscountPromotion|DiscountPromotionsRestApi|Discount|Oms|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductPackagingUnitStorage|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|SalesConfigurableBundle|SalesQuantity|SalesSplit|Sales|ShipmentsRestApi|ShoppingList
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
     * @module CartPage|Cart|ProductQuantity
     *
     * @param string[]|null $normalizableFields
     *
     * @return $this
     */
    public function setNormalizableFields(array $normalizableFields = null)
    {
        if ($normalizableFields === null) {
            $normalizableFields = [];
        }

        $this->normalizableFields = $normalizableFields;
        $this->modifiedProperties[self::NORMALIZABLE_FIELDS] = true;

        return $this;
    }

    /**
     * @module CartPage|Cart|ProductQuantity
     *
     * @return string[]
     */
    public function getNormalizableFields()
    {
        return $this->normalizableFields;
    }

    /**
     * @module CartPage|Cart|ProductQuantity
     *
     * @param string $normalizableField
     *
     * @return $this
     */
    public function addNormalizableField($normalizableField)
    {
        $this->normalizableFields[] = $normalizableField;
        $this->modifiedProperties[self::NORMALIZABLE_FIELDS] = true;

        return $this;
    }

    /**
     * @module CartPage|Cart|ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNormalizableFields()
    {
        $this->assertPropertyIsSet(self::NORMALIZABLE_FIELDS);

        return $this;
    }

    /**
     * @module CartPage|CustomerReorderWidget|SalesReturnPage|Calculation|Discount|ProductBundle|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|Refund|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector|Tax
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[] $productOptions
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
     * @module CartPage|CustomerReorderWidget|SalesReturnPage|Calculation|Discount|ProductBundle|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|Refund|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector|Tax
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[]
     */
    public function getProductOptions()
    {
        return $this->productOptions;
    }

    /**
     * @module CartPage|CustomerReorderWidget|SalesReturnPage|Calculation|Discount|ProductBundle|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|Refund|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector|Tax
     *
     * @param \Generated\Shared\Transfer\ProductOptionTransfer $productOption
     *
     * @return $this
     */
    public function addProductOption(ProductOptionTransfer $productOption)
    {
        $this->productOptions[] = $productOption;
        $this->modifiedProperties[self::PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module CartPage|CustomerReorderWidget|SalesReturnPage|Calculation|Discount|ProductBundle|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|Refund|SalesConfigurableBundle|Sales|ShoppingListProductOptionConnector|Tax
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
     * @module CartPage|CustomerReorderWidget|QuickOrderPage|CartVariant|CategoryDiscountConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductLabelDiscountConnector|ProductOption|ProductRelationStorage|ProductRelation|QuickOrder|SalesProductConnector|TaxProductConnector|Tax
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module CartPage|CustomerReorderWidget|QuickOrderPage|CartVariant|CategoryDiscountConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductLabelDiscountConnector|ProductOption|ProductRelationStorage|ProductRelation|QuickOrder|SalesProductConnector|TaxProductConnector|Tax
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module CartPage|CustomerReorderWidget|QuickOrderPage|CartVariant|CategoryDiscountConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductLabelDiscountConnector|ProductOption|ProductRelationStorage|ProductRelation|QuickOrder|SalesProductConnector|TaxProductConnector|Tax
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module CartPage|CustomerReorderWidget|QuickOrderPage|CartVariant|CategoryDiscountConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductLabelDiscountConnector|ProductOption|ProductRelationStorage|ProductRelation|QuickOrder|SalesProductConnector|TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module CartPage|CustomerReorderWidget|QuickOrderPage|CartVariant|CategoryDiscountConnector|PriceProductStorage|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductLabelDiscountConnector|ProductOption|ProductRelationStorage|ProductRelation|QuickOrder|SalesProductConnector|TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module CartPage|ConfigurableBundleWidget|CustomerPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCart|ConfigurableBundlesRestApi|DiscountPromotion|Discount|PersistentCart|ProductBundleCartsRestApi|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|SalesSplit|Sales|ShipmentGui|ShipmentsRestApi|ShoppingListProductOptionConnector
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
     * @module CartPage|ConfigurableBundleWidget|CustomerPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCart|ConfigurableBundlesRestApi|DiscountPromotion|Discount|PersistentCart|ProductBundleCartsRestApi|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|SalesSplit|Sales|ShipmentGui|ShipmentsRestApi|ShoppingListProductOptionConnector
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module CartPage|ConfigurableBundleWidget|CustomerPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCart|ConfigurableBundlesRestApi|DiscountPromotion|Discount|PersistentCart|ProductBundleCartsRestApi|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|SalesSplit|Sales|ShipmentGui|ShipmentsRestApi|ShoppingListProductOptionConnector
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
     * @module CartPage|ConfigurableBundleWidget|CustomerPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCart|ConfigurableBundlesRestApi|DiscountPromotion|Discount|PersistentCart|ProductBundleCartsRestApi|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|SalesSplit|Sales|ShipmentGui|ShipmentsRestApi|ShoppingListProductOptionConnector
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
     * @module CartPage|ConfigurableBundleWidget|CustomerPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCart|ConfigurableBundlesRestApi|DiscountPromotion|Discount|PersistentCart|ProductBundleCartsRestApi|ProductBundle|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|SalesSplit|Sales|ShipmentGui|ShipmentsRestApi|ShoppingListProductOptionConnector
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
     * @module CartPage|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfiguredBundleItemTransfer|null $configuredBundleItem
     *
     * @return $this
     */
    public function setConfiguredBundleItem(ConfiguredBundleItemTransfer $configuredBundleItem = null)
    {
        $this->configuredBundleItem = $configuredBundleItem;
        $this->modifiedProperties[self::CONFIGURED_BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module CartPage|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\ConfiguredBundleItemTransfer|null
     */
    public function getConfiguredBundleItem()
    {
        return $this->configuredBundleItem;
    }

    /**
     * @module CartPage|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfiguredBundleItemTransfer $configuredBundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguredBundleItemOrFail(ConfiguredBundleItemTransfer $configuredBundleItem)
    {
        return $this->setConfiguredBundleItem($configuredBundleItem);
    }

    /**
     * @module CartPage|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ConfiguredBundleItemTransfer
     */
    public function getConfiguredBundleItemOrFail()
    {
        if ($this->configuredBundleItem === null) {
            $this->throwNullValueException(static::CONFIGURED_BUNDLE_ITEM);
        }

        return $this->configuredBundleItem;
    }

    /**
     * @module CartPage|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguredBundleItem()
    {
        $this->assertPropertyIsSet(self::CONFIGURED_BUNDLE_ITEM);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\GiftCardMetadataTransfer|null $giftCardMetadata
     *
     * @return $this
     */
    public function setGiftCardMetadata(GiftCardMetadataTransfer $giftCardMetadata = null)
    {
        $this->giftCardMetadata = $giftCardMetadata;
        $this->modifiedProperties[self::GIFT_CARD_METADATA] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\GiftCardMetadataTransfer|null
     */
    public function getGiftCardMetadata()
    {
        return $this->giftCardMetadata;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\GiftCardMetadataTransfer $giftCardMetadata
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGiftCardMetadataOrFail(GiftCardMetadataTransfer $giftCardMetadata)
    {
        return $this->setGiftCardMetadata($giftCardMetadata);
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GiftCardMetadataTransfer
     */
    public function getGiftCardMetadataOrFail()
    {
        if ($this->giftCardMetadata === null) {
            $this->throwNullValueException(static::GIFT_CARD_METADATA);
        }

        return $this->giftCardMetadata;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGiftCardMetadata()
    {
        $this->assertPropertyIsSet(self::GIFT_CARD_METADATA);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApprovalShipmentConnector|QuoteRequest|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApprovalShipmentConnector|QuoteRequest|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApprovalShipmentConnector|QuoteRequest|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApprovalShipmentConnector|QuoteRequest|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApprovalShipmentConnector|QuoteRequest|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector
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
     * @module CheckoutPage|CustomerPage|Calculation|ProductCartConnector|ProductOption|SalesSplit|Sales|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|ProductCartConnector|ProductOption|SalesSplit|Sales|TaxProductConnector|Tax
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|ProductCartConnector|ProductOption|SalesSplit|Sales|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|ProductCartConnector|ProductOption|SalesSplit|Sales|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|ProductCartConnector|ProductOption|SalesSplit|Sales|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductOptionCartConnector|ProductOption|Sales|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductOptionCartConnector|ProductOption|Sales|Tax
     *
     * @return int|null
     */
    public function getSumGrossPrice()
    {
        return $this->sumGrossPrice;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Cart|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductOptionCartConnector|ProductOption|Sales|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductOptionCartConnector|ProductOption|Sales|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductOptionCartConnector|ProductOption|Sales|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|CategoryDiscountConnector|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesOrderThreshold|Sales|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|CategoryDiscountConnector|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesOrderThreshold|Sales|Tax
     *
     * @return int|null
     */
    public function getUnitGrossPrice()
    {
        return $this->unitGrossPrice;
    }

    /**
     * @module CheckoutPage|CustomerPage|Calculation|Cart|CategoryDiscountConnector|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesOrderThreshold|Sales|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|CategoryDiscountConnector|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesOrderThreshold|Sales|Tax
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
     * @module CheckoutPage|CustomerPage|Calculation|Cart|CategoryDiscountConnector|Checkout|DiscountPromotion|DiscountPromotionsRestApi|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductOption|ProductPackagingUnit|SalesOrderThreshold|Sales|Tax
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
     * @module CheckoutPage|ConfigurableBundlePage|CustomerPage|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Oms|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOptionCartConnector|ProductOption|SalesSplit|Sales|Tax
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
     * @module CheckoutPage|ConfigurableBundlePage|CustomerPage|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Oms|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOptionCartConnector|ProductOption|SalesSplit|Sales|Tax
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CheckoutPage|ConfigurableBundlePage|CustomerPage|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Oms|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOptionCartConnector|ProductOption|SalesSplit|Sales|Tax
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
     * @module CheckoutPage|ConfigurableBundlePage|CustomerPage|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Oms|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOptionCartConnector|ProductOption|SalesSplit|Sales|Tax
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
     * @module CheckoutPage|ConfigurableBundlePage|CustomerPage|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Oms|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOptionCartConnector|ProductOption|SalesSplit|Sales|Tax
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfiguredBundleTransfer|null $configuredBundle
     *
     * @return $this
     */
    public function setConfiguredBundle(ConfiguredBundleTransfer $configuredBundle = null)
    {
        $this->configuredBundle = $configuredBundle;
        $this->modifiedProperties[self::CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\ConfiguredBundleTransfer|null
     */
    public function getConfiguredBundle()
    {
        return $this->configuredBundle;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfiguredBundleTransfer $configuredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguredBundleOrFail(ConfiguredBundleTransfer $configuredBundle)
    {
        return $this->setConfiguredBundle($configuredBundle);
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ConfiguredBundleTransfer
     */
    public function getConfiguredBundleOrFail()
    {
        if ($this->configuredBundle === null) {
            $this->throwNullValueException(static::CONFIGURED_BUNDLE);
        }

        return $this->configuredBundle;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguredBundle()
    {
        $this->assertPropertyIsSet(self::CONFIGURED_BUNDLE);

        return $this;
    }

    /**
     * @module ConfigurableBundleWidget|SalesReturnPage|Calculation|MerchantRelationshipSalesOrderThreshold|ProductBundle|Sales
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
     * @module ConfigurableBundleWidget|SalesReturnPage|Calculation|MerchantRelationshipSalesOrderThreshold|ProductBundle|Sales
     *
     * @return int|null
     */
    public function getSumSubtotalAggregation()
    {
        return $this->sumSubtotalAggregation;
    }

    /**
     * @module ConfigurableBundleWidget|SalesReturnPage|Calculation|MerchantRelationshipSalesOrderThreshold|ProductBundle|Sales
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
     * @module ConfigurableBundleWidget|SalesReturnPage|Calculation|MerchantRelationshipSalesOrderThreshold|ProductBundle|Sales
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
     * @module ConfigurableBundleWidget|SalesReturnPage|Calculation|MerchantRelationshipSalesOrderThreshold|ProductBundle|Sales
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
     * @module ConfigurableBundleWidget|SalesConfigurableBundleWidget|SalesReturnPage|Calculation|Cart|DiscountPromotion|Discount|Oms|ProductBundle|Sales|Tax
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
     * @module ConfigurableBundleWidget|SalesConfigurableBundleWidget|SalesReturnPage|Calculation|Cart|DiscountPromotion|Discount|Oms|ProductBundle|Sales|Tax
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @module ConfigurableBundleWidget|SalesConfigurableBundleWidget|SalesReturnPage|Calculation|Cart|DiscountPromotion|Discount|Oms|ProductBundle|Sales|Tax
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
     * @module ConfigurableBundleWidget|SalesConfigurableBundleWidget|SalesReturnPage|Calculation|Cart|DiscountPromotion|Discount|Oms|ProductBundle|Sales|Tax
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
     * @module ConfigurableBundleWidget|SalesConfigurableBundleWidget|SalesReturnPage|Calculation|Cart|DiscountPromotion|Discount|Oms|ProductBundle|Sales|Tax
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
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|SalesSplit|Sales|ShipmentGui|Shipment
     *
     * @param int|null $idSalesOrderItem
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
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|SalesSplit|Sales|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getIdSalesOrderItem()
    {
        return $this->idSalesOrderItem;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|SalesSplit|Sales|ShipmentGui|Shipment
     *
     * @param int|null $idSalesOrderItem
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
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|SalesSplit|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderItemOrFail()
    {
        if ($this->idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->idSalesOrderItem;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|SalesSplit|Sales|ShipmentGui|Shipment
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
     * @module CustomerPage|SalesReturnPage|Oms|SalesProductConnector|SalesReturnGui|SalesSplit|Sales
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
     * @module CustomerPage|SalesReturnPage|Oms|SalesProductConnector|SalesReturnGui|SalesSplit|Sales
     *
     * @return int|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Oms|SalesProductConnector|SalesReturnGui|SalesSplit|Sales
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
     * @module CustomerPage|SalesReturnPage|Oms|SalesProductConnector|SalesReturnGui|SalesSplit|Sales
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
     * @module CustomerPage|SalesReturnPage|Oms|SalesProductConnector|SalesReturnGui|SalesSplit|Sales
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
     * @module CustomerPage|Sales
     *
     * @param int|null $fkOmsOrderItemState
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
     * @module CustomerPage|Sales
     *
     * @return int|null
     */
    public function getFkOmsOrderItemState()
    {
        return $this->fkOmsOrderItemState;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param int|null $fkOmsOrderItemState
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
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkOmsOrderItemStateOrFail()
    {
        if ($this->fkOmsOrderItemState === null) {
            $this->throwNullValueException(static::FK_OMS_ORDER_ITEM_STATE);
        }

        return $this->fkOmsOrderItemState;
    }

    /**
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Oms|Sales
     *
     * @param string|null $process
     *
     * @return $this
     */
    public function setProcess($process)
    {
        $this->process = $process;
        $this->modifiedProperties[self::PROCESS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|Sales
     *
     * @return string|null
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * @module CustomerPage|Oms|Sales
     *
     * @param string|null $process
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProcessOrFail($process)
    {
        if ($process === null) {
            $this->throwNullValueException(static::PROCESS);
        }

        return $this->setProcess($process);
    }

    /**
     * @module CustomerPage|Oms|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProcessOrFail()
    {
        if ($this->process === null) {
            $this->throwNullValueException(static::PROCESS);
        }

        return $this->process;
    }

    /**
     * @module CustomerPage|Oms|Sales
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
     * @module CustomerPage|Calculation|CategoryDiscountConnector|DiscountCalculationConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|Sales
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
     * @module CustomerPage|Calculation|CategoryDiscountConnector|DiscountCalculationConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    public function getCalculatedDiscounts()
    {
        return $this->calculatedDiscounts;
    }

    /**
     * @module CustomerPage|Calculation|CategoryDiscountConnector|DiscountCalculationConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|Sales
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
     * @module CustomerPage|Calculation|CategoryDiscountConnector|DiscountCalculationConnector|DiscountPromotion|Discount|ProductDiscountConnector|ProductLabelDiscountConnector|Sales
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
     * @module CustomerPage|Sales
     *
     * @param string|null $variety
     *
     * @return $this
     */
    public function setVariety($variety)
    {
        $this->variety = $variety;
        $this->modifiedProperties[self::VARIETY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $variety
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVarietyOrFail($variety)
    {
        if ($variety === null) {
            $this->throwNullValueException(static::VARIETY);
        }

        return $this->setVariety($variety);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVarietyOrFail()
    {
        if ($this->variety === null) {
            $this->throwNullValueException(static::VARIETY);
        }

        return $this->variety;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVariety()
    {
        $this->assertPropertyIsSet(self::VARIETY);

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @param \Generated\Shared\Transfer\ItemStateTransfer|null $state
     *
     * @return $this
     */
    public function setState(ItemStateTransfer $state = null)
    {
        $this->state = $state;
        $this->modifiedProperties[self::STATE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @return \Generated\Shared\Transfer\ItemStateTransfer|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @param \Generated\Shared\Transfer\ItemStateTransfer $state
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateOrFail(ItemStateTransfer $state)
    {
        return $this->setState($state);
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemStateTransfer
     */
    public function getStateOrFail()
    {
        if ($this->state === null) {
            $this->throwNullValueException(static::STATE);
        }

        return $this->state;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
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
     * @module CustomerPage|SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales|Tax
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
     * @module CustomerPage|SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales|Tax
     *
     * @return int|null
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales|Tax
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
     * @module CustomerPage|SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales|Tax
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
     * @module CustomerPage|SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales|Tax
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
     * @module CustomerPage|Oms|Sales
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemStateTransfer[] $stateHistory
     *
     * @return $this
     */
    public function setStateHistory(ArrayObject $stateHistory)
    {
        $this->stateHistory = $stateHistory;
        $this->modifiedProperties[self::STATE_HISTORY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemStateTransfer[]
     */
    public function getStateHistory()
    {
        return $this->stateHistory;
    }

    /**
     * @module CustomerPage|Oms|Sales
     *
     * @param \Generated\Shared\Transfer\ItemStateTransfer $stateHistory
     *
     * @return $this
     */
    public function addStateHistory(ItemStateTransfer $stateHistory)
    {
        $this->stateHistory[] = $stateHistory;
        $this->modifiedProperties[self::STATE_HISTORY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStateHistory()
    {
        $this->assertCollectionPropertyIsSet(self::STATE_HISTORY);

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Calculation|Sales
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
     * @module CustomerPage|CustomerReorderWidget|Calculation|Sales
     *
     * @return bool|null
     */
    public function getIsOrdered()
    {
        return $this->isOrdered;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Calculation|Sales
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
     * @module CustomerPage|CustomerReorderWidget|Calculation|Sales
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
     * @module CustomerPage|CustomerReorderWidget|Calculation|Sales
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|CartsRestApi|ProductBundle|ProductBundlesRestApi|ProductRelationStorage|ProductRelation|SalesQuantity|ShipmentsRestApi
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|CartsRestApi|ProductBundle|ProductBundlesRestApi|ProductRelationStorage|ProductRelation|SalesQuantity|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getRelatedBundleItemIdentifier()
    {
        return $this->relatedBundleItemIdentifier;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|CartsRestApi|ProductBundle|ProductBundlesRestApi|ProductRelationStorage|ProductRelation|SalesQuantity|ShipmentsRestApi
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|CartsRestApi|ProductBundle|ProductBundlesRestApi|ProductRelationStorage|ProductRelation|SalesQuantity|ShipmentsRestApi
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|CartsRestApi|ProductBundle|ProductBundlesRestApi|ProductRelationStorage|ProductRelation|SalesQuantity|ShipmentsRestApi
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|ProductBundle|ProductBundlesRestApi|ShipmentGui|ShipmentsRestApi
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|ProductBundle|ProductBundlesRestApi|ShipmentGui|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getBundleItemIdentifier()
    {
        return $this->bundleItemIdentifier;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|ProductBundle|ProductBundlesRestApi|ShipmentGui|ShipmentsRestApi
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|ProductBundle|ProductBundlesRestApi|ShipmentGui|ShipmentsRestApi
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
     * @module CustomerPage|CustomerReorderWidget|SalesProductBundleWidget|ProductBundle|ProductBundlesRestApi|ShipmentGui|ShipmentsRestApi
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
     * @module CustomerReorderWidget|SalesReturnPage|OrdersRestApi|SalesReturn|SalesReturnsRestApi|ShipmentsRestApi
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
     * @module CustomerReorderWidget|SalesReturnPage|OrdersRestApi|SalesReturn|SalesReturnsRestApi|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CustomerReorderWidget|SalesReturnPage|OrdersRestApi|SalesReturn|SalesReturnsRestApi|ShipmentsRestApi
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
     * @module CustomerReorderWidget|SalesReturnPage|OrdersRestApi|SalesReturn|SalesReturnsRestApi|ShipmentsRestApi
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
     * @module CustomerReorderWidget|SalesReturnPage|OrdersRestApi|SalesReturn|SalesReturnsRestApi|ShipmentsRestApi
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
     * @module CustomerReorderWidget|SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer|null $salesOrderConfiguredBundleItem
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundleItem(SalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem = null)
    {
        $this->salesOrderConfiguredBundleItem = $salesOrderConfiguredBundleItem;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer|null
     */
    public function getSalesOrderConfiguredBundleItem()
    {
        return $this->salesOrderConfiguredBundleItem;
    }

    /**
     * @module CustomerReorderWidget|SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundleItemOrFail(SalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem)
    {
        return $this->setSalesOrderConfiguredBundleItem($salesOrderConfiguredBundleItem);
    }

    /**
     * @module CustomerReorderWidget|SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer
     */
    public function getSalesOrderConfiguredBundleItemOrFail()
    {
        if ($this->salesOrderConfiguredBundleItem === null) {
            $this->throwNullValueException(static::SALES_ORDER_CONFIGURED_BUNDLE_ITEM);
        }

        return $this->salesOrderConfiguredBundleItem;
    }

    /**
     * @module CustomerReorderWidget|SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle
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
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer|null $quantitySalesUnit
     *
     * @return $this
     */
    public function setQuantitySalesUnit(ProductMeasurementSalesUnitTransfer $quantitySalesUnit = null)
    {
        $this->quantitySalesUnit = $quantitySalesUnit;
        $this->modifiedProperties[self::QUANTITY_SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer|null
     */
    public function getQuantitySalesUnit()
    {
        return $this->quantitySalesUnit;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer $quantitySalesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantitySalesUnitOrFail(ProductMeasurementSalesUnitTransfer $quantitySalesUnit)
    {
        return $this->setQuantitySalesUnit($quantitySalesUnit);
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer
     */
    public function getQuantitySalesUnitOrFail()
    {
        if ($this->quantitySalesUnit === null) {
            $this->throwNullValueException(static::QUANTITY_SALES_UNIT);
        }

        return $this->quantitySalesUnit;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantitySalesUnit()
    {
        $this->assertPropertyIsSet(self::QUANTITY_SALES_UNIT);

        return $this;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer|null $amountSalesUnit
     *
     * @return $this
     */
    public function setAmountSalesUnit(ProductMeasurementSalesUnitTransfer $amountSalesUnit = null)
    {
        $this->amountSalesUnit = $amountSalesUnit;
        $this->modifiedProperties[self::AMOUNT_SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer|null
     */
    public function getAmountSalesUnit()
    {
        return $this->amountSalesUnit;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer $amountSalesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountSalesUnitOrFail(ProductMeasurementSalesUnitTransfer $amountSalesUnit)
    {
        return $this->setAmountSalesUnit($amountSalesUnit);
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer
     */
    public function getAmountSalesUnitOrFail()
    {
        if ($this->amountSalesUnit === null) {
            $this->throwNullValueException(static::AMOUNT_SALES_UNIT);
        }

        return $this->amountSalesUnit;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountSalesUnit()
    {
        $this->assertPropertyIsSet(self::AMOUNT_SALES_UNIT);

        return $this;
    }

    /**
     * @module CustomerReorderWidget
     *
     * @param \Generated\Shared\Transfer\SalesOrderItemConfigurationTransfer|null $salesOrderItemConfiguration
     *
     * @return $this
     */
    public function setSalesOrderItemConfiguration(SalesOrderItemConfigurationTransfer $salesOrderItemConfiguration = null)
    {
        $this->salesOrderItemConfiguration = $salesOrderItemConfiguration;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget
     *
     * @return \Generated\Shared\Transfer\SalesOrderItemConfigurationTransfer|null
     */
    public function getSalesOrderItemConfiguration()
    {
        return $this->salesOrderItemConfiguration;
    }

    /**
     * @module CustomerReorderWidget
     *
     * @param \Generated\Shared\Transfer\SalesOrderItemConfigurationTransfer $salesOrderItemConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderItemConfigurationOrFail(SalesOrderItemConfigurationTransfer $salesOrderItemConfiguration)
    {
        return $this->setSalesOrderItemConfiguration($salesOrderItemConfiguration);
    }

    /**
     * @module CustomerReorderWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SalesOrderItemConfigurationTransfer
     */
    public function getSalesOrderItemConfigurationOrFail()
    {
        if ($this->salesOrderItemConfiguration === null) {
            $this->throwNullValueException(static::SALES_ORDER_ITEM_CONFIGURATION);
        }

        return $this->salesOrderItemConfiguration;
    }

    /**
     * @module CustomerReorderWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemConfiguration()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_CONFIGURATION);

        return $this;
    }

    /**
     * @module QuickOrderPage|ProductCartConnector|ProductPackagingUnitStorage
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer|null $productConcrete
     *
     * @return $this
     */
    public function setProductConcrete(ProductConcreteTransfer $productConcrete = null)
    {
        $this->productConcrete = $productConcrete;
        $this->modifiedProperties[self::PRODUCT_CONCRETE] = true;

        return $this;
    }

    /**
     * @module QuickOrderPage|ProductCartConnector|ProductPackagingUnitStorage
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    public function getProductConcrete()
    {
        return $this->productConcrete;
    }

    /**
     * @module QuickOrderPage|ProductCartConnector|ProductPackagingUnitStorage
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcrete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteOrFail(ProductConcreteTransfer $productConcrete)
    {
        return $this->setProductConcrete($productConcrete);
    }

    /**
     * @module QuickOrderPage|ProductCartConnector|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function getProductConcreteOrFail()
    {
        if ($this->productConcrete === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE);
        }

        return $this->productConcrete;
    }

    /**
     * @module QuickOrderPage|ProductCartConnector|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcrete()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @param int|null $sourceUnitGrossPrice
     *
     * @return $this
     */
    public function setSourceUnitGrossPrice($sourceUnitGrossPrice)
    {
        $this->sourceUnitGrossPrice = $sourceUnitGrossPrice;
        $this->modifiedProperties[self::SOURCE_UNIT_GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @return int|null
     */
    public function getSourceUnitGrossPrice()
    {
        return $this->sourceUnitGrossPrice;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @param int|null $sourceUnitGrossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceUnitGrossPriceOrFail($sourceUnitGrossPrice)
    {
        if ($sourceUnitGrossPrice === null) {
            $this->throwNullValueException(static::SOURCE_UNIT_GROSS_PRICE);
        }

        return $this->setSourceUnitGrossPrice($sourceUnitGrossPrice);
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSourceUnitGrossPriceOrFail()
    {
        if ($this->sourceUnitGrossPrice === null) {
            $this->throwNullValueException(static::SOURCE_UNIT_GROSS_PRICE);
        }

        return $this->sourceUnitGrossPrice;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourceUnitGrossPrice()
    {
        $this->assertPropertyIsSet(self::SOURCE_UNIT_GROSS_PRICE);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @param int|null $sourceUnitNetPrice
     *
     * @return $this
     */
    public function setSourceUnitNetPrice($sourceUnitNetPrice)
    {
        $this->sourceUnitNetPrice = $sourceUnitNetPrice;
        $this->modifiedProperties[self::SOURCE_UNIT_NET_PRICE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @return int|null
     */
    public function getSourceUnitNetPrice()
    {
        return $this->sourceUnitNetPrice;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @param int|null $sourceUnitNetPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceUnitNetPriceOrFail($sourceUnitNetPrice)
    {
        if ($sourceUnitNetPrice === null) {
            $this->throwNullValueException(static::SOURCE_UNIT_NET_PRICE);
        }

        return $this->setSourceUnitNetPrice($sourceUnitNetPrice);
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSourceUnitNetPriceOrFail()
    {
        if ($this->sourceUnitNetPrice === null) {
            $this->throwNullValueException(static::SOURCE_UNIT_NET_PRICE);
        }

        return $this->sourceUnitNetPrice;
    }

    /**
     * @module QuoteRequestAgentPage|PriceCartConnector|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourceUnitNetPrice()
    {
        $this->assertPropertyIsSet(self::SOURCE_UNIT_NET_PRICE);

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesConfigurableBundleWidget|Calculation|ProductBundle|Sales|Tax
     *
     * @return int|null
     */
    public function getSumPriceToPayAggregation()
    {
        return $this->sumPriceToPayAggregation;
    }

    /**
     * @module SalesConfigurableBundleWidget|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesConfigurableBundleWidget|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesConfigurableBundleWidget|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle|SalesReturnGui|Sales
     *
     * @param \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer|null $salesOrderConfiguredBundle
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundle(SalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle = null)
    {
        $this->salesOrderConfiguredBundle = $salesOrderConfiguredBundle;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle|SalesReturnGui|Sales
     *
     * @return \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer|null
     */
    public function getSalesOrderConfiguredBundle()
    {
        return $this->salesOrderConfiguredBundle;
    }

    /**
     * @module SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle|SalesReturnGui|Sales
     *
     * @param \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundleOrFail(SalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle)
    {
        return $this->setSalesOrderConfiguredBundle($salesOrderConfiguredBundle);
    }

    /**
     * @module SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle|SalesReturnGui|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer
     */
    public function getSalesOrderConfiguredBundleOrFail()
    {
        if ($this->salesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->salesOrderConfiguredBundle;
    }

    /**
     * @module SalesConfigurableBundleWidget|ConfigurableBundlesRestApi|SalesConfigurableBundle|SalesReturnGui|Sales
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|Sales
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|Sales
     *
     * @return bool|null
     */
    public function getIsReturnable()
    {
        return $this->isReturnable;
    }

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|Sales
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|Sales
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|Sales
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
     * @module SalesProductBundleWidget|ProductBundle|SalesReturnGui
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $productBundle
     *
     * @return $this
     */
    public function setProductBundle(ItemTransfer $productBundle = null)
    {
        $this->productBundle = $productBundle;
        $this->modifiedProperties[self::PRODUCT_BUNDLE] = true;

        return $this;
    }

    /**
     * @module SalesProductBundleWidget|ProductBundle|SalesReturnGui
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getProductBundle()
    {
        return $this->productBundle;
    }

    /**
     * @module SalesProductBundleWidget|ProductBundle|SalesReturnGui
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $productBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductBundleOrFail(ItemTransfer $productBundle)
    {
        return $this->setProductBundle($productBundle);
    }

    /**
     * @module SalesProductBundleWidget|ProductBundle|SalesReturnGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getProductBundleOrFail()
    {
        if ($this->productBundle === null) {
            $this->throwNullValueException(static::PRODUCT_BUNDLE);
        }

        return $this->productBundle;
    }

    /**
     * @module SalesProductBundleWidget|ProductBundle|SalesReturnGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductBundle()
    {
        $this->assertPropertyIsSet(self::PRODUCT_BUNDLE);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $remunerationAmount
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
     * @module SalesReturnPage|SalesReturn
     *
     * @return int|null
     */
    public function getRemunerationAmount()
    {
        return $this->remunerationAmount;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $remunerationAmount
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
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRemunerationAmountOrFail()
    {
        if ($this->remunerationAmount === null) {
            $this->throwNullValueException(static::REMUNERATION_AMOUNT);
        }

        return $this->remunerationAmount;
    }

    /**
     * @module SalesReturnPage|SalesReturn
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
     * @module SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales
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
     * @module SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales
     *
     * @return int|null
     */
    public function getRefundableAmount()
    {
        return $this->refundableAmount;
    }

    /**
     * @module SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales
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
     * @module SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales
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
     * @module SalesReturnPage|Calculation|ProductOption|Refund|SalesReturn|Sales
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
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module SalesReturnPage|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesReturnPage|Calculation|ProductBundle|Sales|Tax
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->sumPrice;
    }

    /**
     * @module SalesReturnPage|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesReturnPage|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesReturnPage|Calculation|ProductBundle|Sales|Tax
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
     * @module SalesReturnPage|OrdersRestApi|SalesReturnGui|Sales
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
     * @module SalesReturnPage|OrdersRestApi|SalesReturnGui|Sales
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module SalesReturnPage|OrdersRestApi|SalesReturnGui|Sales
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
     * @module SalesReturnPage|OrdersRestApi|SalesReturnGui|Sales
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
     * @module SalesReturnPage|OrdersRestApi|SalesReturnGui|Sales
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
     * @module SalesReturnPage|SalesReturn|Sales
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
     * @module SalesReturnPage|SalesReturn|Sales
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module SalesReturnPage|SalesReturn|Sales
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
     * @module SalesReturnPage|SalesReturn|Sales
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
     * @module SalesReturnPage|SalesReturn|Sales
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
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[] $returnPolicyMessages
     *
     * @return $this
     */
    public function setReturnPolicyMessages(ArrayObject $returnPolicyMessages)
    {
        $this->returnPolicyMessages = $returnPolicyMessages;
        $this->modifiedProperties[self::RETURN_POLICY_MESSAGES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    public function getReturnPolicyMessages()
    {
        return $this->returnPolicyMessages;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $returnPolicyMessage
     *
     * @return $this
     */
    public function addReturnPolicyMessage(MessageTransfer $returnPolicyMessage)
    {
        $this->returnPolicyMessages[] = $returnPolicyMessage;
        $this->modifiedProperties[self::RETURN_POLICY_MESSAGES] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReturnPolicyMessages()
    {
        $this->assertCollectionPropertyIsSet(self::RETURN_POLICY_MESSAGES);

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|Availability|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
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
     * @module AvailabilityCartConnector|Availability|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module AvailabilityCartConnector|Availability|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
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
     * @module AvailabilityCartConnector|Availability|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
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
     * @module AvailabilityCartConnector|Availability|ProductMeasurementUnitsRestApi|ProductPackagingUnitStorage|ProductPackagingUnit
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
     * @module Calculation|CategoryDiscountConnector|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|SalesOrderThreshold|Sales
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
     * @module Calculation|CategoryDiscountConnector|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|SalesOrderThreshold|Sales
     *
     * @return int|null
     */
    public function getUnitNetPrice()
    {
        return $this->unitNetPrice;
    }

    /**
     * @module Calculation|CategoryDiscountConnector|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|SalesOrderThreshold|Sales
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
     * @module Calculation|CategoryDiscountConnector|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|SalesOrderThreshold|Sales
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
     * @module Calculation|CategoryDiscountConnector|PriceCartConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|SalesOrderThreshold|Sales
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
     * @module Calculation|PriceCartConnector|ProductBundle|Sales
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
     * @module Calculation|PriceCartConnector|ProductBundle|Sales
     *
     * @return int|null
     */
    public function getSumNetPrice()
    {
        return $this->sumNetPrice;
    }

    /**
     * @module Calculation|PriceCartConnector|ProductBundle|Sales
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
     * @module Calculation|PriceCartConnector|ProductBundle|Sales
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
     * @module Calculation|PriceCartConnector|ProductBundle|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales
     *
     * @return int|null
     */
    public function getUnitTaxAmountFullAggregation()
    {
        return $this->unitTaxAmountFullAggregation;
    }

    /**
     * @module Calculation|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
     *
     * @return int|null
     */
    public function getSumTaxAmountFullAggregation()
    {
        return $this->sumTaxAmountFullAggregation;
    }

    /**
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
     *
     * @return int|null
     */
    public function getUnitSubtotalAggregation()
    {
        return $this->unitSubtotalAggregation;
    }

    /**
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|ProductOption|Sales
     *
     * @return int|null
     */
    public function getUnitProductOptionPriceAggregation()
    {
        return $this->unitProductOptionPriceAggregation;
    }

    /**
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|ProductOption|Sales
     *
     * @return int|null
     */
    public function getSumProductOptionPriceAggregation()
    {
        return $this->sumProductOptionPriceAggregation;
    }

    /**
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|ProductOption|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales
     *
     * @return int|null
     */
    public function getUnitExpensePriceAggregation()
    {
        return $this->unitExpensePriceAggregation;
    }

    /**
     * @module Calculation|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales
     *
     * @return int|null
     */
    public function getSumExpensePriceAggregation()
    {
        return $this->sumExpensePriceAggregation;
    }

    /**
     * @module Calculation|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|Sales
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
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales|Tax
     *
     * @return int|null
     */
    public function getUnitDiscountAmountAggregation()
    {
        return $this->unitDiscountAmountAggregation;
    }

    /**
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales|Tax
     *
     * @return int|null
     */
    public function getSumDiscountAmountAggregation()
    {
        return $this->sumDiscountAmountAggregation;
    }

    /**
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales|Tax
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
     *
     * @return int|null
     */
    public function getUnitDiscountAmountFullAggregation()
    {
        return $this->unitDiscountAmountFullAggregation;
    }

    /**
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
     *
     * @return int|null
     */
    public function getSumDiscountAmountFullAggregation()
    {
        return $this->sumDiscountAmountFullAggregation;
    }

    /**
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
     *
     * @return int|null
     */
    public function getUnitPriceToPayAggregation()
    {
        return $this->unitPriceToPayAggregation;
    }

    /**
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|ProductBundle|Sales
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
     * @module Calculation|Tax
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
     * @module Calculation|Tax
     *
     * @return float|null
     */
    public function getTaxRateAverageAggregation()
    {
        return $this->taxRateAverageAggregation;
    }

    /**
     * @module Calculation|Tax
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
     * @module Calculation|Tax
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
     * @module Calculation|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
     *
     * @return int|null
     */
    public function getUnitTaxAmount()
    {
        return $this->unitTaxAmount;
    }

    /**
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
     *
     * @return int|null
     */
    public function getSumTaxAmount()
    {
        return $this->sumTaxAmount;
    }

    /**
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module Calculation|Sales|Tax
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
     * @module CartNote|ShoppingListNote
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
     * @module CartNote|ShoppingListNote
     *
     * @return string|null
     */
    public function getCartNote()
    {
        return $this->cartNote;
    }

    /**
     * @module CartNote|ShoppingListNote
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
     * @module CartNote|ShoppingListNote
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
     * @module CartNote|ShoppingListNote
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
     * @module Cart|ProductQuantity
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[] $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module Cart|ProductQuantity
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module Cart|ProductQuantity
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(MessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module Cart|ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount|ProductBundle|ProductCartConnector
     *
     * @param string|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount|ProductBundle|ProductCartConnector
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module DiscountPromotion|Discount|ProductBundle|ProductCartConnector
     *
     * @param string|null $abstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractSkuOrFail($abstractSku)
    {
        if ($abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->setAbstractSku($abstractSku);
    }

    /**
     * @module DiscountPromotion|Discount|ProductBundle|ProductCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module DiscountPromotion|Discount|ProductBundle|ProductCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @param int|null $maxQuantity
     *
     * @return $this
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;
        $this->modifiedProperties[self::MAX_QUANTITY] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @return int|null
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * @module DiscountPromotion
     *
     * @param int|null $maxQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMaxQuantityOrFail($maxQuantity)
    {
        if ($maxQuantity === null) {
            $this->throwNullValueException(static::MAX_QUANTITY);
        }

        return $this->setMaxQuantity($maxQuantity);
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMaxQuantityOrFail()
    {
        if ($this->maxQuantity === null) {
            $this->throwNullValueException(static::MAX_QUANTITY);
        }

        return $this->maxQuantity;
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMaxQuantity()
    {
        $this->assertPropertyIsSet(self::MAX_QUANTITY);

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $idDiscountPromotion
     *
     * @return $this
     */
    public function setIdDiscountPromotion($idDiscountPromotion)
    {
        $this->idDiscountPromotion = $idDiscountPromotion;
        $this->modifiedProperties[self::ID_DISCOUNT_PROMOTION] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return int|null
     */
    public function getIdDiscountPromotion()
    {
        return $this->idDiscountPromotion;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $idDiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountPromotionOrFail($idDiscountPromotion)
    {
        if ($idDiscountPromotion === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_PROMOTION);
        }

        return $this->setIdDiscountPromotion($idDiscountPromotion);
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdDiscountPromotionOrFail()
    {
        if ($this->idDiscountPromotion === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_PROMOTION);
        }

        return $this->idDiscountPromotion;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscountPromotion()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT_PROMOTION);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceCartConnector
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer|null $priceProduct
     *
     * @return $this
     */
    public function setPriceProduct(PriceProductTransfer $priceProduct = null)
    {
        $this->priceProduct = $priceProduct;
        $this->modifiedProperties[self::PRICE_PRODUCT] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceCartConnector
     *
     * @return \Generated\Shared\Transfer\PriceProductTransfer|null
     */
    public function getPriceProduct()
    {
        return $this->priceProduct;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceCartConnector
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer $priceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceProductOrFail(PriceProductTransfer $priceProduct)
    {
        return $this->setPriceProduct($priceProduct);
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PriceProductTransfer
     */
    public function getPriceProductOrFail()
    {
        if ($this->priceProduct === null) {
            $this->throwNullValueException(static::PRICE_PRODUCT);
        }

        return $this->priceProduct;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProduct()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT);

        return $this;
    }

    /**
     * @module Merchant
     *
     * @param string|null $merchantReference
     *
     * @return $this
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        $this->modifiedProperties[self::MERCHANT_REFERENCE] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @module Merchant
     *
     * @param string|null $merchantReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantReferenceOrFail($merchantReference)
    {
        if ($merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->setMerchantReference($merchantReference);
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMerchantReferenceOrFail()
    {
        if ($this->merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->merchantReference;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantReference()
    {
        $this->assertPropertyIsSet(self::MERCHANT_REFERENCE);

        return $this;
    }

    /**
     * @module PriceCartConnector
     *
     * @deprecated Will be removed with a next major release
     *
     * @param bool|null $forcedUnitGrossPrice
     *
     * @return $this
     */
    public function setForcedUnitGrossPrice($forcedUnitGrossPrice)
    {
        $this->forcedUnitGrossPrice = $forcedUnitGrossPrice;
        $this->modifiedProperties[self::FORCED_UNIT_GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module PriceCartConnector
     *
     * @deprecated Will be removed with a next major release
     *
     * @return bool|null
     */
    public function getForcedUnitGrossPrice()
    {
        return $this->forcedUnitGrossPrice;
    }

    /**
     * @module PriceCartConnector
     *
     * @deprecated Will be removed with a next major release
     *
     * @param bool|null $forcedUnitGrossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setForcedUnitGrossPriceOrFail($forcedUnitGrossPrice)
    {
        if ($forcedUnitGrossPrice === null) {
            $this->throwNullValueException(static::FORCED_UNIT_GROSS_PRICE);
        }

        return $this->setForcedUnitGrossPrice($forcedUnitGrossPrice);
    }

    /**
     * @module PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed with a next major release
     *
     * @return bool
     */
    public function getForcedUnitGrossPriceOrFail()
    {
        if ($this->forcedUnitGrossPrice === null) {
            $this->throwNullValueException(static::FORCED_UNIT_GROSS_PRICE);
        }

        return $this->forcedUnitGrossPrice;
    }

    /**
     * @module PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed with a next major release
     *
     * @return $this
     */
    public function requireForcedUnitGrossPrice()
    {
        $this->assertPropertyIsSet(self::FORCED_UNIT_GROSS_PRICE);

        return $this;
    }

    /**
     * @module PriceCartConnector
     *
     * @param int|null $originUnitGrossPrice
     *
     * @return $this
     */
    public function setOriginUnitGrossPrice($originUnitGrossPrice)
    {
        $this->originUnitGrossPrice = $originUnitGrossPrice;
        $this->modifiedProperties[self::ORIGIN_UNIT_GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module PriceCartConnector
     *
     * @return int|null
     */
    public function getOriginUnitGrossPrice()
    {
        return $this->originUnitGrossPrice;
    }

    /**
     * @module PriceCartConnector
     *
     * @param int|null $originUnitGrossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOriginUnitGrossPriceOrFail($originUnitGrossPrice)
    {
        if ($originUnitGrossPrice === null) {
            $this->throwNullValueException(static::ORIGIN_UNIT_GROSS_PRICE);
        }

        return $this->setOriginUnitGrossPrice($originUnitGrossPrice);
    }

    /**
     * @module PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOriginUnitGrossPriceOrFail()
    {
        if ($this->originUnitGrossPrice === null) {
            $this->throwNullValueException(static::ORIGIN_UNIT_GROSS_PRICE);
        }

        return $this->originUnitGrossPrice;
    }

    /**
     * @module PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOriginUnitGrossPrice()
    {
        $this->assertPropertyIsSet(self::ORIGIN_UNIT_GROSS_PRICE);

        return $this;
    }

    /**
     * @module PriceCartConnector
     *
     * @param int|null $originUnitNetPrice
     *
     * @return $this
     */
    public function setOriginUnitNetPrice($originUnitNetPrice)
    {
        $this->originUnitNetPrice = $originUnitNetPrice;
        $this->modifiedProperties[self::ORIGIN_UNIT_NET_PRICE] = true;

        return $this;
    }

    /**
     * @module PriceCartConnector
     *
     * @return int|null
     */
    public function getOriginUnitNetPrice()
    {
        return $this->originUnitNetPrice;
    }

    /**
     * @module PriceCartConnector
     *
     * @param int|null $originUnitNetPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOriginUnitNetPriceOrFail($originUnitNetPrice)
    {
        if ($originUnitNetPrice === null) {
            $this->throwNullValueException(static::ORIGIN_UNIT_NET_PRICE);
        }

        return $this->setOriginUnitNetPrice($originUnitNetPrice);
    }

    /**
     * @module PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOriginUnitNetPriceOrFail()
    {
        if ($this->originUnitNetPrice === null) {
            $this->throwNullValueException(static::ORIGIN_UNIT_NET_PRICE);
        }

        return $this->originUnitNetPrice;
    }

    /**
     * @module PriceCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOriginUnitNetPrice()
    {
        $this->assertPropertyIsSet(self::ORIGIN_UNIT_NET_PRICE);

        return $this;
    }

    /**
     * @module ProductBundle|ProductImageCartConnector|SalesProductConnector
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageTransfer[] $images
     *
     * @return $this
     */
    public function setImages(ArrayObject $images)
    {
        $this->images = $images;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductImageCartConnector|SalesProductConnector
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageTransfer[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @module ProductBundle|ProductImageCartConnector|SalesProductConnector
     *
     * @param \Generated\Shared\Transfer\ProductImageTransfer $image
     *
     * @return $this
     */
    public function addImage(ProductImageTransfer $image)
    {
        $this->images[] = $image;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductImageCartConnector|SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImages()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGES);

        return $this;
    }

    /**
     * @module ProductBundle|SalesProductConnector|Sales
     *
     * @param \Generated\Shared\Transfer\ItemMetadataTransfer|null $metadata
     *
     * @return $this
     */
    public function setMetadata(ItemMetadataTransfer $metadata = null)
    {
        $this->metadata = $metadata;
        $this->modifiedProperties[self::METADATA] = true;

        return $this;
    }

    /**
     * @module ProductBundle|SalesProductConnector|Sales
     *
     * @return \Generated\Shared\Transfer\ItemMetadataTransfer|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @module ProductBundle|SalesProductConnector|Sales
     *
     * @param \Generated\Shared\Transfer\ItemMetadataTransfer $metadata
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetadataOrFail(ItemMetadataTransfer $metadata)
    {
        return $this->setMetadata($metadata);
    }

    /**
     * @module ProductBundle|SalesProductConnector|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemMetadataTransfer
     */
    public function getMetadataOrFail()
    {
        if ($this->metadata === null) {
            $this->throwNullValueException(static::METADATA);
        }

        return $this->metadata;
    }

    /**
     * @module ProductBundle|SalesProductConnector|Sales
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
     * @module ProductBundle|ProductCartConnector|SalesProductConnector
     *
     * @param array|null $concreteAttributes
     *
     * @return $this
     */
    public function setConcreteAttributes(array $concreteAttributes = null)
    {
        if ($concreteAttributes === null) {
            $concreteAttributes = [];
        }

        $this->concreteAttributes = $concreteAttributes;
        $this->modifiedProperties[self::CONCRETE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductCartConnector|SalesProductConnector
     *
     * @return array
     */
    public function getConcreteAttributes()
    {
        return $this->concreteAttributes;
    }

    /**
     * @module ProductBundle|ProductCartConnector|SalesProductConnector
     *
     * @param mixed $concreteAttribute
     *
     * @return $this
     */
    public function addConcreteAttribute($concreteAttribute)
    {
        $this->concreteAttributes[] = $concreteAttribute;
        $this->modifiedProperties[self::CONCRETE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductCartConnector|SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteAttributes()
    {
        $this->assertPropertyIsSet(self::CONCRETE_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer|null $amountLeadProduct
     *
     * @return $this
     */
    public function setAmountLeadProduct(ProductConcreteTransfer $amountLeadProduct = null)
    {
        $this->amountLeadProduct = $amountLeadProduct;
        $this->modifiedProperties[self::AMOUNT_LEAD_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    public function getAmountLeadProduct()
    {
        return $this->amountLeadProduct;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $amountLeadProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountLeadProductOrFail(ProductConcreteTransfer $amountLeadProduct)
    {
        return $this->setAmountLeadProduct($amountLeadProduct);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function getAmountLeadProductOrFail()
    {
        if ($this->amountLeadProduct === null) {
            $this->throwNullValueException(static::AMOUNT_LEAD_PRODUCT);
        }

        return $this->amountLeadProduct;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountLeadProduct()
    {
        $this->assertPropertyIsSet(self::AMOUNT_LEAD_PRODUCT);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductPackagingUnitTransfer|null $productPackagingUnit
     *
     * @return $this
     */
    public function setProductPackagingUnit(ProductPackagingUnitTransfer $productPackagingUnit = null)
    {
        $this->productPackagingUnit = $productPackagingUnit;
        $this->modifiedProperties[self::PRODUCT_PACKAGING_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductPackagingUnitTransfer|null
     */
    public function getProductPackagingUnit()
    {
        return $this->productPackagingUnit;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductPackagingUnitTransfer $productPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductPackagingUnitOrFail(ProductPackagingUnitTransfer $productPackagingUnit)
    {
        return $this->setProductPackagingUnit($productPackagingUnit);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductPackagingUnitTransfer
     */
    public function getProductPackagingUnitOrFail()
    {
        if ($this->productPackagingUnit === null) {
            $this->throwNullValueException(static::PRODUCT_PACKAGING_UNIT);
        }

        return $this->productPackagingUnit;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductPackagingUnit()
    {
        $this->assertPropertyIsSet(self::PRODUCT_PACKAGING_UNIT);

        return $this;
    }

    /**
     * @module Refund
     *
     * @param int|null $idOrderItem
     *
     * @return $this
     */
    public function setIdOrderItem($idOrderItem)
    {
        $this->idOrderItem = $idOrderItem;
        $this->modifiedProperties[self::ID_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module Refund
     *
     * @return int|null
     */
    public function getIdOrderItem()
    {
        return $this->idOrderItem;
    }

    /**
     * @module Refund
     *
     * @param int|null $idOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOrderItemOrFail($idOrderItem)
    {
        if ($idOrderItem === null) {
            $this->throwNullValueException(static::ID_ORDER_ITEM);
        }

        return $this->setIdOrderItem($idOrderItem);
    }

    /**
     * @module Refund
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdOrderItemOrFail()
    {
        if ($this->idOrderItem === null) {
            $this->throwNullValueException(static::ID_ORDER_ITEM);
        }

        return $this->idOrderItem;
    }

    /**
     * @module Refund
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOrderItem()
    {
        $this->assertPropertyIsSet(self::ID_ORDER_ITEM);

        return $this;
    }

    /**
     * @module SalesQuantity
     *
     * @param bool|null $isQuantitySplittable
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
     * @module SalesQuantity
     *
     * @return bool|null
     */
    public function getIsQuantitySplittable()
    {
        return $this->isQuantitySplittable;
    }

    /**
     * @module SalesQuantity
     *
     * @param bool|null $isQuantitySplittable
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
     * @module SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsQuantitySplittableOrFail()
    {
        if ($this->isQuantitySplittable === null) {
            $this->throwNullValueException(static::IS_QUANTITY_SPLITTABLE);
        }

        return $this->isQuantitySplittable;
    }

    /**
     * @module SalesQuantity
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
                case 'id':
                case 'sku':
                case 'url':
                case 'groupKeyPrefix':
                case 'quantity':
                case 'normalizableFields':
                case 'idProductAbstract':
                case 'groupKey':
                case 'taxRate':
                case 'sumGrossPrice':
                case 'unitGrossPrice':
                case 'name':
                case 'sumSubtotalAggregation':
                case 'unitPrice':
                case 'idSalesOrderItem':
                case 'fkSalesOrder':
                case 'fkOmsOrderItemState':
                case 'process':
                case 'variety':
                case 'canceledAmount':
                case 'isOrdered':
                case 'relatedBundleItemIdentifier':
                case 'bundleItemIdentifier':
                case 'uuid':
                case 'sourceUnitGrossPrice':
                case 'sourceUnitNetPrice':
                case 'sumPriceToPayAggregation':
                case 'isReturnable':
                case 'remunerationAmount':
                case 'refundableAmount':
                case 'createdAt':
                case 'sumPrice':
                case 'orderReference':
                case 'currencyIsoCode':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
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
                case 'taxRateAverageAggregation':
                case 'taxAmountAfterCancellation':
                case 'unitTaxAmount':
                case 'sumTaxAmount':
                case 'cartNote':
                case 'abstractSku':
                case 'maxQuantity':
                case 'idDiscountPromotion':
                case 'merchantReference':
                case 'forcedUnitGrossPrice':
                case 'originUnitGrossPrice':
                case 'originUnitNetPrice':
                case 'concreteAttributes':
                case 'idOrderItem':
                case 'isQuantitySplittable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'configuredBundleItem':
                case 'giftCardMetadata':
                case 'shipment':
                case 'configuredBundle':
                case 'state':
                case 'salesOrderConfiguredBundleItem':
                case 'quantitySalesUnit':
                case 'amountSalesUnit':
                case 'salesOrderItemConfiguration':
                case 'productConcrete':
                case 'salesOrderConfiguredBundle':
                case 'productBundle':
                case 'priceProduct':
                case 'metadata':
                case 'amountLeadProduct':
                case 'productPackagingUnit':
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
                case 'productOptions':
                case 'calculatedDiscounts':
                case 'stateHistory':
                case 'returnPolicyMessages':
                case 'messages':
                case 'images':
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
                case 'id':
                case 'sku':
                case 'url':
                case 'groupKeyPrefix':
                case 'quantity':
                case 'normalizableFields':
                case 'idProductAbstract':
                case 'groupKey':
                case 'taxRate':
                case 'sumGrossPrice':
                case 'unitGrossPrice':
                case 'name':
                case 'sumSubtotalAggregation':
                case 'unitPrice':
                case 'idSalesOrderItem':
                case 'fkSalesOrder':
                case 'fkOmsOrderItemState':
                case 'process':
                case 'variety':
                case 'canceledAmount':
                case 'isOrdered':
                case 'relatedBundleItemIdentifier':
                case 'bundleItemIdentifier':
                case 'uuid':
                case 'sourceUnitGrossPrice':
                case 'sourceUnitNetPrice':
                case 'sumPriceToPayAggregation':
                case 'isReturnable':
                case 'remunerationAmount':
                case 'refundableAmount':
                case 'createdAt':
                case 'sumPrice':
                case 'orderReference':
                case 'currencyIsoCode':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
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
                case 'taxRateAverageAggregation':
                case 'taxAmountAfterCancellation':
                case 'unitTaxAmount':
                case 'sumTaxAmount':
                case 'cartNote':
                case 'abstractSku':
                case 'maxQuantity':
                case 'idDiscountPromotion':
                case 'merchantReference':
                case 'forcedUnitGrossPrice':
                case 'originUnitGrossPrice':
                case 'originUnitNetPrice':
                case 'concreteAttributes':
                case 'idOrderItem':
                case 'isQuantitySplittable':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'configuredBundleItem':
                case 'giftCardMetadata':
                case 'shipment':
                case 'configuredBundle':
                case 'state':
                case 'salesOrderConfiguredBundleItem':
                case 'quantitySalesUnit':
                case 'amountSalesUnit':
                case 'salesOrderItemConfiguration':
                case 'productConcrete':
                case 'salesOrderConfiguredBundle':
                case 'productBundle':
                case 'priceProduct':
                case 'metadata':
                case 'amountLeadProduct':
                case 'productPackagingUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'productOptions':
                case 'calculatedDiscounts':
                case 'stateHistory':
                case 'returnPolicyMessages':
                case 'messages':
                case 'images':
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
                case 'id':
                case 'sku':
                case 'url':
                case 'groupKeyPrefix':
                case 'quantity':
                case 'normalizableFields':
                case 'idProductAbstract':
                case 'groupKey':
                case 'taxRate':
                case 'sumGrossPrice':
                case 'unitGrossPrice':
                case 'name':
                case 'sumSubtotalAggregation':
                case 'unitPrice':
                case 'idSalesOrderItem':
                case 'fkSalesOrder':
                case 'fkOmsOrderItemState':
                case 'process':
                case 'variety':
                case 'canceledAmount':
                case 'isOrdered':
                case 'relatedBundleItemIdentifier':
                case 'bundleItemIdentifier':
                case 'uuid':
                case 'sourceUnitGrossPrice':
                case 'sourceUnitNetPrice':
                case 'sumPriceToPayAggregation':
                case 'isReturnable':
                case 'remunerationAmount':
                case 'refundableAmount':
                case 'createdAt':
                case 'sumPrice':
                case 'orderReference':
                case 'currencyIsoCode':
                case 'unitNetPrice':
                case 'sumNetPrice':
                case 'unitTaxAmountFullAggregation':
                case 'sumTaxAmountFullAggregation':
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
                case 'taxRateAverageAggregation':
                case 'taxAmountAfterCancellation':
                case 'unitTaxAmount':
                case 'sumTaxAmount':
                case 'cartNote':
                case 'abstractSku':
                case 'maxQuantity':
                case 'idDiscountPromotion':
                case 'merchantReference':
                case 'forcedUnitGrossPrice':
                case 'originUnitGrossPrice':
                case 'originUnitNetPrice':
                case 'concreteAttributes':
                case 'idOrderItem':
                case 'isQuantitySplittable':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'configuredBundleItem':
                case 'giftCardMetadata':
                case 'shipment':
                case 'configuredBundle':
                case 'state':
                case 'salesOrderConfiguredBundleItem':
                case 'quantitySalesUnit':
                case 'amountSalesUnit':
                case 'salesOrderItemConfiguration':
                case 'productConcrete':
                case 'salesOrderConfiguredBundle':
                case 'productBundle':
                case 'priceProduct':
                case 'metadata':
                case 'amountLeadProduct':
                case 'productPackagingUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'productOptions':
                case 'calculatedDiscounts':
                case 'stateHistory':
                case 'returnPolicyMessages':
                case 'messages':
                case 'images':
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
        $this->productOptions = $this->productOptions ?: new ArrayObject();
        $this->calculatedDiscounts = $this->calculatedDiscounts ?: new ArrayObject();
        $this->stateHistory = $this->stateHistory ?: new ArrayObject();
        $this->returnPolicyMessages = $this->returnPolicyMessages ?: new ArrayObject();
        $this->messages = $this->messages ?: new ArrayObject();
        $this->images = $this->images ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'url' => $this->url,
            'groupKeyPrefix' => $this->groupKeyPrefix,
            'quantity' => $this->quantity,
            'normalizableFields' => $this->normalizableFields,
            'idProductAbstract' => $this->idProductAbstract,
            'groupKey' => $this->groupKey,
            'taxRate' => $this->taxRate,
            'sumGrossPrice' => $this->sumGrossPrice,
            'unitGrossPrice' => $this->unitGrossPrice,
            'name' => $this->name,
            'sumSubtotalAggregation' => $this->sumSubtotalAggregation,
            'unitPrice' => $this->unitPrice,
            'idSalesOrderItem' => $this->idSalesOrderItem,
            'fkSalesOrder' => $this->fkSalesOrder,
            'fkOmsOrderItemState' => $this->fkOmsOrderItemState,
            'process' => $this->process,
            'variety' => $this->variety,
            'canceledAmount' => $this->canceledAmount,
            'isOrdered' => $this->isOrdered,
            'relatedBundleItemIdentifier' => $this->relatedBundleItemIdentifier,
            'bundleItemIdentifier' => $this->bundleItemIdentifier,
            'uuid' => $this->uuid,
            'sourceUnitGrossPrice' => $this->sourceUnitGrossPrice,
            'sourceUnitNetPrice' => $this->sourceUnitNetPrice,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation,
            'isReturnable' => $this->isReturnable,
            'remunerationAmount' => $this->remunerationAmount,
            'refundableAmount' => $this->refundableAmount,
            'createdAt' => $this->createdAt,
            'sumPrice' => $this->sumPrice,
            'orderReference' => $this->orderReference,
            'currencyIsoCode' => $this->currencyIsoCode,
            'unitNetPrice' => $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice,
            'unitTaxAmountFullAggregation' => $this->unitTaxAmountFullAggregation,
            'sumTaxAmountFullAggregation' => $this->sumTaxAmountFullAggregation,
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
            'taxRateAverageAggregation' => $this->taxRateAverageAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation,
            'unitTaxAmount' => $this->unitTaxAmount,
            'sumTaxAmount' => $this->sumTaxAmount,
            'cartNote' => $this->cartNote,
            'abstractSku' => $this->abstractSku,
            'maxQuantity' => $this->maxQuantity,
            'idDiscountPromotion' => $this->idDiscountPromotion,
            'merchantReference' => $this->merchantReference,
            'forcedUnitGrossPrice' => $this->forcedUnitGrossPrice,
            'originUnitGrossPrice' => $this->originUnitGrossPrice,
            'originUnitNetPrice' => $this->originUnitNetPrice,
            'concreteAttributes' => $this->concreteAttributes,
            'idOrderItem' => $this->idOrderItem,
            'isQuantitySplittable' => $this->isQuantitySplittable,
            'configuredBundleItem' => $this->configuredBundleItem,
            'giftCardMetadata' => $this->giftCardMetadata,
            'shipment' => $this->shipment,
            'configuredBundle' => $this->configuredBundle,
            'state' => $this->state,
            'salesOrderConfiguredBundleItem' => $this->salesOrderConfiguredBundleItem,
            'quantitySalesUnit' => $this->quantitySalesUnit,
            'amountSalesUnit' => $this->amountSalesUnit,
            'salesOrderItemConfiguration' => $this->salesOrderItemConfiguration,
            'productConcrete' => $this->productConcrete,
            'salesOrderConfiguredBundle' => $this->salesOrderConfiguredBundle,
            'productBundle' => $this->productBundle,
            'priceProduct' => $this->priceProduct,
            'metadata' => $this->metadata,
            'amountLeadProduct' => $this->amountLeadProduct,
            'productPackagingUnit' => $this->productPackagingUnit,
            'productOptions' => $this->productOptions,
            'calculatedDiscounts' => $this->calculatedDiscounts,
            'stateHistory' => $this->stateHistory,
            'returnPolicyMessages' => $this->returnPolicyMessages,
            'messages' => $this->messages,
            'images' => $this->images,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'url' => $this->url,
            'group_key_prefix' => $this->groupKeyPrefix,
            'quantity' => $this->quantity,
            'normalizable_fields' => $this->normalizableFields,
            'id_product_abstract' => $this->idProductAbstract,
            'group_key' => $this->groupKey,
            'tax_rate' => $this->taxRate,
            'sum_gross_price' => $this->sumGrossPrice,
            'unit_gross_price' => $this->unitGrossPrice,
            'name' => $this->name,
            'sum_subtotal_aggregation' => $this->sumSubtotalAggregation,
            'unit_price' => $this->unitPrice,
            'id_sales_order_item' => $this->idSalesOrderItem,
            'fk_sales_order' => $this->fkSalesOrder,
            'fk_oms_order_item_state' => $this->fkOmsOrderItemState,
            'process' => $this->process,
            'variety' => $this->variety,
            'canceled_amount' => $this->canceledAmount,
            'is_ordered' => $this->isOrdered,
            'related_bundle_item_identifier' => $this->relatedBundleItemIdentifier,
            'bundle_item_identifier' => $this->bundleItemIdentifier,
            'uuid' => $this->uuid,
            'source_unit_gross_price' => $this->sourceUnitGrossPrice,
            'source_unit_net_price' => $this->sourceUnitNetPrice,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation,
            'is_returnable' => $this->isReturnable,
            'remuneration_amount' => $this->remunerationAmount,
            'refundable_amount' => $this->refundableAmount,
            'created_at' => $this->createdAt,
            'sum_price' => $this->sumPrice,
            'order_reference' => $this->orderReference,
            'currency_iso_code' => $this->currencyIsoCode,
            'unit_net_price' => $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice,
            'unit_tax_amount_full_aggregation' => $this->unitTaxAmountFullAggregation,
            'sum_tax_amount_full_aggregation' => $this->sumTaxAmountFullAggregation,
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
            'tax_rate_average_aggregation' => $this->taxRateAverageAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation,
            'unit_tax_amount' => $this->unitTaxAmount,
            'sum_tax_amount' => $this->sumTaxAmount,
            'cart_note' => $this->cartNote,
            'abstract_sku' => $this->abstractSku,
            'max_quantity' => $this->maxQuantity,
            'id_discount_promotion' => $this->idDiscountPromotion,
            'merchant_reference' => $this->merchantReference,
            'forced_unit_gross_price' => $this->forcedUnitGrossPrice,
            'origin_unit_gross_price' => $this->originUnitGrossPrice,
            'origin_unit_net_price' => $this->originUnitNetPrice,
            'concrete_attributes' => $this->concreteAttributes,
            'id_order_item' => $this->idOrderItem,
            'is_quantity_splittable' => $this->isQuantitySplittable,
            'configured_bundle_item' => $this->configuredBundleItem,
            'gift_card_metadata' => $this->giftCardMetadata,
            'shipment' => $this->shipment,
            'configured_bundle' => $this->configuredBundle,
            'state' => $this->state,
            'sales_order_configured_bundle_item' => $this->salesOrderConfiguredBundleItem,
            'quantity_sales_unit' => $this->quantitySalesUnit,
            'amount_sales_unit' => $this->amountSalesUnit,
            'sales_order_item_configuration' => $this->salesOrderItemConfiguration,
            'product_concrete' => $this->productConcrete,
            'sales_order_configured_bundle' => $this->salesOrderConfiguredBundle,
            'product_bundle' => $this->productBundle,
            'price_product' => $this->priceProduct,
            'metadata' => $this->metadata,
            'amount_lead_product' => $this->amountLeadProduct,
            'product_packaging_unit' => $this->productPackagingUnit,
            'product_options' => $this->productOptions,
            'calculated_discounts' => $this->calculatedDiscounts,
            'state_history' => $this->stateHistory,
            'return_policy_messages' => $this->returnPolicyMessages,
            'messages' => $this->messages,
            'images' => $this->images,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'group_key_prefix' => $this->groupKeyPrefix instanceof AbstractTransfer ? $this->groupKeyPrefix->toArray(true, false) : $this->groupKeyPrefix,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'normalizable_fields' => $this->normalizableFields instanceof AbstractTransfer ? $this->normalizableFields->toArray(true, false) : $this->normalizableFields,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'tax_rate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, false) : $this->taxRate,
            'sum_gross_price' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, false) : $this->sumGrossPrice,
            'unit_gross_price' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, false) : $this->unitGrossPrice,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'sum_subtotal_aggregation' => $this->sumSubtotalAggregation instanceof AbstractTransfer ? $this->sumSubtotalAggregation->toArray(true, false) : $this->sumSubtotalAggregation,
            'unit_price' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, false) : $this->unitPrice,
            'id_sales_order_item' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, false) : $this->idSalesOrderItem,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'fk_oms_order_item_state' => $this->fkOmsOrderItemState instanceof AbstractTransfer ? $this->fkOmsOrderItemState->toArray(true, false) : $this->fkOmsOrderItemState,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, false) : $this->process,
            'variety' => $this->variety instanceof AbstractTransfer ? $this->variety->toArray(true, false) : $this->variety,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'is_ordered' => $this->isOrdered instanceof AbstractTransfer ? $this->isOrdered->toArray(true, false) : $this->isOrdered,
            'related_bundle_item_identifier' => $this->relatedBundleItemIdentifier instanceof AbstractTransfer ? $this->relatedBundleItemIdentifier->toArray(true, false) : $this->relatedBundleItemIdentifier,
            'bundle_item_identifier' => $this->bundleItemIdentifier instanceof AbstractTransfer ? $this->bundleItemIdentifier->toArray(true, false) : $this->bundleItemIdentifier,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'source_unit_gross_price' => $this->sourceUnitGrossPrice instanceof AbstractTransfer ? $this->sourceUnitGrossPrice->toArray(true, false) : $this->sourceUnitGrossPrice,
            'source_unit_net_price' => $this->sourceUnitNetPrice instanceof AbstractTransfer ? $this->sourceUnitNetPrice->toArray(true, false) : $this->sourceUnitNetPrice,
            'sum_price_to_pay_aggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, false) : $this->sumPriceToPayAggregation,
            'is_returnable' => $this->isReturnable instanceof AbstractTransfer ? $this->isReturnable->toArray(true, false) : $this->isReturnable,
            'remuneration_amount' => $this->remunerationAmount instanceof AbstractTransfer ? $this->remunerationAmount->toArray(true, false) : $this->remunerationAmount,
            'refundable_amount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, false) : $this->refundableAmount,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'sum_price' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, false) : $this->sumPrice,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'unit_net_price' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, false) : $this->unitNetPrice,
            'sum_net_price' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, false) : $this->sumNetPrice,
            'unit_tax_amount_full_aggregation' => $this->unitTaxAmountFullAggregation instanceof AbstractTransfer ? $this->unitTaxAmountFullAggregation->toArray(true, false) : $this->unitTaxAmountFullAggregation,
            'sum_tax_amount_full_aggregation' => $this->sumTaxAmountFullAggregation instanceof AbstractTransfer ? $this->sumTaxAmountFullAggregation->toArray(true, false) : $this->sumTaxAmountFullAggregation,
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
            'tax_rate_average_aggregation' => $this->taxRateAverageAggregation instanceof AbstractTransfer ? $this->taxRateAverageAggregation->toArray(true, false) : $this->taxRateAverageAggregation,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, false) : $this->taxAmountAfterCancellation,
            'unit_tax_amount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, false) : $this->unitTaxAmount,
            'sum_tax_amount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, false) : $this->sumTaxAmount,
            'cart_note' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, false) : $this->cartNote,
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'max_quantity' => $this->maxQuantity instanceof AbstractTransfer ? $this->maxQuantity->toArray(true, false) : $this->maxQuantity,
            'id_discount_promotion' => $this->idDiscountPromotion instanceof AbstractTransfer ? $this->idDiscountPromotion->toArray(true, false) : $this->idDiscountPromotion,
            'merchant_reference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, false) : $this->merchantReference,
            'forced_unit_gross_price' => $this->forcedUnitGrossPrice instanceof AbstractTransfer ? $this->forcedUnitGrossPrice->toArray(true, false) : $this->forcedUnitGrossPrice,
            'origin_unit_gross_price' => $this->originUnitGrossPrice instanceof AbstractTransfer ? $this->originUnitGrossPrice->toArray(true, false) : $this->originUnitGrossPrice,
            'origin_unit_net_price' => $this->originUnitNetPrice instanceof AbstractTransfer ? $this->originUnitNetPrice->toArray(true, false) : $this->originUnitNetPrice,
            'concrete_attributes' => $this->concreteAttributes instanceof AbstractTransfer ? $this->concreteAttributes->toArray(true, false) : $this->concreteAttributes,
            'id_order_item' => $this->idOrderItem instanceof AbstractTransfer ? $this->idOrderItem->toArray(true, false) : $this->idOrderItem,
            'is_quantity_splittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, false) : $this->isQuantitySplittable,
            'configured_bundle_item' => $this->configuredBundleItem instanceof AbstractTransfer ? $this->configuredBundleItem->toArray(true, false) : $this->configuredBundleItem,
            'gift_card_metadata' => $this->giftCardMetadata instanceof AbstractTransfer ? $this->giftCardMetadata->toArray(true, false) : $this->giftCardMetadata,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, false) : $this->shipment,
            'configured_bundle' => $this->configuredBundle instanceof AbstractTransfer ? $this->configuredBundle->toArray(true, false) : $this->configuredBundle,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, false) : $this->state,
            'sales_order_configured_bundle_item' => $this->salesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->salesOrderConfiguredBundleItem->toArray(true, false) : $this->salesOrderConfiguredBundleItem,
            'quantity_sales_unit' => $this->quantitySalesUnit instanceof AbstractTransfer ? $this->quantitySalesUnit->toArray(true, false) : $this->quantitySalesUnit,
            'amount_sales_unit' => $this->amountSalesUnit instanceof AbstractTransfer ? $this->amountSalesUnit->toArray(true, false) : $this->amountSalesUnit,
            'sales_order_item_configuration' => $this->salesOrderItemConfiguration instanceof AbstractTransfer ? $this->salesOrderItemConfiguration->toArray(true, false) : $this->salesOrderItemConfiguration,
            'product_concrete' => $this->productConcrete instanceof AbstractTransfer ? $this->productConcrete->toArray(true, false) : $this->productConcrete,
            'sales_order_configured_bundle' => $this->salesOrderConfiguredBundle instanceof AbstractTransfer ? $this->salesOrderConfiguredBundle->toArray(true, false) : $this->salesOrderConfiguredBundle,
            'product_bundle' => $this->productBundle instanceof AbstractTransfer ? $this->productBundle->toArray(true, false) : $this->productBundle,
            'price_product' => $this->priceProduct instanceof AbstractTransfer ? $this->priceProduct->toArray(true, false) : $this->priceProduct,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, false) : $this->metadata,
            'amount_lead_product' => $this->amountLeadProduct instanceof AbstractTransfer ? $this->amountLeadProduct->toArray(true, false) : $this->amountLeadProduct,
            'product_packaging_unit' => $this->productPackagingUnit instanceof AbstractTransfer ? $this->productPackagingUnit->toArray(true, false) : $this->productPackagingUnit,
            'product_options' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, false) : $this->addValuesToCollection($this->productOptions, true, false),
            'calculated_discounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, false) : $this->addValuesToCollection($this->calculatedDiscounts, true, false),
            'state_history' => $this->stateHistory instanceof AbstractTransfer ? $this->stateHistory->toArray(true, false) : $this->addValuesToCollection($this->stateHistory, true, false),
            'return_policy_messages' => $this->returnPolicyMessages instanceof AbstractTransfer ? $this->returnPolicyMessages->toArray(true, false) : $this->addValuesToCollection($this->returnPolicyMessages, true, false),
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, false) : $this->addValuesToCollection($this->images, true, false),
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'groupKeyPrefix' => $this->groupKeyPrefix instanceof AbstractTransfer ? $this->groupKeyPrefix->toArray(true, true) : $this->groupKeyPrefix,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'normalizableFields' => $this->normalizableFields instanceof AbstractTransfer ? $this->normalizableFields->toArray(true, true) : $this->normalizableFields,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'taxRate' => $this->taxRate instanceof AbstractTransfer ? $this->taxRate->toArray(true, true) : $this->taxRate,
            'sumGrossPrice' => $this->sumGrossPrice instanceof AbstractTransfer ? $this->sumGrossPrice->toArray(true, true) : $this->sumGrossPrice,
            'unitGrossPrice' => $this->unitGrossPrice instanceof AbstractTransfer ? $this->unitGrossPrice->toArray(true, true) : $this->unitGrossPrice,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'sumSubtotalAggregation' => $this->sumSubtotalAggregation instanceof AbstractTransfer ? $this->sumSubtotalAggregation->toArray(true, true) : $this->sumSubtotalAggregation,
            'unitPrice' => $this->unitPrice instanceof AbstractTransfer ? $this->unitPrice->toArray(true, true) : $this->unitPrice,
            'idSalesOrderItem' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, true) : $this->idSalesOrderItem,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'fkOmsOrderItemState' => $this->fkOmsOrderItemState instanceof AbstractTransfer ? $this->fkOmsOrderItemState->toArray(true, true) : $this->fkOmsOrderItemState,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, true) : $this->process,
            'variety' => $this->variety instanceof AbstractTransfer ? $this->variety->toArray(true, true) : $this->variety,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'isOrdered' => $this->isOrdered instanceof AbstractTransfer ? $this->isOrdered->toArray(true, true) : $this->isOrdered,
            'relatedBundleItemIdentifier' => $this->relatedBundleItemIdentifier instanceof AbstractTransfer ? $this->relatedBundleItemIdentifier->toArray(true, true) : $this->relatedBundleItemIdentifier,
            'bundleItemIdentifier' => $this->bundleItemIdentifier instanceof AbstractTransfer ? $this->bundleItemIdentifier->toArray(true, true) : $this->bundleItemIdentifier,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'sourceUnitGrossPrice' => $this->sourceUnitGrossPrice instanceof AbstractTransfer ? $this->sourceUnitGrossPrice->toArray(true, true) : $this->sourceUnitGrossPrice,
            'sourceUnitNetPrice' => $this->sourceUnitNetPrice instanceof AbstractTransfer ? $this->sourceUnitNetPrice->toArray(true, true) : $this->sourceUnitNetPrice,
            'sumPriceToPayAggregation' => $this->sumPriceToPayAggregation instanceof AbstractTransfer ? $this->sumPriceToPayAggregation->toArray(true, true) : $this->sumPriceToPayAggregation,
            'isReturnable' => $this->isReturnable instanceof AbstractTransfer ? $this->isReturnable->toArray(true, true) : $this->isReturnable,
            'remunerationAmount' => $this->remunerationAmount instanceof AbstractTransfer ? $this->remunerationAmount->toArray(true, true) : $this->remunerationAmount,
            'refundableAmount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, true) : $this->refundableAmount,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'sumPrice' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, true) : $this->sumPrice,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'unitNetPrice' => $this->unitNetPrice instanceof AbstractTransfer ? $this->unitNetPrice->toArray(true, true) : $this->unitNetPrice,
            'sumNetPrice' => $this->sumNetPrice instanceof AbstractTransfer ? $this->sumNetPrice->toArray(true, true) : $this->sumNetPrice,
            'unitTaxAmountFullAggregation' => $this->unitTaxAmountFullAggregation instanceof AbstractTransfer ? $this->unitTaxAmountFullAggregation->toArray(true, true) : $this->unitTaxAmountFullAggregation,
            'sumTaxAmountFullAggregation' => $this->sumTaxAmountFullAggregation instanceof AbstractTransfer ? $this->sumTaxAmountFullAggregation->toArray(true, true) : $this->sumTaxAmountFullAggregation,
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
            'taxRateAverageAggregation' => $this->taxRateAverageAggregation instanceof AbstractTransfer ? $this->taxRateAverageAggregation->toArray(true, true) : $this->taxRateAverageAggregation,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, true) : $this->taxAmountAfterCancellation,
            'unitTaxAmount' => $this->unitTaxAmount instanceof AbstractTransfer ? $this->unitTaxAmount->toArray(true, true) : $this->unitTaxAmount,
            'sumTaxAmount' => $this->sumTaxAmount instanceof AbstractTransfer ? $this->sumTaxAmount->toArray(true, true) : $this->sumTaxAmount,
            'cartNote' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, true) : $this->cartNote,
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'maxQuantity' => $this->maxQuantity instanceof AbstractTransfer ? $this->maxQuantity->toArray(true, true) : $this->maxQuantity,
            'idDiscountPromotion' => $this->idDiscountPromotion instanceof AbstractTransfer ? $this->idDiscountPromotion->toArray(true, true) : $this->idDiscountPromotion,
            'merchantReference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, true) : $this->merchantReference,
            'forcedUnitGrossPrice' => $this->forcedUnitGrossPrice instanceof AbstractTransfer ? $this->forcedUnitGrossPrice->toArray(true, true) : $this->forcedUnitGrossPrice,
            'originUnitGrossPrice' => $this->originUnitGrossPrice instanceof AbstractTransfer ? $this->originUnitGrossPrice->toArray(true, true) : $this->originUnitGrossPrice,
            'originUnitNetPrice' => $this->originUnitNetPrice instanceof AbstractTransfer ? $this->originUnitNetPrice->toArray(true, true) : $this->originUnitNetPrice,
            'concreteAttributes' => $this->concreteAttributes instanceof AbstractTransfer ? $this->concreteAttributes->toArray(true, true) : $this->concreteAttributes,
            'idOrderItem' => $this->idOrderItem instanceof AbstractTransfer ? $this->idOrderItem->toArray(true, true) : $this->idOrderItem,
            'isQuantitySplittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, true) : $this->isQuantitySplittable,
            'configuredBundleItem' => $this->configuredBundleItem instanceof AbstractTransfer ? $this->configuredBundleItem->toArray(true, true) : $this->configuredBundleItem,
            'giftCardMetadata' => $this->giftCardMetadata instanceof AbstractTransfer ? $this->giftCardMetadata->toArray(true, true) : $this->giftCardMetadata,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, true) : $this->shipment,
            'configuredBundle' => $this->configuredBundle instanceof AbstractTransfer ? $this->configuredBundle->toArray(true, true) : $this->configuredBundle,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, true) : $this->state,
            'salesOrderConfiguredBundleItem' => $this->salesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->salesOrderConfiguredBundleItem->toArray(true, true) : $this->salesOrderConfiguredBundleItem,
            'quantitySalesUnit' => $this->quantitySalesUnit instanceof AbstractTransfer ? $this->quantitySalesUnit->toArray(true, true) : $this->quantitySalesUnit,
            'amountSalesUnit' => $this->amountSalesUnit instanceof AbstractTransfer ? $this->amountSalesUnit->toArray(true, true) : $this->amountSalesUnit,
            'salesOrderItemConfiguration' => $this->salesOrderItemConfiguration instanceof AbstractTransfer ? $this->salesOrderItemConfiguration->toArray(true, true) : $this->salesOrderItemConfiguration,
            'productConcrete' => $this->productConcrete instanceof AbstractTransfer ? $this->productConcrete->toArray(true, true) : $this->productConcrete,
            'salesOrderConfiguredBundle' => $this->salesOrderConfiguredBundle instanceof AbstractTransfer ? $this->salesOrderConfiguredBundle->toArray(true, true) : $this->salesOrderConfiguredBundle,
            'productBundle' => $this->productBundle instanceof AbstractTransfer ? $this->productBundle->toArray(true, true) : $this->productBundle,
            'priceProduct' => $this->priceProduct instanceof AbstractTransfer ? $this->priceProduct->toArray(true, true) : $this->priceProduct,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, true) : $this->metadata,
            'amountLeadProduct' => $this->amountLeadProduct instanceof AbstractTransfer ? $this->amountLeadProduct->toArray(true, true) : $this->amountLeadProduct,
            'productPackagingUnit' => $this->productPackagingUnit instanceof AbstractTransfer ? $this->productPackagingUnit->toArray(true, true) : $this->productPackagingUnit,
            'productOptions' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, true) : $this->addValuesToCollection($this->productOptions, true, true),
            'calculatedDiscounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, true) : $this->addValuesToCollection($this->calculatedDiscounts, true, true),
            'stateHistory' => $this->stateHistory instanceof AbstractTransfer ? $this->stateHistory->toArray(true, true) : $this->addValuesToCollection($this->stateHistory, true, true),
            'returnPolicyMessages' => $this->returnPolicyMessages instanceof AbstractTransfer ? $this->returnPolicyMessages->toArray(true, true) : $this->addValuesToCollection($this->returnPolicyMessages, true, true),
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, true) : $this->addValuesToCollection($this->images, true, true),
            'amount' => $this->amount,
        ];
    }
}
