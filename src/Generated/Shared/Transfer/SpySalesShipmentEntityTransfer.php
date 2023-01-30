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
class SpySalesShipmentEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_SHIPMENT = 'idSalesShipment';

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
    public const FK_SALES_ORDER_ADDRESS = 'fkSalesOrderAddress';

    /**
     * @var string
     */
    public const CARRIER_NAME = 'carrierName';

    /**
     * @var string
     */
    public const DELIVERY_TIME = 'deliveryTime';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const REQUESTED_DELIVERY_DATE = 'requestedDeliveryDate';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const EXPENSE = 'expense';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ADDRESS = 'spySalesOrderAddress';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEMS = 'spySalesOrderItems';

    /**
     * @var integer|null
     */
    protected $idSalesShipment;

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
    protected $fkSalesOrderAddress;

    /**
     * @var string|null
     */
    protected $carrierName;

    /**
     * @var string|null
     */
    protected $deliveryTime;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $requestedDeliveryDate;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var \Generated\Shared\Transfer\SpySalesExpenseEntityTransfer|null
     */
    protected $expense;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null
     */
    protected $spySalesOrderAddress;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer[]
     */
    protected $spySalesOrderItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_shipment' => 'idSalesShipment',
        'idSalesShipment' => 'idSalesShipment',
        'IdSalesShipment' => 'idSalesShipment',
        'fk_sales_expense' => 'fkSalesExpense',
        'fkSalesExpense' => 'fkSalesExpense',
        'FkSalesExpense' => 'fkSalesExpense',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'fk_sales_order_address' => 'fkSalesOrderAddress',
        'fkSalesOrderAddress' => 'fkSalesOrderAddress',
        'FkSalesOrderAddress' => 'fkSalesOrderAddress',
        'carrier_name' => 'carrierName',
        'carrierName' => 'carrierName',
        'CarrierName' => 'carrierName',
        'delivery_time' => 'deliveryTime',
        'deliveryTime' => 'deliveryTime',
        'DeliveryTime' => 'deliveryTime',
        'name' => 'name',
        'Name' => 'name',
        'requested_delivery_date' => 'requestedDeliveryDate',
        'requestedDeliveryDate' => 'requestedDeliveryDate',
        'RequestedDeliveryDate' => 'requestedDeliveryDate',
        'order' => 'order',
        'Order' => 'order',
        'expense' => 'expense',
        'Expense' => 'expense',
        'spy_sales_order_address' => 'spySalesOrderAddress',
        'spySalesOrderAddress' => 'spySalesOrderAddress',
        'SpySalesOrderAddress' => 'spySalesOrderAddress',
        'spy_sales_order_items' => 'spySalesOrderItems',
        'spySalesOrderItems' => 'spySalesOrderItems',
        'SpySalesOrderItems' => 'spySalesOrderItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_SHIPMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_shipment',
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
        self::FK_SALES_ORDER_ADDRESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARRIER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'carrier_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DELIVERY_TIME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'delivery_time',
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
        self::REQUESTED_DELIVERY_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'requested_delivery_date',
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
        self::SPY_SALES_ORDER_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_address',
            'is_collection' => false,
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesShipment';


    /**
     * @module 
     *
     * @param integer|null $idSalesShipment
     *
     * @return $this
     */
    public function setIdSalesShipment($idSalesShipment)
    {
        $this->idSalesShipment = $idSalesShipment;
        $this->modifiedProperties[self::ID_SALES_SHIPMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesShipment()
    {
        return $this->idSalesShipment;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesShipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesShipmentOrFail($idSalesShipment)
    {
        if ($idSalesShipment === null) {
            $this->throwNullValueException(static::ID_SALES_SHIPMENT);
        }

        return $this->setIdSalesShipment($idSalesShipment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesShipmentOrFail()
    {
        if ($this->idSalesShipment === null) {
            $this->throwNullValueException(static::ID_SALES_SHIPMENT);
        }

        return $this->idSalesShipment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesShipment()
    {
        $this->assertPropertyIsSet(self::ID_SALES_SHIPMENT);

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
     * @param integer|null $fkSalesOrderAddress
     *
     * @return $this
     */
    public function setFkSalesOrderAddress($fkSalesOrderAddress)
    {
        $this->fkSalesOrderAddress = $fkSalesOrderAddress;
        $this->modifiedProperties[self::FK_SALES_ORDER_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderAddress()
    {
        return $this->fkSalesOrderAddress;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderAddressOrFail($fkSalesOrderAddress)
    {
        if ($fkSalesOrderAddress === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ADDRESS);
        }

        return $this->setFkSalesOrderAddress($fkSalesOrderAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderAddressOrFail()
    {
        if ($this->fkSalesOrderAddress === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ADDRESS);
        }

        return $this->fkSalesOrderAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderAddress()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $carrierName
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
        $this->modifiedProperties[self::CARRIER_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @module 
     *
     * @param string|null $carrierName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCarrierNameOrFail($carrierName)
    {
        if ($carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->setCarrierName($carrierName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCarrierNameOrFail()
    {
        if ($this->carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->carrierName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCarrierName()
    {
        $this->assertPropertyIsSet(self::CARRIER_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $deliveryTime
     *
     * @return $this
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        $this->modifiedProperties[self::DELIVERY_TIME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @module 
     *
     * @param string|null $deliveryTime
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeliveryTimeOrFail($deliveryTime)
    {
        if ($deliveryTime === null) {
            $this->throwNullValueException(static::DELIVERY_TIME);
        }

        return $this->setDeliveryTime($deliveryTime);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDeliveryTimeOrFail()
    {
        if ($this->deliveryTime === null) {
            $this->throwNullValueException(static::DELIVERY_TIME);
        }

        return $this->deliveryTime;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeliveryTime()
    {
        $this->assertPropertyIsSet(self::DELIVERY_TIME);

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
     * @param string|null $requestedDeliveryDate
     *
     * @return $this
     */
    public function setRequestedDeliveryDate($requestedDeliveryDate)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        $this->modifiedProperties[self::REQUESTED_DELIVERY_DATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * @module 
     *
     * @param string|null $requestedDeliveryDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestedDeliveryDateOrFail($requestedDeliveryDate)
    {
        if ($requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->setRequestedDeliveryDate($requestedDeliveryDate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestedDeliveryDateOrFail()
    {
        if ($this->requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->requestedDeliveryDate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestedDeliveryDate()
    {
        $this->assertPropertyIsSet(self::REQUESTED_DELIVERY_DATE);

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
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null $spySalesOrderAddress
     *
     * @return $this
     */
    public function setSpySalesOrderAddress(SpySalesOrderAddressEntityTransfer $spySalesOrderAddress = null)
    {
        $this->spySalesOrderAddress = $spySalesOrderAddress;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer|null
     */
    public function getSpySalesOrderAddress()
    {
        return $this->spySalesOrderAddress;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer $spySalesOrderAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderAddressOrFail(SpySalesOrderAddressEntityTransfer $spySalesOrderAddress)
    {
        return $this->setSpySalesOrderAddress($spySalesOrderAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer
     */
    public function getSpySalesOrderAddressOrFail()
    {
        if ($this->spySalesOrderAddress === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER_ADDRESS);
        }

        return $this->spySalesOrderAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderAddress()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER_ADDRESS);

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
                case 'idSalesShipment':
                case 'fkSalesExpense':
                case 'fkSalesOrder':
                case 'fkSalesOrderAddress':
                case 'carrierName':
                case 'deliveryTime':
                case 'name':
                case 'requestedDeliveryDate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'order':
                case 'expense':
                case 'spySalesOrderAddress':
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
                case 'spySalesOrderItems':
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
                case 'idSalesShipment':
                case 'fkSalesExpense':
                case 'fkSalesOrder':
                case 'fkSalesOrderAddress':
                case 'carrierName':
                case 'deliveryTime':
                case 'name':
                case 'requestedDeliveryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                case 'expense':
                case 'spySalesOrderAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spySalesOrderItems':
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
                case 'idSalesShipment':
                case 'fkSalesExpense':
                case 'fkSalesOrder':
                case 'fkSalesOrderAddress':
                case 'carrierName':
                case 'deliveryTime':
                case 'name':
                case 'requestedDeliveryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                case 'expense':
                case 'spySalesOrderAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spySalesOrderItems':
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
        $this->spySalesOrderItems = $this->spySalesOrderItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesShipment' => $this->idSalesShipment,
            'fkSalesExpense' => $this->fkSalesExpense,
            'fkSalesOrder' => $this->fkSalesOrder,
            'fkSalesOrderAddress' => $this->fkSalesOrderAddress,
            'carrierName' => $this->carrierName,
            'deliveryTime' => $this->deliveryTime,
            'name' => $this->name,
            'requestedDeliveryDate' => $this->requestedDeliveryDate,
            'order' => $this->order,
            'expense' => $this->expense,
            'spySalesOrderAddress' => $this->spySalesOrderAddress,
            'spySalesOrderItems' => $this->spySalesOrderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_shipment' => $this->idSalesShipment,
            'fk_sales_expense' => $this->fkSalesExpense,
            'fk_sales_order' => $this->fkSalesOrder,
            'fk_sales_order_address' => $this->fkSalesOrderAddress,
            'carrier_name' => $this->carrierName,
            'delivery_time' => $this->deliveryTime,
            'name' => $this->name,
            'requested_delivery_date' => $this->requestedDeliveryDate,
            'order' => $this->order,
            'expense' => $this->expense,
            'spy_sales_order_address' => $this->spySalesOrderAddress,
            'spy_sales_order_items' => $this->spySalesOrderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_shipment' => $this->idSalesShipment instanceof AbstractTransfer ? $this->idSalesShipment->toArray(true, false) : $this->idSalesShipment,
            'fk_sales_expense' => $this->fkSalesExpense instanceof AbstractTransfer ? $this->fkSalesExpense->toArray(true, false) : $this->fkSalesExpense,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'fk_sales_order_address' => $this->fkSalesOrderAddress instanceof AbstractTransfer ? $this->fkSalesOrderAddress->toArray(true, false) : $this->fkSalesOrderAddress,
            'carrier_name' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, false) : $this->carrierName,
            'delivery_time' => $this->deliveryTime instanceof AbstractTransfer ? $this->deliveryTime->toArray(true, false) : $this->deliveryTime,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'requested_delivery_date' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, false) : $this->requestedDeliveryDate,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'expense' => $this->expense instanceof AbstractTransfer ? $this->expense->toArray(true, false) : $this->expense,
            'spy_sales_order_address' => $this->spySalesOrderAddress instanceof AbstractTransfer ? $this->spySalesOrderAddress->toArray(true, false) : $this->spySalesOrderAddress,
            'spy_sales_order_items' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesShipment' => $this->idSalesShipment instanceof AbstractTransfer ? $this->idSalesShipment->toArray(true, true) : $this->idSalesShipment,
            'fkSalesExpense' => $this->fkSalesExpense instanceof AbstractTransfer ? $this->fkSalesExpense->toArray(true, true) : $this->fkSalesExpense,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'fkSalesOrderAddress' => $this->fkSalesOrderAddress instanceof AbstractTransfer ? $this->fkSalesOrderAddress->toArray(true, true) : $this->fkSalesOrderAddress,
            'carrierName' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, true) : $this->carrierName,
            'deliveryTime' => $this->deliveryTime instanceof AbstractTransfer ? $this->deliveryTime->toArray(true, true) : $this->deliveryTime,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'requestedDeliveryDate' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, true) : $this->requestedDeliveryDate,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'expense' => $this->expense instanceof AbstractTransfer ? $this->expense->toArray(true, true) : $this->expense,
            'spySalesOrderAddress' => $this->spySalesOrderAddress instanceof AbstractTransfer ? $this->spySalesOrderAddress->toArray(true, true) : $this->spySalesOrderAddress,
            'spySalesOrderItems' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderItems, true, true),
        ];
    }
}
