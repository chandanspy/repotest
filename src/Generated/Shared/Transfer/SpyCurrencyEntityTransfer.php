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
class SpyCurrencyEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CURRENCY = 'idCurrency';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const SYMBOL = 'symbol';

    /**
     * @var string
     */
    public const SPY_PRODUCT_OPTION_VALUE_PRICES = 'spyProductOptionValuePrices';

    /**
     * @var string
     */
    public const SPY_DISCOUNT_AMOUNTS = 'spyDiscountAmounts';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS = 'spyMerchantRelationshipSalesOrderThresholds';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_SCHEDULES = 'spyPriceProductSchedules';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_THRESHOLDS = 'spySalesOrderThresholds';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_METHOD_PRICES = 'spyShipmentMethodPrices';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_STORES = 'spyPriceProductStores';

    /**
     * @var integer|null
     */
    protected $idCurrency;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $symbol;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer[]
     */
    protected $spyProductOptionValuePrices;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyDiscountAmountEntityTransfer[]
     */
    protected $spyDiscountAmounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[]
     */
    protected $spyMerchantRelationshipSalesOrderThresholds;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[]
     */
    protected $spyPriceProductSchedules;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer[]
     */
    protected $spySalesOrderThresholds;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer[]
     */
    protected $spyShipmentMethodPrices;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer[]
     */
    protected $spyPriceProductStores;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_currency' => 'idCurrency',
        'idCurrency' => 'idCurrency',
        'IdCurrency' => 'idCurrency',
        'name' => 'name',
        'Name' => 'name',
        'code' => 'code',
        'Code' => 'code',
        'symbol' => 'symbol',
        'Symbol' => 'symbol',
        'spy_product_option_value_prices' => 'spyProductOptionValuePrices',
        'spyProductOptionValuePrices' => 'spyProductOptionValuePrices',
        'SpyProductOptionValuePrices' => 'spyProductOptionValuePrices',
        'spy_discount_amounts' => 'spyDiscountAmounts',
        'spyDiscountAmounts' => 'spyDiscountAmounts',
        'SpyDiscountAmounts' => 'spyDiscountAmounts',
        'spy_merchant_relationship_sales_order_thresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'spyMerchantRelationshipSalesOrderThresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'SpyMerchantRelationshipSalesOrderThresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'spy_price_product_schedules' => 'spyPriceProductSchedules',
        'spyPriceProductSchedules' => 'spyPriceProductSchedules',
        'SpyPriceProductSchedules' => 'spyPriceProductSchedules',
        'spy_sales_order_thresholds' => 'spySalesOrderThresholds',
        'spySalesOrderThresholds' => 'spySalesOrderThresholds',
        'SpySalesOrderThresholds' => 'spySalesOrderThresholds',
        'spy_shipment_method_prices' => 'spyShipmentMethodPrices',
        'spyShipmentMethodPrices' => 'spyShipmentMethodPrices',
        'SpyShipmentMethodPrices' => 'spyShipmentMethodPrices',
        'spy_price_product_stores' => 'spyPriceProductStores',
        'spyPriceProductStores' => 'spyPriceProductStores',
        'SpyPriceProductStores' => 'spyPriceProductStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CURRENCY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_currency',
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
        self::CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SYMBOL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'symbol',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_OPTION_VALUE_PRICES => [
            'type' => 'Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_option_value_prices',
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
        self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_relationship_sales_order_thresholds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_SCHEDULES => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_schedules',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_THRESHOLDS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_thresholds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_METHOD_PRICES => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_method_prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_stores',
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
    public static $entityNamespace = 'Orm\Zed\Currency\Persistence\SpyCurrency';


    /**
     * @module 
     *
     * @param integer|null $idCurrency
     *
     * @return $this
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;
        $this->modifiedProperties[self::ID_CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * @module 
     *
     * @param integer|null $idCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCurrencyOrFail($idCurrency)
    {
        if ($idCurrency === null) {
            $this->throwNullValueException(static::ID_CURRENCY);
        }

        return $this->setIdCurrency($idCurrency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCurrencyOrFail()
    {
        if ($this->idCurrency === null) {
            $this->throwNullValueException(static::ID_CURRENCY);
        }

        return $this->idCurrency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCurrency()
    {
        $this->assertPropertyIsSet(self::ID_CURRENCY);

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
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        $this->modifiedProperties[self::CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module 
     *
     * @param string|null $code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodeOrFail($code)
    {
        if ($code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->setCode($code);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodeOrFail()
    {
        if ($this->code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->code;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCode()
    {
        $this->assertPropertyIsSet(self::CODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
        $this->modifiedProperties[self::SYMBOL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @module 
     *
     * @param string|null $symbol
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSymbolOrFail($symbol)
    {
        if ($symbol === null) {
            $this->throwNullValueException(static::SYMBOL);
        }

        return $this->setSymbol($symbol);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSymbolOrFail()
    {
        if ($this->symbol === null) {
            $this->throwNullValueException(static::SYMBOL);
        }

        return $this->symbol;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSymbol()
    {
        $this->assertPropertyIsSet(self::SYMBOL);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer[] $spyProductOptionValuePrices
     *
     * @return $this
     */
    public function setSpyProductOptionValuePrices(ArrayObject $spyProductOptionValuePrices)
    {
        $this->spyProductOptionValuePrices = $spyProductOptionValuePrices;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUE_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer[]
     */
    public function getSpyProductOptionValuePrices()
    {
        return $this->spyProductOptionValuePrices;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer $spyProductOptionValuePrices
     *
     * @return $this
     */
    public function addSpyProductOptionValuePrices(SpyProductOptionValuePriceEntityTransfer $spyProductOptionValuePrices)
    {
        $this->spyProductOptionValuePrices[] = $spyProductOptionValuePrices;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUE_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductOptionValuePrices()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_OPTION_VALUE_PRICES);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[] $spyMerchantRelationshipSalesOrderThresholds
     *
     * @return $this
     */
    public function setSpyMerchantRelationshipSalesOrderThresholds(ArrayObject $spyMerchantRelationshipSalesOrderThresholds)
    {
        $this->spyMerchantRelationshipSalesOrderThresholds = $spyMerchantRelationshipSalesOrderThresholds;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[]
     */
    public function getSpyMerchantRelationshipSalesOrderThresholds()
    {
        return $this->spyMerchantRelationshipSalesOrderThresholds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer $spyMerchantRelationshipSalesOrderThresholds
     *
     * @return $this
     */
    public function addSpyMerchantRelationshipSalesOrderThresholds(SpyMerchantRelationshipSalesOrderThresholdEntityTransfer $spyMerchantRelationshipSalesOrderThresholds)
    {
        $this->spyMerchantRelationshipSalesOrderThresholds[] = $spyMerchantRelationshipSalesOrderThresholds;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantRelationshipSalesOrderThresholds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[] $spyPriceProductSchedules
     *
     * @return $this
     */
    public function setSpyPriceProductSchedules(ArrayObject $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[]
     */
    public function getSpyPriceProductSchedules()
    {
        return $this->spyPriceProductSchedules;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules
     *
     * @return $this
     */
    public function addSpyPriceProductSchedules(SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules[] = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductSchedules()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_SCHEDULES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer[] $spySalesOrderThresholds
     *
     * @return $this
     */
    public function setSpySalesOrderThresholds(ArrayObject $spySalesOrderThresholds)
    {
        $this->spySalesOrderThresholds = $spySalesOrderThresholds;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer[]
     */
    public function getSpySalesOrderThresholds()
    {
        return $this->spySalesOrderThresholds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer $spySalesOrderThresholds
     *
     * @return $this
     */
    public function addSpySalesOrderThresholds(SpySalesOrderThresholdEntityTransfer $spySalesOrderThresholds)
    {
        $this->spySalesOrderThresholds[] = $spySalesOrderThresholds;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderThresholds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_THRESHOLDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer[] $spyShipmentMethodPrices
     *
     * @return $this
     */
    public function setSpyShipmentMethodPrices(ArrayObject $spyShipmentMethodPrices)
    {
        $this->spyShipmentMethodPrices = $spyShipmentMethodPrices;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer[]
     */
    public function getSpyShipmentMethodPrices()
    {
        return $this->spyShipmentMethodPrices;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer $spyShipmentMethodPrices
     *
     * @return $this
     */
    public function addSpyShipmentMethodPrices(SpyShipmentMethodPriceEntityTransfer $spyShipmentMethodPrices)
    {
        $this->spyShipmentMethodPrices[] = $spyShipmentMethodPrices;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentMethodPrices()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_METHOD_PRICES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer[] $spyPriceProductStores
     *
     * @return $this
     */
    public function setSpyPriceProductStores(ArrayObject $spyPriceProductStores)
    {
        $this->spyPriceProductStores = $spyPriceProductStores;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer[]
     */
    public function getSpyPriceProductStores()
    {
        return $this->spyPriceProductStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer $spyPriceProductStores
     *
     * @return $this
     */
    public function addSpyPriceProductStores(SpyPriceProductStoreEntityTransfer $spyPriceProductStores)
    {
        $this->spyPriceProductStores[] = $spyPriceProductStores;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_STORES);

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
                case 'idCurrency':
                case 'name':
                case 'code':
                case 'symbol':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductOptionValuePrices':
                case 'spyDiscountAmounts':
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spyPriceProductSchedules':
                case 'spySalesOrderThresholds':
                case 'spyShipmentMethodPrices':
                case 'spyPriceProductStores':
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
                case 'idCurrency':
                case 'name':
                case 'code':
                case 'symbol':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductOptionValuePrices':
                case 'spyDiscountAmounts':
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spyPriceProductSchedules':
                case 'spySalesOrderThresholds':
                case 'spyShipmentMethodPrices':
                case 'spyPriceProductStores':
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
                case 'idCurrency':
                case 'name':
                case 'code':
                case 'symbol':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductOptionValuePrices':
                case 'spyDiscountAmounts':
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spyPriceProductSchedules':
                case 'spySalesOrderThresholds':
                case 'spyShipmentMethodPrices':
                case 'spyPriceProductStores':
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
        $this->spyProductOptionValuePrices = $this->spyProductOptionValuePrices ?: new ArrayObject();
        $this->spyDiscountAmounts = $this->spyDiscountAmounts ?: new ArrayObject();
        $this->spyMerchantRelationshipSalesOrderThresholds = $this->spyMerchantRelationshipSalesOrderThresholds ?: new ArrayObject();
        $this->spyPriceProductSchedules = $this->spyPriceProductSchedules ?: new ArrayObject();
        $this->spySalesOrderThresholds = $this->spySalesOrderThresholds ?: new ArrayObject();
        $this->spyShipmentMethodPrices = $this->spyShipmentMethodPrices ?: new ArrayObject();
        $this->spyPriceProductStores = $this->spyPriceProductStores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCurrency' => $this->idCurrency,
            'name' => $this->name,
            'code' => $this->code,
            'symbol' => $this->symbol,
            'spyProductOptionValuePrices' => $this->spyProductOptionValuePrices,
            'spyDiscountAmounts' => $this->spyDiscountAmounts,
            'spyMerchantRelationshipSalesOrderThresholds' => $this->spyMerchantRelationshipSalesOrderThresholds,
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules,
            'spySalesOrderThresholds' => $this->spySalesOrderThresholds,
            'spyShipmentMethodPrices' => $this->spyShipmentMethodPrices,
            'spyPriceProductStores' => $this->spyPriceProductStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_currency' => $this->idCurrency,
            'name' => $this->name,
            'code' => $this->code,
            'symbol' => $this->symbol,
            'spy_product_option_value_prices' => $this->spyProductOptionValuePrices,
            'spy_discount_amounts' => $this->spyDiscountAmounts,
            'spy_merchant_relationship_sales_order_thresholds' => $this->spyMerchantRelationshipSalesOrderThresholds,
            'spy_price_product_schedules' => $this->spyPriceProductSchedules,
            'spy_sales_order_thresholds' => $this->spySalesOrderThresholds,
            'spy_shipment_method_prices' => $this->spyShipmentMethodPrices,
            'spy_price_product_stores' => $this->spyPriceProductStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_currency' => $this->idCurrency instanceof AbstractTransfer ? $this->idCurrency->toArray(true, false) : $this->idCurrency,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'symbol' => $this->symbol instanceof AbstractTransfer ? $this->symbol->toArray(true, false) : $this->symbol,
            'spy_product_option_value_prices' => $this->spyProductOptionValuePrices instanceof AbstractTransfer ? $this->spyProductOptionValuePrices->toArray(true, false) : $this->addValuesToCollection($this->spyProductOptionValuePrices, true, false),
            'spy_discount_amounts' => $this->spyDiscountAmounts instanceof AbstractTransfer ? $this->spyDiscountAmounts->toArray(true, false) : $this->addValuesToCollection($this->spyDiscountAmounts, true, false),
            'spy_merchant_relationship_sales_order_thresholds' => $this->spyMerchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->spyMerchantRelationshipSalesOrderThresholds->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantRelationshipSalesOrderThresholds, true, false),
            'spy_price_product_schedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, false),
            'spy_sales_order_thresholds' => $this->spySalesOrderThresholds instanceof AbstractTransfer ? $this->spySalesOrderThresholds->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderThresholds, true, false),
            'spy_shipment_method_prices' => $this->spyShipmentMethodPrices instanceof AbstractTransfer ? $this->spyShipmentMethodPrices->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentMethodPrices, true, false),
            'spy_price_product_stores' => $this->spyPriceProductStores instanceof AbstractTransfer ? $this->spyPriceProductStores->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductStores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCurrency' => $this->idCurrency instanceof AbstractTransfer ? $this->idCurrency->toArray(true, true) : $this->idCurrency,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'symbol' => $this->symbol instanceof AbstractTransfer ? $this->symbol->toArray(true, true) : $this->symbol,
            'spyProductOptionValuePrices' => $this->spyProductOptionValuePrices instanceof AbstractTransfer ? $this->spyProductOptionValuePrices->toArray(true, true) : $this->addValuesToCollection($this->spyProductOptionValuePrices, true, true),
            'spyDiscountAmounts' => $this->spyDiscountAmounts instanceof AbstractTransfer ? $this->spyDiscountAmounts->toArray(true, true) : $this->addValuesToCollection($this->spyDiscountAmounts, true, true),
            'spyMerchantRelationshipSalesOrderThresholds' => $this->spyMerchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->spyMerchantRelationshipSalesOrderThresholds->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantRelationshipSalesOrderThresholds, true, true),
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, true),
            'spySalesOrderThresholds' => $this->spySalesOrderThresholds instanceof AbstractTransfer ? $this->spySalesOrderThresholds->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderThresholds, true, true),
            'spyShipmentMethodPrices' => $this->spyShipmentMethodPrices instanceof AbstractTransfer ? $this->spyShipmentMethodPrices->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentMethodPrices, true, true),
            'spyPriceProductStores' => $this->spyPriceProductStores instanceof AbstractTransfer ? $this->spyPriceProductStores->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductStores, true, true),
        ];
    }
}
