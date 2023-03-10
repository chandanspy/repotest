<?php

namespace Orm\Zed\Customer\Persistence\Map;

use Orm\Zed\Customer\Persistence\SpyCustomer;
use Orm\Zed\Customer\Persistence\SpyCustomerQuery;
use Orm\Zed\ProductCustomerPermission\Persistence\Map\SpyProductCustomerPermissionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'spy_customer' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCustomerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Customer.Persistence.Map.SpyCustomerTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_customer';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomer';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Customer.Persistence.SpyCustomer';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 22;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 22;

    /**
     * the column name for the id_customer field
     */
    const COL_ID_CUSTOMER = 'spy_customer.id_customer';

    /**
     * the column name for the fk_locale field
     */
    const COL_FK_LOCALE = 'spy_customer.fk_locale';

    /**
     * the column name for the fk_user field
     */
    const COL_FK_USER = 'spy_customer.fk_user';

    /**
     * the column name for the anonymized_at field
     */
    const COL_ANONYMIZED_AT = 'spy_customer.anonymized_at';

    /**
     * the column name for the company field
     */
    const COL_COMPANY = 'spy_customer.company';

    /**
     * the column name for the customer_reference field
     */
    const COL_CUSTOMER_REFERENCE = 'spy_customer.customer_reference';

    /**
     * the column name for the date_of_birth field
     */
    const COL_DATE_OF_BIRTH = 'spy_customer.date_of_birth';

    /**
     * the column name for the default_billing_address field
     */
    const COL_DEFAULT_BILLING_ADDRESS = 'spy_customer.default_billing_address';

    /**
     * the column name for the default_shipping_address field
     */
    const COL_DEFAULT_SHIPPING_ADDRESS = 'spy_customer.default_shipping_address';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'spy_customer.email';

    /**
     * the column name for the first_name field
     */
    const COL_FIRST_NAME = 'spy_customer.first_name';

    /**
     * the column name for the gender field
     */
    const COL_GENDER = 'spy_customer.gender';

    /**
     * the column name for the last_name field
     */
    const COL_LAST_NAME = 'spy_customer.last_name';

    /**
     * the column name for the password field
     */
    const COL_PASSWORD = 'spy_customer.password';

    /**
     * the column name for the phone field
     */
    const COL_PHONE = 'spy_customer.phone';

    /**
     * the column name for the registered field
     */
    const COL_REGISTERED = 'spy_customer.registered';

    /**
     * the column name for the registration_key field
     */
    const COL_REGISTRATION_KEY = 'spy_customer.registration_key';

    /**
     * the column name for the restore_password_date field
     */
    const COL_RESTORE_PASSWORD_DATE = 'spy_customer.restore_password_date';

    /**
     * the column name for the restore_password_key field
     */
    const COL_RESTORE_PASSWORD_KEY = 'spy_customer.restore_password_key';

    /**
     * the column name for the salutation field
     */
    const COL_SALUTATION = 'spy_customer.salutation';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_customer.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_customer.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /** The enumerated values for the gender field */
    const COL_GENDER_MALE = 'Male';
    const COL_GENDER_FEMALE = 'Female';

    /** The enumerated values for the salutation field */
    const COL_SALUTATION_MR = 'Mr';
    const COL_SALUTATION_MRS = 'Mrs';
    const COL_SALUTATION_DR = 'Dr';
    const COL_SALUTATION_MS = 'Ms';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('IdCustomer', 'FkLocale', 'FkUser', 'AnonymizedAt', 'Company', 'CustomerReference', 'DateOfBirth', 'DefaultBillingAddress', 'DefaultShippingAddress', 'Email', 'FirstName', 'Gender', 'LastName', 'Password', 'Phone', 'Registered', 'RegistrationKey', 'RestorePasswordDate', 'RestorePasswordKey', 'Salutation', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idCustomer', 'fkLocale', 'fkUser', 'anonymizedAt', 'company', 'customerReference', 'dateOfBirth', 'defaultBillingAddress', 'defaultShippingAddress', 'email', 'firstName', 'gender', 'lastName', 'password', 'phone', 'registered', 'registrationKey', 'restorePasswordDate', 'restorePasswordKey', 'salutation', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyCustomerTableMap::COL_ID_CUSTOMER, SpyCustomerTableMap::COL_FK_LOCALE, SpyCustomerTableMap::COL_FK_USER, SpyCustomerTableMap::COL_ANONYMIZED_AT, SpyCustomerTableMap::COL_COMPANY, SpyCustomerTableMap::COL_CUSTOMER_REFERENCE, SpyCustomerTableMap::COL_DATE_OF_BIRTH, SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS, SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS, SpyCustomerTableMap::COL_EMAIL, SpyCustomerTableMap::COL_FIRST_NAME, SpyCustomerTableMap::COL_GENDER, SpyCustomerTableMap::COL_LAST_NAME, SpyCustomerTableMap::COL_PASSWORD, SpyCustomerTableMap::COL_PHONE, SpyCustomerTableMap::COL_REGISTERED, SpyCustomerTableMap::COL_REGISTRATION_KEY, SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE, SpyCustomerTableMap::COL_RESTORE_PASSWORD_KEY, SpyCustomerTableMap::COL_SALUTATION, SpyCustomerTableMap::COL_CREATED_AT, SpyCustomerTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_customer', 'fk_locale', 'fk_user', 'anonymized_at', 'company', 'customer_reference', 'date_of_birth', 'default_billing_address', 'default_shipping_address', 'email', 'first_name', 'gender', 'last_name', 'password', 'phone', 'registered', 'registration_key', 'restore_password_date', 'restore_password_key', 'salutation', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdCustomer' => 0, 'FkLocale' => 1, 'FkUser' => 2, 'AnonymizedAt' => 3, 'Company' => 4, 'CustomerReference' => 5, 'DateOfBirth' => 6, 'DefaultBillingAddress' => 7, 'DefaultShippingAddress' => 8, 'Email' => 9, 'FirstName' => 10, 'Gender' => 11, 'LastName' => 12, 'Password' => 13, 'Phone' => 14, 'Registered' => 15, 'RegistrationKey' => 16, 'RestorePasswordDate' => 17, 'RestorePasswordKey' => 18, 'Salutation' => 19, 'CreatedAt' => 20, 'UpdatedAt' => 21, ),
        self::TYPE_CAMELNAME     => array('idCustomer' => 0, 'fkLocale' => 1, 'fkUser' => 2, 'anonymizedAt' => 3, 'company' => 4, 'customerReference' => 5, 'dateOfBirth' => 6, 'defaultBillingAddress' => 7, 'defaultShippingAddress' => 8, 'email' => 9, 'firstName' => 10, 'gender' => 11, 'lastName' => 12, 'password' => 13, 'phone' => 14, 'registered' => 15, 'registrationKey' => 16, 'restorePasswordDate' => 17, 'restorePasswordKey' => 18, 'salutation' => 19, 'createdAt' => 20, 'updatedAt' => 21, ),
        self::TYPE_COLNAME       => array(SpyCustomerTableMap::COL_ID_CUSTOMER => 0, SpyCustomerTableMap::COL_FK_LOCALE => 1, SpyCustomerTableMap::COL_FK_USER => 2, SpyCustomerTableMap::COL_ANONYMIZED_AT => 3, SpyCustomerTableMap::COL_COMPANY => 4, SpyCustomerTableMap::COL_CUSTOMER_REFERENCE => 5, SpyCustomerTableMap::COL_DATE_OF_BIRTH => 6, SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS => 7, SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS => 8, SpyCustomerTableMap::COL_EMAIL => 9, SpyCustomerTableMap::COL_FIRST_NAME => 10, SpyCustomerTableMap::COL_GENDER => 11, SpyCustomerTableMap::COL_LAST_NAME => 12, SpyCustomerTableMap::COL_PASSWORD => 13, SpyCustomerTableMap::COL_PHONE => 14, SpyCustomerTableMap::COL_REGISTERED => 15, SpyCustomerTableMap::COL_REGISTRATION_KEY => 16, SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE => 17, SpyCustomerTableMap::COL_RESTORE_PASSWORD_KEY => 18, SpyCustomerTableMap::COL_SALUTATION => 19, SpyCustomerTableMap::COL_CREATED_AT => 20, SpyCustomerTableMap::COL_UPDATED_AT => 21, ),
        self::TYPE_FIELDNAME     => array('id_customer' => 0, 'fk_locale' => 1, 'fk_user' => 2, 'anonymized_at' => 3, 'company' => 4, 'customer_reference' => 5, 'date_of_birth' => 6, 'default_billing_address' => 7, 'default_shipping_address' => 8, 'email' => 9, 'first_name' => 10, 'gender' => 11, 'last_name' => 12, 'password' => 13, 'phone' => 14, 'registered' => 15, 'registration_key' => 16, 'restore_password_date' => 17, 'restore_password_key' => 18, 'salutation' => 19, 'created_at' => 20, 'updated_at' => 21, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdCustomer' => 'ID_CUSTOMER',
        'SpyCustomer.IdCustomer' => 'ID_CUSTOMER',
        'idCustomer' => 'ID_CUSTOMER',
        'spyCustomer.idCustomer' => 'ID_CUSTOMER',
        'SpyCustomerTableMap::COL_ID_CUSTOMER' => 'ID_CUSTOMER',
        'COL_ID_CUSTOMER' => 'ID_CUSTOMER',
        'id_customer' => 'ID_CUSTOMER',
        'spy_customer.id_customer' => 'ID_CUSTOMER',
        'FkLocale' => 'FK_LOCALE',
        'SpyCustomer.FkLocale' => 'FK_LOCALE',
        'fkLocale' => 'FK_LOCALE',
        'spyCustomer.fkLocale' => 'FK_LOCALE',
        'SpyCustomerTableMap::COL_FK_LOCALE' => 'FK_LOCALE',
        'COL_FK_LOCALE' => 'FK_LOCALE',
        'fk_locale' => 'FK_LOCALE',
        'spy_customer.fk_locale' => 'FK_LOCALE',
        'FkUser' => 'FK_USER',
        'SpyCustomer.FkUser' => 'FK_USER',
        'fkUser' => 'FK_USER',
        'spyCustomer.fkUser' => 'FK_USER',
        'SpyCustomerTableMap::COL_FK_USER' => 'FK_USER',
        'COL_FK_USER' => 'FK_USER',
        'fk_user' => 'FK_USER',
        'spy_customer.fk_user' => 'FK_USER',
        'AnonymizedAt' => 'ANONYMIZED_AT',
        'SpyCustomer.AnonymizedAt' => 'ANONYMIZED_AT',
        'anonymizedAt' => 'ANONYMIZED_AT',
        'spyCustomer.anonymizedAt' => 'ANONYMIZED_AT',
        'SpyCustomerTableMap::COL_ANONYMIZED_AT' => 'ANONYMIZED_AT',
        'COL_ANONYMIZED_AT' => 'ANONYMIZED_AT',
        'anonymized_at' => 'ANONYMIZED_AT',
        'spy_customer.anonymized_at' => 'ANONYMIZED_AT',
        'Company' => 'COMPANY',
        'SpyCustomer.Company' => 'COMPANY',
        'company' => 'COMPANY',
        'spyCustomer.company' => 'COMPANY',
        'SpyCustomerTableMap::COL_COMPANY' => 'COMPANY',
        'COL_COMPANY' => 'COMPANY',
        'spy_customer.company' => 'COMPANY',
        'CustomerReference' => 'CUSTOMER_REFERENCE',
        'SpyCustomer.CustomerReference' => 'CUSTOMER_REFERENCE',
        'customerReference' => 'CUSTOMER_REFERENCE',
        'spyCustomer.customerReference' => 'CUSTOMER_REFERENCE',
        'SpyCustomerTableMap::COL_CUSTOMER_REFERENCE' => 'CUSTOMER_REFERENCE',
        'COL_CUSTOMER_REFERENCE' => 'CUSTOMER_REFERENCE',
        'customer_reference' => 'CUSTOMER_REFERENCE',
        'spy_customer.customer_reference' => 'CUSTOMER_REFERENCE',
        'DateOfBirth' => 'DATE_OF_BIRTH',
        'SpyCustomer.DateOfBirth' => 'DATE_OF_BIRTH',
        'dateOfBirth' => 'DATE_OF_BIRTH',
        'spyCustomer.dateOfBirth' => 'DATE_OF_BIRTH',
        'SpyCustomerTableMap::COL_DATE_OF_BIRTH' => 'DATE_OF_BIRTH',
        'COL_DATE_OF_BIRTH' => 'DATE_OF_BIRTH',
        'date_of_birth' => 'DATE_OF_BIRTH',
        'spy_customer.date_of_birth' => 'DATE_OF_BIRTH',
        'DefaultBillingAddress' => 'DEFAULT_BILLING_ADDRESS',
        'SpyCustomer.DefaultBillingAddress' => 'DEFAULT_BILLING_ADDRESS',
        'defaultBillingAddress' => 'DEFAULT_BILLING_ADDRESS',
        'spyCustomer.defaultBillingAddress' => 'DEFAULT_BILLING_ADDRESS',
        'SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS' => 'DEFAULT_BILLING_ADDRESS',
        'COL_DEFAULT_BILLING_ADDRESS' => 'DEFAULT_BILLING_ADDRESS',
        'default_billing_address' => 'DEFAULT_BILLING_ADDRESS',
        'spy_customer.default_billing_address' => 'DEFAULT_BILLING_ADDRESS',
        'DefaultShippingAddress' => 'DEFAULT_SHIPPING_ADDRESS',
        'SpyCustomer.DefaultShippingAddress' => 'DEFAULT_SHIPPING_ADDRESS',
        'defaultShippingAddress' => 'DEFAULT_SHIPPING_ADDRESS',
        'spyCustomer.defaultShippingAddress' => 'DEFAULT_SHIPPING_ADDRESS',
        'SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS' => 'DEFAULT_SHIPPING_ADDRESS',
        'COL_DEFAULT_SHIPPING_ADDRESS' => 'DEFAULT_SHIPPING_ADDRESS',
        'default_shipping_address' => 'DEFAULT_SHIPPING_ADDRESS',
        'spy_customer.default_shipping_address' => 'DEFAULT_SHIPPING_ADDRESS',
        'Email' => 'EMAIL',
        'SpyCustomer.Email' => 'EMAIL',
        'email' => 'EMAIL',
        'spyCustomer.email' => 'EMAIL',
        'SpyCustomerTableMap::COL_EMAIL' => 'EMAIL',
        'COL_EMAIL' => 'EMAIL',
        'spy_customer.email' => 'EMAIL',
        'FirstName' => 'FIRST_NAME',
        'SpyCustomer.FirstName' => 'FIRST_NAME',
        'firstName' => 'FIRST_NAME',
        'spyCustomer.firstName' => 'FIRST_NAME',
        'SpyCustomerTableMap::COL_FIRST_NAME' => 'FIRST_NAME',
        'COL_FIRST_NAME' => 'FIRST_NAME',
        'first_name' => 'FIRST_NAME',
        'spy_customer.first_name' => 'FIRST_NAME',
        'Gender' => 'GENDER',
        'SpyCustomer.Gender' => 'GENDER',
        'gender' => 'GENDER',
        'spyCustomer.gender' => 'GENDER',
        'SpyCustomerTableMap::COL_GENDER' => 'GENDER',
        'COL_GENDER' => 'GENDER',
        'spy_customer.gender' => 'GENDER',
        'LastName' => 'LAST_NAME',
        'SpyCustomer.LastName' => 'LAST_NAME',
        'lastName' => 'LAST_NAME',
        'spyCustomer.lastName' => 'LAST_NAME',
        'SpyCustomerTableMap::COL_LAST_NAME' => 'LAST_NAME',
        'COL_LAST_NAME' => 'LAST_NAME',
        'last_name' => 'LAST_NAME',
        'spy_customer.last_name' => 'LAST_NAME',
        'Password' => 'PASSWORD',
        'SpyCustomer.Password' => 'PASSWORD',
        'password' => 'PASSWORD',
        'spyCustomer.password' => 'PASSWORD',
        'SpyCustomerTableMap::COL_PASSWORD' => 'PASSWORD',
        'COL_PASSWORD' => 'PASSWORD',
        'spy_customer.password' => 'PASSWORD',
        'Phone' => 'PHONE',
        'SpyCustomer.Phone' => 'PHONE',
        'phone' => 'PHONE',
        'spyCustomer.phone' => 'PHONE',
        'SpyCustomerTableMap::COL_PHONE' => 'PHONE',
        'COL_PHONE' => 'PHONE',
        'spy_customer.phone' => 'PHONE',
        'Registered' => 'REGISTERED',
        'SpyCustomer.Registered' => 'REGISTERED',
        'registered' => 'REGISTERED',
        'spyCustomer.registered' => 'REGISTERED',
        'SpyCustomerTableMap::COL_REGISTERED' => 'REGISTERED',
        'COL_REGISTERED' => 'REGISTERED',
        'spy_customer.registered' => 'REGISTERED',
        'RegistrationKey' => 'REGISTRATION_KEY',
        'SpyCustomer.RegistrationKey' => 'REGISTRATION_KEY',
        'registrationKey' => 'REGISTRATION_KEY',
        'spyCustomer.registrationKey' => 'REGISTRATION_KEY',
        'SpyCustomerTableMap::COL_REGISTRATION_KEY' => 'REGISTRATION_KEY',
        'COL_REGISTRATION_KEY' => 'REGISTRATION_KEY',
        'registration_key' => 'REGISTRATION_KEY',
        'spy_customer.registration_key' => 'REGISTRATION_KEY',
        'RestorePasswordDate' => 'RESTORE_PASSWORD_DATE',
        'SpyCustomer.RestorePasswordDate' => 'RESTORE_PASSWORD_DATE',
        'restorePasswordDate' => 'RESTORE_PASSWORD_DATE',
        'spyCustomer.restorePasswordDate' => 'RESTORE_PASSWORD_DATE',
        'SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE' => 'RESTORE_PASSWORD_DATE',
        'COL_RESTORE_PASSWORD_DATE' => 'RESTORE_PASSWORD_DATE',
        'restore_password_date' => 'RESTORE_PASSWORD_DATE',
        'spy_customer.restore_password_date' => 'RESTORE_PASSWORD_DATE',
        'RestorePasswordKey' => 'RESTORE_PASSWORD_KEY',
        'SpyCustomer.RestorePasswordKey' => 'RESTORE_PASSWORD_KEY',
        'restorePasswordKey' => 'RESTORE_PASSWORD_KEY',
        'spyCustomer.restorePasswordKey' => 'RESTORE_PASSWORD_KEY',
        'SpyCustomerTableMap::COL_RESTORE_PASSWORD_KEY' => 'RESTORE_PASSWORD_KEY',
        'COL_RESTORE_PASSWORD_KEY' => 'RESTORE_PASSWORD_KEY',
        'restore_password_key' => 'RESTORE_PASSWORD_KEY',
        'spy_customer.restore_password_key' => 'RESTORE_PASSWORD_KEY',
        'Salutation' => 'SALUTATION',
        'SpyCustomer.Salutation' => 'SALUTATION',
        'salutation' => 'SALUTATION',
        'spyCustomer.salutation' => 'SALUTATION',
        'SpyCustomerTableMap::COL_SALUTATION' => 'SALUTATION',
        'COL_SALUTATION' => 'SALUTATION',
        'spy_customer.salutation' => 'SALUTATION',
        'CreatedAt' => 'CREATED_AT',
        'SpyCustomer.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyCustomer.createdAt' => 'CREATED_AT',
        'SpyCustomerTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_customer.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyCustomer.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyCustomer.updatedAt' => 'UPDATED_AT',
        'SpyCustomerTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_customer.updated_at' => 'UPDATED_AT',
    ];

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
                SpyCustomerTableMap::COL_GENDER => array(
                            self::COL_GENDER_MALE,
            self::COL_GENDER_FEMALE,
        ),
                SpyCustomerTableMap::COL_SALUTATION => array(
                            self::COL_SALUTATION_MR,
            self::COL_SALUTATION_MRS,
            self::COL_SALUTATION_DR,
            self::COL_SALUTATION_MS,
        ),
    );

    /**
     * Gets the list of values for all ENUM and SET columns
     * @return array
     */
    public static function getValueSets()
    {
      return static::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM or SET column
     * @param string $colname
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = self::getValueSets();

        return $valueSets[$colname];
    }

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('spy_customer');
        $this->setPhpName('SpyCustomer');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Customer\\Persistence\\SpyCustomer');
        $this->setPackage('src.Orm.Zed.Customer.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_customer_pk_seq');
        // columns
        $this->addPrimaryKey('id_customer', 'IdCustomer', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_locale', 'FkLocale', 'INTEGER', 'spy_locale', 'id_locale', false, null, null);
        $this->addForeignKey('fk_user', 'FkUser', 'INTEGER', 'spy_user', 'id_user', false, null, null);
        $this->addColumn('anonymized_at', 'AnonymizedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('company', 'Company', 'VARCHAR', false, 100, null);
        $this->addColumn('customer_reference', 'CustomerReference', 'VARCHAR', true, 255, null);
        $this->addColumn('date_of_birth', 'DateOfBirth', 'DATE', false, null, null);
        $this->addForeignKey('default_billing_address', 'DefaultBillingAddress', 'INTEGER', 'spy_customer_address', 'id_customer_address', false, null, null);
        $this->addForeignKey('default_shipping_address', 'DefaultShippingAddress', 'INTEGER', 'spy_customer_address', 'id_customer_address', false, null, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', false, 100, null);
        $this->addColumn('gender', 'Gender', 'ENUM', false, null, null);
        $this->getColumn('gender')->setValueSet(array (
  0 => 'Male',
  1 => 'Female',
));
        $this->addColumn('last_name', 'LastName', 'VARCHAR', false, 100, null);
        $this->addColumn('password', 'Password', 'VARCHAR', false, 255, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 255, null);
        $this->addColumn('registered', 'Registered', 'DATE', false, null, null);
        $this->addColumn('registration_key', 'RegistrationKey', 'VARCHAR', false, 150, null);
        $this->addColumn('restore_password_date', 'RestorePasswordDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('restore_password_key', 'RestorePasswordKey', 'VARCHAR', false, 150, null);
        $this->addColumn('salutation', 'Salutation', 'ENUM', false, null, null);
        $this->getColumn('salutation')->setValueSet(array (
  0 => 'Mr',
  1 => 'Mrs',
  2 => 'Dr',
  3 => 'Ms',
));
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyUser', '\\Orm\\Zed\\User\\Persistence\\SpyUser', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_user',
    1 => ':id_user',
  ),
), null, null, null, false);
        $this->addRelation('BillingAddress', '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomerAddress', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':default_billing_address',
    1 => ':id_customer_address',
  ),
), 'SET NULL', null, null, false);
        $this->addRelation('ShippingAddress', '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomerAddress', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':default_shipping_address',
    1 => ':id_customer_address',
  ),
), 'SET NULL', null, null, false);
        $this->addRelation('Locale', '\\Orm\\Zed\\Locale\\Persistence\\SpyLocale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, null, false);
        $this->addRelation('SpyComment', '\\Orm\\Zed\\Comment\\Persistence\\SpyComment', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), null, null, 'SpyComments', false);
        $this->addRelation('CompanyUser', '\\Orm\\Zed\\CompanyUser\\Persistence\\SpyCompanyUser', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), null, null, 'CompanyUsers', false);
        $this->addRelation('Address', '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomerAddress', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), 'CASCADE', null, 'Addresses', false);
        $this->addRelation('SpyCustomerGroupToCustomer', '\\Orm\\Zed\\CustomerGroup\\Persistence\\SpyCustomerGroupToCustomer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), null, null, 'SpyCustomerGroupToCustomers', false);
        $this->addRelation('CustomerNote', '\\Orm\\Zed\\CustomerNote\\Persistence\\SpyCustomerNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), null, null, 'CustomerNotes', false);
        $this->addRelation('SpyNewsletterSubscriber', '\\Orm\\Zed\\Newsletter\\Persistence\\SpyNewsletterSubscriber', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), null, null, 'SpyNewsletterSubscribers', false);
        $this->addRelation('SpyProductCustomerPermission', '\\Orm\\Zed\\ProductCustomerPermission\\Persistence\\SpyProductCustomerPermission', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), 'CASCADE', null, 'SpyProductCustomerPermissions', false);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_customer     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCustomerAddressTableMap::clearInstancePool();
        SpyProductCustomerPermissionTableMap::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCustomer', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCustomer', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCustomer', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCustomer', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCustomer', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCustomer', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('IdCustomer', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SpyCustomerTableMap::CLASS_DEFAULT : SpyCustomerTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (SpyCustomer object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyCustomerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCustomerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCustomerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCustomerTableMap::OM_CLASS;
            /** @var SpyCustomer $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCustomerTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SpyCustomerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCustomerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCustomer $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCustomerTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_ID_CUSTOMER);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_FK_LOCALE);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_FK_USER);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_ANONYMIZED_AT);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_COMPANY);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_CUSTOMER_REFERENCE);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_DATE_OF_BIRTH);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_EMAIL);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_FIRST_NAME);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_GENDER);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_LAST_NAME);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_PASSWORD);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_PHONE);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_REGISTERED);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_REGISTRATION_KEY);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_RESTORE_PASSWORD_KEY);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_SALUTATION);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyCustomerTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_customer');
            $criteria->addSelectColumn($alias . '.fk_locale');
            $criteria->addSelectColumn($alias . '.fk_user');
            $criteria->addSelectColumn($alias . '.anonymized_at');
            $criteria->addSelectColumn($alias . '.company');
            $criteria->addSelectColumn($alias . '.customer_reference');
            $criteria->addSelectColumn($alias . '.date_of_birth');
            $criteria->addSelectColumn($alias . '.default_billing_address');
            $criteria->addSelectColumn($alias . '.default_shipping_address');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.gender');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.registered');
            $criteria->addSelectColumn($alias . '.registration_key');
            $criteria->addSelectColumn($alias . '.restore_password_date');
            $criteria->addSelectColumn($alias . '.restore_password_key');
            $criteria->addSelectColumn($alias . '.salutation');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria object containing the columns to remove.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function removeSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_ID_CUSTOMER);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_FK_LOCALE);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_FK_USER);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_ANONYMIZED_AT);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_COMPANY);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_CUSTOMER_REFERENCE);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_DATE_OF_BIRTH);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_EMAIL);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_FIRST_NAME);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_GENDER);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_LAST_NAME);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_PASSWORD);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_PHONE);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_REGISTERED);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_REGISTRATION_KEY);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_RESTORE_PASSWORD_KEY);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_SALUTATION);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyCustomerTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_customer');
            $criteria->removeSelectColumn($alias . '.fk_locale');
            $criteria->removeSelectColumn($alias . '.fk_user');
            $criteria->removeSelectColumn($alias . '.anonymized_at');
            $criteria->removeSelectColumn($alias . '.company');
            $criteria->removeSelectColumn($alias . '.customer_reference');
            $criteria->removeSelectColumn($alias . '.date_of_birth');
            $criteria->removeSelectColumn($alias . '.default_billing_address');
            $criteria->removeSelectColumn($alias . '.default_shipping_address');
            $criteria->removeSelectColumn($alias . '.email');
            $criteria->removeSelectColumn($alias . '.first_name');
            $criteria->removeSelectColumn($alias . '.gender');
            $criteria->removeSelectColumn($alias . '.last_name');
            $criteria->removeSelectColumn($alias . '.password');
            $criteria->removeSelectColumn($alias . '.phone');
            $criteria->removeSelectColumn($alias . '.registered');
            $criteria->removeSelectColumn($alias . '.registration_key');
            $criteria->removeSelectColumn($alias . '.restore_password_date');
            $criteria->removeSelectColumn($alias . '.restore_password_key');
            $criteria->removeSelectColumn($alias . '.salutation');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(SpyCustomerTableMap::DATABASE_NAME)->getTable(SpyCustomerTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCustomer or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyCustomer object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCustomerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Customer\Persistence\SpyCustomer) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCustomerTableMap::DATABASE_NAME);
            $criteria->add(SpyCustomerTableMap::COL_ID_CUSTOMER, (array) $values, Criteria::IN);
        }

        $query = SpyCustomerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCustomerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCustomerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_customer table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyCustomerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCustomer or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyCustomer object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCustomerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCustomer object
        }

        if ($criteria->containsKey(SpyCustomerTableMap::COL_ID_CUSTOMER) && $criteria->keyContainsValue(SpyCustomerTableMap::COL_ID_CUSTOMER) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyCustomerTableMap::COL_ID_CUSTOMER.')');
        }


        // Set the correct dbName
        $query = SpyCustomerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyCustomerTableMap
