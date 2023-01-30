<?php

namespace Orm\Zed\FileManager\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\FileManager\Persistence\SpyFile as ChildSpyFile;
use Orm\Zed\FileManager\Persistence\SpyFileDirectory as ChildSpyFileDirectory;
use Orm\Zed\FileManager\Persistence\SpyFileDirectoryLocalizedAttributes as ChildSpyFileDirectoryLocalizedAttributes;
use Orm\Zed\FileManager\Persistence\SpyFileDirectoryLocalizedAttributesQuery as ChildSpyFileDirectoryLocalizedAttributesQuery;
use Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery as ChildSpyFileDirectoryQuery;
use Orm\Zed\FileManager\Persistence\SpyFileQuery as ChildSpyFileQuery;
use Orm\Zed\FileManager\Persistence\Map\SpyFileDirectoryLocalizedAttributesTableMap;
use Orm\Zed\FileManager\Persistence\Map\SpyFileDirectoryTableMap;
use Orm\Zed\FileManager\Persistence\Map\SpyFileTableMap;
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
 * Base class that represents a row from the 'spy_file_directory' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.FileManager.Persistence.Base
 */
abstract class SpyFileDirectory implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\FileManager\\Persistence\\Map\\SpyFileDirectoryTableMap';


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
     * The value for the id_file_directory field.
     *
     * @var        int
     */
    protected $id_file_directory;

    /**
     * The value for the fk_parent_file_directory field.
     *
     * @var        int|null
     */
    protected $fk_parent_file_directory;

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
     * The value for the position field.
     *
     * @var        int|null
     */
    protected $position;

    /**
     * @var        ChildSpyFileDirectory
     */
    protected $aParentFileDirectory;

    /**
     * @var        ObjectCollection|ChildSpyFile[] Collection to store aggregation of ChildSpyFile objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFile> Collection to store aggregation of ChildSpyFile objects.
     */
    protected $collSpyFiles;
    protected $collSpyFilesPartial;

    /**
     * @var        ObjectCollection|ChildSpyFileDirectory[] Collection to store aggregation of ChildSpyFileDirectory objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileDirectory> Collection to store aggregation of ChildSpyFileDirectory objects.
     */
    protected $collChildrenFileDirectories;
    protected $collChildrenFileDirectoriesPartial;

    /**
     * @var        ObjectCollection|ChildSpyFileDirectoryLocalizedAttributes[] Collection to store aggregation of ChildSpyFileDirectoryLocalizedAttributes objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileDirectoryLocalizedAttributes> Collection to store aggregation of ChildSpyFileDirectoryLocalizedAttributes objects.
     */
    protected $collSpyFileDirectoryLocalizedAttributess;
    protected $collSpyFileDirectoryLocalizedAttributessPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyFile[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFile>
     */
    protected $spyFilesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyFileDirectory[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileDirectory>
     */
    protected $childrenFileDirectoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyFileDirectoryLocalizedAttributes[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileDirectoryLocalizedAttributes>
     */
    protected $spyFileDirectoryLocalizedAttributessScheduledForDeletion = null;

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
     * Initializes internal state of Orm\Zed\FileManager\Persistence\Base\SpyFileDirectory object.
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
     * Compares this with another <code>SpyFileDirectory</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyFileDirectory</code>, delegates to
     * <code>equals(SpyFileDirectory)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_file_directory] column value.
     *
     * @return int
     */
    public function getIdFileDirectory()
    {
        return $this->id_file_directory;
    }

    /**
     * Get the [fk_parent_file_directory] column value.
     *
     * @return int|null
     */
    public function getFkParentFileDirectory()
    {
        return $this->fk_parent_file_directory;
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
     * Get the [position] column value.
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of [id_file_directory] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
     */
    public function setIdFileDirectory($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_file_directory !== $v) {
            $this->id_file_directory = $v;
            $this->modifiedColumns[SpyFileDirectoryTableMap::COL_ID_FILE_DIRECTORY] = true;
        }

        return $this;
    } // setIdFileDirectory()

    /**
     * Set the value of [fk_parent_file_directory] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
     */
    public function setFkParentFileDirectory($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_parent_file_directory !== $v) {
            $this->fk_parent_file_directory = $v;
            $this->modifiedColumns[SpyFileDirectoryTableMap::COL_FK_PARENT_FILE_DIRECTORY] = true;
        }

        if ($this->aParentFileDirectory !== null && $this->aParentFileDirectory->getIdFileDirectory() !== $v) {
            $this->aParentFileDirectory = null;
        }

        return $this;
    } // setFkParentFileDirectory()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
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
            $this->modifiedColumns[SpyFileDirectoryTableMap::COL_IS_ACTIVE] = true;
        }

        return $this;
    } // setIsActive()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
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
            $this->modifiedColumns[SpyFileDirectoryTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [position] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
     */
    public function setPosition($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->position !== $v) {
            $this->position = $v;
            $this->modifiedColumns[SpyFileDirectoryTableMap::COL_POSITION] = true;
        }

        return $this;
    } // setPosition()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyFileDirectoryTableMap::translateFieldName('IdFileDirectory', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_file_directory = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyFileDirectoryTableMap::translateFieldName('FkParentFileDirectory', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_parent_file_directory = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyFileDirectoryTableMap::translateFieldName('IsActive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_active = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyFileDirectoryTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyFileDirectoryTableMap::translateFieldName('Position', TableMap::TYPE_PHPNAME, $indexType)];
            $this->position = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 5; // 5 = SpyFileDirectoryTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFileDirectory'), 0, $e);
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
        if ($this->aParentFileDirectory !== null && $this->fk_parent_file_directory !== $this->aParentFileDirectory->getIdFileDirectory()) {
            $this->aParentFileDirectory = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyFileDirectoryTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyFileDirectoryQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aParentFileDirectory = null;
            $this->collSpyFiles = null;

            $this->collChildrenFileDirectories = null;

            $this->collSpyFileDirectoryLocalizedAttributess = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyFileDirectory::setDeleted()
     * @see SpyFileDirectory::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileDirectoryTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyFileDirectoryQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileDirectoryTableMap::DATABASE_NAME);
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
                SpyFileDirectoryTableMap::addInstanceToPool($this);
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

            if ($this->aParentFileDirectory !== null) {
                if ($this->aParentFileDirectory->isModified() || $this->aParentFileDirectory->isNew()) {
                    $affectedRows += $this->aParentFileDirectory->save($con);
                }
                $this->setParentFileDirectory($this->aParentFileDirectory);
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

            if ($this->spyFilesScheduledForDeletion !== null) {
                if (!$this->spyFilesScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyFilesScheduledForDeletion as $spyFile) {
                        // need to save related object because we set the relation to null
                        $spyFile->save($con);
                    }
                    $this->spyFilesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyFiles !== null) {
                foreach ($this->collSpyFiles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->childrenFileDirectoriesScheduledForDeletion !== null) {
                if (!$this->childrenFileDirectoriesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery::create()
                        ->filterByPrimaryKeys($this->childrenFileDirectoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->childrenFileDirectoriesScheduledForDeletion = null;
                }
            }

            if ($this->collChildrenFileDirectories !== null) {
                foreach ($this->collChildrenFileDirectories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyFileDirectoryLocalizedAttributessScheduledForDeletion !== null) {
                if (!$this->spyFileDirectoryLocalizedAttributessScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\FileManager\Persistence\SpyFileDirectoryLocalizedAttributesQuery::create()
                        ->filterByPrimaryKeys($this->spyFileDirectoryLocalizedAttributessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion = null;
                }
            }

            if ($this->collSpyFileDirectoryLocalizedAttributess !== null) {
                foreach ($this->collSpyFileDirectoryLocalizedAttributess as $referrerFK) {
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

        $this->modifiedColumns[SpyFileDirectoryTableMap::COL_ID_FILE_DIRECTORY] = true;
        if (null !== $this->id_file_directory) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyFileDirectoryTableMap::COL_ID_FILE_DIRECTORY . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_ID_FILE_DIRECTORY)) {
            $modifiedColumns[':p' . $index++]  = 'id_file_directory';
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_FK_PARENT_FILE_DIRECTORY)) {
            $modifiedColumns[':p' . $index++]  = 'fk_parent_file_directory';
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = 'is_active';
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_POSITION)) {
            $modifiedColumns[':p' . $index++]  = 'position';
        }

        $sql = sprintf(
            'INSERT INTO spy_file_directory (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_file_directory':
                        $stmt->bindValue($identifier, $this->id_file_directory, PDO::PARAM_INT);
                        break;
                    case 'fk_parent_file_directory':
                        $stmt->bindValue($identifier, $this->fk_parent_file_directory, PDO::PARAM_INT);
                        break;
                    case 'is_active':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'position':
                        $stmt->bindValue($identifier, $this->position, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_file_directory_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdFileDirectory($pk);

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
        $pos = SpyFileDirectoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdFileDirectory();
                break;
            case 1:
                return $this->getFkParentFileDirectory();
                break;
            case 2:
                return $this->getIsActive();
                break;
            case 3:
                return $this->getName();
                break;
            case 4:
                return $this->getPosition();
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

        if (isset($alreadyDumpedObjects['SpyFileDirectory'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyFileDirectory'][$this->hashCode()] = true;
        $keys = SpyFileDirectoryTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdFileDirectory(),
            $keys[1] => $this->getFkParentFileDirectory(),
            $keys[2] => $this->getIsActive(),
            $keys[3] => $this->getName(),
            $keys[4] => $this->getPosition(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aParentFileDirectory) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyFileDirectory';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_file_directory';
                        break;
                    default:
                        $key = 'ParentFileDirectory';
                }

                $result[$key] = $this->aParentFileDirectory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyFiles) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyFiles';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_files';
                        break;
                    default:
                        $key = 'SpyFiles';
                }

                $result[$key] = $this->collSpyFiles->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collChildrenFileDirectories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyFileDirectories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_file_directories';
                        break;
                    default:
                        $key = 'ChildrenFileDirectories';
                }

                $result[$key] = $this->collChildrenFileDirectories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyFileDirectoryLocalizedAttributess) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyFileDirectoryLocalizedAttributess';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_file_directory_localized_attributess';
                        break;
                    default:
                        $key = 'SpyFileDirectoryLocalizedAttributess';
                }

                $result[$key] = $this->collSpyFileDirectoryLocalizedAttributess->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyFileDirectoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdFileDirectory($value);
                break;
            case 1:
                $this->setFkParentFileDirectory($value);
                break;
            case 2:
                $this->setIsActive($value);
                break;
            case 3:
                $this->setName($value);
                break;
            case 4:
                $this->setPosition($value);
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
     * @return     $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyFileDirectoryTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdFileDirectory($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkParentFileDirectory($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIsActive($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setName($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPosition($arr[$keys[4]]);
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
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object, for fluid interface
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
        $criteria = new Criteria(SpyFileDirectoryTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_ID_FILE_DIRECTORY)) {
            $criteria->add(SpyFileDirectoryTableMap::COL_ID_FILE_DIRECTORY, $this->id_file_directory);
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_FK_PARENT_FILE_DIRECTORY)) {
            $criteria->add(SpyFileDirectoryTableMap::COL_FK_PARENT_FILE_DIRECTORY, $this->fk_parent_file_directory);
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_IS_ACTIVE)) {
            $criteria->add(SpyFileDirectoryTableMap::COL_IS_ACTIVE, $this->is_active);
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_NAME)) {
            $criteria->add(SpyFileDirectoryTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyFileDirectoryTableMap::COL_POSITION)) {
            $criteria->add(SpyFileDirectoryTableMap::COL_POSITION, $this->position);
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
        $criteria = ChildSpyFileDirectoryQuery::create();
        $criteria->add(SpyFileDirectoryTableMap::COL_ID_FILE_DIRECTORY, $this->id_file_directory);

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
        $validPk = null !== $this->getIdFileDirectory();

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
        return $this->getIdFileDirectory();
    }

    /**
     * Generic method to set the primary key (id_file_directory column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdFileDirectory($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdFileDirectory();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\FileManager\Persistence\SpyFileDirectory (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkParentFileDirectory($this->getFkParentFileDirectory());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setName($this->getName());
        $copyObj->setPosition($this->getPosition());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyFiles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyFile($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getChildrenFileDirectories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addChildrenFileDirectory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyFileDirectoryLocalizedAttributess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyFileDirectoryLocalizedAttributes($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdFileDirectory(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\FileManager\Persistence\SpyFileDirectory Clone of current object.
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
     * Declares an association between this object and a ChildSpyFileDirectory object.
     *
     * @param  ChildSpyFileDirectory|null $v
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setParentFileDirectory(ChildSpyFileDirectory $v = null)
    {
        if ($v === null) {
            $this->setFkParentFileDirectory(NULL);
        } else {
            $this->setFkParentFileDirectory($v->getIdFileDirectory());
        }

        $this->aParentFileDirectory = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyFileDirectory object, it will not be re-added.
        if ($v !== null) {
            $v->addChildrenFileDirectory($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyFileDirectory object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyFileDirectory|null The associated ChildSpyFileDirectory object.
     * @throws PropelException
     */
    public function getParentFileDirectory(ConnectionInterface $con = null)
    {
        if ($this->aParentFileDirectory === null && ($this->fk_parent_file_directory != 0)) {
            $this->aParentFileDirectory = ChildSpyFileDirectoryQuery::create()->findPk($this->fk_parent_file_directory, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aParentFileDirectory->addChildrenFileDirectories($this);
             */
        }

        return $this->aParentFileDirectory;
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
        if ('SpyFile' === $relationName) {
            $this->initSpyFiles();
            return;
        }
        if ('ChildrenFileDirectory' === $relationName) {
            $this->initChildrenFileDirectories();
            return;
        }
        if ('SpyFileDirectoryLocalizedAttributes' === $relationName) {
            $this->initSpyFileDirectoryLocalizedAttributess();
            return;
        }
    }

    /**
     * Clears out the collSpyFiles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyFiles()
     */
    public function clearSpyFiles()
    {
        $this->collSpyFiles = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyFiles collection loaded partially.
     */
    public function resetPartialSpyFiles($v = true)
    {
        $this->collSpyFilesPartial = $v;
    }

    /**
     * Initializes the collSpyFiles collection.
     *
     * By default this just sets the collSpyFiles collection to an empty array (like clearcollSpyFiles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyFiles($overrideExisting = true)
    {
        if (null !== $this->collSpyFiles && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyFileTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyFiles = new $collectionClassName;
        $this->collSpyFiles->setModel('\Orm\Zed\FileManager\Persistence\SpyFile');
    }

    /**
     * Gets an array of ChildSpyFile objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyFileDirectory is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyFile[] List of ChildSpyFile objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyFile> List of ChildSpyFile objects
     * @throws PropelException
     */
    public function getSpyFiles(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFilesPartial && !$this->isNew();
        if (null === $this->collSpyFiles || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyFiles) {
                    $this->initSpyFiles();
                } else {
                    $collectionClassName = SpyFileTableMap::getTableMap()->getCollectionClassName();

                    $collSpyFiles = new $collectionClassName;
                    $collSpyFiles->setModel('\Orm\Zed\FileManager\Persistence\SpyFile');

                    return $collSpyFiles;
                }
            } else {
                $collSpyFiles = ChildSpyFileQuery::create(null, $criteria)
                    ->filterByFileDirectory($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyFilesPartial && count($collSpyFiles)) {
                        $this->initSpyFiles(false);

                        foreach ($collSpyFiles as $obj) {
                            if (false == $this->collSpyFiles->contains($obj)) {
                                $this->collSpyFiles->append($obj);
                            }
                        }

                        $this->collSpyFilesPartial = true;
                    }

                    return $collSpyFiles;
                }

                if ($partial && $this->collSpyFiles) {
                    foreach ($this->collSpyFiles as $obj) {
                        if ($obj->isNew()) {
                            $collSpyFiles[] = $obj;
                        }
                    }
                }

                $this->collSpyFiles = $collSpyFiles;
                $this->collSpyFilesPartial = false;
            }
        }

        return $this->collSpyFiles;
    }

    /**
     * Sets a collection of ChildSpyFile objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyFiles A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyFileDirectory The current object (for fluent API support)
     */
    public function setSpyFiles(Collection $spyFiles, ConnectionInterface $con = null)
    {
        /** @var ChildSpyFile[] $spyFilesToDelete */
        $spyFilesToDelete = $this->getSpyFiles(new Criteria(), $con)->diff($spyFiles);


        $this->spyFilesScheduledForDeletion = $spyFilesToDelete;

        foreach ($spyFilesToDelete as $spyFileRemoved) {
            $spyFileRemoved->setFileDirectory(null);
        }

        $this->collSpyFiles = null;
        foreach ($spyFiles as $spyFile) {
            $this->addSpyFile($spyFile);
        }

        $this->collSpyFiles = $spyFiles;
        $this->collSpyFilesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyFile objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyFile objects.
     * @throws PropelException
     */
    public function countSpyFiles(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFilesPartial && !$this->isNew();
        if (null === $this->collSpyFiles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyFiles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyFiles());
            }

            $query = ChildSpyFileQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByFileDirectory($this)
                ->count($con);
        }

        return count($this->collSpyFiles);
    }

    /**
     * Method called to associate a ChildSpyFile object to this object
     * through the ChildSpyFile foreign key attribute.
     *
     * @param  ChildSpyFile $l ChildSpyFile
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
     */
    public function addSpyFile(ChildSpyFile $l)
    {
        if ($this->collSpyFiles === null) {
            $this->initSpyFiles();
            $this->collSpyFilesPartial = true;
        }

        if (!$this->collSpyFiles->contains($l)) {
            $this->doAddSpyFile($l);

            if ($this->spyFilesScheduledForDeletion and $this->spyFilesScheduledForDeletion->contains($l)) {
                $this->spyFilesScheduledForDeletion->remove($this->spyFilesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyFile $spyFile The ChildSpyFile object to add.
     */
    protected function doAddSpyFile(ChildSpyFile $spyFile)
    {
        $this->collSpyFiles[]= $spyFile;
        $spyFile->setFileDirectory($this);
    }

    /**
     * @param  ChildSpyFile $spyFile The ChildSpyFile object to remove.
     * @return $this|ChildSpyFileDirectory The current object (for fluent API support)
     */
    public function removeSpyFile(ChildSpyFile $spyFile)
    {
        if ($this->getSpyFiles()->contains($spyFile)) {
            $pos = $this->collSpyFiles->search($spyFile);
            $this->collSpyFiles->remove($pos);
            if (null === $this->spyFilesScheduledForDeletion) {
                $this->spyFilesScheduledForDeletion = clone $this->collSpyFiles;
                $this->spyFilesScheduledForDeletion->clear();
            }
            $this->spyFilesScheduledForDeletion[]= $spyFile;
            $spyFile->setFileDirectory(null);
        }

        return $this;
    }

    /**
     * Clears out the collChildrenFileDirectories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addChildrenFileDirectories()
     */
    public function clearChildrenFileDirectories()
    {
        $this->collChildrenFileDirectories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collChildrenFileDirectories collection loaded partially.
     */
    public function resetPartialChildrenFileDirectories($v = true)
    {
        $this->collChildrenFileDirectoriesPartial = $v;
    }

    /**
     * Initializes the collChildrenFileDirectories collection.
     *
     * By default this just sets the collChildrenFileDirectories collection to an empty array (like clearcollChildrenFileDirectories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initChildrenFileDirectories($overrideExisting = true)
    {
        if (null !== $this->collChildrenFileDirectories && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyFileDirectoryTableMap::getTableMap()->getCollectionClassName();

        $this->collChildrenFileDirectories = new $collectionClassName;
        $this->collChildrenFileDirectories->setModel('\Orm\Zed\FileManager\Persistence\SpyFileDirectory');
    }

    /**
     * Gets an array of ChildSpyFileDirectory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyFileDirectory is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyFileDirectory[] List of ChildSpyFileDirectory objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyFileDirectory> List of ChildSpyFileDirectory objects
     * @throws PropelException
     */
    public function getChildrenFileDirectories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collChildrenFileDirectoriesPartial && !$this->isNew();
        if (null === $this->collChildrenFileDirectories || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collChildrenFileDirectories) {
                    $this->initChildrenFileDirectories();
                } else {
                    $collectionClassName = SpyFileDirectoryTableMap::getTableMap()->getCollectionClassName();

                    $collChildrenFileDirectories = new $collectionClassName;
                    $collChildrenFileDirectories->setModel('\Orm\Zed\FileManager\Persistence\SpyFileDirectory');

                    return $collChildrenFileDirectories;
                }
            } else {
                $collChildrenFileDirectories = ChildSpyFileDirectoryQuery::create(null, $criteria)
                    ->filterByParentFileDirectory($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collChildrenFileDirectoriesPartial && count($collChildrenFileDirectories)) {
                        $this->initChildrenFileDirectories(false);

                        foreach ($collChildrenFileDirectories as $obj) {
                            if (false == $this->collChildrenFileDirectories->contains($obj)) {
                                $this->collChildrenFileDirectories->append($obj);
                            }
                        }

                        $this->collChildrenFileDirectoriesPartial = true;
                    }

                    return $collChildrenFileDirectories;
                }

                if ($partial && $this->collChildrenFileDirectories) {
                    foreach ($this->collChildrenFileDirectories as $obj) {
                        if ($obj->isNew()) {
                            $collChildrenFileDirectories[] = $obj;
                        }
                    }
                }

                $this->collChildrenFileDirectories = $collChildrenFileDirectories;
                $this->collChildrenFileDirectoriesPartial = false;
            }
        }

        return $this->collChildrenFileDirectories;
    }

    /**
     * Sets a collection of ChildSpyFileDirectory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $childrenFileDirectories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyFileDirectory The current object (for fluent API support)
     */
    public function setChildrenFileDirectories(Collection $childrenFileDirectories, ConnectionInterface $con = null)
    {
        /** @var ChildSpyFileDirectory[] $childrenFileDirectoriesToDelete */
        $childrenFileDirectoriesToDelete = $this->getChildrenFileDirectories(new Criteria(), $con)->diff($childrenFileDirectories);


        $this->childrenFileDirectoriesScheduledForDeletion = $childrenFileDirectoriesToDelete;

        foreach ($childrenFileDirectoriesToDelete as $childrenFileDirectoryRemoved) {
            $childrenFileDirectoryRemoved->setParentFileDirectory(null);
        }

        $this->collChildrenFileDirectories = null;
        foreach ($childrenFileDirectories as $childrenFileDirectory) {
            $this->addChildrenFileDirectory($childrenFileDirectory);
        }

        $this->collChildrenFileDirectories = $childrenFileDirectories;
        $this->collChildrenFileDirectoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyFileDirectory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyFileDirectory objects.
     * @throws PropelException
     */
    public function countChildrenFileDirectories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collChildrenFileDirectoriesPartial && !$this->isNew();
        if (null === $this->collChildrenFileDirectories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collChildrenFileDirectories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getChildrenFileDirectories());
            }

            $query = ChildSpyFileDirectoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByParentFileDirectory($this)
                ->count($con);
        }

        return count($this->collChildrenFileDirectories);
    }

    /**
     * Method called to associate a ChildSpyFileDirectory object to this object
     * through the ChildSpyFileDirectory foreign key attribute.
     *
     * @param  ChildSpyFileDirectory $l ChildSpyFileDirectory
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
     */
    public function addChildrenFileDirectory(ChildSpyFileDirectory $l)
    {
        if ($this->collChildrenFileDirectories === null) {
            $this->initChildrenFileDirectories();
            $this->collChildrenFileDirectoriesPartial = true;
        }

        if (!$this->collChildrenFileDirectories->contains($l)) {
            $this->doAddChildrenFileDirectory($l);

            if ($this->childrenFileDirectoriesScheduledForDeletion and $this->childrenFileDirectoriesScheduledForDeletion->contains($l)) {
                $this->childrenFileDirectoriesScheduledForDeletion->remove($this->childrenFileDirectoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyFileDirectory $childrenFileDirectory The ChildSpyFileDirectory object to add.
     */
    protected function doAddChildrenFileDirectory(ChildSpyFileDirectory $childrenFileDirectory)
    {
        $this->collChildrenFileDirectories[]= $childrenFileDirectory;
        $childrenFileDirectory->setParentFileDirectory($this);
    }

    /**
     * @param  ChildSpyFileDirectory $childrenFileDirectory The ChildSpyFileDirectory object to remove.
     * @return $this|ChildSpyFileDirectory The current object (for fluent API support)
     */
    public function removeChildrenFileDirectory(ChildSpyFileDirectory $childrenFileDirectory)
    {
        if ($this->getChildrenFileDirectories()->contains($childrenFileDirectory)) {
            $pos = $this->collChildrenFileDirectories->search($childrenFileDirectory);
            $this->collChildrenFileDirectories->remove($pos);
            if (null === $this->childrenFileDirectoriesScheduledForDeletion) {
                $this->childrenFileDirectoriesScheduledForDeletion = clone $this->collChildrenFileDirectories;
                $this->childrenFileDirectoriesScheduledForDeletion->clear();
            }
            $this->childrenFileDirectoriesScheduledForDeletion[]= $childrenFileDirectory;
            $childrenFileDirectory->setParentFileDirectory(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyFileDirectoryLocalizedAttributess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyFileDirectoryLocalizedAttributess()
     */
    public function clearSpyFileDirectoryLocalizedAttributess()
    {
        $this->collSpyFileDirectoryLocalizedAttributess = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyFileDirectoryLocalizedAttributess collection loaded partially.
     */
    public function resetPartialSpyFileDirectoryLocalizedAttributess($v = true)
    {
        $this->collSpyFileDirectoryLocalizedAttributessPartial = $v;
    }

    /**
     * Initializes the collSpyFileDirectoryLocalizedAttributess collection.
     *
     * By default this just sets the collSpyFileDirectoryLocalizedAttributess collection to an empty array (like clearcollSpyFileDirectoryLocalizedAttributess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyFileDirectoryLocalizedAttributess($overrideExisting = true)
    {
        if (null !== $this->collSpyFileDirectoryLocalizedAttributess && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyFileDirectoryLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyFileDirectoryLocalizedAttributess = new $collectionClassName;
        $this->collSpyFileDirectoryLocalizedAttributess->setModel('\Orm\Zed\FileManager\Persistence\SpyFileDirectoryLocalizedAttributes');
    }

    /**
     * Gets an array of ChildSpyFileDirectoryLocalizedAttributes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyFileDirectory is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyFileDirectoryLocalizedAttributes[] List of ChildSpyFileDirectoryLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyFileDirectoryLocalizedAttributes> List of ChildSpyFileDirectoryLocalizedAttributes objects
     * @throws PropelException
     */
    public function getSpyFileDirectoryLocalizedAttributess(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFileDirectoryLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyFileDirectoryLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyFileDirectoryLocalizedAttributess) {
                    $this->initSpyFileDirectoryLocalizedAttributess();
                } else {
                    $collectionClassName = SpyFileDirectoryLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

                    $collSpyFileDirectoryLocalizedAttributess = new $collectionClassName;
                    $collSpyFileDirectoryLocalizedAttributess->setModel('\Orm\Zed\FileManager\Persistence\SpyFileDirectoryLocalizedAttributes');

                    return $collSpyFileDirectoryLocalizedAttributess;
                }
            } else {
                $collSpyFileDirectoryLocalizedAttributess = ChildSpyFileDirectoryLocalizedAttributesQuery::create(null, $criteria)
                    ->filterBySpyFileDirectory($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyFileDirectoryLocalizedAttributessPartial && count($collSpyFileDirectoryLocalizedAttributess)) {
                        $this->initSpyFileDirectoryLocalizedAttributess(false);

                        foreach ($collSpyFileDirectoryLocalizedAttributess as $obj) {
                            if (false == $this->collSpyFileDirectoryLocalizedAttributess->contains($obj)) {
                                $this->collSpyFileDirectoryLocalizedAttributess->append($obj);
                            }
                        }

                        $this->collSpyFileDirectoryLocalizedAttributessPartial = true;
                    }

                    return $collSpyFileDirectoryLocalizedAttributess;
                }

                if ($partial && $this->collSpyFileDirectoryLocalizedAttributess) {
                    foreach ($this->collSpyFileDirectoryLocalizedAttributess as $obj) {
                        if ($obj->isNew()) {
                            $collSpyFileDirectoryLocalizedAttributess[] = $obj;
                        }
                    }
                }

                $this->collSpyFileDirectoryLocalizedAttributess = $collSpyFileDirectoryLocalizedAttributess;
                $this->collSpyFileDirectoryLocalizedAttributessPartial = false;
            }
        }

        return $this->collSpyFileDirectoryLocalizedAttributess;
    }

    /**
     * Sets a collection of ChildSpyFileDirectoryLocalizedAttributes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyFileDirectoryLocalizedAttributess A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyFileDirectory The current object (for fluent API support)
     */
    public function setSpyFileDirectoryLocalizedAttributess(Collection $spyFileDirectoryLocalizedAttributess, ConnectionInterface $con = null)
    {
        /** @var ChildSpyFileDirectoryLocalizedAttributes[] $spyFileDirectoryLocalizedAttributessToDelete */
        $spyFileDirectoryLocalizedAttributessToDelete = $this->getSpyFileDirectoryLocalizedAttributess(new Criteria(), $con)->diff($spyFileDirectoryLocalizedAttributess);


        $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion = $spyFileDirectoryLocalizedAttributessToDelete;

        foreach ($spyFileDirectoryLocalizedAttributessToDelete as $spyFileDirectoryLocalizedAttributesRemoved) {
            $spyFileDirectoryLocalizedAttributesRemoved->setSpyFileDirectory(null);
        }

        $this->collSpyFileDirectoryLocalizedAttributess = null;
        foreach ($spyFileDirectoryLocalizedAttributess as $spyFileDirectoryLocalizedAttributes) {
            $this->addSpyFileDirectoryLocalizedAttributes($spyFileDirectoryLocalizedAttributes);
        }

        $this->collSpyFileDirectoryLocalizedAttributess = $spyFileDirectoryLocalizedAttributess;
        $this->collSpyFileDirectoryLocalizedAttributessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyFileDirectoryLocalizedAttributes objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyFileDirectoryLocalizedAttributes objects.
     * @throws PropelException
     */
    public function countSpyFileDirectoryLocalizedAttributess(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFileDirectoryLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyFileDirectoryLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyFileDirectoryLocalizedAttributess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyFileDirectoryLocalizedAttributess());
            }

            $query = ChildSpyFileDirectoryLocalizedAttributesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyFileDirectory($this)
                ->count($con);
        }

        return count($this->collSpyFileDirectoryLocalizedAttributess);
    }

    /**
     * Method called to associate a ChildSpyFileDirectoryLocalizedAttributes object to this object
     * through the ChildSpyFileDirectoryLocalizedAttributes foreign key attribute.
     *
     * @param  ChildSpyFileDirectoryLocalizedAttributes $l ChildSpyFileDirectoryLocalizedAttributes
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFileDirectory The current object (for fluent API support)
     */
    public function addSpyFileDirectoryLocalizedAttributes(ChildSpyFileDirectoryLocalizedAttributes $l)
    {
        if ($this->collSpyFileDirectoryLocalizedAttributess === null) {
            $this->initSpyFileDirectoryLocalizedAttributess();
            $this->collSpyFileDirectoryLocalizedAttributessPartial = true;
        }

        if (!$this->collSpyFileDirectoryLocalizedAttributess->contains($l)) {
            $this->doAddSpyFileDirectoryLocalizedAttributes($l);

            if ($this->spyFileDirectoryLocalizedAttributessScheduledForDeletion and $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion->contains($l)) {
                $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion->remove($this->spyFileDirectoryLocalizedAttributessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyFileDirectoryLocalizedAttributes $spyFileDirectoryLocalizedAttributes The ChildSpyFileDirectoryLocalizedAttributes object to add.
     */
    protected function doAddSpyFileDirectoryLocalizedAttributes(ChildSpyFileDirectoryLocalizedAttributes $spyFileDirectoryLocalizedAttributes)
    {
        $this->collSpyFileDirectoryLocalizedAttributess[]= $spyFileDirectoryLocalizedAttributes;
        $spyFileDirectoryLocalizedAttributes->setSpyFileDirectory($this);
    }

    /**
     * @param  ChildSpyFileDirectoryLocalizedAttributes $spyFileDirectoryLocalizedAttributes The ChildSpyFileDirectoryLocalizedAttributes object to remove.
     * @return $this|ChildSpyFileDirectory The current object (for fluent API support)
     */
    public function removeSpyFileDirectoryLocalizedAttributes(ChildSpyFileDirectoryLocalizedAttributes $spyFileDirectoryLocalizedAttributes)
    {
        if ($this->getSpyFileDirectoryLocalizedAttributess()->contains($spyFileDirectoryLocalizedAttributes)) {
            $pos = $this->collSpyFileDirectoryLocalizedAttributess->search($spyFileDirectoryLocalizedAttributes);
            $this->collSpyFileDirectoryLocalizedAttributess->remove($pos);
            if (null === $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion) {
                $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion = clone $this->collSpyFileDirectoryLocalizedAttributess;
                $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion->clear();
            }
            $this->spyFileDirectoryLocalizedAttributessScheduledForDeletion[]= clone $spyFileDirectoryLocalizedAttributes;
            $spyFileDirectoryLocalizedAttributes->setSpyFileDirectory(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyFileDirectory is new, it will return
     * an empty collection; or if this SpyFileDirectory has previously
     * been saved, it will retrieve related SpyFileDirectoryLocalizedAttributess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyFileDirectory.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyFileDirectoryLocalizedAttributes[] List of ChildSpyFileDirectoryLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyFileDirectoryLocalizedAttributes}> List of ChildSpyFileDirectoryLocalizedAttributes objects
     */
    public function getSpyFileDirectoryLocalizedAttributessJoinSpyLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyFileDirectoryLocalizedAttributesQuery::create(null, $criteria);
        $query->joinWith('SpyLocale', $joinBehavior);

        return $this->getSpyFileDirectoryLocalizedAttributess($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aParentFileDirectory) {
            $this->aParentFileDirectory->removeChildrenFileDirectory($this);
        }
        $this->id_file_directory = null;
        $this->fk_parent_file_directory = null;
        $this->is_active = null;
        $this->name = null;
        $this->position = null;
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
            if ($this->collSpyFiles) {
                foreach ($this->collSpyFiles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collChildrenFileDirectories) {
                foreach ($this->collChildrenFileDirectories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyFileDirectoryLocalizedAttributess) {
                foreach ($this->collSpyFileDirectoryLocalizedAttributess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyFiles = null;
        $this->collChildrenFileDirectories = null;
        $this->collSpyFileDirectoryLocalizedAttributess = null;
        $this->aParentFileDirectory = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyFileDirectoryTableMap::DEFAULT_STRING_FORMAT);
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
