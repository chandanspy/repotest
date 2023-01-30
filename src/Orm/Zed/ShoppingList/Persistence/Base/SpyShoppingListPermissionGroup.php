<?php

namespace Orm\Zed\ShoppingList\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit as ChildSpyShoppingListCompanyBusinessUnit;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery as ChildSpyShoppingListCompanyBusinessUnitQuery;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser as ChildSpyShoppingListCompanyUser;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery as ChildSpyShoppingListCompanyUserQuery;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup as ChildSpyShoppingListPermissionGroup;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery as ChildSpyShoppingListPermissionGroupQuery;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission as ChildSpyShoppingListPermissionGroupToPermission;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery as ChildSpyShoppingListPermissionGroupToPermissionQuery;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListCompanyBusinessUnitTableMap;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListCompanyUserTableMap;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListPermissionGroupTableMap;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListPermissionGroupToPermissionTableMap;
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
 * Base class that represents a row from the 'spy_shopping_list_permission_group' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.ShoppingList.Persistence.Base
 */
abstract class SpyShoppingListPermissionGroup implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\ShoppingList\\Persistence\\Map\\SpyShoppingListPermissionGroupTableMap';


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
     * The value for the id_shopping_list_permission_group field.
     *
     * @var        int
     */
    protected $id_shopping_list_permission_group;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * @var        ObjectCollection|ChildSpyShoppingListCompanyUser[] Collection to store aggregation of ChildSpyShoppingListCompanyUser objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser> Collection to store aggregation of ChildSpyShoppingListCompanyUser objects.
     */
    protected $collSpyShoppingListCompanyUsers;
    protected $collSpyShoppingListCompanyUsersPartial;

    /**
     * @var        ObjectCollection|ChildSpyShoppingListCompanyBusinessUnit[] Collection to store aggregation of ChildSpyShoppingListCompanyBusinessUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShoppingListCompanyBusinessUnit> Collection to store aggregation of ChildSpyShoppingListCompanyBusinessUnit objects.
     */
    protected $collSpyShoppingListCompanyBusinessUnits;
    protected $collSpyShoppingListCompanyBusinessUnitsPartial;

    /**
     * @var        ObjectCollection|ChildSpyShoppingListPermissionGroupToPermission[] Collection to store aggregation of ChildSpyShoppingListPermissionGroupToPermission objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission> Collection to store aggregation of ChildSpyShoppingListPermissionGroupToPermission objects.
     */
    protected $collSpyShoppingListPermissionGroupToPermissions;
    protected $collSpyShoppingListPermissionGroupToPermissionsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyShoppingListCompanyUser[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser>
     */
    protected $spyShoppingListCompanyUsersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyShoppingListCompanyBusinessUnit[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShoppingListCompanyBusinessUnit>
     */
    protected $spyShoppingListCompanyBusinessUnitsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyShoppingListPermissionGroupToPermission[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission>
     */
    protected $spyShoppingListPermissionGroupToPermissionsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListPermissionGroup object.
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
     * Compares this with another <code>SpyShoppingListPermissionGroup</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyShoppingListPermissionGroup</code>, delegates to
     * <code>equals(SpyShoppingListPermissionGroup)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_shopping_list_permission_group] column value.
     *
     * @return int
     */
    public function getIdShoppingListPermissionGroup()
    {
        return $this->id_shopping_list_permission_group;
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
     * Set the value of [id_shopping_list_permission_group] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function setIdShoppingListPermissionGroup($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_shopping_list_permission_group !== $v) {
            $this->id_shopping_list_permission_group = $v;
            $this->modifiedColumns[SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP] = true;
        }

        return $this;
    } // setIdShoppingListPermissionGroup()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup The current object (for fluent API support)
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
            $this->modifiedColumns[SpyShoppingListPermissionGroupTableMap::COL_NAME] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyShoppingListPermissionGroupTableMap::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_shopping_list_permission_group = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyShoppingListPermissionGroupTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 2; // 2 = SpyShoppingListPermissionGroupTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroup'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyShoppingListPermissionGroupQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSpyShoppingListCompanyUsers = null;

            $this->collSpyShoppingListCompanyBusinessUnits = null;

            $this->collSpyShoppingListPermissionGroupToPermissions = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyShoppingListPermissionGroup::setDeleted()
     * @see SpyShoppingListPermissionGroup::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyShoppingListPermissionGroupQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
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
                SpyShoppingListPermissionGroupTableMap::addInstanceToPool($this);
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

            if ($this->spyShoppingListCompanyUsersScheduledForDeletion !== null) {
                if (!$this->spyShoppingListCompanyUsersScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery::create()
                        ->filterByPrimaryKeys($this->spyShoppingListCompanyUsersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyShoppingListCompanyUsersScheduledForDeletion = null;
                }
            }

            if ($this->collSpyShoppingListCompanyUsers !== null) {
                foreach ($this->collSpyShoppingListCompanyUsers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion !== null) {
                if (!$this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery::create()
                        ->filterByPrimaryKeys($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyShoppingListCompanyBusinessUnits !== null) {
                foreach ($this->collSpyShoppingListCompanyBusinessUnits as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion !== null) {
                if (!$this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery::create()
                        ->filterByPrimaryKeys($this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyShoppingListPermissionGroupToPermissions !== null) {
                foreach ($this->collSpyShoppingListPermissionGroupToPermissions as $referrerFK) {
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

        $this->modifiedColumns[SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP] = true;
        if (null !== $this->id_shopping_list_permission_group) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP)) {
            $modifiedColumns[':p' . $index++]  = 'id_shopping_list_permission_group';
        }
        if ($this->isColumnModified(SpyShoppingListPermissionGroupTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }

        $sql = sprintf(
            'INSERT INTO spy_shopping_list_permission_group (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_shopping_list_permission_group':
                        $stmt->bindValue($identifier, $this->id_shopping_list_permission_group, PDO::PARAM_INT);
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
            $pk = $con->lastInsertId('spy_shopping_list_permission_group_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdShoppingListPermissionGroup($pk);

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
        $pos = SpyShoppingListPermissionGroupTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdShoppingListPermissionGroup();
                break;
            case 1:
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

        if (isset($alreadyDumpedObjects['SpyShoppingListPermissionGroup'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyShoppingListPermissionGroup'][$this->hashCode()] = true;
        $keys = SpyShoppingListPermissionGroupTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdShoppingListPermissionGroup(),
            $keys[1] => $this->getName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSpyShoppingListCompanyUsers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShoppingListCompanyUsers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shopping_list_company_users';
                        break;
                    default:
                        $key = 'SpyShoppingListCompanyUsers';
                }

                $result[$key] = $this->collSpyShoppingListCompanyUsers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyShoppingListCompanyBusinessUnits) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShoppingListCompanyBusinessUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shopping_list_company_business_units';
                        break;
                    default:
                        $key = 'SpyShoppingListCompanyBusinessUnits';
                }

                $result[$key] = $this->collSpyShoppingListCompanyBusinessUnits->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyShoppingListPermissionGroupToPermissions) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShoppingListPermissionGroupToPermissions';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shopping_list_permission_group_to_permissions';
                        break;
                    default:
                        $key = 'SpyShoppingListPermissionGroupToPermissions';
                }

                $result[$key] = $this->collSpyShoppingListPermissionGroupToPermissions->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyShoppingListPermissionGroupTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdShoppingListPermissionGroup($value);
                break;
            case 1:
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
     * @return     $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyShoppingListPermissionGroupTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdShoppingListPermissionGroup($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setName($arr[$keys[1]]);
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
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup The current object, for fluid interface
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
        $criteria = new Criteria(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP)) {
            $criteria->add(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $this->id_shopping_list_permission_group);
        }
        if ($this->isColumnModified(SpyShoppingListPermissionGroupTableMap::COL_NAME)) {
            $criteria->add(SpyShoppingListPermissionGroupTableMap::COL_NAME, $this->name);
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
        $criteria = ChildSpyShoppingListPermissionGroupQuery::create();
        $criteria->add(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $this->id_shopping_list_permission_group);

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
        $validPk = null !== $this->getIdShoppingListPermissionGroup();

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
        return $this->getIdShoppingListPermissionGroup();
    }

    /**
     * Generic method to set the primary key (id_shopping_list_permission_group column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdShoppingListPermissionGroup($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdShoppingListPermissionGroup();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyShoppingListCompanyUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyShoppingListCompanyUser($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyShoppingListCompanyBusinessUnits() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyShoppingListCompanyBusinessUnit($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyShoppingListPermissionGroupToPermissions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyShoppingListPermissionGroupToPermission($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdShoppingListPermissionGroup(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup Clone of current object.
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
        if ('SpyShoppingListCompanyUser' === $relationName) {
            $this->initSpyShoppingListCompanyUsers();
            return;
        }
        if ('SpyShoppingListCompanyBusinessUnit' === $relationName) {
            $this->initSpyShoppingListCompanyBusinessUnits();
            return;
        }
        if ('SpyShoppingListPermissionGroupToPermission' === $relationName) {
            $this->initSpyShoppingListPermissionGroupToPermissions();
            return;
        }
    }

    /**
     * Clears out the collSpyShoppingListCompanyUsers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyShoppingListCompanyUsers()
     */
    public function clearSpyShoppingListCompanyUsers()
    {
        $this->collSpyShoppingListCompanyUsers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyShoppingListCompanyUsers collection loaded partially.
     */
    public function resetPartialSpyShoppingListCompanyUsers($v = true)
    {
        $this->collSpyShoppingListCompanyUsersPartial = $v;
    }

    /**
     * Initializes the collSpyShoppingListCompanyUsers collection.
     *
     * By default this just sets the collSpyShoppingListCompanyUsers collection to an empty array (like clearcollSpyShoppingListCompanyUsers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyShoppingListCompanyUsers($overrideExisting = true)
    {
        if (null !== $this->collSpyShoppingListCompanyUsers && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShoppingListCompanyUserTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyShoppingListCompanyUsers = new $collectionClassName;
        $this->collSpyShoppingListCompanyUsers->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser');
    }

    /**
     * Gets an array of ChildSpyShoppingListCompanyUser objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyShoppingListPermissionGroup is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyShoppingListCompanyUser[] List of ChildSpyShoppingListCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser> List of ChildSpyShoppingListCompanyUser objects
     * @throws PropelException
     */
    public function getSpyShoppingListCompanyUsers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyUsersPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyShoppingListCompanyUsers) {
                    $this->initSpyShoppingListCompanyUsers();
                } else {
                    $collectionClassName = SpyShoppingListCompanyUserTableMap::getTableMap()->getCollectionClassName();

                    $collSpyShoppingListCompanyUsers = new $collectionClassName;
                    $collSpyShoppingListCompanyUsers->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser');

                    return $collSpyShoppingListCompanyUsers;
                }
            } else {
                $collSpyShoppingListCompanyUsers = ChildSpyShoppingListCompanyUserQuery::create(null, $criteria)
                    ->filterBySpyShoppingListPermissionGroup($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyShoppingListCompanyUsersPartial && count($collSpyShoppingListCompanyUsers)) {
                        $this->initSpyShoppingListCompanyUsers(false);

                        foreach ($collSpyShoppingListCompanyUsers as $obj) {
                            if (false == $this->collSpyShoppingListCompanyUsers->contains($obj)) {
                                $this->collSpyShoppingListCompanyUsers->append($obj);
                            }
                        }

                        $this->collSpyShoppingListCompanyUsersPartial = true;
                    }

                    return $collSpyShoppingListCompanyUsers;
                }

                if ($partial && $this->collSpyShoppingListCompanyUsers) {
                    foreach ($this->collSpyShoppingListCompanyUsers as $obj) {
                        if ($obj->isNew()) {
                            $collSpyShoppingListCompanyUsers[] = $obj;
                        }
                    }
                }

                $this->collSpyShoppingListCompanyUsers = $collSpyShoppingListCompanyUsers;
                $this->collSpyShoppingListCompanyUsersPartial = false;
            }
        }

        return $this->collSpyShoppingListCompanyUsers;
    }

    /**
     * Sets a collection of ChildSpyShoppingListCompanyUser objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyShoppingListCompanyUsers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function setSpyShoppingListCompanyUsers(Collection $spyShoppingListCompanyUsers, ConnectionInterface $con = null)
    {
        /** @var ChildSpyShoppingListCompanyUser[] $spyShoppingListCompanyUsersToDelete */
        $spyShoppingListCompanyUsersToDelete = $this->getSpyShoppingListCompanyUsers(new Criteria(), $con)->diff($spyShoppingListCompanyUsers);


        $this->spyShoppingListCompanyUsersScheduledForDeletion = $spyShoppingListCompanyUsersToDelete;

        foreach ($spyShoppingListCompanyUsersToDelete as $spyShoppingListCompanyUserRemoved) {
            $spyShoppingListCompanyUserRemoved->setSpyShoppingListPermissionGroup(null);
        }

        $this->collSpyShoppingListCompanyUsers = null;
        foreach ($spyShoppingListCompanyUsers as $spyShoppingListCompanyUser) {
            $this->addSpyShoppingListCompanyUser($spyShoppingListCompanyUser);
        }

        $this->collSpyShoppingListCompanyUsers = $spyShoppingListCompanyUsers;
        $this->collSpyShoppingListCompanyUsersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyShoppingListCompanyUser objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyShoppingListCompanyUser objects.
     * @throws PropelException
     */
    public function countSpyShoppingListCompanyUsers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyUsersPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyShoppingListCompanyUsers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyShoppingListCompanyUsers());
            }

            $query = ChildSpyShoppingListCompanyUserQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyShoppingListPermissionGroup($this)
                ->count($con);
        }

        return count($this->collSpyShoppingListCompanyUsers);
    }

    /**
     * Method called to associate a ChildSpyShoppingListCompanyUser object to this object
     * through the ChildSpyShoppingListCompanyUser foreign key attribute.
     *
     * @param  ChildSpyShoppingListCompanyUser $l ChildSpyShoppingListCompanyUser
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function addSpyShoppingListCompanyUser(ChildSpyShoppingListCompanyUser $l)
    {
        if ($this->collSpyShoppingListCompanyUsers === null) {
            $this->initSpyShoppingListCompanyUsers();
            $this->collSpyShoppingListCompanyUsersPartial = true;
        }

        if (!$this->collSpyShoppingListCompanyUsers->contains($l)) {
            $this->doAddSpyShoppingListCompanyUser($l);

            if ($this->spyShoppingListCompanyUsersScheduledForDeletion and $this->spyShoppingListCompanyUsersScheduledForDeletion->contains($l)) {
                $this->spyShoppingListCompanyUsersScheduledForDeletion->remove($this->spyShoppingListCompanyUsersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyShoppingListCompanyUser $spyShoppingListCompanyUser The ChildSpyShoppingListCompanyUser object to add.
     */
    protected function doAddSpyShoppingListCompanyUser(ChildSpyShoppingListCompanyUser $spyShoppingListCompanyUser)
    {
        $this->collSpyShoppingListCompanyUsers[]= $spyShoppingListCompanyUser;
        $spyShoppingListCompanyUser->setSpyShoppingListPermissionGroup($this);
    }

    /**
     * @param  ChildSpyShoppingListCompanyUser $spyShoppingListCompanyUser The ChildSpyShoppingListCompanyUser object to remove.
     * @return $this|ChildSpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function removeSpyShoppingListCompanyUser(ChildSpyShoppingListCompanyUser $spyShoppingListCompanyUser)
    {
        if ($this->getSpyShoppingListCompanyUsers()->contains($spyShoppingListCompanyUser)) {
            $pos = $this->collSpyShoppingListCompanyUsers->search($spyShoppingListCompanyUser);
            $this->collSpyShoppingListCompanyUsers->remove($pos);
            if (null === $this->spyShoppingListCompanyUsersScheduledForDeletion) {
                $this->spyShoppingListCompanyUsersScheduledForDeletion = clone $this->collSpyShoppingListCompanyUsers;
                $this->spyShoppingListCompanyUsersScheduledForDeletion->clear();
            }
            $this->spyShoppingListCompanyUsersScheduledForDeletion[]= clone $spyShoppingListCompanyUser;
            $spyShoppingListCompanyUser->setSpyShoppingListPermissionGroup(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShoppingListPermissionGroup is new, it will return
     * an empty collection; or if this SpyShoppingListPermissionGroup has previously
     * been saved, it will retrieve related SpyShoppingListCompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShoppingListPermissionGroup.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShoppingListCompanyUser[] List of ChildSpyShoppingListCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser}> List of ChildSpyShoppingListCompanyUser objects
     */
    public function getSpyShoppingListCompanyUsersJoinSpyCompanyUser(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShoppingListCompanyUserQuery::create(null, $criteria);
        $query->joinWith('SpyCompanyUser', $joinBehavior);

        return $this->getSpyShoppingListCompanyUsers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShoppingListPermissionGroup is new, it will return
     * an empty collection; or if this SpyShoppingListPermissionGroup has previously
     * been saved, it will retrieve related SpyShoppingListCompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShoppingListPermissionGroup.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShoppingListCompanyUser[] List of ChildSpyShoppingListCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser}> List of ChildSpyShoppingListCompanyUser objects
     */
    public function getSpyShoppingListCompanyUsersJoinSpyShoppingList(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShoppingListCompanyUserQuery::create(null, $criteria);
        $query->joinWith('SpyShoppingList', $joinBehavior);

        return $this->getSpyShoppingListCompanyUsers($query, $con);
    }

    /**
     * Clears out the collSpyShoppingListCompanyBusinessUnits collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyShoppingListCompanyBusinessUnits()
     */
    public function clearSpyShoppingListCompanyBusinessUnits()
    {
        $this->collSpyShoppingListCompanyBusinessUnits = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyShoppingListCompanyBusinessUnits collection loaded partially.
     */
    public function resetPartialSpyShoppingListCompanyBusinessUnits($v = true)
    {
        $this->collSpyShoppingListCompanyBusinessUnitsPartial = $v;
    }

    /**
     * Initializes the collSpyShoppingListCompanyBusinessUnits collection.
     *
     * By default this just sets the collSpyShoppingListCompanyBusinessUnits collection to an empty array (like clearcollSpyShoppingListCompanyBusinessUnits());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyShoppingListCompanyBusinessUnits($overrideExisting = true)
    {
        if (null !== $this->collSpyShoppingListCompanyBusinessUnits && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShoppingListCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyShoppingListCompanyBusinessUnits = new $collectionClassName;
        $this->collSpyShoppingListCompanyBusinessUnits->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit');
    }

    /**
     * Gets an array of ChildSpyShoppingListCompanyBusinessUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyShoppingListPermissionGroup is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyShoppingListCompanyBusinessUnit[] List of ChildSpyShoppingListCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListCompanyBusinessUnit> List of ChildSpyShoppingListCompanyBusinessUnit objects
     * @throws PropelException
     */
    public function getSpyShoppingListCompanyBusinessUnits(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyShoppingListCompanyBusinessUnits) {
                    $this->initSpyShoppingListCompanyBusinessUnits();
                } else {
                    $collectionClassName = SpyShoppingListCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

                    $collSpyShoppingListCompanyBusinessUnits = new $collectionClassName;
                    $collSpyShoppingListCompanyBusinessUnits->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit');

                    return $collSpyShoppingListCompanyBusinessUnits;
                }
            } else {
                $collSpyShoppingListCompanyBusinessUnits = ChildSpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria)
                    ->filterBySpyShoppingListPermissionGroup($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyShoppingListCompanyBusinessUnitsPartial && count($collSpyShoppingListCompanyBusinessUnits)) {
                        $this->initSpyShoppingListCompanyBusinessUnits(false);

                        foreach ($collSpyShoppingListCompanyBusinessUnits as $obj) {
                            if (false == $this->collSpyShoppingListCompanyBusinessUnits->contains($obj)) {
                                $this->collSpyShoppingListCompanyBusinessUnits->append($obj);
                            }
                        }

                        $this->collSpyShoppingListCompanyBusinessUnitsPartial = true;
                    }

                    return $collSpyShoppingListCompanyBusinessUnits;
                }

                if ($partial && $this->collSpyShoppingListCompanyBusinessUnits) {
                    foreach ($this->collSpyShoppingListCompanyBusinessUnits as $obj) {
                        if ($obj->isNew()) {
                            $collSpyShoppingListCompanyBusinessUnits[] = $obj;
                        }
                    }
                }

                $this->collSpyShoppingListCompanyBusinessUnits = $collSpyShoppingListCompanyBusinessUnits;
                $this->collSpyShoppingListCompanyBusinessUnitsPartial = false;
            }
        }

        return $this->collSpyShoppingListCompanyBusinessUnits;
    }

    /**
     * Sets a collection of ChildSpyShoppingListCompanyBusinessUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyShoppingListCompanyBusinessUnits A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function setSpyShoppingListCompanyBusinessUnits(Collection $spyShoppingListCompanyBusinessUnits, ConnectionInterface $con = null)
    {
        /** @var ChildSpyShoppingListCompanyBusinessUnit[] $spyShoppingListCompanyBusinessUnitsToDelete */
        $spyShoppingListCompanyBusinessUnitsToDelete = $this->getSpyShoppingListCompanyBusinessUnits(new Criteria(), $con)->diff($spyShoppingListCompanyBusinessUnits);


        $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion = $spyShoppingListCompanyBusinessUnitsToDelete;

        foreach ($spyShoppingListCompanyBusinessUnitsToDelete as $spyShoppingListCompanyBusinessUnitRemoved) {
            $spyShoppingListCompanyBusinessUnitRemoved->setSpyShoppingListPermissionGroup(null);
        }

        $this->collSpyShoppingListCompanyBusinessUnits = null;
        foreach ($spyShoppingListCompanyBusinessUnits as $spyShoppingListCompanyBusinessUnit) {
            $this->addSpyShoppingListCompanyBusinessUnit($spyShoppingListCompanyBusinessUnit);
        }

        $this->collSpyShoppingListCompanyBusinessUnits = $spyShoppingListCompanyBusinessUnits;
        $this->collSpyShoppingListCompanyBusinessUnitsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyShoppingListCompanyBusinessUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyShoppingListCompanyBusinessUnit objects.
     * @throws PropelException
     */
    public function countSpyShoppingListCompanyBusinessUnits(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyShoppingListCompanyBusinessUnits) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyShoppingListCompanyBusinessUnits());
            }

            $query = ChildSpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyShoppingListPermissionGroup($this)
                ->count($con);
        }

        return count($this->collSpyShoppingListCompanyBusinessUnits);
    }

    /**
     * Method called to associate a ChildSpyShoppingListCompanyBusinessUnit object to this object
     * through the ChildSpyShoppingListCompanyBusinessUnit foreign key attribute.
     *
     * @param  ChildSpyShoppingListCompanyBusinessUnit $l ChildSpyShoppingListCompanyBusinessUnit
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function addSpyShoppingListCompanyBusinessUnit(ChildSpyShoppingListCompanyBusinessUnit $l)
    {
        if ($this->collSpyShoppingListCompanyBusinessUnits === null) {
            $this->initSpyShoppingListCompanyBusinessUnits();
            $this->collSpyShoppingListCompanyBusinessUnitsPartial = true;
        }

        if (!$this->collSpyShoppingListCompanyBusinessUnits->contains($l)) {
            $this->doAddSpyShoppingListCompanyBusinessUnit($l);

            if ($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion and $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->contains($l)) {
                $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->remove($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit The ChildSpyShoppingListCompanyBusinessUnit object to add.
     */
    protected function doAddSpyShoppingListCompanyBusinessUnit(ChildSpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit)
    {
        $this->collSpyShoppingListCompanyBusinessUnits[]= $spyShoppingListCompanyBusinessUnit;
        $spyShoppingListCompanyBusinessUnit->setSpyShoppingListPermissionGroup($this);
    }

    /**
     * @param  ChildSpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit The ChildSpyShoppingListCompanyBusinessUnit object to remove.
     * @return $this|ChildSpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function removeSpyShoppingListCompanyBusinessUnit(ChildSpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit)
    {
        if ($this->getSpyShoppingListCompanyBusinessUnits()->contains($spyShoppingListCompanyBusinessUnit)) {
            $pos = $this->collSpyShoppingListCompanyBusinessUnits->search($spyShoppingListCompanyBusinessUnit);
            $this->collSpyShoppingListCompanyBusinessUnits->remove($pos);
            if (null === $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion) {
                $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion = clone $this->collSpyShoppingListCompanyBusinessUnits;
                $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->clear();
            }
            $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion[]= clone $spyShoppingListCompanyBusinessUnit;
            $spyShoppingListCompanyBusinessUnit->setSpyShoppingListPermissionGroup(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShoppingListPermissionGroup is new, it will return
     * an empty collection; or if this SpyShoppingListPermissionGroup has previously
     * been saved, it will retrieve related SpyShoppingListCompanyBusinessUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShoppingListPermissionGroup.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShoppingListCompanyBusinessUnit[] List of ChildSpyShoppingListCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListCompanyBusinessUnit}> List of ChildSpyShoppingListCompanyBusinessUnit objects
     */
    public function getSpyShoppingListCompanyBusinessUnitsJoinSpyCompanyBusinessUnit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('SpyCompanyBusinessUnit', $joinBehavior);

        return $this->getSpyShoppingListCompanyBusinessUnits($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShoppingListPermissionGroup is new, it will return
     * an empty collection; or if this SpyShoppingListPermissionGroup has previously
     * been saved, it will retrieve related SpyShoppingListCompanyBusinessUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShoppingListPermissionGroup.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShoppingListCompanyBusinessUnit[] List of ChildSpyShoppingListCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListCompanyBusinessUnit}> List of ChildSpyShoppingListCompanyBusinessUnit objects
     */
    public function getSpyShoppingListCompanyBusinessUnitsJoinSpyShoppingList(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('SpyShoppingList', $joinBehavior);

        return $this->getSpyShoppingListCompanyBusinessUnits($query, $con);
    }

    /**
     * Clears out the collSpyShoppingListPermissionGroupToPermissions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyShoppingListPermissionGroupToPermissions()
     */
    public function clearSpyShoppingListPermissionGroupToPermissions()
    {
        $this->collSpyShoppingListPermissionGroupToPermissions = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyShoppingListPermissionGroupToPermissions collection loaded partially.
     */
    public function resetPartialSpyShoppingListPermissionGroupToPermissions($v = true)
    {
        $this->collSpyShoppingListPermissionGroupToPermissionsPartial = $v;
    }

    /**
     * Initializes the collSpyShoppingListPermissionGroupToPermissions collection.
     *
     * By default this just sets the collSpyShoppingListPermissionGroupToPermissions collection to an empty array (like clearcollSpyShoppingListPermissionGroupToPermissions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyShoppingListPermissionGroupToPermissions($overrideExisting = true)
    {
        if (null !== $this->collSpyShoppingListPermissionGroupToPermissions && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShoppingListPermissionGroupToPermissionTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyShoppingListPermissionGroupToPermissions = new $collectionClassName;
        $this->collSpyShoppingListPermissionGroupToPermissions->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission');
    }

    /**
     * Gets an array of ChildSpyShoppingListPermissionGroupToPermission objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyShoppingListPermissionGroup is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyShoppingListPermissionGroupToPermission[] List of ChildSpyShoppingListPermissionGroupToPermission objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission> List of ChildSpyShoppingListPermissionGroupToPermission objects
     * @throws PropelException
     */
    public function getSpyShoppingListPermissionGroupToPermissions(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListPermissionGroupToPermissionsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListPermissionGroupToPermissions || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyShoppingListPermissionGroupToPermissions) {
                    $this->initSpyShoppingListPermissionGroupToPermissions();
                } else {
                    $collectionClassName = SpyShoppingListPermissionGroupToPermissionTableMap::getTableMap()->getCollectionClassName();

                    $collSpyShoppingListPermissionGroupToPermissions = new $collectionClassName;
                    $collSpyShoppingListPermissionGroupToPermissions->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission');

                    return $collSpyShoppingListPermissionGroupToPermissions;
                }
            } else {
                $collSpyShoppingListPermissionGroupToPermissions = ChildSpyShoppingListPermissionGroupToPermissionQuery::create(null, $criteria)
                    ->filterBySpyShoppingListPermissionGroup($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyShoppingListPermissionGroupToPermissionsPartial && count($collSpyShoppingListPermissionGroupToPermissions)) {
                        $this->initSpyShoppingListPermissionGroupToPermissions(false);

                        foreach ($collSpyShoppingListPermissionGroupToPermissions as $obj) {
                            if (false == $this->collSpyShoppingListPermissionGroupToPermissions->contains($obj)) {
                                $this->collSpyShoppingListPermissionGroupToPermissions->append($obj);
                            }
                        }

                        $this->collSpyShoppingListPermissionGroupToPermissionsPartial = true;
                    }

                    return $collSpyShoppingListPermissionGroupToPermissions;
                }

                if ($partial && $this->collSpyShoppingListPermissionGroupToPermissions) {
                    foreach ($this->collSpyShoppingListPermissionGroupToPermissions as $obj) {
                        if ($obj->isNew()) {
                            $collSpyShoppingListPermissionGroupToPermissions[] = $obj;
                        }
                    }
                }

                $this->collSpyShoppingListPermissionGroupToPermissions = $collSpyShoppingListPermissionGroupToPermissions;
                $this->collSpyShoppingListPermissionGroupToPermissionsPartial = false;
            }
        }

        return $this->collSpyShoppingListPermissionGroupToPermissions;
    }

    /**
     * Sets a collection of ChildSpyShoppingListPermissionGroupToPermission objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyShoppingListPermissionGroupToPermissions A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function setSpyShoppingListPermissionGroupToPermissions(Collection $spyShoppingListPermissionGroupToPermissions, ConnectionInterface $con = null)
    {
        /** @var ChildSpyShoppingListPermissionGroupToPermission[] $spyShoppingListPermissionGroupToPermissionsToDelete */
        $spyShoppingListPermissionGroupToPermissionsToDelete = $this->getSpyShoppingListPermissionGroupToPermissions(new Criteria(), $con)->diff($spyShoppingListPermissionGroupToPermissions);


        $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion = $spyShoppingListPermissionGroupToPermissionsToDelete;

        foreach ($spyShoppingListPermissionGroupToPermissionsToDelete as $spyShoppingListPermissionGroupToPermissionRemoved) {
            $spyShoppingListPermissionGroupToPermissionRemoved->setSpyShoppingListPermissionGroup(null);
        }

        $this->collSpyShoppingListPermissionGroupToPermissions = null;
        foreach ($spyShoppingListPermissionGroupToPermissions as $spyShoppingListPermissionGroupToPermission) {
            $this->addSpyShoppingListPermissionGroupToPermission($spyShoppingListPermissionGroupToPermission);
        }

        $this->collSpyShoppingListPermissionGroupToPermissions = $spyShoppingListPermissionGroupToPermissions;
        $this->collSpyShoppingListPermissionGroupToPermissionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyShoppingListPermissionGroupToPermission objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyShoppingListPermissionGroupToPermission objects.
     * @throws PropelException
     */
    public function countSpyShoppingListPermissionGroupToPermissions(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListPermissionGroupToPermissionsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListPermissionGroupToPermissions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyShoppingListPermissionGroupToPermissions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyShoppingListPermissionGroupToPermissions());
            }

            $query = ChildSpyShoppingListPermissionGroupToPermissionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyShoppingListPermissionGroup($this)
                ->count($con);
        }

        return count($this->collSpyShoppingListPermissionGroupToPermissions);
    }

    /**
     * Method called to associate a ChildSpyShoppingListPermissionGroupToPermission object to this object
     * through the ChildSpyShoppingListPermissionGroupToPermission foreign key attribute.
     *
     * @param  ChildSpyShoppingListPermissionGroupToPermission $l ChildSpyShoppingListPermissionGroupToPermission
     * @return $this|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function addSpyShoppingListPermissionGroupToPermission(ChildSpyShoppingListPermissionGroupToPermission $l)
    {
        if ($this->collSpyShoppingListPermissionGroupToPermissions === null) {
            $this->initSpyShoppingListPermissionGroupToPermissions();
            $this->collSpyShoppingListPermissionGroupToPermissionsPartial = true;
        }

        if (!$this->collSpyShoppingListPermissionGroupToPermissions->contains($l)) {
            $this->doAddSpyShoppingListPermissionGroupToPermission($l);

            if ($this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion and $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion->contains($l)) {
                $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion->remove($this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyShoppingListPermissionGroupToPermission $spyShoppingListPermissionGroupToPermission The ChildSpyShoppingListPermissionGroupToPermission object to add.
     */
    protected function doAddSpyShoppingListPermissionGroupToPermission(ChildSpyShoppingListPermissionGroupToPermission $spyShoppingListPermissionGroupToPermission)
    {
        $this->collSpyShoppingListPermissionGroupToPermissions[]= $spyShoppingListPermissionGroupToPermission;
        $spyShoppingListPermissionGroupToPermission->setSpyShoppingListPermissionGroup($this);
    }

    /**
     * @param  ChildSpyShoppingListPermissionGroupToPermission $spyShoppingListPermissionGroupToPermission The ChildSpyShoppingListPermissionGroupToPermission object to remove.
     * @return $this|ChildSpyShoppingListPermissionGroup The current object (for fluent API support)
     */
    public function removeSpyShoppingListPermissionGroupToPermission(ChildSpyShoppingListPermissionGroupToPermission $spyShoppingListPermissionGroupToPermission)
    {
        if ($this->getSpyShoppingListPermissionGroupToPermissions()->contains($spyShoppingListPermissionGroupToPermission)) {
            $pos = $this->collSpyShoppingListPermissionGroupToPermissions->search($spyShoppingListPermissionGroupToPermission);
            $this->collSpyShoppingListPermissionGroupToPermissions->remove($pos);
            if (null === $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion) {
                $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion = clone $this->collSpyShoppingListPermissionGroupToPermissions;
                $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion->clear();
            }
            $this->spyShoppingListPermissionGroupToPermissionsScheduledForDeletion[]= clone $spyShoppingListPermissionGroupToPermission;
            $spyShoppingListPermissionGroupToPermission->setSpyShoppingListPermissionGroup(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyShoppingListPermissionGroup is new, it will return
     * an empty collection; or if this SpyShoppingListPermissionGroup has previously
     * been saved, it will retrieve related SpyShoppingListPermissionGroupToPermissions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyShoppingListPermissionGroup.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyShoppingListPermissionGroupToPermission[] List of ChildSpyShoppingListPermissionGroupToPermission objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission}> List of ChildSpyShoppingListPermissionGroupToPermission objects
     */
    public function getSpyShoppingListPermissionGroupToPermissionsJoinSpyPermission(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyShoppingListPermissionGroupToPermissionQuery::create(null, $criteria);
        $query->joinWith('SpyPermission', $joinBehavior);

        return $this->getSpyShoppingListPermissionGroupToPermissions($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_shopping_list_permission_group = null;
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
            if ($this->collSpyShoppingListCompanyUsers) {
                foreach ($this->collSpyShoppingListCompanyUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyShoppingListCompanyBusinessUnits) {
                foreach ($this->collSpyShoppingListCompanyBusinessUnits as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyShoppingListPermissionGroupToPermissions) {
                foreach ($this->collSpyShoppingListPermissionGroupToPermissions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyShoppingListCompanyUsers = null;
        $this->collSpyShoppingListCompanyBusinessUnits = null;
        $this->collSpyShoppingListPermissionGroupToPermissions = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyShoppingListPermissionGroupTableMap::DEFAULT_STRING_FORMAT);
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
