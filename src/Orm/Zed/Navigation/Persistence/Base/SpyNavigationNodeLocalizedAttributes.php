<?php

namespace Orm\Zed\Navigation\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\Locale\Persistence\SpyLocaleQuery;
use Orm\Zed\Navigation\Persistence\SpyNavigationNode as ChildSpyNavigationNode;
use Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes as ChildSpyNavigationNodeLocalizedAttributes;
use Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributesQuery as ChildSpyNavigationNodeLocalizedAttributesQuery;
use Orm\Zed\Navigation\Persistence\SpyNavigationNodeQuery as ChildSpyNavigationNodeQuery;
use Orm\Zed\Navigation\Persistence\Map\SpyNavigationNodeLocalizedAttributesTableMap;
use Orm\Zed\Url\Persistence\SpyUrl;
use Orm\Zed\Url\Persistence\SpyUrlQuery;
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
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'spy_navigation_node_localized_attributes' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Navigation.Persistence.Base
 */
abstract class SpyNavigationNodeLocalizedAttributes implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Navigation\\Persistence\\Map\\SpyNavigationNodeLocalizedAttributesTableMap';


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
     * The value for the id_navigation_node_localized_attributes field.
     *
     * @var        int
     */
    protected $id_navigation_node_localized_attributes;

    /**
     * The value for the fk_locale field.
     *
     * @var        int
     */
    protected $fk_locale;

    /**
     * The value for the fk_navigation_node field.
     *
     * @var        int
     */
    protected $fk_navigation_node;

    /**
     * The value for the fk_url field.
     *
     * @var        int|null
     */
    protected $fk_url;

    /**
     * The value for the css_class field.
     *
     * @var        string|null
     */
    protected $css_class;

    /**
     * The value for the external_url field.
     *
     * @var        string|null
     */
    protected $external_url;

    /**
     * The value for the link field.
     *
     * @var        string|null
     */
    protected $link;

    /**
     * The value for the title field.
     *
     * @var        string
     */
    protected $title;

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
     * @var        ChildSpyNavigationNode
     */
    protected $aSpyNavigationNode;

    /**
     * @var        SpyLocale
     */
    protected $aSpyLocale;

    /**
     * @var        SpyUrl
     */
    protected $aSpyUrl;

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
        'spy_navigation_node_localized_attributes.fk_navigation_node' => 'fk_navigation_node',
        'spy_navigation_node_localized_attributes.fk_locale' => 'fk_locale',
        'spy_navigation_node_localized_attributes.fk_url' => 'fk_url',
    ];

    /**
     * Initializes internal state of Orm\Zed\Navigation\Persistence\Base\SpyNavigationNodeLocalizedAttributes object.
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
     * Compares this with another <code>SpyNavigationNodeLocalizedAttributes</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyNavigationNodeLocalizedAttributes</code>, delegates to
     * <code>equals(SpyNavigationNodeLocalizedAttributes)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_navigation_node_localized_attributes] column value.
     *
     * @return int
     */
    public function getIdNavigationNodeLocalizedAttributes()
    {
        return $this->id_navigation_node_localized_attributes;
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
     * Get the [fk_navigation_node] column value.
     *
     * @return int
     */
    public function getFkNavigationNode()
    {
        return $this->fk_navigation_node;
    }

    /**
     * Get the [fk_url] column value.
     *
     * @return int|null
     */
    public function getFkUrl()
    {
        return $this->fk_url;
    }

    /**
     * Get the [css_class] column value.
     *
     * @return string|null
     */
    public function getCssClass()
    {
        return $this->css_class;
    }

    /**
     * Get the [external_url] column value.
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->external_url;
    }

    /**
     * Get the [link] column value.
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * Set the value of [id_navigation_node_localized_attributes] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setIdNavigationNodeLocalizedAttributes($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_navigation_node_localized_attributes !== $v) {
            $this->id_navigation_node_localized_attributes = $v;
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES] = true;
        }

        return $this;
    } // setIdNavigationNodeLocalizedAttributes()

    /**
     * Set the value of [fk_locale] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
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
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_LOCALE] = true;
        }

        if ($this->aSpyLocale !== null && $this->aSpyLocale->getIdLocale() !== $v) {
            $this->aSpyLocale = null;
        }

        return $this;
    } // setFkLocale()

    /**
     * Set the value of [fk_navigation_node] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setFkNavigationNode($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_navigation_node !== $v) {
            $this->fk_navigation_node = $v;
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_NAVIGATION_NODE] = true;
        }

        if ($this->aSpyNavigationNode !== null && $this->aSpyNavigationNode->getIdNavigationNode() !== $v) {
            $this->aSpyNavigationNode = null;
        }

        return $this;
    } // setFkNavigationNode()

    /**
     * Set the value of [fk_url] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setFkUrl($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_url !== $v) {
            $this->fk_url = $v;
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_URL] = true;
        }

        if ($this->aSpyUrl !== null && $this->aSpyUrl->getIdUrl() !== $v) {
            $this->aSpyUrl = null;
        }

        return $this;
    } // setFkUrl()

    /**
     * Set the value of [css_class] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setCssClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->css_class !== $v) {
            $this->css_class = $v;
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_CSS_CLASS] = true;
        }

        return $this;
    } // setCssClass()

    /**
     * Set the value of [external_url] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setExternalUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->external_url !== $v) {
            $this->external_url = $v;
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_EXTERNAL_URL] = true;
        }

        return $this;
    } // setExternalUrl()

    /**
     * Set the value of [link] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setLink($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->link !== $v) {
            $this->link = $v;
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_LINK] = true;
        }

        return $this;
    } // setLink()

    /**
     * Set the value of [title] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_TITLE] = true;
        }

        return $this;
    } // setTitle()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_UPDATED_AT] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('IdNavigationNodeLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_navigation_node_localized_attributes = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('FkLocale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_locale = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('FkNavigationNode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_navigation_node = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('FkUrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_url = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('CssClass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->css_class = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('ExternalUrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->external_url = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('Link', TableMap::TYPE_PHPNAME, $indexType)];
            $this->link = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('Title', TableMap::TYPE_PHPNAME, $indexType)];
            $this->title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = SpyNavigationNodeLocalizedAttributesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Navigation\\Persistence\\SpyNavigationNodeLocalizedAttributes'), 0, $e);
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
        if ($this->aSpyNavigationNode !== null && $this->fk_navigation_node !== $this->aSpyNavigationNode->getIdNavigationNode()) {
            $this->aSpyNavigationNode = null;
        }
        if ($this->aSpyUrl !== null && $this->fk_url !== $this->aSpyUrl->getIdUrl()) {
            $this->aSpyUrl = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyNavigationNodeLocalizedAttributesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyNavigationNodeLocalizedAttributesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyNavigationNode = null;
            $this->aSpyLocale = null;
            $this->aSpyUrl = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyNavigationNodeLocalizedAttributes::setDeleted()
     * @see SpyNavigationNodeLocalizedAttributes::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyNavigationNodeLocalizedAttributesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyNavigationNodeLocalizedAttributesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyNavigationNodeLocalizedAttributesTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            // event behavior

            $this->prepareSaveEventName();

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_UPDATED_AT)) {
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
                // event behavior

                if ($affectedRows) {
                    $this->addSaveEventToMemory();
                }

                SpyNavigationNodeLocalizedAttributesTableMap::addInstanceToPool($this);
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

            if ($this->aSpyNavigationNode !== null) {
                if ($this->aSpyNavigationNode->isModified() || $this->aSpyNavigationNode->isNew()) {
                    $affectedRows += $this->aSpyNavigationNode->save($con);
                }
                $this->setSpyNavigationNode($this->aSpyNavigationNode);
            }

            if ($this->aSpyLocale !== null) {
                if ($this->aSpyLocale->isModified() || $this->aSpyLocale->isNew()) {
                    $affectedRows += $this->aSpyLocale->save($con);
                }
                $this->setSpyLocale($this->aSpyLocale);
            }

            if ($this->aSpyUrl !== null) {
                if ($this->aSpyUrl->isModified() || $this->aSpyUrl->isNew()) {
                    $affectedRows += $this->aSpyUrl->save($con);
                }
                $this->setSpyUrl($this->aSpyUrl);
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

        $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES] = true;
        if (null !== $this->id_navigation_node_localized_attributes) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyNavigationNodeLocalizedAttributesTableMap::COL_ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = 'id_navigation_node_localized_attributes';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_LOCALE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_locale';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_NAVIGATION_NODE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_navigation_node';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_URL)) {
            $modifiedColumns[':p' . $index++]  = 'fk_url';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_CSS_CLASS)) {
            $modifiedColumns[':p' . $index++]  = 'css_class';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_EXTERNAL_URL)) {
            $modifiedColumns[':p' . $index++]  = 'external_url';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_LINK)) {
            $modifiedColumns[':p' . $index++]  = 'link';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'title';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO spy_navigation_node_localized_attributes (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_navigation_node_localized_attributes':
                        $stmt->bindValue($identifier, $this->id_navigation_node_localized_attributes, PDO::PARAM_INT);
                        break;
                    case 'fk_locale':
                        $stmt->bindValue($identifier, $this->fk_locale, PDO::PARAM_INT);
                        break;
                    case 'fk_navigation_node':
                        $stmt->bindValue($identifier, $this->fk_navigation_node, PDO::PARAM_INT);
                        break;
                    case 'fk_url':
                        $stmt->bindValue($identifier, $this->fk_url, PDO::PARAM_INT);
                        break;
                    case 'css_class':
                        $stmt->bindValue($identifier, $this->css_class, PDO::PARAM_STR);
                        break;
                    case 'external_url':
                        $stmt->bindValue($identifier, $this->external_url, PDO::PARAM_STR);
                        break;
                    case 'link':
                        $stmt->bindValue($identifier, $this->link, PDO::PARAM_STR);
                        break;
                    case 'title':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
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
            $pk = $con->lastInsertId('spy_navigation_node_localized_attributes_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdNavigationNodeLocalizedAttributes($pk);

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
        $pos = SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdNavigationNodeLocalizedAttributes();
                break;
            case 1:
                return $this->getFkLocale();
                break;
            case 2:
                return $this->getFkNavigationNode();
                break;
            case 3:
                return $this->getFkUrl();
                break;
            case 4:
                return $this->getCssClass();
                break;
            case 5:
                return $this->getExternalUrl();
                break;
            case 6:
                return $this->getLink();
                break;
            case 7:
                return $this->getTitle();
                break;
            case 8:
                return $this->getCreatedAt();
                break;
            case 9:
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

        if (isset($alreadyDumpedObjects['SpyNavigationNodeLocalizedAttributes'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyNavigationNodeLocalizedAttributes'][$this->hashCode()] = true;
        $keys = SpyNavigationNodeLocalizedAttributesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdNavigationNodeLocalizedAttributes(),
            $keys[1] => $this->getFkLocale(),
            $keys[2] => $this->getFkNavigationNode(),
            $keys[3] => $this->getFkUrl(),
            $keys[4] => $this->getCssClass(),
            $keys[5] => $this->getExternalUrl(),
            $keys[6] => $this->getLink(),
            $keys[7] => $this->getTitle(),
            $keys[8] => $this->getCreatedAt(),
            $keys[9] => $this->getUpdatedAt(),
        );
        if ($result[$keys[8]] instanceof \DateTimeInterface) {
            $result[$keys[8]] = $result[$keys[8]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyNavigationNode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyNavigationNode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_navigation_node';
                        break;
                    default:
                        $key = 'SpyNavigationNode';
                }

                $result[$key] = $this->aSpyNavigationNode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->aSpyUrl) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyUrl';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_url';
                        break;
                    default:
                        $key = 'SpyUrl';
                }

                $result[$key] = $this->aSpyUrl->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyNavigationNodeLocalizedAttributesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdNavigationNodeLocalizedAttributes($value);
                break;
            case 1:
                $this->setFkLocale($value);
                break;
            case 2:
                $this->setFkNavigationNode($value);
                break;
            case 3:
                $this->setFkUrl($value);
                break;
            case 4:
                $this->setCssClass($value);
                break;
            case 5:
                $this->setExternalUrl($value);
                break;
            case 6:
                $this->setLink($value);
                break;
            case 7:
                $this->setTitle($value);
                break;
            case 8:
                $this->setCreatedAt($value);
                break;
            case 9:
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
     * @return     $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyNavigationNodeLocalizedAttributesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdNavigationNodeLocalizedAttributes($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkLocale($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkNavigationNode($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFkUrl($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCssClass($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setExternalUrl($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setLink($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setTitle($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCreatedAt($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setUpdatedAt($arr[$keys[9]]);
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
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object, for fluid interface
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
        $criteria = new Criteria(SpyNavigationNodeLocalizedAttributesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES, $this->id_navigation_node_localized_attributes);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_LOCALE)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_LOCALE, $this->fk_locale);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_NAVIGATION_NODE)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_NAVIGATION_NODE, $this->fk_navigation_node);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_URL)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_FK_URL, $this->fk_url);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_CSS_CLASS)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_CSS_CLASS, $this->css_class);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_EXTERNAL_URL)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_EXTERNAL_URL, $this->external_url);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_LINK)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_LINK, $this->link);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_TITLE)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_TITLE, $this->title);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyNavigationNodeLocalizedAttributesTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildSpyNavigationNodeLocalizedAttributesQuery::create();
        $criteria->add(SpyNavigationNodeLocalizedAttributesTableMap::COL_ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES, $this->id_navigation_node_localized_attributes);

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
        $validPk = null !== $this->getIdNavigationNodeLocalizedAttributes();

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
        return $this->getIdNavigationNodeLocalizedAttributes();
    }

    /**
     * Generic method to set the primary key (id_navigation_node_localized_attributes column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdNavigationNodeLocalizedAttributes($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdNavigationNodeLocalizedAttributes();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkLocale($this->getFkLocale());
        $copyObj->setFkNavigationNode($this->getFkNavigationNode());
        $copyObj->setFkUrl($this->getFkUrl());
        $copyObj->setCssClass($this->getCssClass());
        $copyObj->setExternalUrl($this->getExternalUrl());
        $copyObj->setLink($this->getLink());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdNavigationNodeLocalizedAttributes(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes Clone of current object.
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
     * Declares an association between this object and a ChildSpyNavigationNode object.
     *
     * @param  ChildSpyNavigationNode $v
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyNavigationNode(ChildSpyNavigationNode $v = null)
    {
        if ($v === null) {
            $this->setFkNavigationNode(NULL);
        } else {
            $this->setFkNavigationNode($v->getIdNavigationNode());
        }

        $this->aSpyNavigationNode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyNavigationNode object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyNavigationNodeLocalizedAttributes($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyNavigationNode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyNavigationNode The associated ChildSpyNavigationNode object.
     * @throws PropelException
     */
    public function getSpyNavigationNode(ConnectionInterface $con = null)
    {
        if ($this->aSpyNavigationNode === null && ($this->fk_navigation_node != 0)) {
            $this->aSpyNavigationNode = ChildSpyNavigationNodeQuery::create()->findPk($this->fk_navigation_node, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyNavigationNode->addSpyNavigationNodeLocalizedAttributess($this);
             */
        }

        return $this->aSpyNavigationNode;
    }

    /**
     * Declares an association between this object and a SpyLocale object.
     *
     * @param  SpyLocale $v
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
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
            $v->addSpyNavigationNodeLocalizedAttributes($this);
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
                $this->aSpyLocale->addSpyNavigationNodeLocalizedAttributess($this);
             */
        }

        return $this->aSpyLocale;
    }

    /**
     * Declares an association between this object and a SpyUrl object.
     *
     * @param  SpyUrl|null $v
     * @return $this|\Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyUrl(SpyUrl $v = null)
    {
        if ($v === null) {
            $this->setFkUrl(NULL);
        } else {
            $this->setFkUrl($v->getIdUrl());
        }

        $this->aSpyUrl = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyUrl object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyNavigationNodeLocalizedAttributes($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyUrl object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyUrl|null The associated SpyUrl object.
     * @throws PropelException
     */
    public function getSpyUrl(ConnectionInterface $con = null)
    {
        if ($this->aSpyUrl === null && ($this->fk_url != 0)) {
            $this->aSpyUrl = SpyUrlQuery::create()->findPk($this->fk_url, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyUrl->addSpyNavigationNodeLocalizedAttributess($this);
             */
        }

        return $this->aSpyUrl;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyNavigationNode) {
            $this->aSpyNavigationNode->removeSpyNavigationNodeLocalizedAttributes($this);
        }
        if (null !== $this->aSpyLocale) {
            $this->aSpyLocale->removeSpyNavigationNodeLocalizedAttributes($this);
        }
        if (null !== $this->aSpyUrl) {
            $this->aSpyUrl->removeSpyNavigationNodeLocalizedAttributes($this);
        }
        $this->id_navigation_node_localized_attributes = null;
        $this->fk_locale = null;
        $this->fk_navigation_node = null;
        $this->fk_url = null;
        $this->css_class = null;
        $this->external_url = null;
        $this->link = null;
        $this->title = null;
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
        } // if ($deep)

        $this->aSpyNavigationNode = null;
        $this->aSpyLocale = null;
        $this->aSpyUrl = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyNavigationNodeLocalizedAttributesTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpyNavigationNodeLocalizedAttributes The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyNavigationNodeLocalizedAttributesTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_navigation_node_localized_attributes.create';
        } else {
            $this->_eventName = 'Entity.spy_navigation_node_localized_attributes.update';
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

        if ($this->_eventName !== 'Entity.spy_navigation_node_localized_attributes.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_navigation_node_localized_attributes',
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
            'name' => 'spy_navigation_node_localized_attributes',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_navigation_node_localized_attributes.delete',
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
            $field = str_replace('spy_navigation_node_localized_attributes.', '', $modifiedColumn);
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
            $field = str_replace('spy_navigation_node_localized_attributes.', '', $additionalValueColumnName);
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
        $columnType = SpyNavigationNodeLocalizedAttributesTableMap::getTableMap()->getColumn($column)->getType();
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
