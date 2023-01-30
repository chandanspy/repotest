<?php

namespace Orm\Zed\CompanyUser\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToCompanyUser;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToCompanyUserQuery;
use Orm\Zed\CompanyRole\Persistence\Base\SpyCompanyRoleToCompanyUser as BaseSpyCompanyRoleToCompanyUser;
use Orm\Zed\CompanyRole\Persistence\Map\SpyCompanyRoleToCompanyUserTableMap;
use Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation;
use Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery;
use Orm\Zed\CompanyUserInvitation\Persistence\Base\SpyCompanyUserInvitation as BaseSpyCompanyUserInvitation;
use Orm\Zed\CompanyUserInvitation\Persistence\Map\SpyCompanyUserInvitationTableMap;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUser as ChildSpyCompanyUser;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery as ChildSpyCompanyUserQuery;
use Orm\Zed\CompanyUser\Persistence\Map\SpyCompanyUserTableMap;
use Orm\Zed\Company\Persistence\SpyCompany;
use Orm\Zed\Company\Persistence\SpyCompanyQuery;
use Orm\Zed\Customer\Persistence\SpyCustomer;
use Orm\Zed\Customer\Persistence\SpyCustomerQuery;
use Orm\Zed\QuoteApproval\Persistence\SpyQuoteApproval;
use Orm\Zed\QuoteApproval\Persistence\SpyQuoteApprovalQuery;
use Orm\Zed\QuoteApproval\Persistence\Base\SpyQuoteApproval as BaseSpyQuoteApproval;
use Orm\Zed\QuoteApproval\Persistence\Map\SpyQuoteApprovalTableMap;
use Orm\Zed\QuoteRequest\Persistence\SpyQuoteRequest;
use Orm\Zed\QuoteRequest\Persistence\SpyQuoteRequestQuery;
use Orm\Zed\QuoteRequest\Persistence\Base\SpyQuoteRequest as BaseSpyQuoteRequest;
use Orm\Zed\QuoteRequest\Persistence\Map\SpyQuoteRequestTableMap;
use Orm\Zed\SharedCart\Persistence\SpyQuoteCompanyUser;
use Orm\Zed\SharedCart\Persistence\SpyQuoteCompanyUserQuery;
use Orm\Zed\SharedCart\Persistence\Base\SpyQuoteCompanyUser as BaseSpyQuoteCompanyUser;
use Orm\Zed\SharedCart\Persistence\Map\SpyQuoteCompanyUserTableMap;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitBlacklist;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitBlacklistQuery;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery;
use Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListCompanyBusinessUnitBlacklist as BaseSpyShoppingListCompanyBusinessUnitBlacklist;
use Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListCompanyUser as BaseSpyShoppingListCompanyUser;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListCompanyBusinessUnitBlacklistTableMap;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListCompanyUserTableMap;
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
 * Base class that represents a row from the 'spy_company_user' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.CompanyUser.Persistence.Base
 */
