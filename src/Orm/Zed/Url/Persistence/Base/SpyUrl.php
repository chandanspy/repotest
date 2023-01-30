<?php

namespace Orm\Zed\Url\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Category\Persistence\SpyCategoryNode;
use Orm\Zed\Category\Persistence\SpyCategoryNodeQuery;
use Orm\Zed\Cms\Persistence\SpyCmsPage;
use Orm\Zed\Cms\Persistence\SpyCmsPageQuery;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\Locale\Persistence\SpyLocaleQuery;
use Orm\Zed\Merchant\Persistence\SpyMerchant;
use Orm\Zed\Merchant\Persistence\SpyMerchantQuery;
use Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes;
use Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributesQuery;
use Orm\Zed\Navigation\Persistence\Base\SpyNavigationNodeLocalizedAttributes as BaseSpyNavigationNodeLocalizedAttributes;
use Orm\Zed\Navigation\Persistence\Map\SpyNavigationNodeLocalizedAttributesTableMap;
use Orm\Zed\ProductSet\Persistence\SpyProductSet;
use Orm\Zed\ProductSet\Persistence\SpyProductSetQuery;
use Orm\Zed\Product\Persistence\SpyProductAbstract;
use Orm\Zed\Product\Persistence\SpyProductAbstractQuery;
use Orm\Zed\Url\Persistence\SpyUrl as ChildSpyUrl;
use Orm\Zed\Url\Persistence\SpyUrlQuery as ChildSpyUrlQuery;
use Orm\Zed\Url\Persistence\SpyUrlRedirect as ChildSpyUrlRedirect;
use Orm\Zed\Url\Persistence\SpyUrlRedirectQuery as ChildSpyUrlRedirectQuery;
use Orm\Zed\Url\Persistence\Map\SpyUrlTableMap;
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
 * Base class that represents a row from the 'spy_url' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Url.Persistence.Base
 */
