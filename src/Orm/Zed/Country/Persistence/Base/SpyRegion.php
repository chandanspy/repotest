<?php

namespace Orm\Zed\Country\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery;
use Orm\Zed\CompanyUnitAddress\Persistence\Base\SpyCompanyUnitAddress as BaseSpyCompanyUnitAddress;
use Orm\Zed\CompanyUnitAddress\Persistence\Map\SpyCompanyUnitAddressTableMap;
use Orm\Zed\Country\Persistence\SpyCountry as ChildSpyCountry;
use Orm\Zed\Country\Persistence\SpyCountryQuery as ChildSpyCountryQuery;
use Orm\Zed\Country\Persistence\SpyRegion as ChildSpyRegion;
use Orm\Zed\Country\Persistence\SpyRegionQuery as ChildSpyRegionQuery;
use Orm\Zed\Country\Persistence\Map\SpyRegionTableMap;
use Orm\Zed\Customer\Persistence\SpyCustomerAddress;
use Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery;
use Orm\Zed\Customer\Persistence\Base\SpyCustomerAddress as BaseSpyCustomerAddress;
use Orm\Zed\Customer\Persistence\Map\SpyCustomerAddressTableMap;
use Orm\Zed\Sales\Persistence\SpySalesOrderAddress;
use Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory;
use Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery;
use Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery;
use Orm\Zed\Sales\Persistence\Base\SpySalesOrderAddress as BaseSpySalesOrderAddress;
use Orm\Zed\Sales\Persistence\Base\SpySalesOrderAddressHistory as BaseSpySalesOrderAddressHistory;
use Orm\Zed\Sales\Persistence\Map\SpySalesOrderAddressHistoryTableMap;
use Orm\Zed\Sales\Persistence\Map\SpySalesOrderAddressTableMap;
use Orm\Zed\StockAddress\Persistence\SpyStockAddress;
use Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery;
use Orm\Zed\StockAddress\Persistence\Base\SpyStockAddress as BaseSpyStockAddress;
use Orm\Zed\StockAddress\Persistence\Map\SpyStockAddressTableMap;
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
 * Base class that represents a row from the 'spy_region' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Country.Persistence.Base
 */
