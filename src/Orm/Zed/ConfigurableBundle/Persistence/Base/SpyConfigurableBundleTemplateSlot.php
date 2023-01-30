<?php

namespace Orm\Zed\ConfigurableBundle\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplate as ChildSpyConfigurableBundleTemplate;
use Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateQuery as ChildSpyConfigurableBundleTemplateQuery;
use Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot as ChildSpyConfigurableBundleTemplateSlot;
use Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlotQuery as ChildSpyConfigurableBundleTemplateSlotQuery;
use Orm\Zed\ConfigurableBundle\Persistence\Map\SpyConfigurableBundleTemplateSlotTableMap;
use Orm\Zed\ProductList\Persistence\SpyProductList;
use Orm\Zed\ProductList\Persistence\SpyProductListQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'spy_configurable_bundle_template_slot' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.ConfigurableBundle.Persistence.Base
 */
abstract class SpyConfigurableBundleTemplateSlot implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\ConfigurableBundle\\Persistence\\Map\\SpyConfigurableBundleTemplateSlotTableMap';


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
     * The value for the id_configurable_bundle_template_slot field.
     *
     * @var        int
     */
    protected $id_configurable_bundle_template_slot;

    /**
     * The value for the fk_configurable_bundle_template field.
     *
     * @var        int
     */
    protected $fk_configurable_bundle_template;

    /**
     * The value for the fk_product_list field.
     *
     * @var        int|null
     */
    protected $fk_product_list;

    /**
     * The value for the key field.
     * Key is an identifier for existing entities. This should never be changed.
     * @var        string|null
     */
    protected $key;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the uuid field.
     *
     * @var        string|null
     */
    protected $uuid;

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
     * @var        ChildSpyConfigurableBundleTemplate
     */
    protected $aSpyConfigurableBundleTemplate;

    /**
     * @var        SpyProductList
     */
    protected $aSpyProductList;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    // uuid behavior
    /**
     * @var \Spryker\Service\UtilUuidGenerator\UtilUuidGeneratorServiceInterface
     */
    protected static $_uuidGeneratorService;

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
        'spy_configurable_bundle_template_slot.fk_configurable_bundle_template' => 'fk_configurable_bundle_template',
        'spy_configurable_bundle_template_slot.fk_product_list' => 'fk_product_list',
    ];

    /**
     * Initializes internal state of Orm\Zed\ConfigurableBundle\Persistence\Base\SpyConfigurableBundleTemplateSlot object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>SpyConfigurableBundleTemplateSlot</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyConfigurableBundleTemplateSlot</code>, delegates to
     * <code>equals(SpyConfigurableBundleTemplateSlot)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_configurable_bundle_template_slot] column value.
     *
     * @return int
     */
    public function getIdConfigurableBundleTemplateSlot()
    {
        return $this->id_configurable_bundle_template_slot;
    }

    /**
     * Get the [fk_configurable_bundle_template] column value.
     *
     * @return int
     */
    public function getFkConfigurableBundleTemplate()
    {
        return $this->fk_configurable_bundle_template;
    }

    /**
     * Get the [fk_product_list] column value.
     *
     * @return int|null
     */
    public function getFkProductList()
    {
        return $this->fk_product_list;
    }

    /**
     * Get the [key] column value.
     * Key is an identifier for existing entities. This should never be changed.
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
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
     * Get the [uuid] column value.
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
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
     * Set the value of [id_configurable_bundle_template_slot] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function setIdConfigurableBundleTemplateSlot($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_configurable_bundle_template_slot !== $v) {
            $this->id_configurable_bundle_template_slot = $v;
            $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT] = true;
        }

        return $this;
    } // setIdConfigurableBundleTemplateSlot()

    /**
     * Set the value of [fk_configurable_bundle_template] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function setFkConfigurableBundleTemplate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_configurable_bundle_template !== $v) {
            $this->fk_configurable_bundle_template = $v;
            $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_FK_CONFIGURABLE_BUNDLE_TEMPLATE] = true;
        }

        if ($this->aSpyConfigurableBundleTemplate !== null && $this->aSpyConfigurableBundleTemplate->getIdConfigurableBundleTemplate() !== $v) {
            $this->aSpyConfigurableBundleTemplate = null;
        }

        return $this;
    } // setFkConfigurableBundleTemplate()

    /**
     * Set the value of [fk_product_list] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function setFkProductList($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_product_list !== $v) {
            $this->fk_product_list = $v;
            $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_FK_PRODUCT_LIST] = true;
        }

        if ($this->aSpyProductList !== null && $this->aSpyProductList->getIdProductList() !== $v) {
            $this->aSpyProductList = null;
        }

        return $this;
    } // setFkProductList()

    /**
     * Set the value of [key] column.
     * Key is an identifier for existing entities. This should never be changed.
     * @param string|null $v New value
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function setKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->key !== $v) {
            $this->key = $v;
            $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_KEY] = true;
        }

        return $this;
    } // setKey()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
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
            $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [uuid] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function setUuid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->uuid !== $v) {
            $this->uuid = $v;
            $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_UUID] = true;
        }

        return $this;
    } // setUuid()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_UPDATED_AT] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('IdConfigurableBundleTemplateSlot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_configurable_bundle_template_slot = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('FkConfigurableBundleTemplate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_configurable_bundle_template = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('FkProductList', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_product_list = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('Key', TableMap::TYPE_PHPNAME, $indexType)];
            $this->key = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('Uuid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->uuid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyConfigurableBundleTemplateSlotTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = SpyConfigurableBundleTemplateSlotTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\ConfigurableBundle\\Persistence\\SpyConfigurableBundleTemplateSlot'), 0, $e);
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
        if ($this->aSpyConfigurableBundleTemplate !== null && $this->fk_configurable_bundle_template !== $this->aSpyConfigurableBundleTemplate->getIdConfigurableBundleTemplate()) {
            $this->aSpyConfigurableBundleTemplate = null;
        }
        if ($this->aSpyProductList !== null && $this->fk_product_list !== $this->aSpyProductList->getIdProductList()) {
            $this->aSpyProductList = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyConfigurableBundleTemplateSlotTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyConfigurableBundleTemplateSlotQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyConfigurableBundleTemplate = null;
            $this->aSpyProductList = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyConfigurableBundleTemplateSlot::setDeleted()
     * @see SpyConfigurableBundleTemplateSlot::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyConfigurableBundleTemplateSlotTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyConfigurableBundleTemplateSlotQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyConfigurableBundleTemplateSlotTableMap::DATABASE_NAME);
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
                if (!$this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // uuid behavior
                $this->updateUuidBeforeUpdate();
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt(\Propel\Runtime\Util\PropelDateTime::createHighPrecision());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                    // uuid behavior
                    $this->updateUuidAfterInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // event behavior

                if ($affectedRows) {
                    $this->addSaveEventToMemory();
                }

                SpyConfigurableBundleTemplateSlotTableMap::addInstanceToPool($this);
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

            if ($this->aSpyConfigurableBundleTemplate !== null) {
                if ($this->aSpyConfigurableBundleTemplate->isModified() || $this->aSpyConfigurableBundleTemplate->isNew()) {
                    $affectedRows += $this->aSpyConfigurableBundleTemplate->save($con);
                }
                $this->setSpyConfigurableBundleTemplate($this->aSpyConfigurableBundleTemplate);
            }

            if ($this->aSpyProductList !== null) {
                if ($this->aSpyProductList->isModified() || $this->aSpyProductList->isNew()) {
                    $affectedRows += $this->aSpyProductList->save($con);
                }
                $this->setSpyProductList($this->aSpyProductList);
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

        $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT] = true;
        if (null !== $this->id_configurable_bundle_template_slot) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyConfigurableBundleTemplateSlotTableMap::COL_ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT)) {
            $modifiedColumns[':p' . $index++]  = '`id_configurable_bundle_template_slot`';
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_FK_CONFIGURABLE_BUNDLE_TEMPLATE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_configurable_bundle_template`';
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_FK_PRODUCT_LIST)) {
            $modifiedColumns[':p' . $index++]  = '`fk_product_list`';
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`key`';
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_UUID)) {
            $modifiedColumns[':p' . $index++]  = '`uuid`';
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_configurable_bundle_template_slot` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_configurable_bundle_template_slot`':
                        $stmt->bindValue($identifier, $this->id_configurable_bundle_template_slot, PDO::PARAM_INT);
                        break;
                    case '`fk_configurable_bundle_template`':
                        $stmt->bindValue($identifier, $this->fk_configurable_bundle_template, PDO::PARAM_INT);
                        break;
                    case '`fk_product_list`':
                        $stmt->bindValue($identifier, $this->fk_product_list, PDO::PARAM_INT);
                        break;
                    case '`key`':
                        $stmt->bindValue($identifier, $this->key, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`uuid`':
                        $stmt->bindValue($identifier, $this->uuid, PDO::PARAM_STR);
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
            $pk = $con->lastInsertId('spy_configurable_bundle_template_slot_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdConfigurableBundleTemplateSlot($pk);

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
        $pos = SpyConfigurableBundleTemplateSlotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdConfigurableBundleTemplateSlot();
                break;
            case 1:
                return $this->getFkConfigurableBundleTemplate();
                break;
            case 2:
                return $this->getFkProductList();
                break;
            case 3:
                return $this->getKey();
                break;
            case 4:
                return $this->getName();
                break;
            case 5:
                return $this->getUuid();
                break;
            case 6:
                return $this->getCreatedAt();
                break;
            case 7:
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

        if (isset($alreadyDumpedObjects['SpyConfigurableBundleTemplateSlot'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyConfigurableBundleTemplateSlot'][$this->hashCode()] = true;
        $keys = SpyConfigurableBundleTemplateSlotTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdConfigurableBundleTemplateSlot(),
            $keys[1] => $this->getFkConfigurableBundleTemplate(),
            $keys[2] => $this->getFkProductList(),
            $keys[3] => $this->getKey(),
            $keys[4] => $this->getName(),
            $keys[5] => $this->getUuid(),
            $keys[6] => $this->getCreatedAt(),
            $keys[7] => $this->getUpdatedAt(),
        );
        if ($result[$keys[6]] instanceof \DateTimeInterface) {
            $result[$keys[6]] = $result[$keys[6]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[7]] instanceof \DateTimeInterface) {
            $result[$keys[7]] = $result[$keys[7]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyConfigurableBundleTemplate) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyConfigurableBundleTemplate';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_configurable_bundle_template';
                        break;
                    default:
                        $key = 'SpyConfigurableBundleTemplate';
                }

                $result[$key] = $this->aSpyConfigurableBundleTemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyProductList) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductList';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_list';
                        break;
                    default:
                        $key = 'SpyProductList';
                }

                $result[$key] = $this->aSpyProductList->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyConfigurableBundleTemplateSlotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdConfigurableBundleTemplateSlot($value);
                break;
            case 1:
                $this->setFkConfigurableBundleTemplate($value);
                break;
            case 2:
                $this->setFkProductList($value);
                break;
            case 3:
                $this->setKey($value);
                break;
            case 4:
                $this->setName($value);
                break;
            case 5:
                $this->setUuid($value);
                break;
            case 6:
                $this->setCreatedAt($value);
                break;
            case 7:
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
     * @return     $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyConfigurableBundleTemplateSlotTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdConfigurableBundleTemplateSlot($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkConfigurableBundleTemplate($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkProductList($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setKey($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setName($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setUuid($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCreatedAt($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setUpdatedAt($arr[$keys[7]]);
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
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object, for fluid interface
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
        $criteria = new Criteria(SpyConfigurableBundleTemplateSlotTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT, $this->id_configurable_bundle_template_slot);
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_FK_CONFIGURABLE_BUNDLE_TEMPLATE)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_FK_CONFIGURABLE_BUNDLE_TEMPLATE, $this->fk_configurable_bundle_template);
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_FK_PRODUCT_LIST)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_FK_PRODUCT_LIST, $this->fk_product_list);
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_KEY)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_KEY, $this->key);
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_NAME)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_UUID)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_UUID, $this->uuid);
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyConfigurableBundleTemplateSlotTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildSpyConfigurableBundleTemplateSlotQuery::create();
        $criteria->add(SpyConfigurableBundleTemplateSlotTableMap::COL_ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT, $this->id_configurable_bundle_template_slot);

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
        $validPk = null !== $this->getIdConfigurableBundleTemplateSlot();

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
        return $this->getIdConfigurableBundleTemplateSlot();
    }

    /**
     * Generic method to set the primary key (id_configurable_bundle_template_slot column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdConfigurableBundleTemplateSlot($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdConfigurableBundleTemplateSlot();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkConfigurableBundleTemplate($this->getFkConfigurableBundleTemplate());
        $copyObj->setFkProductList($this->getFkProductList());
        $copyObj->setKey($this->getKey());
        $copyObj->setName($this->getName());
        $copyObj->setUuid($this->getUuid());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdConfigurableBundleTemplateSlot(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot Clone of current object.
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
     * Declares an association between this object and a ChildSpyConfigurableBundleTemplate object.
     *
     * @param  ChildSpyConfigurableBundleTemplate $v
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyConfigurableBundleTemplate(ChildSpyConfigurableBundleTemplate $v = null)
    {
        if ($v === null) {
            $this->setFkConfigurableBundleTemplate(NULL);
        } else {
            $this->setFkConfigurableBundleTemplate($v->getIdConfigurableBundleTemplate());
        }

        $this->aSpyConfigurableBundleTemplate = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyConfigurableBundleTemplate object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyConfigurableBundleTemplateSlot($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyConfigurableBundleTemplate object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyConfigurableBundleTemplate The associated ChildSpyConfigurableBundleTemplate object.
     * @throws PropelException
     */
    public function getSpyConfigurableBundleTemplate(ConnectionInterface $con = null)
    {
        if ($this->aSpyConfigurableBundleTemplate === null && ($this->fk_configurable_bundle_template != 0)) {
            $this->aSpyConfigurableBundleTemplate = ChildSpyConfigurableBundleTemplateQuery::create()->findPk($this->fk_configurable_bundle_template, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyConfigurableBundleTemplate->addSpyConfigurableBundleTemplateSlots($this);
             */
        }

        return $this->aSpyConfigurableBundleTemplate;
    }

    /**
     * Declares an association between this object and a SpyProductList object.
     *
     * @param  SpyProductList|null $v
     * @return $this|\Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyProductList(SpyProductList $v = null)
    {
        if ($v === null) {
            $this->setFkProductList(NULL);
        } else {
            $this->setFkProductList($v->getIdProductList());
        }

        $this->aSpyProductList = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyProductList object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyConfigurableBundleTemplateSlot($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyProductList object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyProductList|null The associated SpyProductList object.
     * @throws PropelException
     */
    public function getSpyProductList(ConnectionInterface $con = null)
    {
        if ($this->aSpyProductList === null && ($this->fk_product_list != 0)) {
            $this->aSpyProductList = SpyProductListQuery::create()->findPk($this->fk_product_list, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyProductList->addSpyConfigurableBundleTemplateSlots($this);
             */
        }

        return $this->aSpyProductList;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyConfigurableBundleTemplate) {
            $this->aSpyConfigurableBundleTemplate->removeSpyConfigurableBundleTemplateSlot($this);
        }
        if (null !== $this->aSpyProductList) {
            $this->aSpyProductList->removeSpyConfigurableBundleTemplateSlot($this);
        }
        $this->id_configurable_bundle_template_slot = null;
        $this->fk_configurable_bundle_template = null;
        $this->fk_product_list = null;
        $this->key = null;
        $this->name = null;
        $this->uuid = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
        } // if ($deep)

        $this->aSpyConfigurableBundleTemplate = null;
        $this->aSpyProductList = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyConfigurableBundleTemplateSlotTableMap::DEFAULT_STRING_FORMAT);
    }

    // uuid behavior

    /**
     * @return \Spryker\Service\UtilUuidGenerator\UtilUuidGeneratorServiceInterface
     */
    protected function getUuidGeneratorService()
    {
        if (static::$_uuidGeneratorService === null) {
            static::$_uuidGeneratorService = \Spryker\Zed\Kernel\Locator::getInstance()->utilUuidGenerator()->service();
        }

        return static::$_uuidGeneratorService;
    }

    /**
     * @return void
     */
    protected function setGeneratedUuid()
    {
        $uuidGenerateUtilService = $this->getUuidGeneratorService();
        $name = 'spy_configurable_bundle_template_slot' . '.' . $this->getIdConfigurableBundleTemplateSlot();
        $uuid = $uuidGenerateUtilService->generateUuid5FromObjectId($name);
        $this->setUuid($uuid);
    }

    /**
     * @param ConnectionInterface $con
     *
     * @return void
     */
    protected function updateUuidAfterInsert(ConnectionInterface $con = null)
    {
        if (!$this->getUuid()) {
            $this->setGeneratedUuid();
            $this->doSave($con);
        }
    }

    /**
     * @return void
     */
    protected function updateUuidBeforeUpdate()
    {
        if (!$this->getUuid()) {
            $this->setGeneratedUuid();
        }
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpyConfigurableBundleTemplateSlot The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyConfigurableBundleTemplateSlotTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_configurable_bundle_template_slot.create';
        } else {
            $this->_eventName = 'Entity.spy_configurable_bundle_template_slot.update';
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

        if ($this->_eventName !== 'Entity.spy_configurable_bundle_template_slot.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_configurable_bundle_template_slot',
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
            'name' => 'spy_configurable_bundle_template_slot',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_configurable_bundle_template_slot.delete',
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
        /* There is a wildcard(*) property for this event */
        return true;
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
            $field = str_replace('spy_configurable_bundle_template_slot.', '', $modifiedColumn);
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
            $field = str_replace('spy_configurable_bundle_template_slot.', '', $additionalValueColumnName);
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
        $columnType = SpyConfigurableBundleTemplateSlotTableMap::getTableMap()->getColumn($column)->getType();
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