abstract class SpyUrl implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Url\\Persistence\\Map\\SpyUrlTableMap';


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
     * The value for the id_url field.
     *
     * @var        int
     */
    protected $id_url;

    /**
     * The value for the fk_locale field.
     *
     * @var        int
     */
    protected $fk_locale;

    /**
     * The value for the fk_resource_categorynode field.
     *
     * @var        int|null
     */
    protected $fk_resource_categorynode;

    /**
     * The value for the fk_resource_merchant field.
     *
     * @var        int|null
     */
    protected $fk_resource_merchant;

    /**
     * The value for the fk_resource_page field.
     *
     * @var        int|null
     */
    protected $fk_resource_page;

    /**
     * The value for the fk_resource_product_abstract field.
     *
     * @var        int|null
     */
    protected $fk_resource_product_abstract;

    /**
     * The value for the fk_resource_product_set field.
     *
     * @var        int|null
     */
    protected $fk_resource_product_set;

    /**
     * The value for the fk_resource_redirect field.
     *
     * @var        int|null
     */
    protected $fk_resource_redirect;

    /**
     * The value for the url field.
     *
     * @var        string
     */
    protected $url;

    /**
     * @var        SpyCategoryNode
     */
    protected $aSpyCategoryNode;

    /**
     * @var        SpyCmsPage
     */
    protected $aCmsPage;

    /**
     * @var        SpyMerchant
     */
    protected $aSpyMerchant;

    /**
     * @var        SpyProductSet
     */
    protected $aSpyProductSet;

    /**
     * @var        SpyProductAbstract
     */
    protected $aSpyProduct;

    /**
     * @var        SpyLocale
     */
    protected $aSpyLocale;

    /**
     * @var        ChildSpyUrlRedirect
     */
    protected $aSpyUrlRedirect;

    /**
     * @var        ObjectCollection|SpyNavigationNodeLocalizedAttributes[] Collection to store aggregation of SpyNavigationNodeLocalizedAttributes objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyNavigationNodeLocalizedAttributes> Collection to store aggregation of SpyNavigationNodeLocalizedAttributes objects.
     */
    protected $collSpyNavigationNodeLocalizedAttributess;
    protected $collSpyNavigationNodeLocalizedAttributessPartial;

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
        'spy_url.fk_resource_categorynode' => 'fk_resource_categorynode',
        'spy_url.fk_resource_page' => 'fk_resource_page',
        'spy_url.fk_resource_merchant' => 'fk_resource_merchant',
        'spy_url.fk_resource_product_set' => 'fk_resource_product_set',
        'spy_url.fk_resource_product_abstract' => 'fk_resource_product_abstract',
        'spy_url.fk_locale' => 'fk_locale',
        'spy_url.fk_resource_redirect' => 'fk_resource_redirect',
    ];

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyNavigationNodeLocalizedAttributes[]
     * @phpstan-var ObjectCollection&\Traversable<SpyNavigationNodeLocalizedAttributes>
     */
    protected $spyNavigationNodeLocalizedAttributessScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\Url\Persistence\Base\SpyUrl object.
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
     * Compares this with another <code>SpyUrl</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyUrl</code>, delegates to
     * <code>equals(SpyUrl)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_url] column value.
     *
     * @return int
     */
    public function getIdUrl()
    {
        return $this->id_url;
    }

    /**
     * Get the [fk_locale] column value.
     *
     * @return int
     */
    public function getFkLocale()
    {
        return $this->fk_locale;
    }

    /**
     * Get the [fk_resource_categorynode] column value.
     *
     * @return int|null
     */
    public function getFkResourceCategorynode()
    {
        return $this->fk_resource_categorynode;
    }

    /**
     * Get the [fk_resource_merchant] column value.
     *
     * @return int|null
     */
    public function getFkResourceMerchant()
    {
        return $this->fk_resource_merchant;
    }

    /**
     * Get the [fk_resource_page] column value.
     *
     * @return int|null
     */
    public function getFkResourcePage()
    {
        return $this->fk_resource_page;
    }

    /**
     * Get the [fk_resource_product_abstract] column value.
     *
     * @return int|null
     */
    public function getFkResourceProductAbstract()
    {
        return $this->fk_resource_product_abstract;
    }

    /**
     * Get the [fk_resource_product_set] column value.
     *
     * @return int|null
     */
    public function getFkResourceProductSet()
    {
        return $this->fk_resource_product_set;
    }

    /**
     * Get the [fk_resource_redirect] column value.
     *
     * @return int|null
     */
    public function getFkResourceRedirect()
    {
        return $this->fk_resource_redirect;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of [id_url] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setIdUrl($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_url !== $v) {
            $this->id_url = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_ID_URL] = true;
        }

        return $this;
    } // setIdUrl()

    /**
     * Set the value of [fk_locale] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setFkLocale($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_locale !== $v) {
            $this->fk_locale = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_FK_LOCALE] = true;
        }

        if ($this->aSpyLocale !== null && $this->aSpyLocale->getIdLocale() !== $v) {
            $this->aSpyLocale = null;
        }

        return $this;
    } // setFkLocale()

    /**
     * Set the value of [fk_resource_categorynode] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setFkResourceCategorynode($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_resource_categorynode !== $v) {
            $this->fk_resource_categorynode = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_FK_RESOURCE_CATEGORYNODE] = true;
        }

        if ($this->aSpyCategoryNode !== null && $this->aSpyCategoryNode->getIdCategoryNode() !== $v) {
            $this->aSpyCategoryNode = null;
        }

        return $this;
    } // setFkResourceCategorynode()

    /**
     * Set the value of [fk_resource_merchant] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setFkResourceMerchant($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_resource_merchant !== $v) {
            $this->fk_resource_merchant = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_FK_RESOURCE_MERCHANT] = true;
        }

        if ($this->aSpyMerchant !== null && $this->aSpyMerchant->getIdMerchant() !== $v) {
            $this->aSpyMerchant = null;
        }

        return $this;
    } // setFkResourceMerchant()

    /**
     * Set the value of [fk_resource_page] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setFkResourcePage($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_resource_page !== $v) {
            $this->fk_resource_page = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_FK_RESOURCE_PAGE] = true;
        }

        if ($this->aCmsPage !== null && $this->aCmsPage->getIdCmsPage() !== $v) {
            $this->aCmsPage = null;
        }

        return $this;
    } // setFkResourcePage()

    /**
     * Set the value of [fk_resource_product_abstract] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setFkResourceProductAbstract($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_resource_product_abstract !== $v) {
            $this->fk_resource_product_abstract = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_ABSTRACT] = true;
        }

        if ($this->aSpyProduct !== null && $this->aSpyProduct->getIdProductAbstract() !== $v) {
            $this->aSpyProduct = null;
        }

        return $this;
    } // setFkResourceProductAbstract()

    /**
     * Set the value of [fk_resource_product_set] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setFkResourceProductSet($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_resource_product_set !== $v) {
            $this->fk_resource_product_set = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_SET] = true;
        }

        if ($this->aSpyProductSet !== null && $this->aSpyProductSet->getIdProductSet() !== $v) {
            $this->aSpyProductSet = null;
        }

        return $this;
    } // setFkResourceProductSet()

    /**
     * Set the value of [fk_resource_redirect] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setFkResourceRedirect($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_resource_redirect !== $v) {
            $this->fk_resource_redirect = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_FK_RESOURCE_REDIRECT] = true;
        }

        if ($this->aSpyUrlRedirect !== null && $this->aSpyUrlRedirect->getIdUrlRedirect() !== $v) {
            $this->aSpyUrlRedirect = null;
        }

        return $this;
    } // setFkResourceRedirect()

    /**
     * Set the value of [url] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[SpyUrlTableMap::COL_URL] = true;
        }

        return $this;
    } // setUrl()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyUrlTableMap::translateFieldName('IdUrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_url = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyUrlTableMap::translateFieldName('FkLocale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_locale = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyUrlTableMap::translateFieldName('FkResourceCategorynode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_resource_categorynode = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyUrlTableMap::translateFieldName('FkResourceMerchant', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_resource_merchant = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyUrlTableMap::translateFieldName('FkResourcePage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_resource_page = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyUrlTableMap::translateFieldName('FkResourceProductAbstract', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_resource_product_abstract = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyUrlTableMap::translateFieldName('FkResourceProductSet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_resource_product_set = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyUrlTableMap::translateFieldName('FkResourceRedirect', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_resource_redirect = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyUrlTableMap::translateFieldName('Url', TableMap::TYPE_PHPNAME, $indexType)];
            $this->url = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 9; // 9 = SpyUrlTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Url\\Persistence\\SpyUrl'), 0, $e);
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
        if ($this->aSpyLocale !== null && $this->fk_locale !== $this->aSpyLocale->getIdLocale()) {
            $this->aSpyLocale = null;
        }
        if ($this->aSpyCategoryNode !== null && $this->fk_resource_categorynode !== $this->aSpyCategoryNode->getIdCategoryNode()) {
            $this->aSpyCategoryNode = null;
        }
        if ($this->aSpyMerchant !== null && $this->fk_resource_merchant !== $this->aSpyMerchant->getIdMerchant()) {
            $this->aSpyMerchant = null;
        }
        if ($this->aCmsPage !== null && $this->fk_resource_page !== $this->aCmsPage->getIdCmsPage()) {
            $this->aCmsPage = null;
        }
        if ($this->aSpyProduct !== null && $this->fk_resource_product_abstract !== $this->aSpyProduct->getIdProductAbstract()) {
            $this->aSpyProduct = null;
        }
        if ($this->aSpyProductSet !== null && $this->fk_resource_product_set !== $this->aSpyProductSet->getIdProductSet()) {
            $this->aSpyProductSet = null;
        }
        if ($this->aSpyUrlRedirect !== null && $this->fk_resource_redirect !== $this->aSpyUrlRedirect->getIdUrlRedirect()) {
            $this->aSpyUrlRedirect = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyUrlTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyUrlQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyCategoryNode = null;
            $this->aCmsPage = null;
            $this->aSpyMerchant = null;
            $this->aSpyProductSet = null;
            $this->aSpyProduct = null;
            $this->aSpyLocale = null;
            $this->aSpyUrlRedirect = null;
            $this->collSpyNavigationNodeLocalizedAttributess = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyUrl::setDeleted()
     * @see SpyUrl::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyUrlQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlTableMap::DATABASE_NAME);
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

                SpyUrlTableMap::addInstanceToPool($this);
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

            if ($this->aSpyCategoryNode !== null) {
                if ($this->aSpyCategoryNode->isModified() || $this->aSpyCategoryNode->isNew()) {
                    $affectedRows += $this->aSpyCategoryNode->save($con);
                }
                $this->setSpyCategoryNode($this->aSpyCategoryNode);
            }

            if ($this->aCmsPage !== null) {
                if ($this->aCmsPage->isModified() || $this->aCmsPage->isNew()) {
                    $affectedRows += $this->aCmsPage->save($con);
                }
                $this->setCmsPage($this->aCmsPage);
            }

            if ($this->aSpyMerchant !== null) {
                if ($this->aSpyMerchant->isModified() || $this->aSpyMerchant->isNew()) {
                    $affectedRows += $this->aSpyMerchant->save($con);
                }
                $this->setSpyMerchant($this->aSpyMerchant);
            }

            if ($this->aSpyProductSet !== null) {
                if ($this->aSpyProductSet->isModified() || $this->aSpyProductSet->isNew()) {
                    $affectedRows += $this->aSpyProductSet->save($con);
                }
                $this->setSpyProductSet($this->aSpyProductSet);
            }

            if ($this->aSpyProduct !== null) {
                if ($this->aSpyProduct->isModified() || $this->aSpyProduct->isNew()) {
                    $affectedRows += $this->aSpyProduct->save($con);
                }
                $this->setSpyProduct($this->aSpyProduct);
            }

            if ($this->aSpyLocale !== null) {
                if ($this->aSpyLocale->isModified() || $this->aSpyLocale->isNew()) {
                    $affectedRows += $this->aSpyLocale->save($con);
                }
                $this->setSpyLocale($this->aSpyLocale);
            }

            if ($this->aSpyUrlRedirect !== null) {
                if ($this->aSpyUrlRedirect->isModified() || $this->aSpyUrlRedirect->isNew()) {
                    $affectedRows += $this->aSpyUrlRedirect->save($con);
                }
                $this->setSpyUrlRedirect($this->aSpyUrlRedirect);
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

            if ($this->spyNavigationNodeLocalizedAttributessScheduledForDeletion !== null) {
                if (!$this->spyNavigationNodeLocalizedAttributessScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyNavigationNodeLocalizedAttributessScheduledForDeletion as $spyNavigationNodeLocalizedAttributes) {
                        // need to save related object because we set the relation to null
                        $spyNavigationNodeLocalizedAttributes->save($con);
                    }
                    $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion = null;
                }
            }

            if ($this->collSpyNavigationNodeLocalizedAttributess !== null) {
                foreach ($this->collSpyNavigationNodeLocalizedAttributess as $referrerFK) {
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

        $this->modifiedColumns[SpyUrlTableMap::COL_ID_URL] = true;
        if (null !== $this->id_url) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyUrlTableMap::COL_ID_URL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyUrlTableMap::COL_ID_URL)) {
            $modifiedColumns[':p' . $index++]  = 'id_url';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_LOCALE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_locale';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_CATEGORYNODE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_resource_categorynode';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_MERCHANT)) {
            $modifiedColumns[':p' . $index++]  = 'fk_resource_merchant';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_PAGE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_resource_page';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_ABSTRACT)) {
            $modifiedColumns[':p' . $index++]  = 'fk_resource_product_abstract';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_SET)) {
            $modifiedColumns[':p' . $index++]  = 'fk_resource_product_set';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_REDIRECT)) {
            $modifiedColumns[':p' . $index++]  = 'fk_resource_redirect';
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_URL)) {
            $modifiedColumns[':p' . $index++]  = 'url';
        }

        $sql = sprintf(
            'INSERT INTO spy_url (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_url':
                        $stmt->bindValue($identifier, $this->id_url, PDO::PARAM_INT);
                        break;
                    case 'fk_locale':
                        $stmt->bindValue($identifier, $this->fk_locale, PDO::PARAM_INT);
                        break;
                    case 'fk_resource_categorynode':
                        $stmt->bindValue($identifier, $this->fk_resource_categorynode, PDO::PARAM_INT);
                        break;
                    case 'fk_resource_merchant':
                        $stmt->bindValue($identifier, $this->fk_resource_merchant, PDO::PARAM_INT);
                        break;
                    case 'fk_resource_page':
                        $stmt->bindValue($identifier, $this->fk_resource_page, PDO::PARAM_INT);
                        break;
                    case 'fk_resource_product_abstract':
                        $stmt->bindValue($identifier, $this->fk_resource_product_abstract, PDO::PARAM_INT);
                        break;
                    case 'fk_resource_product_set':
                        $stmt->bindValue($identifier, $this->fk_resource_product_set, PDO::PARAM_INT);
                        break;
                    case 'fk_resource_redirect':
                        $stmt->bindValue($identifier, $this->fk_resource_redirect, PDO::PARAM_INT);
                        break;
                    case 'url':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_url_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdUrl($pk);

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
        $pos = SpyUrlTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdUrl();
                break;
            case 1:
                return $this->getFkLocale();
                break;
            case 2:
                return $this->getFkResourceCategorynode();
                break;
            case 3:
                return $this->getFkResourceMerchant();
                break;
            case 4:
                return $this->getFkResourcePage();
                break;
            case 5:
                return $this->getFkResourceProductAbstract();
                break;
            case 6:
                return $this->getFkResourceProductSet();
                break;
            case 7:
                return $this->getFkResourceRedirect();
                break;
            case 8:
                return $this->getUrl();
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

        if (isset($alreadyDumpedObjects['SpyUrl'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyUrl'][$this->hashCode()] = true;
        $keys = SpyUrlTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdUrl(),
            $keys[1] => $this->getFkLocale(),
            $keys[2] => $this->getFkResourceCategorynode(),
            $keys[3] => $this->getFkResourceMerchant(),
            $keys[4] => $this->getFkResourcePage(),
            $keys[5] => $this->getFkResourceProductAbstract(),
            $keys[6] => $this->getFkResourceProductSet(),
            $keys[7] => $this->getFkResourceRedirect(),
            $keys[8] => $this->getUrl(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyCategoryNode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCategoryNode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_category_node';
                        break;
                    default:
                        $key = 'SpyCategoryNode';
                }

                $result[$key] = $this->aSpyCategoryNode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCmsPage) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCmsPage';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_cms_page';
                        break;
                    default:
                        $key = 'CmsPage';
                }

                $result[$key] = $this->aCmsPage->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyMerchant) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyMerchant';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_merchant';
                        break;
                    default:
                        $key = 'SpyMerchant';
                }

                $result[$key] = $this->aSpyMerchant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyProductSet) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductSet';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_set';
                        break;
                    default:
                        $key = 'SpyProductSet';
                }

                $result[$key] = $this->aSpyProductSet->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyProduct) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductAbstract';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_abstract';
                        break;
                    default:
                        $key = 'SpyProduct';
                }

                $result[$key] = $this->aSpyProduct->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyLocale) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyLocale';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_locale';
                        break;
                    default:
                        $key = 'SpyLocale';
                }

                $result[$key] = $this->aSpyLocale->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyUrlRedirect) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyUrlRedirect';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_url_redirect';
                        break;
                    default:
                        $key = 'SpyUrlRedirect';
                }

                $result[$key] = $this->aSpyUrlRedirect->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyNavigationNodeLocalizedAttributess) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyNavigationNodeLocalizedAttributess';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_navigation_node_localized_attributess';
                        break;
                    default:
                        $key = 'SpyNavigationNodeLocalizedAttributess';
                }

                $result[$key] = $this->collSpyNavigationNodeLocalizedAttributess->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyUrlTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdUrl($value);
                break;
            case 1:
                $this->setFkLocale($value);
                break;
            case 2:
                $this->setFkResourceCategorynode($value);
                break;
            case 3:
                $this->setFkResourceMerchant($value);
                break;
            case 4:
                $this->setFkResourcePage($value);
                break;
            case 5:
                $this->setFkResourceProductAbstract($value);
                break;
            case 6:
                $this->setFkResourceProductSet($value);
                break;
            case 7:
                $this->setFkResourceRedirect($value);
                break;
            case 8:
                $this->setUrl($value);
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
     * @return     $this|\Orm\Zed\Url\Persistence\SpyUrl
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyUrlTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdUrl($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkLocale($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkResourceCategorynode($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFkResourceMerchant($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setFkResourcePage($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setFkResourceProductAbstract($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setFkResourceProductSet($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setFkResourceRedirect($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setUrl($arr[$keys[8]]);
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
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object, for fluid interface
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
        $criteria = new Criteria(SpyUrlTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyUrlTableMap::COL_ID_URL)) {
            $criteria->add(SpyUrlTableMap::COL_ID_URL, $this->id_url);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_LOCALE)) {
            $criteria->add(SpyUrlTableMap::COL_FK_LOCALE, $this->fk_locale);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_CATEGORYNODE)) {
            $criteria->add(SpyUrlTableMap::COL_FK_RESOURCE_CATEGORYNODE, $this->fk_resource_categorynode);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_MERCHANT)) {
            $criteria->add(SpyUrlTableMap::COL_FK_RESOURCE_MERCHANT, $this->fk_resource_merchant);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_PAGE)) {
            $criteria->add(SpyUrlTableMap::COL_FK_RESOURCE_PAGE, $this->fk_resource_page);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_ABSTRACT)) {
            $criteria->add(SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_ABSTRACT, $this->fk_resource_product_abstract);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_SET)) {
            $criteria->add(SpyUrlTableMap::COL_FK_RESOURCE_PRODUCT_SET, $this->fk_resource_product_set);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_FK_RESOURCE_REDIRECT)) {
            $criteria->add(SpyUrlTableMap::COL_FK_RESOURCE_REDIRECT, $this->fk_resource_redirect);
        }
        if ($this->isColumnModified(SpyUrlTableMap::COL_URL)) {
            $criteria->add(SpyUrlTableMap::COL_URL, $this->url);
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
        $criteria = ChildSpyUrlQuery::create();
        $criteria->add(SpyUrlTableMap::COL_ID_URL, $this->id_url);

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
        $validPk = null !== $this->getIdUrl();

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
        return $this->getIdUrl();
    }

    /**
     * Generic method to set the primary key (id_url column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdUrl($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdUrl();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Url\Persistence\SpyUrl (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkLocale($this->getFkLocale());
        $copyObj->setFkResourceCategorynode($this->getFkResourceCategorynode());
        $copyObj->setFkResourceMerchant($this->getFkResourceMerchant());
        $copyObj->setFkResourcePage($this->getFkResourcePage());
        $copyObj->setFkResourceProductAbstract($this->getFkResourceProductAbstract());
        $copyObj->setFkResourceProductSet($this->getFkResourceProductSet());
        $copyObj->setFkResourceRedirect($this->getFkResourceRedirect());
        $copyObj->setUrl($this->getUrl());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyNavigationNodeLocalizedAttributess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyNavigationNodeLocalizedAttributes($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdUrl(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Url\Persistence\SpyUrl Clone of current object.
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
     * Declares an association between this object and a SpyCategoryNode object.
     *
     * @param  SpyCategoryNode|null $v
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyCategoryNode(SpyCategoryNode $v = null)
    {
        if ($v === null) {
            $this->setFkResourceCategorynode(NULL);
        } else {
            $this->setFkResourceCategorynode($v->getIdCategoryNode());
        }

        $this->aSpyCategoryNode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyCategoryNode object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyUrl($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCategoryNode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCategoryNode|null The associated SpyCategoryNode object.
     * @throws PropelException
     */
    public function getSpyCategoryNode(ConnectionInterface $con = null)
    {
        if ($this->aSpyCategoryNode === null && ($this->fk_resource_categorynode != 0)) {
            $this->aSpyCategoryNode = SpyCategoryNodeQuery::create()->findPk($this->fk_resource_categorynode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyCategoryNode->addSpyUrls($this);
             */
        }

        return $this->aSpyCategoryNode;
    }

    /**
     * Declares an association between this object and a SpyCmsPage object.
     *
     * @param  SpyCmsPage|null $v
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCmsPage(SpyCmsPage $v = null)
    {
        if ($v === null) {
            $this->setFkResourcePage(NULL);
        } else {
            $this->setFkResourcePage($v->getIdCmsPage());
        }

        $this->aCmsPage = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyCmsPage object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyUrl($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCmsPage object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCmsPage|null The associated SpyCmsPage object.
     * @throws PropelException
     */
    public function getCmsPage(ConnectionInterface $con = null)
    {
        if ($this->aCmsPage === null && ($this->fk_resource_page != 0)) {
            $this->aCmsPage = SpyCmsPageQuery::create()->findPk($this->fk_resource_page, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCmsPage->addSpyUrls($this);
             */
        }

        return $this->aCmsPage;
    }

    /**
     * Declares an association between this object and a SpyMerchant object.
     *
     * @param  SpyMerchant|null $v
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyMerchant(SpyMerchant $v = null)
    {
        if ($v === null) {
            $this->setFkResourceMerchant(NULL);
        } else {
            $this->setFkResourceMerchant($v->getIdMerchant());
        }

        $this->aSpyMerchant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyMerchant object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyUrl($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyMerchant object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyMerchant|null The associated SpyMerchant object.
     * @throws PropelException
     */
    public function getSpyMerchant(ConnectionInterface $con = null)
    {
        if ($this->aSpyMerchant === null && ($this->fk_resource_merchant != 0)) {
            $this->aSpyMerchant = SpyMerchantQuery::create()->findPk($this->fk_resource_merchant, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyMerchant->addSpyUrls($this);
             */
        }

        return $this->aSpyMerchant;
    }

    /**
     * Declares an association between this object and a SpyProductSet object.
     *
     * @param  SpyProductSet|null $v
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyProductSet(SpyProductSet $v = null)
    {
        if ($v === null) {
            $this->setFkResourceProductSet(NULL);
        } else {
            $this->setFkResourceProductSet($v->getIdProductSet());
        }

        $this->aSpyProductSet = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyProductSet object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyUrl($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyProductSet object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyProductSet|null The associated SpyProductSet object.
     * @throws PropelException
     */
    public function getSpyProductSet(ConnectionInterface $con = null)
    {
        if ($this->aSpyProductSet === null && ($this->fk_resource_product_set != 0)) {
            $this->aSpyProductSet = SpyProductSetQuery::create()->findPk($this->fk_resource_product_set, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyProductSet->addSpyUrls($this);
             */
        }

        return $this->aSpyProductSet;
    }

    /**
     * Declares an association between this object and a SpyProductAbstract object.
     *
     * @param  SpyProductAbstract|null $v
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyProduct(SpyProductAbstract $v = null)
    {
        if ($v === null) {
            $this->setFkResourceProductAbstract(NULL);
        } else {
            $this->setFkResourceProductAbstract($v->getIdProductAbstract());
        }

        $this->aSpyProduct = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyProductAbstract object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyUrl($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyProductAbstract object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyProductAbstract|null The associated SpyProductAbstract object.
     * @throws PropelException
     */
    public function getSpyProduct(ConnectionInterface $con = null)
    {
        if ($this->aSpyProduct === null && ($this->fk_resource_product_abstract != 0)) {
            $this->aSpyProduct = SpyProductAbstractQuery::create()->findPk($this->fk_resource_product_abstract, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyProduct->addSpyUrls($this);
             */
        }

        return $this->aSpyProduct;
    }

    /**
     * Declares an association between this object and a SpyLocale object.
     *
     * @param  SpyLocale $v
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyLocale(SpyLocale $v = null)
    {
        if ($v === null) {
            $this->setFkLocale(NULL);
        } else {
            $this->setFkLocale($v->getIdLocale());
        }

        $this->aSpyLocale = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyLocale object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyUrl($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyLocale object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyLocale The associated SpyLocale object.
     * @throws PropelException
     */
    public function getSpyLocale(ConnectionInterface $con = null)
    {
        if ($this->aSpyLocale === null && ($this->fk_locale != 0)) {
            $this->aSpyLocale = SpyLocaleQuery::create()->findPk($this->fk_locale, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyLocale->addSpyUrls($this);
             */
        }

        return $this->aSpyLocale;
    }

    /**
     * Declares an association between this object and a ChildSpyUrlRedirect object.
     *
     * @param  ChildSpyUrlRedirect|null $v
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyUrlRedirect(ChildSpyUrlRedirect $v = null)
    {
        if ($v === null) {
            $this->setFkResourceRedirect(NULL);
        } else {
            $this->setFkResourceRedirect($v->getIdUrlRedirect());
        }

        $this->aSpyUrlRedirect = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyUrlRedirect object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyUrl($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyUrlRedirect object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyUrlRedirect|null The associated ChildSpyUrlRedirect object.
     * @throws PropelException
     */
    public function getSpyUrlRedirect(ConnectionInterface $con = null)
    {
        if ($this->aSpyUrlRedirect === null && ($this->fk_resource_redirect != 0)) {
            $this->aSpyUrlRedirect = ChildSpyUrlRedirectQuery::create()->findPk($this->fk_resource_redirect, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyUrlRedirect->addSpyUrls($this);
             */
        }

        return $this->aSpyUrlRedirect;
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
        if ('SpyNavigationNodeLocalizedAttributes' === $relationName) {
            $this->initSpyNavigationNodeLocalizedAttributess();
            return;
        }
    }

    /**
     * Clears out the collSpyNavigationNodeLocalizedAttributess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyNavigationNodeLocalizedAttributess()
     */
    public function clearSpyNavigationNodeLocalizedAttributess()
    {
        $this->collSpyNavigationNodeLocalizedAttributess = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyNavigationNodeLocalizedAttributess collection loaded partially.
     */
    public function resetPartialSpyNavigationNodeLocalizedAttributess($v = true)
    {
        $this->collSpyNavigationNodeLocalizedAttributessPartial = $v;
    }

    /**
     * Initializes the collSpyNavigationNodeLocalizedAttributess collection.
     *
     * By default this just sets the collSpyNavigationNodeLocalizedAttributess collection to an empty array (like clearcollSpyNavigationNodeLocalizedAttributess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyNavigationNodeLocalizedAttributess($overrideExisting = true)
    {
        if (null !== $this->collSpyNavigationNodeLocalizedAttributess && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyNavigationNodeLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyNavigationNodeLocalizedAttributess = new $collectionClassName;
        $this->collSpyNavigationNodeLocalizedAttributess->setModel('\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes');
    }

    /**
     * Gets an array of SpyNavigationNodeLocalizedAttributes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUrl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyNavigationNodeLocalizedAttributes[] List of SpyNavigationNodeLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<SpyNavigationNodeLocalizedAttributes> List of SpyNavigationNodeLocalizedAttributes objects
     * @throws PropelException
     */
    public function getSpyNavigationNodeLocalizedAttributess(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyNavigationNodeLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyNavigationNodeLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyNavigationNodeLocalizedAttributess) {
                    $this->initSpyNavigationNodeLocalizedAttributess();
                } else {
                    $collectionClassName = SpyNavigationNodeLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

                    $collSpyNavigationNodeLocalizedAttributess = new $collectionClassName;
                    $collSpyNavigationNodeLocalizedAttributess->setModel('\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes');

                    return $collSpyNavigationNodeLocalizedAttributess;
                }
            } else {
                $collSpyNavigationNodeLocalizedAttributess = SpyNavigationNodeLocalizedAttributesQuery::create(null, $criteria)
                    ->filterBySpyUrl($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyNavigationNodeLocalizedAttributessPartial && count($collSpyNavigationNodeLocalizedAttributess)) {
                        $this->initSpyNavigationNodeLocalizedAttributess(false);

                        foreach ($collSpyNavigationNodeLocalizedAttributess as $obj) {
                            if (false == $this->collSpyNavigationNodeLocalizedAttributess->contains($obj)) {
                                $this->collSpyNavigationNodeLocalizedAttributess->append($obj);
                            }
                        }

                        $this->collSpyNavigationNodeLocalizedAttributessPartial = true;
                    }

                    return $collSpyNavigationNodeLocalizedAttributess;
                }

                if ($partial && $this->collSpyNavigationNodeLocalizedAttributess) {
                    foreach ($this->collSpyNavigationNodeLocalizedAttributess as $obj) {
                        if ($obj->isNew()) {
                            $collSpyNavigationNodeLocalizedAttributess[] = $obj;
                        }
                    }
                }

                $this->collSpyNavigationNodeLocalizedAttributess = $collSpyNavigationNodeLocalizedAttributess;
                $this->collSpyNavigationNodeLocalizedAttributessPartial = false;
            }
        }

        return $this->collSpyNavigationNodeLocalizedAttributess;
    }

    /**
     * Sets a collection of SpyNavigationNodeLocalizedAttributes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyNavigationNodeLocalizedAttributess A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUrl The current object (for fluent API support)
     */
    public function setSpyNavigationNodeLocalizedAttributess(Collection $spyNavigationNodeLocalizedAttributess, ConnectionInterface $con = null)
    {
        /** @var SpyNavigationNodeLocalizedAttributes[] $spyNavigationNodeLocalizedAttributessToDelete */
        $spyNavigationNodeLocalizedAttributessToDelete = $this->getSpyNavigationNodeLocalizedAttributess(new Criteria(), $con)->diff($spyNavigationNodeLocalizedAttributess);


        $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion = $spyNavigationNodeLocalizedAttributessToDelete;

        foreach ($spyNavigationNodeLocalizedAttributessToDelete as $spyNavigationNodeLocalizedAttributesRemoved) {
            $spyNavigationNodeLocalizedAttributesRemoved->setSpyUrl(null);
        }

        $this->collSpyNavigationNodeLocalizedAttributess = null;
        foreach ($spyNavigationNodeLocalizedAttributess as $spyNavigationNodeLocalizedAttributes) {
            $this->addSpyNavigationNodeLocalizedAttributes($spyNavigationNodeLocalizedAttributes);
        }

        $this->collSpyNavigationNodeLocalizedAttributess = $spyNavigationNodeLocalizedAttributess;
        $this->collSpyNavigationNodeLocalizedAttributessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyNavigationNodeLocalizedAttributes objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyNavigationNodeLocalizedAttributes objects.
     * @throws PropelException
     */
    public function countSpyNavigationNodeLocalizedAttributess(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyNavigationNodeLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyNavigationNodeLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyNavigationNodeLocalizedAttributess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyNavigationNodeLocalizedAttributess());
            }

            $query = SpyNavigationNodeLocalizedAttributesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyUrl($this)
                ->count($con);
        }

        return count($this->collSpyNavigationNodeLocalizedAttributess);
    }

    /**
     * Method called to associate a SpyNavigationNodeLocalizedAttributes object to this object
     * through the SpyNavigationNodeLocalizedAttributes foreign key attribute.
     *
     * @param  SpyNavigationNodeLocalizedAttributes $l SpyNavigationNodeLocalizedAttributes
     * @return $this|\Orm\Zed\Url\Persistence\SpyUrl The current object (for fluent API support)
     */
    public function addSpyNavigationNodeLocalizedAttributes(SpyNavigationNodeLocalizedAttributes $l)
    {
        if ($this->collSpyNavigationNodeLocalizedAttributess === null) {
            $this->initSpyNavigationNodeLocalizedAttributess();
            $this->collSpyNavigationNodeLocalizedAttributessPartial = true;
        }

        if (!$this->collSpyNavigationNodeLocalizedAttributess->contains($l)) {
            $this->doAddSpyNavigationNodeLocalizedAttributes($l);

            if ($this->spyNavigationNodeLocalizedAttributessScheduledForDeletion and $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion->contains($l)) {
                $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion->remove($this->spyNavigationNodeLocalizedAttributessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyNavigationNodeLocalizedAttributes $spyNavigationNodeLocalizedAttributes The SpyNavigationNodeLocalizedAttributes object to add.
     */
    protected function doAddSpyNavigationNodeLocalizedAttributes(SpyNavigationNodeLocalizedAttributes $spyNavigationNodeLocalizedAttributes)
    {
        $this->collSpyNavigationNodeLocalizedAttributess[]= $spyNavigationNodeLocalizedAttributes;
        $spyNavigationNodeLocalizedAttributes->setSpyUrl($this);
    }

    /**
     * @param  SpyNavigationNodeLocalizedAttributes $spyNavigationNodeLocalizedAttributes The SpyNavigationNodeLocalizedAttributes object to remove.
     * @return $this|ChildSpyUrl The current object (for fluent API support)
     */
    public function removeSpyNavigationNodeLocalizedAttributes(SpyNavigationNodeLocalizedAttributes $spyNavigationNodeLocalizedAttributes)
    {
        if ($this->getSpyNavigationNodeLocalizedAttributess()->contains($spyNavigationNodeLocalizedAttributes)) {
            $pos = $this->collSpyNavigationNodeLocalizedAttributess->search($spyNavigationNodeLocalizedAttributes);
            $this->collSpyNavigationNodeLocalizedAttributess->remove($pos);
            if (null === $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion) {
                $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion = clone $this->collSpyNavigationNodeLocalizedAttributess;
                $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion->clear();
            }
            $this->spyNavigationNodeLocalizedAttributessScheduledForDeletion[]= $spyNavigationNodeLocalizedAttributes;
            $spyNavigationNodeLocalizedAttributes->setSpyUrl(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUrl is new, it will return
     * an empty collection; or if this SpyUrl has previously
     * been saved, it will retrieve related SpyNavigationNodeLocalizedAttributess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUrl.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyNavigationNodeLocalizedAttributes[] List of SpyNavigationNodeLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<SpyNavigationNodeLocalizedAttributes}> List of SpyNavigationNodeLocalizedAttributes objects
     */
    public function getSpyNavigationNodeLocalizedAttributessJoinSpyNavigationNode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyNavigationNodeLocalizedAttributesQuery::create(null, $criteria);
        $query->joinWith('SpyNavigationNode', $joinBehavior);

        return $this->getSpyNavigationNodeLocalizedAttributess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUrl is new, it will return
     * an empty collection; or if this SpyUrl has previously
     * been saved, it will retrieve related SpyNavigationNodeLocalizedAttributess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUrl.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyNavigationNodeLocalizedAttributes[] List of SpyNavigationNodeLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<SpyNavigationNodeLocalizedAttributes}> List of SpyNavigationNodeLocalizedAttributes objects
     */
    public function getSpyNavigationNodeLocalizedAttributessJoinSpyLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyNavigationNodeLocalizedAttributesQuery::create(null, $criteria);
        $query->joinWith('SpyLocale', $joinBehavior);

        return $this->getSpyNavigationNodeLocalizedAttributess($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyCategoryNode) {
            $this->aSpyCategoryNode->removeSpyUrl($this);
        }
        if (null !== $this->aCmsPage) {
            $this->aCmsPage->removeSpyUrl($this);
        }
        if (null !== $this->aSpyMerchant) {
            $this->aSpyMerchant->removeSpyUrl($this);
        }
        if (null !== $this->aSpyProductSet) {
            $this->aSpyProductSet->removeSpyUrl($this);
        }
        if (null !== $this->aSpyProduct) {
            $this->aSpyProduct->removeSpyUrl($this);
        }
        if (null !== $this->aSpyLocale) {
            $this->aSpyLocale->removeSpyUrl($this);
        }
        if (null !== $this->aSpyUrlRedirect) {
            $this->aSpyUrlRedirect->removeSpyUrl($this);
        }
        $this->id_url = null;
        $this->fk_locale = null;
        $this->fk_resource_categorynode = null;
        $this->fk_resource_merchant = null;
        $this->fk_resource_page = null;
        $this->fk_resource_product_abstract = null;
        $this->fk_resource_product_set = null;
        $this->fk_resource_redirect = null;
        $this->url = null;
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
            if ($this->collSpyNavigationNodeLocalizedAttributess) {
                foreach ($this->collSpyNavigationNodeLocalizedAttributess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyNavigationNodeLocalizedAttributess = null;
        $this->aSpyCategoryNode = null;
        $this->aCmsPage = null;
        $this->aSpyMerchant = null;
        $this->aSpyProductSet = null;
        $this->aSpyProduct = null;
        $this->aSpyLocale = null;
        $this->aSpyUrlRedirect = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyUrlTableMap::DEFAULT_STRING_FORMAT);
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_url.create';
        } else {
            $this->_eventName = 'Entity.spy_url.update';
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

        if ($this->_eventName !== 'Entity.spy_url.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_url',
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
            'name' => 'spy_url',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_url.delete',
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
            $field = str_replace('spy_url.', '', $modifiedColumn);
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
            $field = str_replace('spy_url.', '', $additionalValueColumnName);
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
        $columnType = SpyUrlTableMap::getTableMap()->getColumn($column)->getType();
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
