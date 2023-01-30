<?php

namespace Orm\Zed\PriceProduct\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Currency\Persistence\SpyCurrency;
use Orm\Zed\Currency\Persistence\SpyCurrencyQuery;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\Base\SpyPriceProductMerchantRelationship as BaseSpyPriceProductMerchantRelationship;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\Map\SpyPriceProductMerchantRelationshipTableMap;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProduct as ChildSpyPriceProduct;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefault as ChildSpyPriceProductDefault;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefaultQuery as ChildSpyPriceProductDefaultQuery;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductQuery as ChildSpyPriceProductQuery;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore as ChildSpyPriceProductStore;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery as ChildSpyPriceProductStoreQuery;
use Orm\Zed\PriceProduct\Persistence\Map\SpyPriceProductDefaultTableMap;
use Orm\Zed\PriceProduct\Persistence\Map\SpyPriceProductStoreTableMap;
use Orm\Zed\Store\Persistence\SpyStore;
use Orm\Zed\Store\Persistence\SpyStoreQuery;
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
 * Base class that represents a row from the 'spy_price_product_store' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.PriceProduct.Persistence.Base
 */
abstract class SpyPriceProductStore implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\PriceProduct\\Persistence\\Map\\SpyPriceProductStoreTableMap';


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
     * The value for the id_price_product_store field.
     *
     * @var        string
     */
    protected $id_price_product_store;

    /**
     * The value for the fk_currency field.
     *
     * @var        int
     */
    protected $fk_currency;

    /**
     * The value for the fk_price_product field.
     *
     * @var        int
     */
    protected $fk_price_product;

    /**
     * The value for the fk_store field.
     *
     * @var        int|null
     */
    protected $fk_store;

    /**
     * The value for the gross_price field.
     *
     * @var        int|null
     */
    protected $gross_price;

    /**
     * The value for the net_price field.
     *
     * @var        int|null
     */
    protected $net_price;

    /**
     * The value for the price_data field.
     *
     * @var        string|null
     */
    protected $price_data;

    /**
     * The value for the price_data_checksum field.
     *
     * @var        string|null
     */
    protected $price_data_checksum;

    /**
     * @var        SpyCurrency
     */
    protected $aCurrency;

    /**
     * @var        SpyStore
     */
    protected $aStore;

    /**
     * @var        ChildSpyPriceProduct
     */
    protected $aPriceProduct;

    /**
     * @var        ObjectCollection|ChildSpyPriceProductDefault[] Collection to store aggregation of ChildSpyPriceProductDefault objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPriceProductDefault> Collection to store aggregation of ChildSpyPriceProductDefault objects.
     */
    protected $collPriceProductDefaults;
    protected $collPriceProductDefaultsPartial;

    /**
     * @var        ObjectCollection|SpyPriceProductMerchantRelationship[] Collection to store aggregation of SpyPriceProductMerchantRelationship objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship> Collection to store aggregation of SpyPriceProductMerchantRelationship objects.
     */
    protected $collPriceProductMerchantRelationships;
    protected $collPriceProductMerchantRelationshipsPartial;

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
        'spy_price_product_store.fk_currency' => 'fk_currency',
        'spy_price_product_store.fk_store' => 'fk_store',
        'spy_price_product_store.fk_price_product' => 'fk_price_product',
    ];

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyPriceProductDefault[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPriceProductDefault>
     */
    protected $priceProductDefaultsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProductMerchantRelationship[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship>
     */
    protected $priceProductMerchantRelationshipsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\PriceProduct\Persistence\Base\SpyPriceProductStore object.
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
     * Compares this with another <code>SpyPriceProductStore</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyPriceProductStore</code>, delegates to
     * <code>equals(SpyPriceProductStore)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_price_product_store] column value.
     *
     * @return string
     */
    public function getIdPriceProductStore()
    {
        return $this->id_price_product_store;
    }

    /**
     * Get the [fk_currency] column value.
     *
     * @return int
     */
    public function getFkCurrency()
    {
        return $this->fk_currency;
    }

    /**
     * Get the [fk_price_product] column value.
     *
     * @return int
     */
    public function getFkPriceProduct()
    {
        return $this->fk_price_product;
    }

    /**
     * Get the [fk_store] column value.
     *
     * @return int|null
     */
    public function getFkStore()
    {
        return $this->fk_store;
    }

    /**
     * Get the [gross_price] column value.
     *
     * @return int|null
     */
    public function getGrossPrice()
    {
        return $this->gross_price;
    }

    /**
     * Get the [net_price] column value.
     *
     * @return int|null
     */
    public function getNetPrice()
    {
        return $this->net_price;
    }

    /**
     * Get the [price_data] column value.
     *
     * @return string|null
     */
    public function getPriceData()
    {
        return $this->price_data;
    }

    /**
     * Get the [price_data_checksum] column value.
     *
     * @return string|null
     */
    public function getPriceDataChecksum()
    {
        return $this->price_data_checksum;
    }

    /**
     * Set the value of [id_price_product_store] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setIdPriceProductStore($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_price_product_store !== $v) {
            $this->id_price_product_store = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_ID_PRICE_PRODUCT_STORE] = true;
        }

        return $this;
    } // setIdPriceProductStore()

    /**
     * Set the value of [fk_currency] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setFkCurrency($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_currency !== $v) {
            $this->fk_currency = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_FK_CURRENCY] = true;
        }

        if ($this->aCurrency !== null && $this->aCurrency->getIdCurrency() !== $v) {
            $this->aCurrency = null;
        }

        return $this;
    } // setFkCurrency()

    /**
     * Set the value of [fk_price_product] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setFkPriceProduct($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_price_product !== $v) {
            $this->fk_price_product = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_FK_PRICE_PRODUCT] = true;
        }

        if ($this->aPriceProduct !== null && $this->aPriceProduct->getIdPriceProduct() !== $v) {
            $this->aPriceProduct = null;
        }

        return $this;
    } // setFkPriceProduct()

    /**
     * Set the value of [fk_store] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setFkStore($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_store !== $v) {
            $this->fk_store = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_FK_STORE] = true;
        }

        if ($this->aStore !== null && $this->aStore->getIdStore() !== $v) {
            $this->aStore = null;
        }

        return $this;
    } // setFkStore()

    /**
     * Set the value of [gross_price] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setGrossPrice($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->gross_price !== $v) {
            $this->gross_price = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_GROSS_PRICE] = true;
        }

        return $this;
    } // setGrossPrice()

    /**
     * Set the value of [net_price] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setNetPrice($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->net_price !== $v) {
            $this->net_price = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_NET_PRICE] = true;
        }

        return $this;
    } // setNetPrice()

    /**
     * Set the value of [price_data] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setPriceData($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->price_data !== $v) {
            $this->price_data = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_PRICE_DATA] = true;
        }

        return $this;
    } // setPriceData()

    /**
     * Set the value of [price_data_checksum] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function setPriceDataChecksum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->price_data_checksum !== $v) {
            $this->price_data_checksum = $v;
            $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_PRICE_DATA_CHECKSUM] = true;
        }

        return $this;
    } // setPriceDataChecksum()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('IdPriceProductStore', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_price_product_store = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('FkCurrency', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_currency = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('FkPriceProduct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_price_product = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('FkStore', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_store = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('GrossPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gross_price = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('NetPrice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->net_price = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('PriceData', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price_data = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyPriceProductStoreTableMap::translateFieldName('PriceDataChecksum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price_data_checksum = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = SpyPriceProductStoreTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\PriceProduct\\Persistence\\SpyPriceProductStore'), 0, $e);
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
        if ($this->aCurrency !== null && $this->fk_currency !== $this->aCurrency->getIdCurrency()) {
            $this->aCurrency = null;
        }
        if ($this->aPriceProduct !== null && $this->fk_price_product !== $this->aPriceProduct->getIdPriceProduct()) {
            $this->aPriceProduct = null;
        }
        if ($this->aStore !== null && $this->fk_store !== $this->aStore->getIdStore()) {
            $this->aStore = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyPriceProductStoreTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyPriceProductStoreQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCurrency = null;
            $this->aStore = null;
            $this->aPriceProduct = null;
            $this->collPriceProductDefaults = null;

            $this->collPriceProductMerchantRelationships = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyPriceProductStore::setDeleted()
     * @see SpyPriceProductStore::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPriceProductStoreTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyPriceProductStoreQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPriceProductStoreTableMap::DATABASE_NAME);
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

                SpyPriceProductStoreTableMap::addInstanceToPool($this);
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

            if ($this->aCurrency !== null) {
                if ($this->aCurrency->isModified() || $this->aCurrency->isNew()) {
                    $affectedRows += $this->aCurrency->save($con);
                }
                $this->setCurrency($this->aCurrency);
            }

            if ($this->aStore !== null) {
                if ($this->aStore->isModified() || $this->aStore->isNew()) {
                    $affectedRows += $this->aStore->save($con);
                }
                $this->setStore($this->aStore);
            }

            if ($this->aPriceProduct !== null) {
                if ($this->aPriceProduct->isModified() || $this->aPriceProduct->isNew()) {
                    $affectedRows += $this->aPriceProduct->save($con);
                }
                $this->setPriceProduct($this->aPriceProduct);
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

            if ($this->priceProductDefaultsScheduledForDeletion !== null) {
                if (!$this->priceProductDefaultsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefaultQuery::create()
                        ->filterByPrimaryKeys($this->priceProductDefaultsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->priceProductDefaultsScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProductDefaults !== null) {
                foreach ($this->collPriceProductDefaults as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->priceProductMerchantRelationshipsScheduledForDeletion !== null) {
                if (!$this->priceProductMerchantRelationshipsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery::create()
                        ->filterByPrimaryKeys($this->priceProductMerchantRelationshipsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->priceProductMerchantRelationshipsScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProductMerchantRelationships !== null) {
                foreach ($this->collPriceProductMerchantRelationships as $referrerFK) {
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

        $this->modifiedColumns[SpyPriceProductStoreTableMap::COL_ID_PRICE_PRODUCT_STORE] = true;
        if (null !== $this->id_price_product_store) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyPriceProductStoreTableMap::COL_ID_PRICE_PRODUCT_STORE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_ID_PRICE_PRODUCT_STORE)) {
            $modifiedColumns[':p' . $index++]  = 'id_price_product_store';
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_FK_CURRENCY)) {
            $modifiedColumns[':p' . $index++]  = 'fk_currency';
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_FK_PRICE_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = 'fk_price_product';
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_FK_STORE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_store';
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_GROSS_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gross_price';
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_NET_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'net_price';
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_PRICE_DATA)) {
            $modifiedColumns[':p' . $index++]  = 'price_data';
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_PRICE_DATA_CHECKSUM)) {
            $modifiedColumns[':p' . $index++]  = 'price_data_checksum';
        }

        $sql = sprintf(
            'INSERT INTO spy_price_product_store (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_price_product_store':
                        $stmt->bindValue($identifier, $this->id_price_product_store, PDO::PARAM_INT);
                        break;
                    case 'fk_currency':
                        $stmt->bindValue($identifier, $this->fk_currency, PDO::PARAM_INT);
                        break;
                    case 'fk_price_product':
                        $stmt->bindValue($identifier, $this->fk_price_product, PDO::PARAM_INT);
                        break;
                    case 'fk_store':
                        $stmt->bindValue($identifier, $this->fk_store, PDO::PARAM_INT);
                        break;
                    case 'gross_price':
                        $stmt->bindValue($identifier, $this->gross_price, PDO::PARAM_INT);
                        break;
                    case 'net_price':
                        $stmt->bindValue($identifier, $this->net_price, PDO::PARAM_INT);
                        break;
                    case 'price_data':
                        $stmt->bindValue($identifier, $this->price_data, PDO::PARAM_STR);
                        break;
                    case 'price_data_checksum':
                        $stmt->bindValue($identifier, $this->price_data_checksum, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_price_product_store_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdPriceProductStore($pk);

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
        $pos = SpyPriceProductStoreTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdPriceProductStore();
                break;
            case 1:
                return $this->getFkCurrency();
                break;
            case 2:
                return $this->getFkPriceProduct();
                break;
            case 3:
                return $this->getFkStore();
                break;
            case 4:
                return $this->getGrossPrice();
                break;
            case 5:
                return $this->getNetPrice();
                break;
            case 6:
                return $this->getPriceData();
                break;
            case 7:
                return $this->getPriceDataChecksum();
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

        if (isset($alreadyDumpedObjects['SpyPriceProductStore'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyPriceProductStore'][$this->hashCode()] = true;
        $keys = SpyPriceProductStoreTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPriceProductStore(),
            $keys[1] => $this->getFkCurrency(),
            $keys[2] => $this->getFkPriceProduct(),
            $keys[3] => $this->getFkStore(),
            $keys[4] => $this->getGrossPrice(),
            $keys[5] => $this->getNetPrice(),
            $keys[6] => $this->getPriceData(),
            $keys[7] => $this->getPriceDataChecksum(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCurrency) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCurrency';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_currency';
                        break;
                    default:
                        $key = 'Currency';
                }

                $result[$key] = $this->aCurrency->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aStore) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStore';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_store';
                        break;
                    default:
                        $key = 'Store';
                }

                $result[$key] = $this->aStore->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPriceProduct) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProduct';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product';
                        break;
                    default:
                        $key = 'PriceProduct';
                }

                $result[$key] = $this->aPriceProduct->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPriceProductDefaults) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProductDefaults';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product_defaults';
                        break;
                    default:
                        $key = 'PriceProductDefaults';
                }

                $result[$key] = $this->collPriceProductDefaults->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPriceProductMerchantRelationships) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProductMerchantRelationships';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product_merchant_relationships';
                        break;
                    default:
                        $key = 'PriceProductMerchantRelationships';
                }

                $result[$key] = $this->collPriceProductMerchantRelationships->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyPriceProductStoreTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdPriceProductStore($value);
                break;
            case 1:
                $this->setFkCurrency($value);
                break;
            case 2:
                $this->setFkPriceProduct($value);
                break;
            case 3:
                $this->setFkStore($value);
                break;
            case 4:
                $this->setGrossPrice($value);
                break;
            case 5:
                $this->setNetPrice($value);
                break;
            case 6:
                $this->setPriceData($value);
                break;
            case 7:
                $this->setPriceDataChecksum($value);
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
     * @return     $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyPriceProductStoreTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdPriceProductStore($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkCurrency($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkPriceProduct($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFkStore($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setGrossPrice($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setNetPrice($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPriceData($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPriceDataChecksum($arr[$keys[7]]);
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
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object, for fluid interface
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
        $criteria = new Criteria(SpyPriceProductStoreTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_ID_PRICE_PRODUCT_STORE)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_ID_PRICE_PRODUCT_STORE, $this->id_price_product_store);
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_FK_CURRENCY)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_FK_CURRENCY, $this->fk_currency);
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_FK_PRICE_PRODUCT)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_FK_PRICE_PRODUCT, $this->fk_price_product);
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_FK_STORE)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_FK_STORE, $this->fk_store);
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_GROSS_PRICE)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_GROSS_PRICE, $this->gross_price);
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_NET_PRICE)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_NET_PRICE, $this->net_price);
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_PRICE_DATA)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_PRICE_DATA, $this->price_data);
        }
        if ($this->isColumnModified(SpyPriceProductStoreTableMap::COL_PRICE_DATA_CHECKSUM)) {
            $criteria->add(SpyPriceProductStoreTableMap::COL_PRICE_DATA_CHECKSUM, $this->price_data_checksum);
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
        $criteria = ChildSpyPriceProductStoreQuery::create();
        $criteria->add(SpyPriceProductStoreTableMap::COL_ID_PRICE_PRODUCT_STORE, $this->id_price_product_store);

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
        $validPk = null !== $this->getIdPriceProductStore();

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
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getIdPriceProductStore();
    }

    /**
     * Generic method to set the primary key (id_price_product_store column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPriceProductStore($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdPriceProductStore();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkCurrency($this->getFkCurrency());
        $copyObj->setFkPriceProduct($this->getFkPriceProduct());
        $copyObj->setFkStore($this->getFkStore());
        $copyObj->setGrossPrice($this->getGrossPrice());
        $copyObj->setNetPrice($this->getNetPrice());
        $copyObj->setPriceData($this->getPriceData());
        $copyObj->setPriceDataChecksum($this->getPriceDataChecksum());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getPriceProductDefaults() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductDefault($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPriceProductMerchantRelationships() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductMerchantRelationship($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPriceProductStore(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore Clone of current object.
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
     * Declares an association between this object and a SpyCurrency object.
     *
     * @param  SpyCurrency $v
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCurrency(SpyCurrency $v = null)
    {
        if ($v === null) {
            $this->setFkCurrency(NULL);
        } else {
            $this->setFkCurrency($v->getIdCurrency());
        }

        $this->aCurrency = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyCurrency object, it will not be re-added.
        if ($v !== null) {
            $v->addPriceProductStore($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCurrency object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCurrency The associated SpyCurrency object.
     * @throws PropelException
     */
    public function getCurrency(ConnectionInterface $con = null)
    {
        if ($this->aCurrency === null && ($this->fk_currency != 0)) {
            $this->aCurrency = SpyCurrencyQuery::create()->findPk($this->fk_currency, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCurrency->addPriceProductStores($this);
             */
        }

        return $this->aCurrency;
    }

    /**
     * Declares an association between this object and a SpyStore object.
     *
     * @param  SpyStore|null $v
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     * @throws PropelException
     */
    public function setStore(SpyStore $v = null)
    {
        if ($v === null) {
            $this->setFkStore(NULL);
        } else {
            $this->setFkStore($v->getIdStore());
        }

        $this->aStore = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyStore object, it will not be re-added.
        if ($v !== null) {
            $v->addPriceProductStore($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyStore object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyStore|null The associated SpyStore object.
     * @throws PropelException
     */
    public function getStore(ConnectionInterface $con = null)
    {
        if ($this->aStore === null && ($this->fk_store != 0)) {
            $this->aStore = SpyStoreQuery::create()->findPk($this->fk_store, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aStore->addPriceProductStores($this);
             */
        }

        return $this->aStore;
    }

    /**
     * Declares an association between this object and a ChildSpyPriceProduct object.
     *
     * @param  ChildSpyPriceProduct $v
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPriceProduct(ChildSpyPriceProduct $v = null)
    {
        if ($v === null) {
            $this->setFkPriceProduct(NULL);
        } else {
            $this->setFkPriceProduct($v->getIdPriceProduct());
        }

        $this->aPriceProduct = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyPriceProduct object, it will not be re-added.
        if ($v !== null) {
            $v->addPriceProductStore($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyPriceProduct object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyPriceProduct The associated ChildSpyPriceProduct object.
     * @throws PropelException
     */
    public function getPriceProduct(ConnectionInterface $con = null)
    {
        if ($this->aPriceProduct === null && ($this->fk_price_product != 0)) {
            $this->aPriceProduct = ChildSpyPriceProductQuery::create()->findPk($this->fk_price_product, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPriceProduct->addPriceProductStores($this);
             */
        }

        return $this->aPriceProduct;
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
        if ('PriceProductDefault' === $relationName) {
            $this->initPriceProductDefaults();
            return;
        }
        if ('PriceProductMerchantRelationship' === $relationName) {
            $this->initPriceProductMerchantRelationships();
            return;
        }
    }

    /**
     * Clears out the collPriceProductDefaults collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProductDefaults()
     */
    public function clearPriceProductDefaults()
    {
        $this->collPriceProductDefaults = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProductDefaults collection loaded partially.
     */
    public function resetPartialPriceProductDefaults($v = true)
    {
        $this->collPriceProductDefaultsPartial = $v;
    }

    /**
     * Initializes the collPriceProductDefaults collection.
     *
     * By default this just sets the collPriceProductDefaults collection to an empty array (like clearcollPriceProductDefaults());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProductDefaults($overrideExisting = true)
    {
        if (null !== $this->collPriceProductDefaults && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductDefaultTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProductDefaults = new $collectionClassName;
        $this->collPriceProductDefaults->setModel('\Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefault');
    }

    /**
     * Gets an array of ChildSpyPriceProductDefault objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyPriceProductStore is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyPriceProductDefault[] List of ChildSpyPriceProductDefault objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyPriceProductDefault> List of ChildSpyPriceProductDefault objects
     * @throws PropelException
     */
    public function getPriceProductDefaults(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductDefaultsPartial && !$this->isNew();
        if (null === $this->collPriceProductDefaults || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProductDefaults) {
                    $this->initPriceProductDefaults();
                } else {
                    $collectionClassName = SpyPriceProductDefaultTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProductDefaults = new $collectionClassName;
                    $collPriceProductDefaults->setModel('\Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefault');

                    return $collPriceProductDefaults;
                }
            } else {
                $collPriceProductDefaults = ChildSpyPriceProductDefaultQuery::create(null, $criteria)
                    ->filterByPriceProductStore($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductDefaultsPartial && count($collPriceProductDefaults)) {
                        $this->initPriceProductDefaults(false);

                        foreach ($collPriceProductDefaults as $obj) {
                            if (false == $this->collPriceProductDefaults->contains($obj)) {
                                $this->collPriceProductDefaults->append($obj);
                            }
                        }

                        $this->collPriceProductDefaultsPartial = true;
                    }

                    return $collPriceProductDefaults;
                }

                if ($partial && $this->collPriceProductDefaults) {
                    foreach ($this->collPriceProductDefaults as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProductDefaults[] = $obj;
                        }
                    }
                }

                $this->collPriceProductDefaults = $collPriceProductDefaults;
                $this->collPriceProductDefaultsPartial = false;
            }
        }

        return $this->collPriceProductDefaults;
    }

    /**
     * Sets a collection of ChildSpyPriceProductDefault objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProductDefaults A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyPriceProductStore The current object (for fluent API support)
     */
    public function setPriceProductDefaults(Collection $priceProductDefaults, ConnectionInterface $con = null)
    {
        /** @var ChildSpyPriceProductDefault[] $priceProductDefaultsToDelete */
        $priceProductDefaultsToDelete = $this->getPriceProductDefaults(new Criteria(), $con)->diff($priceProductDefaults);


        $this->priceProductDefaultsScheduledForDeletion = $priceProductDefaultsToDelete;

        foreach ($priceProductDefaultsToDelete as $priceProductDefaultRemoved) {
            $priceProductDefaultRemoved->setPriceProductStore(null);
        }

        $this->collPriceProductDefaults = null;
        foreach ($priceProductDefaults as $priceProductDefault) {
            $this->addPriceProductDefault($priceProductDefault);
        }

        $this->collPriceProductDefaults = $priceProductDefaults;
        $this->collPriceProductDefaultsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyPriceProductDefault objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyPriceProductDefault objects.
     * @throws PropelException
     */
    public function countPriceProductDefaults(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductDefaultsPartial && !$this->isNew();
        if (null === $this->collPriceProductDefaults || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProductDefaults) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProductDefaults());
            }

            $query = ChildSpyPriceProductDefaultQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPriceProductStore($this)
                ->count($con);
        }

        return count($this->collPriceProductDefaults);
    }

    /**
     * Method called to associate a ChildSpyPriceProductDefault object to this object
     * through the ChildSpyPriceProductDefault foreign key attribute.
     *
     * @param  ChildSpyPriceProductDefault $l ChildSpyPriceProductDefault
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function addPriceProductDefault(ChildSpyPriceProductDefault $l)
    {
        if ($this->collPriceProductDefaults === null) {
            $this->initPriceProductDefaults();
            $this->collPriceProductDefaultsPartial = true;
        }

        if (!$this->collPriceProductDefaults->contains($l)) {
            $this->doAddPriceProductDefault($l);

            if ($this->priceProductDefaultsScheduledForDeletion and $this->priceProductDefaultsScheduledForDeletion->contains($l)) {
                $this->priceProductDefaultsScheduledForDeletion->remove($this->priceProductDefaultsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyPriceProductDefault $priceProductDefault The ChildSpyPriceProductDefault object to add.
     */
    protected function doAddPriceProductDefault(ChildSpyPriceProductDefault $priceProductDefault)
    {
        $this->collPriceProductDefaults[]= $priceProductDefault;
        $priceProductDefault->setPriceProductStore($this);
    }

    /**
     * @param  ChildSpyPriceProductDefault $priceProductDefault The ChildSpyPriceProductDefault object to remove.
     * @return $this|ChildSpyPriceProductStore The current object (for fluent API support)
     */
    public function removePriceProductDefault(ChildSpyPriceProductDefault $priceProductDefault)
    {
        if ($this->getPriceProductDefaults()->contains($priceProductDefault)) {
            $pos = $this->collPriceProductDefaults->search($priceProductDefault);
            $this->collPriceProductDefaults->remove($pos);
            if (null === $this->priceProductDefaultsScheduledForDeletion) {
                $this->priceProductDefaultsScheduledForDeletion = clone $this->collPriceProductDefaults;
                $this->priceProductDefaultsScheduledForDeletion->clear();
            }
            $this->priceProductDefaultsScheduledForDeletion[]= clone $priceProductDefault;
            $priceProductDefault->setPriceProductStore(null);
        }

        return $this;
    }

    /**
     * Clears out the collPriceProductMerchantRelationships collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProductMerchantRelationships()
     */
    public function clearPriceProductMerchantRelationships()
    {
        $this->collPriceProductMerchantRelationships = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProductMerchantRelationships collection loaded partially.
     */
    public function resetPartialPriceProductMerchantRelationships($v = true)
    {
        $this->collPriceProductMerchantRelationshipsPartial = $v;
    }

    /**
     * Initializes the collPriceProductMerchantRelationships collection.
     *
     * By default this just sets the collPriceProductMerchantRelationships collection to an empty array (like clearcollPriceProductMerchantRelationships());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProductMerchantRelationships($overrideExisting = true)
    {
        if (null !== $this->collPriceProductMerchantRelationships && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProductMerchantRelationships = new $collectionClassName;
        $this->collPriceProductMerchantRelationships->setModel('\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship');
    }

    /**
     * Gets an array of SpyPriceProductMerchantRelationship objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyPriceProductStore is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship> List of SpyPriceProductMerchantRelationship objects
     * @throws PropelException
     */
    public function getPriceProductMerchantRelationships(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collPriceProductMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProductMerchantRelationships) {
                    $this->initPriceProductMerchantRelationships();
                } else {
                    $collectionClassName = SpyPriceProductMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProductMerchantRelationships = new $collectionClassName;
                    $collPriceProductMerchantRelationships->setModel('\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship');

                    return $collPriceProductMerchantRelationships;
                }
            } else {
                $collPriceProductMerchantRelationships = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria)
                    ->filterByPriceProductStore($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductMerchantRelationshipsPartial && count($collPriceProductMerchantRelationships)) {
                        $this->initPriceProductMerchantRelationships(false);

                        foreach ($collPriceProductMerchantRelationships as $obj) {
                            if (false == $this->collPriceProductMerchantRelationships->contains($obj)) {
                                $this->collPriceProductMerchantRelationships->append($obj);
                            }
                        }

                        $this->collPriceProductMerchantRelationshipsPartial = true;
                    }

                    return $collPriceProductMerchantRelationships;
                }

                if ($partial && $this->collPriceProductMerchantRelationships) {
                    foreach ($this->collPriceProductMerchantRelationships as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProductMerchantRelationships[] = $obj;
                        }
                    }
                }

                $this->collPriceProductMerchantRelationships = $collPriceProductMerchantRelationships;
                $this->collPriceProductMerchantRelationshipsPartial = false;
            }
        }

        return $this->collPriceProductMerchantRelationships;
    }

    /**
     * Sets a collection of SpyPriceProductMerchantRelationship objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProductMerchantRelationships A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyPriceProductStore The current object (for fluent API support)
     */
    public function setPriceProductMerchantRelationships(Collection $priceProductMerchantRelationships, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProductMerchantRelationship[] $priceProductMerchantRelationshipsToDelete */
        $priceProductMerchantRelationshipsToDelete = $this->getPriceProductMerchantRelationships(new Criteria(), $con)->diff($priceProductMerchantRelationships);


        $this->priceProductMerchantRelationshipsScheduledForDeletion = $priceProductMerchantRelationshipsToDelete;

        foreach ($priceProductMerchantRelationshipsToDelete as $priceProductMerchantRelationshipRemoved) {
            $priceProductMerchantRelationshipRemoved->setPriceProductStore(null);
        }

        $this->collPriceProductMerchantRelationships = null;
        foreach ($priceProductMerchantRelationships as $priceProductMerchantRelationship) {
            $this->addPriceProductMerchantRelationship($priceProductMerchantRelationship);
        }

        $this->collPriceProductMerchantRelationships = $priceProductMerchantRelationships;
        $this->collPriceProductMerchantRelationshipsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyPriceProductMerchantRelationship objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyPriceProductMerchantRelationship objects.
     * @throws PropelException
     */
    public function countPriceProductMerchantRelationships(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collPriceProductMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProductMerchantRelationships) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProductMerchantRelationships());
            }

            $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPriceProductStore($this)
                ->count($con);
        }

        return count($this->collPriceProductMerchantRelationships);
    }

    /**
     * Method called to associate a SpyPriceProductMerchantRelationship object to this object
     * through the SpyPriceProductMerchantRelationship foreign key attribute.
     *
     * @param  SpyPriceProductMerchantRelationship $l SpyPriceProductMerchantRelationship
     * @return $this|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore The current object (for fluent API support)
     */
    public function addPriceProductMerchantRelationship(SpyPriceProductMerchantRelationship $l)
    {
        if ($this->collPriceProductMerchantRelationships === null) {
            $this->initPriceProductMerchantRelationships();
            $this->collPriceProductMerchantRelationshipsPartial = true;
        }

        if (!$this->collPriceProductMerchantRelationships->contains($l)) {
            $this->doAddPriceProductMerchantRelationship($l);

            if ($this->priceProductMerchantRelationshipsScheduledForDeletion and $this->priceProductMerchantRelationshipsScheduledForDeletion->contains($l)) {
                $this->priceProductMerchantRelationshipsScheduledForDeletion->remove($this->priceProductMerchantRelationshipsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyPriceProductMerchantRelationship $priceProductMerchantRelationship The SpyPriceProductMerchantRelationship object to add.
     */
    protected function doAddPriceProductMerchantRelationship(SpyPriceProductMerchantRelationship $priceProductMerchantRelationship)
    {
        $this->collPriceProductMerchantRelationships[]= $priceProductMerchantRelationship;
        $priceProductMerchantRelationship->setPriceProductStore($this);
    }

    /**
     * @param  SpyPriceProductMerchantRelationship $priceProductMerchantRelationship The SpyPriceProductMerchantRelationship object to remove.
     * @return $this|ChildSpyPriceProductStore The current object (for fluent API support)
     */
    public function removePriceProductMerchantRelationship(SpyPriceProductMerchantRelationship $priceProductMerchantRelationship)
    {
        if ($this->getPriceProductMerchantRelationships()->contains($priceProductMerchantRelationship)) {
            $pos = $this->collPriceProductMerchantRelationships->search($priceProductMerchantRelationship);
            $this->collPriceProductMerchantRelationships->remove($pos);
            if (null === $this->priceProductMerchantRelationshipsScheduledForDeletion) {
                $this->priceProductMerchantRelationshipsScheduledForDeletion = clone $this->collPriceProductMerchantRelationships;
                $this->priceProductMerchantRelationshipsScheduledForDeletion->clear();
            }
            $this->priceProductMerchantRelationshipsScheduledForDeletion[]= clone $priceProductMerchantRelationship;
            $priceProductMerchantRelationship->setPriceProductStore(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyPriceProductStore is new, it will return
     * an empty collection; or if this SpyPriceProductStore has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyPriceProductStore.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship}> List of SpyPriceProductMerchantRelationship objects
     */
    public function getPriceProductMerchantRelationshipsJoinMerchantRelationship(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('MerchantRelationship', $joinBehavior);

        return $this->getPriceProductMerchantRelationships($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyPriceProductStore is new, it will return
     * an empty collection; or if this SpyPriceProductStore has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyPriceProductStore.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship}> List of SpyPriceProductMerchantRelationship objects
     */
    public function getPriceProductMerchantRelationshipsJoinProduct(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('Product', $joinBehavior);

        return $this->getPriceProductMerchantRelationships($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyPriceProductStore is new, it will return
     * an empty collection; or if this SpyPriceProductStore has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyPriceProductStore.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship}> List of SpyPriceProductMerchantRelationship objects
     */
    public function getPriceProductMerchantRelationshipsJoinProductAbstract(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('ProductAbstract', $joinBehavior);

        return $this->getPriceProductMerchantRelationships($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCurrency) {
            $this->aCurrency->removePriceProductStore($this);
        }
        if (null !== $this->aStore) {
            $this->aStore->removePriceProductStore($this);
        }
        if (null !== $this->aPriceProduct) {
            $this->aPriceProduct->removePriceProductStore($this);
        }
        $this->id_price_product_store = null;
        $this->fk_currency = null;
        $this->fk_price_product = null;
        $this->fk_store = null;
        $this->gross_price = null;
        $this->net_price = null;
        $this->price_data = null;
        $this->price_data_checksum = null;
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
            if ($this->collPriceProductDefaults) {
                foreach ($this->collPriceProductDefaults as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPriceProductMerchantRelationships) {
                foreach ($this->collPriceProductMerchantRelationships as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collPriceProductDefaults = null;
        $this->collPriceProductMerchantRelationships = null;
        $this->aCurrency = null;
        $this->aStore = null;
        $this->aPriceProduct = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyPriceProductStoreTableMap::DEFAULT_STRING_FORMAT);
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_price_product_store.create';
        } else {
            $this->_eventName = 'Entity.spy_price_product_store.update';
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

        if ($this->_eventName !== 'Entity.spy_price_product_store.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_price_product_store',
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
            'name' => 'spy_price_product_store',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_price_product_store.delete',
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
            $field = str_replace('spy_price_product_store.', '', $modifiedColumn);
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
            $field = str_replace('spy_price_product_store.', '', $additionalValueColumnName);
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
        $columnType = SpyPriceProductStoreTableMap::getTableMap()->getColumn($column)->getType();
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
