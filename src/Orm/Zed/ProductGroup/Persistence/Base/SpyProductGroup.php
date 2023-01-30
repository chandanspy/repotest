<?php

namespace Orm\Zed\ProductGroup\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductGroup\Persistence\SpyProductAbstractGroup as ChildSpyProductAbstractGroup;
use Orm\Zed\ProductGroup\Persistence\SpyProductAbstractGroupQuery as ChildSpyProductAbstractGroupQuery;
use Orm\Zed\ProductGroup\Persistence\SpyProductGroup as ChildSpyProductGroup;
use Orm\Zed\ProductGroup\Persistence\SpyProductGroupQuery as ChildSpyProductGroupQuery;
use Orm\Zed\ProductGroup\Persistence\Map\SpyProductAbstractGroupTableMap;
use Orm\Zed\ProductGroup\Persistence\Map\SpyProductGroupTableMap;
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
 * Base class that represents a row from the 'spy_product_group' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.ProductGroup.Persistence.Base
 */
abstract class SpyProductGroup implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\ProductGroup\\Persistence\\Map\\SpyProductGroupTableMap';


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
     * The value for the id_product_group field.
     *
     * @var        int
     */
    protected $id_product_group;

    /**
     * The value for the product_group_key field.
     *
     * @var        string|null
     */
    protected $product_group_key;

    /**
     * @var        ObjectCollection|ChildSpyProductAbstractGroup[] Collection to store aggregation of ChildSpyProductAbstractGroup objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyProductAbstractGroup> Collection to store aggregation of ChildSpyProductAbstractGroup objects.
     */
    protected $collSpyProductAbstractGroups;
    protected $collSpyProductAbstractGroupsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyProductAbstractGroup[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyProductAbstractGroup>
     */
    protected $spyProductAbstractGroupsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\ProductGroup\Persistence\Base\SpyProductGroup object.
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
     * Compares this with another <code>SpyProductGroup</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyProductGroup</code>, delegates to
     * <code>equals(SpyProductGroup)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_product_group] column value.
     *
     * @return int
     */
    public function getIdProductGroup()
    {
        return $this->id_product_group;
    }

    /**
     * Get the [product_group_key] column value.
     *
     * @return string|null
     */
    public function getProductGroupKey()
    {
        return $this->product_group_key;
    }

    /**
     * Set the value of [id_product_group] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ProductGroup\Persistence\SpyProductGroup The current object (for fluent API support)
     */
    public function setIdProductGroup($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_product_group !== $v) {
            $this->id_product_group = $v;
            $this->modifiedColumns[SpyProductGroupTableMap::COL_ID_PRODUCT_GROUP] = true;
        }

        return $this;
    } // setIdProductGroup()

    /**
     * Set the value of [product_group_key] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\ProductGroup\Persistence\SpyProductGroup The current object (for fluent API support)
     */
    public function setProductGroupKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->product_group_key !== $v) {
            $this->product_group_key = $v;
            $this->modifiedColumns[SpyProductGroupTableMap::COL_PRODUCT_GROUP_KEY] = true;
        }

        return $this;
    } // setProductGroupKey()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyProductGroupTableMap::translateFieldName('IdProductGroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_product_group = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyProductGroupTableMap::translateFieldName('ProductGroupKey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->product_group_key = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 2; // 2 = SpyProductGroupTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\ProductGroup\\Persistence\\SpyProductGroup'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyProductGroupTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyProductGroupQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSpyProductAbstractGroups = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyProductGroup::setDeleted()
     * @see SpyProductGroup::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductGroupTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyProductGroupQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductGroupTableMap::DATABASE_NAME);
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
                SpyProductGroupTableMap::addInstanceToPool($this);
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

            if ($this->spyProductAbstractGroupsScheduledForDeletion !== null) {
                if (!$this->spyProductAbstractGroupsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductGroup\Persistence\SpyProductAbstractGroupQuery::create()
                        ->filterByPrimaryKeys($this->spyProductAbstractGroupsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductAbstractGroupsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductAbstractGroups !== null) {
                foreach ($this->collSpyProductAbstractGroups as $referrerFK) {
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

        $this->modifiedColumns[SpyProductGroupTableMap::COL_ID_PRODUCT_GROUP] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyProductGroupTableMap::COL_ID_PRODUCT_GROUP)) {
            $modifiedColumns[':p' . $index++]  = 'id_product_group';
        }
        if ($this->isColumnModified(SpyProductGroupTableMap::COL_PRODUCT_GROUP_KEY)) {
            $modifiedColumns[':p' . $index++]  = 'product_group_key';
        }

        $sql = sprintf(
            'INSERT INTO spy_product_group (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_product_group':
                        $stmt->bindValue($identifier, $this->id_product_group, PDO::PARAM_INT);
                        break;
                    case 'product_group_key':
                        $stmt->bindValue($identifier, $this->product_group_key, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_product_group_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        if ($pk !== null) {
            $this->setIdProductGroup($pk);
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
        $pos = SpyProductGroupTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdProductGroup();
                break;
            case 1:
                return $this->getProductGroupKey();
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

        if (isset($alreadyDumpedObjects['SpyProductGroup'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyProductGroup'][$this->hashCode()] = true;
        $keys = SpyProductGroupTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdProductGroup(),
            $keys[1] => $this->getProductGroupKey(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSpyProductAbstractGroups) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductAbstractGroups';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_abstract_groups';
                        break;
                    default:
                        $key = 'SpyProductAbstractGroups';
                }

                $result[$key] = $this->collSpyProductAbstractGroups->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\ProductGroup\Persistence\SpyProductGroup
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyProductGroupTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\ProductGroup\Persistence\SpyProductGroup
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdProductGroup($value);
                break;
            case 1:
                $this->setProductGroupKey($value);
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
     * @return     $this|\Orm\Zed\ProductGroup\Persistence\SpyProductGroup
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyProductGroupTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdProductGroup($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setProductGroupKey($arr[$keys[1]]);
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
     * @return $this|\Orm\Zed\ProductGroup\Persistence\SpyProductGroup The current object, for fluid interface
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
        $criteria = new Criteria(SpyProductGroupTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyProductGroupTableMap::COL_ID_PRODUCT_GROUP)) {
            $criteria->add(SpyProductGroupTableMap::COL_ID_PRODUCT_GROUP, $this->id_product_group);
        }
        if ($this->isColumnModified(SpyProductGroupTableMap::COL_PRODUCT_GROUP_KEY)) {
            $criteria->add(SpyProductGroupTableMap::COL_PRODUCT_GROUP_KEY, $this->product_group_key);
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
        $criteria = ChildSpyProductGroupQuery::create();
        $criteria->add(SpyProductGroupTableMap::COL_ID_PRODUCT_GROUP, $this->id_product_group);

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
        $validPk = null !== $this->getIdProductGroup();

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
        return $this->getIdProductGroup();
    }

    /**
     * Generic method to set the primary key (id_product_group column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdProductGroup($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdProductGroup();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\ProductGroup\Persistence\SpyProductGroup (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProductGroupKey($this->getProductGroupKey());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyProductAbstractGroups() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductAbstractGroup($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdProductGroup(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\ProductGroup\Persistence\SpyProductGroup Clone of current object.
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
        if ('SpyProductAbstractGroup' === $relationName) {
            $this->initSpyProductAbstractGroups();
            return;
        }
    }

    /**
     * Clears out the collSpyProductAbstractGroups collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductAbstractGroups()
     */
    public function clearSpyProductAbstractGroups()
    {
        $this->collSpyProductAbstractGroups = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductAbstractGroups collection loaded partially.
     */
    public function resetPartialSpyProductAbstractGroups($v = true)
    {
        $this->collSpyProductAbstractGroupsPartial = $v;
    }

    /**
     * Initializes the collSpyProductAbstractGroups collection.
     *
     * By default this just sets the collSpyProductAbstractGroups collection to an empty array (like clearcollSpyProductAbstractGroups());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductAbstractGroups($overrideExisting = true)
    {
        if (null !== $this->collSpyProductAbstractGroups && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductAbstractGroupTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductAbstractGroups = new $collectionClassName;
        $this->collSpyProductAbstractGroups->setModel('\Orm\Zed\ProductGroup\Persistence\SpyProductAbstractGroup');
    }

    /**
     * Gets an array of ChildSpyProductAbstractGroup objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProductGroup is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyProductAbstractGroup[] List of ChildSpyProductAbstractGroup objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyProductAbstractGroup> List of ChildSpyProductAbstractGroup objects
     * @throws PropelException
     */
    public function getSpyProductAbstractGroups(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductAbstractGroupsPartial && !$this->isNew();
        if (null === $this->collSpyProductAbstractGroups || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductAbstractGroups) {
                    $this->initSpyProductAbstractGroups();
                } else {
                    $collectionClassName = SpyProductAbstractGroupTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductAbstractGroups = new $collectionClassName;
                    $collSpyProductAbstractGroups->setModel('\Orm\Zed\ProductGroup\Persistence\SpyProductAbstractGroup');

                    return $collSpyProductAbstractGroups;
                }
            } else {
                $collSpyProductAbstractGroups = ChildSpyProductAbstractGroupQuery::create(null, $criteria)
                    ->filterBySpyProductGroup($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductAbstractGroupsPartial && count($collSpyProductAbstractGroups)) {
                        $this->initSpyProductAbstractGroups(false);

                        foreach ($collSpyProductAbstractGroups as $obj) {
                            if (false == $this->collSpyProductAbstractGroups->contains($obj)) {
                                $this->collSpyProductAbstractGroups->append($obj);
                            }
                        }

                        $this->collSpyProductAbstractGroupsPartial = true;
                    }

                    return $collSpyProductAbstractGroups;
                }

                if ($partial && $this->collSpyProductAbstractGroups) {
                    foreach ($this->collSpyProductAbstractGroups as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductAbstractGroups[] = $obj;
                        }
                    }
                }

                $this->collSpyProductAbstractGroups = $collSpyProductAbstractGroups;
                $this->collSpyProductAbstractGroupsPartial = false;
            }
        }

        return $this->collSpyProductAbstractGroups;
    }

    /**
     * Sets a collection of ChildSpyProductAbstractGroup objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductAbstractGroups A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProductGroup The current object (for fluent API support)
     */
    public function setSpyProductAbstractGroups(Collection $spyProductAbstractGroups, ConnectionInterface $con = null)
    {
        /** @var ChildSpyProductAbstractGroup[] $spyProductAbstractGroupsToDelete */
        $spyProductAbstractGroupsToDelete = $this->getSpyProductAbstractGroups(new Criteria(), $con)->diff($spyProductAbstractGroups);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->spyProductAbstractGroupsScheduledForDeletion = clone $spyProductAbstractGroupsToDelete;

        foreach ($spyProductAbstractGroupsToDelete as $spyProductAbstractGroupRemoved) {
            $spyProductAbstractGroupRemoved->setSpyProductGroup(null);
        }

        $this->collSpyProductAbstractGroups = null;
        foreach ($spyProductAbstractGroups as $spyProductAbstractGroup) {
            $this->addSpyProductAbstractGroup($spyProductAbstractGroup);
        }

        $this->collSpyProductAbstractGroups = $spyProductAbstractGroups;
        $this->collSpyProductAbstractGroupsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyProductAbstractGroup objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyProductAbstractGroup objects.
     * @throws PropelException
     */
    public function countSpyProductAbstractGroups(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductAbstractGroupsPartial && !$this->isNew();
        if (null === $this->collSpyProductAbstractGroups || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductAbstractGroups) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductAbstractGroups());
            }

            $query = ChildSpyProductAbstractGroupQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProductGroup($this)
                ->count($con);
        }

        return count($this->collSpyProductAbstractGroups);
    }

    /**
     * Method called to associate a ChildSpyProductAbstractGroup object to this object
     * through the ChildSpyProductAbstractGroup foreign key attribute.
     *
     * @param  ChildSpyProductAbstractGroup $l ChildSpyProductAbstractGroup
     * @return $this|\Orm\Zed\ProductGroup\Persistence\SpyProductGroup The current object (for fluent API support)
     */
    public function addSpyProductAbstractGroup(ChildSpyProductAbstractGroup $l)
    {
        if ($this->collSpyProductAbstractGroups === null) {
            $this->initSpyProductAbstractGroups();
            $this->collSpyProductAbstractGroupsPartial = true;
        }

        if (!$this->collSpyProductAbstractGroups->contains($l)) {
            $this->doAddSpyProductAbstractGroup($l);

            if ($this->spyProductAbstractGroupsScheduledForDeletion and $this->spyProductAbstractGroupsScheduledForDeletion->contains($l)) {
                $this->spyProductAbstractGroupsScheduledForDeletion->remove($this->spyProductAbstractGroupsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyProductAbstractGroup $spyProductAbstractGroup The ChildSpyProductAbstractGroup object to add.
     */
    protected function doAddSpyProductAbstractGroup(ChildSpyProductAbstractGroup $spyProductAbstractGroup)
    {
        $this->collSpyProductAbstractGroups[]= $spyProductAbstractGroup;
        $spyProductAbstractGroup->setSpyProductGroup($this);
    }

    /**
     * @param  ChildSpyProductAbstractGroup $spyProductAbstractGroup The ChildSpyProductAbstractGroup object to remove.
     * @return $this|ChildSpyProductGroup The current object (for fluent API support)
     */
    public function removeSpyProductAbstractGroup(ChildSpyProductAbstractGroup $spyProductAbstractGroup)
    {
        if ($this->getSpyProductAbstractGroups()->contains($spyProductAbstractGroup)) {
            $pos = $this->collSpyProductAbstractGroups->search($spyProductAbstractGroup);
            $this->collSpyProductAbstractGroups->remove($pos);
            if (null === $this->spyProductAbstractGroupsScheduledForDeletion) {
                $this->spyProductAbstractGroupsScheduledForDeletion = clone $this->collSpyProductAbstractGroups;
                $this->spyProductAbstractGroupsScheduledForDeletion->clear();
            }
            $this->spyProductAbstractGroupsScheduledForDeletion[]= clone $spyProductAbstractGroup;
            $spyProductAbstractGroup->setSpyProductGroup(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProductGroup is new, it will return
     * an empty collection; or if this SpyProductGroup has previously
     * been saved, it will retrieve related SpyProductAbstractGroups from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProductGroup.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyProductAbstractGroup[] List of ChildSpyProductAbstractGroup objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyProductAbstractGroup}> List of ChildSpyProductAbstractGroup objects
     */
    public function getSpyProductAbstractGroupsJoinSpyProductAbstract(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyProductAbstractGroupQuery::create(null, $criteria);
        $query->joinWith('SpyProductAbstract', $joinBehavior);

        return $this->getSpyProductAbstractGroups($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_product_group = null;
        $this->product_group_key = null;
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
            if ($this->collSpyProductAbstractGroups) {
                foreach ($this->collSpyProductAbstractGroups as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyProductAbstractGroups = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyProductGroupTableMap::DEFAULT_STRING_FORMAT);
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
