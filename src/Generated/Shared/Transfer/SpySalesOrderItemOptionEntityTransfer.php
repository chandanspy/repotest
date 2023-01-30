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
class SpySalesOrderItemOptionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM_OPTION = 'idSalesOrderItemOption';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM = 'fkSalesOrderItem';

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
    public const GROUP_NAME = 'groupName';

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
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const TAX_AMOUNT = 'taxAmount';

    /**
     * @var string
     */
    public const TAX_RATE = 'taxRate';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const ORDER_ITEM = 'orderItem';

    /**
     * @var string
     */
    public const SPY_SALES_DISCOUNTS = 'spySalesDiscounts';

    /**
     * @var integer|null
     */
    protected $idSalesOrderItemOption;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItem;

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
    protected $groupName;

    /**
     * @var integer|null
     */
    protected $netPrice;

    /**
     * @var integer|null
     */
    protected $price;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var integer|null
     */
    protected $taxAmount;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $taxRate;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $orderItem;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountEntityTransfer[]
     */
    protected $spySalesDiscounts;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_item_option' => 'idSalesOrderItemOption',
        'idSalesOrderItemOption' => 'idSalesOrderItemOption',
        'IdSalesOrderItemOption' => 'idSalesOrderItemOption',
        'fk_sales_order_item' => 'fkSalesOrderItem',
        'fkSalesOrderItem' => 'fkSalesOrderItem',
        'FkSalesOrderItem' => 'fkSalesOrderItem',
        'canceled_amount' => 'canceledAmount',
        'canceledAmount' => 'canceledAmount',
        'CanceledAmount' => 'canceledAmount',
        'discount_amount_aggregation' => 'discountAmountAggregation',
        'discountAmountAggregation' => 'discountAmountAggregation',
        'DiscountAmountAggregation' => 'discountAmountAggregation',
        'gross_price' => 'grossPrice',
        'grossPrice' => 'grossPrice',
        'GrossPrice' => 'grossPrice',
        'group_name' => 'groupName',
        'groupName' => 'groupName',
        'GroupName' => 'groupName',
        'net_price' => 'netPrice',
        'netPrice' => 'netPrice',
        'NetPrice' => 'netPrice',
        'price' => 'price',
        'Price' => 'price',
        'sku' => 'sku',
        'Sku' => 'sku',
        'tax_amount' => 'taxAmount',
        'taxAmount' => 'taxAmount',
        'TaxAmount' => 'taxAmount',
        'tax_rate' => 'taxRate',
        'taxRate' => 'taxRate',
        'TaxRate' => 'taxRate',
        'value' => 'value',
        'Value' => 'value',
        'order_item' => 'orderItem',
        'orderItem' => 'orderItem',
        'OrderItem' => 'orderItem',
        'spy_sales_discounts' => 'spySalesDiscounts',
        'spySalesDiscounts' => 'spySalesDiscounts',
        'SpySalesDiscounts' => 'spySalesDiscounts',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_ITEM_OPTION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item_option',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_item',
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
        self::GROUP_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_name',
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
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
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
        self::VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_item',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesOrderItemOption';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItemOption
     *
     * @return $this
     */
    public function setIdSalesOrderItemOption($idSalesOrderItemOption)
    {
        $this->idSalesOrderItemOption = $idSalesOrderItemOption;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM_OPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderItemOption()
    {
        return $this->idSalesOrderItemOption;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItemOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemOptionOrFail($idSalesOrderItemOption)
    {
        if ($idSalesOrderItemOption === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_OPTION);
        }

        return $this->setIdSalesOrderItemOption($idSalesOrderItemOption);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderItemOptionOrFail()
    {
        if ($this->idSalesOrderItemOption === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_OPTION);
        }

        return $this->idSalesOrderItemOption;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItemOption()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM_OPTION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @return $this
     */
    public function setFkSalesOrderItem($fkSalesOrderItem)
    {
        $this->fkSalesOrderItem = $fkSalesOrderItem;
        $this->modifiedProperties[self::FK_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderItem()
    {
        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderItemOrFail($fkSalesOrderItem)
    {
        if ($fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->setFkSalesOrderItem($fkSalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderItemOrFail()
    {
        if ($this->fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ITEM);

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
     * @param string|null $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        $this->modifiedProperties[self::GROUP_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @module 
     *
     * @param string|null $groupName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupNameOrFail($groupName)
    {
        if ($groupName === null) {
            $this->throwNullValueException(static::GROUP_NAME);
        }

        return $this->setGroupName($groupName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupNameOrFail()
    {
        if ($this->groupName === null) {
            $this->throwNullValueException(static::GROUP_NAME);
        }

        return $this->groupName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupName()
    {
        $this->assertPropertyIsSet(self::GROUP_NAME);

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
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

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
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module 
     *
     * @param string|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null $orderItem
     *
     * @return $this
     */
    public function setOrderItem(SpySalesOrderItemEntityTransfer $orderItem = null)
    {
        $this->orderItem = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $orderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderItemOrFail(SpySalesOrderItemEntityTransfer $orderItem)
    {
        return $this->setOrderItem($orderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer
     */
    public function getOrderItemOrFail()
    {
        if ($this->orderItem === null) {
            $this->throwNullValueException(static::ORDER_ITEM);
        }

        return $this->orderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItem()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM);

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
                case 'idSalesOrderItemOption':
                case 'fkSalesOrderItem':
                case 'canceledAmount':
                case 'discountAmountAggregation':
                case 'grossPrice':
                case 'groupName':
                case 'netPrice':
                case 'price':
                case 'sku':
                case 'taxAmount':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'orderItem':
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
                case 'idSalesOrderItemOption':
                case 'fkSalesOrderItem':
                case 'canceledAmount':
                case 'discountAmountAggregation':
                case 'grossPrice':
                case 'groupName':
                case 'netPrice':
                case 'price':
                case 'sku':
                case 'taxAmount':
                case 'value':
                case 'taxRate':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spySalesDiscounts':
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
                case 'idSalesOrderItemOption':
                case 'fkSalesOrderItem':
                case 'canceledAmount':
                case 'discountAmountAggregation':
                case 'grossPrice':
                case 'groupName':
                case 'netPrice':
                case 'price':
                case 'sku':
                case 'taxAmount':
                case 'value':
                case 'taxRate':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spySalesDiscounts':
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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItemOption' => $this->idSalesOrderItemOption,
            'fkSalesOrderItem' => $this->fkSalesOrderItem,
            'canceledAmount' => $this->canceledAmount,
            'discountAmountAggregation' => $this->discountAmountAggregation,
            'grossPrice' => $this->grossPrice,
            'groupName' => $this->groupName,
            'netPrice' => $this->netPrice,
            'price' => $this->price,
            'sku' => $this->sku,
            'taxAmount' => $this->taxAmount,
            'value' => $this->value,
            'orderItem' => $this->orderItem,
            'spySalesDiscounts' => $this->spySalesDiscounts,
            'taxRate' => $this->taxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item_option' => $this->idSalesOrderItemOption,
            'fk_sales_order_item' => $this->fkSalesOrderItem,
            'canceled_amount' => $this->canceledAmount,
            'discount_amount_aggregation' => $this->discountAmountAggregation,
            'gross_price' => $this->grossPrice,
            'group_name' => $this->groupName,
            'net_price' => $this->netPrice,
            'price' => $this->price,
            'sku' => $this->sku,
            'tax_amount' => $this->taxAmount,
            'value' => $this->value,
            'order_item' => $this->orderItem,
            'spy_sales_discounts' => $this->spySalesDiscounts,
            'tax_rate' => $this->taxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item_option' => $this->idSalesOrderItemOption instanceof AbstractTransfer ? $this->idSalesOrderItemOption->toArray(true, false) : $this->idSalesOrderItemOption,
            'fk_sales_order_item' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, false) : $this->fkSalesOrderItem,
            'canceled_amount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, false) : $this->canceledAmount,
            'discount_amount_aggregation' => $this->discountAmountAggregation instanceof AbstractTransfer ? $this->discountAmountAggregation->toArray(true, false) : $this->discountAmountAggregation,
            'gross_price' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, false) : $this->grossPrice,
            'group_name' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, false) : $this->groupName,
            'net_price' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, false) : $this->netPrice,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'tax_amount' => $this->taxAmount instanceof AbstractTransfer ? $this->taxAmount->toArray(true, false) : $this->taxAmount,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'order_item' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, false) : $this->orderItem,
            'spy_sales_discounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, false) : $this->addValuesToCollection($this->spySalesDiscounts, true, false),
            'tax_rate' => $this->taxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItemOption' => $this->idSalesOrderItemOption instanceof AbstractTransfer ? $this->idSalesOrderItemOption->toArray(true, true) : $this->idSalesOrderItemOption,
            'fkSalesOrderItem' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, true) : $this->fkSalesOrderItem,
            'canceledAmount' => $this->canceledAmount instanceof AbstractTransfer ? $this->canceledAmount->toArray(true, true) : $this->canceledAmount,
            'discountAmountAggregation' => $this->discountAmountAggregation instanceof AbstractTransfer ? $this->discountAmountAggregation->toArray(true, true) : $this->discountAmountAggregation,
            'grossPrice' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, true) : $this->grossPrice,
            'groupName' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, true) : $this->groupName,
            'netPrice' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, true) : $this->netPrice,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'taxAmount' => $this->taxAmount instanceof AbstractTransfer ? $this->taxAmount->toArray(true, true) : $this->taxAmount,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'orderItem' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, true) : $this->orderItem,
            'spySalesDiscounts' => $this->spySalesDiscounts instanceof AbstractTransfer ? $this->spySalesDiscounts->toArray(true, true) : $this->addValuesToCollection($this->spySalesDiscounts, true, true),
            'taxRate' => $this->taxRate,
        ];
    }
}
