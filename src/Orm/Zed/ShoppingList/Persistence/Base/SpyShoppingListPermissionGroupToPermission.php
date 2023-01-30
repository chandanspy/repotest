<?php

namespace Orm\Zed\ShoppingList\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Permission\Persistence\SpyPermission;
use Orm\Zed\Permission\Persistence\SpyPermissionQuery;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup as ChildSpyShoppingListPermissionGroup;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery as ChildSpyShoppingListPermissionGroupQuery;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery as ChildSpyShoppingListPermissionGroupToPermissionQuery;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListPermissionGroupToPermissionTableMap;
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
 * Base class that represents a row from the 'spy_shopping_list_permission_group_to_permission' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.ShoppingList.Persistence.Base
 */
abstract class SpyShoppingListPermissionGroupToPermission implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\ShoppingList\\Persistence\\Map\\SpyShoppingListPermissionGroupToPermissionTableMap';


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
     * The value for the id_shopping_list_permission_group_to_permission field.
     *
     * @var        int
     */
    protected $id_shopping_list_permission_group_to_permission;

    /**
     * The value for the fk_permission field.
     *
     * @var        int
     */
    protected $fk_permission;

    /**
     * The value for the fk_shopping_list_permission_group field.
     *
     * @var        int
     */
    protected $fk_shopping_list_permission_group;

    /**
     * @var        ChildSpyShoppingListPermissionGroup
     */
    protected $aSpyShoppingListPermissionGroup;

    /**
     * @var        SpyPermission
     */
    protected $aSpyPermission;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListPermissionGroupToPermission object.
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
     * Compares this with another <code>SpyShoppingListPermissionGroupToPermission</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyShoppingListPermissionGroupToPermission</code>, delegates to
     * <code>equals(SpyShoppingListPermissionGroupToPermission)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_shopping_list_permission_group_to_permission] column value.
     *
     * @return int
     */
    public function getIdShoppingListPermissionGroupToPermission()
    {
        return $this->id_shopping_list_permission_group_to_permission;
    }

    /**
     * Get the [fk_permission] column value.
     *
     * @return int
     */
    public function getFkPermission()
    {
        return $this->fk_permission;
    }

    /**
     * Get the [fk_shopping_list_permission_group] column value.
     *
     * @return int
     */
    public function getFkShoppingListPermissionGroup()
    {
        return $this->fk_shopping_list_permission_group;
    }

    /**
     * Set the value of [id_shopping_list_permission_group_to_permission] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission The current object (for fluent API support)
     */
    public function setIdShoppingListPermissionGroupToPermission($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_shopping_list_permission_group_to_permission !== $v) {
            $this->id_shopping_list_permission_group_to_permission = $v;
            $this->modifiedColumns[SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION] = true;
        }

        return $this;
    } // setIdShoppingListPermissionGroupToPermission()

    /**
     * Set the value of [fk_permission] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission The current object (for fluent API support)
     */
    public function setFkPermission($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_permission !== $v) {
            $this->fk_permission = $v;
            $this->modifiedColumns[SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION] = true;
        }

        if ($this->aSpyPermission !== null && $this->aSpyPermission->getIdPermission() !== $v) {
            $this->aSpyPermission = null;
        }

        return $this;
    } // setFkPermission()

    /**
     * Set the value of [fk_shopping_list_permission_group] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission The current object (for fluent API support)
     */
    public function setFkShoppingListPermissionGroup($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_shopping_list_permission_group !== $v) {
            $this->fk_shopping_list_permission_group = $v;
            $this->modifiedColumns[SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP] = true;
        }

        if ($this->aSpyShoppingListPermissionGroup !== null && $this->aSpyShoppingListPermissionGroup->getIdShoppingListPermissionGroup() !== $v) {
            $this->aSpyShoppingListPermissionGroup = null;
        }

        return $this;
    } // setFkShoppingListPermissionGroup()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyShoppingListPermissionGroupToPermissionTableMap::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_shopping_list_permission_group_to_permission = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyShoppingListPermissionGroupToPermissionTableMap::translateFieldName('FkPermission', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_permission = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyShoppingListPermissionGroupToPermissionTableMap::translateFieldName('FkShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_shopping_list_permission_group = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = SpyShoppingListPermissionGroupToPermissionTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroupToPermission'), 0, $e);
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
        if ($this->aSpyPermission !== null && $this->fk_permission !== $this->aSpyPermission->getIdPermission()) {
            $this->aSpyPermission = null;
        }
        if ($this->aSpyShoppingListPermissionGroup !== null && $this->fk_shopping_list_permission_group !== $this->aSpyShoppingListPermissionGroup->getIdShoppingListPermissionGroup()) {
            $this->aSpyShoppingListPermissionGroup = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyShoppingListPermissionGroupToPermissionQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyShoppingListPermissionGroup = null;
            $this->aSpyPermission = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyShoppingListPermissionGroupToPermission::setDeleted()
     * @see SpyShoppingListPermissionGroupToPermission::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyShoppingListPermissionGroupToPermissionQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
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
                SpyShoppingListPermissionGroupToPermissionTableMap::addInstanceToPool($this);
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

            if ($this->aSpyShoppingListPermissionGroup !== null) {
                if ($this->aSpyShoppingListPermissionGroup->isModified() || $this->aSpyShoppingListPermissionGroup->isNew()) {
                    $affectedRows += $this->aSpyShoppingListPermissionGroup->save($con);
                }
                $this->setSpyShoppingListPermissionGroup($this->aSpyShoppingListPermissionGroup);
            }

            if ($this->aSpyPermission !== null) {
                if ($this->aSpyPermission->isModified() || $this->aSpyPermission->isNew()) {
                    $affectedRows += $this->aSpyPermission->save($con);
                }
                $this->setSpyPermission($this->aSpyPermission);
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

        $this->modifiedColumns[SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION] = true;
        if (null !== $this->id_shopping_list_permission_group_to_permission) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION)) {
            $modifiedColumns[':p' . $index++]  = 'id_shopping_list_permission_group_to_permission';
        }
        if ($this->isColumnModified(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION)) {
            $modifiedColumns[':p' . $index++]  = 'fk_permission';
        }
        if ($this->isColumnModified(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP)) {
            $modifiedColumns[':p' . $index++]  = 'fk_shopping_list_permission_group';
        }

        $sql = sprintf(
            'INSERT INTO spy_shopping_list_permission_group_to_permission (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_shopping_list_permission_group_to_permission':
                        $stmt->bindValue($identifier, $this->id_shopping_list_permission_group_to_permission, PDO::PARAM_INT);
                        break;
                    case 'fk_permission':
                        $stmt->bindValue($identifier, $this->fk_permission, PDO::PARAM_INT);
                        break;
                    case 'fk_shopping_list_permission_group':
                        $stmt->bindValue($identifier, $this->fk_shopping_list_permission_group, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_shopping_list_permission_group_to_permission_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdShoppingListPermissionGroupToPermission($pk);

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
        $pos = SpyShoppingListPermissionGroupToPermissionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdShoppingListPermissionGroupToPermission();
                break;
            case 1:
                return $this->getFkPermission();
                break;
            case 2:
                return $this->getFkShoppingListPermissionGroup();
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

        if (isset($alreadyDumpedObjects['SpyShoppingListPermissionGroupToPermission'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyShoppingListPermissionGroupToPermission'][$this->hashCode()] = true;
        $keys = SpyShoppingListPermissionGroupToPermissionTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdShoppingListPermissionGroupToPermission(),
            $keys[1] => $this->getFkPermission(),
            $keys[2] => $this->getFkShoppingListPermissionGroup(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyShoppingListPermissionGroup) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShoppingListPermissionGroup';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shopping_list_permission_group';
                        break;
                    default:
                        $key = 'SpyShoppingListPermissionGroup';
                }

                $result[$key] = $this->aSpyShoppingListPermissionGroup->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyPermission) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPermission';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_permission';
                        break;
                    default:
                        $key = 'SpyPermission';
                }

                $result[$key] = $this->aSpyPermission->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyShoppingListPermissionGroupToPermissionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdShoppingListPermissionGroupToPermission($value);
                break;
            case 1:
                $this->setFkPermission($value);
                break;
            case 2:
                $this->setFkShoppingListPermissionGroup($value);
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
     * @return     $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyShoppingListPermissionGroupToPermissionTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdShoppingListPermissionGroupToPermission($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkPermission($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkShoppingListPermissionGroup($arr[$keys[2]]);
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
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission The current object, for fluid interface
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
        $criteria = new Criteria(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION)) {
            $criteria->add(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $this->id_shopping_list_permission_group_to_permission);
        }
        if ($this->isColumnModified(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION)) {
            $criteria->add(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $this->fk_permission);
        }
        if ($this->isColumnModified(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP)) {
            $criteria->add(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $this->fk_shopping_list_permission_group);
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
        $criteria = ChildSpyShoppingListPermissionGroupToPermissionQuery::create();
        $criteria->add(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $this->id_shopping_list_permission_group_to_permission);

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
        $validPk = null !== $this->getIdShoppingListPermissionGroupToPermission();

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
        return $this->getIdShoppingListPermissionGroupToPermission();
    }

    /**
     * Generic method to set the primary key (id_shopping_list_permission_group_to_permission column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdShoppingListPermissionGroupToPermission($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdShoppingListPermissionGroupToPermission();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkPermission($this->getFkPermission());
        $copyObj->setFkShoppingListPermissionGroup($this->getFkShoppingListPermissionGroup());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdShoppingListPermissionGroupToPermission(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission Clone of current object.
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
     * Declares an association between this object and a ChildSpyShoppingListPermissionGroup object.
     *
     * @param  ChildSpyShoppingListPermissionGroup $v
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyShoppingListPermissionGroup(ChildSpyShoppingListPermissionGroup $v = null)
    {
        if ($v === null) {
            $this->setFkShoppingListPermissionGroup(NULL);
        } else {
            $this->setFkShoppingListPermissionGroup($v->getIdShoppingListPermissionGroup());
        }

        $this->aSpyShoppingListPermissionGroup = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyShoppingListPermissionGroup object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyShoppingListPermissionGroupToPermission($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyShoppingListPermissionGroup object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyShoppingListPermissionGroup The associated ChildSpyShoppingListPermissionGroup object.
     * @throws PropelException
     */
    public function getSpyShoppingListPermissionGroup(ConnectionInterface $con = null)
    {
        if ($this->aSpyShoppingListPermissionGroup === null && ($this->fk_shopping_list_permission_group != 0)) {
            $this->aSpyShoppingListPermissionGroup = ChildSpyShoppingListPermissionGroupQuery::create()->findPk($this->fk_shopping_list_permission_group, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyShoppingListPermissionGroup->addSpyShoppingListPermissionGroupToPermissions($this);
             */
        }

        return $this->aSpyShoppingListPermissionGroup;
    }

    /**
     * Declares an association between this object and a SpyPermission object.
     *
     * @param  SpyPermission $v
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyPermission(SpyPermission $v = null)
    {
        if ($v === null) {
            $this->setFkPermission(NULL);
        } else {
            $this->setFkPermission($v->getIdPermission());
        }

        $this->aSpyPermission = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyPermission object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyShoppingListPermissionGroupToPermission($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyPermission object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyPermission The associated SpyPermission object.
     * @throws PropelException
     */
    public function getSpyPermission(ConnectionInterface $con = null)
    {
        if ($this->aSpyPermission === null && ($this->fk_permission != 0)) {
            $this->aSpyPermission = SpyPermissionQuery::create()->findPk($this->fk_permission, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyPermission->addSpyShoppingListPermissionGroupToPermissions($this);
             */
        }

        return $this->aSpyPermission;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyShoppingListPermissionGroup) {
            $this->aSpyShoppingListPermissionGroup->removeSpyShoppingListPermissionGroupToPermission($this);
        }
        if (null !== $this->aSpyPermission) {
            $this->aSpyPermission->removeSpyShoppingListPermissionGroupToPermission($this);
        }
        $this->id_shopping_list_permission_group_to_permission = null;
        $this->fk_permission = null;
        $this->fk_shopping_list_permission_group = null;
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

        $this->aSpyShoppingListPermissionGroup = null;
        $this->aSpyPermission = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyShoppingListPermissionGroupToPermissionTableMap::DEFAULT_STRING_FORMAT);
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
