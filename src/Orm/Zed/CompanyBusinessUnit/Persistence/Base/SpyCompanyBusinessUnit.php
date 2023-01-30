<?php

namespace Orm\Zed\CompanyBusinessUnit\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit as ChildSpyCompanyBusinessUnit;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery as ChildSpyCompanyBusinessUnitQuery;
use Orm\Zed\CompanyBusinessUnit\Persistence\Map\SpyCompanyBusinessUnitTableMap;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnit;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnitQuery;
use Orm\Zed\CompanyUnitAddress\Persistence\Base\SpyCompanyUnitAddressToCompanyBusinessUnit as BaseSpyCompanyUnitAddressToCompanyBusinessUnit;
use Orm\Zed\CompanyUnitAddress\Persistence\Map\SpyCompanyUnitAddressToCompanyBusinessUnitTableMap;
use Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation;
use Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery;
use Orm\Zed\CompanyUserInvitation\Persistence\Base\SpyCompanyUserInvitation as BaseSpyCompanyUserInvitation;
use Orm\Zed\CompanyUserInvitation\Persistence\Map\SpyCompanyUserInvitationTableMap;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUser;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery;
use Orm\Zed\CompanyUser\Persistence\Base\SpyCompanyUser as BaseSpyCompanyUser;
use Orm\Zed\CompanyUser\Persistence\Map\SpyCompanyUserTableMap;
use Orm\Zed\Company\Persistence\SpyCompany;
use Orm\Zed\Company\Persistence\SpyCompanyQuery;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery;
use Orm\Zed\MerchantRelationship\Persistence\Base\SpyMerchantRelationship as BaseSpyMerchantRelationship;
use Orm\Zed\MerchantRelationship\Persistence\Base\SpyMerchantRelationshipToCompanyBusinessUnit as BaseSpyMerchantRelationshipToCompanyBusinessUnit;
use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipTableMap;
use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipToCompanyBusinessUnitTableMap;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery;
use Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListCompanyBusinessUnit as BaseSpyShoppingListCompanyBusinessUnit;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListCompanyBusinessUnitTableMap;
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
 * Base class that represents a row from the 'spy_company_business_unit' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.CompanyBusinessUnit.Persistence.Base
 */
