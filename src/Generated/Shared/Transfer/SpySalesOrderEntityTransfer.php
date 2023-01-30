<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesOrderEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER = 'idSalesOrder';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ADDRESS_BILLING = 'fkSalesOrderAddressBilling';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ADDRESS_SHIPPING = 'fkSalesOrderAddressShipping';

    /**
     * @var string
     */
    public const CART_NOTE = 'cartNote';

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
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const IS_TEST = 'isTest';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const OMS_PROCESSOR_IDENTIFIER = 'omsProcessorIdentifier';

    /**
     * @var string
     */
    public const ORDER_CUSTOM_REFERENCE = 'orderCustomReference';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const SPY_SALES_PAYMENTS = 'spySalesPayments';

    /**
     * @var string
     */
    public const SPY_SALES_RECLAMATIONS = 'spySalesReclamations';

    /**
     * @var string
     */
    public const SPY_REFUNDS = 'spyRefunds';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_INVOICES = 'spySalesOrderInvoices';

    /**
     * @var string
     */
    public const SPY_OMS_TRANSITION_LOGS = 'spyOmsTransitionLogs';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEMS = 'spySalesOrderItems';

    /**
     * @var string
     */
    public const SPY_SALES_DISCOUNTS = 'spySalesDiscounts';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_TOTALSS = 'spySalesOrderTotalss';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_NOTES = 'spySalesOrderNotes';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_COMMENTS = 'spySalesOrderComments';

    /**
     * @var string
     */
    public const SPY_SALES_EXPENSES = 'spySalesExpenses';

    /**
     * @var string
     */
    public const SPY_SALES_SHIPMENTS = 'spySalesShipments';

    /**
     * @var integer|null
     */
    protected $idSalesOrder;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderAddressBilling;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderAddressShipping;

    /**
     * @var string|null
     */
    protected $cartNote;

    /**
     * @var string|null
     */
    protected $companyBusinessUnitUuid;

    /**
     * @var string|null
     */
    protected $companyUuid;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var boolean|null
     */
    protected $isTest;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $omsProcessorIdentifier;

    /**
     * @var string|null
     */
    protected $orderCustomReference;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null
     */
    protected $billingAddress;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $locale;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesPaymentEntityTransfer[]
     */
    protected $spySalesPayments;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationEntityTransfer[]
     */
    protected $spySalesReclamations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyRefundEntityTransfer[]
     */
    protected $spyRefunds;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderInvoiceEntityTransfer[]
     */
    protected $spySalesOrderInvoices;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer[]
     */
    protected $spyOmsTransitionLogs;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer[]
     */
    protected $spySalesOrderItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountEntityTransfer[]
     */
    protected $spySalesDiscounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderTotalsEntityTransfer[]
     */
    protected $spySalesOrderTotalss;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderNoteEntityTransfer[]
     */
    protected $spySalesOrderNotes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderCommentEntityTransfer[]
     */
    protected $spySalesOrderComments;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesExpenseEntityTransfer[]
     */
    protected $spySalesExpenses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesShipmentEntityTransfer[]
     */
    protected $spySalesShipments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order' => 'idSalesOrder',
        'idSalesOrder' => 'idSalesOrder',
        'IdSalesOrder' => 'idSalesOrder',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_sales_order_address_billing' => 'fkSalesOrderAddressBilling',
        'fkSalesOrderAddressBilling' => 'fkSalesOrderAddressBilling',
        'FkSalesOrderAddressBilling' => 'fkSalesOrderAddressBilling',
        'fk_sales_order_address_shipping' => 'fkSalesOrderAddressShipping',
        'fkSalesOrderAddressShipping' => 'fkSalesOrderAddressShipping',
        'FkSalesOrderAddressShipping' => 'fkSalesOrderAddressShipping',
        'cart_note' => 'cartNote',
        'cartNote' => 'cartNote',
        'CartNote' => 'cartNote',
        'company_business_unit_uuid' => 'companyBusinessUnitUuid',
        'companyBusinessUnitUuid' => 'companyBusinessUnitUuid',
        'CompanyBusinessUnitUuid' => 'companyBusinessUnitUuid',
        'company_uuid' => 'companyUuid',
        'companyUuid' => 'companyUuid',
        'CompanyUuid' => 'companyUuid',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'email' => 'email',
        'Email' => 'email',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'is_test' => 'isTest',
        'isTest' => 'isTest',
        'IsTest' => 'isTest',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'oms_processor_identifier' => 'omsProcessorIdentifier',
        'omsProcessorIdentifier' => 'omsProcessorIdentifier',
        'OmsProcessorIdentifier' => 'omsProcessorIdentifier',
        'order_custom_reference' => 'orderCustomReference',
        'orderCustomReference' => 'orderCustomReference',
        'OrderCustomReference' => 'orderCustomReference',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'store' => 'store',
        'Store' => 'store',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'locale' => 'locale',
        'Locale' => 'locale',
        'spy_sales_payments' => 'spySalesPayments',
        'spySalesPayments' => 'spySalesPayments',
        'SpySalesPayments' => 'spySalesPayments',
        'spy_sales_reclamations' => 'spySalesReclamations',
        'spySalesReclamations' => 'spySalesReclamations',
        'SpySalesReclamations' => 'spySalesReclamations',
        'spy_refunds' => 'spyRefunds',
        'spyRefunds' => 'spyRefunds',
        'SpyRefunds' => 'spyRefunds',
        'spy_sales_order_invoices' => 'spySalesOrderInvoices',
        'spySalesOrderInvoices' => 'spySalesOrderInvoices',
        'SpySalesOrderInvoices' => 'spySalesOrderInvoices',
        'spy_oms_transition_logs' => 'spyOmsTransitionLogs',
        'spyOmsTransitionLogs' => 'spyOmsTransitionLogs',
        'SpyOmsTransitionLogs' => 'spyOmsTransitionLogs',
        'spy_sales_order_items' => 'spySalesOrderItems',
        'spySalesOrderItems' => 'spySalesOrderItems',
        'SpySalesOrderItems' => 'spySalesOrderItems',
        'spy_sales_discounts' => 'spySalesDiscounts',
        'spySalesDiscounts' => 'spySalesDiscounts',
        'SpySalesDiscounts' => 'spySalesDiscounts',
        'spy_sales_order_totalss' => 'spySalesOrderTotalss',
        'spySalesOrderTotalss' => 'spySalesOrderTotalss',
        'SpySalesOrderTotalss' => 'spySalesOrderTotalss',
        'spy_sales_order_notes' => 'spySalesOrderNotes',
        'spySalesOrderNotes' => 'spySalesOrderNotes',
        'SpySalesOrderNotes' => 'spySalesOrderNotes',
        'spy_sales_order_comments' => 'spySalesOrderComments',
        'spySalesOrderComments' => 'spySalesOrderComments',
        'SpySalesOrderComments' => 'spySalesOrderComments',
        'spy_sales_expenses' => 'spySalesExpenses',
        'spySalesExpenses' => 'spySalesExpenses',
        'SpySalesExpenses' => 'spySalesExpenses',
        'spy_sales_shipments' => 'spySalesShipments',
        'spySalesShipments' => 'spySalesShipments',
        'SpySalesShipments' => 'spySalesShipments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER => [
            'type' => 'integer',
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
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_ADDRESS_BILLING => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_address_billing',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_ADDRESS_SHIPPING => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_address_shipping',
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
        self::IS_TEST => [
            'type' => 'boolean',
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
        self::OMS_PROCESSOR_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'oms_processor_identifier',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer',
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
            'type' => 'Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer',
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
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
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
        self::SPY_SALES_PAYMENTS => [
            'type' => 'Generated\Shared\Transfer\SpySalesPaymentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_payments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_RECLAMATIONS => [
            'type' => 'Generated\Shared\Transfer\SpySalesReclamationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_reclamations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_REFUNDS => [
            'type' => 'Generated\Shared\Transfer\SpyRefundEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_refunds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_INVOICES => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderInvoiceEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_invoices',
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
        self::SPY_SALES_ORDER_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_items',
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
        self::SPY_SALES_ORDER_TOTALSS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderTotalsEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_totalss',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_NOTES => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderNoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_notes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_COMMENTS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderCommentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_comments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_EXPENSES => [
            'type' => 'Generated\Shared\Transfer\SpySalesExpenseEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_expenses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_SHIPMENTS => [
            'type' => 'Generated\Shared\Transfer\SpySalesShipmentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_shipments',
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
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesOrder';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrder
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrder()
    {
        return $this->idSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrder
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderOrFail()
    {
        if ($this->idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->idSalesOrder;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderAddressBilling
     *
     * @return $this
     */
    public function setFkSalesOrderAddressBilling($fkSalesOrderAddressBilling)
    {
        $this->fkSalesOrderAddressBilling = $fkSalesOrderAddressBilling;
        $this->modifiedProperties[self::FK_SALES_ORDER_ADDRESS_BILLING] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderAddressBilling()
    {
        return $this->fkSalesOrderAddressBilling;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderAddressBilling
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderAddressBillingOrFail($fkSalesOrderAddressBilling)
    {
        if ($fkSalesOrderAddressBilling === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ADDRESS_BILLING);
        }

        return $this->setFkSalesOrderAddressBilling($fkSalesOrderAddressBilling);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderAddressBillingOrFail()
    {
        if ($this->fkSalesOrderAddressBilling === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ADDRESS_BILLING);
        }

        return $this->fkSalesOrderAddressBilling;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderAddressBilling()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ADDRESS_BILLING);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderAddressShipping
     *
     * @return $this
     */
    public function setFkSalesOrderAddressShipping($fkSalesOrderAddressShipping)
    {
        $this->fkSalesOrderAddressShipping = $fkSalesOrderAddressShipping;
        $this->modifiedProperties[self::FK_SALES_ORDER_ADDRESS_SHIPPING] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderAddressShipping()
    {
        return $this->fkSalesOrderAddressShipping;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderAddressShipping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderAddressShippingOrFail($fkSalesOrderAddressShipping)
    {
        if ($fkSalesOrderAddressShipping === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ADDRESS_SHIPPING);
        }

        return $this->setFkSalesOrderAddressShipping($fkSalesOrderAddressShipping);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderAddressShippingOrFail()
    {
        if ($this->fkSalesOrderAddressShipping === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ADDRESS_SHIPPING);
        }

        return $this->fkSalesOrderAddressShipping;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderAddressShipping()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ADDRESS_SHIPPING);

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
     * @module 
     *
     * @return string|null
     */
    public function getCompanyBusinessUnitUuid()
    {
        return $this->companyBusinessUnitUuid;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCompanyUuid()
    {
        return $this->companyUuid;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isTest
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsTest()
    {
        return $this->isTest;
    }

    /**
     * @module 
     *
     * @param boolean|null $isTest
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsTestOrFail()
    {
        if ($this->isTest === null) {
            $this->throwNullValueException(static::IS_TEST);
        }

        return $this->isTest;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $omsProcessorIdentifier
     *
     * @return $this
     */
    public function setOmsProcessorIdentifier($omsProcessorIdentifier)
    {
        $this->omsProcessorIdentifier = $omsProcessorIdentifier;
        $this->modifiedProperties[self::OMS_PROCESSOR_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getOmsProcessorIdentifier()
    {
        return $this->omsProcessorIdentifier;
    }

    /**
     * @module 
     *
     * @param string|null $omsProcessorIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOmsProcessorIdentifierOrFail($omsProcessorIdentifier)
    {
        if ($omsProcessorIdentifier === null) {
            $this->throwNullValueException(static::OMS_PROCESSOR_IDENTIFIER);
        }

        return $this->setOmsProcessorIdentifier($omsProcessorIdentifier);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOmsProcessorIdentifierOrFail()
    {
        if ($this->omsProcessorIdentifier === null) {
            $this->throwNullValueException(static::OMS_PROCESSOR_IDENTIFIER);
        }

        return $this->omsProcessorIdentifier;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOmsProcessorIdentifier()
    {
        $this->assertPropertyIsSet(self::OMS_PROCESSOR_IDENTIFIER);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getOrderCustomReference()
    {
        return $this->orderCustomReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(SpySalesOrderAddressEntityTransfer $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer $billingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingAddressOrFail(SpySalesOrderAddressEntityTransfer $billingAddress)
    {
        return $this->setBillingAddress($billingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer
     */
    public function getBillingAddressOrFail()
    {
        if ($this->billingAddress === null) {
            $this->throwNullValueException(static::BILLING_ADDRESS);
        }

        return $this->billingAddress;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(SpySalesOrderAddressEntityTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(SpySalesOrderAddressEntityTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(SpyLocaleEntityTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(SpyLocaleEntityTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesPaymentEntityTransfer[] $spySalesPayments
     *
     * @return $this
     */
    public function setSpySalesPayments(ArrayObject $spySalesPayments)
    {
        $this->spySalesPayments = $spySalesPayments;
        $this->modifiedProperties[self::SPY_SALES_PAYMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesPaymentEntityTransfer[]
     */
    public function getSpySalesPayments()
    {
        return $this->spySalesPayments;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesPaymentEntityTransfer $spySalesPayments
     *
     * @return $this
     */
    public function addSpySalesPayments(SpySalesPaymentEntityTransfer $spySalesPayments)
    {
        $this->spySalesPayments[] = $spySalesPayments;
        $this->modifiedProperties[self::SPY_SALES_PAYMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesPayments()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_PAYMENTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationEntityTransfer[] $spySalesReclamations
     *
     * @return $this
     */
    public function setSpySalesReclamations(ArrayObject $spySalesReclamations)
    {
        $this->spySalesReclamations = $spySalesReclamations;
        $this->modifiedProperties[self::SPY_SALES_RECLAMATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationEntityTransfer[]
     */
    public function getSpySalesReclamations()
    {
        return $this->spySalesReclamations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesReclamationEntityTransfer $spySalesReclamations
     *
     * @return $this
     */
    public function addSpySalesReclamations(SpySalesReclamationEntityTransfer $spySalesReclamations)
    {
        $this->spySalesReclamations[] = $spySalesReclamations;
        $this->modifiedProperties[self::SPY_SALES_RECLAMATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesReclamations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_RECLAMATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyRefundEntityTransfer[] $spyRefunds
     *
     * @return $this
     */
    public function setSpyRefunds(ArrayObject $spyRefunds)
    {
        $this->spyRefunds = $spyRefunds;
        $this->modifiedProperties[self::SPY_REFUNDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyRefundEntityTransfer[]
     */
    public function getSpyRefunds()
    {
        return $this->spyRefunds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyRefundEntityTransfer $spyRefunds
     *
     * @return $this
     */
    public function addSpyRefunds(SpyRefundEntityTransfer $spyRefunds)
    {
        $this->spyRefunds[] = $spyRefunds;
        $this->modifiedProperties[self::SPY_REFUNDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyRefunds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_REFUNDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderInvoiceEntityTransfer[] $spySalesOrderInvoices
     *
     * @return $this
     */
    public function setSpySalesOrderInvoices(ArrayObject $spySalesOrderInvoices)
    {
        $this->spySalesOrderInvoices = $spySalesOrderInvoices;
        $this->modifiedProperties[self::SPY_SALES_ORDER_INVOICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderInvoiceEntityTransfer[]
     */
    public function getSpySalesOrderInvoices()
    {
        return $this->spySalesOrderInvoices;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderInvoiceEntityTransfer $spySalesOrderInvoices
     *
     * @return $this
     */
    public function addSpySalesOrderInvoices(SpySalesOrderInvoiceEntityTransfer $spySalesOrderInvoices)
    {
        $this->spySalesOrderInvoices[] = $spySalesOrderInvoices;
        $this->modifiedProperties[self::SPY_SALES_ORDER_INVOICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderInvoices()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_INVOICES);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer[] $spySalesOrderItems
     *
     * @return $this
     */
    public function setSpySalesOrderItems(ArrayObject $spySalesOrderItems)
    {
        $this->spySalesOrderItems = $spySalesOrderItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer[]
     */
    public function getSpySalesOrderItems()
    {
        return $this->spySalesOrderItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $spySalesOrderItems
     *
     * @return $this
     */
    public function addSpySalesOrderItems(SpySalesOrderItemEntityTransfer $spySalesOrderItems)
    {
        $this->spySalesOrderItems[] = $spySalesOrderItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ITEMS);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderTotalsEntityTransfer[] $spySalesOrderTotalss
     *
     * @return $this
     */
    public function setSpySalesOrderTotalss(ArrayObject $spySalesOrderTotalss)
    {
        $this->spySalesOrderTotalss = $spySalesOrderTotalss;
        $this->modifiedProperties[self::SPY_SALES_ORDER_TOTALSS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderTotalsEntityTransfer[]
     */
    public function getSpySalesOrderTotalss()
    {
        return $this->spySalesOrderTotalss;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderTotalsEntityTransfer $spySalesOrderTotalss
     *
     * @return $this
     */
    public function addSpySalesOrderTotalss(SpySalesOrderTotalsEntityTransfer $spySalesOrderTotalss)
    {
        $this->spySalesOrderTotalss[] = $spySalesOrderTotalss;
        $this->modifiedProperties[self::SPY_SALES_ORDER_TOTALSS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderTotalss()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_TOTALSS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderNoteEntityTransfer[] $spySalesOrderNotes
     *
     * @return $this
     */
    public function setSpySalesOrderNotes(ArrayObject $spySalesOrderNotes)
    {
        $this->spySalesOrderNotes = $spySalesOrderNotes;
        $this->modifiedProperties[self::SPY_SALES_ORDER_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderNoteEntityTransfer[]
     */
    public function getSpySalesOrderNotes()
    {
        return $this->spySalesOrderNotes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderNoteEntityTransfer $spySalesOrderNotes
     *
     * @return $this
     */
    public function addSpySalesOrderNotes(SpySalesOrderNoteEntityTransfer $spySalesOrderNotes)
    {
        $this->spySalesOrderNotes[] = $spySalesOrderNotes;
        $this->modifiedProperties[self::SPY_SALES_ORDER_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderNotes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_NOTES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderCommentEntityTransfer[] $spySalesOrderComments
     *
     * @return $this
     */
    public function setSpySalesOrderComments(ArrayObject $spySalesOrderComments)
    {
        $this->spySalesOrderComments = $spySalesOrderComments;
        $this->modifiedProperties[self::SPY_SALES_ORDER_COMMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderCommentEntityTransfer[]
     */
    public function getSpySalesOrderComments()
    {
        return $this->spySalesOrderComments;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderCommentEntityTransfer $spySalesOrderComments
     *
     * @return $this
     */
    public function addSpySalesOrderComments(SpySalesOrderCommentEntityTransfer $spySalesOrderComments)
    {
        $this->spySalesOrderComments[] = $spySalesOrderComments;
        $this->modifiedProperties[self::SPY_SALES_ORDER_COMMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderComments()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_COMMENTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesExpenseEntityTransfer[] $spySalesExpenses
     *
     * @return $this
     */
    public function setSpySalesExpenses(ArrayObject $spySalesExpenses)
    {
        $this->spySalesExpenses = $spySalesExpenses;
        $this->modifiedProperties[self::SPY_SALES_EXPENSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesExpenseEntityTransfer[]
     */
    public function getSpySalesExpenses()
    {
        return $this->spySalesExpenses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesExpenseEntityTransfer $spySalesExpenses
     *
     * @return $this
     */
    public function addSpySalesExpenses(SpySalesExpenseEntityTransfer $spySalesExpenses)
    {
        $this->spySalesExpenses[] = $spySalesExpenses;
        $this->modifiedProperties[self::SPY_SALES_EXPENSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesExpenses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_EXPENSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesShipmentEntityTransfer[] $spySalesShipments
     *
     * @return $this
     */
    public function setSpySalesShipments(ArrayObject $spySalesShipments)
    {
        $this->spySalesShipments = $spySalesShipments;
        $this->modifiedProperties[self::SPY_SALES_SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesShipmentEntityTransfer[]
     */
    public function getSpySalesShipments()
    {
        return $this->spySalesShipments;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesShipmentEntityTransfer $spySalesShipments
     *
     * @return $this
     */
    public function addSpySalesShipments(SpySalesShipmentEntityTransfer $spySalesShipments)
    {
        $this->spySalesShipments[] = $spySalesShipments;
        $this->modifiedProperties[self::SPY_SALES_SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesShipments()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_SHIPMENTS);

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
                case 'fkLocale':
                case 'fkSalesOrderAddressBilling':
                case 'fkSalesOrderAddressShipping':
                case 'cartNote':
                case 'companyBusinessUnitUuid':
                case 'companyUuid':
                case 'currencyIsoCode':
                case 'customerReference':
                case 'email':
                case 'firstName':
                case 'isTest':
                case 'lastName':
                case 'omsProcessorIdentifier':
                case 'orderCustomReference':
                case 'orderReference':
                case 'priceMode':
                case 'salutation':
                case 'store':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
                case 'locale':
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
                case 'spySalesPayments':
                case 'spySalesReclamations':
                case 'spyRefunds':
                case 'spySalesOrderInvoices':
                case 'spyOmsTransitionLogs':
                case 'spySalesOrderItems':
                case 'spySalesDiscounts':
                case 'spySalesOrderTotalss':
                case 'spySalesOrderNotes':
                case 'spySalesOrderComments':
                case 'spySalesExpenses':
                case 'spySalesShipments':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

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
                case 'idSalesOrder':
                case 'fkLocale':
                case 'fkSalesOrderAddressBilling':
                case 'fkSalesOrderAddressShipping':
                case 'cartNote':
                case 'companyBusinessUnitUuid':
                case 'companyUuid':
                case 'currencyIsoCode':
                case 'customerReference':
                case 'email':
                case 'firstName':
                case 'isTest':
                case 'lastName':
                case 'omsProcessorIdentifier':
                case 'orderCustomReference':
                case 'orderReference':
                case 'priceMode':
                case 'salutation':
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spySalesPayments':
                case 'spySalesReclamations':
                case 'spyRefunds':
                case 'spySalesOrderInvoices':
                case 'spyOmsTransitionLogs':
                case 'spySalesOrderItems':
                case 'spySalesDiscounts':
                case 'spySalesOrderTotalss':
                case 'spySalesOrderNotes':
                case 'spySalesOrderComments':
                case 'spySalesExpenses':
                case 'spySalesShipments':
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
                case 'fkLocale':
                case 'fkSalesOrderAddressBilling':
                case 'fkSalesOrderAddressShipping':
                case 'cartNote':
                case 'companyBusinessUnitUuid':
                case 'companyUuid':
                case 'currencyIsoCode':
                case 'customerReference':
                case 'email':
                case 'firstName':
                case 'isTest':
                case 'lastName':
                case 'omsProcessorIdentifier':
                case 'orderCustomReference':
                case 'orderReference':
                case 'priceMode':
                case 'salutation':
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spySalesPayments':
                case 'spySalesReclamations':
                case 'spyRefunds':
                case 'spySalesOrderInvoices':
                case 'spyOmsTransitionLogs':
                case 'spySalesOrderItems':
                case 'spySalesDiscounts':
                case 'spySalesOrderTotalss':
                case 'spySalesOrderNotes':
                case 'spySalesOrderComments':
                case 'spySalesExpenses':
                case 'spySalesShipments':
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
        $this->spySalesPayments = $this->spySalesPayments ?: new ArrayObject();
        $this->spySalesReclamations = $this->spySalesReclamations ?: new ArrayObject();
        $this->spyRefunds = $this->spyRefunds ?: new ArrayObject();
        $this->spySalesOrderInvoices = $this->spySalesOrderInvoices ?: new ArrayObject();
        $this->spyOmsTransitionLogs = $this->spyOmsTransitionLogs ?: new ArrayObject();
        $this->spySalesOrderItems = $this->spySalesOrderItems ?: new ArrayObject();
        $this->spySalesDiscounts = $this->spySalesDiscounts ?: new ArrayObject();
        $this->spySalesOrderTotalss = $this->spySalesOrderTotalss ?: new ArrayObject();
        $this->spySalesOrderNotes = $this->spySalesOrderNotes ?: new ArrayObject();
        $this->spySalesOrderComments = $this->spySalesOrderComments ?: new ArrayObject();
        $this->spySalesExpenses = $this->spySalesExpenses ?: new ArrayObject();
        $this->spySalesShipments = $this->spySalesShipments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesOrder' => $this->idSalesOrder,
            'fkLocale' => $this->fkLocale,
            'fkSalesOrderAddressBilling' => $this->fkSalesOrderAddressBilling,
            'fkSalesOrderAddressShipping' => $this->fkSalesOrderAddressShipping,
            'cartNote' => $this->cartNote,
            'companyBusinessUnitUuid' => $this->companyBusinessUnitUuid,
            'companyUuid' => $this->companyUuid,
            'currencyIsoCode' => $this->currencyIsoCode,
            'customerReference' => $this->customerReference,
            'email' => $this->email,
            'firstName' => $this->firstName,
            'isTest' => $this->isTest,
            'lastName' => $this->lastName,
            'omsProcessorIdentifier' => $this->omsProcessorIdentifier,
            'orderCustomReference' => $this->orderCustomReference,
            'orderReference' => $this->orderReference,
            'priceMode' => $this->priceMode,
            'salutation' => $this->salutation,
            'store' => $this->store,
            'billingAddress' => $this->billingAddress,
            'shippingAddress' => $this->shippingAddress,
            'locale' => $this->locale,
            'spySalesPayments' => $this->spySalesPayments,
            'spySalesReclamations' => $this->spySalesReclamations,
            'spyRefunds' => $this->spyRefunds,
            'spySalesOrderInvoices' => $this->spySalesOrderInvoices,
            'spyOmsTransitionLogs' => $this->spyOmsTransitionLogs,
            'spySalesOrderItems' => $this->spySalesOrderItems,
            'spySalesDiscounts' => $this->spySalesDiscounts,
            'spySalesOrderTotalss' => $this->spySalesOrderTotalss,
            'spySalesOrderNotes' => $this->spySalesOrderNotes,
            'spySalesOrderComments' => $this->spySalesOrderComments,
            'spySalesExpenses' => $this->spySalesExpenses,
            'spySalesShipments' => $this->spySalesShipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order' => $this->idSalesOrder,
            'fk_locale' => $this->fkLocale,
            'fk_sales_order_address_billing' => $this->fkSalesOrderAddressBilling,
            'fk_sales_order_address_shipping' => $this->fkSalesOrderAddressShipping,
            'cart_note' => $this->cartNote,
            'company_business_unit_uuid' => $this->companyBusinessUnitUuid,
            'company_uuid' => $this->companyUuid,
            'currency_iso_code' => $this->currencyIsoCode,
            'customer_reference' => $this->customerReference,
            'email' => $this->email,
            'first_name' => $this->firstName,
            'is_test' => $this->isTest,
            'last_name' => $this->lastName,
            'oms_processor_identifier' => $this->omsProcessorIdentifier,
            'order_custom_reference' => $this->orderCustomReference,
            'order_reference' => $this->orderReference,
            'price_mode' => $this->priceMode,
            'salutation' => $this->salutation,
            'store' => $this->store,
            'billing_address' => $this->billingAddress,
            'shipping_address' => $this->shippingAddress,
            'locale' => $this->locale,
            'spy_sales_payments' => $this->spySalesPayments,
            'spy_sales_reclamations' => $this->spySalesReclamations,
            'spy_refunds' => $this->spyRefunds,
            'spy_sales_order_invoices' => $this->spySalesOrderInvoices,
            'spy_oms_transition_logs' => $this->spyOmsTransitionLogs,
            'spy_sales_order_items' => $this->spySalesOrderItems,
            'spy_sales_discounts' => $this->spySalesDiscounts,
            'spy_sales_order_totalss' => $this->spySalesOrderTotalss,
            'spy_sales_order_notes' => $this->spySalesOrderNotes,
            'spy_sales_order_comments' => $this->spySalesOrderComments,
            'spy_sales_expenses' => $this->spySalesExpenses,
            'spy_sales_shipments' => $this->spySalesShipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, false) : $this->idSalesOrder,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_sales_order_address_billing' => $this->fkSalesOrderAddressBilling instanceof AbstractTransfer ? $this->fkSalesOrderAddressBilling->toArray(true, false) : $this->fkSalesOrderAddressBilling,
            'fk_sales_order_address_shipping' => $this->fkSalesOrderAddressShipping instanceof AbstractTransfer ? $this->fkSalesOrderAddressShipping->toArray(true, false) : $this->fkSalesOrderAddressShipping,
            'cart_note' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, false) : $this->cartNote,
            'company_business_unit_uuid' => $this->companyBusinessUnitUuid instanceof AbstractTransfer ? $this->companyBusinessUnitUuid->toArray(true, false) : $this->companyBusinessUnitUuid,
            'company_uuid' => $this->companyUuid instanceof AbstractTransfer ? $this->companyUuid->toArray(true, false) : $this->companyUuid,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'is_test' => $this->isTest instanceof AbstractTransfer ? $this->isTest->toArray(true, false) : $this->isTest,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'oms_processor_identifier' => $this->omsProcessorIdentifier instanceof AbstractTransfer ? $this->omsProcessorIdentifier->toArray(true, false) : $this->omsProcessorIdentifier,
            'order_custom_reference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, false) : $this->orderCustomReference,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'spy_sales_payments' => $this->spySalesPayments instanceof AbstractTransfer ? $this->spySalesPayments->toArray(true, false) : $this->addValuesToCollection($this->spySalesPayments, true, false),
            'spy_sales_reclamations' => $this->spySalesReclamations instanceof AbstractTransfer ? $this->spySalesReclamations->toArray(true, false) : $this->addValuesToCollection($this->spySalesReclamations, true, false),
            'spy_refunds' => $this->spyRefunds instanceof AbstractTransfer ? $this->spyRefunds->toArray(true, false) : $this->addValuesToCollection($this->spyRefunds, true, false),
            'spy_sales_order_invoices' => $this->spySalesOrderInvoices instanceof AbstractTransfer ? $this->spySalesOrderInvoices->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderInvoices, true, false),
            'spy_oms_transition_logs' => $this->spyOmsTransitionLogs instanceof AbstractTransfer ? $this->spyOmsTransitionLogs->toArray(true, false) : $this->addValuesToCollection($this->spyOmsTransitionLogs, true, false),
            'spy_sales_order_items' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderItems, true, false),
            'spy_sales_discounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, false) : $this->addValuesToCollection($this->spySalesDiscounts, true, false),
            'spy_sales_order_totalss' => $this->spySalesOrderTotalss instanceof AbstractTransfer ? $this->spySalesOrderTotalss->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderTotalss, true, false),
            'spy_sales_order_notes' => $this->spySalesOrderNotes instanceof AbstractTransfer ? $this->spySalesOrderNotes->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderNotes, true, false),
            'spy_sales_order_comments' => $this->spySalesOrderComments instanceof AbstractTransfer ? $this->spySalesOrderComments->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderComments, true, false),
            'spy_sales_expenses' => $this->spySalesExpenses instanceof AbstractTransfer ? $this->spySalesExpenses->toArray(true, false) : $this->addValuesToCollection($this->spySalesExpenses, true, false),
            'spy_sales_shipments' => $this->spySalesShipments instanceof AbstractTransfer ? $this->spySalesShipments->toArray(true, false) : $this->addValuesToCollection($this->spySalesShipments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrder' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, true) : $this->idSalesOrder,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkSalesOrderAddressBilling' => $this->fkSalesOrderAddressBilling instanceof AbstractTransfer ? $this->fkSalesOrderAddressBilling->toArray(true, true) : $this->fkSalesOrderAddressBilling,
            'fkSalesOrderAddressShipping' => $this->fkSalesOrderAddressShipping instanceof AbstractTransfer ? $this->fkSalesOrderAddressShipping->toArray(true, true) : $this->fkSalesOrderAddressShipping,
            'cartNote' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, true) : $this->cartNote,
            'companyBusinessUnitUuid' => $this->companyBusinessUnitUuid instanceof AbstractTransfer ? $this->companyBusinessUnitUuid->toArray(true, true) : $this->companyBusinessUnitUuid,
            'companyUuid' => $this->companyUuid instanceof AbstractTransfer ? $this->companyUuid->toArray(true, true) : $this->companyUuid,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'isTest' => $this->isTest instanceof AbstractTransfer ? $this->isTest->toArray(true, true) : $this->isTest,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'omsProcessorIdentifier' => $this->omsProcessorIdentifier instanceof AbstractTransfer ? $this->omsProcessorIdentifier->toArray(true, true) : $this->omsProcessorIdentifier,
            'orderCustomReference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, true) : $this->orderCustomReference,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'spySalesPayments' => $this->spySalesPayments instanceof AbstractTransfer ? $this->spySalesPayments->toArray(true, true) : $this->addValuesToCollection($this->spySalesPayments, true, true),
            'spySalesReclamations' => $this->spySalesReclamations instanceof AbstractTransfer ? $this->spySalesReclamations->toArray(true, true) : $this->addValuesToCollection($this->spySalesReclamations, true, true),
            'spyRefunds' => $this->spyRefunds instanceof AbstractTransfer ? $this->spyRefunds->toArray(true, true) : $this->addValuesToCollection($this->spyRefunds, true, true),
            'spySalesOrderInvoices' => $this->spySalesOrderInvoices instanceof AbstractTransfer ? $this->spySalesOrderInvoices->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderInvoices, true, true),
            'spyOmsTransitionLogs' => $this->spyOmsTransitionLogs instanceof AbstractTransfer ? $this->spyOmsTransitionLogs->toArray(true, true) : $this->addValuesToCollection($this->spyOmsTransitionLogs, true, true),
            'spySalesOrderItems' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderItems, true, true),
            'spySalesDiscounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, true) : $this->addValuesToCollection($this->spySalesDiscounts, true, true),
            'spySalesOrderTotalss' => $this->spySalesOrderTotalss instanceof AbstractTransfer ? $this->spySalesOrderTotalss->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderTotalss, true, true),
            'spySalesOrderNotes' => $this->spySalesOrderNotes instanceof AbstractTransfer ? $this->spySalesOrderNotes->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderNotes, true, true),
            'spySalesOrderComments' => $this->spySalesOrderComments instanceof AbstractTransfer ? $this->spySalesOrderComments->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderComments, true, true),
            'spySalesExpenses' => $this->spySalesExpenses instanceof AbstractTransfer ? $this->spySalesExpenses->toArray(true, true) : $this->addValuesToCollection($this->spySalesExpenses, true, true),
            'spySalesShipments' => $this->spySalesShipments instanceof AbstractTransfer ? $this->spySalesShipments->toArray(true, true) : $this->addValuesToCollection($this->spySalesShipments, true, true),
        ];
    }
}
