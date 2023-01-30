<?php

namespace Orm\Zed\User\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\Acl\Persistence\SpyAclGroup;
use Orm\Zed\Acl\Persistence\SpyAclGroupQuery;
use Orm\Zed\Acl\Persistence\SpyAclUserHasGroup;
use Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery;
use Orm\Zed\Acl\Persistence\Base\SpyAclUserHasGroup as BaseSpyAclUserHasGroup;
use Orm\Zed\Acl\Persistence\Map\SpyAclUserHasGroupTableMap;
use Orm\Zed\Cms\Persistence\SpyCmsVersion;
use Orm\Zed\Cms\Persistence\SpyCmsVersionQuery;
use Orm\Zed\Cms\Persistence\Base\SpyCmsVersion as BaseSpyCmsVersion;
use Orm\Zed\Cms\Persistence\Map\SpyCmsVersionTableMap;
use Orm\Zed\CustomerNote\Persistence\SpyCustomerNote;
use Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery;
use Orm\Zed\CustomerNote\Persistence\Base\SpyCustomerNote as BaseSpyCustomerNote;
use Orm\Zed\CustomerNote\Persistence\Map\SpyCustomerNoteTableMap;
use Orm\Zed\Customer\Persistence\SpyCustomer;
use Orm\Zed\Customer\Persistence\SpyCustomerQuery;
use Orm\Zed\Customer\Persistence\Base\SpyCustomer as BaseSpyCustomer;
use Orm\Zed\Customer\Persistence\Map\SpyCustomerTableMap;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\Locale\Persistence\SpyLocaleQuery;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery;
use Orm\Zed\PriceProductSchedule\Persistence\Base\SpyPriceProductScheduleList as BaseSpyPriceProductScheduleList;
use Orm\Zed\PriceProductSchedule\Persistence\Map\SpyPriceProductScheduleListTableMap;
use Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword;
use Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery;
use Orm\Zed\UserPasswordReset\Persistence\Base\SpyResetPassword as BaseSpyResetPassword;
use Orm\Zed\UserPasswordReset\Persistence\Map\SpyResetPasswordTableMap;
use Orm\Zed\User\Persistence\SpyUser as ChildSpyUser;
use Orm\Zed\User\Persistence\SpyUserArchive as ChildSpyUserArchive;
use Orm\Zed\User\Persistence\SpyUserArchiveQuery as ChildSpyUserArchiveQuery;
use Orm\Zed\User\Persistence\SpyUserQuery as ChildSpyUserQuery;
use Orm\Zed\User\Persistence\Map\SpyUserTableMap;
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
 * Base class that represents a row from the 'spy_user' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.User.Persistence.Base
 */
