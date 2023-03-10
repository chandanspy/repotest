<?php

namespace Orm\Zed\Oms\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Oms\Persistence\SpyOmsEventTimeout as ChildSpyOmsEventTimeout;
use Orm\Zed\Oms\Persistence\SpyOmsEventTimeoutQuery as ChildSpyOmsEventTimeoutQuery;
use Orm\Zed\Oms\Persistence\SpyOmsOrderItemState as ChildSpyOmsOrderItemState;
use Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistory as ChildSpyOmsOrderItemStateHistory;
use Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistoryQuery as ChildSpyOmsOrderItemStateHistoryQuery;
use Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery as ChildSpyOmsOrderItemStateQuery;
use Orm\Zed\Oms\Persistence\Map\SpyOmsEventTimeoutTableMap;
use Orm\Zed\Oms\Persistence\Map\SpyOmsOrderItemStateHistoryTableMap;
use Orm\Zed\Oms\Persistence\Map\SpyOmsOrderItemStateTableMap;
use Orm\Zed\Sales\Persistence\SpySalesOrderItem;
use Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery;
use Orm\Zed\Sales\Persistence\Base\SpySalesOrderItem as BaseSpySalesOrderItem;
use Orm\Zed\Sales\Persistence\Map\SpySalesOrderItemTableMap;
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
 * Base class that represents a row from the 'spy_oms_order_item_state' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Oms.Persistence.Base
 */
