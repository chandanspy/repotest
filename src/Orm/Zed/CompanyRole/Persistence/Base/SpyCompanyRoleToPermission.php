<?php

namespace Orm\Zed\CompanyRole\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRole as ChildSpyCompanyRole;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleQuery as ChildSpyCompanyRoleQuery;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery as ChildSpyCompanyRoleToPermissionQuery;
use Orm\Zed\CompanyRole\Persistence\Map\SpyCompanyRoleToPermissionTableMap;
use Orm\Zed\Permission\Persistence\SpyPermission;
use Orm\Zed\Permission\Persistence\SpyPermissionQuery;
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
 * Base class that represents a row from the 'spy_company_role_to_permission' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.CompanyRole.Persistence.Base
 */
abstract class SpyCompanyRoleToPermission implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\CompanyRole\\Persistence\\Map\\SpyCompanyRoleToPermissionTableMap';


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
     * The value for the id_company_role_to_permission field.
     *
     * @var        int
     */
    protected $id_company_role_to_permission;

    /**
     * The value for the fk_company_role field.
     *
     * @var        int
     */
    protected $fk_company_role;

    /**
     * The value for the fk_permission field.
     *
     * @var        int
     */
    protected $fk_permission;

    /**
     * The value for the configuration field.
     *
     * @var        string
     */
    protected $configuration;

    /**
     * @var        SpyPermission
     */
    protected $aPermission;

    /**
     * @var        ChildSpyCompanyRole
     */
    protected $aCompanyRole;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of Orm\Zed\CompanyRole\Persistence\Base\SpyCompanyRoleToPermission object.
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
     * Compares this with another <code>SpyCompanyRoleToPermission</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyCompanyRoleToPermission</code>, delegates to
     * <code>equals(SpyCompanyRoleToPermission)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_company_role_to_permission] column value.
     *
     * @return int
     */
    public function getIdCompanyRoleToPermission()
    {
        return $this->id_company_role_to_permission;
    }

    /**
     * Get the [fk_company_role] column value.
     *
     * @return int
     */
    public function getFkCompanyRole()
    {
        return $this->fk_company_role;
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
     * Get the [configuration] column value.
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Set the value of [id_company_role_to_permission] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission The current object (for fluent API support)
     */
    public function setIdCompanyRoleToPermission($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_company_role_to_permission !== $v) {
            $this->id_company_role_to_permission = $v;
            $this->modifiedColumns[SpyCompanyRoleToPermissionTableMap::COL_ID_COMPANY_ROLE_TO_PERMISSION] = true;
        }

        return $this;
    } // setIdCompanyRoleToPermission()

    /**
     * Set the value of [fk_company_role] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission The current object (for fluent API support)
     */
    public function setFkCompanyRole($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_company_role !== $v) {
            $this->fk_company_role = $v;
            $this->modifiedColumns[SpyCompanyRoleToPermissionTableMap::COL_FK_COMPANY_ROLE] = true;
        }

        if ($this->aCompanyRole !== null && $this->aCompanyRole->getIdCompanyRole() !== $v) {
            $this->aCompanyRole = null;
        }

        return $this;
    } // setFkCompanyRole()

    /**
     * Set the value of [fk_permission] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCompanyRoleToPermissionTableMap::COL_FK_PERMISSION] = true;
        }

        if ($this->aPermission !== null && $this->aPermission->getIdPermission() !== $v) {
            $this->aPermission = null;
        }

        return $this;
    } // setFkPermission()

    /**
     * Set the value of [configuration] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission The current object (for fluent API support)
     */
    public function setConfiguration($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->configuration !== $v) {
            $this->configuration = $v;
            $this->modifiedColumns[SpyCompanyRoleToPermissionTableMap::COL_CONFIGURATION] = true;
        }

        return $this;
    } // setConfiguration()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyCompanyRoleToPermissionTableMap::translateFieldName('IdCompanyRoleToPermission', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_company_role_to_permission = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyCompanyRoleToPermissionTableMap::translateFieldName('FkCompanyRole', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_company_role = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyCompanyRoleToPermissionTableMap::translateFieldName('FkPermission', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_permission = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyCompanyRoleToPermissionTableMap::translateFieldName('Configuration', TableMap::TYPE_PHPNAME, $indexType)];
            $this->configuration = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = SpyCompanyRoleToPermissionTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRoleToPermission'), 0, $e);
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
        if ($this->aCompanyRole !== null && $this->fk_company_role !== $this->aCompanyRole->getIdCompanyRole()) {
            $this->aCompanyRole = null;
        }
        if ($this->aPermission !== null && $this->fk_permission !== $this->aPermission->getIdPermission()) {
            $this->aPermission = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyCompanyRoleToPermissionTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyCompanyRoleToPermissionQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPermission = null;
            $this->aCompanyRole = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyCompanyRoleToPermission::setDeleted()
     * @see SpyCompanyRoleToPermission::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyRoleToPermissionTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyCompanyRoleToPermissionQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyRoleToPermissionTableMap::DATABASE_NAME);
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
                SpyCompanyRoleToPermissionTableMap::addInstanceToPool($this);
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

            if ($this->aPermission !== null) {
                if ($this->aPermission->isModified() || $this->aPermission->isNew()) {
                    $affectedRows += $this->aPermission->save($con);
                }
                $this->setPermission($this->aPermission);
            }

            if ($this->aCompanyRole !== null) {
                if ($this->aCompanyRole->isModified() || $this->aCompanyRole->isNew()) {
                    $affectedRows += $this->aCompanyRole->save($con);
                }
                $this->setCompanyRole($this->aCompanyRole);
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

        $this->modifiedColumns[SpyCompanyRoleToPermissionTableMap::COL_ID_COMPANY_ROLE_TO_PERMISSION] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_ID_COMPANY_ROLE_TO_PERMISSION)) {
            $modifiedColumns[':p' . $index++]  = 'id_company_role_to_permission';
        }
        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_FK_COMPANY_ROLE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_company_role';
        }
        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_FK_PERMISSION)) {
            $modifiedColumns[':p' . $index++]  = 'fk_permission';
        }
        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_CONFIGURATION)) {
            $modifiedColumns[':p' . $index++]  = 'configuration';
        }

        $sql = sprintf(
            'INSERT INTO spy_company_role_to_permission (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_company_role_to_permission':
                        $stmt->bindValue($identifier, $this->id_company_role_to_permission, PDO::PARAM_INT);
                        break;
                    case 'fk_company_role':
                        $stmt->bindValue($identifier, $this->fk_company_role, PDO::PARAM_INT);
                        break;
                    case 'fk_permission':
                        $stmt->bindValue($identifier, $this->fk_permission, PDO::PARAM_INT);
                        break;
                    case 'configuration':
                        $stmt->bindValue($identifier, $this->configuration, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_company_role_to_permission_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        if ($pk !== null) {
            $this->setIdCompanyRoleToPermission($pk);
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
        $pos = SpyCompanyRoleToPermissionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdCompanyRoleToPermission();
                break;
            case 1:
                return $this->getFkCompanyRole();
                break;
            case 2:
                return $this->getFkPermission();
                break;
            case 3:
                return $this->getConfiguration();
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

        if (isset($alreadyDumpedObjects['SpyCompanyRoleToPermission'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyCompanyRoleToPermission'][$this->hashCode()] = true;
        $keys = SpyCompanyRoleToPermissionTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCompanyRoleToPermission(),
            $keys[1] => $this->getFkCompanyRole(),
            $keys[2] => $this->getFkPermission(),
            $keys[3] => $this->getConfiguration(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPermission) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPermission';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_permission';
                        break;
                    default:
                        $key = 'Permission';
                }

                $result[$key] = $this->aPermission->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCompanyRole) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyRole';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_role';
                        break;
                    default:
                        $key = 'CompanyRole';
                }

                $result[$key] = $this->aCompanyRole->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCompanyRoleToPermissionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdCompanyRoleToPermission($value);
                break;
            case 1:
                $this->setFkCompanyRole($value);
                break;
            case 2:
                $this->setFkPermission($value);
                break;
            case 3:
                $this->setConfiguration($value);
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
     * @return     $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyCompanyRoleToPermissionTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCompanyRoleToPermission($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkCompanyRole($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkPermission($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setConfiguration($arr[$keys[3]]);
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
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission The current object, for fluid interface
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
        $criteria = new Criteria(SpyCompanyRoleToPermissionTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_ID_COMPANY_ROLE_TO_PERMISSION)) {
            $criteria->add(SpyCompanyRoleToPermissionTableMap::COL_ID_COMPANY_ROLE_TO_PERMISSION, $this->id_company_role_to_permission);
        }
        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_FK_COMPANY_ROLE)) {
            $criteria->add(SpyCompanyRoleToPermissionTableMap::COL_FK_COMPANY_ROLE, $this->fk_company_role);
        }
        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_FK_PERMISSION)) {
            $criteria->add(SpyCompanyRoleToPermissionTableMap::COL_FK_PERMISSION, $this->fk_permission);
        }
        if ($this->isColumnModified(SpyCompanyRoleToPermissionTableMap::COL_CONFIGURATION)) {
            $criteria->add(SpyCompanyRoleToPermissionTableMap::COL_CONFIGURATION, $this->configuration);
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
        $criteria = ChildSpyCompanyRoleToPermissionQuery::create();
        $criteria->add(SpyCompanyRoleToPermissionTableMap::COL_ID_COMPANY_ROLE_TO_PERMISSION, $this->id_company_role_to_permission);
        $criteria->add(SpyCompanyRoleToPermissionTableMap::COL_FK_COMPANY_ROLE, $this->fk_company_role);
        $criteria->add(SpyCompanyRoleToPermissionTableMap::COL_FK_PERMISSION, $this->fk_permission);

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
        $validPk = null !== $this->getIdCompanyRoleToPermission() &&
            null !== $this->getFkCompanyRole() &&
            null !== $this->getFkPermission();

        $validPrimaryKeyFKs = 2;
        $primaryKeyFKs = [];

        //relation spy_company_role_to_permission-fk_permission to table spy_permission
        if ($this->aPermission && $hash = spl_object_hash($this->aPermission)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation spy_company_role_to_permission-fk_company_role to table spy_company_role
        if ($this->aCompanyRole && $hash = spl_object_hash($this->aCompanyRole)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getIdCompanyRoleToPermission();
        $pks[1] = $this->getFkCompanyRole();
        $pks[2] = $this->getFkPermission();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param      array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setIdCompanyRoleToPermission($keys[0]);
        $this->setFkCompanyRole($keys[1]);
        $this->setFkPermission($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getIdCompanyRoleToPermission()) && (null === $this->getFkCompanyRole()) && (null === $this->getFkPermission());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkCompanyRole($this->getFkCompanyRole());
        $copyObj->setFkPermission($this->getFkPermission());
        $copyObj->setConfiguration($this->getConfiguration());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCompanyRoleToPermission(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission Clone of current object.
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
     * Declares an association between this object and a SpyPermission object.
     *
     * @param  SpyPermission $v
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPermission(SpyPermission $v = null)
    {
        if ($v === null) {
            $this->setFkPermission(NULL);
        } else {
            $this->setFkPermission($v->getIdPermission());
        }

        $this->aPermission = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyPermission object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyCompanyRoleToPermission($this);
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
    public function getPermission(ConnectionInterface $con = null)
    {
        if ($this->aPermission === null && ($this->fk_permission != 0)) {
            $this->aPermission = SpyPermissionQuery::create()->findPk($this->fk_permission, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPermission->addSpyCompanyRoleToPermissions($this);
             */
        }

        return $this->aPermission;
    }

    /**
     * Declares an association between this object and a ChildSpyCompanyRole object.
     *
     * @param  ChildSpyCompanyRole $v
     * @return $this|\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCompanyRole(ChildSpyCompanyRole $v = null)
    {
        if ($v === null) {
            $this->setFkCompanyRole(NULL);
        } else {
            $this->setFkCompanyRole($v->getIdCompanyRole());
        }

        $this->aCompanyRole = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyCompanyRole object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyCompanyRoleToPermission($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyCompanyRole object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyCompanyRole The associated ChildSpyCompanyRole object.
     * @throws PropelException
     */
    public function getCompanyRole(ConnectionInterface $con = null)
    {
        if ($this->aCompanyRole === null && ($this->fk_company_role != 0)) {
            $this->aCompanyRole = ChildSpyCompanyRoleQuery::create()->findPk($this->fk_company_role, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCompanyRole->addSpyCompanyRoleToPermissions($this);
             */
        }

        return $this->aCompanyRole;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aPermission) {
            $this->aPermission->removeSpyCompanyRoleToPermission($this);
        }
        if (null !== $this->aCompanyRole) {
            $this->aCompanyRole->removeSpyCompanyRoleToPermission($this);
        }
        $this->id_company_role_to_permission = null;
        $this->fk_company_role = null;
        $this->fk_permission = null;
        $this->configuration = null;
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

        $this->aPermission = null;
        $this->aCompanyRole = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyCompanyRoleToPermissionTableMap::DEFAULT_STRING_FORMAT);
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
