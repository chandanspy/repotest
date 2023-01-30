<?php

namespace Orm\Zed\FileManager\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\FileManager\Persistence\SpyFile as ChildSpyFile;
use Orm\Zed\FileManager\Persistence\SpyFileDirectory as ChildSpyFileDirectory;
use Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery as ChildSpyFileDirectoryQuery;
use Orm\Zed\FileManager\Persistence\SpyFileInfo as ChildSpyFileInfo;
use Orm\Zed\FileManager\Persistence\SpyFileInfoQuery as ChildSpyFileInfoQuery;
use Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes as ChildSpyFileLocalizedAttributes;
use Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery as ChildSpyFileLocalizedAttributesQuery;
use Orm\Zed\FileManager\Persistence\SpyFileQuery as ChildSpyFileQuery;
use Orm\Zed\FileManager\Persistence\Map\SpyFileInfoTableMap;
use Orm\Zed\FileManager\Persistence\Map\SpyFileLocalizedAttributesTableMap;
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
 * Base class that represents a row from the 'spy_file' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.FileManager.Persistence.Base
 */
abstract class SpyFile implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\FileManager\\Persistence\\Map\\SpyFileTableMap';


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
     * The value for the id_file field.
     *
     * @var        int
     */
    protected $id_file;

    /**
     * The value for the fk_file_directory field.
     *
     * @var        int|null
     */
    protected $fk_file_directory;

    /**
     * The value for the file_name field.
     *
     * @var        string
     */
    protected $file_name;

    /**
     * @var        ChildSpyFileDirectory
     */
    protected $aFileDirectory;

    /**
     * @var        ObjectCollection|ChildSpyFileInfo[] Collection to store aggregation of ChildSpyFileInfo objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileInfo> Collection to store aggregation of ChildSpyFileInfo objects.
     */
    protected $collSpyFileInfos;
    protected $collSpyFileInfosPartial;

    /**
     * @var        ObjectCollection|ChildSpyFileLocalizedAttributes[] Collection to store aggregation of ChildSpyFileLocalizedAttributes objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileLocalizedAttributes> Collection to store aggregation of ChildSpyFileLocalizedAttributes objects.
     */
    protected $collSpyFileLocalizedAttributess;
    protected $collSpyFileLocalizedAttributessPartial;

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
        'spy_file.fk_file_directory' => 'fk_file_directory',
    ];

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyFileInfo[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileInfo>
     */
    protected $spyFileInfosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyFileLocalizedAttributes[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyFileLocalizedAttributes>
     */
    protected $spyFileLocalizedAttributessScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\FileManager\Persistence\Base\SpyFile object.
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
     * Compares this with another <code>SpyFile</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyFile</code>, delegates to
     * <code>equals(SpyFile)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_file] column value.
     *
     * @return int
     */
    public function getIdFile()
    {
        return $this->id_file;
    }

    /**
     * Get the [fk_file_directory] column value.
     *
     * @return int|null
     */
    public function getFkFileDirectory()
    {
        return $this->fk_file_directory;
    }

    /**
     * Get the [file_name] column value.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Set the value of [id_file] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile The current object (for fluent API support)
     */
    public function setIdFile($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_file !== $v) {
            $this->id_file = $v;
            $this->modifiedColumns[SpyFileTableMap::COL_ID_FILE] = true;
        }

        return $this;
    } // setIdFile()

    /**
     * Set the value of [fk_file_directory] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile The current object (for fluent API support)
     */
    public function setFkFileDirectory($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_file_directory !== $v) {
            $this->fk_file_directory = $v;
            $this->modifiedColumns[SpyFileTableMap::COL_FK_FILE_DIRECTORY] = true;
        }

        if ($this->aFileDirectory !== null && $this->aFileDirectory->getIdFileDirectory() !== $v) {
            $this->aFileDirectory = null;
        }

        return $this;
    } // setFkFileDirectory()

    /**
     * Set the value of [file_name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile The current object (for fluent API support)
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
            $this->modifiedColumns[SpyFileTableMap::COL_FILE_NAME] = true;
        }

        return $this;
    } // setFileName()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyFileTableMap::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_file = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyFileTableMap::translateFieldName('FkFileDirectory', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_file_directory = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyFileTableMap::translateFieldName('FileName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->file_name = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = SpyFileTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFile'), 0, $e);
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
        if ($this->aFileDirectory !== null && $this->fk_file_directory !== $this->aFileDirectory->getIdFileDirectory()) {
            $this->aFileDirectory = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyFileTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyFileQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aFileDirectory = null;
            $this->collSpyFileInfos = null;

            $this->collSpyFileLocalizedAttributess = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyFile::setDeleted()
     * @see SpyFile::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyFileQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            // event behavior

            $this->prepareSaveEventName();

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
                // event behavior

                if ($affectedRows) {
                    $this->addSaveEventToMemory();
                }

                SpyFileTableMap::addInstanceToPool($this);
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

            if ($this->aFileDirectory !== null) {
                if ($this->aFileDirectory->isModified() || $this->aFileDirectory->isNew()) {
                    $affectedRows += $this->aFileDirectory->save($con);
                }
                $this->setFileDirectory($this->aFileDirectory);
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

            if ($this->spyFileInfosScheduledForDeletion !== null) {
                if (!$this->spyFileInfosScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\FileManager\Persistence\SpyFileInfoQuery::create()
                        ->filterByPrimaryKeys($this->spyFileInfosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyFileInfosScheduledForDeletion = null;
                }
            }

            if ($this->collSpyFileInfos !== null) {
                foreach ($this->collSpyFileInfos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyFileLocalizedAttributessScheduledForDeletion !== null) {
                if (!$this->spyFileLocalizedAttributessScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery::create()
                        ->filterByPrimaryKeys($this->spyFileLocalizedAttributessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyFileLocalizedAttributessScheduledForDeletion = null;
                }
            }

            if ($this->collSpyFileLocalizedAttributess !== null) {
                foreach ($this->collSpyFileLocalizedAttributess as $referrerFK) {
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

        $this->modifiedColumns[SpyFileTableMap::COL_ID_FILE] = true;
        if (null !== $this->id_file) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyFileTableMap::COL_ID_FILE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyFileTableMap::COL_ID_FILE)) {
            $modifiedColumns[':p' . $index++]  = 'id_file';
        }
        if ($this->isColumnModified(SpyFileTableMap::COL_FK_FILE_DIRECTORY)) {
            $modifiedColumns[':p' . $index++]  = 'fk_file_directory';
        }
        if ($this->isColumnModified(SpyFileTableMap::COL_FILE_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'file_name';
        }

        $sql = sprintf(
            'INSERT INTO spy_file (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_file':
                        $stmt->bindValue($identifier, $this->id_file, PDO::PARAM_INT);
                        break;
                    case 'fk_file_directory':
                        $stmt->bindValue($identifier, $this->fk_file_directory, PDO::PARAM_INT);
                        break;
                    case 'file_name':
                        $stmt->bindValue($identifier, $this->file_name, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_file_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdFile($pk);

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
        $pos = SpyFileTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdFile();
                break;
            case 1:
                return $this->getFkFileDirectory();
                break;
            case 2:
                return $this->getFileName();
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

        if (isset($alreadyDumpedObjects['SpyFile'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyFile'][$this->hashCode()] = true;
        $keys = SpyFileTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdFile(),
            $keys[1] => $this->getFkFileDirectory(),
            $keys[2] => $this->getFileName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aFileDirectory) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyFileDirectory';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_file_directory';
                        break;
                    default:
                        $key = 'FileDirectory';
                }

                $result[$key] = $this->aFileDirectory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyFileInfos) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyFileInfos';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_file_infos';
                        break;
                    default:
                        $key = 'SpyFileInfos';
                }

                $result[$key] = $this->collSpyFileInfos->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyFileLocalizedAttributess) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyFileLocalizedAttributess';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_file_localized_attributess';
                        break;
                    default:
                        $key = 'SpyFileLocalizedAttributess';
                }

                $result[$key] = $this->collSpyFileLocalizedAttributess->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyFileTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdFile($value);
                break;
            case 1:
                $this->setFkFileDirectory($value);
                break;
            case 2:
                $this->setFileName($value);
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
     * @return     $this|\Orm\Zed\FileManager\Persistence\SpyFile
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyFileTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdFile($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkFileDirectory($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFileName($arr[$keys[2]]);
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
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile The current object, for fluid interface
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
        $criteria = new Criteria(SpyFileTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyFileTableMap::COL_ID_FILE)) {
            $criteria->add(SpyFileTableMap::COL_ID_FILE, $this->id_file);
        }
        if ($this->isColumnModified(SpyFileTableMap::COL_FK_FILE_DIRECTORY)) {
            $criteria->add(SpyFileTableMap::COL_FK_FILE_DIRECTORY, $this->fk_file_directory);
        }
        if ($this->isColumnModified(SpyFileTableMap::COL_FILE_NAME)) {
            $criteria->add(SpyFileTableMap::COL_FILE_NAME, $this->file_name);
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
        $criteria = ChildSpyFileQuery::create();
        $criteria->add(SpyFileTableMap::COL_ID_FILE, $this->id_file);

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
        $validPk = null !== $this->getIdFile();

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
        return $this->getIdFile();
    }

    /**
     * Generic method to set the primary key (id_file column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdFile($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdFile();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\FileManager\Persistence\SpyFile (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkFileDirectory($this->getFkFileDirectory());
        $copyObj->setFileName($this->getFileName());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyFileInfos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyFileInfo($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyFileLocalizedAttributess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyFileLocalizedAttributes($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdFile(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\FileManager\Persistence\SpyFile Clone of current object.
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
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFileDirectory(ChildSpyFileDirectory $v = null)
    {
        if ($v === null) {
            $this->setFkFileDirectory(NULL);
        } else {
            $this->setFkFileDirectory($v->getIdFileDirectory());
        }

        $this->aFileDirectory = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyFileDirectory object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyFile($this);
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
    public function getFileDirectory(ConnectionInterface $con = null)
    {
        if ($this->aFileDirectory === null && ($this->fk_file_directory != 0)) {
            $this->aFileDirectory = ChildSpyFileDirectoryQuery::create()->findPk($this->fk_file_directory, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFileDirectory->addSpyFiles($this);
             */
        }

        return $this->aFileDirectory;
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
        if ('SpyFileInfo' === $relationName) {
            $this->initSpyFileInfos();
            return;
        }
        if ('SpyFileLocalizedAttributes' === $relationName) {
            $this->initSpyFileLocalizedAttributess();
            return;
        }
    }

    /**
     * Clears out the collSpyFileInfos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyFileInfos()
     */
    public function clearSpyFileInfos()
    {
        $this->collSpyFileInfos = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyFileInfos collection loaded partially.
     */
    public function resetPartialSpyFileInfos($v = true)
    {
        $this->collSpyFileInfosPartial = $v;
    }

    /**
     * Initializes the collSpyFileInfos collection.
     *
     * By default this just sets the collSpyFileInfos collection to an empty array (like clearcollSpyFileInfos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyFileInfos($overrideExisting = true)
    {
        if (null !== $this->collSpyFileInfos && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyFileInfoTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyFileInfos = new $collectionClassName;
        $this->collSpyFileInfos->setModel('\Orm\Zed\FileManager\Persistence\SpyFileInfo');
    }

    /**
     * Gets an array of ChildSpyFileInfo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyFile is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyFileInfo[] List of ChildSpyFileInfo objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyFileInfo> List of ChildSpyFileInfo objects
     * @throws PropelException
     */
    public function getSpyFileInfos(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFileInfosPartial && !$this->isNew();
        if (null === $this->collSpyFileInfos || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyFileInfos) {
                    $this->initSpyFileInfos();
                } else {
                    $collectionClassName = SpyFileInfoTableMap::getTableMap()->getCollectionClassName();

                    $collSpyFileInfos = new $collectionClassName;
                    $collSpyFileInfos->setModel('\Orm\Zed\FileManager\Persistence\SpyFileInfo');

                    return $collSpyFileInfos;
                }
            } else {
                $collSpyFileInfos = ChildSpyFileInfoQuery::create(null, $criteria)
                    ->filterByFile($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyFileInfosPartial && count($collSpyFileInfos)) {
                        $this->initSpyFileInfos(false);

                        foreach ($collSpyFileInfos as $obj) {
                            if (false == $this->collSpyFileInfos->contains($obj)) {
                                $this->collSpyFileInfos->append($obj);
                            }
                        }

                        $this->collSpyFileInfosPartial = true;
                    }

                    return $collSpyFileInfos;
                }

                if ($partial && $this->collSpyFileInfos) {
                    foreach ($this->collSpyFileInfos as $obj) {
                        if ($obj->isNew()) {
                            $collSpyFileInfos[] = $obj;
                        }
                    }
                }

                $this->collSpyFileInfos = $collSpyFileInfos;
                $this->collSpyFileInfosPartial = false;
            }
        }

        return $this->collSpyFileInfos;
    }

    /**
     * Sets a collection of ChildSpyFileInfo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyFileInfos A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyFile The current object (for fluent API support)
     */
    public function setSpyFileInfos(Collection $spyFileInfos, ConnectionInterface $con = null)
    {
        /** @var ChildSpyFileInfo[] $spyFileInfosToDelete */
        $spyFileInfosToDelete = $this->getSpyFileInfos(new Criteria(), $con)->diff($spyFileInfos);


        $this->spyFileInfosScheduledForDeletion = $spyFileInfosToDelete;

        foreach ($spyFileInfosToDelete as $spyFileInfoRemoved) {
            $spyFileInfoRemoved->setFile(null);
        }

        $this->collSpyFileInfos = null;
        foreach ($spyFileInfos as $spyFileInfo) {
            $this->addSpyFileInfo($spyFileInfo);
        }

        $this->collSpyFileInfos = $spyFileInfos;
        $this->collSpyFileInfosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyFileInfo objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyFileInfo objects.
     * @throws PropelException
     */
    public function countSpyFileInfos(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFileInfosPartial && !$this->isNew();
        if (null === $this->collSpyFileInfos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyFileInfos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyFileInfos());
            }

            $query = ChildSpyFileInfoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByFile($this)
                ->count($con);
        }

        return count($this->collSpyFileInfos);
    }

    /**
     * Method called to associate a ChildSpyFileInfo object to this object
     * through the ChildSpyFileInfo foreign key attribute.
     *
     * @param  ChildSpyFileInfo $l ChildSpyFileInfo
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile The current object (for fluent API support)
     */
    public function addSpyFileInfo(ChildSpyFileInfo $l)
    {
        if ($this->collSpyFileInfos === null) {
            $this->initSpyFileInfos();
            $this->collSpyFileInfosPartial = true;
        }

        if (!$this->collSpyFileInfos->contains($l)) {
            $this->doAddSpyFileInfo($l);

            if ($this->spyFileInfosScheduledForDeletion and $this->spyFileInfosScheduledForDeletion->contains($l)) {
                $this->spyFileInfosScheduledForDeletion->remove($this->spyFileInfosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyFileInfo $spyFileInfo The ChildSpyFileInfo object to add.
     */
    protected function doAddSpyFileInfo(ChildSpyFileInfo $spyFileInfo)
    {
        $this->collSpyFileInfos[]= $spyFileInfo;
        $spyFileInfo->setFile($this);
    }

    /**
     * @param  ChildSpyFileInfo $spyFileInfo The ChildSpyFileInfo object to remove.
     * @return $this|ChildSpyFile The current object (for fluent API support)
     */
    public function removeSpyFileInfo(ChildSpyFileInfo $spyFileInfo)
    {
        if ($this->getSpyFileInfos()->contains($spyFileInfo)) {
            $pos = $this->collSpyFileInfos->search($spyFileInfo);
            $this->collSpyFileInfos->remove($pos);
            if (null === $this->spyFileInfosScheduledForDeletion) {
                $this->spyFileInfosScheduledForDeletion = clone $this->collSpyFileInfos;
                $this->spyFileInfosScheduledForDeletion->clear();
            }
            $this->spyFileInfosScheduledForDeletion[]= clone $spyFileInfo;
            $spyFileInfo->setFile(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyFileLocalizedAttributess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyFileLocalizedAttributess()
     */
    public function clearSpyFileLocalizedAttributess()
    {
        $this->collSpyFileLocalizedAttributess = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyFileLocalizedAttributess collection loaded partially.
     */
    public function resetPartialSpyFileLocalizedAttributess($v = true)
    {
        $this->collSpyFileLocalizedAttributessPartial = $v;
    }

    /**
     * Initializes the collSpyFileLocalizedAttributess collection.
     *
     * By default this just sets the collSpyFileLocalizedAttributess collection to an empty array (like clearcollSpyFileLocalizedAttributess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyFileLocalizedAttributess($overrideExisting = true)
    {
        if (null !== $this->collSpyFileLocalizedAttributess && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyFileLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyFileLocalizedAttributess = new $collectionClassName;
        $this->collSpyFileLocalizedAttributess->setModel('\Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes');
    }

    /**
     * Gets an array of ChildSpyFileLocalizedAttributes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyFile is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyFileLocalizedAttributes[] List of ChildSpyFileLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyFileLocalizedAttributes> List of ChildSpyFileLocalizedAttributes objects
     * @throws PropelException
     */
    public function getSpyFileLocalizedAttributess(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFileLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyFileLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyFileLocalizedAttributess) {
                    $this->initSpyFileLocalizedAttributess();
                } else {
                    $collectionClassName = SpyFileLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

                    $collSpyFileLocalizedAttributess = new $collectionClassName;
                    $collSpyFileLocalizedAttributess->setModel('\Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes');

                    return $collSpyFileLocalizedAttributess;
                }
            } else {
                $collSpyFileLocalizedAttributess = ChildSpyFileLocalizedAttributesQuery::create(null, $criteria)
                    ->filterBySpyFile($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyFileLocalizedAttributessPartial && count($collSpyFileLocalizedAttributess)) {
                        $this->initSpyFileLocalizedAttributess(false);

                        foreach ($collSpyFileLocalizedAttributess as $obj) {
                            if (false == $this->collSpyFileLocalizedAttributess->contains($obj)) {
                                $this->collSpyFileLocalizedAttributess->append($obj);
                            }
                        }

                        $this->collSpyFileLocalizedAttributessPartial = true;
                    }

                    return $collSpyFileLocalizedAttributess;
                }

                if ($partial && $this->collSpyFileLocalizedAttributess) {
                    foreach ($this->collSpyFileLocalizedAttributess as $obj) {
                        if ($obj->isNew()) {
                            $collSpyFileLocalizedAttributess[] = $obj;
                        }
                    }
                }

                $this->collSpyFileLocalizedAttributess = $collSpyFileLocalizedAttributess;
                $this->collSpyFileLocalizedAttributessPartial = false;
            }
        }

        return $this->collSpyFileLocalizedAttributess;
    }

    /**
     * Sets a collection of ChildSpyFileLocalizedAttributes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyFileLocalizedAttributess A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyFile The current object (for fluent API support)
     */
    public function setSpyFileLocalizedAttributess(Collection $spyFileLocalizedAttributess, ConnectionInterface $con = null)
    {
        /** @var ChildSpyFileLocalizedAttributes[] $spyFileLocalizedAttributessToDelete */
        $spyFileLocalizedAttributessToDelete = $this->getSpyFileLocalizedAttributess(new Criteria(), $con)->diff($spyFileLocalizedAttributess);


        $this->spyFileLocalizedAttributessScheduledForDeletion = $spyFileLocalizedAttributessToDelete;

        foreach ($spyFileLocalizedAttributessToDelete as $spyFileLocalizedAttributesRemoved) {
            $spyFileLocalizedAttributesRemoved->setSpyFile(null);
        }

        $this->collSpyFileLocalizedAttributess = null;
        foreach ($spyFileLocalizedAttributess as $spyFileLocalizedAttributes) {
            $this->addSpyFileLocalizedAttributes($spyFileLocalizedAttributes);
        }

        $this->collSpyFileLocalizedAttributess = $spyFileLocalizedAttributess;
        $this->collSpyFileLocalizedAttributessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyFileLocalizedAttributes objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyFileLocalizedAttributes objects.
     * @throws PropelException
     */
    public function countSpyFileLocalizedAttributess(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyFileLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyFileLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyFileLocalizedAttributess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyFileLocalizedAttributess());
            }

            $query = ChildSpyFileLocalizedAttributesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyFile($this)
                ->count($con);
        }

        return count($this->collSpyFileLocalizedAttributess);
    }

    /**
     * Method called to associate a ChildSpyFileLocalizedAttributes object to this object
     * through the ChildSpyFileLocalizedAttributes foreign key attribute.
     *
     * @param  ChildSpyFileLocalizedAttributes $l ChildSpyFileLocalizedAttributes
     * @return $this|\Orm\Zed\FileManager\Persistence\SpyFile The current object (for fluent API support)
     */
    public function addSpyFileLocalizedAttributes(ChildSpyFileLocalizedAttributes $l)
    {
        if ($this->collSpyFileLocalizedAttributess === null) {
            $this->initSpyFileLocalizedAttributess();
            $this->collSpyFileLocalizedAttributessPartial = true;
        }

        if (!$this->collSpyFileLocalizedAttributess->contains($l)) {
            $this->doAddSpyFileLocalizedAttributes($l);

            if ($this->spyFileLocalizedAttributessScheduledForDeletion and $this->spyFileLocalizedAttributessScheduledForDeletion->contains($l)) {
                $this->spyFileLocalizedAttributessScheduledForDeletion->remove($this->spyFileLocalizedAttributessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyFileLocalizedAttributes $spyFileLocalizedAttributes The ChildSpyFileLocalizedAttributes object to add.
     */
    protected function doAddSpyFileLocalizedAttributes(ChildSpyFileLocalizedAttributes $spyFileLocalizedAttributes)
    {
        $this->collSpyFileLocalizedAttributess[]= $spyFileLocalizedAttributes;
        $spyFileLocalizedAttributes->setSpyFile($this);
    }

    /**
     * @param  ChildSpyFileLocalizedAttributes $spyFileLocalizedAttributes The ChildSpyFileLocalizedAttributes object to remove.
     * @return $this|ChildSpyFile The current object (for fluent API support)
     */
    public function removeSpyFileLocalizedAttributes(ChildSpyFileLocalizedAttributes $spyFileLocalizedAttributes)
    {
        if ($this->getSpyFileLocalizedAttributess()->contains($spyFileLocalizedAttributes)) {
            $pos = $this->collSpyFileLocalizedAttributess->search($spyFileLocalizedAttributes);
            $this->collSpyFileLocalizedAttributess->remove($pos);
            if (null === $this->spyFileLocalizedAttributessScheduledForDeletion) {
                $this->spyFileLocalizedAttributessScheduledForDeletion = clone $this->collSpyFileLocalizedAttributess;
                $this->spyFileLocalizedAttributessScheduledForDeletion->clear();
            }
            $this->spyFileLocalizedAttributessScheduledForDeletion[]= clone $spyFileLocalizedAttributes;
            $spyFileLocalizedAttributes->setSpyFile(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyFile is new, it will return
     * an empty collection; or if this SpyFile has previously
     * been saved, it will retrieve related SpyFileLocalizedAttributess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyFile.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyFileLocalizedAttributes[] List of ChildSpyFileLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyFileLocalizedAttributes}> List of ChildSpyFileLocalizedAttributes objects
     */
    public function getSpyFileLocalizedAttributessJoinLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyFileLocalizedAttributesQuery::create(null, $criteria);
        $query->joinWith('Locale', $joinBehavior);

        return $this->getSpyFileLocalizedAttributess($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aFileDirectory) {
            $this->aFileDirectory->removeSpyFile($this);
        }
        $this->id_file = null;
        $this->fk_file_directory = null;
        $this->file_name = null;
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
            if ($this->collSpyFileInfos) {
                foreach ($this->collSpyFileInfos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyFileLocalizedAttributess) {
                foreach ($this->collSpyFileLocalizedAttributess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyFileInfos = null;
        $this->collSpyFileLocalizedAttributess = null;
        $this->aFileDirectory = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyFileTableMap::DEFAULT_STRING_FORMAT);
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_file.create';
        } else {
            $this->_eventName = 'Entity.spy_file.update';
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

        if ($this->_eventName !== 'Entity.spy_file.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_file',
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
            'name' => 'spy_file',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_file.delete',
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
            $field = str_replace('spy_file.', '', $modifiedColumn);
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
            $field = str_replace('spy_file.', '', $additionalValueColumnName);
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
        $columnType = SpyFileTableMap::getTableMap()->getColumn($column)->getType();
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
