<?php

namespace Orm\Zed\Payment\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Payment\Persistence\SpyPaymentMethod as ChildSpyPaymentMethod;
use Orm\Zed\Payment\Persistence\SpyPaymentMethodQuery as ChildSpyPaymentMethodQuery;
use Orm\Zed\Payment\Persistence\SpyPaymentMethodStore as ChildSpyPaymentMethodStore;
use Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery as ChildSpyPaymentMethodStoreQuery;
use Orm\Zed\Payment\Persistence\SpyPaymentProvider as ChildSpyPaymentProvider;
use Orm\Zed\Payment\Persistence\SpyPaymentProviderQuery as ChildSpyPaymentProviderQuery;
use Orm\Zed\Payment\Persistence\Map\SpyPaymentMethodStoreTableMap;
use Orm\Zed\Payment\Persistence\Map\SpyPaymentMethodTableMap;
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
 * Base class that represents a row from the 'spy_payment_method' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Payment.Persistence.Base
 */
abstract class SpyPaymentMethod implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Payment\\Persistence\\Map\\SpyPaymentMethodTableMap';


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
     * The value for the id_payment_method field.
     *
     * @var        int
     */
    protected $id_payment_method;

    /**
     * The value for the fk_payment_provider field.
     *
     * @var        int
     */
    protected $fk_payment_provider;

    /**
     * The value for the group_name field.
     * Optional field, used only for AOP.
     * @var        string|null
     */
    protected $group_name;

    /**
     * The value for the is_active field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $is_active;

    /**
     * The value for the is_hidden field.
     * Optional field, used only for AOP.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_hidden;

    /**
     * The value for the label_name field.
     * Optional field, used only for AOP.
     * @var        string|null
     */
    protected $label_name;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the payment_authorization_endpoint field.
     * Optional field, used only for AOP.
     * @var        string|null
     */
    protected $payment_authorization_endpoint;

    /**
     * The value for the payment_method_key field.
     *
     * @var        string
     */
    protected $payment_method_key;

    /**
     * @var        ChildSpyPaymentProvider
     */
    protected $aSpyPaymentProvider;

    /**
     * @var        ObjectCollection|ChildSpyPaymentMethodStore[] Collection to store aggregation of ChildSpyPaymentMethodStore objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPaymentMethodStore> Collection to store aggregation of ChildSpyPaymentMethodStore objects.
     */
    protected $collSpyPaymentMethodStores;
    protected $collSpyPaymentMethodStoresPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyPaymentMethodStore[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPaymentMethodStore>
     */
    protected $spyPaymentMethodStoresScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_active = true;
        $this->is_hidden = false;
    }

    /**
     * Initializes internal state of Orm\Zed\Payment\Persistence\Base\SpyPaymentMethod object.
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
     * Compares this with another <code>SpyPaymentMethod</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyPaymentMethod</code>, delegates to
     * <code>equals(SpyPaymentMethod)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_payment_method] column value.
     *
     * @return int
     */
    public function getIdPaymentMethod()
    {
        return $this->id_payment_method;
    }

    /**
     * Get the [fk_payment_provider] column value.
     *
     * @return int
     */
    public function getFkPaymentProvider()
    {
        return $this->fk_payment_provider;
    }

    /**
     * Get the [group_name] column value.
     * Optional field, used only for AOP.
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->group_name;
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
     * Get the [is_hidden] column value.
     * Optional field, used only for AOP.
     * @return boolean
     */
    public function getIsHidden()
    {
        return $this->is_hidden;
    }

    /**
     * Get the [is_hidden] column value.
     * Optional field, used only for AOP.
     * @return boolean
     */
    public function isHidden()
    {
        return $this->getIsHidden();
    }

    /**
     * Get the [label_name] column value.
     * Optional field, used only for AOP.
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->label_name;
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
     * Get the [payment_authorization_endpoint] column value.
     * Optional field, used only for AOP.
     * @return string|null
     */
    public function getPaymentAuthorizationEndpoint()
    {
        return $this->payment_authorization_endpoint;
    }

    /**
     * Get the [payment_method_key] column value.
     *
     * @return string
     */
    public function getPaymentMethodKey()
    {
        return $this->payment_method_key;
    }

    /**
     * Set the value of [id_payment_method] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function setIdPaymentMethod($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_payment_method !== $v) {
            $this->id_payment_method = $v;
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD] = true;
        }

        return $this;
    } // setIdPaymentMethod()

    /**
     * Set the value of [fk_payment_provider] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function setFkPaymentProvider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_payment_provider !== $v) {
            $this->fk_payment_provider = $v;
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER] = true;
        }

        if ($this->aSpyPaymentProvider !== null && $this->aSpyPaymentProvider->getIdPaymentProvider() !== $v) {
            $this->aSpyPaymentProvider = null;
        }

        return $this;
    } // setFkPaymentProvider()

    /**
     * Set the value of [group_name] column.
     * Optional field, used only for AOP.
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function setGroupName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->group_name !== $v) {
            $this->group_name = $v;
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_GROUP_NAME] = true;
        }

        return $this;
    } // setGroupName()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
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
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_IS_ACTIVE] = true;
        }

        return $this;
    } // setIsActive()

    /**
     * Sets the value of the [is_hidden] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Optional field, used only for AOP.
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function setIsHidden($v)
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

        if (($this->isNew() && $hasDefaultValue) || $this->is_hidden !== $v) {
            $this->is_hidden = $v;
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_IS_HIDDEN] = true;
        }

        return $this;
    } // setIsHidden()

    /**
     * Set the value of [label_name] column.
     * Optional field, used only for AOP.
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function setLabelName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->label_name !== $v) {
            $this->label_name = $v;
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_LABEL_NAME] = true;
        }

        return $this;
    } // setLabelName()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
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
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [payment_authorization_endpoint] column.
     * Optional field, used only for AOP.
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function setPaymentAuthorizationEndpoint($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->payment_authorization_endpoint !== $v) {
            $this->payment_authorization_endpoint = $v;
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT] = true;
        }

        return $this;
    } // setPaymentAuthorizationEndpoint()

    /**
     * Set the value of [payment_method_key] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function setPaymentMethodKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->payment_method_key !== $v) {
            $this->payment_method_key = $v;
            $this->modifiedColumns[SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY] = true;
        }

        return $this;
    } // setPaymentMethodKey()

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

            if ($this->is_hidden !== false) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyPaymentMethodTableMap::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_payment_method = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyPaymentMethodTableMap::translateFieldName('FkPaymentProvider', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_payment_provider = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyPaymentMethodTableMap::translateFieldName('GroupName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->group_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyPaymentMethodTableMap::translateFieldName('IsActive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_active = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyPaymentMethodTableMap::translateFieldName('IsHidden', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_hidden = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyPaymentMethodTableMap::translateFieldName('LabelName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->label_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyPaymentMethodTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyPaymentMethodTableMap::translateFieldName('PaymentAuthorizationEndpoint', TableMap::TYPE_PHPNAME, $indexType)];
            $this->payment_authorization_endpoint = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyPaymentMethodTableMap::translateFieldName('PaymentMethodKey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->payment_method_key = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 9; // 9 = SpyPaymentMethodTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Payment\\Persistence\\SpyPaymentMethod'), 0, $e);
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
        if ($this->aSpyPaymentProvider !== null && $this->fk_payment_provider !== $this->aSpyPaymentProvider->getIdPaymentProvider()) {
            $this->aSpyPaymentProvider = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyPaymentMethodTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyPaymentMethodQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyPaymentProvider = null;
            $this->collSpyPaymentMethodStores = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyPaymentMethod::setDeleted()
     * @see SpyPaymentMethod::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPaymentMethodTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyPaymentMethodQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPaymentMethodTableMap::DATABASE_NAME);
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
                SpyPaymentMethodTableMap::addInstanceToPool($this);
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

            if ($this->aSpyPaymentProvider !== null) {
                if ($this->aSpyPaymentProvider->isModified() || $this->aSpyPaymentProvider->isNew()) {
                    $affectedRows += $this->aSpyPaymentProvider->save($con);
                }
                $this->setSpyPaymentProvider($this->aSpyPaymentProvider);
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

            if ($this->spyPaymentMethodStoresScheduledForDeletion !== null) {
                if (!$this->spyPaymentMethodStoresScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery::create()
                        ->filterByPrimaryKeys($this->spyPaymentMethodStoresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyPaymentMethodStoresScheduledForDeletion = null;
                }
            }

            if ($this->collSpyPaymentMethodStores !== null) {
                foreach ($this->collSpyPaymentMethodStores as $referrerFK) {
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

        $this->modifiedColumns[SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD] = true;
        if (null !== $this->id_payment_method) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD)) {
            $modifiedColumns[':p' . $index++]  = '`id_payment_method`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER)) {
            $modifiedColumns[':p' . $index++]  = '`fk_payment_provider`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_GROUP_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`group_name`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`is_active`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_IS_HIDDEN)) {
            $modifiedColumns[':p' . $index++]  = '`is_hidden`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_LABEL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`label_name`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT)) {
            $modifiedColumns[':p' . $index++]  = '`payment_authorization_endpoint`';
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`payment_method_key`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_payment_method` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_payment_method`':
                        $stmt->bindValue($identifier, $this->id_payment_method, PDO::PARAM_INT);
                        break;
                    case '`fk_payment_provider`':
                        $stmt->bindValue($identifier, $this->fk_payment_provider, PDO::PARAM_INT);
                        break;
                    case '`group_name`':
                        $stmt->bindValue($identifier, $this->group_name, PDO::PARAM_STR);
                        break;
                    case '`is_active`':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case '`is_hidden`':
                        $stmt->bindValue($identifier, (int) $this->is_hidden, PDO::PARAM_INT);
                        break;
                    case '`label_name`':
                        $stmt->bindValue($identifier, $this->label_name, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`payment_authorization_endpoint`':
                        $stmt->bindValue($identifier, $this->payment_authorization_endpoint, PDO::PARAM_STR);
                        break;
                    case '`payment_method_key`':
                        $stmt->bindValue($identifier, $this->payment_method_key, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_payment_method_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdPaymentMethod($pk);

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
        $pos = SpyPaymentMethodTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdPaymentMethod();
                break;
            case 1:
                return $this->getFkPaymentProvider();
                break;
            case 2:
                return $this->getGroupName();
                break;
            case 3:
                return $this->getIsActive();
                break;
            case 4:
                return $this->getIsHidden();
                break;
            case 5:
                return $this->getLabelName();
                break;
            case 6:
                return $this->getName();
                break;
            case 7:
                return $this->getPaymentAuthorizationEndpoint();
                break;
            case 8:
                return $this->getPaymentMethodKey();
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

        if (isset($alreadyDumpedObjects['SpyPaymentMethod'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyPaymentMethod'][$this->hashCode()] = true;
        $keys = SpyPaymentMethodTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPaymentMethod(),
            $keys[1] => $this->getFkPaymentProvider(),
            $keys[2] => $this->getGroupName(),
            $keys[3] => $this->getIsActive(),
            $keys[4] => $this->getIsHidden(),
            $keys[5] => $this->getLabelName(),
            $keys[6] => $this->getName(),
            $keys[7] => $this->getPaymentAuthorizationEndpoint(),
            $keys[8] => $this->getPaymentMethodKey(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyPaymentProvider) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPaymentProvider';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_payment_provider';
                        break;
                    default:
                        $key = 'SpyPaymentProvider';
                }

                $result[$key] = $this->aSpyPaymentProvider->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyPaymentMethodStores) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPaymentMethodStores';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_payment_method_stores';
                        break;
                    default:
                        $key = 'SpyPaymentMethodStores';
                }

                $result[$key] = $this->collSpyPaymentMethodStores->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyPaymentMethodTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdPaymentMethod($value);
                break;
            case 1:
                $this->setFkPaymentProvider($value);
                break;
            case 2:
                $this->setGroupName($value);
                break;
            case 3:
                $this->setIsActive($value);
                break;
            case 4:
                $this->setIsHidden($value);
                break;
            case 5:
                $this->setLabelName($value);
                break;
            case 6:
                $this->setName($value);
                break;
            case 7:
                $this->setPaymentAuthorizationEndpoint($value);
                break;
            case 8:
                $this->setPaymentMethodKey($value);
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
     * @return     $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyPaymentMethodTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdPaymentMethod($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkPaymentProvider($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setGroupName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIsActive($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIsHidden($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setLabelName($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setName($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPaymentAuthorizationEndpoint($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPaymentMethodKey($arr[$keys[8]]);
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
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object, for fluid interface
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
        $criteria = new Criteria(SpyPaymentMethodTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD, $this->id_payment_method);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER, $this->fk_payment_provider);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_GROUP_NAME)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_GROUP_NAME, $this->group_name);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_IS_ACTIVE)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_IS_ACTIVE, $this->is_active);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_IS_HIDDEN)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_IS_HIDDEN, $this->is_hidden);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_LABEL_NAME)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_LABEL_NAME, $this->label_name);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_NAME)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT, $this->payment_authorization_endpoint);
        }
        if ($this->isColumnModified(SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY)) {
            $criteria->add(SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY, $this->payment_method_key);
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
        $criteria = ChildSpyPaymentMethodQuery::create();
        $criteria->add(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD, $this->id_payment_method);

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
        $validPk = null !== $this->getIdPaymentMethod();

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
        return $this->getIdPaymentMethod();
    }

    /**
     * Generic method to set the primary key (id_payment_method column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPaymentMethod($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdPaymentMethod();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Payment\Persistence\SpyPaymentMethod (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkPaymentProvider($this->getFkPaymentProvider());
        $copyObj->setGroupName($this->getGroupName());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setIsHidden($this->getIsHidden());
        $copyObj->setLabelName($this->getLabelName());
        $copyObj->setName($this->getName());
        $copyObj->setPaymentAuthorizationEndpoint($this->getPaymentAuthorizationEndpoint());
        $copyObj->setPaymentMethodKey($this->getPaymentMethodKey());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyPaymentMethodStores() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyPaymentMethodStore($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPaymentMethod(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Payment\Persistence\SpyPaymentMethod Clone of current object.
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
     * Declares an association between this object and a ChildSpyPaymentProvider object.
     *
     * @param  ChildSpyPaymentProvider $v
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyPaymentProvider(ChildSpyPaymentProvider $v = null)
    {
        if ($v === null) {
            $this->setFkPaymentProvider(NULL);
        } else {
            $this->setFkPaymentProvider($v->getIdPaymentProvider());
        }

        $this->aSpyPaymentProvider = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyPaymentProvider object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyPaymentMethod($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyPaymentProvider object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyPaymentProvider The associated ChildSpyPaymentProvider object.
     * @throws PropelException
     */
    public function getSpyPaymentProvider(ConnectionInterface $con = null)
    {
        if ($this->aSpyPaymentProvider === null && ($this->fk_payment_provider != 0)) {
            $this->aSpyPaymentProvider = ChildSpyPaymentProviderQuery::create()->findPk($this->fk_payment_provider, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyPaymentProvider->addSpyPaymentMethods($this);
             */
        }

        return $this->aSpyPaymentProvider;
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
        if ('SpyPaymentMethodStore' === $relationName) {
            $this->initSpyPaymentMethodStores();
            return;
        }
    }

    /**
     * Clears out the collSpyPaymentMethodStores collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyPaymentMethodStores()
     */
    public function clearSpyPaymentMethodStores()
    {
        $this->collSpyPaymentMethodStores = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyPaymentMethodStores collection loaded partially.
     */
    public function resetPartialSpyPaymentMethodStores($v = true)
    {
        $this->collSpyPaymentMethodStoresPartial = $v;
    }

    /**
     * Initializes the collSpyPaymentMethodStores collection.
     *
     * By default this just sets the collSpyPaymentMethodStores collection to an empty array (like clearcollSpyPaymentMethodStores());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyPaymentMethodStores($overrideExisting = true)
    {
        if (null !== $this->collSpyPaymentMethodStores && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPaymentMethodStoreTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyPaymentMethodStores = new $collectionClassName;
        $this->collSpyPaymentMethodStores->setModel('\Orm\Zed\Payment\Persistence\SpyPaymentMethodStore');
    }

    /**
     * Gets an array of ChildSpyPaymentMethodStore objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyPaymentMethod is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyPaymentMethodStore[] List of ChildSpyPaymentMethodStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyPaymentMethodStore> List of ChildSpyPaymentMethodStore objects
     * @throws PropelException
     */
    public function getSpyPaymentMethodStores(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyPaymentMethodStoresPartial && !$this->isNew();
        if (null === $this->collSpyPaymentMethodStores || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyPaymentMethodStores) {
                    $this->initSpyPaymentMethodStores();
                } else {
                    $collectionClassName = SpyPaymentMethodStoreTableMap::getTableMap()->getCollectionClassName();

                    $collSpyPaymentMethodStores = new $collectionClassName;
                    $collSpyPaymentMethodStores->setModel('\Orm\Zed\Payment\Persistence\SpyPaymentMethodStore');

                    return $collSpyPaymentMethodStores;
                }
            } else {
                $collSpyPaymentMethodStores = ChildSpyPaymentMethodStoreQuery::create(null, $criteria)
                    ->filterBySpyPaymentMethod($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyPaymentMethodStoresPartial && count($collSpyPaymentMethodStores)) {
                        $this->initSpyPaymentMethodStores(false);

                        foreach ($collSpyPaymentMethodStores as $obj) {
                            if (false == $this->collSpyPaymentMethodStores->contains($obj)) {
                                $this->collSpyPaymentMethodStores->append($obj);
                            }
                        }

                        $this->collSpyPaymentMethodStoresPartial = true;
                    }

                    return $collSpyPaymentMethodStores;
                }

                if ($partial && $this->collSpyPaymentMethodStores) {
                    foreach ($this->collSpyPaymentMethodStores as $obj) {
                        if ($obj->isNew()) {
                            $collSpyPaymentMethodStores[] = $obj;
                        }
                    }
                }

                $this->collSpyPaymentMethodStores = $collSpyPaymentMethodStores;
                $this->collSpyPaymentMethodStoresPartial = false;
            }
        }

        return $this->collSpyPaymentMethodStores;
    }

    /**
     * Sets a collection of ChildSpyPaymentMethodStore objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyPaymentMethodStores A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyPaymentMethod The current object (for fluent API support)
     */
    public function setSpyPaymentMethodStores(Collection $spyPaymentMethodStores, ConnectionInterface $con = null)
    {
        /** @var ChildSpyPaymentMethodStore[] $spyPaymentMethodStoresToDelete */
        $spyPaymentMethodStoresToDelete = $this->getSpyPaymentMethodStores(new Criteria(), $con)->diff($spyPaymentMethodStores);


        $this->spyPaymentMethodStoresScheduledForDeletion = $spyPaymentMethodStoresToDelete;

        foreach ($spyPaymentMethodStoresToDelete as $spyPaymentMethodStoreRemoved) {
            $spyPaymentMethodStoreRemoved->setSpyPaymentMethod(null);
        }

        $this->collSpyPaymentMethodStores = null;
        foreach ($spyPaymentMethodStores as $spyPaymentMethodStore) {
            $this->addSpyPaymentMethodStore($spyPaymentMethodStore);
        }

        $this->collSpyPaymentMethodStores = $spyPaymentMethodStores;
        $this->collSpyPaymentMethodStoresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyPaymentMethodStore objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyPaymentMethodStore objects.
     * @throws PropelException
     */
    public function countSpyPaymentMethodStores(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyPaymentMethodStoresPartial && !$this->isNew();
        if (null === $this->collSpyPaymentMethodStores || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyPaymentMethodStores) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyPaymentMethodStores());
            }

            $query = ChildSpyPaymentMethodStoreQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyPaymentMethod($this)
                ->count($con);
        }

        return count($this->collSpyPaymentMethodStores);
    }

    /**
     * Method called to associate a ChildSpyPaymentMethodStore object to this object
     * through the ChildSpyPaymentMethodStore foreign key attribute.
     *
     * @param  ChildSpyPaymentMethodStore $l ChildSpyPaymentMethodStore
     * @return $this|\Orm\Zed\Payment\Persistence\SpyPaymentMethod The current object (for fluent API support)
     */
    public function addSpyPaymentMethodStore(ChildSpyPaymentMethodStore $l)
    {
        if ($this->collSpyPaymentMethodStores === null) {
            $this->initSpyPaymentMethodStores();
            $this->collSpyPaymentMethodStoresPartial = true;
        }

        if (!$this->collSpyPaymentMethodStores->contains($l)) {
            $this->doAddSpyPaymentMethodStore($l);

            if ($this->spyPaymentMethodStoresScheduledForDeletion and $this->spyPaymentMethodStoresScheduledForDeletion->contains($l)) {
                $this->spyPaymentMethodStoresScheduledForDeletion->remove($this->spyPaymentMethodStoresScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyPaymentMethodStore $spyPaymentMethodStore The ChildSpyPaymentMethodStore object to add.
     */
    protected function doAddSpyPaymentMethodStore(ChildSpyPaymentMethodStore $spyPaymentMethodStore)
    {
        $this->collSpyPaymentMethodStores[]= $spyPaymentMethodStore;
        $spyPaymentMethodStore->setSpyPaymentMethod($this);
    }

    /**
     * @param  ChildSpyPaymentMethodStore $spyPaymentMethodStore The ChildSpyPaymentMethodStore object to remove.
     * @return $this|ChildSpyPaymentMethod The current object (for fluent API support)
     */
    public function removeSpyPaymentMethodStore(ChildSpyPaymentMethodStore $spyPaymentMethodStore)
    {
        if ($this->getSpyPaymentMethodStores()->contains($spyPaymentMethodStore)) {
            $pos = $this->collSpyPaymentMethodStores->search($spyPaymentMethodStore);
            $this->collSpyPaymentMethodStores->remove($pos);
            if (null === $this->spyPaymentMethodStoresScheduledForDeletion) {
                $this->spyPaymentMethodStoresScheduledForDeletion = clone $this->collSpyPaymentMethodStores;
                $this->spyPaymentMethodStoresScheduledForDeletion->clear();
            }
            $this->spyPaymentMethodStoresScheduledForDeletion[]= clone $spyPaymentMethodStore;
            $spyPaymentMethodStore->setSpyPaymentMethod(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyPaymentMethod is new, it will return
     * an empty collection; or if this SpyPaymentMethod has previously
     * been saved, it will retrieve related SpyPaymentMethodStores from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyPaymentMethod.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyPaymentMethodStore[] List of ChildSpyPaymentMethodStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyPaymentMethodStore}> List of ChildSpyPaymentMethodStore objects
     */
    public function getSpyPaymentMethodStoresJoinSpyStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyPaymentMethodStoreQuery::create(null, $criteria);
        $query->joinWith('SpyStore', $joinBehavior);

        return $this->getSpyPaymentMethodStores($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyPaymentProvider) {
            $this->aSpyPaymentProvider->removeSpyPaymentMethod($this);
        }
        $this->id_payment_method = null;
        $this->fk_payment_provider = null;
        $this->group_name = null;
        $this->is_active = null;
        $this->is_hidden = null;
        $this->label_name = null;
        $this->name = null;
        $this->payment_authorization_endpoint = null;
        $this->payment_method_key = null;
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
            if ($this->collSpyPaymentMethodStores) {
                foreach ($this->collSpyPaymentMethodStores as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyPaymentMethodStores = null;
        $this->aSpyPaymentProvider = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyPaymentMethodTableMap::DEFAULT_STRING_FORMAT);
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
