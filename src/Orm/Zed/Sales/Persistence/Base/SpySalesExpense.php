<?php

namespace Orm\Zed\Sales\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\Sales\Persistence\SpySalesDiscount as ChildSpySalesDiscount;
use Orm\Zed\Sales\Persistence\SpySalesDiscountQuery as ChildSpySalesDiscountQuery;
use Orm\Zed\Sales\Persistence\SpySalesExpense as ChildSpySalesExpense;
use Orm\Zed\Sales\Persistence\SpySalesExpenseQuery as ChildSpySalesExpenseQuery;
use Orm\Zed\Sales\Persistence\SpySalesOrder as ChildSpySalesOrder;
use Orm\Zed\Sales\Persistence\SpySalesOrderQuery as ChildSpySalesOrderQuery;
use Orm\Zed\Sales\Persistence\SpySalesShipment as ChildSpySalesShipment;
use Orm\Zed\Sales\Persistence\SpySalesShipmentQuery as ChildSpySalesShipmentQuery;
use Orm\Zed\Sales\Persistence\Map\SpySalesDiscountTableMap;
use Orm\Zed\Sales\Persistence\Map\SpySalesExpenseTableMap;
use Orm\Zed\Sales\Persistence\Map\SpySalesShipmentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'spy_sales_expense' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Sales.Persistence.Base
 */
