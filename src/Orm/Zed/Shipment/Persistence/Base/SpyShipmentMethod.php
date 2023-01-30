<?php

namespace Orm\Zed\Shipment\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Shipment\Persistence\SpyShipmentCarrier as ChildSpyShipmentCarrier;
use Orm\Zed\Shipment\Persistence\SpyShipmentCarrierQuery as ChildSpyShipmentCarrierQuery;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethod as ChildSpyShipmentMethod;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice as ChildSpyShipmentMethodPrice;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery as ChildSpyShipmentMethodPriceQuery;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery as ChildSpyShipmentMethodQuery;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore as ChildSpyShipmentMethodStore;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery as ChildSpyShipmentMethodStoreQuery;
use Orm\Zed\Shipment\Persistence\Map\SpyShipmentMethodPriceTableMap;
use Orm\Zed\Shipment\Persistence\Map\SpyShipmentMethodStoreTableMap;
use Orm\Zed\Shipment\Persistence\Map\SpyShipmentMethodTableMap;
use Orm\Zed\Tax\Persistence\SpyTaxSet;
use Orm\Zed\Tax\Persistence\SpyTaxSetQuery;
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

/**
 * Base class that represents a row from the 'spy_shipment_method' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Shipment.Persistence.Base
 */
