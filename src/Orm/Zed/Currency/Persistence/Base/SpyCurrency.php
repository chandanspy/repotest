<?php

namespace Orm\Zed\Currency\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Currency\Persistence\SpyCurrency as ChildSpyCurrency;
use Orm\Zed\Currency\Persistence\SpyCurrencyQuery as ChildSpyCurrencyQuery;
use Orm\Zed\Currency\Persistence\Map\SpyCurrencyTableMap;
use Orm\Zed\Discount\Persistence\SpyDiscountAmount;
use Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery;
use Orm\Zed\Discount\Persistence\Base\SpyDiscountAmount as BaseSpyDiscountAmount;
use Orm\Zed\Discount\Persistence\Map\SpyDiscountAmountTableMap;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\Base\SpyMerchantRelationshipSalesOrderThreshold as BaseSpyMerchantRelationshipSalesOrderThreshold;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\Map\SpyMerchantRelationshipSalesOrderThresholdTableMap;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery;
use Orm\Zed\PriceProductSchedule\Persistence\Base\SpyPriceProductSchedule as BaseSpyPriceProductSchedule;
use Orm\Zed\PriceProductSchedule\Persistence\Map\SpyPriceProductScheduleTableMap;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery;
use Orm\Zed\PriceProduct\Persistence\Base\SpyPriceProductStore as BaseSpyPriceProductStore;
use Orm\Zed\PriceProduct\Persistence\Map\SpyPriceProductStoreTableMap;
use Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice;
use Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery;
use Orm\Zed\ProductOption\Persistence\Base\SpyProductOptionValuePrice as BaseSpyProductOptionValuePrice;
use Orm\Zed\ProductOption\Persistence\Map\SpyProductOptionValuePriceTableMap;
use Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold;
use Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery;
use Orm\Zed\SalesOrderThreshold\Persistence\Base\SpySalesOrderThreshold as BaseSpySalesOrderThreshold;
use Orm\Zed\SalesOrderThreshold\Persistence\Map\SpySalesOrderThresholdTableMap;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery;
use Orm\Zed\Shipment\Persistence\Base\SpyShipmentMethodPrice as BaseSpyShipmentMethodPrice;
use Orm\Zed\Shipment\Persistence\Map\SpyShipmentMethodPriceTableMap;
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
 * Base class that represents a row from the 'spy_currency' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Currency.Persistence.Base
 */