abstract class SpyOmsOrderItemState implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Oms\\Persistence\\Map\\SpyOmsOrderItemStateTableMap';


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
     * The value for the id_oms_order_item_state field.
     *
     * @var        int
     */
    protected $id_oms_order_item_state;

    /**
     * The value for the description field.
     *
     * @var        string|null
     */
    protected $description;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * @var        ObjectCollection|ChildSpyOmsOrderItemStateHistory[] Collection to store aggregation of ChildSpyOmsOrderItemStateHistory objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory> Collection to store aggregation of ChildSpyOmsOrderItemStateHistory objects.
     */
    protected $collStateHistories;
    protected $collStateHistoriesPartial;

    /**
     * @var        ObjectCollection|ChildSpyOmsEventTimeout[] Collection to store aggregation of ChildSpyOmsEventTimeout objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyOmsEventTimeout> Collection to store aggregation of ChildSpyOmsEventTimeout objects.
     */
    protected $collEventTimeouts;
    protected $collEventTimeoutsPartial;

    /**
     * @var        ObjectCollection|SpySalesOrderItem[] Collection to store aggregation of SpySalesOrderItem objects.
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderItem> Collection to store aggregation of SpySalesOrderItem objects.
     */
    protected $collOrders;
    protected $collOrdersPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyOmsOrderItemStateHistory[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory>
     */
    protected $stateHistoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyOmsEventTimeout[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyOmsEventTimeout>
     */
    protected $eventTimeoutsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpySalesOrderItem[]
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderItem>
     */
    protected $ordersScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\Oms\Persistence\Base\SpyOmsOrderItemState object.
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
     * Compares this with another <code>SpyOmsOrderItemState</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyOmsOrderItemState</code>, delegates to
     * <code>equals(SpyOmsOrderItemState)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_oms_order_item_state] column value.
     *
     * @return int
     */
    public function getIdOmsOrderItemState()
    {
        return $this->id_oms_order_item_state;
    }

    /**
     * Get the [description] column value.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set the value of [id_oms_order_item_state] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState The current object (for fluent API support)
     */
    public function setIdOmsOrderItemState($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_oms_order_item_state !== $v) {
            $this->id_oms_order_item_state = $v;
            $this->modifiedColumns[SpyOmsOrderItemStateTableMap::COL_ID_OMS_ORDER_ITEM_STATE] = true;
        }

        return $this;
    } // setIdOmsOrderItemState()

    /**
     * Set the value of [description] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[SpyOmsOrderItemStateTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setDescription()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState The current object (for fluent API support)
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
            $this->modifiedColumns[SpyOmsOrderItemStateTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyOmsOrderItemStateTableMap::translateFieldName('IdOmsOrderItemState', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_oms_order_item_state = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyOmsOrderItemStateTableMap::translateFieldName('Description', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyOmsOrderItemStateTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = SpyOmsOrderItemStateTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderItemState'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyOmsOrderItemStateTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyOmsOrderItemStateQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collStateHistories = null;

            $this->collEventTimeouts = null;

            $this->collOrders = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyOmsOrderItemState::setDeleted()
     * @see SpyOmsOrderItemState::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOmsOrderItemStateTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyOmsOrderItemStateQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOmsOrderItemStateTableMap::DATABASE_NAME);
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
                SpyOmsOrderItemStateTableMap::addInstanceToPool($this);
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

            if ($this->stateHistoriesScheduledForDeletion !== null) {
                if (!$this->stateHistoriesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistoryQuery::create()
                        ->filterByPrimaryKeys($this->stateHistoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->stateHistoriesScheduledForDeletion = null;
                }
            }

            if ($this->collStateHistories !== null) {
                foreach ($this->collStateHistories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->eventTimeoutsScheduledForDeletion !== null) {
                if (!$this->eventTimeoutsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Oms\Persistence\SpyOmsEventTimeoutQuery::create()
                        ->filterByPrimaryKeys($this->eventTimeoutsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->eventTimeoutsScheduledForDeletion = null;
                }
            }

            if ($this->collEventTimeouts !== null) {
                foreach ($this->collEventTimeouts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ordersScheduledForDeletion !== null) {
                if (!$this->ordersScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery::create()
                        ->filterByPrimaryKeys($this->ordersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordersScheduledForDeletion = null;
                }
            }

            if ($this->collOrders !== null) {
                foreach ($this->collOrders as $referrerFK) {
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

        $this->modifiedColumns[SpyOmsOrderItemStateTableMap::COL_ID_OMS_ORDER_ITEM_STATE] = true;
        if (null !== $this->id_oms_order_item_state) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyOmsOrderItemStateTableMap::COL_ID_OMS_ORDER_ITEM_STATE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyOmsOrderItemStateTableMap::COL_ID_OMS_ORDER_ITEM_STATE)) {
            $modifiedColumns[':p' . $index++]  = '`id_oms_order_item_state`';
        }
        if ($this->isColumnModified(SpyOmsOrderItemStateTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(SpyOmsOrderItemStateTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_oms_order_item_state` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_oms_order_item_state`':
                        $stmt->bindValue($identifier, $this->id_oms_order_item_state, PDO::PARAM_INT);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_oms_order_item_state_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdOmsOrderItemState($pk);

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
        $pos = SpyOmsOrderItemStateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdOmsOrderItemState();
                break;
            case 1:
                return $this->getDescription();
                break;
            case 2:
                return $this->getName();
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

        if (isset($alreadyDumpedObjects['SpyOmsOrderItemState'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyOmsOrderItemState'][$this->hashCode()] = true;
        $keys = SpyOmsOrderItemStateTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdOmsOrderItemState(),
            $keys[1] => $this->getDescription(),
            $keys[2] => $this->getName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collStateHistories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyOmsOrderItemStateHistories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_oms_order_item_state_histories';
                        break;
                    default:
                        $key = 'StateHistories';
                }

                $result[$key] = $this->collStateHistories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEventTimeouts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyOmsEventTimeouts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_oms_event_timeouts';
                        break;
                    default:
                        $key = 'EventTimeouts';
                }

                $result[$key] = $this->collEventTimeouts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOrders) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spySalesOrderItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_sales_order_items';
                        break;
                    default:
                        $key = 'Orders';
                }

                $result[$key] = $this->collOrders->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyOmsOrderItemStateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdOmsOrderItemState($value);
                break;
            case 1:
                $this->setDescription($value);
                break;
            case 2:
                $this->setName($value);
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
     * @return     $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyOmsOrderItemStateTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdOmsOrderItemState($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setDescription($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setName($arr[$keys[2]]);
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
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState The current object, for fluid interface
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
        $criteria = new Criteria(SpyOmsOrderItemStateTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyOmsOrderItemStateTableMap::COL_ID_OMS_ORDER_ITEM_STATE)) {
            $criteria->add(SpyOmsOrderItemStateTableMap::COL_ID_OMS_ORDER_ITEM_STATE, $this->id_oms_order_item_state);
        }
        if ($this->isColumnModified(SpyOmsOrderItemStateTableMap::COL_DESCRIPTION)) {
            $criteria->add(SpyOmsOrderItemStateTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(SpyOmsOrderItemStateTableMap::COL_NAME)) {
            $criteria->add(SpyOmsOrderItemStateTableMap::COL_NAME, $this->name);
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
        $criteria = ChildSpyOmsOrderItemStateQuery::create();
        $criteria->add(SpyOmsOrderItemStateTableMap::COL_ID_OMS_ORDER_ITEM_STATE, $this->id_oms_order_item_state);

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
        $validPk = null !== $this->getIdOmsOrderItemState();

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
        return $this->getIdOmsOrderItemState();
    }

    /**
     * Generic method to set the primary key (id_oms_order_item_state column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdOmsOrderItemState($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdOmsOrderItemState();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Oms\Persistence\SpyOmsOrderItemState (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDescription($this->getDescription());
        $copyObj->setName($this->getName());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getStateHistories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addStateHistory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEventTimeouts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEventTimeout($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOrders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrder($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdOmsOrderItemState(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Oms\Persistence\SpyOmsOrderItemState Clone of current object.
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
        if ('StateHistory' === $relationName) {
            $this->initStateHistories();
            return;
        }
        if ('EventTimeout' === $relationName) {
            $this->initEventTimeouts();
            return;
        }
        if ('Order' === $relationName) {
            $this->initOrders();
            return;
        }
    }

    /**
     * Clears out the collStateHistories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addStateHistories()
     */
    public function clearStateHistories()
    {
        $this->collStateHistories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collStateHistories collection loaded partially.
     */
    public function resetPartialStateHistories($v = true)
    {
        $this->collStateHistoriesPartial = $v;
    }

    /**
     * Initializes the collStateHistories collection.
     *
     * By default this just sets the collStateHistories collection to an empty array (like clearcollStateHistories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initStateHistories($overrideExisting = true)
    {
        if (null !== $this->collStateHistories && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyOmsOrderItemStateHistoryTableMap::getTableMap()->getCollectionClassName();

        $this->collStateHistories = new $collectionClassName;
        $this->collStateHistories->setModel('\Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistory');
    }

    /**
     * Gets an array of ChildSpyOmsOrderItemStateHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyOmsOrderItemState is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyOmsOrderItemStateHistory[] List of ChildSpyOmsOrderItemStateHistory objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory> List of ChildSpyOmsOrderItemStateHistory objects
     * @throws PropelException
     */
    public function getStateHistories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collStateHistoriesPartial && !$this->isNew();
        if (null === $this->collStateHistories || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collStateHistories) {
                    $this->initStateHistories();
                } else {
                    $collectionClassName = SpyOmsOrderItemStateHistoryTableMap::getTableMap()->getCollectionClassName();

                    $collStateHistories = new $collectionClassName;
                    $collStateHistories->setModel('\Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistory');

                    return $collStateHistories;
                }
            } else {
                $collStateHistories = ChildSpyOmsOrderItemStateHistoryQuery::create(null, $criteria)
                    ->filterByState($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collStateHistoriesPartial && count($collStateHistories)) {
                        $this->initStateHistories(false);

                        foreach ($collStateHistories as $obj) {
                            if (false == $this->collStateHistories->contains($obj)) {
                                $this->collStateHistories->append($obj);
                            }
                        }

                        $this->collStateHistoriesPartial = true;
                    }

                    return $collStateHistories;
                }

                if ($partial && $this->collStateHistories) {
                    foreach ($this->collStateHistories as $obj) {
                        if ($obj->isNew()) {
                            $collStateHistories[] = $obj;
                        }
                    }
                }

                $this->collStateHistories = $collStateHistories;
                $this->collStateHistoriesPartial = false;
            }
        }

        return $this->collStateHistories;
    }

    /**
     * Sets a collection of ChildSpyOmsOrderItemStateHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $stateHistories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyOmsOrderItemState The current object (for fluent API support)
     */
    public function setStateHistories(Collection $stateHistories, ConnectionInterface $con = null)
    {
        /** @var ChildSpyOmsOrderItemStateHistory[] $stateHistoriesToDelete */
        $stateHistoriesToDelete = $this->getStateHistories(new Criteria(), $con)->diff($stateHistories);


        $this->stateHistoriesScheduledForDeletion = $stateHistoriesToDelete;

        foreach ($stateHistoriesToDelete as $stateHistoryRemoved) {
            $stateHistoryRemoved->setState(null);
        }

        $this->collStateHistories = null;
        foreach ($stateHistories as $stateHistory) {
            $this->addStateHistory($stateHistory);
        }

        $this->collStateHistories = $stateHistories;
        $this->collStateHistoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyOmsOrderItemStateHistory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyOmsOrderItemStateHistory objects.
     * @throws PropelException
     */
    public function countStateHistories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collStateHistoriesPartial && !$this->isNew();
        if (null === $this->collStateHistories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collStateHistories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getStateHistories());
            }

            $query = ChildSpyOmsOrderItemStateHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByState($this)
                ->count($con);
        }

        return count($this->collStateHistories);
    }

    /**
     * Method called to associate a ChildSpyOmsOrderItemStateHistory object to this object
     * through the ChildSpyOmsOrderItemStateHistory foreign key attribute.
     *
     * @param  ChildSpyOmsOrderItemStateHistory $l ChildSpyOmsOrderItemStateHistory
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState The current object (for fluent API support)
     */
    public function addStateHistory(ChildSpyOmsOrderItemStateHistory $l)
    {
        if ($this->collStateHistories === null) {
            $this->initStateHistories();
            $this->collStateHistoriesPartial = true;
        }

        if (!$this->collStateHistories->contains($l)) {
            $this->doAddStateHistory($l);

            if ($this->stateHistoriesScheduledForDeletion and $this->stateHistoriesScheduledForDeletion->contains($l)) {
                $this->stateHistoriesScheduledForDeletion->remove($this->stateHistoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyOmsOrderItemStateHistory $stateHistory The ChildSpyOmsOrderItemStateHistory object to add.
     */
    protected function doAddStateHistory(ChildSpyOmsOrderItemStateHistory $stateHistory)
    {
        $this->collStateHistories[]= $stateHistory;
        $stateHistory->setState($this);
    }

    /**
     * @param  ChildSpyOmsOrderItemStateHistory $stateHistory The ChildSpyOmsOrderItemStateHistory object to remove.
     * @return $this|ChildSpyOmsOrderItemState The current object (for fluent API support)
     */
    public function removeStateHistory(ChildSpyOmsOrderItemStateHistory $stateHistory)
    {
        if ($this->getStateHistories()->contains($stateHistory)) {
            $pos = $this->collStateHistories->search($stateHistory);
            $this->collStateHistories->remove($pos);
            if (null === $this->stateHistoriesScheduledForDeletion) {
                $this->stateHistoriesScheduledForDeletion = clone $this->collStateHistories;
                $this->stateHistoriesScheduledForDeletion->clear();
            }
            $this->stateHistoriesScheduledForDeletion[]= clone $stateHistory;
            $stateHistory->setState(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyOmsOrderItemState is new, it will return
     * an empty collection; or if this SpyOmsOrderItemState has previously
     * been saved, it will retrieve related StateHistories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyOmsOrderItemState.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyOmsOrderItemStateHistory[] List of ChildSpyOmsOrderItemStateHistory objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory}> List of ChildSpyOmsOrderItemStateHistory objects
     */
    public function getStateHistoriesJoinOrderItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyOmsOrderItemStateHistoryQuery::create(null, $criteria);
        $query->joinWith('OrderItem', $joinBehavior);

        return $this->getStateHistories($query, $con);
    }

    /**
     * Clears out the collEventTimeouts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEventTimeouts()
     */
    public function clearEventTimeouts()
    {
        $this->collEventTimeouts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collEventTimeouts collection loaded partially.
     */
    public function resetPartialEventTimeouts($v = true)
    {
        $this->collEventTimeoutsPartial = $v;
    }

    /**
     * Initializes the collEventTimeouts collection.
     *
     * By default this just sets the collEventTimeouts collection to an empty array (like clearcollEventTimeouts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEventTimeouts($overrideExisting = true)
    {
        if (null !== $this->collEventTimeouts && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyOmsEventTimeoutTableMap::getTableMap()->getCollectionClassName();

        $this->collEventTimeouts = new $collectionClassName;
        $this->collEventTimeouts->setModel('\Orm\Zed\Oms\Persistence\SpyOmsEventTimeout');
    }

    /**
     * Gets an array of ChildSpyOmsEventTimeout objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyOmsOrderItemState is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyOmsEventTimeout[] List of ChildSpyOmsEventTimeout objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyOmsEventTimeout> List of ChildSpyOmsEventTimeout objects
     * @throws PropelException
     */
    public function getEventTimeouts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collEventTimeoutsPartial && !$this->isNew();
        if (null === $this->collEventTimeouts || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collEventTimeouts) {
                    $this->initEventTimeouts();
                } else {
                    $collectionClassName = SpyOmsEventTimeoutTableMap::getTableMap()->getCollectionClassName();

                    $collEventTimeouts = new $collectionClassName;
                    $collEventTimeouts->setModel('\Orm\Zed\Oms\Persistence\SpyOmsEventTimeout');

                    return $collEventTimeouts;
                }
            } else {
                $collEventTimeouts = ChildSpyOmsEventTimeoutQuery::create(null, $criteria)
                    ->filterByState($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collEventTimeoutsPartial && count($collEventTimeouts)) {
                        $this->initEventTimeouts(false);

                        foreach ($collEventTimeouts as $obj) {
                            if (false == $this->collEventTimeouts->contains($obj)) {
                                $this->collEventTimeouts->append($obj);
                            }
                        }

                        $this->collEventTimeoutsPartial = true;
                    }

                    return $collEventTimeouts;
                }

                if ($partial && $this->collEventTimeouts) {
                    foreach ($this->collEventTimeouts as $obj) {
                        if ($obj->isNew()) {
                            $collEventTimeouts[] = $obj;
                        }
                    }
                }

                $this->collEventTimeouts = $collEventTimeouts;
                $this->collEventTimeoutsPartial = false;
            }
        }

        return $this->collEventTimeouts;
    }

    /**
     * Sets a collection of ChildSpyOmsEventTimeout objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $eventTimeouts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyOmsOrderItemState The current object (for fluent API support)
     */
    public function setEventTimeouts(Collection $eventTimeouts, ConnectionInterface $con = null)
    {
        /** @var ChildSpyOmsEventTimeout[] $eventTimeoutsToDelete */
        $eventTimeoutsToDelete = $this->getEventTimeouts(new Criteria(), $con)->diff($eventTimeouts);


        $this->eventTimeoutsScheduledForDeletion = $eventTimeoutsToDelete;

        foreach ($eventTimeoutsToDelete as $eventTimeoutRemoved) {
            $eventTimeoutRemoved->setState(null);
        }

        $this->collEventTimeouts = null;
        foreach ($eventTimeouts as $eventTimeout) {
            $this->addEventTimeout($eventTimeout);
        }

        $this->collEventTimeouts = $eventTimeouts;
        $this->collEventTimeoutsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyOmsEventTimeout objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyOmsEventTimeout objects.
     * @throws PropelException
     */
    public function countEventTimeouts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collEventTimeoutsPartial && !$this->isNew();
        if (null === $this->collEventTimeouts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEventTimeouts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEventTimeouts());
            }

            $query = ChildSpyOmsEventTimeoutQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByState($this)
                ->count($con);
        }

        return count($this->collEventTimeouts);
    }

    /**
     * Method called to associate a ChildSpyOmsEventTimeout object to this object
     * through the ChildSpyOmsEventTimeout foreign key attribute.
     *
     * @param  ChildSpyOmsEventTimeout $l ChildSpyOmsEventTimeout
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState The current object (for fluent API support)
     */
    public function addEventTimeout(ChildSpyOmsEventTimeout $l)
    {
        if ($this->collEventTimeouts === null) {
            $this->initEventTimeouts();
            $this->collEventTimeoutsPartial = true;
        }

        if (!$this->collEventTimeouts->contains($l)) {
            $this->doAddEventTimeout($l);

            if ($this->eventTimeoutsScheduledForDeletion and $this->eventTimeoutsScheduledForDeletion->contains($l)) {
                $this->eventTimeoutsScheduledForDeletion->remove($this->eventTimeoutsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyOmsEventTimeout $eventTimeout The ChildSpyOmsEventTimeout object to add.
     */
    protected function doAddEventTimeout(ChildSpyOmsEventTimeout $eventTimeout)
    {
        $this->collEventTimeouts[]= $eventTimeout;
        $eventTimeout->setState($this);
    }

    /**
     * @param  ChildSpyOmsEventTimeout $eventTimeout The ChildSpyOmsEventTimeout object to remove.
     * @return $this|ChildSpyOmsOrderItemState The current object (for fluent API support)
     */
    public function removeEventTimeout(ChildSpyOmsEventTimeout $eventTimeout)
    {
        if ($this->getEventTimeouts()->contains($eventTimeout)) {
            $pos = $this->collEventTimeouts->search($eventTimeout);
            $this->collEventTimeouts->remove($pos);
            if (null === $this->eventTimeoutsScheduledForDeletion) {
                $this->eventTimeoutsScheduledForDeletion = clone $this->collEventTimeouts;
                $this->eventTimeoutsScheduledForDeletion->clear();
            }
            $this->eventTimeoutsScheduledForDeletion[]= clone $eventTimeout;
            $eventTimeout->setState(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyOmsOrderItemState is new, it will return
     * an empty collection; or if this SpyOmsOrderItemState has previously
     * been saved, it will retrieve related EventTimeouts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyOmsOrderItemState.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyOmsEventTimeout[] List of ChildSpyOmsEventTimeout objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyOmsEventTimeout}> List of ChildSpyOmsEventTimeout objects
     */
    public function getEventTimeoutsJoinOrderItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyOmsEventTimeoutQuery::create(null, $criteria);
        $query->joinWith('OrderItem', $joinBehavior);

        return $this->getEventTimeouts($query, $con);
    }

    /**
     * Clears out the collOrders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addOrders()
     */
    public function clearOrders()
    {
        $this->collOrders = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collOrders collection loaded partially.
     */
    public function resetPartialOrders($v = true)
    {
        $this->collOrdersPartial = $v;
    }

    /**
     * Initializes the collOrders collection.
     *
     * By default this just sets the collOrders collection to an empty array (like clearcollOrders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrders($overrideExisting = true)
    {
        if (null !== $this->collOrders && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpySalesOrderItemTableMap::getTableMap()->getCollectionClassName();

        $this->collOrders = new $collectionClassName;
        $this->collOrders->setModel('\Orm\Zed\Sales\Persistence\SpySalesOrderItem');
    }

    /**
     * Gets an array of SpySalesOrderItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyOmsOrderItemState is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpySalesOrderItem[] List of SpySalesOrderItem objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderItem> List of SpySalesOrderItem objects
     * @throws PropelException
     */
    public function getOrders(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collOrdersPartial && !$this->isNew();
        if (null === $this->collOrders || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collOrders) {
                    $this->initOrders();
                } else {
                    $collectionClassName = SpySalesOrderItemTableMap::getTableMap()->getCollectionClassName();

                    $collOrders = new $collectionClassName;
                    $collOrders->setModel('\Orm\Zed\Sales\Persistence\SpySalesOrderItem');

                    return $collOrders;
                }
            } else {
                $collOrders = SpySalesOrderItemQuery::create(null, $criteria)
                    ->filterByState($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collOrdersPartial && count($collOrders)) {
                        $this->initOrders(false);

                        foreach ($collOrders as $obj) {
                            if (false == $this->collOrders->contains($obj)) {
                                $this->collOrders->append($obj);
                            }
                        }

                        $this->collOrdersPartial = true;
                    }

                    return $collOrders;
                }

                if ($partial && $this->collOrders) {
                    foreach ($this->collOrders as $obj) {
                        if ($obj->isNew()) {
                            $collOrders[] = $obj;
                        }
                    }
                }

                $this->collOrders = $collOrders;
                $this->collOrdersPartial = false;
            }
        }

        return $this->collOrders;
    }

    /**
     * Sets a collection of SpySalesOrderItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $orders A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyOmsOrderItemState The current object (for fluent API support)
     */
    public function setOrders(Collection $orders, ConnectionInterface $con = null)
    {
        /** @var SpySalesOrderItem[] $ordersToDelete */
        $ordersToDelete = $this->getOrders(new Criteria(), $con)->diff($orders);


        $this->ordersScheduledForDeletion = $ordersToDelete;

        foreach ($ordersToDelete as $orderRemoved) {
            $orderRemoved->setState(null);
        }

        $this->collOrders = null;
        foreach ($orders as $order) {
            $this->addOrder($order);
        }

        $this->collOrders = $orders;
        $this->collOrdersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpySalesOrderItem objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpySalesOrderItem objects.
     * @throws PropelException
     */
    public function countOrders(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collOrdersPartial && !$this->isNew();
        if (null === $this->collOrders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrders) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrders());
            }

            $query = SpySalesOrderItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByState($this)
                ->count($con);
        }

        return count($this->collOrders);
    }

    /**
     * Method called to associate a SpySalesOrderItem object to this object
     * through the SpySalesOrderItem foreign key attribute.
     *
     * @param  SpySalesOrderItem $l SpySalesOrderItem
     * @return $this|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemState The current object (for fluent API support)
     */
    public function addOrder(SpySalesOrderItem $l)
    {
        if ($this->collOrders === null) {
            $this->initOrders();
            $this->collOrdersPartial = true;
        }

        if (!$this->collOrders->contains($l)) {
            $this->doAddOrder($l);

            if ($this->ordersScheduledForDeletion and $this->ordersScheduledForDeletion->contains($l)) {
                $this->ordersScheduledForDeletion->remove($this->ordersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpySalesOrderItem $order The SpySalesOrderItem object to add.
     */
    protected function doAddOrder(SpySalesOrderItem $order)
    {
        $this->collOrders[]= $order;
        $order->setState($this);
    }

    /**
     * @param  SpySalesOrderItem $order The SpySalesOrderItem object to remove.
     * @return $this|ChildSpyOmsOrderItemState The current object (for fluent API support)
     */
    public function removeOrder(SpySalesOrderItem $order)
    {
        if ($this->getOrders()->contains($order)) {
            $pos = $this->collOrders->search($order);
            $this->collOrders->remove($pos);
            if (null === $this->ordersScheduledForDeletion) {
                $this->ordersScheduledForDeletion = clone $this->collOrders;
                $this->ordersScheduledForDeletion->clear();
            }
            $this->ordersScheduledForDeletion[]= clone $order;
            $order->setState(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyOmsOrderItemState is new, it will return
     * an empty collection; or if this SpyOmsOrderItemState has previously
     * been saved, it will retrieve related Orders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyOmsOrderItemState.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderItem[] List of SpySalesOrderItem objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderItem}> List of SpySalesOrderItem objects
     */
    public function getOrdersJoinSalesOrderItemBundle(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderItemQuery::create(null, $criteria);
        $query->joinWith('SalesOrderItemBundle', $joinBehavior);

        return $this->getOrders($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyOmsOrderItemState is new, it will return
     * an empty collection; or if this SpyOmsOrderItemState has previously
     * been saved, it will retrieve related Orders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyOmsOrderItemState.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderItem[] List of SpySalesOrderItem objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderItem}> List of SpySalesOrderItem objects
     */
    public function getOrdersJoinOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderItemQuery::create(null, $criteria);
        $query->joinWith('Order', $joinBehavior);

        return $this->getOrders($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyOmsOrderItemState is new, it will return
     * an empty collection; or if this SpyOmsOrderItemState has previously
     * been saved, it will retrieve related Orders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyOmsOrderItemState.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderItem[] List of SpySalesOrderItem objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderItem}> List of SpySalesOrderItem objects
     */
    public function getOrdersJoinProcess(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderItemQuery::create(null, $criteria);
        $query->joinWith('Process', $joinBehavior);

        return $this->getOrders($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyOmsOrderItemState is new, it will return
     * an empty collection; or if this SpyOmsOrderItemState has previously
     * been saved, it will retrieve related Orders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyOmsOrderItemState.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderItem[] List of SpySalesOrderItem objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderItem}> List of SpySalesOrderItem objects
     */
    public function getOrdersJoinSpySalesShipment(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderItemQuery::create(null, $criteria);
        $query->joinWith('SpySalesShipment', $joinBehavior);

        return $this->getOrders($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_oms_order_item_state = null;
        $this->description = null;
        $this->name = null;
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
            if ($this->collStateHistories) {
                foreach ($this->collStateHistories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEventTimeouts) {
                foreach ($this->collEventTimeouts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOrders) {
                foreach ($this->collOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collStateHistories = null;
        $this->collEventTimeouts = null;
        $this->collOrders = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyOmsOrderItemStateTableMap::DEFAULT_STRING_FORMAT);
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