abstract class SpyShipmentMethod implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Shipment\\Persistence\\Map\\SpyShipmentMethodTableMap';


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
     * The value for the id_shipment_method field.
     *
     * @var        int
     */
    protected $id_shipment_method;

    /**
     * The value for the fk_shipment_carrier field.
     *
     * @var        int
     */
    protected $fk_shipment_carrier;

    /**
     * The value for the fk_tax_set field.
     *
     * @var        int|null
     */
    protected $fk_tax_set;

    /**
     * The value for the availability_plugin field.
     *
     * @var        string|null
     */
    protected $availability_plugin;

    /**
     * The value for the default_price field.
     * Deprecated
     * @var        int|null
     */
    protected $default_price;

    /**
     * The value for the delivery_time_plugin field.
     *
     * @var        string|null
     */
    protected $delivery_time_plugin;

    /**
     * The value for the is_active field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $is_active;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the price_plugin field.
     *
     * @var        string|null
     */
    protected $price_plugin;

    /**
     * The value for the shipment_method_key field.
     *
     * @var        string|null
     */
    protected $shipment_method_key;

    /**
     * @var        ChildSpyShipmentCarrier
     */
    protected $aShipmentCarrier;

    /**
     * @var        SpyTaxSet
     */
    protected $aTaxSet;

    /**
     * @var        ObjectCollection|ChildSpyShipmentMethodPrice[] Collection to store aggregation of ChildSpyShipmentMethodPrice objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShipmentMethodPrice> Collection to store aggregation of ChildSpyShipmentMethodPrice objects.
     */
    protected $collShipmentMethodPrices;
    protected $collShipmentMethodPricesPartial;

    /**
     * @var        ObjectCollection|ChildSpyShipmentMethodStore[] Collection to store aggregation of ChildSpyShipmentMethodStore objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShipmentMethodStore> Collection to store aggregation of ChildSpyShipmentMethodStore objects.
     */
    protected $collShipmentMethodStores;
    protected $collShipmentMethodStoresPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyShipmentMethodPrice[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShipmentMethodPrice>
     */
    protected $shipmentMethodPricesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyShipmentMethodStore[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShipmentMethodStore>
     */
    protected $shipmentMethodStoresScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_active = true;
    }

    /**
     * Initializes internal state of Orm\Zed\Shipment\Persistence\Base\SpyShipmentMethod object.
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
     * Compares this with another <code>SpyShipmentMethod</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyShipmentMethod</code>, delegates to
     * <code>equals(SpyShipmentMethod)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_shipment_method] column value.
     *
     * @return int
     */
    public function getIdShipmentMethod()
    {
        return $this->id_shipment_method;
    }

    /**
     * Get the [fk_shipment_carrier] column value.
     *
     * @return int
     */
    public function getFkShipmentCarrier()
    {
        return $this->fk_shipment_carrier;
    }

    /**
     * Get the [fk_tax_set] column value.
     *
     * @return int|null
     */
    public function getFkTaxSet()
    {
        return $this->fk_tax_set;
    }

    /**
     * Get the [availability_plugin] column value.
     *
     * @return string|null
     */
    public function getAvailabilityPlugin()
    {
        return $this->availability_plugin;
    }

    /**
     * Get the [default_price] column value.
     * Deprecated
     * @return int|null
     */
    public function getDefaultPrice()
    {
        return $this->default_price;
    }

    /**
     * Get the [delivery_time_plugin] column value.
     *
     * @return string|null
     */
    public function getDeliveryTimePlugin()
    {
        return $this->delivery_time_plugin;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean
     */
    public function isActive()
    {
        return $this->getIsActive();
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [price_plugin] column value.
     *
     * @return string|null
     */
    public function getPricePlugin()
    {
        return $this->price_plugin;
    }

    /**
     * Get the [shipment_method_key] column value.
     *
     * @return string|null
     */
    public function getShipmentMethodKey()
    {
        return $this->shipment_method_key;
    }

    /**
     * Set the value of [id_shipment_method] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setIdShipmentMethod($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_shipment_method !== $v) {
            $this->id_shipment_method = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD] = true;
        }

        return $this;
    } // setIdShipmentMethod()

    /**
     * Set the value of [fk_shipment_carrier] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setFkShipmentCarrier($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_shipment_carrier !== $v) {
            $this->fk_shipment_carrier = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER] = true;
        }

        if ($this->aShipmentCarrier !== null && $this->aShipmentCarrier->getIdShipmentCarrier() !== $v) {
            $this->aShipmentCarrier = null;
        }

        return $this;
    } // setFkShipmentCarrier()

    /**
     * Set the value of [fk_tax_set] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setFkTaxSet($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_tax_set !== $v) {
            $this->fk_tax_set = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_FK_TAX_SET] = true;
        }

        if ($this->aTaxSet !== null && $this->aTaxSet->getIdTaxSet() !== $v) {
            $this->aTaxSet = null;
        }

        return $this;
    } // setFkTaxSet()

    /**
     * Set the value of [availability_plugin] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setAvailabilityPlugin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->availability_plugin !== $v) {
            $this->availability_plugin = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN] = true;
        }

        return $this;
    } // setAvailabilityPlugin()

    /**
     * Set the value of [default_price] column.
     * Deprecated
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setDefaultPrice($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->default_price !== $v) {
            $this->default_price = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_DEFAULT_PRICE] = true;
        }

        return $this;
    } // setDefaultPrice()

    /**
     * Set the value of [delivery_time_plugin] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setDeliveryTimePlugin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->delivery_time_plugin !== $v) {
            $this->delivery_time_plugin = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN] = true;
        }

        return $this;
    } // setDeliveryTimePlugin()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setIsActive($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (bool) $v;
            }
        }

        $allowNullValues = false;

        if ($v === null && !$allowNullValues) {
            return $this;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->is_active !== $v) {
            $this->is_active = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_IS_ACTIVE] = true;
        }

        return $this;
    } // setIsActive()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
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
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [price_plugin] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setPricePlugin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->price_plugin !== $v) {
            $this->price_plugin = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_PRICE_PLUGIN] = true;
        }

        return $this;
    } // setPricePlugin()

    /**
     * Set the value of [shipment_method_key] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function setShipmentMethodKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->shipment_method_key !== $v) {
            $this->shipment_method_key = $v;
            $this->modifiedColumns[SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY] = true;
        }

        return $this;
    } // setShipmentMethodKey()

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
            if ($this->is_active !== true) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyShipmentMethodTableMap::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_shipment_method = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyShipmentMethodTableMap::translateFieldName('FkShipmentCarrier', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_shipment_carrier = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyShipmentMethodTableMap::translateFieldName('FkTaxSet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_tax_set = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyShipmentMethodTableMap::translateFieldName('AvailabilityPlugin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->availability_plugin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyShipmentMethodTableMap::translateFieldName('DefaultPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->default_price = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyShipmentMethodTableMap::translateFieldName('DeliveryTimePlugin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->delivery_time_plugin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyShipmentMethodTableMap::translateFieldName('IsActive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_active = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyShipmentMethodTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyShipmentMethodTableMap::translateFieldName('PricePlugin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price_plugin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SpyShipmentMethodTableMap::translateFieldName('ShipmentMethodKey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipment_method_key = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = SpyShipmentMethodTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethod'), 0, $e);
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
        if ($this->aShipmentCarrier !== null && $this->fk_shipment_carrier !== $this->aShipmentCarrier->getIdShipmentCarrier()) {
            $this->aShipmentCarrier = null;
        }
        if ($this->aTaxSet !== null && $this->fk_tax_set !== $this->aTaxSet->getIdTaxSet()) {
            $this->aTaxSet = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyShipmentMethodTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyShipmentMethodQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aShipmentCarrier = null;
            $this->aTaxSet = null;
            $this->collShipmentMethodPrices = null;

            $this->collShipmentMethodStores = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyShipmentMethod::setDeleted()
     * @see SpyShipmentMethod::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShipmentMethodTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyShipmentMethodQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShipmentMethodTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                SpyShipmentMethodTableMap::addInstanceToPool($this);
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

            if ($this->aShipmentCarrier !== null) {
                if ($this->aShipmentCarrier->isModified() || $this->aShipmentCarrier->isNew()) {
                    $affectedRows += $this->aShipmentCarrier->save($con);
                }
                $this->setShipmentCarrier($this->aShipmentCarrier);
            }

            if ($this->aTaxSet !== null) {
                if ($this->aTaxSet->isModified() || $this->aTaxSet->isNew()) {
                    $affectedRows += $this->aTaxSet->save($con);
                }
                $this->setTaxSet($this->aTaxSet);
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

            if ($this->shipmentMethodPricesScheduledForDeletion !== null) {
                if (!$this->shipmentMethodPricesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery::create()
                        ->filterByPrimaryKeys($this->shipmentMethodPricesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->shipmentMethodPricesScheduledForDeletion = null;
                }
            }

            if ($this->collShipmentMethodPrices !== null) {
                foreach ($this->collShipmentMethodPrices as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->shipmentMethodStoresScheduledForDeletion !== null) {
                if (!$this->shipmentMethodStoresScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery::create()
                        ->filterByPrimaryKeys($this->shipmentMethodStoresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->shipmentMethodStoresScheduledForDeletion = null;
                }
            }

            if ($this->collShipmentMethodStores !== null) {
                foreach ($this->collShipmentMethodStores as $referrerFK) {
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

        $this->modifiedColumns[SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD] = true;
        if (null !== $this->id_shipment_method) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD)) {
            $modifiedColumns[':p' . $index++]  = '`id_shipment_method`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER)) {
            $modifiedColumns[':p' . $index++]  = '`fk_shipment_carrier`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_FK_TAX_SET)) {
            $modifiedColumns[':p' . $index++]  = '`fk_tax_set`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN)) {
            $modifiedColumns[':p' . $index++]  = '`availability_plugin`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_DEFAULT_PRICE)) {
            $modifiedColumns[':p' . $index++]  = '`default_price`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN)) {
            $modifiedColumns[':p' . $index++]  = '`delivery_time_plugin`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`is_active`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_PRICE_PLUGIN)) {
            $modifiedColumns[':p' . $index++]  = '`price_plugin`';
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`shipment_method_key`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_shipment_method` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_shipment_method`':
                        $stmt->bindValue($identifier, $this->id_shipment_method, PDO::PARAM_INT);
                        break;
                    case '`fk_shipment_carrier`':
                        $stmt->bindValue($identifier, $this->fk_shipment_carrier, PDO::PARAM_INT);
                        break;
                    case '`fk_tax_set`':
                        $stmt->bindValue($identifier, $this->fk_tax_set, PDO::PARAM_INT);
                        break;
                    case '`availability_plugin`':
                        $stmt->bindValue($identifier, $this->availability_plugin, PDO::PARAM_STR);
                        break;
                    case '`default_price`':
                        $stmt->bindValue($identifier, $this->default_price, PDO::PARAM_INT);
                        break;
                    case '`delivery_time_plugin`':
                        $stmt->bindValue($identifier, $this->delivery_time_plugin, PDO::PARAM_STR);
                        break;
                    case '`is_active`':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`price_plugin`':
                        $stmt->bindValue($identifier, $this->price_plugin, PDO::PARAM_STR);
                        break;
                    case '`shipment_method_key`':
                        $stmt->bindValue($identifier, $this->shipment_method_key, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_shipment_method_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdShipmentMethod($pk);

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
        $pos = SpyShipmentMethodTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdShipmentMethod();
                break;
            case 1:
                return $this->getFkShipmentCarrier();
                break;
            case 2:
                return $this->getFkTaxSet();
                break;
            case 3:
                return $this->getAvailabilityPlugin();
                break;
            case 4:
                return $this->getDefaultPrice();
                break;
            case 5:
                return $this->getDeliveryTimePlugin();
                break;
            case 6:
                return $this->getIsActive();
                break;
            case 7:
                return $this->getName();
                break;
            case 8:
                return $this->getPricePlugin();
                break;
            case 9:
                return $this->getShipmentMethodKey();
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

        if (isset($alreadyDumpedObjects['SpyShipmentMethod'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyShipmentMethod'][$this->hashCode()] = true;
        $keys = SpyShipmentMethodTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdShipmentMethod(),
            $keys[1] => $this->getFkShipmentCarrier(),
            $keys[2] => $this->getFkTaxSet(),
            $keys[3] => $this->getAvailabilityPlugin(),
            $keys[4] => $this->getDefaultPrice(),
            $keys[5] => $this->getDeliveryTimePlugin(),
            $keys[6] => $this->getIsActive(),
            $keys[7] => $this->getName(),
            $keys[8] => $this->getPricePlugin(),
            $keys[9] => $this->getShipmentMethodKey(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aShipmentCarrier) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShipmentCarrier';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shipment_carrier';
                        break;
                    default:
                        $key = 'ShipmentCarrier';
                }

                $result[$key] = $this->aShipmentCarrier->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTaxSet) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyTaxSet';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_tax_set';
                        break;
                    default:
                        $key = 'TaxSet';
                }

                $result[$key] = $this->aTaxSet->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collShipmentMethodPrices) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShipmentMethodPrices';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shipment_method_prices';
                        break;
                    default:
                        $key = 'ShipmentMethodPrices';
                }

                $result[$key] = $this->collShipmentMethodPrices->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collShipmentMethodStores) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShipmentMethodStores';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shipment_method_stores';
                        break;
                    default:
                        $key = 'ShipmentMethodStores';
                }

                $result[$key] = $this->collShipmentMethodStores->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyShipmentMethodTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdShipmentMethod($value);
                break;
            case 1:
                $this->setFkShipmentCarrier($value);
                break;
            case 2:
                $this->setFkTaxSet($value);
                break;
            case 3:
                $this->setAvailabilityPlugin($value);
                break;
            case 4:
                $this->setDefaultPrice($value);
                break;
            case 5:
                $this->setDeliveryTimePlugin($value);
                break;
            case 6:
                $this->setIsActive($value);
                break;
            case 7:
                $this->setName($value);
                break;
            case 8:
                $this->setPricePlugin($value);
                break;
            case 9:
                $this->setShipmentMethodKey($value);
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
     * @return     $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyShipmentMethodTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdShipmentMethod($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkShipmentCarrier($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkTaxSet($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setAvailabilityPlugin($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDefaultPrice($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setDeliveryTimePlugin($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIsActive($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setName($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPricePlugin($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setShipmentMethodKey($arr[$keys[9]]);
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
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object, for fluid interface
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
        $criteria = new Criteria(SpyShipmentMethodTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD, $this->id_shipment_method);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER, $this->fk_shipment_carrier);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_FK_TAX_SET)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_FK_TAX_SET, $this->fk_tax_set);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN, $this->availability_plugin);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_DEFAULT_PRICE)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_DEFAULT_PRICE, $this->default_price);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN, $this->delivery_time_plugin);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_IS_ACTIVE)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_IS_ACTIVE, $this->is_active);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_NAME)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_PRICE_PLUGIN)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_PRICE_PLUGIN, $this->price_plugin);
        }
        if ($this->isColumnModified(SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY)) {
            $criteria->add(SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY, $this->shipment_method_key);
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
        $criteria = ChildSpyShipmentMethodQuery::create();
        $criteria->add(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD, $this->id_shipment_method);

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
        $validPk = null !== $this->getIdShipmentMethod();

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
        return $this->getIdShipmentMethod();
    }

    /**
     * Generic method to set the primary key (id_shipment_method column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdShipmentMethod($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdShipmentMethod();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Shipment\Persistence\SpyShipmentMethod (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkShipmentCarrier($this->getFkShipmentCarrier());
        $copyObj->setFkTaxSet($this->getFkTaxSet());
        $copyObj->setAvailabilityPlugin($this->getAvailabilityPlugin());
        $copyObj->setDefaultPrice($this->getDefaultPrice());
        $copyObj->setDeliveryTimePlugin($this->getDeliveryTimePlugin());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setName($this->getName());
        $copyObj->setPricePlugin($this->getPricePlugin());
        $copyObj->setShipmentMethodKey($this->getShipmentMethodKey());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getShipmentMethodPrices() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addShipmentMethodPrice($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getShipmentMethodStores() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addShipmentMethodStore($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdShipmentMethod(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethod Clone of current object.
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
     * Declares an association between this object and a ChildSpyShipmentCarrier object.
     *
     * @param  ChildSpyShipmentCarrier $v
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     * @throws PropelException
     */
    public function setShipmentCarrier(ChildSpyShipmentCarrier $v = null)
    {
        if ($v === null) {
            $this->setFkShipmentCarrier(NULL);
        } else {
            $this->setFkShipmentCarrier($v->getIdShipmentCarrier());
        }

        $this->aShipmentCarrier = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyShipmentCarrier object, it will not be re-added.
        if ($v !== null) {
            $v->addShipmentMethods($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyShipmentCarrier object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyShipmentCarrier The associated ChildSpyShipmentCarrier object.
     * @throws PropelException
     */
    public function getShipmentCarrier(ConnectionInterface $con = null)
    {
        if ($this->aShipmentCarrier === null && ($this->fk_shipment_carrier != 0)) {
            $this->aShipmentCarrier = ChildSpyShipmentCarrierQuery::create()->findPk($this->fk_shipment_carrier, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aShipmentCarrier->addShipmentMethodss($this);
             */
        }

        return $this->aShipmentCarrier;
    }

    /**
     * Declares an association between this object and a SpyTaxSet object.
     *
     * @param  SpyTaxSet|null $v
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTaxSet(SpyTaxSet $v = null)
    {
        if ($v === null) {
            $this->setFkTaxSet(NULL);
        } else {
            $this->setFkTaxSet($v->getIdTaxSet());
        }

        $this->aTaxSet = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyTaxSet object, it will not be re-added.
        if ($v !== null) {
            $v->addShipmentMethods($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyTaxSet object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyTaxSet|null The associated SpyTaxSet object.
     * @throws PropelException
     */
    public function getTaxSet(ConnectionInterface $con = null)
    {
        if ($this->aTaxSet === null && ($this->fk_tax_set != 0)) {
            $this->aTaxSet = SpyTaxSetQuery::create()->findPk($this->fk_tax_set, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTaxSet->addShipmentMethodss($this);
             */
        }

        return $this->aTaxSet;
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
        if ('ShipmentMethodPrice' === $relationName) {
            $this->initShipmentMethodPrices();
            return;
        }
        if ('ShipmentMethodStore' === $relationName) {
            $this->initShipmentMethodStores();
            return;
        }
    }

    /**
     * Clears out the collShipmentMethodPrices collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addShipmentMethodPrices()
     */
    public function clearShipmentMethodPrices()
    {
        $this->collShipmentMethodPrices = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collShipmentMethodPrices collection loaded partially.
     */
    public function resetPartialShipmentMethodPrices($v = true)
    {
        $this->collShipmentMethodPricesPartial = $v;
    }

    /**
     * Initializes the collShipmentMethodPrices collection.
     *
     * By default this just sets the collShipmentMethodPrices collection to an empty array (like clearcollShipmentMethodPrices());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initShipmentMethodPrices($overrideExisting = true)
    {
        if (null !== $this->collShipmentMethodPrices && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShipmentMethodPriceTableMap::getTableMap()->getCollectionClassName();

        $this->collShipmentMethodPrices = new $collectionClassName;
        $this->collShipmentMethodPrices->setModel('\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice');
    }

    /**
     * Gets an array of ChildSpyShipmentMethodPrice objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyShipmentMethod is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyShipmentMethodPrice[] List of ChildSpyShipmentMethodPrice objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShipmentMethodPrice> List of ChildSpyShipmentMethodPrice objects
     * @throws PropelException
     */
    public function getShipmentMethodPrices(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collShipmentMethodPricesPartial && !$this->isNew();
        if (null === $this->collShipmentMethodPrices || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collShipmentMethodPrices) {
                    $this->initShipmentMethodPrices();
                } else {
                    $collectionClassName = SpyShipmentMethodPriceTableMap::getTableMap()->getCollectionClassName();

                    $collShipmentMethodPrices = new $collectionClassName;
                    $collShipmentMethodPrices->setModel('\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice');

                    return $collShipmentMethodPrices;
                }
            } else {
                $collShipmentMethodPrices = ChildSpyShipmentMethodPriceQuery::create(null, $criteria)
                    ->filterByShipmentMethod($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collShipmentMethodPricesPartial && count($collShipmentMethodPrices)) {
                        $this->initShipmentMethodPrices(false);

                        foreach ($collShipmentMethodPrices as $obj) {
                            if (false == $this->collShipmentMethodPrices->contains($obj)) {
                                $this->collShipmentMethodPrices->append($obj);
                            }
                        }

                        $this->collShipmentMethodPricesPartial = true;
                    }

                    return $collShipmentMethodPrices;
                }

                if ($partial && $this->collShipmentMethodPrices) {
                    foreach ($this->collShipmentMethodPrices as $obj) {
                        if ($obj->isNew()) {
                            $collShipmentMethodPrices[] = $obj;
                        }
                    }
                }

                $this->collShipmentMethodPrices = $collShipmentMethodPrices;
                $this->collShipmentMethodPricesPartial = false;
            }
        }

        return $this->collShipmentMethodPrices;
    }

    /**
     * Sets a collection of ChildSpyShipmentMethodPrice objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $shipmentMethodPrices A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyShipmentMethod The current object (for fluent API support)
     */
    public function setShipmentMethodPrices(Collection $shipmentMethodPrices, ConnectionInterface $con = null)
    {
        /** @var ChildSpyShipmentMethodPrice[] $shipmentMethodPricesToDelete */
        $shipmentMethodPricesToDelete = $this->getShipmentMethodPrices(new Criteria(), $con)->diff($shipmentMethodPrices);


        $this->shipmentMethodPricesScheduledForDeletion = $shipmentMethodPricesToDelete;

        foreach ($shipmentMethodPricesToDelete as $shipmentMethodPriceRemoved) {
            $shipmentMethodPriceRemoved->setShipmentMethod(null);
        }

        $this->collShipmentMethodPrices = null;
        foreach ($shipmentMethodPrices as $shipmentMethodPrice) {
            $this->addShipmentMethodPrice($shipmentMethodPrice);
        }

        $this->collShipmentMethodPrices = $shipmentMethodPrices;
        $this->collShipmentMethodPricesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyShipmentMethodPrice objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyShipmentMethodPrice objects.
     * @throws PropelException
     */
    public function countShipmentMethodPrices(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collShipmentMethodPricesPartial && !$this->isNew();
        if (null === $this->collShipmentMethodPrices || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collShipmentMethodPrices) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getShipmentMethodPrices());
            }

            $query = ChildSpyShipmentMethodPriceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByShipmentMethod($this)
                ->count($con);
        }

        return count($this->collShipmentMethodPrices);
    }

    /**
     * Method called to associate a ChildSpyShipmentMethodPrice object to this object
     * through the ChildSpyShipmentMethodPrice foreign key attribute.
     *
     * @param  ChildSpyShipmentMethodPrice $l ChildSpyShipmentMethodPrice
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function addShipmentMethodPrice(ChildSpyShipmentMethodPrice $l)
    {
        if ($this->collShipmentMethodPrices === null) {
            $this->initShipmentMethodPrices();
            $this->collShipmentMethodPricesPartial = true;
        }

        if (!$this->collShipmentMethodPrices->contains($l)) {
            $this->doAddShipmentMethodPrice($l);

            if ($this->shipmentMethodPricesScheduledForDeletion and $this->shipmentMethodPricesScheduledForDeletion->contains($l)) {
                $this->shipmentMethodPricesScheduledForDeletion->remove($this->shipmentMethodPricesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyShipmentMethodPrice $shipmentMethodPrice The ChildSpyShipmentMethodPrice object to add.
     */
    protected function doAddShipmentMethodPrice(ChildSpyShipmentMethodPrice $shipmentMethodPrice)
    {
        $this->collShipmentMethodPrices[]= $shipmentMethodPrice;
        $shipmentMethodPrice->setShipmentMethod($this);
    }

    /**
     * @param  ChildSpyShipmentMethodPrice $shipmentMethodPrice The ChildSpyShipmentMethodPrice object to remove.
     * @return $this|ChildSpyShipmentMethod The current object (for fluent API support)
     */
    public function removeShipmentMethodPrice(ChildSpyShipmentMethodPrice $shipmentMethodPrice)
    {
        if ($this->getShipmentMethodPrices()->contains($shipmentMethodPrice)) {
            $pos = $this->collShipmentMethodPrices->search($shipmentMethodPrice);
            $this->collShipmentMethodPrices->remove($pos);
            if (null === $this->shipmentMethodPricesScheduledForDeletion) {
                $this->shipmentMethodPricesScheduledForDeletion = clone $this->collShipmentMethodPrices;
                $this->shipmentMethodPricesScheduledForDeletion->clear();
            }
            $this->shipmentMethodPricesScheduledForDeletion[]= clone $shipmentMethodPrice;
            $shipmentMethodPrice->setShipmentMethod(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShipmentMethod is new, it will return
     * an empty collection; or if this SpyShipmentMethod has previously
     * been saved, it will retrieve related ShipmentMethodPrices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShipmentMethod.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShipmentMethodPrice[] List of ChildSpyShipmentMethodPrice objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShipmentMethodPrice}> List of ChildSpyShipmentMethodPrice objects
     */
    public function getShipmentMethodPricesJoinCurrency(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShipmentMethodPriceQuery::create(null, $criteria);
        $query->joinWith('Currency', $joinBehavior);

        return $this->getShipmentMethodPrices($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShipmentMethod is new, it will return
     * an empty collection; or if this SpyShipmentMethod has previously
     * been saved, it will retrieve related ShipmentMethodPrices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShipmentMethod.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShipmentMethodPrice[] List of ChildSpyShipmentMethodPrice objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShipmentMethodPrice}> List of ChildSpyShipmentMethodPrice objects
     */
    public function getShipmentMethodPricesJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShipmentMethodPriceQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getShipmentMethodPrices($query, $con);
    }

    /**
     * Clears out the collShipmentMethodStores collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addShipmentMethodStores()
     */
    public function clearShipmentMethodStores()
    {
        $this->collShipmentMethodStores = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collShipmentMethodStores collection loaded partially.
     */
    public function resetPartialShipmentMethodStores($v = true)
    {
        $this->collShipmentMethodStoresPartial = $v;
    }

    /**
     * Initializes the collShipmentMethodStores collection.
     *
     * By default this just sets the collShipmentMethodStores collection to an empty array (like clearcollShipmentMethodStores());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initShipmentMethodStores($overrideExisting = true)
    {
        if (null !== $this->collShipmentMethodStores && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShipmentMethodStoreTableMap::getTableMap()->getCollectionClassName();

        $this->collShipmentMethodStores = new $collectionClassName;
        $this->collShipmentMethodStores->setModel('\Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore');
    }

    /**
     * Gets an array of ChildSpyShipmentMethodStore objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyShipmentMethod is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyShipmentMethodStore[] List of ChildSpyShipmentMethodStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShipmentMethodStore> List of ChildSpyShipmentMethodStore objects
     * @throws PropelException
     */
    public function getShipmentMethodStores(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collShipmentMethodStoresPartial && !$this->isNew();
        if (null === $this->collShipmentMethodStores || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collShipmentMethodStores) {
                    $this->initShipmentMethodStores();
                } else {
                    $collectionClassName = SpyShipmentMethodStoreTableMap::getTableMap()->getCollectionClassName();

                    $collShipmentMethodStores = new $collectionClassName;
                    $collShipmentMethodStores->setModel('\Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore');

                    return $collShipmentMethodStores;
                }
            } else {
                $collShipmentMethodStores = ChildSpyShipmentMethodStoreQuery::create(null, $criteria)
                    ->filterByShipmentMethod($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collShipmentMethodStoresPartial && count($collShipmentMethodStores)) {
                        $this->initShipmentMethodStores(false);

                        foreach ($collShipmentMethodStores as $obj) {
                            if (false == $this->collShipmentMethodStores->contains($obj)) {
                                $this->collShipmentMethodStores->append($obj);
                            }
                        }

                        $this->collShipmentMethodStoresPartial = true;
                    }

                    return $collShipmentMethodStores;
                }

                if ($partial && $this->collShipmentMethodStores) {
                    foreach ($this->collShipmentMethodStores as $obj) {
                        if ($obj->isNew()) {
                            $collShipmentMethodStores[] = $obj;
                        }
                    }
                }

                $this->collShipmentMethodStores = $collShipmentMethodStores;
                $this->collShipmentMethodStoresPartial = false;
            }
        }

        return $this->collShipmentMethodStores;
    }

    /**
     * Sets a collection of ChildSpyShipmentMethodStore objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $shipmentMethodStores A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyShipmentMethod The current object (for fluent API support)
     */
    public function setShipmentMethodStores(Collection $shipmentMethodStores, ConnectionInterface $con = null)
    {
        /** @var ChildSpyShipmentMethodStore[] $shipmentMethodStoresToDelete */
        $shipmentMethodStoresToDelete = $this->getShipmentMethodStores(new Criteria(), $con)->diff($shipmentMethodStores);


        $this->shipmentMethodStoresScheduledForDeletion = $shipmentMethodStoresToDelete;

        foreach ($shipmentMethodStoresToDelete as $shipmentMethodStoreRemoved) {
            $shipmentMethodStoreRemoved->setShipmentMethod(null);
        }

        $this->collShipmentMethodStores = null;
        foreach ($shipmentMethodStores as $shipmentMethodStore) {
            $this->addShipmentMethodStore($shipmentMethodStore);
        }

        $this->collShipmentMethodStores = $shipmentMethodStores;
        $this->collShipmentMethodStoresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyShipmentMethodStore objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyShipmentMethodStore objects.
     * @throws PropelException
     */
    public function countShipmentMethodStores(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collShipmentMethodStoresPartial && !$this->isNew();
        if (null === $this->collShipmentMethodStores || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collShipmentMethodStores) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getShipmentMethodStores());
            }

            $query = ChildSpyShipmentMethodStoreQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByShipmentMethod($this)
                ->count($con);
        }

        return count($this->collShipmentMethodStores);
    }

    /**
     * Method called to associate a ChildSpyShipmentMethodStore object to this object
     * through the ChildSpyShipmentMethodStore foreign key attribute.
     *
     * @param  ChildSpyShipmentMethodStore $l ChildSpyShipmentMethodStore
     * @return $this|\Orm\Zed\Shipment\Persistence\SpyShipmentMethod The current object (for fluent API support)
     */
    public function addShipmentMethodStore(ChildSpyShipmentMethodStore $l)
    {
        if ($this->collShipmentMethodStores === null) {
            $this->initShipmentMethodStores();
            $this->collShipmentMethodStoresPartial = true;
        }

        if (!$this->collShipmentMethodStores->contains($l)) {
            $this->doAddShipmentMethodStore($l);

            if ($this->shipmentMethodStoresScheduledForDeletion and $this->shipmentMethodStoresScheduledForDeletion->contains($l)) {
                $this->shipmentMethodStoresScheduledForDeletion->remove($this->shipmentMethodStoresScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyShipmentMethodStore $shipmentMethodStore The ChildSpyShipmentMethodStore object to add.
     */
    protected function doAddShipmentMethodStore(ChildSpyShipmentMethodStore $shipmentMethodStore)
    {
        $this->collShipmentMethodStores[]= $shipmentMethodStore;
        $shipmentMethodStore->setShipmentMethod($this);
    }

    /**
     * @param  ChildSpyShipmentMethodStore $shipmentMethodStore The ChildSpyShipmentMethodStore object to remove.
     * @return $this|ChildSpyShipmentMethod The current object (for fluent API support)
     */
    public function removeShipmentMethodStore(ChildSpyShipmentMethodStore $shipmentMethodStore)
    {
        if ($this->getShipmentMethodStores()->contains($shipmentMethodStore)) {
            $pos = $this->collShipmentMethodStores->search($shipmentMethodStore);
            $this->collShipmentMethodStores->remove($pos);
            if (null === $this->shipmentMethodStoresScheduledForDeletion) {
                $this->shipmentMethodStoresScheduledForDeletion = clone $this->collShipmentMethodStores;
                $this->shipmentMethodStoresScheduledForDeletion->clear();
            }
            $this->shipmentMethodStoresScheduledForDeletion[]= clone $shipmentMethodStore;
            $shipmentMethodStore->setShipmentMethod(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShipmentMethod is new, it will return
     * an empty collection; or if this SpyShipmentMethod has previously
     * been saved, it will retrieve related ShipmentMethodStores from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShipmentMethod.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShipmentMethodStore[] List of ChildSpyShipmentMethodStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShipmentMethodStore}> List of ChildSpyShipmentMethodStore objects
     */
    public function getShipmentMethodStoresJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShipmentMethodStoreQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getShipmentMethodStores($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aShipmentCarrier) {
            $this->aShipmentCarrier->removeShipmentMethods($this);
        }
        if (null !== $this->aTaxSet) {
            $this->aTaxSet->removeShipmentMethods($this);
        }
        $this->id_shipment_method = null;
        $this->fk_shipment_carrier = null;
        $this->fk_tax_set = null;
        $this->availability_plugin = null;
        $this->default_price = null;
        $this->delivery_time_plugin = null;
        $this->is_active = null;
        $this->name = null;
        $this->price_plugin = null;
        $this->shipment_method_key = null;
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
            if ($this->collShipmentMethodPrices) {
                foreach ($this->collShipmentMethodPrices as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collShipmentMethodStores) {
                foreach ($this->collShipmentMethodStores as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collShipmentMethodPrices = null;
        $this->collShipmentMethodStores = null;
        $this->aShipmentCarrier = null;
        $this->aTaxSet = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyShipmentMethodTableMap::DEFAULT_STRING_FORMAT);
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
