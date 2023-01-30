<?php

namespace Orm\Zed\ProductAttribute\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute as ChildSpyProductManagementAttribute;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery as ChildSpyProductManagementAttributeQuery;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue as ChildSpyProductManagementAttributeValue;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery as ChildSpyProductManagementAttributeValueQuery;
use Orm\Zed\ProductAttribute\Persistence\Map\SpyProductManagementAttributeTableMap;
use Orm\Zed\ProductAttribute\Persistence\Map\SpyProductManagementAttributeValueTableMap;
use Orm\Zed\Product\Persistence\SpyProductAttributeKey;
use Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery;
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
 * Base class that represents a row from the 'spy_product_management_attribute' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.ProductAttribute.Persistence.Base
 */
abstract class SpyProductManagementAttribute implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\ProductAttribute\\Persistence\\Map\\SpyProductManagementAttributeTableMap';


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
     * The value for the id_product_management_attribute field.
     *
     * @var        int
     */
    protected $id_product_management_attribute;

    /**
     * The value for the fk_product_attribute_key field.
     *
     * @var        int
     */
    protected $fk_product_attribute_key;

    /**
     * The value for the allow_input field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $allow_input;

    /**
     * The value for the input_type field.
     *
     * @var        string
     */
    protected $input_type;

    /**
     * @var        SpyProductAttributeKey
     */
    protected $aSpyProductAttributeKey;

    /**
     * @var        ObjectCollection|ChildSpyProductManagementAttributeValue[] Collection to store aggregation of ChildSpyProductManagementAttributeValue objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyProductManagementAttributeValue> Collection to store aggregation of ChildSpyProductManagementAttributeValue objects.
     */
    protected $collSpyProductManagementAttributeValues;
    protected $collSpyProductManagementAttributeValuesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyProductManagementAttributeValue[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyProductManagementAttributeValue>
     */
    protected $spyProductManagementAttributeValuesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->allow_input = true;
    }

    /**
     * Initializes internal state of Orm\Zed\ProductAttribute\Persistence\Base\SpyProductManagementAttribute object.
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
     * Compares this with another <code>SpyProductManagementAttribute</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyProductManagementAttribute</code>, delegates to
     * <code>equals(SpyProductManagementAttribute)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_product_management_attribute] column value.
     *
     * @return int
     */
    public function getIdProductManagementAttribute()
    {
        return $this->id_product_management_attribute;
    }

    /**
     * Get the [fk_product_attribute_key] column value.
     *
     * @return int
     */
    public function getFkProductAttributeKey()
    {
        return $this->fk_product_attribute_key;
    }

    /**
     * Get the [allow_input] column value.
     *
     * @return boolean
     */
    public function getAllowInput()
    {
        return $this->allow_input;
    }

    /**
     * Get the [allow_input] column value.
     *
     * @return boolean
     */
    public function isAllowInput()
    {
        return $this->getAllowInput();
    }

    /**
     * Get the [input_type] column value.
     *
     * @return string
     */
    public function getInputType()
    {
        return $this->input_type;
    }

    /**
     * Set the value of [id_product_management_attribute] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute The current object (for fluent API support)
     */
    public function setIdProductManagementAttribute($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_product_management_attribute !== $v) {
            $this->id_product_management_attribute = $v;
            $this->modifiedColumns[SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE] = true;
        }

        return $this;
    } // setIdProductManagementAttribute()

    /**
     * Set the value of [fk_product_attribute_key] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute The current object (for fluent API support)
     */
    public function setFkProductAttributeKey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_product_attribute_key !== $v) {
            $this->fk_product_attribute_key = $v;
            $this->modifiedColumns[SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY] = true;
        }

        if ($this->aSpyProductAttributeKey !== null && $this->aSpyProductAttributeKey->getIdProductAttributeKey() !== $v) {
            $this->aSpyProductAttributeKey = null;
        }

        return $this;
    } // setFkProductAttributeKey()

    /**
     * Sets the value of the [allow_input] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute The current object (for fluent API support)
     */
    public function setAllowInput($v)
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

        if (($this->isNew() && $hasDefaultValue) || $this->allow_input !== $v) {
            $this->allow_input = $v;
            $this->modifiedColumns[SpyProductManagementAttributeTableMap::COL_ALLOW_INPUT] = true;
        }

        return $this;
    } // setAllowInput()

    /**
     * Set the value of [input_type] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute The current object (for fluent API support)
     */
    public function setInputType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->input_type !== $v) {
            $this->input_type = $v;
            $this->modifiedColumns[SpyProductManagementAttributeTableMap::COL_INPUT_TYPE] = true;
        }

        return $this;
    } // setInputType()

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
            if ($this->allow_input !== true) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyProductManagementAttributeTableMap::translateFieldName('IdProductManagementAttribute', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_product_management_attribute = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyProductManagementAttributeTableMap::translateFieldName('FkProductAttributeKey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_product_attribute_key = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyProductManagementAttributeTableMap::translateFieldName('AllowInput', TableMap::TYPE_PHPNAME, $indexType)];
            $this->allow_input = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyProductManagementAttributeTableMap::translateFieldName('InputType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->input_type = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = SpyProductManagementAttributeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\ProductAttribute\\Persistence\\SpyProductManagementAttribute'), 0, $e);
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
        if ($this->aSpyProductAttributeKey !== null && $this->fk_product_attribute_key !== $this->aSpyProductAttributeKey->getIdProductAttributeKey()) {
            $this->aSpyProductAttributeKey = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyProductManagementAttributeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyProductManagementAttributeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyProductAttributeKey = null;
            $this->collSpyProductManagementAttributeValues = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyProductManagementAttribute::setDeleted()
     * @see SpyProductManagementAttribute::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductManagementAttributeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyProductManagementAttributeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductManagementAttributeTableMap::DATABASE_NAME);
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
                SpyProductManagementAttributeTableMap::addInstanceToPool($this);
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

            if ($this->aSpyProductAttributeKey !== null) {
                if ($this->aSpyProductAttributeKey->isModified() || $this->aSpyProductAttributeKey->isNew()) {
                    $affectedRows += $this->aSpyProductAttributeKey->save($con);
                }
                $this->setSpyProductAttributeKey($this->aSpyProductAttributeKey);
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

            if ($this->spyProductManagementAttributeValuesScheduledForDeletion !== null) {
                if (!$this->spyProductManagementAttributeValuesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery::create()
                        ->filterByPrimaryKeys($this->spyProductManagementAttributeValuesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductManagementAttributeValuesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductManagementAttributeValues !== null) {
                foreach ($this->collSpyProductManagementAttributeValues as $referrerFK) {
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

        $this->modifiedColumns[SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE)) {
            $modifiedColumns[':p' . $index++]  = 'id_product_management_attribute';
        }
        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY)) {
            $modifiedColumns[':p' . $index++]  = 'fk_product_attribute_key';
        }
        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_ALLOW_INPUT)) {
            $modifiedColumns[':p' . $index++]  = 'allow_input';
        }
        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_INPUT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'input_type';
        }

        $sql = sprintf(
            'INSERT INTO spy_product_management_attribute (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_product_management_attribute':
                        $stmt->bindValue($identifier, $this->id_product_management_attribute, PDO::PARAM_INT);
                        break;
                    case 'fk_product_attribute_key':
                        $stmt->bindValue($identifier, $this->fk_product_attribute_key, PDO::PARAM_INT);
                        break;
                    case 'allow_input':
                        $stmt->bindValue($identifier, (int) $this->allow_input, PDO::PARAM_INT);
                        break;
                    case 'input_type':
                        $stmt->bindValue($identifier, $this->input_type, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_product_management_attribute_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        if ($pk !== null) {
            $this->setIdProductManagementAttribute($pk);
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
        $pos = SpyProductManagementAttributeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdProductManagementAttribute();
                break;
            case 1:
                return $this->getFkProductAttributeKey();
                break;
            case 2:
                return $this->getAllowInput();
                break;
            case 3:
                return $this->getInputType();
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

        if (isset($alreadyDumpedObjects['SpyProductManagementAttribute'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyProductManagementAttribute'][$this->hashCode()] = true;
        $keys = SpyProductManagementAttributeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdProductManagementAttribute(),
            $keys[1] => $this->getFkProductAttributeKey(),
            $keys[2] => $this->getAllowInput(),
            $keys[3] => $this->getInputType(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyProductAttributeKey) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductAttributeKey';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_attribute_key';
                        break;
                    default:
                        $key = 'SpyProductAttributeKey';
                }

                $result[$key] = $this->aSpyProductAttributeKey->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyProductManagementAttributeValues) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductManagementAttributeValues';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_management_attribute_values';
                        break;
                    default:
                        $key = 'SpyProductManagementAttributeValues';
                }

                $result[$key] = $this->collSpyProductManagementAttributeValues->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyProductManagementAttributeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdProductManagementAttribute($value);
                break;
            case 1:
                $this->setFkProductAttributeKey($value);
                break;
            case 2:
                $this->setAllowInput($value);
                break;
            case 3:
                $this->setInputType($value);
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
     * @return     $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyProductManagementAttributeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdProductManagementAttribute($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkProductAttributeKey($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setAllowInput($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInputType($arr[$keys[3]]);
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
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute The current object, for fluid interface
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
        $criteria = new Criteria(SpyProductManagementAttributeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE)) {
            $criteria->add(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $this->id_product_management_attribute);
        }
        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY)) {
            $criteria->add(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $this->fk_product_attribute_key);
        }
        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_ALLOW_INPUT)) {
            $criteria->add(SpyProductManagementAttributeTableMap::COL_ALLOW_INPUT, $this->allow_input);
        }
        if ($this->isColumnModified(SpyProductManagementAttributeTableMap::COL_INPUT_TYPE)) {
            $criteria->add(SpyProductManagementAttributeTableMap::COL_INPUT_TYPE, $this->input_type);
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
        $criteria = ChildSpyProductManagementAttributeQuery::create();
        $criteria->add(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $this->id_product_management_attribute);

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
        $validPk = null !== $this->getIdProductManagementAttribute();

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
        return $this->getIdProductManagementAttribute();
    }

    /**
     * Generic method to set the primary key (id_product_management_attribute column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdProductManagementAttribute($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdProductManagementAttribute();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkProductAttributeKey($this->getFkProductAttributeKey());
        $copyObj->setAllowInput($this->getAllowInput());
        $copyObj->setInputType($this->getInputType());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyProductManagementAttributeValues() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductManagementAttributeValue($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdProductManagementAttribute(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute Clone of current object.
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
     * Declares an association between this object and a SpyProductAttributeKey object.
     *
     * @param  SpyProductAttributeKey $v
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyProductAttributeKey(SpyProductAttributeKey $v = null)
    {
        if ($v === null) {
            $this->setFkProductAttributeKey(NULL);
        } else {
            $this->setFkProductAttributeKey($v->getIdProductAttributeKey());
        }

        $this->aSpyProductAttributeKey = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyProductAttributeKey object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyProductManagementAttribute($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyProductAttributeKey object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyProductAttributeKey The associated SpyProductAttributeKey object.
     * @throws PropelException
     */
    public function getSpyProductAttributeKey(ConnectionInterface $con = null)
    {
        if ($this->aSpyProductAttributeKey === null && ($this->fk_product_attribute_key != 0)) {
            $this->aSpyProductAttributeKey = SpyProductAttributeKeyQuery::create()->findPk($this->fk_product_attribute_key, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyProductAttributeKey->addSpyProductManagementAttributes($this);
             */
        }

        return $this->aSpyProductAttributeKey;
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
        if ('SpyProductManagementAttributeValue' === $relationName) {
            $this->initSpyProductManagementAttributeValues();
            return;
        }
    }

    /**
     * Clears out the collSpyProductManagementAttributeValues collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductManagementAttributeValues()
     */
    public function clearSpyProductManagementAttributeValues()
    {
        $this->collSpyProductManagementAttributeValues = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductManagementAttributeValues collection loaded partially.
     */
    public function resetPartialSpyProductManagementAttributeValues($v = true)
    {
        $this->collSpyProductManagementAttributeValuesPartial = $v;
    }

    /**
     * Initializes the collSpyProductManagementAttributeValues collection.
     *
     * By default this just sets the collSpyProductManagementAttributeValues collection to an empty array (like clearcollSpyProductManagementAttributeValues());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductManagementAttributeValues($overrideExisting = true)
    {
        if (null !== $this->collSpyProductManagementAttributeValues && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductManagementAttributeValueTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductManagementAttributeValues = new $collectionClassName;
        $this->collSpyProductManagementAttributeValues->setModel('\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue');
    }

    /**
     * Gets an array of ChildSpyProductManagementAttributeValue objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProductManagementAttribute is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyProductManagementAttributeValue[] List of ChildSpyProductManagementAttributeValue objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyProductManagementAttributeValue> List of ChildSpyProductManagementAttributeValue objects
     * @throws PropelException
     */
    public function getSpyProductManagementAttributeValues(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductManagementAttributeValuesPartial && !$this->isNew();
        if (null === $this->collSpyProductManagementAttributeValues || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductManagementAttributeValues) {
                    $this->initSpyProductManagementAttributeValues();
                } else {
                    $collectionClassName = SpyProductManagementAttributeValueTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductManagementAttributeValues = new $collectionClassName;
                    $collSpyProductManagementAttributeValues->setModel('\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue');

                    return $collSpyProductManagementAttributeValues;
                }
            } else {
                $collSpyProductManagementAttributeValues = ChildSpyProductManagementAttributeValueQuery::create(null, $criteria)
                    ->filterBySpyProductManagementAttribute($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductManagementAttributeValuesPartial && count($collSpyProductManagementAttributeValues)) {
                        $this->initSpyProductManagementAttributeValues(false);

                        foreach ($collSpyProductManagementAttributeValues as $obj) {
                            if (false == $this->collSpyProductManagementAttributeValues->contains($obj)) {
                                $this->collSpyProductManagementAttributeValues->append($obj);
                            }
                        }

                        $this->collSpyProductManagementAttributeValuesPartial = true;
                    }

                    return $collSpyProductManagementAttributeValues;
                }

                if ($partial && $this->collSpyProductManagementAttributeValues) {
                    foreach ($this->collSpyProductManagementAttributeValues as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductManagementAttributeValues[] = $obj;
                        }
                    }
                }

                $this->collSpyProductManagementAttributeValues = $collSpyProductManagementAttributeValues;
                $this->collSpyProductManagementAttributeValuesPartial = false;
            }
        }

        return $this->collSpyProductManagementAttributeValues;
    }

    /**
     * Sets a collection of ChildSpyProductManagementAttributeValue objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductManagementAttributeValues A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProductManagementAttribute The current object (for fluent API support)
     */
    public function setSpyProductManagementAttributeValues(Collection $spyProductManagementAttributeValues, ConnectionInterface $con = null)
    {
        /** @var ChildSpyProductManagementAttributeValue[] $spyProductManagementAttributeValuesToDelete */
        $spyProductManagementAttributeValuesToDelete = $this->getSpyProductManagementAttributeValues(new Criteria(), $con)->diff($spyProductManagementAttributeValues);


        $this->spyProductManagementAttributeValuesScheduledForDeletion = $spyProductManagementAttributeValuesToDelete;

        foreach ($spyProductManagementAttributeValuesToDelete as $spyProductManagementAttributeValueRemoved) {
            $spyProductManagementAttributeValueRemoved->setSpyProductManagementAttribute(null);
        }

        $this->collSpyProductManagementAttributeValues = null;
        foreach ($spyProductManagementAttributeValues as $spyProductManagementAttributeValue) {
            $this->addSpyProductManagementAttributeValue($spyProductManagementAttributeValue);
        }

        $this->collSpyProductManagementAttributeValues = $spyProductManagementAttributeValues;
        $this->collSpyProductManagementAttributeValuesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyProductManagementAttributeValue objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyProductManagementAttributeValue objects.
     * @throws PropelException
     */
    public function countSpyProductManagementAttributeValues(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductManagementAttributeValuesPartial && !$this->isNew();
        if (null === $this->collSpyProductManagementAttributeValues || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductManagementAttributeValues) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductManagementAttributeValues());
            }

            $query = ChildSpyProductManagementAttributeValueQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProductManagementAttribute($this)
                ->count($con);
        }

        return count($this->collSpyProductManagementAttributeValues);
    }

    /**
     * Method called to associate a ChildSpyProductManagementAttributeValue object to this object
     * through the ChildSpyProductManagementAttributeValue foreign key attribute.
     *
     * @param  ChildSpyProductManagementAttributeValue $l ChildSpyProductManagementAttributeValue
     * @return $this|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute The current object (for fluent API support)
     */
    public function addSpyProductManagementAttributeValue(ChildSpyProductManagementAttributeValue $l)
    {
        if ($this->collSpyProductManagementAttributeValues === null) {
            $this->initSpyProductManagementAttributeValues();
            $this->collSpyProductManagementAttributeValuesPartial = true;
        }

        if (!$this->collSpyProductManagementAttributeValues->contains($l)) {
            $this->doAddSpyProductManagementAttributeValue($l);

            if ($this->spyProductManagementAttributeValuesScheduledForDeletion and $this->spyProductManagementAttributeValuesScheduledForDeletion->contains($l)) {
                $this->spyProductManagementAttributeValuesScheduledForDeletion->remove($this->spyProductManagementAttributeValuesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyProductManagementAttributeValue $spyProductManagementAttributeValue The ChildSpyProductManagementAttributeValue object to add.
     */
    protected function doAddSpyProductManagementAttributeValue(ChildSpyProductManagementAttributeValue $spyProductManagementAttributeValue)
    {
        $this->collSpyProductManagementAttributeValues[]= $spyProductManagementAttributeValue;
        $spyProductManagementAttributeValue->setSpyProductManagementAttribute($this);
    }

    /**
     * @param  ChildSpyProductManagementAttributeValue $spyProductManagementAttributeValue The ChildSpyProductManagementAttributeValue object to remove.
     * @return $this|ChildSpyProductManagementAttribute The current object (for fluent API support)
     */
    public function removeSpyProductManagementAttributeValue(ChildSpyProductManagementAttributeValue $spyProductManagementAttributeValue)
    {
        if ($this->getSpyProductManagementAttributeValues()->contains($spyProductManagementAttributeValue)) {
            $pos = $this->collSpyProductManagementAttributeValues->search($spyProductManagementAttributeValue);
            $this->collSpyProductManagementAttributeValues->remove($pos);
            if (null === $this->spyProductManagementAttributeValuesScheduledForDeletion) {
                $this->spyProductManagementAttributeValuesScheduledForDeletion = clone $this->collSpyProductManagementAttributeValues;
                $this->spyProductManagementAttributeValuesScheduledForDeletion->clear();
            }
            $this->spyProductManagementAttributeValuesScheduledForDeletion[]= clone $spyProductManagementAttributeValue;
            $spyProductManagementAttributeValue->setSpyProductManagementAttribute(null);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyProductAttributeKey) {
            $this->aSpyProductAttributeKey->removeSpyProductManagementAttribute($this);
        }
        $this->id_product_management_attribute = null;
        $this->fk_product_attribute_key = null;
        $this->allow_input = null;
        $this->input_type = null;
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
            if ($this->collSpyProductManagementAttributeValues) {
                foreach ($this->collSpyProductManagementAttributeValues as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyProductManagementAttributeValues = null;
        $this->aSpyProductAttributeKey = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyProductManagementAttributeTableMap::DEFAULT_STRING_FORMAT);
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
