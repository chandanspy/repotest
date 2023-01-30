<?php

namespace Orm\Zed\Stock\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\StockAddress\Persistence\SpyStockAddress;
use Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery;
use Orm\Zed\StockAddress\Persistence\Base\SpyStockAddress as BaseSpyStockAddress;
use Orm\Zed\StockAddress\Persistence\Map\SpyStockAddressTableMap;
use Orm\Zed\Stock\Persistence\SpyStock as ChildSpyStock;
use Orm\Zed\Stock\Persistence\SpyStockProduct as ChildSpyStockProduct;
use Orm\Zed\Stock\Persistence\SpyStockProductQuery as ChildSpyStockProductQuery;
use Orm\Zed\Stock\Persistence\SpyStockQuery as ChildSpyStockQuery;
use Orm\Zed\Stock\Persistence\SpyStockStore as ChildSpyStockStore;
use Orm\Zed\Stock\Persistence\SpyStockStoreQuery as ChildSpyStockStoreQuery;
use Orm\Zed\Stock\Persistence\Map\SpyStockProductTableMap;
use Orm\Zed\Stock\Persistence\Map\SpyStockStoreTableMap;
use Orm\Zed\Stock\Persistence\Map\SpyStockTableMap;
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
 * Base class that represents a row from the 'spy_stock' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Stock.Persistence.Base
 */