abstract class SpyCurrency implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Currency\\Persistence\\Map\\SpyCurrencyTableMap';


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
     * The value for the id_currency field.
     *
     * @var        int
     */
    protected $id_currency;

    /**
     * The value for the name field.
     *
     * @var        string|null
     */
    protected $name;

    /**
     * The value for the code field.
     *
     * @var        string|null
     */
    protected $code;

    /**
     * The value for the symbol field.
     *
     * @var        string|null
     */
    protected $symbol;

    /**
     * @var        ObjectCollection|SpyDiscountAmount[] Collection to store aggregation of SpyDiscountAmount objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyDiscountAmount> Collection to store aggregation of SpyDiscountAmount objects.
     */
    protected $collDiscountAmounts;
    protected $collDiscountAmountsPartial;

    /**
     * @var        ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[] Collection to store aggregation of SpyMerchantRelationshipSalesOrderThreshold objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold> Collection to store aggregation of SpyMerchantRelationshipSalesOrderThreshold objects.
     */
    protected $collSpyMerchantRelationshipSalesOrderThresholds;
    protected $collSpyMerchantRelationshipSalesOrderThresholdsPartial;

    /**
     * @var        ObjectCollection|SpyPriceProductStore[] Collection to store aggregation of SpyPriceProductStore objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductStore> Collection to store aggregation of SpyPriceProductStore objects.
     */
    protected $collPriceProductStores;
    protected $collPriceProductStoresPartial;

    /**
     * @var        ObjectCollection|SpyPriceProductSchedule[] Collection to store aggregation of SpyPriceProductSchedule objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductSchedule> Collection to store aggregation of SpyPriceProductSchedule objects.
     */
    protected $collPriceProductSchedules;
    protected $collPriceProductSchedulesPartial;

    /**
     * @var        ObjectCollection|SpyProductOptionValuePrice[] Collection to store aggregation of SpyProductOptionValuePrice objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductOptionValuePrice> Collection to store aggregation of SpyProductOptionValuePrice objects.
     */
    protected $collProductOptionValuePrices;
    protected $collProductOptionValuePricesPartial;

    /**
     * @var        ObjectCollection|SpySalesOrderThreshold[] Collection to store aggregation of SpySalesOrderThreshold objects.
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderThreshold> Collection to store aggregation of SpySalesOrderThreshold objects.
     */
    protected $collSpySalesOrderThresholds;
    protected $collSpySalesOrderThresholdsPartial;

    /**
     * @var        ObjectCollection|SpyShipmentMethodPrice[] Collection to store aggregation of SpyShipmentMethodPrice objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyShipmentMethodPrice> Collection to store aggregation of SpyShipmentMethodPrice objects.
     */
    protected $collShipmentMethodPrices;
    protected $collShipmentMethodPricesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyDiscountAmount[]
     * @phpstan-var ObjectCollection&\Traversable<SpyDiscountAmount>
     */
    protected $discountAmountsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[]
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold>
     */
    protected $spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProductStore[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductStore>
     */
    protected $priceProductStoresScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProductSchedule[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductSchedule>
     */
    protected $priceProductSchedulesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductOptionValuePrice[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductOptionValuePrice>
     */
    protected $productOptionValuePricesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpySalesOrderThreshold[]
     * @phpstan-var ObjectCollection&\Traversable<SpySalesOrderThreshold>
     */
    protected $spySalesOrderThresholdsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyShipmentMethodPrice[]
     * @phpstan-var ObjectCollection&\Traversable<SpyShipmentMethodPrice>
     */
    protected $shipmentMethodPricesScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\Currency\Persistence\Base\SpyCurrency object.
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
     * Compares this with another <code>SpyCurrency</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyCurrency</code>, delegates to
     * <code>equals(SpyCurrency)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_currency] column value.
     *
     * @return int
     */
    public function getIdCurrency()
    {
        return $this->id_currency;
    }

    /**
     * Get the [name] column value.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [code] column value.
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the [symbol] column value.
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set the value of [id_currency] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function setIdCurrency($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_currency !== $v) {
            $this->id_currency = $v;
            $this->modifiedColumns[SpyCurrencyTableMap::COL_ID_CURRENCY] = true;
        }

        return $this;
    } // setIdCurrency()

    /**
     * Set the value of [name] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCurrencyTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [code] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[SpyCurrencyTableMap::COL_CODE] = true;
        }

        return $this;
    } // setCode()

    /**
     * Set the value of [symbol] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function setSymbol($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->symbol !== $v) {
            $this->symbol = $v;
            $this->modifiedColumns[SpyCurrencyTableMap::COL_SYMBOL] = true;
        }

        return $this;
    } // setSymbol()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyCurrencyTableMap::translateFieldName('IdCurrency', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_currency = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyCurrencyTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyCurrencyTableMap::translateFieldName('Code', TableMap::TYPE_PHPNAME, $indexType)];
            $this->code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyCurrencyTableMap::translateFieldName('Symbol', TableMap::TYPE_PHPNAME, $indexType)];
            $this->symbol = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = SpyCurrencyTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Currency\\Persistence\\SpyCurrency'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyCurrencyTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyCurrencyQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collDiscountAmounts = null;

            $this->collSpyMerchantRelationshipSalesOrderThresholds = null;

            $this->collPriceProductStores = null;

            $this->collPriceProductSchedules = null;

            $this->collProductOptionValuePrices = null;

            $this->collSpySalesOrderThresholds = null;

            $this->collShipmentMethodPrices = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyCurrency::setDeleted()
     * @see SpyCurrency::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCurrencyTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyCurrencyQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCurrencyTableMap::DATABASE_NAME);
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
                SpyCurrencyTableMap::addInstanceToPool($this);
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

            if ($this->discountAmountsScheduledForDeletion !== null) {
                if (!$this->discountAmountsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery::create()
                        ->filterByPrimaryKeys($this->discountAmountsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->discountAmountsScheduledForDeletion = null;
                }
            }

            if ($this->collDiscountAmounts !== null) {
                foreach ($this->collDiscountAmounts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion !== null) {
                if (!$this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery::create()
                        ->filterByPrimaryKeys($this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyMerchantRelationshipSalesOrderThresholds !== null) {
                foreach ($this->collSpyMerchantRelationshipSalesOrderThresholds as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->priceProductStoresScheduledForDeletion !== null) {
                if (!$this->priceProductStoresScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery::create()
                        ->filterByPrimaryKeys($this->priceProductStoresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->priceProductStoresScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProductStores !== null) {
                foreach ($this->collPriceProductStores as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->priceProductSchedulesScheduledForDeletion !== null) {
                if (!$this->priceProductSchedulesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery::create()
                        ->filterByPrimaryKeys($this->priceProductSchedulesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->priceProductSchedulesScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProductSchedules !== null) {
                foreach ($this->collPriceProductSchedules as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productOptionValuePricesScheduledForDeletion !== null) {
                if (!$this->productOptionValuePricesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery::create()
                        ->filterByPrimaryKeys($this->productOptionValuePricesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productOptionValuePricesScheduledForDeletion = null;
                }
            }

            if ($this->collProductOptionValuePrices !== null) {
                foreach ($this->collProductOptionValuePrices as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spySalesOrderThresholdsScheduledForDeletion !== null) {
                if (!$this->spySalesOrderThresholdsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery::create()
                        ->filterByPrimaryKeys($this->spySalesOrderThresholdsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spySalesOrderThresholdsScheduledForDeletion = null;
                }
            }

            if ($this->collSpySalesOrderThresholds !== null) {
                foreach ($this->collSpySalesOrderThresholds as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->shipmentMethodPricesScheduledForDeletion !== null) {
                if (!$this->shipmentMethodPricesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery::create()
                        ->filterByPrimaryKeys($this->shipmentMethodPricesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->shipmentMethodPricesScheduledForDeletion = null;
                }
            }

            if ($this->collShipmentMethodPrices !== null) {
                foreach ($this->collShipmentMethodPrices as $referrerFK) {
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

        $this->modifiedColumns[SpyCurrencyTableMap::COL_ID_CURRENCY] = true;
        if (null !== $this->id_currency) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyCurrencyTableMap::COL_ID_CURRENCY . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyCurrencyTableMap::COL_ID_CURRENCY)) {
            $modifiedColumns[':p' . $index++]  = 'id_currency';
        }
        if ($this->isColumnModified(SpyCurrencyTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(SpyCurrencyTableMap::COL_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'code';
        }
        if ($this->isColumnModified(SpyCurrencyTableMap::COL_SYMBOL)) {
            $modifiedColumns[':p' . $index++]  = 'symbol';
        }

        $sql = sprintf(
            'INSERT INTO spy_currency (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_currency':
                        $stmt->bindValue($identifier, $this->id_currency, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'code':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case 'symbol':
                        $stmt->bindValue($identifier, $this->symbol, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_currency_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdCurrency($pk);

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
        $pos = SpyCurrencyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdCurrency();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getCode();
                break;
            case 3:
                return $this->getSymbol();
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

        if (isset($alreadyDumpedObjects['SpyCurrency'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyCurrency'][$this->hashCode()] = true;
        $keys = SpyCurrencyTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCurrency(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getCode(),
            $keys[3] => $this->getSymbol(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collDiscountAmounts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyDiscountAmounts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_discount_amounts';
                        break;
                    default:
                        $key = 'DiscountAmounts';
                }

                $result[$key] = $this->collDiscountAmounts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyMerchantRelationshipSalesOrderThresholds) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyMerchantRelationshipSalesOrderThresholds';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_merchant_relationship_sales_order_thresholds';
                        break;
                    default:
                        $key = 'SpyMerchantRelationshipSalesOrderThresholds';
                }

                $result[$key] = $this->collSpyMerchantRelationshipSalesOrderThresholds->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPriceProductStores) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProductStores';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product_stores';
                        break;
                    default:
                        $key = 'PriceProductStores';
                }

                $result[$key] = $this->collPriceProductStores->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPriceProductSchedules) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProductSchedules';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product_schedules';
                        break;
                    default:
                        $key = 'PriceProductSchedules';
                }

                $result[$key] = $this->collPriceProductSchedules->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductOptionValuePrices) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductOptionValuePrices';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_option_value_prices';
                        break;
                    default:
                        $key = 'ProductOptionValuePrices';
                }

                $result[$key] = $this->collProductOptionValuePrices->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpySalesOrderThresholds) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spySalesOrderThresholds';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_sales_order_thresholds';
                        break;
                    default:
                        $key = 'SpySalesOrderThresholds';
                }

                $result[$key] = $this->collSpySalesOrderThresholds->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collShipmentMethodPrices) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShipmentMethodPrices';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shipment_method_prices';
                        break;
                    default:
                        $key = 'ShipmentMethodPrices';
                }

                $result[$key] = $this->collShipmentMethodPrices->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCurrencyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdCurrency($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setCode($value);
                break;
            case 3:
                $this->setSymbol($value);
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
     * @return     $this|\Orm\Zed\Currency\Persistence\SpyCurrency
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyCurrencyTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCurrency($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCode($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setSymbol($arr[$keys[3]]);
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
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object, for fluid interface
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
        $criteria = new Criteria(SpyCurrencyTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyCurrencyTableMap::COL_ID_CURRENCY)) {
            $criteria->add(SpyCurrencyTableMap::COL_ID_CURRENCY, $this->id_currency);
        }
        if ($this->isColumnModified(SpyCurrencyTableMap::COL_NAME)) {
            $criteria->add(SpyCurrencyTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyCurrencyTableMap::COL_CODE)) {
            $criteria->add(SpyCurrencyTableMap::COL_CODE, $this->code);
        }
        if ($this->isColumnModified(SpyCurrencyTableMap::COL_SYMBOL)) {
            $criteria->add(SpyCurrencyTableMap::COL_SYMBOL, $this->symbol);
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
        $criteria = ChildSpyCurrencyQuery::create();
        $criteria->add(SpyCurrencyTableMap::COL_ID_CURRENCY, $this->id_currency);

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
        $validPk = null !== $this->getIdCurrency();

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
        return $this->getIdCurrency();
    }

    /**
     * Generic method to set the primary key (id_currency column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCurrency($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdCurrency();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Currency\Persistence\SpyCurrency (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setCode($this->getCode());
        $copyObj->setSymbol($this->getSymbol());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getDiscountAmounts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDiscountAmount($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyMerchantRelationshipSalesOrderThresholds() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyMerchantRelationshipSalesOrderThreshold($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPriceProductStores() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductStore($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPriceProductSchedules() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductSchedule($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductOptionValuePrices() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductOptionValuePrice($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpySalesOrderThresholds() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpySalesOrderThreshold($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getShipmentMethodPrices() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addShipmentMethodPrice($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCurrency(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Currency\Persistence\SpyCurrency Clone of current object.
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
        if ('DiscountAmount' === $relationName) {
            $this->initDiscountAmounts();
            return;
        }
        if ('SpyMerchantRelationshipSalesOrderThreshold' === $relationName) {
            $this->initSpyMerchantRelationshipSalesOrderThresholds();
            return;
        }
        if ('PriceProductStore' === $relationName) {
            $this->initPriceProductStores();
            return;
        }
        if ('PriceProductSchedule' === $relationName) {
            $this->initPriceProductSchedules();
            return;
        }
        if ('ProductOptionValuePrice' === $relationName) {
            $this->initProductOptionValuePrices();
            return;
        }
        if ('SpySalesOrderThreshold' === $relationName) {
            $this->initSpySalesOrderThresholds();
            return;
        }
        if ('ShipmentMethodPrice' === $relationName) {
            $this->initShipmentMethodPrices();
            return;
        }
    }

    /**
     * Clears out the collDiscountAmounts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addDiscountAmounts()
     */
    public function clearDiscountAmounts()
    {
        $this->collDiscountAmounts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collDiscountAmounts collection loaded partially.
     */
    public function resetPartialDiscountAmounts($v = true)
    {
        $this->collDiscountAmountsPartial = $v;
    }

    /**
     * Initializes the collDiscountAmounts collection.
     *
     * By default this just sets the collDiscountAmounts collection to an empty array (like clearcollDiscountAmounts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDiscountAmounts($overrideExisting = true)
    {
        if (null !== $this->collDiscountAmounts && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyDiscountAmountTableMap::getTableMap()->getCollectionClassName();

        $this->collDiscountAmounts = new $collectionClassName;
        $this->collDiscountAmounts->setModel('\Orm\Zed\Discount\Persistence\SpyDiscountAmount');
    }

    /**
     * Gets an array of SpyDiscountAmount objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCurrency is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyDiscountAmount[] List of SpyDiscountAmount objects
     * @phpstan-return ObjectCollection&\Traversable<SpyDiscountAmount> List of SpyDiscountAmount objects
     * @throws PropelException
     */
    public function getDiscountAmounts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collDiscountAmountsPartial && !$this->isNew();
        if (null === $this->collDiscountAmounts || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collDiscountAmounts) {
                    $this->initDiscountAmounts();
                } else {
                    $collectionClassName = SpyDiscountAmountTableMap::getTableMap()->getCollectionClassName();

                    $collDiscountAmounts = new $collectionClassName;
                    $collDiscountAmounts->setModel('\Orm\Zed\Discount\Persistence\SpyDiscountAmount');

                    return $collDiscountAmounts;
                }
            } else {
                $collDiscountAmounts = SpyDiscountAmountQuery::create(null, $criteria)
                    ->filterByCurrency($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collDiscountAmountsPartial && count($collDiscountAmounts)) {
                        $this->initDiscountAmounts(false);

                        foreach ($collDiscountAmounts as $obj) {
                            if (false == $this->collDiscountAmounts->contains($obj)) {
                                $this->collDiscountAmounts->append($obj);
                            }
                        }

                        $this->collDiscountAmountsPartial = true;
                    }

                    return $collDiscountAmounts;
                }

                if ($partial && $this->collDiscountAmounts) {
                    foreach ($this->collDiscountAmounts as $obj) {
                        if ($obj->isNew()) {
                            $collDiscountAmounts[] = $obj;
                        }
                    }
                }

                $this->collDiscountAmounts = $collDiscountAmounts;
                $this->collDiscountAmountsPartial = false;
            }
        }

        return $this->collDiscountAmounts;
    }

    /**
     * Sets a collection of SpyDiscountAmount objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $discountAmounts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function setDiscountAmounts(Collection $discountAmounts, ConnectionInterface $con = null)
    {
        /** @var SpyDiscountAmount[] $discountAmountsToDelete */
        $discountAmountsToDelete = $this->getDiscountAmounts(new Criteria(), $con)->diff($discountAmounts);


        $this->discountAmountsScheduledForDeletion = $discountAmountsToDelete;

        foreach ($discountAmountsToDelete as $discountAmountRemoved) {
            $discountAmountRemoved->setCurrency(null);
        }

        $this->collDiscountAmounts = null;
        foreach ($discountAmounts as $discountAmount) {
            $this->addDiscountAmount($discountAmount);
        }

        $this->collDiscountAmounts = $discountAmounts;
        $this->collDiscountAmountsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyDiscountAmount objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyDiscountAmount objects.
     * @throws PropelException
     */
    public function countDiscountAmounts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collDiscountAmountsPartial && !$this->isNew();
        if (null === $this->collDiscountAmounts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDiscountAmounts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDiscountAmounts());
            }

            $query = SpyDiscountAmountQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCurrency($this)
                ->count($con);
        }

        return count($this->collDiscountAmounts);
    }

    /**
     * Method called to associate a SpyDiscountAmount object to this object
     * through the SpyDiscountAmount foreign key attribute.
     *
     * @param  SpyDiscountAmount $l SpyDiscountAmount
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function addDiscountAmount(SpyDiscountAmount $l)
    {
        if ($this->collDiscountAmounts === null) {
            $this->initDiscountAmounts();
            $this->collDiscountAmountsPartial = true;
        }

        if (!$this->collDiscountAmounts->contains($l)) {
            $this->doAddDiscountAmount($l);

            if ($this->discountAmountsScheduledForDeletion and $this->discountAmountsScheduledForDeletion->contains($l)) {
                $this->discountAmountsScheduledForDeletion->remove($this->discountAmountsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyDiscountAmount $discountAmount The SpyDiscountAmount object to add.
     */
    protected function doAddDiscountAmount(SpyDiscountAmount $discountAmount)
    {
        $this->collDiscountAmounts[]= $discountAmount;
        $discountAmount->setCurrency($this);
    }

    /**
     * @param  SpyDiscountAmount $discountAmount The SpyDiscountAmount object to remove.
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function removeDiscountAmount(SpyDiscountAmount $discountAmount)
    {
        if ($this->getDiscountAmounts()->contains($discountAmount)) {
            $pos = $this->collDiscountAmounts->search($discountAmount);
            $this->collDiscountAmounts->remove($pos);
            if (null === $this->discountAmountsScheduledForDeletion) {
                $this->discountAmountsScheduledForDeletion = clone $this->collDiscountAmounts;
                $this->discountAmountsScheduledForDeletion->clear();
            }
            $this->discountAmountsScheduledForDeletion[]= clone $discountAmount;
            $discountAmount->setCurrency(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related DiscountAmounts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyDiscountAmount[] List of SpyDiscountAmount objects
     * @phpstan-return ObjectCollection&\Traversable<SpyDiscountAmount}> List of SpyDiscountAmount objects
     */
    public function getDiscountAmountsJoinDiscount(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyDiscountAmountQuery::create(null, $criteria);
        $query->joinWith('Discount', $joinBehavior);

        return $this->getDiscountAmounts($query, $con);
    }

    /**
     * Clears out the collSpyMerchantRelationshipSalesOrderThresholds collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyMerchantRelationshipSalesOrderThresholds()
     */
    public function clearSpyMerchantRelationshipSalesOrderThresholds()
    {
        $this->collSpyMerchantRelationshipSalesOrderThresholds = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyMerchantRelationshipSalesOrderThresholds collection loaded partially.
     */
    public function resetPartialSpyMerchantRelationshipSalesOrderThresholds($v = true)
    {
        $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial = $v;
    }

    /**
     * Initializes the collSpyMerchantRelationshipSalesOrderThresholds collection.
     *
     * By default this just sets the collSpyMerchantRelationshipSalesOrderThresholds collection to an empty array (like clearcollSpyMerchantRelationshipSalesOrderThresholds());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyMerchantRelationshipSalesOrderThresholds($overrideExisting = true)
    {
        if (null !== $this->collSpyMerchantRelationshipSalesOrderThresholds && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyMerchantRelationshipSalesOrderThresholdTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyMerchantRelationshipSalesOrderThresholds = new $collectionClassName;
        $this->collSpyMerchantRelationshipSalesOrderThresholds->setModel('\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold');
    }

    /**
     * Gets an array of SpyMerchantRelationshipSalesOrderThreshold objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCurrency is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[] List of SpyMerchantRelationshipSalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold> List of SpyMerchantRelationshipSalesOrderThreshold objects
     * @throws PropelException
     */
    public function getSpyMerchantRelationshipSalesOrderThresholds(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationshipSalesOrderThresholds || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyMerchantRelationshipSalesOrderThresholds) {
                    $this->initSpyMerchantRelationshipSalesOrderThresholds();
                } else {
                    $collectionClassName = SpyMerchantRelationshipSalesOrderThresholdTableMap::getTableMap()->getCollectionClassName();

                    $collSpyMerchantRelationshipSalesOrderThresholds = new $collectionClassName;
                    $collSpyMerchantRelationshipSalesOrderThresholds->setModel('\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold');

                    return $collSpyMerchantRelationshipSalesOrderThresholds;
                }
            } else {
                $collSpyMerchantRelationshipSalesOrderThresholds = SpyMerchantRelationshipSalesOrderThresholdQuery::create(null, $criteria)
                    ->filterByCurrency($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial && count($collSpyMerchantRelationshipSalesOrderThresholds)) {
                        $this->initSpyMerchantRelationshipSalesOrderThresholds(false);

                        foreach ($collSpyMerchantRelationshipSalesOrderThresholds as $obj) {
                            if (false == $this->collSpyMerchantRelationshipSalesOrderThresholds->contains($obj)) {
                                $this->collSpyMerchantRelationshipSalesOrderThresholds->append($obj);
                            }
                        }

                        $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial = true;
                    }

                    return $collSpyMerchantRelationshipSalesOrderThresholds;
                }

                if ($partial && $this->collSpyMerchantRelationshipSalesOrderThresholds) {
                    foreach ($this->collSpyMerchantRelationshipSalesOrderThresholds as $obj) {
                        if ($obj->isNew()) {
                            $collSpyMerchantRelationshipSalesOrderThresholds[] = $obj;
                        }
                    }
                }

                $this->collSpyMerchantRelationshipSalesOrderThresholds = $collSpyMerchantRelationshipSalesOrderThresholds;
                $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial = false;
            }
        }

        return $this->collSpyMerchantRelationshipSalesOrderThresholds;
    }

    /**
     * Sets a collection of SpyMerchantRelationshipSalesOrderThreshold objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyMerchantRelationshipSalesOrderThresholds A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function setSpyMerchantRelationshipSalesOrderThresholds(Collection $spyMerchantRelationshipSalesOrderThresholds, ConnectionInterface $con = null)
    {
        /** @var SpyMerchantRelationshipSalesOrderThreshold[] $spyMerchantRelationshipSalesOrderThresholdsToDelete */
        $spyMerchantRelationshipSalesOrderThresholdsToDelete = $this->getSpyMerchantRelationshipSalesOrderThresholds(new Criteria(), $con)->diff($spyMerchantRelationshipSalesOrderThresholds);


        $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion = $spyMerchantRelationshipSalesOrderThresholdsToDelete;

        foreach ($spyMerchantRelationshipSalesOrderThresholdsToDelete as $spyMerchantRelationshipSalesOrderThresholdRemoved) {
            $spyMerchantRelationshipSalesOrderThresholdRemoved->setCurrency(null);
        }

        $this->collSpyMerchantRelationshipSalesOrderThresholds = null;
        foreach ($spyMerchantRelationshipSalesOrderThresholds as $spyMerchantRelationshipSalesOrderThreshold) {
            $this->addSpyMerchantRelationshipSalesOrderThreshold($spyMerchantRelationshipSalesOrderThreshold);
        }

        $this->collSpyMerchantRelationshipSalesOrderThresholds = $spyMerchantRelationshipSalesOrderThresholds;
        $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyMerchantRelationshipSalesOrderThreshold objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyMerchantRelationshipSalesOrderThreshold objects.
     * @throws PropelException
     */
    public function countSpyMerchantRelationshipSalesOrderThresholds(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationshipSalesOrderThresholds || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyMerchantRelationshipSalesOrderThresholds) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyMerchantRelationshipSalesOrderThresholds());
            }

            $query = SpyMerchantRelationshipSalesOrderThresholdQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCurrency($this)
                ->count($con);
        }

        return count($this->collSpyMerchantRelationshipSalesOrderThresholds);
    }

    /**
     * Method called to associate a SpyMerchantRelationshipSalesOrderThreshold object to this object
     * through the SpyMerchantRelationshipSalesOrderThreshold foreign key attribute.
     *
     * @param  SpyMerchantRelationshipSalesOrderThreshold $l SpyMerchantRelationshipSalesOrderThreshold
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function addSpyMerchantRelationshipSalesOrderThreshold(SpyMerchantRelationshipSalesOrderThreshold $l)
    {
        if ($this->collSpyMerchantRelationshipSalesOrderThresholds === null) {
            $this->initSpyMerchantRelationshipSalesOrderThresholds();
            $this->collSpyMerchantRelationshipSalesOrderThresholdsPartial = true;
        }

        if (!$this->collSpyMerchantRelationshipSalesOrderThresholds->contains($l)) {
            $this->doAddSpyMerchantRelationshipSalesOrderThreshold($l);

            if ($this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion and $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion->contains($l)) {
                $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion->remove($this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyMerchantRelationshipSalesOrderThreshold $spyMerchantRelationshipSalesOrderThreshold The SpyMerchantRelationshipSalesOrderThreshold object to add.
     */
    protected function doAddSpyMerchantRelationshipSalesOrderThreshold(SpyMerchantRelationshipSalesOrderThreshold $spyMerchantRelationshipSalesOrderThreshold)
    {
        $this->collSpyMerchantRelationshipSalesOrderThresholds[]= $spyMerchantRelationshipSalesOrderThreshold;
        $spyMerchantRelationshipSalesOrderThreshold->setCurrency($this);
    }

    /**
     * @param  SpyMerchantRelationshipSalesOrderThreshold $spyMerchantRelationshipSalesOrderThreshold The SpyMerchantRelationshipSalesOrderThreshold object to remove.
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function removeSpyMerchantRelationshipSalesOrderThreshold(SpyMerchantRelationshipSalesOrderThreshold $spyMerchantRelationshipSalesOrderThreshold)
    {
        if ($this->getSpyMerchantRelationshipSalesOrderThresholds()->contains($spyMerchantRelationshipSalesOrderThreshold)) {
            $pos = $this->collSpyMerchantRelationshipSalesOrderThresholds->search($spyMerchantRelationshipSalesOrderThreshold);
            $this->collSpyMerchantRelationshipSalesOrderThresholds->remove($pos);
            if (null === $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion) {
                $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion = clone $this->collSpyMerchantRelationshipSalesOrderThresholds;
                $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion->clear();
            }
            $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion[]= clone $spyMerchantRelationshipSalesOrderThreshold;
            $spyMerchantRelationshipSalesOrderThreshold->setCurrency(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related SpyMerchantRelationshipSalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[] List of SpyMerchantRelationshipSalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold}> List of SpyMerchantRelationshipSalesOrderThreshold objects
     */
    public function getSpyMerchantRelationshipSalesOrderThresholdsJoinMerchantRelationship(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyMerchantRelationshipSalesOrderThresholdQuery::create(null, $criteria);
        $query->joinWith('MerchantRelationship', $joinBehavior);

        return $this->getSpyMerchantRelationshipSalesOrderThresholds($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related SpyMerchantRelationshipSalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[] List of SpyMerchantRelationshipSalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold}> List of SpyMerchantRelationshipSalesOrderThreshold objects
     */
    public function getSpyMerchantRelationshipSalesOrderThresholdsJoinSalesOrderThresholdType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyMerchantRelationshipSalesOrderThresholdQuery::create(null, $criteria);
        $query->joinWith('SalesOrderThresholdType', $joinBehavior);

        return $this->getSpyMerchantRelationshipSalesOrderThresholds($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related SpyMerchantRelationshipSalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[] List of SpyMerchantRelationshipSalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold}> List of SpyMerchantRelationshipSalesOrderThreshold objects
     */
    public function getSpyMerchantRelationshipSalesOrderThresholdsJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyMerchantRelationshipSalesOrderThresholdQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getSpyMerchantRelationshipSalesOrderThresholds($query, $con);
    }

    /**
     * Clears out the collPriceProductStores collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProductStores()
     */
    public function clearPriceProductStores()
    {
        $this->collPriceProductStores = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProductStores collection loaded partially.
     */
    public function resetPartialPriceProductStores($v = true)
    {
        $this->collPriceProductStoresPartial = $v;
    }

    /**
     * Initializes the collPriceProductStores collection.
     *
     * By default this just sets the collPriceProductStores collection to an empty array (like clearcollPriceProductStores());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProductStores($overrideExisting = true)
    {
        if (null !== $this->collPriceProductStores && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductStoreTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProductStores = new $collectionClassName;
        $this->collPriceProductStores->setModel('\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore');
    }

    /**
     * Gets an array of SpyPriceProductStore objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCurrency is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyPriceProductStore[] List of SpyPriceProductStore objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductStore> List of SpyPriceProductStore objects
     * @throws PropelException
     */
    public function getPriceProductStores(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductStoresPartial && !$this->isNew();
        if (null === $this->collPriceProductStores || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProductStores) {
                    $this->initPriceProductStores();
                } else {
                    $collectionClassName = SpyPriceProductStoreTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProductStores = new $collectionClassName;
                    $collPriceProductStores->setModel('\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore');

                    return $collPriceProductStores;
                }
            } else {
                $collPriceProductStores = SpyPriceProductStoreQuery::create(null, $criteria)
                    ->filterByCurrency($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductStoresPartial && count($collPriceProductStores)) {
                        $this->initPriceProductStores(false);

                        foreach ($collPriceProductStores as $obj) {
                            if (false == $this->collPriceProductStores->contains($obj)) {
                                $this->collPriceProductStores->append($obj);
                            }
                        }

                        $this->collPriceProductStoresPartial = true;
                    }

                    return $collPriceProductStores;
                }

                if ($partial && $this->collPriceProductStores) {
                    foreach ($this->collPriceProductStores as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProductStores[] = $obj;
                        }
                    }
                }

                $this->collPriceProductStores = $collPriceProductStores;
                $this->collPriceProductStoresPartial = false;
            }
        }

        return $this->collPriceProductStores;
    }

    /**
     * Sets a collection of SpyPriceProductStore objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProductStores A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function setPriceProductStores(Collection $priceProductStores, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProductStore[] $priceProductStoresToDelete */
        $priceProductStoresToDelete = $this->getPriceProductStores(new Criteria(), $con)->diff($priceProductStores);


        $this->priceProductStoresScheduledForDeletion = $priceProductStoresToDelete;

        foreach ($priceProductStoresToDelete as $priceProductStoreRemoved) {
            $priceProductStoreRemoved->setCurrency(null);
        }

        $this->collPriceProductStores = null;
        foreach ($priceProductStores as $priceProductStore) {
            $this->addPriceProductStore($priceProductStore);
        }

        $this->collPriceProductStores = $priceProductStores;
        $this->collPriceProductStoresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyPriceProductStore objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyPriceProductStore objects.
     * @throws PropelException
     */
    public function countPriceProductStores(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductStoresPartial && !$this->isNew();
        if (null === $this->collPriceProductStores || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProductStores) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProductStores());
            }

            $query = SpyPriceProductStoreQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCurrency($this)
                ->count($con);
        }

        return count($this->collPriceProductStores);
    }

    /**
     * Method called to associate a SpyPriceProductStore object to this object
     * through the SpyPriceProductStore foreign key attribute.
     *
     * @param  SpyPriceProductStore $l SpyPriceProductStore
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function addPriceProductStore(SpyPriceProductStore $l)
    {
        if ($this->collPriceProductStores === null) {
            $this->initPriceProductStores();
            $this->collPriceProductStoresPartial = true;
        }

        if (!$this->collPriceProductStores->contains($l)) {
            $this->doAddPriceProductStore($l);

            if ($this->priceProductStoresScheduledForDeletion and $this->priceProductStoresScheduledForDeletion->contains($l)) {
                $this->priceProductStoresScheduledForDeletion->remove($this->priceProductStoresScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyPriceProductStore $priceProductStore The SpyPriceProductStore object to add.
     */
    protected function doAddPriceProductStore(SpyPriceProductStore $priceProductStore)
    {
        $this->collPriceProductStores[]= $priceProductStore;
        $priceProductStore->setCurrency($this);
    }

    /**
     * @param  SpyPriceProductStore $priceProductStore The SpyPriceProductStore object to remove.
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function removePriceProductStore(SpyPriceProductStore $priceProductStore)
    {
        if ($this->getPriceProductStores()->contains($priceProductStore)) {
            $pos = $this->collPriceProductStores->search($priceProductStore);
            $this->collPriceProductStores->remove($pos);
            if (null === $this->priceProductStoresScheduledForDeletion) {
                $this->priceProductStoresScheduledForDeletion = clone $this->collPriceProductStores;
                $this->priceProductStoresScheduledForDeletion->clear();
            }
            $this->priceProductStoresScheduledForDeletion[]= clone $priceProductStore;
            $priceProductStore->setCurrency(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related PriceProductStores from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductStore[] List of SpyPriceProductStore objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductStore}> List of SpyPriceProductStore objects
     */
    public function getPriceProductStoresJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductStoreQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getPriceProductStores($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related PriceProductStores from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductStore[] List of SpyPriceProductStore objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductStore}> List of SpyPriceProductStore objects
     */
    public function getPriceProductStoresJoinPriceProduct(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductStoreQuery::create(null, $criteria);
        $query->joinWith('PriceProduct', $joinBehavior);

        return $this->getPriceProductStores($query, $con);
    }

    /**
     * Clears out the collPriceProductSchedules collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProductSchedules()
     */
    public function clearPriceProductSchedules()
    {
        $this->collPriceProductSchedules = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProductSchedules collection loaded partially.
     */
    public function resetPartialPriceProductSchedules($v = true)
    {
        $this->collPriceProductSchedulesPartial = $v;
    }

    /**
     * Initializes the collPriceProductSchedules collection.
     *
     * By default this just sets the collPriceProductSchedules collection to an empty array (like clearcollPriceProductSchedules());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProductSchedules($overrideExisting = true)
    {
        if (null !== $this->collPriceProductSchedules && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductScheduleTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProductSchedules = new $collectionClassName;
        $this->collPriceProductSchedules->setModel('\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule');
    }

    /**
     * Gets an array of SpyPriceProductSchedule objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCurrency is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule> List of SpyPriceProductSchedule objects
     * @throws PropelException
     */
    public function getPriceProductSchedules(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductSchedulesPartial && !$this->isNew();
        if (null === $this->collPriceProductSchedules || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProductSchedules) {
                    $this->initPriceProductSchedules();
                } else {
                    $collectionClassName = SpyPriceProductScheduleTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProductSchedules = new $collectionClassName;
                    $collPriceProductSchedules->setModel('\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule');

                    return $collPriceProductSchedules;
                }
            } else {
                $collPriceProductSchedules = SpyPriceProductScheduleQuery::create(null, $criteria)
                    ->filterByCurrency($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductSchedulesPartial && count($collPriceProductSchedules)) {
                        $this->initPriceProductSchedules(false);

                        foreach ($collPriceProductSchedules as $obj) {
                            if (false == $this->collPriceProductSchedules->contains($obj)) {
                                $this->collPriceProductSchedules->append($obj);
                            }
                        }

                        $this->collPriceProductSchedulesPartial = true;
                    }

                    return $collPriceProductSchedules;
                }

                if ($partial && $this->collPriceProductSchedules) {
                    foreach ($this->collPriceProductSchedules as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProductSchedules[] = $obj;
                        }
                    }
                }

                $this->collPriceProductSchedules = $collPriceProductSchedules;
                $this->collPriceProductSchedulesPartial = false;
            }
        }

        return $this->collPriceProductSchedules;
    }

    /**
     * Sets a collection of SpyPriceProductSchedule objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProductSchedules A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function setPriceProductSchedules(Collection $priceProductSchedules, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProductSchedule[] $priceProductSchedulesToDelete */
        $priceProductSchedulesToDelete = $this->getPriceProductSchedules(new Criteria(), $con)->diff($priceProductSchedules);


        $this->priceProductSchedulesScheduledForDeletion = $priceProductSchedulesToDelete;

        foreach ($priceProductSchedulesToDelete as $priceProductScheduleRemoved) {
            $priceProductScheduleRemoved->setCurrency(null);
        }

        $this->collPriceProductSchedules = null;
        foreach ($priceProductSchedules as $priceProductSchedule) {
            $this->addPriceProductSchedule($priceProductSchedule);
        }

        $this->collPriceProductSchedules = $priceProductSchedules;
        $this->collPriceProductSchedulesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyPriceProductSchedule objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyPriceProductSchedule objects.
     * @throws PropelException
     */
    public function countPriceProductSchedules(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductSchedulesPartial && !$this->isNew();
        if (null === $this->collPriceProductSchedules || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProductSchedules) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProductSchedules());
            }

            $query = SpyPriceProductScheduleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCurrency($this)
                ->count($con);
        }

        return count($this->collPriceProductSchedules);
    }

    /**
     * Method called to associate a SpyPriceProductSchedule object to this object
     * through the SpyPriceProductSchedule foreign key attribute.
     *
     * @param  SpyPriceProductSchedule $l SpyPriceProductSchedule
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function addPriceProductSchedule(SpyPriceProductSchedule $l)
    {
        if ($this->collPriceProductSchedules === null) {
            $this->initPriceProductSchedules();
            $this->collPriceProductSchedulesPartial = true;
        }

        if (!$this->collPriceProductSchedules->contains($l)) {
            $this->doAddPriceProductSchedule($l);

            if ($this->priceProductSchedulesScheduledForDeletion and $this->priceProductSchedulesScheduledForDeletion->contains($l)) {
                $this->priceProductSchedulesScheduledForDeletion->remove($this->priceProductSchedulesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyPriceProductSchedule $priceProductSchedule The SpyPriceProductSchedule object to add.
     */
    protected function doAddPriceProductSchedule(SpyPriceProductSchedule $priceProductSchedule)
    {
        $this->collPriceProductSchedules[]= $priceProductSchedule;
        $priceProductSchedule->setCurrency($this);
    }

    /**
     * @param  SpyPriceProductSchedule $priceProductSchedule The SpyPriceProductSchedule object to remove.
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function removePriceProductSchedule(SpyPriceProductSchedule $priceProductSchedule)
    {
        if ($this->getPriceProductSchedules()->contains($priceProductSchedule)) {
            $pos = $this->collPriceProductSchedules->search($priceProductSchedule);
            $this->collPriceProductSchedules->remove($pos);
            if (null === $this->priceProductSchedulesScheduledForDeletion) {
                $this->priceProductSchedulesScheduledForDeletion = clone $this->collPriceProductSchedules;
                $this->priceProductSchedulesScheduledForDeletion->clear();
            }
            $this->priceProductSchedulesScheduledForDeletion[]= clone $priceProductSchedule;
            $priceProductSchedule->setCurrency(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinProduct(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('Product', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinProductAbstract(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('ProductAbstract', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinPriceType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('PriceType', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinPriceProductScheduleList(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('PriceProductScheduleList', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }

    /**
     * Clears out the collProductOptionValuePrices collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addProductOptionValuePrices()
     */
    public function clearProductOptionValuePrices()
    {
        $this->collProductOptionValuePrices = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collProductOptionValuePrices collection loaded partially.
     */
    public function resetPartialProductOptionValuePrices($v = true)
    {
        $this->collProductOptionValuePricesPartial = $v;
    }

    /**
     * Initializes the collProductOptionValuePrices collection.
     *
     * By default this just sets the collProductOptionValuePrices collection to an empty array (like clearcollProductOptionValuePrices());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductOptionValuePrices($overrideExisting = true)
    {
        if (null !== $this->collProductOptionValuePrices && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductOptionValuePriceTableMap::getTableMap()->getCollectionClassName();

        $this->collProductOptionValuePrices = new $collectionClassName;
        $this->collProductOptionValuePrices->setModel('\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice');
    }

    /**
     * Gets an array of SpyProductOptionValuePrice objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCurrency is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductOptionValuePrice[] List of SpyProductOptionValuePrice objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductOptionValuePrice> List of SpyProductOptionValuePrice objects
     * @throws PropelException
     */
    public function getProductOptionValuePrices(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collProductOptionValuePricesPartial && !$this->isNew();
        if (null === $this->collProductOptionValuePrices || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collProductOptionValuePrices) {
                    $this->initProductOptionValuePrices();
                } else {
                    $collectionClassName = SpyProductOptionValuePriceTableMap::getTableMap()->getCollectionClassName();

                    $collProductOptionValuePrices = new $collectionClassName;
                    $collProductOptionValuePrices->setModel('\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice');

                    return $collProductOptionValuePrices;
                }
            } else {
                $collProductOptionValuePrices = SpyProductOptionValuePriceQuery::create(null, $criteria)
                    ->filterByCurrency($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collProductOptionValuePricesPartial && count($collProductOptionValuePrices)) {
                        $this->initProductOptionValuePrices(false);

                        foreach ($collProductOptionValuePrices as $obj) {
                            if (false == $this->collProductOptionValuePrices->contains($obj)) {
                                $this->collProductOptionValuePrices->append($obj);
                            }
                        }

                        $this->collProductOptionValuePricesPartial = true;
                    }

                    return $collProductOptionValuePrices;
                }

                if ($partial && $this->collProductOptionValuePrices) {
                    foreach ($this->collProductOptionValuePrices as $obj) {
                        if ($obj->isNew()) {
                            $collProductOptionValuePrices[] = $obj;
                        }
                    }
                }

                $this->collProductOptionValuePrices = $collProductOptionValuePrices;
                $this->collProductOptionValuePricesPartial = false;
            }
        }

        return $this->collProductOptionValuePrices;
    }

    /**
     * Sets a collection of SpyProductOptionValuePrice objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $productOptionValuePrices A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function setProductOptionValuePrices(Collection $productOptionValuePrices, ConnectionInterface $con = null)
    {
        /** @var SpyProductOptionValuePrice[] $productOptionValuePricesToDelete */
        $productOptionValuePricesToDelete = $this->getProductOptionValuePrices(new Criteria(), $con)->diff($productOptionValuePrices);


        $this->productOptionValuePricesScheduledForDeletion = $productOptionValuePricesToDelete;

        foreach ($productOptionValuePricesToDelete as $productOptionValuePriceRemoved) {
            $productOptionValuePriceRemoved->setCurrency(null);
        }

        $this->collProductOptionValuePrices = null;
        foreach ($productOptionValuePrices as $productOptionValuePrice) {
            $this->addProductOptionValuePrice($productOptionValuePrice);
        }

        $this->collProductOptionValuePrices = $productOptionValuePrices;
        $this->collProductOptionValuePricesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductOptionValuePrice objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductOptionValuePrice objects.
     * @throws PropelException
     */
    public function countProductOptionValuePrices(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collProductOptionValuePricesPartial && !$this->isNew();
        if (null === $this->collProductOptionValuePrices || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductOptionValuePrices) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductOptionValuePrices());
            }

            $query = SpyProductOptionValuePriceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCurrency($this)
                ->count($con);
        }

        return count($this->collProductOptionValuePrices);
    }

    /**
     * Method called to associate a SpyProductOptionValuePrice object to this object
     * through the SpyProductOptionValuePrice foreign key attribute.
     *
     * @param  SpyProductOptionValuePrice $l SpyProductOptionValuePrice
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function addProductOptionValuePrice(SpyProductOptionValuePrice $l)
    {
        if ($this->collProductOptionValuePrices === null) {
            $this->initProductOptionValuePrices();
            $this->collProductOptionValuePricesPartial = true;
        }

        if (!$this->collProductOptionValuePrices->contains($l)) {
            $this->doAddProductOptionValuePrice($l);

            if ($this->productOptionValuePricesScheduledForDeletion and $this->productOptionValuePricesScheduledForDeletion->contains($l)) {
                $this->productOptionValuePricesScheduledForDeletion->remove($this->productOptionValuePricesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductOptionValuePrice $productOptionValuePrice The SpyProductOptionValuePrice object to add.
     */
    protected function doAddProductOptionValuePrice(SpyProductOptionValuePrice $productOptionValuePrice)
    {
        $this->collProductOptionValuePrices[]= $productOptionValuePrice;
        $productOptionValuePrice->setCurrency($this);
    }

    /**
     * @param  SpyProductOptionValuePrice $productOptionValuePrice The SpyProductOptionValuePrice object to remove.
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function removeProductOptionValuePrice(SpyProductOptionValuePrice $productOptionValuePrice)
    {
        if ($this->getProductOptionValuePrices()->contains($productOptionValuePrice)) {
            $pos = $this->collProductOptionValuePrices->search($productOptionValuePrice);
            $this->collProductOptionValuePrices->remove($pos);
            if (null === $this->productOptionValuePricesScheduledForDeletion) {
                $this->productOptionValuePricesScheduledForDeletion = clone $this->collProductOptionValuePrices;
                $this->productOptionValuePricesScheduledForDeletion->clear();
            }
            $this->productOptionValuePricesScheduledForDeletion[]= clone $productOptionValuePrice;
            $productOptionValuePrice->setCurrency(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related ProductOptionValuePrices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductOptionValuePrice[] List of SpyProductOptionValuePrice objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductOptionValuePrice}> List of SpyProductOptionValuePrice objects
     */
    public function getProductOptionValuePricesJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductOptionValuePriceQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getProductOptionValuePrices($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related ProductOptionValuePrices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductOptionValuePrice[] List of SpyProductOptionValuePrice objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductOptionValuePrice}> List of SpyProductOptionValuePrice objects
     */
    public function getProductOptionValuePricesJoinProductOptionValue(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductOptionValuePriceQuery::create(null, $criteria);
        $query->joinWith('ProductOptionValue', $joinBehavior);

        return $this->getProductOptionValuePrices($query, $con);
    }

    /**
     * Clears out the collSpySalesOrderThresholds collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpySalesOrderThresholds()
     */
    public function clearSpySalesOrderThresholds()
    {
        $this->collSpySalesOrderThresholds = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpySalesOrderThresholds collection loaded partially.
     */
    public function resetPartialSpySalesOrderThresholds($v = true)
    {
        $this->collSpySalesOrderThresholdsPartial = $v;
    }

    /**
     * Initializes the collSpySalesOrderThresholds collection.
     *
     * By default this just sets the collSpySalesOrderThresholds collection to an empty array (like clearcollSpySalesOrderThresholds());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpySalesOrderThresholds($overrideExisting = true)
    {
        if (null !== $this->collSpySalesOrderThresholds && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpySalesOrderThresholdTableMap::getTableMap()->getCollectionClassName();

        $this->collSpySalesOrderThresholds = new $collectionClassName;
        $this->collSpySalesOrderThresholds->setModel('\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold');
    }

    /**
     * Gets an array of SpySalesOrderThreshold objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCurrency is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpySalesOrderThreshold[] List of SpySalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderThreshold> List of SpySalesOrderThreshold objects
     * @throws PropelException
     */
    public function getSpySalesOrderThresholds(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpySalesOrderThresholdsPartial && !$this->isNew();
        if (null === $this->collSpySalesOrderThresholds || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpySalesOrderThresholds) {
                    $this->initSpySalesOrderThresholds();
                } else {
                    $collectionClassName = SpySalesOrderThresholdTableMap::getTableMap()->getCollectionClassName();

                    $collSpySalesOrderThresholds = new $collectionClassName;
                    $collSpySalesOrderThresholds->setModel('\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold');

                    return $collSpySalesOrderThresholds;
                }
            } else {
                $collSpySalesOrderThresholds = SpySalesOrderThresholdQuery::create(null, $criteria)
                    ->filterByCurrency($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpySalesOrderThresholdsPartial && count($collSpySalesOrderThresholds)) {
                        $this->initSpySalesOrderThresholds(false);

                        foreach ($collSpySalesOrderThresholds as $obj) {
                            if (false == $this->collSpySalesOrderThresholds->contains($obj)) {
                                $this->collSpySalesOrderThresholds->append($obj);
                            }
                        }

                        $this->collSpySalesOrderThresholdsPartial = true;
                    }

                    return $collSpySalesOrderThresholds;
                }

                if ($partial && $this->collSpySalesOrderThresholds) {
                    foreach ($this->collSpySalesOrderThresholds as $obj) {
                        if ($obj->isNew()) {
                            $collSpySalesOrderThresholds[] = $obj;
                        }
                    }
                }

                $this->collSpySalesOrderThresholds = $collSpySalesOrderThresholds;
                $this->collSpySalesOrderThresholdsPartial = false;
            }
        }

        return $this->collSpySalesOrderThresholds;
    }

    /**
     * Sets a collection of SpySalesOrderThreshold objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spySalesOrderThresholds A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function setSpySalesOrderThresholds(Collection $spySalesOrderThresholds, ConnectionInterface $con = null)
    {
        /** @var SpySalesOrderThreshold[] $spySalesOrderThresholdsToDelete */
        $spySalesOrderThresholdsToDelete = $this->getSpySalesOrderThresholds(new Criteria(), $con)->diff($spySalesOrderThresholds);


        $this->spySalesOrderThresholdsScheduledForDeletion = $spySalesOrderThresholdsToDelete;

        foreach ($spySalesOrderThresholdsToDelete as $spySalesOrderThresholdRemoved) {
            $spySalesOrderThresholdRemoved->setCurrency(null);
        }

        $this->collSpySalesOrderThresholds = null;
        foreach ($spySalesOrderThresholds as $spySalesOrderThreshold) {
            $this->addSpySalesOrderThreshold($spySalesOrderThreshold);
        }

        $this->collSpySalesOrderThresholds = $spySalesOrderThresholds;
        $this->collSpySalesOrderThresholdsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpySalesOrderThreshold objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpySalesOrderThreshold objects.
     * @throws PropelException
     */
    public function countSpySalesOrderThresholds(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpySalesOrderThresholdsPartial && !$this->isNew();
        if (null === $this->collSpySalesOrderThresholds || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpySalesOrderThresholds) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpySalesOrderThresholds());
            }

            $query = SpySalesOrderThresholdQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCurrency($this)
                ->count($con);
        }

        return count($this->collSpySalesOrderThresholds);
    }

    /**
     * Method called to associate a SpySalesOrderThreshold object to this object
     * through the SpySalesOrderThreshold foreign key attribute.
     *
     * @param  SpySalesOrderThreshold $l SpySalesOrderThreshold
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function addSpySalesOrderThreshold(SpySalesOrderThreshold $l)
    {
        if ($this->collSpySalesOrderThresholds === null) {
            $this->initSpySalesOrderThresholds();
            $this->collSpySalesOrderThresholdsPartial = true;
        }

        if (!$this->collSpySalesOrderThresholds->contains($l)) {
            $this->doAddSpySalesOrderThreshold($l);

            if ($this->spySalesOrderThresholdsScheduledForDeletion and $this->spySalesOrderThresholdsScheduledForDeletion->contains($l)) {
                $this->spySalesOrderThresholdsScheduledForDeletion->remove($this->spySalesOrderThresholdsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpySalesOrderThreshold $spySalesOrderThreshold The SpySalesOrderThreshold object to add.
     */
    protected function doAddSpySalesOrderThreshold(SpySalesOrderThreshold $spySalesOrderThreshold)
    {
        $this->collSpySalesOrderThresholds[]= $spySalesOrderThreshold;
        $spySalesOrderThreshold->setCurrency($this);
    }

    /**
     * @param  SpySalesOrderThreshold $spySalesOrderThreshold The SpySalesOrderThreshold object to remove.
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function removeSpySalesOrderThreshold(SpySalesOrderThreshold $spySalesOrderThreshold)
    {
        if ($this->getSpySalesOrderThresholds()->contains($spySalesOrderThreshold)) {
            $pos = $this->collSpySalesOrderThresholds->search($spySalesOrderThreshold);
            $this->collSpySalesOrderThresholds->remove($pos);
            if (null === $this->spySalesOrderThresholdsScheduledForDeletion) {
                $this->spySalesOrderThresholdsScheduledForDeletion = clone $this->collSpySalesOrderThresholds;
                $this->spySalesOrderThresholdsScheduledForDeletion->clear();
            }
            $this->spySalesOrderThresholdsScheduledForDeletion[]= clone $spySalesOrderThreshold;
            $spySalesOrderThreshold->setCurrency(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related SpySalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderThreshold[] List of SpySalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderThreshold}> List of SpySalesOrderThreshold objects
     */
    public function getSpySalesOrderThresholdsJoinSalesOrderThresholdType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderThresholdQuery::create(null, $criteria);
        $query->joinWith('SalesOrderThresholdType', $joinBehavior);

        return $this->getSpySalesOrderThresholds($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related SpySalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpySalesOrderThreshold[] List of SpySalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpySalesOrderThreshold}> List of SpySalesOrderThreshold objects
     */
    public function getSpySalesOrderThresholdsJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpySalesOrderThresholdQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getSpySalesOrderThresholds($query, $con);
    }

    /**
     * Clears out the collShipmentMethodPrices collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addShipmentMethodPrices()
     */
    public function clearShipmentMethodPrices()
    {
        $this->collShipmentMethodPrices = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collShipmentMethodPrices collection loaded partially.
     */
    public function resetPartialShipmentMethodPrices($v = true)
    {
        $this->collShipmentMethodPricesPartial = $v;
    }

    /**
     * Initializes the collShipmentMethodPrices collection.
     *
     * By default this just sets the collShipmentMethodPrices collection to an empty array (like clearcollShipmentMethodPrices());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initShipmentMethodPrices($overrideExisting = true)
    {
        if (null !== $this->collShipmentMethodPrices && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShipmentMethodPriceTableMap::getTableMap()->getCollectionClassName();

        $this->collShipmentMethodPrices = new $collectionClassName;
        $this->collShipmentMethodPrices->setModel('\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice');
    }

    /**
     * Gets an array of SpyShipmentMethodPrice objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCurrency is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyShipmentMethodPrice[] List of SpyShipmentMethodPrice objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShipmentMethodPrice> List of SpyShipmentMethodPrice objects
     * @throws PropelException
     */
    public function getShipmentMethodPrices(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collShipmentMethodPricesPartial && !$this->isNew();
        if (null === $this->collShipmentMethodPrices || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collShipmentMethodPrices) {
                    $this->initShipmentMethodPrices();
                } else {
                    $collectionClassName = SpyShipmentMethodPriceTableMap::getTableMap()->getCollectionClassName();

                    $collShipmentMethodPrices = new $collectionClassName;
                    $collShipmentMethodPrices->setModel('\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice');

                    return $collShipmentMethodPrices;
                }
            } else {
                $collShipmentMethodPrices = SpyShipmentMethodPriceQuery::create(null, $criteria)
                    ->filterByCurrency($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collShipmentMethodPricesPartial && count($collShipmentMethodPrices)) {
                        $this->initShipmentMethodPrices(false);

                        foreach ($collShipmentMethodPrices as $obj) {
                            if (false == $this->collShipmentMethodPrices->contains($obj)) {
                                $this->collShipmentMethodPrices->append($obj);
                            }
                        }

                        $this->collShipmentMethodPricesPartial = true;
                    }

                    return $collShipmentMethodPrices;
                }

                if ($partial && $this->collShipmentMethodPrices) {
                    foreach ($this->collShipmentMethodPrices as $obj) {
                        if ($obj->isNew()) {
                            $collShipmentMethodPrices[] = $obj;
                        }
                    }
                }

                $this->collShipmentMethodPrices = $collShipmentMethodPrices;
                $this->collShipmentMethodPricesPartial = false;
            }
        }

        return $this->collShipmentMethodPrices;
    }

    /**
     * Sets a collection of SpyShipmentMethodPrice objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $shipmentMethodPrices A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function setShipmentMethodPrices(Collection $shipmentMethodPrices, ConnectionInterface $con = null)
    {
        /** @var SpyShipmentMethodPrice[] $shipmentMethodPricesToDelete */
        $shipmentMethodPricesToDelete = $this->getShipmentMethodPrices(new Criteria(), $con)->diff($shipmentMethodPrices);


        $this->shipmentMethodPricesScheduledForDeletion = $shipmentMethodPricesToDelete;

        foreach ($shipmentMethodPricesToDelete as $shipmentMethodPriceRemoved) {
            $shipmentMethodPriceRemoved->setCurrency(null);
        }

        $this->collShipmentMethodPrices = null;
        foreach ($shipmentMethodPrices as $shipmentMethodPrice) {
            $this->addShipmentMethodPrice($shipmentMethodPrice);
        }

        $this->collShipmentMethodPrices = $shipmentMethodPrices;
        $this->collShipmentMethodPricesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyShipmentMethodPrice objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyShipmentMethodPrice objects.
     * @throws PropelException
     */
    public function countShipmentMethodPrices(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collShipmentMethodPricesPartial && !$this->isNew();
        if (null === $this->collShipmentMethodPrices || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collShipmentMethodPrices) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getShipmentMethodPrices());
            }

            $query = SpyShipmentMethodPriceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCurrency($this)
                ->count($con);
        }

        return count($this->collShipmentMethodPrices);
    }

    /**
     * Method called to associate a SpyShipmentMethodPrice object to this object
     * through the SpyShipmentMethodPrice foreign key attribute.
     *
     * @param  SpyShipmentMethodPrice $l SpyShipmentMethodPrice
     * @return $this|\Orm\Zed\Currency\Persistence\SpyCurrency The current object (for fluent API support)
     */
    public function addShipmentMethodPrice(SpyShipmentMethodPrice $l)
    {
        if ($this->collShipmentMethodPrices === null) {
            $this->initShipmentMethodPrices();
            $this->collShipmentMethodPricesPartial = true;
        }

        if (!$this->collShipmentMethodPrices->contains($l)) {
            $this->doAddShipmentMethodPrice($l);

            if ($this->shipmentMethodPricesScheduledForDeletion and $this->shipmentMethodPricesScheduledForDeletion->contains($l)) {
                $this->shipmentMethodPricesScheduledForDeletion->remove($this->shipmentMethodPricesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyShipmentMethodPrice $shipmentMethodPrice The SpyShipmentMethodPrice object to add.
     */
    protected function doAddShipmentMethodPrice(SpyShipmentMethodPrice $shipmentMethodPrice)
    {
        $this->collShipmentMethodPrices[]= $shipmentMethodPrice;
        $shipmentMethodPrice->setCurrency($this);
    }

    /**
     * @param  SpyShipmentMethodPrice $shipmentMethodPrice The SpyShipmentMethodPrice object to remove.
     * @return $this|ChildSpyCurrency The current object (for fluent API support)
     */
    public function removeShipmentMethodPrice(SpyShipmentMethodPrice $shipmentMethodPrice)
    {
        if ($this->getShipmentMethodPrices()->contains($shipmentMethodPrice)) {
            $pos = $this->collShipmentMethodPrices->search($shipmentMethodPrice);
            $this->collShipmentMethodPrices->remove($pos);
            if (null === $this->shipmentMethodPricesScheduledForDeletion) {
                $this->shipmentMethodPricesScheduledForDeletion = clone $this->collShipmentMethodPrices;
                $this->shipmentMethodPricesScheduledForDeletion->clear();
            }
            $this->shipmentMethodPricesScheduledForDeletion[]= clone $shipmentMethodPrice;
            $shipmentMethodPrice->setCurrency(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related ShipmentMethodPrices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyShipmentMethodPrice[] List of SpyShipmentMethodPrice objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShipmentMethodPrice}> List of SpyShipmentMethodPrice objects
     */
    public function getShipmentMethodPricesJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyShipmentMethodPriceQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getShipmentMethodPrices($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCurrency is new, it will return
     * an empty collection; or if this SpyCurrency has previously
     * been saved, it will retrieve related ShipmentMethodPrices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCurrency.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyShipmentMethodPrice[] List of SpyShipmentMethodPrice objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShipmentMethodPrice}> List of SpyShipmentMethodPrice objects
     */
    public function getShipmentMethodPricesJoinShipmentMethod(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyShipmentMethodPriceQuery::create(null, $criteria);
        $query->joinWith('ShipmentMethod', $joinBehavior);

        return $this->getShipmentMethodPrices($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id_currency = null;
        $this->name = null;
        $this->code = null;
        $this->symbol = null;
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
            if ($this->collDiscountAmounts) {
                foreach ($this->collDiscountAmounts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyMerchantRelationshipSalesOrderThresholds) {
                foreach ($this->collSpyMerchantRelationshipSalesOrderThresholds as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPriceProductStores) {
                foreach ($this->collPriceProductStores as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPriceProductSchedules) {
                foreach ($this->collPriceProductSchedules as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductOptionValuePrices) {
                foreach ($this->collProductOptionValuePrices as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpySalesOrderThresholds) {
                foreach ($this->collSpySalesOrderThresholds as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collShipmentMethodPrices) {
                foreach ($this->collShipmentMethodPrices as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collDiscountAmounts = null;
        $this->collSpyMerchantRelationshipSalesOrderThresholds = null;
        $this->collPriceProductStores = null;
        $this->collPriceProductSchedules = null;
        $this->collProductOptionValuePrices = null;
        $this->collSpySalesOrderThresholds = null;
        $this->collShipmentMethodPrices = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyCurrencyTableMap::DEFAULT_STRING_FORMAT);
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
