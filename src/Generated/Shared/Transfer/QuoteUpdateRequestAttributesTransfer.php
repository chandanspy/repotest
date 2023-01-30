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
class QuoteUpdateRequestAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const VOUCHER_DISCOUNTS = 'voucherDiscounts';

    /**
     * @var string
     */
    public const PROMOTION_ITEMS = 'promotionItems';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const CART_RULE_DISCOUNTS = 'cartRuleDiscounts';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TOTALS = 'totals';

    /**
     * @var string
     */
    public const EXPENSES = 'expenses';

    /**
     * @var string
     */
    public const ITEMS = 'items';

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
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const IS_LOCKED = 'isLocked';

    /**
     * @var string
     */
    public const SHARE_DETAILS = 'shareDetails';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    protected $voucherDiscounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PromotionItemTransfer[]
     */
    protected $promotionItems;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    protected $cartRuleDiscounts;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\TotalsTransfer|null
     */
    protected $totals;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    protected $expenses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $items;

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
    protected $priceMode;

    /**
     * @var bool|null
     */
    protected $isLocked;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[]
     */
    protected $shareDetails;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'voucher_discounts' => 'voucherDiscounts',
        'voucherDiscounts' => 'voucherDiscounts',
        'VoucherDiscounts' => 'voucherDiscounts',
        'promotion_items' => 'promotionItems',
        'promotionItems' => 'promotionItems',
        'PromotionItems' => 'promotionItems',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'cart_rule_discounts' => 'cartRuleDiscounts',
        'cartRuleDiscounts' => 'cartRuleDiscounts',
        'CartRuleDiscounts' => 'cartRuleDiscounts',
        'name' => 'name',
        'Name' => 'name',
        'totals' => 'totals',
        'Totals' => 'totals',
        'expenses' => 'expenses',
        'Expenses' => 'expenses',
        'items' => 'items',
        'Items' => 'items',
        'order_custom_reference' => 'orderCustomReference',
        'orderCustomReference' => 'orderCustomReference',
        'OrderCustomReference' => 'orderCustomReference',
        'currency' => 'currency',
        'Currency' => 'currency',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'is_locked' => 'isLocked',
        'isLocked' => 'isLocked',
        'IsLocked' => 'isLocked',
        'share_details' => 'shareDetails',
        'shareDetails' => 'shareDetails',
        'ShareDetails' => 'shareDetails',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
    ];

    /**
     * @module CartCodesRestApi|PersistentCart
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
     * @module CartCodesRestApi|PersistentCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    public function getVoucherDiscounts()
    {
        return $this->voucherDiscounts;
    }

    /**
     * @module CartCodesRestApi|PersistentCart
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
     * @module CartCodesRestApi|PersistentCart
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
     * @module CartCodesRestApi|DiscountPromotionsRestApi|PersistentCart
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
     * @module CartCodesRestApi|DiscountPromotionsRestApi|PersistentCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PromotionItemTransfer[]
     */
    public function getPromotionItems()
    {
        return $this->promotionItems;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi|PersistentCart
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
     * @module CartCodesRestApi|DiscountPromotionsRestApi|PersistentCart
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
     * @module CartsRestApi
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
     * @module CartsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module CartsRestApi
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
     * @module CartsRestApi
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
     * @module CartsRestApi
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
     * @module CartsRestApi
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
     * @module CartsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DiscountTransfer[]
     */
    public function getCartRuleDiscounts()
    {
        return $this->cartRuleDiscounts;
    }

    /**
     * @module CartsRestApi
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
     * @module CartsRestApi
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
     * @module MultiCart
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
     * @module MultiCart
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module MultiCart
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
     * @module MultiCart
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
     * @module MultiCart
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
     * @module MultiCart
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
     * @module MultiCart
     *
     * @return \Generated\Shared\Transfer\TotalsTransfer|null
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @module MultiCart
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
     * @module MultiCart
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
     * @module MultiCart
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
     * @module MultiCart|PersistentCart
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
     * @module MultiCart|PersistentCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ExpenseTransfer[]
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * @module MultiCart|PersistentCart
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
     * @module MultiCart|PersistentCart
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
     * @module MultiCart|PersistentCart
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
     * @module MultiCart|PersistentCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module MultiCart|PersistentCart
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
     * @module MultiCart|PersistentCart
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
     * @module OrderCustomReference
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
     * @module OrderCustomReference
     *
     * @return string|null
     */
    public function getOrderCustomReference()
    {
        return $this->orderCustomReference;
    }

    /**
     * @module OrderCustomReference
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
     * @module OrderCustomReference
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
     * @module OrderCustomReference
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
     * @module PersistentCart
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
     * @module PersistentCart
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module PersistentCart
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
     * @module PersistentCart
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
     * @module PersistentCart
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
     * @module PersistentCart
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
     * @module PersistentCart
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module PersistentCart
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
     * @module PersistentCart
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
     * @module PersistentCart
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
     * @module QuoteApproval|PersistentCart
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
     * @module QuoteApproval|PersistentCart
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->isLocked;
    }

    /**
     * @module QuoteApproval|PersistentCart
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
     * @module QuoteApproval|PersistentCart
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
     * @module QuoteApproval|PersistentCart
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
     * @module SharedCart
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
     * @module SharedCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[]
     */
    public function getShareDetails()
    {
        return $this->shareDetails;
    }

    /**
     * @module SharedCart
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
     * @module SharedCart
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
                case 'customerReference':
                case 'name':
                case 'orderCustomReference':
                case 'priceMode':
                case 'isLocked':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'totals':
                case 'currency':
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
                case 'voucherDiscounts':
                case 'promotionItems':
                case 'cartRuleDiscounts':
                case 'expenses':
                case 'items':
                case 'shareDetails':
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
                case 'customerReference':
                case 'name':
                case 'orderCustomReference':
                case 'priceMode':
                case 'isLocked':
                    $values[$arrayKey] = $value;

                    break;
                case 'totals':
                case 'currency':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'voucherDiscounts':
                case 'promotionItems':
                case 'cartRuleDiscounts':
                case 'expenses':
                case 'items':
                case 'shareDetails':
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
                case 'customerReference':
                case 'name':
                case 'orderCustomReference':
                case 'priceMode':
                case 'isLocked':
                    $values[$arrayKey] = $value;

                    break;
                case 'totals':
                case 'currency':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'voucherDiscounts':
                case 'promotionItems':
                case 'cartRuleDiscounts':
                case 'expenses':
                case 'items':
                case 'shareDetails':
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
        $this->voucherDiscounts = $this->voucherDiscounts ?: new ArrayObject();
        $this->promotionItems = $this->promotionItems ?: new ArrayObject();
        $this->cartRuleDiscounts = $this->cartRuleDiscounts ?: new ArrayObject();
        $this->expenses = $this->expenses ?: new ArrayObject();
        $this->items = $this->items ?: new ArrayObject();
        $this->shareDetails = $this->shareDetails ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'customerReference' => $this->customerReference,
            'name' => $this->name,
            'orderCustomReference' => $this->orderCustomReference,
            'priceMode' => $this->priceMode,
            'isLocked' => $this->isLocked,
            'totals' => $this->totals,
            'currency' => $this->currency,
            'voucherDiscounts' => $this->voucherDiscounts,
            'promotionItems' => $this->promotionItems,
            'cartRuleDiscounts' => $this->cartRuleDiscounts,
            'expenses' => $this->expenses,
            'items' => $this->items,
            'shareDetails' => $this->shareDetails,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'customer_reference' => $this->customerReference,
            'name' => $this->name,
            'order_custom_reference' => $this->orderCustomReference,
            'price_mode' => $this->priceMode,
            'is_locked' => $this->isLocked,
            'totals' => $this->totals,
            'currency' => $this->currency,
            'voucher_discounts' => $this->voucherDiscounts,
            'promotion_items' => $this->promotionItems,
            'cart_rule_discounts' => $this->cartRuleDiscounts,
            'expenses' => $this->expenses,
            'items' => $this->items,
            'share_details' => $this->shareDetails,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'order_custom_reference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, false) : $this->orderCustomReference,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'is_locked' => $this->isLocked instanceof AbstractTransfer ? $this->isLocked->toArray(true, false) : $this->isLocked,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, false) : $this->totals,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'voucher_discounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, false) : $this->addValuesToCollection($this->voucherDiscounts, true, false),
            'promotion_items' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, false) : $this->addValuesToCollection($this->promotionItems, true, false),
            'cart_rule_discounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, false) : $this->addValuesToCollection($this->cartRuleDiscounts, true, false),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, false) : $this->addValuesToCollection($this->expenses, true, false),
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'share_details' => $this->shareDetails instanceof AbstractTransfer ? $this->shareDetails->toArray(true, false) : $this->addValuesToCollection($this->shareDetails, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'orderCustomReference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, true) : $this->orderCustomReference,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'isLocked' => $this->isLocked instanceof AbstractTransfer ? $this->isLocked->toArray(true, true) : $this->isLocked,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, true) : $this->totals,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'voucherDiscounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, true) : $this->addValuesToCollection($this->voucherDiscounts, true, true),
            'promotionItems' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, true) : $this->addValuesToCollection($this->promotionItems, true, true),
            'cartRuleDiscounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, true) : $this->addValuesToCollection($this->cartRuleDiscounts, true, true),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, true) : $this->addValuesToCollection($this->expenses, true, true),
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'shareDetails' => $this->shareDetails instanceof AbstractTransfer ? $this->shareDetails->toArray(true, true) : $this->addValuesToCollection($this->shareDetails, true, true),
        ];
    }
}