abstract class SpyRegion implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Country\\Persistence\\Map\\SpyRegionTableMap';


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
     * The value for the id_region field.
     *
     * @var        int
     */
    protected $id_region;

    /**
     * The value for the fk_country field.
     *
     * @var        int|null
     */
    protected $fk_country;

    /**
     * The value for the iso2_code field.
     *
     * @var        string
     */
    protected $iso2_code;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * @var        ChildSpyCountry
     */
    protected $aSpyCountry;

    /**
     * @var        ObjectCollection|SpyCompanyUnitAddress[] Collection to store aggregation of SpyCompanyUnitAddress objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUnitAddress> Collection to store aggregation of SpyCompanyUnitAddress objects.
     */
    protected $collCompanyUnitAddresses;
    protected $collCompanyUnitAddressesPartial;

    /**
     * @var        ObjectCollection|SpyCustomerAddress[] Collection to store aggregation of SpyCustomerAddress objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCustomerAddress> Collection to store aggregation of SpyCustomerAddress objects.
     */
    protected $collCustomerAddresses;
    protected $collCustomerAddressesPartial;

    /**
     * @var        ObjectCollection|SpySalesOrderAddress[] Collection to store aggregation of SpySalesOrderAddress objects.
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderAddress> Collection to store aggregation of SpySalesOrderAddress objects.
     */
    protected $collSalesOrderAddresses;
    protected $collSalesOrderAddressesPartial;

    /**
     * @var        ObjectCollection|SpySalesOrderAddressHistory[] Collection to store aggregation of SpySalesOrderAddressHistory objects.
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderAddressHistory> Collection to store aggregation of SpySalesOrderAddressHistory objects.
     */
    protected $collSalesOrderAddressHistories;
    protected $collSalesOrderAddressHistoriesPartial;

    /**
     * @var        ObjectCollection|SpyStockAddress[] Collection to store aggregation of SpyStockAddress objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyStockAddress> Collection to store aggregation of SpyStockAddress objects.
     */
    protected $collStockAddresses;
    protected $collStockAddressesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCompanyUnitAddress[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUnitAddress>
     */
    protected $companyUnitAddressesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCustomerAddress[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCustomerAddress>
     */
    protected $customerAddressesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpySalesOrderAddress[]
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderAddress>
     */
    protected $salesOrderAddressesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpySalesOrderAddressHistory[]
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderAddressHistory>
     */
    protected $salesOrderAddressHistoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyStockAddress[]
     * @phpstan-var ObjectCollection&\Traversable<SpyStockAddress>
     */
    protected $stockAddressesScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\Country\Persistence\Base\SpyRegion object.
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
     * Compares this with another <code>SpyRegion</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyRegion</code>, delegates to
     * <code>equals(SpyRegion)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_region] column value.
     *
     * @return int
     */
    public function getIdRegion()
    {
        return $this->id_region;
    }

    /**
     * Get the [fk_country] column value.
     *
     * @return int|null
     */
    public function getFkCountry()
    {
        return $this->fk_country;
    }

    /**
     * Get the [iso2_code] column value.
     *
     * @return string
     */
    public function getIso2Code()
    {
        return $this->iso2_code;
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
     * Set the value of [id_region] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function setIdRegion($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_region !== $v) {
            $this->id_region = $v;
            $this->modifiedColumns[SpyRegionTableMap::COL_ID_REGION] = true;
        }

        return $this;
    } // setIdRegion()

    /**
     * Set the value of [fk_country] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function setFkCountry($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_country !== $v) {
            $this->fk_country = $v;
            $this->modifiedColumns[SpyRegionTableMap::COL_FK_COUNTRY] = true;
        }

        if ($this->aSpyCountry !== null && $this->aSpyCountry->getIdCountry() !== $v) {
            $this->aSpyCountry = null;
        }

        return $this;
    } // setFkCountry()

    /**
     * Set the value of [iso2_code] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function setIso2Code($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->iso2_code !== $v) {
            $this->iso2_code = $v;
            $this->modifiedColumns[SpyRegionTableMap::COL_ISO2_CODE] = true;
        }

        return $this;
    } // setIso2Code()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
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
            $this->modifiedColumns[SpyRegionTableMap::COL_NAME] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyRegionTableMap::translateFieldName('IdRegion', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_region = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyRegionTableMap::translateFieldName('FkCountry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_country = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyRegionTableMap::translateFieldName('Iso2Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iso2_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyRegionTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = SpyRegionTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Country\\Persistence\\SpyRegion'), 0, $e);
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
        if ($this->aSpyCountry !== null && $this->fk_country !== $this->aSpyCountry->getIdCountry()) {
            $this->aSpyCountry = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyRegionTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyRegionQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyCountry = null;
            $this->collCompanyUnitAddresses = null;

            $this->collCustomerAddresses = null;

            $this->collSalesOrderAddresses = null;

            $this->collSalesOrderAddressHistories = null;

            $this->collStockAddresses = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyRegion::setDeleted()
     * @see SpyRegion::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyRegionTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyRegionQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyRegionTableMap::DATABASE_NAME);
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
                SpyRegionTableMap::addInstanceToPool($this);
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

            if ($this->aSpyCountry !== null) {
                if ($this->aSpyCountry->isModified() || $this->aSpyCountry->isNew()) {
                    $affectedRows += $this->aSpyCountry->save($con);
                }
                $this->setSpyCountry($this->aSpyCountry);
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

            if ($this->companyUnitAddressesScheduledForDeletion !== null) {
                if (!$this->companyUnitAddressesScheduledForDeletion->isEmpty()) {
                    foreach ($this->companyUnitAddressesScheduledForDeletion as $companyUnitAddress) {
                        // need to save related object because we set the relation to null
                        $companyUnitAddress->save($con);
                    }
                    $this->companyUnitAddressesScheduledForDeletion = null;
                }
            }

            if ($this->collCompanyUnitAddresses !== null) {
                foreach ($this->collCompanyUnitAddresses as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->customerAddressesScheduledForDeletion !== null) {
                if (!$this->customerAddressesScheduledForDeletion->isEmpty()) {
                    foreach ($this->customerAddressesScheduledForDeletion as $customerAddress) {
                        // need to save related object because we set the relation to null
                        $customerAddress->save($con);
                    }
                    $this->customerAddressesScheduledForDeletion = null;
                }
            }

            if ($this->collCustomerAddresses !== null) {
                foreach ($this->collCustomerAddresses as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesOrderAddressesScheduledForDeletion !== null) {
                if (!$this->salesOrderAddressesScheduledForDeletion->isEmpty()) {
                    foreach ($this->salesOrderAddressesScheduledForDeletion as $salesOrderAddress) {
                        // need to save related object because we set the relation to null
                        $salesOrderAddress->save($con);
                    }
                    $this->salesOrderAddressesScheduledForDeletion = null;
                }
            }

            if ($this->collSalesOrderAddresses !== null) {
                foreach ($this->collSalesOrderAddresses as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesOrderAddressHistoriesScheduledForDeletion !== null) {
                if (!$this->salesOrderAddressHistoriesScheduledForDeletion->isEmpty()) {
                    foreach ($this->salesOrderAddressHistoriesScheduledForDeletion as $salesOrderAddressHistory) {
                        // need to save related object because we set the relation to null
                        $salesOrderAddressHistory->save($con);
                    }
                    $this->salesOrderAddressHistoriesScheduledForDeletion = null;
                }
            }

            if ($this->collSalesOrderAddressHistories !== null) {
                foreach ($this->collSalesOrderAddressHistories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->stockAddressesScheduledForDeletion !== null) {
                if (!$this->stockAddressesScheduledForDeletion->isEmpty()) {
                    foreach ($this->stockAddressesScheduledForDeletion as $stockAddress) {
                        // need to save related object because we set the relation to null
                        $stockAddress->save($con);
                    }
                    $this->stockAddressesScheduledForDeletion = null;
                }
            }

            if ($this->collStockAddresses !== null) {
                foreach ($this->collStockAddresses as $referrerFK) {
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

        $this->modifiedColumns[SpyRegionTableMap::COL_ID_REGION] = true;
        if (null !== $this->id_region) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyRegionTableMap::COL_ID_REGION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyRegionTableMap::COL_ID_REGION)) {
            $modifiedColumns[':p' . $index++]  = 'id_region';
        }
        if ($this->isColumnModified(SpyRegionTableMap::COL_FK_COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = 'fk_country';
        }
        if ($this->isColumnModified(SpyRegionTableMap::COL_ISO2_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'iso2_code';
        }
        if ($this->isColumnModified(SpyRegionTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }

        $sql = sprintf(
            'INSERT INTO spy_region (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_region':
                        $stmt->bindValue($identifier, $this->id_region, PDO::PARAM_INT);
                        break;
                    case 'fk_country':
                        $stmt->bindValue($identifier, $this->fk_country, PDO::PARAM_INT);
                        break;
                    case 'iso2_code':
                        $stmt->bindValue($identifier, $this->iso2_code, PDO::PARAM_STR);
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
            $pk = $con->lastInsertId('spy_region_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdRegion($pk);

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
        $pos = SpyRegionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdRegion();
                break;
            case 1:
                return $this->getFkCountry();
                break;
            case 2:
                return $this->getIso2Code();
                break;
            case 3:
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

        if (isset($alreadyDumpedObjects['SpyRegion'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyRegion'][$this->hashCode()] = true;
        $keys = SpyRegionTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdRegion(),
            $keys[1] => $this->getFkCountry(),
            $keys[2] => $this->getIso2Code(),
            $keys[3] => $this->getName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyCountry) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCountry';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_country';
                        break;
                    default:
                        $key = 'SpyCountry';
                }

                $result[$key] = $this->aSpyCountry->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompanyUnitAddresses) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyUnitAddresses';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_unit_addresses';
                        break;
                    default:
                        $key = 'CompanyUnitAddresses';
                }

                $result[$key] = $this->collCompanyUnitAddresses->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCustomerAddresses) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCustomerAddresses';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_customer_addresses';
                        break;
                    default:
                        $key = 'CustomerAddresses';
                }

                $result[$key] = $this->collCustomerAddresses->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesOrderAddresses) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spySalesOrderAddresses';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_sales_order_addresses';
                        break;
                    default:
                        $key = 'SalesOrderAddresses';
                }

                $result[$key] = $this->collSalesOrderAddresses->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesOrderAddressHistories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spySalesOrderAddressHistories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_sales_order_address_histories';
                        break;
                    default:
                        $key = 'SalesOrderAddressHistories';
                }

                $result[$key] = $this->collSalesOrderAddressHistories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collStockAddresses) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStockAddresses';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_stock_addresses';
                        break;
                    default:
                        $key = 'StockAddresses';
                }

                $result[$key] = $this->collStockAddresses->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyRegionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdRegion($value);
                break;
            case 1:
                $this->setFkCountry($value);
                break;
            case 2:
                $this->setIso2Code($value);
                break;
            case 3:
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
     * @return     $this|\Orm\Zed\Country\Persistence\SpyRegion
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyRegionTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdRegion($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkCountry($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIso2Code($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setName($arr[$keys[3]]);
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
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object, for fluid interface
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
        $criteria = new Criteria(SpyRegionTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyRegionTableMap::COL_ID_REGION)) {
            $criteria->add(SpyRegionTableMap::COL_ID_REGION, $this->id_region);
        }
        if ($this->isColumnModified(SpyRegionTableMap::COL_FK_COUNTRY)) {
            $criteria->add(SpyRegionTableMap::COL_FK_COUNTRY, $this->fk_country);
        }
        if ($this->isColumnModified(SpyRegionTableMap::COL_ISO2_CODE)) {
            $criteria->add(SpyRegionTableMap::COL_ISO2_CODE, $this->iso2_code);
        }
        if ($this->isColumnModified(SpyRegionTableMap::COL_NAME)) {
            $criteria->add(SpyRegionTableMap::COL_NAME, $this->name);
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
        $criteria = ChildSpyRegionQuery::create();
        $criteria->add(SpyRegionTableMap::COL_ID_REGION, $this->id_region);

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
        $validPk = null !== $this->getIdRegion();

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
        return $this->getIdRegion();
    }

    /**
     * Generic method to set the primary key (id_region column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdRegion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdRegion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Country\Persistence\SpyRegion (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkCountry($this->getFkCountry());
        $copyObj->setIso2Code($this->getIso2Code());
        $copyObj->setName($this->getName());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getCompanyUnitAddresses() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompanyUnitAddress($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCustomerAddresses() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomerAddress($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrderAddresses() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderAddress($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrderAddressHistories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderAddressHistory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getStockAddresses() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addStockAddress($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdRegion(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Country\Persistence\SpyRegion Clone of current object.
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
     * Declares an association between this object and a ChildSpyCountry object.
     *
     * @param  ChildSpyCountry|null $v
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyCountry(ChildSpyCountry $v = null)
    {
        if ($v === null) {
            $this->setFkCountry(NULL);
        } else {
            $this->setFkCountry($v->getIdCountry());
        }

        $this->aSpyCountry = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyCountry object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyRegion($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyCountry object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyCountry|null The associated ChildSpyCountry object.
     * @throws PropelException
     */
    public function getSpyCountry(ConnectionInterface $con = null)
    {
        if ($this->aSpyCountry === null && ($this->fk_country != 0)) {
            $this->aSpyCountry = ChildSpyCountryQuery::create()->findPk($this->fk_country, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyCountry->addSpyRegions($this);
             */
        }

        return $this->aSpyCountry;
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
        if ('CompanyUnitAddress' === $relationName) {
            $this->initCompanyUnitAddresses();
            return;
        }
        if ('CustomerAddress' === $relationName) {
            $this->initCustomerAddresses();
            return;
        }
        if ('SalesOrderAddress' === $relationName) {
            $this->initSalesOrderAddresses();
            return;
        }
        if ('SalesOrderAddressHistory' === $relationName) {
            $this->initSalesOrderAddressHistories();
            return;
        }
        if ('StockAddress' === $relationName) {
            $this->initStockAddresses();
            return;
        }
    }

    /**
     * Clears out the collCompanyUnitAddresses collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCompanyUnitAddresses()
     */
    public function clearCompanyUnitAddresses()
    {
        $this->collCompanyUnitAddresses = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCompanyUnitAddresses collection loaded partially.
     */
    public function resetPartialCompanyUnitAddresses($v = true)
    {
        $this->collCompanyUnitAddressesPartial = $v;
    }

    /**
     * Initializes the collCompanyUnitAddresses collection.
     *
     * By default this just sets the collCompanyUnitAddresses collection to an empty array (like clearcollCompanyUnitAddresses());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompanyUnitAddresses($overrideExisting = true)
    {
        if (null !== $this->collCompanyUnitAddresses && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCompanyUnitAddressTableMap::getTableMap()->getCollectionClassName();

        $this->collCompanyUnitAddresses = new $collectionClassName;
        $this->collCompanyUnitAddresses->setModel('\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress');
    }

    /**
     * Gets an array of SpyCompanyUnitAddress objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyRegion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCompanyUnitAddress[] List of SpyCompanyUnitAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUnitAddress> List of SpyCompanyUnitAddress objects
     * @throws PropelException
     */
    public function getCompanyUnitAddresses(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCompanyUnitAddressesPartial && !$this->isNew();
        if (null === $this->collCompanyUnitAddresses || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collCompanyUnitAddresses) {
                    $this->initCompanyUnitAddresses();
                } else {
                    $collectionClassName = SpyCompanyUnitAddressTableMap::getTableMap()->getCollectionClassName();

                    $collCompanyUnitAddresses = new $collectionClassName;
                    $collCompanyUnitAddresses->setModel('\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress');

                    return $collCompanyUnitAddresses;
                }
            } else {
                $collCompanyUnitAddresses = SpyCompanyUnitAddressQuery::create(null, $criteria)
                    ->filterByRegion($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCompanyUnitAddressesPartial && count($collCompanyUnitAddresses)) {
                        $this->initCompanyUnitAddresses(false);

                        foreach ($collCompanyUnitAddresses as $obj) {
                            if (false == $this->collCompanyUnitAddresses->contains($obj)) {
                                $this->collCompanyUnitAddresses->append($obj);
                            }
                        }

                        $this->collCompanyUnitAddressesPartial = true;
                    }

                    return $collCompanyUnitAddresses;
                }

                if ($partial && $this->collCompanyUnitAddresses) {
                    foreach ($this->collCompanyUnitAddresses as $obj) {
                        if ($obj->isNew()) {
                            $collCompanyUnitAddresses[] = $obj;
                        }
                    }
                }

                $this->collCompanyUnitAddresses = $collCompanyUnitAddresses;
                $this->collCompanyUnitAddressesPartial = false;
            }
        }

        return $this->collCompanyUnitAddresses;
    }

    /**
     * Sets a collection of SpyCompanyUnitAddress objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $companyUnitAddresses A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function setCompanyUnitAddresses(Collection $companyUnitAddresses, ConnectionInterface $con = null)
    {
        /** @var SpyCompanyUnitAddress[] $companyUnitAddressesToDelete */
        $companyUnitAddressesToDelete = $this->getCompanyUnitAddresses(new Criteria(), $con)->diff($companyUnitAddresses);


        $this->companyUnitAddressesScheduledForDeletion = $companyUnitAddressesToDelete;

        foreach ($companyUnitAddressesToDelete as $companyUnitAddressRemoved) {
            $companyUnitAddressRemoved->setRegion(null);
        }

        $this->collCompanyUnitAddresses = null;
        foreach ($companyUnitAddresses as $companyUnitAddress) {
            $this->addCompanyUnitAddress($companyUnitAddress);
        }

        $this->collCompanyUnitAddresses = $companyUnitAddresses;
        $this->collCompanyUnitAddressesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCompanyUnitAddress objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCompanyUnitAddress objects.
     * @throws PropelException
     */
    public function countCompanyUnitAddresses(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCompanyUnitAddressesPartial && !$this->isNew();
        if (null === $this->collCompanyUnitAddresses || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompanyUnitAddresses) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompanyUnitAddresses());
            }

            $query = SpyCompanyUnitAddressQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRegion($this)
                ->count($con);
        }

        return count($this->collCompanyUnitAddresses);
    }

    /**
     * Method called to associate a SpyCompanyUnitAddress object to this object
     * through the SpyCompanyUnitAddress foreign key attribute.
     *
     * @param  SpyCompanyUnitAddress $l SpyCompanyUnitAddress
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function addCompanyUnitAddress(SpyCompanyUnitAddress $l)
    {
        if ($this->collCompanyUnitAddresses === null) {
            $this->initCompanyUnitAddresses();
            $this->collCompanyUnitAddressesPartial = true;
        }

        if (!$this->collCompanyUnitAddresses->contains($l)) {
            $this->doAddCompanyUnitAddress($l);

            if ($this->companyUnitAddressesScheduledForDeletion and $this->companyUnitAddressesScheduledForDeletion->contains($l)) {
                $this->companyUnitAddressesScheduledForDeletion->remove($this->companyUnitAddressesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCompanyUnitAddress $companyUnitAddress The SpyCompanyUnitAddress object to add.
     */
    protected function doAddCompanyUnitAddress(SpyCompanyUnitAddress $companyUnitAddress)
    {
        $this->collCompanyUnitAddresses[]= $companyUnitAddress;
        $companyUnitAddress->setRegion($this);
    }

    /**
     * @param  SpyCompanyUnitAddress $companyUnitAddress The SpyCompanyUnitAddress object to remove.
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function removeCompanyUnitAddress(SpyCompanyUnitAddress $companyUnitAddress)
    {
        if ($this->getCompanyUnitAddresses()->contains($companyUnitAddress)) {
            $pos = $this->collCompanyUnitAddresses->search($companyUnitAddress);
            $this->collCompanyUnitAddresses->remove($pos);
            if (null === $this->companyUnitAddressesScheduledForDeletion) {
                $this->companyUnitAddressesScheduledForDeletion = clone $this->collCompanyUnitAddresses;
                $this->companyUnitAddressesScheduledForDeletion->clear();
            }
            $this->companyUnitAddressesScheduledForDeletion[]= $companyUnitAddress;
            $companyUnitAddress->setRegion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related CompanyUnitAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUnitAddress[] List of SpyCompanyUnitAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUnitAddress}> List of SpyCompanyUnitAddress objects
     */
    public function getCompanyUnitAddressesJoinCountry(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUnitAddressQuery::create(null, $criteria);
        $query->joinWith('Country', $joinBehavior);

        return $this->getCompanyUnitAddresses($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related CompanyUnitAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUnitAddress[] List of SpyCompanyUnitAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUnitAddress}> List of SpyCompanyUnitAddress objects
     */
    public function getCompanyUnitAddressesJoinCompany(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUnitAddressQuery::create(null, $criteria);
        $query->joinWith('Company', $joinBehavior);

        return $this->getCompanyUnitAddresses($query, $con);
    }

    /**
     * Clears out the collCustomerAddresses collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCustomerAddresses()
     */
    public function clearCustomerAddresses()
    {
        $this->collCustomerAddresses = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCustomerAddresses collection loaded partially.
     */
    public function resetPartialCustomerAddresses($v = true)
    {
        $this->collCustomerAddressesPartial = $v;
    }

    /**
     * Initializes the collCustomerAddresses collection.
     *
     * By default this just sets the collCustomerAddresses collection to an empty array (like clearcollCustomerAddresses());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomerAddresses($overrideExisting = true)
    {
        if (null !== $this->collCustomerAddresses && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCustomerAddressTableMap::getTableMap()->getCollectionClassName();

        $this->collCustomerAddresses = new $collectionClassName;
        $this->collCustomerAddresses->setModel('\Orm\Zed\Customer\Persistence\SpyCustomerAddress');
    }

    /**
     * Gets an array of SpyCustomerAddress objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyRegion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCustomerAddress[] List of SpyCustomerAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomerAddress> List of SpyCustomerAddress objects
     * @throws PropelException
     */
    public function getCustomerAddresses(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomerAddressesPartial && !$this->isNew();
        if (null === $this->collCustomerAddresses || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collCustomerAddresses) {
                    $this->initCustomerAddresses();
                } else {
                    $collectionClassName = SpyCustomerAddressTableMap::getTableMap()->getCollectionClassName();

                    $collCustomerAddresses = new $collectionClassName;
                    $collCustomerAddresses->setModel('\Orm\Zed\Customer\Persistence\SpyCustomerAddress');

                    return $collCustomerAddresses;
                }
            } else {
                $collCustomerAddresses = SpyCustomerAddressQuery::create(null, $criteria)
                    ->filterByRegion($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCustomerAddressesPartial && count($collCustomerAddresses)) {
                        $this->initCustomerAddresses(false);

                        foreach ($collCustomerAddresses as $obj) {
                            if (false == $this->collCustomerAddresses->contains($obj)) {
                                $this->collCustomerAddresses->append($obj);
                            }
                        }

                        $this->collCustomerAddressesPartial = true;
                    }

                    return $collCustomerAddresses;
                }

                if ($partial && $this->collCustomerAddresses) {
                    foreach ($this->collCustomerAddresses as $obj) {
                        if ($obj->isNew()) {
                            $collCustomerAddresses[] = $obj;
                        }
                    }
                }

                $this->collCustomerAddresses = $collCustomerAddresses;
                $this->collCustomerAddressesPartial = false;
            }
        }

        return $this->collCustomerAddresses;
    }

    /**
     * Sets a collection of SpyCustomerAddress objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $customerAddresses A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function setCustomerAddresses(Collection $customerAddresses, ConnectionInterface $con = null)
    {
        /** @var SpyCustomerAddress[] $customerAddressesToDelete */
        $customerAddressesToDelete = $this->getCustomerAddresses(new Criteria(), $con)->diff($customerAddresses);


        $this->customerAddressesScheduledForDeletion = $customerAddressesToDelete;

        foreach ($customerAddressesToDelete as $customerAddressRemoved) {
            $customerAddressRemoved->setRegion(null);
        }

        $this->collCustomerAddresses = null;
        foreach ($customerAddresses as $customerAddress) {
            $this->addCustomerAddress($customerAddress);
        }

        $this->collCustomerAddresses = $customerAddresses;
        $this->collCustomerAddressesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCustomerAddress objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCustomerAddress objects.
     * @throws PropelException
     */
    public function countCustomerAddresses(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomerAddressesPartial && !$this->isNew();
        if (null === $this->collCustomerAddresses || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomerAddresses) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCustomerAddresses());
            }

            $query = SpyCustomerAddressQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRegion($this)
                ->count($con);
        }

        return count($this->collCustomerAddresses);
    }

    /**
     * Method called to associate a SpyCustomerAddress object to this object
     * through the SpyCustomerAddress foreign key attribute.
     *
     * @param  SpyCustomerAddress $l SpyCustomerAddress
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function addCustomerAddress(SpyCustomerAddress $l)
    {
        if ($this->collCustomerAddresses === null) {
            $this->initCustomerAddresses();
            $this->collCustomerAddressesPartial = true;
        }

        if (!$this->collCustomerAddresses->contains($l)) {
            $this->doAddCustomerAddress($l);

            if ($this->customerAddressesScheduledForDeletion and $this->customerAddressesScheduledForDeletion->contains($l)) {
                $this->customerAddressesScheduledForDeletion->remove($this->customerAddressesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCustomerAddress $customerAddress The SpyCustomerAddress object to add.
     */
    protected function doAddCustomerAddress(SpyCustomerAddress $customerAddress)
    {
        $this->collCustomerAddresses[]= $customerAddress;
        $customerAddress->setRegion($this);
    }

    /**
     * @param  SpyCustomerAddress $customerAddress The SpyCustomerAddress object to remove.
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function removeCustomerAddress(SpyCustomerAddress $customerAddress)
    {
        if ($this->getCustomerAddresses()->contains($customerAddress)) {
            $pos = $this->collCustomerAddresses->search($customerAddress);
            $this->collCustomerAddresses->remove($pos);
            if (null === $this->customerAddressesScheduledForDeletion) {
                $this->customerAddressesScheduledForDeletion = clone $this->collCustomerAddresses;
                $this->customerAddressesScheduledForDeletion->clear();
            }
            $this->customerAddressesScheduledForDeletion[]= $customerAddress;
            $customerAddress->setRegion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related CustomerAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCustomerAddress[] List of SpyCustomerAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomerAddress}> List of SpyCustomerAddress objects
     */
    public function getCustomerAddressesJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCustomerAddressQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getCustomerAddresses($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related CustomerAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCustomerAddress[] List of SpyCustomerAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomerAddress}> List of SpyCustomerAddress objects
     */
    public function getCustomerAddressesJoinCountry(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCustomerAddressQuery::create(null, $criteria);
        $query->joinWith('Country', $joinBehavior);

        return $this->getCustomerAddresses($query, $con);
    }

    /**
     * Clears out the collSalesOrderAddresses collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesOrderAddresses()
     */
    public function clearSalesOrderAddresses()
    {
        $this->collSalesOrderAddresses = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesOrderAddresses collection loaded partially.
     */
    public function resetPartialSalesOrderAddresses($v = true)
    {
        $this->collSalesOrderAddressesPartial = $v;
    }

    /**
     * Initializes the collSalesOrderAddresses collection.
     *
     * By default this just sets the collSalesOrderAddresses collection to an empty array (like clearcollSalesOrderAddresses());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesOrderAddresses($overrideExisting = true)
    {
        if (null !== $this->collSalesOrderAddresses && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpySalesOrderAddressTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesOrderAddresses = new $collectionClassName;
        $this->collSalesOrderAddresses->setModel('\Orm\Zed\Sales\Persistence\SpySalesOrderAddress');
    }

    /**
     * Gets an array of SpySalesOrderAddress objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyRegion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpySalesOrderAddress[] List of SpySalesOrderAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderAddress> List of SpySalesOrderAddress objects
     * @throws PropelException
     */
    public function getSalesOrderAddresses(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderAddressesPartial && !$this->isNew();
        if (null === $this->collSalesOrderAddresses || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSalesOrderAddresses) {
                    $this->initSalesOrderAddresses();
                } else {
                    $collectionClassName = SpySalesOrderAddressTableMap::getTableMap()->getCollectionClassName();

                    $collSalesOrderAddresses = new $collectionClassName;
                    $collSalesOrderAddresses->setModel('\Orm\Zed\Sales\Persistence\SpySalesOrderAddress');

                    return $collSalesOrderAddresses;
                }
            } else {
                $collSalesOrderAddresses = SpySalesOrderAddressQuery::create(null, $criteria)
                    ->filterByRegion($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesOrderAddressesPartial && count($collSalesOrderAddresses)) {
                        $this->initSalesOrderAddresses(false);

                        foreach ($collSalesOrderAddresses as $obj) {
                            if (false == $this->collSalesOrderAddresses->contains($obj)) {
                                $this->collSalesOrderAddresses->append($obj);
                            }
                        }

                        $this->collSalesOrderAddressesPartial = true;
                    }

                    return $collSalesOrderAddresses;
                }

                if ($partial && $this->collSalesOrderAddresses) {
                    foreach ($this->collSalesOrderAddresses as $obj) {
                        if ($obj->isNew()) {
                            $collSalesOrderAddresses[] = $obj;
                        }
                    }
                }

                $this->collSalesOrderAddresses = $collSalesOrderAddresses;
                $this->collSalesOrderAddressesPartial = false;
            }
        }

        return $this->collSalesOrderAddresses;
    }

    /**
     * Sets a collection of SpySalesOrderAddress objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesOrderAddresses A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function setSalesOrderAddresses(Collection $salesOrderAddresses, ConnectionInterface $con = null)
    {
        /** @var SpySalesOrderAddress[] $salesOrderAddressesToDelete */
        $salesOrderAddressesToDelete = $this->getSalesOrderAddresses(new Criteria(), $con)->diff($salesOrderAddresses);


        $this->salesOrderAddressesScheduledForDeletion = $salesOrderAddressesToDelete;

        foreach ($salesOrderAddressesToDelete as $salesOrderAddressRemoved) {
            $salesOrderAddressRemoved->setRegion(null);
        }

        $this->collSalesOrderAddresses = null;
        foreach ($salesOrderAddresses as $salesOrderAddress) {
            $this->addSalesOrderAddress($salesOrderAddress);
        }

        $this->collSalesOrderAddresses = $salesOrderAddresses;
        $this->collSalesOrderAddressesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpySalesOrderAddress objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpySalesOrderAddress objects.
     * @throws PropelException
     */
    public function countSalesOrderAddresses(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderAddressesPartial && !$this->isNew();
        if (null === $this->collSalesOrderAddresses || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderAddresses) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesOrderAddresses());
            }

            $query = SpySalesOrderAddressQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRegion($this)
                ->count($con);
        }

        return count($this->collSalesOrderAddresses);
    }

    /**
     * Method called to associate a SpySalesOrderAddress object to this object
     * through the SpySalesOrderAddress foreign key attribute.
     *
     * @param  SpySalesOrderAddress $l SpySalesOrderAddress
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function addSalesOrderAddress(SpySalesOrderAddress $l)
    {
        if ($this->collSalesOrderAddresses === null) {
            $this->initSalesOrderAddresses();
            $this->collSalesOrderAddressesPartial = true;
        }

        if (!$this->collSalesOrderAddresses->contains($l)) {
            $this->doAddSalesOrderAddress($l);

            if ($this->salesOrderAddressesScheduledForDeletion and $this->salesOrderAddressesScheduledForDeletion->contains($l)) {
                $this->salesOrderAddressesScheduledForDeletion->remove($this->salesOrderAddressesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpySalesOrderAddress $salesOrderAddress The SpySalesOrderAddress object to add.
     */
    protected function doAddSalesOrderAddress(SpySalesOrderAddress $salesOrderAddress)
    {
        $this->collSalesOrderAddresses[]= $salesOrderAddress;
        $salesOrderAddress->setRegion($this);
    }

    /**
     * @param  SpySalesOrderAddress $salesOrderAddress The SpySalesOrderAddress object to remove.
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function removeSalesOrderAddress(SpySalesOrderAddress $salesOrderAddress)
    {
        if ($this->getSalesOrderAddresses()->contains($salesOrderAddress)) {
            $pos = $this->collSalesOrderAddresses->search($salesOrderAddress);
            $this->collSalesOrderAddresses->remove($pos);
            if (null === $this->salesOrderAddressesScheduledForDeletion) {
                $this->salesOrderAddressesScheduledForDeletion = clone $this->collSalesOrderAddresses;
                $this->salesOrderAddressesScheduledForDeletion->clear();
            }
            $this->salesOrderAddressesScheduledForDeletion[]= $salesOrderAddress;
            $salesOrderAddress->setRegion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related SalesOrderAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderAddress[] List of SpySalesOrderAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderAddress}> List of SpySalesOrderAddress objects
     */
    public function getSalesOrderAddressesJoinCountry(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderAddressQuery::create(null, $criteria);
        $query->joinWith('Country', $joinBehavior);

        return $this->getSalesOrderAddresses($query, $con);
    }

    /**
     * Clears out the collSalesOrderAddressHistories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesOrderAddressHistories()
     */
    public function clearSalesOrderAddressHistories()
    {
        $this->collSalesOrderAddressHistories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesOrderAddressHistories collection loaded partially.
     */
    public function resetPartialSalesOrderAddressHistories($v = true)
    {
        $this->collSalesOrderAddressHistoriesPartial = $v;
    }

    /**
     * Initializes the collSalesOrderAddressHistories collection.
     *
     * By default this just sets the collSalesOrderAddressHistories collection to an empty array (like clearcollSalesOrderAddressHistories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesOrderAddressHistories($overrideExisting = true)
    {
        if (null !== $this->collSalesOrderAddressHistories && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpySalesOrderAddressHistoryTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesOrderAddressHistories = new $collectionClassName;
        $this->collSalesOrderAddressHistories->setModel('\Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory');
    }

    /**
     * Gets an array of SpySalesOrderAddressHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyRegion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpySalesOrderAddressHistory[] List of SpySalesOrderAddressHistory objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderAddressHistory> List of SpySalesOrderAddressHistory objects
     * @throws PropelException
     */
    public function getSalesOrderAddressHistories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderAddressHistoriesPartial && !$this->isNew();
        if (null === $this->collSalesOrderAddressHistories || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSalesOrderAddressHistories) {
                    $this->initSalesOrderAddressHistories();
                } else {
                    $collectionClassName = SpySalesOrderAddressHistoryTableMap::getTableMap()->getCollectionClassName();

                    $collSalesOrderAddressHistories = new $collectionClassName;
                    $collSalesOrderAddressHistories->setModel('\Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory');

                    return $collSalesOrderAddressHistories;
                }
            } else {
                $collSalesOrderAddressHistories = SpySalesOrderAddressHistoryQuery::create(null, $criteria)
                    ->filterByRegion($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesOrderAddressHistoriesPartial && count($collSalesOrderAddressHistories)) {
                        $this->initSalesOrderAddressHistories(false);

                        foreach ($collSalesOrderAddressHistories as $obj) {
                            if (false == $this->collSalesOrderAddressHistories->contains($obj)) {
                                $this->collSalesOrderAddressHistories->append($obj);
                            }
                        }

                        $this->collSalesOrderAddressHistoriesPartial = true;
                    }

                    return $collSalesOrderAddressHistories;
                }

                if ($partial && $this->collSalesOrderAddressHistories) {
                    foreach ($this->collSalesOrderAddressHistories as $obj) {
                        if ($obj->isNew()) {
                            $collSalesOrderAddressHistories[] = $obj;
                        }
                    }
                }

                $this->collSalesOrderAddressHistories = $collSalesOrderAddressHistories;
                $this->collSalesOrderAddressHistoriesPartial = false;
            }
        }

        return $this->collSalesOrderAddressHistories;
    }

    /**
     * Sets a collection of SpySalesOrderAddressHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesOrderAddressHistories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function setSalesOrderAddressHistories(Collection $salesOrderAddressHistories, ConnectionInterface $con = null)
    {
        /** @var SpySalesOrderAddressHistory[] $salesOrderAddressHistoriesToDelete */
        $salesOrderAddressHistoriesToDelete = $this->getSalesOrderAddressHistories(new Criteria(), $con)->diff($salesOrderAddressHistories);


        $this->salesOrderAddressHistoriesScheduledForDeletion = $salesOrderAddressHistoriesToDelete;

        foreach ($salesOrderAddressHistoriesToDelete as $salesOrderAddressHistoryRemoved) {
            $salesOrderAddressHistoryRemoved->setRegion(null);
        }

        $this->collSalesOrderAddressHistories = null;
        foreach ($salesOrderAddressHistories as $salesOrderAddressHistory) {
            $this->addSalesOrderAddressHistory($salesOrderAddressHistory);
        }

        $this->collSalesOrderAddressHistories = $salesOrderAddressHistories;
        $this->collSalesOrderAddressHistoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpySalesOrderAddressHistory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpySalesOrderAddressHistory objects.
     * @throws PropelException
     */
    public function countSalesOrderAddressHistories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderAddressHistoriesPartial && !$this->isNew();
        if (null === $this->collSalesOrderAddressHistories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderAddressHistories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesOrderAddressHistories());
            }

            $query = SpySalesOrderAddressHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRegion($this)
                ->count($con);
        }

        return count($this->collSalesOrderAddressHistories);
    }

    /**
     * Method called to associate a SpySalesOrderAddressHistory object to this object
     * through the SpySalesOrderAddressHistory foreign key attribute.
     *
     * @param  SpySalesOrderAddressHistory $l SpySalesOrderAddressHistory
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function addSalesOrderAddressHistory(SpySalesOrderAddressHistory $l)
    {
        if ($this->collSalesOrderAddressHistories === null) {
            $this->initSalesOrderAddressHistories();
            $this->collSalesOrderAddressHistoriesPartial = true;
        }

        if (!$this->collSalesOrderAddressHistories->contains($l)) {
            $this->doAddSalesOrderAddressHistory($l);

            if ($this->salesOrderAddressHistoriesScheduledForDeletion and $this->salesOrderAddressHistoriesScheduledForDeletion->contains($l)) {
                $this->salesOrderAddressHistoriesScheduledForDeletion->remove($this->salesOrderAddressHistoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpySalesOrderAddressHistory $salesOrderAddressHistory The SpySalesOrderAddressHistory object to add.
     */
    protected function doAddSalesOrderAddressHistory(SpySalesOrderAddressHistory $salesOrderAddressHistory)
    {
        $this->collSalesOrderAddressHistories[]= $salesOrderAddressHistory;
        $salesOrderAddressHistory->setRegion($this);
    }

    /**
     * @param  SpySalesOrderAddressHistory $salesOrderAddressHistory The SpySalesOrderAddressHistory object to remove.
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function removeSalesOrderAddressHistory(SpySalesOrderAddressHistory $salesOrderAddressHistory)
    {
        if ($this->getSalesOrderAddressHistories()->contains($salesOrderAddressHistory)) {
            $pos = $this->collSalesOrderAddressHistories->search($salesOrderAddressHistory);
            $this->collSalesOrderAddressHistories->remove($pos);
            if (null === $this->salesOrderAddressHistoriesScheduledForDeletion) {
                $this->salesOrderAddressHistoriesScheduledForDeletion = clone $this->collSalesOrderAddressHistories;
                $this->salesOrderAddressHistoriesScheduledForDeletion->clear();
            }
            $this->salesOrderAddressHistoriesScheduledForDeletion[]= $salesOrderAddressHistory;
            $salesOrderAddressHistory->setRegion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related SalesOrderAddressHistories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderAddressHistory[] List of SpySalesOrderAddressHistory objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderAddressHistory}> List of SpySalesOrderAddressHistory objects
     */
    public function getSalesOrderAddressHistoriesJoinCountry(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderAddressHistoryQuery::create(null, $criteria);
        $query->joinWith('Country', $joinBehavior);

        return $this->getSalesOrderAddressHistories($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related SalesOrderAddressHistories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderAddressHistory[] List of SpySalesOrderAddressHistory objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderAddressHistory}> List of SpySalesOrderAddressHistory objects
     */
    public function getSalesOrderAddressHistoriesJoinSalesOrderAddress(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderAddressHistoryQuery::create(null, $criteria);
        $query->joinWith('SalesOrderAddress', $joinBehavior);

        return $this->getSalesOrderAddressHistories($query, $con);
    }

    /**
     * Clears out the collStockAddresses collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addStockAddresses()
     */
    public function clearStockAddresses()
    {
        $this->collStockAddresses = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collStockAddresses collection loaded partially.
     */
    public function resetPartialStockAddresses($v = true)
    {
        $this->collStockAddressesPartial = $v;
    }

    /**
     * Initializes the collStockAddresses collection.
     *
     * By default this just sets the collStockAddresses collection to an empty array (like clearcollStockAddresses());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initStockAddresses($overrideExisting = true)
    {
        if (null !== $this->collStockAddresses && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyStockAddressTableMap::getTableMap()->getCollectionClassName();

        $this->collStockAddresses = new $collectionClassName;
        $this->collStockAddresses->setModel('\Orm\Zed\StockAddress\Persistence\SpyStockAddress');
    }

    /**
     * Gets an array of SpyStockAddress objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyRegion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyStockAddress[] List of SpyStockAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockAddress> List of SpyStockAddress objects
     * @throws PropelException
     */
    public function getStockAddresses(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collStockAddressesPartial && !$this->isNew();
        if (null === $this->collStockAddresses || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collStockAddresses) {
                    $this->initStockAddresses();
                } else {
                    $collectionClassName = SpyStockAddressTableMap::getTableMap()->getCollectionClassName();

                    $collStockAddresses = new $collectionClassName;
                    $collStockAddresses->setModel('\Orm\Zed\StockAddress\Persistence\SpyStockAddress');

                    return $collStockAddresses;
                }
            } else {
                $collStockAddresses = SpyStockAddressQuery::create(null, $criteria)
                    ->filterByRegion($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collStockAddressesPartial && count($collStockAddresses)) {
                        $this->initStockAddresses(false);

                        foreach ($collStockAddresses as $obj) {
                            if (false == $this->collStockAddresses->contains($obj)) {
                                $this->collStockAddresses->append($obj);
                            }
                        }

                        $this->collStockAddressesPartial = true;
                    }

                    return $collStockAddresses;
                }

                if ($partial && $this->collStockAddresses) {
                    foreach ($this->collStockAddresses as $obj) {
                        if ($obj->isNew()) {
                            $collStockAddresses[] = $obj;
                        }
                    }
                }

                $this->collStockAddresses = $collStockAddresses;
                $this->collStockAddressesPartial = false;
            }
        }

        return $this->collStockAddresses;
    }

    /**
     * Sets a collection of SpyStockAddress objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $stockAddresses A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function setStockAddresses(Collection $stockAddresses, ConnectionInterface $con = null)
    {
        /** @var SpyStockAddress[] $stockAddressesToDelete */
        $stockAddressesToDelete = $this->getStockAddresses(new Criteria(), $con)->diff($stockAddresses);


        $this->stockAddressesScheduledForDeletion = $stockAddressesToDelete;

        foreach ($stockAddressesToDelete as $stockAddressRemoved) {
            $stockAddressRemoved->setRegion(null);
        }

        $this->collStockAddresses = null;
        foreach ($stockAddresses as $stockAddress) {
            $this->addStockAddress($stockAddress);
        }

        $this->collStockAddresses = $stockAddresses;
        $this->collStockAddressesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyStockAddress objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyStockAddress objects.
     * @throws PropelException
     */
    public function countStockAddresses(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collStockAddressesPartial && !$this->isNew();
        if (null === $this->collStockAddresses || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collStockAddresses) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getStockAddresses());
            }

            $query = SpyStockAddressQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRegion($this)
                ->count($con);
        }

        return count($this->collStockAddresses);
    }

    /**
     * Method called to associate a SpyStockAddress object to this object
     * through the SpyStockAddress foreign key attribute.
     *
     * @param  SpyStockAddress $l SpyStockAddress
     * @return $this|\Orm\Zed\Country\Persistence\SpyRegion The current object (for fluent API support)
     */
    public function addStockAddress(SpyStockAddress $l)
    {
        if ($this->collStockAddresses === null) {
            $this->initStockAddresses();
            $this->collStockAddressesPartial = true;
        }

        if (!$this->collStockAddresses->contains($l)) {
            $this->doAddStockAddress($l);

            if ($this->stockAddressesScheduledForDeletion and $this->stockAddressesScheduledForDeletion->contains($l)) {
                $this->stockAddressesScheduledForDeletion->remove($this->stockAddressesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyStockAddress $stockAddress The SpyStockAddress object to add.
     */
    protected function doAddStockAddress(SpyStockAddress $stockAddress)
    {
        $this->collStockAddresses[]= $stockAddress;
        $stockAddress->setRegion($this);
    }

    /**
     * @param  SpyStockAddress $stockAddress The SpyStockAddress object to remove.
     * @return $this|ChildSpyRegion The current object (for fluent API support)
     */
    public function removeStockAddress(SpyStockAddress $stockAddress)
    {
        if ($this->getStockAddresses()->contains($stockAddress)) {
            $pos = $this->collStockAddresses->search($stockAddress);
            $this->collStockAddresses->remove($pos);
            if (null === $this->stockAddressesScheduledForDeletion) {
                $this->stockAddressesScheduledForDeletion = clone $this->collStockAddresses;
                $this->stockAddressesScheduledForDeletion->clear();
            }
            $this->stockAddressesScheduledForDeletion[]= $stockAddress;
            $stockAddress->setRegion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related StockAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyStockAddress[] List of SpyStockAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockAddress}> List of SpyStockAddress objects
     */
    public function getStockAddressesJoinStock(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyStockAddressQuery::create(null, $criteria);
        $query->joinWith('Stock', $joinBehavior);

        return $this->getStockAddresses($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyRegion is new, it will return
     * an empty collection; or if this SpyRegion has previously
     * been saved, it will retrieve related StockAddresses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyRegion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyStockAddress[] List of SpyStockAddress objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockAddress}> List of SpyStockAddress objects
     */
    public function getStockAddressesJoinCountry(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyStockAddressQuery::create(null, $criteria);
        $query->joinWith('Country', $joinBehavior);

        return $this->getStockAddresses($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyCountry) {
            $this->aSpyCountry->removeSpyRegion($this);
        }
        $this->id_region = null;
        $this->fk_country = null;
        $this->iso2_code = null;
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
            if ($this->collCompanyUnitAddresses) {
                foreach ($this->collCompanyUnitAddresses as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCustomerAddresses) {
                foreach ($this->collCustomerAddresses as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrderAddresses) {
                foreach ($this->collSalesOrderAddresses as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrderAddressHistories) {
                foreach ($this->collSalesOrderAddressHistories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collStockAddresses) {
                foreach ($this->collStockAddresses as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collCompanyUnitAddresses = null;
        $this->collCustomerAddresses = null;
        $this->collSalesOrderAddresses = null;
        $this->collSalesOrderAddressHistories = null;
        $this->collStockAddresses = null;
        $this->aSpyCountry = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyRegionTableMap::DEFAULT_STRING_FORMAT);
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
