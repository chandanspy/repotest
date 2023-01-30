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
class RestOrderDetailsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const TOTALS = 'totals';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const EXPENSES = 'expenses';

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
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const PAYMENTS = 'payments';

    /**
     * @var string
     */
    public const SHIPMENTS = 'shipments';

    /**
     * @var string
     */
    public const CALCULATED_DISCOUNTS = 'calculatedDiscounts';

    /**
     * @var string
     */
    public const BUNDLE_ITEMS = 'bundleItems';

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var \Generated\Shared\Transfer\RestOrderTotalsAttributesTransfer|null
     */
    protected $totals;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestOrderItemsAttributesTransfer[]
     */
    protected $items;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestOrderExpensesAttributesTransfer[]
     */
    protected $expenses;

    /**
     * @var \Generated\Shared\Transfer\RestOrderAddressTransfer|null
     */
    protected $billingAddress;

    /**
     * @var \Generated\Shared\Transfer\RestOrderAddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestOrderPaymentTransfer[]
     */
    protected $payments;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestOrderShipmentTransfer[]
     */
    protected $shipments;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCalculatedDiscountTransfer[]
     */
    protected $calculatedDiscounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestOrderItemsAttributesTransfer[]
     */
    protected $bundleItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'totals' => 'totals',
        'Totals' => 'totals',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'items' => 'items',
        'Items' => 'items',
        'expenses' => 'expenses',
        'Expenses' => 'expenses',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'payments' => 'payments',
        'Payments' => 'payments',
        'shipments' => 'shipments',
        'Shipments' => 'shipments',
        'calculated_discounts' => 'calculatedDiscounts',
        'calculatedDiscounts' => 'calculatedDiscounts',
        'CalculatedDiscounts' => 'calculatedDiscounts',
        'bundle_items' => 'bundleItems',
        'bundleItems' => 'bundleItems',
        'BundleItems' => 'bundleItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::TOTALS => [
            'type' => 'Generated\Shared\Transfer\RestOrderTotalsAttributesTransfer',
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
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\RestOrderItemsAttributesTransfer',
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
        self::EXPENSES => [
            'type' => 'Generated\Shared\Transfer\RestOrderExpensesAttributesTransfer',
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
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\RestOrderAddressTransfer',
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
            'type' => 'Generated\Shared\Transfer\RestOrderAddressTransfer',
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
        self::PAYMENTS => [
            'type' => 'Generated\Shared\Transfer\RestOrderPaymentTransfer',
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
        self::SHIPMENTS => [
            'type' => 'Generated\Shared\Transfer\RestOrderShipmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipments',
            'is_collection' => true,
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
        self::BUNDLE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\RestOrderItemsAttributesTransfer',
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
    ];

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderTotalsAttributesTransfer|null $totals
     *
     * @return $this
     */
    public function setTotals(RestOrderTotalsAttributesTransfer $totals = null)
    {
        $this->totals = $totals;
        $this->modifiedProperties[self::TOTALS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return \Generated\Shared\Transfer\RestOrderTotalsAttributesTransfer|null
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderTotalsAttributesTransfer $totals
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalsOrFail(RestOrderTotalsAttributesTransfer $totals)
    {
        return $this->setTotals($totals);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestOrderTotalsAttributesTransfer
     */
    public function getTotalsOrFail()
    {
        if ($this->totals === null) {
            $this->throwNullValueException(static::TOTALS);
        }

        return $this->totals;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestOrderItemsAttributesTransfer[] $items
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
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestOrderItemsAttributesTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderItemsAttributesTransfer $item
     *
     * @return $this
     */
    public function addItem(RestOrderItemsAttributesTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
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
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestOrderExpensesAttributesTransfer[] $expenses
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
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestOrderExpensesAttributesTransfer[]
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderExpensesAttributesTransfer $expense
     *
     * @return $this
     */
    public function addExpense(RestOrderExpensesAttributesTransfer $expense)
    {
        $this->expenses[] = $expense;
        $this->modifiedProperties[self::EXPENSES] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ShipmentsRestApi
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
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderAddressTransfer|null $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(RestOrderAddressTransfer $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return \Generated\Shared\Transfer\RestOrderAddressTransfer|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderAddressTransfer $billingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingAddressOrFail(RestOrderAddressTransfer $billingAddress)
    {
        return $this->setBillingAddress($billingAddress);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestOrderAddressTransfer
     */
    public function getBillingAddressOrFail()
    {
        if ($this->billingAddress === null) {
            $this->throwNullValueException(static::BILLING_ADDRESS);
        }

        return $this->billingAddress;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderAddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(RestOrderAddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return \Generated\Shared\Transfer\RestOrderAddressTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderAddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(RestOrderAddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestOrderAddressTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestOrderPaymentTransfer[] $payments
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
     * @module OrdersRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestOrderPaymentTransfer[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderPaymentTransfer $payment
     *
     * @return $this
     */
    public function addPayment(RestOrderPaymentTransfer $payment)
    {
        $this->payments[] = $payment;
        $this->modifiedProperties[self::PAYMENTS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestOrderShipmentTransfer[] $shipments
     *
     * @return $this
     */
    public function setShipments(ArrayObject $shipments)
    {
        $this->shipments = $shipments;
        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestOrderShipmentTransfer[]
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * @module OrdersRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderShipmentTransfer $shipment
     *
     * @return $this
     */
    public function addShipment(RestOrderShipmentTransfer $shipment)
    {
        $this->shipments[] = $shipment;
        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipments()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPMENTS);

        return $this;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCalculatedDiscountTransfer[]
     */
    public function getCalculatedDiscounts()
    {
        return $this->calculatedDiscounts;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module ProductBundlesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestOrderItemsAttributesTransfer[] $bundleItems
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
     * @module ProductBundlesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestOrderItemsAttributesTransfer[]
     */
    public function getBundleItems()
    {
        return $this->bundleItems;
    }

    /**
     * @module ProductBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderItemsAttributesTransfer $bundleItem
     *
     * @return $this
     */
    public function addBundleItem(RestOrderItemsAttributesTransfer $bundleItem)
    {
        $this->bundleItems[] = $bundleItem;
        $this->modifiedProperties[self::BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductBundlesRestApi
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
                case 'createdAt':
                case 'currencyIsoCode':
                case 'priceMode':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'totals':
                case 'billingAddress':
                case 'shippingAddress':
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
                case 'expenses':
                case 'payments':
                case 'shipments':
                case 'calculatedDiscounts':
                case 'bundleItems':
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
                case 'createdAt':
                case 'currencyIsoCode':
                case 'priceMode':
                    $values[$arrayKey] = $value;

                    break;
                case 'totals':
                case 'billingAddress':
                case 'shippingAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
                case 'expenses':
                case 'payments':
                case 'shipments':
                case 'calculatedDiscounts':
                case 'bundleItems':
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
                case 'createdAt':
                case 'currencyIsoCode':
                case 'priceMode':
                    $values[$arrayKey] = $value;

                    break;
                case 'totals':
                case 'billingAddress':
                case 'shippingAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
                case 'expenses':
                case 'payments':
                case 'shipments':
                case 'calculatedDiscounts':
                case 'bundleItems':
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
        $this->expenses = $this->expenses ?: new ArrayObject();
        $this->payments = $this->payments ?: new ArrayObject();
        $this->shipments = $this->shipments ?: new ArrayObject();
        $this->calculatedDiscounts = $this->calculatedDiscounts ?: new ArrayObject();
        $this->bundleItems = $this->bundleItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'createdAt' => $this->createdAt,
            'currencyIsoCode' => $this->currencyIsoCode,
            'priceMode' => $this->priceMode,
            'totals' => $this->totals,
            'billingAddress' => $this->billingAddress,
            'shippingAddress' => $this->shippingAddress,
            'items' => $this->items,
            'expenses' => $this->expenses,
            'payments' => $this->payments,
            'shipments' => $this->shipments,
            'calculatedDiscounts' => $this->calculatedDiscounts,
            'bundleItems' => $this->bundleItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'created_at' => $this->createdAt,
            'currency_iso_code' => $this->currencyIsoCode,
            'price_mode' => $this->priceMode,
            'totals' => $this->totals,
            'billing_address' => $this->billingAddress,
            'shipping_address' => $this->shippingAddress,
            'items' => $this->items,
            'expenses' => $this->expenses,
            'payments' => $this->payments,
            'shipments' => $this->shipments,
            'calculated_discounts' => $this->calculatedDiscounts,
            'bundle_items' => $this->bundleItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, false) : $this->totals,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, false) : $this->addValuesToCollection($this->expenses, true, false),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, false) : $this->addValuesToCollection($this->payments, true, false),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, false) : $this->addValuesToCollection($this->shipments, true, false),
            'calculated_discounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, false) : $this->addValuesToCollection($this->calculatedDiscounts, true, false),
            'bundle_items' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, false) : $this->addValuesToCollection($this->bundleItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, true) : $this->totals,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, true) : $this->addValuesToCollection($this->expenses, true, true),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, true) : $this->addValuesToCollection($this->payments, true, true),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, true) : $this->addValuesToCollection($this->shipments, true, true),
            'calculatedDiscounts' => $this->calculatedDiscounts instanceof AbstractTransfer ? $this->calculatedDiscounts->toArray(true, true) : $this->addValuesToCollection($this->calculatedDiscounts, true, true),
            'bundleItems' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, true) : $this->addValuesToCollection($this->bundleItems, true, true),
        ];
    }
}
