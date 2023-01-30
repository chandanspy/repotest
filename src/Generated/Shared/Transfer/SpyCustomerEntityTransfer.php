<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyCustomerEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CUSTOMER = 'idCustomer';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_USER = 'fkUser';

    /**
     * @var string
     */
    public const ANONYMIZED_AT = 'anonymizedAt';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const DATE_OF_BIRTH = 'dateOfBirth';

    /**
     * @var string
     */
    public const DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';

    /**
     * @var string
     */
    public const DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const GENDER = 'gender';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const REGISTERED = 'registered';

    /**
     * @var string
     */
    public const REGISTRATION_KEY = 'registrationKey';

    /**
     * @var string
     */
    public const RESTORE_PASSWORD_DATE = 'restorePasswordDate';

    /**
     * @var string
     */
    public const RESTORE_PASSWORD_KEY = 'restorePasswordKey';

    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const SPY_USER = 'spyUser';

    /**
     * @var string
     */
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const SPY_CUSTOMER_GROUP_TO_CUSTOMERS = 'spyCustomerGroupToCustomers';

    /**
     * @var string
     */
    public const SPY_COMPANY_USERS = 'spyCompanyUsers';

    /**
     * @var string
     */
    public const SPY_CUSTOMER_ADDRESSES = 'spyCustomerAddresses';

    /**
     * @var string
     */
    public const SPY_PRODUCT_CUSTOMER_PERMISSIONS = 'spyProductCustomerPermissions';

    /**
     * @var string
     */
    public const SPY_COMMENTS = 'spyComments';

    /**
     * @var string
     */
    public const SPY_CUSTOMER_NOTES = 'spyCustomerNotes';

    /**
     * @var string
     */
    public const SPY_NEWSLETTER_SUBSCRIBERS = 'spyNewsletterSubscribers';

    /**
     * @var integer|null
     */
    protected $idCustomer;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var integer|null
     */
    protected $fkUser;

    /**
     * @var string|null
     */
    protected $anonymizedAt;

    /**
     * @var string|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $dateOfBirth;

    /**
     * @var integer|null
     */
    protected $defaultBillingAddress;

    /**
     * @var integer|null
     */
    protected $defaultShippingAddress;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $gender;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $registered;

    /**
     * @var string|null
     */
    protected $registrationKey;

    /**
     * @var string|null
     */
    protected $restorePasswordDate;

    /**
     * @var string|null
     */
    protected $restorePasswordKey;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    protected $spyUser;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer|null
     */
    protected $billingAddress;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $locale;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCustomerGroupToCustomerEntityTransfer[]
     */
    protected $spyCustomerGroupToCustomers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserEntityTransfer[]
     */
    protected $spyCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[]
     */
    protected $spyCustomerAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer[]
     */
    protected $spyProductCustomerPermissions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCommentEntityTransfer[]
     */
    protected $spyComments;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer[]
     */
    protected $spyCustomerNotes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer[]
     */
    protected $spyNewsletterSubscribers;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_customer' => 'idCustomer',
        'idCustomer' => 'idCustomer',
        'IdCustomer' => 'idCustomer',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_user' => 'fkUser',
        'fkUser' => 'fkUser',
        'FkUser' => 'fkUser',
        'anonymized_at' => 'anonymizedAt',
        'anonymizedAt' => 'anonymizedAt',
        'AnonymizedAt' => 'anonymizedAt',
        'company' => 'company',
        'Company' => 'company',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'date_of_birth' => 'dateOfBirth',
        'dateOfBirth' => 'dateOfBirth',
        'DateOfBirth' => 'dateOfBirth',
        'default_billing_address' => 'defaultBillingAddress',
        'defaultBillingAddress' => 'defaultBillingAddress',
        'DefaultBillingAddress' => 'defaultBillingAddress',
        'default_shipping_address' => 'defaultShippingAddress',
        'defaultShippingAddress' => 'defaultShippingAddress',
        'DefaultShippingAddress' => 'defaultShippingAddress',
        'email' => 'email',
        'Email' => 'email',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'gender' => 'gender',
        'Gender' => 'gender',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'password' => 'password',
        'Password' => 'password',
        'phone' => 'phone',
        'Phone' => 'phone',
        'registered' => 'registered',
        'Registered' => 'registered',
        'registration_key' => 'registrationKey',
        'registrationKey' => 'registrationKey',
        'RegistrationKey' => 'registrationKey',
        'restore_password_date' => 'restorePasswordDate',
        'restorePasswordDate' => 'restorePasswordDate',
        'RestorePasswordDate' => 'restorePasswordDate',
        'restore_password_key' => 'restorePasswordKey',
        'restorePasswordKey' => 'restorePasswordKey',
        'RestorePasswordKey' => 'restorePasswordKey',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'spy_user' => 'spyUser',
        'spyUser' => 'spyUser',
        'SpyUser' => 'spyUser',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'locale' => 'locale',
        'Locale' => 'locale',
        'spy_customer_group_to_customers' => 'spyCustomerGroupToCustomers',
        'spyCustomerGroupToCustomers' => 'spyCustomerGroupToCustomers',
        'SpyCustomerGroupToCustomers' => 'spyCustomerGroupToCustomers',
        'spy_company_users' => 'spyCompanyUsers',
        'spyCompanyUsers' => 'spyCompanyUsers',
        'SpyCompanyUsers' => 'spyCompanyUsers',
        'spy_customer_addresses' => 'spyCustomerAddresses',
        'spyCustomerAddresses' => 'spyCustomerAddresses',
        'SpyCustomerAddresses' => 'spyCustomerAddresses',
        'spy_product_customer_permissions' => 'spyProductCustomerPermissions',
        'spyProductCustomerPermissions' => 'spyProductCustomerPermissions',
        'SpyProductCustomerPermissions' => 'spyProductCustomerPermissions',
        'spy_comments' => 'spyComments',
        'spyComments' => 'spyComments',
        'SpyComments' => 'spyComments',
        'spy_customer_notes' => 'spyCustomerNotes',
        'spyCustomerNotes' => 'spyCustomerNotes',
        'SpyCustomerNotes' => 'spyCustomerNotes',
        'spy_newsletter_subscribers' => 'spyNewsletterSubscribers',
        'spyNewsletterSubscribers' => 'spyNewsletterSubscribers',
        'SpyNewsletterSubscribers' => 'spyNewsletterSubscribers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CUSTOMER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_USER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ANONYMIZED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'anonymized_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATE_OF_BIRTH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'date_of_birth',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_BILLING_ADDRESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'default_billing_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_SHIPPING_ADDRESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'default_shipping_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GENDER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'gender',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PHONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'phone',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REGISTERED => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'registered',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REGISTRATION_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'registration_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESTORE_PASSWORD_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'restore_password_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESTORE_PASSWORD_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'restore_password_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALUTATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'salutation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_USER => [
            'type' => 'Generated\Shared\Transfer\SpyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'billing_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER_GROUP_TO_CUSTOMERS => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerGroupToCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer_group_to_customers',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_CUSTOMER_PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_customer_permissions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMMENTS => [
            'type' => 'Generated\Shared\Transfer\SpyCommentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_comments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER_NOTES => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer_notes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NEWSLETTER_SUBSCRIBERS => [
            'type' => 'Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_newsletter_subscribers',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Customer\Persistence\SpyCustomer';


    /**
     * @module 
     *
     * @param integer|null $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @module 
     *
     * @param integer|null $idCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerOrFail($idCustomer)
    {
        if ($idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->setIdCustomer($idCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCustomerOrFail()
    {
        if ($this->idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->idCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUser
     *
     * @return $this
     */
    public function setFkUser($fkUser)
    {
        $this->fkUser = $fkUser;
        $this->modifiedProperties[self::FK_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkUserOrFail($fkUser)
    {
        if ($fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->setFkUser($fkUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkUserOrFail()
    {
        if ($this->fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->fkUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkUser()
    {
        $this->assertPropertyIsSet(self::FK_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $anonymizedAt
     *
     * @return $this
     */
    public function setAnonymizedAt($anonymizedAt)
    {
        $this->anonymizedAt = $anonymizedAt;
        $this->modifiedProperties[self::ANONYMIZED_AT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAnonymizedAt()
    {
        return $this->anonymizedAt;
    }

    /**
     * @module 
     *
     * @param string|null $anonymizedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAnonymizedAtOrFail($anonymizedAt)
    {
        if ($anonymizedAt === null) {
            $this->throwNullValueException(static::ANONYMIZED_AT);
        }

        return $this->setAnonymizedAt($anonymizedAt);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAnonymizedAtOrFail()
    {
        if ($this->anonymizedAt === null) {
            $this->throwNullValueException(static::ANONYMIZED_AT);
        }

        return $this->anonymizedAt;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnonymizedAt()
    {
        $this->assertPropertyIsSet(self::ANONYMIZED_AT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        $this->modifiedProperties[self::COMPANY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module 
     *
     * @param string|null $company
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyOrFail($company)
    {
        if ($company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->setCompany($company);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyOrFail()
    {
        if ($this->company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->company;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompany()
    {
        $this->assertPropertyIsSet(self::COMPANY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module 
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $dateOfBirth
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        $this->modifiedProperties[self::DATE_OF_BIRTH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @module 
     *
     * @param string|null $dateOfBirth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDateOfBirthOrFail($dateOfBirth)
    {
        if ($dateOfBirth === null) {
            $this->throwNullValueException(static::DATE_OF_BIRTH);
        }

        return $this->setDateOfBirth($dateOfBirth);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDateOfBirthOrFail()
    {
        if ($this->dateOfBirth === null) {
            $this->throwNullValueException(static::DATE_OF_BIRTH);
        }

        return $this->dateOfBirth;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDateOfBirth()
    {
        $this->assertPropertyIsSet(self::DATE_OF_BIRTH);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultBillingAddress
     *
     * @return $this
     */
    public function setDefaultBillingAddress($defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->modifiedProperties[self::DEFAULT_BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultBillingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultBillingAddressOrFail($defaultBillingAddress)
    {
        if ($defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->setDefaultBillingAddress($defaultBillingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDefaultBillingAddressOrFail()
    {
        if ($this->defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->defaultBillingAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultBillingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultShippingAddress
     *
     * @return $this
     */
    public function setDefaultShippingAddress($defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->modifiedProperties[self::DEFAULT_SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultShippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultShippingAddressOrFail($defaultShippingAddress)
    {
        if ($defaultShippingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_SHIPPING_ADDRESS);
        }

        return $this->setDefaultShippingAddress($defaultShippingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDefaultShippingAddressOrFail()
    {
        if ($this->defaultShippingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_SHIPPING_ADDRESS);
        }

        return $this->defaultShippingAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultShippingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module 
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module 
     *
     * @param string|null $firstName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFirstNameOrFail($firstName)
    {
        if ($firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->setFirstName($firstName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFirstNameOrFail()
    {
        if ($this->firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->firstName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        $this->modifiedProperties[self::GENDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @module 
     *
     * @param string|null $gender
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGenderOrFail($gender)
    {
        if ($gender === null) {
            $this->throwNullValueException(static::GENDER);
        }

        return $this->setGender($gender);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGenderOrFail()
    {
        if ($this->gender === null) {
            $this->throwNullValueException(static::GENDER);
        }

        return $this->gender;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGender()
    {
        $this->assertPropertyIsSet(self::GENDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module 
     *
     * @param string|null $lastName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastNameOrFail($lastName)
    {
        if ($lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->setLastName($lastName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastNameOrFail()
    {
        if ($this->lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->lastName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->modifiedProperties[self::PASSWORD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module 
     *
     * @param string|null $password
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordOrFail($password)
    {
        if ($password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->setPassword($password);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPasswordOrFail()
    {
        if ($this->password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->password;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePassword()
    {
        $this->assertPropertyIsSet(self::PASSWORD);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->modifiedProperties[self::PHONE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module 
     *
     * @param string|null $phone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPhoneOrFail($phone)
    {
        if ($phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->setPhone($phone);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPhoneOrFail()
    {
        if ($this->phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->phone;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePhone()
    {
        $this->assertPropertyIsSet(self::PHONE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $registered
     *
     * @return $this
     */
    public function setRegistered($registered)
    {
        $this->registered = $registered;
        $this->modifiedProperties[self::REGISTERED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * @module 
     *
     * @param string|null $registered
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegisteredOrFail($registered)
    {
        if ($registered === null) {
            $this->throwNullValueException(static::REGISTERED);
        }

        return $this->setRegistered($registered);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRegisteredOrFail()
    {
        if ($this->registered === null) {
            $this->throwNullValueException(static::REGISTERED);
        }

        return $this->registered;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRegistered()
    {
        $this->assertPropertyIsSet(self::REGISTERED);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $registrationKey
     *
     * @return $this
     */
    public function setRegistrationKey($registrationKey)
    {
        $this->registrationKey = $registrationKey;
        $this->modifiedProperties[self::REGISTRATION_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getRegistrationKey()
    {
        return $this->registrationKey;
    }

    /**
     * @module 
     *
     * @param string|null $registrationKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegistrationKeyOrFail($registrationKey)
    {
        if ($registrationKey === null) {
            $this->throwNullValueException(static::REGISTRATION_KEY);
        }

        return $this->setRegistrationKey($registrationKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRegistrationKeyOrFail()
    {
        if ($this->registrationKey === null) {
            $this->throwNullValueException(static::REGISTRATION_KEY);
        }

        return $this->registrationKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRegistrationKey()
    {
        $this->assertPropertyIsSet(self::REGISTRATION_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $restorePasswordDate
     *
     * @return $this
     */
    public function setRestorePasswordDate($restorePasswordDate)
    {
        $this->restorePasswordDate = $restorePasswordDate;
        $this->modifiedProperties[self::RESTORE_PASSWORD_DATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getRestorePasswordDate()
    {
        return $this->restorePasswordDate;
    }

    /**
     * @module 
     *
     * @param string|null $restorePasswordDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRestorePasswordDateOrFail($restorePasswordDate)
    {
        if ($restorePasswordDate === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_DATE);
        }

        return $this->setRestorePasswordDate($restorePasswordDate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRestorePasswordDateOrFail()
    {
        if ($this->restorePasswordDate === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_DATE);
        }

        return $this->restorePasswordDate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRestorePasswordDate()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_DATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $restorePasswordKey
     *
     * @return $this
     */
    public function setRestorePasswordKey($restorePasswordKey)
    {
        $this->restorePasswordKey = $restorePasswordKey;
        $this->modifiedProperties[self::RESTORE_PASSWORD_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getRestorePasswordKey()
    {
        return $this->restorePasswordKey;
    }

    /**
     * @module 
     *
     * @param string|null $restorePasswordKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRestorePasswordKeyOrFail($restorePasswordKey)
    {
        if ($restorePasswordKey === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY);
        }

        return $this->setRestorePasswordKey($restorePasswordKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRestorePasswordKeyOrFail()
    {
        if ($this->restorePasswordKey === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY);
        }

        return $this->restorePasswordKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRestorePasswordKey()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        $this->modifiedProperties[self::SALUTATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module 
     *
     * @param string|null $salutation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalutationOrFail($salutation)
    {
        if ($salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->setSalutation($salutation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalutationOrFail()
    {
        if ($this->salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->salutation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalutation()
    {
        $this->assertPropertyIsSet(self::SALUTATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer|null $spyUser
     *
     * @return $this
     */
    public function setSpyUser(SpyUserEntityTransfer $spyUser = null)
    {
        $this->spyUser = $spyUser;
        $this->modifiedProperties[self::SPY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    public function getSpyUser()
    {
        return $this->spyUser;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer $spyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyUserOrFail(SpyUserEntityTransfer $spyUser)
    {
        return $this->setSpyUser($spyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer
     */
    public function getSpyUserOrFail()
    {
        if ($this->spyUser === null) {
            $this->throwNullValueException(static::SPY_USER);
        }

        return $this->spyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUser()
    {
        $this->assertPropertyIsSet(self::SPY_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer|null $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(SpyCustomerAddressEntityTransfer $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer $billingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingAddressOrFail(SpyCustomerAddressEntityTransfer $billingAddress)
    {
        return $this->setBillingAddress($billingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer
     */
    public function getBillingAddressOrFail()
    {
        if ($this->billingAddress === null) {
            $this->throwNullValueException(static::BILLING_ADDRESS);
        }

        return $this->billingAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingAddress()
    {
        $this->assertPropertyIsSet(self::BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(SpyCustomerAddressEntityTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(SpyCustomerAddressEntityTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(SpyLocaleEntityTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(SpyLocaleEntityTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCustomerGroupToCustomerEntityTransfer[] $spyCustomerGroupToCustomers
     *
     * @return $this
     */
    public function setSpyCustomerGroupToCustomers(ArrayObject $spyCustomerGroupToCustomers)
    {
        $this->spyCustomerGroupToCustomers = $spyCustomerGroupToCustomers;
        $this->modifiedProperties[self::SPY_CUSTOMER_GROUP_TO_CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCustomerGroupToCustomerEntityTransfer[]
     */
    public function getSpyCustomerGroupToCustomers()
    {
        return $this->spyCustomerGroupToCustomers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerGroupToCustomerEntityTransfer $spyCustomerGroupToCustomers
     *
     * @return $this
     */
    public function addSpyCustomerGroupToCustomers(SpyCustomerGroupToCustomerEntityTransfer $spyCustomerGroupToCustomers)
    {
        $this->spyCustomerGroupToCustomers[] = $spyCustomerGroupToCustomers;
        $this->modifiedProperties[self::SPY_CUSTOMER_GROUP_TO_CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomerGroupToCustomers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMER_GROUP_TO_CUSTOMERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserEntityTransfer[] $spyCompanyUsers
     *
     * @return $this
     */
    public function setSpyCompanyUsers(ArrayObject $spyCompanyUsers)
    {
        $this->spyCompanyUsers = $spyCompanyUsers;
        $this->modifiedProperties[self::SPY_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserEntityTransfer[]
     */
    public function getSpyCompanyUsers()
    {
        return $this->spyCompanyUsers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer $spyCompanyUsers
     *
     * @return $this
     */
    public function addSpyCompanyUsers(SpyCompanyUserEntityTransfer $spyCompanyUsers)
    {
        $this->spyCompanyUsers[] = $spyCompanyUsers;
        $this->modifiedProperties[self::SPY_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_USERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[] $spyCustomerAddresses
     *
     * @return $this
     */
    public function setSpyCustomerAddresses(ArrayObject $spyCustomerAddresses)
    {
        $this->spyCustomerAddresses = $spyCustomerAddresses;
        $this->modifiedProperties[self::SPY_CUSTOMER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[]
     */
    public function getSpyCustomerAddresses()
    {
        return $this->spyCustomerAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer $spyCustomerAddresses
     *
     * @return $this
     */
    public function addSpyCustomerAddresses(SpyCustomerAddressEntityTransfer $spyCustomerAddresses)
    {
        $this->spyCustomerAddresses[] = $spyCustomerAddresses;
        $this->modifiedProperties[self::SPY_CUSTOMER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomerAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMER_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer[] $spyProductCustomerPermissions
     *
     * @return $this
     */
    public function setSpyProductCustomerPermissions(ArrayObject $spyProductCustomerPermissions)
    {
        $this->spyProductCustomerPermissions = $spyProductCustomerPermissions;
        $this->modifiedProperties[self::SPY_PRODUCT_CUSTOMER_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer[]
     */
    public function getSpyProductCustomerPermissions()
    {
        return $this->spyProductCustomerPermissions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductCustomerPermissionEntityTransfer $spyProductCustomerPermissions
     *
     * @return $this
     */
    public function addSpyProductCustomerPermissions(SpyProductCustomerPermissionEntityTransfer $spyProductCustomerPermissions)
    {
        $this->spyProductCustomerPermissions[] = $spyProductCustomerPermissions;
        $this->modifiedProperties[self::SPY_PRODUCT_CUSTOMER_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductCustomerPermissions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_CUSTOMER_PERMISSIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCommentEntityTransfer[] $spyComments
     *
     * @return $this
     */
    public function setSpyComments(ArrayObject $spyComments)
    {
        $this->spyComments = $spyComments;
        $this->modifiedProperties[self::SPY_COMMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCommentEntityTransfer[]
     */
    public function getSpyComments()
    {
        return $this->spyComments;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentEntityTransfer $spyComments
     *
     * @return $this
     */
    public function addSpyComments(SpyCommentEntityTransfer $spyComments)
    {
        $this->spyComments[] = $spyComments;
        $this->modifiedProperties[self::SPY_COMMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyComments()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMMENTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer[] $spyCustomerNotes
     *
     * @return $this
     */
    public function setSpyCustomerNotes(ArrayObject $spyCustomerNotes)
    {
        $this->spyCustomerNotes = $spyCustomerNotes;
        $this->modifiedProperties[self::SPY_CUSTOMER_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer[]
     */
    public function getSpyCustomerNotes()
    {
        return $this->spyCustomerNotes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer $spyCustomerNotes
     *
     * @return $this
     */
    public function addSpyCustomerNotes(SpyCustomerNoteEntityTransfer $spyCustomerNotes)
    {
        $this->spyCustomerNotes[] = $spyCustomerNotes;
        $this->modifiedProperties[self::SPY_CUSTOMER_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomerNotes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMER_NOTES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer[] $spyNewsletterSubscribers
     *
     * @return $this
     */
    public function setSpyNewsletterSubscribers(ArrayObject $spyNewsletterSubscribers)
    {
        $this->spyNewsletterSubscribers = $spyNewsletterSubscribers;
        $this->modifiedProperties[self::SPY_NEWSLETTER_SUBSCRIBERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer[]
     */
    public function getSpyNewsletterSubscribers()
    {
        return $this->spyNewsletterSubscribers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer $spyNewsletterSubscribers
     *
     * @return $this
     */
    public function addSpyNewsletterSubscribers(SpyNewsletterSubscriberEntityTransfer $spyNewsletterSubscribers)
    {
        $this->spyNewsletterSubscribers[] = $spyNewsletterSubscribers;
        $this->modifiedProperties[self::SPY_NEWSLETTER_SUBSCRIBERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNewsletterSubscribers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_NEWSLETTER_SUBSCRIBERS);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'idCustomer':
                case 'fkLocale':
                case 'fkUser':
                case 'anonymizedAt':
                case 'company':
                case 'customerReference':
                case 'dateOfBirth':
                case 'defaultBillingAddress':
                case 'defaultShippingAddress':
                case 'email':
                case 'firstName':
                case 'gender':
                case 'lastName':
                case 'password':
                case 'phone':
                case 'registered':
                case 'registrationKey':
                case 'restorePasswordDate':
                case 'restorePasswordKey':
                case 'salutation':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyUser':
                case 'billingAddress':
                case 'shippingAddress':
                case 'locale':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCustomerGroupToCustomers':
                case 'spyCompanyUsers':
                case 'spyCustomerAddresses':
                case 'spyProductCustomerPermissions':
                case 'spyComments':
                case 'spyCustomerNotes':
                case 'spyNewsletterSubscribers':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'idCustomer':
                case 'fkLocale':
                case 'fkUser':
                case 'anonymizedAt':
                case 'company':
                case 'customerReference':
                case 'dateOfBirth':
                case 'defaultBillingAddress':
                case 'defaultShippingAddress':
                case 'email':
                case 'firstName':
                case 'gender':
                case 'lastName':
                case 'password':
                case 'phone':
                case 'registered':
                case 'registrationKey':
                case 'restorePasswordDate':
                case 'restorePasswordKey':
                case 'salutation':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUser':
                case 'billingAddress':
                case 'shippingAddress':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCustomerGroupToCustomers':
                case 'spyCompanyUsers':
                case 'spyCustomerAddresses':
                case 'spyProductCustomerPermissions':
                case 'spyComments':
                case 'spyCustomerNotes':
                case 'spyNewsletterSubscribers':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'idCustomer':
                case 'fkLocale':
                case 'fkUser':
                case 'anonymizedAt':
                case 'company':
                case 'customerReference':
                case 'dateOfBirth':
                case 'defaultBillingAddress':
                case 'defaultShippingAddress':
                case 'email':
                case 'firstName':
                case 'gender':
                case 'lastName':
                case 'password':
                case 'phone':
                case 'registered':
                case 'registrationKey':
                case 'restorePasswordDate':
                case 'restorePasswordKey':
                case 'salutation':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUser':
                case 'billingAddress':
                case 'shippingAddress':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCustomerGroupToCustomers':
                case 'spyCompanyUsers':
                case 'spyCustomerAddresses':
                case 'spyProductCustomerPermissions':
                case 'spyComments':
                case 'spyCustomerNotes':
                case 'spyNewsletterSubscribers':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
        $this->spyCustomerGroupToCustomers = $this->spyCustomerGroupToCustomers ?: new ArrayObject();
        $this->spyCompanyUsers = $this->spyCompanyUsers ?: new ArrayObject();
        $this->spyCustomerAddresses = $this->spyCustomerAddresses ?: new ArrayObject();
        $this->spyProductCustomerPermissions = $this->spyProductCustomerPermissions ?: new ArrayObject();
        $this->spyComments = $this->spyComments ?: new ArrayObject();
        $this->spyCustomerNotes = $this->spyCustomerNotes ?: new ArrayObject();
        $this->spyNewsletterSubscribers = $this->spyNewsletterSubscribers ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCustomer' => $this->idCustomer,
            'fkLocale' => $this->fkLocale,
            'fkUser' => $this->fkUser,
            'anonymizedAt' => $this->anonymizedAt,
            'company' => $this->company,
            'customerReference' => $this->customerReference,
            'dateOfBirth' => $this->dateOfBirth,
            'defaultBillingAddress' => $this->defaultBillingAddress,
            'defaultShippingAddress' => $this->defaultShippingAddress,
            'email' => $this->email,
            'firstName' => $this->firstName,
            'gender' => $this->gender,
            'lastName' => $this->lastName,
            'password' => $this->password,
            'phone' => $this->phone,
            'registered' => $this->registered,
            'registrationKey' => $this->registrationKey,
            'restorePasswordDate' => $this->restorePasswordDate,
            'restorePasswordKey' => $this->restorePasswordKey,
            'salutation' => $this->salutation,
            'spyUser' => $this->spyUser,
            'billingAddress' => $this->billingAddress,
            'shippingAddress' => $this->shippingAddress,
            'locale' => $this->locale,
            'spyCustomerGroupToCustomers' => $this->spyCustomerGroupToCustomers,
            'spyCompanyUsers' => $this->spyCompanyUsers,
            'spyCustomerAddresses' => $this->spyCustomerAddresses,
            'spyProductCustomerPermissions' => $this->spyProductCustomerPermissions,
            'spyComments' => $this->spyComments,
            'spyCustomerNotes' => $this->spyCustomerNotes,
            'spyNewsletterSubscribers' => $this->spyNewsletterSubscribers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_customer' => $this->idCustomer,
            'fk_locale' => $this->fkLocale,
            'fk_user' => $this->fkUser,
            'anonymized_at' => $this->anonymizedAt,
            'company' => $this->company,
            'customer_reference' => $this->customerReference,
            'date_of_birth' => $this->dateOfBirth,
            'default_billing_address' => $this->defaultBillingAddress,
            'default_shipping_address' => $this->defaultShippingAddress,
            'email' => $this->email,
            'first_name' => $this->firstName,
            'gender' => $this->gender,
            'last_name' => $this->lastName,
            'password' => $this->password,
            'phone' => $this->phone,
            'registered' => $this->registered,
            'registration_key' => $this->registrationKey,
            'restore_password_date' => $this->restorePasswordDate,
            'restore_password_key' => $this->restorePasswordKey,
            'salutation' => $this->salutation,
            'spy_user' => $this->spyUser,
            'billing_address' => $this->billingAddress,
            'shipping_address' => $this->shippingAddress,
            'locale' => $this->locale,
            'spy_customer_group_to_customers' => $this->spyCustomerGroupToCustomers,
            'spy_company_users' => $this->spyCompanyUsers,
            'spy_customer_addresses' => $this->spyCustomerAddresses,
            'spy_product_customer_permissions' => $this->spyProductCustomerPermissions,
            'spy_comments' => $this->spyComments,
            'spy_customer_notes' => $this->spyCustomerNotes,
            'spy_newsletter_subscribers' => $this->spyNewsletterSubscribers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_customer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, false) : $this->idCustomer,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_user' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, false) : $this->fkUser,
            'anonymized_at' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, false) : $this->anonymizedAt,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'date_of_birth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, false) : $this->dateOfBirth,
            'default_billing_address' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, false) : $this->defaultBillingAddress,
            'default_shipping_address' => $this->defaultShippingAddress instanceof AbstractTransfer ? $this->defaultShippingAddress->toArray(true, false) : $this->defaultShippingAddress,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'gender' => $this->gender instanceof AbstractTransfer ? $this->gender->toArray(true, false) : $this->gender,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'registered' => $this->registered instanceof AbstractTransfer ? $this->registered->toArray(true, false) : $this->registered,
            'registration_key' => $this->registrationKey instanceof AbstractTransfer ? $this->registrationKey->toArray(true, false) : $this->registrationKey,
            'restore_password_date' => $this->restorePasswordDate instanceof AbstractTransfer ? $this->restorePasswordDate->toArray(true, false) : $this->restorePasswordDate,
            'restore_password_key' => $this->restorePasswordKey instanceof AbstractTransfer ? $this->restorePasswordKey->toArray(true, false) : $this->restorePasswordKey,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'spy_user' => $this->spyUser instanceof AbstractTransfer ? $this->spyUser->toArray(true, false) : $this->spyUser,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'spy_customer_group_to_customers' => $this->spyCustomerGroupToCustomers instanceof AbstractTransfer ? $this->spyCustomerGroupToCustomers->toArray(true, false) : $this->addValuesToCollection($this->spyCustomerGroupToCustomers, true, false),
            'spy_company_users' => $this->spyCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUsers, true, false),
            'spy_customer_addresses' => $this->spyCustomerAddresses instanceof AbstractTransfer ? $this->spyCustomerAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCustomerAddresses, true, false),
            'spy_product_customer_permissions' => $this->spyProductCustomerPermissions instanceof AbstractTransfer ? $this->spyProductCustomerPermissions->toArray(true, false) : $this->addValuesToCollection($this->spyProductCustomerPermissions, true, false),
            'spy_comments' => $this->spyComments instanceof AbstractTransfer ? $this->spyComments->toArray(true, false) : $this->addValuesToCollection($this->spyComments, true, false),
            'spy_customer_notes' => $this->spyCustomerNotes instanceof AbstractTransfer ? $this->spyCustomerNotes->toArray(true, false) : $this->addValuesToCollection($this->spyCustomerNotes, true, false),
            'spy_newsletter_subscribers' => $this->spyNewsletterSubscribers instanceof AbstractTransfer ? $this->spyNewsletterSubscribers->toArray(true, false) : $this->addValuesToCollection($this->spyNewsletterSubscribers, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCustomer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, true) : $this->idCustomer,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkUser' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, true) : $this->fkUser,
            'anonymizedAt' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, true) : $this->anonymizedAt,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'dateOfBirth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, true) : $this->dateOfBirth,
            'defaultBillingAddress' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, true) : $this->defaultBillingAddress,
            'defaultShippingAddress' => $this->defaultShippingAddress instanceof AbstractTransfer ? $this->defaultShippingAddress->toArray(true, true) : $this->defaultShippingAddress,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'gender' => $this->gender instanceof AbstractTransfer ? $this->gender->toArray(true, true) : $this->gender,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'registered' => $this->registered instanceof AbstractTransfer ? $this->registered->toArray(true, true) : $this->registered,
            'registrationKey' => $this->registrationKey instanceof AbstractTransfer ? $this->registrationKey->toArray(true, true) : $this->registrationKey,
            'restorePasswordDate' => $this->restorePasswordDate instanceof AbstractTransfer ? $this->restorePasswordDate->toArray(true, true) : $this->restorePasswordDate,
            'restorePasswordKey' => $this->restorePasswordKey instanceof AbstractTransfer ? $this->restorePasswordKey->toArray(true, true) : $this->restorePasswordKey,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'spyUser' => $this->spyUser instanceof AbstractTransfer ? $this->spyUser->toArray(true, true) : $this->spyUser,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'spyCustomerGroupToCustomers' => $this->spyCustomerGroupToCustomers instanceof AbstractTransfer ? $this->spyCustomerGroupToCustomers->toArray(true, true) : $this->addValuesToCollection($this->spyCustomerGroupToCustomers, true, true),
            'spyCompanyUsers' => $this->spyCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUsers, true, true),
            'spyCustomerAddresses' => $this->spyCustomerAddresses instanceof AbstractTransfer ? $this->spyCustomerAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCustomerAddresses, true, true),
            'spyProductCustomerPermissions' => $this->spyProductCustomerPermissions instanceof AbstractTransfer ? $this->spyProductCustomerPermissions->toArray(true, true) : $this->addValuesToCollection($this->spyProductCustomerPermissions, true, true),
            'spyComments' => $this->spyComments instanceof AbstractTransfer ? $this->spyComments->toArray(true, true) : $this->addValuesToCollection($this->spyComments, true, true),
            'spyCustomerNotes' => $this->spyCustomerNotes instanceof AbstractTransfer ? $this->spyCustomerNotes->toArray(true, true) : $this->addValuesToCollection($this->spyCustomerNotes, true, true),
            'spyNewsletterSubscribers' => $this->spyNewsletterSubscribers instanceof AbstractTransfer ? $this->spyNewsletterSubscribers->toArray(true, true) : $this->addValuesToCollection($this->spyNewsletterSubscribers, true, true),
        ];
    }
}
