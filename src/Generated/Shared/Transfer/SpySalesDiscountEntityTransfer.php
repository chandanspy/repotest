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
class SpySalesDiscountEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_DISCOUNT = 'idSalesDiscount';

    /**
     * @var string
     */
    public const FK_SALES_EXPENSE = 'fkSalesExpense';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM = 'fkSalesOrderItem';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM_OPTION = 'fkSalesOrderItemOption';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const DISPLAY_NAME = 'displayName';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const ORDER_ITEM = 'orderItem';

    /**
     * @var string
     */
    public const EXPENSE = 'expense';

    /**
     * @var string
     */
    public const OPTION = 'option';

    /**
     * @var string
     */
    public const SPY_SALES_DISCOUNT_CODES = 'spySalesDiscountCodes';

    /**
     * @var integer|null
     */
    protected $idSalesDiscount;

    /**
     * @var integer|null
     */
    protected $fkSalesExpense;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItem;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItemOption;

    /**
     * @var integer|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $orderItem;

    /**
     * @var \Generated\Shared\Transfer\SpySalesExpenseEntityTransfer|null
     */
    protected $expense;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer|null
     */
    protected $option;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountCodeEntityTransfer[]
     */
    protected $spySalesDiscountCodes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_discount' => 'idSalesDiscount',
        'idSalesDiscount' => 'idSalesDiscount',
        'IdSalesDiscount' => 'idSalesDiscount',
        'fk_sales_expense' => 'fkSalesExpense',
        'fkSalesExpense' => 'fkSalesExpense',
        'FkSalesExpense' => 'fkSalesExpense',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'fk_sales_order_item' => 'fkSalesOrderItem',
        'fkSalesOrderItem' => 'fkSalesOrderItem',
        'FkSalesOrderItem' => 'fkSalesOrderItem',
        'fk_sales_order_item_option' => 'fkSalesOrderItemOption',
        'fkSalesOrderItemOption' => 'fkSalesOrderItemOption',
        'FkSalesOrderItemOption' => 'fkSalesOrderItemOption',
        'amount' => 'amount',
        'Amount' => 'amount',
        'description' => 'description',
        'Description' => 'description',
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'name' => 'name',
        'Name' => 'name',
        'order' => 'order',
        'Order' => 'order',
        'order_item' => 'orderItem',
        'orderItem' => 'orderItem',
        'OrderItem' => 'orderItem',
        'expense' => 'expense',
        'Expense' => 'expense',
        'option' => 'option',
        'Option' => 'option',
        'spy_sales_discount_codes' => 'spySalesDiscountCodes',
        'spySalesDiscountCodes' => 'spySalesDiscountCodes',
        'SpySalesDiscountCodes' => 'spySalesDiscountCodes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_DISCOUNT => [
            'type' => 'integer',
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
        self::FK_SALES_EXPENSE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_expense',
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
        self::FK_SALES_ORDER_ITEM_OPTION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_item_option',
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
        self::EXPENSE => [
            'type' => 'Generated\Shared\Transfer\SpySalesExpenseEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'expense',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPTION => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'option',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_DISCOUNT_CODES => [
            'type' => 'Generated\Shared\Transfer\SpySalesDiscountCodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_discount_codes',
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
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesDiscount';


    /**
     * @module 
     *
     * @param integer|null $idSalesDiscount
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesDiscount()
    {
        return $this->idSalesDiscount;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesDiscount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesDiscountOrFail()
    {
        if ($this->idSalesDiscount === null) {
            $this->throwNullValueException(static::ID_SALES_DISCOUNT);
        }

        return $this->idSalesDiscount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkSalesExpense
     *
     * @return $this
     */
    public function setFkSalesExpense($fkSalesExpense)
    {
        $this->fkSalesExpense = $fkSalesExpense;
        $this->modifiedProperties[self::FK_SALES_EXPENSE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesExpense()
    {
        return $this->fkSalesExpense;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesExpense
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesExpenseOrFail($fkSalesExpense)
    {
        if ($fkSalesExpense === null) {
            $this->throwNullValueException(static::FK_SALES_EXPENSE);
        }

        return $this->setFkSalesExpense($fkSalesExpense);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesExpenseOrFail()
    {
        if ($this->fkSalesExpense === null) {
            $this->throwNullValueException(static::FK_SALES_EXPENSE);
        }

        return $this->fkSalesExpense;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesExpense()
    {
        $this->assertPropertyIsSet(self::FK_SALES_EXPENSE);

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
     * @param integer|null $fkSalesOrderItemOption
     *
     * @return $this
     */
    public function setFkSalesOrderItemOption($fkSalesOrderItemOption)
    {
        $this->fkSalesOrderItemOption = $fkSalesOrderItemOption;
        $this->modifiedProperties[self::FK_SALES_ORDER_ITEM_OPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderItemOption()
    {
        return $this->fkSalesOrderItemOption;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItemOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderItemOptionOrFail($fkSalesOrderItemOption)
    {
        if ($fkSalesOrderItemOption === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM_OPTION);
        }

        return $this->setFkSalesOrderItemOption($fkSalesOrderItemOption);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderItemOptionOrFail()
    {
        if ($this->fkSalesOrderItemOption === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM_OPTION);
        }

        return $this->fkSalesOrderItemOption;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderItemOption()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ITEM_OPTION);

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
     * @param \Generated\Shared\Transfer\SpySalesExpenseEntityTransfer|null $expense
     *
     * @return $this
     */
    public function setExpense(SpySalesExpenseEntityTransfer $expense = null)
    {
        $this->expense = $expense;
        $this->modifiedProperties[self::EXPENSE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesExpenseEntityTransfer|null
     */
    public function getExpense()
    {
        return $this->expense;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesExpenseEntityTransfer $expense
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpenseOrFail(SpySalesExpenseEntityTransfer $expense)
    {
        return $this->setExpense($expense);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesExpenseEntityTransfer
     */
    public function getExpenseOrFail()
    {
        if ($this->expense === null) {
            $this->throwNullValueException(static::EXPENSE);
        }

        return $this->expense;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpense()
    {
        $this->assertPropertyIsSet(self::EXPENSE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer|null $option
     *
     * @return $this
     */
    public function setOption(SpySalesOrderItemOptionEntityTransfer $option = null)
    {
        $this->option = $option;
        $this->modifiedProperties[self::OPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer|null
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer $option
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOptionOrFail(SpySalesOrderItemOptionEntityTransfer $option)
    {
        return $this->setOption($option);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemOptionEntityTransfer
     */
    public function getOptionOrFail()
    {
        if ($this->option === null) {
            $this->throwNullValueException(static::OPTION);
        }

        return $this->option;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOption()
    {
        $this->assertPropertyIsSet(self::OPTION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountCodeEntityTransfer[] $spySalesDiscountCodes
     *
     * @return $this
     */
    public function setSpySalesDiscountCodes(ArrayObject $spySalesDiscountCodes)
    {
        $this->spySalesDiscountCodes = $spySalesDiscountCodes;
        $this->modifiedProperties[self::SPY_SALES_DISCOUNT_CODES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesDiscountCodeEntityTransfer[]
     */
    public function getSpySalesDiscountCodes()
    {
        return $this->spySalesDiscountCodes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesDiscountCodeEntityTransfer $spySalesDiscountCodes
     *
     * @return $this
     */
    public function addSpySalesDiscountCodes(SpySalesDiscountCodeEntityTransfer $spySalesDiscountCodes)
    {
        $this->spySalesDiscountCodes[] = $spySalesDiscountCodes;
        $this->modifiedProperties[self::SPY_SALES_DISCOUNT_CODES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesDiscountCodes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_DISCOUNT_CODES);

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
                case 'idSalesDiscount':
                case 'fkSalesExpense':
                case 'fkSalesOrder':
                case 'fkSalesOrderItem':
                case 'fkSalesOrderItemOption':
                case 'amount':
                case 'description':
                case 'displayName':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'order':
                case 'orderItem':
                case 'expense':
                case 'option':
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
                case 'spySalesDiscountCodes':
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
                case 'idSalesDiscount':
                case 'fkSalesExpense':
                case 'fkSalesOrder':
                case 'fkSalesOrderItem':
                case 'fkSalesOrderItemOption':
                case 'amount':
                case 'description':
                case 'displayName':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                case 'orderItem':
                case 'expense':
                case 'option':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spySalesDiscountCodes':
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
                case 'idSalesDiscount':
                case 'fkSalesExpense':
                case 'fkSalesOrder':
                case 'fkSalesOrderItem':
                case 'fkSalesOrderItemOption':
                case 'amount':
                case 'description':
                case 'displayName':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                case 'orderItem':
                case 'expense':
                case 'option':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spySalesDiscountCodes':
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
        $this->spySalesDiscountCodes = $this->spySalesDiscountCodes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesDiscount' => $this->idSalesDiscount,
            'fkSalesExpense' => $this->fkSalesExpense,
            'fkSalesOrder' => $this->fkSalesOrder,
            'fkSalesOrderItem' => $this->fkSalesOrderItem,
            'fkSalesOrderItemOption' => $this->fkSalesOrderItemOption,
            'amount' => $this->amount,
            'description' => $this->description,
            'displayName' => $this->displayName,
            'name' => $this->name,
            'order' => $this->order,
            'orderItem' => $this->orderItem,
            'expense' => $this->expense,
            'option' => $this->option,
            'spySalesDiscountCodes' => $this->spySalesDiscountCodes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_discount' => $this->idSalesDiscount,
            'fk_sales_expense' => $this->fkSalesExpense,
            'fk_sales_order' => $this->fkSalesOrder,
            'fk_sales_order_item' => $this->fkSalesOrderItem,
            'fk_sales_order_item_option' => $this->fkSalesOrderItemOption,
            'amount' => $this->amount,
            'description' => $this->description,
            'display_name' => $this->displayName,
            'name' => $this->name,
            'order' => $this->order,
            'order_item' => $this->orderItem,
            'expense' => $this->expense,
            'option' => $this->option,
            'spy_sales_discount_codes' => $this->spySalesDiscountCodes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_discount' => $this->idSalesDiscount instanceof AbstractTransfer ? $this->idSalesDiscount->toArray(true, false) : $this->idSalesDiscount,
            'fk_sales_expense' => $this->fkSalesExpense instanceof AbstractTransfer ? $this->fkSalesExpense->toArray(true, false) : $this->fkSalesExpense,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'fk_sales_order_item' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, false) : $this->fkSalesOrderItem,
            'fk_sales_order_item_option' => $this->fkSalesOrderItemOption instanceof AbstractTransfer ? $this->fkSalesOrderItemOption->toArray(true, false) : $this->fkSalesOrderItemOption,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'order_item' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, false) : $this->orderItem,
            'expense' => $this->expense instanceof AbstractTransfer ? $this->expense->toArray(true, false) : $this->expense,
            'option' => $this->option instanceof AbstractTransfer ? $this->option->toArray(true, false) : $this->option,
            'spy_sales_discount_codes' => $this->spySalesDiscountCodes instanceof AbstractTransfer ? $this->spySalesDiscountCodes->toArray(true, false) : $this->addValuesToCollection($this->spySalesDiscountCodes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesDiscount' => $this->idSalesDiscount instanceof AbstractTransfer ? $this->idSalesDiscount->toArray(true, true) : $this->idSalesDiscount,
            'fkSalesExpense' => $this->fkSalesExpense instanceof AbstractTransfer ? $this->fkSalesExpense->toArray(true, true) : $this->fkSalesExpense,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'fkSalesOrderItem' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, true) : $this->fkSalesOrderItem,
            'fkSalesOrderItemOption' => $this->fkSalesOrderItemOption instanceof AbstractTransfer ? $this->fkSalesOrderItemOption->toArray(true, true) : $this->fkSalesOrderItemOption,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'orderItem' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, true) : $this->orderItem,
            'expense' => $this->expense instanceof AbstractTransfer ? $this->expense->toArray(true, true) : $this->expense,
            'option' => $this->option instanceof AbstractTransfer ? $this->option->toArray(true, true) : $this->option,
            'spySalesDiscountCodes' => $this->spySalesDiscountCodes instanceof AbstractTransfer ? $this->spySalesDiscountCodes->toArray(true, true) : $this->addValuesToCollection($this->spySalesDiscountCodes, true, true),
        ];
    }
}