abstract class SpyStock implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Stock\\Persistence\\Map\\SpyStockTableMap';


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
     * The value for the id_stock field.
     *
     * @var        int
     */
    protected $id_stock;

    /**
     * The value for the is_active field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean|null
     */
    protected $is_active;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * @var        ObjectCollection|ChildSpyStockProduct[] Collection to store aggregation of ChildSpyStockProduct objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyStockProduct> Collection to store aggregation of ChildSpyStockProduct objects.
     */
    protected $collStockProducts;
    protected $collStockProductsPartial;

    /**
     * @var        ObjectCollection|ChildSpyStockStore[] Collection to store aggregation of ChildSpyStockStore objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyStockStore> Collection to store aggregation of ChildSpyStockStore objects.
     */
    protected $collStockStores;
    protected $collStockStoresPartial;

    /**
     * @var        ObjectCollection|SpyStockAddress[] Collection to store aggregation of SpyStockAddress objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyStockAddress> Collection to store aggregation of SpyStockAddress objects.
     */
    protected $collStockAddresses;
    protected $collStockAddressesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyStockProduct[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyStockProduct>
     */
    protected $stockProductsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyStockStore[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyStockStore>
     */
    protected $stockStoresScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyStockAddress[]
     * @phpstan-var ObjectCollection&\Traversable<SpyStockAddress>
     */
    protected $stockAddressesScheduledForDeletion = null;

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
     * Initializes internal state of Orm\Zed\Stock\Persistence\Base\SpyStock object.
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
     * Compares this with another <code>SpyStock</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyStock</code>, delegates to
     * <code>equals(SpyStock)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_stock] column value.
     *
     * @return int
     */
    public function getIdStock()
    {
        return $this->id_stock;
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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of [id_stock] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock The current object (for fluent API support)
     */
    public function setIdStock($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_stock !== $v) {
            $this->id_stock = $v;
            $this->modifiedColumns[SpyStockTableMap::COL_ID_STOCK] = true;
        }

        return $this;
    } // setIdStock()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string|null $v The new value
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock The current object (for fluent API support)
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
            $this->modifiedColumns[SpyStockTableMap::COL_IS_ACTIVE] = true;
        }

        return $this;
    } // setIsActive()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock The current object (for fluent API support)
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
            $this->modifiedColumns[SpyStockTableMap::COL_NAME] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyStockTableMap::translateFieldName('IdStock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_stock = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyStockTableMap::translateFieldName('IsActive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_active = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyStockTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = SpyStockTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Stock\\Persistence\\SpyStock'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyStockTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyStockQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collStockProducts = null;

            $this->collStockStores = null;

            $this->collStockAddresses = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyStock::setDeleted()
     * @see SpyStock::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStockTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyStockQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStockTableMap::DATABASE_NAME);
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
                SpyStockTableMap::addInstanceToPool($this);
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

            if ($this->stockProductsScheduledForDeletion !== null) {
                if (!$this->stockProductsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Stock\Persistence\SpyStockProductQuery::create()
                        ->filterByPrimaryKeys($this->stockProductsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->stockProductsScheduledForDeletion = null;
                }
            }

            if ($this->collStockProducts !== null) {
                foreach ($this->collStockProducts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->stockStoresScheduledForDeletion !== null) {
                if (!$this->stockStoresScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Stock\Persistence\SpyStockStoreQuery::create()
                        ->filterByPrimaryKeys($this->stockStoresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->stockStoresScheduledForDeletion = null;
                }
            }

            if ($this->collStockStores !== null) {
                foreach ($this->collStockStores as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->stockAddressesScheduledForDeletion !== null) {
                if (!$this->stockAddressesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery::create()
                        ->filterByPrimaryKeys($this->stockAddressesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->stockAddressesScheduledForDeletion = null;
                }
            }

            if ($this->collStockAddresses !== null) {
                foreach ($this->collStockAddresses as $referrerFK) {
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

        $this->modifiedColumns[SpyStockTableMap::COL_ID_STOCK] = true;
        if (null !== $this->id_stock) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyStockTableMap::COL_ID_STOCK . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyStockTableMap::COL_ID_STOCK)) {
            $modifiedColumns[':p' . $index++]  = 'id_stock';
        }
        if ($this->isColumnModified(SpyStockTableMap::COL_IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = 'is_active';
        }
        if ($this->isColumnModified(SpyStockTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }

        $sql = sprintf(
            'INSERT INTO spy_stock (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_stock':
                        $stmt->bindValue($identifier, $this->id_stock, PDO::PARAM_INT);
                        break;
                    case 'is_active':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case 'name':
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
            $pk = $con->lastInsertId('spy_stock_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdStock($pk);

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
        $pos = SpyStockTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdStock();
                break;
            case 1:
                return $this->getIsActive();
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

        if (isset($alreadyDumpedObjects['SpyStock'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyStock'][$this->hashCode()] = true;
        $keys = SpyStockTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdStock(),
            $keys[1] => $this->getIsActive(),
            $keys[2] => $this->getName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collStockProducts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStockProducts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_stock_products';
                        break;
                    default:
                        $key = 'StockProducts';
                }

                $result[$key] = $this->collStockProducts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collStockStores) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStockStores';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_stock_stores';
                        break;
                    default:
                        $key = 'StockStores';
                }

                $result[$key] = $this->collStockStores->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collStockAddresses) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStockAddresses';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_stock_addresses';
                        break;
                    default:
                        $key = 'StockAddresses';
                }

                $result[$key] = $this->collStockAddresses->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyStockTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdStock($value);
                break;
            case 1:
                $this->setIsActive($value);
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
     * @return     $this|\Orm\Zed\Stock\Persistence\SpyStock
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyStockTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdStock($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIsActive($arr[$keys[1]]);
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
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock The current object, for fluid interface
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
        $criteria = new Criteria(SpyStockTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyStockTableMap::COL_ID_STOCK)) {
            $criteria->add(SpyStockTableMap::COL_ID_STOCK, $this->id_stock);
        }
        if ($this->isColumnModified(SpyStockTableMap::COL_IS_ACTIVE)) {
            $criteria->add(SpyStockTableMap::COL_IS_ACTIVE, $this->is_active);
        }
        if ($this->isColumnModified(SpyStockTableMap::COL_NAME)) {
            $criteria->add(SpyStockTableMap::COL_NAME, $this->name);
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
        $criteria = ChildSpyStockQuery::create();
        $criteria->add(SpyStockTableMap::COL_ID_STOCK, $this->id_stock);

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
        $validPk = null !== $this->getIdStock();

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
        return $this->getIdStock();
    }

    /**
     * Generic method to set the primary key (id_stock column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdStock($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdStock();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Stock\Persistence\SpyStock (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setName($this->getName());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getStockProducts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addStockProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getStockStores() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addStockStore($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getStockAddresses() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addStockAddress($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdStock(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Stock\Persistence\SpyStock Clone of current object.
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
        if ('StockProduct' === $relationName) {
            $this->initStockProducts();
            return;
        }
        if ('StockStore' === $relationName) {
            $this->initStockStores();
            return;
        }
        if ('StockAddress' === $relationName) {
            $this->initStockAddresses();
            return;
        }
    }

    /**
     * Clears out the collStockProducts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addStockProducts()
     */
    public function clearStockProducts()
    {
        $this->collStockProducts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collStockProducts collection loaded partially.
     */
    public function resetPartialStockProducts($v = true)
    {
        $this->collStockProductsPartial = $v;
    }

    /**
     * Initializes the collStockProducts collection.
     *
     * By default this just sets the collStockProducts collection to an empty array (like clearcollStockProducts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initStockProducts($overrideExisting = true)
    {
        if (null !== $this->collStockProducts && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyStockProductTableMap::getTableMap()->getCollectionClassName();

        $this->collStockProducts = new $collectionClassName;
        $this->collStockProducts->setModel('\Orm\Zed\Stock\Persistence\SpyStockProduct');
    }

    /**
     * Gets an array of ChildSpyStockProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyStock is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyStockProduct[] List of ChildSpyStockProduct objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyStockProduct> List of ChildSpyStockProduct objects
     * @throws PropelException
     */
    public function getStockProducts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collStockProductsPartial && !$this->isNew();
        if (null === $this->collStockProducts || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collStockProducts) {
                    $this->initStockProducts();
                } else {
                    $collectionClassName = SpyStockProductTableMap::getTableMap()->getCollectionClassName();

                    $collStockProducts = new $collectionClassName;
                    $collStockProducts->setModel('\Orm\Zed\Stock\Persistence\SpyStockProduct');

                    return $collStockProducts;
                }
            } else {
                $collStockProducts = ChildSpyStockProductQuery::create(null, $criteria)
                    ->filterByStock($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collStockProductsPartial && count($collStockProducts)) {
                        $this->initStockProducts(false);

                        foreach ($collStockProducts as $obj) {
                            if (false == $this->collStockProducts->contains($obj)) {
                                $this->collStockProducts->append($obj);
                            }
                        }

                        $this->collStockProductsPartial = true;
                    }

                    return $collStockProducts;
                }

                if ($partial && $this->collStockProducts) {
                    foreach ($this->collStockProducts as $obj) {
                        if ($obj->isNew()) {
                            $collStockProducts[] = $obj;
                        }
                    }
                }

                $this->collStockProducts = $collStockProducts;
                $this->collStockProductsPartial = false;
            }
        }

        return $this->collStockProducts;
    }

    /**
     * Sets a collection of ChildSpyStockProduct objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $stockProducts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyStock The current object (for fluent API support)
     */
    public function setStockProducts(Collection $stockProducts, ConnectionInterface $con = null)
    {
        /** @var ChildSpyStockProduct[] $stockProductsToDelete */
        $stockProductsToDelete = $this->getStockProducts(new Criteria(), $con)->diff($stockProducts);


        $this->stockProductsScheduledForDeletion = $stockProductsToDelete;

        foreach ($stockProductsToDelete as $stockProductRemoved) {
            $stockProductRemoved->setStock(null);
        }

        $this->collStockProducts = null;
        foreach ($stockProducts as $stockProduct) {
            $this->addStockProduct($stockProduct);
        }

        $this->collStockProducts = $stockProducts;
        $this->collStockProductsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyStockProduct objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyStockProduct objects.
     * @throws PropelException
     */
    public function countStockProducts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collStockProductsPartial && !$this->isNew();
        if (null === $this->collStockProducts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collStockProducts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getStockProducts());
            }

            $query = ChildSpyStockProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByStock($this)
                ->count($con);
        }

        return count($this->collStockProducts);
    }

    /**
     * Method called to associate a ChildSpyStockProduct object to this object
     * through the ChildSpyStockProduct foreign key attribute.
     *
     * @param  ChildSpyStockProduct $l ChildSpyStockProduct
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock The current object (for fluent API support)
     */
    public function addStockProduct(ChildSpyStockProduct $l)
    {
        if ($this->collStockProducts === null) {
            $this->initStockProducts();
            $this->collStockProductsPartial = true;
        }

        if (!$this->collStockProducts->contains($l)) {
            $this->doAddStockProduct($l);

            if ($this->stockProductsScheduledForDeletion and $this->stockProductsScheduledForDeletion->contains($l)) {
                $this->stockProductsScheduledForDeletion->remove($this->stockProductsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyStockProduct $stockProduct The ChildSpyStockProduct object to add.
     */
    protected function doAddStockProduct(ChildSpyStockProduct $stockProduct)
    {
        $this->collStockProducts[]= $stockProduct;
        $stockProduct->setStock($this);
    }

    /**
     * @param  ChildSpyStockProduct $stockProduct The ChildSpyStockProduct object to remove.
     * @return $this|ChildSpyStock The current object (for fluent API support)
     */
    public function removeStockProduct(ChildSpyStockProduct $stockProduct)
    {
        if ($this->getStockProducts()->contains($stockProduct)) {
            $pos = $this->collStockProducts->search($stockProduct);
            $this->collStockProducts->remove($pos);
            if (null === $this->stockProductsScheduledForDeletion) {
                $this->stockProductsScheduledForDeletion = clone $this->collStockProducts;
                $this->stockProductsScheduledForDeletion->clear();
            }
            $this->stockProductsScheduledForDeletion[]= clone $stockProduct;
            $stockProduct->setStock(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyStock is new, it will return
     * an empty collection; or if this SpyStock has previously
     * been saved, it will retrieve related StockProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyStock.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyStockProduct[] List of ChildSpyStockProduct objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyStockProduct}> List of ChildSpyStockProduct objects
     */
    public function getStockProductsJoinSpyProduct(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyStockProductQuery::create(null, $criteria);
        $query->joinWith('SpyProduct', $joinBehavior);

        return $this->getStockProducts($query, $con);
    }

    /**
     * Clears out the collStockStores collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addStockStores()
     */
    public function clearStockStores()
    {
        $this->collStockStores = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collStockStores collection loaded partially.
     */
    public function resetPartialStockStores($v = true)
    {
        $this->collStockStoresPartial = $v;
    }

    /**
     * Initializes the collStockStores collection.
     *
     * By default this just sets the collStockStores collection to an empty array (like clearcollStockStores());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initStockStores($overrideExisting = true)
    {
        if (null !== $this->collStockStores && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyStockStoreTableMap::getTableMap()->getCollectionClassName();

        $this->collStockStores = new $collectionClassName;
        $this->collStockStores->setModel('\Orm\Zed\Stock\Persistence\SpyStockStore');
    }

    /**
     * Gets an array of ChildSpyStockStore objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyStock is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyStockStore[] List of ChildSpyStockStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyStockStore> List of ChildSpyStockStore objects
     * @throws PropelException
     */
    public function getStockStores(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collStockStoresPartial && !$this->isNew();
        if (null === $this->collStockStores || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collStockStores) {
                    $this->initStockStores();
                } else {
                    $collectionClassName = SpyStockStoreTableMap::getTableMap()->getCollectionClassName();

                    $collStockStores = new $collectionClassName;
                    $collStockStores->setModel('\Orm\Zed\Stock\Persistence\SpyStockStore');

                    return $collStockStores;
                }
            } else {
                $collStockStores = ChildSpyStockStoreQuery::create(null, $criteria)
                    ->filterByStock($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collStockStoresPartial && count($collStockStores)) {
                        $this->initStockStores(false);

                        foreach ($collStockStores as $obj) {
                            if (false == $this->collStockStores->contains($obj)) {
                                $this->collStockStores->append($obj);
                            }
                        }

                        $this->collStockStoresPartial = true;
                    }

                    return $collStockStores;
                }

                if ($partial && $this->collStockStores) {
                    foreach ($this->collStockStores as $obj) {
                        if ($obj->isNew()) {
                            $collStockStores[] = $obj;
                        }
                    }
                }

                $this->collStockStores = $collStockStores;
                $this->collStockStoresPartial = false;
            }
        }

        return $this->collStockStores;
    }

    /**
     * Sets a collection of ChildSpyStockStore objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $stockStores A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyStock The current object (for fluent API support)
     */
    public function setStockStores(Collection $stockStores, ConnectionInterface $con = null)
    {
        /** @var ChildSpyStockStore[] $stockStoresToDelete */
        $stockStoresToDelete = $this->getStockStores(new Criteria(), $con)->diff($stockStores);


        $this->stockStoresScheduledForDeletion = $stockStoresToDelete;

        foreach ($stockStoresToDelete as $stockStoreRemoved) {
            $stockStoreRemoved->setStock(null);
        }

        $this->collStockStores = null;
        foreach ($stockStores as $stockStore) {
            $this->addStockStore($stockStore);
        }

        $this->collStockStores = $stockStores;
        $this->collStockStoresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyStockStore objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyStockStore objects.
     * @throws PropelException
     */
    public function countStockStores(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collStockStoresPartial && !$this->isNew();
        if (null === $this->collStockStores || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collStockStores) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getStockStores());
            }

            $query = ChildSpyStockStoreQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByStock($this)
                ->count($con);
        }

        return count($this->collStockStores);
    }

    /**
     * Method called to associate a ChildSpyStockStore object to this object
     * through the ChildSpyStockStore foreign key attribute.
     *
     * @param  ChildSpyStockStore $l ChildSpyStockStore
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock The current object (for fluent API support)
     */
    public function addStockStore(ChildSpyStockStore $l)
    {
        if ($this->collStockStores === null) {
            $this->initStockStores();
            $this->collStockStoresPartial = true;
        }

        if (!$this->collStockStores->contains($l)) {
            $this->doAddStockStore($l);

            if ($this->stockStoresScheduledForDeletion and $this->stockStoresScheduledForDeletion->contains($l)) {
                $this->stockStoresScheduledForDeletion->remove($this->stockStoresScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyStockStore $stockStore The ChildSpyStockStore object to add.
     */
    protected function doAddStockStore(ChildSpyStockStore $stockStore)
    {
        $this->collStockStores[]= $stockStore;
        $stockStore->setStock($this);
    }

    /**
     * @param  ChildSpyStockStore $stockStore The ChildSpyStockStore object to remove.
     * @return $this|ChildSpyStock The current object (for fluent API support)
     */
    public function removeStockStore(ChildSpyStockStore $stockStore)
    {
        if ($this->getStockStores()->contains($stockStore)) {
            $pos = $this->collStockStores->search($stockStore);
            $this->collStockStores->remove($pos);
            if (null === $this->stockStoresScheduledForDeletion) {
                $this->stockStoresScheduledForDeletion = clone $this->collStockStores;
                $this->stockStoresScheduledForDeletion->clear();
            }
            $this->stockStoresScheduledForDeletion[]= clone $stockStore;
            $stockStore->setStock(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyStock is new, it will return
     * an empty collection; or if this SpyStock has previously
     * been saved, it will retrieve related StockStores from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyStock.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyStockStore[] List of ChildSpyStockStore objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyStockStore}> List of ChildSpyStockStore objects
     */
    public function getStockStoresJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyStockStoreQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getStockStores($query, $con);
    }

    /**
     * Clears out the collStockAddresses collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addStockAddresses()
     */
    public function clearStockAddresses()
    {
        $this->collStockAddresses = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collStockAddresses collection loaded partially.
     */
    public function resetPartialStockAddresses($v = true)
    {
        $this->collStockAddressesPartial = $v;
    }

    /**
     * Initializes the collStockAddresses collection.
     *
     * By default this just sets the collStockAddresses collection to an empty array (like clearcollStockAddresses());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initStockAddresses($overrideExisting = true)
    {
        if (null !== $this->collStockAddresses && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyStockAddressTableMap::getTableMap()->getCollectionClassName();

        $this->collStockAddresses = new $collectionClassName;
        $this->collStockAddresses->setModel('\Orm\Zed\StockAddress\Persistence\SpyStockAddress');
    }

    /**
     * Gets an array of SpyStockAddress objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyStock is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyStockAddress[] List of SpyStockAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockAddress> List of SpyStockAddress objects
     * @throws PropelException
     */
    public function getStockAddresses(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collStockAddressesPartial && !$this->isNew();
        if (null === $this->collStockAddresses || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collStockAddresses) {
                    $this->initStockAddresses();
                } else {
                    $collectionClassName = SpyStockAddressTableMap::getTableMap()->getCollectionClassName();

                    $collStockAddresses = new $collectionClassName;
                    $collStockAddresses->setModel('\Orm\Zed\StockAddress\Persistence\SpyStockAddress');

                    return $collStockAddresses;
                }
            } else {
                $collStockAddresses = SpyStockAddressQuery::create(null, $criteria)
                    ->filterByStock($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collStockAddressesPartial && count($collStockAddresses)) {
                        $this->initStockAddresses(false);

                        foreach ($collStockAddresses as $obj) {
                            if (false == $this->collStockAddresses->contains($obj)) {
                                $this->collStockAddresses->append($obj);
                            }
                        }

                        $this->collStockAddressesPartial = true;
                    }

                    return $collStockAddresses;
                }

                if ($partial && $this->collStockAddresses) {
                    foreach ($this->collStockAddresses as $obj) {
                        if ($obj->isNew()) {
                            $collStockAddresses[] = $obj;
                        }
                    }
                }

                $this->collStockAddresses = $collStockAddresses;
                $this->collStockAddressesPartial = false;
            }
        }

        return $this->collStockAddresses;
    }

    /**
     * Sets a collection of SpyStockAddress objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $stockAddresses A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyStock The current object (for fluent API support)
     */
    public function setStockAddresses(Collection $stockAddresses, ConnectionInterface $con = null)
    {
        /** @var SpyStockAddress[] $stockAddressesToDelete */
        $stockAddressesToDelete = $this->getStockAddresses(new Criteria(), $con)->diff($stockAddresses);


        $this->stockAddressesScheduledForDeletion = $stockAddressesToDelete;

        foreach ($stockAddressesToDelete as $stockAddressRemoved) {
            $stockAddressRemoved->setStock(null);
        }

        $this->collStockAddresses = null;
        foreach ($stockAddresses as $stockAddress) {
            $this->addStockAddress($stockAddress);
        }

        $this->collStockAddresses = $stockAddresses;
        $this->collStockAddressesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyStockAddress objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyStockAddress objects.
     * @throws PropelException
     */
    public function countStockAddresses(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collStockAddressesPartial && !$this->isNew();
        if (null === $this->collStockAddresses || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collStockAddresses) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getStockAddresses());
            }

            $query = SpyStockAddressQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByStock($this)
                ->count($con);
        }

        return count($this->collStockAddresses);
    }

    /**
     * Method called to associate a SpyStockAddress object to this object
     * through the SpyStockAddress foreign key attribute.
     *
     * @param  SpyStockAddress $l SpyStockAddress
     * @return $this|\Orm\Zed\Stock\Persistence\SpyStock The current object (for fluent API support)
     */
    public function addStockAddress(SpyStockAddress $l)
    {
        if ($this->collStockAddresses === null) {
            $this->initStockAddresses();
            $this->collStockAddressesPartial = true;
        }

        if (!$this->collStockAddresses->contains($l)) {
            $this->doAddStockAddress($l);

            if ($this->stockAddressesScheduledForDeletion and $this->stockAddressesScheduledForDeletion->contains($l)) {
                $this->stockAddressesScheduledForDeletion->remove($this->stockAddressesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyStockAddress $stockAddress The SpyStockAddress object to add.
     */
    protected function doAddStockAddress(SpyStockAddress $stockAddress)
    {
        $this->collStockAddresses[]= $stockAddress;
        $stockAddress->setStock($this);
    }

    /**
     * @param  SpyStockAddress $stockAddress The SpyStockAddress object to remove.
     * @return $this|ChildSpyStock The current object (for fluent API support)
     */
    public function removeStockAddress(SpyStockAddress $stockAddress)
    {
        if ($this->getStockAddresses()->contains($stockAddress)) {
            $pos = $this->collStockAddresses->search($stockAddress);
            $this->collStockAddresses->remove($pos);
            if (null === $this->stockAddressesScheduledForDeletion) {
                $this->stockAddressesScheduledForDeletion = clone $this->collStockAddresses;
                $this->stockAddressesScheduledForDeletion->clear();
            }
            $this->stockAddressesScheduledForDeletion[]= clone $stockAddress;
            $stockAddress->setStock(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyStock is new, it will return
     * an empty collection; or if this SpyStock has previously
     * been saved, it will retrieve related StockAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyStock.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyStockAddress[] List of SpyStockAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockAddress}> List of SpyStockAddress objects
     */
    public function getStockAddressesJoinCountry(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyStockAddressQuery::create(null, $criteria);
        $query->joinWith('Country', $joinBehavior);

        return $this->getStockAddresses($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyStock is new, it will return
     * an empty collection; or if this SpyStock has previously
     * been saved, it will retrieve related StockAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyStock.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyStockAddress[] List of SpyStockAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockAddress}> List of SpyStockAddress objects
     */
    public function getStockAddressesJoinRegion(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyStockAddressQuery::create(null, $criteria);
        $query->joinWith('Region', $joinBehavior);

        return $this->getStockAddresses($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_stock = null;
        $this->is_active = null;
        $this->name = null;
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
            if ($this->collStockProducts) {
                foreach ($this->collStockProducts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collStockStores) {
                foreach ($this->collStockStores as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collStockAddresses) {
                foreach ($this->collStockAddresses as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collStockProducts = null;
        $this->collStockStores = null;
        $this->collStockAddresses = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyStockTableMap::DEFAULT_STRING_FORMAT);
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
