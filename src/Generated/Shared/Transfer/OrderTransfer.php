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
class OrderTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER = 'idSalesOrder';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const AGGREGATED_ITEM_STATES = 'aggregatedItemStates';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const IS_TEST = 'isTest';

    /**
     * @var string
     */
    public const EXPENSES = 'expenses';

    /**
     * @var string
     */
    public const INVOICE = 'invoice';

    /**
     * @var string
     */
    public const INVOICE_REFERENCE = 'invoiceReference';

    /**
     * @var string
     */
    public const INVOICE_CREATED_AT = 'invoiceCreatedAt';

    /**
     * @deprecated Use item level shipment method (item.shipment.method.fkShipmentMethod) instead.
     */
    public const FK_SHIPMENT_METHOD = 'fkShipmentMethod';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const TOTALS = 'totals';

    /**
     * @var string
     */
    public const TOTAL_ORDER_COUNT = 'totalOrderCount';

    /**
     * @var string
     */
    public const UNIQUE_PRODUCT_QUANTITY = 'uniqueProductQuantity';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const ITEM_GROUPS = 'itemGroups';

    /**
     * @var string
     */
    public const ORDER_CUSTOM_REFERENCE = 'orderCustomReference';

    /**
     * @var string
     */
    public const PAYMENTS = 'payments';

    /**
     * @var string
     */
    public const CART_NOTE = 'cartNote';

    /**
     * @var string
     */
    public const BUNDLE_ITEMS = 'bundleItems';

    /**
     * @var string
     */
    public const IS_CANCELLABLE = 'isCancellable';

    /**
     * @deprecated Use item level SalesOrderConfiguredBundle (item.salesOrderConfiguredBundle) instead.
     */
    public const SALES_ORDER_CONFIGURED_BUNDLES = 'salesOrderConfiguredBundles';

    /**
     * @var string
     */
    public const BILLING_ADDRESSES = 'billingAddresses';

    /**
     * @deprecated Obsolete. Not used anymore
     */
    public const SHIPPING_ADDRESSES = 'shippingAddresses';

    /**
     * @var string
     */
    public const COMMENT_THREAD = 'commentThread';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT_UUID = 'companyBusinessUnitUuid';

    /**
     * @var string
     */
    public const COMPANY_UUID = 'companyUuid';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const CALCULATED_DISCOUNTS = 'calculatedDiscounts';

    /**
     * @var string
     */
    public const VOUCHER_DISCOUNTS = 'voucherDiscounts';

    /**
     * @var string
     */
    public const DUMMY_PAYMENT = 'dummyPayment';

    /**
     * @var string
     */
    public const ITEM_STATES = 'itemStates';

    /**
     * @deprecated Obsolete. Not used.
     */
    public const SHIPMENT_METHODS = 'shipmentMethods';

    /**
     * @deprecated Use item level shipment method (item.shipment.method.idShipmentMethod) instead.
     */
    public const ID_SHIPMENT_METHOD = 'idShipmentMethod';

    /**
     * @deprecated Use item level shipment method delivery time (item.shipment.method.deliveryTime) instead.
     */
    public const SHIPMENT_DELIVERY_TIME = 'shipmentDeliveryTime';

    /**
     * @var int|null
     */
    protected $idSalesOrder;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $billingAddress;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $items;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AggregatedItemStateTransfer[]
     */
    protected $aggregatedItemStates;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $isTest;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    protected $expenses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\InvoiceTransfer[]
     */
    protected $invoice;

    /**
     * @var string|null
     */
    protected $invoiceReference;

    /**
     * @var string|null
     */
    protected $invoiceCreatedAt;

    /**
     * @var int|null
     */
    protected $fkShipmentMethod;

    /**
     * @var int|null
     */
    protected $fkCustomer;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \Generated\Shared\Transfer\TotalsTransfer|null
     */
    protected $totals;

    /**
     * @var int|null
     */
    protected $totalOrderCount;

    /**
     * @var int|null
     */
    protected $uniqueProductQuantity;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductBundleGroupTransfer[]
     */
    protected $itemGroups;

    /**
     * @var string|null
     */
    protected $orderCustomReference;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PaymentTransfer[]
     */
    protected $payments;

    /**
     * @var string|null
     */
    protected $cartNote;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $bundleItems;

    /**
     * @var bool|null
     */
    protected $isCancellable;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer[]
     */
    protected $salesOrderConfiguredBundles;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    protected $billingAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    protected $shippingAddresses;

    /**
     * @var \Generated\Shared\Transfer\CommentThreadTransfer|null
     */
    protected $commentThread;

    /**
     * @var string|null
     */
    protected $companyBusinessUnitUuid;

    /**
     * @var string|null
     */
    protected $companyUuid;

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    protected $calculatedDiscounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    protected $voucherDiscounts;

    /**
     * @var \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    protected $dummyPayment;

    /**
     * @var string[]
     */
    protected $itemStates = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShipmentMethodTransfer[]
     */
    protected $shipmentMethods;

    /**
     * @var int|null
     */
    protected $idShipmentMethod;

    /**
     * @var int|null
     */
    protected $shipmentDeliveryTime;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order' => 'idSalesOrder',
        'idSalesOrder' => 'idSalesOrder',
        'IdSalesOrder' => 'idSalesOrder',
        'email' => 'email',
        'Email' => 'email',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'customer' => 'customer',
        'Customer' => 'customer',
        'items' => 'items',
        'Items' => 'items',
        'aggregated_item_states' => 'aggregatedItemStates',
        'aggregatedItemStates' => 'aggregatedItemStates',
        'AggregatedItemStates' => 'aggregatedItemStates',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'is_test' => 'isTest',
        'isTest' => 'isTest',
        'IsTest' => 'isTest',
        'expenses' => 'expenses',
        'Expenses' => 'expenses',
        'invoice' => 'invoice',
        'Invoice' => 'invoice',
        'invoice_reference' => 'invoiceReference',
        'invoiceReference' => 'invoiceReference',
        'InvoiceReference' => 'invoiceReference',
        'invoice_created_at' => 'invoiceCreatedAt',
        'invoiceCreatedAt' => 'invoiceCreatedAt',
        'InvoiceCreatedAt' => 'invoiceCreatedAt',
        'fk_shipment_method' => 'fkShipmentMethod',
        'fkShipmentMethod' => 'fkShipmentMethod',
        'FkShipmentMethod' => 'fkShipmentMethod',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'totals' => 'totals',
        'Totals' => 'totals',
        'total_order_count' => 'totalOrderCount',
        'totalOrderCount' => 'totalOrderCount',
        'TotalOrderCount' => 'totalOrderCount',
        'unique_product_quantity' => 'uniqueProductQuantity',
        'uniqueProductQuantity' => 'uniqueProductQuantity',
        'UniqueProductQuantity' => 'uniqueProductQuantity',
        'locale' => 'locale',
        'Locale' => 'locale',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'store' => 'store',
        'Store' => 'store',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'item_groups' => 'itemGroups',
        'itemGroups' => 'itemGroups',
        'ItemGroups' => 'itemGroups',
        'order_custom_reference' => 'orderCustomReference',
        'orderCustomReference' => 'orderCustomReference',
        'OrderCustomReference' => 'orderCustomReference',
        'payments' => 'payments',
        'Payments' => 'payments',
        'cart_note' => 'cartNote',
        'cartNote' => 'cartNote',
        'CartNote' => 'cartNote',
        'bundle_items' => 'bundleItems',
        'bundleItems' => 'bundleItems',
        'BundleItems' => 'bundleItems',
        'is_cancellable' => 'isCancellable',
        'isCancellable' => 'isCancellable',
        'IsCancellable' => 'isCancellable',
        'sales_order_configured_bundles' => 'salesOrderConfiguredBundles',
        'salesOrderConfiguredBundles' => 'salesOrderConfiguredBundles',
        'SalesOrderConfiguredBundles' => 'salesOrderConfiguredBundles',
        'billing_addresses' => 'billingAddresses',
        'billingAddresses' => 'billingAddresses',
        'BillingAddresses' => 'billingAddresses',
        'shipping_addresses' => 'shippingAddresses',
        'shippingAddresses' => 'shippingAddresses',
        'ShippingAddresses' => 'shippingAddresses',
        'comment_thread' => 'commentThread',
        'commentThread' => 'commentThread',
        'CommentThread' => 'commentThread',
        'company_business_unit_uuid' => 'companyBusinessUnitUuid',
        'companyBusinessUnitUuid' => 'companyBusinessUnitUuid',
        'CompanyBusinessUnitUuid' => 'companyBusinessUnitUuid',
        'company_uuid' => 'companyUuid',
        'companyUuid' => 'companyUuid',
        'CompanyUuid' => 'companyUuid',
        'currency' => 'currency',
        'Currency' => 'currency',
        'calculated_discounts' => 'calculatedDiscounts',
        'calculatedDiscounts' => 'calculatedDiscounts',
        'CalculatedDiscounts' => 'calculatedDiscounts',
        'voucher_discounts' => 'voucherDiscounts',
        'voucherDiscounts' => 'voucherDiscounts',
        'VoucherDiscounts' => 'voucherDiscounts',
        'dummy_payment' => 'dummyPayment',
        'dummyPayment' => 'dummyPayment',
        'DummyPayment' => 'dummyPayment',
        'item_states' => 'itemStates',
        'itemStates' => 'itemStates',
        'ItemStates' => 'itemStates',
        'shipment_methods' => 'shipmentMethods',
        'shipmentMethods' => 'shipmentMethods',
        'ShipmentMethods' => 'shipmentMethods',
        'id_shipment_method' => 'idShipmentMethod',
        'idShipmentMethod' => 'idShipmentMethod',
        'IdShipmentMethod' => 'idShipmentMethod',
        'shipment_delivery_time' => 'shipmentDeliveryTime',
        'shipmentDeliveryTime' => 'shipmentDeliveryTime',
        'ShipmentDeliveryTime' => 'shipmentDeliveryTime',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALUTATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'salutation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
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
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'billing_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AGGREGATED_ITEM_STATES => [
            'type' => 'Generated\Shared\Transfer\AggregatedItemStateTransfer',
            'type_shim' => null,
            'name_underscore' => 'aggregated_item_states',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::IS_TEST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'is_test',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPENSES => [
            'type' => 'Generated\Shared\Transfer\ExpenseTransfer',
            'type_shim' => null,
            'name_underscore' => 'expenses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INVOICE => [
            'type' => 'Generated\Shared\Transfer\InvoiceTransfer',
            'type_shim' => null,
            'name_underscore' => 'invoice',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INVOICE_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'invoice_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INVOICE_CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'invoice_created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHIPMENT_METHOD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_shipment_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TOTALS => [
            'type' => 'Generated\Shared\Transfer\TotalsTransfer',
            'type_shim' => null,
            'name_underscore' => 'totals',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TOTAL_ORDER_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total_order_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIQUE_PRODUCT_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unique_product_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_mode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store',
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
        self::ITEM_GROUPS => [
            'type' => 'Generated\Shared\Transfer\ProductBundleGroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'item_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_CUSTOM_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_custom_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENTS => [
            'type' => 'Generated\Shared\Transfer\PaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'payments',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::BUNDLE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'bundle_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_CANCELLABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_cancellable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_CONFIGURED_BUNDLES => [
            'type' => 'Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_configured_bundles',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BILLING_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'billing_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMMENT_THREAD => [
            'type' => 'Generated\Shared\Transfer\CommentThreadTransfer',
            'type_shim' => null,
            'name_underscore' => 'comment_thread',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::VOUCHER_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\DiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'voucher_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DUMMY_PAYMENT => [
            'type' => 'Generated\Shared\Transfer\DummyPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'dummy_payment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEM_STATES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'item_states',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\ShipmentMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment_methods',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::SHIPMENT_DELIVERY_TIME => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'shipment_delivery_time',
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
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|Checkout|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|DummyPayment|Oms|OrderCustomReferenceGui|OrderCustomReference|OrdersRestApi|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesInvoice|SalesPayment|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|Sales|ShipmentGui|Shipment
     *
     * @param int|null $idSalesOrder
     *
     * @return $this
     */
    public function setIdSalesOrder($idSalesOrder)
    {
        $this->idSalesOrder = $idSalesOrder;
        $this->modifiedProperties[self::ID_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|Checkout|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|DummyPayment|Oms|OrderCustomReferenceGui|OrderCustomReference|OrdersRestApi|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesInvoice|SalesPayment|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|Sales|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getIdSalesOrder()
    {
        return $this->idSalesOrder;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|Checkout|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|DummyPayment|Oms|OrderCustomReferenceGui|OrderCustomReference|OrdersRestApi|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesInvoice|SalesPayment|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|Sales|ShipmentGui|Shipment
     *
     * @param int|null $idSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderOrFail($idSalesOrder)
    {
        if ($idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->setIdSalesOrder($idSalesOrder);
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|Checkout|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|DummyPayment|Oms|OrderCustomReferenceGui|OrderCustomReference|OrdersRestApi|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesInvoice|SalesPayment|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderOrFail()
    {
        if ($this->idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->idSalesOrder;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|Checkout|CommentSalesConnector|CompanyBusinessUnitSalesConnector|CompanySalesConnector|Discount|DummyPayment|Oms|OrderCustomReferenceGui|OrderCustomReference|OrdersRestApi|Payment|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesInvoice|SalesPayment|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrder()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER);

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module CustomerPage|SalesReclamation|Sales
     *
     * @param string|null $salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        $this->modifiedProperties[self::SALUTATION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|SalesReclamation|Sales
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module CustomerPage|SalesReclamation|Sales
     *
     * @param string|null $salutation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalutationOrFail($salutation)
    {
        if ($salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->setSalutation($salutation);
    }

    /**
     * @module CustomerPage|SalesReclamation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalutationOrFail()
    {
        if ($this->salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->salutation;
    }

    /**
     * @module CustomerPage|SalesReclamation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalutation()
    {
        $this->assertPropertyIsSet(self::SALUTATION);

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @param string|null $lastName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastNameOrFail($lastName)
    {
        if ($lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->setLastName($lastName);
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastNameOrFail()
    {
        if ($this->lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->lastName;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @param string|null $firstName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFirstNameOrFail($firstName)
    {
        if ($firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->setFirstName($firstName);
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFirstNameOrFail()
    {
        if ($this->firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->firstName;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|SalesReclamation|SalesReturnGui|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|DiscountCalculationConnector|Oms|OrdersRestApi|Payment|SalesReclamationGui|Sales|Shipment
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
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|DiscountCalculationConnector|Oms|OrdersRestApi|Payment|SalesReclamationGui|Sales|Shipment
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|DiscountCalculationConnector|Oms|OrdersRestApi|Payment|SalesReclamationGui|Sales|Shipment
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
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|DiscountCalculationConnector|Oms|OrdersRestApi|Payment|SalesReclamationGui|Sales|Shipment
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
     * @module CustomerPage|CustomerReorderWidget|SalesReturnPage|DiscountCalculationConnector|Oms|OrdersRestApi|Payment|SalesReclamationGui|Sales|Shipment
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
     * @module CustomerPage|Oms|OrdersRestApi|Sales
     *
     * @param \Generated\Shared\Transfer\AddressTransfer|null $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(AddressTransfer $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|Sales
     *
     * @return \Generated\Shared\Transfer\AddressTransfer|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|Sales
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $billingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingAddressOrFail(AddressTransfer $billingAddress)
    {
        return $this->setBillingAddress($billingAddress);
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function getBillingAddressOrFail()
    {
        if ($this->billingAddress === null) {
            $this->throwNullValueException(static::BILLING_ADDRESS);
        }

        return $this->billingAddress;
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingAddress()
    {
        $this->assertPropertyIsSet(self::BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|ProductOption|Sales|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @param \Generated\Shared\Transfer\AddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(AddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|ProductOption|Sales|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @return \Generated\Shared\Transfer\AddressTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|ProductOption|Sales|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(AddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|ProductOption|Sales|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module CustomerPage|Oms|OrdersRestApi|ProductOption|Sales|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Checkout|Customer|SalesReturnGui|Sales|ShipmentGui
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Checkout|Customer|SalesReturnGui|Sales|ShipmentGui
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Checkout|Customer|SalesReturnGui|Sales|ShipmentGui
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Checkout|Customer|SalesReturnGui|Sales|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Checkout|Customer|SalesReturnGui|Sales|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|OrdersRestApi|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[] $items
     *
     * @return $this
     */
    public function setItems(ArrayObject $items)
    {
        $this->items = $items;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|OrdersRestApi|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|OrdersRestApi|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $item
     *
     * @return $this
     */
    public function addItem(ItemTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|SalesConfigurableBundleWidget|SalesReturnPage|Checkout|Discount|DummyPayment|Oms|OrdersRestApi|ProductBundle|ProductMeasurementUnit|ProductOption|ProductPackagingUnit|Refund|SalesConfigurableBundle|SalesProductConnector|SalesReclamationGui|SalesReclamation|SalesReturnGui|SalesReturn|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertCollectionPropertyIsSet(self::ITEMS);

        return $this;
    }

    /**
     * @module CustomerPage|Oms
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AggregatedItemStateTransfer[] $aggregatedItemStates
     *
     * @return $this
     */
    public function setAggregatedItemStates(ArrayObject $aggregatedItemStates)
    {
        $this->aggregatedItemStates = $aggregatedItemStates;
        $this->modifiedProperties[self::AGGREGATED_ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AggregatedItemStateTransfer[]
     */
    public function getAggregatedItemStates()
    {
        return $this->aggregatedItemStates;
    }

    /**
     * @module CustomerPage|Oms
     *
     * @param \Generated\Shared\Transfer\AggregatedItemStateTransfer $aggregatedItemState
     *
     * @return $this
     */
    public function addAggregatedItemState(AggregatedItemStateTransfer $aggregatedItemState)
    {
        $this->aggregatedItemStates[] = $aggregatedItemState;
        $this->modifiedProperties[self::AGGREGATED_ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAggregatedItemStates()
    {
        $this->assertCollectionPropertyIsSet(self::AGGREGATED_ITEM_STATES);

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Sales
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
     * @module CustomerPage|SalesReturnPage|Sales
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Sales
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
     * @module CustomerPage|SalesReturnPage|Sales
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
     * @module CustomerPage|SalesReturnPage|Sales
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
     * @module CustomerPage|Sales
     *
     * @param string|null $isTest
     *
     * @return $this
     */
    public function setIsTest($isTest)
    {
        $this->isTest = $isTest;
        $this->modifiedProperties[self::IS_TEST] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getIsTest()
    {
        return $this->isTest;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $isTest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsTestOrFail($isTest)
    {
        if ($isTest === null) {
            $this->throwNullValueException(static::IS_TEST);
        }

        return $this->setIsTest($isTest);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIsTestOrFail()
    {
        if ($this->isTest === null) {
            $this->throwNullValueException(static::IS_TEST);
        }

        return $this->isTest;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsTest()
    {
        $this->assertPropertyIsSet(self::IS_TEST);

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Discount|OrdersRestApi|Refund|Sales|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[] $expenses
     *
     * @return $this
     */
    public function setExpenses(ArrayObject $expenses)
    {
        $this->expenses = $expenses;
        $this->modifiedProperties[self::EXPENSES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Discount|OrdersRestApi|Refund|Sales|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * @module CustomerPage|Checkout|Discount|OrdersRestApi|Refund|Sales|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ExpenseTransfer $expense
     *
     * @return $this
     */
    public function addExpense(ExpenseTransfer $expense)
    {
        $this->expenses[] = $expense;
        $this->modifiedProperties[self::EXPENSES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Discount|OrdersRestApi|Refund|Sales|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpenses()
    {
        $this->assertCollectionPropertyIsSet(self::EXPENSES);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\InvoiceTransfer[] $invoice
     *
     * @return $this
     */
    public function setInvoice(ArrayObject $invoice)
    {
        $this->invoice = $invoice;
        $this->modifiedProperties[self::INVOICE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\InvoiceTransfer[]
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param \Generated\Shared\Transfer\InvoiceTransfer $invoice
     *
     * @return $this
     */
    public function addInvoice(InvoiceTransfer $invoice)
    {
        $this->invoice[] = $invoice;
        $this->modifiedProperties[self::INVOICE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInvoice()
    {
        $this->assertCollectionPropertyIsSet(self::INVOICE);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $invoiceReference
     *
     * @return $this
     */
    public function setInvoiceReference($invoiceReference)
    {
        $this->invoiceReference = $invoiceReference;
        $this->modifiedProperties[self::INVOICE_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getInvoiceReference()
    {
        return $this->invoiceReference;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $invoiceReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInvoiceReferenceOrFail($invoiceReference)
    {
        if ($invoiceReference === null) {
            $this->throwNullValueException(static::INVOICE_REFERENCE);
        }

        return $this->setInvoiceReference($invoiceReference);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInvoiceReferenceOrFail()
    {
        if ($this->invoiceReference === null) {
            $this->throwNullValueException(static::INVOICE_REFERENCE);
        }

        return $this->invoiceReference;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInvoiceReference()
    {
        $this->assertPropertyIsSet(self::INVOICE_REFERENCE);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $invoiceCreatedAt
     *
     * @return $this
     */
    public function setInvoiceCreatedAt($invoiceCreatedAt)
    {
        $this->invoiceCreatedAt = $invoiceCreatedAt;
        $this->modifiedProperties[self::INVOICE_CREATED_AT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getInvoiceCreatedAt()
    {
        return $this->invoiceCreatedAt;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $invoiceCreatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInvoiceCreatedAtOrFail($invoiceCreatedAt)
    {
        if ($invoiceCreatedAt === null) {
            $this->throwNullValueException(static::INVOICE_CREATED_AT);
        }

        return $this->setInvoiceCreatedAt($invoiceCreatedAt);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInvoiceCreatedAtOrFail()
    {
        if ($this->invoiceCreatedAt === null) {
            $this->throwNullValueException(static::INVOICE_CREATED_AT);
        }

        return $this->invoiceCreatedAt;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInvoiceCreatedAt()
    {
        $this->assertPropertyIsSet(self::INVOICE_CREATED_AT);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @deprecated Use item level shipment method (item.shipment.method.fkShipmentMethod) instead.
     *
     * @param int|null $fkShipmentMethod
     *
     * @return $this
     */
    public function setFkShipmentMethod($fkShipmentMethod)
    {
        $this->fkShipmentMethod = $fkShipmentMethod;
        $this->modifiedProperties[self::FK_SHIPMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @deprecated Use item level shipment method (item.shipment.method.fkShipmentMethod) instead.
     *
     * @return int|null
     */
    public function getFkShipmentMethod()
    {
        return $this->fkShipmentMethod;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @deprecated Use item level shipment method (item.shipment.method.fkShipmentMethod) instead.
     *
     * @param int|null $fkShipmentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShipmentMethodOrFail($fkShipmentMethod)
    {
        if ($fkShipmentMethod === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_METHOD);
        }

        return $this->setFkShipmentMethod($fkShipmentMethod);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use item level shipment method (item.shipment.method.fkShipmentMethod) instead.
     *
     * @return int
     */
    public function getFkShipmentMethodOrFail()
    {
        if ($this->fkShipmentMethod === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_METHOD);
        }

        return $this->fkShipmentMethod;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level shipment method (item.shipment.method.fkShipmentMethod) instead.
     *
     * @return $this
     */
    public function requireFkShipmentMethod()
    {
        $this->assertPropertyIsSet(self::FK_SHIPMENT_METHOD);

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|ShipmentGui
     *
     * @param int|null $fkCustomer
     *
     * @return $this
     */
    public function setFkCustomer($fkCustomer)
    {
        $this->fkCustomer = $fkCustomer;
        $this->modifiedProperties[self::FK_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|ShipmentGui
     *
     * @return int|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|ShipmentGui
     *
     * @param int|null $fkCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerOrFail($fkCustomer)
    {
        if ($fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->setFkCustomer($fkCustomer);
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomer()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER);

        return $this;
    }

    /**
     * @module CustomerPage|OrderCancelWidget|Customer|OrdersRestApi|SalesReclamation|Sales
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|OrderCancelWidget|Customer|OrdersRestApi|SalesReclamation|Sales
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module CustomerPage|OrderCancelWidget|Customer|OrdersRestApi|SalesReclamation|Sales
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module CustomerPage|OrderCancelWidget|Customer|OrdersRestApi|SalesReclamation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module CustomerPage|OrderCancelWidget|Customer|OrdersRestApi|SalesReclamation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Checkout|Discount|OrdersRestApi|Payment|ProductOption|SalesPayment|SalesReturn|Sales
     *
     * @param \Generated\Shared\Transfer\TotalsTransfer|null $totals
     *
     * @return $this
     */
    public function setTotals(TotalsTransfer $totals = null)
    {
        $this->totals = $totals;
        $this->modifiedProperties[self::TOTALS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Checkout|Discount|OrdersRestApi|Payment|ProductOption|SalesPayment|SalesReturn|Sales
     *
     * @return \Generated\Shared\Transfer\TotalsTransfer|null
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Checkout|Discount|OrdersRestApi|Payment|ProductOption|SalesPayment|SalesReturn|Sales
     *
     * @param \Generated\Shared\Transfer\TotalsTransfer $totals
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalsOrFail(TotalsTransfer $totals)
    {
        return $this->setTotals($totals);
    }

    /**
     * @module CustomerPage|SalesReturnPage|Checkout|Discount|OrdersRestApi|Payment|ProductOption|SalesPayment|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TotalsTransfer
     */
    public function getTotalsOrFail()
    {
        if ($this->totals === null) {
            $this->throwNullValueException(static::TOTALS);
        }

        return $this->totals;
    }

    /**
     * @module CustomerPage|SalesReturnPage|Checkout|Discount|OrdersRestApi|Payment|ProductOption|SalesPayment|SalesReturn|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotals()
    {
        $this->assertPropertyIsSet(self::TOTALS);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param int|null $totalOrderCount
     *
     * @return $this
     */
    public function setTotalOrderCount($totalOrderCount)
    {
        $this->totalOrderCount = $totalOrderCount;
        $this->modifiedProperties[self::TOTAL_ORDER_COUNT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return int|null
     */
    public function getTotalOrderCount()
    {
        return $this->totalOrderCount;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param int|null $totalOrderCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalOrderCountOrFail($totalOrderCount)
    {
        if ($totalOrderCount === null) {
            $this->throwNullValueException(static::TOTAL_ORDER_COUNT);
        }

        return $this->setTotalOrderCount($totalOrderCount);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTotalOrderCountOrFail()
    {
        if ($this->totalOrderCount === null) {
            $this->throwNullValueException(static::TOTAL_ORDER_COUNT);
        }

        return $this->totalOrderCount;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotalOrderCount()
    {
        $this->assertPropertyIsSet(self::TOTAL_ORDER_COUNT);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param int|null $uniqueProductQuantity
     *
     * @return $this
     */
    public function setUniqueProductQuantity($uniqueProductQuantity)
    {
        $this->uniqueProductQuantity = $uniqueProductQuantity;
        $this->modifiedProperties[self::UNIQUE_PRODUCT_QUANTITY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return int|null
     */
    public function getUniqueProductQuantity()
    {
        return $this->uniqueProductQuantity;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param int|null $uniqueProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUniqueProductQuantityOrFail($uniqueProductQuantity)
    {
        if ($uniqueProductQuantity === null) {
            $this->throwNullValueException(static::UNIQUE_PRODUCT_QUANTITY);
        }

        return $this->setUniqueProductQuantity($uniqueProductQuantity);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUniqueProductQuantityOrFail()
    {
        if ($this->uniqueProductQuantity === null) {
            $this->throwNullValueException(static::UNIQUE_PRODUCT_QUANTITY);
        }

        return $this->uniqueProductQuantity;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUniqueProductQuantity()
    {
        $this->assertPropertyIsSet(self::UNIQUE_PRODUCT_QUANTITY);

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|Sales
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|Sales
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|Sales
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(LocaleTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module CustomerPage|Oms|SalesInvoice|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @param string|null $priceMode
     *
     * @return $this
     */
    public function setPriceMode($priceMode)
    {
        $this->priceMode = $priceMode;
        $this->modifiedProperties[self::PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @param string|null $priceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceModeOrFail($priceMode)
    {
        if ($priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->setPriceMode($priceMode);
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceModeOrFail()
    {
        if ($this->priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->priceMode;
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceMode()
    {
        $this->assertPropertyIsSet(self::PRICE_MODE);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesReturnGui|Sales|Shipment
     *
     * @param string|null $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|SalesReturnGui|Sales|Shipment
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module CustomerPage|Calculation|SalesReturnGui|Sales|Shipment
     *
     * @param string|null $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail($store)
    {
        if ($store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->setStore($store);
    }

    /**
     * @module CustomerPage|Calculation|SalesReturnGui|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module CustomerPage|Calculation|SalesReturnGui|Sales|Shipment
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
     * @module CustomerPage|Currency|OrdersRestApi|Payment|Refund|SalesPaymentGui|Sales|ShipmentCartConnector|ShipmentGui|Shipment
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
     * @module CustomerPage|Currency|OrdersRestApi|Payment|Refund|SalesPaymentGui|Sales|ShipmentCartConnector|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module CustomerPage|Currency|OrdersRestApi|Payment|Refund|SalesPaymentGui|Sales|ShipmentCartConnector|ShipmentGui|Shipment
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
     * @module CustomerPage|Currency|OrdersRestApi|Payment|Refund|SalesPaymentGui|Sales|ShipmentCartConnector|ShipmentGui|Shipment
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
     * @module CustomerPage|Currency|OrdersRestApi|Payment|Refund|SalesPaymentGui|Sales|ShipmentCartConnector|ShipmentGui|Shipment
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
     * @module CustomerPage|ProductBundle|Sales|ShipmentGui
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductBundleGroupTransfer[] $itemGroups
     *
     * @return $this
     */
    public function setItemGroups(ArrayObject $itemGroups)
    {
        $this->itemGroups = $itemGroups;
        $this->modifiedProperties[self::ITEM_GROUPS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|ProductBundle|Sales|ShipmentGui
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductBundleGroupTransfer[]
     */
    public function getItemGroups()
    {
        return $this->itemGroups;
    }

    /**
     * @module CustomerPage|ProductBundle|Sales|ShipmentGui
     *
     * @param \Generated\Shared\Transfer\ProductBundleGroupTransfer $itemGroup
     *
     * @return $this
     */
    public function addItemGroup(ProductBundleGroupTransfer $itemGroup)
    {
        $this->itemGroups[] = $itemGroup;
        $this->modifiedProperties[self::ITEM_GROUPS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|ProductBundle|Sales|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemGroups()
    {
        $this->assertCollectionPropertyIsSet(self::ITEM_GROUPS);

        return $this;
    }

    /**
     * @module CustomerPage|OrderCustomReferenceGui|OrderCustomReference
     *
     * @param string|null $orderCustomReference
     *
     * @return $this
     */
    public function setOrderCustomReference($orderCustomReference)
    {
        $this->orderCustomReference = $orderCustomReference;
        $this->modifiedProperties[self::ORDER_CUSTOM_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|OrderCustomReferenceGui|OrderCustomReference
     *
     * @return string|null
     */
    public function getOrderCustomReference()
    {
        return $this->orderCustomReference;
    }

    /**
     * @module CustomerPage|OrderCustomReferenceGui|OrderCustomReference
     *
     * @param string|null $orderCustomReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderCustomReferenceOrFail($orderCustomReference)
    {
        if ($orderCustomReference === null) {
            $this->throwNullValueException(static::ORDER_CUSTOM_REFERENCE);
        }

        return $this->setOrderCustomReference($orderCustomReference);
    }

    /**
     * @module CustomerPage|OrderCustomReferenceGui|OrderCustomReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderCustomReferenceOrFail()
    {
        if ($this->orderCustomReference === null) {
            $this->throwNullValueException(static::ORDER_CUSTOM_REFERENCE);
        }

        return $this->orderCustomReference;
    }

    /**
     * @module CustomerPage|OrderCustomReferenceGui|OrderCustomReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderCustomReference()
    {
        $this->assertPropertyIsSet(self::ORDER_CUSTOM_REFERENCE);

        return $this;
    }

    /**
     * @module CustomerPage|Payment|SalesPaymentGui|SalesPayment
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PaymentTransfer[] $payments
     *
     * @return $this
     */
    public function setPayments(ArrayObject $payments)
    {
        $this->payments = $payments;
        $this->modifiedProperties[self::PAYMENTS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Payment|SalesPaymentGui|SalesPayment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PaymentTransfer[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @module CustomerPage|Payment|SalesPaymentGui|SalesPayment
     *
     * @param \Generated\Shared\Transfer\PaymentTransfer $payment
     *
     * @return $this
     */
    public function addPayment(PaymentTransfer $payment)
    {
        $this->payments[] = $payment;
        $this->modifiedProperties[self::PAYMENTS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Payment|SalesPaymentGui|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayments()
    {
        $this->assertCollectionPropertyIsSet(self::PAYMENTS);

        return $this;
    }

    /**
     * @module CustomerPage|CartNote
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
     * @module CustomerPage|CartNote
     *
     * @return string|null
     */
    public function getCartNote()
    {
        return $this->cartNote;
    }

    /**
     * @module CustomerPage|CartNote
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
     * @module CustomerPage|CartNote
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
     * @module CustomerPage|CartNote
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
     * @module CustomerReorderWidget|ProductBundle|ProductBundlesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[] $bundleItems
     *
     * @return $this
     */
    public function setBundleItems(ArrayObject $bundleItems)
    {
        $this->bundleItems = $bundleItems;
        $this->modifiedProperties[self::BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|ProductBundle|ProductBundlesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getBundleItems()
    {
        return $this->bundleItems;
    }

    /**
     * @module CustomerReorderWidget|ProductBundle|ProductBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $bundleItem
     *
     * @return $this
     */
    public function addBundleItem(ItemTransfer $bundleItem)
    {
        $this->bundleItems[] = $bundleItem;
        $this->modifiedProperties[self::BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|ProductBundle|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundleItems()
    {
        $this->assertCollectionPropertyIsSet(self::BUNDLE_ITEMS);

        return $this;
    }

    /**
     * @module OrderCancelWidget|Oms|Sales
     *
     * @param bool|null $isCancellable
     *
     * @return $this
     */
    public function setIsCancellable($isCancellable)
    {
        $this->isCancellable = $isCancellable;
        $this->modifiedProperties[self::IS_CANCELLABLE] = true;

        return $this;
    }

    /**
     * @module OrderCancelWidget|Oms|Sales
     *
     * @return bool|null
     */
    public function getIsCancellable()
    {
        return $this->isCancellable;
    }

    /**
     * @module OrderCancelWidget|Oms|Sales
     *
     * @param bool|null $isCancellable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsCancellableOrFail($isCancellable)
    {
        if ($isCancellable === null) {
            $this->throwNullValueException(static::IS_CANCELLABLE);
        }

        return $this->setIsCancellable($isCancellable);
    }

    /**
     * @module OrderCancelWidget|Oms|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsCancellableOrFail()
    {
        if ($this->isCancellable === null) {
            $this->throwNullValueException(static::IS_CANCELLABLE);
        }

        return $this->isCancellable;
    }

    /**
     * @module OrderCancelWidget|Oms|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsCancellable()
    {
        $this->assertPropertyIsSet(self::IS_CANCELLABLE);

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales|ShipmentGui
     *
     * @deprecated Use item level SalesOrderConfiguredBundle (item.salesOrderConfiguredBundle) instead.
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer[] $salesOrderConfiguredBundles
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundles(ArrayObject $salesOrderConfiguredBundles)
    {
        $this->salesOrderConfiguredBundles = $salesOrderConfiguredBundles;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLES] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales|ShipmentGui
     *
     * @deprecated Use item level SalesOrderConfiguredBundle (item.salesOrderConfiguredBundle) instead.
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer[]
     */
    public function getSalesOrderConfiguredBundles()
    {
        return $this->salesOrderConfiguredBundles;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales|ShipmentGui
     *
     * @deprecated Use item level SalesOrderConfiguredBundle (item.salesOrderConfiguredBundle) instead.
     *
     * @param \Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle
     *
     * @return $this
     */
    public function addSalesOrderConfiguredBundle(SalesOrderConfiguredBundleTransfer $salesOrderConfiguredBundle)
    {
        $this->salesOrderConfiguredBundles[] = $salesOrderConfiguredBundle;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLES] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level SalesOrderConfiguredBundle (item.salesOrderConfiguredBundle) instead.
     *
     * @return $this
     */
    public function requireSalesOrderConfiguredBundles()
    {
        $this->assertCollectionPropertyIsSet(self::SALES_ORDER_CONFIGURED_BUNDLES);

        return $this;
    }

    /**
     * @module Checkout
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[] $billingAddresses
     *
     * @return $this
     */
    public function setBillingAddresses(ArrayObject $billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;
        $this->modifiedProperties[self::BILLING_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module Checkout
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    public function getBillingAddresses()
    {
        return $this->billingAddresses;
    }

    /**
     * @module Checkout
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $billingAddress
     *
     * @return $this
     */
    public function addBillingAddress(AddressTransfer $billingAddress)
    {
        $this->billingAddresses[] = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module Checkout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::BILLING_ADDRESSES);

        return $this;
    }

    /**
     * @module Checkout
     *
     * @deprecated Obsolete. Not used anymore
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[] $shippingAddresses
     *
     * @return $this
     */
    public function setShippingAddresses(ArrayObject $shippingAddresses)
    {
        $this->shippingAddresses = $shippingAddresses;
        $this->modifiedProperties[self::SHIPPING_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module Checkout
     *
     * @deprecated Obsolete. Not used anymore
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses;
    }

    /**
     * @module Checkout
     *
     * @deprecated Obsolete. Not used anymore
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $shippingAddress
     *
     * @return $this
     */
    public function addShippingAddress(AddressTransfer $shippingAddress)
    {
        $this->shippingAddresses[] = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module Checkout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Obsolete. Not used anymore
     *
     * @return $this
     */
    public function requireShippingAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPPING_ADDRESSES);

        return $this;
    }

    /**
     * @module CommentSalesConnector
     *
     * @param \Generated\Shared\Transfer\CommentThreadTransfer|null $commentThread
     *
     * @return $this
     */
    public function setCommentThread(CommentThreadTransfer $commentThread = null)
    {
        $this->commentThread = $commentThread;
        $this->modifiedProperties[self::COMMENT_THREAD] = true;

        return $this;
    }

    /**
     * @module CommentSalesConnector
     *
     * @return \Generated\Shared\Transfer\CommentThreadTransfer|null
     */
    public function getCommentThread()
    {
        return $this->commentThread;
    }

    /**
     * @module CommentSalesConnector
     *
     * @param \Generated\Shared\Transfer\CommentThreadTransfer $commentThread
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCommentThreadOrFail(CommentThreadTransfer $commentThread)
    {
        return $this->setCommentThread($commentThread);
    }

    /**
     * @module CommentSalesConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CommentThreadTransfer
     */
    public function getCommentThreadOrFail()
    {
        if ($this->commentThread === null) {
            $this->throwNullValueException(static::COMMENT_THREAD);
        }

        return $this->commentThread;
    }

    /**
     * @module CommentSalesConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCommentThread()
    {
        $this->assertPropertyIsSet(self::COMMENT_THREAD);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector
     *
     * @param string|null $companyBusinessUnitUuid
     *
     * @return $this
     */
    public function setCompanyBusinessUnitUuid($companyBusinessUnitUuid)
    {
        $this->companyBusinessUnitUuid = $companyBusinessUnitUuid;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_UUID] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector
     *
     * @return string|null
     */
    public function getCompanyBusinessUnitUuid()
    {
        return $this->companyBusinessUnitUuid;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector
     *
     * @param string|null $companyBusinessUnitUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitUuidOrFail($companyBusinessUnitUuid)
    {
        if ($companyBusinessUnitUuid === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT_UUID);
        }

        return $this->setCompanyBusinessUnitUuid($companyBusinessUnitUuid);
    }

    /**
     * @module CompanyBusinessUnitSalesConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyBusinessUnitUuidOrFail()
    {
        if ($this->companyBusinessUnitUuid === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT_UUID);
        }

        return $this->companyBusinessUnitUuid;
    }

    /**
     * @module CompanyBusinessUnitSalesConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitUuid()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT_UUID);

        return $this;
    }

    /**
     * @module CompanySalesConnector
     *
     * @param string|null $companyUuid
     *
     * @return $this
     */
    public function setCompanyUuid($companyUuid)
    {
        $this->companyUuid = $companyUuid;
        $this->modifiedProperties[self::COMPANY_UUID] = true;

        return $this;
    }

    /**
     * @module CompanySalesConnector
     *
     * @return string|null
     */
    public function getCompanyUuid()
    {
        return $this->companyUuid;
    }

    /**
     * @module CompanySalesConnector
     *
     * @param string|null $companyUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUuidOrFail($companyUuid)
    {
        if ($companyUuid === null) {
            $this->throwNullValueException(static::COMPANY_UUID);
        }

        return $this->setCompanyUuid($companyUuid);
    }

    /**
     * @module CompanySalesConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyUuidOrFail()
    {
        if ($this->companyUuid === null) {
            $this->throwNullValueException(static::COMPANY_UUID);
        }

        return $this->companyUuid;
    }

    /**
     * @module CompanySalesConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUuid()
    {
        $this->assertPropertyIsSet(self::COMPANY_UUID);

        return $this;
    }

    /**
     * @module Currency|Discount
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
     * @module Currency|Discount
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module Currency|Discount
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
     * @module Currency|Discount
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
     * @module Currency|Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CalculatedDiscountTransfer[]
     */
    public function getCalculatedDiscounts()
    {
        return $this->calculatedDiscounts;
    }

    /**
     * @module Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[] $voucherDiscounts
     *
     * @return $this
     */
    public function setVoucherDiscounts(ArrayObject $voucherDiscounts)
    {
        $this->voucherDiscounts = $voucherDiscounts;
        $this->modifiedProperties[self::VOUCHER_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    public function getVoucherDiscounts()
    {
        return $this->voucherDiscounts;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer $voucherDiscount
     *
     * @return $this
     */
    public function addVoucherDiscount(DiscountTransfer $voucherDiscount)
    {
        $this->voucherDiscounts[] = $voucherDiscount;
        $this->modifiedProperties[self::VOUCHER_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVoucherDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::VOUCHER_DISCOUNTS);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer|null $dummyPayment
     *
     * @return $this
     */
    public function setDummyPayment(DummyPaymentTransfer $dummyPayment = null)
    {
        $this->dummyPayment = $dummyPayment;
        $this->modifiedProperties[self::DUMMY_PAYMENT] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    public function getDummyPayment()
    {
        return $this->dummyPayment;
    }

    /**
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer $dummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDummyPaymentOrFail(DummyPaymentTransfer $dummyPayment)
    {
        return $this->setDummyPayment($dummyPayment);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer
     */
    public function getDummyPaymentOrFail()
    {
        if ($this->dummyPayment === null) {
            $this->throwNullValueException(static::DUMMY_PAYMENT);
        }

        return $this->dummyPayment;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDummyPayment()
    {
        $this->assertPropertyIsSet(self::DUMMY_PAYMENT);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string[]|null $itemStates
     *
     * @return $this
     */
    public function setItemStates(array $itemStates = null)
    {
        if ($itemStates === null) {
            $itemStates = [];
        }

        $this->itemStates = $itemStates;
        $this->modifiedProperties[self::ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string[]
     */
    public function getItemStates()
    {
        return $this->itemStates;
    }

    /**
     * @module Oms
     *
     * @param string $itemState
     *
     * @return $this
     */
    public function addItemState($itemState)
    {
        $this->itemStates[] = $itemState;
        $this->modifiedProperties[self::ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemStates()
    {
        $this->assertPropertyIsSet(self::ITEM_STATES);

        return $this;
    }

    /**
     * @module OrdersRestApi|ShipmentCartConnector|Shipment
     *
     * @deprecated Obsolete. Not used.
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShipmentMethodTransfer[] $shipmentMethods
     *
     * @return $this
     */
    public function setShipmentMethods(ArrayObject $shipmentMethods)
    {
        $this->shipmentMethods = $shipmentMethods;
        $this->modifiedProperties[self::SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ShipmentCartConnector|Shipment
     *
     * @deprecated Obsolete. Not used.
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShipmentMethodTransfer[]
     */
    public function getShipmentMethods()
    {
        return $this->shipmentMethods;
    }

    /**
     * @module OrdersRestApi|ShipmentCartConnector|Shipment
     *
     * @deprecated Obsolete. Not used.
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodTransfer $shipmentMethod
     *
     * @return $this
     */
    public function addShipmentMethod(ShipmentMethodTransfer $shipmentMethod)
    {
        $this->shipmentMethods[] = $shipmentMethod;
        $this->modifiedProperties[self::SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ShipmentCartConnector|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Obsolete. Not used.
     *
     * @return $this
     */
    public function requireShipmentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPMENT_METHODS);

        return $this;
    }

    /**
     * @module ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipment method (item.shipment.method.idShipmentMethod) instead.
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
     * @module ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipment method (item.shipment.method.idShipmentMethod) instead.
     *
     * @return int|null
     */
    public function getIdShipmentMethod()
    {
        return $this->idShipmentMethod;
    }

    /**
     * @module ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipment method (item.shipment.method.idShipmentMethod) instead.
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
     * @module ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use item level shipment method (item.shipment.method.idShipmentMethod) instead.
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
     * @module ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level shipment method (item.shipment.method.idShipmentMethod) instead.
     *
     * @return $this
     */
    public function requireIdShipmentMethod()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_METHOD);

        return $this;
    }

    /**
     * @module ShipmentCartConnector|Shipment
     *
     * @deprecated Use item level shipment method delivery time (item.shipment.method.deliveryTime) instead.
     *
     * @param int|null $shipmentDeliveryTime
     *
     * @return $this
     */
    public function setShipmentDeliveryTime($shipmentDeliveryTime)
    {
        $this->shipmentDeliveryTime = $shipmentDeliveryTime;
        $this->modifiedProperties[self::SHIPMENT_DELIVERY_TIME] = true;

        return $this;
    }

    /**
     * @module ShipmentCartConnector|Shipment
     *
     * @deprecated Use item level shipment method delivery time (item.shipment.method.deliveryTime) instead.
     *
     * @return int|null
     */
    public function getShipmentDeliveryTime()
    {
        return $this->shipmentDeliveryTime;
    }

    /**
     * @module ShipmentCartConnector|Shipment
     *
     * @deprecated Use item level shipment method delivery time (item.shipment.method.deliveryTime) instead.
     *
     * @param int|null $shipmentDeliveryTime
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentDeliveryTimeOrFail($shipmentDeliveryTime)
    {
        if ($shipmentDeliveryTime === null) {
            $this->throwNullValueException(static::SHIPMENT_DELIVERY_TIME);
        }

        return $this->setShipmentDeliveryTime($shipmentDeliveryTime);
    }

    /**
     * @module ShipmentCartConnector|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use item level shipment method delivery time (item.shipment.method.deliveryTime) instead.
     *
     * @return int
     */
    public function getShipmentDeliveryTimeOrFail()
    {
        if ($this->shipmentDeliveryTime === null) {
            $this->throwNullValueException(static::SHIPMENT_DELIVERY_TIME);
        }

        return $this->shipmentDeliveryTime;
    }

    /**
     * @module ShipmentCartConnector|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level shipment method delivery time (item.shipment.method.deliveryTime) instead.
     *
     * @return $this
     */
    public function requireShipmentDeliveryTime()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_DELIVERY_TIME);

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
                case 'idSalesOrder':
                case 'email':
                case 'salutation':
                case 'lastName':
                case 'firstName':
                case 'orderReference':
                case 'createdAt':
                case 'isTest':
                case 'invoiceReference':
                case 'invoiceCreatedAt':
                case 'fkShipmentMethod':
                case 'fkCustomer':
                case 'customerReference':
                case 'totalOrderCount':
                case 'uniqueProductQuantity':
                case 'priceMode':
                case 'store':
                case 'currencyIsoCode':
                case 'orderCustomReference':
                case 'cartNote':
                case 'isCancellable':
                case 'companyBusinessUnitUuid':
                case 'companyUuid':
                case 'itemStates':
                case 'idShipmentMethod':
                case 'shipmentDeliveryTime':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
                case 'customer':
                case 'totals':
                case 'locale':
                case 'commentThread':
                case 'currency':
                case 'dummyPayment':
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
                case 'items':
                case 'aggregatedItemStates':
                case 'expenses':
                case 'invoice':
                case 'itemGroups':
                case 'payments':
                case 'bundleItems':
                case 'salesOrderConfiguredBundles':
                case 'billingAddresses':
                case 'shippingAddresses':
                case 'calculatedDiscounts':
                case 'voucherDiscounts':
                case 'shipmentMethods':
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
                case 'idSalesOrder':
                case 'email':
                case 'salutation':
                case 'lastName':
                case 'firstName':
                case 'orderReference':
                case 'createdAt':
                case 'isTest':
                case 'invoiceReference':
                case 'invoiceCreatedAt':
                case 'fkShipmentMethod':
                case 'fkCustomer':
                case 'customerReference':
                case 'totalOrderCount':
                case 'uniqueProductQuantity':
                case 'priceMode':
                case 'store':
                case 'currencyIsoCode':
                case 'orderCustomReference':
                case 'cartNote':
                case 'isCancellable':
                case 'companyBusinessUnitUuid':
                case 'companyUuid':
                case 'itemStates':
                case 'idShipmentMethod':
                case 'shipmentDeliveryTime':
                    $values[$arrayKey] = $value;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
                case 'customer':
                case 'totals':
                case 'locale':
                case 'commentThread':
                case 'currency':
                case 'dummyPayment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
                case 'aggregatedItemStates':
                case 'expenses':
                case 'invoice':
                case 'itemGroups':
                case 'payments':
                case 'bundleItems':
                case 'salesOrderConfiguredBundles':
                case 'billingAddresses':
                case 'shippingAddresses':
                case 'calculatedDiscounts':
                case 'voucherDiscounts':
                case 'shipmentMethods':
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
                case 'idSalesOrder':
                case 'email':
                case 'salutation':
                case 'lastName':
                case 'firstName':
                case 'orderReference':
                case 'createdAt':
                case 'isTest':
                case 'invoiceReference':
                case 'invoiceCreatedAt':
                case 'fkShipmentMethod':
                case 'fkCustomer':
                case 'customerReference':
                case 'totalOrderCount':
                case 'uniqueProductQuantity':
                case 'priceMode':
                case 'store':
                case 'currencyIsoCode':
                case 'orderCustomReference':
                case 'cartNote':
                case 'isCancellable':
                case 'companyBusinessUnitUuid':
                case 'companyUuid':
                case 'itemStates':
                case 'idShipmentMethod':
                case 'shipmentDeliveryTime':
                    $values[$arrayKey] = $value;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
                case 'customer':
                case 'totals':
                case 'locale':
                case 'commentThread':
                case 'currency':
                case 'dummyPayment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
                case 'aggregatedItemStates':
                case 'expenses':
                case 'invoice':
                case 'itemGroups':
                case 'payments':
                case 'bundleItems':
                case 'salesOrderConfiguredBundles':
                case 'billingAddresses':
                case 'shippingAddresses':
                case 'calculatedDiscounts':
                case 'voucherDiscounts':
                case 'shipmentMethods':
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
        $this->items = $this->items ?: new ArrayObject();
        $this->aggregatedItemStates = $this->aggregatedItemStates ?: new ArrayObject();
        $this->expenses = $this->expenses ?: new ArrayObject();
        $this->invoice = $this->invoice ?: new ArrayObject();
        $this->itemGroups = $this->itemGroups ?: new ArrayObject();
        $this->payments = $this->payments ?: new ArrayObject();
        $this->bundleItems = $this->bundleItems ?: new ArrayObject();
        $this->salesOrderConfiguredBundles = $this->salesOrderConfiguredBundles ?: new ArrayObject();
        $this->billingAddresses = $this->billingAddresses ?: new ArrayObject();
        $this->shippingAddresses = $this->shippingAddresses ?: new ArrayObject();
        $this->calculatedDiscounts = $this->calculatedDiscounts ?: new ArrayObject();
        $this->voucherDiscounts = $this->voucherDiscounts ?: new ArrayObject();
        $this->shipmentMethods = $this->shipmentMethods ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesOrder' => $this->idSalesOrder,
            'email' => $this->email,
            'salutation' => $this->salutation,
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'orderReference' => $this->orderReference,
            'createdAt' => $this->createdAt,
            'isTest' => $this->isTest,
            'invoiceReference' => $this->invoiceReference,
            'invoiceCreatedAt' => $this->invoiceCreatedAt,
            'fkShipmentMethod' => $this->fkShipmentMethod,
            'fkCustomer' => $this->fkCustomer,
            'customerReference' => $this->customerReference,
            'totalOrderCount' => $this->totalOrderCount,
            'uniqueProductQuantity' => $this->uniqueProductQuantity,
            'priceMode' => $this->priceMode,
            'store' => $this->store,
            'currencyIsoCode' => $this->currencyIsoCode,
            'orderCustomReference' => $this->orderCustomReference,
            'cartNote' => $this->cartNote,
            'isCancellable' => $this->isCancellable,
            'companyBusinessUnitUuid' => $this->companyBusinessUnitUuid,
            'companyUuid' => $this->companyUuid,
            'itemStates' => $this->itemStates,
            'idShipmentMethod' => $this->idShipmentMethod,
            'shipmentDeliveryTime' => $this->shipmentDeliveryTime,
            'billingAddress' => $this->billingAddress,
            'shippingAddress' => $this->shippingAddress,
            'customer' => $this->customer,
            'totals' => $this->totals,
            'locale' => $this->locale,
            'commentThread' => $this->commentThread,
            'currency' => $this->currency,
            'dummyPayment' => $this->dummyPayment,
            'items' => $this->items,
            'aggregatedItemStates' => $this->aggregatedItemStates,
            'expenses' => $this->expenses,
            'invoice' => $this->invoice,
            'itemGroups' => $this->itemGroups,
            'payments' => $this->payments,
            'bundleItems' => $this->bundleItems,
            'salesOrderConfiguredBundles' => $this->salesOrderConfiguredBundles,
            'billingAddresses' => $this->billingAddresses,
            'shippingAddresses' => $this->shippingAddresses,
            'calculatedDiscounts' => $this->calculatedDiscounts,
            'voucherDiscounts' => $this->voucherDiscounts,
            'shipmentMethods' => $this->shipmentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order' => $this->idSalesOrder,
            'email' => $this->email,
            'salutation' => $this->salutation,
            'last_name' => $this->lastName,
            'first_name' => $this->firstName,
            'order_reference' => $this->orderReference,
            'created_at' => $this->createdAt,
            'is_test' => $this->isTest,
            'invoice_reference' => $this->invoiceReference,
            'invoice_created_at' => $this->invoiceCreatedAt,
            'fk_shipment_method' => $this->fkShipmentMethod,
            'fk_customer' => $this->fkCustomer,
            'customer_reference' => $this->customerReference,
            'total_order_count' => $this->totalOrderCount,
            'unique_product_quantity' => $this->uniqueProductQuantity,
            'price_mode' => $this->priceMode,
            'store' => $this->store,
            'currency_iso_code' => $this->currencyIsoCode,
            'order_custom_reference' => $this->orderCustomReference,
            'cart_note' => $this->cartNote,
            'is_cancellable' => $this->isCancellable,
            'company_business_unit_uuid' => $this->companyBusinessUnitUuid,
            'company_uuid' => $this->companyUuid,
            'item_states' => $this->itemStates,
            'id_shipment_method' => $this->idShipmentMethod,
            'shipment_delivery_time' => $this->shipmentDeliveryTime,
            'billing_address' => $this->billingAddress,
            'shipping_address' => $this->shippingAddress,
            'customer' => $this->customer,
            'totals' => $this->totals,
            'locale' => $this->locale,
            'comment_thread' => $this->commentThread,
            'currency' => $this->currency,
            'dummy_payment' => $this->dummyPayment,
            'items' => $this->items,
            'aggregated_item_states' => $this->aggregatedItemStates,
            'expenses' => $this->expenses,
            'invoice' => $this->invoice,
            'item_groups' => $this->itemGroups,
            'payments' => $this->payments,
            'bundle_items' => $this->bundleItems,
            'sales_order_configured_bundles' => $this->salesOrderConfiguredBundles,
            'billing_addresses' => $this->billingAddresses,
            'shipping_addresses' => $this->shippingAddresses,
            'calculated_discounts' => $this->calculatedDiscounts,
            'voucher_discounts' => $this->voucherDiscounts,
            'shipment_methods' => $this->shipmentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, false) : $this->idSalesOrder,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'is_test' => $this->isTest instanceof AbstractTransfer ? $this->isTest->toArray(true, false) : $this->isTest,
            'invoice_reference' => $this->invoiceReference instanceof AbstractTransfer ? $this->invoiceReference->toArray(true, false) : $this->invoiceReference,
            'invoice_created_at' => $this->invoiceCreatedAt instanceof AbstractTransfer ? $this->invoiceCreatedAt->toArray(true, false) : $this->invoiceCreatedAt,
            'fk_shipment_method' => $this->fkShipmentMethod instanceof AbstractTransfer ? $this->fkShipmentMethod->toArray(true, false) : $this->fkShipmentMethod,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'total_order_count' => $this->totalOrderCount instanceof AbstractTransfer ? $this->totalOrderCount->toArray(true, false) : $this->totalOrderCount,
            'unique_product_quantity' => $this->uniqueProductQuantity instanceof AbstractTransfer ? $this->uniqueProductQuantity->toArray(true, false) : $this->uniqueProductQuantity,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'order_custom_reference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, false) : $this->orderCustomReference,
            'cart_note' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, false) : $this->cartNote,
            'is_cancellable' => $this->isCancellable instanceof AbstractTransfer ? $this->isCancellable->toArray(true, false) : $this->isCancellable,
            'company_business_unit_uuid' => $this->companyBusinessUnitUuid instanceof AbstractTransfer ? $this->companyBusinessUnitUuid->toArray(true, false) : $this->companyBusinessUnitUuid,
            'company_uuid' => $this->companyUuid instanceof AbstractTransfer ? $this->companyUuid->toArray(true, false) : $this->companyUuid,
            'item_states' => $this->itemStates instanceof AbstractTransfer ? $this->itemStates->toArray(true, false) : $this->itemStates,
            'id_shipment_method' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, false) : $this->idShipmentMethod,
            'shipment_delivery_time' => $this->shipmentDeliveryTime instanceof AbstractTransfer ? $this->shipmentDeliveryTime->toArray(true, false) : $this->shipmentDeliveryTime,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, false) : $this->totals,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'comment_thread' => $this->commentThread instanceof AbstractTransfer ? $this->commentThread->toArray(true, false) : $this->commentThread,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'dummy_payment' => $this->dummyPayment instanceof AbstractTransfer ? $this->dummyPayment->toArray(true, false) : $this->dummyPayment,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'aggregated_item_states' => $this->aggregatedItemStates instanceof AbstractTransfer ? $this->aggregatedItemStates->toArray(true, false) : $this->addValuesToCollection($this->aggregatedItemStates, true, false),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, false) : $this->addValuesToCollection($this->expenses, true, false),
            'invoice' => $this->invoice instanceof AbstractTransfer ? $this->invoice->toArray(true, false) : $this->addValuesToCollection($this->invoice, true, false),
            'item_groups' => $this->itemGroups instanceof AbstractTransfer ? $this->itemGroups->toArray(true, false) : $this->addValuesToCollection($this->itemGroups, true, false),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, false) : $this->addValuesToCollection($this->payments, true, false),
            'bundle_items' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, false) : $this->addValuesToCollection($this->bundleItems, true, false),
            'sales_order_configured_bundles' => $this->salesOrderConfiguredBundles instanceof AbstractTransfer ? $this->salesOrderConfiguredBundles->toArray(true, false) : $this->addValuesToCollection($this->salesOrderConfiguredBundles, true, false),
            'billing_addresses' => $this->billingAddresses instanceof AbstractTransfer ? $this->billingAddresses->toArray(true, false) : $this->addValuesToCollection($this->billingAddresses, true, false),
            'shipping_addresses' => $this->shippingAddresses instanceof AbstractTransfer ? $this->shippingAddresses->toArray(true, false) : $this->addValuesToCollection($this->shippingAddresses, true, false),
            'calculated_discounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, false) : $this->addValuesToCollection($this->calculatedDiscounts, true, false),
            'voucher_discounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, false) : $this->addValuesToCollection($this->voucherDiscounts, true, false),
            'shipment_methods' => $this->shipmentMethods instanceof AbstractTransfer ? $this->shipmentMethods->toArray(true, false) : $this->addValuesToCollection($this->shipmentMethods, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrder' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, true) : $this->idSalesOrder,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'isTest' => $this->isTest instanceof AbstractTransfer ? $this->isTest->toArray(true, true) : $this->isTest,
            'invoiceReference' => $this->invoiceReference instanceof AbstractTransfer ? $this->invoiceReference->toArray(true, true) : $this->invoiceReference,
            'invoiceCreatedAt' => $this->invoiceCreatedAt instanceof AbstractTransfer ? $this->invoiceCreatedAt->toArray(true, true) : $this->invoiceCreatedAt,
            'fkShipmentMethod' => $this->fkShipmentMethod instanceof AbstractTransfer ? $this->fkShipmentMethod->toArray(true, true) : $this->fkShipmentMethod,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'totalOrderCount' => $this->totalOrderCount instanceof AbstractTransfer ? $this->totalOrderCount->toArray(true, true) : $this->totalOrderCount,
            'uniqueProductQuantity' => $this->uniqueProductQuantity instanceof AbstractTransfer ? $this->uniqueProductQuantity->toArray(true, true) : $this->uniqueProductQuantity,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'orderCustomReference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, true) : $this->orderCustomReference,
            'cartNote' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, true) : $this->cartNote,
            'isCancellable' => $this->isCancellable instanceof AbstractTransfer ? $this->isCancellable->toArray(true, true) : $this->isCancellable,
            'companyBusinessUnitUuid' => $this->companyBusinessUnitUuid instanceof AbstractTransfer ? $this->companyBusinessUnitUuid->toArray(true, true) : $this->companyBusinessUnitUuid,
            'companyUuid' => $this->companyUuid instanceof AbstractTransfer ? $this->companyUuid->toArray(true, true) : $this->companyUuid,
            'itemStates' => $this->itemStates instanceof AbstractTransfer ? $this->itemStates->toArray(true, true) : $this->itemStates,
            'idShipmentMethod' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, true) : $this->idShipmentMethod,
            'shipmentDeliveryTime' => $this->shipmentDeliveryTime instanceof AbstractTransfer ? $this->shipmentDeliveryTime->toArray(true, true) : $this->shipmentDeliveryTime,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, true) : $this->totals,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'commentThread' => $this->commentThread instanceof AbstractTransfer ? $this->commentThread->toArray(true, true) : $this->commentThread,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'dummyPayment' => $this->dummyPayment instanceof AbstractTransfer ? $this->dummyPayment->toArray(true, true) : $this->dummyPayment,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'aggregatedItemStates' => $this->aggregatedItemStates instanceof AbstractTransfer ? $this->aggregatedItemStates->toArray(true, true) : $this->addValuesToCollection($this->aggregatedItemStates, true, true),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, true) : $this->addValuesToCollection($this->expenses, true, true),
            'invoice' => $this->invoice instanceof AbstractTransfer ? $this->invoice->toArray(true, true) : $this->addValuesToCollection($this->invoice, true, true),
            'itemGroups' => $this->itemGroups instanceof AbstractTransfer ? $this->itemGroups->toArray(true, true) : $this->addValuesToCollection($this->itemGroups, true, true),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, true) : $this->addValuesToCollection($this->payments, true, true),
            'bundleItems' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, true) : $this->addValuesToCollection($this->bundleItems, true, true),
            'salesOrderConfiguredBundles' => $this->salesOrderConfiguredBundles instanceof AbstractTransfer ? $this->salesOrderConfiguredBundles->toArray(true, true) : $this->addValuesToCollection($this->salesOrderConfiguredBundles, true, true),
            'billingAddresses' => $this->billingAddresses instanceof AbstractTransfer ? $this->billingAddresses->toArray(true, true) : $this->addValuesToCollection($this->billingAddresses, true, true),
            'shippingAddresses' => $this->shippingAddresses instanceof AbstractTransfer ? $this->shippingAddresses->toArray(true, true) : $this->addValuesToCollection($this->shippingAddresses, true, true),
            'calculatedDiscounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, true) : $this->addValuesToCollection($this->calculatedDiscounts, true, true),
            'voucherDiscounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, true) : $this->addValuesToCollection($this->voucherDiscounts, true, true),
            'shipmentMethods' => $this->shipmentMethods instanceof AbstractTransfer ? $this->shipmentMethods->toArray(true, true) : $this->addValuesToCollection($this->shipmentMethods, true, true),
        ];
    }
}
