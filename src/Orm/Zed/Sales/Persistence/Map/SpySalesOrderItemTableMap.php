<?php

namespace Orm\Zed\Sales\Persistence\Map;

use Orm\Zed\Sales\Persistence\SpySalesOrderItem;
use Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'spy_sales_order_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesOrderItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Sales.Persistence.Map.SpySalesOrderItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_sales_order_item';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Sales.Persistence.SpySalesOrderItem';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 46;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 46;

    /**
     * the column name for the id_sales_order_item field
     */
    const COL_ID_SALES_ORDER_ITEM = 'spy_sales_order_item.id_sales_order_item';

    /**
     * the column name for the fk_oms_order_item_state field
     */
    const COL_FK_OMS_ORDER_ITEM_STATE = 'spy_sales_order_item.fk_oms_order_item_state';

    /**
     * the column name for the fk_oms_order_process field
     */
    const COL_FK_OMS_ORDER_PROCESS = 'spy_sales_order_item.fk_oms_order_process';

    /**
     * the column name for the fk_sales_order field
     */
    const COL_FK_SALES_ORDER = 'spy_sales_order_item.fk_sales_order';

    /**
     * the column name for the fk_sales_order_item_bundle field
     */
    const COL_FK_SALES_ORDER_ITEM_BUNDLE = 'spy_sales_order_item.fk_sales_order_item_bundle';

    /**
     * the column name for the fk_sales_shipment field
     */
    const COL_FK_SALES_SHIPMENT = 'spy_sales_order_item.fk_sales_shipment';

    /**
     * the column name for the amount field
     */
    const COL_AMOUNT = 'spy_sales_order_item.amount';

    /**
     * the column name for the amount_base_measurement_unit_name field
     */
    const COL_AMOUNT_BASE_MEASUREMENT_UNIT_NAME = 'spy_sales_order_item.amount_base_measurement_unit_name';

    /**
     * the column name for the amount_measurement_unit_code field
     */
    const COL_AMOUNT_MEASUREMENT_UNIT_CODE = 'spy_sales_order_item.amount_measurement_unit_code';

    /**
     * the column name for the amount_measurement_unit_conversion field
     */
    const COL_AMOUNT_MEASUREMENT_UNIT_CONVERSION = 'spy_sales_order_item.amount_measurement_unit_conversion';

    /**
     * the column name for the amount_measurement_unit_name field
     */
    const COL_AMOUNT_MEASUREMENT_UNIT_NAME = 'spy_sales_order_item.amount_measurement_unit_name';

    /**
     * the column name for the amount_measurement_unit_precision field
     */
    const COL_AMOUNT_MEASUREMENT_UNIT_PRECISION = 'spy_sales_order_item.amount_measurement_unit_precision';

    /**
     * the column name for the amount_sku field
     */
    const COL_AMOUNT_SKU = 'spy_sales_order_item.amount_sku';

    /**
     * the column name for the canceled_amount field
     */
    const COL_CANCELED_AMOUNT = 'spy_sales_order_item.canceled_amount';

    /**
     * the column name for the cart_note field
     */
    const COL_CART_NOTE = 'spy_sales_order_item.cart_note';

    /**
     * the column name for the discount_amount_aggregation field
     */
    const COL_DISCOUNT_AMOUNT_AGGREGATION = 'spy_sales_order_item.discount_amount_aggregation';

    /**
     * the column name for the discount_amount_full_aggregation field
     */
    const COL_DISCOUNT_AMOUNT_FULL_AGGREGATION = 'spy_sales_order_item.discount_amount_full_aggregation';

    /**
     * the column name for the expense_price_aggregation field
     */
    const COL_EXPENSE_PRICE_AGGREGATION = 'spy_sales_order_item.expense_price_aggregation';

    /**
     * the column name for the gross_price field
     */
    const COL_GROSS_PRICE = 'spy_sales_order_item.gross_price';

    /**
     * the column name for the group_key field
     */
    const COL_GROUP_KEY = 'spy_sales_order_item.group_key';

    /**
     * the column name for the is_quantity_splittable field
     */
    const COL_IS_QUANTITY_SPLITTABLE = 'spy_sales_order_item.is_quantity_splittable';

    /**
     * the column name for the last_state_change field
     */
    const COL_LAST_STATE_CHANGE = 'spy_sales_order_item.last_state_change';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_sales_order_item.name';

    /**
     * the column name for the net_price field
     */
    const COL_NET_PRICE = 'spy_sales_order_item.net_price';

    /**
     * the column name for the order_item_reference field
     */
    const COL_ORDER_ITEM_REFERENCE = 'spy_sales_order_item.order_item_reference';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'spy_sales_order_item.price';

    /**
     * the column name for the price_to_pay_aggregation field
     */
    const COL_PRICE_TO_PAY_AGGREGATION = 'spy_sales_order_item.price_to_pay_aggregation';

    /**
     * the column name for the product_option_price_aggregation field
     */
    const COL_PRODUCT_OPTION_PRICE_AGGREGATION = 'spy_sales_order_item.product_option_price_aggregation';

    /**
     * the column name for the quantity field
     */
    const COL_QUANTITY = 'spy_sales_order_item.quantity';

    /**
     * the column name for the quantity_base_measurement_unit_name field
     */
    const COL_QUANTITY_BASE_MEASUREMENT_UNIT_NAME = 'spy_sales_order_item.quantity_base_measurement_unit_name';

    /**
     * the column name for the quantity_measurement_unit_code field
     */
    const COL_QUANTITY_MEASUREMENT_UNIT_CODE = 'spy_sales_order_item.quantity_measurement_unit_code';

    /**
     * the column name for the quantity_measurement_unit_conversion field
     */
    const COL_QUANTITY_MEASUREMENT_UNIT_CONVERSION = 'spy_sales_order_item.quantity_measurement_unit_conversion';

    /**
     * the column name for the quantity_measurement_unit_name field
     */
    const COL_QUANTITY_MEASUREMENT_UNIT_NAME = 'spy_sales_order_item.quantity_measurement_unit_name';

    /**
     * the column name for the quantity_measurement_unit_precision field
     */
    const COL_QUANTITY_MEASUREMENT_UNIT_PRECISION = 'spy_sales_order_item.quantity_measurement_unit_precision';

    /**
     * the column name for the refundable_amount field
     */
    const COL_REFUNDABLE_AMOUNT = 'spy_sales_order_item.refundable_amount';

    /**
     * the column name for the remuneration_amount field
     */
    const COL_REMUNERATION_AMOUNT = 'spy_sales_order_item.remuneration_amount';

    /**
     * the column name for the sku field
     */
    const COL_SKU = 'spy_sales_order_item.sku';

    /**
     * the column name for the subtotal_aggregation field
     */
    const COL_SUBTOTAL_AGGREGATION = 'spy_sales_order_item.subtotal_aggregation';

    /**
     * the column name for the tax_amount field
     */
    const COL_TAX_AMOUNT = 'spy_sales_order_item.tax_amount';

    /**
     * the column name for the tax_amount_after_cancellation field
     */
    const COL_TAX_AMOUNT_AFTER_CANCELLATION = 'spy_sales_order_item.tax_amount_after_cancellation';

    /**
     * the column name for the tax_amount_full_aggregation field
     */
    const COL_TAX_AMOUNT_FULL_AGGREGATION = 'spy_sales_order_item.tax_amount_full_aggregation';

    /**
     * the column name for the tax_rate field
     */
    const COL_TAX_RATE = 'spy_sales_order_item.tax_rate';

    /**
     * the column name for the tax_rate_average_aggregation field
     */
    const COL_TAX_RATE_AVERAGE_AGGREGATION = 'spy_sales_order_item.tax_rate_average_aggregation';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'spy_sales_order_item.uuid';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_sales_order_item.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_sales_order_item.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('IdSalesOrderItem', 'FkOmsOrderItemState', 'FkOmsOrderProcess', 'FkSalesOrder', 'FkSalesOrderItemBundle', 'FkSalesShipment', 'Amount', 'AmountBaseMeasurementUnitName', 'AmountMeasurementUnitCode', 'AmountMeasurementUnitConversion', 'AmountMeasurementUnitName', 'AmountMeasurementUnitPrecision', 'AmountSku', 'CanceledAmount', 'CartNote', 'DiscountAmountAggregation', 'DiscountAmountFullAggregation', 'ExpensePriceAggregation', 'GrossPrice', 'GroupKey', 'IsQuantitySplittable', 'LastStateChange', 'Name', 'NetPrice', 'OrderItemReference', 'Price', 'PriceToPayAggregation', 'ProductOptionPriceAggregation', 'Quantity', 'QuantityBaseMeasurementUnitName', 'QuantityMeasurementUnitCode', 'QuantityMeasurementUnitConversion', 'QuantityMeasurementUnitName', 'QuantityMeasurementUnitPrecision', 'RefundableAmount', 'RemunerationAmount', 'Sku', 'SubtotalAggregation', 'TaxAmount', 'TaxAmountAfterCancellation', 'TaxAmountFullAggregation', 'TaxRate', 'TaxRateAverageAggregation', 'Uuid', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idSalesOrderItem', 'fkOmsOrderItemState', 'fkOmsOrderProcess', 'fkSalesOrder', 'fkSalesOrderItemBundle', 'fkSalesShipment', 'amount', 'amountBaseMeasurementUnitName', 'amountMeasurementUnitCode', 'amountMeasurementUnitConversion', 'amountMeasurementUnitName', 'amountMeasurementUnitPrecision', 'amountSku', 'canceledAmount', 'cartNote', 'discountAmountAggregation', 'discountAmountFullAggregation', 'expensePriceAggregation', 'grossPrice', 'groupKey', 'isQuantitySplittable', 'lastStateChange', 'name', 'netPrice', 'orderItemReference', 'price', 'priceToPayAggregation', 'productOptionPriceAggregation', 'quantity', 'quantityBaseMeasurementUnitName', 'quantityMeasurementUnitCode', 'quantityMeasurementUnitConversion', 'quantityMeasurementUnitName', 'quantityMeasurementUnitPrecision', 'refundableAmount', 'remunerationAmount', 'sku', 'subtotalAggregation', 'taxAmount', 'taxAmountAfterCancellation', 'taxAmountFullAggregation', 'taxRate', 'taxRateAverageAggregation', 'uuid', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE, SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT, SpySalesOrderItemTableMap::COL_AMOUNT, SpySalesOrderItemTableMap::COL_AMOUNT_BASE_MEASUREMENT_UNIT_NAME, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CODE, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CONVERSION, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_NAME, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_PRECISION, SpySalesOrderItemTableMap::COL_AMOUNT_SKU, SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT, SpySalesOrderItemTableMap::COL_CART_NOTE, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION, SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION, SpySalesOrderItemTableMap::COL_GROSS_PRICE, SpySalesOrderItemTableMap::COL_GROUP_KEY, SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE, SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE, SpySalesOrderItemTableMap::COL_NAME, SpySalesOrderItemTableMap::COL_NET_PRICE, SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE, SpySalesOrderItemTableMap::COL_PRICE, SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION, SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION, SpySalesOrderItemTableMap::COL_QUANTITY, SpySalesOrderItemTableMap::COL_QUANTITY_BASE_MEASUREMENT_UNIT_NAME, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CODE, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CONVERSION, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_NAME, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_PRECISION, SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT, SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT, SpySalesOrderItemTableMap::COL_SKU, SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION, SpySalesOrderItemTableMap::COL_TAX_AMOUNT, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION, SpySalesOrderItemTableMap::COL_TAX_RATE, SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION, SpySalesOrderItemTableMap::COL_UUID, SpySalesOrderItemTableMap::COL_CREATED_AT, SpySalesOrderItemTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_sales_order_item', 'fk_oms_order_item_state', 'fk_oms_order_process', 'fk_sales_order', 'fk_sales_order_item_bundle', 'fk_sales_shipment', 'amount', 'amount_base_measurement_unit_name', 'amount_measurement_unit_code', 'amount_measurement_unit_conversion', 'amount_measurement_unit_name', 'amount_measurement_unit_precision', 'amount_sku', 'canceled_amount', 'cart_note', 'discount_amount_aggregation', 'discount_amount_full_aggregation', 'expense_price_aggregation', 'gross_price', 'group_key', 'is_quantity_splittable', 'last_state_change', 'name', 'net_price', 'order_item_reference', 'price', 'price_to_pay_aggregation', 'product_option_price_aggregation', 'quantity', 'quantity_base_measurement_unit_name', 'quantity_measurement_unit_code', 'quantity_measurement_unit_conversion', 'quantity_measurement_unit_name', 'quantity_measurement_unit_precision', 'refundable_amount', 'remuneration_amount', 'sku', 'subtotal_aggregation', 'tax_amount', 'tax_amount_after_cancellation', 'tax_amount_full_aggregation', 'tax_rate', 'tax_rate_average_aggregation', 'uuid', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdSalesOrderItem' => 0, 'FkOmsOrderItemState' => 1, 'FkOmsOrderProcess' => 2, 'FkSalesOrder' => 3, 'FkSalesOrderItemBundle' => 4, 'FkSalesShipment' => 5, 'Amount' => 6, 'AmountBaseMeasurementUnitName' => 7, 'AmountMeasurementUnitCode' => 8, 'AmountMeasurementUnitConversion' => 9, 'AmountMeasurementUnitName' => 10, 'AmountMeasurementUnitPrecision' => 11, 'AmountSku' => 12, 'CanceledAmount' => 13, 'CartNote' => 14, 'DiscountAmountAggregation' => 15, 'DiscountAmountFullAggregation' => 16, 'ExpensePriceAggregation' => 17, 'GrossPrice' => 18, 'GroupKey' => 19, 'IsQuantitySplittable' => 20, 'LastStateChange' => 21, 'Name' => 22, 'NetPrice' => 23, 'OrderItemReference' => 24, 'Price' => 25, 'PriceToPayAggregation' => 26, 'ProductOptionPriceAggregation' => 27, 'Quantity' => 28, 'QuantityBaseMeasurementUnitName' => 29, 'QuantityMeasurementUnitCode' => 30, 'QuantityMeasurementUnitConversion' => 31, 'QuantityMeasurementUnitName' => 32, 'QuantityMeasurementUnitPrecision' => 33, 'RefundableAmount' => 34, 'RemunerationAmount' => 35, 'Sku' => 36, 'SubtotalAggregation' => 37, 'TaxAmount' => 38, 'TaxAmountAfterCancellation' => 39, 'TaxAmountFullAggregation' => 40, 'TaxRate' => 41, 'TaxRateAverageAggregation' => 42, 'Uuid' => 43, 'CreatedAt' => 44, 'UpdatedAt' => 45, ),
        self::TYPE_CAMELNAME     => array('idSalesOrderItem' => 0, 'fkOmsOrderItemState' => 1, 'fkOmsOrderProcess' => 2, 'fkSalesOrder' => 3, 'fkSalesOrderItemBundle' => 4, 'fkSalesShipment' => 5, 'amount' => 6, 'amountBaseMeasurementUnitName' => 7, 'amountMeasurementUnitCode' => 8, 'amountMeasurementUnitConversion' => 9, 'amountMeasurementUnitName' => 10, 'amountMeasurementUnitPrecision' => 11, 'amountSku' => 12, 'canceledAmount' => 13, 'cartNote' => 14, 'discountAmountAggregation' => 15, 'discountAmountFullAggregation' => 16, 'expensePriceAggregation' => 17, 'grossPrice' => 18, 'groupKey' => 19, 'isQuantitySplittable' => 20, 'lastStateChange' => 21, 'name' => 22, 'netPrice' => 23, 'orderItemReference' => 24, 'price' => 25, 'priceToPayAggregation' => 26, 'productOptionPriceAggregation' => 27, 'quantity' => 28, 'quantityBaseMeasurementUnitName' => 29, 'quantityMeasurementUnitCode' => 30, 'quantityMeasurementUnitConversion' => 31, 'quantityMeasurementUnitName' => 32, 'quantityMeasurementUnitPrecision' => 33, 'refundableAmount' => 34, 'remunerationAmount' => 35, 'sku' => 36, 'subtotalAggregation' => 37, 'taxAmount' => 38, 'taxAmountAfterCancellation' => 39, 'taxAmountFullAggregation' => 40, 'taxRate' => 41, 'taxRateAverageAggregation' => 42, 'uuid' => 43, 'createdAt' => 44, 'updatedAt' => 45, ),
        self::TYPE_COLNAME       => array(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM => 0, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE => 1, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS => 2, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER => 3, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE => 4, SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT => 5, SpySalesOrderItemTableMap::COL_AMOUNT => 6, SpySalesOrderItemTableMap::COL_AMOUNT_BASE_MEASUREMENT_UNIT_NAME => 7, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CODE => 8, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CONVERSION => 9, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_NAME => 10, SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_PRECISION => 11, SpySalesOrderItemTableMap::COL_AMOUNT_SKU => 12, SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT => 13, SpySalesOrderItemTableMap::COL_CART_NOTE => 14, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION => 15, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION => 16, SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION => 17, SpySalesOrderItemTableMap::COL_GROSS_PRICE => 18, SpySalesOrderItemTableMap::COL_GROUP_KEY => 19, SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE => 20, SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE => 21, SpySalesOrderItemTableMap::COL_NAME => 22, SpySalesOrderItemTableMap::COL_NET_PRICE => 23, SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE => 24, SpySalesOrderItemTableMap::COL_PRICE => 25, SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION => 26, SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION => 27, SpySalesOrderItemTableMap::COL_QUANTITY => 28, SpySalesOrderItemTableMap::COL_QUANTITY_BASE_MEASUREMENT_UNIT_NAME => 29, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CODE => 30, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CONVERSION => 31, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_NAME => 32, SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_PRECISION => 33, SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT => 34, SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT => 35, SpySalesOrderItemTableMap::COL_SKU => 36, SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION => 37, SpySalesOrderItemTableMap::COL_TAX_AMOUNT => 38, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION => 39, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION => 40, SpySalesOrderItemTableMap::COL_TAX_RATE => 41, SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION => 42, SpySalesOrderItemTableMap::COL_UUID => 43, SpySalesOrderItemTableMap::COL_CREATED_AT => 44, SpySalesOrderItemTableMap::COL_UPDATED_AT => 45, ),
        self::TYPE_FIELDNAME     => array('id_sales_order_item' => 0, 'fk_oms_order_item_state' => 1, 'fk_oms_order_process' => 2, 'fk_sales_order' => 3, 'fk_sales_order_item_bundle' => 4, 'fk_sales_shipment' => 5, 'amount' => 6, 'amount_base_measurement_unit_name' => 7, 'amount_measurement_unit_code' => 8, 'amount_measurement_unit_conversion' => 9, 'amount_measurement_unit_name' => 10, 'amount_measurement_unit_precision' => 11, 'amount_sku' => 12, 'canceled_amount' => 13, 'cart_note' => 14, 'discount_amount_aggregation' => 15, 'discount_amount_full_aggregation' => 16, 'expense_price_aggregation' => 17, 'gross_price' => 18, 'group_key' => 19, 'is_quantity_splittable' => 20, 'last_state_change' => 21, 'name' => 22, 'net_price' => 23, 'order_item_reference' => 24, 'price' => 25, 'price_to_pay_aggregation' => 26, 'product_option_price_aggregation' => 27, 'quantity' => 28, 'quantity_base_measurement_unit_name' => 29, 'quantity_measurement_unit_code' => 30, 'quantity_measurement_unit_conversion' => 31, 'quantity_measurement_unit_name' => 32, 'quantity_measurement_unit_precision' => 33, 'refundable_amount' => 34, 'remuneration_amount' => 35, 'sku' => 36, 'subtotal_aggregation' => 37, 'tax_amount' => 38, 'tax_amount_after_cancellation' => 39, 'tax_amount_full_aggregation' => 40, 'tax_rate' => 41, 'tax_rate_average_aggregation' => 42, 'uuid' => 43, 'created_at' => 44, 'updated_at' => 45, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'SpySalesOrderItem.IdSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'idSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'spySalesOrderItem.idSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM' => 'ID_SALES_ORDER_ITEM',
        'COL_ID_SALES_ORDER_ITEM' => 'ID_SALES_ORDER_ITEM',
        'id_sales_order_item' => 'ID_SALES_ORDER_ITEM',
        'spy_sales_order_item.id_sales_order_item' => 'ID_SALES_ORDER_ITEM',
        'FkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'SpySalesOrderItem.FkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'fkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'spySalesOrderItem.fkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE' => 'FK_OMS_ORDER_ITEM_STATE',
        'COL_FK_OMS_ORDER_ITEM_STATE' => 'FK_OMS_ORDER_ITEM_STATE',
        'fk_oms_order_item_state' => 'FK_OMS_ORDER_ITEM_STATE',
        'spy_sales_order_item.fk_oms_order_item_state' => 'FK_OMS_ORDER_ITEM_STATE',
        'FkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'SpySalesOrderItem.FkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'fkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'spySalesOrderItem.fkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS' => 'FK_OMS_ORDER_PROCESS',
        'COL_FK_OMS_ORDER_PROCESS' => 'FK_OMS_ORDER_PROCESS',
        'fk_oms_order_process' => 'FK_OMS_ORDER_PROCESS',
        'spy_sales_order_item.fk_oms_order_process' => 'FK_OMS_ORDER_PROCESS',
        'FkSalesOrder' => 'FK_SALES_ORDER',
        'SpySalesOrderItem.FkSalesOrder' => 'FK_SALES_ORDER',
        'fkSalesOrder' => 'FK_SALES_ORDER',
        'spySalesOrderItem.fkSalesOrder' => 'FK_SALES_ORDER',
        'SpySalesOrderItemTableMap::COL_FK_SALES_ORDER' => 'FK_SALES_ORDER',
        'COL_FK_SALES_ORDER' => 'FK_SALES_ORDER',
        'fk_sales_order' => 'FK_SALES_ORDER',
        'spy_sales_order_item.fk_sales_order' => 'FK_SALES_ORDER',
        'FkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'SpySalesOrderItem.FkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'fkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'spySalesOrderItem.fkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'COL_FK_SALES_ORDER_ITEM_BUNDLE' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'fk_sales_order_item_bundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'spy_sales_order_item.fk_sales_order_item_bundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'FkSalesShipment' => 'FK_SALES_SHIPMENT',
        'SpySalesOrderItem.FkSalesShipment' => 'FK_SALES_SHIPMENT',
        'fkSalesShipment' => 'FK_SALES_SHIPMENT',
        'spySalesOrderItem.fkSalesShipment' => 'FK_SALES_SHIPMENT',
        'SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT' => 'FK_SALES_SHIPMENT',
        'COL_FK_SALES_SHIPMENT' => 'FK_SALES_SHIPMENT',
        'fk_sales_shipment' => 'FK_SALES_SHIPMENT',
        'spy_sales_order_item.fk_sales_shipment' => 'FK_SALES_SHIPMENT',
        'Amount' => 'AMOUNT',
        'SpySalesOrderItem.Amount' => 'AMOUNT',
        'amount' => 'AMOUNT',
        'spySalesOrderItem.amount' => 'AMOUNT',
        'SpySalesOrderItemTableMap::COL_AMOUNT' => 'AMOUNT',
        'COL_AMOUNT' => 'AMOUNT',
        'spy_sales_order_item.amount' => 'AMOUNT',
        'AmountBaseMeasurementUnitName' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItem.AmountBaseMeasurementUnitName' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'amountBaseMeasurementUnitName' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'spySalesOrderItem.amountBaseMeasurementUnitName' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItemTableMap::COL_AMOUNT_BASE_MEASUREMENT_UNIT_NAME' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'COL_AMOUNT_BASE_MEASUREMENT_UNIT_NAME' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'amount_base_measurement_unit_name' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'spy_sales_order_item.amount_base_measurement_unit_name' => 'AMOUNT_BASE_MEASUREMENT_UNIT_NAME',
        'AmountMeasurementUnitCode' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'SpySalesOrderItem.AmountMeasurementUnitCode' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'amountMeasurementUnitCode' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'spySalesOrderItem.amountMeasurementUnitCode' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CODE' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'COL_AMOUNT_MEASUREMENT_UNIT_CODE' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'amount_measurement_unit_code' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'spy_sales_order_item.amount_measurement_unit_code' => 'AMOUNT_MEASUREMENT_UNIT_CODE',
        'AmountMeasurementUnitConversion' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'SpySalesOrderItem.AmountMeasurementUnitConversion' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'amountMeasurementUnitConversion' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'spySalesOrderItem.amountMeasurementUnitConversion' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CONVERSION' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'COL_AMOUNT_MEASUREMENT_UNIT_CONVERSION' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'amount_measurement_unit_conversion' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'spy_sales_order_item.amount_measurement_unit_conversion' => 'AMOUNT_MEASUREMENT_UNIT_CONVERSION',
        'AmountMeasurementUnitName' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItem.AmountMeasurementUnitName' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'amountMeasurementUnitName' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'spySalesOrderItem.amountMeasurementUnitName' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_NAME' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'COL_AMOUNT_MEASUREMENT_UNIT_NAME' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'amount_measurement_unit_name' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'spy_sales_order_item.amount_measurement_unit_name' => 'AMOUNT_MEASUREMENT_UNIT_NAME',
        'AmountMeasurementUnitPrecision' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'SpySalesOrderItem.AmountMeasurementUnitPrecision' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'amountMeasurementUnitPrecision' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'spySalesOrderItem.amountMeasurementUnitPrecision' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_PRECISION' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'COL_AMOUNT_MEASUREMENT_UNIT_PRECISION' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'amount_measurement_unit_precision' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'spy_sales_order_item.amount_measurement_unit_precision' => 'AMOUNT_MEASUREMENT_UNIT_PRECISION',
        'AmountSku' => 'AMOUNT_SKU',
        'SpySalesOrderItem.AmountSku' => 'AMOUNT_SKU',
        'amountSku' => 'AMOUNT_SKU',
        'spySalesOrderItem.amountSku' => 'AMOUNT_SKU',
        'SpySalesOrderItemTableMap::COL_AMOUNT_SKU' => 'AMOUNT_SKU',
        'COL_AMOUNT_SKU' => 'AMOUNT_SKU',
        'amount_sku' => 'AMOUNT_SKU',
        'spy_sales_order_item.amount_sku' => 'AMOUNT_SKU',
        'CanceledAmount' => 'CANCELED_AMOUNT',
        'SpySalesOrderItem.CanceledAmount' => 'CANCELED_AMOUNT',
        'canceledAmount' => 'CANCELED_AMOUNT',
        'spySalesOrderItem.canceledAmount' => 'CANCELED_AMOUNT',
        'SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT' => 'CANCELED_AMOUNT',
        'COL_CANCELED_AMOUNT' => 'CANCELED_AMOUNT',
        'canceled_amount' => 'CANCELED_AMOUNT',
        'spy_sales_order_item.canceled_amount' => 'CANCELED_AMOUNT',
        'CartNote' => 'CART_NOTE',
        'SpySalesOrderItem.CartNote' => 'CART_NOTE',
        'cartNote' => 'CART_NOTE',
        'spySalesOrderItem.cartNote' => 'CART_NOTE',
        'SpySalesOrderItemTableMap::COL_CART_NOTE' => 'CART_NOTE',
        'COL_CART_NOTE' => 'CART_NOTE',
        'cart_note' => 'CART_NOTE',
        'spy_sales_order_item.cart_note' => 'CART_NOTE',
        'DiscountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'SpySalesOrderItem.DiscountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'discountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'spySalesOrderItem.discountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'COL_DISCOUNT_AMOUNT_AGGREGATION' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'discount_amount_aggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'spy_sales_order_item.discount_amount_aggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'DiscountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItem.DiscountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'discountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'spySalesOrderItem.discountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'COL_DISCOUNT_AMOUNT_FULL_AGGREGATION' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'discount_amount_full_aggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'spy_sales_order_item.discount_amount_full_aggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'ExpensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'SpySalesOrderItem.ExpensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'expensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'spySalesOrderItem.expensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION' => 'EXPENSE_PRICE_AGGREGATION',
        'COL_EXPENSE_PRICE_AGGREGATION' => 'EXPENSE_PRICE_AGGREGATION',
        'expense_price_aggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'spy_sales_order_item.expense_price_aggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'GrossPrice' => 'GROSS_PRICE',
        'SpySalesOrderItem.GrossPrice' => 'GROSS_PRICE',
        'grossPrice' => 'GROSS_PRICE',
        'spySalesOrderItem.grossPrice' => 'GROSS_PRICE',
        'SpySalesOrderItemTableMap::COL_GROSS_PRICE' => 'GROSS_PRICE',
        'COL_GROSS_PRICE' => 'GROSS_PRICE',
        'gross_price' => 'GROSS_PRICE',
        'spy_sales_order_item.gross_price' => 'GROSS_PRICE',
        'GroupKey' => 'GROUP_KEY',
        'SpySalesOrderItem.GroupKey' => 'GROUP_KEY',
        'groupKey' => 'GROUP_KEY',
        'spySalesOrderItem.groupKey' => 'GROUP_KEY',
        'SpySalesOrderItemTableMap::COL_GROUP_KEY' => 'GROUP_KEY',
        'COL_GROUP_KEY' => 'GROUP_KEY',
        'group_key' => 'GROUP_KEY',
        'spy_sales_order_item.group_key' => 'GROUP_KEY',
        'IsQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'SpySalesOrderItem.IsQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'isQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'spySalesOrderItem.isQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE' => 'IS_QUANTITY_SPLITTABLE',
        'COL_IS_QUANTITY_SPLITTABLE' => 'IS_QUANTITY_SPLITTABLE',
        'is_quantity_splittable' => 'IS_QUANTITY_SPLITTABLE',
        'spy_sales_order_item.is_quantity_splittable' => 'IS_QUANTITY_SPLITTABLE',
        'LastStateChange' => 'LAST_STATE_CHANGE',
        'SpySalesOrderItem.LastStateChange' => 'LAST_STATE_CHANGE',
        'lastStateChange' => 'LAST_STATE_CHANGE',
        'spySalesOrderItem.lastStateChange' => 'LAST_STATE_CHANGE',
        'SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE' => 'LAST_STATE_CHANGE',
        'COL_LAST_STATE_CHANGE' => 'LAST_STATE_CHANGE',
        'last_state_change' => 'LAST_STATE_CHANGE',
        'spy_sales_order_item.last_state_change' => 'LAST_STATE_CHANGE',
        'Name' => 'NAME',
        'SpySalesOrderItem.Name' => 'NAME',
        'name' => 'NAME',
        'spySalesOrderItem.name' => 'NAME',
        'SpySalesOrderItemTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_sales_order_item.name' => 'NAME',
        'NetPrice' => 'NET_PRICE',
        'SpySalesOrderItem.NetPrice' => 'NET_PRICE',
        'netPrice' => 'NET_PRICE',
        'spySalesOrderItem.netPrice' => 'NET_PRICE',
        'SpySalesOrderItemTableMap::COL_NET_PRICE' => 'NET_PRICE',
        'COL_NET_PRICE' => 'NET_PRICE',
        'net_price' => 'NET_PRICE',
        'spy_sales_order_item.net_price' => 'NET_PRICE',
        'OrderItemReference' => 'ORDER_ITEM_REFERENCE',
        'SpySalesOrderItem.OrderItemReference' => 'ORDER_ITEM_REFERENCE',
        'orderItemReference' => 'ORDER_ITEM_REFERENCE',
        'spySalesOrderItem.orderItemReference' => 'ORDER_ITEM_REFERENCE',
        'SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE' => 'ORDER_ITEM_REFERENCE',
        'COL_ORDER_ITEM_REFERENCE' => 'ORDER_ITEM_REFERENCE',
        'order_item_reference' => 'ORDER_ITEM_REFERENCE',
        'spy_sales_order_item.order_item_reference' => 'ORDER_ITEM_REFERENCE',
        'Price' => 'PRICE',
        'SpySalesOrderItem.Price' => 'PRICE',
        'price' => 'PRICE',
        'spySalesOrderItem.price' => 'PRICE',
        'SpySalesOrderItemTableMap::COL_PRICE' => 'PRICE',
        'COL_PRICE' => 'PRICE',
        'spy_sales_order_item.price' => 'PRICE',
        'PriceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'SpySalesOrderItem.PriceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'priceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'spySalesOrderItem.priceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION' => 'PRICE_TO_PAY_AGGREGATION',
        'COL_PRICE_TO_PAY_AGGREGATION' => 'PRICE_TO_PAY_AGGREGATION',
        'price_to_pay_aggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'spy_sales_order_item.price_to_pay_aggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'ProductOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'SpySalesOrderItem.ProductOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'productOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'spySalesOrderItem.productOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'COL_PRODUCT_OPTION_PRICE_AGGREGATION' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'product_option_price_aggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'spy_sales_order_item.product_option_price_aggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'Quantity' => 'QUANTITY',
        'SpySalesOrderItem.Quantity' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'spySalesOrderItem.quantity' => 'QUANTITY',
        'SpySalesOrderItemTableMap::COL_QUANTITY' => 'QUANTITY',
        'COL_QUANTITY' => 'QUANTITY',
        'spy_sales_order_item.quantity' => 'QUANTITY',
        'QuantityBaseMeasurementUnitName' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItem.QuantityBaseMeasurementUnitName' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'quantityBaseMeasurementUnitName' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'spySalesOrderItem.quantityBaseMeasurementUnitName' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItemTableMap::COL_QUANTITY_BASE_MEASUREMENT_UNIT_NAME' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'COL_QUANTITY_BASE_MEASUREMENT_UNIT_NAME' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'quantity_base_measurement_unit_name' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'spy_sales_order_item.quantity_base_measurement_unit_name' => 'QUANTITY_BASE_MEASUREMENT_UNIT_NAME',
        'QuantityMeasurementUnitCode' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'SpySalesOrderItem.QuantityMeasurementUnitCode' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'quantityMeasurementUnitCode' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'spySalesOrderItem.quantityMeasurementUnitCode' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CODE' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'COL_QUANTITY_MEASUREMENT_UNIT_CODE' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'quantity_measurement_unit_code' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'spy_sales_order_item.quantity_measurement_unit_code' => 'QUANTITY_MEASUREMENT_UNIT_CODE',
        'QuantityMeasurementUnitConversion' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'SpySalesOrderItem.QuantityMeasurementUnitConversion' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'quantityMeasurementUnitConversion' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'spySalesOrderItem.quantityMeasurementUnitConversion' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CONVERSION' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'COL_QUANTITY_MEASUREMENT_UNIT_CONVERSION' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'quantity_measurement_unit_conversion' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'spy_sales_order_item.quantity_measurement_unit_conversion' => 'QUANTITY_MEASUREMENT_UNIT_CONVERSION',
        'QuantityMeasurementUnitName' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItem.QuantityMeasurementUnitName' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'quantityMeasurementUnitName' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'spySalesOrderItem.quantityMeasurementUnitName' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_NAME' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'COL_QUANTITY_MEASUREMENT_UNIT_NAME' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'quantity_measurement_unit_name' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'spy_sales_order_item.quantity_measurement_unit_name' => 'QUANTITY_MEASUREMENT_UNIT_NAME',
        'QuantityMeasurementUnitPrecision' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'SpySalesOrderItem.QuantityMeasurementUnitPrecision' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'quantityMeasurementUnitPrecision' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'spySalesOrderItem.quantityMeasurementUnitPrecision' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_PRECISION' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'COL_QUANTITY_MEASUREMENT_UNIT_PRECISION' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'quantity_measurement_unit_precision' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'spy_sales_order_item.quantity_measurement_unit_precision' => 'QUANTITY_MEASUREMENT_UNIT_PRECISION',
        'RefundableAmount' => 'REFUNDABLE_AMOUNT',
        'SpySalesOrderItem.RefundableAmount' => 'REFUNDABLE_AMOUNT',
        'refundableAmount' => 'REFUNDABLE_AMOUNT',
        'spySalesOrderItem.refundableAmount' => 'REFUNDABLE_AMOUNT',
        'SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT' => 'REFUNDABLE_AMOUNT',
        'COL_REFUNDABLE_AMOUNT' => 'REFUNDABLE_AMOUNT',
        'refundable_amount' => 'REFUNDABLE_AMOUNT',
        'spy_sales_order_item.refundable_amount' => 'REFUNDABLE_AMOUNT',
        'RemunerationAmount' => 'REMUNERATION_AMOUNT',
        'SpySalesOrderItem.RemunerationAmount' => 'REMUNERATION_AMOUNT',
        'remunerationAmount' => 'REMUNERATION_AMOUNT',
        'spySalesOrderItem.remunerationAmount' => 'REMUNERATION_AMOUNT',
        'SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT' => 'REMUNERATION_AMOUNT',
        'COL_REMUNERATION_AMOUNT' => 'REMUNERATION_AMOUNT',
        'remuneration_amount' => 'REMUNERATION_AMOUNT',
        'spy_sales_order_item.remuneration_amount' => 'REMUNERATION_AMOUNT',
        'Sku' => 'SKU',
        'SpySalesOrderItem.Sku' => 'SKU',
        'sku' => 'SKU',
        'spySalesOrderItem.sku' => 'SKU',
        'SpySalesOrderItemTableMap::COL_SKU' => 'SKU',
        'COL_SKU' => 'SKU',
        'spy_sales_order_item.sku' => 'SKU',
        'SubtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'SpySalesOrderItem.SubtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'subtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'spySalesOrderItem.subtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION' => 'SUBTOTAL_AGGREGATION',
        'COL_SUBTOTAL_AGGREGATION' => 'SUBTOTAL_AGGREGATION',
        'subtotal_aggregation' => 'SUBTOTAL_AGGREGATION',
        'spy_sales_order_item.subtotal_aggregation' => 'SUBTOTAL_AGGREGATION',
        'TaxAmount' => 'TAX_AMOUNT',
        'SpySalesOrderItem.TaxAmount' => 'TAX_AMOUNT',
        'taxAmount' => 'TAX_AMOUNT',
        'spySalesOrderItem.taxAmount' => 'TAX_AMOUNT',
        'SpySalesOrderItemTableMap::COL_TAX_AMOUNT' => 'TAX_AMOUNT',
        'COL_TAX_AMOUNT' => 'TAX_AMOUNT',
        'tax_amount' => 'TAX_AMOUNT',
        'spy_sales_order_item.tax_amount' => 'TAX_AMOUNT',
        'TaxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'SpySalesOrderItem.TaxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'taxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'spySalesOrderItem.taxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'COL_TAX_AMOUNT_AFTER_CANCELLATION' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'tax_amount_after_cancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'spy_sales_order_item.tax_amount_after_cancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'TaxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItem.TaxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'taxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'spySalesOrderItem.taxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'COL_TAX_AMOUNT_FULL_AGGREGATION' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'tax_amount_full_aggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'spy_sales_order_item.tax_amount_full_aggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'TaxRate' => 'TAX_RATE',
        'SpySalesOrderItem.TaxRate' => 'TAX_RATE',
        'taxRate' => 'TAX_RATE',
        'spySalesOrderItem.taxRate' => 'TAX_RATE',
        'SpySalesOrderItemTableMap::COL_TAX_RATE' => 'TAX_RATE',
        'COL_TAX_RATE' => 'TAX_RATE',
        'tax_rate' => 'TAX_RATE',
        'spy_sales_order_item.tax_rate' => 'TAX_RATE',
        'TaxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'SpySalesOrderItem.TaxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'taxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'spySalesOrderItem.taxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'COL_TAX_RATE_AVERAGE_AGGREGATION' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'tax_rate_average_aggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'spy_sales_order_item.tax_rate_average_aggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'Uuid' => 'UUID',
        'SpySalesOrderItem.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spySalesOrderItem.uuid' => 'UUID',
        'SpySalesOrderItemTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_sales_order_item.uuid' => 'UUID',
        'CreatedAt' => 'CREATED_AT',
        'SpySalesOrderItem.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spySalesOrderItem.createdAt' => 'CREATED_AT',
        'SpySalesOrderItemTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_sales_order_item.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpySalesOrderItem.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spySalesOrderItem.updatedAt' => 'UPDATED_AT',
        'SpySalesOrderItemTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_sales_order_item.updated_at' => 'UPDATED_AT',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('spy_sales_order_item');
        $this->setPhpName('SpySalesOrderItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItem');
        $this->setPackage('src.Orm.Zed.Sales.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_sales_order_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_order_item', 'IdSalesOrderItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_oms_order_item_state', 'FkOmsOrderItemState', 'INTEGER', 'spy_oms_order_item_state', 'id_oms_order_item_state', true, null, null);
        $this->addForeignKey('fk_oms_order_process', 'FkOmsOrderProcess', 'INTEGER', 'spy_oms_order_process', 'id_oms_order_process', false, null, null);
        $this->addForeignKey('fk_sales_order', 'FkSalesOrder', 'INTEGER', 'spy_sales_order', 'id_sales_order', true, null, null);
        $this->addForeignKey('fk_sales_order_item_bundle', 'FkSalesOrderItemBundle', 'INTEGER', 'spy_sales_order_item_bundle', 'id_sales_order_item_bundle', false, null, null);
        $this->addForeignKey('fk_sales_shipment', 'FkSalesShipment', 'INTEGER', 'spy_sales_shipment', 'id_sales_shipment', false, null, null);
        $this->addColumn('amount', 'Amount', 'DECIMAL', false, 20, null);
        $this->addColumn('amount_base_measurement_unit_name', 'AmountBaseMeasurementUnitName', 'VARCHAR', false, 255, null);
        $this->addColumn('amount_measurement_unit_code', 'AmountMeasurementUnitCode', 'VARCHAR', false, 255, null);
        $this->addColumn('amount_measurement_unit_conversion', 'AmountMeasurementUnitConversion', 'FLOAT', false, null, null);
        $this->addColumn('amount_measurement_unit_name', 'AmountMeasurementUnitName', 'VARCHAR', false, 255, null);
        $this->addColumn('amount_measurement_unit_precision', 'AmountMeasurementUnitPrecision', 'INTEGER', false, null, null);
        $this->addColumn('amount_sku', 'AmountSku', 'VARCHAR', false, 255, null);
        $this->addColumn('canceled_amount', 'CanceledAmount', 'INTEGER', false, null, 0);
        $this->addColumn('cart_note', 'CartNote', 'VARCHAR', false, 255, null);
        $this->addColumn('discount_amount_aggregation', 'DiscountAmountAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('discount_amount_full_aggregation', 'DiscountAmountFullAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('expense_price_aggregation', 'ExpensePriceAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('gross_price', 'GrossPrice', 'INTEGER', true, null, null);
        $this->addColumn('group_key', 'GroupKey', 'VARCHAR', false, 255, null);
        $this->addColumn('is_quantity_splittable', 'IsQuantitySplittable', 'BOOLEAN', true, 1, true);
        $this->addColumn('last_state_change', 'LastStateChange', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('net_price', 'NetPrice', 'INTEGER', false, null, 0);
        $this->addColumn('order_item_reference', 'OrderItemReference', 'VARCHAR', false, 255, null);
        $this->addColumn('price', 'Price', 'INTEGER', false, null, 0);
        $this->addColumn('price_to_pay_aggregation', 'PriceToPayAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('product_option_price_aggregation', 'ProductOptionPriceAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('quantity', 'Quantity', 'INTEGER', true, null, 1);
        $this->addColumn('quantity_base_measurement_unit_name', 'QuantityBaseMeasurementUnitName', 'VARCHAR', false, 255, null);
        $this->addColumn('quantity_measurement_unit_code', 'QuantityMeasurementUnitCode', 'VARCHAR', false, 255, null);
        $this->addColumn('quantity_measurement_unit_conversion', 'QuantityMeasurementUnitConversion', 'FLOAT', false, null, null);
        $this->addColumn('quantity_measurement_unit_name', 'QuantityMeasurementUnitName', 'VARCHAR', false, 255, null);
        $this->addColumn('quantity_measurement_unit_precision', 'QuantityMeasurementUnitPrecision', 'INTEGER', false, null, null);
        $this->addColumn('refundable_amount', 'RefundableAmount', 'INTEGER', false, null, 0);
        $this->addColumn('remuneration_amount', 'RemunerationAmount', 'INTEGER', false, null, null);
        $this->addColumn('sku', 'Sku', 'VARCHAR', true, 255, null);
        $this->addColumn('subtotal_aggregation', 'SubtotalAggregation', 'INTEGER', false, null, null);
        $this->addColumn('tax_amount', 'TaxAmount', 'INTEGER', false, null, 0);
        $this->addColumn('tax_amount_after_cancellation', 'TaxAmountAfterCancellation', 'INTEGER', false, null, 0);
        $this->addColumn('tax_amount_full_aggregation', 'TaxAmountFullAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('tax_rate', 'TaxRate', 'DECIMAL', false, 8, null);
        $this->addColumn('tax_rate_average_aggregation', 'TaxRateAverageAggregation', 'DECIMAL', false, 8, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SalesOrderItemBundle', '\\Orm\\Zed\\ProductBundle\\Persistence\\SpySalesOrderItemBundle', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order_item_bundle',
    1 => ':id_sales_order_item_bundle',
  ),
), null, null, null, false);
        $this->addRelation('Order', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, null, false);
        $this->addRelation('State', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderItemState', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_oms_order_item_state',
    1 => ':id_oms_order_item_state',
  ),
), null, null, null, false);
        $this->addRelation('Process', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderProcess', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_oms_order_process',
    1 => ':id_oms_order_process',
  ),
), null, null, null, false);
        $this->addRelation('SpySalesShipment', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesShipment', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_shipment',
    1 => ':id_sales_shipment',
  ),
), null, null, null, false);
        $this->addRelation('Nopayment', '\\Orm\\Zed\\Nopayment\\Persistence\\SpyNopaymentPaid', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Nopayments', false);
        $this->addRelation('TransitionLog', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsTransitionLog', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'TransitionLogs', false);
        $this->addRelation('StateHistory', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderItemStateHistory', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'StateHistories', false);
        $this->addRelation('EventTimeout', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsEventTimeout', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'EventTimeouts', false);
        $this->addRelation('Discount', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesDiscount', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Discounts', false);
        $this->addRelation('Option', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItemOption', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Options', false);
        $this->addRelation('Metadata', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItemMetadata', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Metadatas', false);
        $this->addRelation('SpySalesOrderConfiguredBundleItem', '\\Orm\\Zed\\SalesConfigurableBundle\\Persistence\\SpySalesOrderConfiguredBundleItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'SpySalesOrderConfiguredBundleItems', false);
        $this->addRelation('ReclamationItem', '\\Orm\\Zed\\SalesReclamation\\Persistence\\SpySalesReclamationItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'ReclamationItems', false);
        $this->addRelation('SpySalesReturnItem', '\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturnItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'SpySalesReturnItems', false);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_sales_order_item'],
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
        );
    } // getBehaviors()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SpySalesOrderItemTableMap::CLASS_DEFAULT : SpySalesOrderItemTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (SpySalesOrderItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpySalesOrderItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesOrderItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesOrderItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesOrderItemTableMap::OM_CLASS;
            /** @var SpySalesOrderItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesOrderItemTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SpySalesOrderItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesOrderItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesOrderItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesOrderItemTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_BASE_MEASUREMENT_UNIT_NAME);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CODE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CONVERSION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_NAME);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_PRECISION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_SKU);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_CART_NOTE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_GROSS_PRICE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_GROUP_KEY);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_NAME);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_NET_PRICE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_PRICE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_BASE_MEASUREMENT_UNIT_NAME);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CODE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CONVERSION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_NAME);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_PRECISION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_SKU);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_UUID);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_order_item');
            $criteria->addSelectColumn($alias . '.fk_oms_order_item_state');
            $criteria->addSelectColumn($alias . '.fk_oms_order_process');
            $criteria->addSelectColumn($alias . '.fk_sales_order');
            $criteria->addSelectColumn($alias . '.fk_sales_order_item_bundle');
            $criteria->addSelectColumn($alias . '.fk_sales_shipment');
            $criteria->addSelectColumn($alias . '.amount');
            $criteria->addSelectColumn($alias . '.amount_base_measurement_unit_name');
            $criteria->addSelectColumn($alias . '.amount_measurement_unit_code');
            $criteria->addSelectColumn($alias . '.amount_measurement_unit_conversion');
            $criteria->addSelectColumn($alias . '.amount_measurement_unit_name');
            $criteria->addSelectColumn($alias . '.amount_measurement_unit_precision');
            $criteria->addSelectColumn($alias . '.amount_sku');
            $criteria->addSelectColumn($alias . '.canceled_amount');
            $criteria->addSelectColumn($alias . '.cart_note');
            $criteria->addSelectColumn($alias . '.discount_amount_aggregation');
            $criteria->addSelectColumn($alias . '.discount_amount_full_aggregation');
            $criteria->addSelectColumn($alias . '.expense_price_aggregation');
            $criteria->addSelectColumn($alias . '.gross_price');
            $criteria->addSelectColumn($alias . '.group_key');
            $criteria->addSelectColumn($alias . '.is_quantity_splittable');
            $criteria->addSelectColumn($alias . '.last_state_change');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.net_price');
            $criteria->addSelectColumn($alias . '.order_item_reference');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.price_to_pay_aggregation');
            $criteria->addSelectColumn($alias . '.product_option_price_aggregation');
            $criteria->addSelectColumn($alias . '.quantity');
            $criteria->addSelectColumn($alias . '.quantity_base_measurement_unit_name');
            $criteria->addSelectColumn($alias . '.quantity_measurement_unit_code');
            $criteria->addSelectColumn($alias . '.quantity_measurement_unit_conversion');
            $criteria->addSelectColumn($alias . '.quantity_measurement_unit_name');
            $criteria->addSelectColumn($alias . '.quantity_measurement_unit_precision');
            $criteria->addSelectColumn($alias . '.refundable_amount');
            $criteria->addSelectColumn($alias . '.remuneration_amount');
            $criteria->addSelectColumn($alias . '.sku');
            $criteria->addSelectColumn($alias . '.subtotal_aggregation');
            $criteria->addSelectColumn($alias . '.tax_amount');
            $criteria->addSelectColumn($alias . '.tax_amount_after_cancellation');
            $criteria->addSelectColumn($alias . '.tax_amount_full_aggregation');
            $criteria->addSelectColumn($alias . '.tax_rate');
            $criteria->addSelectColumn($alias . '.tax_rate_average_aggregation');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria object containing the columns to remove.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function removeSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_BASE_MEASUREMENT_UNIT_NAME);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CODE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_CONVERSION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_NAME);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_MEASUREMENT_UNIT_PRECISION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_AMOUNT_SKU);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_CART_NOTE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_GROSS_PRICE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_GROUP_KEY);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_NET_PRICE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_PRICE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_BASE_MEASUREMENT_UNIT_NAME);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CODE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_CONVERSION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_NAME);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY_MEASUREMENT_UNIT_PRECISION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_SKU);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_order_item');
            $criteria->removeSelectColumn($alias . '.fk_oms_order_item_state');
            $criteria->removeSelectColumn($alias . '.fk_oms_order_process');
            $criteria->removeSelectColumn($alias . '.fk_sales_order');
            $criteria->removeSelectColumn($alias . '.fk_sales_order_item_bundle');
            $criteria->removeSelectColumn($alias . '.fk_sales_shipment');
            $criteria->removeSelectColumn($alias . '.amount');
            $criteria->removeSelectColumn($alias . '.amount_base_measurement_unit_name');
            $criteria->removeSelectColumn($alias . '.amount_measurement_unit_code');
            $criteria->removeSelectColumn($alias . '.amount_measurement_unit_conversion');
            $criteria->removeSelectColumn($alias . '.amount_measurement_unit_name');
            $criteria->removeSelectColumn($alias . '.amount_measurement_unit_precision');
            $criteria->removeSelectColumn($alias . '.amount_sku');
            $criteria->removeSelectColumn($alias . '.canceled_amount');
            $criteria->removeSelectColumn($alias . '.cart_note');
            $criteria->removeSelectColumn($alias . '.discount_amount_aggregation');
            $criteria->removeSelectColumn($alias . '.discount_amount_full_aggregation');
            $criteria->removeSelectColumn($alias . '.expense_price_aggregation');
            $criteria->removeSelectColumn($alias . '.gross_price');
            $criteria->removeSelectColumn($alias . '.group_key');
            $criteria->removeSelectColumn($alias . '.is_quantity_splittable');
            $criteria->removeSelectColumn($alias . '.last_state_change');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.net_price');
            $criteria->removeSelectColumn($alias . '.order_item_reference');
            $criteria->removeSelectColumn($alias . '.price');
            $criteria->removeSelectColumn($alias . '.price_to_pay_aggregation');
            $criteria->removeSelectColumn($alias . '.product_option_price_aggregation');
            $criteria->removeSelectColumn($alias . '.quantity');
            $criteria->removeSelectColumn($alias . '.quantity_base_measurement_unit_name');
            $criteria->removeSelectColumn($alias . '.quantity_measurement_unit_code');
            $criteria->removeSelectColumn($alias . '.quantity_measurement_unit_conversion');
            $criteria->removeSelectColumn($alias . '.quantity_measurement_unit_name');
            $criteria->removeSelectColumn($alias . '.quantity_measurement_unit_precision');
            $criteria->removeSelectColumn($alias . '.refundable_amount');
            $criteria->removeSelectColumn($alias . '.remuneration_amount');
            $criteria->removeSelectColumn($alias . '.sku');
            $criteria->removeSelectColumn($alias . '.subtotal_aggregation');
            $criteria->removeSelectColumn($alias . '.tax_amount');
            $criteria->removeSelectColumn($alias . '.tax_amount_after_cancellation');
            $criteria->removeSelectColumn($alias . '.tax_amount_full_aggregation');
            $criteria->removeSelectColumn($alias . '.tax_rate');
            $criteria->removeSelectColumn($alias . '.tax_rate_average_aggregation');
            $criteria->removeSelectColumn($alias . '.uuid');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesOrderItemTableMap::DATABASE_NAME)->getTable(SpySalesOrderItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesOrderItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpySalesOrderItem object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesOrderItemTableMap::DATABASE_NAME);
            $criteria->add(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM, (array) $values, Criteria::IN);
        }

        $query = SpySalesOrderItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesOrderItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesOrderItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_order_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpySalesOrderItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesOrderItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpySalesOrderItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesOrderItem object
        }


        // Set the correct dbName
        $query = SpySalesOrderItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpySalesOrderItemTableMap
