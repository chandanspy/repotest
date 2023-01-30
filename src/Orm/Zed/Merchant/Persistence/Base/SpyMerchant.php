<?php

namespace Orm\Zed\Merchant\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery;
use Orm\Zed\MerchantRelationship\Persistence\Base\SpyMerchantRelationship as BaseSpyMerchantRelationship;
use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipTableMap;
use Orm\Zed\Merchant\Persistence\SpyMerchant as ChildSpyMerchant;
use Orm\Zed\Merchant\Persistence\SpyMerchantQuery as ChildSpyMerchantQuery;
use Orm\Zed\Merchant\Persistence\SpyMerchantStore as ChildSpyMerchantStore;
use Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery as ChildSpyMerchantStoreQuery;
use Orm\Zed\Merchant\Persistence\Map\SpyMerchantStoreTableMap;
use Orm\Zed\Merchant\Persistence\Map\SpyMerchantTableMap;
use Orm\Zed\Url\Persistence\SpyUrl;
use Orm\Zed\Url\Persistence\SpyUrlQuery;
use Orm\Zed\Url\Persistence\Base\SpyUrl as BaseSpyUrl;
use Orm\Zed\Url\Persistence\Map\SpyUrlTableMap;
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
 * Base class that represents a row from the 'spy_merchant' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Merchant.Persistence.Base
 */
abstract class SpyMerchant implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Merchant\\Persistence\\Map\\SpyMerchantTableMap';


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
     * The value for the id_merchant field.
     *
     * @var        int
     */
    protected $id_merchant;

    /**
     * The value for the email field.
     *
     * @var        string
     */
    protected $email;

    /**
     * The value for the is_active field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean|null
     */
    protected $is_active;

    /**
     * The value for the merchant_reference field.
     *
     * @var        string
     */
    protected $merchant_reference;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the registration_number field.
     *
     * @var        string|null
     */
    protected $registration_number;

    /**
     * The value for the status field.
     *
     * @var        string
     */
    protected $status;

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
     * @var        ObjectCollection|ChildSpyMerchantStore[] Collection to store aggregation of ChildSpyMerchantStore objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyMerchantStore> Collection to store aggregation of ChildSpyMerchantStore objects.
     */
    protected $collSpyMerchantStores;
    protected $collSpyMerchantStoresPartial;

    /**
     * @var        ObjectCollection|SpyMerchantRelationship[] Collection to store aggregation of SpyMerchantRelationship objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationship> Collection to store aggregation of SpyMerchantRelationship objects.
     */
    protected $collSpyMerchantRelationships;
    protected $collSpyMerchantRelationshipsPartial;

    /**
     * @var        ObjectCollection|SpyUrl[] Collection to store aggregation of SpyUrl objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyUrl> Collection to store aggregation of SpyUrl objects.
     */
    protected $collSpyUrls;
    protected $collSpyUrlsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    // event behavior

    /**
     * @var string
     */
    private $_eventName;

    /**
     * @var bool
     */
    private $_isModified;

    /**
     * @var array
     */
    private $_modifiedColumns;

    /**
     * @var array
     */
    private $_initialValues;

    /**
     * @var bool
     */
    private $_isEventDisabled;

    /**
     * @var array
     */
    private $_foreignKeys = [
    ];

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyMerchantStore[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyMerchantStore>
     */
    protected $spyMerchantStoresScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyMerchantRelationship[]
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationship>
     */
    protected $spyMerchantRelationshipsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyUrl[]
     * @phpstan-var ObjectCollection&\Traversable<SpyUrl>
     */
    protected $spyUrlsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_active = false;
    }

    /**
     * Initializes internal state of Orm\Zed\Merchant\Persistence\Base\SpyMerchant object.
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
     * Compares this with another <code>SpyMerchant</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyMerchant</code>, delegates to
     * <code>equals(SpyMerchant)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_merchant] column value.
     *
     * @return int
     */
    public function getIdMerchant()
    {
        return $this->id_merchant;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean|null
     */
    public function isActive()
    {
        return $this->getIsActive();
    }

    /**
     * Get the [merchant_reference] column value.
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchant_reference;
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
     * Get the [registration_number] column value.
     *
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->registration_number;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set the value of [id_merchant] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setIdMerchant($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_merchant !== $v) {
            $this->id_merchant = $v;
            $this->modifiedColumns[SpyMerchantTableMap::COL_ID_MERCHANT] = true;
        }

        return $this;
    } // setIdMerchant()

    /**
     * Set the value of [email] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[SpyMerchantTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string|null $v The new value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setIsActive($v)
    {
        $this->_initialValues[SpyMerchantTableMap::COL_IS_ACTIVE] = $this->is_active;

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
            $this->modifiedColumns[SpyMerchantTableMap::COL_IS_ACTIVE] = true;
        }

        return $this;
    } // setIsActive()

    /**
     * Set the value of [merchant_reference] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setMerchantReference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->merchant_reference !== $v) {
            $this->merchant_reference = $v;
            $this->modifiedColumns[SpyMerchantTableMap::COL_MERCHANT_REFERENCE] = true;
        }

        return $this;
    } // setMerchantReference()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
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
            $this->modifiedColumns[SpyMerchantTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [registration_number] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setRegistrationNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->registration_number !== $v) {
            $this->registration_number = $v;
            $this->modifiedColumns[SpyMerchantTableMap::COL_REGISTRATION_NUMBER] = true;
        }

        return $this;
    } // setRegistrationNumber()

    /**
     * Set the value of [status] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[SpyMerchantTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyMerchantTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyMerchantTableMap::COL_UPDATED_AT] = true;
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
            if ($this->is_active !== false) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyMerchantTableMap::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_merchant = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyMerchantTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyMerchantTableMap::translateFieldName('IsActive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_active = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyMerchantTableMap::translateFieldName('MerchantReference', TableMap::TYPE_PHPNAME, $indexType)];
            $this->merchant_reference = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyMerchantTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyMerchantTableMap::translateFieldName('RegistrationNumber', TableMap::TYPE_PHPNAME, $indexType)];
            $this->registration_number = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyMerchantTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyMerchantTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyMerchantTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 9; // 9 = SpyMerchantTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Merchant\\Persistence\\SpyMerchant'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyMerchantTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyMerchantQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSpyMerchantStores = null;

            $this->collSpyMerchantRelationships = null;

            $this->collSpyUrls = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyMerchant::setDeleted()
     * @see SpyMerchant::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyMerchantQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // event behavior

                $this->addDeleteEventToMemory();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            // event behavior

            $this->prepareSaveEventName();

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyMerchantTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyMerchantTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyMerchantTableMap::COL_UPDATED_AT)) {
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
                // event behavior

                if ($affectedRows) {
                    $this->addSaveEventToMemory();
                }

                SpyMerchantTableMap::addInstanceToPool($this);
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

            if ($this->spyMerchantStoresScheduledForDeletion !== null) {
                if (!$this->spyMerchantStoresScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery::create()
                        ->filterByPrimaryKeys($this->spyMerchantStoresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyMerchantStoresScheduledForDeletion = null;
                }
            }

            if ($this->collSpyMerchantStores !== null) {
                foreach ($this->collSpyMerchantStores as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyMerchantRelationshipsScheduledForDeletion !== null) {
                if (!$this->spyMerchantRelationshipsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery::create()
                        ->filterByPrimaryKeys($this->spyMerchantRelationshipsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyMerchantRelationshipsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyMerchantRelationships !== null) {
                foreach ($this->collSpyMerchantRelationships as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyUrlsScheduledForDeletion !== null) {
                if (!$this->spyUrlsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Url\Persistence\SpyUrlQuery::create()
                        ->filterByPrimaryKeys($this->spyUrlsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyUrlsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyUrls !== null) {
                foreach ($this->collSpyUrls as $referrerFK) {
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

        $this->modifiedColumns[SpyMerchantTableMap::COL_ID_MERCHANT] = true;
        if (null !== $this->id_merchant) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyMerchantTableMap::COL_ID_MERCHANT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyMerchantTableMap::COL_ID_MERCHANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_merchant`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`is_active`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_MERCHANT_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`merchant_reference`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_REGISTRATION_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`registration_number`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_merchant` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_merchant`':
                        $stmt->bindValue($identifier, $this->id_merchant, PDO::PARAM_INT);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`is_active`':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case '`merchant_reference`':
                        $stmt->bindValue($identifier, $this->merchant_reference, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`registration_number`':
                        $stmt->bindValue($identifier, $this->registration_number, PDO::PARAM_STR);
                        break;
                    case '`status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
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
            $pk = $con->lastInsertId('spy_merchant_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdMerchant($pk);

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
        $pos = SpyMerchantTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdMerchant();
                break;
            case 1:
                return $this->getEmail();
                break;
            case 2:
                return $this->getIsActive();
                break;
            case 3:
                return $this->getMerchantReference();
                break;
            case 4:
                return $this->getName();
                break;
            case 5:
                return $this->getRegistrationNumber();
                break;
            case 6:
                return $this->getStatus();
                break;
            case 7:
                return $this->getCreatedAt();
                break;
            case 8:
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

        if (isset($alreadyDumpedObjects['SpyMerchant'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyMerchant'][$this->hashCode()] = true;
        $keys = SpyMerchantTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdMerchant(),
            $keys[1] => $this->getEmail(),
            $keys[2] => $this->getIsActive(),
            $keys[3] => $this->getMerchantReference(),
            $keys[4] => $this->getName(),
            $keys[5] => $this->getRegistrationNumber(),
            $keys[6] => $this->getStatus(),
            $keys[7] => $this->getCreatedAt(),
            $keys[8] => $this->getUpdatedAt(),
        );
        if ($result[$keys[7]] instanceof \DateTimeInterface) {
            $result[$keys[7]] = $result[$keys[7]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[8]] instanceof \DateTimeInterface) {
            $result[$keys[8]] = $result[$keys[8]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSpyMerchantStores) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyMerchantStores';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_merchant_stores';
                        break;
                    default:
                        $key = 'SpyMerchantStores';
                }

                $result[$key] = $this->collSpyMerchantStores->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyMerchantRelationships) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyMerchantRelationships';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_merchant_relationships';
                        break;
                    default:
                        $key = 'SpyMerchantRelationships';
                }

                $result[$key] = $this->collSpyMerchantRelationships->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyUrls) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyUrls';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_urls';
                        break;
                    default:
                        $key = 'SpyUrls';
                }

                $result[$key] = $this->collSpyUrls->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyMerchantTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdMerchant($value);
                break;
            case 1:
                $this->setEmail($value);
                break;
            case 2:
                $this->setIsActive($value);
                break;
            case 3:
                $this->setMerchantReference($value);
                break;
            case 4:
                $this->setName($value);
                break;
            case 5:
                $this->setRegistrationNumber($value);
                break;
            case 6:
                $this->setStatus($value);
                break;
            case 7:
                $this->setCreatedAt($value);
                break;
            case 8:
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
     * @return     $this|\Orm\Zed\Merchant\Persistence\SpyMerchant
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyMerchantTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdMerchant($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setEmail($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIsActive($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setMerchantReference($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setName($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setRegistrationNumber($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setStatus($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setCreatedAt($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setUpdatedAt($arr[$keys[8]]);
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
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object, for fluid interface
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
        $criteria = new Criteria(SpyMerchantTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyMerchantTableMap::COL_ID_MERCHANT)) {
            $criteria->add(SpyMerchantTableMap::COL_ID_MERCHANT, $this->id_merchant);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_EMAIL)) {
            $criteria->add(SpyMerchantTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_IS_ACTIVE)) {
            $criteria->add(SpyMerchantTableMap::COL_IS_ACTIVE, $this->is_active);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_MERCHANT_REFERENCE)) {
            $criteria->add(SpyMerchantTableMap::COL_MERCHANT_REFERENCE, $this->merchant_reference);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_NAME)) {
            $criteria->add(SpyMerchantTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_REGISTRATION_NUMBER)) {
            $criteria->add(SpyMerchantTableMap::COL_REGISTRATION_NUMBER, $this->registration_number);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_STATUS)) {
            $criteria->add(SpyMerchantTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyMerchantTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyMerchantTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyMerchantTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildSpyMerchantQuery::create();
        $criteria->add(SpyMerchantTableMap::COL_ID_MERCHANT, $this->id_merchant);

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
        $validPk = null !== $this->getIdMerchant();

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
        return $this->getIdMerchant();
    }

    /**
     * Generic method to set the primary key (id_merchant column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdMerchant($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdMerchant();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Merchant\Persistence\SpyMerchant (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmail($this->getEmail());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setMerchantReference($this->getMerchantReference());
        $copyObj->setName($this->getName());
        $copyObj->setRegistrationNumber($this->getRegistrationNumber());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyMerchantStores() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyMerchantStore($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyMerchantRelationships() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyMerchantRelationship($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyUrls() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyUrl($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdMerchant(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchant Clone of current object.
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('SpyMerchantStore' === $relationName) {
            $this->initSpyMerchantStores();
            return;
        }
        if ('SpyMerchantRelationship' === $relationName) {
            $this->initSpyMerchantRelationships();
            return;
        }
        if ('SpyUrl' === $relationName) {
            $this->initSpyUrls();
            return;
        }
    }

    /**
     * Clears out the collSpyMerchantStores collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyMerchantStores()
     */
    public function clearSpyMerchantStores()
    {
        $this->collSpyMerchantStores = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyMerchantStores collection loaded partially.
     */
    public function resetPartialSpyMerchantStores($v = true)
    {
        $this->collSpyMerchantStoresPartial = $v;
    }

    /**
     * Initializes the collSpyMerchantStores collection.
     *
     * By default this just sets the collSpyMerchantStores collection to an empty array (like clearcollSpyMerchantStores());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyMerchantStores($overrideExisting = true)
    {
        if (null !== $this->collSpyMerchantStores && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyMerchantStoreTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyMerchantStores = new $collectionClassName;
        $this->collSpyMerchantStores->setModel('\Orm\Zed\Merchant\Persistence\SpyMerchantStore');
    }

    /**
     * Gets an array of ChildSpyMerchantStore objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyMerchant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyMerchantStore[] List of ChildSpyMerchantStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyMerchantStore> List of ChildSpyMerchantStore objects
     * @throws PropelException
     */
    public function getSpyMerchantStores(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantStoresPartial && !$this->isNew();
        if (null === $this->collSpyMerchantStores || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyMerchantStores) {
                    $this->initSpyMerchantStores();
                } else {
                    $collectionClassName = SpyMerchantStoreTableMap::getTableMap()->getCollectionClassName();

                    $collSpyMerchantStores = new $collectionClassName;
                    $collSpyMerchantStores->setModel('\Orm\Zed\Merchant\Persistence\SpyMerchantStore');

                    return $collSpyMerchantStores;
                }
            } else {
                $collSpyMerchantStores = ChildSpyMerchantStoreQuery::create(null, $criteria)
                    ->filterBySpyMerchant($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyMerchantStoresPartial && count($collSpyMerchantStores)) {
                        $this->initSpyMerchantStores(false);

                        foreach ($collSpyMerchantStores as $obj) {
                            if (false == $this->collSpyMerchantStores->contains($obj)) {
                                $this->collSpyMerchantStores->append($obj);
                            }
                        }

                        $this->collSpyMerchantStoresPartial = true;
                    }

                    return $collSpyMerchantStores;
                }

                if ($partial && $this->collSpyMerchantStores) {
                    foreach ($this->collSpyMerchantStores as $obj) {
                        if ($obj->isNew()) {
                            $collSpyMerchantStores[] = $obj;
                        }
                    }
                }

                $this->collSpyMerchantStores = $collSpyMerchantStores;
                $this->collSpyMerchantStoresPartial = false;
            }
        }

        return $this->collSpyMerchantStores;
    }

    /**
     * Sets a collection of ChildSpyMerchantStore objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyMerchantStores A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyMerchant The current object (for fluent API support)
     */
    public function setSpyMerchantStores(Collection $spyMerchantStores, ConnectionInterface $con = null)
    {
        /** @var ChildSpyMerchantStore[] $spyMerchantStoresToDelete */
        $spyMerchantStoresToDelete = $this->getSpyMerchantStores(new Criteria(), $con)->diff($spyMerchantStores);


        $this->spyMerchantStoresScheduledForDeletion = $spyMerchantStoresToDelete;

        foreach ($spyMerchantStoresToDelete as $spyMerchantStoreRemoved) {
            $spyMerchantStoreRemoved->setSpyMerchant(null);
        }

        $this->collSpyMerchantStores = null;
        foreach ($spyMerchantStores as $spyMerchantStore) {
            $this->addSpyMerchantStore($spyMerchantStore);
        }

        $this->collSpyMerchantStores = $spyMerchantStores;
        $this->collSpyMerchantStoresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyMerchantStore objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyMerchantStore objects.
     * @throws PropelException
     */
    public function countSpyMerchantStores(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantStoresPartial && !$this->isNew();
        if (null === $this->collSpyMerchantStores || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyMerchantStores) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyMerchantStores());
            }

            $query = ChildSpyMerchantStoreQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyMerchant($this)
                ->count($con);
        }

        return count($this->collSpyMerchantStores);
    }

    /**
     * Method called to associate a ChildSpyMerchantStore object to this object
     * through the ChildSpyMerchantStore foreign key attribute.
     *
     * @param  ChildSpyMerchantStore $l ChildSpyMerchantStore
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function addSpyMerchantStore(ChildSpyMerchantStore $l)
    {
        if ($this->collSpyMerchantStores === null) {
            $this->initSpyMerchantStores();
            $this->collSpyMerchantStoresPartial = true;
        }

        if (!$this->collSpyMerchantStores->contains($l)) {
            $this->doAddSpyMerchantStore($l);

            if ($this->spyMerchantStoresScheduledForDeletion and $this->spyMerchantStoresScheduledForDeletion->contains($l)) {
                $this->spyMerchantStoresScheduledForDeletion->remove($this->spyMerchantStoresScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyMerchantStore $spyMerchantStore The ChildSpyMerchantStore object to add.
     */
    protected function doAddSpyMerchantStore(ChildSpyMerchantStore $spyMerchantStore)
    {
        $this->collSpyMerchantStores[]= $spyMerchantStore;
        $spyMerchantStore->setSpyMerchant($this);
    }

    /**
     * @param  ChildSpyMerchantStore $spyMerchantStore The ChildSpyMerchantStore object to remove.
     * @return $this|ChildSpyMerchant The current object (for fluent API support)
     */
    public function removeSpyMerchantStore(ChildSpyMerchantStore $spyMerchantStore)
    {
        if ($this->getSpyMerchantStores()->contains($spyMerchantStore)) {
            $pos = $this->collSpyMerchantStores->search($spyMerchantStore);
            $this->collSpyMerchantStores->remove($pos);
            if (null === $this->spyMerchantStoresScheduledForDeletion) {
                $this->spyMerchantStoresScheduledForDeletion = clone $this->collSpyMerchantStores;
                $this->spyMerchantStoresScheduledForDeletion->clear();
            }
            $this->spyMerchantStoresScheduledForDeletion[]= clone $spyMerchantStore;
            $spyMerchantStore->setSpyMerchant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyMerchantStores from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyMerchantStore[] List of ChildSpyMerchantStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyMerchantStore}> List of ChildSpyMerchantStore objects
     */
    public function getSpyMerchantStoresJoinSpyStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyMerchantStoreQuery::create(null, $criteria);
        $query->joinWith('SpyStore', $joinBehavior);

        return $this->getSpyMerchantStores($query, $con);
    }

    /**
     * Clears out the collSpyMerchantRelationships collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyMerchantRelationships()
     */
    public function clearSpyMerchantRelationships()
    {
        $this->collSpyMerchantRelationships = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyMerchantRelationships collection loaded partially.
     */
    public function resetPartialSpyMerchantRelationships($v = true)
    {
        $this->collSpyMerchantRelationshipsPartial = $v;
    }

    /**
     * Initializes the collSpyMerchantRelationships collection.
     *
     * By default this just sets the collSpyMerchantRelationships collection to an empty array (like clearcollSpyMerchantRelationships());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyMerchantRelationships($overrideExisting = true)
    {
        if (null !== $this->collSpyMerchantRelationships && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyMerchantRelationships = new $collectionClassName;
        $this->collSpyMerchantRelationships->setModel('\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship');
    }

    /**
     * Gets an array of SpyMerchantRelationship objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyMerchant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyMerchantRelationship[] List of SpyMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationship> List of SpyMerchantRelationship objects
     * @throws PropelException
     */
    public function getSpyMerchantRelationships(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyMerchantRelationships) {
                    $this->initSpyMerchantRelationships();
                } else {
                    $collectionClassName = SpyMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

                    $collSpyMerchantRelationships = new $collectionClassName;
                    $collSpyMerchantRelationships->setModel('\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship');

                    return $collSpyMerchantRelationships;
                }
            } else {
                $collSpyMerchantRelationships = SpyMerchantRelationshipQuery::create(null, $criteria)
                    ->filterByMerchant($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyMerchantRelationshipsPartial && count($collSpyMerchantRelationships)) {
                        $this->initSpyMerchantRelationships(false);

                        foreach ($collSpyMerchantRelationships as $obj) {
                            if (false == $this->collSpyMerchantRelationships->contains($obj)) {
                                $this->collSpyMerchantRelationships->append($obj);
                            }
                        }

                        $this->collSpyMerchantRelationshipsPartial = true;
                    }

                    return $collSpyMerchantRelationships;
                }

                if ($partial && $this->collSpyMerchantRelationships) {
                    foreach ($this->collSpyMerchantRelationships as $obj) {
                        if ($obj->isNew()) {
                            $collSpyMerchantRelationships[] = $obj;
                        }
                    }
                }

                $this->collSpyMerchantRelationships = $collSpyMerchantRelationships;
                $this->collSpyMerchantRelationshipsPartial = false;
            }
        }

        return $this->collSpyMerchantRelationships;
    }

    /**
     * Sets a collection of SpyMerchantRelationship objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyMerchantRelationships A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyMerchant The current object (for fluent API support)
     */
    public function setSpyMerchantRelationships(Collection $spyMerchantRelationships, ConnectionInterface $con = null)
    {
        /** @var SpyMerchantRelationship[] $spyMerchantRelationshipsToDelete */
        $spyMerchantRelationshipsToDelete = $this->getSpyMerchantRelationships(new Criteria(), $con)->diff($spyMerchantRelationships);


        $this->spyMerchantRelationshipsScheduledForDeletion = $spyMerchantRelationshipsToDelete;

        foreach ($spyMerchantRelationshipsToDelete as $spyMerchantRelationshipRemoved) {
            $spyMerchantRelationshipRemoved->setMerchant(null);
        }

        $this->collSpyMerchantRelationships = null;
        foreach ($spyMerchantRelationships as $spyMerchantRelationship) {
            $this->addSpyMerchantRelationship($spyMerchantRelationship);
        }

        $this->collSpyMerchantRelationships = $spyMerchantRelationships;
        $this->collSpyMerchantRelationshipsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyMerchantRelationship objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyMerchantRelationship objects.
     * @throws PropelException
     */
    public function countSpyMerchantRelationships(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyMerchantRelationships) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyMerchantRelationships());
            }

            $query = SpyMerchantRelationshipQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMerchant($this)
                ->count($con);
        }

        return count($this->collSpyMerchantRelationships);
    }

    /**
     * Method called to associate a SpyMerchantRelationship object to this object
     * through the SpyMerchantRelationship foreign key attribute.
     *
     * @param  SpyMerchantRelationship $l SpyMerchantRelationship
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function addSpyMerchantRelationship(SpyMerchantRelationship $l)
    {
        if ($this->collSpyMerchantRelationships === null) {
            $this->initSpyMerchantRelationships();
            $this->collSpyMerchantRelationshipsPartial = true;
        }

        if (!$this->collSpyMerchantRelationships->contains($l)) {
            $this->doAddSpyMerchantRelationship($l);

            if ($this->spyMerchantRelationshipsScheduledForDeletion and $this->spyMerchantRelationshipsScheduledForDeletion->contains($l)) {
                $this->spyMerchantRelationshipsScheduledForDeletion->remove($this->spyMerchantRelationshipsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyMerchantRelationship $spyMerchantRelationship The SpyMerchantRelationship object to add.
     */
    protected function doAddSpyMerchantRelationship(SpyMerchantRelationship $spyMerchantRelationship)
    {
        $this->collSpyMerchantRelationships[]= $spyMerchantRelationship;
        $spyMerchantRelationship->setMerchant($this);
    }

    /**
     * @param  SpyMerchantRelationship $spyMerchantRelationship The SpyMerchantRelationship object to remove.
     * @return $this|ChildSpyMerchant The current object (for fluent API support)
     */
    public function removeSpyMerchantRelationship(SpyMerchantRelationship $spyMerchantRelationship)
    {
        if ($this->getSpyMerchantRelationships()->contains($spyMerchantRelationship)) {
            $pos = $this->collSpyMerchantRelationships->search($spyMerchantRelationship);
            $this->collSpyMerchantRelationships->remove($pos);
            if (null === $this->spyMerchantRelationshipsScheduledForDeletion) {
                $this->spyMerchantRelationshipsScheduledForDeletion = clone $this->collSpyMerchantRelationships;
                $this->spyMerchantRelationshipsScheduledForDeletion->clear();
            }
            $this->spyMerchantRelationshipsScheduledForDeletion[]= clone $spyMerchantRelationship;
            $spyMerchantRelationship->setMerchant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyMerchantRelationship[] List of SpyMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationship}> List of SpyMerchantRelationship objects
     */
    public function getSpyMerchantRelationshipsJoinCompanyBusinessUnit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('CompanyBusinessUnit', $joinBehavior);

        return $this->getSpyMerchantRelationships($query, $con);
    }

    /**
     * Clears out the collSpyUrls collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyUrls()
     */
    public function clearSpyUrls()
    {
        $this->collSpyUrls = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyUrls collection loaded partially.
     */
    public function resetPartialSpyUrls($v = true)
    {
        $this->collSpyUrlsPartial = $v;
    }

    /**
     * Initializes the collSpyUrls collection.
     *
     * By default this just sets the collSpyUrls collection to an empty array (like clearcollSpyUrls());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyUrls($overrideExisting = true)
    {
        if (null !== $this->collSpyUrls && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyUrlTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyUrls = new $collectionClassName;
        $this->collSpyUrls->setModel('\Orm\Zed\Url\Persistence\SpyUrl');
    }

    /**
     * Gets an array of SpyUrl objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyMerchant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyUrl[] List of SpyUrl objects
     * @phpstan-return ObjectCollection&\Traversable<SpyUrl> List of SpyUrl objects
     * @throws PropelException
     */
    public function getSpyUrls(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyUrlsPartial && !$this->isNew();
        if (null === $this->collSpyUrls || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyUrls) {
                    $this->initSpyUrls();
                } else {
                    $collectionClassName = SpyUrlTableMap::getTableMap()->getCollectionClassName();

                    $collSpyUrls = new $collectionClassName;
                    $collSpyUrls->setModel('\Orm\Zed\Url\Persistence\SpyUrl');

                    return $collSpyUrls;
                }
            } else {
                $collSpyUrls = SpyUrlQuery::create(null, $criteria)
                    ->filterBySpyMerchant($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyUrlsPartial && count($collSpyUrls)) {
                        $this->initSpyUrls(false);

                        foreach ($collSpyUrls as $obj) {
                            if (false == $this->collSpyUrls->contains($obj)) {
                                $this->collSpyUrls->append($obj);
                            }
                        }

                        $this->collSpyUrlsPartial = true;
                    }

                    return $collSpyUrls;
                }

                if ($partial && $this->collSpyUrls) {
                    foreach ($this->collSpyUrls as $obj) {
                        if ($obj->isNew()) {
                            $collSpyUrls[] = $obj;
                        }
                    }
                }

                $this->collSpyUrls = $collSpyUrls;
                $this->collSpyUrlsPartial = false;
            }
        }

        return $this->collSpyUrls;
    }

    /**
     * Sets a collection of SpyUrl objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyUrls A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyMerchant The current object (for fluent API support)
     */
    public function setSpyUrls(Collection $spyUrls, ConnectionInterface $con = null)
    {
        /** @var SpyUrl[] $spyUrlsToDelete */
        $spyUrlsToDelete = $this->getSpyUrls(new Criteria(), $con)->diff($spyUrls);


        $this->spyUrlsScheduledForDeletion = $spyUrlsToDelete;

        foreach ($spyUrlsToDelete as $spyUrlRemoved) {
            $spyUrlRemoved->setSpyMerchant(null);
        }

        $this->collSpyUrls = null;
        foreach ($spyUrls as $spyUrl) {
            $this->addSpyUrl($spyUrl);
        }

        $this->collSpyUrls = $spyUrls;
        $this->collSpyUrlsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyUrl objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyUrl objects.
     * @throws PropelException
     */
    public function countSpyUrls(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyUrlsPartial && !$this->isNew();
        if (null === $this->collSpyUrls || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyUrls) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyUrls());
            }

            $query = SpyUrlQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyMerchant($this)
                ->count($con);
        }

        return count($this->collSpyUrls);
    }

    /**
     * Method called to associate a SpyUrl object to this object
     * through the SpyUrl foreign key attribute.
     *
     * @param  SpyUrl $l SpyUrl
     * @return $this|\Orm\Zed\Merchant\Persistence\SpyMerchant The current object (for fluent API support)
     */
    public function addSpyUrl(SpyUrl $l)
    {
        if ($this->collSpyUrls === null) {
            $this->initSpyUrls();
            $this->collSpyUrlsPartial = true;
        }

        if (!$this->collSpyUrls->contains($l)) {
            $this->doAddSpyUrl($l);

            if ($this->spyUrlsScheduledForDeletion and $this->spyUrlsScheduledForDeletion->contains($l)) {
                $this->spyUrlsScheduledForDeletion->remove($this->spyUrlsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyUrl $spyUrl The SpyUrl object to add.
     */
    protected function doAddSpyUrl(SpyUrl $spyUrl)
    {
        $this->collSpyUrls[]= $spyUrl;
        $spyUrl->setSpyMerchant($this);
    }

    /**
     * @param  SpyUrl $spyUrl The SpyUrl object to remove.
     * @return $this|ChildSpyMerchant The current object (for fluent API support)
     */
    public function removeSpyUrl(SpyUrl $spyUrl)
    {
        if ($this->getSpyUrls()->contains($spyUrl)) {
            $pos = $this->collSpyUrls->search($spyUrl);
            $this->collSpyUrls->remove($pos);
            if (null === $this->spyUrlsScheduledForDeletion) {
                $this->spyUrlsScheduledForDeletion = clone $this->collSpyUrls;
                $this->spyUrlsScheduledForDeletion->clear();
            }
            $this->spyUrlsScheduledForDeletion[]= $spyUrl;
            $spyUrl->setSpyMerchant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyUrls from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyUrl[] List of SpyUrl objects
     * @phpstan-return ObjectCollection&\Traversable<SpyUrl}> List of SpyUrl objects
     */
    public function getSpyUrlsJoinSpyCategoryNode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyUrlQuery::create(null, $criteria);
        $query->joinWith('SpyCategoryNode', $joinBehavior);

        return $this->getSpyUrls($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyUrls from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyUrl[] List of SpyUrl objects
     * @phpstan-return ObjectCollection&\Traversable<SpyUrl}> List of SpyUrl objects
     */
    public function getSpyUrlsJoinCmsPage(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyUrlQuery::create(null, $criteria);
        $query->joinWith('CmsPage', $joinBehavior);

        return $this->getSpyUrls($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyUrls from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyUrl[] List of SpyUrl objects
     * @phpstan-return ObjectCollection&\Traversable<SpyUrl}> List of SpyUrl objects
     */
    public function getSpyUrlsJoinSpyProductSet(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyUrlQuery::create(null, $criteria);
        $query->joinWith('SpyProductSet', $joinBehavior);

        return $this->getSpyUrls($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyUrls from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyUrl[] List of SpyUrl objects
     * @phpstan-return ObjectCollection&\Traversable<SpyUrl}> List of SpyUrl objects
     */
    public function getSpyUrlsJoinSpyProduct(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyUrlQuery::create(null, $criteria);
        $query->joinWith('SpyProduct', $joinBehavior);

        return $this->getSpyUrls($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyUrls from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyUrl[] List of SpyUrl objects
     * @phpstan-return ObjectCollection&\Traversable<SpyUrl}> List of SpyUrl objects
     */
    public function getSpyUrlsJoinSpyLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyUrlQuery::create(null, $criteria);
        $query->joinWith('SpyLocale', $joinBehavior);

        return $this->getSpyUrls($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchant is new, it will return
     * an empty collection; or if this SpyMerchant has previously
     * been saved, it will retrieve related SpyUrls from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchant.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyUrl[] List of SpyUrl objects
     * @phpstan-return ObjectCollection&\Traversable<SpyUrl}> List of SpyUrl objects
     */
    public function getSpyUrlsJoinSpyUrlRedirect(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyUrlQuery::create(null, $criteria);
        $query->joinWith('SpyUrlRedirect', $joinBehavior);

        return $this->getSpyUrls($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_merchant = null;
        $this->email = null;
        $this->is_active = null;
        $this->merchant_reference = null;
        $this->name = null;
        $this->registration_number = null;
        $this->status = null;
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
            if ($this->collSpyMerchantStores) {
                foreach ($this->collSpyMerchantStores as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyMerchantRelationships) {
                foreach ($this->collSpyMerchantRelationships as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyUrls) {
                foreach ($this->collSpyUrls as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyMerchantStores = null;
        $this->collSpyMerchantRelationships = null;
        $this->collSpyUrls = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyMerchantTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpyMerchant The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyMerchantTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_merchant.create';
        } else {
            $this->_eventName = 'Entity.spy_merchant.update';
        }

        $this->_modifiedColumns = $this->getModifiedColumns();
        $this->_isModified = $this->isModified();
    }

    /**
     * @return void
     */
    public function disableEvent()
    {
        $this->_isEventDisabled = true;
    }

    /**
     * @return void
     */
    public function enableEvent()
    {
        $this->_isEventDisabled = false;
    }

    /**
     * @return void
     */
    protected function addSaveEventToMemory()
    {
        if ($this->_isEventDisabled) {
            return;
        }

        if ($this->_eventName !== 'Entity.spy_merchant.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_merchant',
            'id' => $this->getPrimaryKey(),
            'event' => $this->_eventName,
            'foreignKeys' => $this->getForeignKeys(),
            'modifiedColumns' => $this->_modifiedColumns,
            'originalValues' => $this->getOriginalValues(),
            'additionalValues' => $this->getAdditionalValues(),
        ];

        $this->saveEventBehaviorEntityChange($data);

        unset($this->_eventName);
        unset($this->_modifiedColumns);
        unset($this->_isModified);
    }

    /**
     * @return void
     */
    protected function addDeleteEventToMemory()
    {
        if ($this->_isEventDisabled) {
            return;
        }

        $data = [
            'name' => 'spy_merchant',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_merchant.delete',
            'foreignKeys' => $this->getForeignKeys(),
            'additionalValues' => $this->getAdditionalValues(),
        ];

        $this->saveEventBehaviorEntityChange($data);
    }

    /**
     * @return array
     */
    protected function getForeignKeys()
    {
        $foreignKeysWithValue = [];
        foreach ($this->_foreignKeys as $key => $value) {
            $foreignKeysWithValue[$key] = $this->getByName($value);
        }

        return $foreignKeysWithValue;
    }

    /**
     * @param array $data
     *
     * @return void
     */
    protected function saveEventBehaviorEntityChange(array $data)
    {
        $isInstancePoolingDisabledSuccessfully = \Propel\Runtime\Propel::disableInstancePooling();

        $spyEventBehaviorEntityChange = new \Orm\Zed\EventBehavior\Persistence\SpyEventBehaviorEntityChange();
        $spyEventBehaviorEntityChange->setData(json_encode($data));
        $spyEventBehaviorEntityChange->setProcessId(\Spryker\Zed\Kernel\RequestIdentifier::getRequestId());
        $spyEventBehaviorEntityChange->save();

        if ($isInstancePoolingDisabledSuccessfully) {
            \Propel\Runtime\Propel::enableInstancePooling();
        }
    }

    /**
     * @return bool
     */
    protected function isEventColumnsModified()
    {
        $eventColumns = [
                'spy_merchant.is_active' => [
                    'column' => 'is_active',
                ],
        ];

        foreach ($this->_modifiedColumns as $modifiedColumn) {
            if (isset($eventColumns[$modifiedColumn])) {

                if (!isset($eventColumns[$modifiedColumn]['value'])) {
                    return true;
                }

                $xmlValue = $eventColumns[$modifiedColumn]['value'];
                $xmlValue = $this->getPhpType($xmlValue, $modifiedColumn);
                $xmlOperator = '';
                if (isset($eventColumns[$modifiedColumn]['operator'])) {
                    $xmlOperator = $eventColumns[$modifiedColumn]['operator'];
                }
                $before = $this->_initialValues[$modifiedColumn];
                $field = str_replace('spy_merchant.', '', $modifiedColumn);
                $after = $this->$field;

                if ($before === null && $after !== null) {
                    return true;
                }

                if ($before !== null && $after === null) {
                    return true;
                }

                switch ($xmlOperator) {
                    case '<':
                        $result = ($before < $xmlValue xor $after < $xmlValue);
                        break;
                    case '>':
                        $result = ($before > $xmlValue xor $after > $xmlValue);
                        break;
                    case '<=':
                        $result = ($before <= $xmlValue xor $after <= $xmlValue);
                        break;
                    case '>=':
                        $result = ($before >= $xmlValue xor $after >= $xmlValue);
                        break;
                    case '<>':
                        $result = ($before <> $xmlValue xor $after <> $xmlValue);
                        break;
                    case '!=':
                        $result = ($before != $xmlValue xor $after != $xmlValue);
                        break;
                    case '==':
                        $result = ($before == $xmlValue xor $after == $xmlValue);
                        break;
                    case '!==':
                        $result = ($before !== $xmlValue xor $after !== $xmlValue);
                        break;
                    default:
                        $result = ($before === $xmlValue xor $after === $xmlValue);
                }

                if ($result) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @return array
     */
    protected function getOriginalValueColumnNames(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function getOriginalValues(): array
    {
        if ($this->isNew()) {
            return [];
        }

        $originalValues = [];
        foreach ($this->_modifiedColumns as $modifiedColumn) {
            if (!in_array($modifiedColumn, $this->getOriginalValueColumnNames())) {
                continue;
            }

            $before = $this->_initialValues[$modifiedColumn];
            $field = str_replace('spy_merchant.', '', $modifiedColumn);
            $after = $this->$field;

            if ($before !== $after) {
                $originalValues[$modifiedColumn] = $before;
            }
        }

        return $originalValues;
    }

    /**
     * @return array
     */
    protected function getAdditionalValueColumnNames(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function getAdditionalValues(): array
    {
        $additionalValues = [];
        foreach ($this->getAdditionalValueColumnNames() as $additionalValueColumnName) {
            $field = str_replace('spy_merchant.', '', $additionalValueColumnName);
            $additionalValues[$additionalValueColumnName] = $this->$field;
        }

        return $additionalValues;
    }

    /**
     * @param string $xmlValue
     * @param string $column
     *
     * @return array|bool|\DateTime|float|int|object
     */
    protected function getPhpType($xmlValue, $column)
    {
        $columnType = SpyMerchantTableMap::getTableMap()->getColumn($column)->getType();
        if (in_array(strtoupper($columnType), ['INTEGER', 'TINYINT', 'SMALLINT'])) {
            $xmlValue = (int) $xmlValue;
        } else if (in_array(strtoupper($columnType), ['REAL', 'FLOAT', 'DOUBLE', 'BINARY', 'VARBINARY', 'LONGVARBINARY'])) {
            $xmlValue = (double) $xmlValue;
        } else if (strtoupper($columnType) === 'ARRAY') {
            $xmlValue = (array) $xmlValue;
        } else if (strtoupper($columnType) === 'BOOLEAN') {
            $xmlValue = filter_var($xmlValue,  FILTER_VALIDATE_BOOLEAN);
        } else if (strtoupper($columnType) === 'OBJECT') {
            $xmlValue = (object) $xmlValue;
        } else if (in_array(strtoupper($columnType), ['DATE', 'TIME', 'TIMESTAMP', 'BU_DATE', 'BU_TIMESTAMP'])) {
            $xmlValue = \DateTime::createFromFormat('Y-m-d H:i:s', $xmlValue);
        }

        return $xmlValue;
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
