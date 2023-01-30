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
class DiscountTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT = 'idDiscount';

    /**
     * @var string
     */
    public const DISPLAY_NAME = 'displayName';

    /**
     * @var string
     */
    public const DISCOUNT_PROMOTION = 'discountPromotion';

    /**
     * @var string
     */
    public const VOUCHER_CODE = 'voucherCode';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const DISCOUNT_TYPE = 'discountType';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const FK_DISCOUNT_VOUCHER_POOL = 'fkDiscountVoucherPool';

    /**
     * @var string
     */
    public const ID_SALES_DISCOUNT = 'idSalesDiscount';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const CALCULATOR_PLUGIN = 'calculatorPlugin';

    /**
     * @var string
     */
    public const IS_EXCLUSIVE = 'isExclusive';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const COLLECTOR_QUERY_STRING = 'collectorQueryString';

    /**
     * @var string
     */
    public const DECISION_RULE_QUERY_STRING = 'decisionRuleQueryString';

    /**
     * @var string
     */
    public const MONEY_VALUE_COLLECTION = 'moneyValueCollection';

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
    public const PRIORITY = 'priority';

    /**
     * @var string
     */
    public const MINIMUM_ITEM_AMOUNT = 'minimumItemAmount';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var int|null
     */
    protected $idDiscount;

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var \Generated\Shared\Transfer\DiscountPromotionTransfer|null
     */
    protected $discountPromotion;

    /**
     * @var string|null
     */
    protected $voucherCode;

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $discountType;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var int|null
     */
    protected $fkDiscountVoucherPool;

    /**
     * @var int|null
     */
    protected $idSalesDiscount;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $calculatorPlugin;

    /**
     * @var string|null
     */
    protected $isExclusive;

    /**
     * @var string|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $collectorQueryString;

    /**
     * @var string|null
     */
    protected $decisionRuleQueryString;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    protected $moneyValueCollection;

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var int|null
     */
    protected $priority;

    /**
     * @var int|null
     */
    protected $minimumItemAmount;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount' => 'idDiscount',
        'idDiscount' => 'idDiscount',
        'IdDiscount' => 'idDiscount',
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'discount_promotion' => 'discountPromotion',
        'discountPromotion' => 'discountPromotion',
        'DiscountPromotion' => 'discountPromotion',
        'voucher_code' => 'voucherCode',
        'voucherCode' => 'voucherCode',
        'VoucherCode' => 'voucherCode',
        'amount' => 'amount',
        'Amount' => 'amount',
        'discount_type' => 'discountType',
        'discountType' => 'discountType',
        'DiscountType' => 'discountType',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'fk_discount_voucher_pool' => 'fkDiscountVoucherPool',
        'fkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'FkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'id_sales_discount' => 'idSalesDiscount',
        'idSalesDiscount' => 'idSalesDiscount',
        'IdSalesDiscount' => 'idSalesDiscount',
        'description' => 'description',
        'Description' => 'description',
        'calculator_plugin' => 'calculatorPlugin',
        'calculatorPlugin' => 'calculatorPlugin',
        'CalculatorPlugin' => 'calculatorPlugin',
        'is_exclusive' => 'isExclusive',
        'isExclusive' => 'isExclusive',
        'IsExclusive' => 'isExclusive',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'collector_query_string' => 'collectorQueryString',
        'collectorQueryString' => 'collectorQueryString',
        'CollectorQueryString' => 'collectorQueryString',
        'decision_rule_query_string' => 'decisionRuleQueryString',
        'decisionRuleQueryString' => 'decisionRuleQueryString',
        'DecisionRuleQueryString' => 'decisionRuleQueryString',
        'money_value_collection' => 'moneyValueCollection',
        'moneyValueCollection' => 'moneyValueCollection',
        'MoneyValueCollection' => 'moneyValueCollection',
        'currency' => 'currency',
        'Currency' => 'currency',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'priority' => 'priority',
        'Priority' => 'priority',
        'minimum_item_amount' => 'minimumItemAmount',
        'minimumItemAmount' => 'minimumItemAmount',
        'MinimumItemAmount' => 'minimumItemAmount',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_discount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISPLAY_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'display_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_PROMOTION => [
            'type' => 'Generated\Shared\Transfer\DiscountPromotionTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount_promotion',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VOUCHER_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'voucher_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'discount_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_DISCOUNT_VOUCHER_POOL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_discount_voucher_pool',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_DISCOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_discount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CALCULATOR_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'calculator_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EXCLUSIVE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'is_exclusive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COLLECTOR_QUERY_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'collector_query_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DECISION_RULE_QUERY_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'decision_rule_query_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MONEY_VALUE_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\MoneyValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'money_value_collection',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::PRIORITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'priority',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MINIMUM_ITEM_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'minimum_item_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module DiscountPromotionWidget|Calculation|CartCodesRestApi|DiscountPromotion|Discount|SalesQuantity|PersistentCart
     *
     * @param int|null $idDiscount
     *
     * @return $this
     */
    public function setIdDiscount($idDiscount)
    {
        $this->idDiscount = $idDiscount;
        $this->modifiedProperties[self::ID_DISCOUNT] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|Calculation|CartCodesRestApi|DiscountPromotion|Discount|SalesQuantity|PersistentCart
     *
     * @return int|null
     */
    public function getIdDiscount()
    {
        return $this->idDiscount;
    }

    /**
     * @module DiscountPromotionWidget|Calculation|CartCodesRestApi|DiscountPromotion|Discount|SalesQuantity|PersistentCart
     *
     * @param int|null $idDiscount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountOrFail($idDiscount)
    {
        if ($idDiscount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT);
        }

        return $this->setIdDiscount($idDiscount);
    }

    /**
     * @module DiscountPromotionWidget|Calculation|CartCodesRestApi|DiscountPromotion|Discount|SalesQuantity|PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdDiscountOrFail()
    {
        if ($this->idDiscount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT);
        }

        return $this->idDiscount;
    }

    /**
     * @module DiscountPromotionWidget|Calculation|CartCodesRestApi|DiscountPromotion|Discount|SalesQuantity|PersistentCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscount()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT);

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|Calculation|Discount
     *
     * @param string|null $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        $this->modifiedProperties[self::DISPLAY_NAME] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|Calculation|Discount
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @module DiscountPromotionWidget|Calculation|Discount
     *
     * @param string|null $displayName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDisplayNameOrFail($displayName)
    {
        if ($displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->setDisplayName($displayName);
    }

    /**
     * @module DiscountPromotionWidget|Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDisplayNameOrFail()
    {
        if ($this->displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->displayName;
    }

    /**
     * @module DiscountPromotionWidget|Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDisplayName()
    {
        $this->assertPropertyIsSet(self::DISPLAY_NAME);

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param \Generated\Shared\Transfer\DiscountPromotionTransfer|null $discountPromotion
     *
     * @return $this
     */
    public function setDiscountPromotion(DiscountPromotionTransfer $discountPromotion = null)
    {
        $this->discountPromotion = $discountPromotion;
        $this->modifiedProperties[self::DISCOUNT_PROMOTION] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return \Generated\Shared\Transfer\DiscountPromotionTransfer|null
     */
    public function getDiscountPromotion()
    {
        return $this->discountPromotion;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param \Generated\Shared\Transfer\DiscountPromotionTransfer $discountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountPromotionOrFail(DiscountPromotionTransfer $discountPromotion)
    {
        return $this->setDiscountPromotion($discountPromotion);
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountPromotionTransfer
     */
    public function getDiscountPromotionOrFail()
    {
        if ($this->discountPromotion === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION);
        }

        return $this->discountPromotion;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountPromotion()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_PROMOTION);

        return $this;
    }

    /**
     * @module DiscountWidget|Calculation|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
     *
     * @param string|null $voucherCode
     *
     * @return $this
     */
    public function setVoucherCode($voucherCode)
    {
        $this->voucherCode = $voucherCode;
        $this->modifiedProperties[self::VOUCHER_CODE] = true;

        return $this;
    }

    /**
     * @module DiscountWidget|Calculation|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
     *
     * @return string|null
     */
    public function getVoucherCode()
    {
        return $this->voucherCode;
    }

    /**
     * @module DiscountWidget|Calculation|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
     *
     * @param string|null $voucherCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVoucherCodeOrFail($voucherCode)
    {
        if ($voucherCode === null) {
            $this->throwNullValueException(static::VOUCHER_CODE);
        }

        return $this->setVoucherCode($voucherCode);
    }

    /**
     * @module DiscountWidget|Calculation|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVoucherCodeOrFail()
    {
        if ($this->voucherCode === null) {
            $this->throwNullValueException(static::VOUCHER_CODE);
        }

        return $this->voucherCode;
    }

    /**
     * @module DiscountWidget|Calculation|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVoucherCode()
    {
        $this->assertPropertyIsSet(self::VOUCHER_CODE);

        return $this;
    }

    /**
     * @module Calculation|Discount
     *
     * @param int|null $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module Calculation|Discount
     *
     * @param int|null $amount
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
     * @module Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module Calculation|Discount
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
     * @module CartCodesRestApi|Discount
     *
     * @param string|null $discountType
     *
     * @return $this
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
        $this->modifiedProperties[self::DISCOUNT_TYPE] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @param string|null $discountType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountTypeOrFail($discountType)
    {
        if ($discountType === null) {
            $this->throwNullValueException(static::DISCOUNT_TYPE);
        }

        return $this->setDiscountType($discountType);
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDiscountTypeOrFail()
    {
        if ($this->discountType === null) {
            $this->throwNullValueException(static::DISCOUNT_TYPE);
        }

        return $this->discountType;
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountType()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_TYPE);

        return $this;
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @param string|null $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail($validTo)
    {
        if ($validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->setValidTo($validTo);
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail()
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module CartCodesRestApi|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidTo()
    {
        $this->assertPropertyIsSet(self::VALID_TO);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $fkDiscountVoucherPool
     *
     * @return $this
     */
    public function setFkDiscountVoucherPool($fkDiscountVoucherPool)
    {
        $this->fkDiscountVoucherPool = $fkDiscountVoucherPool;
        $this->modifiedProperties[self::FK_DISCOUNT_VOUCHER_POOL] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getFkDiscountVoucherPool()
    {
        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module Discount
     *
     * @param int|null $fkDiscountVoucherPool
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkDiscountVoucherPoolOrFail($fkDiscountVoucherPool)
    {
        if ($fkDiscountVoucherPool === null) {
            $this->throwNullValueException(static::FK_DISCOUNT_VOUCHER_POOL);
        }

        return $this->setFkDiscountVoucherPool($fkDiscountVoucherPool);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkDiscountVoucherPoolOrFail()
    {
        if ($this->fkDiscountVoucherPool === null) {
            $this->throwNullValueException(static::FK_DISCOUNT_VOUCHER_POOL);
        }

        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkDiscountVoucherPool()
    {
        $this->assertPropertyIsSet(self::FK_DISCOUNT_VOUCHER_POOL);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $idSalesDiscount
     *
     * @return $this
     */
    public function setIdSalesDiscount($idSalesDiscount)
    {
        $this->idSalesDiscount = $idSalesDiscount;
        $this->modifiedProperties[self::ID_SALES_DISCOUNT] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getIdSalesDiscount()
    {
        return $this->idSalesDiscount;
    }

    /**
     * @module Discount
     *
     * @param int|null $idSalesDiscount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesDiscountOrFail($idSalesDiscount)
    {
        if ($idSalesDiscount === null) {
            $this->throwNullValueException(static::ID_SALES_DISCOUNT);
        }

        return $this->setIdSalesDiscount($idSalesDiscount);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesDiscountOrFail()
    {
        if ($this->idSalesDiscount === null) {
            $this->throwNullValueException(static::ID_SALES_DISCOUNT);
        }

        return $this->idSalesDiscount;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesDiscount()
    {
        $this->assertPropertyIsSet(self::ID_SALES_DISCOUNT);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module Discount
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $calculatorPlugin
     *
     * @return $this
     */
    public function setCalculatorPlugin($calculatorPlugin)
    {
        $this->calculatorPlugin = $calculatorPlugin;
        $this->modifiedProperties[self::CALCULATOR_PLUGIN] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getCalculatorPlugin()
    {
        return $this->calculatorPlugin;
    }

    /**
     * @module Discount
     *
     * @param string|null $calculatorPlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCalculatorPluginOrFail($calculatorPlugin)
    {
        if ($calculatorPlugin === null) {
            $this->throwNullValueException(static::CALCULATOR_PLUGIN);
        }

        return $this->setCalculatorPlugin($calculatorPlugin);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCalculatorPluginOrFail()
    {
        if ($this->calculatorPlugin === null) {
            $this->throwNullValueException(static::CALCULATOR_PLUGIN);
        }

        return $this->calculatorPlugin;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCalculatorPlugin()
    {
        $this->assertPropertyIsSet(self::CALCULATOR_PLUGIN);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $isExclusive
     *
     * @return $this
     */
    public function setIsExclusive($isExclusive)
    {
        $this->isExclusive = $isExclusive;
        $this->modifiedProperties[self::IS_EXCLUSIVE] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * @module Discount
     *
     * @param string|null $isExclusive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsExclusiveOrFail($isExclusive)
    {
        if ($isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->setIsExclusive($isExclusive);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIsExclusiveOrFail()
    {
        if ($this->isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->isExclusive;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsExclusive()
    {
        $this->assertPropertyIsSet(self::IS_EXCLUSIVE);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module Discount
     *
     * @param string|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        $this->modifiedProperties[self::VALID_FROM] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module Discount
     *
     * @param string|null $validFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidFromOrFail($validFrom)
    {
        if ($validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->setValidFrom($validFrom);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidFromOrFail()
    {
        if ($this->validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->validFrom;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidFrom()
    {
        $this->assertPropertyIsSet(self::VALID_FROM);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $collectorQueryString
     *
     * @return $this
     */
    public function setCollectorQueryString($collectorQueryString)
    {
        $this->collectorQueryString = $collectorQueryString;
        $this->modifiedProperties[self::COLLECTOR_QUERY_STRING] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getCollectorQueryString()
    {
        return $this->collectorQueryString;
    }

    /**
     * @module Discount
     *
     * @param string|null $collectorQueryString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCollectorQueryStringOrFail($collectorQueryString)
    {
        if ($collectorQueryString === null) {
            $this->throwNullValueException(static::COLLECTOR_QUERY_STRING);
        }

        return $this->setCollectorQueryString($collectorQueryString);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCollectorQueryStringOrFail()
    {
        if ($this->collectorQueryString === null) {
            $this->throwNullValueException(static::COLLECTOR_QUERY_STRING);
        }

        return $this->collectorQueryString;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCollectorQueryString()
    {
        $this->assertPropertyIsSet(self::COLLECTOR_QUERY_STRING);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $decisionRuleQueryString
     *
     * @return $this
     */
    public function setDecisionRuleQueryString($decisionRuleQueryString)
    {
        $this->decisionRuleQueryString = $decisionRuleQueryString;
        $this->modifiedProperties[self::DECISION_RULE_QUERY_STRING] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getDecisionRuleQueryString()
    {
        return $this->decisionRuleQueryString;
    }

    /**
     * @module Discount
     *
     * @param string|null $decisionRuleQueryString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDecisionRuleQueryStringOrFail($decisionRuleQueryString)
    {
        if ($decisionRuleQueryString === null) {
            $this->throwNullValueException(static::DECISION_RULE_QUERY_STRING);
        }

        return $this->setDecisionRuleQueryString($decisionRuleQueryString);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDecisionRuleQueryStringOrFail()
    {
        if ($this->decisionRuleQueryString === null) {
            $this->throwNullValueException(static::DECISION_RULE_QUERY_STRING);
        }

        return $this->decisionRuleQueryString;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDecisionRuleQueryString()
    {
        $this->assertPropertyIsSet(self::DECISION_RULE_QUERY_STRING);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[] $moneyValueCollection
     *
     * @return $this
     */
    public function setMoneyValueCollection(ArrayObject $moneyValueCollection)
    {
        $this->moneyValueCollection = $moneyValueCollection;
        $this->modifiedProperties[self::MONEY_VALUE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    public function getMoneyValueCollection()
    {
        return $this->moneyValueCollection;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer $moneyValue
     *
     * @return $this
     */
    public function addMoneyValue(MoneyValueTransfer $moneyValue)
    {
        $this->moneyValueCollection[] = $moneyValue;
        $this->modifiedProperties[self::MONEY_VALUE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMoneyValueCollection()
    {
        $this->assertCollectionPropertyIsSet(self::MONEY_VALUE_COLLECTION);

        return $this;
    }

    /**
     * @module Discount
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
     * @module Discount
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module Discount
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
     * @module Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module Discount
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
     * @module Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @param int|null $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        $this->modifiedProperties[self::PRIORITY] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @module Discount
     *
     * @param int|null $priority
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriorityOrFail($priority)
    {
        if ($priority === null) {
            $this->throwNullValueException(static::PRIORITY);
        }

        return $this->setPriority($priority);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriorityOrFail()
    {
        if ($this->priority === null) {
            $this->throwNullValueException(static::PRIORITY);
        }

        return $this->priority;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriority()
    {
        $this->assertPropertyIsSet(self::PRIORITY);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $minimumItemAmount
     *
     * @return $this
     */
    public function setMinimumItemAmount($minimumItemAmount)
    {
        $this->minimumItemAmount = $minimumItemAmount;
        $this->modifiedProperties[self::MINIMUM_ITEM_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getMinimumItemAmount()
    {
        return $this->minimumItemAmount;
    }

    /**
     * @module Discount
     *
     * @param int|null $minimumItemAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMinimumItemAmountOrFail($minimumItemAmount)
    {
        if ($minimumItemAmount === null) {
            $this->throwNullValueException(static::MINIMUM_ITEM_AMOUNT);
        }

        return $this->setMinimumItemAmount($minimumItemAmount);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMinimumItemAmountOrFail()
    {
        if ($this->minimumItemAmount === null) {
            $this->throwNullValueException(static::MINIMUM_ITEM_AMOUNT);
        }

        return $this->minimumItemAmount;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMinimumItemAmount()
    {
        $this->assertPropertyIsSet(self::MINIMUM_ITEM_AMOUNT);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

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
                case 'idDiscount':
                case 'displayName':
                case 'voucherCode':
                case 'amount':
                case 'discountType':
                case 'validTo':
                case 'fkDiscountVoucherPool':
                case 'idSalesDiscount':
                case 'description':
                case 'calculatorPlugin':
                case 'isExclusive':
                case 'isActive':
                case 'validFrom':
                case 'collectorQueryString':
                case 'decisionRuleQueryString':
                case 'priceMode':
                case 'priority':
                case 'minimumItemAmount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'discountPromotion':
                case 'currency':
                case 'storeRelation':
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
                case 'moneyValueCollection':
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
                case 'idDiscount':
                case 'displayName':
                case 'voucherCode':
                case 'amount':
                case 'discountType':
                case 'validTo':
                case 'fkDiscountVoucherPool':
                case 'idSalesDiscount':
                case 'description':
                case 'calculatorPlugin':
                case 'isExclusive':
                case 'isActive':
                case 'validFrom':
                case 'collectorQueryString':
                case 'decisionRuleQueryString':
                case 'priceMode':
                case 'priority':
                case 'minimumItemAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'discountPromotion':
                case 'currency':
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'moneyValueCollection':
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
                case 'idDiscount':
                case 'displayName':
                case 'voucherCode':
                case 'amount':
                case 'discountType':
                case 'validTo':
                case 'fkDiscountVoucherPool':
                case 'idSalesDiscount':
                case 'description':
                case 'calculatorPlugin':
                case 'isExclusive':
                case 'isActive':
                case 'validFrom':
                case 'collectorQueryString':
                case 'decisionRuleQueryString':
                case 'priceMode':
                case 'priority':
                case 'minimumItemAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'discountPromotion':
                case 'currency':
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'moneyValueCollection':
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
        $this->moneyValueCollection = $this->moneyValueCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idDiscount' => $this->idDiscount,
            'displayName' => $this->displayName,
            'voucherCode' => $this->voucherCode,
            'amount' => $this->amount,
            'discountType' => $this->discountType,
            'validTo' => $this->validTo,
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool,
            'idSalesDiscount' => $this->idSalesDiscount,
            'description' => $this->description,
            'calculatorPlugin' => $this->calculatorPlugin,
            'isExclusive' => $this->isExclusive,
            'isActive' => $this->isActive,
            'validFrom' => $this->validFrom,
            'collectorQueryString' => $this->collectorQueryString,
            'decisionRuleQueryString' => $this->decisionRuleQueryString,
            'priceMode' => $this->priceMode,
            'priority' => $this->priority,
            'minimumItemAmount' => $this->minimumItemAmount,
            'discountPromotion' => $this->discountPromotion,
            'currency' => $this->currency,
            'storeRelation' => $this->storeRelation,
            'moneyValueCollection' => $this->moneyValueCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount,
            'display_name' => $this->displayName,
            'voucher_code' => $this->voucherCode,
            'amount' => $this->amount,
            'discount_type' => $this->discountType,
            'valid_to' => $this->validTo,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool,
            'id_sales_discount' => $this->idSalesDiscount,
            'description' => $this->description,
            'calculator_plugin' => $this->calculatorPlugin,
            'is_exclusive' => $this->isExclusive,
            'is_active' => $this->isActive,
            'valid_from' => $this->validFrom,
            'collector_query_string' => $this->collectorQueryString,
            'decision_rule_query_string' => $this->decisionRuleQueryString,
            'price_mode' => $this->priceMode,
            'priority' => $this->priority,
            'minimum_item_amount' => $this->minimumItemAmount,
            'discount_promotion' => $this->discountPromotion,
            'currency' => $this->currency,
            'store_relation' => $this->storeRelation,
            'money_value_collection' => $this->moneyValueCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, false) : $this->idDiscount,
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'voucher_code' => $this->voucherCode instanceof AbstractTransfer ? $this->voucherCode->toArray(true, false) : $this->voucherCode,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'discount_type' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, false) : $this->discountType,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, false) : $this->fkDiscountVoucherPool,
            'id_sales_discount' => $this->idSalesDiscount instanceof AbstractTransfer ? $this->idSalesDiscount->toArray(true, false) : $this->idSalesDiscount,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'calculator_plugin' => $this->calculatorPlugin instanceof AbstractTransfer ? $this->calculatorPlugin->toArray(true, false) : $this->calculatorPlugin,
            'is_exclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, false) : $this->isExclusive,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'collector_query_string' => $this->collectorQueryString instanceof AbstractTransfer ? $this->collectorQueryString->toArray(true, false) : $this->collectorQueryString,
            'decision_rule_query_string' => $this->decisionRuleQueryString instanceof AbstractTransfer ? $this->decisionRuleQueryString->toArray(true, false) : $this->decisionRuleQueryString,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, false) : $this->priority,
            'minimum_item_amount' => $this->minimumItemAmount instanceof AbstractTransfer ? $this->minimumItemAmount->toArray(true, false) : $this->minimumItemAmount,
            'discount_promotion' => $this->discountPromotion instanceof AbstractTransfer ? $this->discountPromotion->toArray(true, false) : $this->discountPromotion,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'money_value_collection' => $this->moneyValueCollection instanceof AbstractTransfer ? $this->moneyValueCollection->toArray(true, false) : $this->addValuesToCollection($this->moneyValueCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, true) : $this->idDiscount,
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'voucherCode' => $this->voucherCode instanceof AbstractTransfer ? $this->voucherCode->toArray(true, true) : $this->voucherCode,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'discountType' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, true) : $this->discountType,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, true) : $this->fkDiscountVoucherPool,
            'idSalesDiscount' => $this->idSalesDiscount instanceof AbstractTransfer ? $this->idSalesDiscount->toArray(true, true) : $this->idSalesDiscount,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'calculatorPlugin' => $this->calculatorPlugin instanceof AbstractTransfer ? $this->calculatorPlugin->toArray(true, true) : $this->calculatorPlugin,
            'isExclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, true) : $this->isExclusive,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'collectorQueryString' => $this->collectorQueryString instanceof AbstractTransfer ? $this->collectorQueryString->toArray(true, true) : $this->collectorQueryString,
            'decisionRuleQueryString' => $this->decisionRuleQueryString instanceof AbstractTransfer ? $this->decisionRuleQueryString->toArray(true, true) : $this->decisionRuleQueryString,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, true) : $this->priority,
            'minimumItemAmount' => $this->minimumItemAmount instanceof AbstractTransfer ? $this->minimumItemAmount->toArray(true, true) : $this->minimumItemAmount,
            'discountPromotion' => $this->discountPromotion instanceof AbstractTransfer ? $this->discountPromotion->toArray(true, true) : $this->discountPromotion,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'moneyValueCollection' => $this->moneyValueCollection instanceof AbstractTransfer ? $this->moneyValueCollection->toArray(true, true) : $this->addValuesToCollection($this->moneyValueCollection, true, true),
        ];
    }
}