abstract class SpyCompanyUser implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\CompanyUser\\Persistence\\Map\\SpyCompanyUserTableMap';


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
     * The value for the id_company_user field.
     *
     * @var        int
     */
    protected $id_company_user;

    /**
     * The value for the fk_company field.
     *
     * @var        int
     */
    protected $fk_company;

    /**
     * The value for the fk_company_business_unit field.
     *
     * @var        int|null
     */
    protected $fk_company_business_unit;

    /**
     * The value for the fk_customer field.
     *
     * @var        int
     */
    protected $fk_customer;

    /**
     * The value for the is_active field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $is_active;

    /**
     * The value for the is_default field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_default;

    /**
     * The value for the key field.
     * Key is an identifier for existing entities. This should never be changed.
     * @var        string|null
     */
    protected $key;

    /**
     * The value for the uuid field.
     *
     * @var        string|null
     */
    protected $uuid;

    /**
     * @var        SpyCompanyBusinessUnit
     */
    protected $aCompanyBusinessUnit;

    /**
     * @var        SpyCompany
     */
    protected $aCompany;

    /**
     * @var        SpyCustomer
     */
    protected $aCustomer;

    /**
     * @var        ObjectCollection|SpyCompanyRoleToCompanyUser[] Collection to store aggregation of SpyCompanyRoleToCompanyUser objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyRoleToCompanyUser> Collection to store aggregation of SpyCompanyRoleToCompanyUser objects.
     */
    protected $collSpyCompanyRoleToCompanyUsers;
    protected $collSpyCompanyRoleToCompanyUsersPartial;

    /**
     * @var        ObjectCollection|SpyCompanyUserInvitation[] Collection to store aggregation of SpyCompanyUserInvitation objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUserInvitation> Collection to store aggregation of SpyCompanyUserInvitation objects.
     */
    protected $collSpyCompanyUserInvitations;
    protected $collSpyCompanyUserInvitationsPartial;

    /**
     * @var        ObjectCollection|SpyQuoteCompanyUser[] Collection to store aggregation of SpyQuoteCompanyUser objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyQuoteCompanyUser> Collection to store aggregation of SpyQuoteCompanyUser objects.
     */
    protected $collSpyQuoteCompanyUsers;
    protected $collSpyQuoteCompanyUsersPartial;

    /**
     * @var        ObjectCollection|SpyQuoteApproval[] Collection to store aggregation of SpyQuoteApproval objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyQuoteApproval> Collection to store aggregation of SpyQuoteApproval objects.
     */
    protected $collSpyQuoteApprovals;
    protected $collSpyQuoteApprovalsPartial;

    /**
     * @var        ObjectCollection|SpyQuoteRequest[] Collection to store aggregation of SpyQuoteRequest objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyQuoteRequest> Collection to store aggregation of SpyQuoteRequest objects.
     */
    protected $collSpyQuoteRequests;
    protected $collSpyQuoteRequestsPartial;

    /**
     * @var        ObjectCollection|SpyShoppingListCompanyUser[] Collection to store aggregation of SpyShoppingListCompanyUser objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyShoppingListCompanyUser> Collection to store aggregation of SpyShoppingListCompanyUser objects.
     */
    protected $collSpyShoppingListCompanyUsers;
    protected $collSpyShoppingListCompanyUsersPartial;

    /**
     * @var        ObjectCollection|SpyShoppingListCompanyBusinessUnitBlacklist[] Collection to store aggregation of SpyShoppingListCompanyBusinessUnitBlacklist objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnitBlacklist> Collection to store aggregation of SpyShoppingListCompanyBusinessUnitBlacklist objects.
     */
    protected $collSpyShoppingListCompanyBusinessUnitBlacklists;
    protected $collSpyShoppingListCompanyBusinessUnitBlacklistsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    // uuid behavior
    /**
     * @var \Spryker\Service\UtilUuidGenerator\UtilUuidGeneratorServiceInterface
     */
    protected static $_uuidGeneratorService;

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
        'spy_company_user.fk_company_business_unit' => 'fk_company_business_unit',
        'spy_company_user.fk_company' => 'fk_company',
        'spy_company_user.fk_customer' => 'fk_customer',
    ];

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCompanyRoleToCompanyUser[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyRoleToCompanyUser>
     */
    protected $spyCompanyRoleToCompanyUsersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCompanyUserInvitation[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUserInvitation>
     */
    protected $spyCompanyUserInvitationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyQuoteCompanyUser[]
     * @phpstan-var ObjectCollection&\Traversable<SpyQuoteCompanyUser>
     */
    protected $spyQuoteCompanyUsersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyQuoteApproval[]
     * @phpstan-var ObjectCollection&\Traversable<SpyQuoteApproval>
     */
    protected $spyQuoteApprovalsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyQuoteRequest[]
     * @phpstan-var ObjectCollection&\Traversable<SpyQuoteRequest>
     */
    protected $spyQuoteRequestsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyShoppingListCompanyUser[]
     * @phpstan-var ObjectCollection&\Traversable<SpyShoppingListCompanyUser>
     */
    protected $spyShoppingListCompanyUsersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyShoppingListCompanyBusinessUnitBlacklist[]
     * @phpstan-var ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnitBlacklist>
     */
    protected $spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_active = true;
        $this->is_default = false;
    }

    /**
     * Initializes internal state of Orm\Zed\CompanyUser\Persistence\Base\SpyCompanyUser object.
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
     * Compares this with another <code>SpyCompanyUser</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyCompanyUser</code>, delegates to
     * <code>equals(SpyCompanyUser)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_company_user] column value.
     *
     * @return int
     */
    public function getIdCompanyUser()
    {
        return $this->id_company_user;
    }

    /**
     * Get the [fk_company] column value.
     *
     * @return int
     */
    public function getFkCompany()
    {
        return $this->fk_company;
    }

    /**
     * Get the [fk_company_business_unit] column value.
     *
     * @return int|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fk_company_business_unit;
    }

    /**
     * Get the [fk_customer] column value.
     *
     * @return int
     */
    public function getFkCustomer()
    {
        return $this->fk_customer;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean
     */
    public function isActive()
    {
        return $this->getIsActive();
    }

    /**
     * Get the [is_default] column value.
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * Get the [is_default] column value.
     *
     * @return boolean
     */
    public function isDefault()
    {
        return $this->getIsDefault();
    }

    /**
     * Get the [key] column value.
     * Key is an identifier for existing entities. This should never be changed.
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Get the [uuid] column value.
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set the value of [id_company_user] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function setIdCompanyUser($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_company_user !== $v) {
            $this->id_company_user = $v;
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_ID_COMPANY_USER] = true;
        }

        return $this;
    } // setIdCompanyUser()

    /**
     * Set the value of [fk_company] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function setFkCompany($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_company !== $v) {
            $this->fk_company = $v;
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_FK_COMPANY] = true;
        }

        if ($this->aCompany !== null && $this->aCompany->getIdCompany() !== $v) {
            $this->aCompany = null;
        }

        return $this;
    } // setFkCompany()

    /**
     * Set the value of [fk_company_business_unit] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT] = true;
        }

        if ($this->aCompanyBusinessUnit !== null && $this->aCompanyBusinessUnit->getIdCompanyBusinessUnit() !== $v) {
            $this->aCompanyBusinessUnit = null;
        }

        return $this;
    } // setFkCompanyBusinessUnit()

    /**
     * Set the value of [fk_customer] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function setFkCustomer($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_customer !== $v) {
            $this->fk_customer = $v;
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_FK_CUSTOMER] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getIdCustomer() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    } // setFkCustomer()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function setIsActive($v)
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

        if (($this->isNew() && $hasDefaultValue) || $this->is_active !== $v) {
            $this->is_active = $v;
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_IS_ACTIVE] = true;
        }

        return $this;
    } // setIsActive()

    /**
     * Sets the value of the [is_default] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function setIsDefault($v)
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

        if (($this->isNew() && $hasDefaultValue) || $this->is_default !== $v) {
            $this->is_default = $v;
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_IS_DEFAULT] = true;
        }

        return $this;
    } // setIsDefault()

    /**
     * Set the value of [key] column.
     * Key is an identifier for existing entities. This should never be changed.
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function setKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->key !== $v) {
            $this->key = $v;
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_KEY] = true;
        }

        return $this;
    } // setKey()

    /**
     * Set the value of [uuid] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function setUuid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->uuid !== $v) {
            $this->uuid = $v;
            $this->modifiedColumns[SpyCompanyUserTableMap::COL_UUID] = true;
        }

        return $this;
    } // setUuid()

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
            if ($this->is_active !== true) {
                return false;
            }

            if ($this->is_default !== false) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyCompanyUserTableMap::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_company_user = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyCompanyUserTableMap::translateFieldName('FkCompany', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_company = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyCompanyUserTableMap::translateFieldName('FkCompanyBusinessUnit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_company_business_unit = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyCompanyUserTableMap::translateFieldName('FkCustomer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_customer = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyCompanyUserTableMap::translateFieldName('IsActive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_active = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyCompanyUserTableMap::translateFieldName('IsDefault', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_default = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyCompanyUserTableMap::translateFieldName('Key', TableMap::TYPE_PHPNAME, $indexType)];
            $this->key = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyCompanyUserTableMap::translateFieldName('Uuid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->uuid = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = SpyCompanyUserTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\CompanyUser\\Persistence\\SpyCompanyUser'), 0, $e);
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
        if ($this->aCompany !== null && $this->fk_company !== $this->aCompany->getIdCompany()) {
            $this->aCompany = null;
        }
        if ($this->aCompanyBusinessUnit !== null && $this->fk_company_business_unit !== $this->aCompanyBusinessUnit->getIdCompanyBusinessUnit()) {
            $this->aCompanyBusinessUnit = null;
        }
        if ($this->aCustomer !== null && $this->fk_customer !== $this->aCustomer->getIdCustomer()) {
            $this->aCustomer = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyCompanyUserTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyCompanyUserQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCompanyBusinessUnit = null;
            $this->aCompany = null;
            $this->aCustomer = null;
            $this->collSpyCompanyRoleToCompanyUsers = null;

            $this->collSpyCompanyUserInvitations = null;

            $this->collSpyQuoteCompanyUsers = null;

            $this->collSpyQuoteApprovals = null;

            $this->collSpyQuoteRequests = null;

            $this->collSpyShoppingListCompanyUsers = null;

            $this->collSpyShoppingListCompanyBusinessUnitBlacklists = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyCompanyUser::setDeleted()
     * @see SpyCompanyUser::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUserTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyCompanyUserQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUserTableMap::DATABASE_NAME);
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
                // uuid behavior
                $this->updateUuidBeforeUpdate();
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                    // uuid behavior
                    $this->updateUuidAfterInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // event behavior

                if ($affectedRows) {
                    $this->addSaveEventToMemory();
                }

                SpyCompanyUserTableMap::addInstanceToPool($this);
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

            if ($this->aCompanyBusinessUnit !== null) {
                if ($this->aCompanyBusinessUnit->isModified() || $this->aCompanyBusinessUnit->isNew()) {
                    $affectedRows += $this->aCompanyBusinessUnit->save($con);
                }
                $this->setCompanyBusinessUnit($this->aCompanyBusinessUnit);
            }

            if ($this->aCompany !== null) {
                if ($this->aCompany->isModified() || $this->aCompany->isNew()) {
                    $affectedRows += $this->aCompany->save($con);
                }
                $this->setCompany($this->aCompany);
            }

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
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

            if ($this->spyCompanyRoleToCompanyUsersScheduledForDeletion !== null) {
                if (!$this->spyCompanyRoleToCompanyUsersScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToCompanyUserQuery::create()
                        ->filterByPrimaryKeys($this->spyCompanyRoleToCompanyUsersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCompanyRoleToCompanyUsersScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCompanyRoleToCompanyUsers !== null) {
                foreach ($this->collSpyCompanyRoleToCompanyUsers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyCompanyUserInvitationsScheduledForDeletion !== null) {
                if (!$this->spyCompanyUserInvitationsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery::create()
                        ->filterByPrimaryKeys($this->spyCompanyUserInvitationsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCompanyUserInvitationsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCompanyUserInvitations !== null) {
                foreach ($this->collSpyCompanyUserInvitations as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyQuoteCompanyUsersScheduledForDeletion !== null) {
                if (!$this->spyQuoteCompanyUsersScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\SharedCart\Persistence\SpyQuoteCompanyUserQuery::create()
                        ->filterByPrimaryKeys($this->spyQuoteCompanyUsersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyQuoteCompanyUsersScheduledForDeletion = null;
                }
            }

            if ($this->collSpyQuoteCompanyUsers !== null) {
                foreach ($this->collSpyQuoteCompanyUsers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyQuoteApprovalsScheduledForDeletion !== null) {
                if (!$this->spyQuoteApprovalsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\QuoteApproval\Persistence\SpyQuoteApprovalQuery::create()
                        ->filterByPrimaryKeys($this->spyQuoteApprovalsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyQuoteApprovalsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyQuoteApprovals !== null) {
                foreach ($this->collSpyQuoteApprovals as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyQuoteRequestsScheduledForDeletion !== null) {
                if (!$this->spyQuoteRequestsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\QuoteRequest\Persistence\SpyQuoteRequestQuery::create()
                        ->filterByPrimaryKeys($this->spyQuoteRequestsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyQuoteRequestsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyQuoteRequests !== null) {
                foreach ($this->collSpyQuoteRequests as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion !== null) {
                if (!$this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitBlacklistQuery::create()
                        ->filterByPrimaryKeys($this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyShoppingListCompanyBusinessUnitBlacklists !== null) {
                foreach ($this->collSpyShoppingListCompanyBusinessUnitBlacklists as $referrerFK) {
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

        $this->modifiedColumns[SpyCompanyUserTableMap::COL_ID_COMPANY_USER] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_ID_COMPANY_USER)) {
            $modifiedColumns[':p' . $index++]  = '`id_company_user`';
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_FK_COMPANY)) {
            $modifiedColumns[':p' . $index++]  = '`fk_company`';
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT)) {
            $modifiedColumns[':p' . $index++]  = '`fk_company_business_unit`';
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_FK_CUSTOMER)) {
            $modifiedColumns[':p' . $index++]  = '`fk_customer`';
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`is_active`';
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_IS_DEFAULT)) {
            $modifiedColumns[':p' . $index++]  = '`is_default`';
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`key`';
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_UUID)) {
            $modifiedColumns[':p' . $index++]  = '`uuid`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_company_user` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_company_user`':
                        $stmt->bindValue($identifier, $this->id_company_user, PDO::PARAM_INT);
                        break;
                    case '`fk_company`':
                        $stmt->bindValue($identifier, $this->fk_company, PDO::PARAM_INT);
                        break;
                    case '`fk_company_business_unit`':
                        $stmt->bindValue($identifier, $this->fk_company_business_unit, PDO::PARAM_INT);
                        break;
                    case '`fk_customer`':
                        $stmt->bindValue($identifier, $this->fk_customer, PDO::PARAM_INT);
                        break;
                    case '`is_active`':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case '`is_default`':
                        $stmt->bindValue($identifier, (int) $this->is_default, PDO::PARAM_INT);
                        break;
                    case '`key`':
                        $stmt->bindValue($identifier, $this->key, PDO::PARAM_STR);
                        break;
                    case '`uuid`':
                        $stmt->bindValue($identifier, $this->uuid, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_company_user_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        if ($pk !== null) {
            $this->setIdCompanyUser($pk);
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
        $pos = SpyCompanyUserTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdCompanyUser();
                break;
            case 1:
                return $this->getFkCompany();
                break;
            case 2:
                return $this->getFkCompanyBusinessUnit();
                break;
            case 3:
                return $this->getFkCustomer();
                break;
            case 4:
                return $this->getIsActive();
                break;
            case 5:
                return $this->getIsDefault();
                break;
            case 6:
                return $this->getKey();
                break;
            case 7:
                return $this->getUuid();
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

        if (isset($alreadyDumpedObjects['SpyCompanyUser'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyCompanyUser'][$this->hashCode()] = true;
        $keys = SpyCompanyUserTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCompanyUser(),
            $keys[1] => $this->getFkCompany(),
            $keys[2] => $this->getFkCompanyBusinessUnit(),
            $keys[3] => $this->getFkCustomer(),
            $keys[4] => $this->getIsActive(),
            $keys[5] => $this->getIsDefault(),
            $keys[6] => $this->getKey(),
            $keys[7] => $this->getUuid(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
            if (null !== $this->aCompany) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompany';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company';
                        break;
                    default:
                        $key = 'Company';
                }

                $result[$key] = $this->aCompany->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCustomer) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCustomer';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_customer';
                        break;
                    default:
                        $key = 'Customer';
                }

                $result[$key] = $this->aCustomer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyCompanyRoleToCompanyUsers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyRoleToCompanyUsers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_role_to_company_users';
                        break;
                    default:
                        $key = 'SpyCompanyRoleToCompanyUsers';
                }

                $result[$key] = $this->collSpyCompanyRoleToCompanyUsers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyCompanyUserInvitations) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyUserInvitations';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_user_invitations';
                        break;
                    default:
                        $key = 'SpyCompanyUserInvitations';
                }

                $result[$key] = $this->collSpyCompanyUserInvitations->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyQuoteCompanyUsers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyQuoteCompanyUsers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_quote_company_users';
                        break;
                    default:
                        $key = 'SpyQuoteCompanyUsers';
                }

                $result[$key] = $this->collSpyQuoteCompanyUsers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyQuoteApprovals) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyQuoteApprovals';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_quote_approvals';
                        break;
                    default:
                        $key = 'SpyQuoteApprovals';
                }

                $result[$key] = $this->collSpyQuoteApprovals->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyQuoteRequests) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyQuoteRequests';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_quote_requests';
                        break;
                    default:
                        $key = 'SpyQuoteRequests';
                }

                $result[$key] = $this->collSpyQuoteRequests->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
            if (null !== $this->collSpyShoppingListCompanyBusinessUnitBlacklists) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShoppingListCompanyBusinessUnitBlacklists';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shopping_list_company_business_unit_blacklists';
                        break;
                    default:
                        $key = 'SpyShoppingListCompanyBusinessUnitBlacklists';
                }

                $result[$key] = $this->collSpyShoppingListCompanyBusinessUnitBlacklists->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCompanyUserTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdCompanyUser($value);
                break;
            case 1:
                $this->setFkCompany($value);
                break;
            case 2:
                $this->setFkCompanyBusinessUnit($value);
                break;
            case 3:
                $this->setFkCustomer($value);
                break;
            case 4:
                $this->setIsActive($value);
                break;
            case 5:
                $this->setIsDefault($value);
                break;
            case 6:
                $this->setKey($value);
                break;
            case 7:
                $this->setUuid($value);
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
     * @return     $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyCompanyUserTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCompanyUser($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkCompany($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkCompanyBusinessUnit($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFkCustomer($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIsActive($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIsDefault($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setKey($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setUuid($arr[$keys[7]]);
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
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object, for fluid interface
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
        $criteria = new Criteria(SpyCompanyUserTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_ID_COMPANY_USER)) {
            $criteria->add(SpyCompanyUserTableMap::COL_ID_COMPANY_USER, $this->id_company_user);
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_FK_COMPANY)) {
            $criteria->add(SpyCompanyUserTableMap::COL_FK_COMPANY, $this->fk_company);
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT)) {
            $criteria->add(SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $this->fk_company_business_unit);
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_FK_CUSTOMER)) {
            $criteria->add(SpyCompanyUserTableMap::COL_FK_CUSTOMER, $this->fk_customer);
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_IS_ACTIVE)) {
            $criteria->add(SpyCompanyUserTableMap::COL_IS_ACTIVE, $this->is_active);
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_IS_DEFAULT)) {
            $criteria->add(SpyCompanyUserTableMap::COL_IS_DEFAULT, $this->is_default);
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_KEY)) {
            $criteria->add(SpyCompanyUserTableMap::COL_KEY, $this->key);
        }
        if ($this->isColumnModified(SpyCompanyUserTableMap::COL_UUID)) {
            $criteria->add(SpyCompanyUserTableMap::COL_UUID, $this->uuid);
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
        $criteria = ChildSpyCompanyUserQuery::create();
        $criteria->add(SpyCompanyUserTableMap::COL_ID_COMPANY_USER, $this->id_company_user);

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
        $validPk = null !== $this->getIdCompanyUser();

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
        return $this->getIdCompanyUser();
    }

    /**
     * Generic method to set the primary key (id_company_user column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCompanyUser($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdCompanyUser();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkCompany($this->getFkCompany());
        $copyObj->setFkCompanyBusinessUnit($this->getFkCompanyBusinessUnit());
        $copyObj->setFkCustomer($this->getFkCustomer());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setIsDefault($this->getIsDefault());
        $copyObj->setKey($this->getKey());
        $copyObj->setUuid($this->getUuid());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyCompanyRoleToCompanyUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCompanyRoleToCompanyUser($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyCompanyUserInvitations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCompanyUserInvitation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyQuoteCompanyUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyQuoteCompanyUser($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyQuoteApprovals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyQuoteApproval($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyQuoteRequests() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyQuoteRequest($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyShoppingListCompanyUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyShoppingListCompanyUser($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyShoppingListCompanyBusinessUnitBlacklists() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyShoppingListCompanyBusinessUnitBlacklist($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCompanyUser(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser Clone of current object.
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
     * Declares an association between this object and a SpyCompanyBusinessUnit object.
     *
     * @param  SpyCompanyBusinessUnit|null $v
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
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
            $v->addCompanyUser($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCompanyBusinessUnit object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCompanyBusinessUnit|null The associated SpyCompanyBusinessUnit object.
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
                $this->aCompanyBusinessUnit->addCompanyUsers($this);
             */
        }

        return $this->aCompanyBusinessUnit;
    }

    /**
     * Declares an association between this object and a SpyCompany object.
     *
     * @param  SpyCompany $v
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCompany(SpyCompany $v = null)
    {
        if ($v === null) {
            $this->setFkCompany(NULL);
        } else {
            $this->setFkCompany($v->getIdCompany());
        }

        $this->aCompany = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyCompany object, it will not be re-added.
        if ($v !== null) {
            $v->addCompanyUser($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCompany object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCompany The associated SpyCompany object.
     * @throws PropelException
     */
    public function getCompany(ConnectionInterface $con = null)
    {
        if ($this->aCompany === null && ($this->fk_company != 0)) {
            $this->aCompany = SpyCompanyQuery::create()->findPk($this->fk_company, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCompany->addCompanyUsers($this);
             */
        }

        return $this->aCompany;
    }

    /**
     * Declares an association between this object and a SpyCustomer object.
     *
     * @param  SpyCustomer $v
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(SpyCustomer $v = null)
    {
        if ($v === null) {
            $this->setFkCustomer(NULL);
        } else {
            $this->setFkCustomer($v->getIdCustomer());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addCompanyUser($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCustomer object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCustomer The associated SpyCustomer object.
     * @throws PropelException
     */
    public function getCustomer(ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && ($this->fk_customer != 0)) {
            $this->aCustomer = SpyCustomerQuery::create()->findPk($this->fk_customer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addCompanyUsers($this);
             */
        }

        return $this->aCustomer;
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
        if ('SpyCompanyRoleToCompanyUser' === $relationName) {
            $this->initSpyCompanyRoleToCompanyUsers();
            return;
        }
        if ('SpyCompanyUserInvitation' === $relationName) {
            $this->initSpyCompanyUserInvitations();
            return;
        }
        if ('SpyQuoteCompanyUser' === $relationName) {
            $this->initSpyQuoteCompanyUsers();
            return;
        }
        if ('SpyQuoteApproval' === $relationName) {
            $this->initSpyQuoteApprovals();
            return;
        }
        if ('SpyQuoteRequest' === $relationName) {
            $this->initSpyQuoteRequests();
            return;
        }
        if ('SpyShoppingListCompanyUser' === $relationName) {
            $this->initSpyShoppingListCompanyUsers();
            return;
        }
        if ('SpyShoppingListCompanyBusinessUnitBlacklist' === $relationName) {
            $this->initSpyShoppingListCompanyBusinessUnitBlacklists();
            return;
        }
    }

    /**
     * Clears out the collSpyCompanyRoleToCompanyUsers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCompanyRoleToCompanyUsers()
     */
    public function clearSpyCompanyRoleToCompanyUsers()
    {
        $this->collSpyCompanyRoleToCompanyUsers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCompanyRoleToCompanyUsers collection loaded partially.
     */
    public function resetPartialSpyCompanyRoleToCompanyUsers($v = true)
    {
        $this->collSpyCompanyRoleToCompanyUsersPartial = $v;
    }

    /**
     * Initializes the collSpyCompanyRoleToCompanyUsers collection.
     *
     * By default this just sets the collSpyCompanyRoleToCompanyUsers collection to an empty array (like clearcollSpyCompanyRoleToCompanyUsers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCompanyRoleToCompanyUsers($overrideExisting = true)
    {
        if (null !== $this->collSpyCompanyRoleToCompanyUsers && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCompanyRoleToCompanyUserTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCompanyRoleToCompanyUsers = new $collectionClassName;
        $this->collSpyCompanyRoleToCompanyUsers->setModel('\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToCompanyUser');
    }

    /**
     * Gets an array of SpyCompanyRoleToCompanyUser objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCompanyRoleToCompanyUser[] List of SpyCompanyRoleToCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyRoleToCompanyUser> List of SpyCompanyRoleToCompanyUser objects
     * @throws PropelException
     */
    public function getSpyCompanyRoleToCompanyUsers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCompanyRoleToCompanyUsersPartial && !$this->isNew();
        if (null === $this->collSpyCompanyRoleToCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCompanyRoleToCompanyUsers) {
                    $this->initSpyCompanyRoleToCompanyUsers();
                } else {
                    $collectionClassName = SpyCompanyRoleToCompanyUserTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCompanyRoleToCompanyUsers = new $collectionClassName;
                    $collSpyCompanyRoleToCompanyUsers->setModel('\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToCompanyUser');

                    return $collSpyCompanyRoleToCompanyUsers;
                }
            } else {
                $collSpyCompanyRoleToCompanyUsers = SpyCompanyRoleToCompanyUserQuery::create(null, $criteria)
                    ->filterByCompanyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCompanyRoleToCompanyUsersPartial && count($collSpyCompanyRoleToCompanyUsers)) {
                        $this->initSpyCompanyRoleToCompanyUsers(false);

                        foreach ($collSpyCompanyRoleToCompanyUsers as $obj) {
                            if (false == $this->collSpyCompanyRoleToCompanyUsers->contains($obj)) {
                                $this->collSpyCompanyRoleToCompanyUsers->append($obj);
                            }
                        }

                        $this->collSpyCompanyRoleToCompanyUsersPartial = true;
                    }

                    return $collSpyCompanyRoleToCompanyUsers;
                }

                if ($partial && $this->collSpyCompanyRoleToCompanyUsers) {
                    foreach ($this->collSpyCompanyRoleToCompanyUsers as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCompanyRoleToCompanyUsers[] = $obj;
                        }
                    }
                }

                $this->collSpyCompanyRoleToCompanyUsers = $collSpyCompanyRoleToCompanyUsers;
                $this->collSpyCompanyRoleToCompanyUsersPartial = false;
            }
        }

        return $this->collSpyCompanyRoleToCompanyUsers;
    }

    /**
     * Sets a collection of SpyCompanyRoleToCompanyUser objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCompanyRoleToCompanyUsers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function setSpyCompanyRoleToCompanyUsers(Collection $spyCompanyRoleToCompanyUsers, ConnectionInterface $con = null)
    {
        /** @var SpyCompanyRoleToCompanyUser[] $spyCompanyRoleToCompanyUsersToDelete */
        $spyCompanyRoleToCompanyUsersToDelete = $this->getSpyCompanyRoleToCompanyUsers(new Criteria(), $con)->diff($spyCompanyRoleToCompanyUsers);


        $this->spyCompanyRoleToCompanyUsersScheduledForDeletion = $spyCompanyRoleToCompanyUsersToDelete;

        foreach ($spyCompanyRoleToCompanyUsersToDelete as $spyCompanyRoleToCompanyUserRemoved) {
            $spyCompanyRoleToCompanyUserRemoved->setCompanyUser(null);
        }

        $this->collSpyCompanyRoleToCompanyUsers = null;
        foreach ($spyCompanyRoleToCompanyUsers as $spyCompanyRoleToCompanyUser) {
            $this->addSpyCompanyRoleToCompanyUser($spyCompanyRoleToCompanyUser);
        }

        $this->collSpyCompanyRoleToCompanyUsers = $spyCompanyRoleToCompanyUsers;
        $this->collSpyCompanyRoleToCompanyUsersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCompanyRoleToCompanyUser objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCompanyRoleToCompanyUser objects.
     * @throws PropelException
     */
    public function countSpyCompanyRoleToCompanyUsers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCompanyRoleToCompanyUsersPartial && !$this->isNew();
        if (null === $this->collSpyCompanyRoleToCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCompanyRoleToCompanyUsers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCompanyRoleToCompanyUsers());
            }

            $query = SpyCompanyRoleToCompanyUserQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCompanyUser($this)
                ->count($con);
        }

        return count($this->collSpyCompanyRoleToCompanyUsers);
    }

    /**
     * Method called to associate a SpyCompanyRoleToCompanyUser object to this object
     * through the SpyCompanyRoleToCompanyUser foreign key attribute.
     *
     * @param  SpyCompanyRoleToCompanyUser $l SpyCompanyRoleToCompanyUser
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function addSpyCompanyRoleToCompanyUser(SpyCompanyRoleToCompanyUser $l)
    {
        if ($this->collSpyCompanyRoleToCompanyUsers === null) {
            $this->initSpyCompanyRoleToCompanyUsers();
            $this->collSpyCompanyRoleToCompanyUsersPartial = true;
        }

        if (!$this->collSpyCompanyRoleToCompanyUsers->contains($l)) {
            $this->doAddSpyCompanyRoleToCompanyUser($l);

            if ($this->spyCompanyRoleToCompanyUsersScheduledForDeletion and $this->spyCompanyRoleToCompanyUsersScheduledForDeletion->contains($l)) {
                $this->spyCompanyRoleToCompanyUsersScheduledForDeletion->remove($this->spyCompanyRoleToCompanyUsersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCompanyRoleToCompanyUser $spyCompanyRoleToCompanyUser The SpyCompanyRoleToCompanyUser object to add.
     */
    protected function doAddSpyCompanyRoleToCompanyUser(SpyCompanyRoleToCompanyUser $spyCompanyRoleToCompanyUser)
    {
        $this->collSpyCompanyRoleToCompanyUsers[]= $spyCompanyRoleToCompanyUser;
        $spyCompanyRoleToCompanyUser->setCompanyUser($this);
    }

    /**
     * @param  SpyCompanyRoleToCompanyUser $spyCompanyRoleToCompanyUser The SpyCompanyRoleToCompanyUser object to remove.
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function removeSpyCompanyRoleToCompanyUser(SpyCompanyRoleToCompanyUser $spyCompanyRoleToCompanyUser)
    {
        if ($this->getSpyCompanyRoleToCompanyUsers()->contains($spyCompanyRoleToCompanyUser)) {
            $pos = $this->collSpyCompanyRoleToCompanyUsers->search($spyCompanyRoleToCompanyUser);
            $this->collSpyCompanyRoleToCompanyUsers->remove($pos);
            if (null === $this->spyCompanyRoleToCompanyUsersScheduledForDeletion) {
                $this->spyCompanyRoleToCompanyUsersScheduledForDeletion = clone $this->collSpyCompanyRoleToCompanyUsers;
                $this->spyCompanyRoleToCompanyUsersScheduledForDeletion->clear();
            }
            $this->spyCompanyRoleToCompanyUsersScheduledForDeletion[]= clone $spyCompanyRoleToCompanyUser;
            $spyCompanyRoleToCompanyUser->setCompanyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyCompanyRoleToCompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyRoleToCompanyUser[] List of SpyCompanyRoleToCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyRoleToCompanyUser}> List of SpyCompanyRoleToCompanyUser objects
     */
    public function getSpyCompanyRoleToCompanyUsersJoinCompanyRole(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyRoleToCompanyUserQuery::create(null, $criteria);
        $query->joinWith('CompanyRole', $joinBehavior);

        return $this->getSpyCompanyRoleToCompanyUsers($query, $con);
    }

    /**
     * Clears out the collSpyCompanyUserInvitations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCompanyUserInvitations()
     */
    public function clearSpyCompanyUserInvitations()
    {
        $this->collSpyCompanyUserInvitations = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCompanyUserInvitations collection loaded partially.
     */
    public function resetPartialSpyCompanyUserInvitations($v = true)
    {
        $this->collSpyCompanyUserInvitationsPartial = $v;
    }

    /**
     * Initializes the collSpyCompanyUserInvitations collection.
     *
     * By default this just sets the collSpyCompanyUserInvitations collection to an empty array (like clearcollSpyCompanyUserInvitations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCompanyUserInvitations($overrideExisting = true)
    {
        if (null !== $this->collSpyCompanyUserInvitations && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCompanyUserInvitationTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCompanyUserInvitations = new $collectionClassName;
        $this->collSpyCompanyUserInvitations->setModel('\Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation');
    }

    /**
     * Gets an array of SpyCompanyUserInvitation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCompanyUserInvitation[] List of SpyCompanyUserInvitation objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUserInvitation> List of SpyCompanyUserInvitation objects
     * @throws PropelException
     */
    public function getSpyCompanyUserInvitations(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCompanyUserInvitationsPartial && !$this->isNew();
        if (null === $this->collSpyCompanyUserInvitations || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCompanyUserInvitations) {
                    $this->initSpyCompanyUserInvitations();
                } else {
                    $collectionClassName = SpyCompanyUserInvitationTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCompanyUserInvitations = new $collectionClassName;
                    $collSpyCompanyUserInvitations->setModel('\Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation');

                    return $collSpyCompanyUserInvitations;
                }
            } else {
                $collSpyCompanyUserInvitations = SpyCompanyUserInvitationQuery::create(null, $criteria)
                    ->filterBySpyCompanyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCompanyUserInvitationsPartial && count($collSpyCompanyUserInvitations)) {
                        $this->initSpyCompanyUserInvitations(false);

                        foreach ($collSpyCompanyUserInvitations as $obj) {
                            if (false == $this->collSpyCompanyUserInvitations->contains($obj)) {
                                $this->collSpyCompanyUserInvitations->append($obj);
                            }
                        }

                        $this->collSpyCompanyUserInvitationsPartial = true;
                    }

                    return $collSpyCompanyUserInvitations;
                }

                if ($partial && $this->collSpyCompanyUserInvitations) {
                    foreach ($this->collSpyCompanyUserInvitations as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCompanyUserInvitations[] = $obj;
                        }
                    }
                }

                $this->collSpyCompanyUserInvitations = $collSpyCompanyUserInvitations;
                $this->collSpyCompanyUserInvitationsPartial = false;
            }
        }

        return $this->collSpyCompanyUserInvitations;
    }

    /**
     * Sets a collection of SpyCompanyUserInvitation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCompanyUserInvitations A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function setSpyCompanyUserInvitations(Collection $spyCompanyUserInvitations, ConnectionInterface $con = null)
    {
        /** @var SpyCompanyUserInvitation[] $spyCompanyUserInvitationsToDelete */
        $spyCompanyUserInvitationsToDelete = $this->getSpyCompanyUserInvitations(new Criteria(), $con)->diff($spyCompanyUserInvitations);


        $this->spyCompanyUserInvitationsScheduledForDeletion = $spyCompanyUserInvitationsToDelete;

        foreach ($spyCompanyUserInvitationsToDelete as $spyCompanyUserInvitationRemoved) {
            $spyCompanyUserInvitationRemoved->setSpyCompanyUser(null);
        }

        $this->collSpyCompanyUserInvitations = null;
        foreach ($spyCompanyUserInvitations as $spyCompanyUserInvitation) {
            $this->addSpyCompanyUserInvitation($spyCompanyUserInvitation);
        }

        $this->collSpyCompanyUserInvitations = $spyCompanyUserInvitations;
        $this->collSpyCompanyUserInvitationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCompanyUserInvitation objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCompanyUserInvitation objects.
     * @throws PropelException
     */
    public function countSpyCompanyUserInvitations(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCompanyUserInvitationsPartial && !$this->isNew();
        if (null === $this->collSpyCompanyUserInvitations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCompanyUserInvitations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCompanyUserInvitations());
            }

            $query = SpyCompanyUserInvitationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyCompanyUser($this)
                ->count($con);
        }

        return count($this->collSpyCompanyUserInvitations);
    }

    /**
     * Method called to associate a SpyCompanyUserInvitation object to this object
     * through the SpyCompanyUserInvitation foreign key attribute.
     *
     * @param  SpyCompanyUserInvitation $l SpyCompanyUserInvitation
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function addSpyCompanyUserInvitation(SpyCompanyUserInvitation $l)
    {
        if ($this->collSpyCompanyUserInvitations === null) {
            $this->initSpyCompanyUserInvitations();
            $this->collSpyCompanyUserInvitationsPartial = true;
        }

        if (!$this->collSpyCompanyUserInvitations->contains($l)) {
            $this->doAddSpyCompanyUserInvitation($l);

            if ($this->spyCompanyUserInvitationsScheduledForDeletion and $this->spyCompanyUserInvitationsScheduledForDeletion->contains($l)) {
                $this->spyCompanyUserInvitationsScheduledForDeletion->remove($this->spyCompanyUserInvitationsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCompanyUserInvitation $spyCompanyUserInvitation The SpyCompanyUserInvitation object to add.
     */
    protected function doAddSpyCompanyUserInvitation(SpyCompanyUserInvitation $spyCompanyUserInvitation)
    {
        $this->collSpyCompanyUserInvitations[]= $spyCompanyUserInvitation;
        $spyCompanyUserInvitation->setSpyCompanyUser($this);
    }

    /**
     * @param  SpyCompanyUserInvitation $spyCompanyUserInvitation The SpyCompanyUserInvitation object to remove.
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function removeSpyCompanyUserInvitation(SpyCompanyUserInvitation $spyCompanyUserInvitation)
    {
        if ($this->getSpyCompanyUserInvitations()->contains($spyCompanyUserInvitation)) {
            $pos = $this->collSpyCompanyUserInvitations->search($spyCompanyUserInvitation);
            $this->collSpyCompanyUserInvitations->remove($pos);
            if (null === $this->spyCompanyUserInvitationsScheduledForDeletion) {
                $this->spyCompanyUserInvitationsScheduledForDeletion = clone $this->collSpyCompanyUserInvitations;
                $this->spyCompanyUserInvitationsScheduledForDeletion->clear();
            }
            $this->spyCompanyUserInvitationsScheduledForDeletion[]= clone $spyCompanyUserInvitation;
            $spyCompanyUserInvitation->setSpyCompanyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyCompanyUserInvitations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUserInvitation[] List of SpyCompanyUserInvitation objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUserInvitation}> List of SpyCompanyUserInvitation objects
     */
    public function getSpyCompanyUserInvitationsJoinSpyCompanyBusinessUnit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUserInvitationQuery::create(null, $criteria);
        $query->joinWith('SpyCompanyBusinessUnit', $joinBehavior);

        return $this->getSpyCompanyUserInvitations($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyCompanyUserInvitations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUserInvitation[] List of SpyCompanyUserInvitation objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUserInvitation}> List of SpyCompanyUserInvitation objects
     */
    public function getSpyCompanyUserInvitationsJoinSpyCompanyUserInvitationStatus(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUserInvitationQuery::create(null, $criteria);
        $query->joinWith('SpyCompanyUserInvitationStatus', $joinBehavior);

        return $this->getSpyCompanyUserInvitations($query, $con);
    }

    /**
     * Clears out the collSpyQuoteCompanyUsers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyQuoteCompanyUsers()
     */
    public function clearSpyQuoteCompanyUsers()
    {
        $this->collSpyQuoteCompanyUsers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyQuoteCompanyUsers collection loaded partially.
     */
    public function resetPartialSpyQuoteCompanyUsers($v = true)
    {
        $this->collSpyQuoteCompanyUsersPartial = $v;
    }

    /**
     * Initializes the collSpyQuoteCompanyUsers collection.
     *
     * By default this just sets the collSpyQuoteCompanyUsers collection to an empty array (like clearcollSpyQuoteCompanyUsers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyQuoteCompanyUsers($overrideExisting = true)
    {
        if (null !== $this->collSpyQuoteCompanyUsers && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyQuoteCompanyUserTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyQuoteCompanyUsers = new $collectionClassName;
        $this->collSpyQuoteCompanyUsers->setModel('\Orm\Zed\SharedCart\Persistence\SpyQuoteCompanyUser');
    }

    /**
     * Gets an array of SpyQuoteCompanyUser objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyQuoteCompanyUser[] List of SpyQuoteCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyQuoteCompanyUser> List of SpyQuoteCompanyUser objects
     * @throws PropelException
     */
    public function getSpyQuoteCompanyUsers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyQuoteCompanyUsersPartial && !$this->isNew();
        if (null === $this->collSpyQuoteCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyQuoteCompanyUsers) {
                    $this->initSpyQuoteCompanyUsers();
                } else {
                    $collectionClassName = SpyQuoteCompanyUserTableMap::getTableMap()->getCollectionClassName();

                    $collSpyQuoteCompanyUsers = new $collectionClassName;
                    $collSpyQuoteCompanyUsers->setModel('\Orm\Zed\SharedCart\Persistence\SpyQuoteCompanyUser');

                    return $collSpyQuoteCompanyUsers;
                }
            } else {
                $collSpyQuoteCompanyUsers = SpyQuoteCompanyUserQuery::create(null, $criteria)
                    ->filterBySpyCompanyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyQuoteCompanyUsersPartial && count($collSpyQuoteCompanyUsers)) {
                        $this->initSpyQuoteCompanyUsers(false);

                        foreach ($collSpyQuoteCompanyUsers as $obj) {
                            if (false == $this->collSpyQuoteCompanyUsers->contains($obj)) {
                                $this->collSpyQuoteCompanyUsers->append($obj);
                            }
                        }

                        $this->collSpyQuoteCompanyUsersPartial = true;
                    }

                    return $collSpyQuoteCompanyUsers;
                }

                if ($partial && $this->collSpyQuoteCompanyUsers) {
                    foreach ($this->collSpyQuoteCompanyUsers as $obj) {
                        if ($obj->isNew()) {
                            $collSpyQuoteCompanyUsers[] = $obj;
                        }
                    }
                }

                $this->collSpyQuoteCompanyUsers = $collSpyQuoteCompanyUsers;
                $this->collSpyQuoteCompanyUsersPartial = false;
            }
        }

        return $this->collSpyQuoteCompanyUsers;
    }

    /**
     * Sets a collection of SpyQuoteCompanyUser objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyQuoteCompanyUsers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function setSpyQuoteCompanyUsers(Collection $spyQuoteCompanyUsers, ConnectionInterface $con = null)
    {
        /** @var SpyQuoteCompanyUser[] $spyQuoteCompanyUsersToDelete */
        $spyQuoteCompanyUsersToDelete = $this->getSpyQuoteCompanyUsers(new Criteria(), $con)->diff($spyQuoteCompanyUsers);


        $this->spyQuoteCompanyUsersScheduledForDeletion = $spyQuoteCompanyUsersToDelete;

        foreach ($spyQuoteCompanyUsersToDelete as $spyQuoteCompanyUserRemoved) {
            $spyQuoteCompanyUserRemoved->setSpyCompanyUser(null);
        }

        $this->collSpyQuoteCompanyUsers = null;
        foreach ($spyQuoteCompanyUsers as $spyQuoteCompanyUser) {
            $this->addSpyQuoteCompanyUser($spyQuoteCompanyUser);
        }

        $this->collSpyQuoteCompanyUsers = $spyQuoteCompanyUsers;
        $this->collSpyQuoteCompanyUsersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyQuoteCompanyUser objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyQuoteCompanyUser objects.
     * @throws PropelException
     */
    public function countSpyQuoteCompanyUsers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyQuoteCompanyUsersPartial && !$this->isNew();
        if (null === $this->collSpyQuoteCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyQuoteCompanyUsers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyQuoteCompanyUsers());
            }

            $query = SpyQuoteCompanyUserQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyCompanyUser($this)
                ->count($con);
        }

        return count($this->collSpyQuoteCompanyUsers);
    }

    /**
     * Method called to associate a SpyQuoteCompanyUser object to this object
     * through the SpyQuoteCompanyUser foreign key attribute.
     *
     * @param  SpyQuoteCompanyUser $l SpyQuoteCompanyUser
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function addSpyQuoteCompanyUser(SpyQuoteCompanyUser $l)
    {
        if ($this->collSpyQuoteCompanyUsers === null) {
            $this->initSpyQuoteCompanyUsers();
            $this->collSpyQuoteCompanyUsersPartial = true;
        }

        if (!$this->collSpyQuoteCompanyUsers->contains($l)) {
            $this->doAddSpyQuoteCompanyUser($l);

            if ($this->spyQuoteCompanyUsersScheduledForDeletion and $this->spyQuoteCompanyUsersScheduledForDeletion->contains($l)) {
                $this->spyQuoteCompanyUsersScheduledForDeletion->remove($this->spyQuoteCompanyUsersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyQuoteCompanyUser $spyQuoteCompanyUser The SpyQuoteCompanyUser object to add.
     */
    protected function doAddSpyQuoteCompanyUser(SpyQuoteCompanyUser $spyQuoteCompanyUser)
    {
        $this->collSpyQuoteCompanyUsers[]= $spyQuoteCompanyUser;
        $spyQuoteCompanyUser->setSpyCompanyUser($this);
    }

    /**
     * @param  SpyQuoteCompanyUser $spyQuoteCompanyUser The SpyQuoteCompanyUser object to remove.
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function removeSpyQuoteCompanyUser(SpyQuoteCompanyUser $spyQuoteCompanyUser)
    {
        if ($this->getSpyQuoteCompanyUsers()->contains($spyQuoteCompanyUser)) {
            $pos = $this->collSpyQuoteCompanyUsers->search($spyQuoteCompanyUser);
            $this->collSpyQuoteCompanyUsers->remove($pos);
            if (null === $this->spyQuoteCompanyUsersScheduledForDeletion) {
                $this->spyQuoteCompanyUsersScheduledForDeletion = clone $this->collSpyQuoteCompanyUsers;
                $this->spyQuoteCompanyUsersScheduledForDeletion->clear();
            }
            $this->spyQuoteCompanyUsersScheduledForDeletion[]= clone $spyQuoteCompanyUser;
            $spyQuoteCompanyUser->setSpyCompanyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyQuoteCompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyQuoteCompanyUser[] List of SpyQuoteCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyQuoteCompanyUser}> List of SpyQuoteCompanyUser objects
     */
    public function getSpyQuoteCompanyUsersJoinSpyQuote(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyQuoteCompanyUserQuery::create(null, $criteria);
        $query->joinWith('SpyQuote', $joinBehavior);

        return $this->getSpyQuoteCompanyUsers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyQuoteCompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyQuoteCompanyUser[] List of SpyQuoteCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyQuoteCompanyUser}> List of SpyQuoteCompanyUser objects
     */
    public function getSpyQuoteCompanyUsersJoinSpyQuotePermissionGroup(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyQuoteCompanyUserQuery::create(null, $criteria);
        $query->joinWith('SpyQuotePermissionGroup', $joinBehavior);

        return $this->getSpyQuoteCompanyUsers($query, $con);
    }

    /**
     * Clears out the collSpyQuoteApprovals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyQuoteApprovals()
     */
    public function clearSpyQuoteApprovals()
    {
        $this->collSpyQuoteApprovals = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyQuoteApprovals collection loaded partially.
     */
    public function resetPartialSpyQuoteApprovals($v = true)
    {
        $this->collSpyQuoteApprovalsPartial = $v;
    }

    /**
     * Initializes the collSpyQuoteApprovals collection.
     *
     * By default this just sets the collSpyQuoteApprovals collection to an empty array (like clearcollSpyQuoteApprovals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyQuoteApprovals($overrideExisting = true)
    {
        if (null !== $this->collSpyQuoteApprovals && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyQuoteApprovalTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyQuoteApprovals = new $collectionClassName;
        $this->collSpyQuoteApprovals->setModel('\Orm\Zed\QuoteApproval\Persistence\SpyQuoteApproval');
    }

    /**
     * Gets an array of SpyQuoteApproval objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyQuoteApproval[] List of SpyQuoteApproval objects
     * @phpstan-return ObjectCollection&\Traversable<SpyQuoteApproval> List of SpyQuoteApproval objects
     * @throws PropelException
     */
    public function getSpyQuoteApprovals(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyQuoteApprovalsPartial && !$this->isNew();
        if (null === $this->collSpyQuoteApprovals || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyQuoteApprovals) {
                    $this->initSpyQuoteApprovals();
                } else {
                    $collectionClassName = SpyQuoteApprovalTableMap::getTableMap()->getCollectionClassName();

                    $collSpyQuoteApprovals = new $collectionClassName;
                    $collSpyQuoteApprovals->setModel('\Orm\Zed\QuoteApproval\Persistence\SpyQuoteApproval');

                    return $collSpyQuoteApprovals;
                }
            } else {
                $collSpyQuoteApprovals = SpyQuoteApprovalQuery::create(null, $criteria)
                    ->filterBySpyCompanyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyQuoteApprovalsPartial && count($collSpyQuoteApprovals)) {
                        $this->initSpyQuoteApprovals(false);

                        foreach ($collSpyQuoteApprovals as $obj) {
                            if (false == $this->collSpyQuoteApprovals->contains($obj)) {
                                $this->collSpyQuoteApprovals->append($obj);
                            }
                        }

                        $this->collSpyQuoteApprovalsPartial = true;
                    }

                    return $collSpyQuoteApprovals;
                }

                if ($partial && $this->collSpyQuoteApprovals) {
                    foreach ($this->collSpyQuoteApprovals as $obj) {
                        if ($obj->isNew()) {
                            $collSpyQuoteApprovals[] = $obj;
                        }
                    }
                }

                $this->collSpyQuoteApprovals = $collSpyQuoteApprovals;
                $this->collSpyQuoteApprovalsPartial = false;
            }
        }

        return $this->collSpyQuoteApprovals;
    }

    /**
     * Sets a collection of SpyQuoteApproval objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyQuoteApprovals A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function setSpyQuoteApprovals(Collection $spyQuoteApprovals, ConnectionInterface $con = null)
    {
        /** @var SpyQuoteApproval[] $spyQuoteApprovalsToDelete */
        $spyQuoteApprovalsToDelete = $this->getSpyQuoteApprovals(new Criteria(), $con)->diff($spyQuoteApprovals);


        $this->spyQuoteApprovalsScheduledForDeletion = $spyQuoteApprovalsToDelete;

        foreach ($spyQuoteApprovalsToDelete as $spyQuoteApprovalRemoved) {
            $spyQuoteApprovalRemoved->setSpyCompanyUser(null);
        }

        $this->collSpyQuoteApprovals = null;
        foreach ($spyQuoteApprovals as $spyQuoteApproval) {
            $this->addSpyQuoteApproval($spyQuoteApproval);
        }

        $this->collSpyQuoteApprovals = $spyQuoteApprovals;
        $this->collSpyQuoteApprovalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyQuoteApproval objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyQuoteApproval objects.
     * @throws PropelException
     */
    public function countSpyQuoteApprovals(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyQuoteApprovalsPartial && !$this->isNew();
        if (null === $this->collSpyQuoteApprovals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyQuoteApprovals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyQuoteApprovals());
            }

            $query = SpyQuoteApprovalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyCompanyUser($this)
                ->count($con);
        }

        return count($this->collSpyQuoteApprovals);
    }

    /**
     * Method called to associate a SpyQuoteApproval object to this object
     * through the SpyQuoteApproval foreign key attribute.
     *
     * @param  SpyQuoteApproval $l SpyQuoteApproval
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function addSpyQuoteApproval(SpyQuoteApproval $l)
    {
        if ($this->collSpyQuoteApprovals === null) {
            $this->initSpyQuoteApprovals();
            $this->collSpyQuoteApprovalsPartial = true;
        }

        if (!$this->collSpyQuoteApprovals->contains($l)) {
            $this->doAddSpyQuoteApproval($l);

            if ($this->spyQuoteApprovalsScheduledForDeletion and $this->spyQuoteApprovalsScheduledForDeletion->contains($l)) {
                $this->spyQuoteApprovalsScheduledForDeletion->remove($this->spyQuoteApprovalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyQuoteApproval $spyQuoteApproval The SpyQuoteApproval object to add.
     */
    protected function doAddSpyQuoteApproval(SpyQuoteApproval $spyQuoteApproval)
    {
        $this->collSpyQuoteApprovals[]= $spyQuoteApproval;
        $spyQuoteApproval->setSpyCompanyUser($this);
    }

    /**
     * @param  SpyQuoteApproval $spyQuoteApproval The SpyQuoteApproval object to remove.
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function removeSpyQuoteApproval(SpyQuoteApproval $spyQuoteApproval)
    {
        if ($this->getSpyQuoteApprovals()->contains($spyQuoteApproval)) {
            $pos = $this->collSpyQuoteApprovals->search($spyQuoteApproval);
            $this->collSpyQuoteApprovals->remove($pos);
            if (null === $this->spyQuoteApprovalsScheduledForDeletion) {
                $this->spyQuoteApprovalsScheduledForDeletion = clone $this->collSpyQuoteApprovals;
                $this->spyQuoteApprovalsScheduledForDeletion->clear();
            }
            $this->spyQuoteApprovalsScheduledForDeletion[]= clone $spyQuoteApproval;
            $spyQuoteApproval->setSpyCompanyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyQuoteApprovals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyQuoteApproval[] List of SpyQuoteApproval objects
     * @phpstan-return ObjectCollection&\Traversable<SpyQuoteApproval}> List of SpyQuoteApproval objects
     */
    public function getSpyQuoteApprovalsJoinSpyQuote(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyQuoteApprovalQuery::create(null, $criteria);
        $query->joinWith('SpyQuote', $joinBehavior);

        return $this->getSpyQuoteApprovals($query, $con);
    }

    /**
     * Clears out the collSpyQuoteRequests collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyQuoteRequests()
     */
    public function clearSpyQuoteRequests()
    {
        $this->collSpyQuoteRequests = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyQuoteRequests collection loaded partially.
     */
    public function resetPartialSpyQuoteRequests($v = true)
    {
        $this->collSpyQuoteRequestsPartial = $v;
    }

    /**
     * Initializes the collSpyQuoteRequests collection.
     *
     * By default this just sets the collSpyQuoteRequests collection to an empty array (like clearcollSpyQuoteRequests());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyQuoteRequests($overrideExisting = true)
    {
        if (null !== $this->collSpyQuoteRequests && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyQuoteRequestTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyQuoteRequests = new $collectionClassName;
        $this->collSpyQuoteRequests->setModel('\Orm\Zed\QuoteRequest\Persistence\SpyQuoteRequest');
    }

    /**
     * Gets an array of SpyQuoteRequest objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyQuoteRequest[] List of SpyQuoteRequest objects
     * @phpstan-return ObjectCollection&\Traversable<SpyQuoteRequest> List of SpyQuoteRequest objects
     * @throws PropelException
     */
    public function getSpyQuoteRequests(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyQuoteRequestsPartial && !$this->isNew();
        if (null === $this->collSpyQuoteRequests || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyQuoteRequests) {
                    $this->initSpyQuoteRequests();
                } else {
                    $collectionClassName = SpyQuoteRequestTableMap::getTableMap()->getCollectionClassName();

                    $collSpyQuoteRequests = new $collectionClassName;
                    $collSpyQuoteRequests->setModel('\Orm\Zed\QuoteRequest\Persistence\SpyQuoteRequest');

                    return $collSpyQuoteRequests;
                }
            } else {
                $collSpyQuoteRequests = SpyQuoteRequestQuery::create(null, $criteria)
                    ->filterByCompanyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyQuoteRequestsPartial && count($collSpyQuoteRequests)) {
                        $this->initSpyQuoteRequests(false);

                        foreach ($collSpyQuoteRequests as $obj) {
                            if (false == $this->collSpyQuoteRequests->contains($obj)) {
                                $this->collSpyQuoteRequests->append($obj);
                            }
                        }

                        $this->collSpyQuoteRequestsPartial = true;
                    }

                    return $collSpyQuoteRequests;
                }

                if ($partial && $this->collSpyQuoteRequests) {
                    foreach ($this->collSpyQuoteRequests as $obj) {
                        if ($obj->isNew()) {
                            $collSpyQuoteRequests[] = $obj;
                        }
                    }
                }

                $this->collSpyQuoteRequests = $collSpyQuoteRequests;
                $this->collSpyQuoteRequestsPartial = false;
            }
        }

        return $this->collSpyQuoteRequests;
    }

    /**
     * Sets a collection of SpyQuoteRequest objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyQuoteRequests A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function setSpyQuoteRequests(Collection $spyQuoteRequests, ConnectionInterface $con = null)
    {
        /** @var SpyQuoteRequest[] $spyQuoteRequestsToDelete */
        $spyQuoteRequestsToDelete = $this->getSpyQuoteRequests(new Criteria(), $con)->diff($spyQuoteRequests);


        $this->spyQuoteRequestsScheduledForDeletion = $spyQuoteRequestsToDelete;

        foreach ($spyQuoteRequestsToDelete as $spyQuoteRequestRemoved) {
            $spyQuoteRequestRemoved->setCompanyUser(null);
        }

        $this->collSpyQuoteRequests = null;
        foreach ($spyQuoteRequests as $spyQuoteRequest) {
            $this->addSpyQuoteRequest($spyQuoteRequest);
        }

        $this->collSpyQuoteRequests = $spyQuoteRequests;
        $this->collSpyQuoteRequestsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyQuoteRequest objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyQuoteRequest objects.
     * @throws PropelException
     */
    public function countSpyQuoteRequests(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyQuoteRequestsPartial && !$this->isNew();
        if (null === $this->collSpyQuoteRequests || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyQuoteRequests) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyQuoteRequests());
            }

            $query = SpyQuoteRequestQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCompanyUser($this)
                ->count($con);
        }

        return count($this->collSpyQuoteRequests);
    }

    /**
     * Method called to associate a SpyQuoteRequest object to this object
     * through the SpyQuoteRequest foreign key attribute.
     *
     * @param  SpyQuoteRequest $l SpyQuoteRequest
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function addSpyQuoteRequest(SpyQuoteRequest $l)
    {
        if ($this->collSpyQuoteRequests === null) {
            $this->initSpyQuoteRequests();
            $this->collSpyQuoteRequestsPartial = true;
        }

        if (!$this->collSpyQuoteRequests->contains($l)) {
            $this->doAddSpyQuoteRequest($l);

            if ($this->spyQuoteRequestsScheduledForDeletion and $this->spyQuoteRequestsScheduledForDeletion->contains($l)) {
                $this->spyQuoteRequestsScheduledForDeletion->remove($this->spyQuoteRequestsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyQuoteRequest $spyQuoteRequest The SpyQuoteRequest object to add.
     */
    protected function doAddSpyQuoteRequest(SpyQuoteRequest $spyQuoteRequest)
    {
        $this->collSpyQuoteRequests[]= $spyQuoteRequest;
        $spyQuoteRequest->setCompanyUser($this);
    }

    /**
     * @param  SpyQuoteRequest $spyQuoteRequest The SpyQuoteRequest object to remove.
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function removeSpyQuoteRequest(SpyQuoteRequest $spyQuoteRequest)
    {
        if ($this->getSpyQuoteRequests()->contains($spyQuoteRequest)) {
            $pos = $this->collSpyQuoteRequests->search($spyQuoteRequest);
            $this->collSpyQuoteRequests->remove($pos);
            if (null === $this->spyQuoteRequestsScheduledForDeletion) {
                $this->spyQuoteRequestsScheduledForDeletion = clone $this->collSpyQuoteRequests;
                $this->spyQuoteRequestsScheduledForDeletion->clear();
            }
            $this->spyQuoteRequestsScheduledForDeletion[]= clone $spyQuoteRequest;
            $spyQuoteRequest->setCompanyUser(null);
        }

        return $this;
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
     * Gets an array of SpyShoppingListCompanyUser objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyShoppingListCompanyUser[] List of SpyShoppingListCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyUser> List of SpyShoppingListCompanyUser objects
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
                $collSpyShoppingListCompanyUsers = SpyShoppingListCompanyUserQuery::create(null, $criteria)
                    ->filterBySpyCompanyUser($this)
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
     * Sets a collection of SpyShoppingListCompanyUser objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyShoppingListCompanyUsers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function setSpyShoppingListCompanyUsers(Collection $spyShoppingListCompanyUsers, ConnectionInterface $con = null)
    {
        /** @var SpyShoppingListCompanyUser[] $spyShoppingListCompanyUsersToDelete */
        $spyShoppingListCompanyUsersToDelete = $this->getSpyShoppingListCompanyUsers(new Criteria(), $con)->diff($spyShoppingListCompanyUsers);


        $this->spyShoppingListCompanyUsersScheduledForDeletion = $spyShoppingListCompanyUsersToDelete;

        foreach ($spyShoppingListCompanyUsersToDelete as $spyShoppingListCompanyUserRemoved) {
            $spyShoppingListCompanyUserRemoved->setSpyCompanyUser(null);
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
     * Returns the number of related BaseSpyShoppingListCompanyUser objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyShoppingListCompanyUser objects.
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

            $query = SpyShoppingListCompanyUserQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyCompanyUser($this)
                ->count($con);
        }

        return count($this->collSpyShoppingListCompanyUsers);
    }

    /**
     * Method called to associate a SpyShoppingListCompanyUser object to this object
     * through the SpyShoppingListCompanyUser foreign key attribute.
     *
     * @param  SpyShoppingListCompanyUser $l SpyShoppingListCompanyUser
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function addSpyShoppingListCompanyUser(SpyShoppingListCompanyUser $l)
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
     * @param SpyShoppingListCompanyUser $spyShoppingListCompanyUser The SpyShoppingListCompanyUser object to add.
     */
    protected function doAddSpyShoppingListCompanyUser(SpyShoppingListCompanyUser $spyShoppingListCompanyUser)
    {
        $this->collSpyShoppingListCompanyUsers[]= $spyShoppingListCompanyUser;
        $spyShoppingListCompanyUser->setSpyCompanyUser($this);
    }

    /**
     * @param  SpyShoppingListCompanyUser $spyShoppingListCompanyUser The SpyShoppingListCompanyUser object to remove.
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function removeSpyShoppingListCompanyUser(SpyShoppingListCompanyUser $spyShoppingListCompanyUser)
    {
        if ($this->getSpyShoppingListCompanyUsers()->contains($spyShoppingListCompanyUser)) {
            $pos = $this->collSpyShoppingListCompanyUsers->search($spyShoppingListCompanyUser);
            $this->collSpyShoppingListCompanyUsers->remove($pos);
            if (null === $this->spyShoppingListCompanyUsersScheduledForDeletion) {
                $this->spyShoppingListCompanyUsersScheduledForDeletion = clone $this->collSpyShoppingListCompanyUsers;
                $this->spyShoppingListCompanyUsersScheduledForDeletion->clear();
            }
            $this->spyShoppingListCompanyUsersScheduledForDeletion[]= clone $spyShoppingListCompanyUser;
            $spyShoppingListCompanyUser->setSpyCompanyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyShoppingListCompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyShoppingListCompanyUser[] List of SpyShoppingListCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyUser}> List of SpyShoppingListCompanyUser objects
     */
    public function getSpyShoppingListCompanyUsersJoinSpyShoppingList(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyShoppingListCompanyUserQuery::create(null, $criteria);
        $query->joinWith('SpyShoppingList', $joinBehavior);

        return $this->getSpyShoppingListCompanyUsers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyShoppingListCompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyShoppingListCompanyUser[] List of SpyShoppingListCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyUser}> List of SpyShoppingListCompanyUser objects
     */
    public function getSpyShoppingListCompanyUsersJoinSpyShoppingListPermissionGroup(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyShoppingListCompanyUserQuery::create(null, $criteria);
        $query->joinWith('SpyShoppingListPermissionGroup', $joinBehavior);

        return $this->getSpyShoppingListCompanyUsers($query, $con);
    }

    /**
     * Clears out the collSpyShoppingListCompanyBusinessUnitBlacklists collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyShoppingListCompanyBusinessUnitBlacklists()
     */
    public function clearSpyShoppingListCompanyBusinessUnitBlacklists()
    {
        $this->collSpyShoppingListCompanyBusinessUnitBlacklists = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyShoppingListCompanyBusinessUnitBlacklists collection loaded partially.
     */
    public function resetPartialSpyShoppingListCompanyBusinessUnitBlacklists($v = true)
    {
        $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial = $v;
    }

    /**
     * Initializes the collSpyShoppingListCompanyBusinessUnitBlacklists collection.
     *
     * By default this just sets the collSpyShoppingListCompanyBusinessUnitBlacklists collection to an empty array (like clearcollSpyShoppingListCompanyBusinessUnitBlacklists());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyShoppingListCompanyBusinessUnitBlacklists($overrideExisting = true)
    {
        if (null !== $this->collSpyShoppingListCompanyBusinessUnitBlacklists && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShoppingListCompanyBusinessUnitBlacklistTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyShoppingListCompanyBusinessUnitBlacklists = new $collectionClassName;
        $this->collSpyShoppingListCompanyBusinessUnitBlacklists->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitBlacklist');
    }

    /**
     * Gets an array of SpyShoppingListCompanyBusinessUnitBlacklist objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyShoppingListCompanyBusinessUnitBlacklist[] List of SpyShoppingListCompanyBusinessUnitBlacklist objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnitBlacklist> List of SpyShoppingListCompanyBusinessUnitBlacklist objects
     * @throws PropelException
     */
    public function getSpyShoppingListCompanyBusinessUnitBlacklists(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyBusinessUnitBlacklists || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyShoppingListCompanyBusinessUnitBlacklists) {
                    $this->initSpyShoppingListCompanyBusinessUnitBlacklists();
                } else {
                    $collectionClassName = SpyShoppingListCompanyBusinessUnitBlacklistTableMap::getTableMap()->getCollectionClassName();

                    $collSpyShoppingListCompanyBusinessUnitBlacklists = new $collectionClassName;
                    $collSpyShoppingListCompanyBusinessUnitBlacklists->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitBlacklist');

                    return $collSpyShoppingListCompanyBusinessUnitBlacklists;
                }
            } else {
                $collSpyShoppingListCompanyBusinessUnitBlacklists = SpyShoppingListCompanyBusinessUnitBlacklistQuery::create(null, $criteria)
                    ->filterBySpyCompanyUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial && count($collSpyShoppingListCompanyBusinessUnitBlacklists)) {
                        $this->initSpyShoppingListCompanyBusinessUnitBlacklists(false);

                        foreach ($collSpyShoppingListCompanyBusinessUnitBlacklists as $obj) {
                            if (false == $this->collSpyShoppingListCompanyBusinessUnitBlacklists->contains($obj)) {
                                $this->collSpyShoppingListCompanyBusinessUnitBlacklists->append($obj);
                            }
                        }

                        $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial = true;
                    }

                    return $collSpyShoppingListCompanyBusinessUnitBlacklists;
                }

                if ($partial && $this->collSpyShoppingListCompanyBusinessUnitBlacklists) {
                    foreach ($this->collSpyShoppingListCompanyBusinessUnitBlacklists as $obj) {
                        if ($obj->isNew()) {
                            $collSpyShoppingListCompanyBusinessUnitBlacklists[] = $obj;
                        }
                    }
                }

                $this->collSpyShoppingListCompanyBusinessUnitBlacklists = $collSpyShoppingListCompanyBusinessUnitBlacklists;
                $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial = false;
            }
        }

        return $this->collSpyShoppingListCompanyBusinessUnitBlacklists;
    }

    /**
     * Sets a collection of SpyShoppingListCompanyBusinessUnitBlacklist objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyShoppingListCompanyBusinessUnitBlacklists A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function setSpyShoppingListCompanyBusinessUnitBlacklists(Collection $spyShoppingListCompanyBusinessUnitBlacklists, ConnectionInterface $con = null)
    {
        /** @var SpyShoppingListCompanyBusinessUnitBlacklist[] $spyShoppingListCompanyBusinessUnitBlacklistsToDelete */
        $spyShoppingListCompanyBusinessUnitBlacklistsToDelete = $this->getSpyShoppingListCompanyBusinessUnitBlacklists(new Criteria(), $con)->diff($spyShoppingListCompanyBusinessUnitBlacklists);


        $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion = $spyShoppingListCompanyBusinessUnitBlacklistsToDelete;

        foreach ($spyShoppingListCompanyBusinessUnitBlacklistsToDelete as $spyShoppingListCompanyBusinessUnitBlacklistRemoved) {
            $spyShoppingListCompanyBusinessUnitBlacklistRemoved->setSpyCompanyUser(null);
        }

        $this->collSpyShoppingListCompanyBusinessUnitBlacklists = null;
        foreach ($spyShoppingListCompanyBusinessUnitBlacklists as $spyShoppingListCompanyBusinessUnitBlacklist) {
            $this->addSpyShoppingListCompanyBusinessUnitBlacklist($spyShoppingListCompanyBusinessUnitBlacklist);
        }

        $this->collSpyShoppingListCompanyBusinessUnitBlacklists = $spyShoppingListCompanyBusinessUnitBlacklists;
        $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyShoppingListCompanyBusinessUnitBlacklist objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyShoppingListCompanyBusinessUnitBlacklist objects.
     * @throws PropelException
     */
    public function countSpyShoppingListCompanyBusinessUnitBlacklists(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyBusinessUnitBlacklists || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyShoppingListCompanyBusinessUnitBlacklists) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyShoppingListCompanyBusinessUnitBlacklists());
            }

            $query = SpyShoppingListCompanyBusinessUnitBlacklistQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyCompanyUser($this)
                ->count($con);
        }

        return count($this->collSpyShoppingListCompanyBusinessUnitBlacklists);
    }

    /**
     * Method called to associate a SpyShoppingListCompanyBusinessUnitBlacklist object to this object
     * through the SpyShoppingListCompanyBusinessUnitBlacklist foreign key attribute.
     *
     * @param  SpyShoppingListCompanyBusinessUnitBlacklist $l SpyShoppingListCompanyBusinessUnitBlacklist
     * @return $this|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser The current object (for fluent API support)
     */
    public function addSpyShoppingListCompanyBusinessUnitBlacklist(SpyShoppingListCompanyBusinessUnitBlacklist $l)
    {
        if ($this->collSpyShoppingListCompanyBusinessUnitBlacklists === null) {
            $this->initSpyShoppingListCompanyBusinessUnitBlacklists();
            $this->collSpyShoppingListCompanyBusinessUnitBlacklistsPartial = true;
        }

        if (!$this->collSpyShoppingListCompanyBusinessUnitBlacklists->contains($l)) {
            $this->doAddSpyShoppingListCompanyBusinessUnitBlacklist($l);

            if ($this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion and $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion->contains($l)) {
                $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion->remove($this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyShoppingListCompanyBusinessUnitBlacklist $spyShoppingListCompanyBusinessUnitBlacklist The SpyShoppingListCompanyBusinessUnitBlacklist object to add.
     */
    protected function doAddSpyShoppingListCompanyBusinessUnitBlacklist(SpyShoppingListCompanyBusinessUnitBlacklist $spyShoppingListCompanyBusinessUnitBlacklist)
    {
        $this->collSpyShoppingListCompanyBusinessUnitBlacklists[]= $spyShoppingListCompanyBusinessUnitBlacklist;
        $spyShoppingListCompanyBusinessUnitBlacklist->setSpyCompanyUser($this);
    }

    /**
     * @param  SpyShoppingListCompanyBusinessUnitBlacklist $spyShoppingListCompanyBusinessUnitBlacklist The SpyShoppingListCompanyBusinessUnitBlacklist object to remove.
     * @return $this|ChildSpyCompanyUser The current object (for fluent API support)
     */
    public function removeSpyShoppingListCompanyBusinessUnitBlacklist(SpyShoppingListCompanyBusinessUnitBlacklist $spyShoppingListCompanyBusinessUnitBlacklist)
    {
        if ($this->getSpyShoppingListCompanyBusinessUnitBlacklists()->contains($spyShoppingListCompanyBusinessUnitBlacklist)) {
            $pos = $this->collSpyShoppingListCompanyBusinessUnitBlacklists->search($spyShoppingListCompanyBusinessUnitBlacklist);
            $this->collSpyShoppingListCompanyBusinessUnitBlacklists->remove($pos);
            if (null === $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion) {
                $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion = clone $this->collSpyShoppingListCompanyBusinessUnitBlacklists;
                $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion->clear();
            }
            $this->spyShoppingListCompanyBusinessUnitBlacklistsScheduledForDeletion[]= clone $spyShoppingListCompanyBusinessUnitBlacklist;
            $spyShoppingListCompanyBusinessUnitBlacklist->setSpyCompanyUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyUser is new, it will return
     * an empty collection; or if this SpyCompanyUser has previously
     * been saved, it will retrieve related SpyShoppingListCompanyBusinessUnitBlacklists from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyShoppingListCompanyBusinessUnitBlacklist[] List of SpyShoppingListCompanyBusinessUnitBlacklist objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnitBlacklist}> List of SpyShoppingListCompanyBusinessUnitBlacklist objects
     */
    public function getSpyShoppingListCompanyBusinessUnitBlacklistsJoinSpyShoppingListCompanyBusinessUnit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyShoppingListCompanyBusinessUnitBlacklistQuery::create(null, $criteria);
        $query->joinWith('SpyShoppingListCompanyBusinessUnit', $joinBehavior);

        return $this->getSpyShoppingListCompanyBusinessUnitBlacklists($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCompanyBusinessUnit) {
            $this->aCompanyBusinessUnit->removeCompanyUser($this);
        }
        if (null !== $this->aCompany) {
            $this->aCompany->removeCompanyUser($this);
        }
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeCompanyUser($this);
        }
        $this->id_company_user = null;
        $this->fk_company = null;
        $this->fk_company_business_unit = null;
        $this->fk_customer = null;
        $this->is_active = null;
        $this->is_default = null;
        $this->key = null;
        $this->uuid = null;
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
            if ($this->collSpyCompanyRoleToCompanyUsers) {
                foreach ($this->collSpyCompanyRoleToCompanyUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyCompanyUserInvitations) {
                foreach ($this->collSpyCompanyUserInvitations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyQuoteCompanyUsers) {
                foreach ($this->collSpyQuoteCompanyUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyQuoteApprovals) {
                foreach ($this->collSpyQuoteApprovals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyQuoteRequests) {
                foreach ($this->collSpyQuoteRequests as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyShoppingListCompanyUsers) {
                foreach ($this->collSpyShoppingListCompanyUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyShoppingListCompanyBusinessUnitBlacklists) {
                foreach ($this->collSpyShoppingListCompanyBusinessUnitBlacklists as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyCompanyRoleToCompanyUsers = null;
        $this->collSpyCompanyUserInvitations = null;
        $this->collSpyQuoteCompanyUsers = null;
        $this->collSpyQuoteApprovals = null;
        $this->collSpyQuoteRequests = null;
        $this->collSpyShoppingListCompanyUsers = null;
        $this->collSpyShoppingListCompanyBusinessUnitBlacklists = null;
        $this->aCompanyBusinessUnit = null;
        $this->aCompany = null;
        $this->aCustomer = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyCompanyUserTableMap::DEFAULT_STRING_FORMAT);
    }

    // uuid behavior

    /**
     * @return \Spryker\Service\UtilUuidGenerator\UtilUuidGeneratorServiceInterface
     */
    protected function getUuidGeneratorService()
    {
        if (static::$_uuidGeneratorService === null) {
            static::$_uuidGeneratorService = \Spryker\Zed\Kernel\Locator::getInstance()->utilUuidGenerator()->service();
        }

        return static::$_uuidGeneratorService;
    }

    /**
     * @return void
     */
    protected function setGeneratedUuid()
    {
        $uuidGenerateUtilService = $this->getUuidGeneratorService();
        $name = 'spy_company_user' . '.' . $this->getIdCompanyUser() . '.' . $this->getFkCustomer();
        $uuid = $uuidGenerateUtilService->generateUuid5FromObjectId($name);
        $this->setUuid($uuid);
    }

    /**
     * @param ConnectionInterface $con
     *
     * @return void
     */
    protected function updateUuidAfterInsert(ConnectionInterface $con = null)
    {
        if (!$this->getUuid()) {
            $this->setGeneratedUuid();
            $this->doSave($con);
        }
    }

    /**
     * @return void
     */
    protected function updateUuidBeforeUpdate()
    {
        if (!$this->getUuid()) {
            $this->setGeneratedUuid();
        }
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_company_user.create';
        } else {
            $this->_eventName = 'Entity.spy_company_user.update';
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

        if ($this->_eventName !== 'Entity.spy_company_user.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_company_user',
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
            'name' => 'spy_company_user',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_company_user.delete',
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
            $field = str_replace('spy_company_user.', '', $modifiedColumn);
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
            $field = str_replace('spy_company_user.', '', $additionalValueColumnName);
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
        $columnType = SpyCompanyUserTableMap::getTableMap()->getColumn($column)->getType();
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
