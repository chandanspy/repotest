<?php

namespace Orm\Zed\CmsSlot\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CmsSlotBlock\Persistence\SpyCmsSlotBlock;
use Orm\Zed\CmsSlotBlock\Persistence\SpyCmsSlotBlockQuery;
use Orm\Zed\CmsSlotBlock\Persistence\Base\SpyCmsSlotBlock as BaseSpyCmsSlotBlock;
use Orm\Zed\CmsSlotBlock\Persistence\Map\SpyCmsSlotBlockTableMap;
use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate as ChildSpyCmsSlotTemplate;
use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery as ChildSpyCmsSlotTemplateQuery;
use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplate as ChildSpyCmsSlotToCmsSlotTemplate;
use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplateQuery as ChildSpyCmsSlotToCmsSlotTemplateQuery;
use Orm\Zed\CmsSlot\Persistence\Map\SpyCmsSlotTemplateTableMap;
use Orm\Zed\CmsSlot\Persistence\Map\SpyCmsSlotToCmsSlotTemplateTableMap;
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
 * Base class that represents a row from the 'spy_cms_slot_template' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.CmsSlot.Persistence.Base
 */
abstract class SpyCmsSlotTemplate implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\CmsSlot\\Persistence\\Map\\SpyCmsSlotTemplateTableMap';


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
     * The value for the id_cms_slot_template field.
     *
     * @var        int
     */
    protected $id_cms_slot_template;

    /**
     * The value for the description field.
     *
     * @var        string
     */
    protected $description;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the path field.
     * Identifier for existing entities. It should never be changed.
     * @var        string
     */
    protected $path;

    /**
     * The value for the path_hash field.
     *
     * @var        string
     */
    protected $path_hash;

    /**
     * @var        ObjectCollection|ChildSpyCmsSlotToCmsSlotTemplate[] Collection to store aggregation of ChildSpyCmsSlotToCmsSlotTemplate objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate> Collection to store aggregation of ChildSpyCmsSlotToCmsSlotTemplate objects.
     */
    protected $collSpyCmsSlotToCmsSlotTemplates;
    protected $collSpyCmsSlotToCmsSlotTemplatesPartial;

    /**
     * @var        ObjectCollection|SpyCmsSlotBlock[] Collection to store aggregation of SpyCmsSlotBlock objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCmsSlotBlock> Collection to store aggregation of SpyCmsSlotBlock objects.
     */
    protected $collSpyCmsSlotBlocks;
    protected $collSpyCmsSlotBlocksPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyCmsSlotToCmsSlotTemplate[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate>
     */
    protected $spyCmsSlotToCmsSlotTemplatesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCmsSlotBlock[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCmsSlotBlock>
     */
    protected $spyCmsSlotBlocksScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\CmsSlot\Persistence\Base\SpyCmsSlotTemplate object.
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
     * Compares this with another <code>SpyCmsSlotTemplate</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyCmsSlotTemplate</code>, delegates to
     * <code>equals(SpyCmsSlotTemplate)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_cms_slot_template] column value.
     *
     * @return int
     */
    public function getIdCmsSlotTemplate()
    {
        return $this->id_cms_slot_template;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
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
     * Get the [path] column value.
     * Identifier for existing entities. It should never be changed.
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Get the [path_hash] column value.
     *
     * @return string
     */
    public function getPathHash()
    {
        return $this->path_hash;
    }

    /**
     * Set the value of [id_cms_slot_template] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function setIdCmsSlotTemplate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_cms_slot_template !== $v) {
            $this->id_cms_slot_template = $v;
            $this->modifiedColumns[SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE] = true;
        }

        return $this;
    } // setIdCmsSlotTemplate()

    /**
     * Set the value of [description] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCmsSlotTemplateTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setDescription()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCmsSlotTemplateTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [path] column.
     * Identifier for existing entities. It should never be changed.
     * @param string $v New value
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function setPath($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->path !== $v) {
            $this->path = $v;
            $this->modifiedColumns[SpyCmsSlotTemplateTableMap::COL_PATH] = true;
        }

        return $this;
    } // setPath()

    /**
     * Set the value of [path_hash] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function setPathHash($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->path_hash !== $v) {
            $this->path_hash = $v;
            $this->modifiedColumns[SpyCmsSlotTemplateTableMap::COL_PATH_HASH] = true;
        }

        return $this;
    } // setPathHash()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyCmsSlotTemplateTableMap::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_cms_slot_template = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyCmsSlotTemplateTableMap::translateFieldName('Description', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyCmsSlotTemplateTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyCmsSlotTemplateTableMap::translateFieldName('Path', TableMap::TYPE_PHPNAME, $indexType)];
            $this->path = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyCmsSlotTemplateTableMap::translateFieldName('PathHash', TableMap::TYPE_PHPNAME, $indexType)];
            $this->path_hash = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 5; // 5 = SpyCmsSlotTemplateTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\CmsSlot\\Persistence\\SpyCmsSlotTemplate'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyCmsSlotTemplateTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyCmsSlotTemplateQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSpyCmsSlotToCmsSlotTemplates = null;

            $this->collSpyCmsSlotBlocks = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyCmsSlotTemplate::setDeleted()
     * @see SpyCmsSlotTemplate::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotTemplateTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyCmsSlotTemplateQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotTemplateTableMap::DATABASE_NAME);
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
                SpyCmsSlotTemplateTableMap::addInstanceToPool($this);
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

            if ($this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion !== null) {
                if (!$this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplateQuery::create()
                        ->filterByPrimaryKeys($this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCmsSlotToCmsSlotTemplates !== null) {
                foreach ($this->collSpyCmsSlotToCmsSlotTemplates as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyCmsSlotBlocksScheduledForDeletion !== null) {
                if (!$this->spyCmsSlotBlocksScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CmsSlotBlock\Persistence\SpyCmsSlotBlockQuery::create()
                        ->filterByPrimaryKeys($this->spyCmsSlotBlocksScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCmsSlotBlocksScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCmsSlotBlocks !== null) {
                foreach ($this->collSpyCmsSlotBlocks as $referrerFK) {
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

        $this->modifiedColumns[SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE)) {
            $modifiedColumns[':p' . $index++]  = '`id_cms_slot_template`';
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_PATH)) {
            $modifiedColumns[':p' . $index++]  = '`path`';
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_PATH_HASH)) {
            $modifiedColumns[':p' . $index++]  = '`path_hash`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_cms_slot_template` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_cms_slot_template`':
                        $stmt->bindValue($identifier, $this->id_cms_slot_template, PDO::PARAM_INT);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`path`':
                        $stmt->bindValue($identifier, $this->path, PDO::PARAM_STR);
                        break;
                    case '`path_hash`':
                        $stmt->bindValue($identifier, $this->path_hash, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_cms_slot_template_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        if ($pk !== null) {
            $this->setIdCmsSlotTemplate($pk);
        }

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
        $pos = SpyCmsSlotTemplateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdCmsSlotTemplate();
                break;
            case 1:
                return $this->getDescription();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getPath();
                break;
            case 4:
                return $this->getPathHash();
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

        if (isset($alreadyDumpedObjects['SpyCmsSlotTemplate'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyCmsSlotTemplate'][$this->hashCode()] = true;
        $keys = SpyCmsSlotTemplateTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCmsSlotTemplate(),
            $keys[1] => $this->getDescription(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getPath(),
            $keys[4] => $this->getPathHash(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSpyCmsSlotToCmsSlotTemplates) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCmsSlotToCmsSlotTemplates';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_cms_slot_to_cms_slot_templates';
                        break;
                    default:
                        $key = 'SpyCmsSlotToCmsSlotTemplates';
                }

                $result[$key] = $this->collSpyCmsSlotToCmsSlotTemplates->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyCmsSlotBlocks) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCmsSlotBlocks';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_cms_slot_blocks';
                        break;
                    default:
                        $key = 'SpyCmsSlotBlocks';
                }

                $result[$key] = $this->collSpyCmsSlotBlocks->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCmsSlotTemplateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdCmsSlotTemplate($value);
                break;
            case 1:
                $this->setDescription($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setPath($value);
                break;
            case 4:
                $this->setPathHash($value);
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
     * @return     $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyCmsSlotTemplateTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCmsSlotTemplate($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setDescription($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setPath($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPathHash($arr[$keys[4]]);
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
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object, for fluid interface
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
        $criteria = new Criteria(SpyCmsSlotTemplateTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE)) {
            $criteria->add(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE, $this->id_cms_slot_template);
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_DESCRIPTION)) {
            $criteria->add(SpyCmsSlotTemplateTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_NAME)) {
            $criteria->add(SpyCmsSlotTemplateTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_PATH)) {
            $criteria->add(SpyCmsSlotTemplateTableMap::COL_PATH, $this->path);
        }
        if ($this->isColumnModified(SpyCmsSlotTemplateTableMap::COL_PATH_HASH)) {
            $criteria->add(SpyCmsSlotTemplateTableMap::COL_PATH_HASH, $this->path_hash);
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
        $criteria = ChildSpyCmsSlotTemplateQuery::create();
        $criteria->add(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE, $this->id_cms_slot_template);

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
        $validPk = null !== $this->getIdCmsSlotTemplate();

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
        return $this->getIdCmsSlotTemplate();
    }

    /**
     * Generic method to set the primary key (id_cms_slot_template column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCmsSlotTemplate($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdCmsSlotTemplate();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDescription($this->getDescription());
        $copyObj->setName($this->getName());
        $copyObj->setPath($this->getPath());
        $copyObj->setPathHash($this->getPathHash());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyCmsSlotToCmsSlotTemplates() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCmsSlotToCmsSlotTemplate($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyCmsSlotBlocks() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCmsSlotBlock($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCmsSlotTemplate(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate Clone of current object.
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
        if ('SpyCmsSlotToCmsSlotTemplate' === $relationName) {
            $this->initSpyCmsSlotToCmsSlotTemplates();
            return;
        }
        if ('SpyCmsSlotBlock' === $relationName) {
            $this->initSpyCmsSlotBlocks();
            return;
        }
    }

    /**
     * Clears out the collSpyCmsSlotToCmsSlotTemplates collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCmsSlotToCmsSlotTemplates()
     */
    public function clearSpyCmsSlotToCmsSlotTemplates()
    {
        $this->collSpyCmsSlotToCmsSlotTemplates = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCmsSlotToCmsSlotTemplates collection loaded partially.
     */
    public function resetPartialSpyCmsSlotToCmsSlotTemplates($v = true)
    {
        $this->collSpyCmsSlotToCmsSlotTemplatesPartial = $v;
    }

    /**
     * Initializes the collSpyCmsSlotToCmsSlotTemplates collection.
     *
     * By default this just sets the collSpyCmsSlotToCmsSlotTemplates collection to an empty array (like clearcollSpyCmsSlotToCmsSlotTemplates());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCmsSlotToCmsSlotTemplates($overrideExisting = true)
    {
        if (null !== $this->collSpyCmsSlotToCmsSlotTemplates && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCmsSlotToCmsSlotTemplateTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCmsSlotToCmsSlotTemplates = new $collectionClassName;
        $this->collSpyCmsSlotToCmsSlotTemplates->setModel('\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplate');
    }

    /**
     * Gets an array of ChildSpyCmsSlotToCmsSlotTemplate objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCmsSlotTemplate is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyCmsSlotToCmsSlotTemplate[] List of ChildSpyCmsSlotToCmsSlotTemplate objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate> List of ChildSpyCmsSlotToCmsSlotTemplate objects
     * @throws PropelException
     */
    public function getSpyCmsSlotToCmsSlotTemplates(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsSlotToCmsSlotTemplatesPartial && !$this->isNew();
        if (null === $this->collSpyCmsSlotToCmsSlotTemplates || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCmsSlotToCmsSlotTemplates) {
                    $this->initSpyCmsSlotToCmsSlotTemplates();
                } else {
                    $collectionClassName = SpyCmsSlotToCmsSlotTemplateTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCmsSlotToCmsSlotTemplates = new $collectionClassName;
                    $collSpyCmsSlotToCmsSlotTemplates->setModel('\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplate');

                    return $collSpyCmsSlotToCmsSlotTemplates;
                }
            } else {
                $collSpyCmsSlotToCmsSlotTemplates = ChildSpyCmsSlotToCmsSlotTemplateQuery::create(null, $criteria)
                    ->filterByCmsSlotTemplate($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCmsSlotToCmsSlotTemplatesPartial && count($collSpyCmsSlotToCmsSlotTemplates)) {
                        $this->initSpyCmsSlotToCmsSlotTemplates(false);

                        foreach ($collSpyCmsSlotToCmsSlotTemplates as $obj) {
                            if (false == $this->collSpyCmsSlotToCmsSlotTemplates->contains($obj)) {
                                $this->collSpyCmsSlotToCmsSlotTemplates->append($obj);
                            }
                        }

                        $this->collSpyCmsSlotToCmsSlotTemplatesPartial = true;
                    }

                    return $collSpyCmsSlotToCmsSlotTemplates;
                }

                if ($partial && $this->collSpyCmsSlotToCmsSlotTemplates) {
                    foreach ($this->collSpyCmsSlotToCmsSlotTemplates as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCmsSlotToCmsSlotTemplates[] = $obj;
                        }
                    }
                }

                $this->collSpyCmsSlotToCmsSlotTemplates = $collSpyCmsSlotToCmsSlotTemplates;
                $this->collSpyCmsSlotToCmsSlotTemplatesPartial = false;
            }
        }

        return $this->collSpyCmsSlotToCmsSlotTemplates;
    }

    /**
     * Sets a collection of ChildSpyCmsSlotToCmsSlotTemplate objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCmsSlotToCmsSlotTemplates A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function setSpyCmsSlotToCmsSlotTemplates(Collection $spyCmsSlotToCmsSlotTemplates, ConnectionInterface $con = null)
    {
        /** @var ChildSpyCmsSlotToCmsSlotTemplate[] $spyCmsSlotToCmsSlotTemplatesToDelete */
        $spyCmsSlotToCmsSlotTemplatesToDelete = $this->getSpyCmsSlotToCmsSlotTemplates(new Criteria(), $con)->diff($spyCmsSlotToCmsSlotTemplates);


        $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion = $spyCmsSlotToCmsSlotTemplatesToDelete;

        foreach ($spyCmsSlotToCmsSlotTemplatesToDelete as $spyCmsSlotToCmsSlotTemplateRemoved) {
            $spyCmsSlotToCmsSlotTemplateRemoved->setCmsSlotTemplate(null);
        }

        $this->collSpyCmsSlotToCmsSlotTemplates = null;
        foreach ($spyCmsSlotToCmsSlotTemplates as $spyCmsSlotToCmsSlotTemplate) {
            $this->addSpyCmsSlotToCmsSlotTemplate($spyCmsSlotToCmsSlotTemplate);
        }

        $this->collSpyCmsSlotToCmsSlotTemplates = $spyCmsSlotToCmsSlotTemplates;
        $this->collSpyCmsSlotToCmsSlotTemplatesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyCmsSlotToCmsSlotTemplate objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyCmsSlotToCmsSlotTemplate objects.
     * @throws PropelException
     */
    public function countSpyCmsSlotToCmsSlotTemplates(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsSlotToCmsSlotTemplatesPartial && !$this->isNew();
        if (null === $this->collSpyCmsSlotToCmsSlotTemplates || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCmsSlotToCmsSlotTemplates) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCmsSlotToCmsSlotTemplates());
            }

            $query = ChildSpyCmsSlotToCmsSlotTemplateQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCmsSlotTemplate($this)
                ->count($con);
        }

        return count($this->collSpyCmsSlotToCmsSlotTemplates);
    }

    /**
     * Method called to associate a ChildSpyCmsSlotToCmsSlotTemplate object to this object
     * through the ChildSpyCmsSlotToCmsSlotTemplate foreign key attribute.
     *
     * @param  ChildSpyCmsSlotToCmsSlotTemplate $l ChildSpyCmsSlotToCmsSlotTemplate
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function addSpyCmsSlotToCmsSlotTemplate(ChildSpyCmsSlotToCmsSlotTemplate $l)
    {
        if ($this->collSpyCmsSlotToCmsSlotTemplates === null) {
            $this->initSpyCmsSlotToCmsSlotTemplates();
            $this->collSpyCmsSlotToCmsSlotTemplatesPartial = true;
        }

        if (!$this->collSpyCmsSlotToCmsSlotTemplates->contains($l)) {
            $this->doAddSpyCmsSlotToCmsSlotTemplate($l);

            if ($this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion and $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion->contains($l)) {
                $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion->remove($this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyCmsSlotToCmsSlotTemplate $spyCmsSlotToCmsSlotTemplate The ChildSpyCmsSlotToCmsSlotTemplate object to add.
     */
    protected function doAddSpyCmsSlotToCmsSlotTemplate(ChildSpyCmsSlotToCmsSlotTemplate $spyCmsSlotToCmsSlotTemplate)
    {
        $this->collSpyCmsSlotToCmsSlotTemplates[]= $spyCmsSlotToCmsSlotTemplate;
        $spyCmsSlotToCmsSlotTemplate->setCmsSlotTemplate($this);
    }

    /**
     * @param  ChildSpyCmsSlotToCmsSlotTemplate $spyCmsSlotToCmsSlotTemplate The ChildSpyCmsSlotToCmsSlotTemplate object to remove.
     * @return $this|ChildSpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function removeSpyCmsSlotToCmsSlotTemplate(ChildSpyCmsSlotToCmsSlotTemplate $spyCmsSlotToCmsSlotTemplate)
    {
        if ($this->getSpyCmsSlotToCmsSlotTemplates()->contains($spyCmsSlotToCmsSlotTemplate)) {
            $pos = $this->collSpyCmsSlotToCmsSlotTemplates->search($spyCmsSlotToCmsSlotTemplate);
            $this->collSpyCmsSlotToCmsSlotTemplates->remove($pos);
            if (null === $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion) {
                $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion = clone $this->collSpyCmsSlotToCmsSlotTemplates;
                $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion->clear();
            }
            $this->spyCmsSlotToCmsSlotTemplatesScheduledForDeletion[]= clone $spyCmsSlotToCmsSlotTemplate;
            $spyCmsSlotToCmsSlotTemplate->setCmsSlotTemplate(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCmsSlotTemplate is new, it will return
     * an empty collection; or if this SpyCmsSlotTemplate has previously
     * been saved, it will retrieve related SpyCmsSlotToCmsSlotTemplates from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCmsSlotTemplate.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyCmsSlotToCmsSlotTemplate[] List of ChildSpyCmsSlotToCmsSlotTemplate objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate}> List of ChildSpyCmsSlotToCmsSlotTemplate objects
     */
    public function getSpyCmsSlotToCmsSlotTemplatesJoinCmsSlot(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyCmsSlotToCmsSlotTemplateQuery::create(null, $criteria);
        $query->joinWith('CmsSlot', $joinBehavior);

        return $this->getSpyCmsSlotToCmsSlotTemplates($query, $con);
    }

    /**
     * Clears out the collSpyCmsSlotBlocks collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCmsSlotBlocks()
     */
    public function clearSpyCmsSlotBlocks()
    {
        $this->collSpyCmsSlotBlocks = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCmsSlotBlocks collection loaded partially.
     */
    public function resetPartialSpyCmsSlotBlocks($v = true)
    {
        $this->collSpyCmsSlotBlocksPartial = $v;
    }

    /**
     * Initializes the collSpyCmsSlotBlocks collection.
     *
     * By default this just sets the collSpyCmsSlotBlocks collection to an empty array (like clearcollSpyCmsSlotBlocks());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCmsSlotBlocks($overrideExisting = true)
    {
        if (null !== $this->collSpyCmsSlotBlocks && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCmsSlotBlockTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCmsSlotBlocks = new $collectionClassName;
        $this->collSpyCmsSlotBlocks->setModel('\Orm\Zed\CmsSlotBlock\Persistence\SpyCmsSlotBlock');
    }

    /**
     * Gets an array of SpyCmsSlotBlock objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCmsSlotTemplate is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCmsSlotBlock[] List of SpyCmsSlotBlock objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsSlotBlock> List of SpyCmsSlotBlock objects
     * @throws PropelException
     */
    public function getSpyCmsSlotBlocks(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsSlotBlocksPartial && !$this->isNew();
        if (null === $this->collSpyCmsSlotBlocks || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCmsSlotBlocks) {
                    $this->initSpyCmsSlotBlocks();
                } else {
                    $collectionClassName = SpyCmsSlotBlockTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCmsSlotBlocks = new $collectionClassName;
                    $collSpyCmsSlotBlocks->setModel('\Orm\Zed\CmsSlotBlock\Persistence\SpyCmsSlotBlock');

                    return $collSpyCmsSlotBlocks;
                }
            } else {
                $collSpyCmsSlotBlocks = SpyCmsSlotBlockQuery::create(null, $criteria)
                    ->filterByCmsSlotTemplate($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCmsSlotBlocksPartial && count($collSpyCmsSlotBlocks)) {
                        $this->initSpyCmsSlotBlocks(false);

                        foreach ($collSpyCmsSlotBlocks as $obj) {
                            if (false == $this->collSpyCmsSlotBlocks->contains($obj)) {
                                $this->collSpyCmsSlotBlocks->append($obj);
                            }
                        }

                        $this->collSpyCmsSlotBlocksPartial = true;
                    }

                    return $collSpyCmsSlotBlocks;
                }

                if ($partial && $this->collSpyCmsSlotBlocks) {
                    foreach ($this->collSpyCmsSlotBlocks as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCmsSlotBlocks[] = $obj;
                        }
                    }
                }

                $this->collSpyCmsSlotBlocks = $collSpyCmsSlotBlocks;
                $this->collSpyCmsSlotBlocksPartial = false;
            }
        }

        return $this->collSpyCmsSlotBlocks;
    }

    /**
     * Sets a collection of SpyCmsSlotBlock objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCmsSlotBlocks A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function setSpyCmsSlotBlocks(Collection $spyCmsSlotBlocks, ConnectionInterface $con = null)
    {
        /** @var SpyCmsSlotBlock[] $spyCmsSlotBlocksToDelete */
        $spyCmsSlotBlocksToDelete = $this->getSpyCmsSlotBlocks(new Criteria(), $con)->diff($spyCmsSlotBlocks);


        $this->spyCmsSlotBlocksScheduledForDeletion = $spyCmsSlotBlocksToDelete;

        foreach ($spyCmsSlotBlocksToDelete as $spyCmsSlotBlockRemoved) {
            $spyCmsSlotBlockRemoved->setCmsSlotTemplate(null);
        }

        $this->collSpyCmsSlotBlocks = null;
        foreach ($spyCmsSlotBlocks as $spyCmsSlotBlock) {
            $this->addSpyCmsSlotBlock($spyCmsSlotBlock);
        }

        $this->collSpyCmsSlotBlocks = $spyCmsSlotBlocks;
        $this->collSpyCmsSlotBlocksPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCmsSlotBlock objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCmsSlotBlock objects.
     * @throws PropelException
     */
    public function countSpyCmsSlotBlocks(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsSlotBlocksPartial && !$this->isNew();
        if (null === $this->collSpyCmsSlotBlocks || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCmsSlotBlocks) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCmsSlotBlocks());
            }

            $query = SpyCmsSlotBlockQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCmsSlotTemplate($this)
                ->count($con);
        }

        return count($this->collSpyCmsSlotBlocks);
    }

    /**
     * Method called to associate a SpyCmsSlotBlock object to this object
     * through the SpyCmsSlotBlock foreign key attribute.
     *
     * @param  SpyCmsSlotBlock $l SpyCmsSlotBlock
     * @return $this|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function addSpyCmsSlotBlock(SpyCmsSlotBlock $l)
    {
        if ($this->collSpyCmsSlotBlocks === null) {
            $this->initSpyCmsSlotBlocks();
            $this->collSpyCmsSlotBlocksPartial = true;
        }

        if (!$this->collSpyCmsSlotBlocks->contains($l)) {
            $this->doAddSpyCmsSlotBlock($l);

            if ($this->spyCmsSlotBlocksScheduledForDeletion and $this->spyCmsSlotBlocksScheduledForDeletion->contains($l)) {
                $this->spyCmsSlotBlocksScheduledForDeletion->remove($this->spyCmsSlotBlocksScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCmsSlotBlock $spyCmsSlotBlock The SpyCmsSlotBlock object to add.
     */
    protected function doAddSpyCmsSlotBlock(SpyCmsSlotBlock $spyCmsSlotBlock)
    {
        $this->collSpyCmsSlotBlocks[]= $spyCmsSlotBlock;
        $spyCmsSlotBlock->setCmsSlotTemplate($this);
    }

    /**
     * @param  SpyCmsSlotBlock $spyCmsSlotBlock The SpyCmsSlotBlock object to remove.
     * @return $this|ChildSpyCmsSlotTemplate The current object (for fluent API support)
     */
    public function removeSpyCmsSlotBlock(SpyCmsSlotBlock $spyCmsSlotBlock)
    {
        if ($this->getSpyCmsSlotBlocks()->contains($spyCmsSlotBlock)) {
            $pos = $this->collSpyCmsSlotBlocks->search($spyCmsSlotBlock);
            $this->collSpyCmsSlotBlocks->remove($pos);
            if (null === $this->spyCmsSlotBlocksScheduledForDeletion) {
                $this->spyCmsSlotBlocksScheduledForDeletion = clone $this->collSpyCmsSlotBlocks;
                $this->spyCmsSlotBlocksScheduledForDeletion->clear();
            }
            $this->spyCmsSlotBlocksScheduledForDeletion[]= clone $spyCmsSlotBlock;
            $spyCmsSlotBlock->setCmsSlotTemplate(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCmsSlotTemplate is new, it will return
     * an empty collection; or if this SpyCmsSlotTemplate has previously
     * been saved, it will retrieve related SpyCmsSlotBlocks from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCmsSlotTemplate.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCmsSlotBlock[] List of SpyCmsSlotBlock objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsSlotBlock}> List of SpyCmsSlotBlock objects
     */
    public function getSpyCmsSlotBlocksJoinCmsSlot(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCmsSlotBlockQuery::create(null, $criteria);
        $query->joinWith('CmsSlot', $joinBehavior);

        return $this->getSpyCmsSlotBlocks($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCmsSlotTemplate is new, it will return
     * an empty collection; or if this SpyCmsSlotTemplate has previously
     * been saved, it will retrieve related SpyCmsSlotBlocks from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCmsSlotTemplate.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCmsSlotBlock[] List of SpyCmsSlotBlock objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsSlotBlock}> List of SpyCmsSlotBlock objects
     */
    public function getSpyCmsSlotBlocksJoinCmsBlock(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCmsSlotBlockQuery::create(null, $criteria);
        $query->joinWith('CmsBlock', $joinBehavior);

        return $this->getSpyCmsSlotBlocks($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_cms_slot_template = null;
        $this->description = null;
        $this->name = null;
        $this->path = null;
        $this->path_hash = null;
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
            if ($this->collSpyCmsSlotToCmsSlotTemplates) {
                foreach ($this->collSpyCmsSlotToCmsSlotTemplates as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyCmsSlotBlocks) {
                foreach ($this->collSpyCmsSlotBlocks as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyCmsSlotToCmsSlotTemplates = null;
        $this->collSpyCmsSlotBlocks = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyCmsSlotTemplateTableMap::DEFAULT_STRING_FORMAT);
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
