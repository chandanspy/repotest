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
class QuoteTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const QUOTE_APPROVALS = 'quoteApprovals';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_VERSION_REFERENCE = 'quoteRequestVersionReference';

    /**
     * @var string
     */
    public const COMMENT_THREAD = 'commentThread';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const TOTALS = 'totals';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const BILLING_SAME_AS_SHIPPING = 'billingSameAsShipping';

    /**
     * @deprecated Use payments property instead.
     */
    public const PAYMENT = 'payment';

    /**
     * @var string
     */
    public const PAYMENTS = 'payments';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const BUNDLE_ITEMS = 'bundleItems';

    /**
     * @var string
     */
    public const EXPENSES = 'expenses';

    /**
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     */
    public const IS_ADDRESS_SAVING_SKIPPED = 'isAddressSavingSkipped';

    /**
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @deprecated Use item level shipment details (item.shipment) instead.
     */
    public const SHIPMENT = 'shipment';

    /**
     * @var string
     */
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @var string
     */
    public const CHECKOUT_CONFIRMED = 'checkoutConfirmed';

    /**
     * @var string
     */
    public const ACCEPT_TERMS_AND_CONDITIONS = 'acceptTermsAndConditions';

    /**
     * @var string
     */
    public const IS_ORDER_PLACED_SUCCESSFULLY = 'isOrderPlacedSuccessfully';

    /**
     * @var string
     */
    public const PROMOTION_ITEMS = 'promotionItems';

    /**
     * @var string
     */
    public const IS_LOCKED = 'isLocked';

    /**
     * @var string
     */
    public const VOUCHER_DISCOUNTS = 'voucherDiscounts';

    /**
     * @var string
     */
    public const USED_NOT_APPLIED_VOUCHER_CODES = 'usedNotAppliedVoucherCodes';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SHARE_DETAILS = 'shareDetails';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const ORDER_CUSTOM_REFERENCE = 'orderCustomReference';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_REFERENCE = 'quoteRequestReference';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const CART_RULE_DISCOUNTS = 'cartRuleDiscounts';

    /**
     * @var string
     */
    public const CART_NOTE = 'cartNote';

    /**
     * @var string
     */
    public const QUOTE_PERMISSION_GROUP = 'quotePermissionGroup';

    /**
     * @var string
     */
    public const COMPANY_USER_ID = 'companyUserId';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const SALES_ORDER_THRESHOLD_VALUES = 'salesOrderThresholdValues';

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $items;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\QuoteApprovalTransfer[]
     */
    protected $quoteApprovals;

    /**
     * @var string|null
     */
    protected $quoteRequestVersionReference;

    /**
     * @var \Generated\Shared\Transfer\CommentThreadTransfer|null
     */
    protected $commentThread;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var \Generated\Shared\Transfer\TotalsTransfer|null
     */
    protected $totals;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var bool|null
     */
    protected $billingSameAsShipping;

    /**
     * @var \Generated\Shared\Transfer\PaymentTransfer|null
     */
    protected $payment;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PaymentTransfer[]
     */
    protected $payments;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $bundleItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    protected $expenses;

    /**
     * @var bool|null
     */
    protected $isAddressSavingSkipped;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    protected $shipment;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $billingAddress;

    /**
     * @var bool|null
     */
    protected $checkoutConfirmed;

    /**
     * @var bool|null
     */
    protected $acceptTermsAndConditions;

    /**
     * @var bool|null
     */
    protected $isOrderPlacedSuccessfully;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PromotionItemTransfer[]
     */
    protected $promotionItems;

    /**
     * @var bool|null
     */
    protected $isLocked;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    protected $voucherDiscounts;

    /**
     * @var array
     */
    protected $usedNotAppliedVoucherCodes = [];

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[]
     */
    protected $shareDetails;

    /**
     * @var bool|null
     */
    protected $isDefault;

    /**
     * @var string|null
     */
    protected $orderCustomReference;

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $quoteRequestReference;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    protected $cartRuleDiscounts;

    /**
     * @var string|null
     */
    protected $cartNote;

    /**
     * @var \Generated\Shared\Transfer\QuotePermissionGroupTransfer|null
     */
    protected $quotePermissionGroup;

    /**
     * @var int|null
     */
    protected $companyUserId;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SalesOrderThresholdValueTransfer[]
     */
    protected $salesOrderThresholdValues;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'items' => 'items',
        'Items' => 'items',
        'quote_approvals' => 'quoteApprovals',
        'quoteApprovals' => 'quoteApprovals',
        'QuoteApprovals' => 'quoteApprovals',
        'quote_request_version_reference' => 'quoteRequestVersionReference',
        'quoteRequestVersionReference' => 'quoteRequestVersionReference',
        'QuoteRequestVersionReference' => 'quoteRequestVersionReference',
        'comment_thread' => 'commentThread',
        'commentThread' => 'commentThread',
        'CommentThread' => 'commentThread',
        'customer' => 'customer',
        'Customer' => 'customer',
        'totals' => 'totals',
        'Totals' => 'totals',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'billing_same_as_shipping' => 'billingSameAsShipping',
        'billingSameAsShipping' => 'billingSameAsShipping',
        'BillingSameAsShipping' => 'billingSameAsShipping',
        'payment' => 'payment',
        'Payment' => 'payment',
        'payments' => 'payments',
        'Payments' => 'payments',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'bundle_items' => 'bundleItems',
        'bundleItems' => 'bundleItems',
        'BundleItems' => 'bundleItems',
        'expenses' => 'expenses',
        'Expenses' => 'expenses',
        'is_address_saving_skipped' => 'isAddressSavingSkipped',
        'isAddressSavingSkipped' => 'isAddressSavingSkipped',
        'IsAddressSavingSkipped' => 'isAddressSavingSkipped',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'shipment' => 'shipment',
        'Shipment' => 'shipment',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'checkout_confirmed' => 'checkoutConfirmed',
        'checkoutConfirmed' => 'checkoutConfirmed',
        'CheckoutConfirmed' => 'checkoutConfirmed',
        'accept_terms_and_conditions' => 'acceptTermsAndConditions',
        'acceptTermsAndConditions' => 'acceptTermsAndConditions',
        'AcceptTermsAndConditions' => 'acceptTermsAndConditions',
        'is_order_placed_successfully' => 'isOrderPlacedSuccessfully',
        'isOrderPlacedSuccessfully' => 'isOrderPlacedSuccessfully',
        'IsOrderPlacedSuccessfully' => 'isOrderPlacedSuccessfully',
        'promotion_items' => 'promotionItems',
        'promotionItems' => 'promotionItems',
        'PromotionItems' => 'promotionItems',
        'is_locked' => 'isLocked',
        'isLocked' => 'isLocked',
        'IsLocked' => 'isLocked',
        'voucher_discounts' => 'voucherDiscounts',
        'voucherDiscounts' => 'voucherDiscounts',
        'VoucherDiscounts' => 'voucherDiscounts',
        'used_not_applied_voucher_codes' => 'usedNotAppliedVoucherCodes',
        'usedNotAppliedVoucherCodes' => 'usedNotAppliedVoucherCodes',
        'UsedNotAppliedVoucherCodes' => 'usedNotAppliedVoucherCodes',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'name' => 'name',
        'Name' => 'name',
        'share_details' => 'shareDetails',
        'shareDetails' => 'shareDetails',
        'ShareDetails' => 'shareDetails',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'order_custom_reference' => 'orderCustomReference',
        'orderCustomReference' => 'orderCustomReference',
        'OrderCustomReference' => 'orderCustomReference',
        'currency' => 'currency',
        'Currency' => 'currency',
        'quote_request_reference' => 'quoteRequestReference',
        'quoteRequestReference' => 'quoteRequestReference',
        'QuoteRequestReference' => 'quoteRequestReference',
        'store' => 'store',
        'Store' => 'store',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'cart_rule_discounts' => 'cartRuleDiscounts',
        'cartRuleDiscounts' => 'cartRuleDiscounts',
        'CartRuleDiscounts' => 'cartRuleDiscounts',
        'cart_note' => 'cartNote',
        'cartNote' => 'cartNote',
        'CartNote' => 'cartNote',
        'quote_permission_group' => 'quotePermissionGroup',
        'quotePermissionGroup' => 'quotePermissionGroup',
        'QuotePermissionGroup' => 'quotePermissionGroup',
        'company_user_id' => 'companyUserId',
        'companyUserId' => 'companyUserId',
        'CompanyUserId' => 'companyUserId',
        'key' => 'key',
        'Key' => 'key',
        'sales_order_threshold_values' => 'salesOrderThresholdValues',
        'salesOrderThresholdValues' => 'salesOrderThresholdValues',
        'SalesOrderThresholdValues' => 'salesOrderThresholdValues',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::QUOTE_APPROVALS => [
            'type' => 'Generated\Shared\Transfer\QuoteApprovalTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_approvals',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_REQUEST_VERSION_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_request_version_reference',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::BILLING_SAME_AS_SHIPPING => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'billing_same_as_shipping',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT => [
            'type' => 'Generated\Shared\Transfer\PaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::IS_ADDRESS_SAVING_SKIPPED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_address_saving_skipped',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::CHECKOUT_CONFIRMED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'checkout_confirmed',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACCEPT_TERMS_AND_CONDITIONS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'accept_terms_and_conditions',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ORDER_PLACED_SUCCESSFULLY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_order_placed_successfully',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROMOTION_ITEMS => [
            'type' => 'Generated\Shared\Transfer\PromotionItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'promotion_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_LOCKED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_locked',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::USED_NOT_APPLIED_VOUCHER_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'used_not_applied_voucher_codes',
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
        self::SHARE_DETAILS => [
            'type' => 'Generated\Shared\Transfer\ShareDetailTransfer',
            'type_shim' => null,
            'name_underscore' => 'share_details',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEFAULT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_default',
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
        self::QUOTE_REQUEST_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_request_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::CART_RULE_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\DiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'cart_rule_discounts',
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
        self::QUOTE_PERMISSION_GROUP => [
            'type' => 'Generated\Shared\Transfer\QuotePermissionGroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_permission_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'company_user_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_THRESHOLD_VALUES => [
            'type' => 'Generated\Shared\Transfer\SalesOrderThresholdValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_threshold_values',
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
     * @module CartNoteWidget|CartPage|MultiCartPage|MultiCartWidget|QuoteApprovalWidget|SharedCartWidget|ShoppingListPage|CartNote|CartsRestApi|Comment|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi
     *
     * @param int|null $idQuote
     *
     * @return $this
     */
    public function setIdQuote($idQuote)
    {
        $this->idQuote = $idQuote;
        $this->modifiedProperties[self::ID_QUOTE] = true;

        return $this;
    }

    /**
     * @module CartNoteWidget|CartPage|MultiCartPage|MultiCartWidget|QuoteApprovalWidget|SharedCartWidget|ShoppingListPage|CartNote|CartsRestApi|Comment|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module CartNoteWidget|CartPage|MultiCartPage|MultiCartWidget|QuoteApprovalWidget|SharedCartWidget|ShoppingListPage|CartNote|CartsRestApi|Comment|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi
     *
     * @param int|null $idQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteOrFail($idQuote)
    {
        if ($idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->setIdQuote($idQuote);
    }

    /**
     * @module CartNoteWidget|CartPage|MultiCartPage|MultiCartWidget|QuoteApprovalWidget|SharedCartWidget|ShoppingListPage|CartNote|CartsRestApi|Comment|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteOrFail()
    {
        if ($this->idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->idQuote;
    }

    /**
     * @module CartNoteWidget|CartPage|MultiCartPage|MultiCartWidget|QuoteApprovalWidget|SharedCartWidget|ShoppingListPage|CartNote|CartsRestApi|Comment|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuote()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE);

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|PaymentPage|PersistentCartSharePage|PriceWidget|ProductBundleWidget|QuoteRequestAgentPage|QuoteRequestPage|SalesConfigurableBundleWidget|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|ProductRelationStorage|ProductRelation|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|ShoppingList|TaxProductConnector|Tax
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
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|PaymentPage|PersistentCartSharePage|PriceWidget|ProductBundleWidget|QuoteRequestAgentPage|QuoteRequestPage|SalesConfigurableBundleWidget|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|ProductRelationStorage|ProductRelation|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|ShoppingList|TaxProductConnector|Tax
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|PaymentPage|PersistentCartSharePage|PriceWidget|ProductBundleWidget|QuoteRequestAgentPage|QuoteRequestPage|SalesConfigurableBundleWidget|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|ProductRelationStorage|ProductRelation|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|ShoppingList|TaxProductConnector|Tax
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
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|PaymentPage|PersistentCartSharePage|PriceWidget|ProductBundleWidget|QuoteRequestAgentPage|QuoteRequestPage|SalesConfigurableBundleWidget|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductPackagingUnit|ProductQuantity|ProductRelationStorage|ProductRelation|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|ShoppingList|TaxProductConnector|Tax
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
     * @module CartPage|QuoteApprovalWidget|QuoteApprovalShipmentConnector|QuoteApproval
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\QuoteApprovalTransfer[] $quoteApprovals
     *
     * @return $this
     */
    public function setQuoteApprovals(ArrayObject $quoteApprovals)
    {
        $this->quoteApprovals = $quoteApprovals;
        $this->modifiedProperties[self::QUOTE_APPROVALS] = true;

        return $this;
    }

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApprovalShipmentConnector|QuoteApproval
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\QuoteApprovalTransfer[]
     */
    public function getQuoteApprovals()
    {
        return $this->quoteApprovals;
    }

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApprovalShipmentConnector|QuoteApproval
     *
     * @param \Generated\Shared\Transfer\QuoteApprovalTransfer $quoteApproval
     *
     * @return $this
     */
    public function addQuoteApproval(QuoteApprovalTransfer $quoteApproval)
    {
        $this->quoteApprovals[] = $quoteApproval;
        $this->modifiedProperties[self::QUOTE_APPROVALS] = true;

        return $this;
    }

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApprovalShipmentConnector|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteApprovals()
    {
        $this->assertCollectionPropertyIsSet(self::QUOTE_APPROVALS);

        return $this;
    }

    /**
     * @module CartPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $quoteRequestVersionReference
     *
     * @return $this
     */
    public function setQuoteRequestVersionReference($quoteRequestVersionReference)
    {
        $this->quoteRequestVersionReference = $quoteRequestVersionReference;
        $this->modifiedProperties[self::QUOTE_REQUEST_VERSION_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CartPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @return string|null
     */
    public function getQuoteRequestVersionReference()
    {
        return $this->quoteRequestVersionReference;
    }

    /**
     * @module CartPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $quoteRequestVersionReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestVersionReferenceOrFail($quoteRequestVersionReference)
    {
        if ($quoteRequestVersionReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_VERSION_REFERENCE);
        }

        return $this->setQuoteRequestVersionReference($quoteRequestVersionReference);
    }

    /**
     * @module CartPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteRequestVersionReferenceOrFail()
    {
        if ($this->quoteRequestVersionReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_VERSION_REFERENCE);
        }

        return $this->quoteRequestVersionReference;
    }

    /**
     * @module CartPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestVersionReference()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST_VERSION_REFERENCE);

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|CommentSalesConnector|Comment
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
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|CommentSalesConnector|Comment
     *
     * @return \Generated\Shared\Transfer\CommentThreadTransfer|null
     */
    public function getCommentThread()
    {
        return $this->commentThread;
    }

    /**
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|CommentSalesConnector|Comment
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
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|CommentSalesConnector|Comment
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
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|CommentSalesConnector|Comment
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
     * @module CartPage|CheckoutPage|CustomerPage|MultiCartPage|SharedCartPage|SharedCartWidget|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanySalesConnector|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|OrderCustomReference|Payment|PersistentCart|PriceProductMerchantRelationship|ProductCustomerPermission|ProductList|QuoteApproval|QuoteRequest|Quote|Sales|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|CustomerPage|MultiCartPage|SharedCartPage|SharedCartWidget|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanySalesConnector|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|OrderCustomReference|Payment|PersistentCart|PriceProductMerchantRelationship|ProductCustomerPermission|ProductList|QuoteApproval|QuoteRequest|Quote|Sales|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage|MultiCartPage|SharedCartPage|SharedCartWidget|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanySalesConnector|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|OrderCustomReference|Payment|PersistentCart|PriceProductMerchantRelationship|ProductCustomerPermission|ProductList|QuoteApproval|QuoteRequest|Quote|Sales|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|CustomerPage|MultiCartPage|SharedCartPage|SharedCartWidget|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanySalesConnector|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|OrderCustomReference|Payment|PersistentCart|PriceProductMerchantRelationship|ProductCustomerPermission|ProductList|QuoteApproval|QuoteRequest|Quote|Sales|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|CustomerPage|MultiCartPage|SharedCartPage|SharedCartWidget|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanySalesConnector|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|OrderCustomReference|Payment|PersistentCart|PriceProductMerchantRelationship|ProductCustomerPermission|ProductList|QuoteApproval|QuoteRequest|Quote|Sales|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Cart|CartsRestApi|Checkout|Discount|MultiCart|Nopayment|ProductOption|QuoteApproval|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Cart|CartsRestApi|Checkout|Discount|MultiCart|Nopayment|ProductOption|QuoteApproval|Quote|SalesOrderThreshold|Sales|Tax
     *
     * @return \Generated\Shared\Transfer\TotalsTransfer|null
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Cart|CartsRestApi|Checkout|Discount|MultiCart|Nopayment|ProductOption|QuoteApproval|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Cart|CartsRestApi|Checkout|Discount|MultiCart|Nopayment|ProductOption|QuoteApproval|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Cart|CartsRestApi|Checkout|Discount|MultiCart|Nopayment|ProductOption|QuoteApproval|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|MultiCart|PriceCartConnector|Price|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|QuoteApprovalShipmentConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|MultiCart|PriceCartConnector|Price|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|QuoteApprovalShipmentConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|MultiCart|PriceCartConnector|Price|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|QuoteApprovalShipmentConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|MultiCart|PriceCartConnector|Price|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|QuoteApprovalShipmentConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment
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
     * @module CartPage|CheckoutPage|QuoteRequestAgentPage|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|MultiCart|PriceCartConnector|Price|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|ProductPackagingUnit|QuoteApprovalShipmentConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @param bool|null $billingSameAsShipping
     *
     * @return $this
     */
    public function setBillingSameAsShipping($billingSameAsShipping)
    {
        $this->billingSameAsShipping = $billingSameAsShipping;
        $this->modifiedProperties[self::BILLING_SAME_AS_SHIPPING] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @return bool|null
     */
    public function getBillingSameAsShipping()
    {
        return $this->billingSameAsShipping;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @param bool|null $billingSameAsShipping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingSameAsShippingOrFail($billingSameAsShipping)
    {
        if ($billingSameAsShipping === null) {
            $this->throwNullValueException(static::BILLING_SAME_AS_SHIPPING);
        }

        return $this->setBillingSameAsShipping($billingSameAsShipping);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getBillingSameAsShippingOrFail()
    {
        if ($this->billingSameAsShipping === null) {
            $this->throwNullValueException(static::BILLING_SAME_AS_SHIPPING);
        }

        return $this->billingSameAsShipping;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingSameAsShipping()
    {
        $this->assertPropertyIsSet(self::BILLING_SAME_AS_SHIPPING);

        return $this;
    }

    /**
     * @module CheckoutPage|DummyPayment|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @deprecated Use payments property instead.
     *
     * @param \Generated\Shared\Transfer\PaymentTransfer|null $payment
     *
     * @return $this
     */
    public function setPayment(PaymentTransfer $payment = null)
    {
        $this->payment = $payment;
        $this->modifiedProperties[self::PAYMENT] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|DummyPayment|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @deprecated Use payments property instead.
     *
     * @return \Generated\Shared\Transfer\PaymentTransfer|null
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @module CheckoutPage|DummyPayment|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @deprecated Use payments property instead.
     *
     * @param \Generated\Shared\Transfer\PaymentTransfer $payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentOrFail(PaymentTransfer $payment)
    {
        return $this->setPayment($payment);
    }

    /**
     * @module CheckoutPage|DummyPayment|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use payments property instead.
     *
     * @return \Generated\Shared\Transfer\PaymentTransfer
     */
    public function getPaymentOrFail()
    {
        if ($this->payment === null) {
            $this->throwNullValueException(static::PAYMENT);
        }

        return $this->payment;
    }

    /**
     * @module CheckoutPage|DummyPayment|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use payments property instead.
     *
     * @return $this
     */
    public function requirePayment()
    {
        $this->assertPropertyIsSet(self::PAYMENT);

        return $this;
    }

    /**
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
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
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PaymentTransfer[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
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
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
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
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
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
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
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
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
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
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|ShoppingList
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|ShoppingList
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getBundleItems()
    {
        return $this->bundleItems;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|ShoppingList
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|ShoppingList
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
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|Calculation|Cart|Checkout|Discount|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
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
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|Calculation|Cart|Checkout|Discount|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|Calculation|Cart|Checkout|Discount|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
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
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|Calculation|Cart|Checkout|Discount|QuoteApprovalShipmentConnector|QuoteRequest|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
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
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @param bool|null $isAddressSavingSkipped
     *
     * @return $this
     */
    public function setIsAddressSavingSkipped($isAddressSavingSkipped)
    {
        $this->isAddressSavingSkipped = $isAddressSavingSkipped;
        $this->modifiedProperties[self::IS_ADDRESS_SAVING_SKIPPED] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @return bool|null
     */
    public function getIsAddressSavingSkipped()
    {
        return $this->isAddressSavingSkipped;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @param bool|null $isAddressSavingSkipped
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAddressSavingSkippedOrFail($isAddressSavingSkipped)
    {
        if ($isAddressSavingSkipped === null) {
            $this->throwNullValueException(static::IS_ADDRESS_SAVING_SKIPPED);
        }

        return $this->setIsAddressSavingSkipped($isAddressSavingSkipped);
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @return bool
     */
    public function getIsAddressSavingSkippedOrFail()
    {
        if ($this->isAddressSavingSkipped === null) {
            $this->throwNullValueException(static::IS_ADDRESS_SAVING_SKIPPED);
        }

        return $this->isAddressSavingSkipped;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @return $this
     */
    public function requireIsAddressSavingSkipped()
    {
        $this->assertPropertyIsSet(self::IS_ADDRESS_SAVING_SKIPPED);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|ProductOption|QuoteApprovalShipmentConnector|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|ProductOption|QuoteApprovalShipmentConnector|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|ProductOption|QuoteApprovalShipmentConnector|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|ProductOption|QuoteApprovalShipmentConnector|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|ProductOption|QuoteApprovalShipmentConnector|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
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
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
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
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
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
     * @module CheckoutPage|QuoteRequestAgentPage|QuoteRequestPage|CheckoutRestApi|QuoteApprovalShipmentConnector|QuoteApproval|QuoteRequest|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
     *
     * @return $this
     */
    public function requireShipment()
    {
        $this->assertPropertyIsSet(self::SHIPMENT);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales
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
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales
     *
     * @return \Generated\Shared\Transfer\AddressTransfer|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales
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
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales
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
     * @module CheckoutPage|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales
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
     * @module CheckoutPage
     *
     * @param bool|null $checkoutConfirmed
     *
     * @return $this
     */
    public function setCheckoutConfirmed($checkoutConfirmed)
    {
        $this->checkoutConfirmed = $checkoutConfirmed;
        $this->modifiedProperties[self::CHECKOUT_CONFIRMED] = true;

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @return bool|null
     */
    public function getCheckoutConfirmed()
    {
        return $this->checkoutConfirmed;
    }

    /**
     * @module CheckoutPage
     *
     * @param bool|null $checkoutConfirmed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCheckoutConfirmedOrFail($checkoutConfirmed)
    {
        if ($checkoutConfirmed === null) {
            $this->throwNullValueException(static::CHECKOUT_CONFIRMED);
        }

        return $this->setCheckoutConfirmed($checkoutConfirmed);
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getCheckoutConfirmedOrFail()
    {
        if ($this->checkoutConfirmed === null) {
            $this->throwNullValueException(static::CHECKOUT_CONFIRMED);
        }

        return $this->checkoutConfirmed;
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCheckoutConfirmed()
    {
        $this->assertPropertyIsSet(self::CHECKOUT_CONFIRMED);

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @param bool|null $acceptTermsAndConditions
     *
     * @return $this
     */
    public function setAcceptTermsAndConditions($acceptTermsAndConditions)
    {
        $this->acceptTermsAndConditions = $acceptTermsAndConditions;
        $this->modifiedProperties[self::ACCEPT_TERMS_AND_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @return bool|null
     */
    public function getAcceptTermsAndConditions()
    {
        return $this->acceptTermsAndConditions;
    }

    /**
     * @module CheckoutPage
     *
     * @param bool|null $acceptTermsAndConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAcceptTermsAndConditionsOrFail($acceptTermsAndConditions)
    {
        if ($acceptTermsAndConditions === null) {
            $this->throwNullValueException(static::ACCEPT_TERMS_AND_CONDITIONS);
        }

        return $this->setAcceptTermsAndConditions($acceptTermsAndConditions);
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAcceptTermsAndConditionsOrFail()
    {
        if ($this->acceptTermsAndConditions === null) {
            $this->throwNullValueException(static::ACCEPT_TERMS_AND_CONDITIONS);
        }

        return $this->acceptTermsAndConditions;
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAcceptTermsAndConditions()
    {
        $this->assertPropertyIsSet(self::ACCEPT_TERMS_AND_CONDITIONS);

        return $this;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @param bool|null $isOrderPlacedSuccessfully
     *
     * @return $this
     */
    public function setIsOrderPlacedSuccessfully($isOrderPlacedSuccessfully)
    {
        $this->isOrderPlacedSuccessfully = $isOrderPlacedSuccessfully;
        $this->modifiedProperties[self::IS_ORDER_PLACED_SUCCESSFULLY] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @return bool|null
     */
    public function getIsOrderPlacedSuccessfully()
    {
        return $this->isOrderPlacedSuccessfully;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @param bool|null $isOrderPlacedSuccessfully
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsOrderPlacedSuccessfullyOrFail($isOrderPlacedSuccessfully)
    {
        if ($isOrderPlacedSuccessfully === null) {
            $this->throwNullValueException(static::IS_ORDER_PLACED_SUCCESSFULLY);
        }

        return $this->setIsOrderPlacedSuccessfully($isOrderPlacedSuccessfully);
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOrderPlacedSuccessfullyOrFail()
    {
        if ($this->isOrderPlacedSuccessfully === null) {
            $this->throwNullValueException(static::IS_ORDER_PLACED_SUCCESSFULLY);
        }

        return $this->isOrderPlacedSuccessfully;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOrderPlacedSuccessfully()
    {
        $this->assertPropertyIsSet(self::IS_ORDER_PLACED_SUCCESSFULLY);

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PromotionItemTransfer[] $promotionItems
     *
     * @return $this
     */
    public function setPromotionItems(ArrayObject $promotionItems)
    {
        $this->promotionItems = $promotionItems;
        $this->modifiedProperties[self::PROMOTION_ITEMS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PromotionItemTransfer[]
     */
    public function getPromotionItems()
    {
        return $this->promotionItems;
    }

    /**
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param \Generated\Shared\Transfer\PromotionItemTransfer $promotionItem
     *
     * @return $this
     */
    public function addPromotionItem(PromotionItemTransfer $promotionItem)
    {
        $this->promotionItems[] = $promotionItem;
        $this->modifiedProperties[self::PROMOTION_ITEMS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePromotionItems()
    {
        $this->assertCollectionPropertyIsSet(self::PROMOTION_ITEMS);

        return $this;
    }

    /**
     * @module DiscountWidget|MultiCartWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|Cart|Quote
     *
     * @param bool|null $isLocked
     *
     * @return $this
     */
    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;
        $this->modifiedProperties[self::IS_LOCKED] = true;

        return $this;
    }

    /**
     * @module DiscountWidget|MultiCartWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|Cart|Quote
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->isLocked;
    }

    /**
     * @module DiscountWidget|MultiCartWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|Cart|Quote
     *
     * @param bool|null $isLocked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsLockedOrFail($isLocked)
    {
        if ($isLocked === null) {
            $this->throwNullValueException(static::IS_LOCKED);
        }

        return $this->setIsLocked($isLocked);
    }

    /**
     * @module DiscountWidget|MultiCartWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|Cart|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsLockedOrFail()
    {
        if ($this->isLocked === null) {
            $this->throwNullValueException(static::IS_LOCKED);
        }

        return $this->isLocked;
    }

    /**
     * @module DiscountWidget|MultiCartWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|Cart|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsLocked()
    {
        $this->assertPropertyIsSet(self::IS_LOCKED);

        return $this;
    }

    /**
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|Discount
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
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|Discount
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    public function getVoucherDiscounts()
    {
        return $this->voucherDiscounts;
    }

    /**
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|Discount
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
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|Discount
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
     * @module DiscountWidget|DiscountPromotion|Discount
     *
     * @param array|null $usedNotAppliedVoucherCodes
     *
     * @return $this
     */
    public function setUsedNotAppliedVoucherCodes(array $usedNotAppliedVoucherCodes = null)
    {
        if ($usedNotAppliedVoucherCodes === null) {
            $usedNotAppliedVoucherCodes = [];
        }

        $this->usedNotAppliedVoucherCodes = $usedNotAppliedVoucherCodes;
        $this->modifiedProperties[self::USED_NOT_APPLIED_VOUCHER_CODES] = true;

        return $this;
    }

    /**
     * @module DiscountWidget|DiscountPromotion|Discount
     *
     * @return array
     */
    public function getUsedNotAppliedVoucherCodes()
    {
        return $this->usedNotAppliedVoucherCodes;
    }

    /**
     * @module DiscountWidget|DiscountPromotion|Discount
     *
     * @param mixed $usedNotAppliedVoucherCode
     *
     * @return $this
     */
    public function addUsedNotAppliedVoucherCode($usedNotAppliedVoucherCode)
    {
        $this->usedNotAppliedVoucherCodes[] = $usedNotAppliedVoucherCode;
        $this->modifiedProperties[self::USED_NOT_APPLIED_VOUCHER_CODES] = true;

        return $this;
    }

    /**
     * @module DiscountWidget|DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsedNotAppliedVoucherCodes()
    {
        $this->assertPropertyIsSet(self::USED_NOT_APPLIED_VOUCHER_CODES);

        return $this;
    }

    /**
     * @module MultiCartPage|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartWidget|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module MultiCartPage|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartWidget|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module MultiCartPage|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartWidget|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module MultiCartPage|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartWidget|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module MultiCartPage|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartWidget|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module MultiCartPage|ShoppingListPage|CartsRestApi|MultiCart|QuoteRequestAgent|QuoteRequest|SharedCart
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
     * @module MultiCartPage|ShoppingListPage|CartsRestApi|MultiCart|QuoteRequestAgent|QuoteRequest|SharedCart
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module MultiCartPage|ShoppingListPage|CartsRestApi|MultiCart|QuoteRequestAgent|QuoteRequest|SharedCart
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
     * @module MultiCartPage|ShoppingListPage|CartsRestApi|MultiCart|QuoteRequestAgent|QuoteRequest|SharedCart
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
     * @module MultiCartPage|ShoppingListPage|CartsRestApi|MultiCart|QuoteRequestAgent|QuoteRequest|SharedCart
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
     * @module MultiCartPage|SharedCartPage|SharedCart
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[] $shareDetails
     *
     * @return $this
     */
    public function setShareDetails(ArrayObject $shareDetails)
    {
        $this->shareDetails = $shareDetails;
        $this->modifiedProperties[self::SHARE_DETAILS] = true;

        return $this;
    }

    /**
     * @module MultiCartPage|SharedCartPage|SharedCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[]
     */
    public function getShareDetails()
    {
        return $this->shareDetails;
    }

    /**
     * @module MultiCartPage|SharedCartPage|SharedCart
     *
     * @param \Generated\Shared\Transfer\ShareDetailTransfer $shareDetail
     *
     * @return $this
     */
    public function addShareDetail(ShareDetailTransfer $shareDetail)
    {
        $this->shareDetails[] = $shareDetail;
        $this->modifiedProperties[self::SHARE_DETAILS] = true;

        return $this;
    }

    /**
     * @module MultiCartPage|SharedCartPage|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShareDetails()
    {
        $this->assertCollectionPropertyIsSet(self::SHARE_DETAILS);

        return $this;
    }

    /**
     * @module MultiCartPage|MultiCartWidget|SharedCartWidget|MultiCart|SharedCart
     *
     * @param bool|null $isDefault
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        $this->modifiedProperties[self::IS_DEFAULT] = true;

        return $this;
    }

    /**
     * @module MultiCartPage|MultiCartWidget|SharedCartWidget|MultiCart|SharedCart
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module MultiCartPage|MultiCartWidget|SharedCartWidget|MultiCart|SharedCart
     *
     * @param bool|null $isDefault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultOrFail($isDefault)
    {
        if ($isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->setIsDefault($isDefault);
    }

    /**
     * @module MultiCartPage|MultiCartWidget|SharedCartWidget|MultiCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDefaultOrFail()
    {
        if ($this->isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->isDefault;
    }

    /**
     * @module MultiCartPage|MultiCartWidget|SharedCartWidget|MultiCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefault()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT);

        return $this;
    }

    /**
     * @module OrderCustomReferenceWidget|OrderCustomReference
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
     * @module OrderCustomReferenceWidget|OrderCustomReference
     *
     * @return string|null
     */
    public function getOrderCustomReference()
    {
        return $this->orderCustomReference;
    }

    /**
     * @module OrderCustomReferenceWidget|OrderCustomReference
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
     * @module OrderCustomReferenceWidget|OrderCustomReference
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
     * @module OrderCustomReferenceWidget|OrderCustomReference
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
     * @module QuoteApprovalWidget|ShoppingListPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|QuoteApproval|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module QuoteApprovalWidget|ShoppingListPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|QuoteApproval|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module QuoteApprovalWidget|ShoppingListPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|QuoteApproval|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module QuoteApprovalWidget|ShoppingListPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|QuoteApproval|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module QuoteApprovalWidget|ShoppingListPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThreshold|MultiCart|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|QuoteApproval|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $quoteRequestReference
     *
     * @return $this
     */
    public function setQuoteRequestReference($quoteRequestReference)
    {
        $this->quoteRequestReference = $quoteRequestReference;
        $this->modifiedProperties[self::QUOTE_REQUEST_REFERENCE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @return string|null
     */
    public function getQuoteRequestReference()
    {
        return $this->quoteRequestReference;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $quoteRequestReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestReferenceOrFail($quoteRequestReference)
    {
        if ($quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->setQuoteRequestReference($quoteRequestReference);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteRequestReferenceOrFail()
    {
        if ($this->quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->quoteRequestReference;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestReference()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST_REFERENCE);

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductPackagingUnit|ProductRelationStorage|QuoteApproval|Quote|SalesOrderThreshold|Sales|Shipment|Store
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductPackagingUnit|ProductRelationStorage|QuoteApproval|Quote|SalesOrderThreshold|Sales|Shipment|Store
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductPackagingUnit|ProductRelationStorage|QuoteApproval|Quote|SalesOrderThreshold|Sales|Shipment|Store
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductPackagingUnit|ProductRelationStorage|QuoteApproval|Quote|SalesOrderThreshold|Sales|Shipment|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|MultiCart|Payment|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductPackagingUnit|ProductRelationStorage|QuoteApproval|Quote|SalesOrderThreshold|Sales|Shipment|Store
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|ProductBundleCartsRestApi|Quote|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|ProductBundleCartsRestApi|Quote|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|ProductBundleCartsRestApi|Quote|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|ProductBundleCartsRestApi|Quote|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|ProductBundleCartsRestApi|Quote|SharedCartsRestApi|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|Discount
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[] $cartRuleDiscounts
     *
     * @return $this
     */
    public function setCartRuleDiscounts(ArrayObject $cartRuleDiscounts)
    {
        $this->cartRuleDiscounts = $cartRuleDiscounts;
        $this->modifiedProperties[self::CART_RULE_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|Discount
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    public function getCartRuleDiscounts()
    {
        return $this->cartRuleDiscounts;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer $cartRuleDiscount
     *
     * @return $this
     */
    public function addCartRuleDiscount(DiscountTransfer $cartRuleDiscount)
    {
        $this->cartRuleDiscounts[] = $cartRuleDiscount;
        $this->modifiedProperties[self::CART_RULE_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartRuleDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::CART_RULE_DISCOUNTS);

        return $this;
    }

    /**
     * @module CartNote
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
     * @module CartNote
     *
     * @return string|null
     */
    public function getCartNote()
    {
        return $this->cartNote;
    }

    /**
     * @module CartNote
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
     * @module CartNote
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
     * @module CartNote
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
     * @module CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @param \Generated\Shared\Transfer\QuotePermissionGroupTransfer|null $quotePermissionGroup
     *
     * @return $this
     */
    public function setQuotePermissionGroup(QuotePermissionGroupTransfer $quotePermissionGroup = null)
    {
        $this->quotePermissionGroup = $quotePermissionGroup;
        $this->modifiedProperties[self::QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @return \Generated\Shared\Transfer\QuotePermissionGroupTransfer|null
     */
    public function getQuotePermissionGroup()
    {
        return $this->quotePermissionGroup;
    }

    /**
     * @module CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @param \Generated\Shared\Transfer\QuotePermissionGroupTransfer $quotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuotePermissionGroupOrFail(QuotePermissionGroupTransfer $quotePermissionGroup)
    {
        return $this->setQuotePermissionGroup($quotePermissionGroup);
    }

    /**
     * @module CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuotePermissionGroupTransfer
     */
    public function getQuotePermissionGroupOrFail()
    {
        if ($this->quotePermissionGroup === null) {
            $this->throwNullValueException(static::QUOTE_PERMISSION_GROUP);
        }

        return $this->quotePermissionGroup;
    }

    /**
     * @module CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::QUOTE_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module CartsRestApi|QuoteRequest
     *
     * @param int|null $companyUserId
     *
     * @return $this
     */
    public function setCompanyUserId($companyUserId)
    {
        $this->companyUserId = $companyUserId;
        $this->modifiedProperties[self::COMPANY_USER_ID] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|QuoteRequest
     *
     * @return int|null
     */
    public function getCompanyUserId()
    {
        return $this->companyUserId;
    }

    /**
     * @module CartsRestApi|QuoteRequest
     *
     * @param int|null $companyUserId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserIdOrFail($companyUserId)
    {
        if ($companyUserId === null) {
            $this->throwNullValueException(static::COMPANY_USER_ID);
        }

        return $this->setCompanyUserId($companyUserId);
    }

    /**
     * @module CartsRestApi|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCompanyUserIdOrFail()
    {
        if ($this->companyUserId === null) {
            $this->throwNullValueException(static::COMPANY_USER_ID);
        }

        return $this->companyUserId;
    }

    /**
     * @module CartsRestApi|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserId()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_ID);

        return $this;
    }

    /**
     * @module MultiCartDataImport
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module MultiCartDataImport
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module MultiCartDataImport
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module MultiCartDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module MultiCartDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SalesOrderThresholdValueTransfer[] $salesOrderThresholdValues
     *
     * @return $this
     */
    public function setSalesOrderThresholdValues(ArrayObject $salesOrderThresholdValues)
    {
        $this->salesOrderThresholdValues = $salesOrderThresholdValues;
        $this->modifiedProperties[self::SALES_ORDER_THRESHOLD_VALUES] = true;

        return $this;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SalesOrderThresholdValueTransfer[]
     */
    public function getSalesOrderThresholdValues()
    {
        return $this->salesOrderThresholdValues;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer $salesOrderThresholdValue
     *
     * @return $this
     */
    public function addSalesOrderThresholdValue(SalesOrderThresholdValueTransfer $salesOrderThresholdValue)
    {
        $this->salesOrderThresholdValues[] = $salesOrderThresholdValue;
        $this->modifiedProperties[self::SALES_ORDER_THRESHOLD_VALUES] = true;

        return $this;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderThresholdValues()
    {
        $this->assertCollectionPropertyIsSet(self::SALES_ORDER_THRESHOLD_VALUES);

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
                case 'idQuote':
                case 'quoteRequestVersionReference':
                case 'priceMode':
                case 'billingSameAsShipping':
                case 'orderReference':
                case 'isAddressSavingSkipped':
                case 'checkoutConfirmed':
                case 'acceptTermsAndConditions':
                case 'isOrderPlacedSuccessfully':
                case 'isLocked':
                case 'usedNotAppliedVoucherCodes':
                case 'customerReference':
                case 'name':
                case 'isDefault':
                case 'orderCustomReference':
                case 'quoteRequestReference':
                case 'uuid':
                case 'cartNote':
                case 'companyUserId':
                case 'key':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'commentThread':
                case 'customer':
                case 'totals':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'billingAddress':
                case 'currency':
                case 'store':
                case 'quotePermissionGroup':
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
                case 'quoteApprovals':
                case 'payments':
                case 'bundleItems':
                case 'expenses':
                case 'promotionItems':
                case 'voucherDiscounts':
                case 'shareDetails':
                case 'cartRuleDiscounts':
                case 'salesOrderThresholdValues':
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
                case 'idQuote':
                case 'quoteRequestVersionReference':
                case 'priceMode':
                case 'billingSameAsShipping':
                case 'orderReference':
                case 'isAddressSavingSkipped':
                case 'checkoutConfirmed':
                case 'acceptTermsAndConditions':
                case 'isOrderPlacedSuccessfully':
                case 'isLocked':
                case 'usedNotAppliedVoucherCodes':
                case 'customerReference':
                case 'name':
                case 'isDefault':
                case 'orderCustomReference':
                case 'quoteRequestReference':
                case 'uuid':
                case 'cartNote':
                case 'companyUserId':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'commentThread':
                case 'customer':
                case 'totals':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'billingAddress':
                case 'currency':
                case 'store':
                case 'quotePermissionGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
                case 'quoteApprovals':
                case 'payments':
                case 'bundleItems':
                case 'expenses':
                case 'promotionItems':
                case 'voucherDiscounts':
                case 'shareDetails':
                case 'cartRuleDiscounts':
                case 'salesOrderThresholdValues':
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
                case 'idQuote':
                case 'quoteRequestVersionReference':
                case 'priceMode':
                case 'billingSameAsShipping':
                case 'orderReference':
                case 'isAddressSavingSkipped':
                case 'checkoutConfirmed':
                case 'acceptTermsAndConditions':
                case 'isOrderPlacedSuccessfully':
                case 'isLocked':
                case 'usedNotAppliedVoucherCodes':
                case 'customerReference':
                case 'name':
                case 'isDefault':
                case 'orderCustomReference':
                case 'quoteRequestReference':
                case 'uuid':
                case 'cartNote':
                case 'companyUserId':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'commentThread':
                case 'customer':
                case 'totals':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'billingAddress':
                case 'currency':
                case 'store':
                case 'quotePermissionGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
                case 'quoteApprovals':
                case 'payments':
                case 'bundleItems':
                case 'expenses':
                case 'promotionItems':
                case 'voucherDiscounts':
                case 'shareDetails':
                case 'cartRuleDiscounts':
                case 'salesOrderThresholdValues':
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
        $this->quoteApprovals = $this->quoteApprovals ?: new ArrayObject();
        $this->payments = $this->payments ?: new ArrayObject();
        $this->bundleItems = $this->bundleItems ?: new ArrayObject();
        $this->expenses = $this->expenses ?: new ArrayObject();
        $this->promotionItems = $this->promotionItems ?: new ArrayObject();
        $this->voucherDiscounts = $this->voucherDiscounts ?: new ArrayObject();
        $this->shareDetails = $this->shareDetails ?: new ArrayObject();
        $this->cartRuleDiscounts = $this->cartRuleDiscounts ?: new ArrayObject();
        $this->salesOrderThresholdValues = $this->salesOrderThresholdValues ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote,
            'quoteRequestVersionReference' => $this->quoteRequestVersionReference,
            'priceMode' => $this->priceMode,
            'billingSameAsShipping' => $this->billingSameAsShipping,
            'orderReference' => $this->orderReference,
            'isAddressSavingSkipped' => $this->isAddressSavingSkipped,
            'checkoutConfirmed' => $this->checkoutConfirmed,
            'acceptTermsAndConditions' => $this->acceptTermsAndConditions,
            'isOrderPlacedSuccessfully' => $this->isOrderPlacedSuccessfully,
            'isLocked' => $this->isLocked,
            'usedNotAppliedVoucherCodes' => $this->usedNotAppliedVoucherCodes,
            'customerReference' => $this->customerReference,
            'name' => $this->name,
            'isDefault' => $this->isDefault,
            'orderCustomReference' => $this->orderCustomReference,
            'quoteRequestReference' => $this->quoteRequestReference,
            'uuid' => $this->uuid,
            'cartNote' => $this->cartNote,
            'companyUserId' => $this->companyUserId,
            'key' => $this->key,
            'commentThread' => $this->commentThread,
            'customer' => $this->customer,
            'totals' => $this->totals,
            'payment' => $this->payment,
            'shippingAddress' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'billingAddress' => $this->billingAddress,
            'currency' => $this->currency,
            'store' => $this->store,
            'quotePermissionGroup' => $this->quotePermissionGroup,
            'items' => $this->items,
            'quoteApprovals' => $this->quoteApprovals,
            'payments' => $this->payments,
            'bundleItems' => $this->bundleItems,
            'expenses' => $this->expenses,
            'promotionItems' => $this->promotionItems,
            'voucherDiscounts' => $this->voucherDiscounts,
            'shareDetails' => $this->shareDetails,
            'cartRuleDiscounts' => $this->cartRuleDiscounts,
            'salesOrderThresholdValues' => $this->salesOrderThresholdValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote,
            'quote_request_version_reference' => $this->quoteRequestVersionReference,
            'price_mode' => $this->priceMode,
            'billing_same_as_shipping' => $this->billingSameAsShipping,
            'order_reference' => $this->orderReference,
            'is_address_saving_skipped' => $this->isAddressSavingSkipped,
            'checkout_confirmed' => $this->checkoutConfirmed,
            'accept_terms_and_conditions' => $this->acceptTermsAndConditions,
            'is_order_placed_successfully' => $this->isOrderPlacedSuccessfully,
            'is_locked' => $this->isLocked,
            'used_not_applied_voucher_codes' => $this->usedNotAppliedVoucherCodes,
            'customer_reference' => $this->customerReference,
            'name' => $this->name,
            'is_default' => $this->isDefault,
            'order_custom_reference' => $this->orderCustomReference,
            'quote_request_reference' => $this->quoteRequestReference,
            'uuid' => $this->uuid,
            'cart_note' => $this->cartNote,
            'company_user_id' => $this->companyUserId,
            'key' => $this->key,
            'comment_thread' => $this->commentThread,
            'customer' => $this->customer,
            'totals' => $this->totals,
            'payment' => $this->payment,
            'shipping_address' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'billing_address' => $this->billingAddress,
            'currency' => $this->currency,
            'store' => $this->store,
            'quote_permission_group' => $this->quotePermissionGroup,
            'items' => $this->items,
            'quote_approvals' => $this->quoteApprovals,
            'payments' => $this->payments,
            'bundle_items' => $this->bundleItems,
            'expenses' => $this->expenses,
            'promotion_items' => $this->promotionItems,
            'voucher_discounts' => $this->voucherDiscounts,
            'share_details' => $this->shareDetails,
            'cart_rule_discounts' => $this->cartRuleDiscounts,
            'sales_order_threshold_values' => $this->salesOrderThresholdValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'quote_request_version_reference' => $this->quoteRequestVersionReference instanceof AbstractTransfer ? $this->quoteRequestVersionReference->toArray(true, false) : $this->quoteRequestVersionReference,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'billing_same_as_shipping' => $this->billingSameAsShipping instanceof AbstractTransfer ? $this->billingSameAsShipping->toArray(true, false) : $this->billingSameAsShipping,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'is_address_saving_skipped' => $this->isAddressSavingSkipped instanceof AbstractTransfer ? $this->isAddressSavingSkipped->toArray(true, false) : $this->isAddressSavingSkipped,
            'checkout_confirmed' => $this->checkoutConfirmed instanceof AbstractTransfer ? $this->checkoutConfirmed->toArray(true, false) : $this->checkoutConfirmed,
            'accept_terms_and_conditions' => $this->acceptTermsAndConditions instanceof AbstractTransfer ? $this->acceptTermsAndConditions->toArray(true, false) : $this->acceptTermsAndConditions,
            'is_order_placed_successfully' => $this->isOrderPlacedSuccessfully instanceof AbstractTransfer ? $this->isOrderPlacedSuccessfully->toArray(true, false) : $this->isOrderPlacedSuccessfully,
            'is_locked' => $this->isLocked instanceof AbstractTransfer ? $this->isLocked->toArray(true, false) : $this->isLocked,
            'used_not_applied_voucher_codes' => $this->usedNotAppliedVoucherCodes instanceof AbstractTransfer ? $this->usedNotAppliedVoucherCodes->toArray(true, false) : $this->usedNotAppliedVoucherCodes,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'order_custom_reference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, false) : $this->orderCustomReference,
            'quote_request_reference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, false) : $this->quoteRequestReference,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'cart_note' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, false) : $this->cartNote,
            'company_user_id' => $this->companyUserId instanceof AbstractTransfer ? $this->companyUserId->toArray(true, false) : $this->companyUserId,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'comment_thread' => $this->commentThread instanceof AbstractTransfer ? $this->commentThread->toArray(true, false) : $this->commentThread,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, false) : $this->totals,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, false) : $this->payment,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, false) : $this->shipment,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'quote_permission_group' => $this->quotePermissionGroup instanceof AbstractTransfer ? $this->quotePermissionGroup->toArray(true, false) : $this->quotePermissionGroup,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'quote_approvals' => $this->quoteApprovals instanceof AbstractTransfer ? $this->quoteApprovals->toArray(true, false) : $this->addValuesToCollection($this->quoteApprovals, true, false),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, false) : $this->addValuesToCollection($this->payments, true, false),
            'bundle_items' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, false) : $this->addValuesToCollection($this->bundleItems, true, false),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, false) : $this->addValuesToCollection($this->expenses, true, false),
            'promotion_items' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, false) : $this->addValuesToCollection($this->promotionItems, true, false),
            'voucher_discounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, false) : $this->addValuesToCollection($this->voucherDiscounts, true, false),
            'share_details' => $this->shareDetails instanceof AbstractTransfer ? $this->shareDetails->toArray(true, false) : $this->addValuesToCollection($this->shareDetails, true, false),
            'cart_rule_discounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, false) : $this->addValuesToCollection($this->cartRuleDiscounts, true, false),
            'sales_order_threshold_values' => $this->salesOrderThresholdValues instanceof AbstractTransfer ? $this->salesOrderThresholdValues->toArray(true, false) : $this->addValuesToCollection($this->salesOrderThresholdValues, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'quoteRequestVersionReference' => $this->quoteRequestVersionReference instanceof AbstractTransfer ? $this->quoteRequestVersionReference->toArray(true, true) : $this->quoteRequestVersionReference,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'billingSameAsShipping' => $this->billingSameAsShipping instanceof AbstractTransfer ? $this->billingSameAsShipping->toArray(true, true) : $this->billingSameAsShipping,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'isAddressSavingSkipped' => $this->isAddressSavingSkipped instanceof AbstractTransfer ? $this->isAddressSavingSkipped->toArray(true, true) : $this->isAddressSavingSkipped,
            'checkoutConfirmed' => $this->checkoutConfirmed instanceof AbstractTransfer ? $this->checkoutConfirmed->toArray(true, true) : $this->checkoutConfirmed,
            'acceptTermsAndConditions' => $this->acceptTermsAndConditions instanceof AbstractTransfer ? $this->acceptTermsAndConditions->toArray(true, true) : $this->acceptTermsAndConditions,
            'isOrderPlacedSuccessfully' => $this->isOrderPlacedSuccessfully instanceof AbstractTransfer ? $this->isOrderPlacedSuccessfully->toArray(true, true) : $this->isOrderPlacedSuccessfully,
            'isLocked' => $this->isLocked instanceof AbstractTransfer ? $this->isLocked->toArray(true, true) : $this->isLocked,
            'usedNotAppliedVoucherCodes' => $this->usedNotAppliedVoucherCodes instanceof AbstractTransfer ? $this->usedNotAppliedVoucherCodes->toArray(true, true) : $this->usedNotAppliedVoucherCodes,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'orderCustomReference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, true) : $this->orderCustomReference,
            'quoteRequestReference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, true) : $this->quoteRequestReference,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'cartNote' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, true) : $this->cartNote,
            'companyUserId' => $this->companyUserId instanceof AbstractTransfer ? $this->companyUserId->toArray(true, true) : $this->companyUserId,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'commentThread' => $this->commentThread instanceof AbstractTransfer ? $this->commentThread->toArray(true, true) : $this->commentThread,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, true) : $this->totals,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, true) : $this->payment,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, true) : $this->shipment,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'quotePermissionGroup' => $this->quotePermissionGroup instanceof AbstractTransfer ? $this->quotePermissionGroup->toArray(true, true) : $this->quotePermissionGroup,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'quoteApprovals' => $this->quoteApprovals instanceof AbstractTransfer ? $this->quoteApprovals->toArray(true, true) : $this->addValuesToCollection($this->quoteApprovals, true, true),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, true) : $this->addValuesToCollection($this->payments, true, true),
            'bundleItems' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, true) : $this->addValuesToCollection($this->bundleItems, true, true),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, true) : $this->addValuesToCollection($this->expenses, true, true),
            'promotionItems' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, true) : $this->addValuesToCollection($this->promotionItems, true, true),
            'voucherDiscounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, true) : $this->addValuesToCollection($this->voucherDiscounts, true, true),
            'shareDetails' => $this->shareDetails instanceof AbstractTransfer ? $this->shareDetails->toArray(true, true) : $this->addValuesToCollection($this->shareDetails, true, true),
            'cartRuleDiscounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, true) : $this->addValuesToCollection($this->cartRuleDiscounts, true, true),
            'salesOrderThresholdValues' => $this->salesOrderThresholdValues instanceof AbstractTransfer ? $this->salesOrderThresholdValues->toArray(true, true) : $this->addValuesToCollection($this->salesOrderThresholdValues, true, true),
        ];
    }
}