abstract class SpyUser implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\User\\Persistence\\Map\\SpyUserTableMap';


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
     * The value for the id_user field.
     *
     * @var        int
     */
    protected $id_user;

    /**
     * The value for the fk_locale field.
     *
     * @var        int|null
     */
    protected $fk_locale;

    /**
     * The value for the first_name field.
     *
     * @var        string
     */
    protected $first_name;

    /**
     * The value for the is_agent field.
     *
     * @var        boolean|null
     */
    protected $is_agent;

    /**
     * The value for the last_login field.
     *
     * @var        DateTime|null
     */
    protected $last_login;

    /**
     * The value for the last_name field.
     *
     * @var        string
     */
    protected $last_name;

    /**
     * The value for the password field.
     *
     * @var        string
     */
    protected $password;

    /**
     * The value for the status field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $status;

    /**
     * The value for the username field.
     *
     * @var        string
     */
    protected $username;

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
     * @var        SpyLocale
     */
    protected $aSpyLocale;

    /**
     * @var        ObjectCollection|SpyAclUserHasGroup[] Collection to store aggregation of SpyAclUserHasGroup objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyAclUserHasGroup> Collection to store aggregation of SpyAclUserHasGroup objects.
     */
    protected $collSpyAclUserHasGroups;
    protected $collSpyAclUserHasGroupsPartial;

    /**
     * @var        ObjectCollection|SpyCmsVersion[] Collection to store aggregation of SpyCmsVersion objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCmsVersion> Collection to store aggregation of SpyCmsVersion objects.
     */
    protected $collSpyCmsVersions;
    protected $collSpyCmsVersionsPartial;

    /**
     * @var        ObjectCollection|SpyCustomer[] Collection to store aggregation of SpyCustomer objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCustomer> Collection to store aggregation of SpyCustomer objects.
     */
    protected $collSpyCustomers;
    protected $collSpyCustomersPartial;

    /**
     * @var        ObjectCollection|SpyCustomerNote[] Collection to store aggregation of SpyCustomerNote objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCustomerNote> Collection to store aggregation of SpyCustomerNote objects.
     */
    protected $collCustomerNotes;
    protected $collCustomerNotesPartial;

    /**
     * @var        ObjectCollection|SpyPriceProductScheduleList[] Collection to store aggregation of SpyPriceProductScheduleList objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductScheduleList> Collection to store aggregation of SpyPriceProductScheduleList objects.
     */
    protected $collPriceProductScheduleLists;
    protected $collPriceProductScheduleListsPartial;

    /**
     * @var        ObjectCollection|SpyResetPassword[] Collection to store aggregation of SpyResetPassword objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyResetPassword> Collection to store aggregation of SpyResetPassword objects.
     */
    protected $collUsers;
    protected $collUsersPartial;

    /**
     * @var        ObjectCollection|SpyAclGroup[] Cross Collection to store aggregation of SpyAclGroup objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyAclGroup> Cross Collection to store aggregation of SpyAclGroup objects.
     */
    protected $collSpyAclGroups;

    /**
     * @var bool
     */
    protected $collSpyAclGroupsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    // archivable behavior
    protected $archiveOnDelete = true;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyAclGroup[]
     * @phpstan-var ObjectCollection&\Traversable<SpyAclGroup>
     */
    protected $spyAclGroupsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyAclUserHasGroup[]
     * @phpstan-var ObjectCollection&\Traversable<SpyAclUserHasGroup>
     */
    protected $spyAclUserHasGroupsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCmsVersion[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCmsVersion>
     */
    protected $spyCmsVersionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCustomer[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCustomer>
     */
    protected $spyCustomersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCustomerNote[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCustomerNote>
     */
    protected $customerNotesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProductScheduleList[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductScheduleList>
     */
    protected $priceProductScheduleListsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyResetPassword[]
     * @phpstan-var ObjectCollection&\Traversable<SpyResetPassword>
     */
    protected $usersScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->status = 0;
    }

    /**
     * Initializes internal state of Orm\Zed\User\Persistence\Base\SpyUser object.
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
     * Compares this with another <code>SpyUser</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyUser</code>, delegates to
     * <code>equals(SpyUser)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_user] column value.
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Get the [fk_locale] column value.
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fk_locale;
    }

    /**
     * Get the [first_name] column value.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Get the [is_agent] column value.
     *
     * @return boolean|null
     */
    public function getIsAgent()
    {
        return $this->is_agent;
    }

    /**
     * Get the [is_agent] column value.
     *
     * @return boolean|null
     */
    public function isAgent()
    {
        return $this->getIsAgent();
    }

    /**
     * Get the [optionally formatted] temporal [last_login] column value.
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
    public function getLastLogin($format = null)
    {
        if ($format === null) {
            return $this->last_login;
        } else {
            return $this->last_login instanceof \DateTimeInterface ? $this->last_login->format($format) : null;
        }
    }

    /**
     * Get the [last_name] column value.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Get the [password] column value.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getStatus()
    {
        if (null === $this->status) {
            return null;
        }
        $valueSet = SpyUserTableMap::getValueSet(SpyUserTableMap::COL_STATUS);
        if (!isset($valueSet[$this->status])) {
            throw new PropelException('Unknown stored enum key: ' . $this->status);
        }

        return $valueSet[$this->status];
    }

    /**
     * Get the [username] column value.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
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
     * Set the value of [id_user] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setIdUser($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_user !== $v) {
            $this->id_user = $v;
            $this->modifiedColumns[SpyUserTableMap::COL_ID_USER] = true;
        }

        return $this;
    } // setIdUser()

    /**
     * Set the value of [fk_locale] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
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
            $this->modifiedColumns[SpyUserTableMap::COL_FK_LOCALE] = true;
        }

        if ($this->aSpyLocale !== null && $this->aSpyLocale->getIdLocale() !== $v) {
            $this->aSpyLocale = null;
        }

        return $this;
    } // setFkLocale()

    /**
     * Set the value of [first_name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setFirstName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->first_name !== $v) {
            $this->first_name = $v;
            $this->modifiedColumns[SpyUserTableMap::COL_FIRST_NAME] = true;
        }

        return $this;
    } // setFirstName()

    /**
     * Sets the value of the [is_agent] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string|null $v The new value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setIsAgent($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (bool) $v;
            }
        }

        $allowNullValues = true;

        if ($v === null && !$allowNullValues) {
            return $this;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->is_agent !== $v) {
            $this->is_agent = $v;
            $this->modifiedColumns[SpyUserTableMap::COL_IS_AGENT] = true;
        }

        return $this;
    } // setIsAgent()

    /**
     * Sets the value of [last_login] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setLastLogin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->last_login !== null || $dt !== null) {
            if ($this->last_login === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->last_login->format("Y-m-d H:i:s.u")) {
                $this->last_login = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyUserTableMap::COL_LAST_LOGIN] = true;
            }
        } // if either are not null

        return $this;
    } // setLastLogin()

    /**
     * Set the value of [last_name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setLastName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->last_name !== $v) {
            $this->last_name = $v;
            $this->modifiedColumns[SpyUserTableMap::COL_LAST_NAME] = true;
        }

        return $this;
    } // setLastName()

    /**
     * Set the value of [password] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[SpyUserTableMap::COL_PASSWORD] = true;
        }

        return $this;
    } // setPassword()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $valueSet = SpyUserTableMap::getValueSet(SpyUserTableMap::COL_STATUS);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[SpyUserTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Set the value of [username] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setUsername($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->username !== $v) {
            $this->username = $v;
            $this->modifiedColumns[SpyUserTableMap::COL_USERNAME] = true;
        }

        return $this;
    } // setUsername()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyUserTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyUserTableMap::COL_UPDATED_AT] = true;
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
            if ($this->status !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyUserTableMap::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_user = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyUserTableMap::translateFieldName('FkLocale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_locale = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyUserTableMap::translateFieldName('FirstName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->first_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyUserTableMap::translateFieldName('IsAgent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_agent = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyUserTableMap::translateFieldName('LastLogin', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->last_login = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyUserTableMap::translateFieldName('LastName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->last_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyUserTableMap::translateFieldName('Password', TableMap::TYPE_PHPNAME, $indexType)];
            $this->password = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyUserTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyUserTableMap::translateFieldName('Username', TableMap::TYPE_PHPNAME, $indexType)];
            $this->username = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SpyUserTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SpyUserTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = SpyUserTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\User\\Persistence\\SpyUser'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyUserTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyUserQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyLocale = null;
            $this->collSpyAclUserHasGroups = null;

            $this->collSpyCmsVersions = null;

            $this->collSpyCustomers = null;

            $this->collCustomerNotes = null;

            $this->collPriceProductScheduleLists = null;

            $this->collUsers = null;

            $this->collSpyAclGroups = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyUser::setDeleted()
     * @see SpyUser::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUserTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyUserQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // archivable behavior
            if ($ret) {
                if ($this->archiveOnDelete) {
                    // do nothing yet. The object will be archived later when calling ChildSpyUserQuery::delete().
                } else {
                    $deleteQuery->setArchiveOnDelete(false);
                    $this->archiveOnDelete = true;
                }
            }

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUserTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyUserTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyUserTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyUserTableMap::COL_UPDATED_AT)) {
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
                SpyUserTableMap::addInstanceToPool($this);
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

            if ($this->aSpyLocale !== null) {
                if ($this->aSpyLocale->isModified() || $this->aSpyLocale->isNew()) {
                    $affectedRows += $this->aSpyLocale->save($con);
                }
                $this->setSpyLocale($this->aSpyLocale);
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

            if ($this->spyAclGroupsScheduledForDeletion !== null) {
                if (!$this->spyAclGroupsScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    foreach ($this->spyAclGroupsScheduledForDeletion as $entry) {
                        $entryPk = [];

                        $entryPk[0] = $this->getIdUser();
                        $entryPk[1] = $entry->getIdAclGroup();
                        $pks[] = $entryPk;
                    }

                    \Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);

                    $this->spyAclGroupsScheduledForDeletion = null;
                }

            }

            if ($this->collSpyAclGroups) {
                foreach ($this->collSpyAclGroups as $spyAclGroup) {
                    if (!$spyAclGroup->isDeleted() && ($spyAclGroup->isNew() || $spyAclGroup->isModified())) {
                        $spyAclGroup->save($con);
                    }
                }
            }


            if ($this->spyAclUserHasGroupsScheduledForDeletion !== null) {
                if (!$this->spyAclUserHasGroupsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery::create()
                        ->filterByPrimaryKeys($this->spyAclUserHasGroupsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyAclUserHasGroupsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyAclUserHasGroups !== null) {
                foreach ($this->collSpyAclUserHasGroups as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyCmsVersionsScheduledForDeletion !== null) {
                if (!$this->spyCmsVersionsScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyCmsVersionsScheduledForDeletion as $spyCmsVersion) {
                        // need to save related object because we set the relation to null
                        $spyCmsVersion->save($con);
                    }
                    $this->spyCmsVersionsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCmsVersions !== null) {
                foreach ($this->collSpyCmsVersions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyCustomersScheduledForDeletion !== null) {
                if (!$this->spyCustomersScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyCustomersScheduledForDeletion as $spyCustomer) {
                        // need to save related object because we set the relation to null
                        $spyCustomer->save($con);
                    }
                    $this->spyCustomersScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCustomers !== null) {
                foreach ($this->collSpyCustomers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->customerNotesScheduledForDeletion !== null) {
                if (!$this->customerNotesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery::create()
                        ->filterByPrimaryKeys($this->customerNotesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->customerNotesScheduledForDeletion = null;
                }
            }

            if ($this->collCustomerNotes !== null) {
                foreach ($this->collCustomerNotes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->priceProductScheduleListsScheduledForDeletion !== null) {
                if (!$this->priceProductScheduleListsScheduledForDeletion->isEmpty()) {
                    foreach ($this->priceProductScheduleListsScheduledForDeletion as $priceProductScheduleList) {
                        // need to save related object because we set the relation to null
                        $priceProductScheduleList->save($con);
                    }
                    $this->priceProductScheduleListsScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProductScheduleLists !== null) {
                foreach ($this->collPriceProductScheduleLists as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->usersScheduledForDeletion !== null) {
                if (!$this->usersScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery::create()
                        ->filterByPrimaryKeys($this->usersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usersScheduledForDeletion = null;
                }
            }

            if ($this->collUsers !== null) {
                foreach ($this->collUsers as $referrerFK) {
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

        $this->modifiedColumns[SpyUserTableMap::COL_ID_USER] = true;
        if (null !== $this->id_user) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyUserTableMap::COL_ID_USER . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyUserTableMap::COL_ID_USER)) {
            $modifiedColumns[':p' . $index++]  = 'id_user';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_FK_LOCALE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_locale';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_FIRST_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'first_name';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_IS_AGENT)) {
            $modifiedColumns[':p' . $index++]  = 'is_agent';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_LAST_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = 'last_login';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_LAST_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'last_name';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = 'password';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_USERNAME)) {
            $modifiedColumns[':p' . $index++]  = 'username';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO spy_user (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_user':
                        $stmt->bindValue($identifier, $this->id_user, PDO::PARAM_INT);
                        break;
                    case 'fk_locale':
                        $stmt->bindValue($identifier, $this->fk_locale, PDO::PARAM_INT);
                        break;
                    case 'first_name':
                        $stmt->bindValue($identifier, $this->first_name, PDO::PARAM_STR);
                        break;
                    case 'is_agent':
                        $stmt->bindValue($identifier, (int) $this->is_agent, PDO::PARAM_INT);
                        break;
                    case 'last_login':
                        $stmt->bindValue($identifier, $this->last_login ? $this->last_login->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'last_name':
                        $stmt->bindValue($identifier, $this->last_name, PDO::PARAM_STR);
                        break;
                    case 'password':
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_INT);
                        break;
                    case 'username':
                        $stmt->bindValue($identifier, $this->username, PDO::PARAM_STR);
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
            $pk = $con->lastInsertId('spy_user_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdUser($pk);

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
        $pos = SpyUserTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdUser();
                break;
            case 1:
                return $this->getFkLocale();
                break;
            case 2:
                return $this->getFirstName();
                break;
            case 3:
                return $this->getIsAgent();
                break;
            case 4:
                return $this->getLastLogin();
                break;
            case 5:
                return $this->getLastName();
                break;
            case 6:
                return $this->getPassword();
                break;
            case 7:
                return $this->getStatus();
                break;
            case 8:
                return $this->getUsername();
                break;
            case 9:
                return $this->getCreatedAt();
                break;
            case 10:
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

        if (isset($alreadyDumpedObjects['SpyUser'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyUser'][$this->hashCode()] = true;
        $keys = SpyUserTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdUser(),
            $keys[1] => $this->getFkLocale(),
            $keys[2] => $this->getFirstName(),
            $keys[3] => $this->getIsAgent(),
            $keys[4] => $this->getLastLogin(),
            $keys[5] => $this->getLastName(),
            $keys[6] => $this->getPassword(),
            $keys[7] => $this->getStatus(),
            $keys[8] => $this->getUsername(),
            $keys[9] => $this->getCreatedAt(),
            $keys[10] => $this->getUpdatedAt(),
        );
        if ($result[$keys[4]] instanceof \DateTimeInterface) {
            $result[$keys[4]] = $result[$keys[4]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[10]] instanceof \DateTimeInterface) {
            $result[$keys[10]] = $result[$keys[10]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
            if (null !== $this->collSpyAclUserHasGroups) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyAclUserHasGroups';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_acl_user_has_groups';
                        break;
                    default:
                        $key = 'SpyAclUserHasGroups';
                }

                $result[$key] = $this->collSpyAclUserHasGroups->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyCmsVersions) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCmsVersions';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_cms_versions';
                        break;
                    default:
                        $key = 'SpyCmsVersions';
                }

                $result[$key] = $this->collSpyCmsVersions->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyCustomers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCustomers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_customers';
                        break;
                    default:
                        $key = 'SpyCustomers';
                }

                $result[$key] = $this->collSpyCustomers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCustomerNotes) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCustomerNotes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_customer_notes';
                        break;
                    default:
                        $key = 'CustomerNotes';
                }

                $result[$key] = $this->collCustomerNotes->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPriceProductScheduleLists) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProductScheduleLists';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product_schedule_lists';
                        break;
                    default:
                        $key = 'PriceProductScheduleLists';
                }

                $result[$key] = $this->collPriceProductScheduleLists->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyResetPasswords';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_auth_reset_passwords';
                        break;
                    default:
                        $key = 'Users';
                }

                $result[$key] = $this->collUsers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\User\Persistence\SpyUser
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyUserTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\User\Persistence\SpyUser
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdUser($value);
                break;
            case 1:
                $this->setFkLocale($value);
                break;
            case 2:
                $this->setFirstName($value);
                break;
            case 3:
                $this->setIsAgent($value);
                break;
            case 4:
                $this->setLastLogin($value);
                break;
            case 5:
                $this->setLastName($value);
                break;
            case 6:
                $this->setPassword($value);
                break;
            case 7:
                $valueSet = SpyUserTableMap::getValueSet(SpyUserTableMap::COL_STATUS);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setStatus($value);
                break;
            case 8:
                $this->setUsername($value);
                break;
            case 9:
                $this->setCreatedAt($value);
                break;
            case 10:
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
     * @return     $this|\Orm\Zed\User\Persistence\SpyUser
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyUserTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdUser($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkLocale($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFirstName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIsAgent($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLastLogin($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setLastName($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPassword($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setStatus($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setUsername($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCreatedAt($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setUpdatedAt($arr[$keys[10]]);
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
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object, for fluid interface
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
        $criteria = new Criteria(SpyUserTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyUserTableMap::COL_ID_USER)) {
            $criteria->add(SpyUserTableMap::COL_ID_USER, $this->id_user);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_FK_LOCALE)) {
            $criteria->add(SpyUserTableMap::COL_FK_LOCALE, $this->fk_locale);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_FIRST_NAME)) {
            $criteria->add(SpyUserTableMap::COL_FIRST_NAME, $this->first_name);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_IS_AGENT)) {
            $criteria->add(SpyUserTableMap::COL_IS_AGENT, $this->is_agent);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_LAST_LOGIN)) {
            $criteria->add(SpyUserTableMap::COL_LAST_LOGIN, $this->last_login);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_LAST_NAME)) {
            $criteria->add(SpyUserTableMap::COL_LAST_NAME, $this->last_name);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_PASSWORD)) {
            $criteria->add(SpyUserTableMap::COL_PASSWORD, $this->password);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_STATUS)) {
            $criteria->add(SpyUserTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_USERNAME)) {
            $criteria->add(SpyUserTableMap::COL_USERNAME, $this->username);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyUserTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyUserTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyUserTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildSpyUserQuery::create();
        $criteria->add(SpyUserTableMap::COL_ID_USER, $this->id_user);

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
        $validPk = null !== $this->getIdUser();

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
        return $this->getIdUser();
    }

    /**
     * Generic method to set the primary key (id_user column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdUser($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdUser();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\User\Persistence\SpyUser (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkLocale($this->getFkLocale());
        $copyObj->setFirstName($this->getFirstName());
        $copyObj->setIsAgent($this->getIsAgent());
        $copyObj->setLastLogin($this->getLastLogin());
        $copyObj->setLastName($this->getLastName());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setUsername($this->getUsername());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyAclUserHasGroups() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyAclUserHasGroup($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyCmsVersions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCmsVersion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyCustomers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCustomer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCustomerNotes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomerNote($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPriceProductScheduleLists() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductScheduleList($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUser($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdUser(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\User\Persistence\SpyUser Clone of current object.
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
     * Declares an association between this object and a SpyLocale object.
     *
     * @param  SpyLocale|null $v
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
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
            $v->addSpyUser($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyLocale object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyLocale|null The associated SpyLocale object.
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
                $this->aSpyLocale->addSpyUsers($this);
             */
        }

        return $this->aSpyLocale;
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
        if ('SpyAclUserHasGroup' === $relationName) {
            $this->initSpyAclUserHasGroups();
            return;
        }
        if ('SpyCmsVersion' === $relationName) {
            $this->initSpyCmsVersions();
            return;
        }
        if ('SpyCustomer' === $relationName) {
            $this->initSpyCustomers();
            return;
        }
        if ('CustomerNote' === $relationName) {
            $this->initCustomerNotes();
            return;
        }
        if ('PriceProductScheduleList' === $relationName) {
            $this->initPriceProductScheduleLists();
            return;
        }
        if ('User' === $relationName) {
            $this->initUsers();
            return;
        }
    }

    /**
     * Clears out the collSpyAclUserHasGroups collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyAclUserHasGroups()
     */
    public function clearSpyAclUserHasGroups()
    {
        $this->collSpyAclUserHasGroups = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyAclUserHasGroups collection loaded partially.
     */
    public function resetPartialSpyAclUserHasGroups($v = true)
    {
        $this->collSpyAclUserHasGroupsPartial = $v;
    }

    /**
     * Initializes the collSpyAclUserHasGroups collection.
     *
     * By default this just sets the collSpyAclUserHasGroups collection to an empty array (like clearcollSpyAclUserHasGroups());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyAclUserHasGroups($overrideExisting = true)
    {
        if (null !== $this->collSpyAclUserHasGroups && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyAclUserHasGroupTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyAclUserHasGroups = new $collectionClassName;
        $this->collSpyAclUserHasGroups->setModel('\Orm\Zed\Acl\Persistence\SpyAclUserHasGroup');
    }

    /**
     * Gets an array of SpyAclUserHasGroup objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyAclUserHasGroup[] List of SpyAclUserHasGroup objects
     * @phpstan-return ObjectCollection&\Traversable<SpyAclUserHasGroup> List of SpyAclUserHasGroup objects
     * @throws PropelException
     */
    public function getSpyAclUserHasGroups(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyAclUserHasGroupsPartial && !$this->isNew();
        if (null === $this->collSpyAclUserHasGroups || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyAclUserHasGroups) {
                    $this->initSpyAclUserHasGroups();
                } else {
                    $collectionClassName = SpyAclUserHasGroupTableMap::getTableMap()->getCollectionClassName();

                    $collSpyAclUserHasGroups = new $collectionClassName;
                    $collSpyAclUserHasGroups->setModel('\Orm\Zed\Acl\Persistence\SpyAclUserHasGroup');

                    return $collSpyAclUserHasGroups;
                }
            } else {
                $collSpyAclUserHasGroups = SpyAclUserHasGroupQuery::create(null, $criteria)
                    ->filterBySpyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyAclUserHasGroupsPartial && count($collSpyAclUserHasGroups)) {
                        $this->initSpyAclUserHasGroups(false);

                        foreach ($collSpyAclUserHasGroups as $obj) {
                            if (false == $this->collSpyAclUserHasGroups->contains($obj)) {
                                $this->collSpyAclUserHasGroups->append($obj);
                            }
                        }

                        $this->collSpyAclUserHasGroupsPartial = true;
                    }

                    return $collSpyAclUserHasGroups;
                }

                if ($partial && $this->collSpyAclUserHasGroups) {
                    foreach ($this->collSpyAclUserHasGroups as $obj) {
                        if ($obj->isNew()) {
                            $collSpyAclUserHasGroups[] = $obj;
                        }
                    }
                }

                $this->collSpyAclUserHasGroups = $collSpyAclUserHasGroups;
                $this->collSpyAclUserHasGroupsPartial = false;
            }
        }

        return $this->collSpyAclUserHasGroups;
    }

    /**
     * Sets a collection of SpyAclUserHasGroup objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyAclUserHasGroups A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function setSpyAclUserHasGroups(Collection $spyAclUserHasGroups, ConnectionInterface $con = null)
    {
        /** @var SpyAclUserHasGroup[] $spyAclUserHasGroupsToDelete */
        $spyAclUserHasGroupsToDelete = $this->getSpyAclUserHasGroups(new Criteria(), $con)->diff($spyAclUserHasGroups);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->spyAclUserHasGroupsScheduledForDeletion = clone $spyAclUserHasGroupsToDelete;

        foreach ($spyAclUserHasGroupsToDelete as $spyAclUserHasGroupRemoved) {
            $spyAclUserHasGroupRemoved->setSpyUser(null);
        }

        $this->collSpyAclUserHasGroups = null;
        foreach ($spyAclUserHasGroups as $spyAclUserHasGroup) {
            $this->addSpyAclUserHasGroup($spyAclUserHasGroup);
        }

        $this->collSpyAclUserHasGroups = $spyAclUserHasGroups;
        $this->collSpyAclUserHasGroupsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyAclUserHasGroup objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyAclUserHasGroup objects.
     * @throws PropelException
     */
    public function countSpyAclUserHasGroups(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyAclUserHasGroupsPartial && !$this->isNew();
        if (null === $this->collSpyAclUserHasGroups || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyAclUserHasGroups) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyAclUserHasGroups());
            }

            $query = SpyAclUserHasGroupQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyUser($this)
                ->count($con);
        }

        return count($this->collSpyAclUserHasGroups);
    }

    /**
     * Method called to associate a SpyAclUserHasGroup object to this object
     * through the SpyAclUserHasGroup foreign key attribute.
     *
     * @param  SpyAclUserHasGroup $l SpyAclUserHasGroup
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function addSpyAclUserHasGroup(SpyAclUserHasGroup $l)
    {
        if ($this->collSpyAclUserHasGroups === null) {
            $this->initSpyAclUserHasGroups();
            $this->collSpyAclUserHasGroupsPartial = true;
        }

        if (!$this->collSpyAclUserHasGroups->contains($l)) {
            $this->doAddSpyAclUserHasGroup($l);

            if ($this->spyAclUserHasGroupsScheduledForDeletion and $this->spyAclUserHasGroupsScheduledForDeletion->contains($l)) {
                $this->spyAclUserHasGroupsScheduledForDeletion->remove($this->spyAclUserHasGroupsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyAclUserHasGroup $spyAclUserHasGroup The SpyAclUserHasGroup object to add.
     */
    protected function doAddSpyAclUserHasGroup(SpyAclUserHasGroup $spyAclUserHasGroup)
    {
        $this->collSpyAclUserHasGroups[]= $spyAclUserHasGroup;
        $spyAclUserHasGroup->setSpyUser($this);
    }

    /**
     * @param  SpyAclUserHasGroup $spyAclUserHasGroup The SpyAclUserHasGroup object to remove.
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function removeSpyAclUserHasGroup(SpyAclUserHasGroup $spyAclUserHasGroup)
    {
        if ($this->getSpyAclUserHasGroups()->contains($spyAclUserHasGroup)) {
            $pos = $this->collSpyAclUserHasGroups->search($spyAclUserHasGroup);
            $this->collSpyAclUserHasGroups->remove($pos);
            if (null === $this->spyAclUserHasGroupsScheduledForDeletion) {
                $this->spyAclUserHasGroupsScheduledForDeletion = clone $this->collSpyAclUserHasGroups;
                $this->spyAclUserHasGroupsScheduledForDeletion->clear();
            }
            $this->spyAclUserHasGroupsScheduledForDeletion[]= clone $spyAclUserHasGroup;
            $spyAclUserHasGroup->setSpyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUser is new, it will return
     * an empty collection; or if this SpyUser has previously
     * been saved, it will retrieve related SpyAclUserHasGroups from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyAclUserHasGroup[] List of SpyAclUserHasGroup objects
     * @phpstan-return ObjectCollection&\Traversable<SpyAclUserHasGroup}> List of SpyAclUserHasGroup objects
     */
    public function getSpyAclUserHasGroupsJoinSpyAclGroup(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyAclUserHasGroupQuery::create(null, $criteria);
        $query->joinWith('SpyAclGroup', $joinBehavior);

        return $this->getSpyAclUserHasGroups($query, $con);
    }

    /**
     * Clears out the collSpyCmsVersions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCmsVersions()
     */
    public function clearSpyCmsVersions()
    {
        $this->collSpyCmsVersions = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCmsVersions collection loaded partially.
     */
    public function resetPartialSpyCmsVersions($v = true)
    {
        $this->collSpyCmsVersionsPartial = $v;
    }

    /**
     * Initializes the collSpyCmsVersions collection.
     *
     * By default this just sets the collSpyCmsVersions collection to an empty array (like clearcollSpyCmsVersions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCmsVersions($overrideExisting = true)
    {
        if (null !== $this->collSpyCmsVersions && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCmsVersionTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCmsVersions = new $collectionClassName;
        $this->collSpyCmsVersions->setModel('\Orm\Zed\Cms\Persistence\SpyCmsVersion');
    }

    /**
     * Gets an array of SpyCmsVersion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCmsVersion[] List of SpyCmsVersion objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsVersion> List of SpyCmsVersion objects
     * @throws PropelException
     */
    public function getSpyCmsVersions(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsVersionsPartial && !$this->isNew();
        if (null === $this->collSpyCmsVersions || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCmsVersions) {
                    $this->initSpyCmsVersions();
                } else {
                    $collectionClassName = SpyCmsVersionTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCmsVersions = new $collectionClassName;
                    $collSpyCmsVersions->setModel('\Orm\Zed\Cms\Persistence\SpyCmsVersion');

                    return $collSpyCmsVersions;
                }
            } else {
                $collSpyCmsVersions = SpyCmsVersionQuery::create(null, $criteria)
                    ->filterBySpyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCmsVersionsPartial && count($collSpyCmsVersions)) {
                        $this->initSpyCmsVersions(false);

                        foreach ($collSpyCmsVersions as $obj) {
                            if (false == $this->collSpyCmsVersions->contains($obj)) {
                                $this->collSpyCmsVersions->append($obj);
                            }
                        }

                        $this->collSpyCmsVersionsPartial = true;
                    }

                    return $collSpyCmsVersions;
                }

                if ($partial && $this->collSpyCmsVersions) {
                    foreach ($this->collSpyCmsVersions as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCmsVersions[] = $obj;
                        }
                    }
                }

                $this->collSpyCmsVersions = $collSpyCmsVersions;
                $this->collSpyCmsVersionsPartial = false;
            }
        }

        return $this->collSpyCmsVersions;
    }

    /**
     * Sets a collection of SpyCmsVersion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCmsVersions A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function setSpyCmsVersions(Collection $spyCmsVersions, ConnectionInterface $con = null)
    {
        /** @var SpyCmsVersion[] $spyCmsVersionsToDelete */
        $spyCmsVersionsToDelete = $this->getSpyCmsVersions(new Criteria(), $con)->diff($spyCmsVersions);


        $this->spyCmsVersionsScheduledForDeletion = $spyCmsVersionsToDelete;

        foreach ($spyCmsVersionsToDelete as $spyCmsVersionRemoved) {
            $spyCmsVersionRemoved->setSpyUser(null);
        }

        $this->collSpyCmsVersions = null;
        foreach ($spyCmsVersions as $spyCmsVersion) {
            $this->addSpyCmsVersion($spyCmsVersion);
        }

        $this->collSpyCmsVersions = $spyCmsVersions;
        $this->collSpyCmsVersionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCmsVersion objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCmsVersion objects.
     * @throws PropelException
     */
    public function countSpyCmsVersions(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCmsVersionsPartial && !$this->isNew();
        if (null === $this->collSpyCmsVersions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCmsVersions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCmsVersions());
            }

            $query = SpyCmsVersionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyUser($this)
                ->count($con);
        }

        return count($this->collSpyCmsVersions);
    }

    /**
     * Method called to associate a SpyCmsVersion object to this object
     * through the SpyCmsVersion foreign key attribute.
     *
     * @param  SpyCmsVersion $l SpyCmsVersion
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function addSpyCmsVersion(SpyCmsVersion $l)
    {
        if ($this->collSpyCmsVersions === null) {
            $this->initSpyCmsVersions();
            $this->collSpyCmsVersionsPartial = true;
        }

        if (!$this->collSpyCmsVersions->contains($l)) {
            $this->doAddSpyCmsVersion($l);

            if ($this->spyCmsVersionsScheduledForDeletion and $this->spyCmsVersionsScheduledForDeletion->contains($l)) {
                $this->spyCmsVersionsScheduledForDeletion->remove($this->spyCmsVersionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCmsVersion $spyCmsVersion The SpyCmsVersion object to add.
     */
    protected function doAddSpyCmsVersion(SpyCmsVersion $spyCmsVersion)
    {
        $this->collSpyCmsVersions[]= $spyCmsVersion;
        $spyCmsVersion->setSpyUser($this);
    }

    /**
     * @param  SpyCmsVersion $spyCmsVersion The SpyCmsVersion object to remove.
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function removeSpyCmsVersion(SpyCmsVersion $spyCmsVersion)
    {
        if ($this->getSpyCmsVersions()->contains($spyCmsVersion)) {
            $pos = $this->collSpyCmsVersions->search($spyCmsVersion);
            $this->collSpyCmsVersions->remove($pos);
            if (null === $this->spyCmsVersionsScheduledForDeletion) {
                $this->spyCmsVersionsScheduledForDeletion = clone $this->collSpyCmsVersions;
                $this->spyCmsVersionsScheduledForDeletion->clear();
            }
            $this->spyCmsVersionsScheduledForDeletion[]= $spyCmsVersion;
            $spyCmsVersion->setSpyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUser is new, it will return
     * an empty collection; or if this SpyUser has previously
     * been saved, it will retrieve related SpyCmsVersions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCmsVersion[] List of SpyCmsVersion objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCmsVersion}> List of SpyCmsVersion objects
     */
    public function getSpyCmsVersionsJoinSpyCmsPage(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCmsVersionQuery::create(null, $criteria);
        $query->joinWith('SpyCmsPage', $joinBehavior);

        return $this->getSpyCmsVersions($query, $con);
    }

    /**
     * Clears out the collSpyCustomers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCustomers()
     */
    public function clearSpyCustomers()
    {
        $this->collSpyCustomers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCustomers collection loaded partially.
     */
    public function resetPartialSpyCustomers($v = true)
    {
        $this->collSpyCustomersPartial = $v;
    }

    /**
     * Initializes the collSpyCustomers collection.
     *
     * By default this just sets the collSpyCustomers collection to an empty array (like clearcollSpyCustomers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCustomers($overrideExisting = true)
    {
        if (null !== $this->collSpyCustomers && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCustomerTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCustomers = new $collectionClassName;
        $this->collSpyCustomers->setModel('\Orm\Zed\Customer\Persistence\SpyCustomer');
    }

    /**
     * Gets an array of SpyCustomer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCustomer[] List of SpyCustomer objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomer> List of SpyCustomer objects
     * @throws PropelException
     */
    public function getSpyCustomers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCustomersPartial && !$this->isNew();
        if (null === $this->collSpyCustomers || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCustomers) {
                    $this->initSpyCustomers();
                } else {
                    $collectionClassName = SpyCustomerTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCustomers = new $collectionClassName;
                    $collSpyCustomers->setModel('\Orm\Zed\Customer\Persistence\SpyCustomer');

                    return $collSpyCustomers;
                }
            } else {
                $collSpyCustomers = SpyCustomerQuery::create(null, $criteria)
                    ->filterBySpyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCustomersPartial && count($collSpyCustomers)) {
                        $this->initSpyCustomers(false);

                        foreach ($collSpyCustomers as $obj) {
                            if (false == $this->collSpyCustomers->contains($obj)) {
                                $this->collSpyCustomers->append($obj);
                            }
                        }

                        $this->collSpyCustomersPartial = true;
                    }

                    return $collSpyCustomers;
                }

                if ($partial && $this->collSpyCustomers) {
                    foreach ($this->collSpyCustomers as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCustomers[] = $obj;
                        }
                    }
                }

                $this->collSpyCustomers = $collSpyCustomers;
                $this->collSpyCustomersPartial = false;
            }
        }

        return $this->collSpyCustomers;
    }

    /**
     * Sets a collection of SpyCustomer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCustomers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function setSpyCustomers(Collection $spyCustomers, ConnectionInterface $con = null)
    {
        /** @var SpyCustomer[] $spyCustomersToDelete */
        $spyCustomersToDelete = $this->getSpyCustomers(new Criteria(), $con)->diff($spyCustomers);


        $this->spyCustomersScheduledForDeletion = $spyCustomersToDelete;

        foreach ($spyCustomersToDelete as $spyCustomerRemoved) {
            $spyCustomerRemoved->setSpyUser(null);
        }

        $this->collSpyCustomers = null;
        foreach ($spyCustomers as $spyCustomer) {
            $this->addSpyCustomer($spyCustomer);
        }

        $this->collSpyCustomers = $spyCustomers;
        $this->collSpyCustomersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCustomer objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCustomer objects.
     * @throws PropelException
     */
    public function countSpyCustomers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCustomersPartial && !$this->isNew();
        if (null === $this->collSpyCustomers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCustomers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCustomers());
            }

            $query = SpyCustomerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyUser($this)
                ->count($con);
        }

        return count($this->collSpyCustomers);
    }

    /**
     * Method called to associate a SpyCustomer object to this object
     * through the SpyCustomer foreign key attribute.
     *
     * @param  SpyCustomer $l SpyCustomer
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function addSpyCustomer(SpyCustomer $l)
    {
        if ($this->collSpyCustomers === null) {
            $this->initSpyCustomers();
            $this->collSpyCustomersPartial = true;
        }

        if (!$this->collSpyCustomers->contains($l)) {
            $this->doAddSpyCustomer($l);

            if ($this->spyCustomersScheduledForDeletion and $this->spyCustomersScheduledForDeletion->contains($l)) {
                $this->spyCustomersScheduledForDeletion->remove($this->spyCustomersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCustomer $spyCustomer The SpyCustomer object to add.
     */
    protected function doAddSpyCustomer(SpyCustomer $spyCustomer)
    {
        $this->collSpyCustomers[]= $spyCustomer;
        $spyCustomer->setSpyUser($this);
    }

    /**
     * @param  SpyCustomer $spyCustomer The SpyCustomer object to remove.
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function removeSpyCustomer(SpyCustomer $spyCustomer)
    {
        if ($this->getSpyCustomers()->contains($spyCustomer)) {
            $pos = $this->collSpyCustomers->search($spyCustomer);
            $this->collSpyCustomers->remove($pos);
            if (null === $this->spyCustomersScheduledForDeletion) {
                $this->spyCustomersScheduledForDeletion = clone $this->collSpyCustomers;
                $this->spyCustomersScheduledForDeletion->clear();
            }
            $this->spyCustomersScheduledForDeletion[]= $spyCustomer;
            $spyCustomer->setSpyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUser is new, it will return
     * an empty collection; or if this SpyUser has previously
     * been saved, it will retrieve related SpyCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCustomer[] List of SpyCustomer objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomer}> List of SpyCustomer objects
     */
    public function getSpyCustomersJoinBillingAddress(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCustomerQuery::create(null, $criteria);
        $query->joinWith('BillingAddress', $joinBehavior);

        return $this->getSpyCustomers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUser is new, it will return
     * an empty collection; or if this SpyUser has previously
     * been saved, it will retrieve related SpyCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCustomer[] List of SpyCustomer objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomer}> List of SpyCustomer objects
     */
    public function getSpyCustomersJoinShippingAddress(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCustomerQuery::create(null, $criteria);
        $query->joinWith('ShippingAddress', $joinBehavior);

        return $this->getSpyCustomers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUser is new, it will return
     * an empty collection; or if this SpyUser has previously
     * been saved, it will retrieve related SpyCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCustomer[] List of SpyCustomer objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomer}> List of SpyCustomer objects
     */
    public function getSpyCustomersJoinLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCustomerQuery::create(null, $criteria);
        $query->joinWith('Locale', $joinBehavior);

        return $this->getSpyCustomers($query, $con);
    }

    /**
     * Clears out the collCustomerNotes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCustomerNotes()
     */
    public function clearCustomerNotes()
    {
        $this->collCustomerNotes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCustomerNotes collection loaded partially.
     */
    public function resetPartialCustomerNotes($v = true)
    {
        $this->collCustomerNotesPartial = $v;
    }

    /**
     * Initializes the collCustomerNotes collection.
     *
     * By default this just sets the collCustomerNotes collection to an empty array (like clearcollCustomerNotes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomerNotes($overrideExisting = true)
    {
        if (null !== $this->collCustomerNotes && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCustomerNoteTableMap::getTableMap()->getCollectionClassName();

        $this->collCustomerNotes = new $collectionClassName;
        $this->collCustomerNotes->setModel('\Orm\Zed\CustomerNote\Persistence\SpyCustomerNote');
    }

    /**
     * Gets an array of SpyCustomerNote objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCustomerNote[] List of SpyCustomerNote objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomerNote> List of SpyCustomerNote objects
     * @throws PropelException
     */
    public function getCustomerNotes(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomerNotesPartial && !$this->isNew();
        if (null === $this->collCustomerNotes || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collCustomerNotes) {
                    $this->initCustomerNotes();
                } else {
                    $collectionClassName = SpyCustomerNoteTableMap::getTableMap()->getCollectionClassName();

                    $collCustomerNotes = new $collectionClassName;
                    $collCustomerNotes->setModel('\Orm\Zed\CustomerNote\Persistence\SpyCustomerNote');

                    return $collCustomerNotes;
                }
            } else {
                $collCustomerNotes = SpyCustomerNoteQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCustomerNotesPartial && count($collCustomerNotes)) {
                        $this->initCustomerNotes(false);

                        foreach ($collCustomerNotes as $obj) {
                            if (false == $this->collCustomerNotes->contains($obj)) {
                                $this->collCustomerNotes->append($obj);
                            }
                        }

                        $this->collCustomerNotesPartial = true;
                    }

                    return $collCustomerNotes;
                }

                if ($partial && $this->collCustomerNotes) {
                    foreach ($this->collCustomerNotes as $obj) {
                        if ($obj->isNew()) {
                            $collCustomerNotes[] = $obj;
                        }
                    }
                }

                $this->collCustomerNotes = $collCustomerNotes;
                $this->collCustomerNotesPartial = false;
            }
        }

        return $this->collCustomerNotes;
    }

    /**
     * Sets a collection of SpyCustomerNote objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $customerNotes A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function setCustomerNotes(Collection $customerNotes, ConnectionInterface $con = null)
    {
        /** @var SpyCustomerNote[] $customerNotesToDelete */
        $customerNotesToDelete = $this->getCustomerNotes(new Criteria(), $con)->diff($customerNotes);


        $this->customerNotesScheduledForDeletion = $customerNotesToDelete;

        foreach ($customerNotesToDelete as $customerNoteRemoved) {
            $customerNoteRemoved->setUser(null);
        }

        $this->collCustomerNotes = null;
        foreach ($customerNotes as $customerNote) {
            $this->addCustomerNote($customerNote);
        }

        $this->collCustomerNotes = $customerNotes;
        $this->collCustomerNotesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCustomerNote objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCustomerNote objects.
     * @throws PropelException
     */
    public function countCustomerNotes(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomerNotesPartial && !$this->isNew();
        if (null === $this->collCustomerNotes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomerNotes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCustomerNotes());
            }

            $query = SpyCustomerNoteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collCustomerNotes);
    }

    /**
     * Method called to associate a SpyCustomerNote object to this object
     * through the SpyCustomerNote foreign key attribute.
     *
     * @param  SpyCustomerNote $l SpyCustomerNote
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function addCustomerNote(SpyCustomerNote $l)
    {
        if ($this->collCustomerNotes === null) {
            $this->initCustomerNotes();
            $this->collCustomerNotesPartial = true;
        }

        if (!$this->collCustomerNotes->contains($l)) {
            $this->doAddCustomerNote($l);

            if ($this->customerNotesScheduledForDeletion and $this->customerNotesScheduledForDeletion->contains($l)) {
                $this->customerNotesScheduledForDeletion->remove($this->customerNotesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCustomerNote $customerNote The SpyCustomerNote object to add.
     */
    protected function doAddCustomerNote(SpyCustomerNote $customerNote)
    {
        $this->collCustomerNotes[]= $customerNote;
        $customerNote->setUser($this);
    }

    /**
     * @param  SpyCustomerNote $customerNote The SpyCustomerNote object to remove.
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function removeCustomerNote(SpyCustomerNote $customerNote)
    {
        if ($this->getCustomerNotes()->contains($customerNote)) {
            $pos = $this->collCustomerNotes->search($customerNote);
            $this->collCustomerNotes->remove($pos);
            if (null === $this->customerNotesScheduledForDeletion) {
                $this->customerNotesScheduledForDeletion = clone $this->collCustomerNotes;
                $this->customerNotesScheduledForDeletion->clear();
            }
            $this->customerNotesScheduledForDeletion[]= clone $customerNote;
            $customerNote->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyUser is new, it will return
     * an empty collection; or if this SpyUser has previously
     * been saved, it will retrieve related CustomerNotes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCustomerNote[] List of SpyCustomerNote objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCustomerNote}> List of SpyCustomerNote objects
     */
    public function getCustomerNotesJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCustomerNoteQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getCustomerNotes($query, $con);
    }

    /**
     * Clears out the collPriceProductScheduleLists collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProductScheduleLists()
     */
    public function clearPriceProductScheduleLists()
    {
        $this->collPriceProductScheduleLists = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProductScheduleLists collection loaded partially.
     */
    public function resetPartialPriceProductScheduleLists($v = true)
    {
        $this->collPriceProductScheduleListsPartial = $v;
    }

    /**
     * Initializes the collPriceProductScheduleLists collection.
     *
     * By default this just sets the collPriceProductScheduleLists collection to an empty array (like clearcollPriceProductScheduleLists());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProductScheduleLists($overrideExisting = true)
    {
        if (null !== $this->collPriceProductScheduleLists && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductScheduleListTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProductScheduleLists = new $collectionClassName;
        $this->collPriceProductScheduleLists->setModel('\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList');
    }

    /**
     * Gets an array of SpyPriceProductScheduleList objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyPriceProductScheduleList[] List of SpyPriceProductScheduleList objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductScheduleList> List of SpyPriceProductScheduleList objects
     * @throws PropelException
     */
    public function getPriceProductScheduleLists(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductScheduleListsPartial && !$this->isNew();
        if (null === $this->collPriceProductScheduleLists || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProductScheduleLists) {
                    $this->initPriceProductScheduleLists();
                } else {
                    $collectionClassName = SpyPriceProductScheduleListTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProductScheduleLists = new $collectionClassName;
                    $collPriceProductScheduleLists->setModel('\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList');

                    return $collPriceProductScheduleLists;
                }
            } else {
                $collPriceProductScheduleLists = SpyPriceProductScheduleListQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductScheduleListsPartial && count($collPriceProductScheduleLists)) {
                        $this->initPriceProductScheduleLists(false);

                        foreach ($collPriceProductScheduleLists as $obj) {
                            if (false == $this->collPriceProductScheduleLists->contains($obj)) {
                                $this->collPriceProductScheduleLists->append($obj);
                            }
                        }

                        $this->collPriceProductScheduleListsPartial = true;
                    }

                    return $collPriceProductScheduleLists;
                }

                if ($partial && $this->collPriceProductScheduleLists) {
                    foreach ($this->collPriceProductScheduleLists as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProductScheduleLists[] = $obj;
                        }
                    }
                }

                $this->collPriceProductScheduleLists = $collPriceProductScheduleLists;
                $this->collPriceProductScheduleListsPartial = false;
            }
        }

        return $this->collPriceProductScheduleLists;
    }

    /**
     * Sets a collection of SpyPriceProductScheduleList objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProductScheduleLists A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function setPriceProductScheduleLists(Collection $priceProductScheduleLists, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProductScheduleList[] $priceProductScheduleListsToDelete */
        $priceProductScheduleListsToDelete = $this->getPriceProductScheduleLists(new Criteria(), $con)->diff($priceProductScheduleLists);


        $this->priceProductScheduleListsScheduledForDeletion = $priceProductScheduleListsToDelete;

        foreach ($priceProductScheduleListsToDelete as $priceProductScheduleListRemoved) {
            $priceProductScheduleListRemoved->setUser(null);
        }

        $this->collPriceProductScheduleLists = null;
        foreach ($priceProductScheduleLists as $priceProductScheduleList) {
            $this->addPriceProductScheduleList($priceProductScheduleList);
        }

        $this->collPriceProductScheduleLists = $priceProductScheduleLists;
        $this->collPriceProductScheduleListsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyPriceProductScheduleList objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyPriceProductScheduleList objects.
     * @throws PropelException
     */
    public function countPriceProductScheduleLists(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductScheduleListsPartial && !$this->isNew();
        if (null === $this->collPriceProductScheduleLists || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProductScheduleLists) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProductScheduleLists());
            }

            $query = SpyPriceProductScheduleListQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collPriceProductScheduleLists);
    }

    /**
     * Method called to associate a SpyPriceProductScheduleList object to this object
     * through the SpyPriceProductScheduleList foreign key attribute.
     *
     * @param  SpyPriceProductScheduleList $l SpyPriceProductScheduleList
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function addPriceProductScheduleList(SpyPriceProductScheduleList $l)
    {
        if ($this->collPriceProductScheduleLists === null) {
            $this->initPriceProductScheduleLists();
            $this->collPriceProductScheduleListsPartial = true;
        }

        if (!$this->collPriceProductScheduleLists->contains($l)) {
            $this->doAddPriceProductScheduleList($l);

            if ($this->priceProductScheduleListsScheduledForDeletion and $this->priceProductScheduleListsScheduledForDeletion->contains($l)) {
                $this->priceProductScheduleListsScheduledForDeletion->remove($this->priceProductScheduleListsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyPriceProductScheduleList $priceProductScheduleList The SpyPriceProductScheduleList object to add.
     */
    protected function doAddPriceProductScheduleList(SpyPriceProductScheduleList $priceProductScheduleList)
    {
        $this->collPriceProductScheduleLists[]= $priceProductScheduleList;
        $priceProductScheduleList->setUser($this);
    }

    /**
     * @param  SpyPriceProductScheduleList $priceProductScheduleList The SpyPriceProductScheduleList object to remove.
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function removePriceProductScheduleList(SpyPriceProductScheduleList $priceProductScheduleList)
    {
        if ($this->getPriceProductScheduleLists()->contains($priceProductScheduleList)) {
            $pos = $this->collPriceProductScheduleLists->search($priceProductScheduleList);
            $this->collPriceProductScheduleLists->remove($pos);
            if (null === $this->priceProductScheduleListsScheduledForDeletion) {
                $this->priceProductScheduleListsScheduledForDeletion = clone $this->collPriceProductScheduleLists;
                $this->priceProductScheduleListsScheduledForDeletion->clear();
            }
            $this->priceProductScheduleListsScheduledForDeletion[]= $priceProductScheduleList;
            $priceProductScheduleList->setUser(null);
        }

        return $this;
    }

    /**
     * Clears out the collUsers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addUsers()
     */
    public function clearUsers()
    {
        $this->collUsers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collUsers collection loaded partially.
     */
    public function resetPartialUsers($v = true)
    {
        $this->collUsersPartial = $v;
    }

    /**
     * Initializes the collUsers collection.
     *
     * By default this just sets the collUsers collection to an empty array (like clearcollUsers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsers($overrideExisting = true)
    {
        if (null !== $this->collUsers && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyResetPasswordTableMap::getTableMap()->getCollectionClassName();

        $this->collUsers = new $collectionClassName;
        $this->collUsers->setModel('\Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword');
    }

    /**
     * Gets an array of SpyResetPassword objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyResetPassword[] List of SpyResetPassword objects
     * @phpstan-return ObjectCollection&\Traversable<SpyResetPassword> List of SpyResetPassword objects
     * @throws PropelException
     */
    public function getUsers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collUsersPartial && !$this->isNew();
        if (null === $this->collUsers || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collUsers) {
                    $this->initUsers();
                } else {
                    $collectionClassName = SpyResetPasswordTableMap::getTableMap()->getCollectionClassName();

                    $collUsers = new $collectionClassName;
                    $collUsers->setModel('\Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword');

                    return $collUsers;
                }
            } else {
                $collUsers = SpyResetPasswordQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collUsersPartial && count($collUsers)) {
                        $this->initUsers(false);

                        foreach ($collUsers as $obj) {
                            if (false == $this->collUsers->contains($obj)) {
                                $this->collUsers->append($obj);
                            }
                        }

                        $this->collUsersPartial = true;
                    }

                    return $collUsers;
                }

                if ($partial && $this->collUsers) {
                    foreach ($this->collUsers as $obj) {
                        if ($obj->isNew()) {
                            $collUsers[] = $obj;
                        }
                    }
                }

                $this->collUsers = $collUsers;
                $this->collUsersPartial = false;
            }
        }

        return $this->collUsers;
    }

    /**
     * Sets a collection of SpyResetPassword objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $users A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function setUsers(Collection $users, ConnectionInterface $con = null)
    {
        /** @var SpyResetPassword[] $usersToDelete */
        $usersToDelete = $this->getUsers(new Criteria(), $con)->diff($users);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->usersScheduledForDeletion = clone $usersToDelete;

        foreach ($usersToDelete as $userRemoved) {
            $userRemoved->setUser(null);
        }

        $this->collUsers = null;
        foreach ($users as $user) {
            $this->addUser($user);
        }

        $this->collUsers = $users;
        $this->collUsersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyResetPassword objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyResetPassword objects.
     * @throws PropelException
     */
    public function countUsers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collUsersPartial && !$this->isNew();
        if (null === $this->collUsers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUsers());
            }

            $query = SpyResetPasswordQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collUsers);
    }

    /**
     * Method called to associate a SpyResetPassword object to this object
     * through the SpyResetPassword foreign key attribute.
     *
     * @param  SpyResetPassword $l SpyResetPassword
     * @return $this|\Orm\Zed\User\Persistence\SpyUser The current object (for fluent API support)
     */
    public function addUser(SpyResetPassword $l)
    {
        if ($this->collUsers === null) {
            $this->initUsers();
            $this->collUsersPartial = true;
        }

        if (!$this->collUsers->contains($l)) {
            $this->doAddUser($l);

            if ($this->usersScheduledForDeletion and $this->usersScheduledForDeletion->contains($l)) {
                $this->usersScheduledForDeletion->remove($this->usersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyResetPassword $user The SpyResetPassword object to add.
     */
    protected function doAddUser(SpyResetPassword $user)
    {
        $this->collUsers[]= $user;
        $user->setUser($this);
    }

    /**
     * @param  SpyResetPassword $user The SpyResetPassword object to remove.
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function removeUser(SpyResetPassword $user)
    {
        if ($this->getUsers()->contains($user)) {
            $pos = $this->collUsers->search($user);
            $this->collUsers->remove($pos);
            if (null === $this->usersScheduledForDeletion) {
                $this->usersScheduledForDeletion = clone $this->collUsers;
                $this->usersScheduledForDeletion->clear();
            }
            $this->usersScheduledForDeletion[]= clone $user;
            $user->setUser(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyAclGroups collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyAclGroups()
     */
    public function clearSpyAclGroups()
    {
        $this->collSpyAclGroups = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collSpyAclGroups crossRef collection.
     *
     * By default this just sets the collSpyAclGroups collection to an empty collection (like clearSpyAclGroups());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initSpyAclGroups()
    {
        $collectionClassName = SpyAclUserHasGroupTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyAclGroups = new $collectionClassName;
        $this->collSpyAclGroupsPartial = true;
        $this->collSpyAclGroups->setModel('\Orm\Zed\Acl\Persistence\SpyAclGroup');
    }

    /**
     * Checks if the collSpyAclGroups collection is loaded.
     *
     * @return bool
     */
    public function isSpyAclGroupsLoaded()
    {
        return null !== $this->collSpyAclGroups;
    }

    /**
     * Gets a collection of SpyAclGroup objects related by a many-to-many relationship
     * to the current object by way of the spy_acl_user_has_group cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      ConnectionInterface $con Optional connection object
     *
     * @return ObjectCollection|SpyAclGroup[] List of SpyAclGroup objects
     * @phpstan-return ObjectCollection&\Traversable<SpyAclGroup> List of SpyAclGroup objects
     */
    public function getSpyAclGroups(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyAclGroupsPartial && !$this->isNew();
        if (null === $this->collSpyAclGroups || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyAclGroups) {
                    $this->initSpyAclGroups();
                }
            } else {

                $query = SpyAclGroupQuery::create(null, $criteria)
                    ->filterBySpyUser($this);
                $collSpyAclGroups = $query->find($con);
                if (null !== $criteria) {
                    return $collSpyAclGroups;
                }

                if ($partial && $this->collSpyAclGroups) {
                    //make sure that already added objects gets added to the list of the database.
                    foreach ($this->collSpyAclGroups as $obj) {
                        if (!$collSpyAclGroups->contains($obj)) {
                            $collSpyAclGroups[] = $obj;
                        }
                    }
                }

                $this->collSpyAclGroups = $collSpyAclGroups;
                $this->collSpyAclGroupsPartial = false;
            }
        }

        return $this->collSpyAclGroups;
    }

    /**
     * Sets a collection of SpyAclGroup objects related by a many-to-many relationship
     * to the current object by way of the spy_acl_user_has_group cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param  Collection $spyAclGroups A Propel collection.
     * @param  ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function setSpyAclGroups(Collection $spyAclGroups, ConnectionInterface $con = null)
    {
        $this->clearSpyAclGroups();
        $currentSpyAclGroups = $this->getSpyAclGroups();

        $spyAclGroupsScheduledForDeletion = $currentSpyAclGroups->diff($spyAclGroups);

        foreach ($spyAclGroupsScheduledForDeletion as $toDelete) {
            $this->removeSpyAclGroup($toDelete);
        }

        foreach ($spyAclGroups as $spyAclGroup) {
            if (!$currentSpyAclGroups->contains($spyAclGroup)) {
                $this->doAddSpyAclGroup($spyAclGroup);
            }
        }

        $this->collSpyAclGroupsPartial = false;
        $this->collSpyAclGroups = $spyAclGroups;

        return $this;
    }

    /**
     * Gets the number of SpyAclGroup objects related by a many-to-many relationship
     * to the current object by way of the spy_acl_user_has_group cross-reference table.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      boolean $distinct Set to true to force count distinct
     * @param      ConnectionInterface $con Optional connection object
     *
     * @return int the number of related SpyAclGroup objects
     */
    public function countSpyAclGroups(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyAclGroupsPartial && !$this->isNew();
        if (null === $this->collSpyAclGroups || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyAclGroups) {
                return 0;
            } else {

                if ($partial && !$criteria) {
                    return count($this->getSpyAclGroups());
                }

                $query = SpyAclGroupQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterBySpyUser($this)
                    ->count($con);
            }
        } else {
            return count($this->collSpyAclGroups);
        }
    }

    /**
     * Associate a SpyAclGroup to this object
     * through the spy_acl_user_has_group cross reference table.
     *
     * @param SpyAclGroup $spyAclGroup
     * @return ChildSpyUser The current object (for fluent API support)
     */
    public function addSpyAclGroup(SpyAclGroup $spyAclGroup)
    {
        if ($this->collSpyAclGroups === null) {
            $this->initSpyAclGroups();
        }

        if (!$this->getSpyAclGroups()->contains($spyAclGroup)) {
            // only add it if the **same** object is not already associated
            $this->collSpyAclGroups->push($spyAclGroup);
            $this->doAddSpyAclGroup($spyAclGroup);
        }

        return $this;
    }

    /**
     *
     * @param SpyAclGroup $spyAclGroup
     */
    protected function doAddSpyAclGroup(SpyAclGroup $spyAclGroup)
    {
        $spyAclUserHasGroup = new SpyAclUserHasGroup();

        $spyAclUserHasGroup->setSpyAclGroup($spyAclGroup);

        $spyAclUserHasGroup->setSpyUser($this);

        $this->addSpyAclUserHasGroup($spyAclUserHasGroup);

        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$spyAclGroup->isSpyUsersLoaded()) {
            $spyAclGroup->initSpyUsers();
            $spyAclGroup->getSpyUsers()->push($this);
        } elseif (!$spyAclGroup->getSpyUsers()->contains($this)) {
            $spyAclGroup->getSpyUsers()->push($this);
        }

    }

    /**
     * Remove spyAclGroup of this object
     * through the spy_acl_user_has_group cross reference table.
     *
     * @param SpyAclGroup $spyAclGroup
     * @return ChildSpyUser The current object (for fluent API support)
     */
    public function removeSpyAclGroup(SpyAclGroup $spyAclGroup)
    {
        if ($this->getSpyAclGroups()->contains($spyAclGroup)) {
            $spyAclUserHasGroup = new SpyAclUserHasGroup();
            $spyAclUserHasGroup->setSpyAclGroup($spyAclGroup);
            if ($spyAclGroup->isSpyUsersLoaded()) {
                //remove the back reference if available
                $spyAclGroup->getSpyUsers()->removeObject($this);
            }

            $spyAclUserHasGroup->setSpyUser($this);
            $this->removeSpyAclUserHasGroup(clone $spyAclUserHasGroup);
            $spyAclUserHasGroup->clear();

            $this->collSpyAclGroups->remove($this->collSpyAclGroups->search($spyAclGroup));

            if (null === $this->spyAclGroupsScheduledForDeletion) {
                $this->spyAclGroupsScheduledForDeletion = clone $this->collSpyAclGroups;
                $this->spyAclGroupsScheduledForDeletion->clear();
            }

            $this->spyAclGroupsScheduledForDeletion->push($spyAclGroup);
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
        if (null !== $this->aSpyLocale) {
            $this->aSpyLocale->removeSpyUser($this);
        }
        $this->id_user = null;
        $this->fk_locale = null;
        $this->first_name = null;
        $this->is_agent = null;
        $this->last_login = null;
        $this->last_name = null;
        $this->password = null;
        $this->status = null;
        $this->username = null;
        $this->created_at = null;
        $this->updated_at = null;
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
            if ($this->collSpyAclUserHasGroups) {
                foreach ($this->collSpyAclUserHasGroups as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyCmsVersions) {
                foreach ($this->collSpyCmsVersions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyCustomers) {
                foreach ($this->collSpyCustomers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCustomerNotes) {
                foreach ($this->collCustomerNotes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPriceProductScheduleLists) {
                foreach ($this->collPriceProductScheduleLists as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsers) {
                foreach ($this->collUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyAclGroups) {
                foreach ($this->collSpyAclGroups as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyAclUserHasGroups = null;
        $this->collSpyCmsVersions = null;
        $this->collSpyCustomers = null;
        $this->collCustomerNotes = null;
        $this->collPriceProductScheduleLists = null;
        $this->collUsers = null;
        $this->collSpyAclGroups = null;
        $this->aSpyLocale = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyUserTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpyUser The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyUserTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    // archivable behavior

    /**
     * Get an archived version of the current object.
     *
     * @param ConnectionInterface $con Optional connection object
     *
     * @return     ChildSpyUserArchive An archive object, or null if the current object was never archived
     */
    public function getArchive(ConnectionInterface $con = null)
    {
        if ($this->isNew()) {
            return null;
        }
        $archive = ChildSpyUserArchiveQuery::create()
            ->filterByPrimaryKey($this->getPrimaryKey())
            ->findOne($con);

        return $archive;
    }
    /**
     * Copy the data of the current object into a $archiveTablePhpName archive object.
     * The archived object is then saved.
     * If the current object has already been archived, the archived object
     * is updated and not duplicated.
     *
     * @param ConnectionInterface $con Optional connection object
     *
     * @throws PropelException If the object is new
     *
     * @return     ChildSpyUserArchive The archive object based on this object
     */
    public function archive(ConnectionInterface $con = null)
    {
        if ($this->isNew()) {
            throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
        }
        $archive = $this->getArchive($con);
        if (!$archive) {
            $archive = new ChildSpyUserArchive();
            $archive->setPrimaryKey($this->getPrimaryKey());
        }
        $this->copyInto($archive, $deepCopy = false, $makeNew = false);
        $archive->setArchivedAt(time());
        $archive->save($con);

        return $archive;
    }

    /**
     * Revert the the current object to the state it had when it was last archived.
     * The object must be saved afterwards if the changes must persist.
     *
     * @param ConnectionInterface $con Optional connection object
     *
     * @throws PropelException If the object has no corresponding archive.
     *
     * @return $this The current object (for fluent API support)
     */
    public function restoreFromArchive(ConnectionInterface $con = null)
    {
        $archive = $this->getArchive($con);
        if (!$archive) {
            throw new PropelException('The current object has never been archived and cannot be restored');
        }
        $this->populateFromArchive($archive);

        return $this;
    }

    /**
     * Populates the the current object based on a $archiveTablePhpName archive object.
     *
     * @param      ChildSpyUserArchive $archive An archived object based on the same class
      * @param      Boolean $populateAutoIncrementPrimaryKeys
     *               If true, autoincrement columns are copied from the archive object.
     *               If false, autoincrement columns are left intact.
      *
     * @return     ChildSpyUser The current object (for fluent API support)
     */
    public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false) {
        if ($populateAutoIncrementPrimaryKeys) {
            $this->setIdUser($archive->getIdUser());
        }
        $this->setFkLocale($archive->getFkLocale());
        $this->setFirstName($archive->getFirstName());
        $this->setIsAgent($archive->getIsAgent());
        $this->setLastLogin($archive->getLastLogin());
        $this->setLastName($archive->getLastName());
        $this->setPassword($archive->getPassword());
        $this->setStatus($archive->getStatus());
        $this->setUsername($archive->getUsername());
        $this->setCreatedAt($archive->getCreatedAt());
        $this->setUpdatedAt($archive->getUpdatedAt());

        return $this;
    }

    /**
     * Removes the object from the database without archiving it.
     *
     * @param ConnectionInterface $con Optional connection object
     *
     * @return $this|ChildSpyUser The current object (for fluent API support)
     */
    public function deleteWithoutArchive(ConnectionInterface $con = null)
    {
        $this->archiveOnDelete = false;

        return $this->delete($con);
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