abstract class SpySalesExpense implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Sales\\Persistence\\Map\\SpySalesExpenseTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id_sales_expense field.
     *
     * @var        int
     */
    protected $id_sales_expense;

    /**
     * The value for the fk_sales_order field.
     *
     * @var        int|null
     */
    protected $fk_sales_order;

    /**
     * The value for the canceled_amount field.
     *
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $canceled_amount;

    /**
     * The value for the discount_amount_aggregation field.
     * /Total discount amount for item/
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $discount_amount_aggregation;

    /**
     * The value for the gross_price field.
     *
     * @var        int
     */
    protected $gross_price;

    /**
     * The value for the name field.
     *
     * @var        string|null
     */
    protected $name;

    /**
     * The value for the net_price field.
     * /Price for one unit not including tax, without shipping, coupons/
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $net_price;

    /**
     * The value for the price field.
     * /Price for item, can be gross or net price depending on tax mode/
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $price;

    /**
     * The value for the price_to_pay_aggregation field.
     * /Total item price to pay after discounts/
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $price_to_pay_aggregation;

    /**
     * The value for the refundable_amount field.
     * /Total item refundable amount/
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $refundable_amount;

    /**
     * The value for the tax_amount field.
     * /Calculated tax amount based on tax mode/
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $tax_amount;

    /**
     * The value for the tax_amount_after_cancellation field.
     * /Calculated tax full amount based on tax mode, includes options, item expenses, /
     * Note: this column has a database default value of: 0
     * @var        int|null
     */
    protected $tax_amount_after_cancellation;

    /**
     * The value for the tax_rate field.
     *
     * @var        string|null
     */
    protected $tax_rate;

    /**
     * The value for the type field.
     *
     * @var        string|null
     */
    protected $type;

    /**
     * The value for the created_at field.
     *
     * @var        DateTime|null
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     *
     * @var        DateTime|null
     */
    protected $updated_at;

    /**
     * @var        ChildSpySalesOrder
     */
    protected $aOrder;

    /**
     * @var        ObjectCollection|ChildSpySalesDiscount[] Collection to store aggregation of ChildSpySalesDiscount objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpySalesDiscount> Collection to store aggregation of ChildSpySalesDiscount objects.
     */
    protected $collDiscounts;
    protected $collDiscountsPartial;

    /**
     * @var        ObjectCollection|ChildSpySalesShipment[] Collection to store aggregation of ChildSpySalesShipment objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpySalesShipment> Collection to store aggregation of ChildSpySalesShipment objects.
     */
    protected $collSpySalesShipments;
    protected $collSpySalesShipmentsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpySalesDiscount[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpySalesDiscount>
     */
    protected $discountsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpySalesShipment[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpySalesShipment>
     */
    protected $spySalesShipmentsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->canceled_amount = 0;
        $this->discount_amount_aggregation = 0;
        $this->net_price = 0;
        $this->price = 0;
        $this->price_to_pay_aggregation = 0;
        $this->refundable_amount = 0;
        $this->tax_amount = 0;
        $this->tax_amount_after_cancellation = 0;
    }

    /**
     * Initializes internal state of Orm\Zed\Sales\Persistence\Base\SpySalesExpense object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            unset($this->modifiedColumns[$col]);
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>SpySalesExpense</code> instance.  If
     * <code>obj</code> is an instance of <code>SpySalesExpense</code>, delegates to
     * <code>equals(SpySalesExpense)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return void
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param  string  $keyType                (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id_sales_expense] column value.
     *
     * @return int
     */
    public function getIdSalesExpense()
    {
        return $this->id_sales_expense;
    }

    /**
     * Get the [fk_sales_order] column value.
     *
     * @return int|null
     */
    public function getFkSalesOrder()
    {
        return $this->fk_sales_order;
    }

    /**
     * Get the [canceled_amount] column value.
     *
     * @return int|null
     */
    public function getCanceledAmount()
    {
        return $this->canceled_amount;
    }

    /**
     * Get the [discount_amount_aggregation] column value.
     * /Total discount amount for item/
     * @return int|null
     */
    public function getDiscountAmountAggregation()
    {
        return $this->discount_amount_aggregation;
    }

    /**
     * Get the [gross_price] column value.
     *
     * @return int
     */
    public function getGrossPrice()
    {
        return $this->gross_price;
    }

    /**
     * Get the [name] column value.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [net_price] column value.
     * /Price for one unit not including tax, without shipping, coupons/
     * @return int|null
     */
    public function getNetPrice()
    {
        return $this->net_price;
    }

    /**
     * Get the [price] column value.
     * /Price for item, can be gross or net price depending on tax mode/
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the [price_to_pay_aggregation] column value.
     * /Total item price to pay after discounts/
     * @return int|null
     */
    public function getPriceToPayAggregation()
    {
        return $this->price_to_pay_aggregation;
    }

    /**
     * Get the [refundable_amount] column value.
     * /Total item refundable amount/
     * @return int|null
     */
    public function getRefundableAmount()
    {
        return $this->refundable_amount;
    }

    /**
     * Get the [tax_amount] column value.
     * /Calculated tax amount based on tax mode/
     * @return int|null
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * Get the [tax_amount_after_cancellation] column value.
     * /Calculated tax full amount based on tax mode, includes options, item expenses, /
     * @return int|null
     */
    public function getTaxAmountAfterCancellation()
    {
        return $this->tax_amount_after_cancellation;
    }

    /**
     * Get the [tax_rate] column value.
     *
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * Get the [type] column value.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getCreatedAt($format = null)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTimeInterface ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getUpdatedAt($format = null)
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTimeInterface ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id_sales_expense] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setIdSalesExpense($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_sales_expense !== $v) {
            $this->id_sales_expense = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_ID_SALES_EXPENSE] = true;
        }

        return $this;
    } // setIdSalesExpense()

    /**
     * Set the value of [fk_sales_order] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setFkSalesOrder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_sales_order !== $v) {
            $this->fk_sales_order = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_FK_SALES_ORDER] = true;
        }

        if ($this->aOrder !== null && $this->aOrder->getIdSalesOrder() !== $v) {
            $this->aOrder = null;
        }

        return $this;
    } // setFkSalesOrder()

    /**
     * Set the value of [canceled_amount] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setCanceledAmount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->canceled_amount !== $v) {
            $this->canceled_amount = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_CANCELED_AMOUNT] = true;
        }

        return $this;
    } // setCanceledAmount()

    /**
     * Set the value of [discount_amount_aggregation] column.
     * /Total discount amount for item/
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setDiscountAmountAggregation($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->discount_amount_aggregation !== $v) {
            $this->discount_amount_aggregation = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION] = true;
        }

        return $this;
    } // setDiscountAmountAggregation()

    /**
     * Set the value of [gross_price] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setGrossPrice($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->gross_price !== $v) {
            $this->gross_price = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_GROSS_PRICE] = true;
        }

        return $this;
    } // setGrossPrice()

    /**
     * Set the value of [name] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [net_price] column.
     * /Price for one unit not including tax, without shipping, coupons/
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setNetPrice($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->net_price !== $v) {
            $this->net_price = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_NET_PRICE] = true;
        }

        return $this;
    } // setNetPrice()

    /**
     * Set the value of [price] column.
     * /Price for item, can be gross or net price depending on tax mode/
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_PRICE] = true;
        }

        return $this;
    } // setPrice()

    /**
     * Set the value of [price_to_pay_aggregation] column.
     * /Total item price to pay after discounts/
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setPriceToPayAggregation($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->price_to_pay_aggregation !== $v) {
            $this->price_to_pay_aggregation = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_PRICE_TO_PAY_AGGREGATION] = true;
        }

        return $this;
    } // setPriceToPayAggregation()

    /**
     * Set the value of [refundable_amount] column.
     * /Total item refundable amount/
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setRefundableAmount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->refundable_amount !== $v) {
            $this->refundable_amount = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_REFUNDABLE_AMOUNT] = true;
        }

        return $this;
    } // setRefundableAmount()

    /**
     * Set the value of [tax_amount] column.
     * /Calculated tax amount based on tax mode/
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setTaxAmount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->tax_amount !== $v) {
            $this->tax_amount = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_TAX_AMOUNT] = true;
        }

        return $this;
    } // setTaxAmount()

    /**
     * Set the value of [tax_amount_after_cancellation] column.
     * /Calculated tax full amount based on tax mode, includes options, item expenses, /
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setTaxAmountAfterCancellation($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->tax_amount_after_cancellation !== $v) {
            $this->tax_amount_after_cancellation = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION] = true;
        }

        return $this;
    } // setTaxAmountAfterCancellation()

    /**
     * Set the value of [tax_rate] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setTaxRate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->tax_rate !== $v) {
            $this->tax_rate = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_TAX_RATE] = true;
        }

        return $this;
    } // setTaxRate()

    /**
     * Set the value of [type] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[SpySalesExpenseTableMap::COL_TYPE] = true;
        }

        return $this;
    } // setType()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpySalesExpenseTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpySalesExpenseTableMap::COL_UPDATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->canceled_amount !== 0) {
                return false;
            }

            if ($this->discount_amount_aggregation !== 0) {
                return false;
            }

            if ($this->net_price !== 0) {
                return false;
            }

            if ($this->price !== 0) {
                return false;
            }

            if ($this->price_to_pay_aggregation !== 0) {
                return false;
            }

            if ($this->refundable_amount !== 0) {
                return false;
            }

            if ($this->tax_amount !== 0) {
                return false;
            }

            if ($this->tax_amount_after_cancellation !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpySalesExpenseTableMap::translateFieldName('IdSalesExpense', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_sales_expense = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpySalesExpenseTableMap::translateFieldName('FkSalesOrder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_sales_order = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpySalesExpenseTableMap::translateFieldName('CanceledAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->canceled_amount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpySalesExpenseTableMap::translateFieldName('DiscountAmountAggregation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->discount_amount_aggregation = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpySalesExpenseTableMap::translateFieldName('GrossPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gross_price = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpySalesExpenseTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpySalesExpenseTableMap::translateFieldName('NetPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->net_price = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpySalesExpenseTableMap::translateFieldName('Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpySalesExpenseTableMap::translateFieldName('PriceToPayAggregation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price_to_pay_aggregation = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SpySalesExpenseTableMap::translateFieldName('RefundableAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->refundable_amount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SpySalesExpenseTableMap::translateFieldName('TaxAmount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tax_amount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SpySalesExpenseTableMap::translateFieldName('TaxAmountAfterCancellation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tax_amount_after_cancellation = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SpySalesExpenseTableMap::translateFieldName('TaxRate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tax_rate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SpySalesExpenseTableMap::translateFieldName('Type', TableMap::TYPE_PHPNAME, $indexType)];
            $this->type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SpySalesExpenseTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SpySalesExpenseTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = SpySalesExpenseTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesExpense'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
        if ($this->aOrder !== null && $this->fk_sales_order !== $this->aOrder->getIdSalesOrder()) {
            $this->aOrder = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SpySalesExpenseTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpySalesExpenseQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOrder = null;
            $this->collDiscounts = null;

            $this->collSpySalesShipments = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpySalesExpense::setDeleted()
     * @see SpySalesExpense::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesExpenseTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpySalesExpenseQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesExpenseTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpySalesExpenseTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpySalesExpenseTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpySalesExpenseTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt(\Propel\Runtime\Util\PropelDateTime::createHighPrecision());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                SpySalesExpenseTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

     /**
     * Code to be run after persisting the object
     * @param \Propel\Runtime\Connection\ConnectionInterface $con
     */
     public function postSave(?ConnectionInterface $con = null)
     {
     }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aOrder !== null) {
                if ($this->aOrder->isModified() || $this->aOrder->isNew()) {
                    $affectedRows += $this->aOrder->save($con);
                }
                $this->setOrder($this->aOrder);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->discountsScheduledForDeletion !== null) {
                if (!$this->discountsScheduledForDeletion->isEmpty()) {
                    foreach ($this->discountsScheduledForDeletion as $discount) {
                        // need to save related object because we set the relation to null
                        $discount->save($con);
                    }
                    $this->discountsScheduledForDeletion = null;
                }
            }

            if ($this->collDiscounts !== null) {
                foreach ($this->collDiscounts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spySalesShipmentsScheduledForDeletion !== null) {
                if (!$this->spySalesShipmentsScheduledForDeletion->isEmpty()) {
                    foreach ($this->spySalesShipmentsScheduledForDeletion as $spySalesShipment) {
                        // need to save related object because we set the relation to null
                        $spySalesShipment->save($con);
                    }
                    $this->spySalesShipmentsScheduledForDeletion = null;
                }
            }

            if ($this->collSpySalesShipments !== null) {
                foreach ($this->collSpySalesShipments as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[SpySalesExpenseTableMap::COL_ID_SALES_EXPENSE] = true;
        if (null !== $this->id_sales_expense) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpySalesExpenseTableMap::COL_ID_SALES_EXPENSE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_ID_SALES_EXPENSE)) {
            $modifiedColumns[':p' . $index++]  = 'id_sales_expense';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_FK_SALES_ORDER)) {
            $modifiedColumns[':p' . $index++]  = 'fk_sales_order';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_CANCELED_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'canceled_amount';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION)) {
            $modifiedColumns[':p' . $index++]  = 'discount_amount_aggregation';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_GROSS_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gross_price';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_NET_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'net_price';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'price';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_PRICE_TO_PAY_AGGREGATION)) {
            $modifiedColumns[':p' . $index++]  = 'price_to_pay_aggregation';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_REFUNDABLE_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'refundable_amount';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'tax_amount';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION)) {
            $modifiedColumns[':p' . $index++]  = 'tax_amount_after_cancellation';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TAX_RATE)) {
            $modifiedColumns[':p' . $index++]  = 'tax_rate';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'type';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO spy_sales_expense (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_sales_expense':
                        $stmt->bindValue($identifier, $this->id_sales_expense, PDO::PARAM_INT);
                        break;
                    case 'fk_sales_order':
                        $stmt->bindValue($identifier, $this->fk_sales_order, PDO::PARAM_INT);
                        break;
                    case 'canceled_amount':
                        $stmt->bindValue($identifier, $this->canceled_amount, PDO::PARAM_INT);
                        break;
                    case 'discount_amount_aggregation':
                        $stmt->bindValue($identifier, $this->discount_amount_aggregation, PDO::PARAM_INT);
                        break;
                    case 'gross_price':
                        $stmt->bindValue($identifier, $this->gross_price, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'net_price':
                        $stmt->bindValue($identifier, $this->net_price, PDO::PARAM_INT);
                        break;
                    case 'price':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_INT);
                        break;
                    case 'price_to_pay_aggregation':
                        $stmt->bindValue($identifier, $this->price_to_pay_aggregation, PDO::PARAM_INT);
                        break;
                    case 'refundable_amount':
                        $stmt->bindValue($identifier, $this->refundable_amount, PDO::PARAM_INT);
                        break;
                    case 'tax_amount':
                        $stmt->bindValue($identifier, $this->tax_amount, PDO::PARAM_INT);
                        break;
                    case 'tax_amount_after_cancellation':
                        $stmt->bindValue($identifier, $this->tax_amount_after_cancellation, PDO::PARAM_INT);
                        break;
                    case 'tax_rate':
                        $stmt->bindValue($identifier, $this->tax_rate, PDO::PARAM_STR);
                        break;
                    case 'type':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'updated_at':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_sales_expense_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdSalesExpense($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_FIELDNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpySalesExpenseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdSalesExpense();
                break;
            case 1:
                return $this->getFkSalesOrder();
                break;
            case 2:
                return $this->getCanceledAmount();
                break;
            case 3:
                return $this->getDiscountAmountAggregation();
                break;
            case 4:
                return $this->getGrossPrice();
                break;
            case 5:
                return $this->getName();
                break;
            case 6:
                return $this->getNetPrice();
                break;
            case 7:
                return $this->getPrice();
                break;
            case 8:
                return $this->getPriceToPayAggregation();
                break;
            case 9:
                return $this->getRefundableAmount();
                break;
            case 10:
                return $this->getTaxAmount();
                break;
            case 11:
                return $this->getTaxAmountAfterCancellation();
                break;
            case 12:
                return $this->getTaxRate();
                break;
            case 13:
                return $this->getType();
                break;
            case 14:
                return $this->getCreatedAt();
                break;
            case 15:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_FIELDNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['SpySalesExpense'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpySalesExpense'][$this->hashCode()] = true;
        $keys = SpySalesExpenseTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdSalesExpense(),
            $keys[1] => $this->getFkSalesOrder(),
            $keys[2] => $this->getCanceledAmount(),
            $keys[3] => $this->getDiscountAmountAggregation(),
            $keys[4] => $this->getGrossPrice(),
            $keys[5] => $this->getName(),
            $keys[6] => $this->getNetPrice(),
            $keys[7] => $this->getPrice(),
            $keys[8] => $this->getPriceToPayAggregation(),
            $keys[9] => $this->getRefundableAmount(),
            $keys[10] => $this->getTaxAmount(),
            $keys[11] => $this->getTaxAmountAfterCancellation(),
            $keys[12] => $this->getTaxRate(),
            $keys[13] => $this->getType(),
            $keys[14] => $this->getCreatedAt(),
            $keys[15] => $this->getUpdatedAt(),
        );
        if ($result[$keys[14]] instanceof \DateTimeInterface) {
            $result[$keys[14]] = $result[$keys[14]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[15]] instanceof \DateTimeInterface) {
            $result[$keys[15]] = $result[$keys[15]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOrder) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spySalesOrder';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_sales_order';
                        break;
                    default:
                        $key = 'Order';
                }

                $result[$key] = $this->aOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collDiscounts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spySalesDiscounts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_sales_discounts';
                        break;
                    default:
                        $key = 'Discounts';
                }

                $result[$key] = $this->collDiscounts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpySalesShipments) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spySalesShipments';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_sales_shipments';
                        break;
                    default:
                        $key = 'SpySalesShipments';
                }

                $result[$key] = $this->collSpySalesShipments->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_FIELDNAME.
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpySalesExpenseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdSalesExpense($value);
                break;
            case 1:
                $this->setFkSalesOrder($value);
                break;
            case 2:
                $this->setCanceledAmount($value);
                break;
            case 3:
                $this->setDiscountAmountAggregation($value);
                break;
            case 4:
                $this->setGrossPrice($value);
                break;
            case 5:
                $this->setName($value);
                break;
            case 6:
                $this->setNetPrice($value);
                break;
            case 7:
                $this->setPrice($value);
                break;
            case 8:
                $this->setPriceToPayAggregation($value);
                break;
            case 9:
                $this->setRefundableAmount($value);
                break;
            case 10:
                $this->setTaxAmount($value);
                break;
            case 11:
                $this->setTaxAmountAfterCancellation($value);
                break;
            case 12:
                $this->setTaxRate($value);
                break;
            case 13:
                $this->setType($value);
                break;
            case 14:
                $this->setCreatedAt($value);
                break;
            case 15:
                $this->setUpdatedAt($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     $this|\Orm\Zed\Sales\Persistence\SpySalesExpense
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpySalesExpenseTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdSalesExpense($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkSalesOrder($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCanceledAmount($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDiscountAmountAggregation($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setGrossPrice($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setName($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setNetPrice($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPrice($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPriceToPayAggregation($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRefundableAmount($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setTaxAmount($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setTaxAmountAfterCancellation($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setTaxRate($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setType($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCreatedAt($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setUpdatedAt($arr[$keys[15]]);
        }

        return $this;
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_FIELDNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SpySalesExpenseTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_ID_SALES_EXPENSE)) {
            $criteria->add(SpySalesExpenseTableMap::COL_ID_SALES_EXPENSE, $this->id_sales_expense);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_FK_SALES_ORDER)) {
            $criteria->add(SpySalesExpenseTableMap::COL_FK_SALES_ORDER, $this->fk_sales_order);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_CANCELED_AMOUNT)) {
            $criteria->add(SpySalesExpenseTableMap::COL_CANCELED_AMOUNT, $this->canceled_amount);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION)) {
            $criteria->add(SpySalesExpenseTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION, $this->discount_amount_aggregation);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_GROSS_PRICE)) {
            $criteria->add(SpySalesExpenseTableMap::COL_GROSS_PRICE, $this->gross_price);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_NAME)) {
            $criteria->add(SpySalesExpenseTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_NET_PRICE)) {
            $criteria->add(SpySalesExpenseTableMap::COL_NET_PRICE, $this->net_price);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_PRICE)) {
            $criteria->add(SpySalesExpenseTableMap::COL_PRICE, $this->price);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_PRICE_TO_PAY_AGGREGATION)) {
            $criteria->add(SpySalesExpenseTableMap::COL_PRICE_TO_PAY_AGGREGATION, $this->price_to_pay_aggregation);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_REFUNDABLE_AMOUNT)) {
            $criteria->add(SpySalesExpenseTableMap::COL_REFUNDABLE_AMOUNT, $this->refundable_amount);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TAX_AMOUNT)) {
            $criteria->add(SpySalesExpenseTableMap::COL_TAX_AMOUNT, $this->tax_amount);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION)) {
            $criteria->add(SpySalesExpenseTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION, $this->tax_amount_after_cancellation);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TAX_RATE)) {
            $criteria->add(SpySalesExpenseTableMap::COL_TAX_RATE, $this->tax_rate);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_TYPE)) {
            $criteria->add(SpySalesExpenseTableMap::COL_TYPE, $this->type);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_CREATED_AT)) {
            $criteria->add(SpySalesExpenseTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpySalesExpenseTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpySalesExpenseTableMap::COL_UPDATED_AT, $this->updated_at);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildSpySalesExpenseQuery::create();
        $criteria->add(SpySalesExpenseTableMap::COL_ID_SALES_EXPENSE, $this->id_sales_expense);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getIdSalesExpense();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdSalesExpense();
    }

    /**
     * Generic method to set the primary key (id_sales_expense column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdSalesExpense($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdSalesExpense();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Sales\Persistence\SpySalesExpense (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkSalesOrder($this->getFkSalesOrder());
        $copyObj->setCanceledAmount($this->getCanceledAmount());
        $copyObj->setDiscountAmountAggregation($this->getDiscountAmountAggregation());
        $copyObj->setGrossPrice($this->getGrossPrice());
        $copyObj->setName($this->getName());
        $copyObj->setNetPrice($this->getNetPrice());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setPriceToPayAggregation($this->getPriceToPayAggregation());
        $copyObj->setRefundableAmount($this->getRefundableAmount());
        $copyObj->setTaxAmount($this->getTaxAmount());
        $copyObj->setTaxAmountAfterCancellation($this->getTaxAmountAfterCancellation());
        $copyObj->setTaxRate($this->getTaxRate());
        $copyObj->setType($this->getType());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getDiscounts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDiscount($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpySalesShipments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpySalesShipment($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdSalesExpense(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Orm\Zed\Sales\Persistence\SpySalesExpense Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Declares an association between this object and a ChildSpySalesOrder object.
     *
     * @param  ChildSpySalesOrder|null $v
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOrder(ChildSpySalesOrder $v = null)
    {
        if ($v === null) {
            $this->setFkSalesOrder(NULL);
        } else {
            $this->setFkSalesOrder($v->getIdSalesOrder());
        }

        $this->aOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpySalesOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addExpense($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpySalesOrder object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpySalesOrder|null The associated ChildSpySalesOrder object.
     * @throws PropelException
     */
    public function getOrder(ConnectionInterface $con = null)
    {
        if ($this->aOrder === null && ($this->fk_sales_order != 0)) {
            $this->aOrder = ChildSpySalesOrderQuery::create()->findPk($this->fk_sales_order, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOrder->addExpenses($this);
             */
        }

        return $this->aOrder;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Discount' === $relationName) {
            $this->initDiscounts();
            return;
        }
        if ('SpySalesShipment' === $relationName) {
            $this->initSpySalesShipments();
            return;
        }
    }

    /**
     * Clears out the collDiscounts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addDiscounts()
     */
    public function clearDiscounts()
    {
        $this->collDiscounts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collDiscounts collection loaded partially.
     */
    public function resetPartialDiscounts($v = true)
    {
        $this->collDiscountsPartial = $v;
    }

    /**
     * Initializes the collDiscounts collection.
     *
     * By default this just sets the collDiscounts collection to an empty array (like clearcollDiscounts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDiscounts($overrideExisting = true)
    {
        if (null !== $this->collDiscounts && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpySalesDiscountTableMap::getTableMap()->getCollectionClassName();

        $this->collDiscounts = new $collectionClassName;
        $this->collDiscounts->setModel('\Orm\Zed\Sales\Persistence\SpySalesDiscount');
    }

    /**
     * Gets an array of ChildSpySalesDiscount objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpySalesExpense is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpySalesDiscount[] List of ChildSpySalesDiscount objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpySalesDiscount> List of ChildSpySalesDiscount objects
     * @throws PropelException
     */
    public function getDiscounts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collDiscountsPartial && !$this->isNew();
        if (null === $this->collDiscounts || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collDiscounts) {
                    $this->initDiscounts();
                } else {
                    $collectionClassName = SpySalesDiscountTableMap::getTableMap()->getCollectionClassName();

                    $collDiscounts = new $collectionClassName;
                    $collDiscounts->setModel('\Orm\Zed\Sales\Persistence\SpySalesDiscount');

                    return $collDiscounts;
                }
            } else {
                $collDiscounts = ChildSpySalesDiscountQuery::create(null, $criteria)
                    ->filterByExpense($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collDiscountsPartial && count($collDiscounts)) {
                        $this->initDiscounts(false);

                        foreach ($collDiscounts as $obj) {
                            if (false == $this->collDiscounts->contains($obj)) {
                                $this->collDiscounts->append($obj);
                            }
                        }

                        $this->collDiscountsPartial = true;
                    }

                    return $collDiscounts;
                }

                if ($partial && $this->collDiscounts) {
                    foreach ($this->collDiscounts as $obj) {
                        if ($obj->isNew()) {
                            $collDiscounts[] = $obj;
                        }
                    }
                }

                $this->collDiscounts = $collDiscounts;
                $this->collDiscountsPartial = false;
            }
        }

        return $this->collDiscounts;
    }

    /**
     * Sets a collection of ChildSpySalesDiscount objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $discounts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpySalesExpense The current object (for fluent API support)
     */
    public function setDiscounts(Collection $discounts, ConnectionInterface $con = null)
    {
        /** @var ChildSpySalesDiscount[] $discountsToDelete */
        $discountsToDelete = $this->getDiscounts(new Criteria(), $con)->diff($discounts);


        $this->discountsScheduledForDeletion = $discountsToDelete;

        foreach ($discountsToDelete as $discountRemoved) {
            $discountRemoved->setExpense(null);
        }

        $this->collDiscounts = null;
        foreach ($discounts as $discount) {
            $this->addDiscount($discount);
        }

        $this->collDiscounts = $discounts;
        $this->collDiscountsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpySalesDiscount objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpySalesDiscount objects.
     * @throws PropelException
     */
    public function countDiscounts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collDiscountsPartial && !$this->isNew();
        if (null === $this->collDiscounts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDiscounts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDiscounts());
            }

            $query = ChildSpySalesDiscountQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpense($this)
                ->count($con);
        }

        return count($this->collDiscounts);
    }

    /**
     * Method called to associate a ChildSpySalesDiscount object to this object
     * through the ChildSpySalesDiscount foreign key attribute.
     *
     * @param  ChildSpySalesDiscount $l ChildSpySalesDiscount
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function addDiscount(ChildSpySalesDiscount $l)
    {
        if ($this->collDiscounts === null) {
            $this->initDiscounts();
            $this->collDiscountsPartial = true;
        }

        if (!$this->collDiscounts->contains($l)) {
            $this->doAddDiscount($l);

            if ($this->discountsScheduledForDeletion and $this->discountsScheduledForDeletion->contains($l)) {
                $this->discountsScheduledForDeletion->remove($this->discountsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpySalesDiscount $discount The ChildSpySalesDiscount object to add.
     */
    protected function doAddDiscount(ChildSpySalesDiscount $discount)
    {
        $this->collDiscounts[]= $discount;
        $discount->setExpense($this);
    }

    /**
     * @param  ChildSpySalesDiscount $discount The ChildSpySalesDiscount object to remove.
     * @return $this|ChildSpySalesExpense The current object (for fluent API support)
     */
    public function removeDiscount(ChildSpySalesDiscount $discount)
    {
        if ($this->getDiscounts()->contains($discount)) {
            $pos = $this->collDiscounts->search($discount);
            $this->collDiscounts->remove($pos);
            if (null === $this->discountsScheduledForDeletion) {
                $this->discountsScheduledForDeletion = clone $this->collDiscounts;
                $this->discountsScheduledForDeletion->clear();
            }
            $this->discountsScheduledForDeletion[]= $discount;
            $discount->setExpense(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpySalesExpense is new, it will return
     * an empty collection; or if this SpySalesExpense has previously
     * been saved, it will retrieve related Discounts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpySalesExpense.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpySalesDiscount[] List of ChildSpySalesDiscount objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpySalesDiscount}> List of ChildSpySalesDiscount objects
     */
    public function getDiscountsJoinOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpySalesDiscountQuery::create(null, $criteria);
        $query->joinWith('Order', $joinBehavior);

        return $this->getDiscounts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpySalesExpense is new, it will return
     * an empty collection; or if this SpySalesExpense has previously
     * been saved, it will retrieve related Discounts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpySalesExpense.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpySalesDiscount[] List of ChildSpySalesDiscount objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpySalesDiscount}> List of ChildSpySalesDiscount objects
     */
    public function getDiscountsJoinOrderItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpySalesDiscountQuery::create(null, $criteria);
        $query->joinWith('OrderItem', $joinBehavior);

        return $this->getDiscounts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpySalesExpense is new, it will return
     * an empty collection; or if this SpySalesExpense has previously
     * been saved, it will retrieve related Discounts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpySalesExpense.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpySalesDiscount[] List of ChildSpySalesDiscount objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpySalesDiscount}> List of ChildSpySalesDiscount objects
     */
    public function getDiscountsJoinOption(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpySalesDiscountQuery::create(null, $criteria);
        $query->joinWith('Option', $joinBehavior);

        return $this->getDiscounts($query, $con);
    }

    /**
     * Clears out the collSpySalesShipments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpySalesShipments()
     */
    public function clearSpySalesShipments()
    {
        $this->collSpySalesShipments = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpySalesShipments collection loaded partially.
     */
    public function resetPartialSpySalesShipments($v = true)
    {
        $this->collSpySalesShipmentsPartial = $v;
    }

    /**
     * Initializes the collSpySalesShipments collection.
     *
     * By default this just sets the collSpySalesShipments collection to an empty array (like clearcollSpySalesShipments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpySalesShipments($overrideExisting = true)
    {
        if (null !== $this->collSpySalesShipments && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpySalesShipmentTableMap::getTableMap()->getCollectionClassName();

        $this->collSpySalesShipments = new $collectionClassName;
        $this->collSpySalesShipments->setModel('\Orm\Zed\Sales\Persistence\SpySalesShipment');
    }

    /**
     * Gets an array of ChildSpySalesShipment objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpySalesExpense is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpySalesShipment[] List of ChildSpySalesShipment objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpySalesShipment> List of ChildSpySalesShipment objects
     * @throws PropelException
     */
    public function getSpySalesShipments(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpySalesShipmentsPartial && !$this->isNew();
        if (null === $this->collSpySalesShipments || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpySalesShipments) {
                    $this->initSpySalesShipments();
                } else {
                    $collectionClassName = SpySalesShipmentTableMap::getTableMap()->getCollectionClassName();

                    $collSpySalesShipments = new $collectionClassName;
                    $collSpySalesShipments->setModel('\Orm\Zed\Sales\Persistence\SpySalesShipment');

                    return $collSpySalesShipments;
                }
            } else {
                $collSpySalesShipments = ChildSpySalesShipmentQuery::create(null, $criteria)
                    ->filterByExpense($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpySalesShipmentsPartial && count($collSpySalesShipments)) {
                        $this->initSpySalesShipments(false);

                        foreach ($collSpySalesShipments as $obj) {
                            if (false == $this->collSpySalesShipments->contains($obj)) {
                                $this->collSpySalesShipments->append($obj);
                            }
                        }

                        $this->collSpySalesShipmentsPartial = true;
                    }

                    return $collSpySalesShipments;
                }

                if ($partial && $this->collSpySalesShipments) {
                    foreach ($this->collSpySalesShipments as $obj) {
                        if ($obj->isNew()) {
                            $collSpySalesShipments[] = $obj;
                        }
                    }
                }

                $this->collSpySalesShipments = $collSpySalesShipments;
                $this->collSpySalesShipmentsPartial = false;
            }
        }

        return $this->collSpySalesShipments;
    }

    /**
     * Sets a collection of ChildSpySalesShipment objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spySalesShipments A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpySalesExpense The current object (for fluent API support)
     */
    public function setSpySalesShipments(Collection $spySalesShipments, ConnectionInterface $con = null)
    {
        /** @var ChildSpySalesShipment[] $spySalesShipmentsToDelete */
        $spySalesShipmentsToDelete = $this->getSpySalesShipments(new Criteria(), $con)->diff($spySalesShipments);


        $this->spySalesShipmentsScheduledForDeletion = $spySalesShipmentsToDelete;

        foreach ($spySalesShipmentsToDelete as $spySalesShipmentRemoved) {
            $spySalesShipmentRemoved->setExpense(null);
        }

        $this->collSpySalesShipments = null;
        foreach ($spySalesShipments as $spySalesShipment) {
            $this->addSpySalesShipment($spySalesShipment);
        }

        $this->collSpySalesShipments = $spySalesShipments;
        $this->collSpySalesShipmentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpySalesShipment objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpySalesShipment objects.
     * @throws PropelException
     */
    public function countSpySalesShipments(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpySalesShipmentsPartial && !$this->isNew();
        if (null === $this->collSpySalesShipments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpySalesShipments) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpySalesShipments());
            }

            $query = ChildSpySalesShipmentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpense($this)
                ->count($con);
        }

        return count($this->collSpySalesShipments);
    }

    /**
     * Method called to associate a ChildSpySalesShipment object to this object
     * through the ChildSpySalesShipment foreign key attribute.
     *
     * @param  ChildSpySalesShipment $l ChildSpySalesShipment
     * @return $this|\Orm\Zed\Sales\Persistence\SpySalesExpense The current object (for fluent API support)
     */
    public function addSpySalesShipment(ChildSpySalesShipment $l)
    {
        if ($this->collSpySalesShipments === null) {
            $this->initSpySalesShipments();
            $this->collSpySalesShipmentsPartial = true;
        }

        if (!$this->collSpySalesShipments->contains($l)) {
            $this->doAddSpySalesShipment($l);

            if ($this->spySalesShipmentsScheduledForDeletion and $this->spySalesShipmentsScheduledForDeletion->contains($l)) {
                $this->spySalesShipmentsScheduledForDeletion->remove($this->spySalesShipmentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpySalesShipment $spySalesShipment The ChildSpySalesShipment object to add.
     */
    protected function doAddSpySalesShipment(ChildSpySalesShipment $spySalesShipment)
    {
        $this->collSpySalesShipments[]= $spySalesShipment;
        $spySalesShipment->setExpense($this);
    }

    /**
     * @param  ChildSpySalesShipment $spySalesShipment The ChildSpySalesShipment object to remove.
     * @return $this|ChildSpySalesExpense The current object (for fluent API support)
     */
    public function removeSpySalesShipment(ChildSpySalesShipment $spySalesShipment)
    {
        if ($this->getSpySalesShipments()->contains($spySalesShipment)) {
            $pos = $this->collSpySalesShipments->search($spySalesShipment);
            $this->collSpySalesShipments->remove($pos);
            if (null === $this->spySalesShipmentsScheduledForDeletion) {
                $this->spySalesShipmentsScheduledForDeletion = clone $this->collSpySalesShipments;
                $this->spySalesShipmentsScheduledForDeletion->clear();
            }
            $this->spySalesShipmentsScheduledForDeletion[]= $spySalesShipment;
            $spySalesShipment->setExpense(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpySalesExpense is new, it will return
     * an empty collection; or if this SpySalesExpense has previously
     * been saved, it will retrieve related SpySalesShipments from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpySalesExpense.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpySalesShipment[] List of ChildSpySalesShipment objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpySalesShipment}> List of ChildSpySalesShipment objects
     */
    public function getSpySalesShipmentsJoinOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpySalesShipmentQuery::create(null, $criteria);
        $query->joinWith('Order', $joinBehavior);

        return $this->getSpySalesShipments($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpySalesExpense is new, it will return
     * an empty collection; or if this SpySalesExpense has previously
     * been saved, it will retrieve related SpySalesShipments from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpySalesExpense.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpySalesShipment[] List of ChildSpySalesShipment objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpySalesShipment}> List of ChildSpySalesShipment objects
     */
    public function getSpySalesShipmentsJoinSpySalesOrderAddress(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpySalesShipmentQuery::create(null, $criteria);
        $query->joinWith('SpySalesOrderAddress', $joinBehavior);

        return $this->getSpySalesShipments($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aOrder) {
            $this->aOrder->removeExpense($this);
        }
        $this->id_sales_expense = null;
        $this->fk_sales_order = null;
        $this->canceled_amount = null;
        $this->discount_amount_aggregation = null;
        $this->gross_price = null;
        $this->name = null;
        $this->net_price = null;
        $this->price = null;
        $this->price_to_pay_aggregation = null;
        $this->refundable_amount = null;
        $this->tax_amount = null;
        $this->tax_amount_after_cancellation = null;
        $this->tax_rate = null;
        $this->type = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collDiscounts) {
                foreach ($this->collDiscounts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpySalesShipments) {
                foreach ($this->collSpySalesShipments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collDiscounts = null;
        $this->collSpySalesShipments = null;
        $this->aOrder = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpySalesExpenseTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpySalesExpense The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpySalesExpenseTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
            }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
            }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