abstract class SpyCompanyBusinessUnit implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\CompanyBusinessUnit\\Persistence\\Map\\SpyCompanyBusinessUnitTableMap';


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
     * The value for the id_company_business_unit field.
     *
     * @var        int
     */
    protected $id_company_business_unit;

    /**
     * The value for the fk_company field.
     *
     * @var        int
     */
    protected $fk_company;

    /**
     * The value for the fk_parent_company_business_unit field.
     *
     * @var        int|null
     */
    protected $fk_parent_company_business_unit;

    /**
     * The value for the bic field.
     *
     * @var        string|null
     */
    protected $bic;

    /**
     * The value for the default_billing_address field.
     *
     * @var        int|null
     */
    protected $default_billing_address;

    /**
     * The value for the email field.
     *
     * @var        string|null
     */
    protected $email;

    /**
     * The value for the external_url field.
     *
     * @var        string|null
     */
    protected $external_url;

    /**
     * The value for the iban field.
     *
     * @var        string|null
     */
    protected $iban;

    /**
     * The value for the key field.
     * Key is used for DataImport as identifier for existing entities. This should never be changed.
     * @var        string|null
     */
    protected $key;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the phone field.
     *
     * @var        string|null
     */
    protected $phone;

    /**
     * The value for the uuid field.
     *
     * @var        string|null
     */
    protected $uuid;

    /**
     * @var        SpyCompany
     */
    protected $aCompany;

    /**
     * @var        ChildSpyCompanyBusinessUnit
     */
    protected $aParentCompanyBusinessUnit;

    /**
     * @var        SpyCompanyUnitAddress
     */
    protected $aCompanyBusinessUnitDefaultBillingAddress;

    /**
     * @var        ObjectCollection|ChildSpyCompanyBusinessUnit[] Collection to store aggregation of ChildSpyCompanyBusinessUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCompanyBusinessUnit> Collection to store aggregation of ChildSpyCompanyBusinessUnit objects.
     */
    protected $collChildrenCompanyBusinessUnitss;
    protected $collChildrenCompanyBusinessUnitssPartial;

    /**
     * @var        ObjectCollection|SpyCompanyUnitAddressToCompanyBusinessUnit[] Collection to store aggregation of SpyCompanyUnitAddressToCompanyBusinessUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUnitAddressToCompanyBusinessUnit> Collection to store aggregation of SpyCompanyUnitAddressToCompanyBusinessUnit objects.
     */
    protected $collSpyCompanyUnitAddressToCompanyBusinessUnits;
    protected $collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial;

    /**
     * @var        ObjectCollection|SpyCompanyUser[] Collection to store aggregation of SpyCompanyUser objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUser> Collection to store aggregation of SpyCompanyUser objects.
     */
    protected $collCompanyUsers;
    protected $collCompanyUsersPartial;

    /**
     * @var        ObjectCollection|SpyCompanyUserInvitation[] Collection to store aggregation of SpyCompanyUserInvitation objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUserInvitation> Collection to store aggregation of SpyCompanyUserInvitation objects.
     */
    protected $collSpyCompanyUserInvitations;
    protected $collSpyCompanyUserInvitationsPartial;

    /**
     * @var        ObjectCollection|SpyMerchantRelationship[] Collection to store aggregation of SpyMerchantRelationship objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationship> Collection to store aggregation of SpyMerchantRelationship objects.
     */
    protected $collSpyMerchantRelationships;
    protected $collSpyMerchantRelationshipsPartial;

    /**
     * @var        ObjectCollection|SpyMerchantRelationshipToCompanyBusinessUnit[] Collection to store aggregation of SpyMerchantRelationshipToCompanyBusinessUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationshipToCompanyBusinessUnit> Collection to store aggregation of SpyMerchantRelationshipToCompanyBusinessUnit objects.
     */
    protected $collSpyMerchantRelationshipToCompanyBusinessUnits;
    protected $collSpyMerchantRelationshipToCompanyBusinessUnitsPartial;

    /**
     * @var        ObjectCollection|SpyShoppingListCompanyBusinessUnit[] Collection to store aggregation of SpyShoppingListCompanyBusinessUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnit> Collection to store aggregation of SpyShoppingListCompanyBusinessUnit objects.
     */
    protected $collSpyShoppingListCompanyBusinessUnits;
    protected $collSpyShoppingListCompanyBusinessUnitsPartial;

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

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyCompanyBusinessUnit[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCompanyBusinessUnit>
     */
    protected $childrenCompanyBusinessUnitssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCompanyUnitAddressToCompanyBusinessUnit[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUnitAddressToCompanyBusinessUnit>
     */
    protected $spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCompanyUser[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUser>
     */
    protected $companyUsersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyCompanyUserInvitation[]
     * @phpstan-var ObjectCollection&\Traversable<SpyCompanyUserInvitation>
     */
    protected $spyCompanyUserInvitationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyMerchantRelationship[]
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationship>
     */
    protected $spyMerchantRelationshipsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyMerchantRelationshipToCompanyBusinessUnit[]
     * @phpstan-var ObjectCollection&\Traversable<SpyMerchantRelationshipToCompanyBusinessUnit>
     */
    protected $spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyShoppingListCompanyBusinessUnit[]
     * @phpstan-var ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnit>
     */
    protected $spyShoppingListCompanyBusinessUnitsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\CompanyBusinessUnit\Persistence\Base\SpyCompanyBusinessUnit object.
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
     * Compares this with another <code>SpyCompanyBusinessUnit</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyCompanyBusinessUnit</code>, delegates to
     * <code>equals(SpyCompanyBusinessUnit)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_company_business_unit] column value.
     *
     * @return int
     */
    public function getIdCompanyBusinessUnit()
    {
        return $this->id_company_business_unit;
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
     * Get the [fk_parent_company_business_unit] column value.
     *
     * @return int|null
     */
    public function getFkParentCompanyBusinessUnit()
    {
        return $this->fk_parent_company_business_unit;
    }

    /**
     * Get the [bic] column value.
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Get the [default_billing_address] column value.
     *
     * @return int|null
     */
    public function getDefaultBillingAddress()
    {
        return $this->default_billing_address;
    }

    /**
     * Get the [email] column value.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
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
     * Get the [iban] column value.
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Get the [key] column value.
     * Key is used for DataImport as identifier for existing entities. This should never be changed.
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
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
     * Get the [phone] column value.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
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
     * Set the value of [id_company_business_unit] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setIdCompanyBusinessUnit($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_company_business_unit !== $v) {
            $this->id_company_business_unit = $v;
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_ID_COMPANY_BUSINESS_UNIT] = true;
        }

        return $this;
    } // setIdCompanyBusinessUnit()

    /**
     * Set the value of [fk_company] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_FK_COMPANY] = true;
        }

        if ($this->aCompany !== null && $this->aCompany->getIdCompany() !== $v) {
            $this->aCompany = null;
        }

        return $this;
    } // setFkCompany()

    /**
     * Set the value of [fk_parent_company_business_unit] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setFkParentCompanyBusinessUnit($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_parent_company_business_unit !== $v) {
            $this->fk_parent_company_business_unit = $v;
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_FK_PARENT_COMPANY_BUSINESS_UNIT] = true;
        }

        if ($this->aParentCompanyBusinessUnit !== null && $this->aParentCompanyBusinessUnit->getIdCompanyBusinessUnit() !== $v) {
            $this->aParentCompanyBusinessUnit = null;
        }

        return $this;
    } // setFkParentCompanyBusinessUnit()

    /**
     * Set the value of [bic] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setBic($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->bic !== $v) {
            $this->bic = $v;
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_BIC] = true;
        }

        return $this;
    } // setBic()

    /**
     * Set the value of [default_billing_address] column.
     *
     * @param int|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setDefaultBillingAddress($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->default_billing_address !== $v) {
            $this->default_billing_address = $v;
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_DEFAULT_BILLING_ADDRESS] = true;
        }

        if ($this->aCompanyBusinessUnitDefaultBillingAddress !== null && $this->aCompanyBusinessUnitDefaultBillingAddress->getIdCompanyUnitAddress() !== $v) {
            $this->aCompanyBusinessUnitDefaultBillingAddress = null;
        }

        return $this;
    } // setDefaultBillingAddress()

    /**
     * Set the value of [email] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [external_url] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_EXTERNAL_URL] = true;
        }

        return $this;
    } // setExternalUrl()

    /**
     * Set the value of [iban] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setIban($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->iban !== $v) {
            $this->iban = $v;
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_IBAN] = true;
        }

        return $this;
    } // setIban()

    /**
     * Set the value of [key] column.
     * Key is used for DataImport as identifier for existing entities. This should never be changed.
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_KEY] = true;
        }

        return $this;
    } // setKey()

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [phone] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_PHONE] = true;
        }

        return $this;
    } // setPhone()

    /**
     * Set the value of [uuid] column.
     *
     * @param string|null $v New value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
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
            $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_UUID] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('IdCompanyBusinessUnit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_company_business_unit = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('FkCompany', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_company = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('FkParentCompanyBusinessUnit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_parent_company_business_unit = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('Bic', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bic = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('DefaultBillingAddress', TableMap::TYPE_PHPNAME, $indexType)];
            $this->default_billing_address = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('ExternalUrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->external_url = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('Iban', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iban = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('Key', TableMap::TYPE_PHPNAME, $indexType)];
            $this->key = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('Phone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SpyCompanyBusinessUnitTableMap::translateFieldName('Uuid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->uuid = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 12; // 12 = SpyCompanyBusinessUnitTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\CompanyBusinessUnit\\Persistence\\SpyCompanyBusinessUnit'), 0, $e);
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
        if ($this->aParentCompanyBusinessUnit !== null && $this->fk_parent_company_business_unit !== $this->aParentCompanyBusinessUnit->getIdCompanyBusinessUnit()) {
            $this->aParentCompanyBusinessUnit = null;
        }
        if ($this->aCompanyBusinessUnitDefaultBillingAddress !== null && $this->default_billing_address !== $this->aCompanyBusinessUnitDefaultBillingAddress->getIdCompanyUnitAddress()) {
            $this->aCompanyBusinessUnitDefaultBillingAddress = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyCompanyBusinessUnitTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyCompanyBusinessUnitQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCompany = null;
            $this->aParentCompanyBusinessUnit = null;
            $this->aCompanyBusinessUnitDefaultBillingAddress = null;
            $this->collChildrenCompanyBusinessUnitss = null;

            $this->collSpyCompanyUnitAddressToCompanyBusinessUnits = null;

            $this->collCompanyUsers = null;

            $this->collSpyCompanyUserInvitations = null;

            $this->collSpyMerchantRelationships = null;

            $this->collSpyMerchantRelationshipToCompanyBusinessUnits = null;

            $this->collSpyShoppingListCompanyBusinessUnits = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyCompanyBusinessUnit::setDeleted()
     * @see SpyCompanyBusinessUnit::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyBusinessUnitTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyCompanyBusinessUnitQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyBusinessUnitTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
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
                SpyCompanyBusinessUnitTableMap::addInstanceToPool($this);
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

            if ($this->aCompany !== null) {
                if ($this->aCompany->isModified() || $this->aCompany->isNew()) {
                    $affectedRows += $this->aCompany->save($con);
                }
                $this->setCompany($this->aCompany);
            }

            if ($this->aParentCompanyBusinessUnit !== null) {
                if ($this->aParentCompanyBusinessUnit->isModified() || $this->aParentCompanyBusinessUnit->isNew()) {
                    $affectedRows += $this->aParentCompanyBusinessUnit->save($con);
                }
                $this->setParentCompanyBusinessUnit($this->aParentCompanyBusinessUnit);
            }

            if ($this->aCompanyBusinessUnitDefaultBillingAddress !== null) {
                if ($this->aCompanyBusinessUnitDefaultBillingAddress->isModified() || $this->aCompanyBusinessUnitDefaultBillingAddress->isNew()) {
                    $affectedRows += $this->aCompanyBusinessUnitDefaultBillingAddress->save($con);
                }
                $this->setCompanyBusinessUnitDefaultBillingAddress($this->aCompanyBusinessUnitDefaultBillingAddress);
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

            if ($this->childrenCompanyBusinessUnitssScheduledForDeletion !== null) {
                if (!$this->childrenCompanyBusinessUnitssScheduledForDeletion->isEmpty()) {
                    foreach ($this->childrenCompanyBusinessUnitssScheduledForDeletion as $childrenCompanyBusinessUnits) {
                        // need to save related object because we set the relation to null
                        $childrenCompanyBusinessUnits->save($con);
                    }
                    $this->childrenCompanyBusinessUnitssScheduledForDeletion = null;
                }
            }

            if ($this->collChildrenCompanyBusinessUnitss !== null) {
                foreach ($this->collChildrenCompanyBusinessUnitss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion !== null) {
                if (!$this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnitQuery::create()
                        ->filterByPrimaryKeys($this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCompanyUnitAddressToCompanyBusinessUnits !== null) {
                foreach ($this->collSpyCompanyUnitAddressToCompanyBusinessUnits as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->companyUsersScheduledForDeletion !== null) {
                if (!$this->companyUsersScheduledForDeletion->isEmpty()) {
                    foreach ($this->companyUsersScheduledForDeletion as $companyUser) {
                        // need to save related object because we set the relation to null
                        $companyUser->save($con);
                    }
                    $this->companyUsersScheduledForDeletion = null;
                }
            }

            if ($this->collCompanyUsers !== null) {
                foreach ($this->collCompanyUsers as $referrerFK) {
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

            if ($this->spyMerchantRelationshipsScheduledForDeletion !== null) {
                if (!$this->spyMerchantRelationshipsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery::create()
                        ->filterByPrimaryKeys($this->spyMerchantRelationshipsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyMerchantRelationshipsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyMerchantRelationships !== null) {
                foreach ($this->collSpyMerchantRelationships as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion !== null) {
                if (!$this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery::create()
                        ->filterByPrimaryKeys($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyShoppingListCompanyBusinessUnits !== null) {
                foreach ($this->collSpyShoppingListCompanyBusinessUnits as $referrerFK) {
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

        $this->modifiedColumns[SpyCompanyBusinessUnitTableMap::COL_ID_COMPANY_BUSINESS_UNIT] = true;
        if (null !== $this->id_company_business_unit) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyCompanyBusinessUnitTableMap::COL_ID_COMPANY_BUSINESS_UNIT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_ID_COMPANY_BUSINESS_UNIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_company_business_unit`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_FK_COMPANY)) {
            $modifiedColumns[':p' . $index++]  = '`fk_company`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_FK_PARENT_COMPANY_BUSINESS_UNIT)) {
            $modifiedColumns[':p' . $index++]  = '`fk_parent_company_business_unit`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_BIC)) {
            $modifiedColumns[':p' . $index++]  = '`bic`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_DEFAULT_BILLING_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`default_billing_address`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_EXTERNAL_URL)) {
            $modifiedColumns[':p' . $index++]  = '`external_url`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_IBAN)) {
            $modifiedColumns[':p' . $index++]  = '`iban`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`key`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_PHONE)) {
            $modifiedColumns[':p' . $index++]  = '`phone`';
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_UUID)) {
            $modifiedColumns[':p' . $index++]  = '`uuid`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_company_business_unit` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_company_business_unit`':
                        $stmt->bindValue($identifier, $this->id_company_business_unit, PDO::PARAM_INT);
                        break;
                    case '`fk_company`':
                        $stmt->bindValue($identifier, $this->fk_company, PDO::PARAM_INT);
                        break;
                    case '`fk_parent_company_business_unit`':
                        $stmt->bindValue($identifier, $this->fk_parent_company_business_unit, PDO::PARAM_INT);
                        break;
                    case '`bic`':
                        $stmt->bindValue($identifier, $this->bic, PDO::PARAM_STR);
                        break;
                    case '`default_billing_address`':
                        $stmt->bindValue($identifier, $this->default_billing_address, PDO::PARAM_INT);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`external_url`':
                        $stmt->bindValue($identifier, $this->external_url, PDO::PARAM_STR);
                        break;
                    case '`iban`':
                        $stmt->bindValue($identifier, $this->iban, PDO::PARAM_STR);
                        break;
                    case '`key`':
                        $stmt->bindValue($identifier, $this->key, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`phone`':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
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
            $pk = $con->lastInsertId('spy_company_business_unit_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdCompanyBusinessUnit($pk);

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
        $pos = SpyCompanyBusinessUnitTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdCompanyBusinessUnit();
                break;
            case 1:
                return $this->getFkCompany();
                break;
            case 2:
                return $this->getFkParentCompanyBusinessUnit();
                break;
            case 3:
                return $this->getBic();
                break;
            case 4:
                return $this->getDefaultBillingAddress();
                break;
            case 5:
                return $this->getEmail();
                break;
            case 6:
                return $this->getExternalUrl();
                break;
            case 7:
                return $this->getIban();
                break;
            case 8:
                return $this->getKey();
                break;
            case 9:
                return $this->getName();
                break;
            case 10:
                return $this->getPhone();
                break;
            case 11:
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

        if (isset($alreadyDumpedObjects['SpyCompanyBusinessUnit'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyCompanyBusinessUnit'][$this->hashCode()] = true;
        $keys = SpyCompanyBusinessUnitTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCompanyBusinessUnit(),
            $keys[1] => $this->getFkCompany(),
            $keys[2] => $this->getFkParentCompanyBusinessUnit(),
            $keys[3] => $this->getBic(),
            $keys[4] => $this->getDefaultBillingAddress(),
            $keys[5] => $this->getEmail(),
            $keys[6] => $this->getExternalUrl(),
            $keys[7] => $this->getIban(),
            $keys[8] => $this->getKey(),
            $keys[9] => $this->getName(),
            $keys[10] => $this->getPhone(),
            $keys[11] => $this->getUuid(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
            if (null !== $this->aParentCompanyBusinessUnit) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyBusinessUnit';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_business_unit';
                        break;
                    default:
                        $key = 'ParentCompanyBusinessUnit';
                }

                $result[$key] = $this->aParentCompanyBusinessUnit->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCompanyBusinessUnitDefaultBillingAddress) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyUnitAddress';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_unit_address';
                        break;
                    default:
                        $key = 'CompanyBusinessUnitDefaultBillingAddress';
                }

                $result[$key] = $this->aCompanyBusinessUnitDefaultBillingAddress->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collChildrenCompanyBusinessUnitss) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyBusinessUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_business_units';
                        break;
                    default:
                        $key = 'ChildrenCompanyBusinessUnitss';
                }

                $result[$key] = $this->collChildrenCompanyBusinessUnitss->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyCompanyUnitAddressToCompanyBusinessUnits) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyUnitAddressToCompanyBusinessUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_unit_address_to_company_business_units';
                        break;
                    default:
                        $key = 'SpyCompanyUnitAddressToCompanyBusinessUnits';
                }

                $result[$key] = $this->collSpyCompanyUnitAddressToCompanyBusinessUnits->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCompanyUsers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCompanyUsers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_company_users';
                        break;
                    default:
                        $key = 'CompanyUsers';
                }

                $result[$key] = $this->collCompanyUsers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
            if (null !== $this->collSpyMerchantRelationships) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyMerchantRelationships';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_merchant_relationships';
                        break;
                    default:
                        $key = 'SpyMerchantRelationships';
                }

                $result[$key] = $this->collSpyMerchantRelationships->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
            if (null !== $this->collSpyShoppingListCompanyBusinessUnits) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyShoppingListCompanyBusinessUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_shopping_list_company_business_units';
                        break;
                    default:
                        $key = 'SpyShoppingListCompanyBusinessUnits';
                }

                $result[$key] = $this->collSpyShoppingListCompanyBusinessUnits->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCompanyBusinessUnitTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdCompanyBusinessUnit($value);
                break;
            case 1:
                $this->setFkCompany($value);
                break;
            case 2:
                $this->setFkParentCompanyBusinessUnit($value);
                break;
            case 3:
                $this->setBic($value);
                break;
            case 4:
                $this->setDefaultBillingAddress($value);
                break;
            case 5:
                $this->setEmail($value);
                break;
            case 6:
                $this->setExternalUrl($value);
                break;
            case 7:
                $this->setIban($value);
                break;
            case 8:
                $this->setKey($value);
                break;
            case 9:
                $this->setName($value);
                break;
            case 10:
                $this->setPhone($value);
                break;
            case 11:
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
     * @return     $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyCompanyBusinessUnitTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCompanyBusinessUnit($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkCompany($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkParentCompanyBusinessUnit($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBic($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDefaultBillingAddress($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setEmail($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setExternalUrl($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIban($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setKey($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setName($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPhone($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setUuid($arr[$keys[11]]);
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
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object, for fluid interface
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
        $criteria = new Criteria(SpyCompanyBusinessUnitTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_ID_COMPANY_BUSINESS_UNIT)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_ID_COMPANY_BUSINESS_UNIT, $this->id_company_business_unit);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_FK_COMPANY)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_FK_COMPANY, $this->fk_company);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_FK_PARENT_COMPANY_BUSINESS_UNIT)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_FK_PARENT_COMPANY_BUSINESS_UNIT, $this->fk_parent_company_business_unit);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_BIC)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_BIC, $this->bic);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_DEFAULT_BILLING_ADDRESS)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_DEFAULT_BILLING_ADDRESS, $this->default_billing_address);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_EMAIL)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_EXTERNAL_URL)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_EXTERNAL_URL, $this->external_url);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_IBAN)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_IBAN, $this->iban);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_KEY)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_KEY, $this->key);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_NAME)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_PHONE)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_PHONE, $this->phone);
        }
        if ($this->isColumnModified(SpyCompanyBusinessUnitTableMap::COL_UUID)) {
            $criteria->add(SpyCompanyBusinessUnitTableMap::COL_UUID, $this->uuid);
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
        $criteria = ChildSpyCompanyBusinessUnitQuery::create();
        $criteria->add(SpyCompanyBusinessUnitTableMap::COL_ID_COMPANY_BUSINESS_UNIT, $this->id_company_business_unit);

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
        $validPk = null !== $this->getIdCompanyBusinessUnit();

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
        return $this->getIdCompanyBusinessUnit();
    }

    /**
     * Generic method to set the primary key (id_company_business_unit column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCompanyBusinessUnit($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdCompanyBusinessUnit();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkCompany($this->getFkCompany());
        $copyObj->setFkParentCompanyBusinessUnit($this->getFkParentCompanyBusinessUnit());
        $copyObj->setBic($this->getBic());
        $copyObj->setDefaultBillingAddress($this->getDefaultBillingAddress());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setExternalUrl($this->getExternalUrl());
        $copyObj->setIban($this->getIban());
        $copyObj->setKey($this->getKey());
        $copyObj->setName($this->getName());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setUuid($this->getUuid());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getChildrenCompanyBusinessUnitss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addChildrenCompanyBusinessUnits($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyCompanyUnitAddressToCompanyBusinessUnits() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCompanyUnitAddressToCompanyBusinessUnit($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCompanyUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompanyUser($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyCompanyUserInvitations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCompanyUserInvitation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyMerchantRelationships() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyMerchantRelationship($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyMerchantRelationshipToCompanyBusinessUnits() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyMerchantRelationshipToCompanyBusinessUnit($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyShoppingListCompanyBusinessUnits() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyShoppingListCompanyBusinessUnit($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCompanyBusinessUnit(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit Clone of current object.
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
     * Declares an association between this object and a SpyCompany object.
     *
     * @param  SpyCompany $v
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
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
            $v->addCompanyBusinessUnit($this);
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
                $this->aCompany->addCompanyBusinessUnits($this);
             */
        }

        return $this->aCompany;
    }

    /**
     * Declares an association between this object and a ChildSpyCompanyBusinessUnit object.
     *
     * @param  ChildSpyCompanyBusinessUnit|null $v
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     * @throws PropelException
     */
    public function setParentCompanyBusinessUnit(ChildSpyCompanyBusinessUnit $v = null)
    {
        if ($v === null) {
            $this->setFkParentCompanyBusinessUnit(NULL);
        } else {
            $this->setFkParentCompanyBusinessUnit($v->getIdCompanyBusinessUnit());
        }

        $this->aParentCompanyBusinessUnit = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyCompanyBusinessUnit object, it will not be re-added.
        if ($v !== null) {
            $v->addChildrenCompanyBusinessUnits($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyCompanyBusinessUnit object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyCompanyBusinessUnit|null The associated ChildSpyCompanyBusinessUnit object.
     * @throws PropelException
     */
    public function getParentCompanyBusinessUnit(ConnectionInterface $con = null)
    {
        if ($this->aParentCompanyBusinessUnit === null && ($this->fk_parent_company_business_unit != 0)) {
            $this->aParentCompanyBusinessUnit = ChildSpyCompanyBusinessUnitQuery::create()->findPk($this->fk_parent_company_business_unit, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aParentCompanyBusinessUnit->addChildrenCompanyBusinessUnitss($this);
             */
        }

        return $this->aParentCompanyBusinessUnit;
    }

    /**
     * Declares an association between this object and a SpyCompanyUnitAddress object.
     *
     * @param  SpyCompanyUnitAddress|null $v
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCompanyBusinessUnitDefaultBillingAddress(SpyCompanyUnitAddress $v = null)
    {
        if ($v === null) {
            $this->setDefaultBillingAddress(NULL);
        } else {
            $this->setDefaultBillingAddress($v->getIdCompanyUnitAddress());
        }

        $this->aCompanyBusinessUnitDefaultBillingAddress = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyCompanyUnitAddress object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyCompanyBusinessUnit($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyCompanyUnitAddress object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return SpyCompanyUnitAddress|null The associated SpyCompanyUnitAddress object.
     * @throws PropelException
     */
    public function getCompanyBusinessUnitDefaultBillingAddress(ConnectionInterface $con = null)
    {
        if ($this->aCompanyBusinessUnitDefaultBillingAddress === null && ($this->default_billing_address != 0)) {
            $this->aCompanyBusinessUnitDefaultBillingAddress = SpyCompanyUnitAddressQuery::create()->findPk($this->default_billing_address, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCompanyBusinessUnitDefaultBillingAddress->addSpyCompanyBusinessUnits($this);
             */
        }

        return $this->aCompanyBusinessUnitDefaultBillingAddress;
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
        if ('ChildrenCompanyBusinessUnits' === $relationName) {
            $this->initChildrenCompanyBusinessUnitss();
            return;
        }
        if ('SpyCompanyUnitAddressToCompanyBusinessUnit' === $relationName) {
            $this->initSpyCompanyUnitAddressToCompanyBusinessUnits();
            return;
        }
        if ('CompanyUser' === $relationName) {
            $this->initCompanyUsers();
            return;
        }
        if ('SpyCompanyUserInvitation' === $relationName) {
            $this->initSpyCompanyUserInvitations();
            return;
        }
        if ('SpyMerchantRelationship' === $relationName) {
            $this->initSpyMerchantRelationships();
            return;
        }
        if ('SpyMerchantRelationshipToCompanyBusinessUnit' === $relationName) {
            $this->initSpyMerchantRelationshipToCompanyBusinessUnits();
            return;
        }
        if ('SpyShoppingListCompanyBusinessUnit' === $relationName) {
            $this->initSpyShoppingListCompanyBusinessUnits();
            return;
        }
    }

    /**
     * Clears out the collChildrenCompanyBusinessUnitss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addChildrenCompanyBusinessUnitss()
     */
    public function clearChildrenCompanyBusinessUnitss()
    {
        $this->collChildrenCompanyBusinessUnitss = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collChildrenCompanyBusinessUnitss collection loaded partially.
     */
    public function resetPartialChildrenCompanyBusinessUnitss($v = true)
    {
        $this->collChildrenCompanyBusinessUnitssPartial = $v;
    }

    /**
     * Initializes the collChildrenCompanyBusinessUnitss collection.
     *
     * By default this just sets the collChildrenCompanyBusinessUnitss collection to an empty array (like clearcollChildrenCompanyBusinessUnitss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initChildrenCompanyBusinessUnitss($overrideExisting = true)
    {
        if (null !== $this->collChildrenCompanyBusinessUnitss && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collChildrenCompanyBusinessUnitss = new $collectionClassName;
        $this->collChildrenCompanyBusinessUnitss->setModel('\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit');
    }

    /**
     * Gets an array of ChildSpyCompanyBusinessUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyBusinessUnit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyCompanyBusinessUnit[] List of ChildSpyCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCompanyBusinessUnit> List of ChildSpyCompanyBusinessUnit objects
     * @throws PropelException
     */
    public function getChildrenCompanyBusinessUnitss(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collChildrenCompanyBusinessUnitssPartial && !$this->isNew();
        if (null === $this->collChildrenCompanyBusinessUnitss || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collChildrenCompanyBusinessUnitss) {
                    $this->initChildrenCompanyBusinessUnitss();
                } else {
                    $collectionClassName = SpyCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

                    $collChildrenCompanyBusinessUnitss = new $collectionClassName;
                    $collChildrenCompanyBusinessUnitss->setModel('\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit');

                    return $collChildrenCompanyBusinessUnitss;
                }
            } else {
                $collChildrenCompanyBusinessUnitss = ChildSpyCompanyBusinessUnitQuery::create(null, $criteria)
                    ->filterByParentCompanyBusinessUnit($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collChildrenCompanyBusinessUnitssPartial && count($collChildrenCompanyBusinessUnitss)) {
                        $this->initChildrenCompanyBusinessUnitss(false);

                        foreach ($collChildrenCompanyBusinessUnitss as $obj) {
                            if (false == $this->collChildrenCompanyBusinessUnitss->contains($obj)) {
                                $this->collChildrenCompanyBusinessUnitss->append($obj);
                            }
                        }

                        $this->collChildrenCompanyBusinessUnitssPartial = true;
                    }

                    return $collChildrenCompanyBusinessUnitss;
                }

                if ($partial && $this->collChildrenCompanyBusinessUnitss) {
                    foreach ($this->collChildrenCompanyBusinessUnitss as $obj) {
                        if ($obj->isNew()) {
                            $collChildrenCompanyBusinessUnitss[] = $obj;
                        }
                    }
                }

                $this->collChildrenCompanyBusinessUnitss = $collChildrenCompanyBusinessUnitss;
                $this->collChildrenCompanyBusinessUnitssPartial = false;
            }
        }

        return $this->collChildrenCompanyBusinessUnitss;
    }

    /**
     * Sets a collection of ChildSpyCompanyBusinessUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $childrenCompanyBusinessUnitss A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setChildrenCompanyBusinessUnitss(Collection $childrenCompanyBusinessUnitss, ConnectionInterface $con = null)
    {
        /** @var ChildSpyCompanyBusinessUnit[] $childrenCompanyBusinessUnitssToDelete */
        $childrenCompanyBusinessUnitssToDelete = $this->getChildrenCompanyBusinessUnitss(new Criteria(), $con)->diff($childrenCompanyBusinessUnitss);


        $this->childrenCompanyBusinessUnitssScheduledForDeletion = $childrenCompanyBusinessUnitssToDelete;

        foreach ($childrenCompanyBusinessUnitssToDelete as $childrenCompanyBusinessUnitsRemoved) {
            $childrenCompanyBusinessUnitsRemoved->setParentCompanyBusinessUnit(null);
        }

        $this->collChildrenCompanyBusinessUnitss = null;
        foreach ($childrenCompanyBusinessUnitss as $childrenCompanyBusinessUnits) {
            $this->addChildrenCompanyBusinessUnits($childrenCompanyBusinessUnits);
        }

        $this->collChildrenCompanyBusinessUnitss = $childrenCompanyBusinessUnitss;
        $this->collChildrenCompanyBusinessUnitssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyCompanyBusinessUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyCompanyBusinessUnit objects.
     * @throws PropelException
     */
    public function countChildrenCompanyBusinessUnitss(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collChildrenCompanyBusinessUnitssPartial && !$this->isNew();
        if (null === $this->collChildrenCompanyBusinessUnitss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collChildrenCompanyBusinessUnitss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getChildrenCompanyBusinessUnitss());
            }

            $query = ChildSpyCompanyBusinessUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByParentCompanyBusinessUnit($this)
                ->count($con);
        }

        return count($this->collChildrenCompanyBusinessUnitss);
    }

    /**
     * Method called to associate a ChildSpyCompanyBusinessUnit object to this object
     * through the ChildSpyCompanyBusinessUnit foreign key attribute.
     *
     * @param  ChildSpyCompanyBusinessUnit $l ChildSpyCompanyBusinessUnit
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function addChildrenCompanyBusinessUnits(ChildSpyCompanyBusinessUnit $l)
    {
        if ($this->collChildrenCompanyBusinessUnitss === null) {
            $this->initChildrenCompanyBusinessUnitss();
            $this->collChildrenCompanyBusinessUnitssPartial = true;
        }

        if (!$this->collChildrenCompanyBusinessUnitss->contains($l)) {
            $this->doAddChildrenCompanyBusinessUnits($l);

            if ($this->childrenCompanyBusinessUnitssScheduledForDeletion and $this->childrenCompanyBusinessUnitssScheduledForDeletion->contains($l)) {
                $this->childrenCompanyBusinessUnitssScheduledForDeletion->remove($this->childrenCompanyBusinessUnitssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyCompanyBusinessUnit $childrenCompanyBusinessUnits The ChildSpyCompanyBusinessUnit object to add.
     */
    protected function doAddChildrenCompanyBusinessUnits(ChildSpyCompanyBusinessUnit $childrenCompanyBusinessUnits)
    {
        $this->collChildrenCompanyBusinessUnitss[]= $childrenCompanyBusinessUnits;
        $childrenCompanyBusinessUnits->setParentCompanyBusinessUnit($this);
    }

    /**
     * @param  ChildSpyCompanyBusinessUnit $childrenCompanyBusinessUnits The ChildSpyCompanyBusinessUnit object to remove.
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function removeChildrenCompanyBusinessUnits(ChildSpyCompanyBusinessUnit $childrenCompanyBusinessUnits)
    {
        if ($this->getChildrenCompanyBusinessUnitss()->contains($childrenCompanyBusinessUnits)) {
            $pos = $this->collChildrenCompanyBusinessUnitss->search($childrenCompanyBusinessUnits);
            $this->collChildrenCompanyBusinessUnitss->remove($pos);
            if (null === $this->childrenCompanyBusinessUnitssScheduledForDeletion) {
                $this->childrenCompanyBusinessUnitssScheduledForDeletion = clone $this->collChildrenCompanyBusinessUnitss;
                $this->childrenCompanyBusinessUnitssScheduledForDeletion->clear();
            }
            $this->childrenCompanyBusinessUnitssScheduledForDeletion[]= $childrenCompanyBusinessUnits;
            $childrenCompanyBusinessUnits->setParentCompanyBusinessUnit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related ChildrenCompanyBusinessUnitss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyCompanyBusinessUnit[] List of ChildSpyCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCompanyBusinessUnit}> List of ChildSpyCompanyBusinessUnit objects
     */
    public function getChildrenCompanyBusinessUnitssJoinCompany(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('Company', $joinBehavior);

        return $this->getChildrenCompanyBusinessUnitss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related ChildrenCompanyBusinessUnitss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyCompanyBusinessUnit[] List of ChildSpyCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCompanyBusinessUnit}> List of ChildSpyCompanyBusinessUnit objects
     */
    public function getChildrenCompanyBusinessUnitssJoinCompanyBusinessUnitDefaultBillingAddress(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('CompanyBusinessUnitDefaultBillingAddress', $joinBehavior);

        return $this->getChildrenCompanyBusinessUnitss($query, $con);
    }

    /**
     * Clears out the collSpyCompanyUnitAddressToCompanyBusinessUnits collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyCompanyUnitAddressToCompanyBusinessUnits()
     */
    public function clearSpyCompanyUnitAddressToCompanyBusinessUnits()
    {
        $this->collSpyCompanyUnitAddressToCompanyBusinessUnits = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyCompanyUnitAddressToCompanyBusinessUnits collection loaded partially.
     */
    public function resetPartialSpyCompanyUnitAddressToCompanyBusinessUnits($v = true)
    {
        $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial = $v;
    }

    /**
     * Initializes the collSpyCompanyUnitAddressToCompanyBusinessUnits collection.
     *
     * By default this just sets the collSpyCompanyUnitAddressToCompanyBusinessUnits collection to an empty array (like clearcollSpyCompanyUnitAddressToCompanyBusinessUnits());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCompanyUnitAddressToCompanyBusinessUnits($overrideExisting = true)
    {
        if (null !== $this->collSpyCompanyUnitAddressToCompanyBusinessUnits && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCompanyUnitAddressToCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCompanyUnitAddressToCompanyBusinessUnits = new $collectionClassName;
        $this->collSpyCompanyUnitAddressToCompanyBusinessUnits->setModel('\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnit');
    }

    /**
     * Gets an array of SpyCompanyUnitAddressToCompanyBusinessUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyBusinessUnit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCompanyUnitAddressToCompanyBusinessUnit[] List of SpyCompanyUnitAddressToCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUnitAddressToCompanyBusinessUnit> List of SpyCompanyUnitAddressToCompanyBusinessUnit objects
     * @throws PropelException
     */
    public function getSpyCompanyUnitAddressToCompanyBusinessUnits(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyCompanyUnitAddressToCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCompanyUnitAddressToCompanyBusinessUnits) {
                    $this->initSpyCompanyUnitAddressToCompanyBusinessUnits();
                } else {
                    $collectionClassName = SpyCompanyUnitAddressToCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCompanyUnitAddressToCompanyBusinessUnits = new $collectionClassName;
                    $collSpyCompanyUnitAddressToCompanyBusinessUnits->setModel('\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnit');

                    return $collSpyCompanyUnitAddressToCompanyBusinessUnits;
                }
            } else {
                $collSpyCompanyUnitAddressToCompanyBusinessUnits = SpyCompanyUnitAddressToCompanyBusinessUnitQuery::create(null, $criteria)
                    ->filterByCompanyBusinessUnit($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial && count($collSpyCompanyUnitAddressToCompanyBusinessUnits)) {
                        $this->initSpyCompanyUnitAddressToCompanyBusinessUnits(false);

                        foreach ($collSpyCompanyUnitAddressToCompanyBusinessUnits as $obj) {
                            if (false == $this->collSpyCompanyUnitAddressToCompanyBusinessUnits->contains($obj)) {
                                $this->collSpyCompanyUnitAddressToCompanyBusinessUnits->append($obj);
                            }
                        }

                        $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial = true;
                    }

                    return $collSpyCompanyUnitAddressToCompanyBusinessUnits;
                }

                if ($partial && $this->collSpyCompanyUnitAddressToCompanyBusinessUnits) {
                    foreach ($this->collSpyCompanyUnitAddressToCompanyBusinessUnits as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCompanyUnitAddressToCompanyBusinessUnits[] = $obj;
                        }
                    }
                }

                $this->collSpyCompanyUnitAddressToCompanyBusinessUnits = $collSpyCompanyUnitAddressToCompanyBusinessUnits;
                $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial = false;
            }
        }

        return $this->collSpyCompanyUnitAddressToCompanyBusinessUnits;
    }

    /**
     * Sets a collection of SpyCompanyUnitAddressToCompanyBusinessUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyCompanyUnitAddressToCompanyBusinessUnits A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setSpyCompanyUnitAddressToCompanyBusinessUnits(Collection $spyCompanyUnitAddressToCompanyBusinessUnits, ConnectionInterface $con = null)
    {
        /** @var SpyCompanyUnitAddressToCompanyBusinessUnit[] $spyCompanyUnitAddressToCompanyBusinessUnitsToDelete */
        $spyCompanyUnitAddressToCompanyBusinessUnitsToDelete = $this->getSpyCompanyUnitAddressToCompanyBusinessUnits(new Criteria(), $con)->diff($spyCompanyUnitAddressToCompanyBusinessUnits);


        $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion = $spyCompanyUnitAddressToCompanyBusinessUnitsToDelete;

        foreach ($spyCompanyUnitAddressToCompanyBusinessUnitsToDelete as $spyCompanyUnitAddressToCompanyBusinessUnitRemoved) {
            $spyCompanyUnitAddressToCompanyBusinessUnitRemoved->setCompanyBusinessUnit(null);
        }

        $this->collSpyCompanyUnitAddressToCompanyBusinessUnits = null;
        foreach ($spyCompanyUnitAddressToCompanyBusinessUnits as $spyCompanyUnitAddressToCompanyBusinessUnit) {
            $this->addSpyCompanyUnitAddressToCompanyBusinessUnit($spyCompanyUnitAddressToCompanyBusinessUnit);
        }

        $this->collSpyCompanyUnitAddressToCompanyBusinessUnits = $spyCompanyUnitAddressToCompanyBusinessUnits;
        $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCompanyUnitAddressToCompanyBusinessUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCompanyUnitAddressToCompanyBusinessUnit objects.
     * @throws PropelException
     */
    public function countSpyCompanyUnitAddressToCompanyBusinessUnits(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyCompanyUnitAddressToCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCompanyUnitAddressToCompanyBusinessUnits) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCompanyUnitAddressToCompanyBusinessUnits());
            }

            $query = SpyCompanyUnitAddressToCompanyBusinessUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCompanyBusinessUnit($this)
                ->count($con);
        }

        return count($this->collSpyCompanyUnitAddressToCompanyBusinessUnits);
    }

    /**
     * Method called to associate a SpyCompanyUnitAddressToCompanyBusinessUnit object to this object
     * through the SpyCompanyUnitAddressToCompanyBusinessUnit foreign key attribute.
     *
     * @param  SpyCompanyUnitAddressToCompanyBusinessUnit $l SpyCompanyUnitAddressToCompanyBusinessUnit
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function addSpyCompanyUnitAddressToCompanyBusinessUnit(SpyCompanyUnitAddressToCompanyBusinessUnit $l)
    {
        if ($this->collSpyCompanyUnitAddressToCompanyBusinessUnits === null) {
            $this->initSpyCompanyUnitAddressToCompanyBusinessUnits();
            $this->collSpyCompanyUnitAddressToCompanyBusinessUnitsPartial = true;
        }

        if (!$this->collSpyCompanyUnitAddressToCompanyBusinessUnits->contains($l)) {
            $this->doAddSpyCompanyUnitAddressToCompanyBusinessUnit($l);

            if ($this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion and $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion->contains($l)) {
                $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion->remove($this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCompanyUnitAddressToCompanyBusinessUnit $spyCompanyUnitAddressToCompanyBusinessUnit The SpyCompanyUnitAddressToCompanyBusinessUnit object to add.
     */
    protected function doAddSpyCompanyUnitAddressToCompanyBusinessUnit(SpyCompanyUnitAddressToCompanyBusinessUnit $spyCompanyUnitAddressToCompanyBusinessUnit)
    {
        $this->collSpyCompanyUnitAddressToCompanyBusinessUnits[]= $spyCompanyUnitAddressToCompanyBusinessUnit;
        $spyCompanyUnitAddressToCompanyBusinessUnit->setCompanyBusinessUnit($this);
    }

    /**
     * @param  SpyCompanyUnitAddressToCompanyBusinessUnit $spyCompanyUnitAddressToCompanyBusinessUnit The SpyCompanyUnitAddressToCompanyBusinessUnit object to remove.
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function removeSpyCompanyUnitAddressToCompanyBusinessUnit(SpyCompanyUnitAddressToCompanyBusinessUnit $spyCompanyUnitAddressToCompanyBusinessUnit)
    {
        if ($this->getSpyCompanyUnitAddressToCompanyBusinessUnits()->contains($spyCompanyUnitAddressToCompanyBusinessUnit)) {
            $pos = $this->collSpyCompanyUnitAddressToCompanyBusinessUnits->search($spyCompanyUnitAddressToCompanyBusinessUnit);
            $this->collSpyCompanyUnitAddressToCompanyBusinessUnits->remove($pos);
            if (null === $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion) {
                $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion = clone $this->collSpyCompanyUnitAddressToCompanyBusinessUnits;
                $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion->clear();
            }
            $this->spyCompanyUnitAddressToCompanyBusinessUnitsScheduledForDeletion[]= clone $spyCompanyUnitAddressToCompanyBusinessUnit;
            $spyCompanyUnitAddressToCompanyBusinessUnit->setCompanyBusinessUnit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related SpyCompanyUnitAddressToCompanyBusinessUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUnitAddressToCompanyBusinessUnit[] List of SpyCompanyUnitAddressToCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUnitAddressToCompanyBusinessUnit}> List of SpyCompanyUnitAddressToCompanyBusinessUnit objects
     */
    public function getSpyCompanyUnitAddressToCompanyBusinessUnitsJoinCompanyUnitAddress(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUnitAddressToCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('CompanyUnitAddress', $joinBehavior);

        return $this->getSpyCompanyUnitAddressToCompanyBusinessUnits($query, $con);
    }

    /**
     * Clears out the collCompanyUsers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCompanyUsers()
     */
    public function clearCompanyUsers()
    {
        $this->collCompanyUsers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCompanyUsers collection loaded partially.
     */
    public function resetPartialCompanyUsers($v = true)
    {
        $this->collCompanyUsersPartial = $v;
    }

    /**
     * Initializes the collCompanyUsers collection.
     *
     * By default this just sets the collCompanyUsers collection to an empty array (like clearcollCompanyUsers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompanyUsers($overrideExisting = true)
    {
        if (null !== $this->collCompanyUsers && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCompanyUserTableMap::getTableMap()->getCollectionClassName();

        $this->collCompanyUsers = new $collectionClassName;
        $this->collCompanyUsers->setModel('\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser');
    }

    /**
     * Gets an array of SpyCompanyUser objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyBusinessUnit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyCompanyUser[] List of SpyCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUser> List of SpyCompanyUser objects
     * @throws PropelException
     */
    public function getCompanyUsers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCompanyUsersPartial && !$this->isNew();
        if (null === $this->collCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collCompanyUsers) {
                    $this->initCompanyUsers();
                } else {
                    $collectionClassName = SpyCompanyUserTableMap::getTableMap()->getCollectionClassName();

                    $collCompanyUsers = new $collectionClassName;
                    $collCompanyUsers->setModel('\Orm\Zed\CompanyUser\Persistence\SpyCompanyUser');

                    return $collCompanyUsers;
                }
            } else {
                $collCompanyUsers = SpyCompanyUserQuery::create(null, $criteria)
                    ->filterByCompanyBusinessUnit($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCompanyUsersPartial && count($collCompanyUsers)) {
                        $this->initCompanyUsers(false);

                        foreach ($collCompanyUsers as $obj) {
                            if (false == $this->collCompanyUsers->contains($obj)) {
                                $this->collCompanyUsers->append($obj);
                            }
                        }

                        $this->collCompanyUsersPartial = true;
                    }

                    return $collCompanyUsers;
                }

                if ($partial && $this->collCompanyUsers) {
                    foreach ($this->collCompanyUsers as $obj) {
                        if ($obj->isNew()) {
                            $collCompanyUsers[] = $obj;
                        }
                    }
                }

                $this->collCompanyUsers = $collCompanyUsers;
                $this->collCompanyUsersPartial = false;
            }
        }

        return $this->collCompanyUsers;
    }

    /**
     * Sets a collection of SpyCompanyUser objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $companyUsers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setCompanyUsers(Collection $companyUsers, ConnectionInterface $con = null)
    {
        /** @var SpyCompanyUser[] $companyUsersToDelete */
        $companyUsersToDelete = $this->getCompanyUsers(new Criteria(), $con)->diff($companyUsers);


        $this->companyUsersScheduledForDeletion = $companyUsersToDelete;

        foreach ($companyUsersToDelete as $companyUserRemoved) {
            $companyUserRemoved->setCompanyBusinessUnit(null);
        }

        $this->collCompanyUsers = null;
        foreach ($companyUsers as $companyUser) {
            $this->addCompanyUser($companyUser);
        }

        $this->collCompanyUsers = $companyUsers;
        $this->collCompanyUsersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyCompanyUser objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyCompanyUser objects.
     * @throws PropelException
     */
    public function countCompanyUsers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCompanyUsersPartial && !$this->isNew();
        if (null === $this->collCompanyUsers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompanyUsers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompanyUsers());
            }

            $query = SpyCompanyUserQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCompanyBusinessUnit($this)
                ->count($con);
        }

        return count($this->collCompanyUsers);
    }

    /**
     * Method called to associate a SpyCompanyUser object to this object
     * through the SpyCompanyUser foreign key attribute.
     *
     * @param  SpyCompanyUser $l SpyCompanyUser
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function addCompanyUser(SpyCompanyUser $l)
    {
        if ($this->collCompanyUsers === null) {
            $this->initCompanyUsers();
            $this->collCompanyUsersPartial = true;
        }

        if (!$this->collCompanyUsers->contains($l)) {
            $this->doAddCompanyUser($l);

            if ($this->companyUsersScheduledForDeletion and $this->companyUsersScheduledForDeletion->contains($l)) {
                $this->companyUsersScheduledForDeletion->remove($this->companyUsersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyCompanyUser $companyUser The SpyCompanyUser object to add.
     */
    protected function doAddCompanyUser(SpyCompanyUser $companyUser)
    {
        $this->collCompanyUsers[]= $companyUser;
        $companyUser->setCompanyBusinessUnit($this);
    }

    /**
     * @param  SpyCompanyUser $companyUser The SpyCompanyUser object to remove.
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function removeCompanyUser(SpyCompanyUser $companyUser)
    {
        if ($this->getCompanyUsers()->contains($companyUser)) {
            $pos = $this->collCompanyUsers->search($companyUser);
            $this->collCompanyUsers->remove($pos);
            if (null === $this->companyUsersScheduledForDeletion) {
                $this->companyUsersScheduledForDeletion = clone $this->collCompanyUsers;
                $this->companyUsersScheduledForDeletion->clear();
            }
            $this->companyUsersScheduledForDeletion[]= $companyUser;
            $companyUser->setCompanyBusinessUnit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related CompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUser[] List of SpyCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUser}> List of SpyCompanyUser objects
     */
    public function getCompanyUsersJoinCompany(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUserQuery::create(null, $criteria);
        $query->joinWith('Company', $joinBehavior);

        return $this->getCompanyUsers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related CompanyUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUser[] List of SpyCompanyUser objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUser}> List of SpyCompanyUser objects
     */
    public function getCompanyUsersJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUserQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getCompanyUsers($query, $con);
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
     * If this ChildSpyCompanyBusinessUnit is new, it will return
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
                    ->filterBySpyCompanyBusinessUnit($this)
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
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setSpyCompanyUserInvitations(Collection $spyCompanyUserInvitations, ConnectionInterface $con = null)
    {
        /** @var SpyCompanyUserInvitation[] $spyCompanyUserInvitationsToDelete */
        $spyCompanyUserInvitationsToDelete = $this->getSpyCompanyUserInvitations(new Criteria(), $con)->diff($spyCompanyUserInvitations);


        $this->spyCompanyUserInvitationsScheduledForDeletion = $spyCompanyUserInvitationsToDelete;

        foreach ($spyCompanyUserInvitationsToDelete as $spyCompanyUserInvitationRemoved) {
            $spyCompanyUserInvitationRemoved->setSpyCompanyBusinessUnit(null);
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
                ->filterBySpyCompanyBusinessUnit($this)
                ->count($con);
        }

        return count($this->collSpyCompanyUserInvitations);
    }

    /**
     * Method called to associate a SpyCompanyUserInvitation object to this object
     * through the SpyCompanyUserInvitation foreign key attribute.
     *
     * @param  SpyCompanyUserInvitation $l SpyCompanyUserInvitation
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
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
        $spyCompanyUserInvitation->setSpyCompanyBusinessUnit($this);
    }

    /**
     * @param  SpyCompanyUserInvitation $spyCompanyUserInvitation The SpyCompanyUserInvitation object to remove.
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
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
            $spyCompanyUserInvitation->setSpyCompanyBusinessUnit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related SpyCompanyUserInvitations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related SpyCompanyUserInvitations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyCompanyUserInvitation[] List of SpyCompanyUserInvitation objects
     * @phpstan-return ObjectCollection&\Traversable<SpyCompanyUserInvitation}> List of SpyCompanyUserInvitation objects
     */
    public function getSpyCompanyUserInvitationsJoinSpyCompanyUser(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyCompanyUserInvitationQuery::create(null, $criteria);
        $query->joinWith('SpyCompanyUser', $joinBehavior);

        return $this->getSpyCompanyUserInvitations($query, $con);
    }

    /**
     * Clears out the collSpyMerchantRelationships collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyMerchantRelationships()
     */
    public function clearSpyMerchantRelationships()
    {
        $this->collSpyMerchantRelationships = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyMerchantRelationships collection loaded partially.
     */
    public function resetPartialSpyMerchantRelationships($v = true)
    {
        $this->collSpyMerchantRelationshipsPartial = $v;
    }

    /**
     * Initializes the collSpyMerchantRelationships collection.
     *
     * By default this just sets the collSpyMerchantRelationships collection to an empty array (like clearcollSpyMerchantRelationships());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyMerchantRelationships($overrideExisting = true)
    {
        if (null !== $this->collSpyMerchantRelationships && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyMerchantRelationships = new $collectionClassName;
        $this->collSpyMerchantRelationships->setModel('\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship');
    }

    /**
     * Gets an array of SpyMerchantRelationship objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyBusinessUnit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyMerchantRelationship[] List of SpyMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationship> List of SpyMerchantRelationship objects
     * @throws PropelException
     */
    public function getSpyMerchantRelationships(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyMerchantRelationships) {
                    $this->initSpyMerchantRelationships();
                } else {
                    $collectionClassName = SpyMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

                    $collSpyMerchantRelationships = new $collectionClassName;
                    $collSpyMerchantRelationships->setModel('\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship');

                    return $collSpyMerchantRelationships;
                }
            } else {
                $collSpyMerchantRelationships = SpyMerchantRelationshipQuery::create(null, $criteria)
                    ->filterByCompanyBusinessUnit($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyMerchantRelationshipsPartial && count($collSpyMerchantRelationships)) {
                        $this->initSpyMerchantRelationships(false);

                        foreach ($collSpyMerchantRelationships as $obj) {
                            if (false == $this->collSpyMerchantRelationships->contains($obj)) {
                                $this->collSpyMerchantRelationships->append($obj);
                            }
                        }

                        $this->collSpyMerchantRelationshipsPartial = true;
                    }

                    return $collSpyMerchantRelationships;
                }

                if ($partial && $this->collSpyMerchantRelationships) {
                    foreach ($this->collSpyMerchantRelationships as $obj) {
                        if ($obj->isNew()) {
                            $collSpyMerchantRelationships[] = $obj;
                        }
                    }
                }

                $this->collSpyMerchantRelationships = $collSpyMerchantRelationships;
                $this->collSpyMerchantRelationshipsPartial = false;
            }
        }

        return $this->collSpyMerchantRelationships;
    }

    /**
     * Sets a collection of SpyMerchantRelationship objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyMerchantRelationships A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setSpyMerchantRelationships(Collection $spyMerchantRelationships, ConnectionInterface $con = null)
    {
        /** @var SpyMerchantRelationship[] $spyMerchantRelationshipsToDelete */
        $spyMerchantRelationshipsToDelete = $this->getSpyMerchantRelationships(new Criteria(), $con)->diff($spyMerchantRelationships);


        $this->spyMerchantRelationshipsScheduledForDeletion = $spyMerchantRelationshipsToDelete;

        foreach ($spyMerchantRelationshipsToDelete as $spyMerchantRelationshipRemoved) {
            $spyMerchantRelationshipRemoved->setCompanyBusinessUnit(null);
        }

        $this->collSpyMerchantRelationships = null;
        foreach ($spyMerchantRelationships as $spyMerchantRelationship) {
            $this->addSpyMerchantRelationship($spyMerchantRelationship);
        }

        $this->collSpyMerchantRelationships = $spyMerchantRelationships;
        $this->collSpyMerchantRelationshipsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyMerchantRelationship objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyMerchantRelationship objects.
     * @throws PropelException
     */
    public function countSpyMerchantRelationships(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collSpyMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyMerchantRelationships) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyMerchantRelationships());
            }

            $query = SpyMerchantRelationshipQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCompanyBusinessUnit($this)
                ->count($con);
        }

        return count($this->collSpyMerchantRelationships);
    }

    /**
     * Method called to associate a SpyMerchantRelationship object to this object
     * through the SpyMerchantRelationship foreign key attribute.
     *
     * @param  SpyMerchantRelationship $l SpyMerchantRelationship
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function addSpyMerchantRelationship(SpyMerchantRelationship $l)
    {
        if ($this->collSpyMerchantRelationships === null) {
            $this->initSpyMerchantRelationships();
            $this->collSpyMerchantRelationshipsPartial = true;
        }

        if (!$this->collSpyMerchantRelationships->contains($l)) {
            $this->doAddSpyMerchantRelationship($l);

            if ($this->spyMerchantRelationshipsScheduledForDeletion and $this->spyMerchantRelationshipsScheduledForDeletion->contains($l)) {
                $this->spyMerchantRelationshipsScheduledForDeletion->remove($this->spyMerchantRelationshipsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyMerchantRelationship $spyMerchantRelationship The SpyMerchantRelationship object to add.
     */
    protected function doAddSpyMerchantRelationship(SpyMerchantRelationship $spyMerchantRelationship)
    {
        $this->collSpyMerchantRelationships[]= $spyMerchantRelationship;
        $spyMerchantRelationship->setCompanyBusinessUnit($this);
    }

    /**
     * @param  SpyMerchantRelationship $spyMerchantRelationship The SpyMerchantRelationship object to remove.
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function removeSpyMerchantRelationship(SpyMerchantRelationship $spyMerchantRelationship)
    {
        if ($this->getSpyMerchantRelationships()->contains($spyMerchantRelationship)) {
            $pos = $this->collSpyMerchantRelationships->search($spyMerchantRelationship);
            $this->collSpyMerchantRelationships->remove($pos);
            if (null === $this->spyMerchantRelationshipsScheduledForDeletion) {
                $this->spyMerchantRelationshipsScheduledForDeletion = clone $this->collSpyMerchantRelationships;
                $this->spyMerchantRelationshipsScheduledForDeletion->clear();
            }
            $this->spyMerchantRelationshipsScheduledForDeletion[]= clone $spyMerchantRelationship;
            $spyMerchantRelationship->setCompanyBusinessUnit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related SpyMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyMerchantRelationship[] List of SpyMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationship}> List of SpyMerchantRelationship objects
     */
    public function getSpyMerchantRelationshipsJoinMerchant(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('Merchant', $joinBehavior);

        return $this->getSpyMerchantRelationships($query, $con);
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
     * Gets an array of SpyMerchantRelationshipToCompanyBusinessUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyBusinessUnit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyMerchantRelationshipToCompanyBusinessUnit[] List of SpyMerchantRelationshipToCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationshipToCompanyBusinessUnit> List of SpyMerchantRelationshipToCompanyBusinessUnit objects
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
                $collSpyMerchantRelationshipToCompanyBusinessUnits = SpyMerchantRelationshipToCompanyBusinessUnitQuery::create(null, $criteria)
                    ->filterByCompanyBusinessUnit($this)
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
     * Sets a collection of SpyMerchantRelationshipToCompanyBusinessUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyMerchantRelationshipToCompanyBusinessUnits A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setSpyMerchantRelationshipToCompanyBusinessUnits(Collection $spyMerchantRelationshipToCompanyBusinessUnits, ConnectionInterface $con = null)
    {
        /** @var SpyMerchantRelationshipToCompanyBusinessUnit[] $spyMerchantRelationshipToCompanyBusinessUnitsToDelete */
        $spyMerchantRelationshipToCompanyBusinessUnitsToDelete = $this->getSpyMerchantRelationshipToCompanyBusinessUnits(new Criteria(), $con)->diff($spyMerchantRelationshipToCompanyBusinessUnits);


        $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion = $spyMerchantRelationshipToCompanyBusinessUnitsToDelete;

        foreach ($spyMerchantRelationshipToCompanyBusinessUnitsToDelete as $spyMerchantRelationshipToCompanyBusinessUnitRemoved) {
            $spyMerchantRelationshipToCompanyBusinessUnitRemoved->setCompanyBusinessUnit(null);
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
     * Returns the number of related BaseSpyMerchantRelationshipToCompanyBusinessUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyMerchantRelationshipToCompanyBusinessUnit objects.
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

            $query = SpyMerchantRelationshipToCompanyBusinessUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCompanyBusinessUnit($this)
                ->count($con);
        }

        return count($this->collSpyMerchantRelationshipToCompanyBusinessUnits);
    }

    /**
     * Method called to associate a SpyMerchantRelationshipToCompanyBusinessUnit object to this object
     * through the SpyMerchantRelationshipToCompanyBusinessUnit foreign key attribute.
     *
     * @param  SpyMerchantRelationshipToCompanyBusinessUnit $l SpyMerchantRelationshipToCompanyBusinessUnit
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function addSpyMerchantRelationshipToCompanyBusinessUnit(SpyMerchantRelationshipToCompanyBusinessUnit $l)
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
     * @param SpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit The SpyMerchantRelationshipToCompanyBusinessUnit object to add.
     */
    protected function doAddSpyMerchantRelationshipToCompanyBusinessUnit(SpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit)
    {
        $this->collSpyMerchantRelationshipToCompanyBusinessUnits[]= $spyMerchantRelationshipToCompanyBusinessUnit;
        $spyMerchantRelationshipToCompanyBusinessUnit->setCompanyBusinessUnit($this);
    }

    /**
     * @param  SpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit The SpyMerchantRelationshipToCompanyBusinessUnit object to remove.
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function removeSpyMerchantRelationshipToCompanyBusinessUnit(SpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit)
    {
        if ($this->getSpyMerchantRelationshipToCompanyBusinessUnits()->contains($spyMerchantRelationshipToCompanyBusinessUnit)) {
            $pos = $this->collSpyMerchantRelationshipToCompanyBusinessUnits->search($spyMerchantRelationshipToCompanyBusinessUnit);
            $this->collSpyMerchantRelationshipToCompanyBusinessUnits->remove($pos);
            if (null === $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion) {
                $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion = clone $this->collSpyMerchantRelationshipToCompanyBusinessUnits;
                $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion->clear();
            }
            $this->spyMerchantRelationshipToCompanyBusinessUnitsScheduledForDeletion[]= clone $spyMerchantRelationshipToCompanyBusinessUnit;
            $spyMerchantRelationshipToCompanyBusinessUnit->setCompanyBusinessUnit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related SpyMerchantRelationshipToCompanyBusinessUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyMerchantRelationshipToCompanyBusinessUnit[] List of SpyMerchantRelationshipToCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyMerchantRelationshipToCompanyBusinessUnit}> List of SpyMerchantRelationshipToCompanyBusinessUnit objects
     */
    public function getSpyMerchantRelationshipToCompanyBusinessUnitsJoinMerchantRelationship(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyMerchantRelationshipToCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('MerchantRelationship', $joinBehavior);

        return $this->getSpyMerchantRelationshipToCompanyBusinessUnits($query, $con);
    }

    /**
     * Clears out the collSpyShoppingListCompanyBusinessUnits collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyShoppingListCompanyBusinessUnits()
     */
    public function clearSpyShoppingListCompanyBusinessUnits()
    {
        $this->collSpyShoppingListCompanyBusinessUnits = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyShoppingListCompanyBusinessUnits collection loaded partially.
     */
    public function resetPartialSpyShoppingListCompanyBusinessUnits($v = true)
    {
        $this->collSpyShoppingListCompanyBusinessUnitsPartial = $v;
    }

    /**
     * Initializes the collSpyShoppingListCompanyBusinessUnits collection.
     *
     * By default this just sets the collSpyShoppingListCompanyBusinessUnits collection to an empty array (like clearcollSpyShoppingListCompanyBusinessUnits());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyShoppingListCompanyBusinessUnits($overrideExisting = true)
    {
        if (null !== $this->collSpyShoppingListCompanyBusinessUnits && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyShoppingListCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyShoppingListCompanyBusinessUnits = new $collectionClassName;
        $this->collSpyShoppingListCompanyBusinessUnits->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit');
    }

    /**
     * Gets an array of SpyShoppingListCompanyBusinessUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCompanyBusinessUnit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyShoppingListCompanyBusinessUnit[] List of SpyShoppingListCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnit> List of SpyShoppingListCompanyBusinessUnit objects
     * @throws PropelException
     */
    public function getSpyShoppingListCompanyBusinessUnits(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyShoppingListCompanyBusinessUnits) {
                    $this->initSpyShoppingListCompanyBusinessUnits();
                } else {
                    $collectionClassName = SpyShoppingListCompanyBusinessUnitTableMap::getTableMap()->getCollectionClassName();

                    $collSpyShoppingListCompanyBusinessUnits = new $collectionClassName;
                    $collSpyShoppingListCompanyBusinessUnits->setModel('\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit');

                    return $collSpyShoppingListCompanyBusinessUnits;
                }
            } else {
                $collSpyShoppingListCompanyBusinessUnits = SpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria)
                    ->filterBySpyCompanyBusinessUnit($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyShoppingListCompanyBusinessUnitsPartial && count($collSpyShoppingListCompanyBusinessUnits)) {
                        $this->initSpyShoppingListCompanyBusinessUnits(false);

                        foreach ($collSpyShoppingListCompanyBusinessUnits as $obj) {
                            if (false == $this->collSpyShoppingListCompanyBusinessUnits->contains($obj)) {
                                $this->collSpyShoppingListCompanyBusinessUnits->append($obj);
                            }
                        }

                        $this->collSpyShoppingListCompanyBusinessUnitsPartial = true;
                    }

                    return $collSpyShoppingListCompanyBusinessUnits;
                }

                if ($partial && $this->collSpyShoppingListCompanyBusinessUnits) {
                    foreach ($this->collSpyShoppingListCompanyBusinessUnits as $obj) {
                        if ($obj->isNew()) {
                            $collSpyShoppingListCompanyBusinessUnits[] = $obj;
                        }
                    }
                }

                $this->collSpyShoppingListCompanyBusinessUnits = $collSpyShoppingListCompanyBusinessUnits;
                $this->collSpyShoppingListCompanyBusinessUnitsPartial = false;
            }
        }

        return $this->collSpyShoppingListCompanyBusinessUnits;
    }

    /**
     * Sets a collection of SpyShoppingListCompanyBusinessUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyShoppingListCompanyBusinessUnits A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function setSpyShoppingListCompanyBusinessUnits(Collection $spyShoppingListCompanyBusinessUnits, ConnectionInterface $con = null)
    {
        /** @var SpyShoppingListCompanyBusinessUnit[] $spyShoppingListCompanyBusinessUnitsToDelete */
        $spyShoppingListCompanyBusinessUnitsToDelete = $this->getSpyShoppingListCompanyBusinessUnits(new Criteria(), $con)->diff($spyShoppingListCompanyBusinessUnits);


        $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion = $spyShoppingListCompanyBusinessUnitsToDelete;

        foreach ($spyShoppingListCompanyBusinessUnitsToDelete as $spyShoppingListCompanyBusinessUnitRemoved) {
            $spyShoppingListCompanyBusinessUnitRemoved->setSpyCompanyBusinessUnit(null);
        }

        $this->collSpyShoppingListCompanyBusinessUnits = null;
        foreach ($spyShoppingListCompanyBusinessUnits as $spyShoppingListCompanyBusinessUnit) {
            $this->addSpyShoppingListCompanyBusinessUnit($spyShoppingListCompanyBusinessUnit);
        }

        $this->collSpyShoppingListCompanyBusinessUnits = $spyShoppingListCompanyBusinessUnits;
        $this->collSpyShoppingListCompanyBusinessUnitsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyShoppingListCompanyBusinessUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyShoppingListCompanyBusinessUnit objects.
     * @throws PropelException
     */
    public function countSpyShoppingListCompanyBusinessUnits(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyShoppingListCompanyBusinessUnitsPartial && !$this->isNew();
        if (null === $this->collSpyShoppingListCompanyBusinessUnits || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyShoppingListCompanyBusinessUnits) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyShoppingListCompanyBusinessUnits());
            }

            $query = SpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyCompanyBusinessUnit($this)
                ->count($con);
        }

        return count($this->collSpyShoppingListCompanyBusinessUnits);
    }

    /**
     * Method called to associate a SpyShoppingListCompanyBusinessUnit object to this object
     * through the SpyShoppingListCompanyBusinessUnit foreign key attribute.
     *
     * @param  SpyShoppingListCompanyBusinessUnit $l SpyShoppingListCompanyBusinessUnit
     * @return $this|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function addSpyShoppingListCompanyBusinessUnit(SpyShoppingListCompanyBusinessUnit $l)
    {
        if ($this->collSpyShoppingListCompanyBusinessUnits === null) {
            $this->initSpyShoppingListCompanyBusinessUnits();
            $this->collSpyShoppingListCompanyBusinessUnitsPartial = true;
        }

        if (!$this->collSpyShoppingListCompanyBusinessUnits->contains($l)) {
            $this->doAddSpyShoppingListCompanyBusinessUnit($l);

            if ($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion and $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->contains($l)) {
                $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->remove($this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit The SpyShoppingListCompanyBusinessUnit object to add.
     */
    protected function doAddSpyShoppingListCompanyBusinessUnit(SpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit)
    {
        $this->collSpyShoppingListCompanyBusinessUnits[]= $spyShoppingListCompanyBusinessUnit;
        $spyShoppingListCompanyBusinessUnit->setSpyCompanyBusinessUnit($this);
    }

    /**
     * @param  SpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit The SpyShoppingListCompanyBusinessUnit object to remove.
     * @return $this|ChildSpyCompanyBusinessUnit The current object (for fluent API support)
     */
    public function removeSpyShoppingListCompanyBusinessUnit(SpyShoppingListCompanyBusinessUnit $spyShoppingListCompanyBusinessUnit)
    {
        if ($this->getSpyShoppingListCompanyBusinessUnits()->contains($spyShoppingListCompanyBusinessUnit)) {
            $pos = $this->collSpyShoppingListCompanyBusinessUnits->search($spyShoppingListCompanyBusinessUnit);
            $this->collSpyShoppingListCompanyBusinessUnits->remove($pos);
            if (null === $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion) {
                $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion = clone $this->collSpyShoppingListCompanyBusinessUnits;
                $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion->clear();
            }
            $this->spyShoppingListCompanyBusinessUnitsScheduledForDeletion[]= clone $spyShoppingListCompanyBusinessUnit;
            $spyShoppingListCompanyBusinessUnit->setSpyCompanyBusinessUnit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related SpyShoppingListCompanyBusinessUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyShoppingListCompanyBusinessUnit[] List of SpyShoppingListCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnit}> List of SpyShoppingListCompanyBusinessUnit objects
     */
    public function getSpyShoppingListCompanyBusinessUnitsJoinSpyShoppingList(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('SpyShoppingList', $joinBehavior);

        return $this->getSpyShoppingListCompanyBusinessUnits($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCompanyBusinessUnit is new, it will return
     * an empty collection; or if this SpyCompanyBusinessUnit has previously
     * been saved, it will retrieve related SpyShoppingListCompanyBusinessUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCompanyBusinessUnit.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyShoppingListCompanyBusinessUnit[] List of SpyShoppingListCompanyBusinessUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyShoppingListCompanyBusinessUnit}> List of SpyShoppingListCompanyBusinessUnit objects
     */
    public function getSpyShoppingListCompanyBusinessUnitsJoinSpyShoppingListPermissionGroup(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyShoppingListCompanyBusinessUnitQuery::create(null, $criteria);
        $query->joinWith('SpyShoppingListPermissionGroup', $joinBehavior);

        return $this->getSpyShoppingListCompanyBusinessUnits($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCompany) {
            $this->aCompany->removeCompanyBusinessUnit($this);
        }
        if (null !== $this->aParentCompanyBusinessUnit) {
            $this->aParentCompanyBusinessUnit->removeChildrenCompanyBusinessUnits($this);
        }
        if (null !== $this->aCompanyBusinessUnitDefaultBillingAddress) {
            $this->aCompanyBusinessUnitDefaultBillingAddress->removeSpyCompanyBusinessUnit($this);
        }
        $this->id_company_business_unit = null;
        $this->fk_company = null;
        $this->fk_parent_company_business_unit = null;
        $this->bic = null;
        $this->default_billing_address = null;
        $this->email = null;
        $this->external_url = null;
        $this->iban = null;
        $this->key = null;
        $this->name = null;
        $this->phone = null;
        $this->uuid = null;
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
            if ($this->collChildrenCompanyBusinessUnitss) {
                foreach ($this->collChildrenCompanyBusinessUnitss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyCompanyUnitAddressToCompanyBusinessUnits) {
                foreach ($this->collSpyCompanyUnitAddressToCompanyBusinessUnits as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCompanyUsers) {
                foreach ($this->collCompanyUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyCompanyUserInvitations) {
                foreach ($this->collSpyCompanyUserInvitations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyMerchantRelationships) {
                foreach ($this->collSpyMerchantRelationships as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyMerchantRelationshipToCompanyBusinessUnits) {
                foreach ($this->collSpyMerchantRelationshipToCompanyBusinessUnits as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyShoppingListCompanyBusinessUnits) {
                foreach ($this->collSpyShoppingListCompanyBusinessUnits as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collChildrenCompanyBusinessUnitss = null;
        $this->collSpyCompanyUnitAddressToCompanyBusinessUnits = null;
        $this->collCompanyUsers = null;
        $this->collSpyCompanyUserInvitations = null;
        $this->collSpyMerchantRelationships = null;
        $this->collSpyMerchantRelationshipToCompanyBusinessUnits = null;
        $this->collSpyShoppingListCompanyBusinessUnits = null;
        $this->aCompany = null;
        $this->aParentCompanyBusinessUnit = null;
        $this->aCompanyBusinessUnitDefaultBillingAddress = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyCompanyBusinessUnitTableMap::DEFAULT_STRING_FORMAT);
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
        $name = 'spy_company_business_unit' . '.' . $this->getIdCompanyBusinessUnit() . '.' . $this->getFkCompany();
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
