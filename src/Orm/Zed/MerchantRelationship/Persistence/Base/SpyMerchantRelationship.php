<?php

namespace Orm\Zed\MerchantRelationship\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\Base\SpyMerchantRelationshipSalesOrderThreshold as BaseSpyMerchantRelationshipSalesOrderThreshold;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\Map\SpyMerchantRelationshipSalesOrderThresholdTableMap;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship as ChildSpyMerchantRelationship;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery as ChildSpyMerchantRelationshipQuery;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit as ChildSpyMerchantRelationshipToCompanyBusinessUnit;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery as ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery;
use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipTableMap;
use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipToCompanyBusinessUnitTableMap;
use Orm\Zed\Merchant\Persistence\SpyMerchant;
use Orm\Zed\Merchant\Persistence\SpyMerchantQuery;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\Base\SpyPriceProductMerchantRelationship as BaseSpyPriceProductMerchantRelationship;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\Map\SpyPriceProductMerchantRelationshipTableMap;
use Orm\Zed\ProductList\Persistence\SpyProductList;
use Orm\Zed\ProductList\Persistence\SpyProductListQuery;
use Orm\Zed\ProductList\Persistence\Base\SpyProductList as BaseSpyProductList;
use Orm\Zed\ProductList\Persistence\Map\SpyProductListTableMap;
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
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'spy_merchant_relationship' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.MerchantRelationship.Persistence.Base
 */
