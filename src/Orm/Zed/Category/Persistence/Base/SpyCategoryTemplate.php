<?php

namespace Orm\Zed\Category\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Category\Persistence\SpyCategory as ChildSpyCategory;
use Orm\Zed\Category\Persistence\SpyCategoryQuery as ChildSpyCategoryQuery;
use Orm\Zed\Category\Persistence\SpyCategoryTemplate as ChildSpyCategoryTemplate;
use Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery as ChildSpyCategoryTemplateQuery;
use Orm\Zed\Category\Persistence\Map\SpyCategoryTableMap;
use Orm\Zed\Category\Persistence\Map\SpyCategoryTemplateTableMap;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\Base\SpyCmsBlockCategoryConnector as BaseSpyCmsBlockCategoryConnector;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\Map\SpyCmsBlockCategoryConnectorTableMap;
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
 * Base class that represents a row from the 'spy_category_template' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Category.Persistence.Base
 */
abstract class SpyCategoryTemplate implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Category\\Persistence\\Map\\SpyCategoryTemplateTableMap';


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
     * The value for the id_category_template field.
     *
     * @var        int
     */
    protected $id_category_template;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the template_path field.
     *
     * @var        string
     */
    protected $template_path;

    /**
     * @var        ObjectCollection|ChildSpyCategory[] Collection to store aggregation of ChildSpyCategory objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCategory> Collection to store aggregation of ChildSpyCategory objects.
     */
    protected $collSpyCategories;
    protected $collSpyCategoriesPartial;

    /**
     * @var        ObjectCollection|SpyCmsBlockCategoryConnector[] Collection to store aggregation of SpyCmsBlockCategoryConnector objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCmsBlockCategoryConnector> Collection to store aggregation of SpyCmsBlockCategoryConnector objects.
     */
    protected $collSpyCmsBlockCategoryConnectors;
    protected $collSpyCmsBlockCategoryConnectorsPartial;

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
     * @var ObjectCollection|ChildSpyCategory[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCategory>
     */
    protected $spyCategoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCmsBlockCategoryConnector[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCmsBlockCategoryConnector>
     */
    protected $spyCmsBlockCategoryConnectorsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\Category\Persistence\Base\SpyCategoryTemplate object.
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
     * Compares this with another <code>SpyCategoryTemplate</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyCategoryTemplate</code>, delegates to
     * <code>equals(SpyCategoryTemplate)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_category_template] column value.
     *
     * @return int
     */
    public function getIdCategoryTemplate()
    {
        return $this->id_category_template;
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
     * Get the [template_path] column value.
     *
     * @return string
     */
    public function getTemplatePath()
    {
        return $this->template_path;
    }

    /**
     * Set the value of [id_category_template] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate The current object (for fluent API support)
     */
    public function setIdCategoryTemplate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_category_template !== $v) {
            $this->id_category_template = $v;
            $this->modifiedColumns[SpyCategoryTemplateTableMap::COL_ID_CATEGORY_TEMPLATE] = true;
        }

        return $this;
    } // setIdCategoryTemplate()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCategoryTemplateTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [template_path] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate The current object (for fluent API support)
     */
    public function setTemplatePath($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->template_path !== $v) {
            $this->template_path = $v;
            $this->modifiedColumns[SpyCategoryTemplateTableMap::COL_TEMPLATE_PATH] = true;
        }

        return $this;
    } // setTemplatePath()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyCategoryTemplateTableMap::translateFieldName('IdCategoryTemplate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_category_template = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyCategoryTemplateTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyCategoryTemplateTableMap::translateFieldName('TemplatePath', TableMap::TYPE_PHPNAME, $indexType)];
            $this->template_path = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = SpyCategoryTemplateTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Category\\Persistence\\SpyCategoryTemplate'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyCategoryTemplateTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyCategoryTemplateQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSpyCategories = null;

            $this->collSpyCmsBlockCategoryConnectors = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyCategoryTemplate::setDeleted()
     * @see SpyCategoryTemplate::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryTemplateTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyCategoryTemplateQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryTemplateTableMap::DATABASE_NAME);
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

                SpyCategoryTemplateTableMap::addInstanceToPool($this);
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

            if ($this->spyCategoriesScheduledForDeletion !== null) {
                if (!$this->spyCategoriesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Category\Persistence\SpyCategoryQuery::create()
                        ->filterByPrimaryKeys($this->spyCategoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCategoriesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCategories !== null) {
                foreach ($this->collSpyCategories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyCmsBlockCategoryConnectorsScheduledForDeletion !== null) {
                if (!$this->spyCmsBlockCategoryConnectorsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery::create()
                        ->filterByPrimaryKeys($this->spyCmsBlockCategoryConnectorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCmsBlockCategoryConnectorsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCmsBlockCategoryConnectors !== null) {
                foreach ($this->collSpyCmsBlockCategoryConnectors as $referrerFK) {
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

        $this->modifiedColumns[SpyCategoryTemplateTableMap::COL_ID_CATEGORY_TEMPLATE] = true;
        if (null !== $this->id_category_template) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyCategoryTemplateTableMap::COL_ID_CATEGORY_TEMPLATE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyCategoryTemplateTableMap::COL_ID_CATEGORY_TEMPLATE)) {
            $modifiedColumns[':p' . $index++]  = 'id_category_template';
        }
        if ($this->isColumnModified(SpyCategoryTemplateTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(SpyCategoryTemplateTableMap::COL_TEMPLATE_PATH)) {
            $modifiedColumns[':p' . $index++]  = 'template_path';
        }

        $sql = sprintf(
            'INSERT INTO spy_category_template (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_category_template':
                        $stmt->bindValue($identifier, $this->id_category_template, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'template_path':
                        $stmt->bindValue($identifier, $this->template_path, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_category_template_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdCategoryTemplate($pk);

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
        $pos = SpyCategoryTemplateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdCategoryTemplate();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getTemplatePath();
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

        if (isset($alreadyDumpedObjects['SpyCategoryTemplate'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyCategoryTemplate'][$this->hashCode()] = true;
        $keys = SpyCategoryTemplateTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCategoryTemplate(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getTemplatePath(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSpyCategories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCategories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_categories';
                        break;
                    default:
                        $key = 'SpyCategories';
                }

                $result[$key] = $this->collSpyCategories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyCmsBlockCategoryConnectors) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCmsBlockCategoryConnectors';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_cms_block_category_connectors';
                        break;
                    default:
                        $key = 'SpyCmsBlockCategoryConnectors';
                }

                $result[$key] = $this->collSpyCmsBlockCategoryConnectors->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCategoryTemplateTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdCategoryTemplate($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setTemplatePath($value);
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
     * @return     $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyCategoryTemplateTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCategoryTemplate($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setTemplatePath($arr[$keys[2]]);
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
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate The current object, for fluid interface
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
        $criteria = new Criteria(SpyCategoryTemplateTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyCategoryTemplateTableMap::COL_ID_CATEGORY_TEMPLATE)) {
            $criteria->add(SpyCategoryTemplateTableMap::COL_ID_CATEGORY_TEMPLATE, $this->id_category_template);
        }
        if ($this->isColumnModified(SpyCategoryTemplateTableMap::COL_NAME)) {
            $criteria->add(SpyCategoryTemplateTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyCategoryTemplateTableMap::COL_TEMPLATE_PATH)) {
            $criteria->add(SpyCategoryTemplateTableMap::COL_TEMPLATE_PATH, $this->template_path);
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
        $criteria = ChildSpyCategoryTemplateQuery::create();
        $criteria->add(SpyCategoryTemplateTableMap::COL_ID_CATEGORY_TEMPLATE, $this->id_category_template);

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
        $validPk = null !== $this->getIdCategoryTemplate();

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
        return $this->getIdCategoryTemplate();
    }

    /**
     * Generic method to set the primary key (id_category_template column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCategoryTemplate($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdCategoryTemplate();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Category\Persistence\SpyCategoryTemplate (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setTemplatePath($this->getTemplatePath());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyCategories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCategory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyCmsBlockCategoryConnectors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCmsBlockCategoryConnector($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCategoryTemplate(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Category\Persistence\SpyCategoryTemplate Clone of current object.
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
        if ('SpyCategory' === $relationName) {
            $this->initSpyCategories();
            return;
        }
        if ('SpyCmsBlockCategoryConnector' === $relationName) {
            $this->initSpyCmsBlockCategoryConnectors();
            return;
        }
    }

    /**
     * Clears out the collSpyCategories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCategories()
     */
    public function clearSpyCategories()
    {
        $this->collSpyCategories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCategories collection loaded partially.
     */
    public function resetPartialSpyCategories($v = true)
    {
        $this->collSpyCategoriesPartial = $v;
    }

    /**
     * Initializes the collSpyCategories collection.
     *
     * By default this just sets the collSpyCategories collection to an empty array (like clearcollSpyCategories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCategories($overrideExisting = true)
    {
        if (null !== $this->collSpyCategories && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCategoryTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCategories = new $collectionClassName;
        $this->collSpyCategories->setModel('\Orm\Zed\Category\Persistence\SpyCategory');
    }

    /**
     * Gets an array of ChildSpyCategory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCategoryTemplate is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyCategory[] List of ChildSpyCategory objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCategory> List of ChildSpyCategory objects
     * @throws PropelException
     */
    public function getSpyCategories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCategoriesPartial && !$this->isNew();
        if (null === $this->collSpyCategories || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCategories) {
                    $this->initSpyCategories();
                } else {
                    $collectionClassName = SpyCategoryTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCategories = new $collectionClassName;
                    $collSpyCategories->setModel('\Orm\Zed\Category\Persistence\SpyCategory');

                    return $collSpyCategories;
                }
            } else {
                $collSpyCategories = ChildSpyCategoryQuery::create(null, $criteria)
                    ->filterByCategoryTemplate($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCategoriesPartial && count($collSpyCategories)) {
                        $this->initSpyCategories(false);

                        foreach ($collSpyCategories as $obj) {
                            if (false == $this->collSpyCategories->contains($obj)) {
                                $this->collSpyCategories->append($obj);
                            }
                        }

                        $this->collSpyCategoriesPartial = true;
                    }

                    return $collSpyCategories;
                }

                if ($partial && $this->collSpyCategories) {
                    foreach ($this->collSpyCategories as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCategories[] = $obj;
                        }
                    }
                }

                $this->collSpyCategories = $collSpyCategories;
                $this->collSpyCategoriesPartial = false;
            }
        }

        return $this->collSpyCategories;
    }

    /**
     * Sets a collection of ChildSpyCategory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCategories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCategoryTemplate The current object (for fluent API support)
     */
    public function setSpyCategories(Collection $spyCategories, ConnectionInterface $con = null)
    {
        /** @var ChildSpyCategory[] $spyCategoriesToDelete */
        $spyCategoriesToDelete = $this->getSpyCategories(new Criteria(), $con)->diff($spyCategories);


        $this->spyCategoriesScheduledForDeletion = $spyCategoriesToDelete;

        foreach ($spyCategoriesToDelete as $spyCategoryRemoved) {
            $spyCategoryRemoved->setCategoryTemplate(null);
        }

        $this->collSpyCategories = null;
        foreach ($spyCategories as $spyCategory) {
            $this->addSpyCategory($spyCategory);
        }

        $this->collSpyCategories = $spyCategories;
        $this->collSpyCategoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyCategory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyCategory objects.
     * @throws PropelException
     */
    public function countSpyCategories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCategoriesPartial && !$this->isNew();
        if (null === $this->collSpyCategories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCategories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCategories());
            }

            $query = ChildSpyCategoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCategoryTemplate($this)
                ->count($con);
        }

        return count($this->collSpyCategories);
    }

    /**
     * Method called to associate a ChildSpyCategory object to this object
     * through the ChildSpyCategory foreign key attribute.
     *
     * @param  ChildSpyCategory $l ChildSpyCategory
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate The current object (for fluent API support)
     */
    public function addSpyCategory(ChildSpyCategory $l)
    {
        if ($this->collSpyCategories === null) {
            $this->initSpyCategories();
            $this->collSpyCategoriesPartial = true;
        }

        if (!$this->collSpyCategories->contains($l)) {
            $this->doAddSpyCategory($l);

            if ($this->spyCategoriesScheduledForDeletion and $this->spyCategoriesScheduledForDeletion->contains($l)) {
                $this->spyCategoriesScheduledForDeletion->remove($this->spyCategoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyCategory $spyCategory The ChildSpyCategory object to add.
     */
    protected function doAddSpyCategory(ChildSpyCategory $spyCategory)
    {
        $this->collSpyCategories[]= $spyCategory;
        $spyCategory->setCategoryTemplate($this);
    }

    /**
     * @param  ChildSpyCategory $spyCategory The ChildSpyCategory object to remove.
     * @return $this|ChildSpyCategoryTemplate The current object (for fluent API support)
     */
    public function removeSpyCategory(ChildSpyCategory $spyCategory)
    {
        if ($this->getSpyCategories()->contains($spyCategory)) {
            $pos = $this->collSpyCategories->search($spyCategory);
            $this->collSpyCategories->remove($pos);
            if (null === $this->spyCategoriesScheduledForDeletion) {
                $this->spyCategoriesScheduledForDeletion = clone $this->collSpyCategories;
                $this->spyCategoriesScheduledForDeletion->clear();
            }
            $this->spyCategoriesScheduledForDeletion[]= clone $spyCategory;
            $spyCategory->setCategoryTemplate(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyCmsBlockCategoryConnectors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCmsBlockCategoryConnectors()
     */
    public function clearSpyCmsBlockCategoryConnectors()
    {
        $this->collSpyCmsBlockCategoryConnectors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCmsBlockCategoryConnectors collection loaded partially.
     */
    public function resetPartialSpyCmsBlockCategoryConnectors($v = true)
    {
        $this->collSpyCmsBlockCategoryConnectorsPartial = $v;
    }

    /**
     * Initializes the collSpyCmsBlockCategoryConnectors collection.
     *
     * By default this just sets the collSpyCmsBlockCategoryConnectors collection to an empty array (like clearcollSpyCmsBlockCategoryConnectors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCmsBlockCategoryConnectors($overrideExisting = true)
    {
        if (null !== $this->collSpyCmsBlockCategoryConnectors && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCmsBlockCategoryConnectorTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCmsBlockCategoryConnectors = new $collectionClassName;
        $this->collSpyCmsBlockCategoryConnectors->setModel('\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector');
    }

    /**
     * Gets an array of SpyCmsBlockCategoryConnector objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCategoryTemplate is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCmsBlockCategoryConnector[] List of SpyCmsBlockCategoryConnector objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsBlockCategoryConnector> List of SpyCmsBlockCategoryConnector objects
     * @throws PropelException
     */
    public function getSpyCmsBlockCategoryConnectors(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsBlockCategoryConnectorsPartial && !$this->isNew();
        if (null === $this->collSpyCmsBlockCategoryConnectors || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCmsBlockCategoryConnectors) {
                    $this->initSpyCmsBlockCategoryConnectors();
                } else {
                    $collectionClassName = SpyCmsBlockCategoryConnectorTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCmsBlockCategoryConnectors = new $collectionClassName;
                    $collSpyCmsBlockCategoryConnectors->setModel('\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector');

                    return $collSpyCmsBlockCategoryConnectors;
                }
            } else {
                $collSpyCmsBlockCategoryConnectors = SpyCmsBlockCategoryConnectorQuery::create(null, $criteria)
                    ->filterByCategoryTemplate($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCmsBlockCategoryConnectorsPartial && count($collSpyCmsBlockCategoryConnectors)) {
                        $this->initSpyCmsBlockCategoryConnectors(false);

                        foreach ($collSpyCmsBlockCategoryConnectors as $obj) {
                            if (false == $this->collSpyCmsBlockCategoryConnectors->contains($obj)) {
                                $this->collSpyCmsBlockCategoryConnectors->append($obj);
                            }
                        }

                        $this->collSpyCmsBlockCategoryConnectorsPartial = true;
                    }

                    return $collSpyCmsBlockCategoryConnectors;
                }

                if ($partial && $this->collSpyCmsBlockCategoryConnectors) {
                    foreach ($this->collSpyCmsBlockCategoryConnectors as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCmsBlockCategoryConnectors[] = $obj;
                        }
                    }
                }

                $this->collSpyCmsBlockCategoryConnectors = $collSpyCmsBlockCategoryConnectors;
                $this->collSpyCmsBlockCategoryConnectorsPartial = false;
            }
        }

        return $this->collSpyCmsBlockCategoryConnectors;
    }

    /**
     * Sets a collection of SpyCmsBlockCategoryConnector objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCmsBlockCategoryConnectors A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCategoryTemplate The current object (for fluent API support)
     */
    public function setSpyCmsBlockCategoryConnectors(Collection $spyCmsBlockCategoryConnectors, ConnectionInterface $con = null)
    {
        /** @var SpyCmsBlockCategoryConnector[] $spyCmsBlockCategoryConnectorsToDelete */
        $spyCmsBlockCategoryConnectorsToDelete = $this->getSpyCmsBlockCategoryConnectors(new Criteria(), $con)->diff($spyCmsBlockCategoryConnectors);


        $this->spyCmsBlockCategoryConnectorsScheduledForDeletion = $spyCmsBlockCategoryConnectorsToDelete;

        foreach ($spyCmsBlockCategoryConnectorsToDelete as $spyCmsBlockCategoryConnectorRemoved) {
            $spyCmsBlockCategoryConnectorRemoved->setCategoryTemplate(null);
        }

        $this->collSpyCmsBlockCategoryConnectors = null;
        foreach ($spyCmsBlockCategoryConnectors as $spyCmsBlockCategoryConnector) {
            $this->addSpyCmsBlockCategoryConnector($spyCmsBlockCategoryConnector);
        }

        $this->collSpyCmsBlockCategoryConnectors = $spyCmsBlockCategoryConnectors;
        $this->collSpyCmsBlockCategoryConnectorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCmsBlockCategoryConnector objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCmsBlockCategoryConnector objects.
     * @throws PropelException
     */
    public function countSpyCmsBlockCategoryConnectors(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsBlockCategoryConnectorsPartial && !$this->isNew();
        if (null === $this->collSpyCmsBlockCategoryConnectors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCmsBlockCategoryConnectors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCmsBlockCategoryConnectors());
            }

            $query = SpyCmsBlockCategoryConnectorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCategoryTemplate($this)
                ->count($con);
        }

        return count($this->collSpyCmsBlockCategoryConnectors);
    }

    /**
     * Method called to associate a SpyCmsBlockCategoryConnector object to this object
     * through the SpyCmsBlockCategoryConnector foreign key attribute.
     *
     * @param  SpyCmsBlockCategoryConnector $l SpyCmsBlockCategoryConnector
     * @return $this|\Orm\Zed\Category\Persistence\SpyCategoryTemplate The current object (for fluent API support)
     */
    public function addSpyCmsBlockCategoryConnector(SpyCmsBlockCategoryConnector $l)
    {
        if ($this->collSpyCmsBlockCategoryConnectors === null) {
            $this->initSpyCmsBlockCategoryConnectors();
            $this->collSpyCmsBlockCategoryConnectorsPartial = true;
        }

        if (!$this->collSpyCmsBlockCategoryConnectors->contains($l)) {
            $this->doAddSpyCmsBlockCategoryConnector($l);

            if ($this->spyCmsBlockCategoryConnectorsScheduledForDeletion and $this->spyCmsBlockCategoryConnectorsScheduledForDeletion->contains($l)) {
                $this->spyCmsBlockCategoryConnectorsScheduledForDeletion->remove($this->spyCmsBlockCategoryConnectorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCmsBlockCategoryConnector $spyCmsBlockCategoryConnector The SpyCmsBlockCategoryConnector object to add.
     */
    protected function doAddSpyCmsBlockCategoryConnector(SpyCmsBlockCategoryConnector $spyCmsBlockCategoryConnector)
    {
        $this->collSpyCmsBlockCategoryConnectors[]= $spyCmsBlockCategoryConnector;
        $spyCmsBlockCategoryConnector->setCategoryTemplate($this);
    }

    /**
     * @param  SpyCmsBlockCategoryConnector $spyCmsBlockCategoryConnector The SpyCmsBlockCategoryConnector object to remove.
     * @return $this|ChildSpyCategoryTemplate The current object (for fluent API support)
     */
    public function removeSpyCmsBlockCategoryConnector(SpyCmsBlockCategoryConnector $spyCmsBlockCategoryConnector)
    {
        if ($this->getSpyCmsBlockCategoryConnectors()->contains($spyCmsBlockCategoryConnector)) {
            $pos = $this->collSpyCmsBlockCategoryConnectors->search($spyCmsBlockCategoryConnector);
            $this->collSpyCmsBlockCategoryConnectors->remove($pos);
            if (null === $this->spyCmsBlockCategoryConnectorsScheduledForDeletion) {
                $this->spyCmsBlockCategoryConnectorsScheduledForDeletion = clone $this->collSpyCmsBlockCategoryConnectors;
                $this->spyCmsBlockCategoryConnectorsScheduledForDeletion->clear();
            }
            $this->spyCmsBlockCategoryConnectorsScheduledForDeletion[]= clone $spyCmsBlockCategoryConnector;
            $spyCmsBlockCategoryConnector->setCategoryTemplate(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCategoryTemplate is new, it will return
     * an empty collection; or if this SpyCategoryTemplate has previously
     * been saved, it will retrieve related SpyCmsBlockCategoryConnectors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCategoryTemplate.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCmsBlockCategoryConnector[] List of SpyCmsBlockCategoryConnector objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsBlockCategoryConnector}> List of SpyCmsBlockCategoryConnector objects
     */
    public function getSpyCmsBlockCategoryConnectorsJoinCmsBlock(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCmsBlockCategoryConnectorQuery::create(null, $criteria);
        $query->joinWith('CmsBlock', $joinBehavior);

        return $this->getSpyCmsBlockCategoryConnectors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCategoryTemplate is new, it will return
     * an empty collection; or if this SpyCategoryTemplate has previously
     * been saved, it will retrieve related SpyCmsBlockCategoryConnectors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCategoryTemplate.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCmsBlockCategoryConnector[] List of SpyCmsBlockCategoryConnector objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsBlockCategoryConnector}> List of SpyCmsBlockCategoryConnector objects
     */
    public function getSpyCmsBlockCategoryConnectorsJoinCategory(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCmsBlockCategoryConnectorQuery::create(null, $criteria);
        $query->joinWith('Category', $joinBehavior);

        return $this->getSpyCmsBlockCategoryConnectors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCategoryTemplate is new, it will return
     * an empty collection; or if this SpyCategoryTemplate has previously
     * been saved, it will retrieve related SpyCmsBlockCategoryConnectors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCategoryTemplate.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCmsBlockCategoryConnector[] List of SpyCmsBlockCategoryConnector objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsBlockCategoryConnector}> List of SpyCmsBlockCategoryConnector objects
     */
    public function getSpyCmsBlockCategoryConnectorsJoinCmsBlockCategoryPosition(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCmsBlockCategoryConnectorQuery::create(null, $criteria);
        $query->joinWith('CmsBlockCategoryPosition', $joinBehavior);

        return $this->getSpyCmsBlockCategoryConnectors($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_category_template = null;
        $this->name = null;
        $this->template_path = null;
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
            if ($this->collSpyCategories) {
                foreach ($this->collSpyCategories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyCmsBlockCategoryConnectors) {
                foreach ($this->collSpyCmsBlockCategoryConnectors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyCategories = null;
        $this->collSpyCmsBlockCategoryConnectors = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyCategoryTemplateTableMap::DEFAULT_STRING_FORMAT);
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_category_template.create';
        } else {
            $this->_eventName = 'Entity.spy_category_template.update';
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

        if ($this->_eventName !== 'Entity.spy_category_template.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_category_template',
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
            'name' => 'spy_category_template',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_category_template.delete',
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
            $field = str_replace('spy_category_template.', '', $modifiedColumn);
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
            $field = str_replace('spy_category_template.', '', $additionalValueColumnName);
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
        $columnType = SpyCategoryTemplateTableMap::getTableMap()->getColumn($column)->getType();
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
