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
class SpyDiscountEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT = 'idDiscount';

    /**
     * @var string
     */
    public const FK_DISCOUNT_VOUCHER_POOL = 'fkDiscountVoucherPool';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const CALCULATOR_PLUGIN = 'calculatorPlugin';

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
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const DISCOUNT_KEY = 'discountKey';

    /**
     * @var string
     */
    public const DISCOUNT_TYPE = 'discountType';

    /**
     * @var string
     */
    public const DISPLAY_NAME = 'displayName';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_EXCLUSIVE = 'isExclusive';

    /**
     * @var string
     */
    public const MINIMUM_ITEM_AMOUNT = 'minimumItemAmount';

    /**
     * @var string
     */
    public const PRIORITY = 'priority';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const VOUCHER_POOL = 'voucherPool';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const SPY_DISCOUNT_STORES = 'spyDiscountStores';

    /**
     * @var string
     */
    public const SPY_DISCOUNT_AMOUNTS = 'spyDiscountAmounts';

    /**
     * @var string
     */
    public const SPY_DISCOUNT_PROMOTIONS = 'spyDiscountPromotions';

    /**
     * @var integer|null
     */
    protected $idDiscount;

    /**
     * @var integer|null
     */
    protected $fkDiscountVoucherPool;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var integer|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $calculatorPlugin;

    /**
     * @var string|null
     */
    protected $collectorQueryString;

    /**
     * @var string|null
     */
    protected $decisionRuleQueryString;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $discountKey;

    /**
     * @var string|null
     */
    protected $discountType;

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isExclusive;

    /**
     * @var integer|null
     */
    protected $minimumItemAmount;

    /**
     * @var integer|null
     */
    protected $priority;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer|null
     */
    protected $voucherPool;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer[]
     */
    protected $spyDiscountStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyDiscountAmountEntityTransfer[]
     */
    protected $spyDiscountAmounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyDiscountPromotionEntityTransfer[]
     */
    protected $spyDiscountPromotions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount' => 'idDiscount',
        'idDiscount' => 'idDiscount',
        'IdDiscount' => 'idDiscount',
        'fk_discount_voucher_pool' => 'fkDiscountVoucherPool',
        'fkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'FkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'amount' => 'amount',
        'Amount' => 'amount',
        'calculator_plugin' => 'calculatorPlugin',
        'calculatorPlugin' => 'calculatorPlugin',
        'CalculatorPlugin' => 'calculatorPlugin',
        'collector_query_string' => 'collectorQueryString',
        'collectorQueryString' => 'collectorQueryString',
        'CollectorQueryString' => 'collectorQueryString',
        'decision_rule_query_string' => 'decisionRuleQueryString',
        'decisionRuleQueryString' => 'decisionRuleQueryString',
        'DecisionRuleQueryString' => 'decisionRuleQueryString',
        'description' => 'description',
        'Description' => 'description',
        'discount_key' => 'discountKey',
        'discountKey' => 'discountKey',
        'DiscountKey' => 'discountKey',
        'discount_type' => 'discountType',
        'discountType' => 'discountType',
        'DiscountType' => 'discountType',
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_exclusive' => 'isExclusive',
        'isExclusive' => 'isExclusive',
        'IsExclusive' => 'isExclusive',
        'minimum_item_amount' => 'minimumItemAmount',
        'minimumItemAmount' => 'minimumItemAmount',
        'MinimumItemAmount' => 'minimumItemAmount',
        'priority' => 'priority',
        'Priority' => 'priority',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'voucher_pool' => 'voucherPool',
        'voucherPool' => 'voucherPool',
        'VoucherPool' => 'voucherPool',
        'store' => 'store',
        'Store' => 'store',
        'spy_discount_stores' => 'spyDiscountStores',
        'spyDiscountStores' => 'spyDiscountStores',
        'SpyDiscountStores' => 'spyDiscountStores',
        'spy_discount_amounts' => 'spyDiscountAmounts',
        'spyDiscountAmounts' => 'spyDiscountAmounts',
        'SpyDiscountAmounts' => 'spyDiscountAmounts',
        'spy_discount_promotions' => 'spyDiscountPromotions',
        'spyDiscountPromotions' => 'spyDiscountPromotions',
        'SpyDiscountPromotions' => 'spyDiscountPromotions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT => [
            'type' => 'integer',
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
        self::FK_DISCOUNT_VOUCHER_POOL => [
            'type' => 'integer',
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
        self::FK_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'integer',
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
        self::DISCOUNT_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'discount_key',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
        self::IS_EXCLUSIVE => [
            'type' => 'boolean',
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
        self::MINIMUM_ITEM_AMOUNT => [
            'type' => 'integer',
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
        self::PRIORITY => [
            'type' => 'integer',
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
        self::VOUCHER_POOL => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'voucher_pool',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
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
        self::SPY_DISCOUNT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_discount_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DISCOUNT_AMOUNTS => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountAmountEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_discount_amounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DISCOUNT_PROMOTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountPromotionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_discount_promotions',
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
    public static $entityNamespace = 'Orm\Zed\Discount\Persistence\SpyDiscount';


    /**
     * @module 
     *
     * @param integer|null $idDiscount
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdDiscount()
    {
        return $this->idDiscount;
    }

    /**
     * @module 
     *
     * @param integer|null $idDiscount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdDiscountOrFail()
    {
        if ($this->idDiscount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT);
        }

        return $this->idDiscount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkDiscountVoucherPool
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkDiscountVoucherPool()
    {
        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module 
     *
     * @param integer|null $fkDiscountVoucherPool
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkDiscountVoucherPoolOrFail()
    {
        if ($this->fkDiscountVoucherPool === null) {
            $this->throwNullValueException(static::FK_DISCOUNT_VOUCHER_POOL);
        }

        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $amount
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
     * @module 
     *
     * @return integer|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module 
     *
     * @param integer|null $amount
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
     * @return integer
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
     * @module 
     *
     * @return string|null
     */
    public function getCalculatorPlugin()
    {
        return $this->calculatorPlugin;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCollectorQueryString()
    {
        return $this->collectorQueryString;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDecisionRuleQueryString()
    {
        return $this->decisionRuleQueryString;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $discountKey
     *
     * @return $this
     */
    public function setDiscountKey($discountKey)
    {
        $this->discountKey = $discountKey;
        $this->modifiedProperties[self::DISCOUNT_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDiscountKey()
    {
        return $this->discountKey;
    }

    /**
     * @module 
     *
     * @param string|null $discountKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountKeyOrFail($discountKey)
    {
        if ($discountKey === null) {
            $this->throwNullValueException(static::DISCOUNT_KEY);
        }

        return $this->setDiscountKey($discountKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDiscountKeyOrFail()
    {
        if ($this->discountKey === null) {
            $this->throwNullValueException(static::DISCOUNT_KEY);
        }

        return $this->discountKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountKey()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_KEY);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isExclusive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isExclusive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsExclusiveOrFail()
    {
        if ($this->isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->isExclusive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $minimumItemAmount
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
     * @module 
     *
     * @return integer|null
     */
    public function getMinimumItemAmount()
    {
        return $this->minimumItemAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $minimumItemAmount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getMinimumItemAmountOrFail()
    {
        if ($this->minimumItemAmount === null) {
            $this->throwNullValueException(static::MINIMUM_ITEM_AMOUNT);
        }

        return $this->minimumItemAmount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $priority
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
     * @module 
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @module 
     *
     * @param integer|null $priority
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPriorityOrFail()
    {
        if ($this->priority === null) {
            $this->throwNullValueException(static::PRIORITY);
        }

        return $this->priority;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer|null $voucherPool
     *
     * @return $this
     */
    public function setVoucherPool(SpyDiscountVoucherPoolEntityTransfer $voucherPool = null)
    {
        $this->voucherPool = $voucherPool;
        $this->modifiedProperties[self::VOUCHER_POOL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer|null
     */
    public function getVoucherPool()
    {
        return $this->voucherPool;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer $voucherPool
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVoucherPoolOrFail(SpyDiscountVoucherPoolEntityTransfer $voucherPool)
    {
        return $this->setVoucherPool($voucherPool);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer
     */
    public function getVoucherPoolOrFail()
    {
        if ($this->voucherPool === null) {
            $this->throwNullValueException(static::VOUCHER_POOL);
        }

        return $this->voucherPool;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVoucherPool()
    {
        $this->assertPropertyIsSet(self::VOUCHER_POOL);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $store
     *
     * @return $this
     */
    public function setStore(SpyStoreEntityTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(SpyStoreEntityTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer[] $spyDiscountStores
     *
     * @return $this
     */
    public function setSpyDiscountStores(ArrayObject $spyDiscountStores)
    {
        $this->spyDiscountStores = $spyDiscountStores;
        $this->modifiedProperties[self::SPY_DISCOUNT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer[]
     */
    public function getSpyDiscountStores()
    {
        return $this->spyDiscountStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountStoreEntityTransfer $spyDiscountStores
     *
     * @return $this
     */
    public function addSpyDiscountStores(SpyDiscountStoreEntityTransfer $spyDiscountStores)
    {
        $this->spyDiscountStores[] = $spyDiscountStores;
        $this->modifiedProperties[self::SPY_DISCOUNT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDiscountStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DISCOUNT_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyDiscountAmountEntityTransfer[] $spyDiscountAmounts
     *
     * @return $this
     */
    public function setSpyDiscountAmounts(ArrayObject $spyDiscountAmounts)
    {
        $this->spyDiscountAmounts = $spyDiscountAmounts;
        $this->modifiedProperties[self::SPY_DISCOUNT_AMOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyDiscountAmountEntityTransfer[]
     */
    public function getSpyDiscountAmounts()
    {
        return $this->spyDiscountAmounts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountAmountEntityTransfer $spyDiscountAmounts
     *
     * @return $this
     */
    public function addSpyDiscountAmounts(SpyDiscountAmountEntityTransfer $spyDiscountAmounts)
    {
        $this->spyDiscountAmounts[] = $spyDiscountAmounts;
        $this->modifiedProperties[self::SPY_DISCOUNT_AMOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDiscountAmounts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DISCOUNT_AMOUNTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyDiscountPromotionEntityTransfer[] $spyDiscountPromotions
     *
     * @return $this
     */
    public function setSpyDiscountPromotions(ArrayObject $spyDiscountPromotions)
    {
        $this->spyDiscountPromotions = $spyDiscountPromotions;
        $this->modifiedProperties[self::SPY_DISCOUNT_PROMOTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyDiscountPromotionEntityTransfer[]
     */
    public function getSpyDiscountPromotions()
    {
        return $this->spyDiscountPromotions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountPromotionEntityTransfer $spyDiscountPromotions
     *
     * @return $this
     */
    public function addSpyDiscountPromotions(SpyDiscountPromotionEntityTransfer $spyDiscountPromotions)
    {
        $this->spyDiscountPromotions[] = $spyDiscountPromotions;
        $this->modifiedProperties[self::SPY_DISCOUNT_PROMOTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDiscountPromotions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DISCOUNT_PROMOTIONS);

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
                case 'fkDiscountVoucherPool':
                case 'fkStore':
                case 'amount':
                case 'calculatorPlugin':
                case 'collectorQueryString':
                case 'decisionRuleQueryString':
                case 'description':
                case 'discountKey':
                case 'discountType':
                case 'displayName':
                case 'isActive':
                case 'isExclusive':
                case 'minimumItemAmount':
                case 'priority':
                case 'validFrom':
                case 'validTo':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'voucherPool':
                case 'store':
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
                case 'spyDiscountStores':
                case 'spyDiscountAmounts':
                case 'spyDiscountPromotions':
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
                case 'idDiscount':
                case 'fkDiscountVoucherPool':
                case 'fkStore':
                case 'amount':
                case 'calculatorPlugin':
                case 'collectorQueryString':
                case 'decisionRuleQueryString':
                case 'description':
                case 'discountKey':
                case 'discountType':
                case 'displayName':
                case 'isActive':
                case 'isExclusive':
                case 'minimumItemAmount':
                case 'priority':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'voucherPool':
                case 'store':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyDiscountStores':
                case 'spyDiscountAmounts':
                case 'spyDiscountPromotions':
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
                case 'fkDiscountVoucherPool':
                case 'fkStore':
                case 'amount':
                case 'calculatorPlugin':
                case 'collectorQueryString':
                case 'decisionRuleQueryString':
                case 'description':
                case 'discountKey':
                case 'discountType':
                case 'displayName':
                case 'isActive':
                case 'isExclusive':
                case 'minimumItemAmount':
                case 'priority':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'voucherPool':
                case 'store':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyDiscountStores':
                case 'spyDiscountAmounts':
                case 'spyDiscountPromotions':
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
        $this->spyDiscountStores = $this->spyDiscountStores ?: new ArrayObject();
        $this->spyDiscountAmounts = $this->spyDiscountAmounts ?: new ArrayObject();
        $this->spyDiscountPromotions = $this->spyDiscountPromotions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idDiscount' => $this->idDiscount,
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool,
            'fkStore' => $this->fkStore,
            'amount' => $this->amount,
            'calculatorPlugin' => $this->calculatorPlugin,
            'collectorQueryString' => $this->collectorQueryString,
            'decisionRuleQueryString' => $this->decisionRuleQueryString,
            'description' => $this->description,
            'discountKey' => $this->discountKey,
            'discountType' => $this->discountType,
            'displayName' => $this->displayName,
            'isActive' => $this->isActive,
            'isExclusive' => $this->isExclusive,
            'minimumItemAmount' => $this->minimumItemAmount,
            'priority' => $this->priority,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'voucherPool' => $this->voucherPool,
            'store' => $this->store,
            'spyDiscountStores' => $this->spyDiscountStores,
            'spyDiscountAmounts' => $this->spyDiscountAmounts,
            'spyDiscountPromotions' => $this->spyDiscountPromotions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool,
            'fk_store' => $this->fkStore,
            'amount' => $this->amount,
            'calculator_plugin' => $this->calculatorPlugin,
            'collector_query_string' => $this->collectorQueryString,
            'decision_rule_query_string' => $this->decisionRuleQueryString,
            'description' => $this->description,
            'discount_key' => $this->discountKey,
            'discount_type' => $this->discountType,
            'display_name' => $this->displayName,
            'is_active' => $this->isActive,
            'is_exclusive' => $this->isExclusive,
            'minimum_item_amount' => $this->minimumItemAmount,
            'priority' => $this->priority,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'voucher_pool' => $this->voucherPool,
            'store' => $this->store,
            'spy_discount_stores' => $this->spyDiscountStores,
            'spy_discount_amounts' => $this->spyDiscountAmounts,
            'spy_discount_promotions' => $this->spyDiscountPromotions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, false) : $this->idDiscount,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, false) : $this->fkDiscountVoucherPool,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'calculator_plugin' => $this->calculatorPlugin instanceof AbstractTransfer ? $this->calculatorPlugin->toArray(true, false) : $this->calculatorPlugin,
            'collector_query_string' => $this->collectorQueryString instanceof AbstractTransfer ? $this->collectorQueryString->toArray(true, false) : $this->collectorQueryString,
            'decision_rule_query_string' => $this->decisionRuleQueryString instanceof AbstractTransfer ? $this->decisionRuleQueryString->toArray(true, false) : $this->decisionRuleQueryString,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'discount_key' => $this->discountKey instanceof AbstractTransfer ? $this->discountKey->toArray(true, false) : $this->discountKey,
            'discount_type' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, false) : $this->discountType,
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_exclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, false) : $this->isExclusive,
            'minimum_item_amount' => $this->minimumItemAmount instanceof AbstractTransfer ? $this->minimumItemAmount->toArray(true, false) : $this->minimumItemAmount,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, false) : $this->priority,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'voucher_pool' => $this->voucherPool instanceof AbstractTransfer ? $this->voucherPool->toArray(true, false) : $this->voucherPool,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'spy_discount_stores' => $this->spyDiscountStores instanceof AbstractTransfer ? $this->spyDiscountStores->toArray(true, false) : $this->addValuesToCollection($this->spyDiscountStores, true, false),
            'spy_discount_amounts' => $this->spyDiscountAmounts instanceof AbstractTransfer ? $this->spyDiscountAmounts->toArray(true, false) : $this->addValuesToCollection($this->spyDiscountAmounts, true, false),
            'spy_discount_promotions' => $this->spyDiscountPromotions instanceof AbstractTransfer ? $this->spyDiscountPromotions->toArray(true, false) : $this->addValuesToCollection($this->spyDiscountPromotions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, true) : $this->idDiscount,
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, true) : $this->fkDiscountVoucherPool,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'calculatorPlugin' => $this->calculatorPlugin instanceof AbstractTransfer ? $this->calculatorPlugin->toArray(true, true) : $this->calculatorPlugin,
            'collectorQueryString' => $this->collectorQueryString instanceof AbstractTransfer ? $this->collectorQueryString->toArray(true, true) : $this->collectorQueryString,
            'decisionRuleQueryString' => $this->decisionRuleQueryString instanceof AbstractTransfer ? $this->decisionRuleQueryString->toArray(true, true) : $this->decisionRuleQueryString,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'discountKey' => $this->discountKey instanceof AbstractTransfer ? $this->discountKey->toArray(true, true) : $this->discountKey,
            'discountType' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, true) : $this->discountType,
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isExclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, true) : $this->isExclusive,
            'minimumItemAmount' => $this->minimumItemAmount instanceof AbstractTransfer ? $this->minimumItemAmount->toArray(true, true) : $this->minimumItemAmount,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, true) : $this->priority,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'voucherPool' => $this->voucherPool instanceof AbstractTransfer ? $this->voucherPool->toArray(true, true) : $this->voucherPool,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'spyDiscountStores' => $this->spyDiscountStores instanceof AbstractTransfer ? $this->spyDiscountStores->toArray(true, true) : $this->addValuesToCollection($this->spyDiscountStores, true, true),
            'spyDiscountAmounts' => $this->spyDiscountAmounts instanceof AbstractTransfer ? $this->spyDiscountAmounts->toArray(true, true) : $this->addValuesToCollection($this->spyDiscountAmounts, true, true),
            'spyDiscountPromotions' => $this->spyDiscountPromotions instanceof AbstractTransfer ? $this->spyDiscountPromotions->toArray(true, true) : $this->addValuesToCollection($this->spyDiscountPromotions, true, true),
        ];
    }
}