abstract class SpyMerchantRelationship implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\MerchantRelationship\\Persistence\\Map\\SpyMerchantRelationshipTableMap';


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
     * The value for the id_merchant_relationship field.
     *
     * @var        int
     */
    protected $id_merchant_relationship;

    /**
     * The value for the fk_company_business_unit field.
     *
     * @var        int
     */
    protected $fk_company_business_unit;

    /**
     * The value for the fk_merchant field.
     *
     * @var        int
     */
    protected $fk_merchant;

    /**
     * The value for the merchant_relationship_key field.
     * Identifier for existing entities. It should never be changed.
     * @var        string|null
     */
    protected $merchant_relationship_key;

    /**
     * The value for the created_at field.
     *
     * @var        DateTime|null
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     *
     * @var        DateTime|null
     */
    protected $updated_at;

    /**
     * @var        SpyMerchant
     */
    protected $aMerchant;

    /**
     * @var        SpyCompanyBusinessUnit
     */
    protected $aCompanyBusinessUnit;

    /**
     * @var        ObjectCollection|ChildSpyMerchantRelationshipToCompanyBusinessUnit[] Collection to store aggregation of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit> Collection to store aggregation of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects.
     */
    protected $collSpyMerchantRelationshipToCompanyBusinessUnits;
    protected $collSpyMerchantRelationshipToCompanyBusinessUnitsPartial;

    /**
     * @var        ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[] Collection to store aggregation of SpyMerchantRelationshipSalesOrderThreshold objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold> Collection to store aggregation of SpyMerchantRelationshipSalesOrderThreshold objects.
     */
    protected $collSpyMerchantRelationshipSalesOrderThresholds;
    protected $collSpyMerchantRelationshipSalesOrderThresholdsPartial;

    /**
     * @var        ObjectCollection|SpyPriceProductMerchantRelationship[] Collection to store aggregation of SpyPriceProductMerchantRelationship objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship> Collection to store aggregation of SpyPriceProductMerchantRelationship objects.
     */
    protected $collPriceProductMerchantRelationships;
    protected $collPriceProductMerchantRelationshipsPartial;

    /**
     * @var        ObjectCollection|SpyProductList[] Collection to store aggregation of SpyProductList objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductList> Collection to store aggregation of SpyProductList objects.
     */
    protected $collSpyProductLists;
    protected $collSpyProductListsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyMerchantRelationshipToCompanyBusinessUnit[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit>
     */
    protected $spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[]
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold>
     */
    protected $spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProductMerchantRelationship[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship>
     */
    protected $priceProductMerchantRelationshipsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductList[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductList>
     */
    protected $spyProductListsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\MerchantRelationship\Persistence\Base\SpyMerchantRelationship object.
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
     * Compares this with another <code>SpyMerchantRelationship</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyMerchantRelationship</code>, delegates to
     * <code>equals(SpyMerchantRelationship)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_merchant_relationship] column value.
     *
     * @return int
     */
    public function getIdMerchantRelationship()
    {
        return $this->id_merchant_relationship;
    }

    /**
     * Get the [fk_company_business_unit] column value.
     *
     * @return int
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fk_company_business_unit;
    }

    /**
     * Get the [fk_merchant] column value.
     *
     * @return int
     */
    public function getFkMerchant()
    {
        return $this->fk_merchant;
    }

    /**
     * Get the [merchant_relationship_key] column value.
     * Identifier for existing entities. It should never be changed.
     * @return string|null
     */
    public function getMerchantRelationshipKey()
    {
        return $this->merchant_relationship_key;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getCreatedAt($format = null)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTimeInterface ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getUpdatedAt($format = null)
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTimeInterface ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id_merchant_relationship] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function setIdMerchantRelationship($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_merchant_relationship !== $v) {
            $this->id_merchant_relationship = $v;
            $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP] = true;
        }

        return $this;
    } // setIdMerchantRelationship()

    /**
     * Set the value of [fk_company_business_unit] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function setFkCompanyBusinessUnit($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_company_business_unit !== $v) {
            $this->fk_company_business_unit = $v;
            $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT] = true;
        }

        if ($this->aCompanyBusinessUnit !== null && $this->aCompanyBusinessUnit->getIdCompanyBusinessUnit() !== $v) {
            $this->aCompanyBusinessUnit = null;
        }

        return $this;
    } // setFkCompanyBusinessUnit()

    /**
     * Set the value of [fk_merchant] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function setFkMerchant($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_merchant !== $v) {
            $this->fk_merchant = $v;
            $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_FK_MERCHANT] = true;
        }

        if ($this->aMerchant !== null && $this->aMerchant->getIdMerchant() !== $v) {
            $this->aMerchant = null;
        }

        return $this;
    } // setFkMerchant()

    /**
     * Set the value of [merchant_relationship_key] column.
     * Identifier for existing entities. It should never be changed.
     * @param string|null $v New value
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function setMerchantRelationshipKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->merchant_relationship_key !== $v) {
            $this->merchant_relationship_key = $v;
            $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY] = true;
        }

        return $this;
    } // setMerchantRelationshipKey()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_UPDATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setUpdatedAt()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyMerchantRelationshipTableMap::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_merchant_relationship = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyMerchantRelationshipTableMap::translateFieldName('FkCompanyBusinessUnit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_company_business_unit = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyMerchantRelationshipTableMap::translateFieldName('FkMerchant', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_merchant = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyMerchantRelationshipTableMap::translateFieldName('MerchantRelationshipKey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->merchant_relationship_key = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyMerchantRelationshipTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyMerchantRelationshipTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 6; // 6 = SpyMerchantRelationshipTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\MerchantRelationship\\Persistence\\SpyMerchantRelationship'), 0, $e);
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
        if ($this->aCompanyBusinessUnit !== null && $this->fk_company_business_unit !== $this->aCompanyBusinessUnit->getIdCompanyBusinessUnit()) {
            $this->aCompanyBusinessUnit = null;
        }
        if ($this->aMerchant !== null && $this->fk_merchant !== $this->aMerchant->getIdMerchant()) {
            $this->aMerchant = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyMerchantRelationshipTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyMerchantRelationshipQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMerchant = null;
            $this->aCompanyBusinessUnit = null;
            $this->collSpyMerchantRelationshipToCompanyBusinessUnits = null;

            $this->collSpyMerchantRelationshipSalesOrderThresholds = null;

            $this->collPriceProductMerchantRelationships = null;

            $this->collSpyProductLists = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyMerchantRelationship::setDeleted()
     * @see SpyMerchantRelationship::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyMerchantRelationshipQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyMerchantRelationshipTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyMerchantRelationshipTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyMerchantRelationshipTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt(\Propel\Runtime\Util\PropelDateTime::createHighPrecision());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                SpyMerchantRelationshipTableMap::addInstanceToPool($this);
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

            if ($this->aMerchant !== null) {
                if ($this->aMerchant->isModified() || $this->aMerchant->isNew()) {
                    $affectedRows += $this->aMerchant->save($con);
                }
                $this->setMerchant($this->aMerchant);
            }

            if ($this->aCompanyBusinessUnit !== null) {
                if ($this->aCompanyBusinessUnit->isModified() || $this->aCompanyBusinessUnit->isNew()) {
                    $affectedRows += $this->aCompanyBusinessUnit->save($con);
                }
                $this->setCompanyBusinessUnit($this->aCompanyBusinessUnit);
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

            if ($this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion !== null) {
                if (!$this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery::create()
                        ->filterByPrimaryKeys($this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyMerchantRelationshipToCompanyBusinessUnits !== null) {
                foreach ($this->collSpyMerchantRelationshipToCompanyBusinessUnits as $referrerFK) {
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

            if ($this->spyProductListsScheduledForDeletion !== null) {
                if (!$this->spyProductListsScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyProductListsScheduledForDeletion as $spyProductList) {
                        // need to save related object because we set the relation to null
                        $spyProductList->save($con);
                    }
                    $this->spyProductListsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductLists !== null) {
                foreach ($this->collSpyProductLists as $referrerFK) {
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

        $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP] = true;
        if (null !== $this->id_merchant_relationship) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'id_merchant_relationship';
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT)) {
            $modifiedColumns[':p' . $index++]  = 'fk_company_business_unit';
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT)) {
            $modifiedColumns[':p' . $index++]  = 'fk_merchant';
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY)) {
            $modifiedColumns[':p' . $index++]  = 'merchant_relationship_key';
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO spy_merchant_relationship (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_merchant_relationship':
                        $stmt->bindValue($identifier, $this->id_merchant_relationship, PDO::PARAM_INT);
                        break;
                    case 'fk_company_business_unit':
                        $stmt->bindValue($identifier, $this->fk_company_business_unit, PDO::PARAM_INT);
                        break;
                    case 'fk_merchant':
                        $stmt->bindValue($identifier, $this->fk_merchant, PDO::PARAM_INT);
                        break;
                    case 'merchant_relationship_key':
                        $stmt->bindValue($identifier, $this->merchant_relationship_key, PDO::PARAM_STR);
                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'updated_at':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_merchant_relationship_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdMerchantRelationship($pk);

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
        $pos = SpyMerchantRelationshipTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdMerchantRelationship();
                break;
            case 1:
                return $this->getFkCompanyBusinessUnit();
                break;
            case 2:
                return $this->getFkMerchant();
                break;
            case 3:
                return $this->getMerchantRelationshipKey();
                break;
            case 4:
                return $this->getCreatedAt();
                break;
            case 5:
                return $this->getUpdatedAt();
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

        if (isset($alreadyDumpedObjects['SpyMerchantRelationship'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyMerchantRelationship'][$this->hashCode()] = true;
        $keys = SpyMerchantRelationshipTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdMerchantRelationship(),
            $keys[1] => $this->getFkCompanyBusinessUnit(),
            $keys[2] => $this->getFkMerchant(),
            $keys[3] => $this->getMerchantRelationshipKey(),
            $keys[4] => $this->getCreatedAt(),
            $keys[5] => $this->getUpdatedAt(),
        );
        if ($result[$keys[4]] instanceof \DateTimeInterface) {
            $result[$keys[4]] = $result[$keys[4]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[5]] instanceof \DateTimeInterface) {
            $result[$keys[5]] = $result[$keys[5]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aMerchant) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyMerchant';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_merchant';
                        break;
                    default:
                        $key = 'Merchant';
                }

                $result[$key] = $this->aMerchant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCompanyBusinessUnit) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyBusinessUnit';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_business_unit';
                        break;
                    default:
                        $key = 'CompanyBusinessUnit';
                }

                $result[$key] = $this->aCompanyBusinessUnit->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyMerchantRelationshipToCompanyBusinessUnits) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyMerchantRelationshipToCompanyBusinessUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_merchant_relationship_to_company_business_units';
                        break;
                    default:
                        $key = 'SpyMerchantRelationshipToCompanyBusinessUnits';
                }

                $result[$key] = $this->collSpyMerchantRelationshipToCompanyBusinessUnits->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
            if (null !== $this->collSpyProductLists) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductLists';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_lists';
                        break;
                    default:
                        $key = 'SpyProductLists';
                }

                $result[$key] = $this->collSpyProductLists->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyMerchantRelationshipTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdMerchantRelationship($value);
                break;
            case 1:
                $this->setFkCompanyBusinessUnit($value);
                break;
            case 2:
                $this->setFkMerchant($value);
                break;
            case 3:
                $this->setMerchantRelationshipKey($value);
                break;
            case 4:
                $this->setCreatedAt($value);
                break;
            case 5:
                $this->setUpdatedAt($value);
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
     * @return     $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyMerchantRelationshipTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdMerchantRelationship($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkCompanyBusinessUnit($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkMerchant($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setMerchantRelationshipKey($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCreatedAt($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setUpdatedAt($arr[$keys[5]]);
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
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object, for fluid interface
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
        $criteria = new Criteria(SpyMerchantRelationshipTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP)) {
            $criteria->add(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $this->id_merchant_relationship);
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT)) {
            $criteria->add(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $this->fk_company_business_unit);
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT)) {
            $criteria->add(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT, $this->fk_merchant);
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY)) {
            $criteria->add(SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY, $this->merchant_relationship_key);
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyMerchantRelationshipTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyMerchantRelationshipTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyMerchantRelationshipTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildSpyMerchantRelationshipQuery::create();
        $criteria->add(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $this->id_merchant_relationship);

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
        $validPk = null !== $this->getIdMerchantRelationship();

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
        return $this->getIdMerchantRelationship();
    }

    /**
     * Generic method to set the primary key (id_merchant_relationship column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdMerchantRelationship($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdMerchantRelationship();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkCompanyBusinessUnit($this->getFkCompanyBusinessUnit());
        $copyObj->setFkMerchant($this->getFkMerchant());
        $copyObj->setMerchantRelationshipKey($this->getMerchantRelationshipKey());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyMerchantRelationshipToCompanyBusinessUnits() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyMerchantRelationshipToCompanyBusinessUnit($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyMerchantRelationshipSalesOrderThresholds() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyMerchantRelationshipSalesOrderThreshold($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPriceProductMerchantRelationships() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductMerchantRelationship($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductLists() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductList($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdMerchantRelationship(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship Clone of current object.
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
     * Declares an association between this object and a SpyMerchant object.
     *
     * @param  SpyMerchant $v
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMerchant(SpyMerchant $v = null)
    {
        if ($v === null) {
            $this->setFkMerchant(NULL);
        } else {
            $this->setFkMerchant($v->getIdMerchant());
        }

        $this->aMerchant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyMerchant object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyMerchantRelationship($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyMerchant object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyMerchant The associated SpyMerchant object.
     * @throws PropelException
     */
    public function getMerchant(ConnectionInterface $con = null)
    {
        if ($this->aMerchant === null && ($this->fk_merchant != 0)) {
            $this->aMerchant = SpyMerchantQuery::create()->findPk($this->fk_merchant, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMerchant->addSpyMerchantRelationships($this);
             */
        }

        return $this->aMerchant;
    }

    /**
     * Declares an association between this object and a SpyCompanyBusinessUnit object.
     *
     * @param  SpyCompanyBusinessUnit $v
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCompanyBusinessUnit(SpyCompanyBusinessUnit $v = null)
    {
        if ($v === null) {
            $this->setFkCompanyBusinessUnit(NULL);
        } else {
            $this->setFkCompanyBusinessUnit($v->getIdCompanyBusinessUnit());
        }

        $this->aCompanyBusinessUnit = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyCompanyBusinessUnit object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyMerchantRelationship($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCompanyBusinessUnit object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCompanyBusinessUnit The associated SpyCompanyBusinessUnit object.
     * @throws PropelException
     */
    public function getCompanyBusinessUnit(ConnectionInterface $con = null)
    {
        if ($this->aCompanyBusinessUnit === null && ($this->fk_company_business_unit != 0)) {
            $this->aCompanyBusinessUnit = SpyCompanyBusinessUnitQuery::create()->findPk($this->fk_company_business_unit, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCompanyBusinessUnit->addSpyMerchantRelationships($this);
             */
        }

        return $this->aCompanyBusinessUnit;
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
        if ('SpyMerchantRelationshipToCompanyBusinessUnit' === $relationName) {
            $this->initSpyMerchantRelationshipToCompanyBusinessUnits();
            return;
        }
        if ('SpyMerchantRelationshipSalesOrderThreshold' === $relationName) {
            $this->initSpyMerchantRelationshipSalesOrderThresholds();
            return;
        }
        if ('PriceProductMerchantRelationship' === $relationName) {
            $this->initPriceProductMerchantRelationships();
            return;
        }
        if ('SpyProductList' === $relationName) {
            $this->initSpyProductLists();
            return;
        }
    }

    /**
     * Clears out the collSpyMerchantRelationshipToCompanyBusinessUnits collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyMerchantRelationshipToCompanyBusinessUnits()
     */
    public function clearSpyMerchantRelationshipToCompanyBusinessUnits()
    {
        $this->collSpyMerchantRelationshipToCompanyBusinessUnits = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyMerchantRelationshipToCompanyBusinessUnits collection loaded partially.
     */
    public function resetPartialSpyMerchantRelationshipToCompanyBusinessUnits($v = true)
    {
        $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial = $v;
    }

    /**
     * Initializes the collSpyMerchantRelationshipToCompanyBusinessUnits collection.
     *
     * By default this just sets the collSpyMerchantRelationshipToCompanyBusinessUnits collection to an empty array (like clearcollSpyMerchantRelationshipToCompanyBusinessUnits());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyMerchantRelationshipToCompanyBusinessUnits($overrideExisting = true)
    {
        if (null !== $this->collSpyMerchantRelationshipToCompanyBusinessUnits && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyMerchantRelationshipToCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyMerchantRelationshipToCompanyBusinessUnits = new $collectionClassName;
        $this->collSpyMerchantRelationshipToCompanyBusinessUnits->setModel('\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit');
    }

    /**
     * Gets an array of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyMerchantRelationship is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyMerchantRelationshipToCompanyBusinessUnit[] List of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit> List of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects
     * @throws PropelException
     */
    public function getSpyMerchantRelationshipToCompanyBusinessUnits(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationshipToCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyMerchantRelationshipToCompanyBusinessUnits) {
                    $this->initSpyMerchantRelationshipToCompanyBusinessUnits();
                } else {
                    $collectionClassName = SpyMerchantRelationshipToCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

                    $collSpyMerchantRelationshipToCompanyBusinessUnits = new $collectionClassName;
                    $collSpyMerchantRelationshipToCompanyBusinessUnits->setModel('\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit');

                    return $collSpyMerchantRelationshipToCompanyBusinessUnits;
                }
            } else {
                $collSpyMerchantRelationshipToCompanyBusinessUnits = ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery::create(null, $criteria)
                    ->filterByMerchantRelationship($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial && count($collSpyMerchantRelationshipToCompanyBusinessUnits)) {
                        $this->initSpyMerchantRelationshipToCompanyBusinessUnits(false);

                        foreach ($collSpyMerchantRelationshipToCompanyBusinessUnits as $obj) {
                            if (false == $this->collSpyMerchantRelationshipToCompanyBusinessUnits->contains($obj)) {
                                $this->collSpyMerchantRelationshipToCompanyBusinessUnits->append($obj);
                            }
                        }

                        $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial = true;
                    }

                    return $collSpyMerchantRelationshipToCompanyBusinessUnits;
                }

                if ($partial && $this->collSpyMerchantRelationshipToCompanyBusinessUnits) {
                    foreach ($this->collSpyMerchantRelationshipToCompanyBusinessUnits as $obj) {
                        if ($obj->isNew()) {
                            $collSpyMerchantRelationshipToCompanyBusinessUnits[] = $obj;
                        }
                    }
                }

                $this->collSpyMerchantRelationshipToCompanyBusinessUnits = $collSpyMerchantRelationshipToCompanyBusinessUnits;
                $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial = false;
            }
        }

        return $this->collSpyMerchantRelationshipToCompanyBusinessUnits;
    }

    /**
     * Sets a collection of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyMerchantRelationshipToCompanyBusinessUnits A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
     */
    public function setSpyMerchantRelationshipToCompanyBusinessUnits(Collection $spyMerchantRelationshipToCompanyBusinessUnits, ConnectionInterface $con = null)
    {
        /** @var ChildSpyMerchantRelationshipToCompanyBusinessUnit[] $spyMerchantRelationshipToCompanyBusinessUnitsToDelete */
        $spyMerchantRelationshipToCompanyBusinessUnitsToDelete = $this->getSpyMerchantRelationshipToCompanyBusinessUnits(new Criteria(), $con)->diff($spyMerchantRelationshipToCompanyBusinessUnits);


        $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion = $spyMerchantRelationshipToCompanyBusinessUnitsToDelete;

        foreach ($spyMerchantRelationshipToCompanyBusinessUnitsToDelete as $spyMerchantRelationshipToCompanyBusinessUnitRemoved) {
            $spyMerchantRelationshipToCompanyBusinessUnitRemoved->setMerchantRelationship(null);
        }

        $this->collSpyMerchantRelationshipToCompanyBusinessUnits = null;
        foreach ($spyMerchantRelationshipToCompanyBusinessUnits as $spyMerchantRelationshipToCompanyBusinessUnit) {
            $this->addSpyMerchantRelationshipToCompanyBusinessUnit($spyMerchantRelationshipToCompanyBusinessUnit);
        }

        $this->collSpyMerchantRelationshipToCompanyBusinessUnits = $spyMerchantRelationshipToCompanyBusinessUnits;
        $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyMerchantRelationshipToCompanyBusinessUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyMerchantRelationshipToCompanyBusinessUnit objects.
     * @throws PropelException
     */
    public function countSpyMerchantRelationshipToCompanyBusinessUnits(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationshipToCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyMerchantRelationshipToCompanyBusinessUnits) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyMerchantRelationshipToCompanyBusinessUnits());
            }

            $query = ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMerchantRelationship($this)
                ->count($con);
        }

        return count($this->collSpyMerchantRelationshipToCompanyBusinessUnits);
    }

    /**
     * Method called to associate a ChildSpyMerchantRelationshipToCompanyBusinessUnit object to this object
     * through the ChildSpyMerchantRelationshipToCompanyBusinessUnit foreign key attribute.
     *
     * @param  ChildSpyMerchantRelationshipToCompanyBusinessUnit $l ChildSpyMerchantRelationshipToCompanyBusinessUnit
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function addSpyMerchantRelationshipToCompanyBusinessUnit(ChildSpyMerchantRelationshipToCompanyBusinessUnit $l)
    {
        if ($this->collSpyMerchantRelationshipToCompanyBusinessUnits === null) {
            $this->initSpyMerchantRelationshipToCompanyBusinessUnits();
            $this->collSpyMerchantRelationshipToCompanyBusinessUnitsPartial = true;
        }

        if (!$this->collSpyMerchantRelationshipToCompanyBusinessUnits->contains($l)) {
            $this->doAddSpyMerchantRelationshipToCompanyBusinessUnit($l);

            if ($this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion and $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion->contains($l)) {
                $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion->remove($this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit The ChildSpyMerchantRelationshipToCompanyBusinessUnit object to add.
     */
    protected function doAddSpyMerchantRelationshipToCompanyBusinessUnit(ChildSpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit)
    {
        $this->collSpyMerchantRelationshipToCompanyBusinessUnits[]= $spyMerchantRelationshipToCompanyBusinessUnit;
        $spyMerchantRelationshipToCompanyBusinessUnit->setMerchantRelationship($this);
    }

    /**
     * @param  ChildSpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit The ChildSpyMerchantRelationshipToCompanyBusinessUnit object to remove.
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
     */
    public function removeSpyMerchantRelationshipToCompanyBusinessUnit(ChildSpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit)
    {
        if ($this->getSpyMerchantRelationshipToCompanyBusinessUnits()->contains($spyMerchantRelationshipToCompanyBusinessUnit)) {
            $pos = $this->collSpyMerchantRelationshipToCompanyBusinessUnits->search($spyMerchantRelationshipToCompanyBusinessUnit);
            $this->collSpyMerchantRelationshipToCompanyBusinessUnits->remove($pos);
            if (null === $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion) {
                $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion = clone $this->collSpyMerchantRelationshipToCompanyBusinessUnits;
                $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion->clear();
            }
            $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion[]= clone $spyMerchantRelationshipToCompanyBusinessUnit;
            $spyMerchantRelationshipToCompanyBusinessUnit->setMerchantRelationship(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchantRelationship is new, it will return
     * an empty collection; or if this SpyMerchantRelationship has previously
     * been saved, it will retrieve related SpyMerchantRelationshipToCompanyBusinessUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchantRelationship.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyMerchantRelationshipToCompanyBusinessUnit[] List of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit}> List of ChildSpyMerchantRelationshipToCompanyBusinessUnit objects
     */
    public function getSpyMerchantRelationshipToCompanyBusinessUnitsJoinCompanyBusinessUnit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('CompanyBusinessUnit', $joinBehavior);

        return $this->getSpyMerchantRelationshipToCompanyBusinessUnits($query, $con);
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
     * If this ChildSpyMerchantRelationship is new, it will return
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
                    ->filterByMerchantRelationship($this)
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
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
     */
    public function setSpyMerchantRelationshipSalesOrderThresholds(Collection $spyMerchantRelationshipSalesOrderThresholds, ConnectionInterface $con = null)
    {
        /** @var SpyMerchantRelationshipSalesOrderThreshold[] $spyMerchantRelationshipSalesOrderThresholdsToDelete */
        $spyMerchantRelationshipSalesOrderThresholdsToDelete = $this->getSpyMerchantRelationshipSalesOrderThresholds(new Criteria(), $con)->diff($spyMerchantRelationshipSalesOrderThresholds);


        $this->spyMerchantRelationshipSalesOrderThresholdsScheduledForDeletion = $spyMerchantRelationshipSalesOrderThresholdsToDelete;

        foreach ($spyMerchantRelationshipSalesOrderThresholdsToDelete as $spyMerchantRelationshipSalesOrderThresholdRemoved) {
            $spyMerchantRelationshipSalesOrderThresholdRemoved->setMerchantRelationship(null);
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
                ->filterByMerchantRelationship($this)
                ->count($con);
        }

        return count($this->collSpyMerchantRelationshipSalesOrderThresholds);
    }

    /**
     * Method called to associate a SpyMerchantRelationshipSalesOrderThreshold object to this object
     * through the SpyMerchantRelationshipSalesOrderThreshold foreign key attribute.
     *
     * @param  SpyMerchantRelationshipSalesOrderThreshold $l SpyMerchantRelationshipSalesOrderThreshold
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
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
        $spyMerchantRelationshipSalesOrderThreshold->setMerchantRelationship($this);
    }

    /**
     * @param  SpyMerchantRelationshipSalesOrderThreshold $spyMerchantRelationshipSalesOrderThreshold The SpyMerchantRelationshipSalesOrderThreshold object to remove.
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
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
            $spyMerchantRelationshipSalesOrderThreshold->setMerchantRelationship(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchantRelationship is new, it will return
     * an empty collection; or if this SpyMerchantRelationship has previously
     * been saved, it will retrieve related SpyMerchantRelationshipSalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchantRelationship.
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
     * Otherwise if this SpyMerchantRelationship is new, it will return
     * an empty collection; or if this SpyMerchantRelationship has previously
     * been saved, it will retrieve related SpyMerchantRelationshipSalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchantRelationship.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyMerchantRelationshipSalesOrderThreshold[] List of SpyMerchantRelationshipSalesOrderThreshold objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationshipSalesOrderThreshold}> List of SpyMerchantRelationshipSalesOrderThreshold objects
     */
    public function getSpyMerchantRelationshipSalesOrderThresholdsJoinCurrency(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyMerchantRelationshipSalesOrderThresholdQuery::create(null, $criteria);
        $query->joinWith('Currency', $joinBehavior);

        return $this->getSpyMerchantRelationshipSalesOrderThresholds($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchantRelationship is new, it will return
     * an empty collection; or if this SpyMerchantRelationship has previously
     * been saved, it will retrieve related SpyMerchantRelationshipSalesOrderThresholds from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchantRelationship.
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
     * If this ChildSpyMerchantRelationship is new, it will return
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
                    ->filterByMerchantRelationship($this)
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
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
     */
    public function setPriceProductMerchantRelationships(Collection $priceProductMerchantRelationships, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProductMerchantRelationship[] $priceProductMerchantRelationshipsToDelete */
        $priceProductMerchantRelationshipsToDelete = $this->getPriceProductMerchantRelationships(new Criteria(), $con)->diff($priceProductMerchantRelationships);


        $this->priceProductMerchantRelationshipsScheduledForDeletion = $priceProductMerchantRelationshipsToDelete;

        foreach ($priceProductMerchantRelationshipsToDelete as $priceProductMerchantRelationshipRemoved) {
            $priceProductMerchantRelationshipRemoved->setMerchantRelationship(null);
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
                ->filterByMerchantRelationship($this)
                ->count($con);
        }

        return count($this->collPriceProductMerchantRelationships);
    }

    /**
     * Method called to associate a SpyPriceProductMerchantRelationship object to this object
     * through the SpyPriceProductMerchantRelationship foreign key attribute.
     *
     * @param  SpyPriceProductMerchantRelationship $l SpyPriceProductMerchantRelationship
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
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
        $priceProductMerchantRelationship->setMerchantRelationship($this);
    }

    /**
     * @param  SpyPriceProductMerchantRelationship $priceProductMerchantRelationship The SpyPriceProductMerchantRelationship object to remove.
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
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
            $priceProductMerchantRelationship->setMerchantRelationship(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchantRelationship is new, it will return
     * an empty collection; or if this SpyMerchantRelationship has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchantRelationship.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship}> List of SpyPriceProductMerchantRelationship objects
     */
    public function getPriceProductMerchantRelationshipsJoinPriceProductStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('PriceProductStore', $joinBehavior);

        return $this->getPriceProductMerchantRelationships($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyMerchantRelationship is new, it will return
     * an empty collection; or if this SpyMerchantRelationship has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchantRelationship.
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
     * Otherwise if this SpyMerchantRelationship is new, it will return
     * an empty collection; or if this SpyMerchantRelationship has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyMerchantRelationship.
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
     * Clears out the collSpyProductLists collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductLists()
     */
    public function clearSpyProductLists()
    {
        $this->collSpyProductLists = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductLists collection loaded partially.
     */
    public function resetPartialSpyProductLists($v = true)
    {
        $this->collSpyProductListsPartial = $v;
    }

    /**
     * Initializes the collSpyProductLists collection.
     *
     * By default this just sets the collSpyProductLists collection to an empty array (like clearcollSpyProductLists());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductLists($overrideExisting = true)
    {
        if (null !== $this->collSpyProductLists && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductListTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductLists = new $collectionClassName;
        $this->collSpyProductLists->setModel('\Orm\Zed\ProductList\Persistence\SpyProductList');
    }

    /**
     * Gets an array of SpyProductList objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyMerchantRelationship is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductList[] List of SpyProductList objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductList> List of SpyProductList objects
     * @throws PropelException
     */
    public function getSpyProductLists(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductListsPartial && !$this->isNew();
        if (null === $this->collSpyProductLists || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductLists) {
                    $this->initSpyProductLists();
                } else {
                    $collectionClassName = SpyProductListTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductLists = new $collectionClassName;
                    $collSpyProductLists->setModel('\Orm\Zed\ProductList\Persistence\SpyProductList');

                    return $collSpyProductLists;
                }
            } else {
                $collSpyProductLists = SpyProductListQuery::create(null, $criteria)
                    ->filterBySpyMerchantRelationship($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductListsPartial && count($collSpyProductLists)) {
                        $this->initSpyProductLists(false);

                        foreach ($collSpyProductLists as $obj) {
                            if (false == $this->collSpyProductLists->contains($obj)) {
                                $this->collSpyProductLists->append($obj);
                            }
                        }

                        $this->collSpyProductListsPartial = true;
                    }

                    return $collSpyProductLists;
                }

                if ($partial && $this->collSpyProductLists) {
                    foreach ($this->collSpyProductLists as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductLists[] = $obj;
                        }
                    }
                }

                $this->collSpyProductLists = $collSpyProductLists;
                $this->collSpyProductListsPartial = false;
            }
        }

        return $this->collSpyProductLists;
    }

    /**
     * Sets a collection of SpyProductList objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductLists A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
     */
    public function setSpyProductLists(Collection $spyProductLists, ConnectionInterface $con = null)
    {
        /** @var SpyProductList[] $spyProductListsToDelete */
        $spyProductListsToDelete = $this->getSpyProductLists(new Criteria(), $con)->diff($spyProductLists);


        $this->spyProductListsScheduledForDeletion = $spyProductListsToDelete;

        foreach ($spyProductListsToDelete as $spyProductListRemoved) {
            $spyProductListRemoved->setSpyMerchantRelationship(null);
        }

        $this->collSpyProductLists = null;
        foreach ($spyProductLists as $spyProductList) {
            $this->addSpyProductList($spyProductList);
        }

        $this->collSpyProductLists = $spyProductLists;
        $this->collSpyProductListsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductList objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductList objects.
     * @throws PropelException
     */
    public function countSpyProductLists(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductListsPartial && !$this->isNew();
        if (null === $this->collSpyProductLists || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductLists) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductLists());
            }

            $query = SpyProductListQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyMerchantRelationship($this)
                ->count($con);
        }

        return count($this->collSpyProductLists);
    }

    /**
     * Method called to associate a SpyProductList object to this object
     * through the SpyProductList foreign key attribute.
     *
     * @param  SpyProductList $l SpyProductList
     * @return $this|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship The current object (for fluent API support)
     */
    public function addSpyProductList(SpyProductList $l)
    {
        if ($this->collSpyProductLists === null) {
            $this->initSpyProductLists();
            $this->collSpyProductListsPartial = true;
        }

        if (!$this->collSpyProductLists->contains($l)) {
            $this->doAddSpyProductList($l);

            if ($this->spyProductListsScheduledForDeletion and $this->spyProductListsScheduledForDeletion->contains($l)) {
                $this->spyProductListsScheduledForDeletion->remove($this->spyProductListsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductList $spyProductList The SpyProductList object to add.
     */
    protected function doAddSpyProductList(SpyProductList $spyProductList)
    {
        $this->collSpyProductLists[]= $spyProductList;
        $spyProductList->setSpyMerchantRelationship($this);
    }

    /**
     * @param  SpyProductList $spyProductList The SpyProductList object to remove.
     * @return $this|ChildSpyMerchantRelationship The current object (for fluent API support)
     */
    public function removeSpyProductList(SpyProductList $spyProductList)
    {
        if ($this->getSpyProductLists()->contains($spyProductList)) {
            $pos = $this->collSpyProductLists->search($spyProductList);
            $this->collSpyProductLists->remove($pos);
            if (null === $this->spyProductListsScheduledForDeletion) {
                $this->spyProductListsScheduledForDeletion = clone $this->collSpyProductLists;
                $this->spyProductListsScheduledForDeletion->clear();
            }
            $this->spyProductListsScheduledForDeletion[]= $spyProductList;
            $spyProductList->setSpyMerchantRelationship(null);
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
        if (null !== $this->aMerchant) {
            $this->aMerchant->removeSpyMerchantRelationship($this);
        }
        if (null !== $this->aCompanyBusinessUnit) {
            $this->aCompanyBusinessUnit->removeSpyMerchantRelationship($this);
        }
        $this->id_merchant_relationship = null;
        $this->fk_company_business_unit = null;
        $this->fk_merchant = null;
        $this->merchant_relationship_key = null;
        $this->created_at = null;
        $this->updated_at = null;
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
            if ($this->collSpyMerchantRelationshipToCompanyBusinessUnits) {
                foreach ($this->collSpyMerchantRelationshipToCompanyBusinessUnits as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyMerchantRelationshipSalesOrderThresholds) {
                foreach ($this->collSpyMerchantRelationshipSalesOrderThresholds as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPriceProductMerchantRelationships) {
                foreach ($this->collPriceProductMerchantRelationships as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductLists) {
                foreach ($this->collSpyProductLists as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyMerchantRelationshipToCompanyBusinessUnits = null;
        $this->collSpyMerchantRelationshipSalesOrderThresholds = null;
        $this->collPriceProductMerchantRelationships = null;
        $this->collSpyProductLists = null;
        $this->aMerchant = null;
        $this->aCompanyBusinessUnit = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyMerchantRelationshipTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpyMerchantRelationship The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyMerchantRelationshipTableMap::COL_UPDATED_AT] = true;

        return $this;
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
