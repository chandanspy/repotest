<?php

namespace Orm\Zed\FileManagerStorage\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\FileManagerStorage\Persistence\SpyFileStorageQuery as ChildSpyFileStorageQuery;
use Orm\Zed\FileManagerStorage\Persistence\Map\SpyFileStorageTableMap;
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

/**
 * Base class that represents a row from the 'spy_file_storage' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.FileManagerStorage.Persistence.Base
 */
abstract class SpyFileStorage implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\FileManagerStorage\\Persistence\\Map\\SpyFileStorageTableMap';


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
     * The value for the id_file_storage field.
     *
     * @var        int
     */
    protected $id_file_storage;

    /**
     * The value for the fk_file field.
     *
     * @var        int|null
     */
    protected $fk_file;

    /**
     * The value for the file_name field.
     *
     * @var        string|null
     */
    protected $file_name;

    /**
     * The value for the data field.
     *
     * @var        string|null
     */
    protected $data;

    /**
     * The value for the locale field.
     *
     * @var        string
     */
    protected $locale;

    /**
     * The value for the alias_keys field.
     *
     * @var        string|null
     */
    protected $alias_keys;

    /**
     * The value for the key field.
     *
     * @var        string|null
     */
    protected $key;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    // synchronization behavior

    /**
     * @var array
     */
    private $_dataTemp;

    /**
     * @deprecated Use {@link \Spryker\Zed\SynchronizationBehavior\SynchronizationBehaviorConfig::isSynchronizationEnabled()} instead.
     *
     * @var bool
     */
    private $_isSendingToQueue = true;

    /**
     * @var \Spryker\Zed\Kernel\Locator
     */
    private $_locator;

    /**
     * Initializes internal state of Orm\Zed\FileManagerStorage\Persistence\Base\SpyFileStorage object.
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
     * Compares this with another <code>SpyFileStorage</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyFileStorage</code>, delegates to
     * <code>equals(SpyFileStorage)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_file_storage] column value.
     *
     * @return int
     */
    public function getIdFileStorage()
    {
        return $this->id_file_storage;
    }

    /**
     * Get the [fk_file] column value.
     *
     * @return int|null
     */
    public function getFkFile()
    {
        return $this->fk_file;
    }

    /**
     * Get the [file_name] column value.
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->file_name;
    }
    /**
     * Get the [data] column value.
     *
     * @return array
     */
    public function getData()
    {
        return json_decode($this->data, true);
    }

    /**
     * Get the [locale] column value.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Get the [alias_keys] column value.
     *
     * @return string|null
     */
    public function getAliasKeys()
    {
        return $this->alias_keys;
    }

    /**
     * Get the [key] column value.
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of [id_file_storage] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage The current object (for fluent API support)
     */
    public function setIdFileStorage($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_file_storage !== $v) {
            $this->id_file_storage = $v;
            $this->modifiedColumns[SpyFileStorageTableMap::COL_ID_FILE_STORAGE] = true;
        }

        return $this;
    } // setIdFileStorage()

    /**
     * Set the value of [fk_file] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage The current object (for fluent API support)
     */
    public function setFkFile($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_file !== $v) {
            $this->fk_file = $v;
            $this->modifiedColumns[SpyFileStorageTableMap::COL_FK_FILE] = true;
        }

        return $this;
    } // setFkFile()

    /**
     * Set the value of [file_name] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage The current object (for fluent API support)
     */
    public function setFileName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->file_name !== $v) {
            $this->file_name = $v;
            $this->modifiedColumns[SpyFileStorageTableMap::COL_FILE_NAME] = true;
        }

        return $this;
    }
    /**
     * Set the value of [data] column.
     *
     * @param array $v new value
     * @return $this The current object (for fluent API support)
     */
    public function setData($v)
    {
        if (is_array($v)) {
            $this->_dataTemp = $v;
            $v = json_encode($v);
        }

        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->data !== $v) {
            $this->data = $v;
            $this->modifiedColumns[SpyFileStorageTableMap::COL_DATA] = true;
        }

        return $this;
    }
         // setData()

    /**
     * Set the value of [locale] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage The current object (for fluent API support)
     */
    public function setLocale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->locale !== $v) {
            $this->locale = $v;
            $this->modifiedColumns[SpyFileStorageTableMap::COL_LOCALE] = true;
        }

        return $this;
    } // setLocale()

    /**
     * Set the value of [alias_keys] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage The current object (for fluent API support)
     */
    public function setAliasKeys($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->alias_keys !== $v) {
            $this->alias_keys = $v;
            $this->modifiedColumns[SpyFileStorageTableMap::COL_ALIAS_KEYS] = true;
        }

        return $this;
    } // setAliasKeys()

    /**
     * Set the value of [key] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage The current object (for fluent API support)
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
            $this->modifiedColumns[SpyFileStorageTableMap::COL_KEY] = true;
        }

        return $this;
    } // setKey()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyFileStorageTableMap::translateFieldName('IdFileStorage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_file_storage = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyFileStorageTableMap::translateFieldName('FkFile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_file = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyFileStorageTableMap::translateFieldName('FileName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->file_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyFileStorageTableMap::translateFieldName('Data', TableMap::TYPE_PHPNAME, $indexType)];
            $this->data = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyFileStorageTableMap::translateFieldName('Locale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->locale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyFileStorageTableMap::translateFieldName('AliasKeys', TableMap::TYPE_PHPNAME, $indexType)];
            $this->alias_keys = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyFileStorageTableMap::translateFieldName('Key', TableMap::TYPE_PHPNAME, $indexType)];
            $this->key = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = SpyFileStorageTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\FileManagerStorage\\Persistence\\SpyFileStorage'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyFileStorageTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyFileStorageQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyFileStorage::setDeleted()
     * @see SpyFileStorage::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileStorageTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyFileStorageQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // synchronization behavior

                $this->syncUnpublishedMessage();
                $this->syncUnpublishedMessageForMappingResource();
                $this->syncUnpublishedMessageForMappings();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileStorageTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            // synchronization behavior

            $this->setGeneratedKey();
            $this->setGeneratedKeyForMappingResource();
            $this->setGeneratedAliasKeys();

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
                // synchronization behavior

                $this->syncPublishedMessage();
                $this->syncPublishedMessageForMappingResource();
                $this->syncPublishedMessageForMappings();

                SpyFileStorageTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[SpyFileStorageTableMap::COL_ID_FILE_STORAGE] = true;
        if (null !== $this->id_file_storage) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyFileStorageTableMap::COL_ID_FILE_STORAGE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_ID_FILE_STORAGE)) {
            $modifiedColumns[':p' . $index++]  = '`id_file_storage`';
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_FK_FILE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_file`';
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_FILE_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`file_name`';
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`data`';
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_LOCALE)) {
            $modifiedColumns[':p' . $index++]  = '`locale`';
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_ALIAS_KEYS)) {
            $modifiedColumns[':p' . $index++]  = '`alias_keys`';
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`key`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_file_storage` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_file_storage`':
                        $stmt->bindValue($identifier, $this->id_file_storage, PDO::PARAM_INT);
                        break;
                    case '`fk_file`':
                        $stmt->bindValue($identifier, $this->fk_file, PDO::PARAM_INT);
                        break;
                    case '`file_name`':
                        $stmt->bindValue($identifier, $this->file_name, PDO::PARAM_STR);
                        break;
                    case '`data`':
                        $stmt->bindValue($identifier, $this->data, PDO::PARAM_STR);
                        break;
                    case '`locale`':
                        $stmt->bindValue($identifier, $this->locale, PDO::PARAM_STR);
                        break;
                    case '`alias_keys`':
                        $stmt->bindValue($identifier, $this->alias_keys, PDO::PARAM_STR);
                        break;
                    case '`key`':
                        $stmt->bindValue($identifier, $this->key, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_file_storage_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdFileStorage($pk);

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
        $pos = SpyFileStorageTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdFileStorage();
                break;
            case 1:
                return $this->getFkFile();
                break;
            case 2:
                return $this->getFileName();
                break;
            case 3:
                return $this->getData();
                break;
            case 4:
                return $this->getLocale();
                break;
            case 5:
                return $this->getAliasKeys();
                break;
            case 6:
                return $this->getKey();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['SpyFileStorage'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyFileStorage'][$this->hashCode()] = true;
        $keys = SpyFileStorageTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdFileStorage(),
            $keys[1] => $this->getFkFile(),
            $keys[2] => $this->getFileName(),
            $keys[3] => $this->getData(),
            $keys[4] => $this->getLocale(),
            $keys[5] => $this->getAliasKeys(),
            $keys[6] => $this->getKey(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyFileStorageTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdFileStorage($value);
                break;
            case 1:
                $this->setFkFile($value);
                break;
            case 2:
                $this->setFileName($value);
                break;
            case 3:
                $this->setData($value);
                break;
            case 4:
                $this->setLocale($value);
                break;
            case 5:
                $this->setAliasKeys($value);
                break;
            case 6:
                $this->setKey($value);
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
     * @return     $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyFileStorageTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdFileStorage($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkFile($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFileName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setData($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLocale($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setAliasKeys($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setKey($arr[$keys[6]]);
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
     * @return $this|\Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage The current object, for fluid interface
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
        $criteria = new Criteria(SpyFileStorageTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyFileStorageTableMap::COL_ID_FILE_STORAGE)) {
            $criteria->add(SpyFileStorageTableMap::COL_ID_FILE_STORAGE, $this->id_file_storage);
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_FK_FILE)) {
            $criteria->add(SpyFileStorageTableMap::COL_FK_FILE, $this->fk_file);
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_FILE_NAME)) {
            $criteria->add(SpyFileStorageTableMap::COL_FILE_NAME, $this->file_name);
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_DATA)) {
            $criteria->add(SpyFileStorageTableMap::COL_DATA, $this->data);
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_LOCALE)) {
            $criteria->add(SpyFileStorageTableMap::COL_LOCALE, $this->locale);
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_ALIAS_KEYS)) {
            $criteria->add(SpyFileStorageTableMap::COL_ALIAS_KEYS, $this->alias_keys);
        }
        if ($this->isColumnModified(SpyFileStorageTableMap::COL_KEY)) {
            $criteria->add(SpyFileStorageTableMap::COL_KEY, $this->key);
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
        $criteria = ChildSpyFileStorageQuery::create();
        $criteria->add(SpyFileStorageTableMap::COL_ID_FILE_STORAGE, $this->id_file_storage);

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
        $validPk = null !== $this->getIdFileStorage();

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
        return $this->getIdFileStorage();
    }

    /**
     * Generic method to set the primary key (id_file_storage column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdFileStorage($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdFileStorage();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkFile($this->getFkFile());
        $copyObj->setFileName($this->getFileName());
        $copyObj->setData($this->getData());
        $copyObj->setLocale($this->getLocale());
        $copyObj->setAliasKeys($this->getAliasKeys());
        $copyObj->setKey($this->getKey());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdFileStorage(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\FileManagerStorage\Persistence\SpyFileStorage Clone of current object.
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
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_file_storage = null;
        $this->fk_file = null;
        $this->file_name = null;
        $this->data = null;
        $this->locale = null;
        $this->alias_keys = null;
        $this->key = null;
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

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyFileStorageTableMap::DEFAULT_STRING_FORMAT);
    }

    // synchronization behavior

    /**
     * @deprecated Use {@link \Spryker\Zed\SynchronizationBehavior\SynchronizationBehaviorConfig::isSynchronizationEnabled()} instead.
     *
     * @return bool
     */
    public function isSendingToQueue()
    {
        return $this->_isSendingToQueue;
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\SynchronizationBehavior\SynchronizationBehaviorConfig::isSynchronizationEnabled()} instead.
     *
     * @param bool $_isSendingToQueue
     *
     * @return $this
     */
    public function setIsSendingToQueue($_isSendingToQueue)
    {
        $this->_isSendingToQueue = $_isSendingToQueue;

        return $this;
    }

    /**
     * @param string $resource
     *
     * @return \Spryker\Service\Synchronization\Dependency\Plugin\SynchronizationKeyGeneratorPluginInterface
     */
    protected function getStorageKeyBuilder($resource)
    {
        if ($this->_locator === null) {
            $this->_locator = \Spryker\Zed\Kernel\Locator::getInstance();
        }

        /** @var \Spryker\Service\Synchronization\SynchronizationServiceInterface $synchronizationService */
        $synchronizationService = $this->_locator->synchronization()->service();

        return $synchronizationService->getStorageKeyBuilder($resource);
    }

    /**
     * @return void
     */
    protected function setGeneratedKey()
    {
        $syncTransferData = new \Generated\Shared\Transfer\SynchronizationDataTransfer();
        $syncTransferData->setReference($this->getFkFile());

        $syncTransferData->setLocale($this->locale);
        $keyBuilder = $this->getStorageKeyBuilder('file');

        $key = $keyBuilder->generateKey($syncTransferData);
        $this->setKey($key);
    }
            /**
     * @return void
     */
    protected function setGeneratedKeyForMappingResource()
    {
    }
    /**
     * @param string $source
     * @param string $sourceIdentifier

     * @return string
     */
    protected function generateMappingKey($source, $sourceIdentifier)
    {
        $syncTransferData = new \Generated\Shared\Transfer\SynchronizationDataTransfer();
        $syncTransferData->setReference($source . ':' . $sourceIdentifier);

        $syncTransferData->setLocale($this->locale);
        $keyBuilder = $this->getStorageKeyBuilder('file');

        return $keyBuilder->generateKey($syncTransferData);
    }
            /**
     * @return void
     */
    protected function setGeneratedAliasKeys()
    {
    }
    /**
     * @param array $message
     *
     * @return void
     */
    protected function sendToQueue(array $message)
    {
        if ($this->_locator === null) {
            $this->_locator = \Spryker\Zed\Kernel\Locator::getInstance();
        }

        $queueSendTransfer = new \Generated\Shared\Transfer\QueueSendMessageTransfer();
        $queueSendTransfer->setBody(json_encode($message));
        $queueSendTransfer->setLocale($this->locale);
        $queueSendTransfer->setQueuePoolName('synchronizationPool');

        $queueClient = $this->_locator->queue()->client();
        $queueClient->sendMessage('sync.storage.file', $queueSendTransfer);
    }

    /**
     * @throws PropelException
     *
     * @return void
     */
    public function syncPublishedMessage()
    {
        if (!$this->isSynchronizationEnabled()) {
            return;
        }

        // Kept for BC reasons, will be removed in next major.
        if (!$this->_isSendingToQueue) {
            return;
        }

        if (empty($this->getKey())) {
            throw new PropelException("Synchronization failed, the column 'key' is null or empty");
        }

        if ($this->_dataTemp !== null) {
            $data = $this->_dataTemp;
        } else {
            $data = $this->getData();
        }

        /* The value for `$params` has been loaded from schema file */
        $params = '';
        $decodedParams = [];
        if (!empty($params)) {
            $decodedParams = json_decode($params, true);
        }

        $data['_timestamp'] = microtime(true);
        $message = [
            'write' => [
                'key' => $this->getKey(),
                'value' => $data,
                'resource' => 'file',
                'params' => $decodedParams,
            ]
        ];
        $this->sendToQueue($message);
    }

    /**
     * @return void
     */
    public function syncUnpublishedMessage()
    {
        if (!$this->isSynchronizationEnabled()) {
            return;
        }

        // Kept for BC reasons, will be removed in next major.
        if (!$this->_isSendingToQueue) {
            return;
        }

        /* The value for `$params` has been loaded from schema file */
        $params = '';
        $decodedParams = [];
        if (!empty($params)) {
            $decodedParams = json_decode($params, true);
        }

        $data['_timestamp'] = microtime(true);
        $message = [
            'delete' => [
                'key' => $this->getKey(),
                'value' => $data,
                'resource' => 'file',
                'params' => $decodedParams,
            ]
        ];

        $this->sendToQueue($message);
    }

    /**
     * @return void
     */
    public function syncPublishedMessageForMappingResource()
    {
        if (!$this->isSynchronizationEnabled()) {
            return;
        }

        ;
    }

    /**
     * @return void
     */
    public function syncUnpublishedMessageForMappingResource()
    {
        if (!$this->isSynchronizationEnabled()) {
            return;
        }

        ;
    }

    /**
     * @return void
     */
    public function syncPublishedMessageForMappings()
    {
        if (!$this->isSynchronizationEnabled()) {
            return;
        }


    }

    /**
     * @return void
     */
    public function syncUnpublishedMessageForMappings()
    {
        if (!$this->isSynchronizationEnabled()) {
            return;
        }


    }

    /**
     * @return bool
     */
    public function isSynchronizationEnabled(): bool
    {
        return true;
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
