<?php

namespace Orm\Zed\Newsletter\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber as ChildSpyNewsletterSubscriber;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery as ChildSpyNewsletterSubscriberQuery;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription as ChildSpyNewsletterSubscription;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriptionQuery as ChildSpyNewsletterSubscriptionQuery;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterType as ChildSpyNewsletterType;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterTypeQuery as ChildSpyNewsletterTypeQuery;
use Orm\Zed\Newsletter\Persistence\Map\SpyNewsletterSubscriptionTableMap;
use Orm\Zed\Newsletter\Persistence\Map\SpyNewsletterTypeTableMap;
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
 * Base class that represents a row from the 'spy_newsletter_type' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Newsletter.Persistence.Base
 */
abstract class SpyNewsletterType implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Newsletter\\Persistence\\Map\\SpyNewsletterTypeTableMap';


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
     * The value for the id_newsletter_type field.
     *
     * @var        int
     */
    protected $id_newsletter_type;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

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
     * @var        ObjectCollection|ChildSpyNewsletterSubscription[] Collection to store aggregation of ChildSpyNewsletterSubscription objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyNewsletterSubscription> Collection to store aggregation of ChildSpyNewsletterSubscription objects.
     */
    protected $collSpyNewsletterSubscriptions;
    protected $collSpyNewsletterSubscriptionsPartial;

    /**
     * @var        ObjectCollection|ChildSpyNewsletterSubscriber[] Cross Collection to store aggregation of ChildSpyNewsletterSubscriber objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyNewsletterSubscriber> Cross Collection to store aggregation of ChildSpyNewsletterSubscriber objects.
     */
    protected $collSpyNewsletterSubscribers;

    /**
     * @var bool
     */
    protected $collSpyNewsletterSubscribersPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyNewsletterSubscriber[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyNewsletterSubscriber>
     */
    protected $spyNewsletterSubscribersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyNewsletterSubscription[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyNewsletterSubscription>
     */
    protected $spyNewsletterSubscriptionsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\Newsletter\Persistence\Base\SpyNewsletterType object.
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
     * Compares this with another <code>SpyNewsletterType</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyNewsletterType</code>, delegates to
     * <code>equals(SpyNewsletterType)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_newsletter_type] column value.
     *
     * @return int
     */
    public function getIdNewsletterType()
    {
        return $this->id_newsletter_type;
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
     * Set the value of [id_newsletter_type] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType The current object (for fluent API support)
     */
    public function setIdNewsletterType($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_newsletter_type !== $v) {
            $this->id_newsletter_type = $v;
            $this->modifiedColumns[SpyNewsletterTypeTableMap::COL_ID_NEWSLETTER_TYPE] = true;
        }

        return $this;
    } // setIdNewsletterType()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType The current object (for fluent API support)
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
            $this->modifiedColumns[SpyNewsletterTypeTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyNewsletterTypeTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyNewsletterTypeTableMap::COL_UPDATED_AT] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyNewsletterTypeTableMap::translateFieldName('IdNewsletterType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_newsletter_type = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyNewsletterTypeTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyNewsletterTypeTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyNewsletterTypeTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = SpyNewsletterTypeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Newsletter\\Persistence\\SpyNewsletterType'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyNewsletterTypeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyNewsletterTypeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSpyNewsletterSubscriptions = null;

            $this->collSpyNewsletterSubscribers = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyNewsletterType::setDeleted()
     * @see SpyNewsletterType::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyNewsletterTypeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyNewsletterTypeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyNewsletterTypeTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyNewsletterTypeTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyNewsletterTypeTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyNewsletterTypeTableMap::COL_UPDATED_AT)) {
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
                SpyNewsletterTypeTableMap::addInstanceToPool($this);
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

            if ($this->spyNewsletterSubscribersScheduledForDeletion !== null) {
                if (!$this->spyNewsletterSubscribersScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    foreach ($this->spyNewsletterSubscribersScheduledForDeletion as $entry) {
                        $entryPk = [];

                        $entryPk[1] = $this->getIdNewsletterType();
                        $entryPk[0] = $entry->getIdNewsletterSubscriber();
                        $pks[] = $entryPk;
                    }

                    \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriptionQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);

                    $this->spyNewsletterSubscribersScheduledForDeletion = null;
                }

            }

            if ($this->collSpyNewsletterSubscribers) {
                foreach ($this->collSpyNewsletterSubscribers as $spyNewsletterSubscriber) {
                    if (!$spyNewsletterSubscriber->isDeleted() && ($spyNewsletterSubscriber->isNew() || $spyNewsletterSubscriber->isModified())) {
                        $spyNewsletterSubscriber->save($con);
                    }
                }
            }


            if ($this->spyNewsletterSubscriptionsScheduledForDeletion !== null) {
                if (!$this->spyNewsletterSubscriptionsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriptionQuery::create()
                        ->filterByPrimaryKeys($this->spyNewsletterSubscriptionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyNewsletterSubscriptionsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyNewsletterSubscriptions !== null) {
                foreach ($this->collSpyNewsletterSubscriptions as $referrerFK) {
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

        $this->modifiedColumns[SpyNewsletterTypeTableMap::COL_ID_NEWSLETTER_TYPE] = true;
        if (null !== $this->id_newsletter_type) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyNewsletterTypeTableMap::COL_ID_NEWSLETTER_TYPE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_ID_NEWSLETTER_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_newsletter_type`';
        }
        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_newsletter_type` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_newsletter_type`':
                        $stmt->bindValue($identifier, $this->id_newsletter_type, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
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
            $pk = $con->lastInsertId('spy_newsletter_type_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdNewsletterType($pk);

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
        $pos = SpyNewsletterTypeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdNewsletterType();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getCreatedAt();
                break;
            case 3:
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

        if (isset($alreadyDumpedObjects['SpyNewsletterType'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyNewsletterType'][$this->hashCode()] = true;
        $keys = SpyNewsletterTypeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdNewsletterType(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getCreatedAt(),
            $keys[3] => $this->getUpdatedAt(),
        );
        if ($result[$keys[2]] instanceof \DateTimeInterface) {
            $result[$keys[2]] = $result[$keys[2]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSpyNewsletterSubscriptions) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyNewsletterSubscriptions';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_newsletter_subscriptions';
                        break;
                    default:
                        $key = 'SpyNewsletterSubscriptions';
                }

                $result[$key] = $this->collSpyNewsletterSubscriptions->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyNewsletterTypeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdNewsletterType($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setCreatedAt($value);
                break;
            case 3:
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
     * @return     $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyNewsletterTypeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdNewsletterType($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCreatedAt($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setUpdatedAt($arr[$keys[3]]);
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
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType The current object, for fluid interface
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
        $criteria = new Criteria(SpyNewsletterTypeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_ID_NEWSLETTER_TYPE)) {
            $criteria->add(SpyNewsletterTypeTableMap::COL_ID_NEWSLETTER_TYPE, $this->id_newsletter_type);
        }
        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_NAME)) {
            $criteria->add(SpyNewsletterTypeTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyNewsletterTypeTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyNewsletterTypeTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyNewsletterTypeTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildSpyNewsletterTypeQuery::create();
        $criteria->add(SpyNewsletterTypeTableMap::COL_ID_NEWSLETTER_TYPE, $this->id_newsletter_type);

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
        $validPk = null !== $this->getIdNewsletterType();

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
        return $this->getIdNewsletterType();
    }

    /**
     * Generic method to set the primary key (id_newsletter_type column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdNewsletterType($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdNewsletterType();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Newsletter\Persistence\SpyNewsletterType (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyNewsletterSubscriptions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyNewsletterSubscription($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdNewsletterType(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Newsletter\Persistence\SpyNewsletterType Clone of current object.
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
        if ('SpyNewsletterSubscription' === $relationName) {
            $this->initSpyNewsletterSubscriptions();
            return;
        }
    }

    /**
     * Clears out the collSpyNewsletterSubscriptions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyNewsletterSubscriptions()
     */
    public function clearSpyNewsletterSubscriptions()
    {
        $this->collSpyNewsletterSubscriptions = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyNewsletterSubscriptions collection loaded partially.
     */
    public function resetPartialSpyNewsletterSubscriptions($v = true)
    {
        $this->collSpyNewsletterSubscriptionsPartial = $v;
    }

    /**
     * Initializes the collSpyNewsletterSubscriptions collection.
     *
     * By default this just sets the collSpyNewsletterSubscriptions collection to an empty array (like clearcollSpyNewsletterSubscriptions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyNewsletterSubscriptions($overrideExisting = true)
    {
        if (null !== $this->collSpyNewsletterSubscriptions && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyNewsletterSubscriptionTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyNewsletterSubscriptions = new $collectionClassName;
        $this->collSpyNewsletterSubscriptions->setModel('\Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription');
    }

    /**
     * Gets an array of ChildSpyNewsletterSubscription objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyNewsletterType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyNewsletterSubscription[] List of ChildSpyNewsletterSubscription objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyNewsletterSubscription> List of ChildSpyNewsletterSubscription objects
     * @throws PropelException
     */
    public function getSpyNewsletterSubscriptions(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyNewsletterSubscriptionsPartial && !$this->isNew();
        if (null === $this->collSpyNewsletterSubscriptions || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyNewsletterSubscriptions) {
                    $this->initSpyNewsletterSubscriptions();
                } else {
                    $collectionClassName = SpyNewsletterSubscriptionTableMap::getTableMap()->getCollectionClassName();

                    $collSpyNewsletterSubscriptions = new $collectionClassName;
                    $collSpyNewsletterSubscriptions->setModel('\Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription');

                    return $collSpyNewsletterSubscriptions;
                }
            } else {
                $collSpyNewsletterSubscriptions = ChildSpyNewsletterSubscriptionQuery::create(null, $criteria)
                    ->filterBySpyNewsletterType($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyNewsletterSubscriptionsPartial && count($collSpyNewsletterSubscriptions)) {
                        $this->initSpyNewsletterSubscriptions(false);

                        foreach ($collSpyNewsletterSubscriptions as $obj) {
                            if (false == $this->collSpyNewsletterSubscriptions->contains($obj)) {
                                $this->collSpyNewsletterSubscriptions->append($obj);
                            }
                        }

                        $this->collSpyNewsletterSubscriptionsPartial = true;
                    }

                    return $collSpyNewsletterSubscriptions;
                }

                if ($partial && $this->collSpyNewsletterSubscriptions) {
                    foreach ($this->collSpyNewsletterSubscriptions as $obj) {
                        if ($obj->isNew()) {
                            $collSpyNewsletterSubscriptions[] = $obj;
                        }
                    }
                }

                $this->collSpyNewsletterSubscriptions = $collSpyNewsletterSubscriptions;
                $this->collSpyNewsletterSubscriptionsPartial = false;
            }
        }

        return $this->collSpyNewsletterSubscriptions;
    }

    /**
     * Sets a collection of ChildSpyNewsletterSubscription objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyNewsletterSubscriptions A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyNewsletterType The current object (for fluent API support)
     */
    public function setSpyNewsletterSubscriptions(Collection $spyNewsletterSubscriptions, ConnectionInterface $con = null)
    {
        /** @var ChildSpyNewsletterSubscription[] $spyNewsletterSubscriptionsToDelete */
        $spyNewsletterSubscriptionsToDelete = $this->getSpyNewsletterSubscriptions(new Criteria(), $con)->diff($spyNewsletterSubscriptions);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->spyNewsletterSubscriptionsScheduledForDeletion = clone $spyNewsletterSubscriptionsToDelete;

        foreach ($spyNewsletterSubscriptionsToDelete as $spyNewsletterSubscriptionRemoved) {
            $spyNewsletterSubscriptionRemoved->setSpyNewsletterType(null);
        }

        $this->collSpyNewsletterSubscriptions = null;
        foreach ($spyNewsletterSubscriptions as $spyNewsletterSubscription) {
            $this->addSpyNewsletterSubscription($spyNewsletterSubscription);
        }

        $this->collSpyNewsletterSubscriptions = $spyNewsletterSubscriptions;
        $this->collSpyNewsletterSubscriptionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyNewsletterSubscription objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyNewsletterSubscription objects.
     * @throws PropelException
     */
    public function countSpyNewsletterSubscriptions(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyNewsletterSubscriptionsPartial && !$this->isNew();
        if (null === $this->collSpyNewsletterSubscriptions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyNewsletterSubscriptions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyNewsletterSubscriptions());
            }

            $query = ChildSpyNewsletterSubscriptionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyNewsletterType($this)
                ->count($con);
        }

        return count($this->collSpyNewsletterSubscriptions);
    }

    /**
     * Method called to associate a ChildSpyNewsletterSubscription object to this object
     * through the ChildSpyNewsletterSubscription foreign key attribute.
     *
     * @param  ChildSpyNewsletterSubscription $l ChildSpyNewsletterSubscription
     * @return $this|\Orm\Zed\Newsletter\Persistence\SpyNewsletterType The current object (for fluent API support)
     */
    public function addSpyNewsletterSubscription(ChildSpyNewsletterSubscription $l)
    {
        if ($this->collSpyNewsletterSubscriptions === null) {
            $this->initSpyNewsletterSubscriptions();
            $this->collSpyNewsletterSubscriptionsPartial = true;
        }

        if (!$this->collSpyNewsletterSubscriptions->contains($l)) {
            $this->doAddSpyNewsletterSubscription($l);

            if ($this->spyNewsletterSubscriptionsScheduledForDeletion and $this->spyNewsletterSubscriptionsScheduledForDeletion->contains($l)) {
                $this->spyNewsletterSubscriptionsScheduledForDeletion->remove($this->spyNewsletterSubscriptionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyNewsletterSubscription $spyNewsletterSubscription The ChildSpyNewsletterSubscription object to add.
     */
    protected function doAddSpyNewsletterSubscription(ChildSpyNewsletterSubscription $spyNewsletterSubscription)
    {
        $this->collSpyNewsletterSubscriptions[]= $spyNewsletterSubscription;
        $spyNewsletterSubscription->setSpyNewsletterType($this);
    }

    /**
     * @param  ChildSpyNewsletterSubscription $spyNewsletterSubscription The ChildSpyNewsletterSubscription object to remove.
     * @return $this|ChildSpyNewsletterType The current object (for fluent API support)
     */
    public function removeSpyNewsletterSubscription(ChildSpyNewsletterSubscription $spyNewsletterSubscription)
    {
        if ($this->getSpyNewsletterSubscriptions()->contains($spyNewsletterSubscription)) {
            $pos = $this->collSpyNewsletterSubscriptions->search($spyNewsletterSubscription);
            $this->collSpyNewsletterSubscriptions->remove($pos);
            if (null === $this->spyNewsletterSubscriptionsScheduledForDeletion) {
                $this->spyNewsletterSubscriptionsScheduledForDeletion = clone $this->collSpyNewsletterSubscriptions;
                $this->spyNewsletterSubscriptionsScheduledForDeletion->clear();
            }
            $this->spyNewsletterSubscriptionsScheduledForDeletion[]= clone $spyNewsletterSubscription;
            $spyNewsletterSubscription->setSpyNewsletterType(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyNewsletterType is new, it will return
     * an empty collection; or if this SpyNewsletterType has previously
     * been saved, it will retrieve related SpyNewsletterSubscriptions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyNewsletterType.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyNewsletterSubscription[] List of ChildSpyNewsletterSubscription objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyNewsletterSubscription}> List of ChildSpyNewsletterSubscription objects
     */
    public function getSpyNewsletterSubscriptionsJoinSpyNewsletterSubscriber(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyNewsletterSubscriptionQuery::create(null, $criteria);
        $query->joinWith('SpyNewsletterSubscriber', $joinBehavior);

        return $this->getSpyNewsletterSubscriptions($query, $con);
    }

    /**
     * Clears out the collSpyNewsletterSubscribers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyNewsletterSubscribers()
     */
    public function clearSpyNewsletterSubscribers()
    {
        $this->collSpyNewsletterSubscribers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collSpyNewsletterSubscribers crossRef collection.
     *
     * By default this just sets the collSpyNewsletterSubscribers collection to an empty collection (like clearSpyNewsletterSubscribers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initSpyNewsletterSubscribers()
    {
        $collectionClassName = SpyNewsletterSubscriptionTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyNewsletterSubscribers = new $collectionClassName;
        $this->collSpyNewsletterSubscribersPartial = true;
        $this->collSpyNewsletterSubscribers->setModel('\Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber');
    }

    /**
     * Checks if the collSpyNewsletterSubscribers collection is loaded.
     *
     * @return bool
     */
    public function isSpyNewsletterSubscribersLoaded()
    {
        return null !== $this->collSpyNewsletterSubscribers;
    }

    /**
     * Gets a collection of ChildSpyNewsletterSubscriber objects related by a many-to-many relationship
     * to the current object by way of the spy_newsletter_subscription cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyNewsletterType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      ConnectionInterface $con Optional connection object
     *
     * @return ObjectCollection|ChildSpyNewsletterSubscriber[] List of ChildSpyNewsletterSubscriber objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyNewsletterSubscriber> List of ChildSpyNewsletterSubscriber objects
     */
    public function getSpyNewsletterSubscribers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyNewsletterSubscribersPartial && !$this->isNew();
        if (null === $this->collSpyNewsletterSubscribers || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyNewsletterSubscribers) {
                    $this->initSpyNewsletterSubscribers();
                }
            } else {

                $query = ChildSpyNewsletterSubscriberQuery::create(null, $criteria)
                    ->filterBySpyNewsletterType($this);
                $collSpyNewsletterSubscribers = $query->find($con);
                if (null !== $criteria) {
                    return $collSpyNewsletterSubscribers;
                }

                if ($partial && $this->collSpyNewsletterSubscribers) {
                    //make sure that already added objects gets added to the list of the database.
                    foreach ($this->collSpyNewsletterSubscribers as $obj) {
                        if (!$collSpyNewsletterSubscribers->contains($obj)) {
                            $collSpyNewsletterSubscribers[] = $obj;
                        }
                    }
                }

                $this->collSpyNewsletterSubscribers = $collSpyNewsletterSubscribers;
                $this->collSpyNewsletterSubscribersPartial = false;
            }
        }

        return $this->collSpyNewsletterSubscribers;
    }

    /**
     * Sets a collection of SpyNewsletterSubscriber objects related by a many-to-many relationship
     * to the current object by way of the spy_newsletter_subscription cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param  Collection $spyNewsletterSubscribers A Propel collection.
     * @param  ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyNewsletterType The current object (for fluent API support)
     */
    public function setSpyNewsletterSubscribers(Collection $spyNewsletterSubscribers, ConnectionInterface $con = null)
    {
        $this->clearSpyNewsletterSubscribers();
        $currentSpyNewsletterSubscribers = $this->getSpyNewsletterSubscribers();

        $spyNewsletterSubscribersScheduledForDeletion = $currentSpyNewsletterSubscribers->diff($spyNewsletterSubscribers);

        foreach ($spyNewsletterSubscribersScheduledForDeletion as $toDelete) {
            $this->removeSpyNewsletterSubscriber($toDelete);
        }

        foreach ($spyNewsletterSubscribers as $spyNewsletterSubscriber) {
            if (!$currentSpyNewsletterSubscribers->contains($spyNewsletterSubscriber)) {
                $this->doAddSpyNewsletterSubscriber($spyNewsletterSubscriber);
            }
        }

        $this->collSpyNewsletterSubscribersPartial = false;
        $this->collSpyNewsletterSubscribers = $spyNewsletterSubscribers;

        return $this;
    }

    /**
     * Gets the number of SpyNewsletterSubscriber objects related by a many-to-many relationship
     * to the current object by way of the spy_newsletter_subscription cross-reference table.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      boolean $distinct Set to true to force count distinct
     * @param      ConnectionInterface $con Optional connection object
     *
     * @return int the number of related SpyNewsletterSubscriber objects
     */
    public function countSpyNewsletterSubscribers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyNewsletterSubscribersPartial && !$this->isNew();
        if (null === $this->collSpyNewsletterSubscribers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyNewsletterSubscribers) {
                return 0;
            } else {

                if ($partial && !$criteria) {
                    return count($this->getSpyNewsletterSubscribers());
                }

                $query = ChildSpyNewsletterSubscriberQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterBySpyNewsletterType($this)
                    ->count($con);
            }
        } else {
            return count($this->collSpyNewsletterSubscribers);
        }
    }

    /**
     * Associate a ChildSpyNewsletterSubscriber to this object
     * through the spy_newsletter_subscription cross reference table.
     *
     * @param ChildSpyNewsletterSubscriber $spyNewsletterSubscriber
     * @return ChildSpyNewsletterType The current object (for fluent API support)
     */
    public function addSpyNewsletterSubscriber(ChildSpyNewsletterSubscriber $spyNewsletterSubscriber)
    {
        if ($this->collSpyNewsletterSubscribers === null) {
            $this->initSpyNewsletterSubscribers();
        }

        if (!$this->getSpyNewsletterSubscribers()->contains($spyNewsletterSubscriber)) {
            // only add it if the **same** object is not already associated
            $this->collSpyNewsletterSubscribers->push($spyNewsletterSubscriber);
            $this->doAddSpyNewsletterSubscriber($spyNewsletterSubscriber);
        }

        return $this;
    }

    /**
     *
     * @param ChildSpyNewsletterSubscriber $spyNewsletterSubscriber
     */
    protected function doAddSpyNewsletterSubscriber(ChildSpyNewsletterSubscriber $spyNewsletterSubscriber)
    {
        $spyNewsletterSubscription = new ChildSpyNewsletterSubscription();

        $spyNewsletterSubscription->setSpyNewsletterSubscriber($spyNewsletterSubscriber);

        $spyNewsletterSubscription->setSpyNewsletterType($this);

        $this->addSpyNewsletterSubscription($spyNewsletterSubscription);

        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$spyNewsletterSubscriber->isSpyNewsletterTypesLoaded()) {
            $spyNewsletterSubscriber->initSpyNewsletterTypes();
            $spyNewsletterSubscriber->getSpyNewsletterTypes()->push($this);
        } elseif (!$spyNewsletterSubscriber->getSpyNewsletterTypes()->contains($this)) {
            $spyNewsletterSubscriber->getSpyNewsletterTypes()->push($this);
        }

    }

    /**
     * Remove spyNewsletterSubscriber of this object
     * through the spy_newsletter_subscription cross reference table.
     *
     * @param ChildSpyNewsletterSubscriber $spyNewsletterSubscriber
     * @return ChildSpyNewsletterType The current object (for fluent API support)
     */
    public function removeSpyNewsletterSubscriber(ChildSpyNewsletterSubscriber $spyNewsletterSubscriber)
    {
        if ($this->getSpyNewsletterSubscribers()->contains($spyNewsletterSubscriber)) {
            $spyNewsletterSubscription = new ChildSpyNewsletterSubscription();
            $spyNewsletterSubscription->setSpyNewsletterSubscriber($spyNewsletterSubscriber);
            if ($spyNewsletterSubscriber->isSpyNewsletterTypesLoaded()) {
                //remove the back reference if available
                $spyNewsletterSubscriber->getSpyNewsletterTypes()->removeObject($this);
            }

            $spyNewsletterSubscription->setSpyNewsletterType($this);
            $this->removeSpyNewsletterSubscription(clone $spyNewsletterSubscription);
            $spyNewsletterSubscription->clear();

            $this->collSpyNewsletterSubscribers->remove($this->collSpyNewsletterSubscribers->search($spyNewsletterSubscriber));

            if (null === $this->spyNewsletterSubscribersScheduledForDeletion) {
                $this->spyNewsletterSubscribersScheduledForDeletion = clone $this->collSpyNewsletterSubscribers;
                $this->spyNewsletterSubscribersScheduledForDeletion->clear();
            }

            $this->spyNewsletterSubscribersScheduledForDeletion->push($spyNewsletterSubscriber);
        }


        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_newsletter_type = null;
        $this->name = null;
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
            if ($this->collSpyNewsletterSubscriptions) {
                foreach ($this->collSpyNewsletterSubscriptions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyNewsletterSubscribers) {
                foreach ($this->collSpyNewsletterSubscribers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyNewsletterSubscriptions = null;
        $this->collSpyNewsletterSubscribers = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyNewsletterTypeTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpyNewsletterType The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyNewsletterTypeTableMap::COL_UPDATED_AT] = true;

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
