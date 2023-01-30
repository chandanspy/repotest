<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesExpenseEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_EXPENSE = 'idSalesExpense';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const CANCELED_AMOUNT = 'canceledAmount';

    /**
     * @var string
     */
    public const DISCOUNT_AMOUNT_AGGREGATION = 'discountAmountAggregation';

    /**
     * @var string
     */
    public const GROSS_PRICE = 'grossPrice';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const NET_PRICE = 'netPrice';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string
     */
    public const PRICE_TO_PAY_AGGREGATION = 'priceToPayAggregation';

    /**
     * @var string
     */
    public const REFUNDABLE_AMOUNT = 'refundableAmount';

    /**
     * @var string
     */
    public const TAX_AMOUNT = 'taxAmount';

    /**
     * @var string
     */
    public const TAX_AMOUNT_AFTER_CANCELLATION = 'taxAmountAfterCancellation';

    /**
     * @var string
     */
    public const TAX_RATE = 'taxRate';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const SPY_SALES_DISCOUNTS = 'spySalesDiscounts';

    /**
     * @var string
     */
    public const SPY_SALES_SHIPMENTS = 'spySalesShipments';

    /**
     * @var integer|null
     */
    protected $idSalesExpense;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var integer|null
     */
    protected $canceledAmount;

    /**
     * @var integer|null
     */
    protected $discountAmountAggregation;

    /**
     * @var integer|null
     */
    protected $grossPrice;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var integer|null
     */
    protected $netPrice;

    /**
     * @var integer|null
     */
    protected $price;

    /**
     * @var integer|null
     */
    protected $priceToPayAggregation;

    /**
     * @var integer|null
     */
    protected $refundableAmount;

    /**
     * @var integer|null
     */
    protected $taxAmount;

    /**
     * @var integer|null
     */
    protected $taxAmountAfterCancellation;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $taxRate;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountEntityTransfer[]
     */
    protected $spySalesDiscounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesShipmentEntityTransfer[]
     */
    protected $spySalesShipments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_expense' => 'idSalesExpense',
        'idSalesExpense' => 'idSalesExpense',
        'IdSalesExpense' => 'idSalesExpense',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'canceled_amount' => 'canceledAmount',
        'canceledAmount' => 'canceledAmount',
        'CanceledAmount' => 'canceledAmount',
        'discount_amount_aggregation' => 'discountAmountAggregation',
        'discountAmountAggregation' => 'discountAmountAggregation',
        'DiscountAmountAggregation' => 'discountAmountAggregation',
        'gross_price' => 'grossPrice',
        'grossPrice' => 'grossPrice',
        'GrossPrice' => 'grossPrice',
        'name' => 'name',
        'Name' => 'name',
        'net_price' => 'netPrice',
        'netPrice' => 'netPrice',
        'NetPrice' => 'netPrice',
        'price' => 'price',
        'Price' => 'price',
        'price_to_pay_aggregation' => 'priceToPayAggregation',
        'priceToPayAggregation' => 'priceToPayAggregation',
        'PriceToPayAggregation' => 'priceToPayAggregation',
        'refundable_amount' => 'refundableAmount',
        'refundableAmount' => 'refundableAmount',
        'RefundableAmount' => 'refundableAmount',
        'tax_amount' => 'taxAmount',
        'taxAmount' => 'taxAmount',
        'TaxAmount' => 'taxAmount',
        'tax_amount_after_cancellation' => 'taxAmountAfterCancellation',
        'taxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'TaxAmountAfterCancellation' => 'taxAmountAfterCancellation',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'type' => 'type',
        'Type' => 'type',
        'order' => 'order',
        'Order' => 'order',
        'spy_sales_discounts' => 'spySalesDiscounts',
        'spySalesDiscounts' => 'spySalesDiscounts',
        'SpySalesDiscounts' => 'spySalesDiscounts',
        'spy_sales_shipments' => 'spySalesShipments',
        'spySalesShipments' => 'spySalesShipments',
        'SpySalesShipments' => 'spySalesShipments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_EXPENSE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_expense',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'integer',
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
        self::CANCELED_AMOUNT => [
            'type' => 'integer',
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
        self::DISCOUNT_AMOUNT_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'discount_amount_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROSS_PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'gross_price',
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
        self::NET_PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'net_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_TO_PAY_AGGREGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'price_to_pay_aggregation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFUNDABLE_AMOUNT => [
            'type' => 'integer',
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
        self::TAX_AMOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'tax_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_AMOUNT_AFTER_CANCELLATION => [
            'type' => 'integer',
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
        self::TAX_RATE => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'tax_rate',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'order',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesExpense';


    /**
     * @module 
     *
     * @param integer|null $idSalesExpense
     *
     * @return $this
     */
    public function setIdSalesExpense($idSalesExpense)
    {
        $this->idSalesExpense = $idSalesExpense;
        $this->modifiedProperties[self::ID_SALES_EXPENSE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesExpense()
    {
        return $this->idSalesExpense;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesExpense
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesExpenseOrFail($idSalesExpense)
    {
        if ($idSalesExpense === null) {
            $this->throwNullValueException(static::ID_SALES_EXPENSE);
        }

        return $this->setIdSalesExpense($idSalesExpense);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesExpenseOrFail()
    {
        if ($this->idSalesExpense === null) {
            $this->throwNullValueException(static::ID_SALES_EXPENSE);
        }

        return $this->idSalesExpense;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesExpense()
    {
        $this->assertPropertyIsSet(self::ID_SALES_EXPENSE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $canceledAmount
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
     * @module 
     *
     * @return integer|null
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $canceledAmount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getCanceledAmountOrFail()
    {
        if ($this->canceledAmount === null) {
            $this->throwNullValueException(static::CANCELED_AMOUNT);
        }

        return $this->canceledAmount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $discountAmountAggregation
     *
     * @return $this
     */
    public function setDiscountAmountAggregation($discountAmountAggregation)
    {
        $this->discountAmountAggregation = $discountAmountAggregation;
        $this->modifiedProperties[self::DISCOUNT_AMOUNT_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDiscountAmountAggregation()
    {
        return $this->discountAmountAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $discountAmountAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountAmountAggregationOrFail($discountAmountAggregation)
    {
        if ($discountAmountAggregation === null) {
            $this->throwNullValueException(static::DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->setDiscountAmountAggregation($discountAmountAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDiscountAmountAggregationOrFail()
    {
        if ($this->discountAmountAggregation === null) {
            $this->throwNullValueException(static::DISCOUNT_AMOUNT_AGGREGATION);
        }

        return $this->discountAmountAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountAmountAggregation()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_AMOUNT_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $grossPrice
     *
     * @return $this
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = $grossPrice;
        $this->modifiedProperties[self::GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $grossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrossPriceOrFail($grossPrice)
    {
        if ($grossPrice === null) {
            $this->throwNullValueException(static::GROSS_PRICE);
        }

        return $this->setGrossPrice($grossPrice);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getGrossPriceOrFail()
    {
        if ($this->grossPrice === null) {
            $this->throwNullValueException(static::GROSS_PRICE);
        }

        return $this->grossPrice;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrossPrice()
    {
        $this->assertPropertyIsSet(self::GROSS_PRICE);

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
     * @param integer|null $netPrice
     *
     * @return $this
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
        $this->modifiedProperties[self::NET_PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $netPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetPriceOrFail($netPrice)
    {
        if ($netPrice === null) {
            $this->throwNullValueException(static::NET_PRICE);
        }

        return $this->setNetPrice($netPrice);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getNetPriceOrFail()
    {
        if ($this->netPrice === null) {
            $this->throwNullValueException(static::NET_PRICE);
        }

        return $this->netPrice;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetPrice()
    {
        $this->assertPropertyIsSet(self::NET_PRICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        $this->modifiedProperties[self::PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module 
     *
     * @param integer|null $price
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceOrFail($price)
    {
        if ($price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->setPrice($price);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPriceOrFail()
    {
        if ($this->price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->price;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrice()
    {
        $this->assertPropertyIsSet(self::PRICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $priceToPayAggregation
     *
     * @return $this
     */
    public function setPriceToPayAggregation($priceToPayAggregation)
    {
        $this->priceToPayAggregation = $priceToPayAggregation;
        $this->modifiedProperties[self::PRICE_TO_PAY_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getPriceToPayAggregation()
    {
        return $this->priceToPayAggregation;
    }

    /**
     * @module 
     *
     * @param integer|null $priceToPayAggregation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceToPayAggregationOrFail($priceToPayAggregation)
    {
        if ($priceToPayAggregation === null) {
            $this->throwNullValueException(static::PRICE_TO_PAY_AGGREGATION);
        }

        return $this->setPriceToPayAggregation($priceToPayAggregation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPriceToPayAggregationOrFail()
    {
        if ($this->priceToPayAggregation === null) {
            $this->throwNullValueException(static::PRICE_TO_PAY_AGGREGATION);
        }

        return $this->priceToPayAggregation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceToPayAggregation()
    {
        $this->assertPropertyIsSet(self::PRICE_TO_PAY_AGGREGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $refundableAmount
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
     * @module 
     *
     * @return integer|null
     */
    public function getRefundableAmount()
    {
        return $this->refundableAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $refundableAmount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getRefundableAmountOrFail()
    {
        if ($this->refundableAmount === null) {
            $this->throwNullValueException(static::REFUNDABLE_AMOUNT);
        }

        return $this->refundableAmount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $taxAmount
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        $this->modifiedProperties[self::TAX_AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxAmountOrFail($taxAmount)
    {
        if ($taxAmount === null) {
            $this->throwNullValueException(static::TAX_AMOUNT);
        }

        return $this->setTaxAmount($taxAmount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getTaxAmountOrFail()
    {
        if ($this->taxAmount === null) {
            $this->throwNullValueException(static::TAX_AMOUNT);
        }

        return $this->taxAmount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxAmount()
    {
        $this->assertPropertyIsSet(self::TAX_AMOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmountAfterCancellation
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
     * @module 
     *
     * @return integer|null
     */
    public function getTaxAmountAfterCancellation()
    {
        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module 
     *
     * @param integer|null $taxAmountAfterCancellation
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getTaxAmountAfterCancellationOrFail()
    {
        if ($this->taxAmountAfterCancellation === null) {
            $this->throwNullValueException(static::TAX_AMOUNT_AFTER_CANCELLATION);
        }

        return $this->taxAmountAfterCancellation;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $taxRate
     *
     * @return $this
     */
    public function setTaxRate($taxRate = null)
    {
        if ($taxRate !== null && !$taxRate instanceof Decimal) {
            $taxRate = new Decimal($taxRate);
        }

        $this->taxRate = $taxRate;
        $this->modifiedProperties[self::TAX_RATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $taxRate
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getTaxRateOrFail()
    {
        if ($this->taxRate === null) {
            $this->throwNullValueException(static::TAX_RATE);
        }

        return $this->taxRate;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module 
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $order
     *
     * @return $this
     */
    public function setOrder(SpySalesOrderEntityTransfer $order = null)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail(SpySalesOrderEntityTransfer $order)
    {
        return $this->setOrder($order);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

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
                case 'idSalesExpense':
                case 'fkSalesOrder':
                case 'canceledAmount':
                case 'discountAmountAggregation':
                case 'grossPrice':
                case 'name':
                case 'netPrice':
                case 'price':
                case 'priceToPayAggregation':
                case 'refundableAmount':
                case 'taxAmount':
                case 'taxAmountAfterCancellation':
                case 'type':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'order':
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
                case 'spySalesDiscounts':
                case 'spySalesShipments':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'taxRate':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idSalesExpense':
                case 'fkSalesOrder':
                case 'canceledAmount':
                case 'discountAmountAggregation':
                case 'grossPrice':
                case 'name':
                case 'netPrice':
                case 'price':
                case 'priceToPayAggregation':
                case 'refundableAmount':
                case 'taxAmount':
                case 'taxAmountAfterCancellation':
                case 'type':
                case 'taxRate':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spySalesDiscounts':
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
                case 'idSalesExpense':
                case 'fkSalesOrder':
                case 'canceledAmount':
                case 'discountAmountAggregation':
                case 'grossPrice':
                case 'name':
                case 'netPrice':
                case 'price':
                case 'priceToPayAggregation':
                case 'refundableAmount':
                case 'taxAmount':
                case 'taxAmountAfterCancellation':
                case 'type':
                case 'taxRate':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spySalesDiscounts':
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
        $this->spySalesDiscounts = $this->spySalesDiscounts ?: new ArrayObject();
        $this->spySalesShipments = $this->spySalesShipments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesExpense' => $this->idSalesExpense,
            'fkSalesOrder' => $this->fkSalesOrder,
            'canceledAmount' => $this->canceledAmount,
            'discountAmountAggregation' => $this->discountAmountAggregation,
            'grossPrice' => $this->grossPrice,
            'name' => $this->name,
            'netPrice' => $this->netPrice,
            'price' => $this->price,
            'priceToPayAggregation' => $this->priceToPayAggregation,
            'refundableAmount' => $this->refundableAmount,
            'taxAmount' => $this->taxAmount,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation,
            'type' => $this->type,
            'order' => $this->order,
            'spySalesDiscounts' => $this->spySalesDiscounts,
            'spySalesShipments' => $this->spySalesShipments,
            'taxRate' => $this->taxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_expense' => $this->idSalesExpense,
            'fk_sales_order' => $this->fkSalesOrder,
            'canceled_amount' => $this->canceledAmount,
            'discount_amount_aggregation' => $this->discountAmountAggregation,
            'gross_price' => $this->grossPrice,
            'name' => $this->name,
            'net_price' => $this->netPrice,
            'price' => $this->price,
            'price_to_pay_aggregation' => $this->priceToPayAggregation,
            'refundable_amount' => $this->refundableAmount,
            'tax_amount' => $this->taxAmount,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation,
            'type' => $this->type,
            'order' => $this->order,
            'spy_sales_discounts' => $this->spySalesDiscounts,
            'spy_sales_shipments' => $this->spySalesShipments,
            'tax_rate' => $this->taxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_expense' => $this->idSalesExpense instanceof AbstractTransfer ? $this->idSalesExpense->toArray(true, false) : $this->idSalesExpense,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'discount_amount_aggregation' => $this->discountAmountAggregation instanceof AbstractTransfer ? $this->discountAmountAggregation->toArray(true, false) : $this->discountAmountAggregation,
            'gross_price' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, false) : $this->grossPrice,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'net_price' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, false) : $this->netPrice,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'price_to_pay_aggregation' => $this->priceToPayAggregation instanceof AbstractTransfer ? $this->priceToPayAggregation->toArray(true, false) : $this->priceToPayAggregation,
            'refundable_amount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, false) : $this->refundableAmount,
            'tax_amount' => $this->taxAmount instanceof AbstractTransfer ? $this->taxAmount->toArray(true, false) : $this->taxAmount,
            'tax_amount_after_cancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, false) : $this->taxAmountAfterCancellation,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'spy_sales_discounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, false) : $this->addValuesToCollection($this->spySalesDiscounts, true, false),
            'spy_sales_shipments' => $this->spySalesShipments instanceof AbstractTransfer ? $this->spySalesShipments->toArray(true, false) : $this->addValuesToCollection($this->spySalesShipments, true, false),
            'tax_rate' => $this->taxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesExpense' => $this->idSalesExpense instanceof AbstractTransfer ? $this->idSalesExpense->toArray(true, true) : $this->idSalesExpense,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'discountAmountAggregation' => $this->discountAmountAggregation instanceof AbstractTransfer ? $this->discountAmountAggregation->toArray(true, true) : $this->discountAmountAggregation,
            'grossPrice' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, true) : $this->grossPrice,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'netPrice' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, true) : $this->netPrice,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'priceToPayAggregation' => $this->priceToPayAggregation instanceof AbstractTransfer ? $this->priceToPayAggregation->toArray(true, true) : $this->priceToPayAggregation,
            'refundableAmount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, true) : $this->refundableAmount,
            'taxAmount' => $this->taxAmount instanceof AbstractTransfer ? $this->taxAmount->toArray(true, true) : $this->taxAmount,
            'taxAmountAfterCancellation' => $this->taxAmountAfterCancellation instanceof AbstractTransfer ? $this->taxAmountAfterCancellation->toArray(true, true) : $this->taxAmountAfterCancellation,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'spySalesDiscounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, true) : $this->addValuesToCollection($this->spySalesDiscounts, true, true),
            'spySalesShipments' => $this->spySalesShipments instanceof AbstractTransfer ? $this->spySalesShipments->toArray(true, true) : $this->addValuesToCollection($this->spySalesShipments, true, true),
            'taxRate' => $this->taxRate,
        ];
    }
}
